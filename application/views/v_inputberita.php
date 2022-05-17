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
    <title>Membuat Input Data Berita</title>
</head>

<body style="background-color: #f7d794;">
    <center>
        <h1>Input Data Berita</h1>
        <h3>Tambah data berita baru</h3>
    </center>
    <form action="<?= base_url() . 'databerita/tambah_aksi'; ?>" method="post">
        <table style="margin:20px auto;">
            <tr>
                <td>Judul</td>
                <td><input type="text" name="judul"></td>
            </tr>
            <tr>
                <td>Headline News</td>
                <td><input type="text" name="head_news"></td>
            </tr>
            <tr>
                <td>Deskripsi Berita</td>
                <td><input type="text" name="desk_berita"></td>
            </tr>
            <tr>
                <td>Tanggal Publikasi</td>
                <td><input type="date" name="tgl_publikasi"></td>
            </tr>
            <tr>
                <td>Penulis</td>
                <td><input type="text" name="penulis"></td>
            </tr>
            <tr>
                <td>Kategori Berita</td>
                <td><select name="kategori">
                        <option value='olahraga'>Olahraga</option>
                        <option value='teknologi'>Teknologi</option>
                        <option value='kesehatan'>Kesehatan</option>
                        <option value='entertainment'>Entertainment</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" value="Tambah"></td>
            </tr>
        </table>
    </form>
</body>

</html>