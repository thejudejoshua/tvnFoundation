<?php
    $url = $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];
?>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Jost:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
<link rel="stylesheet" href="/style.css">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="/script.js"></script>

<navigation class="navigation">
    <img src="/img/logo.png" class="logo">
    <div class="navLinks">
        <div class="links">
            <a href="/" class="<?php if(strpos($url, 'home') !== false){echo 'active';}?>">Home</a>
            <a href="/about" class="<?php if(strpos($url, 'about') !== false){echo 'active';}?>">About Us</a>
            <a href="/shop" class="<?php if(strpos($url, 'shop') !== false){echo 'active';}?>">Shop</a>
            <a href="/research" class="<?php if(strpos($url, 'research') !== false){echo 'active';}?>">Research</a>
            <a href="/events" class="<?php if(strpos($url, 'events') !== false){echo 'active';}?>">Events</a>
        </div>
        <a href="/donate" class="navButton <?php if(strpos($url, 'donate') !== false){echo 'active';}?>">
            <img src="/img/ribbon.webp" class="ribbon">
            <span class="Donate">Donate</span>
        </a>
        <a href="/contact" class="navButton variant <?php if(strpos($url, 'contact') !== false){echo 'active';}?>">
            <img src="/img/chatting.svg" class="chatting">
            <span>Message Us</span>
        </a>
    </div>
</navigation>