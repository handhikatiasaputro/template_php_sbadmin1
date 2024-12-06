<?php
include '../../inc/header.php';
include '../../inc/sidebar.php';
?>

<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid">
            <h1 class="mt-4">Form Tambah Arsip</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
                <li class="breadcrumb-item active">Form Vertical</li>
            </ol>
            <div class="card mb-4">
                <div class="card-body">
                    <form>
                        <!-- Nama Lengkap -->
                        <div class="form-group">
                            <label for="kode">Kode Arsip</label>
                            <input type="text" class="form-control" id="kode">
                        </div>

                        <!-- Email Address -->
                        <div class="form-group">
                            <label for="nama_arsip">Nama Arsip</label>
                            <input type="text" class="form-control" id="nama_arsip">
                        </div>

                        <div class="form-group">
                            <label for="kategori">Kategori</label>
                            <input type="kategori" class="form-control" id="kategori">
                        </div>
                        <div class="form-group">
                            <label for="keterangan">Keterangan</label>
                            <input type="keterangan" class="form-control" id="keterangan">
                        </div>
                        <div class="form-group">
                                        <label for="fileUpload">File</label>
                                        <input type="file" class="form-control-file" id="fileUpload">
                                    </div>

                        <button type="submit" class="btn btn-primary">Kirim</button>
                        <a href="arsip.php" class="btn btn-secondary">Kembali</a>
                </div>
            </div>
    </main>

    <?php
    include '../../inc/footer.php';
    ?>