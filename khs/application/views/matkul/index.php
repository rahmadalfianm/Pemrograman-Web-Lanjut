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
                <a href="<?= base_url(); ?>matkul/tambah" class="btn btn-primary">Tambah Matakuliah</a>
            </div>
        </div>
<div class="container mt-3">
    <div class="row">
        <div class="col-lg-12">
            <h2 style = "text-align : center">DAFTAR MATAKULIAH</h2>
            <br>
            <table class="table table-striped table-bordered" id="listBarang">
                <thead style="background-color: #67c7c5;color:white">
                    <tr>
                        <th style = text-align:center scope="col">ID Matakuliah</th>
                        <th style = text-align:center scope="col">Mata Kuliah</th>
                        <th style = text-align:center scope="col">Tahun Ajaran</th>
                        <th style = text-align:center scope="col">Hari</th>
                        <th style = text-align:center scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach ($matkul as $br) :
                    ?>
                        <tr>
                            <td style = text-align:center><?= $br['id_matkul'] ?></td>
                            <td style = text-align:center><?= $br['nama_matkul'] ?></td>
                            <td style = text-align:center><?= $br['tahun_ajaran'] ?></td>
                            <td style = text-align:center><?= $br['hari'] ?></td>
                            <td style = text-align:center><a href="<?= base_url() ?>matkul/edit/<?= $br['id_matkul'] ?>" class="btn btn-success">Edit</a>
                            <a href="<?= base_url() ?>matkul/delete/<?= $br['id_matkul'] ?>" onclick="return confirm('Are you sure you want to delete this data, <?= $br['nama_matkul'] ?> ?');" class="btn btn-danger">Delete</a></td>
                        </tr>
                    <?php
                    endforeach;
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</div>