<?php

//print_r($_SERVER);die();

$sitepad['db_name'] = 'sp199';
$sitepad['db_user'] = 'sp199';
$sitepad['db_pass'] = 'g76@1p5S8]';
$sitepad['db_host'] = 'localhost';
$sitepad['db_table_prefix'] = 'spbu_';
$sitepad['charset'] = 'utf8mb4';
$sitepad['collate'] = 'utf8mb4_unicode_ci';
$sitepad['serving_url'] = '127.0.0.1/sp';// URL without protocol but with directory as well
$sitepad['url'] = 'http://127.0.0.1/sp';
$sitepad['relativeurl'] = '/sp';
$sitepad['.sitepad'] = 'C:\Program Files\Ampps/private';
$sitepad['sitepad_plugin_path'] = 'C:/Program Files/Ampps/ampps/scripts/sitepad';
$sitepad['editor_path'] = 'C:/Program Files/Ampps/ampps/scripts/sitepad/editor';
$sitepad['path'] = dirname(__FILE__);
$sitepad['AUTH_KEY'] = 'lprp9gzp3bpvxqlbvmjoxzufma1wof5arkdwqdaqfwisxvfnojbym5op0otgplmg';
$sitepad['SECURE_AUTH_KEY'] = '1enyiktxlbjk3rhhqw2rzbliv4ua0jwk4vbzwimlejl0uxrblygi18xuijso33gx';
$sitepad['LOGGED_IN_KEY'] = 'gqfpmhlyipv3ewtd80kwma9eax7kgujzz10u2xjybivzs6dznltqgba8onmpxp8k';
$sitepad['NONCE_KEY'] = 'dpviv0auwedabs6aaucoihd2pixayotk8uow2zqnou5pzzkmyfotlyrrow3oxp3p';
$sitepad['AUTH_SALT'] = 'fz095mtzhimazylylm46zxqmmssjn4ka6uilje2fycf60exzzpvrvzuvqnp8qkxs';
$sitepad['SECURE_AUTH_SALT'] = 'guxoxuwlmawyox4lfzl0ytkrzcvtqxgbswoa2cu647se6y215dp3scbedh2hr0nm';
$sitepad['LOGGED_IN_SALT'] = 'ogar3uvrjjn6i2f3ve3s0datsnrijgflfsed4tv93bjyoa8a7m3wtvs81vjoeyav';
$sitepad['NONCE_SALT'] = '3ul3p9dncrorwfp7gayq2gqseu7jkuk9o99nmugirmqbpco3mheivddywtx3qw8k';

if(!include_once($sitepad['editor_path'].'/site-inc/bootstrap.php')){
	die('Could not include the bootstrap.php. One of the reasons could be open_basedir restriction !');
}

