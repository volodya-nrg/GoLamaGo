    <script src="vendor/jquery/jquery-3.3.1.min.js"></script>

    <?php if (PAGE == 'index' || PAGE == ''): ?>
        <script src="vendor/fullPage.js-master/dist/jquery.fullpage.min.js"></script>
        <script src="vendor/animatecss/animate.js"></script>
        <script src="vendor/slick-master/slick/slick.js"></script>

    <?php elseif (PAGE == 'pressa'): ?>
        <script src="vendor/masonry/masonry.pkgd.min.js"></script>

    <?php elseif (PAGE == 'about'): ?>
        <script src="vendor/jquery-scrollspy-master/scrollspy.js"></script>

    <?php endif; ?>

    <script src="js/main.js"></script>

</body>
</html>