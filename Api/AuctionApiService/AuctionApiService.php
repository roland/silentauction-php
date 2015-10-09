<?php
	require("BLL/Services/AuctionService.php");
	require("Config/All.php");
	require("DAL/All.php");
	
	class AuctionApiService {
		private $auctionService;
		private $adapter;
		
		function __construct() {
			$this->adapter = new DbAdapter(DbConfig::getConfig());
			$this->auctionService = new AuctionService($this->adapter);
		}
		
		public function getList() {
			return $this->auctionService->getList();
		}
	}
?>