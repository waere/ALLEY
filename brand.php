<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no">
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
	<title>问巷-合作品牌</title>
	<link rel="stylesheet" href="css/swiper-3.4.2.min.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/iconfont.css">
	<link rel="stylesheet" href="css/reset.css">
	<link rel="stylesheet" href="css/currency.css">
	<link rel="stylesheet" href="css/pages.css">
</head>
<body>
	<!-- 头部导航 -->
		<?php
        	require("inc/header.php");
    	?>
	<!-- 头部导航结束 -->

	<!-- 顶部图片 -->
		<div class="tasbanner">
			<img class="hidden-xs" src="images/brand/p-brand-1.jpg" alt="">
			<img class="visible-xs-inline" src="images/brand/m-brand-1.jpg" alt="">
			<div class="tasbanconer">
				<h1>BRANDING</h1>
				<a href="###">合作品牌</a>
			</div>
		</div>
	
	<div id="brandapp">
	<!-- 合作品牌列表 -->
		<div class="brandlist">
			<div class="brandliswbox">
				<div class="swiper-container" id="brandlist-swiper1">
	        		<div class="swiper-wrapper" >
	            		<div class="swiper-slide" v-for="(item,index) in brandList">
	            			<div class="brandsummary" @click="brlistTap(index)">
	            				<div class="summary-img">
	            					<img :src=item.brwlogo alt="">
	            				</div>
	            				<div class="summary-cont">
	            					<h3>{{item.brtitle}}</h3>
	            					<p>{{item.brcont}}</p>
	            					<span>@ {{item.brcompany}}</span>
	            				</div>
	            			</div>
	            		</div>
	        		</div>	        		
	    		</div>
	    		<!-- 左右切换 -->
        		<div class="brandlistsw-tab1">
        			<div class="brandlistsw-prev iconfont">&#xeb5c;</div>
					<div class="brandlistsw-next iconfont">&#xe763;</div>
					<!-- 分页器 -->
        			<div class="swiper-pagination brandlistsw-pagination visible-xs-block"></div>
        		</div>
			</div>
		</div>

	<!-- 品牌内容 -->
		<div class="brandcontbox">
			<div class="brandcont">
				<div class="swiper-container" id="brandcont-swiper">
					<div class="swiper-wrapper">
						<div class="swiper-slide" v-for="item in brandList">
							<div class="brandconimg">
								<img :src=item.brblogo alt="">
							</div>
							<i></i>
							<p v-html="item.brswcon"></p>
							<a :href=item.brUrl >前往商城</a>
						</div>
					</div>
					<!-- 左右切换 -->
	        		<div class="brandcontsw-tab hidden-xs">
	        			<div class="brandcontsw-prev iconfont">&#xeb5c;</div>
						<div class="brandcontsw-next iconfont">&#xe763;</div>
						<!-- 分页器 -->
	        			<!-- <div class="swiper-pagination"></div> -->
	        		</div>
				</div>
				
			</div>
			<div class="iconfont">&#xe619;</div>
		</div>
	<!-- 产品图列表 -->
		<div class="brandpic">
			<div class="brandpicswbox">
				<div class="swiper-container" id="brandpic-swiper">
	        		<div class="swiper-wrapper">
	            		<div class="swiper-slide" v-for="item in brandList">
	            			<div class="col-md-3 col-xs-6 nopd" v-for="brimg in item.brimglist">
	            				<img class="" :src=brimg.brimg alt="">
	            			</div>
	            		</div>
	        		</div>	        		
	    		</div>
	    		<!-- 左右切换 -->
        		<div class="brandpicsw-tab2">
        			<!-- <div class="brandpicsw-prev iconfont">&#xeb5c;</div> -->
					<!-- <div class="brandpicsw-next iconfont">&#xe763;</div> -->
					<!-- 分页器 -->
        			<div class="swiper-pagination brandpicsw-pagination"></div>
        		</div>
			</div>
		</div>
	</div>




	<!-- 尾部 -->
		<?php
        	require("inc/footer.php");
    	?>
	<!-- 尾部结束 -->



	<script src="js/jquery-1.9.1.min.js"></script>
	<script src="js/vue.js"></script>
	<script src="js/swiper-3.4.2.jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/currency.js"></script>
	<script src="js/brand.js"></script>
</body>
</html>