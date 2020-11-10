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
    <table id="tabela3">
  <tr class="tabela1_1">
    <th>Lp.</th>
    <th>Imie i  Nazwisko </th>
    <th>Data od:</th>
    <th>Data do:</th>
    <th>Miejsce wyjazdu:</th>
    <th>Miejsce przyjazdu:</th>
  </tr>

        <?
    $query="SELECT * FROM tabeladelegacji";
    $tabelad = $db->query($query);
    foreach($tabelad as $i => $tabela) {
      echo"  <tr class='tabela1_2'>
    <td>".$tabela['lp']."</td>
    <td>".$tabela['imie_nazwisko']."</td>
    <td>".$tabela['data_od']."</td>
    <td>".$tabela['data_do']."</td>
    <td>".$tabela['miejsce_wyjazdu']."</td>
    <td>".$tabela['miejsce_przyjazdu']."</td>
  </tr>";
}


    ?>

</table>
  </div>

</body>
</html>