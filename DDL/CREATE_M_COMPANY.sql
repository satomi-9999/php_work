--運営会社マスタ
CREATE TABLE m_company (
  company_id integer(10) NOT NULL,
  company_nm varchar(45) DEFAULT NULL,
  PRIMARY KEY (company_id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='運営会社マスタ'
;