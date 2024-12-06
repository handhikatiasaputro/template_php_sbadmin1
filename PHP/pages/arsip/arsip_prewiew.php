<?php
include '../../inc/header.php';
include '../../inc/sidebar.php';
?>

<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid">
            <h1 class="mt-4">Prewiew Arsip</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
                <li class="breadcrumb-item active">Arsip</li>
            </ol>
            <div class="card mb-6">
                <div class="card-header">
                  <a href="arsip.php" class="btn btn-primary"><i class="fas fa-arrow-left"></i> Kembali</a>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <td class="font-weight-bold">Kode Arsip</td>
                                        <td> MN-09</td>
                                    </tr>
                                    <tr>
                                        <td class="font-weight-bold">Waktu Upload</td>
                                        <td>05:12-2024 09:58</td>
                                    </tr>
                                    <tr>
                                        <td class="font-weight-bold">Nama File</td>
                                        <td>Surat Kesehatan</td>
                                    </tr>
                                    <tr>
                                        <td class="font-weight-bold">Kategori</td>
                                        <td>Surat Kesehatan</td>
                                    </tr>
                                    <tr>
                                        <td class="font-weight-bold">Jenis File</td>
                                        <td>pdf</td>
                                    </tr>
                                    <tr>
                                        <td class="font-weight-bold">Petugas Upload</td>
                                        <td>Dhika</td>
                                    </tr>
                                    <tr>
                                        <td class="font-weight-bold">Keterangan</td>
                                        <td>Contoh Surat Kesehatan</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="col-md-6">
                            <iframe src="<?php echo BASE_URL;?>/assets/file/CARA KONFIGURASI MIKROTIK.pdf" width="100%" height="500px"></iframe>
                        </div>
                    </div>
                </div>
            </div>
    </main>

    <?php
    include '../../inc/footer.php';
    ?>