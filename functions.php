function permak($str, $replace=array(), $delimiter='-') {
if( !empty($replace) ) {
$str = str_replace((array)$replace, ' ', $str);
}

$clean = iconv('UTF-8', 'ASCII//IGNORE', $str);
$clean = preg_replace("/[^a-zA-Z0-9\/_|+ -]/", '', $clean);
$clean = strtolower(trim($clean, '-'));
$clean = preg_replace("/[\/_|+ -]+/", $delimiter, $clean);

return $clean;
}
