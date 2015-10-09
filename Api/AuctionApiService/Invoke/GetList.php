<?php
	header('Content-Type: application/json; charset=UTF-8');
	
	require('Api/AuctionApiService/AuctionApiService.php');
	
	$service = new AuctionApiService();
	
	echo json_encode($service->getList());
?>