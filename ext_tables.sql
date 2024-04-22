CREATE TABLE tx_simpleproducts_domain_model_product (
	title varchar(255) NOT NULL DEFAULT '',
	slug varchar(255) NOT NULL DEFAULT '',
	description text NOT NULL DEFAULT '',
	price double(11,2) NOT NULL DEFAULT '0.00',
	images int(11) unsigned NOT NULL DEFAULT '0',
	downloads int(11) unsigned NOT NULL DEFAULT '0',
	category varchar(255) DEFAULT '' NOT NULL
);
