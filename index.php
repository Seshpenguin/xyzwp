<?php
/**
 *
 * Seshan.xyz Wordpress Index (/blog page)
 */

get_header();

?>
<div class="content" style="display: flex; min-height: 100vh; flex-direction: column;">
    <div class="container" style="flex: 1 1 auto;">
        <h4>Seshan's Blog</h4>
        <a href="<?php echo site_url(); ?>" class="waves-effect waves-light btn"><i class="material-icons left">home</i>Back to Home</a>
        <hr />
        <ul class="collapsible">
            <?php
            if ( have_posts() ) {
                while (have_posts()) {
                    the_post();
                    ?>
                    <li id="post-<?php the_ID(); ?>">
                        <div class="collapsible-header"><i class="material-icons">mail_outline</i><?php the_title(); ?> - <?php the_date(); ?> <a style="margin-left:auto; margin-right:0;" href="<?php the_permalink(); ?>">Full Post</a></div>
                        <div class="collapsible-body">
                            <span><?php the_excerpt(); ?></span>
                            <a href="<?php the_permalink(); ?>" class="btn btn-dark">Read Full Post</a>
                        </div>
                    </li>
                    <?php
                }
            }
            ?>
        </ul>
    </div>
</div>

<?php
get_footer();

?>

