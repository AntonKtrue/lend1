<?php include "php/config.php" ?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <meta name="SKYPE_TOOLBAR" content="SKYPE_TOOLBAR_PARSER_COMPATIBLE">
    <title></title>
    <link rel="shortcut icon" href="<?php echo $prefix; ?>img/favicon.ico" type="image/x-icon">
    <link rel="icon" href="<?php echo $prefix; ?>img/favicon.ico" type="image/x-icon">

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" href="<?php echo $prefix; ?>css/style.css"/>
    <link rel="stylesheet" href="<?php echo $prefix; ?>css/fonts.css"/>
    <style>
        .mapmask {
            clip-path: url(#svgPath);
            -webkit-clip-path: url(#svgPath);
        }
    </style>

</head>
<body id="body">

<svg width="0" height="0">
    <defs>
        <clipPath id="svgPath">
            <path fill="#FFFFFF" stroke="#000000" stroke-width="1.5794" stroke-miterlimit="10"
                  d="M2707,769H1846.69c-39.69,0-112.07-79-150.99-79H0L3,0H910.277c27.256,0,54.639,40,82.1,40H2707V769Z"/>
        </clipPath>
    </defs>
</svg>

<div class="popup_overlay" onClick="popup_out();"></div>
<div class="popup" id="thx">
    <div class="popup_close noselect" onClick="popup_out();"><span>&nbsp;</span></div>
    <div class="popup_h1">Спасибо за оставленную заявку</div>
    <div class="popup_h2">Наш менеджер свяжется с вами в ближайшее время</div>
    <div class="btn" onClick="popup_out();">закрыть</div>
</div>
<div class="popup" id="callback">
    <div class="popup_close noselect" onClick="popup_out();"><span>&nbsp;</span></div>
    <div class="popup_h1">Мы вам перезвоним</div>
    <div class="popup_h2">
        Оставьте ваш номер<br>телефона, и менеджер<br>свяжется с вами в<br>ближайшее время
    </div>
    <form>
        <?php echo $desc_name ?>
        <label class="name required">
            <input type="text" name="name" placeholder="Ваше имя">
        </label>
        <?php echo $desc_phone ?>
        <div class="phone-field"><?php echo $phone_field ?></div>
        <div data-name="callback" class="button noselect btn">Заказать звонок</div>
    </form>
</div>
<div class="popup" id="request">
    <div class="popup_close noselect" onClick="popup_out();"><span>&nbsp;</span></div>
    <div class="popup_h1">Оставьте заявку</div>
    <div class="popup_h2">
        Оставьте заявку, и наш специалист свяжется<br>
        с вами в ближайшее время.
    </div>
    <form>
        <?php echo $desc_name ?>
        <label class="name required">
            <input type="text" name="name" placeholder="Ваше имя">
        </label><br>
        <?php echo $desc_phone ?>
        <div class="phone-field"><?php echo $phone_field ?></div>
        <?php echo $desc_email ?>
        <label class="email required">
            <input type="text" name="email" placeholder="Ваш E-mail">
        </label><br>
        <div data-name="request" class="button noselect btn">Заказать</div>
    </form>
</div>
<div class="popup" id="question">
    <div class="popup_close noselect" onClick="popup_out();"><span>&nbsp;</span></div>
    <div class="popup_h1">Задайте ваш вопрос</div>
    <form>
        <?php echo $desc_name ?>
        <label class="name required">
            <input type="text" name="name" placeholder="Ваше имя">
        </label>
        <?php echo $desc_phone ?>
        <div class="phone-field"><?php echo $phone_field ?></div>
        <?php echo $desc_ques ?>
        <textarea class="ques" name="ques" placeholder="Ваш вопрос"></textarea><br>
        <div data-name="question" class="button noselect btn">Задать вопрос</div>
    </form>
</div>
<div class="popup" id="moreinfo">
    <div class="popup_close noselect" onclick="popup_out();"><span> </span></div>
    <div class="popup_h1">Узнайте подробнее о нашем клубе</div>
    <div>
        <iframe width="698" height="396" src="https://www.youtube.com/embed/U94mH18k9jw" frameborder="0" allowfullscreen></iframe>
    </div>
</div>
<!--
<div class="wrapper container">
    <header>
        <nav class="navbar navbar-default navbar-fixed-top">
            <ul class="nav navbar-nav">
                <li><a class="head-button-left">Условия доставки</a></li>
                <li><a class="head-button-center">Дополнительные услуги</a></li>
                <li><a class="head-button-center">Личный кабинет</a></li>
                <li><a class="head-button-center">Схема работы</a></li>
                <li><a class="head-button-center">Партнёры</a></li>
                <li><a class="head-button-center">Отзывы</a></li>
                <li><a class="head-button-right">Контакты</a></li>
            </ul>
        </nav>
        <div class="heading"></div>
        <div class="logo"></div>
        <div class="login"></div>
        <div class="headtel"></div>

    </header>
    <div class="screen1">qweqweqw</div>
</div>
-->

<div>
    <div class="row-fluid">
        <div class="span12">
            <div class="nav">
                <nav class="navbar-fixed-top navbar-collapse collapse"
                     style="padding-left: 0; padding-right: 0; background-color: transparent">
                    <div>
                        <div class="wrapper">
                            <ul class="dostavka-nav">
                                <li class="head-button-left"><a href="#screen3">Условия доставки</a></li>
                                <li class="head-button-center"><a href="#screen5">Дополнительные услуги</a></li>
                                <li class="head-button-center"><a href="#screen6">Личный кабинет</a></li>
                                <li class="head-button-center"><a href="#screen7">Схема работы</a></li>
                                <li class="head-button-center"><a href="#screen8">Партнёры</a></li>
                                <li class="head-button-center"><a href="#screen9">Отзывы</a></li>
                                <li class="head-button-right"><a href="#screen10">Контакты</a></li>
                            </ul>
                            <div class="header-flex">
                                <div class="logo"><img src="img/logo.png"></div>
                                <div class="left-block">
                                    <div class="login-button">
                                        <img src="img/login.png" style="color: #f0c84b">
                                        <span class="dashed-underline login-text">Личный кабинет</span>
                                    </div>
                                    <div class="the-end">
                                        <div class="row1">Санкт-Петербург: +7 (812) 407-15-18</div>
                                        <div class="row1">Москва: +7 (495) 150-07-18</div>
                                        <div class="row3 callback">Заказать звонок</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </nav>
            </div>
            <div class="bg-image">
                <img class="background" src="./img/screen1-bg.jpg">
                <div class="title">
                    <div class="title-objects">
                        <div class="title-caption">
                            <div>курьерская служба</div>
                            <div>для интернет-магазинов</div>
                            <div>Экономьте до 40% на доставке товаров вашим клентам</div>
                            <div class="yellow-button">Протестировать услугу бесплатно в течении недели</div>
                        </div>
                        <div class="title-image">
                            <img src="./img/screen1-human.png">
                        </div>
                    </div>

                </div>
            </div>
            <div class="main">
                <div id="screen2">
                    <div class="screen-caption">магазины, которые уже увеличили свою прибыль</div>
                    <img src="./img/screen2-front.jpg">
                </div>
                <div id="screen3">
                    <div>
                        <div>
                            <div><img class="human" src="./img/screen3-human.png"></div>
                        </div>
                        <div>
                            <div class="fl-col">
                                <div class="caption">
                                    Доставка должна быть<br><b>преимуществом</b> магазина,<br> а не крупной статьей
                                    расходов
                                </div>
                                <div class="pre-list">
                                    Я владелец Интернет-магазина электроники,<br> и не понаслышке знаю о проблемах с
                                    доставкой:
                                </div>
                                <div class="list">
                                    <ul>
                                        <li>Содержать своего курьера и собственный склад - дорого</li>
                                        <li>Сторонние компании берут комиссию за каждое действие</li>
                                        <li>Неопрятные курьеры молча воруют посылки</li>
                                        <li>Товары теряются и ломаются в пути</li>
                                    </ul>
                                </div>
                                <div>Тогда я решил организовать<br><b>курьерскую службу по своим правилам</b></div>
                                <div class="fl-row bottom">
                                    <div class="fl-col">
                                        <div>Генеральный директор</div>
                                        <div>Михаил Сысоев</div>
                                    </div>
                                    <div class="watch-video moreinfo"">
                                        <img src="./img/screen2-videobutton.png">
                                        <div class="dashed-underline"><span>Смотреть</span><br><span>видео</span></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="screen4">
                    <div class="image-path2">
                        <div class="pf-italic30up step1"><b>эксклюзивные</b><br>условия доставки</div>
                        <div class="row1">

                            <div class="step2">
                                <div class="caption">0 % за возврат денег</div>
                                <div class="desc">Вернем всю стоимость<br>товара на следующий день<br>наличными или по
                                    безналу
                                </div>
                            </div>
                            <div class="step3">
                                <div class="caption">0 % за кассовое<br>обслуживание</div>
                                <div class="desc">У нас есть оборудование для<br>расчёта любыми способами</div>
                            </div>
                        </div>
                        <div class="row2">
                            <div class="step4">
                                <div class="caption">Курьер - лицо компании</div>
                                <div class="desc">Наши специалисты выглядят<br>презентабельно и могут<br>консультировать
                                    ваших клиентов
                                </div>
                            </div>
                            <div class="step5">
                                <div class="caption">100 % ответсвенности</div>
                                <div class="desc">Ваш клиент получит именно<br>тот товар, который заказывал,<br>- в
                                    целости
                                </div>
                            </div>
                            <div class="step6">
                                <div class="caption">Экспресс-доставка</div>
                                <div class="desc">Доставка товара день в<br>день, или в экстренных<br>случаях за 1 час
                                </div>
                            </div>
                        </div>
                        <div class="row3">
                            <div class="step7">
                                <div class="caption">Единая цена на доставку</div>
                                <div class="desc">в любую точку Москвы и<br>Санкт-Петербурга вне зависимости<br>от
                                    стоимости товара<br>
                                    <div class="lower">Рассчитать стоимость доставки<br>в другие регионы</div>
                                </div>
                            </div>
                            <div class="step8">
                                <div class="caption">Быстрые деньги</div>
                                <div class="desc">Получите деньги на<br>следующий день после<br> отправки товара<br> в
                                    другой регион, ещё<br> до оплаты покупателем
                                </div>
                            </div>
                            <div class="pf-italic30up dashed-underline step9 moreinfo"><span>узнать подробнее</span><br><span>о доставке</span></div>
                        </div>
                    </div>
                </div>
                <div id="screen5">
                    <div class="screenwrapper">
                        <div class="row">
                            <div class="cell">
                                <div>дополнительные</div>
                                <div>выгоды</div>
                                <div>сотрудничества</div>
                            </div>
                            <div class="cell">
                                <div class="card">
                                    <div class="front">
                                        <img src="img/card1-front.png">
                                        <div>
                                            <div>Склад</div>
                                            <div>+</div>
                                        </div>
                                    </div>
                                    <div class="back">
                                        <img src="img/card1-back.png">
                                        <div>
                                            <div>
                                                <div>Склад</div>
                                                <div>2 кв. м для хранения товаров на складе с видеонаблюдением <b>бесплатно</b>
                                                </div>
                                                <div class="moreinfo"><span>Узнать подробнее</span></div>
                                                <div>+</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="cell flipwrapper">
                                <div class="card">
                                    <div class="front">
                                        <img src="img/card2-front.png">
                                        <div>
                                            <div>Комплектация<br>нескольких заказов</div>
                                            <div>+</div>
                                        </div>
                                    </div>
                                    <div class="back">
                                        <img src="img/card2-back.png">
                                        <div>
                                            <div>
                                                <div>Комплектация<br>нескольких заказов</div>
                                                <div>Рациональная группировка посылок для быстрой доставки</div>
                                                <div class="moreinfo"><span>Узнать подробнее</span></div>
                                                <div>+</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="cell flipwrapper">
                                <div class="card">
                                    <div class="front">
                                        <img src="img/card3-front.png">
                                        <div>
                                            <div>Пункты<br>выдачи товаров</div>
                                            <div>+</div>
                                        </div>
                                    </div>
                                    <div class="back">
                                        <img src="img/card3-back.png">
                                        <div>
                                            <div>
                                                <div>Пункты выдачи товаров</div>
                                                <div>Ваши клиенты сами могут забрать товар с наших пунктов выдачи</div>
                                                <div class="moreinfo"><span>Узнать подробнее</span></div>
                                                <div>+</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="cell flipwrapper">
                                <div class="card">
                                    <div class="front">
                                        <img src="img/card4-front.png">
                                        <div>
                                            <div>Сейф-упаковка<br>с вашим логотипом</div>
                                            <div>+</div>
                                        </div>
                                    </div>
                                    <div class="back card4">
                                        <img src="img/card4-back.png">
                                        <div>
                                            <div>
                                                <div>Сейф-упаковка<br>с вашим логотипом</div>
                                                <div>Брендированная упаковка повышает лояльность и узнаваемость вашей
                                                    компании
                                                </div>
                                                <div class="moreinfo"><span>Узнать подробнее</span></div>
                                                <div>+</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="cell flipwrapper">
                                <div class="card">
                                    <div class="front">
                                        <img src="img/card5-front.png">
                                        <div>
                                            <div>SMS-оповещения<br>вам и клиенту</div>
                                            <div>+</div>
                                        </div>
                                    </div>
                                    <div class="back card5">
                                        <img src="img/card5-back.png">
                                        <div>
                                            <div>
                                                <div>SMS-оповещения<br>вам и клиенту</div>
                                                <div>Вы и ваши клиенты всегда в курсе происходящего</div>
                                                <div class="moreinfo"><span>Узнать подробнее</span></div>
                                                <div>+</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div id="screen6">
                    <div class="caption">зарегистрировавшись в личном кабинете, вы сможете:</div>
                    <div class="categories">
                        <div class="active tvshow" id="imac1"><span>легко размещать заказы</span></div>
                        <div class="tvshow" id="imac2"><span>быстро получать отчёты</span></div>
                        <div class="tvshow" id="imac3"><span>мгновенно получть помощь менеджера</span></div>
                    </div>
                    <div class="imac">
                        <div class="tvscreen"></div>
                    </div>
                    <div class="reg callback">Зарегистрироваться</div>

                </div>
                <div id="screen7">
                    <div>
                        <div>
                            <div class="caption">сбор заказа</div>
                            <ul>
                                <li>Вы загружаете все заказы за день в "Личный кабинет"</li>
                                <li>Курьер забирает заказы из магазина или со склада, индивидуально, с 6:00 до 20:00
                                </li>
                            </ul>
                        </div>
                        <div>
                            <div class="caption">подготовка к отправке</div>
                            <ul>
                                <li>Заказы упаковываются в герметичные сейф-пакеты с вашим логотипом</li>
                                <li>При необходимости несколько заказов одного клиента комплектуются в один</li>
                            </ul>
                        </div>
                        <div>
                            <div class="caption">доставка</div>
                            <ul>
                                <li>На базе склада организован пункт выдачи - ваш клиент может в любое время забрать
                                    заказ оттуда
                                </li>
                                <li>Доставка на следующий день после оформления заказа</li>
                                <li><span class="link">Экспресс доставка</span></li>
                                <li>SMS-оповещение вашего клиента за час до доставки</li>
                            </ul>

                        </div>
                        <div>
                            <div class="caption">постобслуживание</div>
                            <ul>
                                <li>SMS-оповещение вас о выполнении доставки</li>
                                <li>SMS вашему клиенту с благодарностью за использование услуг вашй компании</li>
                                <li>Возврат денег без комиссий на следуюций день после доставки</li>
                            </ul>
                        </div>
                    </div>
                    <span class="yellow-button callback">Начать сотрудничество</span>
                </div>
                <div id="screen8">

                    <div class="carwrapper">
                        <div class="caption">
                            <div class="bigletters">неделя</div>
                            <div class="smallletters">бесплатной доставки</div>
                        </div>
                        <div class="request-form">
                            <div class="form-caption">
                                <div class="text-uppercase">оставьте заявку</div>
                                <div>чтобы <b>бесплатно</b> протестировать услуги в вашей компании</div>
                            </div>
                            <form>
                                <div class="desc"><?php echo $desc_name ?></div>
                                <div class="data-field">
                                    <label class="name required">
                                        <input type="text" name="name" placeholder="Ваше имя">
                                    </label>
                                </div>
                                <div class="desc"><?php echo $desc_phone ?></div>
                                <div class="data-field"> <?php echo $phone_field ?></div>
                                <div class="desc"><?php echo $desc_email ?></div>
                                <div class="data-field">
                                    <label class="email required">
                                        <input type="text" name="email" placeholder="Ваш E-mail">
                                    </label>
                                </div>
                                <div data-name="callback" class="button noselect btn yellow-button">Попробовать
                                    бесплатно
                                </div>
                            </form>
                        </div>
                        <div class="form">

                        </div>
                    </div>

                </div>
                <div id="screen9">
                    <div>
                        <div>
                            клиенты будут<br>заказывать у вас больше
                        </div>
                        <div>
                            <div>
                                <div class="element">
                                    <img src="img/screen8-sub1.jpg" class="photo">
                                    <div class="text">
                                        <div class="caption">Александр Шаляпин</div>
                                        <div class="body">Мы с девушкой заказали себе игрушки с фото наших лиц в 3D, в
                                            интернет-магазине "Няшики". Уже через час
                                            мы рассматривали плюшевых медведей, удивительно похожиш на нас, и улыбались.
                                        </div>
                                    </div>
                                </div>
                                <div class="element">
                                    <img src="img/screen8-sub2.jpg" class="photo">
                                    <div class="text">
                                        <div class="caption">Иван Самойлов</div>
                                        <div class="body">Заказывал себе смартфон на megazar.ru. Доставили вовремя, SMS
                                            где-то за час прислали. Объяснили непонятные моменты, остался доволен.
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="element">
                                    <img src="img/screen8-sub3.jpg" class="photo">
                                    <div class="text">
                                        <div class="caption">Сергей Грабченко</div>
                                        <div class="body">Я руководитель студии и мне недавно прислали каталог от фирмы
                                            "Империя воды". В целом, ощущения полоительные,
                                            приятные упаковка и интересный каталог.
                                        </div>
                                    </div>
                                </div>
                                <div class="element">
                                    <img src="img/screen8-sub4.jpg" class="photo">
                                    <div class="text">
                                        <div class="caption">Ирина Осипова</div>
                                        <div class="body">Получила подарок с букетом от любимого прямо на работе. Очень
                                            приятно. Спасибо курьеру за аккуратную доставку моего букета.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="screen10">
                    <div class="image-path2">
                        <div class="mapmask" id="map" style="width: 2707px;height: 1105px;"></div>
                        <div class="maplayout" style="width: 2707px;height: 840px;">
                            <div class="dark-blue-text caption">
                                <div class="pf-italic30up">остались вопросы?</div>
                                <div class="question dashed-underline"><span>Задайте их нашему менеджеру</span></div>
                                <div class="aboutbox">
                                    <div class="spacer">контакты</div>
                                    <div class="spacer comment">Главный офис, склад и пункт выдачи:</div>
                                    <div class="data">г.Москва, ул. Расковой, д.10, корп. 4</div>
                                    <div class="spacer comment">Телефон:</div>
                                    <div class="data">Москва: +7 (495) 150-07-18<br>
                                        Санкт-Петербург: +7 (812) 407-15-18</bt></div>
                                    <div class="spacer comment">E-mail:</div>
                                    <div class="data">info@dostavka-club.ru<br>
                                        zakaz@dostavka-club.ru
                                    </div>
                                    <div class="yellow-button spacer callback">Заказать звонок</div>
                                </div>
                                <div class="mostfooter">
                                    <div>
                                        <span class="dashed-underline">Политика конфиденциальности</span>
                                    </div>
                                    <div class="rightfoot">
                                        <span>Разработка Landing page:</span>
                                        <img src="img/mokselle.png">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<input type="hidden" name="prefix" class="prefix" value="<?php echo $prefix; ?>">
<input type="hidden" name="phone_format" class="phone_format" value="<?php echo $phone_format; ?>">
<input type="hidden" name="referer"
       value="<?php echo isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : "" ?>">
<input type="hidden" name="ref_url" value="<?php echo $_SERVER['QUERY_STRING'] ?>">
<input type="hidden" class="formname" name="formname" value="">
<input type="hidden" class="sitename" name="sitename" value="<?php echo $sitename; ?>">
<input type="hidden" class="emailsarr" name="emailsarr" value="<?php echo $emailsArr; ?>">

<script type="text/javascript" src="<?php echo $prefix; ?>js/plugins.js"></script>
<script type="text/javascript" src="<?php echo $prefix; ?>js/jquery-3.1.1.min.js"></script>
<script type="text/javascript" src="<?php echo $prefix; ?>js/jquery.flip.min.js"></script>
<script>
    function myMap() {
        var mapCanvas = document.getElementById("map");
        var myCenter = new google.maps.LatLng(55.785848, 37.565);
        var markerCenter = new google.maps.LatLng(55.785848, 37.572519);
        var mapOptions = {
            center: myCenter,
            zoom: 17,
            mapTypeId: google.maps.MapTypeId.ROADMAP
        }
        var marker = new google.maps.Marker({
            position: markerCenter
        });

        var map = new google.maps.Map(mapCanvas, mapOptions);
        marker.setMap(map);

    }
</script>
<script src="https://maps.googleapis.com/maps/api/js?callback=myMap"></script>
<script>
    $(function ($) {
        $(".card").flip({
            axis: "y", // y or x
            reverse: false, // true and false
            trigger: "hover", // click or hover
            speed: 500
        });
        $(".moreinfo").on('click', function() {
           popup('moreinfo');
        });

        $(".question").on('click', function () {
            popup('question');
        });
        $(".request").on('click', function () {
            popup('request');
        });
        $(".callback").on('click', function () {
            popup('callback');
        });
        $(".link").on('click', function () {
            popup('request');
        });
        $(".yellow-button").on('click', function () {
            popup('callback');
        });
        $(".back").css("visibility", "visible");

        $(".tvshow").on('click', function () {
            $(".tvshow").removeClass("active");
            $(".tvscreen").css('background-image', 'url(./img/screen6-' + $(this).attr('id') + '.jpg)');
            $(this).addClass('active');
        })
    });
</script>
</body>
</html>