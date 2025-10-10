<?php
/*
Template Name: トップページ
*/
?>

<?php get_header(); ?>
<body>
<?php get_template_part('after_open_body'); ?>
	<div id="wrapper">
<?php get_template_part('gnav'); ?>
<?php 
if(get_the_post_thumbnail_url($post->ID, "full")){
	$mv = get_the_post_thumbnail_url($post->ID, "full");
	$mv_css =  ' style="background:url('.$mv.')"';
}
?>		

			<!-- index_new_visual -->
			<main id="index_new">
			<article>
			<section class="index_renew_visual area">
				<div class="inner">
					<p class="index_renew_ttl">海外進出はカジュアルに<br><span class="orange">リスクを抑えたインドネシア進出</span></p>
					<p class="txt">外資法人の進出ハードルが高いインドネシアにおいては<br>段階的な進出ステップを踏むことをおすすめしています</p>
				</div>
			</section>
			<!-- index_new_visual -->

			<!-- インドネシアへの進出支援 -->
        	<section class="index_renew_support area">
			<div class="inner1000 index_renew_support_list_overflow">
						<ul class="index_renew_support_list">
							<li>
								<p class="step"><img src="<?php echo get_theme_file_uri(); ?>/img/index_new02/step01.png" alt="STEP1" width="78" height="78"></p>
								<p class="ttl">市場調査</p>
								<p class="icon"><img src="<?php echo get_theme_file_uri(); ?>/img/index_new02/img02_01.png" alt="icon" width="79" height="71"></p>
								<p class="txt"><span class="orange">●</span>現地視察<br>
								<span class="orange">●</span>アンケート調査<br>
								<p class="btm">会社を作らない</p>
							</li>
							<li class="arrow"><img src="<?php echo get_theme_file_uri(); ?>/img/index_new02/arrow01.png" alt="" width="22" height="36"></li>
							<li>
								<p class="step"><img src="<?php echo get_theme_file_uri(); ?>/img/index_new02/step02.png" alt="STEP2" width="78" height="78"></p>
								<p class="ttl">雇用代行</p>
								<p class="icon"><img src="<?php echo get_theme_file_uri(); ?>/img/index_new02/img02_02.png" alt="icon" width="79" height="71"></p>
								<p class="txt"><span class="orange">●</span>テスト営業<br>
								<span class="orange">●</span>テストマーケティング</p>
								<p class="btm">会社を作らない</p>
							</li>
							<li class="arrow"><img src="<?php echo get_theme_file_uri(); ?>/img/index_new02/arrow01.png" alt="" width="22" height="36"></li>
							<li>
								<p class="step"><img src="<?php echo get_theme_file_uri(); ?>/img/index_new02/step03.png" alt="STEP3" width="78" height="78"></p>
								<p class="ttl">会社設立</p>
								<p class="icon"><img src="<?php echo get_theme_file_uri(); ?>/img/index_new02/img02_03.png" alt="icon" width="79" height="71"></p>
								<p class="txt"><span class="orange">●</span>内資設立<br>
								<span class="orange">●</span>外資設立<br>
								<p class="btm orange">会社を作る</p>
							</li>
						</ul>
					</div>
				</section>
			<!-- //インドネシアへの進出支援 -->

			<div style="margin-top: 50px;"></div>
			<!-- インドネシア進出へ向けたウェビナーの開催 -->
			<section class="index_renew_webinar area notpbt">
				<div class="inner1000">
					<div class="box">
						<div class="txt_box">
							<p class="ttl orange">【10月15日】無料のオンラインセミナー</p>
							<p class="txt">外資の進出ハードルが高いインドネシアで<br>法人を設立せずに参入する方法を解説します。</p>
							<a href="/seminar/overseas-expansion-to-indonesia/" class="txt_link">詳しくはこちら ></a>
							<a href="/seminar/overseas-expansion-to-indonesia/"><p class="btm">セミナー参加者限定の<br class="sp">無料相談会あり</p></a>
						</div>
						<p class="img"><a href="/seminar/overseas-expansion-to-indonesia/"><img src="<?php echo get_theme_file_uri(); ?>/img/column/seminar_japan_banner.png" alt="" width="600" height="294"></a></p>
					</div>
				</div>
			</section>
			<!-- //インドネシア進出へ向けたウェビナーの開催 -->
			<div style="margin-bottom: 100px;"></div>
			 
			
			<!-- //段階的なインドネシア進出 -->
			<div id="netad_contId02" class="netad_contId02">
				<h3 class="new_ttl01">段階的なインドネシア進出とは</h3>
				<div class="id_textpage">
				<dl>
					<dt><img src="https://kakemochi.co.jp/wp/wp-content/themes/kakemochi/img/internet-advertising-agency/photo01.png" alt="まずはインドネシア市場についての解像度を高める"></dt>
					<dd>
						<h3 class="netad_sub01 netadnum01"><span class="netad_sub01_num">1</span>まずはインドネシア市場についての解像度を高める</h3>
						<p class="txt">東南アジアで最も魅力的なインドネシア市場ですが、国が変われば嗜好性やトレンドも変わるので、貴社の商品やサービスがどの程度インドネシア人に受け入れられるかを確認しないといけません。<br>インドネシア人見込み客についてアンケート調査を行ったり、グループインタビューを行ったりしてインドネシア市場に対しての理解を深めていきます。</p>
					</dd>
				</dl>
				
				<dl>
					<dt><img src="https://kakemochi.co.jp/wp/wp-content/themes/kakemochi/img/index/photo02.png" alt="次に雇用代行でテスト営業やマーケティングを行う"></dt>
					<dd>
						<h3 class="netad_sub01 netadnum02"><span class="netad_sub01_num">2</span>次に雇用代行でテスト営業やマーケティングを行う</h3>
						<p class="txt">雇用代行サービスを活用すれば、インドネシアに法人を設立しなくてもテスト営業やテストマーケティングを実施できます。<br>実際に見込み客の反応を見たり、その反応をもとに商品やサービスの改善を通して、インドネシア市場において勝ち目があるかどうかを検証していきます。その結果を踏まえて、最後のステップへと意思決定を前へ進めます。</p>
					</dd>
				</dl>
				
				<dl>
					<dt><img src="https://kakemochi.co.jp/wp/wp-content/themes/kakemochi/img/index/photo03.png" alt="最後に内資法人か外資法人で会社を設立する"></dt>
					<dd>
						<h3 class="netad_sub01 netadnum03"><span class="netad_sub01_num">3</span>最後に内資法人か外資法人で会社を設立する</h3>
						<p class="txt">インドネシアにおいて外資法人を設立しようとすると、資本金だけで約1億円が必要になります（厳密には100億ルピア）。一方で、内資法人の設立であれば資本金の額は低いものの、株主になれないので会社を所有することができません。外資/内資法人いずれも一長一短あるなかで、どちらの法人形態で設立を進めていくかを決める必要があります。</p>
					</dd>
				</dl>
				</div>
			</div>
			<!-- //段階的なインドネシア進出 -->

			
			<!-- インドネシア進出サービス -->
			<section class="index_new_service_new area">
				<div class="inner1200">
					<h3 class="new_ttl01">各種のインドネシア進出支援サービス</h3>
					<ul class="new_service_list_new">
						<li>
							<p class="img"><img src="<?php echo get_theme_file_uri(); ?>/img/index/index_service_new01.png" alt="インドネシア市場調査"></p>
							<div class="txt_box">
								<div class="txt_box_in">
									<h4 class="new_ttl02">インドネシア市場調査</h4>
									<p class="txt">大手の調査会社にインドネシアの市場調査をしてもらうと、100ページ以上の分厚いレポートに対して200万円や300万円といった金額を請求されます。その金額感だとPDCAを回すために何度も調査を実施することが難しいので、弊社では費用を抑えた市場調査をご提案しています。</p>
									<p class="new_btn01"><a href="<?php echo home_url(); ?>/marketing-services/">詳しく見る</a></p>
								</div>
							</div>
						</li>
						<li>
							<p class="img"><img src="<?php echo get_theme_file_uri(); ?>/img/index/index_service_new02.png" alt="インドネシア現地視察"></p>
							<div class="txt_box">
								<div class="txt_box_in">
									<h4 class="new_ttl02">インドネシア現地視察</h4>
									<p class="txt">インドネシア市場の有望性や成長性を多くの記事やテレビなどで見かけます。ところが、どんなに多くの情報を仕入れても、実際にインドネシアを訪れて現地の熱量を肌で感じないとわからない部分もたくさんあります。そういった現地視察をコーディネートさせていただきます。</p>
									<p class="new_btn01"><a href="<?php echo home_url(); ?>/overseas-expansion/inspection-tour-to-indonesia/">詳しく見る</a></p>
								</div>
							</div>
						</li>
						<li>
							<p class="img"><img src="<?php echo get_theme_file_uri(); ?>/img/index/index_service_new03.png" alt="インドネシアビザ申請"></p>
							<div class="txt_box">
								<div class="txt_box_in">
									<h4 class="new_ttl02">インドネシアビザ申請</h4>
									<p class="txt">2025年4月現在、インドネシアへは観光目的であっても、ビジネス目的であっても、必ずその具体的な目的に沿ったビザが必要になります。特に、2024年1月移行はビザの種類が目的別に細かく分かれて管理されるようになったので、まずは気軽に弊社までご相談ください。</p>
									<p class="new_btn01"><a href="<?php echo home_url(); ?>/visa-services/">詳しく見る</a></p>
								</div>
							</div>
						</li>
					</ul>
				</div>
			</section>
			<section class="index_new_service_new area index_new_service_new02">
				<div class="inner1200">
					<ul class="new_service_list_new">
						<li>
							<p class="img"><img src="<?php echo get_theme_file_uri(); ?>/img/index/index_service_new04.png" alt="インドネシア雇用代行"></p>
							<div class="txt_box">
								<div class="txt_box_in">
									<h4 class="new_ttl02">インドネシア雇用代行</h4>
									<p class="txt">インドネシアに法人を設立する場合、外資であれば資本金の問題（約1億円）、内資であれば株主の問題（株式を所有できない）に悩まされます。魅力的なインドネシア市場に対して、最初のステップは法人を設立せずに雇用代行を活用して挑戦してみるのはいかがでしょうか。</p>
									<p class="new_btn01"><a href="<?php echo home_url(); ?>/sales-services/employer-of-record/">詳しく見る</a></p>
								</div>
							</div>
						</li>
						<li>
							<p class="img"><img src="<?php echo get_theme_file_uri(); ?>/img/index/index_service_new05.png" alt="インドネシア駐在員事務所設立"></p>
							<div class="txt_box">
								<div class="txt_box_in">
									<h4 class="new_ttl02">インドネシア駐在員事務所設立</h4>
									<p class="txt">駐在員事務所は会社設立と違いインドネシア市場へ気軽にリーチできる点が一番のメリットだと言えます。魅力的なインドネシア市場ではありますが、成功するか否かは別問題ですので、まずは駐在員事務所を設立してインドネシアでの成功の可能性を探るという方法もあります。</p>
									<p class="new_btn01"><a href="<?php echo home_url(); ?>/founding-services/founding-representative-office/">詳しく見る</a></p>
								</div>
							</div>
						</li>
						<li>
							<p class="img"><img src="<?php echo get_theme_file_uri(); ?>/img/index/index_service_new06.png" alt="インドネシア法人設立"></p>
							<div class="txt_box">
								<div class="txt_box_in">
									<h4 class="new_ttl02">インドネシア法人設立</h4>
									<p class="txt">インドネシアで法人設立を検討される上で、まずは外資法人なのか内資法人なのかという選択肢を迫られます。約1億円の資本金を準備できるのであれば、正面玄関から入れる外資法人の方が会社を100％コントロールできるという点で、内資法人よりはおすすめではあります。</p>
									<p class="new_btn01"><a href="<?php echo home_url(); ?>/founding-services/">詳しく見る</a></p>
								</div>
							</div>
						</li>
					</ul>
				</div>
			</section>
			<!-- インドネシア進出サービス -->

			<!-- その他のインドネシア進出サービス -->
			<section class="index_new_service_new area">
					<div class="inner1200">
						<ul class="new_service_list_new new_service_list_new02">
							<li>
								<p class="img"><img src="<?php echo get_theme_file_uri(); ?>/img/index_new/new_service_list_new02_img01.png" alt="オフショア開発"></p>
								<div class="txt_box">
									<div class="txt_box_in">
										<h4 class="new_ttl02">オフショア開発</h4>
										<p class="new_btn01"><a href="<?php echo home_url(); ?>/founding-services/offshore-development/">詳しく見る</a></p>
									</div>
								</div>
							</li>
							<li>
								<p class="img"><img src="<?php echo get_theme_file_uri(); ?>/img/index_new/new_service_list_new02_img02.png" alt="展示会出展"></p>
								<div class="txt_box">
									<div class="txt_box_in">
										<h4 class="new_ttl02">展示会出展</h4>
										<p class="new_btn01"><a href="<?php echo home_url(); ?>/exhibition-indonesia/">詳しく見る</a></p>
									</div>
								</div>
							</li>
							<li>
								<p class="img"><img src="<?php echo get_theme_file_uri(); ?>/img/index_new/new_service_list_new02_img03.png" alt="テスト販売"></p>
								<div class="txt_box">
									<div class="txt_box_in">
										<h4 class="new_ttl02">テスト販売</h4>
										<p class="new_btn01"><a href="<?php echo home_url(); ?>/sales-services/test-marketing/">詳しく見る</a></p>
									</div>
								</div>
							</li>
							<li>
								<p class="img"><img src="<?php echo get_theme_file_uri(); ?>/img/index_new/new_service_list_new02_img04.png" alt="市場調査"></p>
								<div class="txt_box">
									<div class="txt_box_in">
										<h4 class="new_ttl02">アンケート調査</h4>
										<p class="new_btn01"><a href="<?php echo home_url(); ?>/marketing-services/survey/">詳しく見る</a></p>
									</div>
								</div>
							</li>
						</ul>

					</div>
				</section>
			<!-- その他のインドネシア進出サービス -->

			<!--お客様のロゴ-->
			<?php get_template_part('parts/client_name'); ?>
			<!--//お客様のロゴ-->
			<div style="height:40px" aria-hidden="true" class="wp-block-spacer"></div>

			<!--//お客様の声-->
			<div class="sv_box_wrap">
				<div class="sv_box_inner">
				<h2 class="new_h2_ttl">お客様の声</h2>
				<ul class="company_links career_list company_links_one letter_txt">
					<li>
						<div class="company_links_txt_inner">
							<p class="company_links_ttl"><span class="orange">●</span>現地視察</p>
							<p class="txt">かなりスケジュールがタイトであったにも関わらず、車やドライバー、通訳なども適切な方を手配してくれて助かった。</p>
						</div>
					</li>
					<li>
						<div class="company_links_txt_inner">
							<p class="company_links_ttl"><span class="orange">●</span>ビザ申請</p>
							<p class="txt">到着ビザ（VOA）では工場訪問ができないと知って焦りましたが、工場訪問用のビザ申請を最後まで支援してくれました。</p>
						</div>
					</li>
					<li>
						<div class="company_links_txt_inner">
							<p class="company_links_ttl"><span class="orange">●</span>駐在員事務所設立</p>
							<p class="txt">駐在員事務所設立までの必要書類の説明と対応が非常に丁寧で、何の問題も発生せずに設立までスムーズに進めてもらえた。</p>
						</div>
					</li>
					<li>
						<div class="company_links_txt_inner">
							<p class="company_links_ttl"><span class="orange">●</span>内資法人設立</p>
							<p class="txt">元技能実習生2名に株主になってもらう形でインドネシアでの法人設立を依頼。ノミニーの注意点なども丁寧に教えてもらえた。</p>
						</div>
					</li>
					<li>
						<div class="company_links_txt_inner">
							<p class="company_links_ttl"><span class="orange">●</span>外資法人設立</p>
							<p class="txt">約3億円近くを投資しての外資法人設立だったが、土地や工場の選定段階から伴走支援してもらえたので安心感が強かった。</p>
						</div>
					</li>
					<li>
						<div class="company_links_txt_inner">
							<p class="company_links_ttl"><span class="orange">●</span>アンケート調査</p>
							<p class="txt">ジャカルタ在住200名の既婚者女性に対するアンケート調査を依頼。想定ユーザーを滞りなく集めてもらえたのは助かった。</p>
						</div>
					</li>
					<li>
						<div class="company_links_txt_inner">
							<p class="company_links_ttl"><span class="orange">●</span>展示会出展</p>
							<p class="txt">ジャカルタで開かれた展示会への出展をサポートしてもらえた。当日のブースの設置や呼び込みなどもお願いできたのは良かった。</p>
						</div>
					</li>
					<li>
						<div class="company_links_txt_inner">
							<p class="company_links_ttl"><span class="orange">●</span>インフルエンサーマーケティング</p>
							<p class="txt">自社商品の認知度拡大のために、商品との相性が良さそうなインフルエンサーを探してもらい、交渉なども全てお願いできた。</p>
						</div>
					</li>
					<li>
						<div class="company_links_txt_inner">
							<p class="company_links_ttl"><span class="orange">●</span>SNS運用や広告運用</p>
							<p class="txt">インドネシアではインスタグラムやTikTokの利用者が多いと聞いていたので、その運用を全て任せられたのはありがたかった。</p>
						</div>
					</li>
				</ul>
				</div>
			</div>
			<!--//お客様の声-->

			 <section class="common_cta">
				<div class="common_cta_box">
					<div class="common_cta_box_L">
						<!-- Start of Meetings Embed Script -->
							<div class="meetings-iframe-container" data-src="https://meetings-na2.hubspot.com/kakemochi-yanagisawa/contact?embed=true"></div>
							<script type="text/javascript" src="https://static.hsappstatic.net/MeetingsEmbed/ex/MeetingsEmbedCode.js"></script>
						<!-- End of Meetings Embed Script -->
					</div>
					<div class="common_cta_box_R">
						<div class="common_cta_ttl">初回相談は<span class="marker_or">無料</span></div>
						<div class="common_cta_txt">お打ち合わせ時には貴社用に資料を作成し、<br class="pc">その資料も<span class="under_or_bold">無料にてご提供</span>させていただきます。</div>
						<div class="common_cta_img"><img src="https://kakemochi.co.jp/wp/wp-content/themes/kakemochi/img/common/cta_common_img.png" alt=""></div>
						<div class="common_cta_undertxt"><span>毎日お問い合わせを<br class="sp">いただいております</span></div>
					</div>
				</div>
			 </section>
			<!-- //20250711CTA -->	

			<!--//進出ハンドブック-->			
			<div class="web-marketing-package-plan_camp">
				<div class="web-marketing-package-plan_camp_inner">
					<div class="web-marketing-package-plan_camp_cont entry-into-indonesia-package_plr">
						<div class="web-marketing-package-plan_camp_obi">ご相談いただいた方全員にプレゼント</div>
						<p class="web-marketing-package-plan_camp_txt">全116ページの充実した内容<span class="orange">『インドネシア進出<br class="sp">ハンドブック』</span><br>上記よりお打ち合わせ<br class="sp">の設定をお願いします</p>
					</div>
				</div>
			</div>			
			<!--//進出ハンドブック-->			
			
			<!-- 企業インタビュー -->
			<section class="index_new_interview area">
				<div class="inner1200">
					<h3 class="new_ttl01">インドネシアで活躍されている<br class="sp">注目の企業様へのインタビュー</h3>
					<ul class="new_interview_list new_interview_list_up">
					<li>
							<p class="img"><img alt="アジアクエスト" src="https://kakemochi.co.jp/wp/wp-content/uploads/2023/06/aqi.co_.id_visual.jpg"></p>
							<div class="txt_box">
								<p class="ttl">アジアクエスト様</p>
								<p class="txt">「なぜそれをやるのか」をしっかりと伝え、挑戦を歓迎する。Webシステム開発やサイト制作を手がけるアジアクエストに人が集まる理由</p>
								<p class="new_btn01 center"><a href="<?php echo home_url(); ?>/interview/asiaquest/">続きを読む</a></p>
							</div>
						</li>
						<li>
							<p class="img"><img alt="SENSHA" src="https://kakemochi.co.jp/wp/wp-content/uploads/2023/05/bessho_visual-1.jpg"></p>
							<div class="txt_box">
								<p class="ttl">SENSHA様</p>
								<p class="txt">お客さんやスタッフとの綿密なコミュニケーションが成功の鍵。インドネシアで洗車とコーティングを提供する「SENSHA」が歩んだ道のり</p>
								<p class="new_btn01 center"><a href="<?php echo home_url(); ?>/interview/sensha/">続きを読む</a></p>
							</div>
						</li>
						<li>
							<p class="img"><img alt="TOKYO BELLE" src="https://kakemochi.co.jp/wp/wp-content/uploads/2022/10/tokobelle_visual.jpg"></p>
							<div class="txt_box">
								<p class="ttl">TOKYO BELLE様</p>
								<p class="txt">なぜスラバヤで美容サロン？グロースから売却までを経験した、元金融ビジネスマンから見るインドネシアの美容業界</p>
								<p class="new_btn01 center"><a href="<?php echo home_url(); ?>/interview/tokyobelle/">続きを読む</a></p>
							</div>
						</li>
						<li>
							<p class="img"><img alt="Beautynesia" src="https://kakemochi.co.jp/wp/wp-content/uploads/2022/09/beautynesia_visual.jpg"></p>
							<div class="txt_box">
								<p class="ttl">Beautynesia様</p>
								<p class="txt">インドネシアの財閥グループに参画したBeautynesiaの強みとインフルエンサーマーケティングの秘訣</p>
								<p class="new_btn01 center"><a href="<?php echo home_url(); ?>/interview/beautynesia/">続きを読む</a></p>
							</div>
						</li>
						<li>
							<p class="img"><img alt="グリコ" src="https://kakemochi.co.jp/wp/wp-content/uploads/2022/09/main-visual-glico.jpg"></p>
							<div class="txt_box">
								<p class="ttl">グリコ様</p>
								<p class="txt">グリコはどのようにインドネシアのお菓子市場でマーケティングを実践してきたのか</p>
								<p class="new_btn01 center"><a href="<?php echo home_url(); ?>/interview/glico/">続きを読む</a></p>
							</div>
						</li>
						
						
					</ul>
					<p class="new_btn01 center size_l"><a href="<?php echo home_url(); ?>/interview/">その他のインタビューはこちらから</a></p>
				</div>
			</section>
			<!-- 企業インタビュー -->
			  
			<!-- 集客支援 -->
				<section class="index_new_attracting area">
					<div class="inner1200">
						<h3 class="new_ttl01">インドネシア人の集客支援</h3>
						<p class="top_txt">インドネシア進出支援に加えて、インドネシア国内におけるWeb集客支援も行っています。多言語サイトの制作からはじまり、コンテンツマーケティング、SEO対策、Web広告運用、SNSアカウント運用など幅広くWebマーケティング施策を支援することができます。もちろん、SEO対策のみやWeb広告運用のみなど、個別のWebマーケティング施策だけも対応しています。まずはお気軽にご連絡をいただければと思います。</p>
						<ul class="new_attraction_list">
							<li>
								<p class="ttl">コンテンツマーケティング</p>
								<p class="icon"><img alt="" src="<?php echo get_theme_file_uri(); ?>/img/index_new/attracting01.png"></p>
								<p class="txt">貴社のお客様（見込み客も含む）に対して、適切な情報を適切なタイミングで届けていくことで、貴社のファンになってもらうことを目的としています。そのための戦略の立案から実行支援までを総合的に行っています。</p>
							</li>
							<li>
								<p class="ttl">インフルエンサーマーケティング</p>
								<p class="icon"><img alt="" src="<?php echo get_theme_file_uri(); ?>/img/index_new/attracting02.png"></p>
								<p class="txt">インフルエンサー（影響力を持つ人物）の影響力を活用したマーケティング手法は近年ますます重要度を増しています。ただ、貴社のブランドイメージと乖離するような人物を起用すると効果が薄いため、その選定からお手伝いをしています。</p>
							</li>
							<li>
								<p class="ttl">翻訳業務</p>
								<p class="icon"><img alt="" src="<?php echo get_theme_file_uri(); ?>/img/index_new/attracting03.png"></p>
								<p class="txt">英語への翻訳はもちろんのこと、中国語、韓国語、ベトナム語、インドネシア語など複数の言語への翻訳が可能です。それぞれの国で日本語が得意なスタッフが働いており、活きた言葉に翻訳をしていきます。</p>
							</li>
							<li>
								<p class="ttl"><a href="<?php echo home_url(); ?>/digital-marketing/internet-advertising-agency/">広告運用</a></p>
								<p class="icon"><img alt="" src="<?php echo get_theme_file_uri(); ?>/img/index_new/attracting04.png"></p>
								<p class="txt">Google広告はもちろん、Facebook広告やInstagram広告などのSNS広告まで幅広く貴社のサービスや製品をお客様にお届けする支援をしています。貴社の予算に合った広告出稿が可能ですので、一度ご相談をいただければと思います。</p>
							</li>
							<li>
								<p class="ttl">SNS運用</p>
								<p class="icon"><img alt="" src="<?php echo get_theme_file_uri(); ?>/img/index_new/attracting05.png"></p>
								<p class="txt">近年、企業の公式SNS運用は非常に難度が高くなってきています。良かれと思って行ったSNS運用が逆に貴社のブランドを毀損する可能性もあります。炎上しないようなSNS運用をコンサルティングさせていただきます。</p>
							</li>
							<li>
								<p class="ttl"><a href="<?php echo home_url(); ?>/digital-marketing/access-analysis/">アクセス解析</a></p>
								<p class="icon"><img alt="" src="<?php echo get_theme_file_uri(); ?>/img/index_new/attracting06.png"></p>
								<p class="txt">SEO対策や広告運用や各種SNS運用など、施策をやりっぱなしで終わりになっていないでしょうか。数字をもとにアクセス状況を分析し、施策の良し悪しを検討した上で次に活かすことが大事です。PDCAを回すお手伝いをしていきます。</p>
							</li>
						</ul>
					</div>
				</section>
			<!-- 集客支援 -->


			<div style="height:100px" aria-hidden="true" class="wp-block-spacer"></div>
			<!-- ニュースレター -->
			<section class="index_new_newsletter area bg02">
					<div class="inner1000">
						<div class="new_letter_box">
							<p class="img"><img alt="" src="<?php echo get_theme_file_uri(); ?>/img/index_new/news_letter.png"></p>
							<div class="txt_box">
								<p class="ttl">インドネシアについての<br class="sp">お役立ちニュースレター</p>
								<p class="txt">カケモチはインドネシアへの進出支援や、インドネシア国内におけるWebマーケティング支援、あるいはインドネシア人向けコミュニティの運営をしていることから、インドネシアでビジネスを行うために重要なトピックに厳選してニュースをお届けすることができます。</p>
								<p class="new_btn01 right"><a href="<?php echo home_url(); ?>/expatriate/newsletter/">詳細はこちらから</a></p>
							</div>
						</div>
					</div>
			</section>
			<!-- ニュースレター -->

			<div style="height:100px" aria-hidden="true" class="wp-block-spacer"></div>
			<!-- よくあるご質問 -->
				<section id="area09" class="area">
					<div class="inner">
						<div class="common_parts_w1000">
						<h3 class="new_ttl01">よくあるご質問</h3>
						<div class="bace_faq">
						<dl>
							<dt>
								<span></span><p>現地視察は初日の空港到着時からホテルまでドライバーや車を手配してもらえますか</p>
							</dt>
							<dd>
								<span></span><p>はい、可能です。ホテルへ到着後、どこかのショッピングモールに行かれる際もそのままドライバーが運転して、希望の場所まで皆様をお連れします。最終日の空港までの送迎だけも可能です。</p>
							</dd>
						</dl>
						<dl>
							<dt>
								<span></span><p>ビザを取って工場も訪問予定ですが専門の通訳を手配できますか</p>
							</dt>
							<dd>
								<span></span><p>手配可能です。お客様にとって必要なレベルの通訳を弊社では手配可能ですので、まずはどういった場所で、どのような内容の現地視察を行うのかなどの詳細をヒアリングさせてください。</p>
							</dd>
						</dl>
						<dl>
							<dt>
								<span></span><p>雇用代行の費用はいくらになりますか</p>
							</dt>
							<dd>
								<span></span><p>インドネシア人を1名だけ雇用するのか、どういった勤務形態で雇用するのかなど、インドネシアでどのように貴社のビジネスを展開するかで費用感が変わってきます。まずは一度お気軽にご連絡をください。</p>
							</dd>
						</dl>
						<dl>
							<dt>
								<span></span><p>駐在員事務所を設立して半年〜1年後に、その事務所を内資法人や外資法人に変更できますか</p>
							</dt>
							<dd>
								<span></span><p>いいえ、できません。内資、外資法人の設立を希望の場合は、新たに設立を行う必要があります。</p>
							</dd>
						</dl>
						<dl>
							<dt>
								<span></span><p>外資法人設立のための資本金はいくら必要ですか</p>
							</dt>
							<dd>
								<span></span><p>外資系企業に求められる最低払込資本金は100億ルピア（約1億円）となっています。</p>
							</dd>
						</dl>
						</div>
					</div>
					</div>
				</section>
			<!-- よくあるご質問 -->


			<!-- メディア実績 -->
			<section class="index_new_media area">
								<div class="inner1000">
									<h3 class="new_ttl01">メディア紹介実績</h3>
									<div class="media_press_box">
											<ul>
												<li><img alt="" src="<?php echo get_theme_file_uri(); ?>/img/index_new/media08.png"></li>
												<li><img alt="" src="<?php echo get_theme_file_uri(); ?>/img/index_new/media07.png"></li>
												<li><img alt="" src="<?php echo get_theme_file_uri(); ?>/img/index/media11.png"></li>
												<li><img alt="" src="<?php echo get_theme_file_uri(); ?>/img/index/media09.png"></li>
												<li><img alt="" src="<?php echo get_theme_file_uri(); ?>/img/index/media10.png"></li>
												<li><img alt="" src="<?php echo get_theme_file_uri(); ?>/img/index/media12.png"></li>
												<li><img alt="" src="<?php echo get_theme_file_uri(); ?>/img/index/media01.png"></li>
												<li><img alt="" src="<?php echo get_theme_file_uri(); ?>/img/index/media02.png"></li>
												<li><img alt="" src="<?php echo get_theme_file_uri(); ?>/img/index/media03.png"></li>
												<li><img alt="" src="<?php echo get_theme_file_uri(); ?>/img/index/media04.png"></li>
												<li><img alt="" src="<?php echo get_theme_file_uri(); ?>/img/index/media05.png"></li>
												<li><img alt="" src="<?php echo get_theme_file_uri(); ?>/img/index/media06.png"></li>
												
											</ul>
										</div>
									
								</div>
							</section>
			<!-- メディア実績 -->


			<!-- New_CTA -->
			<div class="n_cta">
				<div class="n_cta_L">
					<div class="n_cta_L_inner">
						<p class="n_cta_L_ttl">インドネシア市場にて<br class="pc">成功させるコツがある</p>
						<dl class="n_cta_L_cont">
							<dt><img src="<?php echo get_theme_file_uri(); ?>/img/index_new/n_cta.png" alt="インドネシア市場にて成功させるコツがある"></dt>
							<dd>
								<p class="n_cta_L_ttl02">これまでに<br>200社以上の<br>進出課題を解決</p>
							</dd>
						</dl>
						<p class="n_cta_L_bottom">福岡市やさっぽろ産業振興財団などの行政連携もしています</p>
					</div>
				</div>

				<div class="n_cta_R">
					<div class="n_cta_R_inner">
						<script src="https://js.hsforms.net/forms/embed/20720568.js" defer></script>
						<div class="hs-form-frame" data-region="na1" data-form-id="98edf93b-9fd9-49db-9cd6-0e1f2a525b29" data-portal-id="20720568"></div>
					</div>
				</div>
			</div>
			<!-- //New_CTA -->


			<div style="height:100px" aria-hidden="true" class="wp-block-spacer"></div>
			<!-- 資料ダウンロード-->
				<section class="area_nopad area">
					<div class="influencer-marketing_cont02 area bg_orange01">
						<div class="inner1200">
						<h3 class="new_ttl01">お役立ち資料の無料ダウンロード</h3>
						<div id="white-paper-download" class="index_white-paper-download">
						<ul class="download_list download_list_slider">
							<li>
								<div class="img_box">
									<div class="img_box_in">
										<div class="book_txt_box">
											<p class="download_img"><img src="<?php echo get_theme_file_uri(); ?>/img/common/book_bg02k.png"></p>
											<p class="book_txt02">インドネシアでの会社設立</p>
										</div>
									</div>
								</div>
								<div class="txt_box">
									<p class="ttl">難易度が高いインドネシアの会社設立</p>
									<p class="txt">インドネシアで外国資本の会社を作ろうとすると資本金だけで約1億円が必要です。</p>
									<div class="wp-container-4 wp-block-buttons">
										<div class="wp-block-button">
											<a class="wp-block-button__link has-luminous-vivid-orange-background-color has-background" href="<?php echo home_url(); ?>/white-paper-download/white-paper-founding-a-company/" download="">資料ダウンロード</a>
										</div>
									</div>
								</div>
							</li>
							<li>
								<div class="img_box">
									<div class="img_box_in">
										<div class="book_txt_box">
											<p class="download_img"><img src="<?php echo get_theme_file_uri(); ?>/img/common/book_bg02k.png"></p>
											<p class="book_txt02">インドネシアでの市場調査</p>
										</div>
									</div>
								</div>
								<div class="txt_box">
									<p class="ttl">見込み客のニーズの調査が可能です</p>
									<p class="txt">インドネシア人見込み客に対して15万円〜アンケート調査が可能です。</p>
									<div class="wp-container-4 wp-block-buttons">
										<div class="wp-block-button">
											<a class="wp-block-button__link has-luminous-vivid-orange-background-color has-background" href="<?php echo home_url(); ?>/white-paper-download/white-paper-market-research-in-indonesia/" download="">資料ダウンロード</a>
										</div>
									</div>
								</div>
							</li>
							<li>
								<div class="img_box">
									<div class="img_box_in">
										<div class="book_txt_box">
											<p class="download_img"><img src="<?php echo get_theme_file_uri(); ?>/img/common/book_bg02k.png"></p>
											<p class="book_txt02">インドネシア経済の魅力</p>
										</div>
									</div>
								</div>
								<div class="txt_box">
									<p class="ttl">進出を検討する上での各種データ</p>
									<p class="txt">インドネシア経済の状況について、様々な切り口でデータをまとめた資料になります。</p>
									<div class="wp-container-4 wp-block-buttons">
										<div class="wp-block-button">
											<a class="wp-block-button__link has-luminous-vivid-orange-background-color has-background" href="<?php echo home_url(); ?>/white-paper-download/white-paper-attractiveness-of-the-indonesian-economy/" download="">資料ダウンロード</a>
										</div>
									</div>
								</div>
							</li>
						</ul>
					</div>

					<p class="tenji_btns index_white-paper-download_btn"><a href="<?php echo home_url(); ?>/white-paper-download/">その他資料はこちらから</a></p>
						
						</div>
					</div>
				</section>
			<!-- //資料ダウンロード -->

			<!-- お役立ちコラム -->	
			<section id="ouakudachi" class="area">
				<div class="inner1200">
				<h3 class="new_ttl01">インドネシア進出に役立つコラム記事</h2>
						<ul class="oyakudachi_box">
							<li>
								<p class="oyakudachi_ttl">インドネシアの人口ピラミッド</p>
								<p class="oyakudachi_txt">インドネシアの人口ピラミッドは富士山型です。若者が多いのが特徴で、生産年齢人口は2022年1月時点で総人口の70.7%。約1億9,000万人います。</p>
								<div class="oyakudachi_btn"><a href="/column/indonesian-population-pyramid-and-population-trends/">詳細ページへ</a></div>
							</li>
							<li>
								<p class="oyakudachi_ttl">インドネシアの平均月収と平均年収</p>
								<p class="oyakudachi_txt">インドネシアの平均月収は2万6千円、平均年収は38万8千円です。これは全国平均の数字ですが、都市部に限ってみると違う数字が見えてきます。</p>
								<div class="oyakudachi_btn"><a href="/column/average-monthly-income-in-indonesia/">詳細ページへ</a></div>
							</li>
							<li>
								<p class="oyakudachi_ttl">ジャカルタの物価やジャカルタの生活費</p>
								<p class="oyakudachi_txt">ジャカルタに住むインドネシア人の生活費の詳細、生活費の高いインドネシアの都市、日本の生活費との比較などを紹介します。</p>
								<div class="oyakudachi_btn"><a href="/column/cost-of-living-in-jakarta/">詳細ページへ</a></div>
							</li>
							<li>
								<p class="oyakudachi_ttl">インドネシアの富裕層の実態</p>
								<p class="oyakudachi_txt">経済成長著しいインドネシアでは富裕層の数が急増中です。例えば2016年から2021年の富裕層の増加率で見ると、日本では10％、インドネシアでは50％でした。</p>
								<div class="oyakudachi_btn"><a href="/column/hnwi-population-and-growth-rate-in-indonesia/">詳細ページへ</a></div>
							</li>
							<li>
								<p class="oyakudachi_ttl">特定技能で働くインドネシア人</p>
								<p class="oyakudachi_txt">在留資格「特定技能」を取得し日本で働くインドネシア人の人数や割合とその推移、従事する産業分野などについて紹介します。</p>
								<div class="oyakudachi_btn"><a href="/column/number-and-trends-of-indonesians-working-under-the-ssw-system/">詳細ページへ</a></div>
							</li>
							<li>
								<p class="oyakudachi_ttl">技能実習で働くインドネシア人</p>
								<p class="oyakudachi_txt">2023年度の技能実習計画認定件数をみると、インドネシアは7万4,879人で、技能実習生全体の21.4%を占めました。</p>
								<div class="oyakudachi_btn"><a href="/column/number-of-indonesians-working-in-japan-with-ginoujisshu-status/">詳細ページへ</a></div>
							</li>
						</ul>
						<p class="tenji_btns"><a href="/column/">その他のコラム記事はこちら</a></p>
				</div>
			</section>
			<!-- お役立ちコラム  -->

			<!-- サービス一覧 -->
			<section class="index_renew_service_ind area nobtm">
				<div class="inner1200">
					<h3 class="new_ttl01">その他の様々なインドネシア進出支援サービス</h3>
					<!--<p class="t_txt">インドネシア市場に特化してサービスを提供しているため、幅広いサービスラインナップを取り揃えています。</p>-->
					<ul class="index_renew_service_ind_list">
						<li>
							<p class="ttl"><a href="<?php echo home_url(); ?>/founding-services/">進出支援</a></p>
							<ul class="list_in">
								<li><a href="<?php echo home_url(); ?>/founding-services/">法人設立</a></li>
								<li><a href="<?php echo home_url(); ?>/founding-services/founding-representative-office/">駐在員事務所設立</a></li>
								<li><a href="<?php echo home_url(); ?>/founding-services/offshore-development/">オフショア開発</a></li>
								<li><a href="<?php echo home_url(); ?>/founding-services/market-research/">市場調査</a></li>
								<li><a href="<?php echo home_url(); ?>/founding-services/survey/">アンケート調査</a></li>
								<li><a href="<?php echo home_url(); ?>/halal-business-services/">ハラル対応支援サービス</a></li>
							</ul>
						</li>
						<li>
							<p class="ttl"><a href="<?php echo home_url(); ?>/founding-services/">管理業務支援</a></p>
							<ul class="list_in">
								<li><a href="<?php echo home_url(); ?>/founding-services/accounting/">会計・経理業務</a></li>
								<li><a href="<?php echo home_url(); ?>/founding-services/human-resources/">人事・労務業務</a></li>
								<li><a href="<?php echo home_url(); ?>/founding-services/online-secretary/">総務・秘書業務</a></li>
								<li><a href="<?php echo home_url(); ?>/founding-services/translation/">通訳・翻訳</a></li>
								<li><a href="<?php echo home_url(); ?>/founding-services/second-opinion/">セカンドオピニオン</a></li>
								<li><a href="<?php echo home_url(); ?>/founding-services/government-subsidy/">補助金支援サービス</a></li>								
							</ul>
						</li>
						<li>
							<p class="ttl"><a href="<?php echo home_url(); ?>/webmarketing-services/">集客支援</a></p>
							<ul class="list_in">
								<li><a href="<?php echo home_url(); ?>/webmarketing-services/support-web-marketing/">Webマーケ顧問</a></li>
								<li><a href="<?php echo home_url(); ?>/webmarketing-services/internet-advertising-agency/">広告運用</a></li>
								<li><a href="<?php echo home_url(); ?>/webmarketing-services/instagram-ads/">インスタ広告運用</a></li>
								<li><a href="<?php echo home_url(); ?>/webmarketing-services/influencer-marketing/">インフルエンサーマーケティング</a></li>
								<li><a href="<?php echo home_url(); ?>/webmarketing-services/remarketing/">リマーケティング広告</a></li>
								<li><a href="<?php echo home_url(); ?>/webmarketing-services/content-marketing/">コンテンツマーケティング</a></li>
								<li><a href="<?php echo home_url(); ?>/webmarketing-services/inbound-services/">訪日インバウンド</a></li>
								<li><a href="<?php echo home_url(); ?>/webmarketing-services/access-analysis/">アクセス解析</a></li>
							</ul>
						</li>
						<li>
							<p class="ttl"><a href="<?php echo home_url(); ?>/sales-services/">営業支援</a></p>
							<ul class="list_in">
								<li><a href="<?php echo home_url(); ?>/sales-services/">販売代理支援</a></li>
								<li><a href="<?php echo home_url(); ?>/sales-services/employer-of-record/">雇用代行</a></li>
								<li><a href="<?php echo home_url(); ?>/sales-services/affluent-market-sales/">富裕層向け販売支援</a></li>
								<li><a href="<?php echo home_url(); ?>/sales-services/test-marketing/">テスト販売</a></li>
								<li><a href="<?php echo home_url(); ?>/sales-services/cross-border-e-commerce/">越境EC</a></li>
								<li><a href="<?php echo home_url(); ?>/sales-services/live-commerce/">ライブコマース</a></li>
								<li><a href="<?php echo home_url(); ?>/sales-services/cross-border-e-commerce/">化粧品販売</a></li>
							</ul>
						</li>
					</ul>
				</div>
			</section>
			<!-- //サービス一覧 -->

				<?php get_template_part('news'); ?>
				<?php get_template_part('news_column'); ?>

			<!--contact_new-->
			<div id="contact_new_area">
					<section class="new_contact_box area">
										<div class="inner">
											<h2>インドネシアで会社を設立する際、予算と目的に合わせた設立方法があります。<br class="pc">弊社では豊富な設立実績があるためまずは一度ご相談ください。</h2>
											<ul>
												<li>
													<p class="ttl_in orange">WEBからお問い合わせ</p>
													<a href="<?php echo home_url(); ?>/contact/" class="new_btn color01"><span>ご相談はいつでも無料</span></a>
													<p class="caution">24時間受付（2営業日以内に返信いたします）</p>
												</li>
												<li>
													<p class="ttl_in orange">すぐにでも日程調整を行いたい</p>
													<a href="https://meetings.hubspot.com/kakemochi-yanagisawa/contact" class="new_btn color02"><span>日程調整フォームへ</span></a>
													<p class="caution">代表の柳沢が説明いたします。</p>
												</li>
											</ul>
											<div class="box">
												<div class="tel">
													<p class="tel_txt">お電話でのお問い合わせ</p>
													<p class="tel_btn">
														<a href="tel:050-1721-9794"><span class="icon"><img src="<?php echo get_theme_file_uri(); ?>/img/ownedmedia-to-expand-indonesia/contact_tel.png" alt=""></span>050-1721-9794</a>
													</p>
													<p class="time">（9:00〜19:00）</p>
												</div>	
												<a href="<?php echo home_url(); ?>/company/" class="intro orange">カケモチの自己紹介</a>
											</div>
										</div>
									</section>
						</div>
			<!--contact_new-->

							
			</article>
			<!-- article end -->
		</main>

		
<?php get_template_part('parts/contact/contact'); ?>


<?php get_template_part('about'); ?>
<?php 
$sidebar = ''; // sidebarを空文字で初期化
$args['sidebar']=$sidebar;
get_footer('',$args);
?>

		<div id="page_top">
			<span></span>
		</div>
		<!-- page_top end -->		
		
	</div>
	<!-- wrapper end -->
<?php get_template_part('before_close_body'); ?>
<?php wp_footer(); ?>
</body>
</html>