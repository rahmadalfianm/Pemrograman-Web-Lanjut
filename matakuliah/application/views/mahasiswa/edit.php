<div class="container">
    <div class="row mt-3">
        <div class="col-md-6">
	<div class="card">
		<div class="card-header">
			Form Merubah Data Mahasiswa
		</div>
		<div class="card-body">
            <?php if (validation_errors()) : ?>
            <div class="alert alert-danger" role="alert">
            <?= validation_errors(); ?>
            </div>
            <?php endif ?>
			<form action="" method="POST">
            <input type="hidden" name="id" value="<?= $mahasiswa['id']; ?>">
				<div class="form-group">
					<label for="nama">Nama</label>
					<input type="text" class="form-control" id="nama" name="nama"
                    value="<?= $mahasiswa['nama']; ?>">
				</div>
				<div class="form-group">
					<label for="nim">Nim</label>
					<input type="number" class="form-control" id="nim" name="nim"
                    value="<?= $mahasiswa['nim']; ?>">
				</div>
				<div class="form-group">
					<label for="email">Email</label>
					<input type="email" class="form-control" id="email" name="email"
                    value="<?= $mahasiswa['email']; ?>">
				</div>
				<div class="form-group">
					<label for="jurusan">Jurusan</label>
					<select class="form-control" id="jurusan" name="jurusan">
                    <?php foreach ($jurusan as $key) : ?>
                        <?php if ($key == $mahasiswa['jurusan']) : ?>
                        <option value="<?= $key ?>"selected><?= $key ?></option>
                        <?php else : ?>
                        <option value="<?= $key ?>"><?= $key ?></option>
                    <?php endif; ?>
                    <?php endforeach; ?>
					
					</select>
				</div>

				<div class="form-group">
					<label for="matkul">Mata Kuliah</label>
					<select class="form-control" id="matkul" name="matkul">
                    <?php foreach ($matkul as $mt) : ?>
                        <?php if ($mt == $matkul['matakuliah']) : ?>
                        <option value="<?php echo $mt['id_matkul'] ?>"selected><?php echo $mt['matakuliah'] ?></option>
                        <?php else : ?>
                        <option value="<?php echo $mt['id_matkul'] ?>"><?php echo $mt['nama_matkul'] ?></option>
                    <?php endif; ?>
                    <?php endforeach; ?>
					</select>
				</div>
				<div class="form-group">
					<label for="kelas">Kelas</label>
					<select class="form-control" id="kelas" name="kelas">
                    <?php foreach ($kelas as $kk) : ?>
                        <?php if ($kk == $kelas['kelas']) : ?>
                        <option value="<?php echo $kk['id_kelas'] ?>"selected><?php echo $kk['kelas'] ?></option>
                        <?php else : ?>
                        <option value="<?php echo $kk['id_kelas'] ?>"><?php echo $kk['nama_kelas'] ?></option>
                    <?php endif; ?>
                    <?php endforeach; ?>
					</select>
				</div>
				<button type="submit" name="submit" class="btn btn-primary float-right">Edit</button>
			</form>
		</div>
	</div>
</div>
</div>
</div>