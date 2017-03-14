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
								<li><a href="index.php?<?php echo $this->tpl_var['_app']; ?>-master-module">用户模型</a></li>
								<li class="active">修改模型</li>
							</ol>
						</div>
					</div>
					<div class="box itembox" style="padding-top:10px;margin-bottom:0px;">
						<h4 class="title" style="padding:10px;">
							<?php echo $this->tpl_var['module']['modulename']; ?>
							<a class="pull-right btn btn-primary" href="index.php?user-master-module">模型列表</a>
						</h4>
				    	<form action="index.php?user-master-module-modify" method="post" class="form-horizontal" style="margin-top:20px;">
							<fieldset>
								<div class="form-group">
									<label for="modulename" class="control-label col-sm-2">模型名称：</label>
									<div class="col-sm-4">
										<input class="form-control" type="text" size="40" name="args[modulename]" needle="needle" datatype="username" id="modulename" value="<?php echo $this->tpl_var['module']['modulename']; ?>"/>
									</div>
								</div>
						        <div class="form-group">
							        <label class="control-label col-sm-2" for="moduledescribe">模型描述：</label>
					          		<div class="col-sm-9">
					          			<textarea class="form-control" rows="7" name="args[moduledescribe]" id="moduledescribe"><?php echo $this->tpl_var['module']['moduledescribe']; ?></textarea>
						        	</div>
						        </div>
						        <div class="form-group">
									<label class="control-label col-sm-2" for="moduledescribe"></label>
									<div class="col-sm-8">
										<button class="btn btn-primary" type="submit">提交</button>
							        	<input type="hidden" name="moduleid" value="<?php echo $this->tpl_var['module']['moduleid']; ?>"/>
							        	<input type="hidden" name="modifymodule" value="1"/>
										<input type="hidden" name="page" value="<?php echo $this->tpl_var['page']; ?>"/>
										<?php $aid = 0;
 foreach($this->tpl_var['search'] as $key => $arg){ 
 $aid++; ?>
										<input type="hidden" name="search[<?php echo $key; ?>]" value="<?php echo $arg; ?>"/>
										<?php } ?>
									</div>
								</div>
							</fieldset>
						</form>
					</div>
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