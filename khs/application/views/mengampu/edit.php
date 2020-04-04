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
                    Form Edit Data Pengampu
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
                            <input type="hidden" name="id_mengampu"" value="<?= $mengampu['id_mengampu']; ?>">
                            <!-- http://getbootstrap.com/docs/4.1/components/form/ -->
                            <div class="form-group">
                                <label for="id_mengampu">ID Pengampu</label>
                                <input type="number" class="form-control" id="id_mengampu"" name="id_mengampu"" value="<?= $mengampu['id_mengampu']; ?>">
                                <!-- <small class="form-text text-danger"><?= form_error('nama'); ?></small> -->
                            </div>
                            <div class="form-group">
                                <label for="nama_dosen">Nama Dosen</label>
                                <input type="text" class="form-control" id="nama_dosen" name="nama_dosen" value="<?= $mengampu['nama_dosen']; ?>">
                                <!-- <small class="form-text text-danger"><?= form_error('nama'); ?></small> -->
                            </div>
                            <div class="form-group">
                                <label for="id">ID Mahasiswa</label>
                                <input type="number" class="form-control" id="id" name="id" value="<?= $mengampu['id']; ?>">
                                <!-- <small class="form-text text-danger"><?= form_error('nama'); ?></small> -->
                            </div>
                            <div class="form-group">
                                <label for="id_matkul">ID Matkul</label>
                                <select class="form-control" id="id_matkul" name="id_matkul">
                                    <?php foreach ($id_matkul as $key) : ?>
                                        <?php if ($key == $mengampu->id_matkul) : ?>
                                            <option value="<?= $key ?>" selected><?= $key ?></option>
                                        <?php else : ?>
                                            <option value="<?= $key ?>"><?= $key ?></option>
                                        <?php endif; ?>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="id_kelas">ID Kelas</label>
                                <select class="form-control" id="id_kelas" name="id_kelas">
                                    <?php foreach ($id_kelas as $key) : ?>
                                        <?php if ($key == $mengampu->id_kelas) : ?>
                                            <option value="<?= $key ?>" selected><?= $key ?></option>
                                        <?php else : ?>
                                            <option value="<?= $key ?>"><?= $key ?></option>
                                        <?php endif; ?>
                                    <?php endforeach; ?>
                                </select>
                                <small style="background-color: #8FBC8F;color:white">1 (TI-2A) | 2 (TI-2B)</small>
                            </div>
                            <button type="submit" name="submit" class="btn btn-primary float-right"> Edit </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>