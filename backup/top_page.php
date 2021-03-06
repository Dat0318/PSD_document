<?php
require_once './inc/define.php';

$title = '01トップページ';
$header_type = HEADER_TOP_PAGE;
$footer_type = FOOTER_MENU;

include_once './common/header.php';
?>

<div class="main main-top">
    <div class="sologan">
        <img src="images/ico_slogan.svg" alt="slogan image">
    </div>
    <div class="top-tab">
        <a href="product_list.php" class="tab-item active">新着商品</a>
        <a href="product_list.php" class="tab-item">魚</a>
        <a href="product_list.php" class="tab-item">野菜・果物</a>
        <a href="product_list.php" class="tab-item">肉</a>
    </div>
    <div class="section">
        <ul class="product-list">
            <li class="item">
                <a href="product_detail.php">
                    <div class="thumb">
                        <img src="images/img_product_1.png" alt="img_product">
                    </div>
                    <div class="info">
                        <p class="desc">商品名が入ります商品名が入りま…</p>
                        <h3 class="price">¥0,000～</h3>
                    </div>
                </a>
            </li>
            <li class="item">
                <a href="product_detail.php">
                    <div class="thumb">
                        <img src="images/img_product_2.png" alt="img_product">
                    </div>
                    <div class="info">
                        <p class="desc">商品名が入ります商品名が入りま…</p>
                        <h3 class="price">¥0,000～</h3>
                    </div>
                </a>
            </li>
            <li class="item">
                <a href="product_detail.php">
                    <div class="thumb">
                        <img src="images/img_product_3.png" alt="img_product">
                    </div>
                    <div class="info">
                        <p class="desc">商品名が入ります商品名が入りま…</p>
                        <h3 class="price">¥0,000～</h3>
                    </div>
                </a>
            </li>
            <li class="item">
                <a href="product_detail.php">
                    <div class="thumb">
                        <img src="images/img_product_4.png" alt="img_product">
                    </div>
                    <div class="info">
                        <p class="desc">商品名が入ります商品名が入りま…</p>
                        <h3 class="price">¥0,000～</h3>
                    </div>
                </a>
            </li>
            <li class="item">
                <a href="product_detail.php">
                    <div class="thumb">
                        <img src="images/img_product_5.png" alt="img_product">
                    </div>
                    <div class="info">
                        <p class="desc">商品名が入ります商品名が入りま…</p>
                        <h3 class="price">¥0,000～</h3>
                    </div>
                </a>
            </li>
            <li class="item">
                <a href="product_detail.php">
                    <div class="thumb">
                        <img src="images/img_product_6.png" alt="img_product">
                    </div>
                    <div class="info">
                        <p class="desc">商品名が入ります商品名が入りま…</p>
                        <h3 class="price">¥0,000～</h3>
                    </div>
                </a>
            </li>
            <li class="item">
                <a href="product_detail.php">
                    <div class="thumb">
                        <img src="images/img_product_7.png" alt="img_product">
                    </div>
                    <div class="info">
                        <p class="desc">商品名が入ります商品名が入りま…</p>
                        <h3 class="price">¥0,000～</h3>
                    </div>
                </a>
            </li>
            <li class="item">
                <a href="product_detail.php">
                    <div class="thumb">
                        <img src="images/img_product_8.png" alt="img_product">
                    </div>
                    <div class="info">
                        <p class="desc">商品名が入ります商品名が入りま…</p>
                        <h3 class="price">¥0,000～</h3>
                    </div>
                </a>
            </li>
            <li class="item">
                <a href="product_detail.php">
                    <div class="thumb">
                        <img src="images/img_product_9.png" alt="img_product">
                    </div>
                    <div class="info">
                        <p class="desc">商品名が入ります商品名が入りま…</p>
                        <h3 class="price">¥0,000～</h3>
                    </div>
                </a>
            </li>
        </ul> <!-- .product-list -->
        <div class="group-button">
            <a href="product_list.php" class="btn-more">
                <span>商品をもっとみる</span>
                <img src="images/ico_right.svg" alt="ico_right">
            </a>
        </div><!-- .group-button -->
    </div> <!-- .section -->
    <div class="section">
        <h5 class="sc-title">シェフからのリクエスト</h5>
        <ul class="custom-list">
            <li class="item">
                <a href="#">
                    <div class="title">
                        <div class="date">2019.09.06</div>
                        <div class="mark cat-veg">ジャンル</div>
                    </div>
                    <p class="content">商品名が入ります商品名が入ります商品名が入ります商品名が入ります…</p>
                    <p class="name">投稿者名</p>
                </a>
            </li>
            <li class="item">
                <a href="#">
                    <div class="title">
                        <div class="date">2019.09.06</div>
                        <div class="mark cat-meat">肉</div>
                    </div>
                    <p class="content">さくらポーク</p>
                    <p class="name">中村屋</p>
                </a>
            </li>
            <li class="item">
                <a href="#">
                    <div class="title">
                        <div class="date">2019.09.06</div>
                        <div class="mark cat-veg">野菜･果物</div>
                    </div>
                    <p class="content">ブロッコリー</p>
                    <p class="name">投稿者名</p>
                </a>
            </li>
            <li class="item">
                <a href="#">
                    <div class="title">
                        <div class="date">2019.09.06</div>
                        <div class="mark cat-fish">魚</div>
                    </div>
                    <p class="content">マグロ</p>
                    <p class="name">投稿者名</p>
                </a>
            </li>
            <li class="item">
                <a href="#">
                    <div class="title">
                        <div class="date">2019.09.06</div>
                        <div class="mark cat-meat">肉</div>
                    </div>
                    <p class="content">松阪牛</p>
                    <p class="name">松井商店</p>
                </a>
            </li>
        </ul><!-- .custom-list -->
        <div class="group-button">
            <button class="btn-more">
                <span>リクエスト一覧をみる</span>
                <img src="images/ico_right.svg" alt="ico_right">
            </button>
            <button class="btn-light">
                <img src="images/ico_light.svg" alt="ico_light">
                <span>リクエストする</span>
            </button>
        </div><!-- .group-button -->
    </div><!-- .section -->
    <div class="section">
        <h2 class="sc-title">出品者から探す</h2>
        <ul class="category-list">
            <li class="item item-fish">
                <a href="product_list_category_list_3.php">
                    <div class="image">
                        <img src="images/ico_cat_fish.svg" alt="ico_fish">
                    </div>
                    <p class="title">漁師</p>
                </a>
            </li>
            <li class="item item-vegetable">
                <a href="product_list_category_list_3.php">
                    <div class="image">
                        <img src="images/ico_cat_veg.svg" alt="ico_veg">
                    </div>
                    <p class="title">農家</p>
                </a>
            </li>
            <li class="item item-meat">
                <a href="product_list_category_list_3.php">
                    <div class="image">
                        <img src="images/ico_cat_meat.svg" alt="ico_meat">
                    </div>
                    <p class="title">畜産農家</p>
                </a>
            </li>
        </ul>
    </div><!-- .section -->
    <div class="section">
        <h5 class="sc-title">松井商店からのお知らせ</h5>
        <ul class="custom-list">
            <li class="item">
                <a href="information_details.php">
                    <div class="title">
                        <div class="date">2019.09.06</div>
                        <div class="mark gener">ジャンル</div>
                    </div>
                        <p class="content">タイトルタイトルタイトル</p>
                </a>
            </li>
            <li class="item">
                <a href="information_details.php">
                    <div class="title">
                        <div class="date">2019.09.06</div>
                        <div class="mark notice">お知らせ</div>
                    </div>
                    <p class="content">新機能【検索】機能について</p>
                </a>
            </li>
            <li class="item">
                <a href="information_details.php">
                    <div class="title">
                        <div class="date">2019.09.06</div>
                        <div class="mark notice">お知らせ</div>
                    </div>
                    <p class="content">メンテナンスの日程</p>
                </a>
            </li>
            <li class="item">
                <a href="information_details.php">
                    <div class="title">
                        <div class="date">2019.09.06</div>
                        <div class="mark notice">お知らせ</div>
                    </div>
                    <p class="content">【重要】料金改定について</p>
                </a>
            </li>
            <li class="item">
                <a href="information_details.php">
                    <div class="title">
                        <div class="date">2019.09.06</div>
                        <div class="mark notice">お知らせ</div>
                    </div>
                    <p class="content">発送方法について</p>
                </a>
            </li>
        </ul><!-- .custom-list -->
        <div class="group-button">
            <a href="information_screen.php" class="btn-more">
                <span>お知らせ一覧をみる</span>
                <img src="images/ico_right.svg" alt="ico_right">
            </a>
        </div><!-- .group-button -->
    </div><!-- .section -->
    <div class="main-footer">
        <a href="contact_form.php" class="btn-send">
            <img src="images/ico_send.svg" alt="icon_send">
            <span>松井商店へのお問合せはこちら</span>
        </a>
        <?php include_once './common/footer_link.php'?>
        <p class="copy-right">©2019 Matsuishouten</p>
    </div>
</div><!-- .main -->

<?php include_once './common/footer.php'?>

<script>
($)(function () {
    $('.btn-close-ad').click(function () {
        $('.js-header').removeClass('header-show-ads');
    });

    $('#menu_home').addClass('active');
});
</script>
