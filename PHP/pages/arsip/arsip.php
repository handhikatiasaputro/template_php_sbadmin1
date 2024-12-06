<?php
include __DIR__.'/../../inc/header.php';
include __DIR__.'/../../inc/sidebar.php';
?>

<div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">
                        <h1 class="mt-4">Data Arsip</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="../index.php">Dashboard</a></li>
                            <li class="breadcrumb-item active">Data Arsip</li>
                        </ol>
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table mr-1"></i>
                                Data Arsip

                                <a href="tambah_arsip.php" class="btn btn-primary float-right"><i class="fas fa-plus mr-2"></i>Tambah Arsip</a>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Waktu Upload</th>
                                                <th>Arsip</th>
                                                <th>Kategori</th>
                                                <th>Petugas</th>
                                                <th>keterangan</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tfoot>
                                            <tr>
                                                <th>No</th>
                                                <th>Waktu Upload</th>
                                                <th>Arsip</th>
                                                <th>Kategori</th>
                                                <th>Petugas</th>
                                                <th>keterangan</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </tfoot>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>05:12-2024 09:58</td>
                                                <td>
    
                                                        Surat Kesehatan.pdf
                                                </td>
                                                <td>Surat Kesehatan</td>
                                                <td>Dhika</td>
                                                <td>Contoh Surat Kesehatan</td>
                                               
                                                <td>
                                                    <!-- Grup Tombol -->
                                                    <div class="btn-group mb-3" role="group" aria-label="Button group">
                                                        <a href="" class="btn btn-outline-secondary">
                                                            <i class="fas fa-download"></i>
                                                        </a>
                                                        <a href="arsip_prewiew.php" class="btn btn-outline-secondary">
                                                            <i class="fas fa-search"></i> Preview
                                                        </a>
                                                        <a href="edit_arsip.php" class="btn btn-primary">
                                                            <i class="fas fa-edit"></i>
                                                        </a>
                                                        <a href="" class="btn btn-danger">
                                                            <i class="fas fa-trash-alt"></i>
                                                        </a>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>

<?php
include __DIR__.'/../../inc/footer.php';
?>