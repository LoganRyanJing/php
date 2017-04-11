{x2;include:header}
<body>
{x2;include:nav}
<div class="container-fluid">
	<div class="row-fluid">
		<div class="main box itembox">
			<h4 class="title">学习考试</h4>
				{x2;if:!$data['currentbasic']['basicexam']['model'] || $data['currentbasic']['basicexam']['model'] == 1}
				<!-- <div class="col-xs-3" style="width:20%">
					<a href="index.php?exam-app-lesson" class="thumbnail" style="border:0px;">
						<img src="app/core/styles/img/t1.png" alt="" width="100%">
					</a>
					<h5 class="text-center">课后练习</h5>
				</div> -->
				<div class="col-xs-3" style="width:20%">
					<a href="index.php?exam-app-exercise" class="thumbnail" style="border:0px;">
						<img src="app/core/styles/img/t4.png" alt="" width="100%">
					</a>
					<h5 class="text-center">课后练习</h5>
				</div>
				<!-- <div class="col-xs-3" style="width:20%">
					<a href="index.php?exam-app-exampaper" class="thumbnail" style="border:0px;">
						<img src="app/core/styles/img/t2.png" alt="" width="100%">
					</a>
					<h5 class="text-center">模拟考试</h5>
				</div> -->
				{x2;endif}
				{x2;if:!$data['currentbasic']['basicexam']['model'] || $data['currentbasic']['basicexam']['model'] == 2}
				<div class="col-xs-3" style="width:20%">
					<a href="index.php?exam-app-exam" class="thumbnail" style="border:0px;">
						<img src="app/core/styles/img/t3.png" alt="" width="100%">
					</a>
					<h5 class="text-center">正式考试</h5>
				</div>
				{x2;endif}
			</div>
		</div>
	</div>
</div>
<div class="container-fluid hide">
	<div class="row-fluid">
		<div class="main">
			<div class="col-xs-4 box itembox">
				<h4 class="title">公告</h4>
				<ul class="list-unstyled">
					<li><a href="">购物指南</a></li>
					<li><a href="">购物指南</a></li>
					<li><a href="">购物指南</a></li>
					<li><a href="">购物指南</a></li>
					<li><a href="">购物指南</a></li>
				</ul>
			</div>
			<div class="col-xs-4 box itembox split">
				<h4 class="title">新闻</h4>
				<ul class="list-unstyled">
					<li><a href="">购物指南</a></li>
					<li><a href="">购物指南</a></li>
					<li><a href="">购物指南</a></li>
					<li><a href="">购物指南</a></li>
					<li><a href="">购物指南</a></li>
				</ul>
			</div>
			<div class="col-xs-4 box itembox">
				<h4 class="title">帮助</h4>
				<ul class="list-unstyled">
					<li><a href="">购物指南</a></li>
					<li><a href="">购物指南</a></li>
					<li><a href="">购物指南</a></li>
					<li><a href="">购物指南</a></li>
					<li><a href="">购物指南</a></li>
				</ul>
			</div>
		</div>
	</div>
</div>
{x2;include:footer}
</body>
</html>