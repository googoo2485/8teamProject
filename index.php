<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>8ver</title>
   
    <link rel="stylesheet" href="./css/sub_body2.css">
    <link rel="stylesheet" href="./css/light_Login!.css">
    <link rel="stylesheet" href="./css/light_signUp.css">
    <link rel="stylesheet" href="./css/sub_footer.css">
    <link rel="stylesheet" href="./css/sg_tabLinkStyle.css">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/af0efa6459.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-1.4.4.min.js"></script>
    
    <!-- light_header -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&display=swap" rel="stylesheet">
    <!-- <link rel="icon" type="image/png" href="images/favicon.png"> -->
    <!-- <link rel="stylesheet" href="./css/light_head.css"> -->


</head>
<body onLoad="proc()">
<div class = "whole">
    <!-- 홈화면 헤더! -->
    <div class = "home">
        <!-- 홈화면 헤더 영상 -->
        <video class = "home_header" muted autoplay loop src="./php/img2/header3.mp4"></video>
        <img class = "home_logo" src="./php/img2/8ver1.png" alt="logo">
        <!-- 로그인, 글쓰기 버튼 -->
        <div class = "homeButton">
            <button class="navbar_btn" id="navbar_btn1" onclick="location.href='./php/light/login.php'">Login</button>
            <button class="navbar_btn" id="navbar_btn2">Post</button>         
        </div>
        <div class="home_search">
            <input class ="home_input" type="text" placeholder="Please write down here">
            <button class ="home_button">Search</button>
        </div>
    </div>
    

    <!-- body grid -->
    <div class = "gridWrapper">
        
        <div class = "gridBox0">
            <div class = "imgLink">
                <img class = "img_commuLink"src="./php/img2/link1.png" alt="">
                <img class = "img_newsLink" src="./php/img2/link2.jpg" alt="">
                <img class = "img_coinLink" src="./php/img2/link3.jpg" alt="">
                <img class = "img_noticeLink" src="./php/img2/link4.jpg" alt="">
                <img class = "img_inforLink" src="./php/img2/link5.png" alt="">
            </div>
        </div>
        <div class = "gridBox1" class = "gridBox">
            <!-- <div class = "tab">TAB</div> -->
            <!-- <div class = "iso-text">MENU</div> -->
            <h2>MENU LINK</h2>
            <br><br><div class = "linkWrapper">
                <h2 class = "commuLink"><a href = "">Community</a></h2>
                <h2 class = "newsLink"><a href = "">News</a></h2>
                <h2 class = "coinLink"><a href = "">Coin</a></h2>
                <h2 class = "noticeLink"><a href = "">Notice</a></h2>
                <h2 class = "inforLink"><a href = "">Information</a></h2>
            </div>
        </div>
        
        <div class = "gridBox2">
        <!-- 암호화폐 시세 -->
        <table class = "table">
            <tr>
                <th>Crypto Currency</th>
                <th>Prices from Bithumb</th>
            </tr>
            <tr class = "BTC">
                <td><a href = "https://www.bithumb.com/trade/order/BTC_KRW" target = "_blank">BTC</a></td>
                <td id="bithumb_BTC"></td>
            </tr>
            <tr class = "ETH">
                <td><a href = "https://www.bithumb.com/trade/order/ETH_KRW" target = "_blank">ETH</a></td>
                <td id="bithumb_ETH"></td>
            </tr>
            <tr class = "XRP">
                <td><a href = "https://www.bithumb.com/trade/order/XRP_KRW" target = "_blank">XRP</a></td>
                <td id="bithumb_XRP"></td>
            </tr>
            <tr>
                <td>LATEST</td>
                <td colspan="4" id="lastUpdate"></td>
            </tr>
        </table>
        </div>
        
        <div class = "gridBox3">
            <ul class = "gov">
                <br><h1>Blockchain Media</h1><br>
                <article class = "case">
                    <a class = "title" href="https://www.blockmedia.co.kr/archives/162133" target = "_blank">[BLOCKFESTA 2020]</a>
                    <div class = "gov_img">
                        <a href="https://www.blockmedia.co.kr/archives/162133" target = "_blank"><img src="./php/img2/block0.png" alt=""></a>
                    </div>
                </article>

                <article class = "case">
                    <a class = "title" href="https://www.blockmedia.co.kr/archives/161645" target = "_blank">[Law enforcement]</a>
                    <div class = "gov_img">
                        <a href="https://www.blockmedia.co.kr/archives/161645" target = "_blank"><img src="./php/img2/block1.jpg" alt=""></a>
                    </div>
                </article>

                <article class = "case">
                    <a class = "title" href="https://www.blockmedia.co.kr/archives/161262" target = "_blank">[Shinhan Bank]</a>
                    <div class = "gov_img">
                        <a href="https://www.blockmedia.co.kr/archives/161262" target = "_blank"><img src="./php/img2/block2.jpg" alt=""></a>
                    </div>
                </article>

                <article class = "case">
                    <a class = "title" href="https://www.blockmedia.co.kr/archives/160918" target = "_blank">[Ground X]</a>
                    <div class = "gov_img">
                        <a href="https://www.blockmedia.co.kr/archives/160918" target = "_blank"><img src="./php/img2/block3.png" alt=""></a>
                    </div>
                </article>

            </ul>
        </div>
    </div>

    <!-- FOOTER -->
    <div class="footer">
        <div class="footer_wrap">
            <ul id = "footer1">
                <a class = "footerlink" href="./php/sub/about.php" target = "_blank"><li class="footer_subTitle">ABOUT</li></a>
            </ul>
            <ul id = "footer2">
                <a class = "footerlink" href="./php/sub/terms.php" target = "_blank"><li class="footer_subTitle">TERMS OF SERVICE</li></a>
            </ul>
            <ul id = "footer3">
                <a class = "footerlink" href="./php/sub/faq.php" target = "_blank"><li class="footer_subTitle">FAQ</li></a>
            </ul>
            <ul id = "footer4">
                <a class = "footerlink" href="./php/sub/privacy.php" target = "_blank"><li class="footer_subTitle">PRIVACY POLICY</li></a>
            </ul>
        </div>
        <div class = "warning">
            Our site sometimes includes links and citation links to materials from other sites. Such content is not responsible for the content or privacy practices of other sites and expressly denies any liability arising from such content or practices. Under no circumstances will 8ver be liable for any damages or damages arising from the content, practices or other media of third-party links.
        </div><br>
        <footer>
            <p>© 2021 8ver</p>
        </footer>
    </div>
</div>

    <script src = "./js/crypto.js"></script>
</body>
</html>


