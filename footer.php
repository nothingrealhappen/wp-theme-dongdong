<?php
/**
 * Footer Template
 *
 * The footer template is generally used on every page of your site. Nearly all other
 * templates call it somewhere near the bottom of the file. It is used mostly as a closing
 * wrapper, which is opened with the header.php file. It also executes key functions needed
 * by the theme, child themes, and plugins. 
 *
 * @package Hybrid
 * @subpackage Template
 */
?>
		<?php do_atomic( 'after_container' ); // hybrid_after_container ?>

	</div><!-- #container -->

</div><!-- #body-container -->
    <div id="footer-container">

        <?php do_atomic( 'before_footer' ); // hybrid_before_footer ?>
        <div id="footer">
            <div class="social">
                <a href="http://846400221.qzone.qq.com" target="_blank" class="qzone"><span class="icon"></span>QQ空间</a>
                <a href="http://weibo.com/lyd19941020" target="_blank" class="sina"><span class="icon"></span>新浪微博</a>
                <a href="http://t.qq.com/lyd19941020" target="_blank" class="tencent"><span class="icon"></span>腾讯微博</a>
                <a href="https://github.com/liyaodong" target="_blank" class="github"><span class="icon"></span>Github</a>
                <a href="javascript:void(0);" target="_blank" class="wechat">
                    <span class="icon"></span>微信
                    <div class="wechatqr">
                        <span class="qrcode"></span>
                    </div>
                </a>
            </div>
            <?php do_atomic( 'footer' ); // hybrid_footer ?>

        </div><!-- #footer -->

        <?php do_atomic( 'after_footer' ); // hybrid_after_footer ?>

    </div><!-- #footer-container -->

<?php do_atomic( 'after_html' ); // hybrid_after_html ?>
<?php wp_footer(); // wp_footer ?>
	<!--back to top-->
        <script type="text/javascript">
        jQuery(document).ready(function($){
            $('body').append('<div id="back-top"><a href="#dingbu"><p id="back-top-text">来，老衲带你返回顶部~</p></a></div> ');        
                    // hide #back-top first
                    $("#back-top").hide();
                    $("#back-top-text").hide();
                    // fade in #back-top
                    $(function () {
                            $(window).scroll(function () {
                                    if ($(this).scrollTop() > 100) {
                                            $('#back-top').fadeIn();
                                            } else {
                                            $('#back-top').fadeOut();
                                            $("#back-top-text").hide();
                                            }
                                    });
                    
                                    // scroll body to 0px on click
                                    $('#back-top a').click(function () {
                                            $('body,html').animate({
                                            scrollTop: 0
                                            }, 800);
                                            return false;
                                    });
                            });
                            $("#back-top").mousemove(function(){
                                $("#back-top-text").fadeIn();
                            });
                            $("#back-top").mouseout(function(){
                                $("#back-top-text").fadeOut();
                            });
        <?php 
            // 给文章所有链接匹配图标样式
            if ( is_singular() ) { 
                ?>
                    $('.entry-content a').each(function(){
                        // 去除包含img的链接
                        if($(this).find('img').length == 0) {
                            $(this).prepend('<span class="icon-paperplane"></span>');
                        }
                    });
                <?php
            }
        ?>
        });
        </script>
	<!--back to top end -->
</body>
</html>