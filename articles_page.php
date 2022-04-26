<?php
?>

<!DOCTYPE html>
<html lang="ua">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/articles_page.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@400;500;700&display=swap" rel="stylesheet">
    <title>Реєстрація</title>
</head>
<body>

<div id = "wrapper">
    <header>
        <a href = "index.php">
            <img id = "header_logo__img" src = "img/logo-white.svg" alt = "logo">
        </a>
        <div id = "header_nav_menu">
            <div id = "header_nav">
                <nav>

                    <?php
                    if ($_COOKIE['user'] == ""):
                        ?>
                        <a class="header_nav__item" href = "signin.php?wrong=0">
                            ВХІД
                        </a>
                        <a class="header_nav__item" href = "reg.php">
                            РЕЄСТРАЦІЯ
                        </a>
                    <?php
                    else:
                        ?>

                        <a class = "header_nav__user">
                            <?= $_COOKIE['user']?>
                        </a>
                        <a class="header_nav__item" href = "exit.php">
                            ВИХІД
                        </a>

                    <?php
                    endif;
                    ?>

                </nav>
            </div>

            <div class="header_nav_menu__button">
                <div class="header_nav_menu__button_b"></div>
            </div>

        </div>
    </header>

    <div class="page-block">

        <?php

        require_once ('php/connect.php');
        global $connect;

        $articles = mysqli_query($connect, "SELECT * FROM article");
        $articles = mysqli_fetch_all($articles);

        $count = count($articles);

        ?>

        <p class="articles-block__title">СТАТТІ</p>
        <p class="articles-block__count">Всього статей: <?=$count?></p>

        <div class="articles-block">

            <?php



            foreach ($articles as $article){

            ?>

            <a class="articles-block_article" href="article.php?article=<?=$article[0]?>">
                <?php
                if ($article[7]==1 and $article[6] != ""):
                ?>
                    <div class="video-background">
                        <iframe scrolling="no" width="854" height="480" frameborder="0" allowfullscreen="allowfullscreen" class="vimeo-iframe" id="391557741" data-id="391557741" data-autoplay="0" src="<?=$article[6]?>?byline=0&amp;portrait=0&amp;title=0&amp;background=1" data-ready="true" data-gtm-yt-inspected-1_19="true"></iframe>
                    </div>
                <?php
                elseif ($article[6] == ""):
                    do{
                        $rand_id = rand(0, $count-1);
                    }while ($articles[$rand_id][7] == 1 or $articles[$rand_id][6] == "");
                ?>
                    <img alt="photo" src="<?=$articles[$rand_id][6]?>">
                <?php

                else:
                ?>
                    <img alt="photo" src="<?=$article[6]?>">
                <?php
                endif;
                ?>
                <p class="articles-block_article__name"><?=$article[1]?></p>
                <p class="articles-block_article__subname"><?=$article[2]?></p>

            </a>

            <?php
            }
            ?>

        </div>
    </div>

    <footer>
        <div class="footer_main">
            <div class="footer_main_logo">
                <a href="index.php"><img src="img/logo-white.svg"></a>

                <p class="footer_main_logo__address">вулиця Тимірязєвська, 1<br>Київ, Україна, 01014</p>
                <a href="contacts.php" class="footer_main_logo__link">Де це?</a>
            </div>

            <div class="footer_main_phone">
                <p class="footer_main_phone__text">Технічна допомога: (847) 835-6801<br>Основний: (847) 835-5440<br>Для клієнтів: (847) 835-8215</p>
            </div>
            <div class="footer_main_schedule">
                <p class="footer_main_schedule__open"><b>Відкрито:<br>08:00 - 17:00</b></p>
                <p class="footer_main_schedule__cafe">Кафе 08:00 - 16:00<br>Магазин 10:00 - 17:00</p>
                <a href="contacts.php" class="footer_main_schedule__link">Переглянути повну інформацію</a>
            </div>
        </div>
        <div class="footer_link">
            <a href="#" class="footer_link__link">Оновлення</a>
            <a href="#" class="footer_link__link">Блог</a>
            <a href="#" class="footer_link__link">Для преси</a>
            <a href="#" class="footer_link__link">Зв'язки</a>
            <a href="#" class="footer_link__link">Політика конфідейціності</a>
        </div>
        <div class="footer_social">
            <a href="#" class="footer_social__link">
                <svg width="22" height="22" viewBox="0 0 23 20"><path d="M12.326 0C5.747.001 2.25 4.216 2.25 8.812c0 2.131 1.191 4.79 3.098 5.633.544.245.472-.054.94-1.844a.425.425 0 00-.102-.417c-2.726-3.153-.532-9.635 5.751-9.635 9.093 0 7.394 12.582 1.582 12.582-1.498 0-2.614-1.176-2.261-2.631.428-1.733 1.266-3.596 1.266-4.845 0-3.148-4.69-2.681-4.69 1.49 0 1.289.456 2.159.456 2.159S6.781 17.4 6.501 18.539c-.474 1.928.064 5.049.111 5.318.029.148.195.195.288.073.149-.195 1.973-2.797 2.484-4.678.186-.685.949-3.465.949-3.465.503.908 1.953 1.668 3.498 1.668 4.596 0 7.918-4.04 7.918-9.053C21.733 3.596 17.62 0 12.326 0z"></path></svg>
            </a>
            <a href="#" class="footer_social__link">
                <svg aria-hidden="true" class="icon icon--facebook" xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 11 20"><path d="M10.703.134V3.08H8.951q-.96 0-1.295.402t-.335 1.205v2.109h3.27l-.435 3.304H7.321v8.471H3.906V10.1H1.06V6.796h2.846V4.363q0-2.076 1.161-3.22T8.159-.001q1.641 0 2.545.134z"></path></svg>
            </a>
            <a href="#" class="footer_social__link">
                <svg aria-hidden="true" class="icon icon--twitter" xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 19 20"><path d="M18.08 4.554q-.748 1.094-1.808 1.864.011.156.011.469 0 1.451-.424 2.896t-1.289 2.773-2.059 2.349-2.879 1.629-3.605.608q-3.025 0-5.536-1.618.391.045.871.045 2.511 0 4.475-1.54-1.172-.022-2.098-.72t-1.272-1.78q.368.056.681.056.48 0 .949-.123-1.25-.257-2.07-1.244t-.82-2.294v-.045q.759.424 1.629.458-.737-.491-1.172-1.283t-.435-1.719q0-.982.491-1.819 1.35 1.663 3.287 2.662t4.146 1.11q-.089-.424-.089-.826 0-1.496 1.055-2.55t2.55-1.055q1.563 0 2.634 1.138 1.217-.234 2.288-.871-.413 1.283-1.585 1.987 1.038-.112 2.076-.558z"></path></svg>
            </a>
            <a href="#" class="footer_social__link">
                <svg width="22" height="22" viewBox="0 0 19 12"><path d="M 18.2026 1.8596 c -0.2142 -0.7962 -0.842 -1.4239 -1.6381 -1.6383 C 15.1102 -0.1766 9.2926 -0.1766 9.2926 -0.1766 s -5.8174 0 -7.2718 0.3829 c -0.7808 0.2142 -1.4239 0.8573 -1.638 1.6533 C 0 3.3138 0 6.3298 0 6.3298 s 0 3.0312 0.3827 4.4702 c 0.2144 0.7961 0.8419 1.4238 1.6381 1.6381 C 3.4905 12.8363 9.2928 12.8363 9.2928 12.8363 s 5.8174 0 7.2718 -0.3829 c 0.7962 -0.2143 1.4239 -0.8419 1.6383 -1.638 c 0.3826 -1.4544 0.3826 -4.4702 0.3826 -4.4702 s 0.0153 -3.0313 -0.3828 -4.4855 z M 7.4403 9.1161 V 3.5435 l 4.8377 2.7863 z m 0 0"></path></svg>
            </a>
            <a href="#" class="footer_social__link">
                <svg width="22" height="22" viewBox="0 0 24 20"><circle cx="5" cy="10" r="5"></circle><circle cx="17" cy="10" r="5"></circle></svg>
            </a>
            <a href="#" class="footer_social__link">
                <svg width="22" height="22" viewBox="0 0 25 20"><path d="M23.994 24v-.001H24v-8.802c0-4.306-.927-7.623-5.961-7.623-2.42 0-4.044 1.328-4.707 2.587h-.07V7.976H8.489v16.023h4.97v-7.934c0-2.089.396-4.109 2.983-4.109 2.549 0 2.587 2.384 2.587 4.243V24zM.396 7.977h4.976V24H.396zM2.882 0C1.291 0 0 1.291 0 2.882s1.291 2.909 2.882 2.909 2.882-1.318 2.882-2.909A2.884 2.884 0 002.882 0z"></path></svg>
            </a>
            <a href="#" class="footer_social__link">
                <svg aria-hidden="true" class="icon icon--instagram" xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 20 20"><defs><style>.cls-1 { fill-rule: evenodd; }</style></defs><path id="_" class="cls-1" d="M17.738 16.91a.79.79 0 0 1-.795.796H3.018a.79.79 0 0 1-.795-.795V8.47H4.06a5.68 5.68 0 0 0-.26 1.707 6.223 6.223 0 0 0 12.44 0 5.68 5.68 0 0 0-.26-1.707h1.758v8.44zm-3.7-6.942a4.02 4.02 0 1 1-4.025-3.895 3.96 3.96 0 0 1 4.025 3.895zm3.7-4.69a.9.9 0 0 1-.9.9H14.57a.9.9 0 0 1-.9-.9v-2.15a.9.9 0 0 1 .9-.9h2.268a.9.9 0 0 1 .9.9v2.15zm2.267-2.71A2.58 2.58 0 0 0 17.438 0H2.562A2.58 2.58 0 0 0 0 2.57v14.875a2.58 2.58 0 0 0 2.567 2.566h14.876a2.58 2.58 0 0 0 2.567-2.565V2.57z"></path></svg>
            </a>
        </div>
        <div class="footer_copyrights">
            <p class="footer_copyrights__text">© 2022 Київський ботанічний сад. Всі права захищенні.</p>
        </div>
    </footer>
</div>

<div id = "flyoutMenu">

    <?php
    if ($_COOKIE['user'] == ""):
        ?>
        <a class="header_nav__menu-item" href = "signin.php?wrong=0">
            ВХІД
        </a>
        <a class="header_nav__menu-item" href = "reg.php">
            РЕЄСТРАЦІЯ
        </a>
    <?php
    else:
        ?>

        <a class = "header_nav__user header_nav__menu-item">
            <?= $_COOKIE['user']?>
        </a>
        <a class="header_nav__menu-item" href = "exit.php">
            ВИХІД
        </a>

    <?php
    endif;
    ?>

    <a href="contacts.php">ВІДВІДАТИ</a>
    <a href="info.php">ІНФОРМАЦІЯ</a>
    <a href="articles_page.php">СТАТТІ</a>
    <a href="contacts.php">КОНТАКТИ</a>
    <a href="about_us.php">ПРО НАС</a>

    <?php

    if ($_COOKIE['role'] == "admin") echo '<a href="admin_panel.php">Адмін панель</a>';
    mysqli_close($connect);

    ?>
</div>

<script src="script/index_anim.js"></script>

</body>
</html>
