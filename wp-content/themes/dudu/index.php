<? get_header(); ?>

<div class="container-fluid" >
<div class="row">
	<?
		if(have_posts()) {
			while (have_posts()) {
				the_post();
				?>
				
				<div class="clo-md-8">
				<div class="post-title">
				<h2><a href="<?php the_permalink(); ?>"><? the_title(); ?></a></h2>
				</div>
				<div class="post-meta">
					分类：<? the_category(','); ?><span>/</span>
					作者：<? the_author(); ?><span>/</span>
					发布时间：<? the_time('Y-m-d'); ?><span>/</span>
				</div>
				<div class="post-contens"><?php the_excerpt(); ?></div>
				</div>

				
				<?
			}

		}
			else{echo '没有文章显示';}


	?>
<? get_sidebar() ?>
</div>
</div>


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