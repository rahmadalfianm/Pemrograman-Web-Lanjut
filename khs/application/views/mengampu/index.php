<div class="container mt-3">
    <?php if ($this->session->flashdata('hasil')) : ?>
        <div class="row mt-4">
            <div class="col-md-6">
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <?php echo $this->session->flashdata('hasil'); ?>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            </div>
        </div>
    <?php endif; ?>
    <div class="row">
        <div class="row mt-4">
            <div class="col-md-6">
                <a href="<?= base_url(); ?>mengampu/tambah/" class="btn btn-primary">Tambah Pengampu</a>
            </div>
        </div>
<div class="container mt-3">
    <div class="row">
        <div class="col-lg-12">
            <h2 style = "text-align : center">Daftar Mengampu</h2>
            <br>
            <table class="table table-striped table-bordered" id="listMatkul">
                <thead style="background-color: #67c7c5;color:white">
                    <tr>
                        <th style = text-align:center class="short">ID Dosen</th>
                        <th style = text-align:center class="short">NIM</th>
                        <th style = text-align:center scope="col">Nama Mahasiswa</th>
                        <th style = text-align:center scope="col">Mata Kuliah</th>
                        <th style = text-align:center scope="col">Dosen</th>
                        <th style = text-align:center scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                <?php $no = 1; ?>
                    <?php
                    foreach ($mengampu as $br) :
                    ?>
                        <tr>
                            <td style = text-align:center><?= $br['id_mengampu'] ?></td>
                            <td style = text-align:center><?= $br['nim'] ?></td>
                            <td style = text-align:center><?= $br['nama'] ?></td>
                            <td style = text-align:center><?= $br['nama_matkul'] ?></td>
                            <td style = text-align:center><?= $br['nama_dosen'] ?></td>
                            <td style = text-align:center><a href="<?= base_url() ?>mengampu/edit/<?= $br['id_matkul'] ?>" class="btn btn-success">Edit</a>
                            <a href="<?= base_url() ?>mengampu/delete/<?= $br['id_mengampu'] ?>" onclick="return confirm('Are you sure you want to delete this data, <?= $br['nama_dosen'] ?> ?');" class="btn btn-danger">Delete</a></td>
                        </tr>
                        <?php $no++; ?>
                    <?php
                    endforeach;
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</div>