<?php
include '../../inc/header.php';
include '../../inc/sidebar.php';
?>

<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid">
            <h1 class="mt-4">Form Tambah Kategori</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
                <li class="breadcrumb-item active">Form Vertical</li>
            </ol>
            <div class="card mb-4">
                <div class="card-body">
                    <form>
                        <div class="form-group">
                            <label for="nama">Nama</label>
                            <input type="text" class="form-control" id="nama">
                        </div>
                       
                        <div class="form-group">
                            <label for="deskripsi">Keterangan</label>
                            <input type="email" class="form-control" id="deskripsi">
                        </div>
                        
                        <div class="form-group">
                                        <label for="password">Password</label>
                                        <input type="password" class="form-control" id="password">
                                    </div>

                        <button type="submit" class="btn btn-primary">Kirim</button>
                        <a href="kategori.php" class="btn btn-secondary">Kembali</a>
                </div>
            </div>
    </main>

    <?php
    include '../../inc/footer.php';
    ?>