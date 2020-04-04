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
                    Form Tambah Data Pengampu
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
                                <label for="nama_dosen">Nama Dosen</label>
                                <input type="text" class="form-control" id="nama_dosen" name="nama_dosen">
                            </div>
                            <div class="form-group">
                                <label for="id">ID Mahasiswa</label>
                                <input type="number" class="form-control" id="id" name="id">
                            </div>
                            <div class="form-group">
                                <label for="id_matkul">ID Matkul</label>
                                <select class="form-control" id="id_matkul" name="id_matkul">
                                    <?php foreach ($id_matkul as $key) : ?>
                                        <option value="<?= $key ?>" selected><?= $key ?>
                                        </option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="id_kelas">ID Kelas</label>
                                <select class="form-control" id="id_kelas" name="id_kelas">
                                    <?php foreach ($id_kelas as $key) : ?>
                                        <option value="<?= $key ?>" selected><?= $key ?>
                                        </option>
                                    <?php endforeach; ?>
                                </select>
                                <small style="background-color: #8FBC8F;color:white">1 (TI-2A) | 2 (TI-2B)</small>
                            </div>
                            <button type="submit" name="submit" class="btn btn-primary float-right">Tambah Data Pengampu</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>