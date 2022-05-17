<!DOCTYPE html>
<html>

<head>
    <title>Menampilkan Data Mahasiswa</title>
</head>

<body>
    <center>
        <h1>Membuat Data Mahasiswa</h1>
    </center>
    <center><?= anchor('mahasiswa/tambah', 'Tambah Data'); ?></center>
    <table style="margin:20px auto;" border="1">
        <tr>
            <th>No</th>
            <th>NIM</th>
            <th>Nama</th>
            <th>Kelas</th>
            <th>Tempat, Tanggal Lahir</th>
            <th>Alamat</th>
            <th>Jenis Kelamin</th>
            <th>Agama</th>
        </tr>
        <?php
        $no = 1;
        foreach ($mahasiswa as $u) :
        ?>
            <tr>
                <td><?= $no++ ?></td>
                <td><?= $u->nim ?></td>
                <td><?= $u->nama ?></td>
                <td><?= $u->kelas ?></td>
                <td><?= $u->tmp_lahir ?>, <?= $u->tgl_lahir ?></td>
                <td><?= $u->alamat ?></td>
                <td><?= $u->jk ?></td>
                <td><?= $u->agama ?></td>
            </tr>
        <?php endforeach; ?>
    </table>