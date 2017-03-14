<?php if(!$this->tpl_var['userhash']){ ?>
<?php $this->_compileInclude('header'); ?>
<body>
<?php $this->_compileInclude('nav'); ?>
<div class="container-fluid">
	<div class="row-fluid">
		<div class="main">
			<div class="col-xs-2" style="padding-top:10px;margin-bottom:0px;">
				<?php $this->_compileInclude('menu'); ?>
			</div>
			<div class="col-xs-10" id="datacontent">
<?php } ?>
				<div class="box itembox" style="margin-bottom:0px;border-bottom:1px solid #CCCCCC;">
					<div class="col-xs-12">
						<ol class="breadcrumb">
							<li><a href="index.php?<?php echo $this->tpl_var['_app']; ?>-master"><?php echo $this->tpl_var['apps'][$this->tpl_var['_app']]['appname']; ?></a></li>
							<li><a href="index.php?<?php echo $this->tpl_var['_app']; ?>-master-questions&page=<?php echo $this->tpl_var['page']; ?><?php echo $this->tpl_var['u']; ?>">普通试题管理</a></li>
							<li class="active">添加普通试题</li>
						</ol>
					</div>
				</div>
				<div class="box itembox" style="padding-top:10px;margin-bottom:0px;">
					<h4 class="title" style="padding:10px;">
						批量添加普通试题
						<a class="btn btn-primary pull-right" href="index.php?<?php echo $this->tpl_var['_app']; ?>-master-questions&page=<?php echo $this->tpl_var['page']; ?><?php echo $this->tpl_var['u']; ?>">普通试题管理</a>
					</h4>
					<form action="index.php?exam-master-questions-bataddquestion" method="post" class="form-horizontal">
						<div class="form-group">
							<label for="content" class="control-label col-sm-2">试题文本：</label>
							<div class="col-sm-9">
								<textarea id="content" name="content" class="form-control" rows="15"></textarea>
								<span class="help-block">请将准备好的格式粘贴到文本框内，点击保存即可，此功能将在后续版本逐渐停用，建议使用CSV导入。</span>
							</div>
						</div>
						<div class="form-group">
							<label for="content" class="control-label col-sm-2"></label>
							<div class="col-sm-9">
								<button class="btn btn-primary" type="submit">提交</button>
								<input type="hidden" name="page" value="<?php echo $this->tpl_var['page']; ?>"/>
								<input type="hidden" name="type" value="1"/>
								<input type="hidden" name="insertquestion" value="1"/>
								<?php $aid = 0;
 foreach($this->tpl_var['search'] as $key => $arg){ 
 $aid++; ?>
								<input type="hidden" name="search[<?php echo $key; ?>]" value="<?php echo $arg; ?>"/>
								<?php } ?>
							</div>
						</div>
					</form>
				</div>
			</div>
<?php if(!$this->tpl_var['userhash']){ ?>
		</div>
	</div>
</div>
<?php $this->_compileInclude('footer'); ?>
</body>
</html>
<?php } ?>