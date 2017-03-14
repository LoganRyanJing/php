		<header class="container-fluid" style="background-color:#9856a9;">
			<h5 class="text-center">
				<em style="font-size:2rem;" class="pull-left glyphicon glyphicon-chevron-left" onclick="javascript:$.goPrePage();"></em>
				我的考场
				<em style="font-size:2rem;" class="pull-right glyphicon glyphicon-home" onclick="javascript:$.goPage($('#page1'));"></em>
			</h5>
		</header>
		<div class="container-fluid">
			<h4 class="title" style="padding:10px;">我的考场<a href="index.php?exam-phone-basics-open" data-page="exam" data-target="exam" class="btn btn-primary pull-right ajax"><em class="glyphicon glyphicon-plus-sign"></em> 开通新考场</a></h4>
			<?php $bid = 0;
 foreach($this->tpl_var['basics'] as $key => $basic){ 
 $bid++; ?>
			<div style="clear:both;overflow:hidden;background:#FFFFFF;margin-top:0.5rem">
				<div class="col-xs-4">
					<a href="index.php?<?php echo $this->tpl_var['_app']; ?>-phone-index-setCurrentBasic&basicid=<?php echo $basic['basicid']; ?>" class="ajax" data-page="basic" data-target="basic"><img src="<?php if($basic['basicthumb']){ ?><?php echo $basic['basicthumb']; ?><?php } else { ?>app/exam/styles/image/paper.png<?php } ?>" style="width:10rem;margin-top:0.5rem"/></a>
				</div>
				<div class="col-xs-8" style="padding:0.2rem;">
					<div class="text-left" style="padding:0.2rem;">
						<a href="index.php?<?php echo $this->tpl_var['_app']; ?>-phone-index-setCurrentBasic&basicid=<?php echo $basic['basicid']; ?>" class="ajax" data-page="basic" data-target="basic">
							<h5><?php echo $basic['basic']; ?></h5>
							<p style="font-size:1rem;"><?php echo $basic['basicdescribe']; ?></p>
						</a>
					</div>
				</div>
			</div>
			<?php } ?>
		</div>