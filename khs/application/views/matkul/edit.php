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
                    Form Edit Data Matakuliah
                </div>
            </center>
            <div class="card rounded">
                <div class="card-header" style="background-color: #8FBC8F">
                    <div class="card-body">
                        <!-- untuk menampilkan pesan error -->
                        <?php if (validation_errors()) : ?>
                            <div class="alert alert-danger" role="alert">
                                <?= validation_errors(); ?>
                            </div>
                        <?php endif ?>
                        <form action="" method="post">
                            <input type="hidden" name="id_matkul" value="<?= $matkul['id_matkul']; ?>">
                            <!-- http://getbootstrap.com/docs/4.1/components/form/ -->
                            <div class="form-group">
                                <label for="id_matkul">ID Matakuliah</label>
                                <input type="number" class="form-control" id="id_matkul" name="id_matkul" value="<?= $matkul['id_matkul']; ?>">
                                <!-- <small class="form-text text-danger"><?= form_error('nama'); ?></small> -->
                            </div>
                            <div class="form-group">
                                <label for="nama_matkul">Nama Matakuliah</label>
                                <input type="text" class="form-control" id="nama_matkul" name="nama_matkul" value="<?= $matkul['nama_matkul']; ?>">
                                <!-- <small class="form-text text-danger"><?= form_error('nama'); ?></small> -->
                            </div>
                            <div class="form-group">
                                <label for="tahun_ajaran">Tahun Ajaran</label>
                                <select class="form-control" id="tahun_ajaran" name="tahun_ajaran">
                                    <?php foreach ($tahun_ajaran as $key) : ?>
                                        <?php if ($key == $matkul->tahun_ajaran) : ?>
                                            <option value="<?= $key ?>" selected><?= $key ?></option>
                                        <?php else : ?>
                                            <option value="<?= $key ?>"><?= $key ?></option>
                                        <?php endif; ?>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="hari">Hari</label>
                                <select class="form-control" id="hari" name="hari">
                                    <?php foreach ($hari as $key) : ?>
                                        <?php if ($key == $matkul->hari) : ?>
                                            <option value="<?= $key ?>" selected><?= $key ?></option>
                                        <?php else : ?>
                                            <option value="<?= $key ?>"><?= $key ?></option>
                                        <?php endif; ?>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                            
                            <button type="submit" name="submit" class="btn btn-primary float-right"> Edit </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>