<?php
//PHPのドキュメントルートの中に'public'があれば空に置き換え、'ROOT_PATH'に定義
//'ROOT_PATH' = /Applications/MAMP/03_PHP応用/01_php_mvc/

ini_set('display_errors', 1);
define('ROOT_PATH',str_replace('public','',$_SERVER["DOCUMENT_ROOT"]));

//アクセスされているページのURLを取得($parse['path'] = /***.php)
$parse = parse_url($_SERVER["REQUEST_URI"]);
//ファイル名が省略されていた場合、index.phpを補填する
if(mb_substr($parse['path'],-1) === '/'){
  $parse['path'] .= $_SERVER["SCRIPT_NAME"];
}
require_once(ROOT_PATH.'Views'.$parse['path']);










// //現在実行されているスクリプトが存在するドキュメントルート
// define('ROOT_PATH', str_replace('public','', $_SERVER["DOCUMENT_ROOT"]));
// // var_dump($_SERVER["DOCUMENT_ROOT"]);
// $parse = PARSE_URL($_SERVER["REQUEST_URI"]);
// // var_dump($parse);
// //ファイル名が省略されていた場合、index.phpを補填する
// if(mb_substr($parse['path'], -1) === '/'){
// 	$parse['path'] .= $_SERVER["SCRIPT_NAME"];
// }
// // var_dump($_SERVER["SCRIPT_NAME"]);

// // require_once('/Users/minakuchimai/Desktop/phpdocs/MVC/Views/Players/index.php');
// // require_once(ROOT_PATH.'/MVC/Views'.$parse['path']);
// require_once($_SERVER["DOCUMENT_ROOT"].'Views'.$parse['path']);

?>
