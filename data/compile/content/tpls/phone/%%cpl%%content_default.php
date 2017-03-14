	<header class="container-fluid" style="background-color:#9856a9;">
		<h5 class="text-center">
			<em style="font-size:2rem;" class="pull-left glyphicon glyphicon-chevron-left" onclick="javascript:$.goPrePage();"></em>
			<?php echo $this->tpl_var['cat']['catname']; ?>
			<a style="font-size:2rem;color:#FFFFFF;" href="index.php?user-phone" class="pull-right glyphicon glyphicon-user ajax" data-target="user" data-page="user"></a>
		</h5>
	</header>
	<div style="clear:both" class="col-xs-12" id="contenttext">
		<h4 class="text-center" style="overflow:hidden;clear:both;padding-top:0.2rem;border:">
			<?php echo $this->tpl_var['content']['contenttitle']; ?>
		</h4>
		<hr />
		<div style="clear:both">
		<?php echo html_entity_decode($this->ev->stripSlashes($this->tpl_var['content']['contenttext'])); ?>
		</div>
	</div>