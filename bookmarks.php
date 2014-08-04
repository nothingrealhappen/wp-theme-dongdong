<?php
/*
Template Name: 晓风书签
*/
?>
<!--start-->
  <?php get_header(); ?>
    <style>
    .container-inner { max-width: 1920px;min-width: 100px;}
    .full-width.topbar-enabled #header { padding-top: 15px; }
    .main-inner {width: 100%}
    #primary {display: none;}
	.bks_box_content {
		font: 13px 'Microsoft YaHei';
		border-radius: 5px;
		background-color: white;
		height: 271px;
		width:284px;
		border: 1px solid #DFDFDF;
	}
	.bks_main_title {
		height: 37px;
		color: #0160A0;
		font: 24px 'Microsoft Yahei';
		padding: 40px 0 10px 20px;
	}
	.bks_box_shadow {
		background: url(http://liyaodong.sinaapp.com/bookmarks/images/sprite.png) no-repeat;
		height: 13px;
	}
	.bks_des_title {
		color: #FDA43C;
		font-size: 22px;
		margin: 5px 0 0 15px;
	}
	.bks_des_title a { font-size:14px; color:#8101b7; margin-left:10px; text-decoration:none; }
	.des_content {
		color: #4E4E51;
		margin: 5px 0 0 15px;
	}
	#bks_box1 {	height: 271px; width:284px;	margin: 0px 53px 32px 0; float:left; }
	#bks_box2 {	height: 271px; width:284px;	margin: 0px 53px 32px 0; float:left; }
	#bks_box3 {	height: 271px; width:284px;float:left; }
	.bks_box1_pic {
		height: 180px;
		width: 284px;
		background: url(http://liyaodong.sinaapp.com/bookmarks/images/webNav.png) no-repeat center center;
	}
	.bks_box2_pic {
		height: 180px;
		width: 284px;
		background: url(http://liyaodong.sinaapp.com/bookmarks/images/messageCenter.png) no-repeat center center;
	}
	.bks_box3_pic {
		height: 180px;
		width: 284px;
		background: url(http://liyaodong.sinaapp.com/bookmarks/images/qplusTool.png) no-repeat center center;
	}
	#about_bks_bg {
		width:100%;
		background-color:#f8f8f8;
              margin:0 auto;
	}
	#about_bks {
		width:960px;
		margin:0 auto;
                text-align:left;
	}
	.bks_step_title { color: #FDA43C; font-size: 22px; margin: 5px 0 0 15px;}
	.bks_step_content {text-indent: 2em;margin: 10px 5px ;font-size:16px;}
	.bks_step_content img {	display: block; margin: 0 auto;  margin-top:15px; text-align: center; }
	.bks_pic_border {
		border: 1px solid #DDD;
		background-color: #F3F3F3;
		padding: 7px;
		-moz-border-radius: 3px;
		-khtml-border-radius: 3px;
		-webkit-border-radius: 3px;
		border-radius: 3px;
	}
	.lyd_comment {background-color: rgba(255,255,255,.6); width: 1024px; margin: 0 auto; padding: 20px;border-radius: 5px;}
  </style>
  <div style="height: 320px; width:959px;position: relative;margin: 0 auto;">
  	<a target="_blank" href="https://github.com/liyaodong/xfbookmarks"><img style="position: absolute; z-index: 100; top: 2px; left: 0; border: 0;" src="https://camo.githubusercontent.com/c6625ac1f3ee0a12250227cf83ce904423abf351/68747470733a2f2f73332e616d617a6f6e6177732e636f6d2f6769746875622f726962626f6e732f666f726b6d655f6c6566745f677261795f3664366436642e706e67" alt="Fork me on GitHub" data-canonical-src="https://s3.amazonaws.com/github/ribbons/forkme_right_gray_6d6d6d.png"></a>
	<div style="margin:0 auto; background: url(http://liyaodong.sinaapp.com/bookmarks/images/banner.png) no-repeat center 0; height:340px; width:959px;	border: 2px solid white; border-radius: 5px; box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2); position: relative; top: 0px; left: 50%; margin-left: -483px;">
		<a href="http://liyaodong.sinaapp.com/bookmarks/bookmarks.rar" style="height: 49px; width: 188px; position: relative; left: 700px; top: 278px; display: block;"></a>
	</div><!--banner end-->
  </div><!--bannerbg end-->
  <div style="margin:0 auto;width:100%;text-align:center;"><!--IE main align center-->
  <div style="width:960px; margin:0 auto; height:380px;text-align:left;">
      <div class="bks_main_title">晓风书签项目介绍</div>
	  <div id="bks_box1">
		  <div class="bks_box_content">
			<div class="bks_box1_pic"></div>
			<div class="bks_des_title">在线书签<a href="http://liyaodong.sinaapp.com/bookmarks/bookmarks.html" target="_blank">点击进入</a></div>
			<div class="des_content">在线书签是我积累几年的书签列表，在此仅供临时在线查看，推荐下载至本地并导入浏览器</div>
		  </div>
		  <div class="bks_box_shadow"></div>
	  </div><!--bks_box1 end-->
	  <div id="bks_box2">
		  <div class="bks_box_content">
			<div class="bks_box2_pic"></div>
			<div class="bks_des_title">书签文件<a href="http://liyaodong.sinaapp.com/bookmarks/bookmarks.rar">点击下载</a></div>
			<div class="des_content">推荐下载书签并导入浏览器中，用起来更加直观舒适。内含目录20余个，共计800余书签</div>
		  </div>
		  <div class="bks_box_shadow"></div>
	  </div><!--bks_box1 end-->
	  <div id="bks_box3">
		  <div class="bks_box_content">
			<div class="bks_box3_pic"></div>
			<div class="bks_des_title">传送门<a href="http://liyaodong.sinaapp.com/csm/" target="_blank">点击进入</a></div>
			<div class="des_content">晓风博客传送门是晓风博客为移动互联网用户编写的导航网站，内设多个栏目，长期更新</div>
		  </div>
		  <div class="bks_box_shadow"></div>
	  </div><!--bks_box1 end-->
  </div><!--main_content end-->
  <div id="about_bks_bg">
	  <div id="about_bks">
	  	<div class="bks_main_title">书签导入视频教程</div>
	  	<embed src="http://player.youku.com/player.php/sid/XNTk5MzQ5NDYw/v.swf" allowFullScreen="true" quality="high" width="960" height="800" align="middle" allowScriptAccess="always" type="application/x-shockwave-flash"></embed>
		<div class="bks_main_title">晓风书签使用说明（以Chrome浏览器为例）</div>
		<div id="about_bks_content">
			<div class="bks_step_title">Step 1</div>
			<div class="bks_step_content">下载晓风书签文件，并解压到桌面。</br><a href="http://liyaodong.sinaapp.com/bookmarks/bookmarks.rar"><img src="http://liyaodong.sinaapp.com/bookmarks/images/download.png" /></a></div>
			<div class="bks_step_title">Step 2</div>
			<div class="bks_step_content">打开Chrome浏览器，按快捷键Ctrl + Shift + O 打开书签管理器，先将原有书签全部删除。然后点击整理-从HTML文件导入书签，然后选中刚刚解压的bookmarks.html文件，点击确定<br/><img src="http://liyaodong.sinaapp.com/bookmarks/images/import.png" class="bks_pic_border" /></div>
			<div class="bks_step_title">Step 3</div>
			<div class="bks_step_content">导入成功，是不是还沉浸在导入的喜悦中呢？^_^ 很遗憾，一切步骤都已完成。<br/><img src="http://liyaodong.sinaapp.com/bookmarks/images/screenshot.png" class="bks_pic_border" /></div>
		</div><!--about_bks_content end--> 
						  <!-- JiaThis Button BEGIN -->
                          <div id="jiathis_style_32x32" style="padding-left:220px;padding-right:220px; margin-top:15px; height:90px;">
                            <p style="text-align:center;margin-left:0;width:100%;font-size:16px;margin-bottom:10px;">喜欢本书签，请点击下面的分享，分享给你的好友吧^_^...</p>
                          <a class="jiathis_button_qzone"></a>
                          <a class="jiathis_button_tsina"></a>
                          <a class="jiathis_button_tqq"></a>
                          <a class="jiathis_button_renren"></a>
                          <a class="jiathis_button_kaixin001"></a>
                          <a class="jiathis_button_baidu"></a>
                          <a class="jiathis_button_taobao"></a>
                          <a class="jiathis_button_tsohu"></a>
                          <a class="jiathis_button_douban"></a>
                          <a class="jiathis_button_xiaoyou"></a>
                          <a class="jiathis_button_hi"></a>
                          <a class="jiathis_button_twitter"></a>
                          <a class="jiathis_button_fb"></a>
                          <a href="http://www.jiathis.com/share" class="jiathis jiathis_txt jiathis_separator jtico jtico_jiathis" target="_blank"></a>
                          </div>
                          <script type="text/javascript" >
                          var jiathis_config={
                                  summary:"",
                                  hideMore:false
                          }
                          </script>
                          <script type="text/javascript" src="http://v3.jiathis.com/code/jia.js" charset="utf-8"></script>
                          <!-- JiaThis Button END -->
	  </div><!--about_bks end-->
  </div><!--about_bks_bg end-->
  <div class="lyd_comment">
  <?php comments_template(); ?>
	</div>
</div>

<?php get_footer(); // Loads the footer.php template. ?>
