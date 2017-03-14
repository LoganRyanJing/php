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
							<li class="active">附件管理</li>
						</ol>
					</div>
				</div>
				<div class="box itembox" style="padding-top:10px;margin-bottom:0px;">
					<h4 class="title" style="padding:10px;">
						附件管理
					</h4>
					<form action="index.php?document-master-files" method="post" class="form-inline">
						<table class="table">
							<thead>
				                <tr>
							        <th colspan="2">搜索</th>
							        <th></th>
							        <th></th>
							        <th></th>
							        <th></th>
				                </tr>
				            </thead>
							<tr>
								<td>
									上传时间：
								</td>
								<td>
									<input class="form-control datetimepicker" data-date="<?php echo date('Y-m-d',TIME); ?>" data-date-format="yyyy-mm-dd" type="text" name="search[stime]" size="10" id="stime" value="<?php echo $this->tpl_var['search']['stime']; ?>"/> - <input class="form-control datetimepicker" data-date="<?php echo date('Y-m-d',TIME); ?>" data-date-format="yyyy-mm-dd" size="10" type="text" name="search[etime]" id="etime" value="<?php echo $this->tpl_var['search']['etime']; ?>"/>
								</td>
								<td>
									文件类型：
								</td>
								<td>
					        		<select name="search[atttype]" class="form-control">
						        		<option value="0">选择文件类型</option>
								  		<?php $aid = 0;
 foreach($this->tpl_var['attachtypes'] as $key => $att){ 
 $aid++; ?>
								  		<option value="<?php echo $att['atid']; ?>"<?php if($att['atid'] == $this->tpl_var['search']['atttype']){ ?> selected<?php } ?>><?php echo $att['attachtype']; ?></option>
								  		<?php } ?>
							  		</select>
					        	</td>
							</tr>
							<tr>
								<td>
									上传用户：
								</td>
					        	<td>
					        		<input class="form-control" name="search[username]" size="15" type="text" value="<?php echo $this->tpl_var['search']['username']; ?>"/>
					        	</td>
					        	<td>
									附件ID：
								</td>
								<td>
									<input name="search[attid]" class="form-control" size="15" type="text" class="number" value="<?php echo $this->tpl_var['search']['attid']; ?>"/>
								</td>
								<td colspan="2">
									<button class="btn btn-primary" type="submit">搜索</button>
									<input type="hidden" value="1" name="search[argsmodel]" />
								</td>
							</tr>
						</table>
					</form>
					<form action="index.php?document-master-files-batdel" method="post">
						<fieldset>
							<table class="table table-hover table-bordered">
								<thead>
									<tr class="info">
					                    <th><input type="checkbox" class="checkall" target="delids"/></th>
					                    <th>ID</th>
								        <th>文件名</th>
								        <th>真实路径</th>
								        <th>录入时间</th>
								        <th width="100">操作</th>
					                </tr>
					            </thead>
					            <tbody>
				                    <?php $aid = 0;
 foreach($this->tpl_var['attach']['data'] as $key => $attach){ 
 $aid++; ?>
							        <tr>
										<td><input type="checkbox" name="delids[<?php echo $attach['attid']; ?>]" value="1"></td>
										<td>
											<?php echo $attach['attid']; ?>
										</td>
										<td>
											<?php echo $attach['atttitle']; ?>
										</td>
										<td>
											<?php echo $attach['attpath']; ?>
										</td>
										<td>
											<?php echo date('Y-m-d',$attach['attinputtime']); ?>
										</td>
										<td>
											<div class="btn-group">
					                    		<a class="btn" href="index.php?document-master-files-modify&page=<?php echo $this->tpl_var['page']; ?>&attid=<?php echo $attach['attid']; ?><?php echo $this->tpl_var['u']; ?>" title="修改"><em class="glyphicon glyphicon-edit"></em></a>
												<a class="btn confirm" href="index.php?document-master-files-del&page=<?php echo $this->tpl_var['page']; ?>&attid=<?php echo $attach['attid']; ?><?php echo $this->tpl_var['u']; ?>" title="删除"><em class="glyphicon glyphicon-remove"></em></a>
					                    	</div>
										</td>
							        </tr>
							        <?php } ?>
					        	</tbody>
					        </table>
					        <div class="form-group">
					            <div class="col-sm-9">
						            <label class="radio-inline">
						                <input type="radio" name="action" value="delete" checked/>删除
						            </label>
						            <?php $sid = 0;
 foreach($this->tpl_var['search'] as $key => $arg){ 
 $sid++; ?>
						            <input type="hidden" name="search[<?php echo $key; ?>]" value="<?php echo $arg; ?>"/>
						            <?php } ?>
						            <label class="radio-inline">
						            	<button class="btn btn-primary" type="submit">提交</button>
						            </label>
						            <input type="hidden" name="page" value="<?php echo $this->tpl_var['page']; ?>"/>
						        </div>
					        </div>
					        <ul class="pagination pull-right">
					            <?php echo $this->tpl_var['attach']['pages']; ?>
					        </ul>
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