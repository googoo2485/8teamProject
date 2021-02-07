<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FAQ</title>

    <link rel="stylesheet" href="../../css/sub_subheader.css">
</head>
<body>
        <!-- Header 고정 -->
        <div id = "sub">
            <div><img id = "subLogo" src="../img/logo.png" alt="logo"></div>
            <ul id = "subMenu">
                <li id = "subMenu1">커뮤니티</li>
                <li id = "subMenu2">뉴스</li>
                <li id = "subMenu3">코인/시세</li>
                <li id = "subMenu4">정보</li>
                <li id = "subMenu5">공지</li>
            </ul>
            <div class = "subject">FAQ</div>

            <div class = "faq_container">
                <div class = "faqBox">
                    <div class = "ques">자주 묻는 질문 1 : 왜 이름이 8ver 인가요?</div>
                    <div class = "ans">
                        <p>8ver 라는 이름에는 8조의 8에 over를 더해서 한계를 넘어서서 무한한 가능성을 가진다는 의미가 담겨있습니다.
                        지금 현재에 안주하지않고 더욱 열심히 노력하는 8ver가 되겠습니다. 앞으로도 계속 지켜봐주세요!!</p>
                    </div>
                </div>
                <div class = "faqBox">
                    <div class = "ques">자주 묻는 질문 2 : 팀의 구성원과 분위기는 어떤가요?</div>
                    <div class = "ans">
                        <p>8ver 는 팀장 김한빛과 팀원 강상구, 제정원으로 이루어져 있습니다.
                        1일 1격려와 함께 각자 맡은 역할에 최선을 다하며 으쌰으쌰해나가고 있습니다.
                        구성원이 궁금하다면 ABOUT 페이지를 참고해주시기 바랍니다. 
                        8ver 많은 응원 부탁드려요!!</p>    
                    </div>
                </div>
                <div class = "faqBox">
                    <div class = "ques">자주 묻는 질문 3 : 왜 블록체인 커뮤니티인가요?</div>
                    <div class = "ans">
                        <p>현재 강세를 보이고 있는 블록체인 관련 커뮤니티는 코인에 많은 포커스를 두고 있는 커뮤니티가 대다수입니다. 
                        8ver 는 코인 뿐만 아니라 전반적인 산업에 대한 블록체인 관련 커뮤니티를 만들고 싶었고 
                        블록체인 관련 정부 소식과 개발 현업 유저들의 이야기, 관련 기업의 소식 등의 다채로운 이야기를 나눌 공간이 필요하다고 생각했습니다.</p>
                    </div>
                </div>
                <div class = "faqBox">
                    <div class = "ques">자주 묻는 질문 4 : 8ver 의 목표가 무엇인가요?</div>
                    <div class = "ans">
                        <p>게임 커뮤니티? 하면 대표적으로 인*이 떠오르고 직장인 커뮤니티? 하면 블*인드가 떠오르지 않으신가요?
                            8ver 의 목표는 블록체인 커뮤니티? 하면 8ver!! 하고 나올 수 있을 정도로 
                            대표적인 블록체인 커뮤니티 사이트가 되는 것이 목표입니다. 
                            유저분들의 노력에 힘입어 그 날까지 유용하고 따뜻한 커뮤니티가 될 수 있도록 저희 8ver 팀도 열심히 뛰겠습니다. 감사합니다!!</p>
                    </div>
                </div>
            </div>
        </div>

        <script>
                var faq = document.getElementsByClassName('faqBx');
                for(i = 0; i < faq.length; i++){
                    faq[i].addEventListener('click', function(){
                        this.classList.toggle('active');
                    })
                }
        </script>
</body>
</html>