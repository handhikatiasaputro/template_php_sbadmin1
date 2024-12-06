<?php
include __DIR__.'/../../inc/header.php';
include __DIR__.'/../../inc/sidebar.php';
?>

<div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">
                        <h1 class="mt-4">Data Kategori</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="../index.php">Dashboard</a></li>
                            <li class="breadcrumb-item active">Tables</li>
                        </ol>
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table mr-1"></i>
                                DataTable Example

                                <a href="tambah_kategori.php" class="btn btn-primary float-right"><i class="fas fa-plus mr-2"></i>Tambah Kategori</a>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Waktu Upload</th>
                                                <th>User</th>
                                                <th>Arsip yang sudah di unduh</th>
                                            </tr>
                                        </thead>
                                        <tfoot>
                                            <tr>
                                                <th>No</th>
                                                <th>Waktu Upload</th>
                                                <th>User</th>
                                                <th>Arsip yang sudah di unduh</th>
                                            </tr>
                                        </tfoot>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>05:12-2024 09:58</td>
                                                <td>Dhika</td>
                                                <td><a href="#">sudah di unduh</a></td>
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