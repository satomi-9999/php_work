--駅マスタ
CREATE TABLE m_station (
  station_id integer(10) NOT NULL,
  station_nm varchar(45) DEFAULT NULL,
  station_address varchar(45) DEFAULT NULL,
  PRIMARY KEY (station_id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='駅マスタ'
;