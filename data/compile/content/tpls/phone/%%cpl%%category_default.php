		<?php if($this->tpl_var['cat']['catid']){ ?>
		<header class="container-fluid" style="background-color:#9856a9;">
			<h5 class="text-center">
				<em style="font-size:2rem;" class="pull-left glyphicon glyphicon-chevron-left" onclick="javascript:$.goPrePage();"></em>
				<?php echo $this->tpl_var['cat']['catname']; ?>
				<em style="font-size:2rem;" class="pull-right glyphicon glyphicon-home" onclick="javascript:$.goPage($('#page1'));"></em>
			</h5>
		</header>
		<?php $cid = 0;
 foreach($this->tpl_var['contents']['data'] as $key => $content){ 
 $cid++; ?>
		<div style="width:95%;margin:auto;margin-top:0.6rem;background-color:#FFFFFF;overflow:hidden;padding:1.2rem;">
			<a class="ajax" href="index.php?content-phone-content&contentid=<?php echo $content['contentid']; ?>" data-target="contentpage" data-page="contentpage"><?php echo $this->G->make('strings')->subString($content['contenttitle'],48); ?> <span class="glyphicon glyphicon-chevron-right pull-right"></span></a>
		</div>
		<?php } ?>
		<?php } else { ?>
		<header class="container-fluid" style="background-color:#9856a9;">
			<h5 class="text-center">
				<em style="font-size:2rem;" class="pull-left glyphicon glyphicon-chevron-left" onclick="javascript:$.goPrePage();"></em>
				资讯信息
				<em style="font-size:2rem;" class="pull-right glyphicon glyphicon-home" onclick="javascript:$.goPage($('#page1'));"></em>
			</h5>
		</header>
		<?php $cid = 0;
 foreach($this->tpl_var['catchildren'] as $key => $cat){ 
 $cid++; ?>
		<div style="width:95%;margin:auto;margin-top:0.6rem;background-color:#FFFFFF;overflow:hidden;padding:1.2rem;">
			<a class="ajax" href="index.php?content-phone-category&catid=<?php echo $cat['catid']; ?>" data-target="contentcategory" data-page="contentcategory"><?php echo $cat['catname']; ?> <span class="glyphicon glyphicon-chevron-right pull-right"></span></a>
		</div>
		<?php } ?>
		<?php } ?>