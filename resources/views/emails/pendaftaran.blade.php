<!DOCTYPE html>
<html>
<head>
    <title>Konfirmasi Pendaftaran</title>
</head>
<body>
    <h1>Santri baru saja melakukan konfirmasi pembayaran</h1>
    <p>Berikut adalah data calon santri yang mendaftara, Silahkan lakukan validasi konfirmasi pembayaran:</p>
    <ul>
        <li><strong>Nama Lengkap:</strong> {{ $pendaftaran->nama_lengkap }}</li>
        <li><strong>Email:</strong> {{ $pendaftaran->email }}</li>
        <li><strong>Nomor HP Orang Tua:</strong> {{ $pendaftaran->hp_ortu }}</li>
        <!-- Anda dapat menambahkan informasi lain sesuai kebutuhan -->
    </ul>

    <p>Silahkan untuk segera mengecek halaman admin untuk melakukan validasi pembayaran biaya pendaftaran santri baru</p>

    <p>Terima kasih atas Perhatiannya.</p>
</body>
</html>
