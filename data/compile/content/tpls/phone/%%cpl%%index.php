<?php if(!$this->tpl_var['userhash']){ ?>
<?php $this->_compileInclude('header'); ?>
<body>
<div id="content">
    <div class="pages" id="page1">
<?php } ?>
    	<header class="container-fluid" style="background-color:#337AB7;">
			<h5 class="text-center">
				<em style="font-size:2rem;" class="pull-left glyphicon glyphicon-home"></em>
				<span class="ttlo">PHPEMS模拟考试系统</span>
				<a style="font-size:2rem;color:#FFFFFF;" href="index.php?user-phone" class="pull-right glyphicon glyphicon-user ajax" data-target="user" data-page="user"></a>
			</h5>
		</header>
    	<div class="container-fluid" style="overflow:hidden;margin-top:1rem;margin-bottom:0.4rem;">
			<div class="swiper-container">
	    		<div class="swiper-wrapper">
		    		<?php $cid = 0;
 foreach($this->tpl_var['contents'][2]['data'] as $key => $content){ 
 $cid++; ?>
		    		<div class="swiper-slide">
		    			<a href="index.php?content-phone-content&contentid=<?php echo $content['contentid']; ?>" class="ajax" data-page="rollpage" data-target="rollpage">
		    				<img src="<?php echo $content['contentthumb']; ?>">
		    			</a>
		    		</div>
		    		<?php } ?>
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
							<p style="font-size:1rem;">在线练习 模拟考试</p>
							<p>
								<img src="app/core/styles/img/item.png" style="width:6rem;"/>
							</p>
						</a>
					</div>
				</div>
				<!--
				<div class="col-xs-4" style="padding:0.2rem;">
					<div class="text-center" style="background:#04477C;height:14rem;padding:0.2rem;">
						<a class="ajax" href="index.php?course-phone-index" data-target="course" data-page="course">
							<h5>视频课程</h5>
							<p style="font-size:1rem;">课程课件 在线学习</p>
							<p>
								<img src="app/core/styles/img/item.png" style="width:6rem;"/>
							</p>
						</a>
					</div>
				</div>
				-->
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
				<span class="col-xs-4 text-center" style="width:30%;line-height:4rem;">热门考场</span>
				<span class="pull-right" style="width:35%"><hr /></span>
			</h4>
			<div style="clear:both;padding:1.5rem;background-color:#FFFFFF;margin-bottom:1rem;" class="col-xs-12">
				<?php $bid = 0;
 foreach($this->tpl_var['basics']['basic'] as $key => $basic){ 
 $bid++; ?>
				<div class="media">
					<a class="pull-left ajax" href="index.php?exam-phone-index-setCurrentBasic&basicid=<?php echo $basic['basicid']; ?>" data-target="basic" data-page="basic" style="width:8rem;">
						<img src="<?php echo $basic['basicthumb']; ?>" style="width:8rem;" alt="<?php echo $basic['basic']; ?>">
					</a>
					<div class="media-body">
						<h5 class="media-heading"><a href="index.php?exam-phone-index-setCurrentBasic&basicid=<?php echo $basic['basicid']; ?>" class="ajax" data-target="basic" data-page="basic"><?php echo $basic['basic']; ?></a></h5>
						<p style="font-size:1rem;"><?php echo $basic['basicdescribe']; ?></p>
					</div>
				</div>
				<?php } ?>
			</div>
			<!--
			<div>
				<h4 style="overflow:hidden;clear:both;padding-top:0.2rem;">
					<span class="pull-left" style="width:35%"><hr /></span>
					<span class="col-xs-4 text-center" style="width:30%;line-height:4rem;">视频课程</span>
					<span class="pull-right" style="width:35%"><hr /></span>
				</h4>
			</div>
			<div style="clear:both;padding:1.5rem;background-color:#FFFFFF;margin-bottom:1rem;" class="col-xs-12">
				<?php $cid = 0;
 foreach($this->tpl_var['courses']['data'] as $key => $course){ 
 $cid++; ?>
				<div class="media">
					<a class="pull-left ajax" href="index.php?course-phone-course&csid=<?php echo $course['csid']; ?>" data-target="coursecontent" data-page="coursecontent" style="width:8rem;">
						<img src="<?php echo $course['csthumb']; ?>" style="width:8rem;" alt="<?php echo $course['cstitle']; ?>">
					</a>
					<div class="media-body">
						<h5 class="media-heading"><a class="ajax" href="index.php?course-phone-course&csid=<?php echo $course['csid']; ?>" data-target="coursecontent" data-page="coursecontent"><?php echo $course['cstitle']; ?></a></h5>
						<p style="font-size:1rem;"><?php echo $this->G->make('strings')->subString($course['csdescribe'],81); ?> </p>
					</div>
				</div>
				<?php } ?>
			</div>
			-->
			<?php $cid = 0;
 foreach($this->tpl_var['contents'] as $key => $contents){ 
 $cid++; ?>
			<?php if($key != 2){ ?>
			<div>
				<h4 style="overflow:hidden;clear:both;padding-top:0.2rem;">
					<span class="pull-left" style="width:35%"><hr /></span>
					<span class="col-xs-4 text-center" style="width:30%;line-height:4rem;"><a href=""><?php echo $this->G->make('strings')->subString($this->tpl_var['rcats'][$key]['catname'],15); ?></a></span>
					<span class="pull-right" style="width:35%"><hr /></span>
				</h4>
			</div>
			<div style="clear:both;padding:1.5rem;background-color:#FFFFFF;margin-bottom:1rem;" class="col-xs-12">
				<?php $cid = 0;
 foreach($contents['data'] as $key => $content){ 
 $cid++; ?>
				<div class="media">
					<a class="pull-left ajax" href="index.php?content-phone-content&contentid=<?php echo $content['contentid']; ?>" data-target="contentpage" data-page="contentpage" style="width:8rem;">
						<img src="<?php echo $content['contentthumb']; ?>" style="width:8rem;" alt="<?php echo $content['contenttitle']; ?>">
					</a>
					<div class="media-body">
						<h5 class="media-heading"><a class="ajax" href="index.php?content-phone-content&contentid=<?php echo $content['contentid']; ?>" data-target="contentpage" data-page="contentpage"><?php echo $content['contenttitle']; ?></a></h5>
						<p style="font-size:1rem;"><?php echo $this->G->make('strings')->subString($content['contentdescribe'],81); ?> </p>
					</div>
				</div>
				<?php } ?>
			</div>
			<?php } ?>
			<?php } ?>
		</div>
		<script>
			new Swiper('.swiper-container',{
				"pagination":".swiper-pagination",
				"loop":true,
				"autoplay": 3000,
			});
		</script>
		<?php $this->_compileInclude('footer'); ?>
<?php if(!$this->tpl_var['userhash']){ ?>
    </div>
</div>
</body>
</html>
<?php } ?>