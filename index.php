<?php
// Query params are: utm_term={keyword}&external_id={external_id}&utm_creative={creative}&utm_campaign={campaignid}&utm_position={adposition}&utm_network={network}&utm_target={target}&utm_placement={placement}&utm_match={matchtype}&gclid={gclid}&accid={accid}

require_once dirname(FILE) . '/8ZcLbw49n69chhR7.php';
$client = new KClient('https://adv2click.com/api.php?', '8ZcLbw49n69chhR7');
$client->sendAllParams(); // to send all params from page query
$client->forceRedirectOffer(); // redirect to offer if an offer is chosen
// $client->param('sub_id_5', '123'); // you can send any params
// $client->keyword('PASTE_KEYWORD'); // send custom keyword
// $client->currentPageAsReferrer(); // to send current page URL as click referrer
// $client->disableSessions(); // to disable using session cookie (without this cookie restoreFromSession wouldn't work)
// $client->debug(); // to enable debug mode and show the errors
// $client->execute(); // request to api, show the output and continue
$client->executeAndBreak(); // to stop page execution if there is redirect or some output
?>

<!doctype html>
<html>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" type="image/png" sizes="32x32" href="./favicon-32x32.png">
  <title>TOP FORTUNE KINGS</title>
  <link rel="icon" type="image/png" sizes="16x16" href="./favicon-16x16.png">
  <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
  <link rel="manifest" href="/site.webmanifest">
  <meta name="msapplication-TileColor" content="#da532c">
  <meta name="theme-color" content="#ffffff">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Noto+Sans:wght@100;200;300;400;500;600;700;800;900&display=swap"
    rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.3.5/css/swiper.min.css">

  <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.3.5/js/swiper.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <meta name="viewport"
    content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">

  <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
  <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
  <link href="css/main.css?ver=2" rel="stylesheet">
</head>

<body>
  <header>
    <div class="header-layout" id="header">
      <div class="header-nav">
        <div class="header-nav__wrap">
          <div class="header-nav__logo">
            <a href="/" class="header-nav__logo-l header-font">
              TOP FORTUNE KINGS
            </a>
            <div class="header__box">
              <ul class="header__box-list">
                <a href="about.html">
                  <li class="header__box-item">About Us</li>
                </a>
                <a href="contact.html">
                  <li class="header__box-item">Contact Us</li>
                </a>
              </ul>
            </div>
          </div>
        </div>
      </div>

      <div class="main-nav" id="main">
        <ul class="main-nav__m main-nav__m-1">
          <li class="main-nav__mi-1">
            <a class="main-nav__in main-nav__in-1" href="./diamond.html">
              <span class="main-nav__in-t main-nav__in-t-1">Diamond Wedding Bands</span>
            </a>
          </li>

          <li class="main-nav__mi-1">
            <a class="main-nav__in main-nav__in-1" href="stackable.html">
              <span class="main-nav__in-t main-nav__in-t-1">Stackable Rings</span>
            </a>
          </li>

          <li class="main-nav__mi-1">
            <a class="main-nav__in main-nav__in-1" href="eternity.html">
              <span class="main-nav__in-t main-nav__in-t-1">Eternity Rings</span>
            </a>
          </li>
        </ul>
      </div>
    </div>
  </header>

  <section class="desktop-abs">
    <div class="blog-slider">
      <div class="blog-slider__wrp swiper-wrapper">
        <div class="blog-slider__item swiper-slide">
          <div class="blog-slider__img">

            <img src="./img/w/w1.jpg" alt="Diamond Wedding Bands">
          </div>
          <div class="blog-slider__content">
            <span class="blog-slider__code">Shop now!</span>
            <div class="blog-slider__title">Diamond Wedding Bands</div>
            <noindex>
              <div class="blog-slider__text">Diamond bands are lovely images of your enduring cherish.</div>
            </noindex>
            <a href="./diamond.html" class="blog-slider__button">MORE</a>
          </div>
        </div>
        <div class="blog-slider__item swiper-slide">
          <div class="blog-slider__img">
            <img src="./img/s/s1.jpg" alt="Stackable Rings">
          </div>
          <div class="blog-slider__content">
            <div class="blog-slider__title">Stackable Rings</div>
            <noindex>
            </noindex>
            <a href="./stackable.html" class="blog-slider__button">MORE</a>
          </div>
        </div>

        <div class="blog-slider__item swiper-slide">
          <div class="blog-slider__img">
            <img src="./img/e/e1.jpg" alt="Eternity Rings">
          </div>
          <div class="blog-slider__content">
            <div class="blog-slider__title">Eternity Rings</div>
            <noindex>

            </noindex>
            <a href="./eternity.html" class="blog-slider__button">MORE</a>
          </div>
        </div>

      </div>
      <div class="blog-slider__pagination"></div>
    </div>
  </section>

  <section class="foo-margin">
    <footer class="footer__main">

      <div>
        <div class="nav__flex">
          <div class="nav__links" id="nav-3">
            <p class="nav__title">Menu</p>
            <a class="link-3" href="./GDPR.html">GDPR</a>
            <a class="link-3" href="./terms.html">Terms & Conditions</a>
            <a class="link-3" href="./privacy-policy.html">Privacy Policy</a>
            <a class="link-3" href="./diamond.html">Products</a>
          </div>

          <div class="nav__flex">
            <div class="nav__links" id="nav-3">
              <p class="nav__title">About</p>
              <a class="link-3" href="./about.html">About Us</a>
              <a class="link-3" href="./contact.html">Contact Us</a>
            </div>
          </div>

          <div class="footer__menu-mb">
            <div class="nav__flex">
              <div class="nav__links" id="nav-3">
                <p class="nav__title">Orders</p>
                <a class="link-3" href="./return.html">Free 30 Day Returns</a>
                <a class="link-3" href="./delivery.html">Delivery info</a>
                <a class="link-3" href="warranty.html">Warranty info</a>
              </div>
            </div>

            <div class="nav__flex">
              <div class="nav__links" id="nav-3">
                <p class="nav__title">Follow us</p>
                <div class="nav__socials">
                  <div style="display: flex; ">
                    <a class="link-3" href="#"><img src="/img/Socials/instagram.png" alt="Instagram"></a>
                    <a class="link-3" href="#"><img src="/img/Socials/facebook.png" alt="Facebook"></a>
                  </div>
                  <div style="display: flex;">
                    <a class="link-3" href="#"><img src="/img/Socials/twitter.png" alt="Twitter"></a>
                    <a class="link-3" href="#"><img src="/img/Socials/linkedin.png" alt="Linkedin"></a>
                  </div>
                </div>
              </div>
            </div>
          </div>

    </footer>
  </section>

  <script src="./js/main.js"></script>
</body>

</html>