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
							<li class="active">添加店铺</li>
						</ol>
					</div>
				</div>
				<div class="box itembox" style="padding-top:10px;margin-bottom:0px;">
					<h4 class="title" style="padding:10px;">
						添加店铺
						<a class="btn btn-primary pull-right" href="index.php?exam-master-basic-shop&page={x2;$page}{x2;$u}">店铺管理</a>
					</h4>
			        <form action="index.php?exam-master-basic-addshop" method="post" class="form-horizontal">
						<fieldset>
						<div class="form-group">
							<label for="shopnumber" class="control-label col-sm-2">店铺编号：</label>
							<div class="col-sm-4">
								<input class="form-control" name="args[number]" id="number" type="text" size="30" value="" needle="needle" alt="请输入店铺编号" />
							</div>
						</div>
						<div class="form-group">
							<label for="shopname" class="control-label col-sm-2">店铺名称：</label>
							<div class="col-sm-4">
								<input class="form-control" name="args[name]" id="name" type="text" size="30" value="" needle="needle" alt="请输入店铺名称" />
							</div>
						</div>
						<div class="form-group">
							<label for="basicareaid" class="control-label col-sm-2">所属大区：</label>
							<div class="col-sm-4">
								<select class="form-control" id="areaid" name="args[areaid]" needle="needle" msg="您必须选择店铺所在地区">
				        		<option value="">请选择所在地区</option>
						  		{x2;tree:$areas,area,aid}
						  		<option value="{x2;v:area['areaid']}"{x2;if:v:area['areaid'] == $basic['basicareaid']} selected{x2;endif}>{x2;v:area['area']}</option>
						  		{x2;endtree}
						  		</select>
							</div>
						</div>

						<div class="form-group">
						  	<label for="" class="control-label col-sm-2"></label>
						  	<div class="col-sm-9">
							  	<button class="btn btn-primary" type="submit">提交</button>
							  	<input type="hidden" name="page" value="{x2;$page}"/>
							  	<input type="hidden" name="insertshop" value="1"/>
							  	{x2;tree:$search,arg,shopid}
								<input type="hidden" name="search[{x2;v:key}]" value="{x2;v:arg}"/>
								{x2;endtree}
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