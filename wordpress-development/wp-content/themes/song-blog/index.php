<!-- <?php get_template_part('templates/page', 'header'); ?> -->

  <section class="song-blog">
    <h1 class="text-center">1.12.18</h1>
    <div class="post-cont">

      <?php if (!have_posts()) : ?>
        <div class="alert alert-warning">
          <?php _e('Sorry, no results were found.', 'sage'); ?>
        </div>
        <?php get_search_form(); ?>
      <?php endif; ?>

      <?php while (have_posts()) : the_post(); ?>
        <!-- <?php get_template_part('templates/content', get_post_type() != 'post' ? get_post_type() : get_post_format()); ?> -->
      <?php endwhile; ?>

      <div class="hover-pad">
        <div class="post" data-date="1.12.18">
          <div class="face front">
            <img src="<?php echo get_template_directory_uri();?>/assets/images/albums/moby_play.png" alt="">
          </div>
          <div class="face back">
            <div class="overlay"></div>
            <img src="<?php echo get_template_directory_uri();?>/assets/images/albums/moby_play_back.jpg" alt="">
            <iframe
            class="spotify-widget"
            src="https://open.spotify.com/embed?uri=spotify:track:3oKtE2nfEm389qJKkFsf5k"
            width="45%"
            height="55%"
            frameborder="0"
            allowtransparency="true">
            </iframe>
          </div>
        </div>
      </div>

      <div class="hover-pad">
        <div class="post" data-date="1.13.18">
          <div class="face front">
            <img src="<?php echo get_template_directory_uri();?>/assets/images/albums/vietcong_cassettes.jpg" alt="">
          </div>
          <div class="face back">
            <div class="overlay"></div>
            <img src="<?php echo get_template_directory_uri();?>/assets/images/albums/vietcong_cassettes_back.jpg" alt="">
            <iframe
            class="spotify-widget"
            src="https://open.spotify.com/embed?uri=spotify:track:1cwQvSsMkFX0CAKs8UpWnU"
            width="45%"
            height="55%"
            frameborder="0"
            allowtransparency="true">
            </iframe>
          </div>
        </div>
      </div>

      <div class="hover-pad">
        <div class="post" data-date="1.16.18">
          <div class="face front">
            <img src="<?php echo get_template_directory_uri();?>/assets/images/albums/black_marble.jpg" alt="">
          </div>
          <div class="face back">
            <div class="overlay"></div>
            <img src="<?php echo get_template_directory_uri();?>/assets/images/albums/black_marble.jpg" alt="">
            <iframe
            class="spotify-widget"
            src="https://open.spotify.com/embed?uri=spotify:track:55oDt7v328TBWWrmGZB3UV"
            width="45%"
            height="55%"
            frameborder="0"
            allowtransparency="true">
            </iframe>
          </div>
        </div>
      </div>

    </div>
  </section>

<?php the_posts_navigation(); ?>
