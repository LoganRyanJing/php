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
							<li><a href="index.php?<?php echo $this->tpl_var['_app']; ?>-master-contents&page=<?php echo $this->tpl_var['page']; ?>">内容管理</a></li>
							<li class="active">修改内容</li>
						</ol>
					</div>
				</div>
				<div class="box itembox" style="padding-top:10px;margin-bottom:0px;overflow:visible">
					<h4 class="title" style="padding:10px;">
						修改内容
						<a class="btn btn-primary pull-right" href="index.php?<?php echo $this->tpl_var['_app']; ?>-master-contents&catid=<?php echo $this->tpl_var['catid']; ?>&page=<?php echo $this->tpl_var['page']; ?>">内容管理</a>
					</h4>
					<form action="index.php?content-master-contents-edit" method="post" class="form-horizontal">
						<div class="form-group">
				            <label for="contenttitle" class="control-label col-sm-2">标题：</label>
				            <div class="col-sm-9">
							    <input class="form-control" type="text" id="contenttitle" name="args[contenttitle]" needle="needle" msg="您必须输入标题" value="<?php echo $this->tpl_var['content']['contenttitle']; ?>">
					        </div>
				        </div>
				        <div class="form-group">
				            <label for="contenttitle" class="control-label col-sm-2">发布时间：</label>
				            <div class="col-sm-4">
							    <input class="form-control datetimepicker" data-minview="0" data-date="<?php echo date('Y-m-d H:i:s',TIME); ?>" data-date-format="yyyy-mm-dd hh:ii:ss" type="text" value="<?php echo date('Y-m-d H:i:s',$this->tpl_var['content']['contentinputtime']); ?>" name="args[contentinputtime]" needle="needle" msg="您必须输入发布时间">
					        </div>
				        </div>
				        <!--
				        <div class="col-sm-9">
				            <label for="block" class="control-label col-sm-2">标题颜色：</label>
				            <input type="text" name="args[contenttitle]" needle="needle" msg="您必须输入标题">
				        </div>
				        <div class="col-sm-9">
				            <label for="block" class="control-label col-sm-2">标题加粗：</label>
				            <input type="text" name="args[contenttitle]" needle="needle" msg="您必须输入标题">
				        </div>

				        <div class="form-group">
				            <label for="contentmoduleid" class="control-label col-sm-2">模型：</label>
				            <div class="col-sm-9">
							    <select id="contentmoduleid" msg="您必须选择信息模型" refreshjs="on" needle="needle" class="combox" name="args[contentmoduleid]" refUrl="index.php?content-master-module-moduleforms&moduleid={value}" target="contentforms">
					            	<option value="">选择信息模型</option>
					            	<?php $mid = 0;
 foreach($this->tpl_var['modules'] as $key => $module){ 
 $mid++; ?>
					            	<option value="<?php echo $module['moduleid']; ?>"><?php echo $module['modulename']; ?></option>
					            	<?php } ?>
					            </select>
					        </div>
				        </div>
				        -->
				        <div class="form-group">
				            <label for="block" class="control-label col-sm-2">缩略图：</label>
				            <div class="col-sm-9">
								<script type="text/template" id="pe-template-contentthumb">
						    		<div class="qq-uploader-selector" style="width:30%" qq-drop-area-text="可将图片拖拽至此处上传" style="clear:both;">
						            	<div class="qq-upload-button-selector" style="clear:both;">
						                	<ul class="qq-upload-list-selector list-unstyled" aria-live="polite" aria-relevant="additions removals" style="clear:both;">
								                <li class="text-center">
								                    <div class="thumbnail">
														<img class="qq-thumbnail-selector" alt="点击上传新图片">
														<input type="hidden" class="qq-edit-filename-selector" name="args[contentthumb]" tabindex="0">
													</div>
								                </li>
								            </ul>
								            <ul class="qq-upload-list-selector list-unstyled" aria-live="polite" aria-relevant="additions removals" style="clear:both;">
									            <li class="text-center">
									                <div class="thumbnail">
														<img class="qq-thumbnail-selector" src="<?php echo $this->tpl_var['content']['contentthumb']; ?>" alt="点击上传新图片">
														<input type="hidden" class="qq-edit-filename-selector" name="args[contentthumb]" tabindex="0" value="<?php echo $this->tpl_var['content']['contentthumb']; ?>">
						                			</div>
									            </li>
									        </ul>
						                </div>
						            </div>
						        </script>
						        <div class="fineuploader" attr-type="thumb" attr-template="pe-template-contentthumb"></div>
							</div>
				        </div>
				        <div class="form-group">
				            <label for="contentlink" class="control-label col-sm-2">站外链接：</label>
				            <div class="col-sm-9">
							    <input class="form-control" type="text" id="contentlink" name="args[contentlink]" value="<?php if($this->tpl_var['content']['contentlink']){ ?><?php echo html_entity_decode($this->ev->stripSlashes($this->tpl_var['content']['contentlink'])); ?><?php } ?>">
					        </div>
				        </div>
				        <div class="form-group">
				            <label for="contentdescribe" class="control-label col-sm-2">摘要：</label>
				            <div class="col-sm-9">
							    <textarea id="contentdescribe" class="form-control" name="args[contentdescribe]" rows="7" cols="4"><?php echo $this->tpl_var['content']['contentdescribe']; ?></textarea>
					        </div>
				        </div>
		    			<?php $fid = 0;
 foreach($this->tpl_var['forms'] as $key => $form){ 
 $fid++; ?>
						<div class="form-group">
							<label for="<?php echo $form['id']; ?>" class="control-label col-sm-2"><?php echo $form['title']; ?></label>
							<div class="col-sm-9">
								<?php echo $form['html']; ?>
							</div>
						</div>
						<?php } ?>
				    	<div class="form-group">
				            <label for="contenttext" class="control-label col-sm-2">内容</label>
				            <div class="col-sm-10">
							    <textarea id="contenttext" rows="7" cols="4" class="ckeditor" name="args[contenttext]"><?php echo $this->tpl_var['content']['contenttext']; ?></textarea>
					        </div>
				        </div>
				        <div class="form-group">
				            <label for="contenttemplate" class="control-label col-sm-2">模版：</label>
				            <div class="col-sm-3">
							    <select class="form-control" name="args[contenttemplate]" id="contenttemplate">
					            	<?php $tid = 0;
 foreach($this->tpl_var['tpls'] as $key => $tpl){ 
 $tid++; ?>
					            	<option value="<?php echo $tpl; ?>"><?php echo $tpl; ?></option>
					            	<?php } ?>
					            </select>
					        </div>
				        </div>
				        <div class="form-group">
				            <label for="contenttemplate" class="control-label col-sm-2"></label>
				            <div class="col-sm-9">
					            <button class="btn btn-primary" type="submit">提交</button>
					            <input type="hidden" name="contentid" value="<?php echo $this->tpl_var['contentid']; ?>">
					            <input type="hidden" name="gotopos" value="1">
					            <input type="hidden" name="submit" value="1">
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