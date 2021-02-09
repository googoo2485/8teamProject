//천 단위 콤마 찍기!
function comma(str) {
    str = String(str);
    return str.replace(/(\d)(?=(?:\d{3})+(?!\d))/g, '$1,');
}

//데이터 받아오기
function setUpbitData(){
  $.ajax({
    url: "https://api.upbit.com/v1/market/all",
    dataType: "json"
  }).done(function(markets){
    let arr_krw_markets = "";
    let arr_korean_name = [];
    for(var i = 0; i < markets.length;i++){
      if( markets[i].market.indexOf("KRW") > -1 ){
        arr_krw_markets += markets[i].market+(",");
        arr_korean_name.push(markets[i].korean_name.replace("코인",""));
      }
    }
    arr_krw_markets = arr_krw_markets.substring(0, arr_krw_markets.length-1);
    $.ajax({
      url: "https://api.upbit.com/v1/ticker?markets=" +arr_krw_markets,
      dataType: "json"
    }).done(function(tickers){
      $("#table_ticker > tbody > tr").remove();

      for(let i = 0;i < 20;i++){
        let rowHtml = "<tr><td>"+arr_korean_name[i].replace("코인","").replace("토큰","")+"</td>";
        //rowHtml += "<td>" + arr_korean_name[i] +"</td>"
        rowHtml += "<td>" + comma(tickers[i].trade_price)+"</td>"
        rowHtml += "<td>" + comma((tickers[i].signed_change_rate*100).toFixed(2))+"</td>"
        rowHtml += "<td>" + comma((     tickers[i].acc_trade_price_24h>1000000 ? ( tickers[i].acc_trade_price_24h / 1000000 ) : tickers[i].acc_trade_price_24h ).toFixed(0)) + (tickers[i].acc_trade_price_24h>1000000 ? "M" : "") + "</td>"
        rowHtml += "</tr>";
        $("#table_ticker > tbody:last").append(rowHtml);
        
      }
    }) 
  }) 
  .fail(function(){
    $("#tmp").text( "API 접근 중 에러." );
  })
  setTimeout(setUpbitData, 8000);
}
$(function() {
  var color = localStorage.getItem("test_upbit_color");
  if( color ) $("body").css("color", color);
  setUpbitData();
});
function setColor(color){
  localStorage.setItem("test_upbit_color", color);
  $("body").css("color", color);
}