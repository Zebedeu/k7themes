<?php
/**
 * The template for displaying archive pages.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package k7themes
 * @since k7themes' 1.0.0
 */
get_header();
?>

<div id="primary" class="content-area">
    <h5 class="archive-title"><?php new Apweb_breadcrumb(); ?></h5>
    <main id="main" class="site-main" role="main">

        <?php if (have_posts()) : ?>

            <header class="page-header">
                <?php
                the_archive_title('<h1 class="page-title">', '</h1>');
                the_archive_description('<div class="taxonomy-description">', '</div>');
                ?>
            </header><!-- .page-header -->

            <?php /* Start the Loop */ ?>
            <?php while (have_posts()) : the_post(); ?>

            <?php do_action('format_init'); ?>
            <?php endwhile; ?>

             <?php apweb_paging_nav(); ?>

        <?php else : ?>

            <?php do_action('none_init'); ?>

        <?php endif; ?>

    </main><!-- #main -->
</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
