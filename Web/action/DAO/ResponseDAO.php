<?php
	require_once("action/DAO/Connection.php");

	class ResponseDAO {
		
		//utilisé
		public static function selectAll($tableName) {
			$connection = Connection::getConnection('e0943547', 'AAAaaa111');
			
			$sql = "SELECT * FROM " . $tableName;
			$statement = $connection->prepare($sql);
			$statement->setFetchMode(PDO::FETCH_ASSOC);
			$statement->execute();

			return $statement->fetchAll();
		}

		//utilisé
		public static function selectOneParam($tableName, $paramName) {
			$connection = Connection::getConnection('e0943547', 'AAAaaa111');
			
			$sql = "SELECT " . $paramName . " FROM " . $tableName;
			$statement = $connection->prepare($sql);
			$statement->setFetchMode(PDO::FETCH_ASSOC);
			$statement->execute();

			return $statement->fetchall();
		}

		//utilisé
		public static function selectWhere($tableName, $paramName, $where) {
			$connection = Connection::getConnection('e0943547', 'AAAaaa111');
			
			$sql = "SELECT * FROM " . $tableName . " WHERE " . $paramName . "='" . $where . "'";
			$statement = $connection->prepare($sql);
			$statement->setFetchMode(PDO::FETCH_ASSOC);
			$statement->execute();

			return $statement->fetchall();
		}

		public static function updateMap($tableName, $paramName, $newParamValue, $where) {
			$connection = Connection::getConnection('e0943547', 'AAAaaa111');
			
			$sql = "UPDATE " . $tableName . " SET " . $paramName . "='" . $newParamValue . "' WHERE ID_MAP = " . $where;
			$statement = $connection->prepare($sql);
			$statement->setFetchMode(PDO::FETCH_ASSOC);
			$statement->execute();

			return $sql;
		}

		public static function insertTuileMap($tableName, $idMap, $posX, $posY, $type, $arbre, $texture) {
			$connection = Connection::getConnection('e0943547', 'AAAaaa111');

			$sql = "INSERT INTO " . $tableName . " (ID_MAP,POS_X,POS_Y, TUILE_TYPE, ARBRE, TEXTURE) VALUES (" . $idMap . "," . $posX . "," . $posY . ",'" . $type . "'," . $arbre . ",'" .  $texture . "')";
			#$sql = "EXECUTE insert_tuile(". $idMap . "," . $posX . "," . $posY . ",'" . $type . "'," . $arbre . ",'" .  $texture ."')";
			$statement = $connection->prepare($sql);
			$statement->setFetchMode(PDO::FETCH_ASSOC);
			$statement->execute();

			return $sql;
		}

		public static function insertMap($tableName, $name, $date, $statut, $delaiMin, $delaiMax, $width, $height, $posX1, $posY1,$posX2, $posY2) {
			$connection = Connection::getConnection('e0943547', 'AAAaaa111');

			$sql = "INSERT INTO " . $tableName . " (NAME, DATE_CREATION, STATUT, DELAI_MIN, DELAI_MAX, WIDTH, HEIGHT, PLAYER1_X_POS, PLAYER1_Y_POS, PLAYER2_X_POS, PLAYER2_Y_POS) VALUES ('" . $name . "'," . $date . ",'" . $statut . "'," . $delaiMin . "," . $delaiMax . "," .  $width . "," . $height . ",". $posX1 . ",". $posY1 . ",". $posX2 . ",". $posY2 .")";
			#$sql = "EXECUTE insert_map('". $name . "','" . $date . "','" . $statut . "'," . $delaiMin . "," . $delaiMax . "," .  $width . "," . $height . ",". $posX1 . ",". $posY1 . ",". $posX2 . ",". $posY2 ."')";
			$statement = $connection->prepare($sql);
			$statement->setFetchMode(PDO::FETCH_ASSOC);
			$statement->execute();

			return $sql;
		}

		public static function deleteFrom($tableName, $idMap) {
			$connection = Connection::getConnection('e0943547', 'AAAaaa111');
			
			$sql = "DELETE FROM " . $tableName . " where id_map = " . $idMap;
			$statement = $connection->prepare($sql);
			$statement->setFetchMode(PDO::FETCH_ASSOC);
			$statement->execute();

			return $sql;
		}

	}