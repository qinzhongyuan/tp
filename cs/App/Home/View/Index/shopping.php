<include file="Common:head" />
<div class="shopping">
	<div class="shopping_top">
		<div id="all" style="color:#FF4401;border-bottom:2px solid #FF4401" onclick="nav(this)">全部 <span></span></div>
		<div id="nconsume" onclick="nav(this)">未消费 <span></span></div>
		<div id="yconsume" onclick="nav(this)">已消费 <span></span></div>
		<div id="past" onclick="nav(this)">已过期</div>
    </div>
    <?php if(!$data){?> <div class="product_more"><img src="__PUBLIC__/Home/img/order.jpg"></div><?php }else{?>
	<div class="shopping_list">
	<?php foreach ($data as $key => $value) { ?>
		<?php if($value['indent_static']<=3){?>
		<div class="aa all">
		<div class="shopping_div" style="background-image: url('/Public/Home/img/<?php if($value['indent_static']==2){echo 'spent.jpg';}else if($value['indent_static']==3){echo 'past_img.jpg';}?>')">
			<div class='shopping_title'><?php echo $value['out_trade_no']?> <span><?php echo $value['address_phone']?></span></div>
			<div class="shopping_border">
				<div class='shopping_left'>
					<div class="shopping_name"><?php echo $value['prod_name'];?></div>
					<div class="shopping_time"><?php echo$value['prod_product_time'].'分钟 | '.prod_part($value['prod_part']);?></div>
					<div class="end_time"><p>有效期 <?php echo date('Y/m/d H:i:s',$value['reserve_time']);?></p></div>
				</div>
				<div class='shopping_right'>
					<div  class="shopping_img"><span><?php echo $value['cash_fee']?></span><div></div></div>
					<div class="shopping_endimg"><?php echo $value['nonce_str']?></div>
				</div>
		    </div>
			<div class="shopping_address"><p>地址：<?php echo $value['address']?></p></div>
		</div>
		</div>
		<?php }?>
		<div <?php if($value['indent_static']==1){echo 'class="aa nconsume"';}elseif($value['indent_static']==2){echo 'class="aa yconsume"';}elseif($value['indent_static']==3){echo 'class="aa past"';} ?> style="display: none;">
		<div class="shopping_div" style="background-image: url('/Public/Home/img/<?php if($value['indent_static']==2){echo 'spent.jpg';}else if($value['indent_static']==3){echo 'past_img.jpg';}?>')">
			<div class='shopping_title'><?php echo $value['out_trade_no']?> <span><?php echo $value['address_phone']?></span></div>
			<div class="shopping_border">
				<div class='shopping_left'>
					<div class="shopping_name"><?php echo $value['prod_name'];?></div>
					<div class="shopping_time"><?php echo$value['prod_product_time'].'分钟 | '.prod_part($value['prod_part']);?></div>
					<div class="end_time"><p>有效期 <?php echo date('Y/m/d H:i:s',$value['reserve_time']);?></p></div>
				</div>
				<div class='shopping_right'>
					<div  class="shopping_img"><span><?php echo $value['cash_fee']?></span><div></div></div>
					<div class="shopping_endimg"><?php echo $value['nonce_str']?></div>
				</div>
		    </div>
			<div class="shopping_address"><p>地址：<?php echo $value['address']?></p></div>
		</div>
		</div>

	<?php }?>
</div>
</div>
<script type="text/javascript">
	function nav(obj){
		var obj = $(obj);
		var id = obj.attr('id');
		$('.aa').css('display','none');
		$('.'+id).css('display','block');
		$('.shopping_top div').css('border-bottom','1px solid #E8E8E8');
		$('#'+id).css('border-bottom','2px solid #FF4401');
		$('.shopping_top div').css('color','');
		$('#'+id).css('color','#FF4401');
	}
</script>
<?php }?>
<include file="Common:foot" />
<script type="text/javascript">
$(function() {
　　if (window.history && window.history.pushState) {
　　$(window).on('popstate', function () {
　　window.history.pushState('forward', null, '#');
　　window.history.forward(1);
　　});
　　}
　　window.history.pushState('forward', null, '#'); //在IE中必须得有这两行
　　window.history.forward(1);
　　})
</script>