<?
/***********************************
*
*     URLS
*
***********************************/

$container['upload_directory'] = __DIR__ . '/../../public';
$container['url_upload_directory'] = $config['settings']['url_base'].'public';



/***********************************
*
*     EXCEL
*
***********************************/

$container['PHPExcel'] = function($c) {
  $excel = new PHPExcel();
  return $excel;
};
