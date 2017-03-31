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
							<li class="active">店铺设置</li>
						</ol>
					</div>
				</div>
				<div class="box itembox" style="padding-top:10px;margin-bottom:0px;">
					<h4 class="title" style="padding:10px;">
						店铺设置
						<a class="btn btn-primary pull-right" href="index.php?exam-master-basic-addshop&page={x2;$page}{x2;$u}">添加店铺</a>
					</h4>
			        <table class="table table-hover table-bordered">
						<thead>
							<tr class="info">
			                    <th>店铺ID</th>
			                    <th>大区</th>
								<th>店铺名称</th>
								<th>店铺编号</th>
								<th>员工数量</th>
								<th>操作</th>
			                </tr>
			            </thead>
			            <tbody>
		                    {x2;tree:$shops['data'],shop,shopid}
							<tr>
								<td>{x2;v:shop['shopid']}</td>
								<td>{x2;v:shop['areaid']}</td>
								<td>{x2;v:shop['name']}</td>
								<td>{x2;v:shop['number']}</td>
								<td>{x2;v:shop['employee']}</td>
								<!-- <td>{x2;if:v:area['arealevel']}<em class="glyphicon glyphicon-ok"></em>{x2;else}<em class="glyphicon glyphicon-remove"></em>{x2;endif}</td> -->
								<td>
									<div class="btn-group">
			                    		<a class="btn" href="index.php?exam-master-basic&search[basicareaid]={x2;v:area['areaid']}&page={x2;$page}{x2;$u}" title="考场"><em class="glyphicon glyphicon-th-list"></em></a>
			                    		<a class="btn" href="index.php?exam-master-basic-modifyshop&shopid={x2;v:shop['shopid']}&page={x2;$page}{x2;$u}" title="修改"><em class="glyphicon glyphicon-edit"></em></a>
										<a class="btn ajax" href="index.php?exam-master-basic-delarea&areaid={x2;v:area['areaid']}&page={x2;$page}{x2;$u}" title="删除"><em class="glyphicon glyphicon-remove"></em></a>
			                    	</div>
								</td>
							</tr>
							{x2;endtree}
			        	</tbody>
			        </table>
			        <ul class="pagination pull-right">
						{x2;$shops['pages']}
					</ul>
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