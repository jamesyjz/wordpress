<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content after
 *
 * @package futureis404
 * @since futureis404 0.1
 */
?>

	</div><!-- #main -->

	<footer id="colophon" role="contentinfo">

	</footer><!-- #colophon -->
</div><!-- #page -->
</div><!--mainpage-->
<div id="foot">
		<div id="site-generator">
			<?php do_action( 'futureis404_credits' ); ?>
			<a href="<?php echo esc_url( __( 'http://wordpress.org/', 'futureis404' ) ); ?>" title="<?php esc_attr_e( 'Semantic Personal Publishing Platform', 'futureis404' ); ?>" rel="generator"><?php printf( __( '由%s强力驱动', 'futureis404' ), 'WordPress' ); ?></a>
			<span class="sep"> | </span>
<!--请不要去除版权信息 谢谢！-->	
<?php printf( __( '主题: %1$s by %2$s', 'SimpleBlue' ), 'BlueWave', '<a href="http://futureis404.info/" rel="designer">
Atotos yuvaika
</a>' ); ?>	
<!--支付宝收款代码开始 可删除-->
<br><a href='http://me.alipay.com/futureis404'> <img src='https://img.alipay.com/sys/personalprod/style/mc/btn-index.png' /> </a><br>
<b style="color:red">你好！如果你喜欢这个主题，可以通过点击上面的图标向我付款，你可以在主题文件夹的foot.php 中删除这些内容</b>
<!--支付宝收款代码结束 可删除-->
		</div>
</div>

<!--[if IE 6]>
<script src="http://letskillie6.googlecode.com/svn/trunk/letskillie6.zh_CN.pack.js"></script>
<![endif]-->

<?php wp_footer(); ?>
</body>
</html>