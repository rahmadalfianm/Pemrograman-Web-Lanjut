<style>
    body {
        background-color: #F5F5F5;
    }
</style>
<div class="container">
    <div class="row mt-3">
        <div class="col-md-6" style="margin: 0 auto;">
            <center>
                <div class="card-header" style="background-color: 	#008B8B;color:white">
                    Form Tambah Data Matakuliah
                </div>
                <br>
            </center>
            <div class="card rounded">
                <div class="card-header" style="background-color: #8FBC8F">
                    <div class="card-body">
                        <?php if (validation_errors()) : ?>
                            <div class="alert alert-danger" role="alert">
                                <?php echo validation_errors() ?>
                            </div>
                        <?php endif ?>
                        <form action="" method="post">
                            <!-- http://getbootstrap.com/docs/4.1/components/form/ -->
                            <div class="form-group">
                                <label for="nama_matkul">Nama Matakuliah</label>
                                <input type="text" class="form-control" id="nama_matkul" name="nama_matkul">
                            </div>
                            <div class="form-group">
                                <label for="tahun_ajaran">Tahun Ajaran</label>
                                <select class="form-control" id="tahun_ajaran" name="tahun_ajaran">
                                    <?php foreach ($tahun_ajaran as $key) : ?>
                                        <option value="<?= $key ?>" selected><?= $key ?>
                                        </option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="hari">Hari</label>
                                <select class="form-control" id="hari" name="hari">
                                    <?php foreach ($hari as $key) : ?>
                                        <option value="<?= $key ?>" selected><?= $key ?>
                                        </option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                            <button type="submit" name="submit" class="btn btn-primary float-right">Tambah Data Matakuliah</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>