<?php
 error_reporting(E_ALL & ~E_DEPRECATED);
 $connect = mysql_connect('localhost','root','14011995') or die(mysql_error());
 mysql_select_db('mysql');
 
 if(isset($_POST['bets-click'])){
		$login = $_POST['login'];
		$s = mysql_query("SELECT * FROM registration WHERE login= '$login'");
		$s_info = mysql_fetch_array($s);
		$Score = $s_info['score'];
		$Team1 = $_POST['Team1'];$Team2 = $_POST['Team2'];$Team3 = $_POST['Team3'];$Team4 = $_POST['Team4'];$Team5 = $_POST['Team5'];$Team6 = $_POST['Team6'];$Team7 = $_POST['Team7'];$Team8 = $_POST['Team8'];$Team9 = $_POST['Team9'];$Team10 = $_POST['Team10'];
		$Player_bet = $_POST['bet'];
		$result = mysql_query("SELECT * FROM football");
		$rows = mysql_num_rows($result);
		$coeff_info = array(0);
		for ($i=0; $i<$rows; $i++){
			$row = mysql_fetch_array($result);
			$coeff_info[]=$row[2];
		}
		$coeff1 = $coeff_info[1];$coeff2 = $coeff_info[2];$coeff3 = $coeff_info[3];$coeff4 = $coeff_info[4];$coeff5 = $coeff_info[5];$coeff6 = $coeff_info[6];$coeff7 = $coeff_info[7];$coeff8 = $coeff_info[8];$coeff9 = $coeff_info[9];$coeff10 = $coeff_info[9];
	// Первый блок
	if (isset($_REQUEST['check1'])){
		$CountT1 = rand (1, $coeff2);
		$CountT2 = rand (1, $coeff1);
		if ($CountT1 >= $CountT2){
			$Winner = $Team1;
		} else {
			$Winner = $Team2;
		}
		$Coeff = $coeff2;
		$Player_Team = $Team1;
		$query = mysql_query("INSERT INTO all_matches VALUES (0,'$login','$Team1','$Team2','$CountT1','$CountT2','$Winner','$Player_bet','$Coeff','$Player_Team')") or die(mysql_error());
		if ($Winner==$Player_Team){
			echo 'вы победили';$p_prize=$Score+$Player_bet*$Coeff;
			$prize = mysql_query("UPDATE registration SET score= '$p_prize' WHERE login= '$login'") or die(mysql_error());
		} else {
			echo 'вы проиграли';$p_prize=$Score-$Player_bet;
			$prize = mysql_query("UPDATE registration SET score= '$p_prize' WHERE login= '$login'") or die(mysql_error());
		}
	} else {
		if(isset($_REQUEST['check2'])){
			$CountT1 = rand (1, $coeff2);
			$CountT2 = rand (1, $coeff1);
			if ($CountT1 >= $CountT2){
				$Winner = $Team1;
			} else {
				$Winner = $Team2;
			}
			$Coeff = $coeff1;
			$Player_Team = $Team2;
			$query = mysql_query("INSERT INTO all_matches VALUES (0,'$login','$Team1','$Team2','$CountT1','$CountT2','$Winner','$Player_bet','$Coeff','$Player_Team')") or die(mysql_error());
			if ($Winner==$Player_Team){
				echo 'вы победили';$p_prize=$Score+$Player_bet*$Coeff;
				$prize = mysql_query("UPDATE registration SET score= '$p_prize' WHERE login= '$login'") or die(mysql_error());
			} else {
				echo 'вы проиграли';$p_prize=$Score-$Player_bet;
				$prize = mysql_query("UPDATE registration SET score= '$p_prize' WHERE login= '$login'") or die(mysql_error());
			}
		}
	}
	
	//Второй блок
	if (isset($_REQUEST['check3'])){
		$CountT1 = rand (1, $coeff4);
		$CountT2 = rand (1, $coeff3);
		if ($CountT1 >= $CountT2){
			$Winner = $Team3;
		} else {
			$Winner = $Team4;
		}
		$Coeff = $coeff3;
		$Player_Team = $Team3;
		$query = mysql_query("INSERT INTO all_matches VALUES (0,'$login','$Team3','$Team4','$CountT1','$CountT2','$Winner','$Player_bet','$Coeff','$Player_Team')") or die(mysql_error());
		if ($Winner==$Player_Team){
			echo 'вы победили';$p_prize=$Score+$Player_bet*$Coeff;
			$prize = mysql_query("UPDATE registration SET score= '$p_prize' WHERE login= '$login'") or die(mysql_error());
		} else {
			echo 'вы проиграли';$p_prize=$Score-$Player_bet;
			$prize = mysql_query("UPDATE registration SET score= '$p_prize' WHERE login= '$login'") or die(mysql_error());
		}
	} else {
		if(isset($_REQUEST['check4'])){
			$CountT1 = rand (1, $coeff4);
			$CountT2 = rand (1, $coeff3);
			if ($CountT1 >= $CountT2){
				$Winner = $Team3;
			} else {
				$Winner = $Team4;
			}
			$Coeff = $coeff4;
			$Player_Team = $Team4;
			$query = mysql_query("INSERT INTO all_matches VALUES (0,'$login','$Team3','$Team4','$CountT1','$CountT2','$Winner','$Player_bet','$Coeff','$Player_Team')") or die(mysql_error());
			if ($Winner==$Player_Team){
				echo 'вы победили';$p_prize=$Score+$Player_bet*$Coeff;
				$prize = mysql_query("UPDATE registration SET score= '$p_prize' WHERE login= '$login'") or die(mysql_error());
			} else {
				echo 'вы проиграли';$p_prize=$Score-$Player_bet;
				$prize = mysql_query("UPDATE registration SET score= '$p_prize' WHERE login= '$login'") or die(mysql_error());
			}
		}
	}
	
	// Третий блок
	if (isset($_REQUEST['check5'])){
		$CountT1 = rand (1, $coeff6);
		$CountT2 = rand (1, $coeff5);
		if ($CountT1 >= $CountT2){
			$Winner = $Team5;
		} else {
			$Winner = $Team6;
		}
		$Coeff = $coeff5;
		$Player_Team = $Team5;
		$query = mysql_query("INSERT INTO all_matches VALUES (0,'$login','$Team5','$Team6','$CountT1','$CountT2','$Winner','$Player_bet','$Coeff','$Player_Team')") or die(mysql_error());
		if ($Winner==$Player_Team){
			echo 'вы победили';$p_prize=$Score+$Player_bet*$Coeff;
			$prize = mysql_query("UPDATE registration SET score= '$p_prize' WHERE login= '$login'") or die(mysql_error());
		} else {
			echo 'вы проиграли';$p_prize=$Score-$Player_bet;
			$prize = mysql_query("UPDATE registration SET score= '$p_prize' WHERE login= '$login'") or die(mysql_error());
		}
	} else {
		if(isset($_REQUEST['check6'])){
			$CountT1 = rand (1, $coeff6);
			$CountT2 = rand (1, $coeff5);
			if ($CountT1 >= $CountT2){
				$Winner = $Team5;
			} else {
				$Winner = $Team6;
			}
			$Coeff = $coeff6;
			$Player_Team = $Team6;
			$query = mysql_query("INSERT INTO all_matches VALUES (0,'$login','$Team5','$Team6','$CountT1','$CountT2','$Winner','$Player_bet','$Coeff','$Player_Team')") or die(mysql_error());
			if ($Winner==$Player_Team){
				echo 'вы победили';$p_prize=$Score+$Player_bet*$Coeff;
				$prize = mysql_query("UPDATE registration SET score= '$p_prize' WHERE login= '$login'") or die(mysql_error());
			} else {
				echo 'вы проиграли';$p_prize=$Score-$Player_bet;
				$prize = mysql_query("UPDATE registration SET score= '$p_prize' WHERE login= '$login'") or die(mysql_error());
			}
		}
	}
	
	// Четвертый блок
	if (isset($_REQUEST['check7'])){
		$CountT1 = rand (1, $coeff8);
		$CountT2 = rand (1, $coeff7);
		if ($CountT1 >= $CountT2){
			$Winner = $Team7;
		} else {
			$Winner = $Team8;
		}
		$Coeff = $coeff7;
		$Player_Team = $Team7;
		$query = mysql_query("INSERT INTO all_matches VALUES (0,'$login','$Team7','$Team8','$CountT1','$CountT2','$Winner','$Player_bet','$Coeff','$Player_Team')") or die(mysql_error());
		if ($Winner==$Player_Team){
			echo 'вы победили';$p_prize=$Score+$Player_bet*$Coeff;
			$prize = mysql_query("UPDATE registration SET score= '$p_prize' WHERE login= '$login'") or die(mysql_error());
		} else {
			echo 'вы проиграли';$p_prize=$Score-$Player_bet;
			$prize = mysql_query("UPDATE registration SET score= '$p_prize' WHERE login= '$login'") or die(mysql_error());
		}
	} else {
		if(isset($_REQUEST['check8'])){
			$CountT1 = rand (1, $coeff8);
			$CountT2 = rand (1, $coeff7);
			if ($CountT1 >= $CountT2){
				$Winner = $Team7;
			} else {
				$Winner = $Team8;
			}
			$Coeff = $coeff8;
			$Player_Team = $Team8;
			$query = mysql_query("INSERT INTO all_matches VALUES (0,'$login','$Team7','$Team8','$CountT1','$CountT2','$Winner','$Player_bet','$Coeff','$Player_Team')") or die(mysql_error());
			if ($Winner==$Player_Team){
				echo 'вы победили';$p_prize=$Score+$Player_bet*$Coeff;
				$prize = mysql_query("UPDATE registration SET score= '$p_prize' WHERE login= '$login'") or die(mysql_error());
			} else {
				echo 'вы проиграли';$p_prize=$Score-$Player_bet;
				$prize = mysql_query("UPDATE registration SET score= '$p_prize' WHERE login= '$login'") or die(mysql_error());
			}
		}
	}
	
	// Пятый блок
	if (isset($_REQUEST['check9'])){
		$CountT1 = rand (1, $coeff10);
		$CountT2 = rand (1, $coeff9);
		if ($CountT1 >= $CountT2){
			$Winner = $Team9;
		} else {
			$Winner = $Team10;
		}
		$Coeff = $coeff9;
		$Player_Team = $Team9;
		$query = mysql_query("INSERT INTO all_matches VALUES (0,'$login','$Team9','$Team10','$CountT1','$CountT2','$Winner','$Player_bet','$Coeff','$Player_Team')") or die(mysql_error());
		if ($Winner==$Player_Team){
			echo 'вы победили';$p_prize=$Score+$Player_bet*$Coeff;
			$prize = mysql_query("UPDATE registration SET score= '$p_prize' WHERE login= '$login'") or die(mysql_error());
		} else {
			echo 'вы проиграли';$p_prize=$Score-$Player_bet;
			$prize = mysql_query("UPDATE registration SET score= '$p_prize' WHERE login= '$login'") or die(mysql_error());
		}
	} else {
		if(isset($_REQUEST['check10'])){
			$CountT1 = rand (1, $coeff10);
			$CountT2 = rand (1, $coeff9);
			if ($CountT1 >= $CountT2){
				$Winner = $Team9;
			} else {
				$Winner = $Team10;
			}
			$Coeff = $coeff10;
			$Player_Team = $Team10;
			$query = mysql_query("INSERT INTO all_matches VALUES (0,'$login','$Team9','$Team10','$CountT1','$CountT2','$Winner','$Player_bet','$Coeff','$Player_Team')") or die(mysql_error());
			if ($Winner==$Player_Team){
				echo 'вы победили';$p_prize=$Score+$Player_bet*$Coeff;
				$prize = mysql_query("UPDATE registration SET score= '$p_prize' WHERE login= '$login'") or die(mysql_error());
			} else {
				echo 'вы проиграли';$p_prize=$Score-$Player_bet;
				$prize = mysql_query("UPDATE registration SET score= '$p_prize' WHERE login= '$login'") or die(mysql_error());
			}
		}
	}

 }
 
 ?>