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
							<li class="active">标签管理</li>
						</ol>
					</div>
				</div>
				<div class="box itembox" style="padding-top:10px;margin-bottom:0px;overflow:visible">
					<h4 class="title" style="padding:10px;">
						标签管理
						<a class="btn btn-primary pull-right" href="index.php?content-master-blocks-add&page=<?php echo $this->tpl_var['page']; ?>">添加标签</a>
					</h4>
					<table class="table table-hover table-bordered">
						<thead>
							<tr class="info">
			                    <th>ID</th>
						        <th>名称</th>
						        <th>位置</th>
						        <th>类型</th>
						        <th>操作</th>
			                </tr>
			            </thead>
			            <tbody>
			            	<?php $kid = 0;
 foreach($this->tpl_var['blocks']['data'] as $key => $block){ 
 $kid++; ?>
			            	<tr>
			                    <td><?php echo $block['blockid']; ?></td>
						        <td><?php echo $block['block']; ?></td>
						        <td><?php echo $block['blockposition']; ?></td>
						        <td>
						        	<div class="dropdown">
							        	<a class="dropdown-toggle" href="#" data-toggle="dropdown"><?php if($block['blocktype'] == 1){ ?>固定内容<?php } elseif($block['blocktype'] == 2){ ?>分类列表<?php } elseif($block['blocktype'] == 3){ ?>SQL<?php } elseif($block['blocktype'] == 4){ ?>模板模式<?php } ?><strong class="caret"></strong></a>
							        	<ul class="dropdown-menu">
								        	<li><a href="javascript:;">切换模式</a></li>
											<li class="divider"></li>
											<li><a class="ajax" href="index.php?<?php echo $this->tpl_var['_app']; ?>-master-blocks-change&blockid=<?php echo $block['blockid']; ?>&blocktype=1&page=<?php echo $this->tpl_var['page']; ?>">固定内容</a></li>
											<li><a class="ajax" href="index.php?<?php echo $this->tpl_var['_app']; ?>-master-blocks-change&blockid=<?php echo $block['blockid']; ?>&blocktype=2&page=<?php echo $this->tpl_var['page']; ?>">分类列表</a></li>
											<li><a class="ajax" href="index.php?<?php echo $this->tpl_var['_app']; ?>-master-blocks-change&blockid=<?php echo $block['blockid']; ?>&blocktype=3&page=<?php echo $this->tpl_var['page']; ?>">SQL模式</a></li>
											<li><a class="ajax" href="index.php?<?php echo $this->tpl_var['_app']; ?>-master-blocks-change&blockid=<?php echo $block['blockid']; ?>&blocktype=4&page=<?php echo $this->tpl_var['page']; ?>">模板模式</a></li>
					                    </ul>
				                    </div>
						        </td>
						        <td>
						        	<div class="btn-group">
										<a class="btn" href="index.php?<?php echo $this->tpl_var['_app']; ?>-master-blocks-modify&blockid=<?php echo $block['blockid']; ?>&page=<?php echo $this->tpl_var['page']; ?>" title="修改模型信息"><em class="glyphicon glyphicon-edit"></em></a>
										<a class="btn ajax" href="index.php?<?php echo $this->tpl_var['_app']; ?>-master-blocks-del&blockid=<?php echo $block['blockid']; ?>&page=<?php echo $this->tpl_var['page']; ?>" title="删除模型"><em class="glyphicon glyphicon-remove"></em></a>
									</div>
								</td>
			                </tr>
			                <?php } ?>
			        	</tbody>
			        </table>
					<ul class="pagination pagination-right">
						<?php echo $this->tpl_var['blocks']['pages']; ?>
					</ul>
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