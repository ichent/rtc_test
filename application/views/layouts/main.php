<html>
<head>
    <link rel="stylesheet" href="/css/layout.css" />
    <script src="/js/jquery-1.11.2.min.js"></script>
    <script src="/js/main.js"></script>
</head>
<body>
    <div class="wrapper">
        <div class="header_top">
                <img class="float_left" src="/images/top.png">
                <div class="top_bg_right">
                    <div class="float_right search_block">
                        <form class="js-search-form" method="post" action="/">
                            <input type="text" name="search_text">
                            <img class="js-search-button" src="/images/search_button.png">
                        </form>
                    </div>
                </div>
        </div>        
        <div class="header_info">
            <div class="float_left">
                <img src="/images/header_info_left.png">
            </div>
            <div class="float_right">
                <img src="/images/header_info_right.png">
            </div>
        </div>
        <div class="header_menu">
            <div class="menu_item home"><a href="/"><img src="/images/home.png"></a></div>
            <div class="menu_item first"><a href="/">СТАТЬ КЛИЕНТОМ</a></div>
            <div class="menu_item"><a href="/">ТАРИФЫ</a></div>
            <div class="menu_item"><a href="/">УСЛУГИ</a></div>
            <div class="menu_item"><a href="/">ПАРТНЕРАМ</a></div>
            <div class="menu_item"><a href="/hardware">ОБОРУДОВАНИЕ И ПО</a></div>
        </div>
        <div class="content">
            <? if (isset($content)) { ?>
            <?=$content?>
            <? } ?>
        </div>
    </div>
    <div class="footer">
        <div class="footer_item">
            <div class="footer_item__title"><span>О КОМПАНИИ</span></div>
            <ul>
                <li><a href="/">&ndash;&nbsp;История</a></li>
                <li><a href="/">&ndash;&nbsp;Команда</a></li>
                <li><a href="/">&ndash;&nbsp;Нас рекомендуют</a></li>
                <li><a href="/">&ndash;&nbsp;Акции</a></li>
                <li><a href="/">&ndash;&nbsp;Новости</a></li>
                <li><a href="/">&ndash;&nbsp;Пресса о нас</a></li>
                <li><a href="/">&ndash;&nbsp;Пресс-центр</a></li>
                <li><a href="/">&ndash;&nbsp;Банковские реквизиты</a></li>
                <li><a href="/">&ndash;&nbsp;Вакансии</a></li>
            </ul>
        </div>
        <div class="footer_item">
            <div class="footer_item__title"><span>ДОКУМЕНТЫ</span></div>
            <ul>
                <li><a href="/">&ndash;&nbsp;Лицензии</a></li>
                <li><a href="/">&ndash;&nbsp;Договоры</a></li>
                <li><a href="/">&ndash;&nbsp;Письма</a></li>
            </ul>
        </div>
        <div class="footer_item">
            <div class="footer_item__title"><span>ОПЕРАТОРАМ</span></div>
            <ul>
                <li><a href="/">&ndash;&nbsp;Покупка Трафика</a></li>
                <li><a href="/">&ndash;&nbsp;Продажа Трафика</a></li>
            </ul>
        </div>
        <div class="footer_item">
            <div class="footer_item__title"><span>ВОПРОСЫ И ОТВЕТЫ</span></div>
            <ul>
                <li><a href="/">&ndash;&nbsp;Как звонить?</a></li>
                <li><a href="/">&ndash;&nbsp;Как правильно рассчитать стоимость звонка?</a></li>
            </ul>
        </div>
        <div class="footer_item">
            <div class="footer_item__title"><span>КОНТАКТЫ</span></div>
            <ul>
                <li><a href="/">&ndash;&nbsp;Обратная связь</a></li>
            </ul>
        </div>
        <div class="float_none clear_both">
            <div class="copyright">&copy;2001-2012 ЗАО Зебра Телеком, тел. 8-800-100-17-50</div>
            <div class=" social float_right"><img src="/images/social.png"></div>
        </div>
    </div>
</body>
</html>
