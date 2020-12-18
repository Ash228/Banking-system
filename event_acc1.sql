SET GLOBAL event_scheduler = ON;

use project;
create event acc_interest
on schedule every 30 day
starts CURRENT_TIMESTAMP 
ends CURRENT_TIMESTAMP+ INTERVAL 30 day
do
	update account set balance=balance+((interest*balance/100)/12)  where 1=1;
    
alter event acc_interest
on schedule every 30 day;

show events from project;

use project;
create event dep_interest
on schedule every 30 day
starts CURRENT_TIMESTAMP 
ends CURRENT_TIMESTAMP+ INTERVAL 30 day
do
	update deposits set amount=amount+((roi*amount/100)/12)  where 1=1;
    
CREATE DEFINER=`root`@`localhost` TRIGGER `project`.`deposits_BEFORE_UPDATE` BEFORE UPDATE ON `deposits` FOR EACH ROW
BEGIN
		DECLARE ch FLOAT;
		SET ch=OLD.roi*OLD.amount/1200;
		INSERT into defchange(depid,difadded,adate) values (OLD.iddeposit,ch,CURDATE());
END