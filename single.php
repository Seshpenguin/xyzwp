<?php
/**
 *
 * Seshan.xyz Wordpress Single Post
 */

get_header();

?>
<div class="content" style="display: flex; min-height: 100vh; flex-direction: column;">
    <div class="container" style="flex: 1 1 auto;">
        <h4>Seshan's Blog</h4>
        <a href="<?php echo site_url(); ?>/blog/" class="waves-effect waves-light btn"><i class="material-icons left">keyboard_backspace</i>Back to Posts</a>
        <hr/>
        <div class="card-panel white browser-default">
            <?php
            if ( have_posts() ) {
                while (have_posts()) {
                    the_post();
                    ?>
                    <h5> <?php the_title(); ?></h5>
                    <h6><?php the_date(); ?></h6>
                    <div class="">
                        <p><?php the_content(); ?></p>
                        <p>ID: <?php the_ID(); ?></p>
                    </div>
                    <?php
                }
            }
            ?>
        </div>
    </div>
</div>
<?php
get_footer();

?>

