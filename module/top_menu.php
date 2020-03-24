<header class="golamago-topmenu">
    <?php if(PAGE == 'index' || PAGE == ''): ?>
        <a class="golamago-topmenu__logo" href="javascript:void(0);"></a>

    <?php else: ?>
        <a class="golamago-topmenu__logo" href="/"></a>
    <?php endif; ?>

    <div class="golamago__centerer">
        <ul class="golamago-topmenu-ul">
            <li class="golamago-topmenu-li golamago-topmenu-li_menu golamago-topmenu-li_v1">
                <a href="javascript:void(0);">
                    <i class="fas fa-bars"></i>меню
                </a>
            </li>
            <li class="golamago-topmenu-li golamago-topmenu-li_v1 golamago-topmenu__download-app">
                <?php if(PAGE == 'index' || PAGE == ''): ?>
                    <a href="javascript:void(0);"><i class="fas fa-mobile-alt"></i>скачать</a>

                <?php else: ?>
                    <a href="/#clients"><i class="fas fa-mobile-alt"></i>скачать</a>
                <?php endif; ?>

            </li>
            <li class="golamago-topmenu-li golamago-topmenu-li_v1">
                <a href="about#block-8">
                    <i class="fas fa-map-marker-alt"></i>москва
                </a>
            </li>

            <!-- split -->
            <li class="golamago-topmenu-li golamago-topmenu-li_times golamago-topmenu-li_v2">
                <a href="javascript:void(0);">
                    <i class="fas fa-times"></i>
                </a>
            </li>
            <li class="golamago-topmenu-li golamago-topmenu-li_v2">
                <a href="about">о сервисе</a>
            </li>
            <li class="golamago-topmenu-li golamago-topmenu-li_v2">
                <a href="about#block-2">условия доставки</a>
            </li>
            <li class="golamago-topmenu-li golamago-topmenu-li_v2">
                <a href="partners">партнерам</a>
            </li>
            <li class="golamago-topmenu-li golamago-topmenu-li_v2">
                <a href="pressa">пресса о нас</a>
            </li>
        </ul>
    </div>
    <div class="golamago-topmenu__soc">
        <a href="https://www.facebook.com/golamagoo" target="_blank"><i class="fab fa-facebook-f"></i></a>
        <a href="https://vk.com/golamago" target="_blank"><i class="fab fa-vk"></i></a>
        <a href="https://www.instagram.com/golamagoo" target="_blank"><i class="fab fa-instagram"></i></a>
        <!--<a href="https://twitter.com/golamago" target="_blank"><i class="fab fa-twitter"></i></a>-->
    </div>
</header>
<header class="golamago-topmenumob">
    <div class="golamago__centerer">
        <div class="golamago-topmenumob__top">
            <div class="golamago-topmenumob__bars_and_close">
                <a class="golamago-topmenumob__bars" href="javascript:void(0);">
                    <i class="fas fa-bars"></i>
                </a>
                <a class="golamago-topmenumob__close" href="javascript:void(0);">
                    <i class="fas fa-times"></i>
                </a>
            </div>
            <div>
                <?php if(PAGE == 'index' || PAGE == ''): ?>
                    <a class="golamago-topmenumob__logo" href="javascript:void(0);"></a>

                <?php else: ?>
                    <a class="golamago-topmenumob__logo" href="/"></a>
                <?php endif; ?>
            </div>
            <div>
                <?php if(PAGE == 'index' || PAGE == ''): ?>
                    <a class="golamago-topmenumob__download" href="javascript:void(0);">
                        скачать
                    </a>
                <?php else: ?>
                    <a class="golamago-topmenumob__download" href="/#clients">
                        скачать
                    </a>
                <?php endif; ?>
            </div>
        </div>
        <div class="golamago-topmenumob__bot">
            <ul>
                <li>
                    <a href="about">о сервисе</a>
                </li>
                <li>
                    <a href="about#block-2">условия доставки</a>
                </li>
                <li>
                    <a href="partners">партнерам</a>
                </li>
                <li>
                    <a href="pressa">пресса о нас</a>
                </li>
            </ul>
            <div class="golamago-soc">
                <a class="fb" href="https://www.facebook.com/golamagoo" target="_blank"><i class="fab fa-facebook-f"></i></a>
                <a class="vk" href="https://vk.com/golamago" target="_blank"><i class="fab fa-vk"></i></a>
                <a class="inst" href="https://www.instagram.com/golamagoo" target="_blank"><i class="fab fa-instagram"></i></a>
                <!--<a href="https://twitter.com/golamago" target="_blank"><i class="fab fa-twitter"></i></a>-->
            </div>
        </div>
    </div>
</header>