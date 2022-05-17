<!DOCTYPE html>
<html>

<head>
    <style>
    table {
        font-family: "poppins", sans-serif;
        border-collapse: collapse;
        width: 100%;
    }

    td, th {
        border: 1px solid #dddddd;
        text-align: left;
        padding: 8px;
    }

    tr:nth-child(even) {
        background-color: #dddddd;
    }
    </style>
    <title>Menampilkan Data Berita</title>
</head>

<body style="background-color: #f7d794;">
    <center>
        <h1>Membuat Data Berita</h1>
    </center>
    <center><?= anchor('databerita/tambah', 'Tambah Data'); ?></center>
    <table style="margin:20px auto;" border="1">
        <tr>
            <th>No</th>
            <th>Judul</th>
            <th>Headline News</th>
            <th>Deskripsi Berita</th>
            <th>Tanggal Publikasi</th>
            <th>Penulis</th>
            <th>Kategori</th>
        </tr>
        <?php
        $no = 1;
        foreach ($databerita as $u) :
        ?>
            <tr>
                <td><?= $no++ ?></td>
                <td><?= $u->judul ?></td>
                <td><?= $u->head_news ?></td>
                <td><?= $u->desk_berita ?></td>
                <td><?= $u->tgl_publikasi ?></td>
                <td><?= $u->penulis ?></td>
                <td><?= $u->kategori ?></td>
            </tr>
        <?php endforeach; ?>
    </table>