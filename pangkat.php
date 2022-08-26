<?php
$p = 1;
if(isset($_POST['angka']) && isset($_POST["pangkat"])){
    for($i=0; $i < $_POST['pangkat']; $i++){
        $p *= $_POST['angka'];
    }
}
?>

<form method="post" action="">
    Nilai Angka-<input type="number" name="angka">
    Pangkat-<input type="number" name="pangkat">
    <input type="submit" value="submit">
</form>


<?php
if($p > 1)
?>
<h3> <?php echo $p ?></h3>

