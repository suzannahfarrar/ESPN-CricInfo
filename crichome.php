<html>
<head><title>Cricket Scores</title></head>
<body><center>
<div style="background-color:skyblue">
<br>
<h1>ESPNcricinfo</h1><br>
</div>
<hr><br>
<?php
$country=array();
$country['RG Pollock']="South Africa";
$country['KF Barrington']="England";
$country['AC Voges']="Australia";
$country['SR Tendulkar']="India";
$country['DG Bradman']="Australia";
$country['Younis Khan']="Pakistan";
$country['GA Headley']="West Indies";
$country['KC Sangakkara']="Sri Lanka";
$country['SPD Smith']="Australia";
$country['H Sutcliffe']="England";
/*echo "<table align=center width=400px height=600px cellspacing=5 cellpadding=10 bgcolor=yellow>";
echo "<tr><td></td><th align=left><u>Batsman</u></th><th><u>Country</u></th></tr>";
$i=1;
foreach($country as $b=>$c){
	echo "<tr><td>$i.</td><td>$b</td><td align=center>$c</td><tr>";
	$i++;
}
echo "</table><br><br>";*/
$avgscores=array();
$avgscores['RG Pollock']=60.97;
$avgscores['KF Barrington']=58.67;
$avgscores['AC Voges']=95.50;
$avgscores['SR Tendulkar']=53.78;
$avgscores['DG Bradman']=99.94;
$avgscores['Younis Khan']=53.94;
$avgscores['GA Headley']=60.83;
$avgscores['KC Sangakkara']=57.40;
$avgscores['SPD Smith']=60.18;
$avgscores['H Sutcliffe']=60.73;
echo "<table align=center width=400px height=600px cellspacing=5 cellpadding=10 bgcolor=yellow>";
echo "<tr><td></td><th align=left><u>Batsman</u></th><th><u>Average Score</u></th></tr>";
$i=1;
foreach($avgscores as $cr=>$scores){
	echo "<tr><td>$i.</td><td>$cr</td><td align=center>".number_format($scores,2)."</td><tr>";
	$i++;
}
echo "</table>";
$_SESSION['scores']=$avgscores;
?>
</body></html>