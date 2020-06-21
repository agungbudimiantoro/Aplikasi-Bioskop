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
            width: 300px;
            border: 1px solid black;
            padding: 10px;
        }

        hr {
            margin-top: -10px;
        }

        .besar {
            font-weight: bold;
            font-size: 16px;
        }
    </style>
</head>

<body>
    <div class="kotak">
        <h3 class="kanan">BIOSKOP XXX</h3>
        <hr>
        <table>
            <tr>
                <td>Judul Film</td>
                <td>:</td>
                <td colspan="3">
                    <p class="besar"><?= $film->judul; ?></p>
                </td>
            </tr>
            <tr>
                <td>Tanggal</td>
                <td>:</td>
                <td colspan="3">
                    <p class="besar"><?= $penayangan->tanggal; ?></p>
                </td>
            </tr>
            <tr>
                <td>Waktu</td>
                <td>:</td>
                <td colspan="3">
                    <p class="besar"><?= $penayangan->waktu_mulai; ?></p>
                </td>
            </tr>
            <tr>
                <td>No Ruangan</td>
                <td>:</td>
                <td width="50px">
                    <p class="besar"><?= $ruangan->no_ruangan; ?></p>
                </td>
                <td>No Kursi</td>
                <td>:</td>
                <td>
                    <p class="besar"><?= $kursi->no_kursi; ?></p>
                </td>
            </tr>
            <tr>
                <td>Harga</td>
                <td>:</td>
                <td colspan="3"><?= $data->harga; ?></td>
            </tr>
        </table>
        <br>
        <br>
        <div><small><?= $data->kd_transaksi; ?></small></div>
        <div class="kanan" style="padding-top: -15px;"><small><?= $data->tanggal; ?></small></div>

    </div>
</body>

</html>