<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;


class AdminController extends Controller
{
    public function login()
    {
        return view('login');
    }

    public function prosesLogin (Request $request)
    {
        if (Auth::guard('bos')->attempt([
            'username' => $request->username,
            'password' => $request->password,
        ])) {
            return redirect('/adminPage');
        } else {
            return redirect('/login')->with(['warning' => 'Kata Sandi tidak terdaftar.']);
        }

    }

    public function adminPage()
    {
        $totalPendaftaran = DB::table('pendaftaran')->count();
        $ikhwan = DB::table('pendaftaran')->where('gender', 'Ikhwan')->count();
        $akhwat = DB::table('pendaftaran')->where('gender', 'Akhwat')->count();
        $dataPendaftaran = DB::table('pendaftaran')->get();
        // Periksa apakah $dataPendaftaran memiliki data
            if ($dataPendaftaran->isEmpty()) {
            return view('adminPage')->with('dataPendaftaran', null);
        }

        // Ada data, kirimkan ke tampilan
            return view('adminPage', compact('dataPendaftaran', 'totalPendaftaran', 'ikhwan', 'akhwat'));
    }

    public function downloadBerkas($id)
    {
        // Fetch the data based on the $id parameter (assuming $id is the primary key)
        $pendaftaran = DB::table('pendaftaran')->get();
        // Mengambil data sebagai satu baris data
        $dataPendaftaran = DB::table('pendaftaran')->where('id', $id)->first();

        if (!$dataPendaftaran) {
            return redirect()->back()->with('error', 'Data not found.');
        }

        // Define the file paths
        $fotoSantriPath = storage_path('app/' . $dataPendaftaran->foto);
        $ijazahSmaPath = storage_path('app/' . $dataPendaftaran->ijazah);
        $akteLahirPath = storage_path('app/' . $dataPendaftaran->akte_lahir);
        $suratKesehatanPath = storage_path('app/' . $dataPendaftaran->surat_kesehatan);
        $kartu_keluargaPath = storage_path('app/' . $dataPendaftaran->kartu_keluarga);
        $raporPath = storage_path('app/' . $dataPendaftaran->rapor);

        // Create a zip file
        $zip = new \ZipArchive();
        $zipFileName = 'berkas-' . $dataPendaftaran->id . '.zip';
        if ($zip->open($zipFileName, \ZipArchive::CREATE | \ZipArchive::OVERWRITE)) {
            $zip->addFile($fotoSantriPath, 'foto_santri.jpg');
            $zip->addFile($ijazahSmaPath, 'ijazah_sma.pdf');
            $zip->addFile($akteLahirPath, 'akte_lahir.pdf');
            $zip->addFile($suratKesehatanPath, 'surat_kesehatan.pdf');
            $zip->addFile($kartu_keluargaPath, 'kartukeluarga.pdf');
            $zip->addFile($raporPath, 'rapor.pdf');
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


        public function logout()
    {
        Auth::guard('bos')->logout();
        return redirect('/login')->with('success', 'Anda berhasil logout.');
    }



}
