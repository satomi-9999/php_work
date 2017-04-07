--路線会社マスタ
CREATE TABLE m_route_company (
  route_id integer(10) NOT NULL,
  route_nm varchar(45) NOT NULL,
  company_id integer(10) DEFAULT NULL,
  PRIMARY KEY (route_id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='路線会社マスタ'
;