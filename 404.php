<?php
/**
 *
 * Seshan.xyz Wordpress 404 Page
 **/

get_header();

?>
<!-- 100% copied from espi.dev -->
<style>
    h1 {
        font-family: 'Montserrat', sans-serif;
        font-size: 48px;
        letter-spacing: -2px;
        font-weight: 800;
    }

    .container {
        padding-left: 10%;
        padding-right: 10%;
        display: block;
    }

    @keyframes woo {
        100% {
            transform: skewY(0deg);
            left: 0;
        }
        80% {
            transform: skewY(-180deg);
            left: 20px;
        }
        50% {
            transform: skewY(0deg);
            left: 300px;
        }
        20% {
            transform: skewY(1deg) skewX(10deg);
            left: 0px;
        }
        0% {
            transform: skewY(0deg);
            left: 400px;
        }
    }

    h2 {
        font-family: 'Nunito', sans-serif;
        color: #e91e63;
        letter-spacing: 2px;

        animation-name: woo;
        animation-duration: 12s;
        animation-iteration-count: infinite;
    }

    .box {
        font-family: 'Nunito', sans-serif;
        font-size: 16px;
        font-weight: 800;
        letter-spacing: 10px;
        animation-name: woo;
        animation-duration: 12s;
        animation-delay: 0.3s;
        animation-iteration-count: infinite;
    }
</style>

<div class="content" style="display: flex; min-height: 100vh; flex-direction: column;">
    <div class="container" style="flex: 1 1 auto;">
        <h4>Seshan's Website</h4>
        <a href="//seshan.xyz/" class="waves-effect waves-light btn"><i class="material-icons left">keyboard_backspace</i>Back to Home</a>
        <hr/>
        <div class="card-panel white">
            <h1>oops.</h1>
            <h2>i'm lost plz send help</h2>
            <h3><div class="box">404 (ﾉ◕ヮ◕)ﾉ*:･ﾟ✧ ✧ﾟ･: *ヽ(◕ヮ◕ヽ)</div></h3>
            <p>This 404 page was toatlly not copied from <a href="https://espi.dev">espi.dev</a>...</p>
        </div>
    </div>
</div>
<?php
get_footer();

?>

