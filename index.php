<!DOCTYPE html>
<html lang="en">

<head>
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container">
        <div class="main">
            <form action="index.php" method="post" id="form">
                <h2>DATA IDENTITAS</h2>
                <hr />
                <label for="fnama">Nama</label>
                <input type="text" name="fnama" id="fnama">

                <label for="lalamat">Alamat</label>
                <input type="text" name="lalamat" id="lalamat">

                <label for="no_hp">Nomor Handphone</label>
                <input type="number" name="no_hp" id="no_hp">

                <label for="tgl_lahir">Tgl Lahir</label>
                <input type="date" name="tgl_lahir" id="tgl_lahir">

                <input type="submit" value="submit" name="submit" id="submit">
            </form>
            <?php include "proses.php"; ?>
        </div>
    </div>
</body>

</html>