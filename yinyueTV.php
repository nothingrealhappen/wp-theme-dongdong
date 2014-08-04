<?php
/*
Template Name: 音悦TV
*/
?>
 <?php get_header(); ?>
  <!--Container-->
<style>
  body {
    background: url("<?php echo get_stylesheet_directory_uri().'/images/livetv.jpg';?>") center center;
    background-attachment: fixed;
  }
  .player_area {margin: 0 auto;text-align:center;}
  #primary {display: none;}
  .lyd_comment {background-color: rgba(255,255,255,.9); padding: 20px;border-radius: 5px;}
</style>
    
          <!--Content-->
          <div class="player_area">
                          <p style="margin-bottom: 10px;text-align:centerfont-weight: bold;font-family: 'microsoft yahei';color: #ef8270;">晓风博客❤音悦TV：<span style="color: #ef70af;">liyaodong.com/</span><span style="color: #c170ef;">yinyuetv</span></p>
                          <iframe src="http://www.yinyuetai.com/baidu/index" width="800" height="450" scrolling="no" frameborder="0"></iframe>
                          <!-- JiaThis Button BEGIN -->
                          <div id="jiathis_style_32x32" style="padding-left:300px;margin-top:30px;">
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
                          <p style="font-size: 14px;width: 100%;color: #A7A7A7;font-family: ;display: block;margin-top: 70px;margin-bottom: 10px;">分享↑是一种美德，评论↓是一种智慧，晓风东东欢迎大家下次再来！</p>
                          
          <!--Content End-->
  <!--Container End-->
  <div class="lyd_comment">
    <?php comments_template(); ?>
  </div>
</div>
<?php get_footer(); // Loads the footer.php template. ?>