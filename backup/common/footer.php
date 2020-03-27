    <?php if (isset($footer_type) && $footer_type == FOOTER_MENU) : ?>
    <div class="footer-menu">
        <a id="menu_home" href="top_page.php" class="menu-item">
            <img class="normal" src="images/ico_menu_home.svg" alt="">
            <img class="active" src="images/ico_menu_home_active.svg" alt="">
            <p>ホーム</p>
        </a>
        <a id="menu_search" href="product_list_category_list_1.php" class="menu-item">
            <img class="normal" src="images/ico_menu_search.svg" alt="">
            <img class="active" src="images/ico_menu_search_active.svg" alt="">
            <p>さがす</p>
        </a>
        <a id="menu_exhibit" href="product_registration.php" class="menu-item">
            <img class="normal" src="images/ico_menu_exhibit.svg" alt="">
            <img class="active" src="images/ico_menu_exhibit_active.svg" alt="">
            <p>出品</p>
        </a>
        <a id="menu_notice" href="information_screen.php" class="menu-item">
            <img class="normal" src="images/ico_menu_notice.svg" alt="">
            <img class="active" src="images/ico_menu_notice_active.svg" alt="">
            <p>お知らせ</p>
        </a>
        <a id="menu_mypage" href="chef_mp_login.php" class="menu-item">
            <img class="normal" src="images/ico_menu_mypage.svg" alt="">
            <img class="active" src="images/ico_menu_mypage_active.svg" alt="">
            <p>マイページ</p>
        </a>
    </div> <!-- .footer -->
    <?php endif; ?>

    <script src="dist/js/jquery.min.js"></script>
    <script src="dist/js/bootstrap.min.js"></script>
    <script src="dist/js/swiper.min.js"></script>
    <?php addJS($js); ?>
    <script src="js/main.js"></script>
</body>

</html>
