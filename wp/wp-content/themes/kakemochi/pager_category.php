<?php 
$total_count = isset($args['total_count']) ? intval($args['total_count']) : 0;
$per_page = isset($args['per_page']) && intval($args['per_page']) > 0 ? intval($args['per_page']) : 10;
$now_url = isset($args['now_url']) ? $args['now_url'] : '';
$paged = isset($args['paged']) && intval($args['paged']) > 0 ? intval($args['paged']) : 1;
$total_page = ceil($total_count/$per_page);
$next_1 = $paged+1<=$total_page?$paged+1:null;
$next_2 = $paged+2<=$total_page?$paged+2:null;
$prev_1 = $paged-1>0?$paged-1:null;
$prev_2 = $paged-2>0?$paged-2:null;
?>
<ul class="pager">
	<?php if($prev_2): ?>
	<li>
		<a href="<?php echo $now_url.'?page='.$prev_2; ?>"><?php echo $prev_2; ?></a>
	</li>
	<?php endif; ?>

	<?php if($prev_1): ?>
	<li>
		<a href="<?php echo $now_url.'?page='.$prev_1; ?>"><?php echo $prev_1; ?></a>
	</li>
	<?php endif; ?>

	<li>
		<?php echo $paged; ?>
	</li>

	<?php if($next_1): ?>
	<li>
		<a href="<?php echo $now_url.'?page='.$next_1; ?>"><?php echo $next_1; ?></a>
	</li>
	<?php endif; ?>

	<?php if($next_2): ?>
	<li>
		<a href="<?php echo $now_url.'?page='.$next_2; ?>"><?php echo $next_2; ?></a>
	</li>
	<?php endif; ?>

</ul>