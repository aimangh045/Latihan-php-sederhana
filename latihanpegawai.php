
<?php
//dibuataimandanbantuanelemendibumi

    // Inisialisasi Variabel
    $namaPegawai = isset($_POST['namaPegawai']) ? $_POST['namaPegawai'] : '';
    $agama = isset($_POST['agama']) ? $_POST['agama'] : '';
    $jabatan = isset($_POST['jabatan']) ? $_POST['jabatan'] : '';
    $status = isset($_POST['status']) ? $_POST['status'] : '';
    $jumlahAnak = isset($_POST['jumlahAnak'])?$_POST['jumlahAnak']:'';

    // Menampilkan Informasi
    echo "Nama Pegawai: " . $namaPegawai . "<br>";
    echo "Agama: " . $agama . "<br>";
    echo "Jabatan: " . $jabatan . "<br>";
    echo "Status: " . $status . "<br>";
    echo "Jumlah Anak: " . $jumlahAnak . "<br>";
    echo '<br/> FORM ISIAN';
?>

<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    <label for="namaPegawai">Nama Pegawai:</label>
    <input type="text" name="namaPegawai" id="namaPegawai" value="<?php echo $namaPegawai; ?>"><br>
    <label for="agama">Pilih Agama:</label>
    <select name="agama" id="agama">
        <option value="Islam">Islam</option>
        <option value="Kristen">Kristen</option>
        <option value="Hindu">Hindu</option>
        <option value="Budha">Budha</option>
    </select></br>
    <label for="jabatan">Pilih Jabatan:</label>
    <select name="jabatan" id="jabatan">
        <option value="Manajer">Manajer</option>
        <option value="Asisten">Asisten</option>
        <option value="Kabag">Kabag</option>
        <option value="Staff">Staff</option>
    </select><br>
    
    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $status = $_POST['status'];

        if ($status == 'Menikah') {
            $jumlahAnak = $_POST['jumlahAnak'];
        } else {
            $jumlahAnak = NULL;
        }
    }
?>

<!DOCTYPE html>
<html>
<head>
    <title>Informasi Pegawai</title>
</head>
<body>
    <form method="post" action="">
        <label for="status">Pilih Status:</label>
        <select name="status" id="status">
            <option value="Menikah">Menikah</option>
            <option value="Belum Menikah">Belum Menikah</option>
        </select><br>

        <div id="anak" style="display: <?php echo $status == 'Menikah' ? 'block' : 'none'; ?>;">
            <label for="jumlahAnak">Jumlah Anak:</label>
            <input type="text" name="jumlahAnak" id="jumlahAnak" value="<?php echo $jumlahAnak; ?>">
        </div>

        <input type="submit" value="Submit">
    </form>
</body>
</html>