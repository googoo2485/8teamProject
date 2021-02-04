<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ABOUT</title>

    <style>
        #member{
            grid-column: 2;
            grid-row: 3;
            display : flex;
            flex-direction: row;
            justify-content: space-evenly;
            margin-top  :3%;
    
        }
        #alight{
            width  :auto;
            height : 500px;

        }
        #nine{
            width  :auto;
            height : 500px;
        }
        #je{
            width  :auto;
            height : 500px;
        }

    </style>
    
    <link rel="stylesheet" href="../../css/subheader.css">
</head>
<body>
    <!-- Header 고정 -->
    <div id = "sub">
        <div>
            <img id = "subLogo" src="../img/logo.png" alt="logo">
        </div>
        <ul id = "subMenu">
            <li id = "subMenu1">커뮤니티</li>
            <li id = "subMenu2">뉴스</li>
            <li id = "subMenu3">코인/시세</li>
            <li id = "subMenu4">정보</li>
            <li id = "subMenu5">공지</li>
        </ul>
        <div class = "subject">
            ABOUT
        </div>

        
        <div id = "member">
            <div id = "aboutLayer"></div>
        </div>
    </div>

    <div id = "stage">
        <div>
            <a href="1.jpg"><img id = "alight" src="../img2/light.PNG" alt="김한빛"></a>
            <a href="2.jpg"><img id = "nine" src="../img2/sangoo.PNG" alt="강상구"></a>
            <a href="3.jpg"><img id = "je" src="../img2/je.PNG" alt="제정원"></a>
        </div>

    </div>

    <script src = "../../index.js"></script>
</body>
</html>