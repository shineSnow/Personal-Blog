


$(function(){
	/*首页下拉导航条变色*/
$(document).scroll(function(){
	var st = $(document).scrollTop();
	if(st > 203){
		$(".blog-head .navbar-default").css('background-color','rgba(0, 0, 0, 0.76)');
		
	}else{
		//$(".blog-head .navbar-default").css('background-color','rgba(0, 0, 0, 0.76)');
		
		$(".blog-head .navbar-default").css('background-color','rgba(39, 37, 48, 0)');
	
	}
})
	
	
	
})























