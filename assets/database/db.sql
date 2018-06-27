create table pro_users(
	us_id int auto_increment primary key,
	us_name varchar(100),
	us_mobile bigint,
	us_email varchar(100),
	us_password varchar(100),
	us_status tinyint default 0,
	us_otp smallint
);

