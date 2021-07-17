
	<?php 
	if(isset($_POST['hitung'])){
		$a = $_POST['bil1'];
		$b = $_POST['bil2'];
		$operasi = $_POST['operasi'];
		switch ($operasi) {
			case 'tambah':
				$hasil = $a+$b;
			break;
			case 'kurang':
				$hasil = $a-$b;
			break;
			case 'kali':
				$hasil = $a*$b;
			break;
			case 'bagi':
				$hasil = $a/$b;
			break;			
		}
	}
	?>
<form method="post" action="index.php">			
	<input type="text" name="bil1" autocomplete="off" >
    <select class="opt" name="operasi">
		<option value="tambah"> +</option>
		<option value="kurang"> -</option>
		<option value="kali"> x</option>
		<option value="bagi"> /</option>
	</select>
	<input type="text" name="bil2" class="bil" autocomplete="off" >
	<input type="submit" name="hitung" value="Hitung" class="tombol">											
</form>

	<?php if(isset($_POST['hitung'])){ 
        echo "The Result is :" ;
		 echo $hasil; 
	 }else{ 
		echo 'the result is : 0';} ?>	


