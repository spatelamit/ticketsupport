<?php
$installer = $this;
$installer->startSetup();
$sql=<<<SQLTEXT
create table MyModule(id int not null auto_increment, 
fullname varchar(100), email varchar(100),
orderid varchar(100), request_type varchar(50),
relatedfile varchar(255), message varchar(100),
status varchar(100), c_time varchar(100),
R_time varchar(100),
CustomerId int(11), ReplyMsg varchar(255),
primary key(id));		
SQLTEXT;

$installer->run($sql);
//demo 
//Mage::getModel('core/url_rewrite')->setId(null);
//demo 
$installer->endSetup();
	 
