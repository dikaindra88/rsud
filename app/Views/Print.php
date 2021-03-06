<?php

use PhpParser\Node\Stmt\Echo_;
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <img src="assets/img/logo-hst.png" style="width:60px; height:auto; position:absolute;">
    <img src="assets/img/rsph.png" style="width:60px; height:auto; position:absolute; margin-left:91%;">
    <table width="100%">

        <tr>
            <td align="center">
                <span style="line-height:1.6; font-weight:bold;">
                    PEMERINTAH KABUPATEN TANGERANG<br />RUMAH SAKIT UMUM PAKUHAJI<br />KEC. PAKUHAJI
                </span>

            </td>
        </tr>
    </table>
    <p align="center" style="font-size: 9pt;">Jl. Raya Pakuhaji No.88, Pakuhaji, Kecamatan Pakuhaji, Kabupaten Tangerang, Banten 15570</p>
    <hr />
    <h4 align="center">BUKTI PENDAFTARAN VAKSINASI ONLINE</h4>


    <table class=" table table-striped table-middle">

        <tr>
            <th width="20%">NIK Peserta</th>
            <td width="1%">:</td>
            <td><?php echo $print[0]['participant_nik']; ?></td>
        </tr>

        <tr>
            <th>Nama Peserta</th>
            <td>:</td>
            <td><?php echo $print[0]['participant_name']; ?></td>
        </tr>

        <tr>
            <th>Tanggal Lahir</th>
            <td>:</td>
            <td><?php echo ($print[0]['birth_date'] != '0000-00-00') ? date('d-m-Y', strtotime($print[0]['birth_date'])) : '' ?></td>
        </tr>

        <tr>
            <th>Jenis Kelamin</th>
            <td>:</td>
            <td><?php echo $print[0]['gender']; ?></td>
        </tr>

        <tr>
            <th>No. Telp</th>
            <td>:</td>
            <td><?php echo $print[0]['phone_number']; ?></td>
        </tr>

        <tr>
            <th>Kategori</th>
            <td>:</td>
            <td><?php echo $print[0]['role']; ?></td>
        </tr>

        <tr>
            <th>Tanggal Vaksinasi</th>
            <td>:</td>
            <td><?php echo ($print[0]['vaccination_date'] != '0000-00-00') ? date('d-m-Y', strtotime($print[0]['vaccination_date'])) : '' ?></td>
        </tr>
        <tr>
            <th>Fase</th>
            <td>:</td>
            <td><?php echo $print[0]['vaccines_phase']; ?></td>
        </tr>
        <tr>
            <th>Jenis Vaksin</th>
            <td>:</td>
            <td><?php echo $print[0]['vaccines_type']; ?></td>
        </tr>

        <tr>
            <th>Alamat</th>
            <td>:</td>
            <td><?php echo $print[0]['address']; ?></td>
        </tr>

    </table>
    <br />
    <br />
    <br />
    <br />
    <p align="center" style="color: grey;">Note : Membawa foto copy KTP</p>
</body>

</html>