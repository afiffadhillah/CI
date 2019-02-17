<!DOCTYPE html>
<html>
<head>
	<title>list</title>
</head>
<body>
		<table border="1px">
			<tr> LIST PELANGGAN
				<th>No</th>
				<th>Nama Pelanggan</th>
				<th>Email</th>
				<th>Telpon</th>
				<th>Alamat</th>
			</tr>

			<?php
			$no=1;
			foreach ($pelanggan as $value) {
			 	 
			?>
			 <tr>
			 	 <td><?php echo $no++;?></td>
			 	 <td><?php echo $value->namaPelanggan;?></td>
			 	 <td><?php echo $value->email;?></td>
			 	 <td><?php echo $value->telpon;?></td>
			 	 <td><?php echo $value->alamat;?></td>
			 </tr>

<?php } ?>
		</table>
</body>
</html>