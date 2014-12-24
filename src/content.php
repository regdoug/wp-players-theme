<?php
/**
 * Modified version of content.php from Cornerstone to add div wrapper and support for background images
 *
 * @package WordPress
 * @subpackage Cornerstone
 * @since Cornerstone 2.2.2
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?> style="<?php the_players_cover_image( get_the_ID() ) ?>">
    <div class="small-12 columns">
        <header class="entry-header coverimg" style="<?php the_players_cover_image( get_the_ID(), true ) ?>">
		<?php if ( is_single() ) : ?>
		<h1 class="entry-title"><?php the_title(); ?></h1>
		<?php else : ?>
		<h2 class="entry-title">
			<a href="<?php the_permalink(); ?>" title="<?php echo esc_attr( sprintf( __( 'Permalink to %s', 'cornerstone' ), the_title_attribute( 'echo=0' ) ) ); ?>" rel="bookmark"><?php the_title(); ?></a>
		</h2>
		<?php endif; // is_single() ?>
	</header>

	<?php if ( is_search() ) : // Only display Excerpts for Search ?>
	<div class="entry-summary">
		<?php the_excerpt(); ?>
	</div>
	<?php else : ?>
	<div class="entry-content">
		<?php the_content( __( 'Continue reading <span class="meta-nav">&rarr;</span>', 'cornerstone' ) ); ?>
		<?php wp_link_pages( array( 'before' => '<div class="page-links">' . __( 'Pages:', 'cornerstone' ), 'after' => '</div>' ) ); ?>
	</div>
	<?php endif; ?>

        <footer class="entry-meta">
                <?php $editurl = get_edit_post_link();
                    if($editurl):
                ?>
                <span class="edit-link">
                    <a class="post-edit-link tiny button" href="<?php echo $editurl ?>">
                        <?php echo __( 'Edit', 'cornerstone' ) ?>
                    </a>
                </span>
                <?php endif; ?>
		<?php cornerstone_entry_meta(); ?>
	</footer>
    </div>
</article>
