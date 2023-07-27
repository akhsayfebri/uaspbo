<?= $this->extend('layout/v_indexView') ?>

<?= $this->section('content') ?>

<div class="page-heading">
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>Data Jurusan</h3>
                <p class="text-subtitle text-muted">...</p>
            </div>
            <div class="col-12 col-md-6 order-md-2 order-first">
                <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Form Validation</li>
                        <li class="breadcrumb-item active" aria-current="page">Parsley</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>

    <!-- // Basic multiple Column Form section start -->
    <section id="multiple-column-form">
        <div class="row match-height">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Edit Data Jurusan</h4>
                    </div>
                    <div class="card-content">
                        <div class="card-body">
                            <form class="form" action="<?= base_url('/fakultas/edit/' . $fakultas['fakultas_id']); ?>" method="post" data-parsley-validate>
                                <div class="row">

                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="fakultas" class="form-label">Fakultas</label>
                                            <input type="text" id="fakultas" value="<?= $fakultas['fakultas']; ?>" class="form-control" name="fakultas" placeholder="Nama Fakultas">
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="prodi" class="form-label">Program Studi</label>
                                            <input type="text" id="fakultas" value="<?= $fakultas['prodi']; ?>" class="form-control" name="prodi" placeholder="Nama Program Studi">
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="dekan" class="form-label">Dekan</label>
                                            <input type="text" id="dekan" value="<?= $fakultas['dekan']; ?>" class="form-control" name="dekan" placeholder="Nama Dekan">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-12 d-flex justify-content-end">
                                        <button type="submit" class="btn btn-primary me-1 mb-1">Submit</button>
                                        <button type="reset" class="btn btn-light-secondary me-1 mb-1">Reset</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- // Basic multiple Column Form section end -->
</div>
<?= $this->endSection() ?>