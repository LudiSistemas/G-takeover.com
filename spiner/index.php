<?php
include('header.php');
include("config.php");
@$nick=$_GET['nick'];
@$pass=$_GET['pass'];
echo '<card id="id1" title="Spiner">
<p align="left">';
include("config.php");
$nick= strtolower($nick);
$query = "SELECT * FROM `korisnici` WHERE `nick` = '".$nick."' AND `pass` LIKE '".$pass."' ";
$result = mysql_query($query);
$otvet = mysql_fetch_array($result);
if($otvet['nick'])
{



echo '<a href="faq.php?nick=$nick&amp;pass=$pass">FAQ(chesto postavljana pitanja)</a><br/> ';
echo '<a href="registruj.php?nick=$nick&amp;pass=$pass">Dodajte svoj sajt</a><br/>';
echo '<a href="listing.php?nick=$nick&amp;pass=$pass">Listing sajtova</a><br/>';
}else{
echo 'Niste ulogovani!<br/>';
echo '
Nick:
<input type="text" name="nick"/>
<br/>
Pass:
<input type="password" name="pass"/>
<br/>
<a href="'.$_SERVER["PHP_SELF"].'?nick=$(nick)&amp;pass=$(pass)">[Uloguj se]</a>
<br/>
ili se
<a href="./registracija.php">registrujte.</a>
<br/>';

}
include ("footer.php");
?>