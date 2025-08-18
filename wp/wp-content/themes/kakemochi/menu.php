<?php 
$parent_category = get_category_by_slug('for-column');
$parent_id = $parent_category ? $parent_category->term_id : 0;
$args = array(
	'exclude' => '58,1',
	'parent' => $parent_id, // コラム用カテゴリーのみ対象
);
$categories = get_categories($args);
?>
<div id="nav_sp" class="sp">
	<div id="btn_nav"><span></span><span></span><span></span></div>
	<nav>
		<p class="ttl">MENU</p>

		<div class="nav_search">
			<form action="<?php echo home_url(); ?>/search_result/#case" method="get">
				<dl>
					<dd>
						<select name="order_category[]" class="search_select">
							<option value="">カテゴリーを選択</option>
							<?php foreach ($categories as $category): ?>
								<option value="<?php echo $category->name; ?>"><?php echo $category->name; ?></option>
							<?php endforeach; ?>
						</select>
					</dd>
				</dl>
				<div class="input_text">
					<input type="text" name="order_keyword" placeholder="キーワードで検索">
					<button type="submit"><img src="<?php echo get_theme_file_uri(); ?>/img/icon_search.svg" alt=""></button>
				</div>
			</form>
		</div>


		<ul class="wrap">
			<li><a href="<?php echo home_url(); ?>/column/price-list-for-indonesia-market-entry-services/" class="drp_icon gnav_top_f">料金表</a></li>
			<li><a href="<?php echo home_url(); ?>/visa-services/" class="drp_icon gnav_top_f">ビザ申請</a></li>
			<li><a href="<?php echo home_url(); ?>/founding-services/inspection-tour/" class="drp_icon gnav_top_f">現地視察</a></li>
			<li><a href="<?php echo home_url(); ?>/founding-services/" class="drp_icon gnav_top_f">法人設立</a></li>
			<li><a href="<?php echo home_url(); ?>/sales-services/affluent-market-sales/" class="drp_icon gnav_top_f">富裕層向け</a></li>
			<li><a href="<?php echo home_url(); ?>/company/" class="drp_icon gnav_top_f">企業情報</a></li>
			<li><a href="<?php echo home_url(); ?>/white-paper-download/" class="drp_icon gnav_top_f">お役立ち資料</a></li>
		</ul>

		<!--<div class="nav_contact">
			<p class="document"><a href="https://lin.ee/BM45FJY" target="_blank"><img alt="LINEで相談" src="<?php echo get_theme_file_uri(); ?>/img/common/header_line.png"></a></p>
			<p class="contact"><a href="<?php echo home_url(); ?>/contact/"><img src="<?php echo get_theme_file_uri(); ?>/img/common/header_btn02.png" alt="お問い合わせ"></a></p>
		</div>-->

		<div class="sp_sub_menu_cta">
		<?php
			global $post;
			if (isset($post)) {
				$cta_file_name = get_post_meta($post->ID, 'submenu_cta_file', true);
				if ($cta_file_name) {
					$file_path = get_template_directory() . '/parts/main/sp/' . $cta_file_name;
					if (file_exists($file_path)) {
						include $file_path;
					}
				}
			}
			?>

		</div>
		<!-- /.sp_sub_menu_cta -->

	</nav>
</div><!-- nav sp end -->