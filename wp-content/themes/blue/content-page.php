<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package futureis404
 * @since futureis404 1.0
 */
?>
<div class="article-all">
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<h1 class="entry-title"><?php the_title(); ?></h1>
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php the_content(); ?>
		<?php wp_link_pages( array( 'before' => '<div class="page-link">' . __( 'Pages:', 'futureis404' ), 'after' => '</div>' ) ); ?>
		<?php edit_post_link( __( '[编辑]', 'futureis404' ), '<span class="edit-link">', '</span>' ); ?>
	</div><!-- .entry-content -->
</article><!-- #post-<?php the_ID(); ?> -->
</div>