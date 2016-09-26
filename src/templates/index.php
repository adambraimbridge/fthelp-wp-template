<?php
/**
 * The next help main template file
 *
 * @package WordPress
 * @subpackage next_help
 * @since next_help 1.0
 */

get_header(); ?>

    <?php get_template_part( 'breadcrumbs' ); ?>

    <div class="content-template">

      <?php get_template_part( 'helpSearchForm' ); ?>

      <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    
        <?php get_template_part( 'page-heading-container' ); ?>

        <div class="content">
          <div></div>
          <?php the_content(__('(more...)')); ?>
  
          <h2 class="o-typography-subhead--crosshead">RELATED QUESTIONS</h2>

          <?php echo do_shortcode('[siblings depth="1" exclude="current" sort_column="menu_order" class="related" link_after=" <span class=\'caret\'>&nbsp;</span>"]') ?>

        </div>
        
        <?php get_template_part( 'back-to-top' ); ?>

      <?php endwhile; else: ?>
        <?php _e('Sorry, no pages matched your criteria.'); ?>
      <?php endif; ?>

    </div>

<?php get_footer(); ?>