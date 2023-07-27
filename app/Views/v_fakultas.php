<?= $this->extend('layout/v_indexView') ?>

<?= $this->section('content') ?>
<div class="page-heading">
    <h3>Home</h3>
</div>

<!-- Table head options start -->
<section class="section">
    <div class="row" id="table-head">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Data Fakultas</h4>
                </div>
                <div class="box-header with-border">
                    <a href="/fakultas/create/" class="btn btn-primary">+ Tambah Data</a>
                </div>
                <div class="card-content">
                    <!-- <div class="card-body">
                        <p>Similar to tables and dark tables, use the modifier classes <code class="highlighter-rouge">.thead-light</code> or <code class="highlighter-rouge">.thead-dark</code> to
                            make <code class="highlighter-rouge">&lt;thead&gt;</code>s appear light or dark gray.
                        </p>
                    </div> -->
                    <!-- table head dark -->
                    <div class="table-responsive">
                        <table class="table mb-0">
                            <thead class="thead-dark">
                                <tr>
                                    <th>NO</th>
                                    <th>Fakultas</th>
                                    <th>Jurusan</th>
                                    <th>Dekan</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <?php $no = 1 ?>
                            <?php foreach ($fakultas as $row) : ?>

                                <tbody>
                                    <tr>
                                        <td><?= $no++; ?></td>
                                        <td class="text-bold-500"><?= $row["fakultas"] ?></td>
                                        <td class="text-bold-500"><?= $row["prodi"] ?></td>
                                        <td class="text-bold-500"><?= $row["dekan"] ?></td>
                                        <td>
                                            <a href="<?= base_url('/fakultas/edit/' . $row['fakultas_id']); ?>" class="btn btn-sm btn-info"> edit</a>
                                            <a href="<?= base_url('/fakultas/delete/' . $row['fakultas_id']); ?>" class="btn btn-sm btn-danger">delete</a>
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
<!-- Table head options end -->

<?= $this->endSection() ?>