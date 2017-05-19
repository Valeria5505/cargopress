<?use Bitrix\Main\Page\Asset;?>
<!DOCTYPE html>
<html lang="ru">
<head>

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title><?$APPLICATION->ShowTitle()?> | CargoPress</title>
    <?$APPLICATION->ShowHead();?>
    <!-- Styling -->



    <?
    Asset::getInstance()->addCss("/local/assets/css/style.css");
    Asset::getInstance()->addCss("/local/assets/css/magnific-popup.css");

    Asset::getInstance()->addJs("/local/assets/js/modernizr.custom.24530.js");
    Asset::getInstance()->addJs("/local/assets/js/jquery-2.1.4.min.js");
    Asset::getInstance()->addJs("/local/assets/js/bootstrap/carousel.js");
    Asset::getInstance()->addJs("/local/assets/js/bootstrap/transition.js");
    Asset::getInstance()->addJs("/local/assets/js/bootstrap/button.js");
    Asset::getInstance()->addJs("/local/assets/js/bootstrap/collapse.js");
    Asset::getInstance()->addJs("/local/assets/js/bootstrap/validator.js");
    Asset::getInstance()->addJs("/local/assets/js/bootstrap/modal.js");
    Asset::getInstance()->addJs("/local/assets/js/jquery.maskedinput.min.js");
    Asset::getInstance()->addJs("/local/assets/js/underscore.js");
    Asset::getInstance()->addJs("/local/assets/js/SimpleMap.js");
    Asset::getInstance()->addJs("/local/assets/js/NumberCounter.js");
    Asset::getInstance()->addJs("/local/assets/js/jquery.magnific-popup.min.js");
    Asset::getInstance()->addJs("/local/assets/js/custom.js");
    Asset::getInstance()->addJs("/local/assets/js/script.js");
    ?>
</head>
<body>
<div id="panel"><?$APPLICATION->ShowPanel();?></div>
<!-- MAIN PAGE CONTAINER -->
<div class="boxed-container">


    <!-- HEADER -->
    <div class="header__container">

        <div class="container">

            <header class="header">

                <div class="header__logo">
                    <a href="index.html">
                        <img class="img-responsive" srcset="/local/assets/images/logo.png" alt="CargoPress" src="/local/assets/images/logo.png">
                    </a>
                    <button data-target="#cargopress-navbar-collapse" data-toggle="collapse" class="navbar-toggle" type="button">
                        <span class="navbar-toggle__text">Меню</span>
                        <span class="navbar-toggle__icon-bar">
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</span>
                    </button>
                </div><!-- /.header__logo -->

                <div class="header__navigation">
                    <nav class="collapse navbar-collapse" id="cargopress-navbar-collapse">
                        <?$APPLICATION->IncludeComponent("bitrix:menu", "main", Array(
                            "ALLOW_MULTI_SELECT" => "N",	// Разрешить несколько активных пунктов одновременно
                            "CHILD_MENU_TYPE" => "left",	// Тип меню для остальных уровней
                            "DELAY" => "N",	// Откладывать выполнение шаблона меню
                            "MAX_LEVEL" => "2",	// Уровень вложенности меню
                            "MENU_CACHE_GET_VARS" => "",	// Значимые переменные запроса
                            "MENU_CACHE_TIME" => "360000",	// Время кеширования (сек.)
                            "MENU_CACHE_TYPE" => "A",	// Тип кеширования
                            "MENU_CACHE_USE_GROUPS" => "Y",	// Учитывать права доступа
                            "MENU_THEME" => "site",
                            "ROOT_MENU_TYPE" => "top",	// Тип меню для первого уровня
                            "USE_EXT" => "N",	// Подключать файлы с именами вида .тип_меню.menu_ext.php
                            "COMPONENT_TEMPLATE" => "horizontal_multilevel"
                        ),
                            false
                        );?>
                    </nav>
                </div><!-- /.header__navigation -->

                <div class="header__widgets">

                    <div class="widget-icon-box">

                        <div class="icon-box">
                            <i class="fa fa-headphones"></i>
                            <h4 class="icon-box__title">Телефон</h4>
                            <span class="icon-box__subtitle">
                                    <?$APPLICATION->IncludeFile(
                                        $APPLICATION->GetTemplatePath("/include/phone.php"),
                                        Array(),
                                        Array("MODE"=>"html")
                                    );?>
                                </span>
                        </div>

                    </div>

                    <div class="widget-icon-box">

                        <div class="icon-box">
                            <i class="fa fa-clock-o"></i>
                            <h4 class="icon-box__title">Время работы</h4>
                            <span class="icon-box__subtitle">08:00 - 18:00</span>
                        </div>

                    </div>

                    <div class="widget-icon-box">

                        <div class="icon-box">
                            <i class="fa fa-envelope-o"></i>
                            <h4 class="icon-box__title">Email</h4>
                            <span class="icon-box__subtitle">
                                    <?$APPLICATION->IncludeFile(
                                        $APPLICATION->GetTemplatePath("/include/email.php"),
                                        Array(),
                                        Array("MODE"=>"html")
                                    );?>
                                </span>
                        </div>

                    </div>

                    <a target="_self" class="btn btn-info" id="button_requestQuote" data-toggle="modal" data-target="#myModal">Задать вопрос</a>



                </div><!-- /.header__widgets -->

                <div class="header__navigation-widgets">
                    <a target="_blank" href="https://www.facebook.com/ProteusThemes" class="social-icons__link"><i class="fa fa-facebook"></i></a>
                    <a target="_blank" href="https://twitter.com/chillyorange" class="social-icons__link"><i class="fa fa-twitter"></i></a>
                    <a target="_blank" href="http://themeforest.net/user/chilly_orange/portfolio" class="social-icons__link"><i class="fa fa-wordpress"></i></a>
                    <a target="_blank" href="https://www.youtube.com/user/ProteusNetCompany" class="social-icons__link"><i class="fa fa-youtube"></i></a>
                </div>

            </header>

        </div><!-- /.container -->

    </div><!-- /.header__container -->