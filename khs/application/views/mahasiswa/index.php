<div class="container mt-3">
    <div class="row">
        <div class="col-lg-12">
            <h2 style = "text-align : center">JADWAL KULIAH</h2>
            <table class="table table-striped table-bordered" id="listMatkul">
                <thead style="background-color: #67c7c5;color:white">
                    <tr>
                        <th style = text-align:center class="short">No</th>
                        <th style = text-align:center scope="col">Nama Mahasiswa</th>
                        <th style = text-align:center scope="col">Mata Kuliah</th>
                        <th style = text-align:center scope="col">Jurusan</th>
                        <th style = text-align:center scope="col">Kelas</th>
                        <th style = text-align:center scope="col">Ruangan</th>
                        <th style = text-align:center scope="col">Hari</th>
                    </tr>
                </thead>
                <tbody>
                <?php $no = 1; ?>
                    <?php
                    foreach ($mengampu as $br) :
                    ?>
                        <tr>
                            <td style = text-align:center><?= $no ?></td>
                            <td style = text-align:center><?= $br['nama'] ?></td>
                            <td style = text-align:center><?= $br['nama_matkul'] ?></td>
                            <td style = text-align:center><?= $br['jurusan'] ?></td>
                            <td style = text-align:center><?= $br['nama_kelas'] ?></td>
                            <td style = text-align:center><?= $br['ruang_kelas'] ?></td>
                            <td style = text-align:center><?= $br['hari'] ?></td>
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