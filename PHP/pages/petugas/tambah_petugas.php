<?php
include '../../inc/header.php';
include '../../inc/sidebar.php';
?>

<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid">
            <h1 class="mt-4">Form Tambah Petugas</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
                <li class="breadcrumb-item active">Tambah Petugas</li>
            </ol>
            <div class="card mb-4">
                <div class="card-body">
                    <form>
                        <!-- Nama Lengkap -->
                        <div class="form-group">
                            <label for="nama">Nama</label>
                            <input type="text" class="form-control" id="nama" autofocus>
                        </div>

                        <!-- Email Address -->
                        <div class="form-group">
                            <label for="username">Username</label>
                            <input type="email" class="form-control" id="username">
                        </div>

                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" class="form-control" id="password">
                        </div>
                        <div class="form-group">
                            <label for="fileUpload">Upload File </label>
                            <input type="file" class="form-control-file" id="fileUpload">
                        </div>

                        <button type="submit" class="btn btn-primary">Submit</button>
                        <a href="petugas.php" class="btn btn-link">Kembali</a>
                </div>
            </div>
    </main>

    <?php
    include '../../inc/footer.php';
    ?>