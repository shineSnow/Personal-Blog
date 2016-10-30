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
    <title>博客文章</title>
    <link rel="stylesheet" type="text/css" href="/myblog/Public/CSS/normalize.css" />
    <link rel="stylesheet" href="/myblog/Public/CSS/article.css" />
    <!-- Bootstrap -->
    <link href="/myblog/Public/CSS/bootstrap.min.css" rel="stylesheet">
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
    .blog-content .blog-title h3{}
    .blog-content .blog-list{background-color: #eef2f5; margin-bottom: 26px;}
    .blog-content .blog-list .article-left{  margin-right: -9px;background: url(/myblog/Public/Images/bg-time_03.png) center center no-repeat;padding: 8px 0 19px 0;}
    .blog-content .blog-list .article-left span {display:block;font-size: 20px;text-align: center;color: #fff;}
    .blog-content .blog-list .article-left span:first-child {font-size: 26px; font-weight: bold; line-height: 0.8;}
  /*  .blog-content .blog-list .article-img{float: left;    padding-top: 10px;}*/
    .blog-content .blog-list .article-img img{border: 2px solid rgb(255, 255, 255);}
    /*.blog-content .blog-list .article-lue{float: right;width: 600px;}*/
    .blog-content .blog-list .article-lue i {padding: 0 3px 0 3px;}
    .blog-content .blog-list .article-lue h4{color: #484745; font-weight: bold;}
    .blog-content .blog-list .article-lue .time {color: #969a9b;}
    .blog-content .blog-list .article-lue .summary {font-size: 15px;line-height: 30px;}
    .blog-content .blog-list .article-lue .tags {color: #2cd1b1; background: url(/myblog/Public/Images/tag_07.png) left center no-repeat;padding-left: 25px;font-size: 15px;}
   /*博客侧栏*/
  .blog-content .blog-sidebar .pic{padding-top: 8px;margin-right: -16px;}
  .blog-content .blog-sidebar .pic img{width: 70px;height: 70px;border-radius: 35px;}
  .blog-content .blog-sidebar .content h4 {font-size: 16px;}
  .blog-content .blog-sidebar .recommend,.blog-content .blog-sidebar .liuyan {border: 1px solid #9A9946;}
  .blog-content .blog-sidebar .recommend > h3,.blog-content .blog-sidebar .liuyan > h3 {border-bottom: 2px solid #9A9946;padding-bottom: 10px;padding-left: 15px;}
  .blog-content .blog-sidebar .liuyan{margin-top: 25px;}
  /*留言*/
  .blog-content .blog-sidebar .liuyan .pic{padding-top: 0px;margin-right: -16px;}
  .blog-content .blog-sidebar .liuyan .pic img{width: 60px;height: 60px;border-radius: 12px;}
  .blog-content .blog-sidebar hr{border: 1px solid #2c2735;}                          
   
     /*博客底部*/
  .blog-footer {margin-top: 150px; text-align: center;background: rgb(38, 37, 53) none repeat scroll 0% 0%;padding: 14px;color: rgb(255, 255, 255);}
  
  
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
				        <li class="active"><a href="<?php echo U('Home/List/index');?>">博客文章</a></li>
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
				        <li><a href="<?php echo U('Home/Me/index');?>">我的自画像</a></li>
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
-->                    <strong>博客文章</strong>
                  </div>    
            </div>
  				</div>
  			</div>
  			<div class="row" >
  				<!--博客内容-->
  				<div class="col-sm-9 blog-main" >
  					<!--模块标题-->
  					<div class="blog-title">
  						<!--<h3>博客文章</h3>-->
  					</div>
  					<!--博客文章列表-->
   					
  					<div class="row blog-list">
  						<a class="clearfix" href="##" >
  						<div class="col-sm-1 article-left"><span>26</span><span>Apr</span></div>
  						<div class="col-sm-11 article-right">
  							<div class="col-sm-4 article-img"><img class="img-thumbnail" src="/myblog/Public/Images/demo-2-bg.jpg" alt="" /></div>
  							<div class="col-sm-8 article-lue">
  								<h4>国家发改委推行电子政务，微信微博上线运行</h4>
  								<p class="time"><span>27天前</span> <i>•</i><span>神之作者</span> <i>•</i><span>围观热度53</span><i>•</i> <span>行业动态</span></p>
  								<p class="summary">这是一款基于Bootstrap列表特效。该特效对原生的Bootstrap Accordion进行美化，制作非常美观的垂直手风琴效果… </p>
  								<p class="tags">电子政务</p>
  							</div>
  						</div>
  						</a>
  					</div>
   					
  					<div class="row blog-list">
  							<a class="clearfix" href="##" >
  						<div class="col-sm-1 article-left"><span>26</span><span>Apr</span></div>
  						<div class="col-sm-11 article-right">
  							<div class="col-sm-4 article-img"><img class="img-thumbnail" src="/myblog/Public/Images/demo-2-bg.jpg" alt="" /></div>
  							<div class="col-sm-8 article-lue">
  								<h4>国家发改委推行电子政务，微信微博上线运行</h4>
  								<p class="time"><span>27天前</span> <i>•</i><span>神之作者</span> <i>•</i><span>围观热度53</span><i>•</i> <span>行业动态</span></p>
  								<p class="summary">这是一款基于Bootstrap列表特效。该特效对原生的Bootstrap Accordion进行美化，制作非常美观的垂直手风琴效果… </p>
  								<p class="tags">电子政务</p>
  							</div>
  						</div>
  						</a>
  					</div>
   					
  					<div class="row blog-list">
  							<a class="clearfix" href="##" >
  						<div class="col-sm-1 article-left"><span>26</span><span>Apr</span></div>
  						<div class="col-sm-11 article-right">
  							<div class="col-sm-4 article-img"><img class="img-thumbnail" src="/myblog/Public/Images/demo-2-bg.jpg" alt="" /></div>
  							<div class="col-sm-8 article-lue">
  								<h4>国家发改委推行电子政务，微信微博上线运行</h4>
  								<p class="time"><span>27天前</span> <i>•</i><span>神之作者</span> <i>•</i><span>围观热度53</span><i>•</i> <span>行业动态</span></p>
  								<p class="summary">这是一款基于Bootstrap列表特效。该特效对原生的Bootstrap Accordion进行美化，制作非常美观的垂直手风琴效果… </p>
  								<p class="tags">电子政务</p>
  							</div>
  						</div>
  						</a>
  					</div>
   					
  					<div class="row blog-list">
  							<a class="clearfix" href="##" >
  						<div class="col-sm-1 article-left"><span>26</span><span>Apr</span></div>
  						<div class="col-sm-11 article-right">
  							<div class="col-sm-4 article-img"><img class="img-thumbnail" src="/myblog/Public/Images/demo-2-bg.jpg" alt="" /></div>
  							<div class="col-sm-8 article-lue">
  								<h4>国家发改委推行电子政务，微信微博上线运行</h4>
  								<p class="time"><span>27天前</span> <i>•</i><span>神之作者</span> <i>•</i><span>围观热度53</span><i>•</i> <span>行业动态</span></p>
  								<p class="summary">这是一款基于Bootstrap列表特效。该特效对原生的Bootstrap Accordion进行美化，制作非常美观的垂直手风琴效果… </p>
  								<p class="tags">电子政务</p>
  							</div>
  						</div>
  						</a>
  					</div>
   					
  					<div class="row blog-list">
  							<a class="clearfix" href="##" >
  						<div class="col-sm-1 article-left"><span>26</span><span>Apr</span></div>
  						<div class="col-sm-11 article-right">
  							<div class="col-sm-4 article-img"><img class="img-thumbnail" src="/myblog/Public/Images/demo-2-bg.jpg" alt="" /></div>
  							<div class="col-sm-8 article-lue">
  								<h4>国家发改委推行电子政务，微信微博上线运行</h4>
  								<p class="time"><span>27天前</span> <i>•</i><span>神之作者</span> <i>•</i><span>围观热度53</span><i>•</i> <span>行业动态</span></p>
  								<p class="summary">这是一款基于Bootstrap列表特效。该特效对原生的Bootstrap Accordion进行美化，制作非常美观的垂直手风琴效果… </p>
  								<p class="tags">电子政务</p>
  							</div>
  						</div>
  						</a>
  					</div>
   					
  					<div class="row blog-list">
  							<a class="clearfix" href="##" >
  						<div class="col-sm-1 article-left"><span>26</span><span>Apr</span></div>
  						<div class="col-sm-11 article-right">
  							<div class="col-sm-4 article-img"><img class="img-thumbnail" src="/myblog/Public/Images/demo-2-bg.jpg" alt="" /></div>
  							<div class="col-sm-8 article-lue">
  								<h4>国家发改委推行电子政务，微信微博上线运行</h4>
  								<p class="time"><span>27天前</span> <i>•</i><span>神之作者</span> <i>•</i><span>围观热度53</span><i>•</i> <span>行业动态</span></p>
  								<p class="summary">这是一款基于Bootstrap列表特效。该特效对原生的Bootstrap Accordion进行美化，制作非常美观的垂直手风琴效果… </p>
  								<p class="tags">电子政务</p>
  							</div>
  						</div>
  						</a>
  					</div>
  					
  					
  					
  	
  					
  					
  					
  				</div>
  				<!--博客侧栏-->
  				<div class="col-sm-3  blog-sidebar" >
  					<!--精品推荐-->
  					<div class="recommend">
  						<h3>博文推荐</h3>
  						
  						<div class="row">
  							<div class="col-sm-4 pic"><img src="/myblog/Public/Images/1.jpg"/></div>
  							<div class="col-sm-8 content">
  								<h4>2014标志设计趋势的探索</h4>
  								<p>2015年05月24日</p>
  							</div>
  						</div>
  						
  						<div class="row">
  							<div class="col-sm-4 pic"><img src="/myblog/Public/Images/1.jpg"/></div>
  							<div class="col-sm-8 content">
  								<h4>2014标志设计趋势的探索</h4>
  								<p>2015年05月24日</p>
  							</div>
  						</div>
  						
  						<div class="row">
  							<div class="col-sm-4 pic"><img src="/myblog/Public/Images/1.jpg"/></div>
  							<div class="col-sm-8 content">
  								<h4>2014标志设计趋势的探索</h4>
  								<p>2015年05月24日</p>
  							</div>
  						</div>
  						
  						<div class="row">
  							<div class="col-sm-4 pic"><img src="/myblog/Public/Images/1.jpg"/></div>
  							<div class="col-sm-8 content">
  								<h4>2014标志设计趋势的探索</h4>
  								<p>2015年05月24日</p>
  							</div>
  						</div>
  						
  						<div class="row">
  							<div class="col-sm-4 pic"><img src="/myblog/Public/Images/1.jpg"/></div>
  							<div class="col-sm-8 content">
  								<h4>2014标志设计趋势的探索</h4>
  								<p>2015年05月24日</p>
  							</div>
  						</div>
  						
  					</div> <!--博客推荐end-->
  					<!--七嘴八舌留留言-->
  					<div class="liuyan">
  						 <h3>七嘴八舌留留言</h3>
  						 
  							<div class="row">
  							<div class="col-sm-4 pic"><img src="/myblog/Public/Images/1.jpg"/></div>
  							<div class="col-sm-8 content">
  								<p class="webname">大大嘴巴<p>
  								<p class="word">跌撞间们 应该这里开始并不知道那就是 新开始关于我们 应该有首歌 来作证</p>
  						    <p time>2015年09月14日</p>
  							</div>
  						</div>
  						 
  						 
  							<div class="row">
  							<div class="col-sm-4 pic"><img src="/myblog/Public/Images/1.jpg"/></div>
  							<div class="col-sm-8 content">
  								<p class="webname">大大嘴巴<p>
  								<p class="word">跌撞间们 应该这里开始并不知道那就是 新开始关于我们 应该有首歌 来作证</p>
  						    <p time>2015年09月14日</p>
  							</div>
  						</div>
  						 
  							<div class="row">
  							<div class="col-sm-4 pic"><img src="/myblog/Public/Images/1.jpg"/></div>
  							<div class="col-sm-8 content">
  								<p class="webname">大大嘴巴<p>
  								<p class="word">跌撞间们 应该这里开始并不知道那就是 新开始关于我们 应该有首歌 来作证</p>
  						    <p time>2015年09月14日</p>
  							</div>
  						</div>
  						 
  							<div class="row">
  							<div class="col-sm-4 pic"><img src="/myblog/Public/Images/1.jpg"/></div>
  							<div class="col-sm-8 content">
  								<p class="webname">大大嘴巴<p>
  								<p class="word">跌撞间们 应该这里开始并不知道那就是 新开始关于我们 应该有首歌 来作证</p>
  						    <p time>2015年09月14日</p>
  							</div>
  						</div>
  						
  					</div><!--七嘴八舌留留言end-->
  					
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
  </body>
</html>