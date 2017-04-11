{x2;if:!$userhash}
{x2;include:header}
<body>
<div id="content">
    <div class="pages" id="page1">
{x2;endif}
    	<header class="container-fluid" style="background-color:#9856a9;">
			<h5 class="text-center">
				<em style="font-size:2rem;" class="pull-left glyphicon glyphicon-home"></em>
				<span class="ttlo">千色店在线考试系统</span>
				<a style="font-size:2rem;color:#FFFFFF;" href="index.php?user-phone" class="pull-right glyphicon glyphicon-user ajax" data-target="user" data-page="user"></a>
			</h5>
		</header>
    	<div class="container-fluid" style="overflow:hidden;margin-top:1rem;margin-bottom:0.4rem;">
			<div class="swiper-container">
	    		<div class="swiper-wrapper">
		    		{x2;tree:$contents[2]['data'],content,cid}
		    		<div class="swiper-slide">
		    			<a href="index.php?content-phone-content&contentid={x2;v:content['contentid']}" class="ajax" data-page="rollpage" data-target="rollpage">
		    				<img src="{x2;v:content['contentthumb']}">
		    			</a>
		    		</div>
		    		{x2;endtree}
	    		</div>
	    		<div class="swiper-pagination"></div>
	    	</div>
		</div>
		<div class="container-fluid">
			<div style="clear:both;overflow:hidden;" class="items">
				<div class="col-xs-6" style="padding:0.2rem;">
					<div class="text-center" style="background:#712704;height:14rem;padding:0.2rem;">
						<a href="index.php?exam-phone-index" class="ajax" data-page="exam" data-target="exam">
							<h5>在线考试</h5>
							<p style="font-size:1rem;">课后练习 正式考试</p>
							<p>
								<img src="app/core/styles/img/item.png" style="width:6rem;"/>
							</p>
						</a>
					</div>
				</div>
				<div class="col-xs-6" style="padding:0.2rem;">
					<div class="text-center" style="background:#036803;height:14rem;padding:0.2rem;">
						<a href="index.php?content-phone-category" data-target="contentcategory" data-page="contentcategory" class="ajax">
							<h5>考试资讯</h5>
							<p style="font-size:1rem;">考试资讯 相关信息</p>
							<p>
								<img src="app/core/styles/img/item.png" style="width:6rem;"/>
							</p>
						</a>
					</div>
				</div>
			</div>
			<h4 style="overflow:hidden;clear:both;padding-top:0.2rem;">
				<span class="pull-left" style="width:35%"><hr /></span>
				<span class="col-xs-4 text-center" style="width:30%;line-height:4rem;">考试学习</span>
				<span class="pull-right" style="width:35%"><hr /></span>
			</h4>
			<div style="clear:both;padding:1.5rem;background-color:#FFFFFF;margin-bottom:1rem;" class="col-xs-12">
				<div class="col-xs-4">
					<a href="index.php?exam-phone-exercise" class="thumbnail ajax" style="border:0px;" data-target="exercise" data-page="exercise">
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
				<div class="col-xs-4">
					<a href="index.php?exam-phone-score" class="thumbnail ajax" style="border:0px;" data-target="scores" data-page="scores">
						<img src="app/core/styles/img/t8.png" alt="" width="100%">
					</a>
					<h5 class="text-center">成绩单</h5>
				</div>
			</div>
			
			{x2;tree:$contents,contents,cid}
			{x2;if:v:key != 2}
			<div>
				<h4 style="overflow:hidden;clear:both;padding-top:0.2rem;">
					<span class="pull-left" style="width:35%"><hr /></span>
					<span class="col-xs-4 text-center" style="width:30%;line-height:4rem;"><a href="">{x2;substring:$rcats[v:key]['catname'],15}</a></span>
					<span class="pull-right" style="width:35%"><hr /></span>
				</h4>
			</div>
			<div style="clear:both;padding:1.5rem;background-color:#FFFFFF;margin-bottom:1rem;" class="col-xs-12">
				{x2;tree:v:contents['data'],content,cid}
				<div class="media">
					<a class="pull-left ajax" href="index.php?content-phone-content&contentid={x2;v:content['contentid']}" data-target="contentpage" data-page="contentpage" style="width:8rem;">
						<img src="{x2;v:content['contentthumb']}" style="width:8rem;" alt="{x2;v:content['contenttitle']}">
					</a>
					<div class="media-body">
						<h5 class="media-heading"><a class="ajax" href="index.php?content-phone-content&contentid={x2;v:content['contentid']}" data-target="contentpage" data-page="contentpage">{x2;v:content['contenttitle']}</a></h5>
						<p style="font-size:1rem;">{x2;substring:v:content['contentdescribe'],81} </p>
					</div>
				</div>
				{x2;endtree}
			</div>
			{x2;endif}
			{x2;endtree}
		</div>
		<script>
			new Swiper('.swiper-container',{
				"pagination":".swiper-pagination",
				"loop":true,
				"autoplay": 3000,
			});
		</script>
		{x2;include:footer}
{x2;if:!$userhash}
    </div>
</div>
</body>
</html>
{x2;endif}