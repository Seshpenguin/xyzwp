<?php
/**
 *
 * Seshan.xyz Wordpress Front Page
 */

get_header();


?>

<!--
<header>
    <h1><?php bloginfo('name'); ?></h1>
    <h3><?php bloginfo('description'); ?></h3>
</header>
-->

<div id="alobaidi-fade-plugin"></div>

<div class="row" style="background-image: url('https://i.imgur.com/BI8xbGe.jpg'); background-repeat: no-repeat; background-attachment: fixed;">
    <div class="col m7 s11" style="background-color: white">
        <div class="container">
            <div class="" style="padding-top: 9vh">
                <?php
                if ( have_posts() ) {
                    while (have_posts()) {
                        the_post();
                        ?>
                        <?php the_content(); ?>
                        <p>ID: <?php the_ID(); ?></p>
                        <?php
                    }
                }
                ?>
            </div>
        </div>
    </div>

    <div class="col m5 s1">
        <!-- Right Panel Image -->
    </div>
</div>

<?php

get_footer();

?>