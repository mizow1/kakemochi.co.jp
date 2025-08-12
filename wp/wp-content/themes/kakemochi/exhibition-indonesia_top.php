<?php 
//画像未指定メインビジュアルの指定値
$bg = get_field('no_img_main_visual_bg') ? get_field('no_img_main_visual_bg'):'#3ea5b4';
$mv_txt_1 = get_field('no_img_main_visual_text_1') ? get_field('no_img_main_visual_text_1'):'インドネシアへの越境EC<br>を本気で検討しませんか？';
$mv_txt_2 = get_field('no_img_main_visual_text_2') ? get_field('no_img_main_visual_text_2'):'10万円からの現地ECモール出店支援';
$mv_txt_3 = get_field('no_img_main_visual_text_3') ? get_field('no_img_main_visual_text_3'):'国際物流<br>丸投げ可';
$mv_txt_4 = get_field('no_img_main_visual_text_4') ? get_field('no_img_main_visual_text_4'):'顧客対応<br>丸投げ可';
$mv_btn_caption = get_field('no_img_main_visual_btn_caption') ? get_field('no_img_main_visual_btn_caption'):'ご相談は無料';
$mv_btn_txt = get_field('no_img_main_visual_btn_txt') ? get_field('no_img_main_visual_btn_txt'):'お問い合わせはこちらから';
$mv_btn_url = get_field('no_img_main_visual_btn_url') ? get_field('no_img_main_visual_btn_url'):home_url().'/contact/';
$mv_img_field = get_field('no_img_main_visual_img');
$mv_img = (is_array($mv_img_field) && isset($mv_img_field['url'])) ? $mv_img_field['url'] : get_theme_file_uri().'/img/cross-border-e-commerce/visual_img.png';
if(get_the_post_thumbnail_url()){
	$mv_img = get_the_post_thumbnail_url();
}elseif(is_array($mv_img_field) && isset($mv_img_field['url'])){
	$mv_img = $mv_img_field['url'];
}else{
	$mv_img = get_theme_file_uri().'/img/cross-border-e-commerce/visual_img.png';
}
$main_width = get_field('main_width')>0 ? str_replace('%','',get_field('main_width')) : 100;

//メインビジュアルニュース
$main_news_tmp1 = get_field('main_visual_news');
if($main_news_tmp1){
	$main_news_tmp2 = explode("\n",$main_news_tmp1);
	foreach($main_news_tmp2 as $val){
		$main_news[] = explode(',',$val);
	}
}

 ?>
<?php get_header(); ?>
<body>
<?php get_template_part('after_open_body'); ?>
	<div id="wrapper">
<?php get_template_part('gnav'); ?>
<?php get_template_part('menu'); ?>
		<main id="<?php echo $post->post_name; ?>" class="lower">
			<article>
<?php 
$qa_q = explode("\n",get_field('qa_question'));
$qa_a = explode("\n",get_field('qa_answer'));
if($qa_q[0]&&$qa_a[0]):
foreach($qa_q as $key=>$val):
?>
<section class="universal_qa">
	<dl>
		<dt>
			<span class="icon"></span><?php echo $qa_q[$key]; ?>
		</dt>
		<dd>
			<span class="icon"></span><?php echo $qa_a[$key]; ?>
		</dd>
	</dl>
</section>
<?php endforeach; ?>
<?php endif; ?>

<?php if(!is_page('member_edit')): ?>
<?php $mv = get_the_post_thumbnail_url($post->ID, "full"); ?>
<?php if($mv&&get_field('main_visual_on_off')!=2): ?>
	<div id="visual01" class="area"<?php if(get_the_post_thumbnail_url($post->ID, "full")){echo ' style="background-image:url('.$mv.')"';} ?>>
	</div>
	<!-- visual end -->		
