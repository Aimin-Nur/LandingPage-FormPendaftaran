<!DOCTYPE html>
<html>
<head>
    <title>Konfirmasi Pendaftaran</title>
</head>
<body>
    <h1>Selamat! Pendaftaran Anda berhasil.</h1>
    <p>Terima kasih telah mendaftar di Pondok Pesantren Islam Al-Irsyad Tengaran Gorontalo. Ini adalah konfirmasi bahwa data pendaftaran Anda telah diterima. Berikut detail pendaftaran Anda:</p>

    <ul>
        <li><strong>Nama Lengkap:</strong> {{ $pendaftaran->nama_lengkap }}</li>
        <li><strong>Email:</strong> {{ $pendaftaran->email }}</li>
        <li><strong>Nomor HP Orang Tua:</strong> {{ $pendaftaran->hp_ortu }}</li>
        <!-- Anda dapat menambahkan informasi lain sesuai kebutuhan -->
    </ul>

    <p>Tim kami akan segera memproses pendaftaran Anda. Jika ada pertanyaan atau keperluan tambahan, jangan ragu untuk menghubungi kami.</p>

    <p>Terima kasih dan selamat bergabung di Sekolah Kami.</p>
</body>
</html>
