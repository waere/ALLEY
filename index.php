<!DOCTYPE html>
<html lang="zh-CN">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=no">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="HandheldFriendly" content="true">
	<meta name="renderer" content="webkit">
    <meta http-equiv="cleartype" content="on">
    <meta name="MobileOptimized" content="320">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="keywords" content="问巷，餐厅" />
    <meta name="description" content="问巷艺术餐厅" />
    <meta name="robots" content="index,follow">
    <link rel="shortcut icon" href="images/ALLEY.ico" type="image/x-icon" />
	<title>ALLEY-问巷首页</title>
	<link rel="stylesheet" href="css/swiper-3.4.2.min.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/iconfont.css">
	<link rel="stylesheet" href="css/reset.css">
	<link rel="stylesheet" href="css/currency.css">
	<link rel="stylesheet" href="css/index.css">
</head>
<body>
	<div class="outside-box">
		<!-- 头部导航 -->
		<?php
        	require("inc/header.php");
    	?>
		<!-- 头部导航结束 -->
		
		<!-- banner轮播 -->
		<div class="swiper-container swiperbox" id="swiper-container">
	        <div class="swiper-wrapper">
	            <div class="swiper-slide swslide">
				<picture>
			      <!--[if IE 9]> <video style="display: none;"> <![endif]-->
			    	<source media="(min-width: 990px)" srcset="images/index/banner01.jpg">
			    	<source media="(min-width: 300px)" srcset="images/index/m-home-1.jpg">
			      <!--[if IE 9]> </video> <![endif]-->
					<img src="images/index/m-home-1.jpg" srcset="images/index/banner01.jpg" alt="">
			    </picture>
	            </div>
	            <div class="swiper-slide swslide">
					<picture>
				      <!--[if IE 9]> <video style="display: none;"> <![endif]-->
				    	<source media="(min-width: 990px)" srcset="images/index/banner02.jpg">
				    	<source media="(min-width: 300px)" srcset="images/index/m-home-2.jpg">
				      <!--[if IE 9]> </video> <![endif]-->
						<img src="images/index/m-home-2.jpg" srcset="images/index/banner02.jpg" alt="">
				    </picture>
	            </div>
	            <div class="swiper-slide swslide">
					<picture>
				      <!--[if IE 9]> <video style="display: none;"> <![endif]-->
				    	<source media="(min-width: 990px)" srcset="images/index/banner03.jpg">
				    	<source media="(min-width: 300px)" srcset="images/index/m-home-3.jpg">
				      <!--[if IE 9]> </video> <![endif]-->
						<img src="images/index/m-home-3.jpg" srcset="images/index/banner03.jpg" alt="">
				    </picture>
	            </div>
	        </div>
	        <div class="banerswtab">
	        	<!-- Add Pagination -->
		        <div class="swiper-pagination"></div>
		        <!-- Add Navigation -->
		        <div class="swiper-button-prev swiper-button-white sw-prev"></div>
		        <div class="swiper-button-next swiper-button-white sw-next"></div>
	        </div>
	    </div>
		<!-- banner轮播结束 -->

	<!-- 中间导航 -->
		<div class="centernav container-fluid">
			<ul class="row">
				<li class="col-md-3 col-xs-6">
					<a href="taste.php">
						<p>TASTE ALLEY</p>
						<span>品味问巷</span>
					</a>
				</li>
				<li class="col-md-3 col-xs-6">
					<a href="food.php#foodwine">
						<p>LANE ASKS FOR WINE</p>
						<span>问巷美酒</span>
					</a>
				</li>
				<li class="col-md-3 col-xs-6">
					<a href="food.php#coffee">
						<p>COFFEE DRINKS</p>
						<span>咖啡饮品</span>
					</a>
				</li>
				<li class="col-md-3 col-xs-6">
					<a href="life.php">
						<p>ART ACTIVITIES</p>
						<span>艺术活动</span>
					</a>
				</li>
			</ul>
		</div>
	<!-- 中间导航结束 -->
	
	<!-- 生活活动 -->
		<div class="activity">
			<div class="act-tab">
				<ul class="">
					<li class="swtab">音乐</li>
					<li class="">酒会</li>
					<li class="">年会</li>
					<li class="">下午茶</li>
					<li class="">喜事</li>
					<li class="">学习</li>
					<li class="">商务</li>
					<li class="">沙龙</li>
				</ul>
				<div class="act-conenter">
					<p>#巷弄生活 / 问巷活动#</p>
					<div class="cont1 cont-show">
						<h2>MUSIC <span>PARTY</span></h2>
						<h3>音乐派对</h3>
						<i></i>
						<p>贵州地方特色菜，该菜肉质鲜美、酸辣可口。<br>黔东南自治州有句名言叫“三天不吃酸，走路打捞蹿<br>（方言，意为走路不稳，东偏西倒）”</p>
					</div>
					<div class="cont1">
						<h2>RED WINE <span>CLUB</span></h2>
						<h3>红酒会</h3>
						<i></i>
						<p>贵州地方特色菜，该菜肉质鲜美、酸辣可口。<br>黔东南自治州有句名言叫“三天不吃酸，走路打捞蹿<br>（方言，意为走路不稳，东偏西倒）”</p>
					</div>
					<div class="cont1">
						<h2>ANNUAL <span>EVENT</span></h2>
						<h3>年会活动</h3>
						<i></i>
						<p>贵州地方特色菜，该菜肉质鲜美、酸辣可口。<br>黔东南自治州有句名言叫“三天不吃酸，走路打捞蹿<br>（方言，意为走路不稳，东偏西倒）”</p>
					</div>
					<a href="life.php">READ MORE</a>
				</div>
			</div>
			<!-- swiper -->
			<div class="swiper-container swiper-container-horizontal swbox2" id="swiper-container2">
				<div class="swiper-wrapper">
					<div class="swiper-slide swiper-no-swiping">
						<picture>
					      <!--[if IE 9]> <video style="display: none;"> <![endif]-->
					    	<source media="(min-width: 990px)" srcset="images/index/u12.jpg">
					    	<source media="(min-width: 300px)" srcset="images/index/m-home-4.jpg">
					      <!--[if IE 9]> </video> <![endif]-->
							<img src="images/index/m-home-4.jpg" srcset="images/index/u12.jpg" alt="音乐">
					    </picture>
					</div>
					<div class="swiper-slide swiper-no-swiping">
						<picture>
					      <!--[if IE 9]> <video style="display: none;"> <![endif]-->
					    	<source media="(min-width: 990px)" srcset="images/index/u18.jpg">
					    	<source media="(min-width: 300px)" srcset="images/index/m-home-5.jpg">
					      <!--[if IE 9]> </video> <![endif]-->
							<img src="images/index/m-home-5.jpg" srcset="images/index/u18.jpg" alt="酒会">
					    </picture>
					</div>
					<div class="swiper-slide swiper-no-swiping">
						<picture>
					      <!--[if IE 9]> <video style="display: none;"> <![endif]-->
					    	<source media="(min-width: 990px)" srcset="images/index/u16.jpg">
					    	<source media="(min-width: 300px)" srcset="images/index/m-home-6.jpg">
					      <!--[if IE 9]> </video> <![endif]-->
							<img src="images/index/m-home-6.jpg" srcset="images/index/u16.jpg" alt="年会">
					    </picture>
					</div>
				</div>
				 <!-- Add Navigation -->
	        	<div class="swiper-button-prev swiper-button-white act-prev"></div>
	        	<div class="swiper-button-next swiper-button-white act-next"></div>
			</div>
		</div>
	<!-- 生活活动结束 -->

	<!-- 采味集 -->
		<div class="takebox">
			<div class="take-conter">
				<h6>#问巷合作品牌#</h6>
				<img src="images/index/u224.png" alt="">
				<div class="take-tab col-xs-12">
					<a class="thistab" href="javascript:void(0)">古村货郎</a>
					<i></i>
					<span> &nbsp;/&nbsp; </span>
					<a href="javascript:void(0)">生态农产品</a>
					<i></i>
					<span> &nbsp;/&nbsp; </span>
					<a href="javascript:void(0)">干货</a>
				</div>
				<p class="col-xs-12">
					Life should be wasted on beautiful things.<br/>
					<span>In Ther Alley Of Taste</span>
				</p>
				<a class="col-xs-12 col-md-12" href="brand.php">READ MORE</a>
			</div>
			<picture class="takeimg currimg">
		      <!--[if IE 9]> <video style="display: none;"> <![endif]-->
		    	<source media="(min-width: 990px)" srcset="images/index/u208.jpg">
		    	<source media="(min-width: 300px)" srcset="images/index/m-home-17.jpg">
		      <!--[if IE 9]> </video> <![endif]-->
				<img src="images/index/m-home-17.jpg" srcset="images/index/u208.jpg" alt="古村货郎">
		    </picture>
		    <picture class="takeimg">
		      <!--[if IE 9]> <video style="display: none;"> <![endif]-->
		    	<source media="(min-width: 990px)" srcset="images/index/u210.jpg">
		    	<source media="(min-width: 300px)" srcset="images/index/m-home-18.jpg">
		      <!--[if IE 9]> </video> <![endif]-->
				<img src="images/index/m-home-18.jpg" srcset="images/index/u210.jpg" alt="生态农产品">
		    </picture>
		    <picture class="takeimg">
		      <!--[if IE 9]> <video style="display: none;"> <![endif]-->
		    	<source media="(min-width: 990px)" srcset="images/index/u212.jpg">
		    	<source media="(min-width: 300px)" srcset="images/index/m-home-19.jpg">
		      <!--[if IE 9]> </video> <![endif]-->
				<img src="images/index/m-home-19.jpg" srcset="images/index/u212.jpg" alt="干货">
		    </picture>
		</div>
	<!-- 采味集结束 -->

	<!-- 摩瑟 -->
		<div class="moserbox">
			<div class="moserconre">
				<h6 class="hidden-xs">#问巷合作品牌#</h6>
				<img src="images/index/moser-logo.png" alt="摩瑟">
				<div class="mosertab col-xs-12">
					<a class="thistab" href="javascript:void(0)">摩瑟咖啡</a><span> &nbsp;/&nbsp;</span>
					<a href="javascript:void(0)">摩瑟绿饮</a>
					<i class="iconfont videoplay">&#xe602;</i>
				</div>
				<p class="col-xs-12">
					Life should be wasted on beautiful thigs<br>
					<span>In The Alley Of Taste</span>
				</p>
				<a class="col-xs-6" href="brand.php">READ MORE</a>
			</div>
			<!-- moser swiper -->
			<div class="moserswbox swiper-container" id="swiper-container3">
				<div class="swiper-wrapper">
					<div class="swiper-slide swiper-no-swiping">
						<picture>
					      <!--[if IE 9]> <video style="display: none;"> <![endif]-->
					    	<source media="(min-width: 990px)" srcset="images/index/u216.jpg">
					    	<source media="(min-width: 300px)" srcset="images/index/m-home-7.jpg">
					      <!--[if IE 9]> </video> <![endif]-->
							<img src="images/index/m-home-7.jpg" srcset="images/index/u216.jpg" alt="摩瑟咖啡">
					    </picture>
					</div>
					<div class="swiper-slide swiper-no-swiping">
						<picture>
					      <!--[if IE 9]> <video style="display: none;"> <![endif]-->
					    	<source media="(min-width: 990px)" srcset="images/index/u218.jpg">
					    	<source media="(min-width: 300px)" srcset="images/index/m-home-8.jpg">
					      <!--[if IE 9]> </video> <![endif]-->
							<img src="images/index/m-home-8.jpg" srcset="images/index/u218.jpg" alt="摩瑟绿饮">
					    </picture>
					</div>
					<div class="swiper-slide swiper-no-swiping swvideo">
						<video width="100%" height="100%">
						    <source src="video/kafe01.mp4" type="video/mp4">
						    您的浏览器不支持 video 标签。 controls
						</video>
					</div>
				</div>
				<!-- 左右控件 -->
				<div class="mose-tab visible-xs-block">
					<div class="swiper-button-prev swiper-button-white mose-prev"></div>
        			<div class="swiper-button-next swiper-button-white mose-next"></div>
				</div>
			</div>
		</div>
	<!-- 摩瑟结束 -->

	<!-- 生态 -->
	<div class="ecologybox">
		<div class="ecolconterbox">
			<div class="swiper-container ecoloswbox2" id="ecologyswiper2">
				<div class="swiper-wrapper">
					<div class="swiper-slide">
						<h2>ECOLOGICAL<br><span>FLAVOR</span></h2>
						<h3>生态贵州</h3>
						<i></i>
						<p>问巷梅林店以生态黔味餐饮为主<br>融和艺术、美酒、茶品、咖啡、起舞、音乐为一体<br>
						的餐饮美学庭院会所</p>
					</div>
					<div class="swiper-slide">
						<h2>ECOLOGICAL<br><span>FLAVOR</span></h2>
						<h3>生态贵州</h3>
						<i></i>
						<p>问巷梅林店以生态黔味餐饮为主<br>融和艺术、美酒、茶品、咖啡、起舞、音乐为一体<br>
						的餐饮美学庭院会所</p>
					</div>
					<div class="swiper-slide">
						<h2>ECOLOGICAL<br><span>FLAVOR</span></h2>
						<h3>生态贵州</h3>
						<i></i>
						<p>问巷梅林店以生态黔味餐饮为主<br>融和艺术、美酒、茶品、咖啡、起舞、音乐为一体<br>
						的餐饮美学庭院会所</p>
					</div>
				</div>				
			</div>
			<div class="ecolconter-next iconfont">&#xeb5b;</div>
			<div class="ecolinkbtn"><a href="###">READ MORE</a></div>
		</div>
		<div class="swiper-container" id="ecologyswiper1">
			<div class="swiper-wrapper">
					<div class="swiper-slide">
						<picture>
					      <!--[if IE 9]> <video style="display: none;"> <![endif]-->
					    	<source media="(min-width: 990px)" srcset="images/index/kv6_u258.jpg">
					    	<source media="(min-width: 300px)" srcset="images/index/m-home-10.jpg">
					      <!--[if IE 9]> </video> <![endif]-->
							<img src="images/index/m-home-10.jpg" srcset="images/index/kv6_u258.jpg" alt="生态">
					    </picture>
					</div>
					<div class="swiper-slide">
						<picture>
					      <!--[if IE 9]> <video style="display: none;"> <![endif]-->
					    	<source media="(min-width: 990px)" srcset="images/index/kv6_u260.jpg">
					    	<source media="(min-width: 300px)" srcset="images/index/m-home-12.jpg">
					      <!--[if IE 9]> </video> <![endif]-->
							<img src="images/index/m-home-12.jpg" srcset="images/index/kv6_u260.jpg" alt="生态">
					    </picture>
					</div>
					<div class="swiper-slide">
						<picture>
					      <!--[if IE 9]> <video style="display: none;"> <![endif]-->
					    	<source media="(min-width: 990px)" srcset="images/index/kv6_u256.jpg">
					    	<source media="(min-width: 300px)" srcset="images/index/m-home-9.jpg">
					      <!--[if IE 9]> </video> <![endif]-->
							<img src="images/index/m-home-9.jpg" srcset="images/index/kv6_u256.jpg" alt="生态">
					    </picture>
					</div>
				</div>
		</div>
	</div>
	<!-- 生态结束 -->

	<!-- 问巷美酒 -->
	<div class="winebox">
		<div class="wineconter">
			<h6 class="hidden-xs">#问巷美酒#</h6>
			<h2>ALLEY <span>WINE</span></h2>
			<div class="winetab">
				<a class="thistab" href="javascript:void(0)">红酒</a><span> &nbsp;/&nbsp;</span>
				<a href="javascript:void(0)">白酒</a><span> &nbsp;/&nbsp;</span>
				<a href="javascript:void(0)">啤酒</a><span> &nbsp;/&nbsp;</span>
				<a href="javascript:void(0)">果酒</a>
			</div>
			<p>
				Life should be wasted on beautiful thigs<br>
				<span>In The Alley Of Taste</span>
			</p>
			<a href="food.php#foodwine">READ MORE</a>
		</div>
		<div class="swiper-container" id="wineswiper">
			<div class="swiper-wrapper">
				<div class="swiper-slide swiper-no-swiping">
					<picture>
				      <!--[if IE 9]> <video style="display: none;"> <![endif]-->
				    	<source media="(min-width: 990px)" srcset="images/index/u21.jpg">
				    	<source media="(min-width: 300px)" srcset="images/index/m-home-13.jpg">
				      <!--[if IE 9]> </video> <![endif]-->
						<img src="images/index/m-home-13.jpg" srcset="images/index/u21.jpg" alt="生态">
				    </picture>
				</div>
				<div class="swiper-slide swiper-no-swiping">
					<picture>
				      <!--[if IE 9]> <video style="display: none;"> <![endif]-->
				    	<source media="(min-width: 990px)" srcset="images/index/u23.jpg">
				    	<source media="(min-width: 300px)" srcset="images/index/m-home-14.jpg">
				      <!--[if IE 9]> </video> <![endif]-->
						<img src="images/index/m-home-14.jpg" srcset="images/index/u23.jpg" alt="生态">
				    </picture>
				</div>
				<div class="swiper-slide swiper-no-swiping">
					<picture>
				      <!--[if IE 9]> <video style="display: none;"> <![endif]-->
				    	<source media="(min-width: 990px)" srcset="images/index/u25.jpg">
				    	<source media="(min-width: 300px)" srcset="images/index/m-home-15.jpg">
				      <!--[if IE 9]> </video> <![endif]-->
						<img src="images/index/m-home-15.jpg" srcset="images/index/u25.jpg" alt="生态">
				    </picture>
				</div>
				<div class="swiper-slide swiper-no-swiping">
					<picture>
				      <!--[if IE 9]> <video style="display: none;"> <![endif]-->
				    	<source media="(min-width: 990px)" srcset="images/index/u27.jpg">
				    	<source media="(min-width: 300px)" srcset="images/index/m-home-16.jpg">
				      <!--[if IE 9]> </video> <![endif]-->
						<img src="images/index/m-home-16.jpg" srcset="images/index/u27.jpg" alt="生态">
				    </picture>
				</div>
			</div>
			<!-- 左右控件 -->
			<div class="mose-tab visible-xs-block">
				<div class="swiper-button-prev swiper-button-white wine-prev"></div>
    			<div class="swiper-button-next swiper-button-white wine-next"></div>
			</div>
		</div>
	</div>
	<!-- 问巷美酒结束 -->
	<!-- 速递 -->
	<div class="sudibox">
		<!-- 产品速递 -->
		<div class="allerbar">
			<h2>GUIZHOU PRODUCTS</h2>
			<i></i>
			<div>产品推荐</div>
		</div>
		<div class="cpsdlist">
			<ul>
				<li>
					<div class="cptitle">
						<h3>翡礼红酒</h3>
						<h4>CAIWEIJI FEI LI WINE</h4>
					</div>
					<img src="images/index/kv7-1_u317.jpg" alt="翡礼红酒">
					<div class="cpconter">
						<p>一个可以放置物品的桌子，一个可以盛装一些东西的容器。桌子的一部分似乎丢失了以前的构造，融化了下面的容器。这些神秘的家具实现了在顶部和内部同时容纳物品的组合形态。</p>
						<a href="brand.php">MORE</a>
					</div>
				</li>
				<li>
					<div class="cptitle">
						<h3>问巷白酒</h3>
						<h4>CAIWEIJI FEI LI WINE</h4>
					</div>
					<img src="images/index/kv7-1_u342.jpg" alt="问巷白酒">
					<div class="cpconter">
						<p>一个可以放置物品的桌子，一个可以盛装一些东西的容器。桌子的一部分似乎丢失了以前的构造，融化了下面的容器。这些神秘的家具实现了在顶部和内部同时容纳物品的组合形态。</p>
						<a href="brand.php">MORE</a>
					</div>
				</li>
				<li>
					<div class="cptitle">
						<h3>贵州大米</h3>
						<h4>CAIWEIJI FEI LI WINE</h4>
					</div>
					<img src="images/index/kv7-1_u367.jpg" alt="贵州大米">
					<div class="cpconter">
						<p>一个可以放置物品的桌子，一个可以盛装一些东西的容器。桌子的一部分似乎丢失了以前的构造，融化了下面的容器。这些神秘的家具实现了在顶部和内部同时容纳物品的组合形态。</p>
						<a href="brand.php">MORE</a>
					</div>
				</li>
				<li>
					<div class="cptitle">
						<h3>贵州茶叶</h3>
						<h4>CAIWEIJI FEI LI WINE</h4>
					</div>
					<img src="images/index/kv7-1_u392.jpg" alt="贵州茶叶">
					<div class="cpconter">
						<p>一个可以放置物品的桌子，一个可以盛装一些东西的容器。桌子的一部分似乎丢失了以前的构造，融化了下面的容器。这些神秘的家具实现了在顶部和内部同时容纳物品的组合形态。</p>
						<a href="brand.php">MORE</a>
					</div>
				</li>
			</ul>
		</div>
		<!-- 产品速递 -->
		<!-- 新闻速递 -->
		<div class="allerbar">
			<h2>GUIZHOU PRODUCTS</h2>
			<i></i>
			<div>问巷活动</div>
		</div>
		<div class="newssd">
			<div class="news-contbox col-md-6 col-xs-12 nopd">
				<div class="newsimg col-md-6 col-xs-6 nopd"><img src="images/index/8-1_u417.jpg" alt="翡里红酒会"></div>
				<div class="newscont col-xs-6 nopd">
					<h3>翡里红酒会</h3>
					<h4>FEI RITTER WINE</h4>
					<i></i>
					<p>工作，“小塬”就是他精心设计杰出的作品。他是个热爱生活、善于观察生活的设计师。在“小塬”摆放着他从全国各地收集来的艺术品，有陶艺······</p>
					<a href="life.php">阅读更多</a>
				</div>
			</div>
			<div class="news-contbox col-md-6 col-xs-12 nopd">
				<div class="newsimg col-md-6 col-xs-6 nopd"><img src="images/index/8-2_u445.jpg" alt="蟹宴"></div>
				<div class="newscont col-xs-6 nopd">
					<h3>蟹宴</h3>
					<h4>FEI RITTER WINE</h4>
					<i></i>
					<p>工作，“小塬”就是他精心设计杰出的作品。他是个热爱生活、善于观察生活的设计师。在“小塬”摆放着他从全国各地收集来的艺术品，有陶艺······</p>
					<a href="life.php">阅读更多</a>
				</div>
			</div>
			<div class="news-contbox col-md-6 col-xs-12 nopd">
				<div class="newsimg col-md-6 col-xs-6 nopd"><img src="images/index/8-3_u461.jpg" alt="新书发布会"></div>
				<div class="newscont col-xs-6 nopd">
					<h3>新书发布会</h3>
					<h4>FEI RITTER WINE</h4>
					<i></i>
					<p>工作，“小塬”就是他精心设计杰出的作品。他是个热爱生活、善于观察生活的设计师。在“小塬”摆放着他从全国各地收集来的艺术品，有陶艺······</p>
					<a href="life.php">阅读更多</a>
				</div>
			</div>
			<div class="news-contbox col-md-6 col-xs-12 nopd">
				<div class="newsimg col-md-6 col-xs-6 nopd"><img src="images/index/8-4_u477.jpg" alt="问巷之夜音乐会"></div>
				<div class="newscont col-xs-6 nopd">
					<h3>问巷之夜音乐会</h3>
					<h4>FEI RITTER WINE</h4>
					<i></i>
					<p>工作，“小塬”就是他精心设计杰出的作品。他是个热爱生活、善于观察生活的设计师。在“小塬”摆放着他从全国各地收集来的艺术品，有陶艺······</p>
					<a href="life.php">阅读更多</a>
				</div>
			</div>
		</div>
		<!-- 新闻速递 -->
	</div>

	<!-- 尾部 -->
		<?php
        	require("inc/footer.php");
    	?>
	<!-- 尾部结束 -->
	</div>


	<script src="js/jquery-1.9.1.min.js"></script>
	<script src="js/swiper-3.4.2.jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/currency.js"></script>
	<script src="js/index.js"></script>
</body>
</html>