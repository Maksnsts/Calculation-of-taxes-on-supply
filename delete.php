<?

	session_start();
	require("Db.class.php");
  $db = new Db();

   
    $id = $_GET['id'];

    $update = $db->query("UPDATE  `kontrahenci` SET usuniety=:usuniety WHERE id=:id", array("usuniety"=>1,"id"=>$id ));

   header("Location:dane_kontrahentow.php"); 

?>