<?php elseif('post' != get_post_type() && !is_page('member_login')&&get_field('main_visual_on_off')!=2): ?>
	<div id="visual" class="area default_main_visual" style="background: <?php echo $bg; ?>;">
		<div class="inner">
			<div class="txt_box">
				<h1 class="ttl">
					<?php echo $mv_txt_1 ?>
				</h1>
				<p class="visual_txt">
					<?php echo $mv_txt_2 ?>
				</p>
				<ul>
					<li><?php echo $mv_txt_3 ?></li>
					<li><?php echo $mv_txt_4 ?></li>
				</ul>
				<div class="btn_ttl">
					<div class="prefix">＼</div>
					<div class="btn_ttl_contents">
						<?php echo $mv_btn_caption; ?>
					</div>
					<div class="suffix">／</div>
				</div>
				<div class="visual_btn_dl">
					<a href="<?php echo $mv_btn_url ?>">
						<i class="fa-solid fa-hand-point-right font_awesome"></i>
						<span><?php echo $mv_btn_txt ?></span>
					</a>
				</div>
			</div>
			<div class="img_box">
				<p class="img">
					<img src="<?php echo $mv_img ?>" alt="" class="pc"><img src="<?php echo $mv_img ?>" alt="" class="sp">
				</p>
				<?php if($main_news): ?>
				<div class="visual_news_box">
					<ul>
						<?php foreach($main_news as $val): ?>
							<li><?php echo $val[0]; ?>　<a href="<?php echo $val[2]; ?>"><?php echo $val[1]; ?></a></li>
						<?php endforeach; ?>
					</ul>
				</div><!-- /.visual_news_box -->
				<?php endif; ?>
			</div><!-- /.img_box -->
		</div>
	</div>
	<!-- visual end -->	
<?php endif; ?>
<?php endif; ?>

<?php
if(get_field('bread_crumb_html')){
	echo get_field('bread_crumb_html');
}else{
	breadcrumb();
}
?>

				<section id="textpage" class="area main_width_<?php echo $main_width; ?>">
				<div class="inner">


					<?php
					$args['post_type'] = 'exhibition-indonesia';
					$args['result_url'] = get_the_permalink();
					get_template_part('search',null,$args);
					?>

