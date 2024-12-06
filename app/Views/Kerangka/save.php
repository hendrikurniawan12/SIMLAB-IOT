<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>SAVE</title>
</head>

<body>
        <table class="table">
            <tr class="header">
                <th>No</th>
                <th>nim_aslab</th>
                <th>nama_aslab</th>
                <th>rfid</th>
            </tr>
            <?php foreach ($data as $post): ?>
                <tr>
                    <td></td>
                    <td><?php echo $post['nim_aslab']; ?></td>
                    <td><?php echo $post['nama_aslab']; ?></td>
                    <td><?php echo $post['rfid']; ?></td>
                    <td>
                </tr>
            <?php endforeach; ?>

            <style>
                tr:not(.header) {
                    counter-increment: row-num;
                }

                tr td:first-child::before {
                    content: counter(row-num);
                }
            </style>
        </table>
        <button type="button" class="btn btn-outline-primary" onclick="javascript:history.back()">KEMBALI</button>
        <button type="button" class="btn btn-primary" onclick="location.href='<?= url_to('Absensi') ?>'">TAMBAH</button>
        <style>
            button{
                margin-left: 20px;
                margin-top: 10px;
            }
        </style>
</body>

</html>