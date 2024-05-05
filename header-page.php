<html lang="en">
<head>
    <meta charset="UTF-8">

  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
       <!-- Google / Search Engine Tags -->
  <meta itemprop="name" content="Moving Média">
  <meta itemprop="description" content="">
  <meta itemprop="image" content="">

    <!-- Facebook Meta Tags -->
    <meta property="og:url" content="http://movingmedia.fr">
  <meta property="og:type" content="website">
  <meta property="og:title" content="Genocide Bamiléké">
  <meta property="og:description" content="">
  <meta property="og:image" content="">

  <!-- Twitter Meta Tags -->
  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:title" content="Genocide Bamiléké">
  <meta name="twitter:description" content="">
  <meta name="twitter:image" content="">

 <!-- Your styles -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/icon-font.css">
    <link rel="shortcut icon" type="image/png" href="img/laakam-logo.png">

    <title>Genocidebamilekes| Exciting story of the bamileke genocide</title>
</head>
<body>
<header class="header-page">
        <div class="navbar navbar-fix">
            <div class="header-logo">
                <a href="index.php"><img class="header-logo--img" src="img/laakam-logo.png" alt=""></a>
            </div>
            <nav>
                <div class="header-burger">
                    <a href="#"><img src="img/burger-menu-open.svg.png" alt="burger-menu-open"></a>
                </div>
                <ul class="header-navList">
                    <li class="header-navListItem">
                        <a class="header-navListItem-link top-call color" href="index.php">Home</a>
                    </li>
                    <li class="header-navListItem">
                        <a class="header-navListItem-link" id="about" href="/#About">About La’akam</a>
                    </li>
                    <li class="header-navListItem">
                        <a class="header-navListItem-link" href="commemoration.php">Commemoration</a>
                    </li>
                    <li class="header-navListItem">
                        <a class="header-navListItem-link " href="achievements.php">Achievements</a>
                    </li>
                    <li class="header-navListItem">
                        <a class="header-navListItem-link" href="/#News">News</a>
                    </li>
                    <li class="header-navListItem">
                        <a class="header-navListItem-link" href="contact.php">Contact us</a>
                    </li>
                    <li class="header-navListItem ">
                        <a class="donate" href="/#contact">DONATE</a>

                    </li>
                </ul>
            </nav>
        </div>
</header>

<script type="text/javascript">

// BURGER
const burger = document.querySelector('.header-burger');
const menu = document.querySelector('.header-navList');
const hide = document.querySelector('.hide');
const bar = document.querySelector('.header-navListItem')
const burgerImage = document.querySelector('.header-burger img');


const fichesSection = document.querySelector('.fichesPratiques');

burger.addEventListener('click', function() {
 

  if (menu.classList.contains('menuOpen')) {
    menu.classList.remove('menuOpen');
    burgerImage.src = 'img/burger-menu-open.svg.png';
  } else {
    menu.classList.add('menuOpen');
    burgerImage.src = 'img/burger-menu-close.png';
  }

});
</script>