<html>
<head>
<title>Igra Moj Broj</title>
<script>
var vrednosti = [];
function update_content()
{	
	var temp = parseInt(document.getElementById('holder').innerHTML, 10) + 1;
	document.getElementById('holder').innerHTML = parseInt(document.getElementById('holder').innerHTML, 10)+1;
	if (temp == 1) {
		var bule1 = 1;
		while (bule1==1) {
			vrednosti[temp] = Math.floor(Math.random() * 10);
			if (vrednosti[temp] > 0) {
				bule1 = 0;
				document.getElementById('celija1').innerHTML = vrednosti[temp];
				document.getElementById('biraj1').innerHTML = "Prvi broj je izabran";
				document.getElementById('divovi').innerHTML += "<div id='biraj2' align='center'><a href='#' onclick='update_content();'>Birajte drugi broj</a></div></br>";
			}
		}
	}
	if (temp == 2) {
		var bule2 = 1;
		while (bule2==1) {
			vrednosti[temp] = Math.floor(Math.random() * 10);
			if (vrednosti[temp] > 0) {
				bule2 = 0;
				document.getElementById('celija2').innerHTML = vrednosti[temp];
				document.getElementById('biraj2').innerHTML = "Drugi broj je izabran";
				document.getElementById('divovi').innerHTML += "<div id='biraj3' align='center'><a href='#' onclick='update_content();'>Birajte treci broj</a></div></br>";
			}
		}	
	}
	if (temp == 3) {
		var bule3 = 1;
		while (bule3==1) {
			vrednosti[temp] = Math.floor(Math.random() * 10);
			if (vrednosti[temp] > 0) {
				bule3 = 0;
				document.getElementById('celija3').innerHTML = vrednosti[temp];
				document.getElementById('biraj3').innerHTML = "Treci broj je izabran";
				document.getElementById('divovi').innerHTML += "<div id='biraj4' align='center'><a href='#' onclick='update_content();'>Birajte cetvrti broj</a></div></br>";
			}
		}		
	}
	if (temp == 4) {
		var bule4 = 1;
		while (bule4==1) {
			vrednosti[temp] = Math.floor(Math.random() * 10);
			if (vrednosti[temp] > 0) {
				bule4 = 0;
				document.getElementById('celija4').innerHTML = vrednosti[temp];
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
				vrednosti[temp] = temp1;
				bul = 0;	
			}
		}		
		document.getElementById('celija6').innerHTML = vrednosti[temp];
		document.getElementById('biraj5').innerHTML = "Peti broj je izabran";
		document.getElementById('divovi').innerHTML += "<div id='biraj6' align='center'><a href='#' onclick='update_content();'>Birajte sesti broj</a></div></br>";
	} 
 	if (temp == 6) {
 		var bul = 1;
		while (bul==1) {
			var temp1 = Math.floor(Math.random() * 100);
			if ((temp1<=100)&&(temp1>=25)&&(temp1%25==0)) {
				vrednosti[temp] = temp1;
				bul = 0;	
			}
		}
		
		var vrednost51 = Math.floor(Math.random() * 1000);
 			
		document.getElementById('celija8').innerHTML = vrednosti[temp];
		document.getElementById('biraj6').innerHTML = "Sesti broj je izabran";
		document.getElementById('divovi').innerHTML += "<div id='biraj7' align='center' style='margin-left:35%; width:30%; background-color: pink; border: 1px solid black; font-size:36px; text-align:center;'>Trazeni broj je "+vrednost51+"</a></div></br>";
		document.getElementById('divovi').innerHTML += "<div id='resenje' align='center' style='margin-left:0%; width:100%; font-size:36px; text-align:center;' >Unesite vasu jednacinu</a></div><label></label><input type='text' id='tekst5' ng-model='formula' placeholder='Insert equation' style='margin-left:35%; width:30%; font-size:36px; text-align:center;'/></br>";
		document.getElementById('divovi').innerHTML += "<div id='izracunaj' align='center'><a href='#' onclick='calculate();'>Proveri resenje</a></div></br>";
	} 	
}

function calculate()
{	
	var temp1 = document.getElementById('tekst5').value;
	document.getElementById('resenje').innerHTML = "Vase resenje je " + eval(temp1) + " , korisceni su brojevi";	
	temp1 = temp1.replace('(','');
	temp1 = temp1.replace(')','');
	
	var z = 0;
	var znaci = [];
	var brojevi = [];
	for (var b = 0; b < parseInt(temp1.length,10); b++) {
		if ((temp1[b] == '+')||(temp1[b] == '-')||(temp1[b] == '*')||(temp1[b] == '/')) {
			znaci[z] = b;
			z++;
		}
	}
	
 	for (var c = 0; c <= z; c++) {
 		if (c == 0) {	
			brojevi[c] = temp1.substring(0,znaci[c]);
			document.getElementById('resenje').innerHTML +=	" "+brojevi[c];
		} else {
			brojevi[c] = temp1.substring(znaci[c-1]+1,znaci[c]);
			document.getElementById('resenje').innerHTML +=	" ,"+brojevi[c];
		}
		var d = 1;
		var kolko = 0;
 		while (d <= 6) {
			if (brojevi[c] == vrednosti[d]) {				
				kolko = 1;
			}
			d++;		
		}
		if (kolko == 0) {
			document.getElementById('resenje').innerHTML +=	"(no)";
		}
			
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



