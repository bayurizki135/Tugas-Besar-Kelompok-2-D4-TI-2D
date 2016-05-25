<!doctype html>
<html>
    <head>
        <title>harviacode.com - codeigniter crud generator</title>
        <link rel="stylesheet" href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css') ?>"/>
        <style>
            .word-table {
                border:1px solid black !important; 
                border-collapse: collapse !important;
                width: 100%;
            }
            .word-table tr th, .word-table tr td{
                border:1px solid black !important; 
                padding: 5px 10px;
            }
        </style>
    </head>
    <body>
        <h2>Kelas List</h2>
        <table class="word-table" style="margin-bottom: 10px">
            <tr>
                <th>No</th>
		<th>Kelas Nama</th>
		<th>Kelas Icon</th>
		<th>Kelas Warna</th>
		
            </tr><?php
            foreach ($kelas_data as $kelas)
            {
                ?>
                <tr>
		      <td><?php echo ++$start ?></td>
		      <td><?php echo $kelas->kelas_nama ?></td>
		      <td><?php echo $kelas->kelas_icon ?></td>
		      <td><?php echo $kelas->kelas_warna ?></td>	
                </tr>
                <?php
            }
            ?>
        </table>
    </body>
</html>