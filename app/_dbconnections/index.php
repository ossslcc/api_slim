<?
$container['db_name'] = function ($c) {
  $dbconfig = $c->settings['config']['dbs']['confirmations'];
  $db = new mysqli($dbconfig['host'], $dbconfig['username'], $dbconfig['password'],$dbconfig['dbname']);
  return $db;
};
