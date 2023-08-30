<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    {{-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" /> --}}
    <link rel="stylesheet" href="{{ asset('https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css') }}">
    <link rel="stylesheet" href="./css/microsoft-third 2 copy.css">
</head>

<body>
    <div class="all">
        <nav>
            <div id="nav-container">
                <div id="nav-logo">
                <a 
                    <img src="{{ asset('img/nav/logo.png') }}" alt="">
                </a>
                </div>

                <div id="nav-pc-menu" class="nav-text">
                    <li class="nav-hover mc365">Microsoft 365</li>
                    <li class="nav-hover">Teams</li>
                    <li class="nav-hover">Windows</li>
                    <li class="nav-hover">Surface</li>
                    <li class="nav-hover">Xbox</li>
                    <li class="nav-hover support">支援</li>
                </div>

                <div id="nav-mobile-menu">
                    <input type="checkbox" id="mobile-menu" hidden>
                    <label for="mobile-menu" class="mobile-menu-img"></label>
                    <div id="mobile-menu-list" hidden>
                        <div class="mobile-text">Microsoft 365</div>
                        <div class="mobile-text">Teams</div>
                        <div class="mobile-text">Windows</div>
                        <div class="mobile-text">Surface</div>
                        <div class="mobile-text">Xbox</div>
                        <div class="mobile-text">支援</div>

                        <div class="fun-menu-choice">
                            <input type="checkbox" id="mobile-menu1" hidden>
                            <label for="mobile-menu1">
                                <div class="mobile-text">軟體<img src="./img/arrows/down.png" alt="" class="mobile-arrow">
                                </div>
                            </label>
                            <div id="sub-menu1" hidden>
                                <li class="mobile-text mobile-list-padding">Windows 應用程式</li>
                                <li class="mobile-text mobile-list-padding">AI</li>
                                <li class="mobile-text mobile-list-padding">OneDrive</li>
                                <li class="mobile-text mobile-list-padding">Outlook</li>
                                <li class="mobile-text mobile-list-padding">Skype</li>
                                <li class="mobile-text mobile-list-padding">OneNote</li>
                                <li class="mobile-text mobile-list-padding">Microsoft Teams</li>
                            </div>

                            <input type="checkbox" id="mobile-menu2" hidden>
                            <label for="mobile-menu2">
                                <div class="mobile-text">個人電腦和設備<img src="./img/arrows/down.png" alt=""
                                        class="mobile-arrow"></div>
                            </label>
                            <div id="sub-menu2" hidden>
                                <li class="mobile-text mobile-list-padding">選購 Xbox</li>
                                <li class="mobile-text mobile-list-padding">電腦配件</li>
                            </div>

                            <input type="checkbox" id="mobile-menu3" hidden>
                            <label for="mobile-menu3">
                                <div class="mobile-text">娛樂<img src="./img/arrows/down.png" alt="" class="mobile-arrow">
                                </div>
                            </label>
                            <div id="sub-menu3" hidden>
                                <li class="mobile-text mobile-list-padding">Xbox Games Pass Ultimate</li>
                                <li class="mobile-text mobile-list-padding">Xbox Live Gold</li>
                                <li class="mobile-text mobile-list-padding">Xbox 與遊戲</li>
                                <li class="mobile-text mobile-list-padding">電腦遊戲</li>
                                <li class="mobile-text mobile-list-padding">Windows 遊戲</li>
                            </div>

                            <input type="checkbox" id="mobile-menu4" hidden>
                            <label for="mobile-menu4">
                                <div class="mobile-text">商務應用<img src="./img/arrows/down.png" alt=""
                                        class="mobile-arrow"></div>
                            </label>
                            <div id="sub-menu4" hidden>
                                <li class="mobile-text mobile-list-padding">Microsoft Cloud</li>
                                <li class="mobile-text mobile-list-padding">Microsoft 安全性</li>
                                <li class="mobile-text mobile-list-padding">Azure</li>
                                <li class="mobile-text mobile-list-padding">Dynamics 365</li>
                                <li class="mobile-text mobile-list-padding">商務用Microsoft 365</li>
                                <li class="mobile-text mobile-list-padding">Microsoft 產業</li>
                                <li class="mobile-text mobile-list-padding">Microsoft Power Platform</li>
                                <li class="mobile-text mobile-list-padding">Windows 365</li>
                            </div>

                            <input type="checkbox" id="mobile-menu5" hidden>
                            <label for="mobile-menu5">
                                <div class="mobile-text">開發人員與IT<img src="./img/arrows/down.png" alt=""
                                        class="mobile-arrow"></div>
                            </label>
                            <div id="sub-menu5" hidden>
                                <li class="mobile-text mobile-list-padding">開發人員中心</li>
                                <li class="mobile-text mobile-list-padding">文件</li>
                                <li class="mobile-text mobile-list-padding">Microsoft Learn</li>
                                <li class="mobile-text mobile-list-padding">Microsoft 技術社群</li>
                                <li class="mobile-text mobile-list-padding">Azure Marketplace</li>
                                <li class="mobile-text mobile-list-padding">AppSource</li>
                                <li class="mobile-text mobile-list-padding">Visual Studio</li>
                            </div>

                            <input type="checkbox" id="mobile-menu6" hidden>
                            <label for="mobile-menu6">
                                <div class="mobile-text">其他<img src="./img/arrows/down.png" alt="" class="mobile-arrow">
                                </div>
                            </label>
                            <div id="sub-menu6" hidden>
                                <li class="mobile-text mobile-list-padding">Microsoft Reward</li>
                                <li class="mobile-text mobile-list-padding">免費下載與安全性</li>
                                <li class="mobile-text mobile-list-padding">教育</li>
                                <li class="mobile-text mobile-list-padding">禮品卡</li>
                                <li class="mobile-text mobile-list-padding">Licensing</li>
                            </div>

                            <div class="list-last">檢視網站地圖</div>
                        </div>
                    </div>
                </div>

                <div id="nav-fun-menu">
                    <input type="checkbox" id="fun-menu" hidden>
                    <label for="fun-menu">
                        <div class="nav-text nav-hover fun-menu-text">所有Microsoft
                            <img src="./img/arrows/down.png" id="fun-menu-img" alt="">
                        </div>
                    </label>
                    <div id="fun-menu-list">
                        <div class="fun-menu-choice">
                            <div class="list-title fun-padding">軟體</div>
                            <div class="fun-padding">Windows 應用程式</div>
                            <div class="fun-padding">AI</div>
                            <div class="fun-padding">OneDrive</div>
                            <div class="fun-padding">Outlook</div>
                            <div class="fun-padding">Skype</div>
                            <div class="fun-padding">OneNote</div>
                            <div class="fun-padding">Microsoft Teams</div>
                        </div>
                        <div class="fun-menu-choice">
                            <div class="list-title fun-padding">個人電腦和設備</div>
                            <div class="fun-padding">選購 Xbox</div>
                            <div class="fun-padding">電腦配件</div>
                        </div>
                        <div class="fun-menu-choice">
                            <div class="list-title fun-padding">娛樂</div>
                            <div class="fun-padding">Xbox Games Pass Ultimate</div>
                            <div class="fun-padding">Xbox Live Gold</div>
                            <div class="fun-padding">Xbox 與遊戲</div>
                            <div class="fun-padding">電腦遊戲</div>
                            <div class="fun-padding">Windows 遊戲</div>
                        </div>
                        <div class="fun-menu-choice">
                            <div class="list-title fun-padding">商務應用</div>
                            <div class="fun-padding">Microsoft Cloud</div>
                            <div class="fun-padding">Microsoft 安全性</div>
                            <div class="fun-padding">Azure</div>
                            <div class="fun-padding">Dynamics 365</div>
                            <div class="fun-padding">商務用Microsoft 365</div>
                            <div class="fun-padding">Microsoft 產業</div>
                            <div class="fun-padding">Microsoft Power Platform</div>
                            <div class="fun-padding">Windows 365</div>
                        </div>
                        <div class="fun-menu-choice">
                            <div class="list-title fun-padding">開發人員與IT</div>
                            <div class="fun-padding">開發人員中心</div>
                            <div class="fun-padding">文件</div>
                            <div class="fun-padding">Microsoft Learn</div>
                            <div class="fun-padding">Microsoft 技術社群</div>
                            <div class="fun-padding">Azure Marketplace</div>
                            <div class="fun-padding">AppSource</div>
                            <div class="fun-padding">Visual Studio</div>
                        </div>
                        <div class="fun-menu-choice">
                            <div class="list-title fun-padding">其他</div>
                            <div class="fun-padding">Microsoft Reward</div>
                            <div class="fun-padding">免費下載與安全性</div>
                            <div class="fun-padding">教育</div>
                            <div class="fun-padding">禮品卡</div>
                            <div class="fun-padding">Licensing</div>
                        </div>
                        <div class="map">檢視網站地圖</div>
                    </div>
                </div>

                <div id="nav-search">
                    <span class="nav-text nav-hover">搜尋</span>
                    <img src="./img/nav/search.png" class="nav-img" alt="">
                </div>

                <div id="nav-shopping">
                    <span class="nav-text nav-hover">購物車</span>
                    <img src="./img/nav/shopping-cart.png" class="nav-img" alt="">
                </div>

                <div id="nav-login">
                    <span class="nav-text nav-hover">登入</span>
                    <img src="./img/nav/user.png" class="nav-img" alt="">
                </div>
            </div>
        </nav>

        <header>
            <section>
                <!-- Swiper -->
                <div class="swiper mySwiper">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <picture>
                                <source srcset="./img/swiper/1920swiper1.webp" media="(min-width: 1400px)">
                                <source srcset="./img/swiper/1399swiper1.webp" media="(min-width: 1084px)">
                                <source srcset="./img/swiper/1083swiper1.webp" media="(min-width: 860px)">
                                <source srcset="img/swiper/859swiper1.webp" media="(min-width: 540px)">
                                <img src="./img/swiper/859swiper1.webp">
                            </picture>

                            <div class="main-text">
                                <h1 class="banner-title">Surface Pro 9</h1>
                                <div class="banner-paragraph">平板電腦的彈性和筆記型電腦的效能-全都在一台攜帶超方便的裝置</div>
                                <br>
                                <br>
                                <div><a href="" class="banner-link"><span>深入了解</span></a></div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <picture>
                                <source srcset="img/swiper/1920swiper2.webp" media="(min-width: 1400px)">
                                <source srcset="img/swiper/1399swiper2.webp" media="(min-width: 1084px)">
                                <source srcset="img/swiper/1083swiper2.webp" media="(min-width: 860px)">
                                <source srcset="img/swiper/859swiper2.webp" media="(min-width: 540px)">
                                <img src="./img/swiper/859swiper2.webp">
                            </picture>

                            <div class="main-text2">
                                <h1 class="banner-title">Microsoft 365</h1>
                                <div class="banner-paragraph">使用 Microsoft 365應用程式實現創意想法、提高線上和離線安全，並專注於最重要的事。</div>
                                <br>
                                <br>
                                <div><a href="" class="banner-link"><span>適合1人使用</span></a><a href=""
                                        class="banner-link"><span>最多可供6人使用</span></a></div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-pagination"></div>
                </div>
            </section>

            <section class="main-choice">
                <div class="one-choice">
                    <a href="" class="main-choice-text">
                        <img src="./img/main-choice/Microsoft 365.webp" alt="">
                        <div>選擇您的 Micrrosoft 365</div>
                    </a>
                </div>

                <div class="one-choice">
                    <a href="" class="main-choice-text">
                        <img src="./img/main-choice/tablet.webp" alt="">
                        <div>選購 Surface裝置</div>
                    </a>
                </div>

                <div class="one-choice">
                    <a href="" class="main-choice-text">
                        <img src="./img/main-choice/Microsoft 365.webp" alt="">
                        <div>取得 Windows 11</div>
                    </a>
                </div>
            </section>

            <section class="four-card">
                <div class="one-card">

                    <!-- Xbox -->
                    <a class="normal-text" href="">
                        <img src="./img/four-card/297xbox.webp" alt="">
                        <div class="title"></div>
                        <div class="content"></div>
                        <p>
                            <h3>Xbox Series X</h3>
                        </p>
                        <p>有史以來最快、最強大的Xbox。</p>
                        <p class="one-card-link">選購 Xbox Series X</s></p>
                    </a>
                </div>

                <div class="one-card">

                    <!-- bing -->
                    <a class="normal-text" href="">
                        <img src="./img/four-card/297bing.webp">
                        <div class="title"></div>
                        <div class="content"></div>
                        <p>
                            <h3>隆重推出新版 Bing</h3>
                        </p>
                        <p>問真正的問題。聊天和創作。從您的AI網路副駕駛獲得更好的答案</p>
                        <p class="one-card-link">了解新版Bing ></p>
                    </a>
                </div>

                <div class="one-card">

                    <!-- Xbox Game Pass Ultimate -->
                    <a class="normal-text" href="">
                        <img src="./img/four-card/297gamepass.webp">
                        <div class="title"></div>
                        <div class="content"></div>
                        <p>
                            <h3>Xbox Game Pass Ultimate</h3>
                        </p>
                        <p>Xbox Live Gold 以及數百款高品質主機遊戲和電腦遊戲。與好友同樂，並探索下一個最愛遊戲。</p>
                        <p class="one-card-link">立即加入 ></p>
                    </a>
                </div>

                <div class="one-card">

                    <!-- Global Launch -->
                    <a class="normal-text" href="">
                        <img src="./img/four-card/297GlobalLaunch.jpg">
                        <div class="title"></div>
                        <div class="content"></div>
                        <p>
                            <h3>專為今天和明天的生活而設計</h3>
                        </p>
                        <p>新一代遊戲、您的目標、親朋好友。Windows 11 是為了讓您更貼近所喜愛的一切。</p>
                        <p class="one-card-link">查看您的電腦是否準備就緒 ></p>
                    </a>
                </div>
            </section>
        </header>

        <main>
            <section>
                <div class="edge">
                    <picture>
                        <source srcset="./img/swiper/1596edge.webp" media="(min-width: 1400px)">
                        <source srcset="./img/swiper/1260edge.webp" media="(min-width: 1084px)">
                        <source srcset="./img/swiper/1083edge.webp" media="(min-width: 860px)">
                        <source srcset="./img/swiper/859edge.webp" media="(min-width: 540px)">
                        <img src="./img/swiper/859edge.webp" alt="">
                    </picture>
                </div>
            </section>

            <section class="four-card">
                <div class="four-card2-title">
                    <h2>適用於商務</h2>
                </div>

                <div class="one-card">
                    <!-- Surface -->
                    <a class="normal-text" href="">
                        <img src="./img/four-card2/297surface.webp">
                        <div class="title"></div>
                        <div class="content"></div>
                        <p>
                            <h3>適用於商務的Surface</h3>
                        </p>
                        <p>無論從事哪種工作，都有一款有助於成功的Surface。</p>
                        <p class="one-card-link">立即選購 ></p>
                    </a>
                </div>

                <div class="one-card">
                    <!-- free microsoft -->
                    <a class="normal-text" href="">
                        <img src="./img/four-card2/297free365.webp">
                        <div class="title"></div>
                        <div class="content"></div>
                        <p>
                            <h3>免費試用 Microsoft 365</h3>
                        </p>
                        <p>透過一個月免費試用的 Microsoft 365商務標準版，跨裝置取得 Microsoft Teams、安全雲端儲存空間和進階應用程式。</p>
                        <p class="one-card-link">開始免費試用 ></p>
                    </a>
                </div>

                <div class="one-card">
                    <!-- microsoft365 -->
                    <a class="normal-text" href="">
                        <img src="./img/four-card2/297microsoft365.webp">
                        <div class="title"></div>
                        <div class="content"></div>
                        <p>
                            <h3>歡迎使用Windows 365 雲端電腦</h3>
                        </p>
                        <p>從 Microsoft 雲端安全的將您的 Windows 體驗串流到任何裝置。</p>
                        <p class="one-card-link">立即下載 ></p>
                    </a>
                </div>

                <div class="one-card">
                    <!-- Win11Laptop -->
                    <a class="normal-text" href="">
                        <img src="./img/four-card2/win11laptop.jpg">
                        <div class="title"></div>
                        <div class="content"></div>
                        <p>
                            <h3>商務用 Windows 11</h3>
                        </p>
                        <p>專為混合式辦公而設計。為員工帶來實用性。為IT帶來一致性。為所有人帶來安全性。</p>
                        <p class="one-card-link">深入了解 ></p>
                    </a>
                </div>
            </section>

            <section>
                <div id="social-media">
                    關注 Microsoft
                    <img src="./img/social-media-back-to-top/Facebook.webp" alt="">
                    <img src="./img/social-media-back-to-top/YouTube.webp" alt="">
                </div>
            </section>

            <!-- <section> -->
            <div id="back-to-top">
                <img src="./img/arrows/up.png" alt=""><a href="" class="top-text">回到頁首</a>
            </div>
            <!-- </section> -->
        </main>

        <footer>
            <div id="bottom">
                <div class="footer-menu">
                    <!-- (ul>li{ABCDE}*5)*6 -->
                    <ul>
                        <p>最新動向</p>
                        <li>Microsoft 365</li>
                        <li>Surface Go</li>
                        <li>Surface Book 2</li>
                        <li>Surface Pro</li>
                        <li>Windows 11 應用程式</li>
                    </ul>
                    <ul>
                        <p>Microsoft Store</p>
                        <li>帳戶設定檔</li>
                        <li>下載中心</li>
                        <li>Microsoft Store支援</li>
                        <li>退貨/退款</li>
                        <li>訂單追蹤</li>
                    </ul>
                    <ul>
                        <p>教育</p>
                        <li>Microsoft 教育</li>
                        <li>教育裝置</li>
                        <li>Microsoft Teams 教育版</li>
                        <li>Office 教育版</li>
                        <li>教育工作者訓練和發展</li>
                        <li>學生和家長優惠</li>
                        <li>Azure 學生版</li>
                    </ul>
                    <ul>
                        <p>商務</p>
                        <li>Microsoft Cloud</li>
                        <li>Microsoft 安全性</li>
                        <li>Azure</li>
                        <li>Dynamics 365</li>
                        <li>Microsoft Advertising</li>
                        <li>Microsoft 產業</li>
                        <li>Microsoft Teams</li>
                    </ul>
                    <ul>
                        <p>開發人員與IT</p>
                        <li>開發人員中心</li>
                        <li>文件</li>
                        <li>Microsoft Learn</li>
                        <li>Microsoft 技術社群</li>
                        <li>Azure Marketplace</li>
                        <li>AppSource</li>
                        <li>Microsoft Power Platform</li>
                        <li>Visual Studio</li>
                    </ul>
                    <ul>
                        <p>公司</p>
                        <li>人才招募</li>
                        <li>公司新聞</li>
                        <li>Microsoft 隱私檔</li>
                        <li>投資者</li>
                        <li>永續性</li>
                    </ul>
                </div>
                <div id="footer-nav">
                    <div id="left-nav">
                        <ul>
                            <li>
                                <div><img src="./img/footer-nav/global.png" class="footer-img" alt=""><a href=""
                                        class="footer-text">中文(台灣)</a></div>
                            </li>

                            <li>
                                <div><img src="./img/footer-nav/privacy.png" class="footer-img" alt=""><a href=""
                                        class="footer-text">您的隱私選擇</a></div>
                            </li>
                        </ul>
                    </div>
                    <div id="right-nav">
                        <ul>
                            <li><a href="" class="footer-text">聯絡 Microsoft</a></li>
                            <li><a href="" class="footer-text">隱私權</a></li>
                            <li><a href="" class="footer-text">使用規定</a></li>
                            <li><a href="" class="footer-text">商標</a></li>
                            <li><a href="" class="footer-text">有關我們的廣告訊息</a></li>
                            <li><a href="" class="footer-text"> © Microsoft 2023</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </footer>
        <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>

        <!-- Initialize Swiper -->
        <script>
            var swiper = new Swiper(".mySwiper", {
                // 自動撥放
                autoplay: true,
                navigation: {
                    nextEl: ".swiper-button-next",
                    prevEl: ".swiper-button-prev",
                },
                pagination: {
                    el: ".swiper-pagination",
                    clickable: true,
                    // 客製化的部分
                    renderBullet: function (index, className) {
                        console.log(index, className);
                        if (index == 0) {
                        return `
                            <span class="stop"></span>
                            <span class="play"></span>
                            <span class="${className}"></span>`;
                        } else {
                            return `<span class="${className}"></span>`;
                        }
                    },
                },
            });

            stopBtn = document.querySelector('.stop');
            playBtn = document.querySelector('.play');
            stopBtn. addEventListener('click', () => {
                // js控制播放
                swiper.autoplay.stop();
                stopBtn.style.display = 'none';
                playBtn.style.display = 'block';
            })
            playBtn. addEventListener('click', () => {
                // js控制播放
                swiper.autoplay.start();
                stopBtn.style.display = 'block';
                playBtn.style.display = 'none';
            })
        </script>
    </div>
</body>

</html>
