<?php
    require_once('define.php');
    require_once("header.php");
?>
<body class="golamago golamago_index">
    <?php
        require_once('module/top_menu.php');
        require_once('module/text_scroll.php');
    ?>

    <div class="golamago-pager">
        <div class="golamago-pager__top">/0<span class="golamago-pager__total">0</span></div>
        <div class="golamago-pager__basic">1</div>
    </div>
    <div class="golamago-modal" data-modal="video-info">
        <div class="golamago-modal__container">
            <i class="fas fa-times golamago-modal__close"></i>
            <iframe width="1060"
                    height="596"
                    src="https://www.youtube.com/embed/CDSJjcBLVWM"
                    frameborder="0"
                    allow="autoplay; encrypted-media"
                    allowfullscreen></iframe></div>
    </div>

    <main class="golamago__main">
        <section class="section golamago__section golamago__section_intro">
            <img class="golamago__img" src="img/bg-girl-orange.jpg" />
            <div class="golamago__centerer">
                <div class="golamago__pos">01</div>
                <div class="golamago-iphone">
                    <div class="golamago-iphone__content">
                        <div class="golamago-iphone__slider">
                            <img class="golamago-iphone__mask" src="img/mask.png" />
                            <div class="slick">
                                <img class="golamago-iphone__img" src="img/intro_1.png" />
                                <img class="golamago-iphone__img" src="img/intro_2.png" />
                                <img class="golamago-iphone__img" src="img/intro_3.png" />
                                <img class="golamago-iphone__img" src="img/intro_4.png" />
                                <img class="golamago-iphone__img" src="img/intro_5.png" />
                                <img class="golamago-iphone__img" src="img/intro_6.png" />
                                <img class="golamago-iphone__img" src="img/intro_7.png" />
                            </div>
                        </div>
                    </div>
                </div>
                <div class="golamago-intro">
                    <div>
                        <h2 class="golamago__h2">Продукты домой быстрее</h2>
                        <p><strong>golamago</strong> - сервис быстрой доставки продуктов. Нашим клиентам мы привозим
                            самое свежее и вкусное из гипермаркетов в тот же день, в точное время. Всего за 290 рублей.</p>
                        <a class="golamago__btn golamago__btn_sea golamago-intro__download-app" href="javascript:void(0);">Скачать приложение</a>
                    </div>
                </div>
            </div>
        </section>
        <section class="section golamago__section golamago__section_work">
            <img class="golamago__img" src="img/bg-girl-sea.jpg" />
            <div class="golamago__centerer">
                <div class="golamago__pos">02</div>
                <div class="golamago-work">
                    <div>
                        <h2 class="golamago__h2">Работаем на вас</h2>
                        <p>Мы работаем на вас, а не на магазин.<br />
                            Наши сборщики в магазине отберут самое свежее<br />
                            и аккуратно упакуют в коробки и сумки-холодильники.<br />
                            Мы хотим, чтобы вы всегда были довольны.</p>
                        <h4 class="golamago__h4">Доставляем продукты из</h4>

                        <div class="golamago-partners">
                            <div class="golamago-partners__activers">
                                <div class="golamago-partners__item golamago-partners__item_metro">
                                    <img src="img/label-metro.jpg" />
                                </div>
                                <div class="golamago-partners__item golamago-partners__item_lenta">
                                    <img src="img/label-lenta.jpg" />
                                </div>
                            </div>
                            <div class="golamago-partners__comming-soon">
                                <div class="golamago-partners__item golamago-partners__item_karusel">
                                    <img src="img/label-karysel.jpg" />
                                    <div>скоро</div>
                                </div>
                                <div class="golamago-partners__item golamago-partners__item_globus">
                                    <img src="img/label-globus.jpg" />
                                    <div>скоро</div>
                                </div>
                                <div class="golamago-partners__item golamago-partners__item_more">
                                    <img src="img/label-more.jpg" />
                                    <div></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="section golamago__section golamago__section_video">
            <div class="golamago__centerer">
                <div class="golamago-video-wrapper">
                    <div class="golamago-video" data-modal="video-info">
                        <h2 class="golamago__h2">Как работает<br />наш сервис</h2>
                        <div class="golamago-video__play">
                            <i class="fas fa-play"></i>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="section golamago__section golamago__section_faster">
            <div class="golamago__centerer">
                <div class="golamago__pos">04</div>
                <div class="golamago-faster">
                    <div>
                        <h2 class="golamago__h2">Быстро.</h2>
                        <h2 class="golamago__h2 golamago__h2_gray">В точное время.</h2>
                        <h2 class="golamago__h2 golamago__h2_gray">От 1 рубля.</h2>

                        <div class="golamago-faster__textes">
                            <div class="golamago-faster__text golamago-faster__text_active">
                                <p>Мы привозим заказы по Москве очень быстро.<br />
                                    Среднее время доставки - 90 минут.</p>
                            </div>
                            <div class="golamago-faster__text">
                                <p>Вы сами выбираете точное время, в которое хотите<br />
                                    получить продукты. Никаких интервалов ожидания.</p>
                            </div>
                            <div class="golamago-faster__text">
                                <p>У нас нет минимальной суммы чека.<br />
                                    Мы привезем хоть пачку соли или буханку хлеба.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="golamago-iphone-scroller">
                <div class="golamago-iphone-scroller__block">
                    <div class="golamago-iphone-scroller__arrow golamago-iphone-scroller__arrow_prev golamago-iphone-scroller__arrow_disabled">
                        <i class="fas fa-angle-up"></i>
                    </div>
                    <div class="golamago-iphone-scroller__arrow golamago-iphone-scroller__arrow_next">
                        <i class="fas fa-angle-down"></i>
                    </div>
                    <div class="golamago-iphone-scroller__container">
                        <div class="golamago-iphone-scroller__step golamago-iphone-scroller__step_1 golamago-iphone-scroller__step_active visible"></div>
                        <div class="golamago-iphone-scroller__step golamago-iphone-scroller__step_2 hidden"></div>
                        <div class="golamago-iphone-scroller__step golamago-iphone-scroller__step_3 hidden"></div>
                        <div class="golamago-iphone-scroller__step golamago-iphone-scroller__step_4 hidden"></div>
                    </div>
                </div>
            </div>
        </section>
        <section class="section golamago__section golamago__section_clients">
            <div class="golamago__centerer">
                <div class="golamago__pos">05</div>
                <div class="golamago-clients">
                    <div>
                        <div class="golamago-clients__h2s">
                            <h2 class="golamago__h2 active" data-kind="client">Клиентам</h2>
                            <h2 class="golamago__h2" data-kind="courier">Курьерам</h2>
                        </div>
                        <div class="golamago-markets">
                            <a class="golamago-market golamago-market_app active" data-kind="client" href="<?php echo APP_LINK ?>" target="_blank">App Store</a>
                            <a class="golamago-market golamago-market_ggl active" data-kind="client" href="<?php echo GGL_LINK ?>" target="_blank">Google Play</a>
                            <a class="golamago-market golamago-market_ggl" data-kind="courier" href="<?php echo GGL_LINK_WORKER ?>" target="_blank">Google Play</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="golamago__two-iphones-mob"></div>
        </section>

        <?php require_once('module/footer.php'); ?>
    </main>

<?php require_once('footer.php'); ?>