--路線駅マスタ
CREATE TABLE m_route_station (
  route_id integer(10) NOT NULL,
  station_id integer(10) NOT NULL,
  PRIMARY KEY (route_id, station_id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='路線駅マスタ'
;