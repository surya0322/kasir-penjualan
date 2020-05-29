<form method="POST" action="simpan.php">
	<table border="0"align="center">
		<tr>
			<td colspan="3" align="center"><h1>Form Inputan</h1></td>
		</tr>
		<tr>
			<td>Nama Barang</td>
			<td>:</td>
			<td><input type="text" name="nama_barang" id="nama_barang" /></td>
		</tr>
		<tr>
			<td>Jenis Barang</td>
			<td>:</td>
			<td><input type="text" name="jenis_barang" id="jenis_barang" /></td>
		</tr>
		<tr>
			<td>Harga Satuan</td>
			<td>:</td>
			<td><input type="text" name="harga_satuan" id="harga_satuan" onfocus="mulaiHitung()" onblur="berhentiHitung()" /></td>
		</tr>
		<tr>
			<td>Jumlah Beli</td>
			<td>:</td>
			<td><input type="text" name="jumlah_beli" id="jumlah_beli" onfocus="mulaiHitung()" onblur="berhentiHitung()" /></td>
		</tr>
		<tr>
			<td>Total Bayar</td>
			<td>:</td>
			<td><input type="text" name="total_bayar" id="total_bayar" /></td>
		</tr>
		<tr>
			<td>Diskon</td>
			<td>:</td>
			<td><input type="text" name="diskon" id="diskon" /></td>
		</tr>
		<tr>
			<td>Total Setelah Diskon</td>
			<td>:</td>
			<td><input type="text" name="setelah_diskon" id="setelah_diskon" /></td>
		</tr>
		<tr>
			<td>Bayar</td>
			<td>:</td>
			<td><input type="text" name="bayar" id="bayar" onfocus="mulaiHitung()" onblur="berhentiHitung()"/></td>
		</tr>
		<tr>
			<td>Kembalian</td>
			<td>:</td>
			<td><input type="text" name="kembalian" id="kembalian" /></td>
		</tr>
		<script type="text/javascript">
			function mulaiHitung(){
				Interval = setInterval("hitung()",1);
			}
			function hitung(){
				harga_satuan 	= parseInt(document.getElementById("harga_satuan").value);
				jumlah_beli 	= parseInt(document.getElementById("jumlah_beli").value);
				total_bayar		= harga_satuan * jumlah_beli;
				document.getElementById("total_bayar").value = total_bayar;

				diskon = "";
				persen = "";
				if (total_bayar <= 80000) {
					diskon = (0/100)*total_bayar;
					persen = "0%";
				}
				else if (total_bayar > 80000 && total_bayar <= 200000 ) {
					diskon = (10/100)*total_bayar;
					persen = "10%";
				}
				else if (total_bayar > 200000 && total_bayar <= 400000 ) {
					diskon = (20/100)*total_bayar;
					persen = "20%";
				}
				else if (total_bayar > 400000 ) {
					diskon = (30/100)*total_bayar;
					persen = "30%";
				}
				document.getElementById("diskon").value = persen +"--> "+diskon;
				setelah_diskon = total_bayar - diskon;
				document.getElementById("setelah_diskon").value = setelah_diskon;
				bayar 		= parseInt(document.getElementById("bayar").value);
				kembalian 	= bayar - setelah_diskon;
				document.getElementById("kembalian").value = kembalian;
			}
			function berhentiHitung(){
				clearInterval(Interval);
			}
		</script> 
		<tr>
			<td></td>
			<td></td>
			<td><input type="submit" value="Simpan" /><input type="reset" value="Reset" /></td>
		</tr>
		<tr>
			<td></td>
			<td></td>
			<td><a href="laporan.php">Laporan</a></td>
		</tr>
	</table>
</form>