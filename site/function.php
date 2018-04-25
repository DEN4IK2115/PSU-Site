<?php
	$mysqli = false;
	function connectDB(){
		global $mysqli;
		$mysqli = new mysqli("localhost", "id5512018_travelperm", "Casoflperm_1", "id5512018_perm");
		$mysqli->query("SET NAMES 'utf-8'");
	}
	
	function closeDB(){
		global $mysqli;
		$mysqli->close();
	}
	
	function getLions(){
		global $mysqli;
		connectDB();
		$result = $mysqli->query("SELECT * FROM `perm_lions` ORDER BY 'id'");
		closeDB();
		return resultToArray($result);
	}
	
	function getPlace(){
		global $mysqli;
		connectDB();
		$result = $mysqli->query("SELECT * FROM `perm_place` ORDER BY 'id'");
		closeDB();
		return resultToArray($result);
	}
	
	function getRestaurant(){
		global $mysqli;
		connectDB();
		$result = $mysqli->query("SELECT * FROM `perm_restaurant` ORDER BY 'id'");
		closeDB();
		return resultToArray($result);
	}
	
	function getRelax(){
		global $mysqli;
		connectDB();
		$result = $mysqli->query("SELECT * FROM `perm_relax` ORDER BY 'id'");
		closeDB();
		return resultToArray($result);
	}
	
	function resultToArray($result){
		$array = array();
		while($row = $result->fetch_assoc()){
			$array[] = $row;
		}
		return $array;
	}
?>