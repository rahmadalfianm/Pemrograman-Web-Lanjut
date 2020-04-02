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
                    Form Edit Data Mahasiswa
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
                            <input type="hidden" name="id" value="<?= $mahasiswa->id; ?>">
                            <!-- http://getbootstrap.com/docs/4.1/components/form/ -->
                            <div class="form-group">
                                <label for="id">ID Mahasiswa</label>
                                <input type="number" class="form-control" id="id" name="id" value="<?= $mahasiswa->id; ?>">
                                <!-- <small class="form-text text-danger"><?= form_error('nama'); ?></small> -->
                            </div>
                            <div class="form-group">
                                <label for="Nama">Nama</label>
                                <input type="text" class="form-control" id="nama" name="nama" value="<?= $mahasiswa->nama; ?>">
                                <!-- <small class="form-text text-danger"><?= form_error('nama'); ?></small> -->
                            </div>
                            <div class="form-group">
                                <label for="nim">Nim</label>
                                <input type="number" class="form-control" id="nim" name="nim" value="<?= $mahasiswa->nim; ?>">
                            </div>
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="text" class="form-control" id="email" name="email" value="<?= $mahasiswa->email; ?>">
                            </div>
                            <div class="form-group">
                                <label for="jurusan">Jurusan</label>
                                <select class="form-control" id="jurusan" name="jurusan">
                                    <?php foreach ($jurusan as $key) : ?>
                                        <?php if ($key == $mahasiswa->jurusan) : ?>
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