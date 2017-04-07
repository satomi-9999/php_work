--ユーザーマスタ
CREATE TABLE m_user (
  user_id integer(11) NOT NULL,
  user_name varchar(45) DEFAULT NULL,
  user_pw varchar(45) DEFAULT NULL,
  PRIMARY KEY (user_id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='ユーザ情報マスタ'
;