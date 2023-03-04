<!DOCTYPE html>
<html lang="en">

<head>
    <meta chraset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?></title>
    <style>
        td {
            font-size: 12px;
            font-family: sans-serif;
        }

        h3 {
            font-size: 16px;
        }
        hr {
            border: 0;
            border-top: 2px solid #AEBAF8;

        }

        .tabel {
            border: 1px solid black;
            border-coLLapse: collapse;
        }

        th {
            font-family: sans-serif;
            font-size: 12px;
            background: lightblue;
        }
    </style>
</head>

<body>
    <table>
        <tr>
            <td width="400">
                <h3>Yunita's Laundry</h3>
            </td>
            <td>
                <img scr="<?= base_url('assets/img/icon.jpg')?>" width="100">
    </td>
        </tr>

        <tr>
            <td>Alamat : Umbulsari-Jember-Jawa Timur</td>
        </tr>

        <tr>
            <td>Telp. : +62 8560 7739 335</td>
        </tr>

        <tr>
            <td>Email : laundryapp@gmail.com</td>
        </tr>
        <tr>
            <td>Kode Invoice : <?= $transaksi[0]['kode_invoice']?></td>
        </tr>
        <tr>
            <td>Tanggal Masuk : <?= $transaksi[0]['tgl']?></td>
        </tr>
        <tr>
            <td>Batas Waktu : <?= $transaksi[0]['batas_waktu']?></td>
        </tr>
        <tr>
            <td>Tanggal Bayar : <?= $transaksi[0]['tgl_bayar']?></td>
        </tr>
        <tr>
            <td>Status : <?= $transaksi[0]['status']?></td>
        </tr>
        <tr>
            <td>Nama Member : <?= $transaksi[0]['nama_member']?></td>
        </tr>
        <tr>
            <td>Status Pembayaran : <?= $transaksi[0]['dibayar']?></td>
        </tr>
    </table>

    <hr><br>

    <table width="700" border="1" class="tabel">
            <tr>
                <th>No</th>
                <th>Nama Member</th>
                <th>Nama Paket</th>
                <th>Harga</th>
                <th>Qty</th>
                <th>Total</th>
            </tr>

            <?php
            $total = 0; 
            $index=1; foreach ($transaksi as $row): ?>
                <tr>
                    <td><?= $index++ ?></td>
                    <td><?= $row['nama_member'] ?></td>
                    <td><?= $row['nama_paket'] ?></td>
                    <td><?= "Rp." . number_format($row['harga']) ?></td>
                    <td><?= $row['terjual'] ?></td>
                    <td><?= "Rp." . number_format($row['pendapatan']) ?></td>
                </tr>
                <?php $total += $row['pendapatan'] ?>
            <?php endforeach; ?>
            <tr>
                <td colspan="5">Total : </td>
                <td colspan="4">Rp. <?= number_format($total) ?></td>
            </tr>

            <!-- <tr>
                <td class="tabel"><?= $transaksi['id_member'] ?></td>
                <td class="tabel"><?= $transaksi['tgl'] ?></td>
                <td class="tabel"><?= $transaksi['nama'] ?></td>
                <td class="tabel"><?= "Rp. " . number_format($transaksi['total_bayar']) ?></td>
                <td class="tabel"><?= $transaksi['dibayar'] ?></td>
                <td class="tabel"><?= $transaksi['tgl_bayar'] ?></td>
            </tr> -->
            
            </table><br>

            <table>
                <tr>
                <td>Keterangan :</td>
            </tr>
            <tr>
                <td>
                <p>1. Pengambilan cucian harus membawa nota</p>
                <p>2. Cuci luntur bukan tanggung jawab kami</p>
                <p>3. Hitung dan periksa sebelum pergi</p>
                <p>4. Klaim kekurangan/kehilangan cucian setelah meninggalkan laundry tidak dilayani</p>
            </td>
        </tr>
    </table>
    </body>
</html>
<script>
    window.print();
</script>

