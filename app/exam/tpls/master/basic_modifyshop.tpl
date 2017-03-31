{x2;if:!$userhash}
{x2;include:header}
<body>
{x2;include:nav}
<div class="container-fluid">
	<div class="row-fluid">
		<div class="main">
			<div class="col-xs-2" style="padding-top:10px;margin-bottom:0px;">
				{x2;include:menu}
			</div>
			<div class="col-xs-10" id="datacontent">
{x2;endif}
				<div class="box itembox" style="margin-bottom:0px;border-bottom:1px solid #CCCCCC;">
					<div class="col-xs-12">
						<ol class="breadcrumb">
							<li><a href="index.php?{x2;$_app}-master">{x2;$apps[$_app]['appname']}</a></li>
							<li><a href="index.php?{x2;$_app}-master-basic-shop">店铺管理</a></li>
							<li class="active">修改店铺</li>
						</ol>
					</div>
				</div>
				<div class="box itembox" style="padding-top:10px;margin-bottom:0px;">
					<h4 class="title" style="padding:10px;">
						修改店铺
						<a class="btn btn-primary pull-right" href="index.php?exam-master-basic-shop&page={x2;$page}{x2;$u}">店铺设置</a>
					</h4>
			        <form action="index.php?exam-master-basic-modifyshop" method="post" class="form-horizontal">
						<fieldset>
						<div class="form-group">
							<label for="shopnumber" class="control-label col-sm-2">店铺编号：</label>
							<div class="col-sm-4">
								<input class="form-control" name="args[number]" id="number" type="text" size="30" value="" needle="needle" alt="请输入店铺编号" />
							</div>
						</div>
						<div class="form-group">
							<label for="area" class="control-label col-sm-2">店铺名称：</label>
							<div class="col-sm-4">
								<input class="form-control" name="args[area]" id="area" type="text" value="{x2;$area['area']}" needle="needle" msg="您必须输入一个地区名称" />
							</div>
						</div>
						<div class="form-group">
							<label for="areacode" class="control-label col-sm-2">所属大区：</label>
							<div class="col-sm-4">
								<input class="form-control" name="args[areacode]" id="areacode" type="text" value="{x2;$area['areacode']}" needle="needle" msg="您必须输入地区邮编，且不能与原有地区重复" />
							</div>
						</div>
						<div class="form-group">
						  	<label for="areacode" class="control-label col-sm-2"></label>
						  	<div class="col-sm-9">
							  	<button class="btn btn-primary" type="submit">提交</button>
								<input type="hidden" name="modifyarea" value="1"/>
								<input type="hidden" name="areaid" value="{x2;$area['areaid']}"/>
								<input type="hidden" name="page" value="{x2;$page}"/>
							</div>
						</div>
						</fieldset>
					</form>
				</div>
			</div>
{x2;if:!$userhash}
		</div>
	</div>
</div>
{x2;include:footer}
</body>
</html>
{x2;endif}