<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produk Tampil Member</title>
</head>
<body>
    <div class= "container">
        <h5>Produk Jual <?php echo $this->session->userdata("nama_member") ?></h5>

        <table class="table">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Produk</th>
                    <th>Harga</th>
                    <th>Foto</th>
                    <th>Opsi</th>
                </tr>
            </thead>
            <thbody>
                <?php foreach ($produk as $key => $value): ?>

            <tr>
                    <td><?php echo $key+1 ?></td>
                    <td><?php echo $value['nama_produk'] ?></td>
                    <td><?php echo $value['harga_produk'] ?></td>
                    <td>
                        <img src="<?php echo base_url("assets/produk/" .$value["foto_produk"]) ?>" width="200">
                    </td>
                    <td>
                        <a href="<?php echo base_url("seller/produk/edit/".$value["id_produk"]) ?>" class="btn btn-warning">Edit</a>
                        <a href="<?php echo base_url("seller/produk/hapus/".$value["id_produk"]) ?>" class="btn btn-danger">Hapus</a>
                </tr>
                <?php endforeach ?>
            </thbody>
        </table>

        <a href ="<?php echo base_url("seller/produk/tambah") ?>" class="btn btn-primary">Tambah</a>
    </div>
</body>
</html>