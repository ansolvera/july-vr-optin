<?php // require_once '../common/gtgmember/index.php'; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>July Virtual Retreat</title>
    <link rel="shortcut icon" type="image/svg" href="static/img/favicon.svg">

    <!-- CUSTOM STYLESHEET -->
    <link rel="stylesheet" type="text/css" href="main.css">

</head>

<body>

    <!-- HEADER -->
    <header id="header" class="header">
        <div class="container">
            <div class="flex-row justify-center items-center">
                <img class="header__logo" src="static/img/mh-logo-white.svg" alt="Matthew Hussey logo">
            </div>
        </div>
    </header>

    <!-- HERO SECTION -->
    <section id="hero" class="section py-240">
        <div class="container">
            <div class="hero__intro">
                <p class="eyebrow mb-20">Matthew Hussey Presents...</p>
                <h1 class="mb-20">Transform Your Confidence 30-Day Challenge</h1>
                <p>Want to make 2021 a year you kick off your BIG GOALS?</p>
                <p>Ready to find love? Want to live with joy and feel true, deep self-esteem? Looking for a career that aligns with your passion, rather than just coasting in a day-to-day job?</p>
                <p>Just as a great day starts with a great morning, an amazing year starts with a killer 30 days, and this event is going to show you how to have them.</p> 
                <p>Come and join the challenge and transform your inner and outer confidence.</p>
            </div>
        </div>
    </section>

    <!-- COUNTDOWN SECTION -->
    <section id="countdown" class="section py-120">
        <div class="container">
            <div class="grid-cols-2">
                <div class="countdown__left">
                    <h3 class="mb-10">FREE Online Training</h3>
                    <p class="mb-40">July 22nd at 11am PT / 2pm ET / 7pm BST</p>
                    <button class="btn">Add to calendar</button>
                </div>
                <div class="countdown__right">
                    <div class="countdown__wrapper--number flex-col justify-center items-center">
                        <p id="days" class="countdown__number mb-10">000</p>
                        <h6 id="dayslabel" class="countdown__label text-center">Days</h6>
                    </div>
                    <div class="countdown__wrapper--number flex-col justify-center items-center">
                        <p id="hours" class="countdown__number mb-10">000</p>
                        <h6 id="hourslabel" class="countdown__label text-center">Hours</h6>
                    </div>
                    <div class="countdown__wrapper--number flex-col justify-center items-center">
                        <p id="minutes" class="countdown__number mb-10">000</p>
                        <h6 id="minuteslabel" class="countdown__label text-center">Minutes</h6>
                    </div>
                    <div class="countdown__wrapper--number flex-col justify-center items-center">
                        <p id="seconds" class="countdown__number mb-10">000</p>
                        <h6 id="secondslabel" class="countdown__label text-center">Seconds</h6>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- EXPECT SECTION -->
    <section id="expect" class="section py-120">
        <div class="container">
            <div class="expect__intro">
                <h2 class="mb-40">Make the next 6 months the MOST progress you've ever made!</h2>
                <p>Here's what you can expect in this free training...</p>
            </div>
            <div class="grid-cols-2 gap-120">
                <div class="expect__left">
                    <div class="prose">
                        <ul class="expect__list">
                            <li class="expect__list__item"><span class="highlight">Simple habits to hold you accountable -</span> You’ll get my favourite, specific missions we’ll all do together so we can keep each other on track over the next 6 months. (Never lose focus on your goals and make your success automatic!)</li>    
                            <li class="expect__list__item"><span class="highlight">Essential tools for deep inner confidence -</span> A full break-down of the 3 layers of confidence and how to integrate them so that you can make progressevery single day.</li>    
                            <li class="expect__list__item"><span class="highlight">Powerful techniques to control your emotions -</span> Tap into the ENERGY and INSPIRATION and be the master of your own inner state.</li>    
                            <li class="expect__list__item"><span class="highlight">Unpack deep self-love and level up your happiness -</span>Work on your inner self-esteem so that you can approach your career and relationships with total power and break free of your old beliefs.</li>    
                        </ul>
                    </div>
                </div>
                <div class="expect__right">
                    <form action="" class="expect__form">
                        <input class="mb-10" type="text" placeholder="First name *" required>
                        <input class="mb-20" type="text" placeholder="Email *" required>
                        <button class="btn" type="Submit">Schedule My Consultation</button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- MATT SECTION -->
    <section id="matt" class="section py-120">
        <div class="matt__background"></div>
        <div class="container">
            <div class="matt__wrapper">
                <div class="matt__callout">
                    <h4 class="mb-20">Matthew Hussey</h4>
                    <p>Matthew Hussey is a New York Times bestselling author, relationship and confidence coach, podcaster, and international speaker whose resources—including a YouTube channel with more than 288 million views—and live events have enabled millions to nurture their love lives as well as their love for life.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- REGISTER SECTION -->
    <section id="register" class="section py-120">
        <div class="container">
            <div class="grid-cols-2">
                <div class="register__left">
                    <h3 class="mb-10">Register for the Free Training</h3>
                    <p>July 22nd at 11am PT / 2pm ET / 7pm BST</p>
                </div>
                <div class="register__right">
                    <button class="btn">Register Now</button>
                </div>
            </div>
        </div>
    </section>

    <!-- PROOF SECTION -->
    <section id="proof" class="section py-80">
            <div class="container">
                <div class="flex-row justify-around items-center wrap">
                    <img id="netflix" src="static/img/netflix-logo.svg" alt="Netflix logo" class="proof__logo" loading="lazy">
                    <img id="insider" src="static/img/bi-logo.svg" alt="Business Insider logo" class="proof__logo" loading="lazy">
                    <img id="nyt" src="static/img/nyt-logo.svg" alt="New York Times logo" class="proof__logo" loading="lazy">
                    <img id="gma" src="static/img/gma-logo.svg" alt="Good Morning America logo" class="proof__logo--large" loading="lazy">
                    <img id="abc" src="static/img/abc-logo.svg" alt="ABC logo" class="proof__logo" loading="lazy">
                    <img id="iheartradio" src="static/img/iheartradio-logo.svg" alt="iHeartRadio logo" class="proof__logo--large" loading="lazy">
                </div>
            </div>
        </section>

        <!-- FOOTER -->
        <footer id="footer" class="py-40">
            <div class="container">
                <div id="footer__wrapper">
                    <a href="/">
                        <img src="static/img/mh-logo-white.svg" alt="Matthew Hussey logo" loading="lazy">
                    </a>
                    <nav id="footer__navigation" class="flex-row justify-between items-center wrap">
                        <a href="https://www.howtogettheguy.com/terms-and-conditions/" target="_blank">Terms & Conditions</a>
                        <div class="is-hidden-for-mobile">|</div>
                        <a href="https://www.howtogettheguy.com/privacy-policy/" target="_blank">Privacy Policy</a>
                        <div class="is-hidden-for-mobile">|</div>
                        <a href="https://www.howtogettheguy.com/disclaimer/" target="_blank">Disclaimer</a>
                        <div class="is-hidden-for-mobile">|</div>
                        <p>Copyright GTGUK Services LTD 2021</p>
                    </nav>
                </div>
            </div>            
        </footer>

    <script type="module" src="index.js"></script>

</body>

</html>