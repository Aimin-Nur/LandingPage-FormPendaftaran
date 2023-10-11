<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Storage;

class formPendaftaran extends Controller
{
    public function simpanData(Request $request)
    {
        // Validasi data yang diunggah oleh pengguna
        $validator = Validator::make($request->all(), [
            'foto' => 'required|image|mimes:jpeg,png,jpg|max:5000', // Foto Santri: hanya gambar (jpeg, png, jpg), maksimal 5 MB
            'bukti_tf' => 'required|image|mimes:jpeg,png,jpg|max:5000',
            'ijazah' => 'required|mimes:pdf|max:5000', // Ijazah SMA: hanya PDF, maksimal 5 MB
            'rapor' => 'required|mimes:pdf|max:5000', // Rapor SMA: hanya PDF, maksimal 5 MB
            'kesehatan' => 'required|mimes:pdf|max:5000',
            'akte_lahir' => 'required|mimes:pdf|max:5000',
            'kk' => 'required|mimes:pdf|max:5000',
            'nama_lengkap' => 'required|',
            'nik' => 'required|',
            'jenis_kelamin' => 'required|',
            'nama_lengkap' => 'required|',
            'tempat_lahir' => 'required|',
            'tgl_lahir' => 'required|',
            'asal_sekolah' => 'required|',
            'email' => 'required|',
            'alamat_lengkap' => 'required|',
            'nama_ayah' => 'required|',
            'nama_ibu' => 'required|',
            'pendidikan_ayah' => 'required|',
            'pendidikan_ibu' => 'required|',
            'pekerjaan_ayah' => 'required|',
            'pekerjaan_ibu' => 'required|',
            'hp_santri' => 'required|',
            'hp_ortu' => 'required|',

        ], [
            'bukti_tf.required' => 'File Bukti Pembayaran wajib diunggah.',
            'bukti_tf.image' => 'File yang diunggah harus berupa gambar.',
            'bukti_tf.mimes' => 'File Bukti Pembayaran harus berformat jpeg, png, atau jpg.',
            'bukti_tf.max' => 'Ukuran file Bukti Pembayaran tidak boleh lebih dari 5 MB.',
            'foto.required' => 'File foto santri wajib diunggah.',
            'foto.image' => 'File yang diunggah harus berupa gambar.',
            'foto.mimes' => 'File foto santri harus berformat jpeg, png, atau jpg.',
            'foto.max' => 'Ukuran file foto santri tidak boleh lebih dari 5 MB.',
            'ijazah.required' => 'File ijazah SMA wajib diunggah.',
            'ijazah.mimes' => 'File ijazah SMA harus berformat PDF.',
            'ijazah.max' => 'Ukuran file ijazah SMA tidak boleh lebih dari 5 MB.',
            'rapor.required' => 'File Rapor 2 Semester Terakhir wajib diunggah.',
            'rapor.mimes' => 'File Rapor harus berformat PDF.',
            'rapor.max' => 'Ukuran file Rapor SMA tidak boleh lebih dari 5 MB.',
            'kesehatan.required' => 'File Surat Kesehatan wajib diunggah.',
            'kesehatan.mimes' => 'File Surat Kesehatan harus berformat PDF.',
            'kesehatan.max' => 'Ukuran file Surat Kesehatan tidak boleh lebih dari 5 MB.',
            'akte_lahir.required' => 'File Akte Kelahiran wajib diunggah.',
            'akte_lahir.mimes' => 'File Akte Kelahiran harus berformat PDF.',
            'akte_lahir.max' => 'Ukuran file Akte Kelahiran tidak boleh lebih dari 5 MB.',
            'kk.required' => 'File Kartu Keluarga wajib diunggah.',
            'kk.mimes' => 'File Kartu Keluagra harus berformat PDF.',
            'kk.max' => 'Ukuran file Kartu Keluarga tidak boleh lebih dari 5 MB.',
            'nama_lengkap.required' => 'Kolom Nama Lengkap Wajib diisi',
            'tempat_lahir.required' => 'Kolom Tempat Lahir Wajib diisi',
            'tgl_lahir.required' => 'Kolom Tanggal Lahir Wajib diisi',
            'asal_sekolah.required' => 'Kolom Asal Sekolah Wajib diisi',
            'email.required' => 'Kolom Email Wajib diisi',
            'alamat_lengkap.required' => 'Kolom Alamat Lengkap Wajib diisi',
            'nama_ayah.required' => 'Kolom Nama Ayah Wajib diisi',
            'nama_ibu.required' => 'Kolom Nama Ibu Wajib diisi',
            'pendidikan_ayah.required' => 'Kolom Pendidikan Ayah Wajib diisi',
            'pendidikan_ibu.required' => 'Kolom Pendidikan Ibu Wajib diisi',
            'pekerjaan_ayah.required' => 'Kolom Pekerjaan Ayah Wajib diisi',
            'pekerjaan_ibu.required' => 'Kolom Pekerjaan Ibu Wajib diisi',
            'hp_santri.required' => 'Kolom Nomor Hp Santri Wajib diisi',
            'hp_ortu.required' => 'Kolom Nomor Hp Orang Tua Wajib diisi',
            'jenis_kelamin.required' => 'Kolom Jenis Kelamin Wajib diisi',
            'nik.required' => 'Kolom Nomor NISN Wajib diisi',
        ]);

        // Jika validasi gagal, kembalikan dengan pesan kesalahan
        if ($validator->fails()) {
            return redirect('/form')
                ->withErrors($validator)
                ->withInput();
        }

        // Jika validasi sukses, lanjutkan dengan menyimpan file dan data lainnya
        // Simpan file foto santri ke direktori Storage
        $namaLengkapSantri = $request->input('nama_lengkap');
        // Hapus karakter yang tidak valid dari nama berkas (misalnya, spasi diganti dengan garis bawah)
        $namaBerkas = preg_replace("/[^a-zA-Z0-9]+/", "_", $namaLengkapSantri);
        $folderPath = "public/uploads/berkas";
        $fotoSantri = $namaBerkas . "." . $request->file('foto')->extension();
        $fotoSantriPath = $request->file('foto')->storeAs($folderPath, $fotoSantri);

        // Simpan file ijazah SMA ke direktori Storage
        $ijazahSmaPath = $request->file('ijazah')->store('public/uploads/berkas/ijazah');

        $suratKesehatan = $request->file('kesehatan')->store('public/uploads/berkas/suratKesehatan');

        $rapor = $request->file('rapor')->store('public/uploads/berkas/rapor');

        $kartuKeluarga = $request->file('kk')->store('public/uploads/berkas/kk');

        $akteLahir = $request->file('akte_lahir')->store('public/uploads/berkas/akte');

        // Simpan data ke database
        $data = [
            'NIK' => $request->nik,
            'nama_lengkap' => $request->nama_lengkap,
            'gender' => $request->jenis_kelamin,
            'tempat_lahir' => $request->tempat_lahir,
            'tanggal_lahir' => $request->tgl_lahir,
            'asal_sekolah' => $request->asal_sekolah,
            'email' => $request->email,
            'alamat_lengkap' => $request->alamat_lengkap,
            'riwayat_penyakit' => $request->riwayat_penyakit,
            'nama_ayah' => $request->nama_ayah,
            'nama_ibu' => $request->nama_ibu,
            'pendidikan_ayah' => $request->pendidikan_ayah,
            'pendidikan_ibu' => $request->pendidikan_ibu,
            'pekerjaan_ayah' => $request->pekerjaan_ayah,
            'pekerjaan_ibu' => $request->pekerjaan_ibu,
            'hp_santri' => $request->hp_santri,
            'hp_ortu' => $request->hp_ortu,
            'foto' => $fotoSantriPath,
            'ijazah' => $ijazahSmaPath,
            'nama_wali' => $request->nama_wali,
            'pendidikan_wali' => $request->pendidikan_wali,
            'alamat_wali' => $request->alamat_wali,
            'hp_wali' => $request->hp_wali,
            'hubungan_wali' => $request->hubungan_wali,
            'pekerjaan_wali' => $request->pekerjaan_wali,
            'kartu_keluarga' => $kartuKeluarga,
            'akte_lahir' => $akteLahir,
            'surat_kesehatan' => $suratKesehatan,
            'rapor' => $rapor,
            'keahlian' => $request->keahlian,
        ];

        $insert = DB::table('pendaftaran')->insert($data);

        // Tampilkan notifikasi bahwa data telah berhasil disimpan
        if ($insert) {
            return redirect('/info-sukses');
        } else {
            return redirect('/form')->with('error', 'Terjadi kesalahan saat menyimpan data.');
        }
    }

