<?php 

$lang = 'NL-nl';
if(isset($_GET['taal'])){
    $lang = $_GET['taal'];
}
require_once 'talen/' . $lang . '.php';

?>

<!DOCTYPE html>
<html lang="<?php echo $lang; ?>">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>NXT museum</title>
    <link rel="stylesheet" href="./css/style.css">
</head>

<body>
<!-- <a href="index2.html"> <img src="../nxt.museum/images/nederlands.webp" ></a> -->




    <!--navbar-->
    <nav class="navbar">
        <h1 class="logo">Nxt museum</h1>
        <ul class="nav-links">
            <li class="active"><a href="#"></a>home</li>
            <li><a href="#"></a><?= $tekst['menu_item_2']; ?></li>
            <li><a href="#"></a><?= $tekst['menu_item_3']; ?></li>
            <li><a href="#"></a>tickets</li>
            <li class="ctn"><a href="#"></a>contact</li>
        </ul>
        <?php if($lang === 'NL-nl'): ?>
            <a href="?taal=en" class="translate_e"> <img src="images/engels.png" class="taal-switcher" ></a>
        <?php elseif($lang === 'en'): ?>
            <a href="?taal=NL-nl" class="translate_e"> <img src="images/nederlands.webp" class="taal-switcher" ></a>
        <?php endif; ?>
        <img src="/images/nxtmuseum_afbeelding.png" alt="" class="menu-btn">
    </nav>

   

    <header>
        <article class="header-content">
            <h2><?= $tekst['sub_title']; ?></h2>
            <div class="line"></div>
            <h1><?= $tekst['title']; ?></h1>
            <!-- <a href="#" class="ctn">leer meer</a> -->
        </article>

    </header>
    <!-- == events == -->

    <section class="events">
        <div class="title">
            <h1><?= $tekst['events_title']; ?></h1>
            <div class="line"></div>
        </div>
        <div class="row">
            <div class="col">
                <img src="./images/lampjes.webp" alt="">
                <h3><?= $tekst['events_item_title_1']; ?></h3>
                <p><?= $tekst['events_item_text_1']; ?></p>
                <a href="https://nxtmuseum.com/nl/artist/random-international-fifteen-points/" class="ctn"><?= $tekst['more_info']; ?></a>
            </div>
            <div class="col">
                <img src="./images/berg.webp" alt="">
                <h3><?= $tekst['events_item_title_2']; ?></h3>
                <p><?= $tekst['events_item_text_2']; ?></p>
                <a href="https://nxtmuseum.com/artist/random-international-life-in-our-minds-motherflock/" class="ctn"><?= $tekst['more_info']; ?></a>
            </div>
        </div>
        </div>
    </section>

    <section class="explore">
        <div class="explore-content">
            <h1>Nxt Museum</h1>
            <div class="line"></div>
            <p><?= $tekst['explore_text']; ?></p>
            <a href="https://nxtmuseum.com/nl/" class="ctn"><?= $tekst['more_info']; ?></a>

        </div>
    </section>


    <section class="tours">
        <div class="row">
            <div class="col content-col">
                <h1><?= $tekst['tours_title']; ?></h1>
                <div class="line"></div>
                <p><?= $tekst['tours_text']; ?></p>
            </div>
            <div class="col image-col">
                <div class="image-gallery">
                    <img src="images/ogenhistory.jpg">
                </div>
            </div>
        </div>
    </section>


    <div class="testimonials">
        <div class="inner">
            <h1>reviews</h1>
            <div class="border">

                <div class="row">
                    <div class="col">
                        <div class="testimonials">
                            <div class="name">sandra steen</div>
                            <div class="stars">
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star"></span>
                                <span class="fa fa-star"></span>
                            </div>
                            <p><?= $tekst['testimonial_text_1']; ?></p>


                        </div>
                    </div>

                    <div class="col">
                        <div class="testimonials">
                            <div class="name">timo faust</div>
                            <div class="stars">
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star "></span>
                                <span class="fa fa-star "></span>
                                <span class="fa fa-star"></span>
                                <span class="fa fa-star"></span>
                            </div>
                            <p><?= $tekst['testimonial_text_2']; ?></p>


                        </div>
                    </div>

                    <div class="col">
                        <div class="testimonials">
                            <div class="name">elisa dawn</div>
                            <div class="stars">
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star"></span>
                            </div>
                            <p><?= $tekst['testimonial_text_3']; ?></p>

                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <section class="footer">
        <p><?= $tekst['location']; ?></p>
        <p>E-mail: <a href="mailto:nxtmuseum@gmail.com">nxtmuseum@gmail.com.</a></p>
        <p><?= $tekst['contact_phone']; ?> <a href="call:0628239562">+31 6 282 395 62</a></p>
        <p><?= $tekst['opening']; ?></p>
    </section>



    <script>
        const menuBtn = document.querySelector('.menu-btn')
        const navlinks = document.querySelector('.nav-links')

        menuBtn.addEventListener('click', () => {
            navlinks.classList.toggle('mobile-menu')

        })

    </script>
</body>

</html>