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
	<title>问巷-生活</title>
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
			<img class="hidden-xs" src="images/life/p-life-1.jpg" alt="">
			<img class="visible-xs-inline" src="images/life/m-life-1.jpg" alt="">
			<div class="tasbanconer">
				<h1>ALLEY LIFE</h1>
				<a href="###">巷弄生活</a>
			</div>
		</div>
	<div id="lifeapp">
	<!-- 活动列表 -->
		<div class="lifelist">
			<div class="lifeliswbox">
				<div class="swiper-container" id="lifelist-swiper1">
	        		<div class="swiper-wrapper" >
	            		<div class="swiper-slide" v-for="(ls,index) in lifeList">
	            			<div class="lifesummary" @click="contShow(index)">
	            				<div class="summary-img">
	            					<img :src=ls.lsimg alt="">
	            				</div>
	            				<div class="summary-cont">
	            					<h3>{{ls.lstitle}}</h3>
	            					<p>{{ls.lssketch}}</p>
	            					<div>
	            						<span><em class="iconfont" v-html="ls.lslike"></em> {{ls.lsvomun}}</span>
	            						<time>{{ls.lstime}}</time>
	            					</div>
	            				</div>
	            			</div>
	            		</div>
	        		</div>	        		
	    		</div>
	    		<!-- 左右切换 -->
        		<div class="lifelistsw-tab1">
        			<div class="lifelistsw-prev iconfont">&#xeb5c;</div>
					<div class="lifelistsw-next iconfont">&#xe763;</div>
					<!-- 分页器 -->
        			<div class="swiper-pagination visible-xs-block"></div>
        		</div>
			</div>
		</div>

	<!-- 活动详情内容 -->
		<div class="lifedetails">
			<div class="lifed-cont">
				<div class="top-cont">
					<h2>{{lifeContent.lsbtitle}}</h2>
					<div class="lifed-cont-title">
						<h3>{{lifeContent.lstitle}}</h3>
						<div class="hidden-xs">
							<span><em class="iconfont" v-html="lifeContent.lslike"></em> {{lifeContent.lsvomun}}</span>
							<time>{{lifeContent.lstime}}</time>
						</div>
					</div>
					<i></i>
					<div v-html="lifeContent.lsdetailed"></div>					
				</div>
				<div class="swiper-container lifedetails-swiper" id="">
	        		<div class="swiper-wrapper">
	            		<div class="swiper-slide" v-for="ldcsw in lifeContent.lsdetimg">
	            			<img :src=ldcsw.img1 alt="">
	            		</div>
	            		<!-- <div class="swiper-slide">
	            			<img src="images/life/p-life-6.jpg" alt="">
	            		</div> -->
	        		</div>
	        		<!-- 左右切换 -->
	        		<div class="lifedetailssw-tab">
	        			<div class="lifedetailssw-prev iconfont">&#xeb5c;</div>
						<div class="lifedetailssw-next iconfont">&#xe763;</div>
						<!-- 分页器 -->
	        			<!-- <div class="swiper-pagination"></div> -->
	        		</div>	        		
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
	<script src="js/life.js"></script>
</body>
</html>