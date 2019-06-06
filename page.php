<?php
/**
 *
 * Seshan.xyz Wordpress Static Page
 */

get_header();

?>
<div class="content" style="display: flex; min-height: 100vh; flex-direction: column;">
    <div class="container" style="flex: 1 1 auto;">
        <?php
        if ( have_posts() ) {
            while (have_posts()) {
                the_post();
            ?>
                <h4>Seshan's Personal Website</h4>
                <a href="<?php echo site_url(); ?>/" class="waves-effect waves-light btn"><i class="material-icons left">keyboard_backspace</i>Back to Home</a>
                <hr/>
                <div class="card-panel white browser-default">
                    <h5> <?php the_title(); ?></h5>
                    <h6><?php the_date(); ?></h6>
                    <div class="">
                        <p><?php the_content(); ?></p>
                        <p>ID: <?php the_ID(); ?></p>
                    </div>
                </div>
            </div>
        <?php
            }
    }
    ?>
</div>
<?php
get_footer();

?>

