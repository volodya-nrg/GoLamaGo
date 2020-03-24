<?php
    session_start();

    require_once('define.php');

    if (!empty($_GET['key']) && !empty($_SESSION['secret']) && $_GET['key'] == $_SESSION['secret']) {
        $empty = "пусто";
        $name = !empty($_GET['name'])? $_GET['name']: $empty;
        $surname = !empty($_GET['surname'])? $_GET['surname']: $empty;
        $organization = !empty($_GET['organization'])? $_GET['organization']: $empty;
        $tel = !empty($_GET['tel'])? $_GET['tel']: $empty;

        $name = trim(strip_tags($name));
        $surname = trim(strip_tags($surname));
        $organization = trim(strip_tags($organization));
        $tel = trim(strip_tags($tel));

        $name = !empty($name)? $name: $empty;
        $surname = !empty($surname)? $surname: $empty;
        $organization = !empty($organization)? $organization: $empty;
        $tel = !empty($tel)? $tel: $empty;

        $msg = [
            "Имя - " . $name,
            "Фамилия - " . $surname,
            "Организация - " . $organization,
            "Номер телефона - " . $tel
        ];

        $res = mail(EMAIL_WORK, "Заявка на подключение нового супермаркета (гипермаркета)", implode("\n", $msg));
        $_SESSION['is_send_post'] = $res? 1: 0;
        header('Location:' . HOST . '/partners');
        exit;
    }

    $_SESSION['secret'] = md5(uniqid(rand(),true));

    require_once("header.php");
?>
<body class="golamago golamago_partners">
    <?php
        require_once('module/top_menu.php');
        require_once('module/text_scroll.php');
    ?>
    <main class="golamago__main">
        <div class="golamago__centerer">
            <div class="golamago-page-partners">
                <div class="golamago-page-partners__cell golamago-page-partners__cell_1">
                    <h2 class="golamago__h2">Партнерам</h2>
                    <p>Мы будем рады подключить новые супермаркеты
                        и гипермаркеты. Оставьте ваши контакты,
                        мы с вами обязательно свяжемся</p>
                </div>
                <div class="golamago-page-partners__cell golamago-page-partners__cell_2">
                    <?php if (isset($_SESSION['is_send_post'])): ?>
                        <?php if ($_SESSION['is_send_post']): ?>
                            <h2 class="golamago__h2 golamago__h2_gray">Спасибо за заявку!<br />Мы с вами свяжемся обязательно!</h2>

                        <?php else: ?>
                            <h2 class="golamago__h2 golamago__h2_red">Заявка не отправлена</h2>
                        <?php endif; ?>
                        <?php unset($_SESSION['is_send_post']); ?>

                    <?php else: ?>
                        <form class="golamago-page-partners__form">
                            <div class="golamago-page-partners__form-row">
                                <input class="golamago-page-partners__input" type="text" name="name" placeholder="Имя" value="" required="required" autofocus />
                            </div>
                            <div class="golamago-page-partners__form-row">
                                <input class="golamago-page-partners__input" type="text" name="surname" placeholder="Фамилия" value="" required="required" />
                            </div>
                            <div class="golamago-page-partners__form-row">
                                <input class="golamago-page-partners__input" type="text" name="organization" placeholder="Название организации" value="" required="required" />
                            </div>
                            <div class="golamago-page-partners__form-row">
                                <input class="golamago-page-partners__input" type="text" name="tel" placeholder="Номер телефона" value="" required="required" />
                            </div>
                            <div class="golamago-page-partners__err">
                                Заполните все поля перед отправкой заявки
                            </div>
                            <div class="golamago-page-partners__form-row">
                                <input type="submit" value="Отправить заявку" />
                            </div>
                            <input type="hidden" name="key" value="<?php echo $_SESSION['secret'] ?>" />
                        </form>
                    <?php endif; ?>
                </div>
            </div>
        </div>

        <?php require_once('module/footer.php'); ?>
    </main>

<?php require_once('footer.php'); ?>