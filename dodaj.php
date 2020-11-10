<?

	session_start();
	require("Db.class.php");
    $db = new Db();

   $nip = $_POST['nip'];
   $regon = $_POST['regon'];
   $nazwa = $_POST['nazwa'];
   $platnik = $_POST['platnik'];
   if(isset($_POST['platnik'])){$platnik = 1;}else {$platnik = 0;};
   $ulica = $_POST['ulica'];
   $nr_domu = $_POST['nr_domu'];
   $nr_mieszkania = $_POST['nr_mieszkania'];

   $insert  =  $db->query("INSERT INTO kontrahenci(nip,regon,nazwa,platnik,ulica,nr_domu,nr_mieszkania) VALUES(:nip,:regon,:nazwa,:platnik,:ulica,:nr_domu,:nr_mieszkania)",
    array("nip"=>$nip,"regon"=>$regon,"nazwa"=> $nazwa,"platnik"=>$platnik,"ulica"=>$ulica,"nr_domu"=>$nr_domu,"nr_mieszkania"=>$nr_mieszkania ));

   header("Location:dane_kontrahentow.php"); 

?>