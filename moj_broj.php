<html>
<head>
<title>Igra Moj Broj</title>



</head>
<body>




<table id="tabela1" align="center" style='border: 1px solid black; width:80%; font-size:36px; text-align:center;'>
<tr id="red">
<td style="background-color: pink; border: 1px solid black; width:12%;" id="celija1">Ovo je 1. celija</td>
<td style="background-color: pink; border: 1px solid black; width:12%;" id="celija2">Ovo je 2. celija</td>
<td style="background-color: pink; border: 1px solid black; width:12%;" id="celija3">Ovo je 3. celija</td>
<td style="background-color: pink; border: 1px solid black; width:12%;" id="celija4">Ovo je 4. celija</td>
<td style="border: width:14%;" id="celija5"></td>
<td style="background-color: pink; border: 1px solid black; width:12%;" id="celija6">Ovo je 6. celija</td>
<td style="border: width:14%;" id="celija7"></td>
<td style="background-color: pink; border: 1px solid black; width:12%;" id="celija8">Ovo je 8. celija</td>
</tr>
</table>




<?php
$i = 0;
$niz = array();
$boje = array("red","blue","green","yellow","orange","cyan","purple");
$boje_out = array();
//echo "<table style='width:50%;text-align:center; font-size:24px;' align='center';><tr>";
$n = $_GET['broj'];
while($i<$n) { 
	$brojka = rand(1, 39);
	if (!in_array($brojka, $niz)) { 
		ponovi:	
		$boja = rand(0,6);
		if (!in_array($boje[$boja], $boje_out)) {
			$boje_out[$i] = $boje[$boja];
//			echo "<td style='width: 14%; border: 1px black solid; background-color:".$boje_out[$i].";'>".$brojka."</td>";
			$niz[$i] = $brojka;
			$i++;
		} else {
			goto ponovi;
		}	
	}
}
echo "</tr></table>";
echo "</br>";
/* if (isset($_GET['poruka'])) {
	echo $_GET['poruka'];
} else {
	echo"Unesite poruku";
} */
?>



</body>
</html>



