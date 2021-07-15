<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <title>DolceVita</title>

    <link rel='stylesheet' href="/dist/css/main.css">
    <script type="text/javascript" src="/dist/js/main.js"></script>
</head>

<body>
    <div class="wrapper">
        <header class="header">
            <div class="header__content container">
                <div class="header__left">
                    <div class="header__dolce">
                        <a class="header__logo" href="/">
                            <?include $_SERVER['DOCUMENT_ROOT'] . '/dist/img/svg/dolceLogo.svg';?>
                        </a>
                    </div>
                    <nav class="header__nav">
                        <div class="headerNavTop">
                            <ul class="headerNavTop__ul">
                                <li class="headerNavTop__li">
                                    <a class="headerNavTop__link active" href="#">О нас</a>
                                </li>
                                <li class="headerNavTop__li">
                                    <a class="headerNavTop__link" href="#">Блог</a>
                                </li>
                                <li class="headerNavTop__li">
                                    <a class="headerNavTop__link" href="#">Контакты</a>
                                </li>
                            </ul>
                        </div>
                        <div class="headerNavBottom">
                            <ul class="headerNavBottom__ul">
                                <li class="headerNavBottom__li">
                                    <span class="headerNavBottom__link">Услуги</span>
                                </li>
                                <li class="headerNavBottom__li">
                                    <span class="headerNavBottom__link">Магазин</span>
                                </li>
                                <li class="headerNavBottom__li">
                                    <a class="headerNavBottom__link" href="#">Акции</a>
                                </li>
                                <li class="headerNavBottom__li">
                                    <a class="headerNavBottom__link" href="#">Стоимость</a>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </div>
                <div class="header__right">
                    <div class="header__phone">
                        <a class="header__tel" href="tel:+73812790058">
                            <span>+7 3812</span> 79-00-58
                        </a>
                    </div>
                    <div class="header__btns">
                        <div class="header__search">
                            <div class="header__quest">
                                <?include $_SERVER['DOCUMENT_ROOT'] . '/dist/img/svg/headerSearch-i.svg';?>
                            </div>
                        </div>
                        <div class="btnPurple header__signUp">Записаться</div>
                    </div>
                </div>
            </div>
        </header>