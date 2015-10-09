<?php
	class DbConfig {
		private static $Environment = "development";
		
		public static $ServerKey = 'server';
		public static $EngineKey = 'engine';
		public static $UsernameKey = 'username';
		public static $PasswordKey = 'password';
		public static $PortKey = 'port';
		public static $Database = 'auction';
		
		public static function getConfig() {
			switch (DbConfig::$Environment) {
				case 'development':
					return  array(
						DbConfig::$ServerKey => 'localhost',
						DbConfig::$EngineKey => 'mysql',
						DbConfig::$UsernameKey => 'root',
						DbConfig::$PasswordKey => '',
						DbConfig::$PortKey => '',
						DbConfig::$Database => 'auction'
					);
					break;	
				default:
					
					return  array(
						DbConfig::$ServerKey => 'localhost',
						DbConfig::$EngineKey => 'mysql',
						DbConfig::$UsernameKey => 'root',
						DbConfig::$PasswordKey => '',
						DbConfig::$PortKey => '',
						DbConfig::$Database => 'auction'
					);
					break;
			}
		}
	}	
?>