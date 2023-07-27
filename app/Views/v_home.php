<?= $this->extend('layout/v_indexView') ?>

<?= $this->section('content') ?>
<div class="page-heading">
    <h3>Home</h3>
</div>
<div class="page-content">
    <section class="row">
        <div class="col-12 col-lg-9">
            <div class="row">
                <div class="col-6 col-lg-3 col-md-6">
                    <div class="card">
                        <div class="card-body px-4 py-4-5">
                            <div class="row">
                                <div class="col-md-4 col-lg-12 col-xl-12 col-xxl-5 d-flex justify-content-start ">
                                    <div class="stats-icon purple mb-2">
                                        <i class="iconly-boldShow"></i>
                                    </div>
                                </div>
                                <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-7">
                                    <h6 class="text-muted font-semibold">Jurusan</h6>
                                    <h6 class="font-extrabold mb-0">123.456</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-lg-3 col-md-6">
                    <div class="card">
                        <div class="card-body px-4 py-4-5">
                            <div class="row">
                                <div class="col-md-4 col-lg-12 col-xl-12 col-xxl-5 d-flex justify-content-start ">
                                    <div class="stats-icon blue mb-2">
                                        <i class="iconly-boldProfile"></i>
                                    </div>
                                </div>
                                <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-7">
                                    <h6 class="text-muted font-semibold">Fakultas</h6>
                                    <h6 class="font-extrabold mb-0">183.000</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<!-- Table head Jurusan options start -->
<section class="section">
    <div class="row" id="table-head">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Data Jurusan</h4>
                </div>
                <div class="box-header with-border">
                    <a href="/jurusan/create" class="btn btn-primary"> + Tambah Data</a>
                </div>
                <div class="card-content">
                    <!-- table head dark -->
                    <div class="table-responsive">
                        <table class="table mb-0">
                            <thead class="thead-dark">
                                <tr>
                                    <th>NO</th>
                                    <th>Jurusan</th>
                                    <th>Fakultas</th>
                                    <th>gelar</th>
                                    <th>deskripsi</th>
                                    <th>ACTION</th>
                                </tr>
                            </thead>
                            <?php $no = 1 ?>
                            <?php foreach ($prodi as $row) : ?>

                                <tbody>
                                    <tr>
                                        <td><?= $no++; ?></td>
                                        <td class="text-bold-500"><?= $row["prodi"] ?></td>
                                        <td class="text-bold-500"><?= $row["fakultas"] ?></td>
                                        <td><?= $row["gelar"] ?></td>
                                        <td><?= $row["deskripsi"] ?></td>
                                        <td>
                                            <a href="<?= base_url('/jurusan/edit/' . $row['prodi_id']); ?>" class="btn btn-sm btn-info"> edit</a>
                                            <a href="<?= base_url('/jurusan/delete/' . $row['prodi_id']); ?>" class="btn btn-sm btn-danger">delete</a>

                                        </td>
                                    </tr>
                                </tbody>
                            <?php endforeach  ?>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Table head Jurusan options end -->
<!-- Table head Fakultas options start -->
<section class="section">
    <div class="row" id="table-head">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Data Fakultas</h4>
                </div>
                <div class="box-header with-border">
                    <a href="/fakultas/create" class="btn btn-primary"> + Tambah Data</a>
                </div>
                <div class="card-content">
                    <div class="table-responsive">
                        <table class="table mb-0">
                            <thead class="thead-dark">
                                <tr>
                                    <th>NO</th>
                                    <th>Fakultas</th>
                                    <th>Jurusan</th>
                                    <th>Dekan</th>
                                    <th>ACTION</th>
                                </tr>
                            </thead>
                            <?php $no = 1 ?>
                            <?php foreach ($fakultas as $row) : ?>
                                <tbody>
                                    <tr>
                                        <td><?= $no++; ?></td>
                                        <td class="text-bold-500"><?= $row['fakultas'] ?></td>
                                        <td class="text-bold-500"><?= $row['prodi'] ?></td>
                                        <td class="text-bold-500"><?= $row['dekan'] ?></td>
                                        <td>
                                            <a href="<?= base_url('/fakultas/edit/' . $row['fakultas_id']); ?>" class="btn btn-sm btn-info"> edit</a>
                                            <a href="<?= base_url('/fakultas/delete/' . $row['fakultas_id']); ?>" class="btn btn-sm btn-danger">delete</a>
                                        </td>
                                    </tr>
                                </tbody>
                            <?php endforeach;  ?>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Table head Fakultas options end -->

<?= $this->endSection() ?>