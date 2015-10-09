<?php
	require('BLL/Entities/All.php');

	class AuctionService {
		private $adapter;
		
		function __construct($adapter) {
			$this->adapter = $adapter;	
		}
		
		public function getList() {
			$entities = array();
			$rows = $this->adapter->get("SELECT * FROM `auctions`");
			foreach($rows as $row) {
				array_push($entities, $this->map($row));
			}
			return $entities;
		}
		
		private function map($row) {
			$auction = new Auction();
			$auction->ID = $row['ID'];
			$auction->Description = $row['Description'];
			$auction->Title = $row['Title'];
			$auction->Picture_ID = $row['Picture_ID'];
			return $auction;
		}
	}
	
?>