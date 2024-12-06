<!-- file: app/Views/absensi.php -->

<h1>Absensi</h1>
<table>
  <tr>
    <th>No</th>
    <th>Nama</th>
    <th>NIP</th>
    <th>Email</th>
    <th>Aksi</th>
  </tr>
  <?php foreach ($pegawai as $row) : ?>
    <tr>
      <td><?= $row['id'] ?></td>
      <td><?= $row['nama'] ?></td>
      <td><?= $row['nip'] ?></td>
      <td><?= $row['email'] ?></td>
      <td>
        <a href="<?= site_url('absensi/masuk/' . $row['id']) ?>">Masuk</a>
        <a href="<?= site_url('absensi/pulang/' . $row['id']) ?>">Pulang</a>
      </td>
    </tr>
  <?php endforeach; ?>
</table>

// file: app/Views/absensi_masuk.php

<h1>Absensi Masuk</h1>
<form action="<?= site_url('absensi/save') ?>" method="post">
  <input type="hidden" name="id_pegawai" value="<?= $id_pegawai ?>">
  <input type="date" name="tanggal" value="<?= date('Y-m-d') ?>">
  <input type="time" name="jam_masuk" value="<?= date('H:i:s') ?>">
  <button type="submit">Simpan</button>
</form>

// file: app/Views/absensi_pulang.php

<h1>Absensi Pulang</h1>
<form action="<?= site_url('absensi/save') ?>" method="post">
  <input