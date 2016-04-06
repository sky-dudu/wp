<!DOCTYPE html>
<html lang="zh-CN">
<head>
	<meta http-equiv="content-type";content="txt/html"; charset="<? bloginfo( "charset" ); ?>">
	<title><? bloginfo( "name" ); ?></title>
	<!--<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>" media="screen" /></link>-->
	<link rel="stylesheet" type="text/css" href="<? bloginfo('stylesheet_url');?>"/>
</head>
<body>
<div class="header">
<h1><? bloginfo( 'name' ); ?></h1>
<? $fangwencishu=get_option('fangwencishu'); 
update_option( 'fangwencishu', $fangwencishu+1);
?>
<p><? bloginfo( "description" ); ?><span>访问量 <? echo $fangwencishu ; ?></span></p>
</div>
<?php wp_nav_menu( ) ?>
