<?php
	error_reporting(0);//警告無効
	
	require "dbAccess.php";

//	echo $_POST['filename'];
//	echo("\n");

	$xml = $_FILES['inputFile']['tmp_name'];//ファイルを指定
	$xmlData = simplexml_load_file($_POST['filename']);//xmlファイルを読み込む(→SimpleXMLElement)

	$cnt = 0;
	try {
	
	//POSTされたファイル名で登録処理を分岐
	    
	    $fileName = basename($_POST['filename'], ".xml");
	    echo $fileName;
	    if ($fileName == "m_company") {
			$cnt += insertCompany($xmlData);
	    } else if ($fileName == "m_fee") {
			$cnt += insertFee($xmlData);
	    } else if ($fileName == "m_route_company") {
			$cnt += insertRouteCompany($xmlData);
	    } else if ($fileName == "m_route_station") {
			$cnt += insertRouteStation($xmlData);
	    } else if ($fileName == "m_section") {
			$cnt += insertSection($xmlData);
	    } else if ($fileName == "m_station") {
			$cnt += insertStation($xmlData);
	    }
		
		
	} catch (PDOException $e) {
		echo "error occured.(" . $e->getMessage().")";
		print("\n");

	}
	
	echo $cnt."件登録しました。";



?>
