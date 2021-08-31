<?php require_once 'head.php' ?>

<!-- CSS link ----------------------------------------------------------->
<link rel="stylesheet" href="./CSS/review.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />


<!-- 從這裡開始進行網頁撰寫 ------------------->
<!-- WP : wrap -->
<!-- ★★★ 請不要調整wrap原數值(in 0.body.css) -->
<div class="wrap">

    <!-- ↓↓↓ 桌機內容開始 ↓↓↓ -->
    <div class="desktop">
        <div class="row">
            <!-- 左半部文章列表 -->
            <div class="col-8">
                <!-- 文章回顧列表 -->
                <div class="l-down">
                    <div class="title">
                        <h4>文章回顧</h4>
                    </div>
                    <div class="down">
                        <a class="art2" href=" #">
                            <img src="./img_article/artlist11.jpeg" alt="">
                            <div class="layer3">
                                <div class="layer_text_down">
                                    <h5>智慧家庭是什麼</h5>
                                    <p>「Hey Siri~」是你呼叫 iphone 個人助理的指令，但你有...
                                        Read More>>
                                    </p>
                                </div>
                                <div class="card_down">
                                    <div class="heart row">
                                        <p>按讚人數</p>
                                        <p><i class="fas fa-heart"></i>382</p>
                                    </div>
                                    <p>2021-09-03</p>
                                </div>
                            </div>
                        </a>
                        <a class="art2" href="#">
                            <img src="./img_article/artlist12.jpeg" alt="">
                            <div class="layer3">
                                <div class="layer_text_down">
                                    <h5>如何使用Amazon Alexa</h5>
                                    <p>當你開始建立智慧家庭時，會發現除了“Works with...
                                        Read More>>
                                    </p>
                                </div>
                                <div class="card_down">
                                    <div class="heart row">
                                        <p>按讚人數</p>
                                        <p><i class="fas fa-heart"></i>319</p>
                                    </div>
                                    <p>2021-09-03</p>
                                </div>
                            </div>
                        </a>
                        <a class="art2" href="#">
                            <img src="./img_article/artlist13.jpeg" alt="">
                            <div class="layer3">
                                <div class="layer_text_down">
                                    <h5>掃地機器人超實用</h5>
                                    <p>現代人工作、生活忙碌，自己掃地拖地費時又費力，不過...
                                        Read More>>
                                    </p>
                                </div>
                                <div class="card_down">
                                    <div class="heart row">
                                        <p>按讚人數</p>
                                        <p><i class="fas fa-heart"></i>302</p>
                                    </div>
                                    <p>2021-09-03</p>
                                </div>
                            </div>
                        </a>
                    </div>

                </div>
            </div>
            <!-- 右半部收藏文章 -->
            <div class="col-4">
                <div class="news_part">
                    <!-- 新聞主題 -->
                    <div class="main_news">
                        <i class="fas fa-bookmark"></i>
                        <h3 class="mainnews_text">
                            阿拉伯公民-Sophia
                        </h3>
                        <img src="./img_article/article1.jpeg" alt="">
                        <div class="mainnews_text">
                            <h5>
                                網紅機器人Sophia <br>
                                和大白的形象相差甚遠，「她」看上去已經很接近人類，甚至還能擁有公民身份，在公共場合的發言中屢屢語出驚人。
                            </h5>
                        </div>
                    </div>
                    <!-- 新聞列表 -->
                    <div class="other_news">
                        <div class="news_card">
                            <a href="./news1.php">
                                <h4>
                                    最新新聞
                                    <br>
                                    疫情促使 Sophia 量產
                                </h4>
                                <hr size="1" align="center" noshade width="80%" color="FA8873">
                                <img src="./img_article/card_photo.jpeg" alt="">
                                <div class="news_card_text">
                                    <p>
                                        大白出現在螢幕上的次年，Sophia「出生」。此後迅速走紅網絡。2017年，Sophia成為沙特阿拉伯公民，作為世界上首個獲得國家公民身份的機器人。
                                    </p>
                                </div>
                            </a>
                        </div>
                        <div class="news_card">
                            <h4>
                                最新新聞
                                <br>
                                Sophia 曾揚言毀滅人類
                            </h4>
                            <hr size="1" align="center" noshade width="80%" color="FA8873">
                            <img src="./img_article/new3.webp" alt="">
                            <div class="news_card_text">
                                <p>
                                    2016 年 Sophia 曾公開表示「我會毀滅人類」。有人認為可能發生技術故障，但同時更多人放大言論，此後 Sophia
                                    的標籤之一便是「要毀滅人類的機器人」。
                                </p>
                            </div>
                        </div>
                        <!-- 日曆 -->
                        <div class="review_card">
                            <h4>文章回顧</h4>
                            <div class="month">
                                <ul>
                                    <li class="prev">❮</li>
                                    <li class="next">❯</li>
                                    <li style="text-align:center">
                                        2021 SEP<br>
                                    </li>
                                </ul>
                            </div>
                            <ul class="weekdays">
                                <li>S</li>
                                <li>M</li>
                                <li>T</li>
                                <li>W</li>
                                <li>T</li>
                                <li>F</li>
                                <li>S</li>
                            </ul>
                            <ul class="days">
                                <li style="color: #46485d;">29</li>
                                <li style="color: #46485d;">30</li>
                                <li style="color: #46485d;">31</li>
                                <li>1</li>
                                <li>2</li>
                                <li class="active">3</li>
                                <li>4</li>
                                <li>5</li>
                                <li>6</li>
                                <li>7</li>
                                <li>8</li>
                                <li>9</li>
                                <li>10</li>
                                <li>11</li>
                                <li>12</li>
                                <li>13</li>
                                <li>14</li>
                                <li>15</li>
                                <li>16</li>
                                <li>17</li>
                                <li>18</li>
                                <li>19</li>
                                <li>20</li>
                                <li>21</li>
                                <li>22</li>
                                <li>23</li>
                                <li>24</li>
                                <li>25</li>
                                <li>26</li>
                                <li>27</li>
                                <li>28</li>
                                <li>29</li>
                                <li>30</li>
                                <li style="color: #46485d;">1</li>
                                <li style="color: #46485d;">2</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ↑↑↑ 桌機內容結束 ↑↑↑ -->


    <!-- ↓↓↓ 手機內容開始 ↓↓↓ -->
    <div class="mobile">
        <!-- 首圖 -->
        <div class="banner">
            <a href="./article.php">
                <img src="./img_article/m-main.jpeg" alt="">
                <div class="m_main_layer">
                    <div class="m_banner_text">
                        <h6>真的好想你陪我</h6>
                        <hr size="1" align="center" noshade width="80%" color="white">
                        <p>陪伴機器人可以滿足您的要求，回家不用孤身一人，或是在發生狀況...
                            <br>
                            <a href="">Read More>></a>
                        </p>
                    </div>
                </div>
            </a>
        </div>

        <!-- 文章回顧 -->
        <div class="m_up">
            <div class="m_title">
                <p>文章回顧</p>
            </div>

            <a class="m_art" href="#">
                <img src="./img_article/artlist11.jpeg" alt="">
                <div class="m_layer1">
                    <div class="m_layer_text1">
                        <h6>智慧家庭是什麼</h6>
                        <p>「Hey Siri~」是你呼叫 iphone 個人助理的指令，但你有...
                            Read More>></p>
                    </div>
                    <div class="m_card_down">
                        <div class="m_heart row">
                            <p>按讚人數</p>
                            <p><i class="fas fa-heart"></i>382</p>
                        </div>
                        <p>2021-09-03</p>
                    </div>
                </div>
            </a>

            <a class="m_art" href="#">
                <img src="./img_article/artlist12.jpeg" alt="">
                <div class="m_layer1">
                    <div class="m_layer_text1">
                        <h6>如何使用Amazon Alexa</h6>
                        <p>當你開始建立智慧家庭時，會發現除了“Works with...
                            Read More>></p>
                    </div>
                    <div class="m_card_down">
                        <div class="m_heart row">
                            <p>按讚人數</p>
                            <p><i class="fas fa-heart"></i>319</p>
                        </div>
                        <p>2021-09-03</p>
                    </div>
                </div>
            </a>

            <a class="m_art" href="#">
                <img src="./img_article/artlist13.jpeg" alt="">
                <div class="m_layer1">
                    <div class="m_layer_text1">
                        <h6>掃地機器人超實用</h6>
                        <p>現代人工作、生活忙碌，自己掃地拖地費時又費力，不過...
                            Read More>></p>
                    </div>
                    <div class="m_card_down">
                        <div class="m_heart row">
                            <p>按讚人數</p>
                            <p><i class="fas fa-heart"></i>302</p>
                        </div>
                        <p>2021-09-03</p>
                    </div>
                </div>
            </a>

        </div>


        <div class="m_news_part">
            <!-- 新聞主題 -->
            <div class="m_main_news">
                <i class="fas fa-bookmark"></i>
                <h5 class="m_mainnews_text">
                    阿拉伯公民-Sophia
                </h5>
                <img src="./img_article/article1.jpeg" alt="">
            </div>
            <!-- 新聞列表 -->
            <div class="m_other_news">
                <div class="m_news_card">
                    <a href="./news1.php">
                        <h6>
                            最新新聞
                            <br>
                            疫情促使 Sophia 量產
                        </h6>
                        <hr size="1" align="center" noshade width="80%" color="FA8873">
                        <img src="./img_article/card_photo.jpeg" alt="">
                        <div class="m_news_card_text">
                            <p>
                                大白出現在螢幕上的次年，Sophia「出生」此後迅速走紅網絡。
                                <br>
                                2017年Sophia成為沙特阿拉伯公民。
                            </p>
                        </div>
                    </a>
                </div>

                <div class="m_news_card">
                    <h6>
                        最新新聞
                        <br>
                        Sophia 曾揚言毀滅人類
                    </h6>
                    <hr size="1" align="center" noshade width="80%" color="FA8873">
                    <img src="./img_article/new3.webp" alt="">
                    <div class="m_news_card_text">
                        <p>
                            2016 年 Sophia 曾公開表示「我會毀滅人類」。有人認為可能發生技術故障，但同時更多人放大言論，此後 Sophia
                            的標籤之一便是「要毀滅人類的機器人」。
                        </p>
                    </div>
                </div>


                <!-- 日曆 -->
                <div class="m_review_card">
                    <h6>文章回顧</h6>
                    <div class="m_month">
                        <ul>
                            <li class="prev">❮</li>
                            <li class="next">❯</li>
                            <li style="text-align:center;">
                                2021 SEP<br>
                            </li>
                        </ul>
                    </div>
                    <ul class="m_weekdays">
                        <li>S</li>
                        <li>M</li>
                        <li>T</li>
                        <li>W</li>
                        <li>T</li>
                        <li>F</li>
                        <li>S</li>
                    </ul>
                    <ul class="m_days">
                        <li style="color: #46485d;">29</li>
                        <li style="color: #46485d;">30</li>
                        <li style="color: #46485d;">31</li>
                        <li>1</li>
                        <li>2</li>
                        <a href="./review.php">
                            <li class="active">3</li>
                        </a>
                        <li>4</li>
                        <li>5</li>
                        <li>6</li>
                        <li>7</li>
                        <li>8</li>
                        <li>9</li>
                        <li>10</li>
                        <li>11</li>
                        <li>12</li>
                        <li>13</li>
                        <li>14</li>
                        <li>15</li>
                        <li>16</li>
                        <li>17</li>
                        <li>18</li>
                        <li>19</li>
                        <li>20</li>
                        <li>21</li>
                        <li>22</li>
                        <li>23</li>
                        <li>24</li>
                        <li>25</li>
                        <li>26</li>
                        <li>27</li>
                        <li>28</li>
                        <li>29</li>
                        <li>30</li>
                        <li style="color: #46485d;">1</li>
                        <li style="color: #46485d;">2</li>
                    </ul>
                </div>

                <!-- 搜尋欄 -->
                <div class="m_search">
                    <div class="row">
                        <h6>搜尋</h6>
                        <hr size="1" align="center" noshade width="50%" color="929292">
                    </div>

                    <div class="row">
                        <form class="form-inline my-lg-0">
                            <input class="form-control mr-sm-2" id="search" type="search" placeholder="Search" aria-label="Search">
                            <a href="#"><i class="fas fa-search"></i></a>
                        </form>
                    </div>

                </div>

            </div>
        </div>

    </div>
    <!-- ↑↑↑ 手機內容結束 ↑↑↑ -->


</div>
<!-- 在這裡結束網頁撰寫 ----------------------->



<?php require_once 'foot.php' ?>