 <?php
 	$method = isset($_GET['method']) ? $_GET['method'] : '';
	
	switch ($method) {
		case 'Api/Auctions/GetList':
			require 'Api/AuctionApiService/Invoke/GetList.php';
			break;
		
		default:
			
			break;
	}
 ?>
 
