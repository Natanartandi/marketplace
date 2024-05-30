<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div class="container">
        <h5>Data Transaksi Jual <?php echo $this->session->userdata("nama_member")?></h5>
        <table class="table table-bordered" id="tabelku" >
            <thead>
                <tr>
                    <th>No</th>
                    <th>Tanggal</th>
                    <th>Total</th>
                    <th>Status</th>
                    <th>Opsi</th>
            </thead>
            <tbody>

            <?php foreach ($jual as $k => $v): ?>

                <tr>
                    <td><?php echo $k+1 ?></td>
                    <td><?php echo date('d M Y H:i', strtotime ($v['tanggal_transaksi'])); ?></td>
                    <td><?php echo number_format ($v['total_transaksi']) ?></td>
                    <td>
                        <span class="badge bg-dark">
                            <?php echo $v['status_transaksi']; ?></td>
                        </span>
                    
                    <td>
                        <a href="<?php echo base_url("sellertransaksi/detail/".$v["id_transaksi"]) ?> " class="btn btn-info">Detail</a>
                      
                    </td>
                </tr>
            <?php endforeach ?>
            </tbody>
        </table>
        
    </div>
</body>
</html>