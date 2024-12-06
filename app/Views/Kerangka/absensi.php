<!--// file: app/Views/absensi.php -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Absensi</title>
</head>

<style>
    body {
        margin: 2rem;
    }
</style>
<body>
    <h1>Absensi</h1>
    <!-- <button type="button" class="btn btn-primary position-relative">
    Profile
    <span class="position-absolute top-0 start-100 translate-middle p-2 bg-danger border border-light rounded-circle">
        <span class="visually-hidden">New alerts</span>
    </span>
</button> -->
    <form action="<?= base_url('Absensi/simpanDataDiri') ?>" method="post">
        <?= csrf_field(); ?>
        <div>
            <table>
                <tr>

                    <nav class="navbar bg-body-tertiary">
                        <div class="input-group">
                            <span class="input-group-text" id="basic-addon1">Nim_Aslab:</span>
                            <input type="number" name="nim_aslab" class="form-control" placeholder="Nim_Aslab" aria-label="Nim_Aslab" aria-describedby="basic-addon1" required autofocus value="<?= old('nim_aslab') ?>">
                        </div>
                    </nav>
                    <nav class="navbar bg-body-tertiary">
                        <div class="input-group">
                            <span class="input-group-text" id="basic-addon1">Nama_Asleb:</span>
                            <input type="text" name="nama_aslab" class="form-control" placeholder="Nama_Aslab" aria-label="Nama_Aslab" aria-describedby="basic-addon1" value="<?= old('nama_aslab') ?>">
                        </div>
                    </nav>
                    <nav class="navbar bg-body-tertiary">
                        <div class="input-group">
                            <span class="input-group-text" id="basic-addon1">RFID:</span>
                            <input type="number" name="rfid" class="form-control" placeholder="RFID" aria-label="RFID" aria-describedby="basic-addon1" value="<?= old('rfid') ?>">
                        </div>
                    </nav>
                    <!-- <button class="mg-20"> -->
                    <!-- <link rel="stylesheet" href="">Simpan -->
                    <button type="submit" class="btn btn-primary">Kirim</button>
                    <!-- <a href="<?= site_url('/Absensi/save') ?>" class= "btn btn-primary">Simpan</a> -->

                </tr>
            </table>
        </div>
    </form>

    <h1>Absensi Masuk</h1>
    <form action="<?= base_url('Absensi/simpanMasuk') ?>" method="post">
        <!-- <link rel="save" href="save"> -->
        <input type="date" name="tanggal" value="<?= date('Y-m-d') ?>">
        <input type="time" name="jam_masuk" value="<?= date('H:i:s') ?>">
        <button type="submit">Simpan</button>
    </form>



    <!-- // file: app/Views/absensi_pulang.php -->

    <h1>Absensi Pulang</h1>
    <form action="<?= base_url('Absensi/simpanPulang') ?>" method="post">
        <div>
            <table>
                <tr>
                    <nav class="navbar bg-body-tertiary">
                        <div class="input-group">
                            <span class="input-group-text" id="basic-addon1">Nim_Aslab:</span>
                            <input type="number" name="nim_aslab" class="form-control" placeholder="Nim_Aslab" aria-label="Nim_Aslab" aria-describedby="basic-addon1" required>
                        </div>
                    </nav>
                    <nav class="navbar bg-body-tertiary">
                        <div class="input-group">
                            <span class="input-group-text" id="basic-addon1">Nama_Asleb:</span>
                            <input type="text" name="nama_aslab" class="form-control" placeholder="Nama_Aslab" aria-label="Nama_Aslab" aria-describedby="basic-addon1">
                        </div>
                    </nav>
                    <nav class="navbar bg-body-tertiary">
                        <div class="input-group">
                            <span class="input-group-text" id="basic-addon1">RFID:</span>
                            <input type="text" name="rfid" class="form-control" placeholder="RFID" aria-label="RFID" aria-describedby="basic-addon1">
                        </div>
                    </nav>
                    <!-- <button class="mg-20"> -->
                    <!-- <link rel="stylesheet" href="">Simpan -->
                </tr>
            </table>
        </div>
        <input type="date" name="tanggal_Pulang" value="<?= date('Y-m-d') ?>">
        <input type="time" name="jam_Pulang" value="<?= date('H:i:s') ?>">
        <button type="submit">Kirim</button>
    </form>
</body>

</html>