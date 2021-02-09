
            var usd = 0;
            
            // 천단위 콤마 함수
            function numberWithCommas(x) {
                return x.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
            }
            // 숫자 외 문자열 제거 함수
            function numberDeleteChar(x) {
                return x.toString().replace(/[^0-9]+/g, '');
            }
            
            // 달러 환율 함수 (ajax 동기식)
            function usdkrw_(){
                $.ajax({
                    type: 'GET',
                    async: false, //동기식 처리
                    url:'http://query.yahooapis.com/v1/public/yql?q=select%20*%20from%20yahoo.finance.xchange%20where%20pair%3D%22USDKRW%22&format=json&diagnostics=true&env=store%3A%2F%2Fdatatables.org%2Falltableswithkeys',
                    success: function(data) {
                    usd = parseFloat(data['query']['results']['rate']['Rate']);
                    $('#USDKRW').html('환율 : $1 = \\' + usd);
                    }
                });
            }

            // 달러 환율 함수 (ajax 동기식)
            function usdkrw(){
                $.ajax({
                    type: 'GET',
                    async: false, //동기식 처리
                    url:'http://download.finance.yahoo.com/d/quotes.csv?e=.csv&f=c4l1&s=USDKRW=X',
                    success: function(data) {
                    usd = parseFloat(data.split(",")[1]); 
                    $('#USDKRW').html('환율 : $1 = \\' + usd);
                    }
                });
            }

            
            // 빗썸 함수
            function bithumb(){
                $.get('https://api.bithumb.com/public/ticker/ALL', function(data) {
                    var bithumb_btc = parseFloat(data['data']['BTC']['closing_price']);
                    var bithumb_eth = parseFloat(data['data']['ETH']['closing_price']);
                    var bithumb_xrp = parseFloat(data['data']['XRP']['closing_price']);
                    $('#bithumb_BTC').html('\\ ' + numberWithCommas(bithumb_btc)); // 거래소 시세 정보 표에 값 세팅
                    $('#bithumb_ETH').html('\\ ' + numberWithCommas(bithumb_eth));
                    $('#bithumb_XRP').html('\\ ' + numberWithCommas(bithumb_xrp));
                });
            }
            
            // 현재 시간 갱신
            function CurrentTime() {
                var d = new Date();
                $("#lastUpdate").html(d.toString());
            }
            
            // 갱신 함수
            function proc() {
                try {
                    usdkrw();
                    bithumb();
                    CurrentTime();
                } catch(e){
                    
                } finally {
                    setTimeout("proc()", 3000); //3초마다 갱신
                }
            }