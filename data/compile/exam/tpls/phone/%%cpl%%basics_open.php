
		<header class="container-fluid" style="background-color:#9856a9;">
			<h5 class="text-center">
				<em style="font-size:2rem;" class="pull-left glyphicon glyphicon-chevron-left" onclick="javascript:$.goPrePage();"></em>
				我的考场
				<em style="font-size:2rem;" class="pull-right glyphicon glyphicon-home" onclick="javascript:$.goPage($('#page1'));"></em>
			</h5>
		</header>

<div class="container-fluid">
		
			<h4 class="title" style="padding:10px;">考场列表<a href="index.php?exam-phone" data-page="exam" data-target="exam" class="ajax btn btn-primary pull-right"><em class="glyphicon glyphicon-tasks"></em> 我的考场</a></h4>
			
			
				<?php $bid = 0;
 foreach($this->tpl_var['basics']['data'] as $key => $basic){ 
 $bid++; ?>
				<div style="clear:both;overflow:hidden;background:#FFFFFF;margin-top:0.5rem">
					<div class="col-xs-4">
						<a href="index.php?exam-phone-basics-detail&basicid=<?php echo $basic['basicid']; ?>" class="ajax thumbnail" style="position:relative;" data-page="exam" data-target="exam">
							<?php if($this->tpl_var['data']['openbasics'][$basic['basicid']]){ ?>
							<img src="app/core/styles/img/opened.png" style="position:absolute;right:4px;top:4px;">
							<?php } elseif($basic['basicdemo']){ ?>
							<img src="app/core/styles/img/free.png" style="position:absolute;right:4px;top:4px;">
							<?php } ?>
							<img src="<?php if($basic['basicthumb']){ ?><?php echo $basic['basicthumb']; ?><?php } else { ?>app/core/styles/img/item.jpg<?php } ?>" alt="" >
						</a>

					</div>
					<div class="col-xs-8">
						<h5 class="text-center">
							<?php echo $basic['basic']; ?>
						</h5>
					</div>
				</div>
				<?php if($bid % 3 == 0){ ?>
				<div class="col-xs-6"><hr /></div>
				<?php } ?>
				<?php } ?>
			
			<div class="col-xs-12" style="padding-left:0px;">
				<ul class="pagination pull-right">
					<?php echo $this->tpl_var['basics']['pages']; ?>
				</ul>
			</div>
		
</div>

