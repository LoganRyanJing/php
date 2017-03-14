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
					  <li class="active"><a href="index.php?content-app-category&catid=<?php echo $this->tpl_var['cat']['catid']; ?>"><?php echo $this->tpl_var['cat']['catname']; ?></a></li>
					</ol>
				</div>
			</div>
			<div class="box itembox" style="padding-top:20px;">
				<div class="col-xs-12">
					<h2 class="text-center"><?php echo $this->tpl_var['content']['contenttitle']; ?></h2>
					<hr/>
					<?php if($this->tpl_var['content']['contentdescribe']){ ?><blockquote><?php echo $this->tpl_var['content']['contentdescribe']; ?></blockquote><?php } ?>
				</div>
				<div class="col-xs-12" id="content">
					<?php echo html_entity_decode($this->ev->stripSlashes($this->tpl_var['content']['contenttext'])); ?>
				</div>
				<div class="col-xs-12">
					<hr/>
					<p>
						<span class="pull-right">
							<a href=""><span class="glyphicon glyphicon-time"></span> <span><?php echo date('Y-m-d H:i:s',$this->tpl_var['content']['contentinputtime']); ?></span></a>&nbsp;&nbsp;
							<a href=""><span class="glyphicon glyphicon-heart"></span> <span>1026</span></a>
						</span>
					</p>
				</div>
			</div>
		</div>
	</div>
</div>
<?php $this->_compileInclude('footer'); ?>
</body>
</html>