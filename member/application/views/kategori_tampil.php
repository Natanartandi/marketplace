
<div class="container">
        <h5>Kategori Produk</h5>
       
       <div class="row">
        <?php foreach ($kategori as $key => $value): ?>
            <div class="col-md-3">
                <div class="card border-0 shadow-sm">
                    <img src="<?php echo base_url("assets/kategori/" .$value['foto_kategori']) ?>">
                    <div class="card-body text-center">
                        <h6><?php echo $value ['nama_kategori'] ?></h6>
                    </div>
                </div>
            </div>
            <?php endforeach ?>
       </div>
    </div>
</body>
</html>