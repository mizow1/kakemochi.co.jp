<footer id="footer" class="area">
	<div class="inner footer_new_box">
		<div class="footer_new_l">
			<script src="https://js.hsforms.net/forms/embed/20720568.js" defer></script>
			<div class="hs-form-frame" data-region="na1" data-form-id="98edf93b-9fd9-49db-9cd6-0e1f2a525b29" data-portal-id="20720568"></div>
		</div>

		<div class="footer_new_r">
		<p class="footer_new_ttl">フッターまでご覧いただき<br class="sp">ありがとうございます</p>
		<p class="footer_new_txt">フッターのこの部分までたどり着くユーザーさんは、全体の10％程度しかいないです。本当にわずかです。<br class="pc">でも、ここまでたどり着いて、この文章を読んでいただいているお客様は弊社にとって特別なお客様で<br class="pc">とても熱心に弊社のコラム記事やサービスページを読んでいただいた方なので、<br class="pc">きっとお仕事をご一緒したら相性が良いのではないかと勝手にワクワクしています。<br><br>
			是非一度私たちに貴社が抱えるインドネシア進出やインドネシア人集客についてのお悩みを相談してみませんか？<br><br>
			「今は相談するまでもないかも」と思っても、相談してみると意外と多くの気付きや参考情報を得れたりします。<br class="pc">こうやって出会えたことが奇跡なので、1秒でも迷ったらお問い合わせをください。<br><br>
			初回のお問い合わせは無料なのと、お打ち合わせは代表の柳沢が誠心誠意お話させていただきます。</p>
			<p class="footer_new_btn"><a href="<?php echo home_url(); ?>/contact/"><img src="<?php echo get_theme_file_uri(); ?>/img/common/footer_btn.png" alt="お問い合わせはこちら"></a></p>

			<div class="footer_new_bottom">
				<p class="logo"><a href="<?php echo home_url(); ?>"><img alt="カケモチ" src="<?php echo get_theme_file_uri(); ?>/img/common/footer_logo.png"></a></p>

				<p class="ttl">カケモチ株式会社 〒160-0023<br>
				東京都新宿区西新宿1-4-11 全研プラザ SPACES新宿
			</p>
			</div>

			<p class="copy">Copyright <span lang="en">&copy;</span> Kakemochi Co., Ltd.<br><br><a href="https://tricruise.id/">PT. TRICRUISE MARKETING INDONESIA</a></p>

			</div>
	</div>
</footer>
<!-- footer end -->
<!--固定LINE-->
<div class="footer_line">
	<a href="https://lin.ee/BM45FJY" target="_blank"><img src="<?php echo get_theme_file_uri(); ?>/img/common/footer_line.png" alt="LINE"></a>
</div>
<!--//固定LINE-->
<!--固定サイドバナー-->
<div class="fix_side">
	<div class="fix_side_banner fix_side02"><a href="https://lin.ee/BM45FJY" target="_blank"><img src="<?php echo get_theme_file_uri(); ?>/img/common/side_line_brn.png" alt="LINEで無料相談をする" class="pc"><img src="<?php echo get_theme_file_uri(); ?>/img/common/side_line_brn_sp.png" alt="LINEで無料相談をする" class="sp"></a></div>
	<div class="fix_side_banner fix_side01"><a href="https://meetings.hubspot.com/kakemochi-yanagisawa/contact"><img src="<?php echo get_theme_file_uri(); ?>/img/common/side_contact_brn.png" alt="プロに無料相談をする" class="pc"><img src="<?php echo get_theme_file_uri(); ?>/img/common/side_contact_brn_sp.png" alt="プロに無料相談をする" class="sp"></a></div>
</div>
<!--//固定サイドバナー-->

<?php 
// if($args['sidebar']){
// 	get_template_part('/parts/main/d/'.$args['sidebar']);
// }
?>

<?php get_template_part('structured'); ?>
<?php 
//ログインした通知
$login_notice = isset($_SESSION['login_begin']) && $_SESSION['login_begin'] ? '<div class="login_notice">ログインしました</div>' : '';
if(isset($_SESSION['login_begin'])) {
    unset($_SESSION['login_begin']);
}//1回通知するだけでいいのでアラート作成後は破棄
echo $login_notice;
 ?>
<?php
if(isset($_GET['a']) && $_GET['a']){
	global $template;
	$template_name = 'templatename:'.basename($template, '.php');
	echo $template_name;
}
 ?>
