<?

	session_start();
	require("Db.class.php");
    $db = new Db();

  $id = $_POST['id'];
   $nip = $_POST['nip'];
   $regon = $_POST['regon'];
   $nazwa = $_POST['nazwa'];
   $platnik = $_POST['platnik'];
   if(isset($_POST['platnik'])){$platnik = 1;}else {$platnik = 0;};
   $ulica = $_POST['ulica'];
   $nr_domu = $_POST['nr_domu'];
   $nr_mieszkania = $_POST['nr_mieszkania'];

   $update = $db->query("UPDATE  `kontrahenci` SET nip = :nip, regon = :regon, nazwa = :nazwa, platnik = :platnik, ulica = :ulica, nr_domu = :nr_domu, nr_mieszkania = :nr_mieszkania WHERE id=:id", array("nip"=>$nip,"regon"=>$regon,"nazwa"=> $nazwa,"platnik"=>$platnik,"ulica"=>$ulica,"nr_domu"=>$nr_domu,"nr_mieszkania"=>$nr_mieszkania,"id"=>$id ));

   header("Location:dane_kontrahentow.php"); 

?>