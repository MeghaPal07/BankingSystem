Create databse epiz_30024289_bank;
use epiz_30024289_bank;



create table bank (
	name varchar(250),
	acc int(12),
	bal int(20),
	address varchar(250),
	email varchar(100)
);


create table contact (
	name varchar(250),
	acc int(12),
	msg varchar(250),
);

create table transaction_history (
	from_account int(20),
	to_account int(20),
	transfer_amount int(20),
	date date

);