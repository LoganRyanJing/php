<?php if(!$this->tpl_var['userhash']){ ?>
<?php $this->_compileInclude('header'); ?>
<body>
<?php $this->_compileInclude('nav'); ?>
<div class="container-fluid">
	<div class="row-fluid">
		<div class="main">
			<div class="box itembox" style="margin-bottom:0px;">
				<div class="col-xs-12">
					<ol class="breadcrumb">
						<li><a href="index.php">首页</a></li>
						<li><a href="index.php?course">课程</a></li>
						<?php $cbid = 0;
 foreach($this->tpl_var['catbread'] as $key => $cb){ 
 $cbid++; ?>
						<li><a href="index.php?course-app-category&catid=<?php echo $cb['catid']; ?>"><?php echo $cb['catname']; ?></a></li>
						<?php } ?>
						<li class="active"><?php echo $this->tpl_var['cat']['catname']; ?></li>
					</ol>
				</div>
			</div>
		</div>
		<div class="main" id="datacontent">
<?php } ?>
			<div class="col-xs-7" style="padding-left:0px;position:relative;">
				<div class="box itembox" style="height:495px;width:685px;top:0px;" data-spy="affix" data-offset-top="245">
					<video style="margin-top:20px;" controls="true" width="100%" height="450">
						<source src="<?php echo $this->tpl_var['content']['course_files']; ?>" type='video/mp4' />
					</video>
				</div>
			</div>
			<div class="col-xs-5 pull-right" style="padding-right:0px;">
				<div class="box itembox" style="padding-top:20px;">
					<h4 class="title"><?php echo $this->tpl_var['course']['cstitle']; ?></h4>
					<?php echo html_entity_decode($this->ev->stripSlashes($this->tpl_var['course']['csdescribe'])); ?>
				</div>
				<?php $cid = 0;
 foreach($this->tpl_var['contents']['data'] as $key => $content){ 
 $cid++; ?>
				<div class="box itembox" style="padding-top:20px;">
					<div class="col-xs-6">
						<a target="datacontent" href="index.php?course-app-course&page=<?php echo $this->tpl_var['page']; ?>&csid=<?php echo $this->tpl_var['course']['csid']; ?>&contentid=<?php echo $content['courseid']; ?>" class="thumbnail pull-left ajax">
							<img src="<?php echo $content['coursethumb']; ?>" alt="" width="100%">
						</a>
					</div>
					<div class="col-xs-6">
						<a target="datacontent" href="index.php?course-app-course&page=<?php echo $this->tpl_var['page']; ?>&csid=<?php echo $this->tpl_var['course']['csid']; ?>&contentid=<?php echo $content['courseid']; ?>" class="ajax"><h4 class="title"><?php echo $content['coursetitle']; ?></h4></a>
						<p><?php echo html_entity_decode($this->ev->stripSlashes($content['coursedescribe'])); ?></p>
						<p>
							<span class="pull-right">
								<?php if($this->tpl_var['content']['courseid'] == $content['courseid']){ ?>
								<a href="javascript:;" style="color:green;"><em class="glyphicon glyphicon-play"></em> 播放中</a>
								<?php } ?>
							</span>
						</p>
					</div>
				</div>
				<?php } ?>
				<ul class="pagination pagination-right"><?php echo $this->tpl_var['contents']['pages']; ?></ul>
			</div>
<?php if(!$this->tpl_var['userhash']){ ?>
		</div>
	</div>
</div>
<?php $this->_compileInclude('footer'); ?>
</body>
</html>
<?php } ?>