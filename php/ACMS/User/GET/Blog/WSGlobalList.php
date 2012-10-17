<?php

// /php/ACMS/User/GET/Blog/WSGlobalList.php

require_once ACMS_LIB_DIR.'GET.php';

class ACMS_User_GET_Blog_WSGlobalList extends ACMS_GET
{

	function get()
	{

$DB = DB::singleton(dsn());
$q = "SELECT * FROM acms_blog";

// ブログ情報を配列で取得
$blogArr = $DB->query($q, 'all');

foreach ( $blogArr as $var ) {
	$output[] = array(
		'domain' => $var["blog_domain"],
		'name'   => $var["blog_name"],
		'id'     => $var["blog_id"],
	);
}

// Templateクラス
$Tpl = new Template($this->tpl, new ACMS_Corrector());

// ブログ情報をループに投入
foreach ( $output as $var ) {
	$Tpl->add('blog:loop', $var);
}

// テンプレートを処理済みの文字列としてreturn
return $Tpl->get();

    }
}

?>