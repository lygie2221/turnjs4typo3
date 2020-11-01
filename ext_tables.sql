#
# Table structure for table 'tx_turnjs4typo3_domain_model_document'
#
CREATE TABLE tx_turnjs4typo3_domain_model_document (
	name varchar(255) DEFAULT '' NOT NULL,
	images int(11) unsigned NOT NULL default '0',
	autosize tinyint(4) DEFAULT '1' NOT NULL,
	acceleration tinyint(4) DEFAULT '1' NOT NULL,
    autocenter tinyint(4) DEFAULT '0' NOT NULL,
    direction varchar(255) DEFAULT 'ltr' NOT NULL,
    display varchar(255) DEFAULT 'double' NOT NULL,
    duration int(11) unsigned NOT NULL default 600,
    gradients tinyint(4) DEFAULT '1' NOT NULL,
    height int(11) unsigned NOT NULL default '0',
    elevation int(11) unsigned NOT NULL default '0',
    page int(11) unsigned NOT NULL default '1',
    pages int(11) unsigned NOT NULL default '0',
    turncorners varchar(255) DEFAULT 'bl;br' NOT NULL,
    when varchar(255) DEFAULT '' NOT NULL,
    width int(11) unsigned NOT NULL default '0',
    zoom int(11) unsigned NOT NULL default '0',
);
