
		<header class="container-fluid" style="background-color:#337AB7;">
			<h5 class="text-center">
				<em style="font-size:2rem;" class="pull-left glyphicon glyphicon-chevron-left" onclick="javascript:$.goPrePage();"></em>
				我的考场
				<em style="font-size:2rem;" class="pull-right glyphicon glyphicon-home" onclick="javascript:$.goPage($('#page1'));"></em>
			</h5>
		</header>

<div class="container-fluid">
		
			<h4 class="title" style="padding:10px;">考场列表<a href="index.php?exam-phone" data-page="exam" data-target="exam" class="ajax btn btn-primary pull-right"><em class="glyphicon glyphicon-tasks"></em> 我的考场</a></h4>
			
			
				{x2;tree:$basics['data'],basic,bid}
				<div style="clear:both;overflow:hidden;background:#FFFFFF;margin-top:0.5rem">
					<div class="col-xs-4">
						<a href="index.php?exam-phone-basics-detail&basicid={x2;v:basic['basicid']}" class="ajax thumbnail" style="position:relative;" data-page="exam" data-target="exam">
							{x2;if:$data['openbasics'][v:basic['basicid']]}
							<img src="app/core/styles/img/opened.png" style="position:absolute;right:4px;top:4px;">
							{x2;elseif:v:basic['basicdemo']}
							<img src="app/core/styles/img/free.png" style="position:absolute;right:4px;top:4px;">
							{x2;endif}
							<img src="{x2;if:v:basic['basicthumb']}{x2;v:basic['basicthumb']}{x2;else}app/core/styles/img/item.jpg{x2;endif}" alt="" >
						</a>

					</div>
					<div class="col-xs-8">
						<h5 class="text-center">
							{x2;v:basic['basic']}
						</h5>
					</div>
				</div>
				{x2;if:v:bid % 3 == 0}
				<div class="col-xs-6"><hr /></div>
				{x2;endif}
				{x2;endtree}
			
			<div class="col-xs-12" style="padding-left:0px;">
				<ul class="pagination pull-right">
					{x2;$basics['pages']}
				</ul>
			</div>
		
</div>

