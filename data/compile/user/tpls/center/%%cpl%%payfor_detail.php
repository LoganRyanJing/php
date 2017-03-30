<?php $this->_compileInclude('header'); ?>
<body>
<?php $this->_compileInclude('nav'); ?>
<div class="container-fluid">
	<div class="row-fluid">
		<div class="main">
			<div class="col-xs-2" style="padding-top:10px;margin-bottom:0px;">
				<?php $this->_compileInclude('menu'); ?>
			</div>
			<div class="col-xs-10" id="datacontent">
				<div class="box itembox" style="margin-bottom:0px;border-bottom:1px solid #CCCCCC;">
					<div class="col-xs-12">
						<ol class="breadcrumb">
							<li><a href="index.php">首页</a></li>
							<li><a href="index.php?<?php echo $this->tpl_var['_app']; ?>-app">用户中心</a></li>
							<li><a href="index.php?<?php echo $this->tpl_var['_app']; ?>-center-payfor">积分充值</a></li>
							<li class="active">订单详情</li>
						</ol>
					</div>
				</div>
				<div class="box itembox" style="padding-top:10px;">
					<h4 class="title">订单详情</h4>
					<h5>订单号：<?php echo $this->tpl_var['order']['ordersn']; ?></h5>
					<table class="table table-bordered">
						<thead>
							<td>充值金额</td>
							<td>可兑换积分</td>
							<td>下单时间</td>
						</thead>
						<tr>
							<td><?php echo $this->tpl_var['order']['orderprice']; ?></td>
							<td><?php echo $this->tpl_var['order']['orderprice']*10; ?></td>
							<td><?php echo date('Y-m-d',$this->tpl_var['order']['ordercreatetime']); ?></td>
						</tr>
						<tr>
							<td colspan="3"><p class="text-right">应付款：￥<?php echo $this->tpl_var['order']['orderprice']; ?></p></td>
						</tr>
					</table>
					<p class="text-right">
						<?php if($this->tpl_var['order']['orderstatus'] == 1){ ?>
							<a class="btn btn-success" href="index.php?user-center-payfor-wxpay&ordersn=<?php echo $this->tpl_var['order']['ordersn']; ?>" target="_blank">微信支付</a>
							<a class="btn btn-primary" href="<?php echo $this->tpl_var['payforurl']; ?>" target="_blank">支付宝支付</a>
						<?php } else { ?>
							<a class="btn"><?php echo $this->tpl_var['orderstatus'][$this->tpl_var['order']['orderstatus']]; ?></a>
						<?php } ?>
					</p>
				</div>
			</div>
		</div>
	</div>
</div>
<?php $this->_compileInclude('footer'); ?>
</body>
</html>