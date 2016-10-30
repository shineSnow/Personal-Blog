<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-CN">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="" />
	<meta name="keywords" content="" />
	<meta name="author" content="" />
	<link rel="shortcut icon" href="../favicon.ico">
    <!-- 上述3个meta标签*必须*放在最前面，任何其他内容都*必须*跟随其后！ -->
    <title>我的自画像</title>
    <link rel="stylesheet" type="text/css" href="/myblog/Public/CSS/normalize.css" />
    <link rel="stylesheet" href="/myblog/Public/CSS/article.css" />
    <!-- Bootstrap -->
    <link href="/myblog/Public/CSS/bootstrap.min.css" rel="stylesheet">
<!--    <link rel="stylesheet" href="css/animate.min.css" />-->
    <link rel="stylesheet" href="/myblog/Public/CSS/animate-3.2.6.min.css" />
    <link rel="stylesheet" href="/myblog/Public/CSS/component.css" />
    <link rel="stylesheet" href="/myblog/Public/CSS/common.css" />
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="//cdn.bootcss.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="//cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style>
    /*博客头部*/
    	.blog-head .container-fluid{max-width: 1248px;}
    	.blog-head .navbar-form .form-group{width: 543px;}
    	.blog-head .navbar-form .form-control{width: 100%;}
    	.blog-head .navbar-default {background-color: rgba(248, 248, 248, 0);border-color: rgba(231, 231, 231, 0);}
     /*博客中部*/
    .blog-content .container{width: 1248px;}
    
    .blog-content .container .col-sm-3 { margin-top: 53px;}                       
   /*博客侧栏*/
  .blog-content .blog-sidebar .js > h3,.blog-content .blog-sidebar .connnect > h3 {border-bottom: 2px solid #9A9946;padding-bottom: 10px;padding-left: 15px;}
   .blog-content .blog-sidebar .connnect{margin-top: 25px;}  
     /*博客底部*/
  .blog-footer {text-align: center;background: rgb(38, 37, 53) none repeat scroll 0% 0%;padding: 14px;color: rgb(255, 255, 255);}
  
  
    </style>
  </head>
  <body>
  	<!--页头部分-->
  	<div class="blog-head">
  		
  		<div class="demo-2">
			<div class="content">
                <div id="large-header" class="large-header">
                    <canvas id="demo-canvas"></canvas>
                    <h1 class="main-title">Spirit</span></h1>
                </div>
               <!-- <div style="position:fixed;height:90px;width:100%;left:0;top:-15px;z-index:9999;tex-align:center">
                    <nav class="codrops-demos" style="text-align:center">
                        <a class="current-demo" href="index.html">效果 1</a>
                        <a href="index2.html">效果 2</a>
                        <a href="index3.html">效果 3</a>
                        <a href="index4.html">效果 4</a>
                    </nav>
                </div>-->
                
                <nav class="navbar navbar-default navbar-fixed-top">
				  <div class="container-fluid">
				    <!-- Brand and toggle get grouped for better mobile display -->
				    <div class="navbar-header">
				      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
				        <span class="sr-only">Toggle navigation</span>
				        <span class="icon-bar"></span>
				        <span class="icon-bar"></span>
				        <span class="icon-bar"></span>
				      </button>
				      <a class="navbar-brand" href="#">Brand</a>
				    </div>
				
				    <!-- Collect the nav links, forms, and other content for toggling -->
				    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				      <ul class="nav navbar-nav">
				        <li><a href="<?php echo U('Home/Index/index');?>">首页 <span class="sr-only">(current)</span></a></li>
				        <li><a href="<?php echo U('Home/List/index');?>">博客文章</a></li>
				        <li><a href="<?php echo U('Home/Example/index');?>">狂拽酷炫</a></li>
				        <li><a href="<?php echo U('Home/Workday/index');?>">点点滴滴</a></li>
				       <!-- <li class="dropdown">
				          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
				          <ul class="dropdown-menu">
				            <li><a href="#">Action</a></li>
				            <li><a href="#">Another action</a></li>
				            <li><a href="#">Something else here</a></li>
				            <li role="separator" class="divider"></li>
				            <li><a href="#">Separated link</a></li>
				            <li role="separator" class="divider"></li>
				            <li><a href="#">One more separated link</a></li>
				          </ul>
				        </li>-->
				      </ul>
				      <form class="navbar-form navbar-left" role="search">
				        <div class="form-group">
				          <input type="text" class="form-control" placeholder="Search">
				        </div>
				        <button type="submit" class="btn btn-default">搜索</button>
				      </form>
				      <ul class="nav navbar-nav navbar-right">
				        <li class="active"><a href="<?php echo U('Home/Me/index');?>">我的自画像</a></li>
				        <li><a href="<?php echo U('Home/Liuyan/index');?>">来客留言</a></li>
				      </ul>
				    </div><!-- /.navbar-collapse -->
				  </div><!-- /.container-fluid -->
				</nav>
                
                
            </div>
		</div><!-- /container -->
		
  	</div>
  	<!--页中部分-->
  	<div class="blog-content">
  		<div class="container">
  			<!--博客内容头部-->
  			<div class="row container-head">
  				<div class="col-sm-12" style="height: 80px;" >
  					            <div class="jq-navbar-main">
                  <div class="jq-navbar-container">
                        <div class="a1">
                              <div class="mo-boy"></div>
                              <div class="mo-girl"></div>
                              <div class="mo-mo"></div>
                              <div class="mo-wheel2"></div>
                              <div class="mo-wheel1"></div>
                        </div>
                        <div class="motor_shadow"></div>
                        <i class="smoke smoke_1"></i>
                        <i class="smoke smoke_2"></i>
                  </div>
                  <div class="jq-navbar-location">
<!--                    <strong>当前位置</strong>：<a href="http://www.htmleaf.com/">主页</a> &gt; <a href="http://www.htmleaf.com/ziliaoku/">资料库</a> &gt; <a href="http://www.htmleaf.com/ziliaoku/qianduanjiaocheng/">前端教程</a> &gt; 
-->                    <strong>关于我</strong>
                  </div>    
            </div>
  				</div>
  			</div>
  			<div class="row" >
  				<!--博客内容-->
  				<div class="col-sm-9 blog-main" >
  					<!--模块标题-->
  					<div class="blog-title">
  						
  					</div>
  					<!--我的自我简介-->
  					<div class="aboutme">
  						<h4 style="text-align: center;">前端工程师伤不起 </h4>
			  						<p><pre>
			  							
			老子几年前进了互联网圈！！！！！！！成了前端工程师，名字是不是很拉风，有木有！！！！！！！！ 
			尼玛跟老子讲前台代码简单！！！出入高级写字楼，薪水高！！！！！！！！！！！！！！！！ 
			入行才2K起啊！！！！2K在帝都都够毛用啊！！！！ 
			尼玛简单个毛线啊！！ 
			HTML、XHTML、XML、json...有木有！！！ 
			CSS要写一堆兼容代码有木有！！！！图片素材要合并有木有！！！ 
			JavaScript、OOP、什么线程、请求、异步、优化！！内存泄漏！！有木有啊有木有！！！！！！ 
			
			尼玛说你呢！！！就你张嘴傻乐的！！！！ 
			不用IE6会死啊！！！！升级下浏览器会死啊！！！！ 
			还有IE6/7/8/9！！！！！！！神马Firefox、Chrome、Safari！！！神马Android、iPhone、iPad！！！ 
			全尼玛是浮云啊！！浮云啊！！！ 
			为毛这么多浏览器！！还要都兼容啊！！！！坑爹呢啊！！！ 
			
			
			后台开发只扔一堆数据就不管了啊！！！！！！！！ 
			设计哥扔下PSD就完事了啊！！！ 
			尼玛哥要高保真还原啊！！！尼玛领导要1px对齐啊！！！ 
			尼玛残品哥要这样那样的动态效果啊！！！ 
			尼玛都是要做死啊！！ 
			为毛做后台开发就高级啊！！！ 
			前端开发就没技术含量啊！！！ 
			残品哥很淡定的说：这个很好搞嘛！！ 
			好搞你妹啊！你以为哥是拿意念写代码的啊！！ 
			哥要一行一行写几千行代码啊！！！ 
			
			尼玛天天赶项目要加班啊！！！！ 
			加班比吃饭还正常啊！！！！ 
			最恶心的是辛辛苦苦写的代码啊！！！ 
			尼玛上线了还要改啊！！！ 
			最后改的面目全非啊！！！！！！ 
			
			技术更新比翻书还快啊！！ 
			神马HTML5、CSS3啊！！！！！！ 
			离线、圆角、动画、视频、音频尼玛想让前端把活都揽了啊！！！！！！！！ 
			
			尼玛英文能力还要好啊！！！ 
			要不看不懂大老外写的博客啊！！！ 
			尼玛哥又不是英语专业的啊！！！！！ 
			
			尼玛产品出BUG了先查前端代码啊！！！ 
			是不是前台的问题都丢给前端啊！！ 
			哥是超人吗！！？尼玛提供的数据就是那个操行，哥能去改服务器啊！！！ 
			尼玛当初不是说你说这么改的吗 
			最后尼玛又让哥改回去！！！！！！！！！！ 
			坑爹啊！！！ 
			
			总之 
			做前端的尼玛你伤不起啊啊啊啊啊啊！！！！！
			但是，我还是热爱前端，因为我感到自由！
			  						</pre> </p>
  					</div>
  					
  					
  	
  					
  					
  					
  				</div>
  				<!--博客侧栏-->
  				<div class="col-sm-3  blog-sidebar">
  					<!--头像-->
  					<div class="touxiang" style="border: 1px solid black;">
  						<img class="img-responsive" src="/myblog/Public/Images/girl.jpg" alt="" />
  					</div> <!--头像end-->
  					<hr />
  					<!--个人介绍-->
  					<div class="js" style="border: 1px solid black;">
  						 <h3>个人介绍</h3>
  						 <p><strong>网站：</strong>www.zhagnqiyuan.top</p>
  						 <p><strong>介绍：</strong>
  						 	老子几年前进了互联网圈！！！！！！！成了前端工程师，名字是不是很拉风，有木有！！！！！！！！ 
							尼玛跟老子讲前台代码简单！！！出入高级写字楼，薪水高！！！！！！！！！！！！！！！！ 
							入行才2K起啊！！！！2K在帝都都够毛用啊！！！！ 
							尼玛简单个毛线啊！！
							       
  						 </p>
  						
  					</div><!--个人介绍end-->
  					<!--联系方式-->
  					<div class="connnect" style="border: 1px solid black;">
  						 <h3>Call Me Baby</h3>
  						 <p><strong>Git：</strong>www.zhagnqiyuan.top</p>
  						 <p><strong>QQ：</strong>www.zhagnqiyuan.top</p>
  						 <p><strong>weixin：</strong>www.zhagnqiyuan.top</p>
  					</div>
  					
  				</div>
  				
  			</div>
  		</div>
  	</div>
  	<!--页脚部分-->
     <div class="blog-footer">
     	<p>	Copyright@2016-2017 版权所有 Power By-张棋源</p>
     </div>






    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="/myblog/Public/JS/jquery-1.11.1.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="/myblog/Public/JS/bootstrap.min.js"></script>
    <script type="text/javascript" src="/myblog/Public/JS/jquery.aniview.min.js" ></script>
    <script type="text/javascript" src="/myblog/Public/JS/rAF.js" ></script>
    <script type="text/javascript" src="/myblog/Public/JS/demo-2.js" ></script>
    <script type="text/javascript" src="/myblog/Public/JS/common.js" ></script>
    <script type="text/javascript">
    $(function(){
    	setTimeout(suo(),3000);
    })
    function suo (){
    	
    	$("#large-header").animate({height:"50px"},2600);
    }
    </script>
  </body>
</html>