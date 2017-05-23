<html>
<head><title>Cricket Scores</title></head>
<body><center>
<div style="background-color:black">
<br>
<h1 style="text-indent:2;color:red;font-size:45px;font-family:Times New Roman">ESPN<font color=white face="Times New Roman">CricInfo</font></h1><br>
</div>
<hr>
<?php
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
	echo "<div align=center style='float:left;margin-left:300px; position:absolute'><br><br><br><br><br><br>";
	echo "<h2><u>Batting Records</u></h2>";
	echo "<table border=5 style='border-color:black;border-style:solid;font-weight:bold' align=center bgcolor=black>";
	echo "<tr><th style='border-style:solid;border-color:grey;background-color:black;color:white'><u>S.NO</u></th><th style='border-style:solid;border-color:grey;background-color:black;color:white' align=center><u>Batsman</u></th><th style='border-style:solid;border-color:grey;background-color:black;color:white'><u>Average Score</u></th></tr>";
	$i=1;
	foreach($avgscores as $cr=>$scores){
		echo "<tr><td style='background-color:white'>$i.</td><td style='background-color:white'>$cr</td><td style='background-color:white' align=center>".number_format($scores,2)."</td><tr>";
		$i++;
	}
	echo "</table><br></div>";
?>
<div align=center style="float:top;margin-left:95px;margin-top:10px; position:absolute">
<form method="post">
<input type="submit" name="button" value="Scores in descending" style="border-color:2;border-width:3px;font-weight:bold;font-size:16px;background-color:red;color:white;width:200px;height:30px;">&nbsp;&nbsp;
<input type="submit" name="button" value="Scores in ascending" style="border-color:2;border-width:3px;font-weight:bold;font-size:16px;background-color:red;color:white;width:200px;height:30px;">&nbsp;&nbsp;
<input type="submit" name="button" value="Top 5 batsmen" style="border-color:2;border-width:3px;font-weight:bold;font-size:16px;background-color:red;color:white;width:200px;height:30px;">&nbsp;&nbsp;
<input type="submit" name="button" value="Batsman with least score" style="border-color:2;border-width:3px;font-weight:bold;font-size:16px;background-color:red;color:white;width:210px;height:30px;">&nbsp;&nbsp;
<input type="submit" name="button" value="Alphabetical order" style="border-color:2;border-width:3px;font-weight:bold;font-size:16px;background-color:red;color:white;width:200px;height:30px;">&nbsp;&nbsp;<br><br>
<input type="submit" name="button" value="Search" style="border-color:2;border-width:3px;font-weight:bold;font-size:16px;background-color:red;color:white;width:200px;height:30px;">&nbsp;&nbsp;
<input type="submit" name="button" value="Random batsman" style="border-color:2;border-width:3px;font-weight:bold;font-size:16px;background-color:red;color:white;width:200px;height:30px;">&nbsp;&nbsp;
<input type="submit" name="button" value="Batsmen names" style="border-color:2;border-width:3px;font-weight:bold;font-size:16px;background-color:red;color:white;width:200px;height:30px;">&nbsp;&nbsp;
<input type="submit" name="button" value="Reverse list" style="border-color:2;border-width:3px;font-weight:bold;font-size:16px;background-color:red;color:white;width:200px;height:30px;">&nbsp;&nbsp
</form>
</div>
<?php
	echo "<br><br><br><Br><div style='float:right;margin-left:700px; position:absolute'><br><br>";
	if(isset($_POST['button'])){
		switch($_POST['button']){
			case 'Scores in descending':
				arsort($avgscores);
				echo "<h2><u>Scores in descending order</u></h2>";
				echo "<table border=5 style='border-style:solid;border-color:green;font-weight:bolder' align=center bgcolor=green>";
				echo "<tr><th style='border-color:greenyellow;border-style:solid;background-color:green;color:yellow' bgcolor=yellow><u>S.NO</u></th><th style='border-color:greenyellow;background-color:green;border-style:solid;color:yellow' bgcolor=yellow align=center><u>Batsman</u></th><th style='border-color:greenyellow;background-color:green;border-style:solid;color:yellow' bgcolor=yellow><u>Average Score</u></th></tr>";
				$i=1;
				foreach($avgscores as $cr=>$scores){
					echo "<tr><td bgcolor=yellow>$i.</td><td bgcolor=yellow>$cr</td><td align=center bgcolor=yellow>".number_format($scores,2)."</td><tr>";
					$i++;
				}
				echo "</table>";
				
				break;
			case 'Scores in ascending':
				asort($avgscores);
				echo "<h2><u>Scores in ascending order</u></h2>";
				echo "<table border=5 style='border-style:solid;border-color:green;font-weight:bolder' align=center bgcolor=green>";
				echo "<tr><th style='border-color:greenyellow;border-style:solid;background-color:green;color:yellow'><u>S.NO</u></th><th style='border-color:greenyellow;border-style:solid;background-color:green;color:yellow' align=center><u>Batsman</u></th><th style='border-color:greenyellow;border-style:solid;background-color:green;color:yellow'><u>Average Score</u></th></tr>";
				$i=1;
				foreach($avgscores as $cr=>$scores){
					echo "<tr><td bgcolor=yellow>$i.</td><td bgcolor=yellow>$cr</td><td bgcolor=yellow align=center>".number_format($scores,2)."</td><tr>";
					$i++;
				}
				echo "</table>";
				break;
			case 'Top 5 batsmen':
				arsort($avgscores);
				echo "<h2><u>Top 5 batsmen</u></h2>";
				$toparray=$avgscores;
				$top=array_slice($toparray,0,5);
				echo "<table border=3 align=center style='color:black;border-style:solid;border-color:#3333CC;font-weight:bolder' bgcolor=#3333CC>";
				echo "<tr><th style='border-color:#33CC99;border-style:solid;color:white'><u>S.NO</u></th><th align=center style='border-color:#33CC99;border-style:solid;color:white'><u>Batsman</u></th><th style='border-color:#33CC99;border-style:solid;color:white'><u>Average Score</u></th></tr>";
				$i=1;
				foreach($top as $cr=>$scores){
					echo "<tr><td style='border-color:#3333CC;border-style:solid;background-color:#33CC99;'>$i.</td><td style='border-color:#3333CC;border-style:solid;background-color:#33CC99;'>$cr</td><td style='border-color:#3333CC;border-style:solid;background-color:#33CC99;' align=center>".number_format($scores,2)."</td><tr>";
					$i++;
				}
				echo "</table>";
				break;
			case 'Batsman with least score':
				arsort($avgscores);
				echo "<h2><u>Batsman with the least score</u></h2>";
				$val = end($avgscores);
				$key = key($avgscores);
					echo "<table border=2 align=center style='border-color:black;border-style:solid;font-weight:bold' bgcolor=yellow>";
				echo "<tr><td></td><th align=left><u>Batsman</u></th><th><u>Average Score</u></th></tr>";

					echo "<tr><td>1.</td><td>".$key."</td><td align=center>".array_pop($avgscores)."</td><tr>";
				echo "</table>";
				break;
			case 'Alphabetical order':
				ksort($avgscores);
				echo "<h2><u>Batsmen in alphabetical order</u></h2>";
				echo "<table border=3 align=center style='border-color:black;border-style:solid;color:white;font-weight:bold' bgcolor=yellow";
				echo "<tr><th><u>S.NO</u></th><th align=left><u>Batsman</u></th><th><u>Average Score</u></th></tr>";
				$i=1;
				foreach($avgscores as $cr=>$scores){
					echo "<tr><td>$i.</td><td>$cr</td><td align=center>".number_format($scores,2)."</td><tr>";
					$i++;
				}
				echo "</table>";
				break;
			case 'Search':
				echo "<br><Br><h2><u>Search for a batsman</u></h2>";
				?>
				<form>
				<input type="text" name="score" style="width:250px;height:40px;text-align:center" placeholder="Enter score"><br><br><input type="submit" name="button2" style="width:80px;height:25px;color:white;background-color:grey;font-weight:bold;font-size:16px;text-align:center" value="Go"></form>
				<?php 
				if(isset($_GET['button2'])){
				$score=$_GET['score'];
				$bname=array_search($score,$avgscores);
				echo "<table border=2 align=center style='border-color:black;border-style:solid;font-weight:bold' bgcolor=yellow>";
				echo "<tr><td></td><th align=left><u>Batsman</u></th><th><u>Average Score</u></th></tr>";
					echo "<tr><td>$1.</td><td>$bname</td><td align=center>".number_format($score,2)."</td><tr>";
				echo "</table>";
				}
				break;

			case 'Random batsman':
				$key=array_rand($avgscores);
				echo "<h2><u>A batsman at random</u></h2>";
				echo "<table  border=3 align=center bgcolor=yellow>";
				echo "<tr><th align=center><u>Batsman</u></th></tr>";
					echo "<tr><td align=center>$key</td><tr>";
				echo "</table>";
				break;
			case 'Reverse list':
				$avg=array_reverse($avgscores,TRUE);
				echo "<h2><u>Reversed batsmen list</u></h2>";
				echo "<table  border=2 align=center style='border-color:black;border-style:solid;font-weight:bold' bgcolor=yellow>";
				echo "<tr><td></td><th align=left><u>Batsman</u></th><th><u>Average Score</u></th></tr>";
				$i=1;
				foreach($avg as $cr=>$scores){
					echo "<tr><td>$i.</td><td>$cr</td><td align=center>".number_format($scores,2)."</td><tr>";
					$i++;
				}
				echo "</table>";
				break;
			case 'Batsmen names':
				$keys=array_keys($avgscores);
				echo "<h2><u>Batmen names</u></h2>";
				echo "<table  border=2 align=center style='border-color:black;border-style:solid;font-weight:bold' bgcolor=yellow>";
				echo "<tr><th><u>S.NO</u></th><th align=center><u>Batsmen</u></th></tr>";
				$i=1;
				foreach($keys as $cr){
					echo "<tr><td>$i.</td><td>$cr</td><tr>";
					$i++;
				}
				echo "</table>";
				break;
		}
	}
	echo "</div>";
?>

</center>
</body>
</html>