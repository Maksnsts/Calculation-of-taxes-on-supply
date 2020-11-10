<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Zadanie zdalne e-MSI</title>

  </head>

<body>
<?
require("Db.class.php");
$db = new Db();
?>
  <div id="lewy">
      <ol>
        <a href="rozne_kontrolki_html.php"><li>Różne kontrolki HTML</li></a>
        <a href="tabela_pracownikow.php"><li>Tabela Pracowników</li></a>
        <a href="tabela_faktur_vat.php"><li>Tabela faktura VAT</li></a>
        <a href="tabela_delegacji_db.php"><li>Tabela delegacji BD</li></a>
        <a href="dane_kontrahentow.php"><li>Dane kontrahentów</li></a>
      </ol>
  </div>

  <div id="prawy">
    <?
    $query="SELECT * FROM kontrahenci ";
    $kontrahenci = $db->query($query);
    foreach($kontrahenci as $i => $kontrahent) {
      echo"
      <div><p>Nip:".$kontrahent['nip']."</p></div>


      ";
}


    ?>
  </div>

</body>
</html>