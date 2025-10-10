<script>
document.addEventListener("DOMContentLoaded", function() {
  const sideFooter = document.querySelector(".new_footer_2025_side");
  const footer = document.querySelector("footer.new_footer_2025");
  if (!footer) return;

  const path = window.location.pathname;

  // /column/、/interview/、/member/ が含まれる場合は非表示 & クラス追加
  if (path.includes("/column/") || path.includes("/interview/") || path.includes("/member/")) {
    if (sideFooter) sideFooter.style.display = "none";
    footer.classList.add("new_footer_for_column");
  }
});
</script>





<!-- 202509 new_footer -->
		<footer class="new_footer_2025">
			<div class="inner">
				<!-- side -->
				<div class="new_footer_2025_side">
					<div class="box">
						<p class="new_footer_side_ttl">ニュースレターを登録する</p>
						<p class="new_footer_side_txt">インドネシアへの進出支援や、インドネシア国内におけるWebマーケティング支援、あるいはインドネシア人向けコミュニティの運営をしていることから、インドネシアでビジネスを行うために重要なトピックに厳選してニュースをお届けすることができます。</p>
						<p class="new_footer_side_btn"><a href="<?php echo home_url(); ?>/newsletter/">無料で登録する</a></p>
					</div>
					<div class="box">
						<p class="new_footer_side_ttl">お役立ち資料をダウンロードする</p>
						<p class="new_footer_side_txt">カケモチの資料、導入事例集、お役立ち資料を ダウンロードしていただくことができます。インドネシア進出をご検討中の企業様にとっては役に立つ資料だと自信を持ってお届けしています。資料をご覧になられてのご質問はいつでもお気軽にご連絡ください。</p>
						<p class="new_footer_side_btn"><a href="<?php echo home_url(); ?>/white-paper-download/">無料でDLする</a></p>
					</div>
				</div>
				<!-- //side -->

				<!-- contents -->
				<div class="new_footer_2025_contents">
					<div class="new_footer_2025_contents_top">
						<div class="in">
							<div class="box">
								<p class="new_footer_ttl"><a href="<?php echo home_url(); ?>/founding-services/">進出支援</a></p>
								<ul class="new_footer_list">
									<li><a href="<?php echo home_url(); ?>/founding-services/">法人設立</a></li>
									<li><a href="<?php echo home_url(); ?>/founding-services/founding-representative-office/">駐在員事務所設立</a></li>
									<li><a href="<?php echo home_url(); ?>/founding-services/offshore-development/">オフショア開発</a></li>
									<li><a href="<?php echo home_url(); ?>/founding-services/market-research/">市場調査</a></li>
									<li><a href="<?php echo home_url(); ?>/founding-services/survey/">アンケート調査</a></li>
									<li><a href="<?php echo home_url(); ?>/halal-business-services/">ハラル対応支援サービス</a></li>
								</ul>
							</div>
							<div class="box">
								<p class="new_footer_ttl"><a href="<?php echo home_url(); ?>/founding-services/">管理業務支援</a></p>
								<ul class="new_footer_list">
									<li><a href="<?php echo home_url(); ?>/founding-services/accounting/">会計・経理業務</a></li>
									<li><a href="<?php echo home_url(); ?>/founding-services/human-resources/">人事・労務業務</a></li>
									<li><a href="<?php echo home_url(); ?>/founding-services/online-secretary/">総務・秘書業務</a></li>
									<li><a href="<?php echo home_url(); ?>/founding-services/translation/">通訳・翻訳</a></li>
									<li><a href="<?php echo home_url(); ?>/founding-services/second-opinion/">セカンドオピニオン</a></li>
									<li><a href="<?php echo home_url(); ?>/founding-services/government-subsidy/">補助金支援サービス</a></li>								
								</ul>
							</div>
							<div class="box">
								<p class="new_footer_ttl"><a href="<?php echo home_url(); ?>/webmarketing-services/">集客支援</a></p>
								<ul class="new_footer_list">
									<li><a href="<?php echo home_url(); ?>/webmarketing-services/support-web-marketing/">Webマーケ顧問</a></li>
									<li><a href="<?php echo home_url(); ?>/webmarketing-services/internet-advertising-agency/">広告運用</a></li>
									<li><a href="<?php echo home_url(); ?>/webmarketing-services/instagram-ads/">インスタ広告運用</a></li>
									<li><a href="<?php echo home_url(); ?>/webmarketing-services/influencer-marketing/">インフルエンサーマーケティング</a></li>
									<li><a href="<?php echo home_url(); ?>/webmarketing-services/remarketing/">リマーケティング広告</a></li>
									<li><a href="<?php echo home_url(); ?>/webmarketing-services/content-marketing/">コンテンツマーケティング</a></li>
									<li><a href="<?php echo home_url(); ?>/webmarketing-services/inbound-services/">訪日インバウンド</a></li>
									<li><a href="<?php echo home_url(); ?>/webmarketing-services/access-analysis/">アクセス解析</a></li>
								</ul>
							</div>
							<div class="box">
								<p class="new_footer_ttl"><a href="<?php echo home_url(); ?>/sales-services/">営業支援</a></p>
								<ul class="new_footer_list">
									<li><a href="<?php echo home_url(); ?>/sales-services/">販売代理支援</a></li>
									<li><a href="<?php echo home_url(); ?>/sales-services/employer-of-record/">雇用代行</a></li>
									<li><a href="<?php echo home_url(); ?>/sales-services/affluent-market-sales/">富裕層向け販売支援</a></li>
									<li><a href="<?php echo home_url(); ?>/sales-services/test-marketing/">テスト販売</a></li>
									<li><a href="<?php echo home_url(); ?>/sales-services/cross-border-e-commerce/">越境EC</a></li>
									<li><a href="<?php echo home_url(); ?>/sales-services/live-commerce/">ライブコマース</a></li>
									<li><a href="<?php echo home_url(); ?>/sales-services/cross-border-e-commerce/">化粧品販売</a></li>
								</ul>
							</div>
						</div>
						<div class="in">
							<div class="box">
								<p class="new_footer_ttl"><a href="#" class="no_link">料金表</a></p>
								<ul class="new_footer_list">
									<li><a href="<?php echo home_url(); ?>/column/price-list-for-japan/">インドネシア進出支援</a></li>
									<li><a href="<?php echo home_url(); ?>/column/price-list-for-indonesia/">駐在員向けサービス</a></li>
								</ul>
							</div>
							<div class="box">
								<div class="box_in mb40">
									<p class="new_footer_ttl"><a href="#" class="no_link">採用</a></p>
									<ul class="new_footer_list">
										<li><a href="<?php echo home_url(); ?>/careers/#careers_i">インドネシア人の採用</a></li>
										<li><a href="<?php echo home_url(); ?>/careers/#careers_j">日本人の採用</a></li>
									</ul>
								</div>
								<div class="box_in">
									<p class="new_footer_ttl"><a href="#" class="no_link">社風・メッセージ</a></p>
									<ul class="new_footer_list">
										<li><a href="<?php echo home_url(); ?>/company/company-name/">社名の由来</a></li>
										<li><a href="<?php echo home_url(); ?>/company/message/">代表メッセージ</a></li>
										<li><a href="<?php echo home_url(); ?>/company/company-official-language/">社内公用語</a></li>
									</ul>
								</div>
							</div>
							<div class="box">
								<p class="new_footer_ttl"><a href="#" class="no_link">お役立ち情報</a></p>
								<ul class="new_footer_list">
									<li><a href="<?php echo home_url(); ?>/column/">コラム記事</a></li>
									<li><a href="<?php echo home_url(); ?>/member/">会員記事</a></li>
									<li><a href="<?php echo home_url(); ?>/interview/">インタビュー記事</a></li>
									<li><a href="<?php echo home_url(); ?>/white-paper-download/">お役立ち資料</a></li>
								</ul>
							</div>
							<div class="box">
								<p class="new_footer_ttl"><a href="#" class="no_link">個人向け移住支援</a></p>
								<ul class="new_footer_list">
									<li><a href="#">作成中</a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
				<!-- //contents -->
			</div>

			<div class="new_footer_2025_contents_bottom">
				<div class="in">
					<div class="box">
						<p class="logo"><a href="<?php echo home_url(); ?>/"><img src="<?php echo get_theme_file_uri(); ?>/img/common/new_footer_logo.png" alt="カケモチ"></a></p>
						<ul class="new_footer_bottom_list">
							<li><a href="<?php echo home_url(); ?>/company/">会社概要</a></li>
							<li><a href="<?php echo home_url(); ?>/member_login/">ログイン</a></li>
							<li><a href="<?php echo home_url(); ?>/company/nda/">秘密保持規約</a></li>
							<li><a href="<?php echo home_url(); ?>/company/privacy/">プライバシーポリシー</a></li>
						</ul>
					</div>
					<p class="copy">Copyright &copy; Kakemochi Co., Ltd.</p>
				</div>
			</div>
		</footer>
		<!-- //202509 new_footer -->
