<section class="konten">
	<div class ="container">
		<h1> List Produk </h1>
		<div class="row">
			<?php foreach($list as $row) { ?>
			<div class="col-md-3">
			 <div class="thumbnail">
			 	<img src="<?= base_url() ?>uploads/foto_produk/<?php echo $row['foto_produk'] ?>" alt="">
			 	<div class="caption">
			 		<h3><?php echo $row['nama_produk'];?></h3>
			 		<h5>Rp.<?php echo number_format($row['harga_produk']);?></h5>
			 		<a href="product.php?id=<?php echo$row['id_produk'];?>" class="btn btn-primary">Lihat Produk</a>
			 	</div>
			 	</div>
			 </div>
			<?php } ?> 

		</div>
	</div>
 </section>