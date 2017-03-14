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
							<li class="active">字段管理</li>
						</ol>
					</div>
				</div>
				<div class="box itembox" style="padding-top:10px;margin-bottom:0px;">
					<h4 class="title" style="padding:10px;">
						<?php echo $this->tpl_var['module']['modulename']; ?>
						<span class="pull-right">
							<a data-toggle="dropdown" class="btn btn-primary dropdown-toggle" href="#">添加字段&nbsp;<strong class="caret"></strong></a>
							<ul class="dropdown-menu">
								<li><a href="index.php?user-master-module-preview&moduleid=<?php echo $this->tpl_var['moduleid']; ?>">模型预览</a></li>
								<li class="divider"></li>
								<li><a href="index.php?user-master-module-addfield&moduleid=<?php echo $this->tpl_var['moduleid']; ?>">添加模型字段</a></li>
								<li><a href="index.php?user-master-module-addfield&moduleid=<?php echo $this->tpl_var['moduleid']; ?>&fieldpublic=1">添加公共字段</a></li>
							</ul>
						</span>
					</h4>
				    <form action="index.php?user-master-module-fields" method="post">
					    <fieldset>
							<form action="index.php?user-master-user-batdel" method="post">
							<table class="table table-hover table-bordered">
								<thead>
									<tr class="info">
										<th>ID</th>
										<th>排序</th>
										<th>字段名</th>
										<th>字段类型</th>
										<th>别名</th>
										<th>字段长度</th>
										<th>数据类型</th>
										<th>HTML类型</th>
										<th>索引</th>
										<th>操作</th>
									</tr>
								</thead>
								<tbody>
									<?php $fid = 0;
 foreach($this->tpl_var['fields'] as $key => $field){ 
 $fid++; ?>
									<tr>
										<td><?php echo $field['fieldid']; ?></td>
										<td class="form-inline"><input type="text" size="1" name="ids[<?php echo $field['fieldid']; ?>]" value="<?php echo $field['fieldsequence']; ?>" class="form-control"/></td>
										<td><?php echo $field['field']; ?></td>
										<td><?php if($field['fieldpublic']){ ?>公共<?php } else { ?>模型<?php } ?>字段</td>
										<td><?php echo $field['fieldtitle']; ?></td>
										<td><?php if($field['fieldlength']){ ?><?php echo $field['fieldlength']; ?><?php } else { ?>默认<?php } ?></td>
										<td><?php echo $field['fieldtype']; ?></td>
										<td><?php echo $field['fieldhtmltype']; ?></td>
										<td><?php if($field['fieldindextype']){ ?><?php echo $field['fieldindextype']; ?><?php } else { ?>NULL<?php } ?></td>
										<td nowrap>
											<div class="btn-group">
												<?php if($field['fieldlock']){ ?>
												<a class="btn ajax" href="index.php?user-master-module-forbiddenfield&fieldid=<?php echo $field['fieldid']; ?>&moduleid=<?php echo $this->tpl_var['moduleid']; ?>&page=<?php echo $this->tpl_var['page']; ?><?php echo $this->tpl_var['u']; ?>" title="启用"><em class="glyphicon glyphicon-ban-circle"></em></a>
												<?php } else { ?>
												<a class="btn ajax" href="index.php?user-master-module-forbiddenfield&fieldid=<?php echo $field['fieldid']; ?>&moduleid=<?php echo $this->tpl_var['moduleid']; ?>&page=<?php echo $this->tpl_var['page']; ?><?php echo $this->tpl_var['u']; ?>" title="禁用"><em class="glyphicon glyphicon-ok-circle"></em></a>
												<?php } ?>
												<a class="btn" href="index.php?user-master-module-modifyfield&fieldid=<?php echo $field['fieldid']; ?>&page=<?php echo $this->tpl_var['page']; ?><?php echo $this->tpl_var['u']; ?>" title="修改字段"><em class="glyphicon glyphicon-edit"></em></a>
												<?php if(!$field['fieldsystem']){ ?>
												<a class="btn ajax" href="index.php?user-master-module-delfield&fieldid=<?php echo $field['fieldid']; ?>&moduleid=<?php echo $this->tpl_var['moduleid']; ?>&page=<?php echo $this->tpl_var['page']; ?><?php echo $this->tpl_var['u']; ?>" title="删除字段"><em class="glyphicon glyphicon-remove"></em></a>
												<?php } ?>
											</div>
										</td>
									</tr>
									<?php } ?>
								</tbody>
							</table>
							<div class="control-group">
								<div class="controls">
									<button class="btn btn-primary" type="submit">更改排序</button>
						            <input type="hidden" name="page" value="<?php echo $this->tpl_var['page']; ?>">
						            <input type="hidden" name="modifyfieldsequence" value="1"/>
			          				<input type="hidden" name="moduleid" value="<?php echo $this->tpl_var['moduleid']; ?>"/>
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
<?php if(!$this->tpl_var['userhash']){ ?>
		</div>
	</div>
</div>
<?php $this->_compileInclude('footer'); ?>
</body>
</html>
<?php } ?>