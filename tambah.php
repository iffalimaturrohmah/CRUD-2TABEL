<html>
<head>
</head>
<body>
    <h1>Daftar Siswa</h1>
    <form action="proses_tambah.php" method="POST">
        <fieldset>
            <p>
                <label for="nama_guru">Nama Guru :</label>
                <input type="text" name="nama_guru" />
            </p>

            <p>
                <label for="alamat">Alamat :</label>
                <input type="textarea" name="alamat" />
            </p>
            <p>
                <label for="jenis_kelamin">Jenis kelamin :</label>
                <input type="text" name="jenis_kelamin" />
            </p>
            <p>
                <label for="nama_mapel">Nama Mapel :</label>
                <input type="text" name="nama_mapel" />
            </p>
            <p>
                <label for="ruangan">Ruangan :</label>
                <input type="text" name="ruangan" />
            </p>
            <p>
                <input type="submit" value="kirim" name="kirim_data" />
            </p>
        </fieldset>
</form>
</center>
</body>
</html>