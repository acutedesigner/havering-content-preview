te part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Intranet
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php
			if ( is_single() ) {
				the_title( '<h1 class="entry-title">', '</h1>' );
			} else {
				the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
			}

		if ( 'post' === get_post_type() ) : ?>
		<div class="entry-meta">
			<?php skeleton_posted_on(); ?>
		</div><!-- .entry-meta -->
		<?php
		endif; ?>
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php
			the_content( sprintf(
				/* translators: %s: Name of current post. */
				wp_kses( __( 'Continue reading %s <span class="meta-nav">&rarr;</span>', 'skeleton' ), array( 'span' => array( 'class' => array() ) ) ),
				the_title( '<span class="screen-reader-text">"', '"</span>', false )
			) );

			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'skeleton' ),
				'after'  => '</div>',
			) );
		?>

		<?php if( have_rows('file_resources') ): ?>
		<h2>File downloads</h2>
		<table style="border: 1px solid #CCCCCC;">
		<?php
			while ( have_rows('file_resources') ) : the_row();
				$file = get_sub_field('file_resource_download');
		?>

			<tr>
				<td><a href="<?php echo $file['url']; ?>"><?php echo $file['title']; ?></a></td>
				<td><?php echo $file['description']; ?></td>
				<td><?php echo $file['type']; ?></td>
			</tr>

		<?php endwhile;?>
		</table>
		<?php else: ?>

		<?php endif; ?>

	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php skeleton_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->

