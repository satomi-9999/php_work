--会社区間料金マスタ
CREATE TABLE m_fee (
  company_id integer(11) NOT NULL,
  fee_km varchar(45) DEFAULT NULL,
  PRIMARY KEY (company_id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='会社区間料金マスタ'
;