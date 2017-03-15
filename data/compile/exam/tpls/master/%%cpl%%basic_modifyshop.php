<?php if(!$this->tpl_var['userhash']){ ?>
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
<?php } ?>
				<div class="box itembox" style="margin-bottom:0px;border-bottom:1px solid #CCCCCC;">
					<div class="col-xs-12">
						<ol class="breadcrumb">
							<li><a href="index.php?<?php echo $this->tpl_var['_app']; ?>-master"><?php echo $this->tpl_var['apps'][$this->tpl_var['_app']]['appname']; ?></a></li>
							<li><a href="index.php?<?php echo $this->tpl_var['_app']; ?>-master-basic-shop">店铺管理</a></li>
							<li class="active">修改店铺</li>
						</ol>
					</div>
				</div>
				<div class="box itembox" style="padding-top:10px;margin-bottom:0px;">
					<h4 class="title" style="padding:10px;">
						修改店铺
						<a class="btn btn-primary pull-right" href="index.php?exam-master-basic-shop&page=<?php echo $this->tpl_var['page']; ?><?php echo $this->tpl_var['u']; ?>">店铺设置</a>
					</h4>
			        <form action="index.php?exam-master-basic-modifyshop" method="post" class="form-horizontal">
						<fieldset>
						<div class="form-group">
							<label for="area" class="control-label col-sm-2">店铺名称：</label>
							<div class="col-sm-4">
								<input class="form-control" name="args[area]" id="area" type="text" value="<?php echo $this->tpl_var['area']['area']; ?>" needle="needle" msg="您必须输入一个地区名称" />
							</div>
						</div>
						<div class="form-group">
							<label for="areacode" class="control-label col-sm-2">所属大区：</label>
							<div class="col-sm-4">
								<input class="form-control" name="args[areacode]" id="areacode" type="text" value="<?php echo $this->tpl_var['area']['areacode']; ?>" needle="needle" msg="您必须输入地区邮编，且不能与原有地区重复" />
							</div>
						</div>
						<div class="form-group">
						  	<label for="areacode" class="control-label col-sm-2"></label>
						  	<div class="col-sm-9">
							  	<button class="btn btn-primary" type="submit">提交</button>
								<input type="hidden" name="modifyarea" value="1"/>
								<input type="hidden" name="areaid" value="<?php echo $this->tpl_var['area']['areaid']; ?>"/>
								<input type="hidden" name="page" value="<?php echo $this->tpl_var['page']; ?>"/>
							</div>
						</div>
						</fieldset>
					</form>
				</div>
			</div>
<?php if(!$this->tpl_var['userhash']){ ?>
		</div>
	</div>
</div>
<?php $this->_compileInclude('footer'); ?>
</body>
</html>
<?php } ?>