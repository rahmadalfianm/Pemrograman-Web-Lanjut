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
                <a href="<?= base_url(); ?>DaftarMhs/tambah" class="btn btn-primary">Tambah Mahasiswa</a>
            </div>
        </div>
<div class="container mt-3">
    <div class="row">
        <div class="col-lg-12">
            <h2 style = "text-align : center">DAFTAR MAHASISWA</h2>
            <br>
            <table class="table table-striped table-bordered" id="listMatkul">
                <thead style="background-color: #67c7c5;color:white">
                    <tr>
                        <th style = text-align:center class="short">NO</th>
                        <th style = text-align:center scope="col">Nama Mahasiswa</th>
                        <th style = text-align:center class="short">NIM</th>
                        <th style = text-align:center class="short">Email</th>
                        <th style = text-align:center scope="col">Jurusan</th> 
                        <th style = text-align:center scope="col">Action</th>  
                    </tr>
                </thead>
                <tbody>
                <?php $no = 1; ?>
                    <?php
                    foreach ($mahasiswa as $br) :
                    ?>
                        <tr>
                            <td style = text-align:center><?= $no ?></td>
                            <td style = text-align:center><?= $br['nama'] ?></td>
                            <td style = text-align:center><?= $br['nim'] ?></td>
                            <td style = text-align:center><?= $br['email'] ?></td>
                            <td style = text-align:center><?= $br['jurusan'] ?></td>
                            <td style = text-align:center><a href="<?= base_url() ?>DaftarMhs/edit/<?= $br['id'] ?>" class="btn btn-success">Edit</a>
                            <a href="<?= base_url() ?>DaftarMhs/delete/<?= $br['id'] ?>" onclick="return confirm('Are you sure you want to delete this data, <?= $br['nama'] ?> ?');" class="btn btn-danger">Delete</a></td>
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