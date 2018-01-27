<!-- NAVBAR -->
<nav class="navbar navbar-default " role="navigation">
    <div class="container">
        @include('front.inc.topbar')
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#main-nav">
                <span class="sr-only">Toggle Navigation</span>
                <i class="fa fa-bars"></i>
            </button>
            <a href="/" class="navbar-brand navbar-logo navbar-logo-bigger">Авиационный Учебный Центр СПбГУГА
<!--                <img src="assets/img/logo/logo_h2.jpg" alt="Logo">-->
            </a>
        </div>
        <!-- MAIN NAVIGATION -->
        <div id="main-nav" class="navbar-collapse collapse navbar-mega-menu">
            <ul class="nav navbar-nav navbar-right">
                
                <li class="dropdown active">
<!--<a href="#" class="dropdown-toggle" data-toggle="dropdown">HOME <i class="fa fa-angle-down"></i></a>                    -->
                    <a href="/">Общая информация <i class="fa fa-angle-down"></i></a>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="/">Новости</a></li>
                        <li><a href="/docs_auc">Основные сведения</a></li>
                        <li><a href="{{ asset('Структура АУЦ.pdf') }}" target="_blank">Структура АУЦ</a></li>
<!--                        <li><a href="/docs_auc">Нормативная база</a></li>-->
                        <li class="dropdown ">
                            <a href="#">Нормативная база <i class="fa fa-angle-right"></i></a>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="/docs_auc_icao">ИКАО</a></li>
                                <li><a href="#">МИНТРАНС РФ</a></li>
                                <li><a href="#">РФ</a></li>
                            </ul>
                        </li>                        
                        <li><a href="#">Образование</a></li>
                        <li><a href="#">Руководство. Педагогический состав</a></li>
                        <li><a href="#">Материально-техническое обеспечение</a></li>
                        <li><a href="#">Платные образовательные услуги</a></li>
                        <li><a href="#">Библиотека</a></li>
                        <li><a href="#">Электронное обучение</a></li>
                        
<!--
                        <li class="dropdown ">
                            <a href="#">Электронное обучение <span class="label label-danger label-main-nav">NEW</span> <i class="fa fa-angle-right"></i></a>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="#">Хорошие манеры</a></li>
                                <li><a href="#">Язык животных</a></li>
                            </ul>
                        </li>
-->
                        
                        <li><a href="#">История АУЦ</a></li>
                    </ul>
                </li>

                <li class="dropdown ">
                    <a href="/navbar2">Направления <i class="fa fa-angle-down"></i></a>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="#">ПРРиСО </a></li>
                        <li><a href="#">ЦЛП </a></li>
                        <li><a href="#">ЦППА</a></li>
                        <li><a href="#">ЦСПП </a></li>
                        <li><a href="#">ЦЯП </a></li>
                        <li><a href="#">ЦППА</a></li>
                        <li><a href="#">ЦПСАК </a></li>
                        <li><a href="#">ТП </a></li>
                        <li><a href="/docs_bluga">БЛУГА <span class="label label-danger label-main-nav">NEW</span> </a></li>
                    </ul>
                </li>
                
                <li class="dropdown ">
                    <a href="/navbar3">Контакты <i class="fa fa-angle-down"></i></a>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="#">Как с нами связаться</a></li>
                        <li><a href="#">Где нас найти</a></li>
                        <li><a href="#">Напишите нам письмо</a></li>
                    </ul>
                </li>
                
            </ul>
        </div>
        <!-- END MAIN NAVIGATION -->
    </div>
</nav>
<!-- END NAVBAR -->