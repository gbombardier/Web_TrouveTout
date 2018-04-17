<?php
	
	class Connection {
		private static $connection;

		public static function getConnection($username, $pwd) {
			if (Connection::$connection == null) {
				try {
					Connection::$connection = new PDO("oci:dbname=" . "decinfo", $username, $pwd);
					Connection::$connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
					Connection::$connection->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
				} catch (Exception $e) {
					echo 'Exception reçue : ',  $e->getMessage(), "\n";
				}
				
			}

			return Connection::$connection;
		}

	}