<?php
/**
 * @package futureis404
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<h1 class="entry-title"><a href="<?php the_permalink(); ?>" title="<?php printf( esc_attr__( 'Permalink to %s', 'futureis404' ), the_title_attribute( 'echo=0' ) ); ?>" rel="bookmark"><?php the_title(); ?></a></h1>

		<?php if ( 'post' == get_post_type() ) : ?>
		<div class="entry-meta" id="header-entry-meta">
			<?php futureis404_posted_on(); ?>
		</div><!-- .entry-meta -->
		<?php endif; ?>
	</header><!-- .entry-header -->

	<?php if ( is_search() ) : // Only display Excerpts for Search ?>
	<div class="entry-summary">
		<?php the_excerpt(); ?>
	</div><!-- .entry-summary -->
	<?php else : ?>
	<div class="entry-content">
		<?php the_content( __( '全文阅读 <span class="meta-nav">&rarr;</span>', 'futureis404' ) ); ?>
		<?php wp_link_pages( array( 'before' => '<div class="page-link">' . __( 'Pages:', 'futureis404' ), 'after' => '</div>' ) ); ?>
	</div><!-- .entry-content -->
	<?php endif; ?>

	<footer class="entry-meta">
		<?php if ( 'post' == get_post_type() ) : // Hide category and tag text for pages on Search ?>
			<?php
				/* translators: used between list items, there is a space after the comma */
				$categories_list = get_the_category_list( __( ', ', 'futureis404' ) );
				if ( $categories_list && futureis404_categorized_blog() ) :
			?>
			<span class="cat-links">
				<?php printf( __( '文章发表在： %1$s', 'futureis404' ), $categories_list ); ?>
			</span>
			
			<?php endif; // End if categories ?>

			<?php
				/* translators: used between list items, there is a space after the comma */
				$tags_list = get_the_tag_list( '', __( ', ', 'futureis404' ) );
				if ( $tags_list ) :
			?>
			<span class="tag-links">
				<?php printf( __( '标签: %1$s', 'futureis404' ), $tags_list ); ?>
			</span>
			
			<?php endif; // End if $tags_list ?>
		<?php endif; // End if 'post' == get_post_type() ?>
<span class="sep">  </span>
		<?php if ( comments_open() || ( '0' != get_comments_number() && ! comments_open() ) ) : ?>
		<span class="comments-link"><?php comments_popup_link( __( '[发表评论]', 'futureis404' ), __( '1 评论', 'futureis404' ), __( '% 评论', 'futureis404' ) ); ?></span>
<span class="sep">  </span>
		<?php endif; ?>

		<?php edit_post_link( __( '[编辑]', 'futureis404' ), '<span class="edit-link">', '</span>' ); ?>
<span class="hotview">
<?php if ( function_exists('the_views') ){ the_views(); } ?>
</span>
	</footer><!-- #entry-meta -->
</article><!-- #post-<?php the_ID(); ?> -->
