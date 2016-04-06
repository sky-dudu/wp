<!DOCTYPE html>
<html lang="en">
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
<div id="wenzhang">
	<?
		if(have_posts()) {
			while (have_posts()) {
				the_post();
				?>
				<div id="post-item">
				<div class="post-title">
				<h2><a href="<?php the_permalink(); ?>"><? the_title(); ?></a></h2>
				</div>
				<div class="post-meta">
					分类：<? the_category(','); ?><span>/</span>
					作者：<? the_author(); ?><span>/</span>
					发布时间：<? the_time('Y-m-d'); ?><span>/</span>
				</div>
				<div class="post-contens"><?php the_content(); ?></div>
				</div>
				<?
			}

		}
			else{echo '没有文章显示';}


	?>

</div>
<? get_sidebar() ?>

<!--<div class="liebiao">

<?php query_posts('cat=5&posts_per_page=4'); while(have_posts()): the_post(); ?>   
   <li><a href="<?php the_permalink(); ?>" target="_blank"><?php the_title();?></a></li>   
<?php endwhile; wp_reset_query(); ?>

<? query_posts('cat=5&post_pre_page=4');while ( have_posts()):the_post(); ?> 
<li><a href="<? the_permalink(); ?>" target='_blank'><? the_title(); ?></a></li>
<?php endwhile; wp_reset_query(); ?>	

</div> -->
</body>
</html>