    public function skema(Request $request)
    {
        // Validasi data yang diunggah oleh pengguna
        $validator = Validator::make($request->all(), [
            'bukti_tf' => 'required|image|mimes:jpeg,png,jpg|max:5000',

        ], [
            'bukti_tf.required' => 'File Bukti Pembayaran wajib diunggah.',
            'bukti_tf.image' => 'File yang diunggah harus berupa gambar.',
            'bukti_tf.mimes' => 'File Bukti Pembayaran harus berformat jpeg, png, atau jpg.',
            'bukti_tf.max' => 'Ukuran file Bukti Pembayaran tidak boleh lebih dari 5 MB.',
        ]);

        // Jika validasi gagal, kembalikan dengan pesan kesalahan
        if ($validator->fails()) {
            return redirect('/tf')
                ->withErrors($validator)
                ->withInput();
        }

        $bukti_tf = $request->file('bukti_tf')->store('public/uploads/berkas/bukti_tf');
        // Simpan data ke database
        $data = [
            'bukti_tf' => $bukti_tf,
        ];

        $insert = DB::table('pendaftaran')->insert($data);

        // Tampilkan notifikasi bahwa data telah berhasil disimpan
        if ($insert) {
            return view('skema-form', compact('bukti_tf'));
        } else {
            return redirect('/')->with('error', 'Terjadi kesalahan saat menyimpan data.');
        }
    }

