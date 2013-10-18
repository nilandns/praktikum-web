<!-- POST TEST | DEWINTA NILAN SARI | PTI-C / 110533430559 -->
<!-- membuat Form dengan method POST, tp action tetap di halaman itu sendiri-->
<form name="form" method="POST" action="#">
<!--membuat tabel agar rapi-->
<table>
	<!--baris 1-->
	<tr>
    	<!--kolom 1, textbox untuk angka1 dengan type data number dengan menambahkan prefilling pada bagian value-->
		<td><input type="number" name="angka1" value="<?php echo isset($_POST['angka1'])? $_POST['angka1']:''; ?>"></td>
        <!--kolom 2, combo box operator, pada setiap pilihan diberikan prefilling-->
		<td>
			<select name="operator">
				<option value="+" <?=($_POST['operator']=='+')? 'selected="selected"':'' ; ?>>+</option>
				<option value="-" <?=($_POST['operator']=='-')? 'selected="selected"':'' ; ?>>-</option>
				<option value="*" <?=($_POST['operator']=='*')? 'selected="selected"':'' ; ?>>*</option>
				<option value="/" <?=($_POST['operator']=='/')? 'selected="selected"':'' ; ?>>/</option>
			</select>
		</td>
        <!--kolom 3, textbox untuk angka2 dgn tipe data number dengan menambahkan prefilling pada bag.value-->
		<td><input type="number" name="angka2" value="<?php echo isset($_POST['angka2'])? $_POST['angka2']:''; ?>"></td>
        <!--kolom 4, tombol submit untuk menampilkan hasil perhitungan-->
		<td><input type="submit" value="=" name="samadengan"></td>
<!--kode php untuk proses perhitungan-->
<?php
//deklarasi variabel
$angka1 = $_POST['angka1'];
$angka2 = $_POST['angka2'];
$operator = $_POST['operator'];
//seleksi switch-case untuk proses perhitungan
switch($operator)
{
	case '+':
		$hasil=$angka1+$angka2;
		break;
	case '-':
		$hasil=$angka1-$angka2;
		break;
	case '*':
		$hasil=$angka1*$angka2;
		break;
	case '/':
		$hasil=$angka1/$angka2;
		break;
}
?>
		<!--kolom 5, textbox dgn tipe data number, menampilkan variabel hasil-->
		<td><input type="number" name="hasil" value="<?=$hasil;?>"></td>
	</tr>
</table>
</form>