<?php 
					$paged = get_query_var( 'paged' ) ? intval( get_query_var( 'paged' ) ) : 1;
					$s_query_args = array(
						'posts_per_page'=>-1,//実際のperpage指定は後述$posts_per_page
						'post_type'=>'exhibition-indonesia',
						'orderby'=>'meta_value',
						'meta_key'=>'exhibition_start_day',
						'order'=>'DESC',
						'paged'=>$paged,
						's'=>isset($_GET['order_keyword']) ? $_GET['order_keyword'] : '',
						'meta_query'=>[
							[
							'key'=>'exhibition_start_day',
							'value'=>date('Ymd'),
							'compare'=>'>=',
							'inclusive'=>true,
							]
						]
					);
					$s_query = new WP_Query( $s_query_args );
					$s_query_posts = $s_query->get_posts();
					$s_max_num_pages = $s_query->max_num_pages;
					wp_reset_postdata();

					//取得した投稿のIDだけの配列
					foreach($s_query->posts as $val){
						$s_query_id[] = $val->ID;
					}

					$meta_query_args = array(
						'posts_per_page'=>-1,//実際のperpage指定は後述$posts_per_page
						'post_type'=>'exhibition-indonesia',
						'orderby'=>'meta_value',
						'meta_key'=>'exhibition_start_day',
						'order'=>'DESC',
						'paged'=>$paged,
						'meta_query'=>[
							'relation'=>'AND',
							[
								[
									'key'=>'exhibition_start_day',
									'value'=>date('Ymd'),
									'compare'=>'>=',
									'inclusive'=>true,
								]
							],
							[
								'relation'=>'OR',
								[
									'key'=>'exhibition_name_jp',
									'value' => isset($_GET['order_keyword']) ? $_GET['order_keyword'] : '',
									'compare' => 'LIKE'
								],
								[
									'key'=>'exhibition_area',
									'value' => isset($_GET['order_keyword']) ? $_GET['order_keyword'] : '',
									'compare' => 'LIKE'
								],
								[
									'key'=>'exhibition_place',
									'value' => isset($_GET['order_keyword']) ? $_GET['order_keyword'] : '',
									'compare' => 'LIKE'
								],
								[
									'key'=>'exhibition_item',
									'value' => isset($_GET['order_keyword']) ? $_GET['order_keyword'] : '',
									'compare' => 'LIKE'
								],
								[
									'key'=>'exhibition_author',
									'value' => isset($_GET['order_keyword']) ? $_GET['order_keyword'] : '',
									'compare' => 'LIKE'
								],
								[
									'key'=>'exhibition_url',
									'value' => isset($_GET['order_keyword']) ? $_GET['order_keyword'] : '',
									'compare' => 'LIKE'
								]
							]

						]
					);
					$meta_query = new WP_Query( $meta_query_args );
					$meta_query_posts = $meta_query->get_posts();
					$meta_max_num_pages = $meta_query->max_num_pages;

					//取得した投稿のIDだけの配列
					foreach($meta_query->posts as $val){
						$meta_query_id[] = $val->ID;
					}

					$s_query_id = $s_query_id?$s_query_id:[];
					$meta_query_id = $meta_query_id?$meta_query_id:[];

					$posts_arr_id = array_merge( $s_query_id, $meta_query_id );
					$posts_arr = array_merge( $meta_query_posts, $s_query_posts );

					$unique_posts = array_unique($posts_arr, SORT_REGULAR);
					$posts_per_page = 10; // 1ページあたりの表示数
					$total_posts = count($unique_posts);
					$max_num_pages = ceil($total_posts / $posts_per_page);
					
					// ページごとの記事データの取得
					$paged = get_query_var('paged') ? get_query_var('paged') : 1;
					$offset = ($paged - 1) * $posts_per_page;
					$current_page_posts = array_slice($unique_posts, $offset, $posts_per_page);


					foreach($current_page_posts as $post):setup_postdata($post);
					?>
					<article class="tenji_item">
						<h2 class="section_title">
							<?php the_title(); ?>
						</h2>
						<?php
						$args['post']=$post;
						get_template_part('exhibition_summary',null,$args);
						?>
						<?php if($post->post_content):?>
						<a class="exhibition_to_detail" href="<?php the_permalink(); ?>">詳細はこちら</a>
						<?php endif; ?>
					</article>
					<?php endforeach; ?>
					<?php 
					wp_reset_postdata();
					?>
				

				

				<div class="bounceId01">
					<h2 class="new_h2_ttl">子どもも大人も夢中に！<br>インドネシア市場で注目の販促ツール<br><span class="orange ttl_under_line">ガチャガチャマシーンを活用して売上増を実現</span></h2>
					
					<div class="bounce-ideas-off-client_toplist">
						<ul>
							<li>インドネシア人見込み客の集客に悩んでいる</li>
							<li>店舗に子供が集まるような仕掛けを企画したい</li>
							<li>他のお店が真似しづらいPR方法を実施したい</li>
							<li>日本らしさがお客様に伝わるような販促をしたい</li>
						</ul>
					</div>
					</div>

				<div class="inner1000">
				<figure class="wp-block-image size-full"><img src="https://kakemochi.co.jp/wp/wp-content/uploads/2025/07/5300f1cc9644c25db8f21fab329c5360-1.png" alt="" class="wp-image-12787"/></figure>
				</div>

				<div class="service_ttl_area" id=foreign_company>
					<p class="font_w700 font_s150 txt_mb0">インドネシアでも人気急上昇中</p><br>
					<p class="font_w700 font_s300 txt_mb0 font_c_w">ガチャガチャマシーンを使った販促支援</p>
    				<div style="margin-top: 50px;"></div>
					<p class="font_w700 font_s300 txt_mb0 font_c_w">funbox × カケモチ</p>
				</div>

				<h2>funboxのガチャガチャマシーンの魅力や強み</h2>
				<div class="common_parts_w1000">
					<ul class="companyformation_list01 bace_ul_clear">
						<li>
							<div class="img"><img src="https://kakemochi.co.jp/wp/wp-content/themes/kakemochi/img/online-secretary/online-secretary_i06.png"></div>
							<p class="companyformation_list01_ttl">短納期</p>
							<p class="txt">インドネシア国内の自社工場に常時在庫を保有しており、スピーディーな対応が可能です。ご注文から最短1週間以内での発送が可能なため、急なプロモーションやイベントにも柔軟に対応できます。</p>
						</li>
						<li>
							<div class="img"><img src="https://kakemochi.co.jp/wp/wp-content/themes/kakemochi/img/online-secretary/online-secretary_i05.png"></div>
							<p class="companyformation_list01_ttl">配送効率</p>
							<p class="txt">本体だけでなく、中身のアイテムやカプセルも一括配送に対応。輸送コストを抑えつつ、到着後すぐに設置・稼働が可能です。現地倉庫からの発送により、関税や煩雑な輸入手続きも最小限に抑えられます。</p>
						</li>
						<li>
							<div class="img"><img src="https://kakemochi.co.jp/wp/wp-content/themes/kakemochi/img/online-secretary/online-secretary_i04.png"></div>
							<p class="companyformation_list01_ttl">独自性</p>
							<p class="txt">お客様のご要望に応じて、オリジナルアイテムの企画・製造も承っております。企業ロゴ入りノベルティ、コラボ商品、限定デザインなど、他にはないオリジナルガチャ展開が可能です。</p>
						</li>
					</ul>
				<div class="founding-of-a-company_new_txt01">
					<p>インドネシアでは、日本のアニメやマンガ、ゲームが長年にわたって人気を集めてきました。<br><br>そうした背景の中で、ガチャガチャマシーンもまた自然と注目される存在となりました。特にSNSの普及により、開封動画や「当たりを引く」体験を共有する文化が若年層の間で流行しています。また、物理的なグッズを手に入れる楽しさはデジタル中心の娯楽とは異なる満足感を提供しており、「ランダムでかわいいものが出てくる」という体験が新鮮かつ魅力的に映っています。<br><br>このようにして、ガチャガチャマシーンは単なる日本文化の輸入品ではなく、現地のライフスタイルに組み込まれつつあるのです。</p>
				</div>
				</div>

				<div class="inner1000">
				<figure class="wp-block-image size-full"><img src="https://kakemochi.co.jp/wp/wp-content/uploads/2025/07/a28c4d9eacf41631f4ca6b15e2052b5b.png" alt="" class="wp-image-12790"/></figure>
				</div>

					<div style="margin-top: 50px;"></div>
					<div id="contact_new_area">
						<section class="new_contact_box area">
							<div class="inner">
								<h4 class="contact_ttl contact_ttl_new">ガチャガチャマシーンを使って来店客の満足度を高めたい企業様へ</h4>
								<p class="contact_new_sub">お問い合わせ後にfunbox担当者よりご連絡させていただきます</p>
								<p class="contact_new_btns"><a href="https://kakemochi.co.jp/contact/"><img  src="https://kakemochi.co.jp/wp/wp-content/themes/kakemochi/img/cross-border-e-commerce/new2023/new_btn01.png" alt="お問い合わせはこちら"></a></p>
											
							</div>			
						</section>
					</div>
				<!-- funbox様コンテツ -->

				<?php 
				$GLOBALS['wp_query']->max_num_pages = $max_num_pages;
				get_template_part('pager');
				 ?>

				<div class="exhibition_past_leading">
					過去に開催された展示会情報は<a href="<?php echo home_url(); ?>/exhibition-indonesia/?mode=list">こちら</a>
				</div>
				

				</section>
				<!-- member01 end -->	
				
				<?php if(get_field('company_nav') == 'オン'): ?>
				<?php get_template_part('link_company'); ?>
				<?php endif; ?>
				
			</article>
			<!-- article end -->
		</main>
		<!-- main end -->
<?php if($post->post_name != 'contact' && $post->post_name != 'sales'): ?>
<?php get_template_part('parts/contact/contact'); ?>
<?php get_template_part('about'); ?>
<?php endif; ?>
<?php get_footer(); ?>
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