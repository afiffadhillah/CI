<!DOCTYPE html>
<html>
<head>
	<title>list</title>
</head>
<body>	
		<table class="table">	
			<tr>
				List Produk
				<th>No</th>
				<th>Nama Produk</th>
				<th>Harga</th>
				<th>Satuan</th>
				<th>Qty</th>
				<th>Img</th>
				<th>Diskripsi</th>
			</tr>

			<?php
			$no=1;
			foreach ($produk as $value) {
			 	 
			?>
			 <tr>
			 	 <td><?php echo $no++;?></td>
			 	 <td><?php echo $value->namaproduk;?></td>
			 	 <td><?php echo $value->harga;?></td>
			 	 <td><?php echo $value->satuan;?></td>
			 	 <td><?php echo $value->qty;?></td>
			 	<!--  <td><?php echo $value->img;?></td> -->
			 	 <td><?php echo $value->diskipsi;?></td>
			 	 <td>
			 	 <a class="btn btn-warning btn-link" href="<?php echo site_url('produk/hapus_produk/').$value->namaproduk;?>" onclick="return confirm('are you sure?')">Hapus</a>
			 	 <a class="btn btn-info btn-link" href="<?php echo site_url('produk/edit_produk/').$value->namaproduk;?>">Edit</a>
			 	 </td>
			 </tr>

<?php } ?>

		</table>

</body>
</html>