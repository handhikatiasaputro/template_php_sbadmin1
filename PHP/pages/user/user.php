<?php
include __DIR__.'/../../inc/header.php';
include __DIR__.'/../../inc/sidebar.php';
?>

<div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">
                        <h1 class="mt-4">Data User</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="../index.php">Dashboard</a></li>
                            <li class="breadcrumb-item active">Data User</li>
                        </ol>
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table mr-1"></i>
                                Data User

                                <a href="tambah_user.php" class="btn btn-primary float-right"><i class="fas fa-plus mr-2"></i>Tambah User</a>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Foto</th>
                                                <th>Nama</th>
                                                <th>Username</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tfoot>
                                            <tr>
                                                <th>No</th>
                                                <th>Foto</th>
                                                <th>Name</th>
                                                <th>Position</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </tfoot>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td></td>
                                                <td><a href="#"><u>Tiger Nixon</u></a></td>
                                                <td>System Architect</td>
                                                <td>
                                                    <a href="edit_user.php" class="btn btn-secondary"><i class="fas fa-edit"></i></a>
                                                    &nbsp;
                                                    <a href="#" class="btn btn-danger" onclick="return confirm('Apakah anda yakin ingin menghapus ini?');"><i class="fas fa-trash"></i></a>
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