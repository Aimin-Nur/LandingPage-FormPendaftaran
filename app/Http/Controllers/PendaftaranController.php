<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pendaftaran;
use App\Models\Konfirmasi;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Mail;
use App\Mail\KonfirmasiPendaftaran;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use App\Mail\PemberitahuanPendaftaran;
use App\Mail\NotifikasiValidasiPembayaran;

class PendaftaranController extends Controller
{
    public function tambahPendaftaran(Request $request)
    {
        // Validasi data yang diunggah oleh pengguna
        $validator = Validator::make($request->all(), [
            'nama_lengkap' => 'required',
            'email' => 'required|email',
            'hp_ortu' => 'required',
            'bukti_tf' => 'required|image|mimes:jpeg,png,jpg|max:5000',
        ], [
            'nama_lengkap.required' => 'Kolom Nama Lengkap wajib diisi.',
            'email.required' => 'Kolom Email wajib diisi.',
            'email.email' => 'Format Email tidak valid.',
            'hp_ortu.required' => 'Kolom Nomor Hp Orang Tua Santri wajib diisi.',
            'bukti_tf.required' => 'File Bukti Pembayaran wajib diunggah.',
            'bukti_tf.image' => 'File yang diunggah harus berupa gambar.',
            'bukti_tf.mimes' => 'File Bukti Pembayaran harus berformat jpeg, png, atau jpg.',
            'bukti_tf.max' => 'Ukuran file Bukti Pembayaran tidak boleh lebih dari 5 MB.',
        ]);

        if ($validator->fails()) {
            return redirect('/tf')
                ->withErrors($validator)
                ->withInput();
        }

        // Simpan file bukti pembayaran ke direktori Storage
        $buktiPembayaranPath = $request->file('bukti_tf')->store('public/uploads/bukti_pembayaran');

        // Simpan data pendaftaran ke database
        $pendaftaran = new Konfirmasi;
        $pendaftaran->nama_lengkap = $request->input('nama_lengkap');
        $pendaftaran->email = $request->input('email');
        $pendaftaran->hp_ortu = $request->input('hp_ortu');
        $pendaftaran->bukti_tf = $buktiPembayaranPath;
        $pendaftaran->status = 'Menunggu Validasi'; // Set status awal
        $mailAdmin = 'aiminnur02@gmail.com';

        $pendaftaran->save();

        try {
            // Kirim email pemberitahuan ke admin
            Mail::to($mailAdmin)->send(new PemberitahuanPendaftaran($pendaftaran));
        } catch (Swift_TransportException $e) {
            // Menangani kesalahan pengiriman email ke admin
            return redirect('/info-sukses')->with('error', 'Pengiriman email ke admin gagal: ' . $e->getMessage());
        }

        try {
            // Kirim email konfirmasi ke calon santri
            Mail::to($request->input('email'))->send(new KonfirmasiPendaftaran($pendaftaran));
            return redirect('/info-sukses')->with('success', 'Pendaftaran berhasil! Silakan cek email Anda untuk konfirmasi.');
        } catch (Swift_TransportException $e) {
            // Menangani kesalahan pengiriman email ke calon santri
            return redirect('/info-sukses')->with('error', 'Pengiriman email ke calon santri gagal: ' . $e->getMessage());
        }

        return redirect('/info-sukses')->with('success', 'Pendaftaran berhasil! Silakan cek email Anda untuk konfirmasi.');
    }

    public function validasiPembayaran(Request $request, $id)
    {
        // Cari pendaftaran berdasarkan ID
        $pendaftaran = Konfirmasi::where('id', $id)->first();

        if (!$pendaftaran) {
            return back()->with('error', 'Pendaftaran tidak ditemukan.');
        }

        // Ubah status menjadi "Tervalidasi"
        $pendaftaran->status = 'Tervalidasi';
        $pendaftaran->save();

        // Kirim email pemberitahuan
        Mail::to($pendaftaran->email)->send(new NotifikasiValidasiPembayaran($pendaftaran));

        return back()->with('message', 'Pembayaran telah divalidasi dan pemberitahuan telah dikirimkan.');
    }


    public function downloadBerkasPembayaran($id)
    {
        // Fetch the data based on the $id parameter (assuming $id is the primary key)
        $konfirmasi = DB::table('konfirmasi')->get();
        // Mengambil data sebagai satu baris data
        $dataKonfirmasi = DB::table('konfirmasi')->where('id', $id)->first();

        if (!$dataKonfirmasi) {
            return redirect()->back()->with('error', 'Data not found.');
        }

        // Define the file paths
        $buktiTf = storage_path('app/' . $dataKonfirmasi->bukti_tf);

        // Create a zip file
        $zip = new \ZipArchive();
        $zipFileName = 'Bukti-Pembayaran-' . $dataKonfirmasi->nama_lengkap . '.zip';
        if ($zip->open($zipFileName, \ZipArchive::CREATE | \ZipArchive::OVERWRITE)) {
            $zip->addFile($buktiTf, 'bukti-pembayaran.jpg');
            $zip->close();

            // Set appropriate headers for download
            header('Content-Type: application/zip');
            header('Content-Disposition: attachment; filename="' . $zipFileName . '"');
            header('Content-Length: ' . filesize($zipFileName));

            // Read and output the zip file
            readfile($zipFileName);

            // Clean up (delete) the temporary zip file
            unlink($zipFileName);

            return;
        }

        return redirect()->back()->with('error', 'Failed to create zip file.');
    }

}

