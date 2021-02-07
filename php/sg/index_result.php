<?php include 'session_loginCheck.php';?>
<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>8ver</title>   
    <link rel="stylesheet" href="../../css/sub_body.css">
    <link rel="stylesheet" href="../../css/sub_headStyle!.css">
    <link rel="stylesheet" href="../../css/light_Login!.css">
    <link rel="stylesheet" href="../../css/light_signUp.css">
    <link rel="stylesheet" href="../../css/sub_footer.css">
    <link rel="stylesheet" href="../../css/sg_tabLinkStyle.css">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/af0efa6459.js" crossorigin="anonymous"></script>
</head>
<body>
<!-- HEADER -->
<div id="header">
    <!-- LOGO -->
    <img id="img_navbar_logo" src="../../php/img/logo.png" alt="">
        <!-- SEARCH -->
        <div class="navbar_search">
            <input id="navbar_input" type="text" placeholder="검색어 입력">
            <button id="navbar_searchButton">검색</button>
        </div>
            <!-- LOGIN & MEMBER -->
            <div class = "homeButton">
                <button class="navbar_btn" id="navbar_btn1" onclick="location.href='./LogOut.php'">로그아웃</button>
                <button class="navbar_btn" id="navbar_btn2">글쓰기</button>
            </div>
        </div>
    <!-- MENUBAR -->
        <ul class="navbar_menu">
            <li class="navbar_menu_item">커뮤니티</li>
            <li class="navbar_menu_item">뉴스</li>
            <li class="navbar_menu_item">코인/시세</li>
            <li class="navbar_menu_item">정보</li>
            <li class="navbar_menu_item">공지</li>
        </ul>
        <!-- <div class="container">
            <div id="menu" class="menu"><li><a href=""><i class="fas fa-bars"></i>전체</a></li></div>
            <div id="menu" class="menu"><li><a href=""><i class="fas fa-crown"></i>오늘의 인기글</a></li></div>
            <div id="menu" class="menu"><li><a href=""><i class="fas fa-broadcast-tower"></i>코인잡담</a></li></div>
            <div id="menu" class="menu"><li><a href=""><i class="fab fa-bitcoin"></i>코인정보</a></li></div>  
            <div id="menu" class="menu"><li><a href=""><i class="fas fa-gift"></i>이벤트</a></li></div>
            <div id="menu" class="menu"><li><a href=""><i class="far fa-smile"></i>유머/수다</a></li></div>
            <div id="menu" class="menu"><li><a href=""><i class="fab fa-fort-awesome"></i>명예의전당</a></li></div>
            <div id="menu" class="menu"><li><a href=""><i class="fab fa-fort-awesome"></i>명예의전당</a></li></div>
        </div> -->
    <!-- BODY -->
    <div id = "gridWrapper">
        <div id = "gridBox1" class = "gridBox">
            <!-- <ul>
                <li>HOT NEWS!</li>
            </ul> -->
            <img id = "home" src="../../php/img2/blue.png" alt="test">
        </div>
        <div id = "gridBox2" class = "gridBox">
            <ul>
                <li>Blockchain Community</li>
                <li>블록체인 개발 이야기</li>
                <li>블록체인 기업 이야기</li>
                <li>블록체인 창업 이야기</li>
            </ul>
        </div>
        <div id = "gridBox3" class = "gridBox">
            <ul>
                <li>암호화폐 종목 배너</li>
            </ul>
        </div>
        <div id = "gridBox4" class = "gridBox">
            <ul>
                <li>정부 사업</li>
            </ul>
        </div>
    </div>
    <!-- FOOTER -->
    <article class="footer">
        <nav class="footer_wrap">
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
        </nav>
        <div id = "warning">
            Our site sometimes includes links and citation links to materials from other sites. Such content is not responsible for the content or privacy practices of other sites and expressly denies any liability arising from such content or practices. Under no circumstances will 8ver be liable for any damages or damages arising from the content, practices or other media of third-party links.
        </div><br>
        <footer>
            <p>© 2021 8ver</p>
        </footer>
    </article>
</body>
</html>


