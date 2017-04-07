--区間マスタ
CREATE TABLE m_section (
  section_id integer(10) NOT NULL,
  section_point_station_id integer(10) NOT NULL,
  section_next_station_id integer(10),
  distance_km integer(5),
  PRIMARY KEY (section_id,section_point_station_id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='区間マスタ'
;