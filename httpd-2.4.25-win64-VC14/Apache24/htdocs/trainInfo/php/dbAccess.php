<?php

/*
	uM_COMPANYv‚Ö‚Ì“o˜^ŽÀsˆ—
*/
function insertCompany(SimpleXMLElement $m_company_xml) {

	try {

		$dbh = dbConnect("satomi", "satominn");
		
		$sql = "insert into m_company values (?, ?)";
		$prepare = $dbh->prepare($sql);
		
		foreach  ($m_company_xml->m_company as $m_company) {
			
			$prepare->bindValue(1,(int)$m_company->company_id,PDO::PARAM_INT);
			$prepare->bindValue(2,$m_company->company_nm,PDO::PARAM_STR);
			$prepare->execute();
			$count += $prepare->rowCount();
		}
				
		return $count;
			
	} catch (PDOException $e) {
	    throw $e;

	}
	
}

/*
	uM_STATIONv‚Ö‚Ì“o˜^ŽÀsˆ—
*/
function insertStation(SimpleXMLElement $m_station_xml) {

	try {

			$dbh = dbConnect("satomi", "satominn");
			
			$sql = "insert into m_station values (?, ?, ?)";
			$prepare = $dbh->prepare($sql);
			
			foreach  ($m_station_xml->m_station as $m_station) {
				
				$prepare->bindValue(1,(int)$m_station->station_id,PDO::PARAM_INT);
				$prepare->bindValue(2,$m_station->station_nm,PDO::PARAM_STR);
				$prepare->bindValue(3,$m_station->station_address,PDO::PARAM_STR);
				$prepare->execute();
				$count += $prepare->rowCount();
			}
				
			return $count;

	} catch (PDOException $e) {
	    throw $e;

	}
	
}

/*
	uM_FEEv‚Ö‚Ì“o˜^ŽÀsˆ—
*/
function insertFee(SimpleXMLElement $m_fee_xml) {
	try {

			$dbh = dbConnect("satomi", "satominn");
			
			$sql = "insert into m_fee values (?, ?)";
			$prepare = $dbh->prepare($sql);
			
			foreach  ($m_fee_xml->m_fee as $m_fee) {
								
				$prepare->bindValue(1,(int)$m_fee->company_id,PDO::PARAM_INT);
				$prepare->bindValue(2,(int)$m_fee->fee_km,PDO::PARAM_INT);
				$prepare->execute();
				$count += $prepare->rowCount();
			}
				
			return $count;

	} catch (PDOException $e) {
	echo $e->getMessage();
	    throw $e;

	}
	
}

/*
	uM_ROUTE_COMPANYv‚Ö‚Ì“o˜^ŽÀsˆ—
*/
function insertRouteCompany(SimpleXMLElement $m_route_company_xml) {

	try {

			$dbh = dbConnect("satomi", "satominn");
			
			$sql = "insert into m_route_company values (?, ?, ?)";
			$prepare = $dbh->prepare($sql);
			
			foreach  ($m_route_company_xml->m_route_company as $m_route_company) {
				
				$prepare->bindValue(1,(int)$m_route_company->route_id,PDO::PARAM_INT);
				$prepare->bindValue(2,$m_route_company->route_nm,PDO::PARAM_STR);
				$prepare->bindValue(3,(int)$m_route_company->company_id,PDO::PARAM_INT);
				$prepare->execute();
				$count += $prepare->rowCount();
			}
				
			return $count;

	} catch (PDOException $e) {
	    throw $e;

	}
	
}
/*
	uM_ROUTE_STATIONv‚Ö‚Ì“o˜^ŽÀsˆ—
*/
function insertRouteStation(SimpleXMLElement $m_route_station_xml) {

	try {

			$dbh = dbConnect("satomi", "satominn");
			
			$sql = "insert into m_route_station values (?, ?)";
			$prepare = $dbh->prepare($sql);
			
			foreach  ($m_route_station_xml->m_route_station as $m_route_station) {
				
				$prepare->bindValue(1,(int)$m_route_station->route_id,PDO::PARAM_INT);
				$prepare->bindValue(2,(int)$m_route_station->station_id,PDO::PARAM_INT);
				$prepare->execute();
				$count += $prepare->rowCount();
			}
				
			return $count;

	} catch (PDOException $e) {
	    throw $e;

	}
	
}

/*
	uM_SECTIONv‚Ö‚Ì“o˜^ŽÀsˆ—
*/
function insertSection(SimpleXMLElement $m_section_xml) {

	try {

			$dbh = dbConnect("satomi", "satominn");
			
			$sql = "insert into m_section values (?, ?, ?, ?)";
			$prepare = $dbh->prepare($sql);
			
			foreach  ($m_section_xml->m_section as $m_section) {
				
				$prepare->bindValue(1,(int)$m_section->section_id,PDO::PARAM_INT);
				$prepare->bindValue(2,(int)$m_section->section_point_station_id,PDO::PARAM_INT);
				$prepare->bindValue(3,(int)$m_section->section_next_station_id,PDO::PARAM_INT);
				$prepare->bindValue(4,(int)$m_section->distance_km,PDO::PARAM_INT);
				$prepare->execute();
				$count += $prepare->rowCount();
			}
				
			return $count;

	} catch (PDOException $e) {
	    throw $e;

	}
	
}


function dbConnect($user, $password)
{

	//DBÚ‘±ƒIƒuƒWƒFƒNƒg¶¬
    $dbh = new PDO(
        'mysql:host=127.0.0.1;dbname=php_test;charset=utf8',
        $user,
        $password,
        array(
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_EMULATE_PREPARES => false,
        )
    );
    
    return $dbh;

}
?>
