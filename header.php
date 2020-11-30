<!DOCTYPE html>
<html lang="en"> 
<head>
    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Home Instead">
    <?php
        wp_head();
    ?>
</head>
<body>

<nav class="navbar">
  <div class="brand-title">
    <a href="#">
      <?php if ( has_custom_logo() ) : ?>
        <span class="site-logo"><?php the_custom_logo(); ?></span>
      <?php else: ?>
        <a class="navbar-brand" href="home_url('/')">get_bloginfo('name', 'display')</a>
      <?php endif; ?>
    </a>
  </div>
  <div class="navbar-links">
    <ul class="top-menu">
        <li class="slide-left">
          <!-- <a href="tel:1300 008 018" class="btn btn-phonecall"><i class="fa fa-phone"></i><i>talk to a real person | 1300 008 018</i></a> -->
          <a href="tel:1300 008 018" class="btn btn-phonecall">
            <i class="fa fa-phone"> </i>
          </a>
            <div class="overlay">
              <div class="text"><i class="fa fa-phone"><span class="font-call ml-2">talk to a real person | 1300 008 018</span></i></div>
            </div>
        </li>
        <!-- <li>
          <a class="btn btn-contact-subs">Contact Us</a>
        </li> -->
        <li>
          <a class="btn btn-contact-subs" href="https://homeinstead.com.au/senior-care-connections/">Subscribe</a>
        </li>
        <li>
          <a class="btn btn-mute" id="muteaudio">Mute audio</a>
        </li>
      </ul>
  </div>
</nav>