<!-- footer end -->
<!--固定LINE-->
<div class="footer_line">
	<a href="https://lin.ee/BM45FJY" target="_blank"><img src="<?php echo get_theme_file_uri(); ?>/img/common/footer_line.png" alt="LINE"></a>
</div>
<!--//固定LINE-->
<!--固定サイドバナー-->
<div class="fix_side">
	<div class="fix_side_banner fix_side02">
		<a href="https://lin.ee/BM45FJY" target="_blank">
			<img alt="LINEで無料相談をする" class="pc" src="<?php echo get_theme_file_uri(); ?>/img/common/side_line_brn.png">
			<img alt="LINEで相談する" class="sp" src="<?php echo get_theme_file_uri(); ?>/img/common/side_line_brn_sp.png">
		</a>
	</div>
	<div class="fix_side_banner fix_side01">
		<a href="https://meetings.hubspot.com/kakemochi-yanagisawa/contact" class="pc">
			<img alt="プロに無料相談をする" class="pc" src="<?php echo get_theme_file_uri(); ?>/img/common/side_contact_brn.png">
		</a>
		<a href="https://cta-na2.hubspot.com/web-interactives/public/v1/track/click?encryptedPayload=AVxigLJDXEz3QzMll771JRbo0I419DhRTm%2F0QaVNmA7U5KhSXySwyQeiDAZcjMBDGPp98gb5zpZ%2F8dipWWGtAre7qMTQQEAjdyrb19zdSWxAlWnVv%2BpjfrWUdJxNrQc41AOutykysO4q3uj5vNjkJuR7DbS8ssmJGayQBBFaGSh7R0QR%2BVLaomVwv5SsoV7bc3CTfBPvTur6KirIU7LYZ8aj&portalId=20720568&webInteractiveId=484401433330&webInteractiveContentId=223405743845&containerType=SLIDE_IN&pageUrl=https%3A%2F%2Fkakemochi.co.jp%2Fcolumn%2Ftinjauan-umum-prosedur-masuk-indonesia%2F&pageTitle=%E3%82%A4%E3%83%B3%E3%83%89%E3%83%8D%E3%82%B7%E3%82%A2%E5%85%A5%E5%9B%BD%E6%89%8B%E7%B6%9A%E3%81%8D%E3%81%AB%E5%BF%85%E8%A6%81%E3%81%AA%E6%BA%96%E5%82%99%E3%81%A8%E5%88%B0%E7%9D%80%E5%BE%8C%E3%81%AE%E6%B5%81%E3%82%8C+%7C+%E3%82%A4%E3%83%B3%E3%83%89%E3%83%8D%E3%82%B7%E3%82%A2%E9%80%B2%E5%87%BA%E6%94%AF%E6%8F%B4%E3%81%AA%E3%82%89%E3%82%AB%E3%82%B1%E3%83%A2%E3%83%81%E6%A0%AA%E5%BC%8F%E4%BC%9A%E7%A4%BE&referrer=&userAgent=Mozilla%2F5.0+%28Macintosh%3B+Intel+Mac+OS+X+10_15_7%29+AppleWebKit%2F537.36+%28KHTML%2C+like+Gecko%29+Chrome%2F140.0.0.0+Safari%2F537.36&hutk=0b0e895bf637e4c76ae94ccf6e40f092&hssc=222650948.17.1758191014829&hstc=222650948.0b0e895bf637e4c76ae94ccf6e40f092.1746238627899.1758187083520.1758191014829.616&hsfp=1144652007&contentType=blog-post" class="sp" target="_blank"><img alt="WhatsAppで相談する" class="sp" src="<?php echo get_theme_file_uri(); ?>/img/common/side_wapp_brn_sp.png"></a>
	</div>
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
