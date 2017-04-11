		<header class="container-fluid" style="background-color:#9856a9;">
			<h5 class="text-center">
				<em style="font-size:2rem;" class="pull-left glyphicon glyphicon-chevron-left" onclick="javascript:$.goPrePage();"></em>
				学习考试
				<em style="font-size:2rem;" class="pull-right glyphicon glyphicon-home" onclick="javascript:$.goPage($('#page1'));"></em>
			</h5>
		</header>
		<div class="container-fluid">
			<h4 class="title" style="padding:10px;">学习考试</h4>
				<div class="col-xs-4">
					<a href="index.php?exam-phone-exercise" class="thumbnail ajax" style="border:0px;" data-target="lesson" data-page="lesson">
						<img src="app/core/styles/img/t1.png" alt="" width="100%">
					</a>
					<h5 class="text-center">课后练习</h5>
				</div>
				{x2;if:!$data['currentbasic']['basicexam']['model'] || $data['currentbasic']['basicexam']['model'] == 2}
				<div class="col-xs-4">
					<a href="index.php?exam-phone-exam" class="thumbnail ajax" style="border:0px;" data-target="exams" data-page="exams">
						<img src="app/core/styles/img/t3.png" alt="" width="100%">
					</a>
					<h5 class="text-center">正式考试</h5>
				</div>
				{x2;endif}
			<!-- {x2;tree:$basics,basic,bid}
			<div style="clear:both;overflow:hidden;background:#FFFFFF;margin-top:0.5rem">
				<div class="col-xs-4">
					<a href="index.php?{x2;$_app}-phone-index-setCurrentBasic&basicid={x2;v:basic['basicid']}" class="ajax" data-page="basic" data-target="basic"><img src="{x2;if:v:basic['basicthumb']}{x2;v:basic['basicthumb']}{x2;else}app/exam/styles/image/paper.png{x2;endif}" style="width:10rem;margin-top:0.5rem"/></a>
				</div>
				<div class="col-xs-8" style="padding:0.2rem;">
					<div class="text-left" style="padding:0.2rem;">
						<a href="index.php?{x2;$_app}-phone-index-setCurrentBasic&basicid={x2;v:basic['basicid']}" class="ajax" data-page="basic" data-target="basic">
							<h5>{x2;v:basic['basic']}</h5>
							<p style="font-size:1rem;">{x2;v:basic['basicdescribe']}</p>
						</a>
					</div>
				</div>
			</div>
			{x2;endtree} -->
		</div>