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
                <h4>Seshan Ravikumar</h4>
                <h6>or Seshpenguin. Student &amp; something something computers.</h6>
                <hr />
                <p><strike>Hey! I heard people have personal websites or something so I created a EC2 instance (running Windows Server 2003 R2 for maximum fun), attempted to install WordPress on IIS 6 (Please don't hack me), gave up, then downloaded this HTML5 Template. I could've hosted this on something more reasonable, but where is the fun in that?? Anyway...</strike></p>
                <p>Nevermind, this website is now hosted using Wordpress on a Power Mac G5 running Ubuntu 16.04. Quite an upgrade, no?</p>
                <p>I'm a high school student from Canada, with a passion for computers, programming, electronics, and a few other things (trains are pretty cool, so is food). I am also passionate about free, open source software and GNU/Linux <strike>(please ignore the IIS 6 that served this webpage)</strike>.</p>
                <hr />
                <div class="panel-group">
                    <div class="panel panel-default">

                        <ul class="collapsible">
                            <li>
                                <div class="collapsible-header">Some cool stuff to look at.</div>
                                <div class="collapsible-body">
                                    <div class="panel-body"><pre>(I'm not that cool).<pre></div>
                                    <style>
                                        .mainlist {
                                            list-style-type: none;
                                            font-family: 'Nunito', sans-serif;
                                            font-size: 20px;
                                            margin-top: 25px;
                                            line-height: 50px;
                                        }
                                    </style>
                                    <ul class="mainlist"> <!-- I did not steal this from espi.dev at all-->
                                        <li>
                                            <a href="https://estinet.net" class="pinkish" style="text-decoration:none;">estinet <img src="https://espi.dev/assets/estinet.jpeg" height=20px /></a>
                                        </li>
                                        <li>
                                            <div style="font-size:15px">^ Minecraft server I run with my friend (づ￣ ³￣)づ</div>
                                        </li>

                                        <li>
                                            <a href="#" onclick="alert('The website is no longer online.');" style="text-decoration:none;">ConnectUS</a>
                                        </li>
                                        <li>
                                            <div style="font-size:15px">^ I do frontend and SysAdmin work for this project.</div>
                                        </li>
                                        <li>
                                            <a href="https://seshan.xyz/flow/files/WP_20181209_20_49_00_Rich.jpg" style="text-decoration:none;">This Tower Server</a>
                                        </li>
                                        <li>
                                            <div style="font-size:15px">^ It's kind of like my prized possession.</div>
                                        </li>
                                        <li>
                                            <a href="https://bayview.club" style="text-decoration:none;">Bayview Computer Club</a>
                                        </li>
                                        <li>
                                            <div style="font-size:15px">^ I'm an executive (Technical Advisor).</div>
                                        </li>
                                        <li>
                                            <a href="https://devpost.com/software/interplanetary-desktop" style="text-decoration:none;">Waterloo Hack The North Finalist</a>
                                        </li>
                                        <li>
                                            <div style="font-size:15px">^ They just have finalists, not a 1st, 2nd, etc system.</div>
                                        </li>
                                        <li>
                                            <a href="https://judge.bayview.club" style="text-decoration:none;">Bayview Judge</a>
                                        </li>
                                        <li>
                                            <div style="font-size:15px">^ The Bayview Comp Club's competitve programming judge I made.</div>
                                        </li>

                                    </ul>
                                </div>
                            </li>
                            <li>
                                <div class="collapsible-header">My Resume <a style="margin-left:auto; margin-right:0;" href="http://seshan.xyz/flow/files/seshan-resume-v2.pdf">Direct Link</a></div>
                                <div class="collapsible-body">
                                    <div class="panel-body"><pre>So many things!<pre></div>
                                    <a href="<?php echo site_url(); ?>/flow/files/seshan-resume-v2.pdf" class="btn btn-dark">Click Here (PDF)</a>

                                </div>
                            </li>
                        </ul>
                    </div>
                </div>

                <hr />

                <p>As you can probably tell by now, my idea of fun is... different. Give me a computer and an OS install disk and I'll probably be entertained for hours. Or Minecraft, <a href="https://estinet.net"> EstiNet </a>is pretty cool server that myself and EspiDev run. Or Youtube... I waste too much time.</p>
                <p><br /> If you are expecting more formal stuff on this website, sadly you will be disappointed. I should have more professional things @ <a href="https://dolphinbox.net">DolphinBox</a> (NOTE: The website did exist, but not anymore. I'll get around to it soon, maybe). That's my "company" where I do other stuff. Fun fact: That website is hosted on my server, an HP ProLiant ML350 G6 (2x 6-Core Xeon, 72GB DDR3, etc etc) running Ubuntu and LXD. It's pretty cool!</p>

                <br />
                <p>Email: seshan10@me.com</p>
                <p>Discord: Seshpenguin#3718</p>
                <p>Cell: Ask me</p>

                <p>Also check out this awesome guy <a href="https://espi.dev">Devin </a> he's very cool <3 <br /><br /> Finally... I have a blog, it has some cool stuff:</p>
                <a class="btn btn-outline-primary" href="blog/">Seshan's Blog</a>
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