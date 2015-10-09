<?php
	class DbAdapter {
		private $dbConfig;
		private $link;
		
		function __construct($config) {
			$this->dbConfig = $config;
		}
		
		public function open() {
			$this->link = mysqli_connect($this->dbConfig[DbConfig::$ServerKey], $this->dbConfig[DbConfig::$UsernameKey], $this->dbConfig[DbConfig::$PasswordKey],
			$this->dbConfig[DbConfig::$Database]);
			if (mysqli_connect_error())
			{
    			die("Could not connect: " . mysqli_error());
			}
		}		
		
		public function close() {
			mysqli_close($this->link);
		}
		
		public function get($sql) {
			$this->open();
			
			$rows = array();
			$result = mysqli_query($this->link, $sql) or die(mysqli_error($this->link));
			while ($row = mysqli_fetch_assoc($result)) {
				array_push($rows, $row);
			}
			
			mysqli_free_result($result);
			
			$this->close();
			
			return $rows;
		}
		
		
		public function query($sql) {
			$this->open();
			
			mysqli_query($this->link, $sql);
			
			$this->close();
		}
		
	}
?>