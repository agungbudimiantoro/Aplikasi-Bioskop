<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $judul; ?></title>
    <style>
        .tengah {
            text-align: center;
        }

        .kanan {
            text-align: right;
        }

        .kotak {
            margin-left: auto;
            width: 200px;
        }

        hr {
            margin-top: -10px;
        }
    </style>
</head>

<body>
    <h1 class="tengah">BIOSKOP XXX</h1>
    <hr>
    <br>
    <h2 class="tengah"><?= $judul ?></h2>
    <br>
    <table width="100%" border="1">
        <tr style="background-color:#999;">
            <th>No</th>
            <th>Nama</th>
            <th>Username</th>
            <th>Jenis kelamin</th>
            <th>Alamat</th>
        </tr>
        <?php $no = 0; ?>
        <?php foreach ($data as $row) : ?>
            <tr>
                <td class="tengah"><?= $no = $no + 1; ?></td>
                <td><?= $row['nama']; ?></td>
                <td><?= $row['username']; ?></td>
                <?php if ($row['jk'] == 'L') : ?>
                    <td>Laki-Laki</td>
                <?php else : ?>
                    <td>Perempuan</td>
                <?php endif; ?>
                <td><?= $row['alamat']; ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
    <div class="kotak">
        <br>
        <p class="tengah">Lubuklinggau, <?= date('d-m-Y'); ?></p>
        <p class="tengah">Penanggung Jawab</p>
        <br><br>
        <p class="tengah"><?= $admin->nama ?></p>
        <hr class="mepet">
    </div>
</body>

</html>