// JavaScript Document
$(document).ready(function() {
    var mm=0;
	var xx=0;
	var tt;
	$("#icon li").eq(0).addClass("kk")
	//addClass("kk")指定kk做為文字ICON滑鼠滑過顏色能變色,做出反應回饋

<!----按鈕控制圖片能滑動展示	--->
	$("#icon li").click(function() {
        mm=$(this).index();
		xx=mm*1000*-1;
		$("#photoshow ul").animate({left:xx},1000,"easeOutElastic");
		$(this).addClass("kk").siblings().removeClass();
    });

<!----能自動定時輪播之語法---->
     function GoTime(){
		 $("#photoshow ul").animate({left:xx},1000,"easeOutElastic");
		 $("#icon li").removeClass().eq(mm).addClass("kk");//此段謌法順序不能亂掉哦,要先removeClass()清除前面按鈕記憶,再eq(mm)是得知現在按鈕輪到那個順序,最後再addClass("kk")讓該按鈕顏色能變更正確
		 if(mm<9){
			 mm+=1;
			 xx=mm*1000*-1;
			 }else{
			  mm=0;
			  xx=0;	 
			 }
		   tt=setTimeout(GoTime,9000);//9000為亳秒,等於9秒	 
		 }
       GoTime();//此GoTime();語法是用來呼叫上方所設定之function GoTime(){...}函數參數的
<!----若按了按鈕後先清除自動定時輪播之後再恢復之語法---->
        $("#photoshow,#icon").hover(function(){
			clearTimeout(tt);//這語法是只要游標停在按鈕上時,則清除計時,圖片則不會輪播會一直停止,方便網友看仔細圖片
			},function(){
			tt=setTimeout(GoTime,3000);
			});      

});

/*
"slow"是指animate動畫之速度為慢(fast為快)
也可用1000數字來指定速度,數字大則慢,回彈面積也大
"easeOutElastic"是使圖片有來回彈簧效果,但要配合引用jquery-ui.min-1.11.2.js才會有效果,若引用則有來回彈簧效果
"easeInOutBack"是使圖片有彈回效果,但要配合引用jquery-ui.min-1.11.2.js才會有效果,若引用則無彈回效果
*/