    public function skemaInput(Request $request)

    {
        {
            // Validasi data yang diunggah oleh pengguna
            $validator = Validator::make($request->all(), [
                'foto' => 'required|image|mimes:jpeg,png,jpg|max:5000', // Foto Santri: hanya gambar (jpeg, png, jpg), maksimal 5 MB
                'ijazah' => 'required|mimes:pdf|max:5000', // Ijazah SMA: hanya PDF, maksimal 5 MB
                'rapor' => 'required|mimes:pdf|max:5000', // Rapor SMA: hanya PDF, maksimal 5 MB
                'kesehatan' => 'required|mimes:pdf|max:5000',
                'akte_lahir' => 'required|mimes:pdf|max:5000',
                'kk' => 'required|mimes:pdf|max:5000',
                'nama_lengkap' => 'required|',
                'nik' => 'required|',
                'jenis_kelamin' => 'required|',
                'nama_lengkap' => 'required|',
                'tempat_lahir' => 'required|',
                'tgl_lahir' => 'required|',
                'asal_sekolah' => 'required|',
                'email' => 'required|',
                'alamat_lengkap' => 'required|',
                'nama_ayah' => 'required|',
                'nama_ibu' => 'required|',
                'pendidikan_ayah' => 'required|',
                'pendidikan_ibu' => 'required|',
                'pekerjaan_ayah' => 'required|',
                'pekerjaan_ibu' => 'required|',
                'hp_santri' => 'required|',
                'hp_ortu' => 'required|',

            ], [
                'foto.required' => 'File foto santri wajib diunggah.',
                'foto.image' => 'File yang diunggah harus berupa gambar.',
                'foto.mimes' => 'File foto santri harus berformat jpeg, png, atau jpg.',
                'foto.max' => 'Ukuran file foto santri tidak boleh lebih dari 5 MB.',
                'ijazah.required' => 'File ijazah SMA wajib diunggah.',
                'ijazah.mimes' => 'File ijazah SMA harus berformat PDF.',
                'ijazah.max' => 'Ukuran file ijazah SMA tidak boleh lebih dari 5 MB.',
                'rapor.required' => 'File Rapor 2 Semester Terakhir wajib diunggah.',
                'rapor.mimes' => 'File Rapor harus berformat PDF.',
                'rapor.max' => 'Ukuran file Rapor SMA tidak boleh lebih dari 5 MB.',
                'kesehatan.required' => 'File Surat Kesehatan wajib diunggah.',
                'kesehatan.mimes' => 'File Surat Kesehatan harus berformat PDF.',
                'kesehatan.max' => 'Ukuran file Surat Kesehatan tidak boleh lebih dari 5 MB.',
                'akte_lahir.required' => 'File Akte Kelahiran wajib diunggah.',
                'akte_lahir.mimes' => 'File Akte Kelahiran harus berformat PDF.',
                'akte_lahir.max' => 'Ukuran file Akte Kelahiran tidak boleh lebih dari 5 MB.',
                'kk.required' => 'File Kartu Keluarga wajib diunggah.',
                'kk.mimes' => 'File Kartu Keluagra harus berformat PDF.',
                'kk.max' => 'Ukuran file Kartu Keluarga tidak boleh lebih dari 5 MB.',
                'nama_lengkap.required' => 'Kolom Nama Lengkap Wajib diisi',
                'tempat_lahir.required' => 'Kolom Tempat Lahir Wajib diisi',
                'tgl_lahir.required' => 'Kolom Tanggal Lahir Wajib diisi',
                'asal_sekolah.required' => 'Kolom Asal Sekolah Wajib diisi',
                'email.required' => 'Kolom Email Wajib diisi',
                'alamat_lengkap.required' => 'Kolom Alamat Lengkap Wajib diisi',
                'nama_ayah.required' => 'Kolom Nama Ayah Wajib diisi',
                'nama_ibu.required' => 'Kolom Nama Ibu Wajib diisi',
                'pendidikan_ayah.required' => 'Kolom Pendidikan Ayah Wajib diisi',
                'pendidikan_ibu.required' => 'Kolom Pendidikan Ibu Wajib diisi',
                'pekerjaan_ayah.required' => 'Kolom Pekerjaan Ayah Wajib diisi',
                'pekerjaan_ibu.required' => 'Kolom Pekerjaan Ibu Wajib diisi',
                'hp_santri.required' => 'Kolom Nomor Hp Santri Wajib diisi',
                'hp_ortu.required' => 'Kolom Nomor Hp Orang Tua Wajib diisi',
                'jenis_kelamin.required' => 'Kolom Jenis Kelamin Wajib diisi',
                'nik.required' => 'Kolom Nomor NISN Wajib diisi',
            ]);

            // Jika validasi gagal, kembalikan dengan pesan kesalahan
            if ($validator->fails()) {
                return redirect('/form-skema')
                    ->withErrors($validator)
                    ->withInput();
            }

            // Jika validasi sukses, lanjutkan dengan menyimpan file dan data lainnya
            // Simpan file foto santri ke direktori Storage
            $namaLengkapSantri = $request->input('nama_lengkap');
            // Hapus karakter yang tidak valid dari nama berkas (misalnya, spasi diganti dengan garis bawah)
            $namaBerkas = preg_replace("/[^a-zA-Z0-9]+/", "_", $namaLengkapSantri);
            $folderPath = "public/uploads/berkas";
            $fotoSantri = $namaBerkas . "." . $request->file('foto')->extension();
            $fotoSantriPath = $request->file('foto')->storeAs($folderPath, $fotoSantri);

            // Simpan file ijazah SMA ke direktori Storage
            $ijazahSmaPath = $request->file('ijazah')->store('public/uploads/berkas/ijazah');

            $suratKesehatan = $request->file('kesehatan')->store('public/uploads/berkas/suratKesehatan');

            $rapor = $request->file('rapor')->store('public/uploads/berkas/rapor');

            $kartuKeluarga = $request->file('kk')->store('public/uploads/berkas/kk');

            $akteLahir = $request->file('akte_lahir')->store('public/uploads/berkas/akte');

            // Simpan data ke database
            $data = [
                'NIK' => $request->nik,
                'nama_lengkap' => $request->nama_lengkap,
                'gender' => $request->jenis_kelamin,
                'tempat_lahir' => $request->tempat_lahir,
                'tanggal_lahir' => $request->tgl_lahir,
                'asal_sekolah' => $request->asal_sekolah,
                'email' => $request->email,
                'alamat_lengkap' => $request->alamat_lengkap,
                'riwayat_penyakit' => $request->riwayat_penyakit,
                'nama_ayah' => $request->nama_ayah,
                'nama_ibu' => $request->nama_ibu,
                'pendidikan_ayah' => $request->pendidikan_ayah,
                'pendidikan_ibu' => $request->pendidikan_ibu,
                'pekerjaan_ayah' => $request->pekerjaan_ayah,
                'pekerjaan_ibu' => $request->pekerjaan_ibu,
                'hp_santri' => $request->hp_santri,
                'hp_ortu' => $request->hp_ortu,
                'foto' => $fotoSantriPath,
                'ijazah' => $ijazahSmaPath,
                'nama_wali' => $request->nama_wali,
                'pendidikan_wali' => $request->pendidikan_wali,
                'alamat_wali' => $request->alamat_wali,
                'hp_wali' => $request->hp_wali,
                'hubungan_wali' => $request->hubungan_wali,
                'pekerjaan_wali' => $request->pekerjaan_wali,
                'kartu_keluarga' => $kartuKeluarga,
                'akte_lahir' => $akteLahir,
                'surat_kesehatan' => $suratKesehatan,
                'rapor' => $rapor,
                'keahlian' => $request->keahlian,
            ];

            $idSantri = $request->id; // atau gunakan ID santri
            $update = DB::table('pendaftaran')
                ->where('id', $idSantri)
                ->update($data);

            // Tampilkan notifikasi bahwa data telah berhasil disimpan
            if ($update) {
                return redirect('/info-sukses');
            } else {
                return redirect('/form-skema')->with('error', 'Terjadi kesalahan saat menyimpan data.');
            }
        }

    }
}
