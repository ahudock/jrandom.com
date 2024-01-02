<?php
    $companyName = 'J. Random LLC';
    $companyNameHtml = '<span class="company-name"><span class="primary">' . $companyName . '</span><span class="secondary">(Andy Hudock)</span></span>';
?>
<!doctype html>
<html class="no-js" lang="en_US">

<head>
<!--

    ___              ________  ________  ________   ________  ________  _____ ______           ______        ______
   |\  \            |\   __  \|\   __  \|\   ___  \|\   ___ \|\   __  \|\   _ \  _   \        |\   ___\    |\___   \
   \ \  \           \ \  \|\  \ \  \|\  \ \  \\ \  \ \  \_|\ \ \  \|\  \ \  \\\__\ \  \       \ \  \__|    \|___|\  \
 __ \ \  \           \ \   _  _\ \   __  \ \  \\ \  \ \  \ \\ \ \  \\\  \ \  \\|__| \  \       \ \  \   _\\/_   \ \  \
|\  \\_\  \ ___       \ \  \\  \\ \  \ \  \ \  \\ \  \ \  \_\\ \ \  \\\  \ \  \    \ \  \       \ \  \___//\    _\_\  \
\ \________\\__\       \ \__\\ _\\ \__\ \__\ \__\\ \__\ \_______\ \_______\ \__\    \ \__\       \ \______\    |\______\
 \|________\|__|        \|__|\|__|\|__|\|__|\|__| \|__|\|_______|\|_______|\|__|     \|__|        \|______|    \|______|


-->
    <meta charset="utf-8">
    <meta description="Based in the Pacific Northwestern United States, <?php echo $companyName ?> primarily provides devops and design services for a global client base spanning a wide range of sectors.">
    <title>Home | J. Random LLC</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta property="og:title" content="">
    <meta property="og:type" content="">
    <meta property="og:url" content="">
    <meta property="og:image" content="">

    <link rel="manifest" href="site.webmanifest">
    <link rel="apple-touch-icon" href="icon.png">
    <!-- Place favicon.ico in the root directory -->

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Anonymous+Pro:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/local.css">

    <meta name="theme-color" content="#fafafa">
</head>

<body>
    <header>
<pre class="j-random-ascii">
    ___              ________  ________  ________   ________  ________  _____ ______           ______        ______
   |\  \            |\   __  \|\   __  \|\   ___  \|\   ___ \|\   __  \|\   _ \  _   \        |\   ___\    |\___   \
   \ \  \           \ \  \|\  \ \  \|\  \ \  \\ \  \ \  \_|\ \ \  \|\  \ \  \\\__\ \  \       \ \  \__|    \|___|\  \
 __ \ \  \           \ \   _  _\ \   __  \ \  \\ \  \ \  \ \\ \ \  \\\  \ \  \\|__| \  \       \ \  \   _\\/_   \ \  \
|\  \\_\  \ ___       \ \  \\  \\ \  \ \  \ \  \\ \  \ \  \_\\ \ \  \\\  \ \  \    \ \  \       \ \  \___//\    _\_\  \
\ \________\\__\       \ \__\\ _\\ \__\ \__\ \__\\ \__\ \_______\ \_______\ \__\    \ \__\       \ \______\    |\______\
 \|________\|__|        \|__|\|__|\|__|\|__|\|__| \|__|\|_______|\|_______|\|__|     \|__|        \|______|    \|______|

</pre>
    </header>

    <main>
        <h1><?php echo $companyNameHtml; ?> :: Development + Digital Arts</h1>

        <!--p><em>Welcome <span class="remote-addr"><?php echo $_SERVER['REMOTE_ADDR'] ?></span></em></p-->

        <p>Based in the Pacific Northwest, <?php echo $companyNameHtml; ?> primarily provides full-stack development and design services for a global client base spanning a wide range of sectors.</p>

        <section id="devops-services" class="corners">
            <header>Development Services</header>

            <ul>
                <li>Programming</li>
                <li>Web development</li>
                <li>SysAdmin and InfoSec</li>
                <li>Database architecture</li>
                <li>SEO</li>
                <li>IT consulting</li>
             </ul>

            <footer></footer>
        </section>

        <section id="digital-arts-services" class="corners">
            <header>Digital Arts Services</header>

            <ul>
                <li>Web, graphic, UX design</li>
                <li>Logos, branding, print media</li>
                <li>Recording, audio engineering, audio/video production</li>
             </ul>

            <footer></footer>
        </section>

        <!--section id="other-services" class="corners">
            <header>Other Services</header>

            <ul>
                <li>Music education, pageantry, marching arts, visual instruction</li>
                <li>Trumpet lessons and performance</li>
                <li>Motorcycle roadracing novice mentorship and track day instruction, new rider coaching</li>
            </ul>

            <footer></footer>
        </section-->

        <section id="contact" class="corners">
            <header>Contact</header>

            <p style="margin-left: 1em">
                <?php echo $companyNameHtml; ?><br />
                29101 SW Fernhollow Ln.<br />
                Hillsboro, OR, 97123<br />
                USA<br />
                <a href="tel:15415437626" title="Phone J. Random LLC">541.543.7626</a><br />
                <a href="mailto:ahudock@jrandom.com" title="Contact J. Random LLC">ahudock@jrandom.com</a><br />
                <a href="https://github.com/ahudock" title="J. Random LLC on GitHub" target="_blank">GitHub</a><br />
                <a href="https://linkedin.com/in/andyhudock" title="Andy Hudock on LinkedIn" target="_blank">LinkedIn</a><br />
            </p>

            <footer></footer>
        </section>
    </main>

    <footer>
        <p class="copyright">&copy;2008-<?php echo date("Y") ?> <?php echo $companyNameHtml; ?>. All rights reserved.</p>
    </footer>

    <script src="js/vendor/modernizr-3.11.2.min.js"></script>
    <script src="js/plugins.js"></script>
    <script src="js/main.js"></script>

    <!-- Google Analytics: change UA-XXXXX-Y to be your site's ID. -->
    <script>
        window.ga = function () { ga.q.push(arguments) }; ga.q = []; ga.l = +new Date;
        ga('create', 'G-6VY93SGXXH', 'auto'); ga('set', 'anonymizeIp', true); ga('set', 'transport', 'beacon'); ga('send', 'pageview')
    </script>
    <script src="https://www.google-analytics.com/analytics.js" async></script>
</body>

</html>
