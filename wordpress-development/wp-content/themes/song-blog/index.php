<!-- <?php get_template_part('templates/page', 'header'); ?> -->

  <section class="song-blog">
    <h1 class="text-center"><?php the_field('date'); ?></h1>
    <div class="post-cont">

      <?php if (!have_posts()) : ?>
        <div class="alert alert-warning">
          <?php _e('Sorry, no results were found.', 'sage'); ?>
        </div>
        <?php get_search_form(); ?>
      <?php endif; ?>

      <?php while (have_posts()) : the_post(); ?>
        <!-- <?php get_template_part('templates/content', get_post_type() != 'post' ? get_post_type() : get_post_format()); ?> -->
        <div class="hover-pad">
          <div class="post" data-date="<?php the_field('date'); ?>">
            <div class="face front">
              <img src="<?php the_field('front_image'); ?>" alt="">
            </div>
            <div class="face back">
              <div class="overlay"></div>
              <img src="<?php the_field('back_image'); ?>" alt="">
              <iframe
              class="spotify-widget"
              src="<?php the_field('spotify_uri'); ?>"
              width="45%"
              height="55%"
              frameborder="0"
              allowtransparency="true">
              </iframe>
            </div>
          </div>
        </div>
      <?php endwhile; ?>

    </div>
  </section>

<?php the_posts_navigation(); ?>
