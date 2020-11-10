<!doctype html>
<html lang="pl">
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
    <table id="tabela4">
  <tr class="tabela1_1">
    <th>NIP</th>
    <th>REGON</th>
    <th>NAZWA</th>
    <th>CZY PŁATNIK VAT?</th>
    <th>ULICA</th>
    <th>NUMER DOMU</th>
    <th>NUMER MIESZKANIA</th>
    <th>EDYTUJ</th>
    <th>USUŃ</th>
  </tr>
      <?
    $query="SELECT * FROM kontrahenci WHERE usuniety = 0";
    $kontrahenci = $db->query($query);
    foreach($kontrahenci as $i => $kontrahent) {
      echo"  
    <tr class='tabela1_2'>
    <form action='/edit.php' method='post'>
    <input type='hidden' name='id' value='".$kontrahent['id']."'>
    <td><input type='text' value='".$kontrahent['nip']."' name='nip'></td>
    <td><input type='text' value='".$kontrahent['regon']."' name='regon'></td>
    <td><input type='text' value='".$kontrahent['nazwa']."' name='nazwa'></td>
    <td><input type='checkbox'";if($kontrahent['platnik']==1){echo"checked";}else{} echo"  name='platnik'></td>
    <td><input type='text' value='".$kontrahent['ulica']."' name='ulica'></td>
    <td><input type='text' value='".$kontrahent['nr_domu']."' name='nr_domu'></td>
    <td><input type='text' value='".$kontrahent['nr_mieszkania']."' name='nr_mieszkania'></td>
    <td><input type='submit' value='Edytuj!'></td></form>
    <form action='/delete.php' method='get'>
    <input type='hidden' name='id' value='".$kontrahent['id']."'>
    <td><input type='submit' value='Usuń!'></td>
    </form>
  </tr>";
}


    ?>



</table><br><br>

<span>Dodaj kontrahenta</span><br><br>
<table id="tabela5">
  <tr class="tabela1_1">
    <th>NIP</th>
    <th>REGON</th>
    <th>NAZWA</th>
    <th>CZY PŁATNIK VAT?</th>
    <th>ULICA</th>
    <th>NUMER DOMU</th>
    <th>NUMER MIESZKANIA</th>
    <th>DODAJ</th>
  </tr>
  <tr>
    <form action="/dodaj.php" method="post">
    <th><input type="text" name="nip"></th>
    <th><input type="text" name="regon"></th>
    <th><input type="text" name="nazwa"></th>
    <th><input type="checkbox" name="platnik"></th>
    <th><input type="text" name="ulica"></th>
    <th><input type="text" name="nr_domu"></th>
    <th><input type="text" name="nr_mieszkania"></th>
    <th><input type="submit" value="Dodaj!"></th>
    </form>
  </tr>
</table>
  </div>

</body>
</html>