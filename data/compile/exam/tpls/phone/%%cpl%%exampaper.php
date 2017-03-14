		<header class="container-fluid" style="background-color:#9856a9;">
			<h5 class="text-center">
				<em style="font-size:2rem;" class="pull-left glyphicon glyphicon-chevron-left" onclick="javascript:$.goPrePage();"></em>
				模拟考试
				<em style="font-size:2rem;" class="pull-right glyphicon glyphicon-home" onclick="javascript:$.goPage($('#page1'));"></em>
			</h5>
		</header>
		<div class="container-fluid">
			<div class="row-fluid">
				<?php $eid = 0;
 foreach($this->tpl_var['exams']['data'] as $key => $exam){ 
 $eid++; ?>
				<div style="clear:both;overflow:hidden;background:#FFFFFF;margin-top:0.5rem;padding:1rem 0rem;">
					<div class="col-xs-4">
						<a action-before="clearStorage" data-page="paper" data-target="paper" href="index.php?exam-phone-exampaper-selectquestions&examid=<?php echo $exam['examid']; ?>" class="ajax" style="position:relative;">
							<img src="app/core/styles/img/item.jpg" alt="" style="width:10rem;margin-top:0.5rem">
						</a>
					</div>
					<div class="col-xs-8" style="padding:0.2rem;">
						<div class="text-left" style="padding:0.2rem;">
							<a action-before="clearStorage" data-page="paper" data-target="paper" href="index.php?exam-phone-exampaper-selectquestions&examid=<?php echo $exam['examid']; ?>" class="ajax" style="position:relative;">
								<h5><?php echo $exam['exam']; ?></h5>
								<p style="font-size:1rem;">总分：<?php echo $exam['examsetting']['score']; ?> 及格分：<?php echo $exam['examsetting']['passscore']; ?></p>
							</a>
						</div>
					</div>
				</div>
				<?php } ?>
			</div>
		</div>