<html>
<head>
<title>Igra Moj Broj</title>
<script>
function update_content()
{	
	var temp = parseInt(document.getElementById('holder').innerHTML, 10) + 1;
	document.getElementById('holder').innerHTML = parseInt(document.getElementById('holder').innerHTML, 10)+1;
	if (temp == 1) {
		var bule1 = 1;
		while (bule1==1) {
			var vrednost1 = Math.floor(Math.random() * 10);
			if (vrednost1 > 0) {
				bule1 = 0;
				document.getElementById('celija1').innerHTML = vrednost1;
				document.getElementById('biraj1').innerHTML = "Prvi broj je izabran";
				document.getElementById('divovi').innerHTML += "<div id='biraj2' align='center'><a href='#' onclick='update_content();'>Birajte drugi broj</a></div></br>";
			}
		}
	}
	if (temp == 2) {
		var bule2 = 1;
		while (bule2==1) {
			var vrednost2 = Math.floor(Math.random() * 10);
			if (vrednost2 > 0) {
				bule2 = 0;
				document.getElementById('celija2').innerHTML = vrednost2;
				document.getElementById('biraj2').innerHTML = "Drugi broj je izabran";
				document.getElementById('divovi').innerHTML += "<div id='biraj3' align='center'><a href='#' onclick='update_content();'>Birajte treci broj</a></div></br>";
			}
		}	
	}
	if (temp == 3) {
		var bule3 = 1;
		while (bule3==1) {
			var vrednost3 = Math.floor(Math.random() * 10);
			if (vrednost3 > 0) {
				bule3 = 0;
				document.getElementById('celija3').innerHTML = vrednost3;
				document.getElementById('biraj3').innerHTML = "Treci broj je izabran";
				document.getElementById('divovi').innerHTML += "<div id='biraj4' align='center'><a href='#' onclick='update_content();'>Birajte cetvrti broj</a></div></br>";
			}
		}		
	}
	if (temp == 4) {
		var bule4 = 1;
		while (bule4==1) {
			var vrednost4 = Math.floor(Math.random() * 10);
			if (vrednost4 > 0) {
				bule4 = 0;
				document.getElementById('celija4').innerHTML = vrednost4;
				document.getElementById('biraj4').innerHTML = "Cetvrti broj je izabran";
				document.getElementById('divovi').innerHTML += "<div id='biraj5' align='center'><a href='#' onclick='update_content();'>Birajte peti broj</a></div></br>";
			}
		}		
	}
 	if (temp == 5) {
 		var bul = 1;
		while (bul==1) {
			var temp1 = Math.floor(Math.random() * 100);
			if ((temp1<=20)&&(temp1>0)&&(temp1%5==0)) {
				var vrednost5 = temp1;
				bul = 0;	
			}
		}		
		document.getElementById('celija6').innerHTML = vrednost5;
		document.getElementById('biraj5').innerHTML = "Peti broj je izabran";
		document.getElementById('divovi').innerHTML += "<div id='biraj6' align='center'><a href='#' onclick='update_content();'>Birajte sesti broj</a></div></br>";
	} 
 	if (temp == 6) {
 		var bul = 1;
		while (bul==1) {
			var temp1 = Math.floor(Math.random() * 100);
			if ((temp1<=100)&&(temp1>=25)&&(temp1%25==0)) {
				var vrednost6 = temp1;
				bul = 0;	
			}
		}
		
		var vrednost51 = Math.floor(Math.random() * 1000);
 			
		document.getElementById('celija8').innerHTML = vrednost6;
		document.getElementById('biraj6').innerHTML = "Sesti broj je izabran";
		document.getElementById('divovi').innerHTML += "<div id='biraj7' align='center' style='margin-left:35%; width:30%; background-color: pink; border: 1px solid black; font-size:36px; text-align:center;'>Trazeni broj je "+vrednost51+"</a></div></br>";
		document.getElementById('divovi').innerHTML += "<div id='resenje' align='center' >Unesite vasu jednacinu</a></div><input type='textfield' id='tekst' style='margin-left:35%; width:30%; font-size:36px; text-align:center;'/></br>";
	} 	
}
</script>


</head>
<body>



<table id="tabela1" align="center" style='border: 1px solid black; width:80%; font-size:36px; text-align:center;'>
<tr id="red">
<td style="background-color: pink; border: 1px solid black; width:12%;" id="celija1">Prvi</br>broj</td>
<td style="background-color: pink; border: 1px solid black; width:12%;" id="celija2">Drugi</br>broj</td>
<td style="background-color: pink; border: 1px solid black; width:12%;" id="celija3">Treci</br>broj</td>
<td style="background-color: pink; border: 1px solid black; width:12%;" id="celija4">Cetvrti</br>broj</td>
<td style="border: width:14%;" id="celija5"></td>
<td style="background-color: pink; border: 1px solid black; width:12%;" id="celija6">Peti</br>broj</td>
<td style="border: width:14%;" id="celija7"></td>
<td style="background-color: pink; border: 1px solid black; width:12%;" id="celija8">Sesti</br>broj</td>
</tr>
</table>


</br></br></br>



<div id="divovi">
<div id="biraj1" align="center"><a href="#" onclick="update_content();">Birajte prvi broj</a></div></br>


<!-- zasto se izgubi hyperlink sa teksta kada promenim tekst "Birate prvi broj" iz skripte ? -->


</div>


<div id="holder" style="display:none; visibility: hidden;">0</div>





<?php
/* $i = 0;
$niz = array();
$boje = array("red","blue","green","yellow","orange","cyan","purple");
$boje_out = array();
echo "<table style='width:50%;text-align:center; font-size:24px;' align='center';><tr>";
$n = $_GET['broj'];
while($i<$n) { 
	$brojka = rand(1, 39);
	if (!in_array($brojka, $niz)) { 
		ponovi:	
		$boja = rand(0,6);
		if (!in_array($boje[$boja], $boje_out)) {
			$boje_out[$i] = $boje[$boja];
			echo "<td style='width: 14%; border: 1px black solid; background-color:".$boje_out[$i].";'>".$brojka."</td>";
			$niz[$i] = $brojka;
			$i++;
		} else {
			goto ponovi;
		}	
	}
}
echo "</tr></table>";
echo "</br>"; */
?>




</body>
</html>



