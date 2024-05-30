<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div class="container">
        <h5>Data Member</h5>
        <table class="table table-bordered" id="tabelku" >
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Email</th>
                    <th>Distrik</th>
                    <th>Wa</th>
                    <th>Opsi</th>
            </thead>
            <tbody>

            <?php foreach ($member as $k => $v): ?>

                <tr>
                    <td><?php echo $k+1 ?></td>
                    <td><?php echo $v['nama_member']; ?></td>
                    <td><?php echo $v['email_member']; ?></td>
                    <td><?php echo $v['nama_distrik_member']; ?></td>
                    <td><?php echo $v['wa_member']; ?></td>
                    
                    <td>
                        <a href="<?php echo base_url("member/detail/".$v['id_member']) ?>" class="btn btn-info">Detail</a>
                      
                    </td>
                </tr>
            <?php endforeach ?>
            </tbody>
        </table>
        
    </div>
</body>
</html>