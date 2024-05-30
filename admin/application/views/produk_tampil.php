<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div class="container">
        <h5>Data Produk</h5>
        <table class="table table-bordered" id="tabelku" >
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Produk</th>
                    <th>Harga</th>
                    <th>Foto</th>
                    <th>Opsi</th>
            </thead>
            <tbody>

            <?php foreach ($produk as $key => $value): ?>
                <tr>
                    <td><?php echo $key+1 ?></td>
                    <td><?php echo $value['nama_produk']; ?></td>
                    <td><?php echo $value['harga_produk']; ?></td>
                    <td>
                        <img src="<?php echo $value["foto_produk"]?> " width="200">
                    </td>
                    <td>
                        <a href="" class="btn btn-info">Detail</a>
                       
                    </td>
                </tr>
            <?php endforeach ?>
            </tbody>
        </table>
       
    </div>
</body>
</html>