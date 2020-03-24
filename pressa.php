<?php
    require_once('define.php');
    require_once("header.php");
?>
<body class="golamago golamago_pressa">
    <?php
        require_once('module/top_menu.php');
        require_once('module/text_scroll.php');
    ?>
    <main class="golamago__main">
        <div class="golamago__centerer">
            <div class="golamago-page-pressa">
                <div class="golamago-page-pressa__top">
                    <h2 class="golamago__h2">Пресса о нас</h2>
                    <a class="golamago-page-pressa__na-glavnyu" href="/"><img src="img/na_glavnyu.png" /></a>
                </div>
                <div class="golamago-page-pressa__items">
                    <?php
                        $items = [
                            ['partner1.jpg', '- Доставка продуктов из Metro и «Ленты»'],
                            ['partner2.jpg', '- На рынок доставки продуктов питания и товаров выходит новый игрок – приложение ...'],
                            ['partner3.jpg', '- Основатель «Везет» доставит продукты'],
                            ['partner4.jpg', '- Экс-глава агрегатора такси «Везет» запустил доставку продуктов из супермаркетов'],
                            ['partner5.jpg', '- Экс-глава такси «Везет» запустил сервис доставки продуктов из супермаркетов ... - Голамаго. Новый лидер рынка?'],
                            ['partner6.jpg', '- Сервис Golamago договорился о доставке еды с Metro и «Лентой» в регионах РФ'],
                            ['partner7.jpg', '- Состоялся релиз приложения golamago, предлагающего доставку продуктов питания'],
                            ['partner8.jpg', '- Экс-глава такси «Везет» запустил сервис доставки продуктов из супермаркетов ...'],
                            ['partner9.jpg', '- СООСНОВАТЕЛЬ «ВЕЗЕТ» ЗАПУСТИЛ GOLAMAGO'],
                            ['partner10.jpg', '- «Яндекс.Еда» накормит всю Россию'],
                            ['partner11.jpg', '- В Москве запустился сервис доставки продуктов из магазинов Golamago'],
                            ['partner12.jpg', '- В еще один сервис по доставке продуктов из супермаркетов вложили 100 млн рублей'],
                            ['partner13.jpg', '- Сооснователь агрегатора такси «Везёт» Евгений Львов запустил сервис доставки продуктов ...'],
                            ['partner14.jpg', '- Основатель агрегатора такси «Везёт» запустит сервис доставки продуктов'],
                            ['partner15.jpg', '- Компания: Golamago']
                        ];
                    ?>
                    <?php foreach($items as $val): ?>
                        <div class="golamago-page-pressa-item">
                            <div class="golamago-page-pressa-item__img">
                                <img src="img/<?php echo $val[0] ?>" />
                            </div>
                            <div class="golamago-page-pressa-item__text">
                                <?php echo $val[1] ?>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>

        <?php require_once('module/footer.php'); ?>
    </main>

<?php require_once('footer.php'); ?>