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
				<div class="box itembox" style="margin-bottom:0px;border-bottom:1px solid #CCCCCC;">
					<div class="col-xs-12">
						<ol class="breadcrumb">
							<li><a href="index.php?<?php echo $this->tpl_var['_app']; ?>-master"><?php echo $this->tpl_var['apps'][$this->tpl_var['_app']]['appname']; ?></a></li>
							<li><a href="index.php?<?php echo $this->tpl_var['_app']; ?>-master-category">分类管理</a></li>
							<li class="active">修改分类</li>
						</ol>
					</div>
				</div>
				<div class="box itembox" style="padding-top:10px;margin-bottom:0px;">
					<h4 class="title" style="padding:10px;">
						修改分类
						<a class="btn btn-primary pull-right" href="index.php?<?php echo $this->tpl_var['_app']; ?>-master-category&parent=<?php echo $this->tpl_var['parent']; ?>">分类列表</a>
					</h4>
					<form action="index.php?<?php echo $this->tpl_var['_app']; ?>-master-category-edit" method="post" class="form-horizontal">
						<fieldset>
							<div class="form-group">
							</div>
							<div class="form-group">
								<label for="modulename" class="control-label col-sm-2">分类名称</label>
								<div class="col-sm-4">
									<input class="form-control" type="text" id="input1" name="args[catname]" value="<?php echo $this->tpl_var['category']['catname']; ?>" datatype="userName" needle="needle" msg="您必须输入中英文字符的分类名称">
									<span class="help-block">请输入分类名称</span>
								</div>
							</div>
							<?php if(!$this->tpl_var['cat']['catparent']){ ?>
							<div class="form-group">
								<label for="modulename" class="control-label col-sm-2">前台显示</label>
								<div class="col-sm-9">
									<label class="radio-inline">
						          		<input type="radio" class="input-text" name="args[catinmenu]" value="1"<?php if($this->tpl_var['category']['catinmenu']){ ?> checked<?php } ?>/> 不显示
						          	</label>
						          	<label class="radio-inline">
						          		<input type="radio" class="input-text" name="args[catinmenu]" value="0"<?php if(!$this->tpl_var['category']['catinmenu']){ ?> checked<?php } ?>/> 显示
						          	</label>
						          	<span class="help-block">勾选此项后，分类将显示在内容模块前台的分类列表区域。</span>
								</div>
							</div>
							<?php } ?>
							<div class="form-group">
								<label for="modulename" class="control-label col-sm-2">在首页展示内容</label>
								<div class="col-sm-10 form-inline">
									<input size="6" class="form-control" type="text" name="args[catindex]" value="<?php if($this->tpl_var['category']['catindex']){ ?><?php echo $this->tpl_var['category']['catindex']; ?><?php } else { ?>0<?php } ?>" datatype="number" needle="needle" msg="您必须填写展示内容条数"> 条
									<span class="help-block">填写展示内容条数，如果不需要在首页展示，请填写0。</span>
								</div>
							</div>
							<div class="form-group">
								<label for="modulecode" class="control-label col-sm-2">分类排序</label>
								<div class="col-sm-4">
									<input class="form-control" type="text" id="input2" name="args[catlite]" value="<?php echo $this->tpl_var['category']['catlite']; ?>" datatype="number" msg="排序为整数">
								</div>
							</div>
							<div class="form-group">
								<label for="moduledescribe" class="control-label col-sm-2">外链地址</label>
								<div class="col-sm-4">
									<input class="form-control" type="text" name="args[caturl]" value="<?php echo html_entity_decode($this->ev->stripSlashes($this->tpl_var['category']['caturl'])); ?>">
								</div>
							</div>
							<div class="form-group">
								<label for="moduledescribe" class="control-label col-sm-2">使用外链地址</label>
								<div class="col-sm-9">
									<label class="radio-inline">
										<input type="radio"  name="args[catuseurl]" value="1"<?php if($this->tpl_var['category']['catuseurl']){ ?> checked<?php } ?>>使用
									</label>
					            	<label class="radio-inline">
					            		<input type="radio"  name="args[catuseurl]" value="0"<?php if(!$this->tpl_var['category']['catuseurl']){ ?> checked<?php } ?>>不使用
					            	</label>
									<span class="help-block">填写外链地址后，该分类会直接转到外链地址</span>
								</div>
							</div>
							<div class="form-group">
								<label for="moduledescribe" class="control-label col-sm-2">发布用户</label>
								<div class="col-sm-6">
									<input class="form-control" type="text" name="args[catmanager][pubusers]" value="<?php echo $this->tpl_var['category']['catmanager']['pubusers']; ?>">
									<span class="help-block">填写用户ID，用英文逗号隔开</span>
								</div>
							</div>
							<div class="form-group">
								<label for="moduledescribe" class="control-label col-sm-2">发布角色</label>
								<div class="col-sm-6">
									<input class="form-control" type="text" name="args[catmanager][pubgroups]" value="<?php echo $this->tpl_var['category']['catmanager']['pubgroups']; ?>">
									<span class="help-block">填写角色ID，用英文逗号隔开</span>
								</div>
							</div>
							<div class="form-group">
								<label for="modulecode" class="control-label col-sm-2">分类模板</label>
								<div class="col-sm-4">
									<select class="form-control" name="args[cattpl]">
						            	<?php $tid = 0;
 foreach($this->tpl_var['tpls'] as $key => $tpl){ 
 $tid++; ?>
						            	<option value="<?php echo $tpl; ?>"<?php if($this->tpl_var['category']['cattpl'] == $tpl){ ?> selected<?php } ?>><?php echo $tpl; ?></option>
						            	<?php } ?>
						            </select>
								</div>
							</div>
							<div class="form-group">
								<label for="moduledescribe" class="control-label col-sm-2">分类图片</label>
								<div class="col-sm-9">
									<script type="text/template" id="pe-template-photo">
							    		<div class="qq-uploader-selector" style="width:30%" qq-drop-area-text="可将图片拖拽至此处上传" style="clear:both;">
							            	<div class="qq-upload-button-selector" style="clear:both;">
							                	<ul class="qq-upload-list-selector list-unstyled" aria-live="polite" aria-relevant="additions removals" style="clear:both;">
									                <li class="text-center">
									                    <div class="thumbnail">
															<img class="qq-thumbnail-selector" alt="点击上传新图片">
															<input type="hidden" class="qq-edit-filename-selector" name="args[catimg]" tabindex="0">
														</div>
									                </li>
									            </ul>
									            <ul class="qq-upload-list-selector list-unstyled" aria-live="polite" aria-relevant="additions removals" style="clear:both;">
										            <li class="text-center">
										                <div class="thumbnail">
															<img class="qq-thumbnail-selector" src="<?php if($this->tpl_var['category']['catimg']){ ?><?php echo $this->tpl_var['category']['catimg']; ?><?php } else { ?>app/core/styles/images/noimage.gif<?php } ?>" alt="点击上传新图片">
															<input type="hidden" class="qq-edit-filename-selector" name="args[catimg]" tabindex="0" value="<?php if($this->tpl_var['category']['catimg']){ ?><?php echo $this->tpl_var['category']['catimg']; ?><?php } else { ?>app/core/styles/images/noimage.gif<?php } ?>">
							                			</div>
										            </li>
										        </ul>
							                </div>
							            </div>
							        </script>
							        <div class="fineuploader" attr-type="thumb" attr-template="pe-template-photo"></div>
								</div>
							</div>
							<div class="form-group">
								<label for="catdes" class="control-label col-sm-2">分类简介</label>
								<div class="col-sm-10">
									<textarea class="ckeditor" rows="7" id="catdes" name="args[catdes]"><?php echo html_entity_decode($this->ev->stripSlashes($this->tpl_var['category']['catdes'])); ?></textarea>
									<span class="help-block">对这个模型进行描述</span>
								</div>
							</div>
							<div class="form-group">
								<label for="catdes" class="control-label col-sm-2"></label>
								<div class="col-sm-9">
									<button class="btn btn-primary" type="submit">提交</button>
									<input type="hidden" name="submit" value="1">
						            <input type="hidden" name="page" value="<?php echo $this->tpl_var['page']; ?>">
						            <input type="hidden" name="catid" value="<?php echo $this->tpl_var['catid']; ?>">
						            <input type="hidden" name="parent" value="<?php echo $this->tpl_var['parent']; ?>">
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
	</div>
</div>
<?php $this->_compileInclude('footer'); ?>
</body>
</html>