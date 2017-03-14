		<header class="container-fluid" style="background-color:#9856a9;">
			<h5 class="text-center">
				<em style="font-size:2rem;" class="pull-left glyphicon glyphicon-chevron-left" onclick="javascript:$.goPrePage();"></em>
				正式考试
				<em style="font-size:2rem;" class="pull-right glyphicon glyphicon-home" onclick="javascript:$.goPage($('#page1'));"></em>
			</h5>
		</header>
		<div class="container-fluid">
			<div class="row-fluid">
				<p class="alert alert-danger" style="margin-top:1rem;">本考场开启时间
					<?php if($this->tpl_var['data']['currentbasic']['basicexam']['opentime']['start'] && $this->tpl_var['data']['currentbasic']['basicexam']['opentime']['end']){ ?>
					<?php echo date('Y-m-d H:i:s',$this->tpl_var['data']['currentbasic']['basicexam']['opentime']['start']); ?> - <?php echo date('Y-m-d H:i:s',$this->tpl_var['data']['currentbasic']['basicexam']['opentime']['end']); ?><?php } else { ?>不限<?php } ?> ；
					考试次数 <?php if($this->tpl_var['data']['currentbasic']['basicexam']['examnumber']){ ?><?php echo $this->tpl_var['data']['currentbasic']['basicexam']['examnumber']; ?><?php } else { ?>不限<?php } ?> ；
					抽卷规则 <?php if($this->tpl_var['data']['currentbasic']['basicexam']['selectrule']){ ?>系统随机抽卷<?php } else { ?>用户手选试卷<?php } ?>。
				</p>
				<?php if($this->tpl_var['data']['currentbasic']['basicexam']['opentime']['start'] && $this->tpl_var['data']['currentbasic']['basicexam']['opentime']['end']){ ?>
                	<?php if($this->tpl_var['data']['currentbasic']['basicexam']['opentime']['start'] <= TIME && $this->tpl_var['data']['currentbasic']['basicexam']['opentime']['end'] >= TIME){ ?>
                		<?php if($this->tpl_var['sessionvars']){ ?>
	                	<div style="clear:both;overflow:hidden;background:#FFFFFF;margin-top:0.5rem;padding:1rem 0rem;">
							<div class="col-xs-4">
								<a href="index.php?exam-phone-recover" class="ajax" data-page="paper" data-target="paper">
									<img src="app/core/styles/img/item.jpg" alt="" style="width:10rem;margin-top:0.5rem">
								</a>
							</div>
							<div class="col-xs-8">
								<a href="index.php?exam-phone-recover" class="ajax" data-page="paper" data-target="paper"><h5 class="title" style="margin-top:0px;">意外续考</h5></a>
								<p>
									<a href="index.php?exam-phone-recover" class="btn btn-primary ajax" data-page="paper" data-target="paper">继续考试</a>&nbsp;&nbsp;
									<a href="index.php?exam-phone-recover-clearexamsession" class="btn btn-danger ajax" msg="放弃考试会删除此次考试会话并不能恢复，确认要放弃吗？">放弃考试</a>
								</p>
							</div>
						</div>
	                	<?php } else { ?>

                		<?php if($this->tpl_var['data']['currentbasic']['basicexam']['selectrule']){ ?>
	                		<?php if($this->tpl_var['data']['currentbasic']['basicexam']['examnumber'] > 0 && $this->tpl_var['number']['all'] >= $this->tpl_var['data']['currentbasic']['basicexam']['examnumber']){ ?>
							<div class="text-center"><a class="btn" href="javascript:;">您的考试次数已经用完</a></div>
							<?php } else { ?>
							<div class="text-center"><a action-before="clearStorage" class="ajax btn btn-primary btn-block" data-page="paper" data-target="paper" href="index.php?exam-phone-exam-selectquestions&examid=<?php echo $exam['examid']; ?>" action-before="clearStorage">开始考试</a></div>
							<?php } ?>
                		<?php } else { ?>
                			<?php $eid = 0;
 foreach($this->tpl_var['exams']['data'] as $key => $exam){ 
 $eid++; ?>
                			<div style="clear:both;overflow:hidden;background:#FFFFFF;margin-top:0.5rem;padding:1rem 0rem;">
								<div class="col-xs-4">
									<?php if($this->tpl_var['data']['currentbasic']['basicexam']['examnumber'] > 0 && $this->tpl_var['number']['child'][$exam['examid']] >= $this->tpl_var['data']['currentbasic']['basicexam']['examnumber']){ ?>
									<a href="javascript:;">
									<?php } else { ?>
									<a action-before="clearStorage" href="index.php?exam-phone-exam-selectquestions&examid=<?php echo $exam['examid']; ?>" class="ajax" data-page="paper" data-target="paper">
									<?php } ?>
										<img src="app/core/styles/img/item.jpg" alt="" style="width:10rem;margin-top:0.5rem">
									</a>
								</div>
								<div class="col-xs-8" style="padding:0.2rem;">
									<div class="text-left" style="padding:0.2rem;">
										<?php if($this->tpl_var['data']['currentbasic']['basicexam']['examnumber'] > 0 && $this->tpl_var['number']['child'][$exam['examid']] >= $this->tpl_var['data']['currentbasic']['basicexam']['examnumber']){ ?>
										<a href="javascript:;">
										<?php } else { ?>
										<a action-before="clearStorage" href="index.php?exam-phone-exam-selectquestions&examid=<?php echo $exam['examid']; ?>" class="ajax" data-page="paper" data-target="paper">
										<?php } ?>
											<h5><?php echo $exam['exam']; ?></h5>
											<?php if($this->tpl_var['data']['currentbasic']['basicexam']['examnumber'] > 0 && $this->tpl_var['number']['child'][$exam['examid']] >= $this->tpl_var['data']['currentbasic']['basicexam']['examnumber']){ ?>
											<p style="font-size:1rem;" class="text-danger">考试次数已用完</p>
											<?php } else { ?>
											<p style="font-size:1rem;">总分：<?php echo $exam['examsetting']['score']; ?> 及格分：<?php echo $exam['examsetting']['passscore']; ?></p>
											<?php } ?>
										</a>
									</div>
								</div>
							</div>
							<?php } ?>
                		<?php } ?>

                		<?php } ?>
                	<?php } else { ?>
                		<p class="alert">本考场开放考试时间为：<?php echo date('Y-m-d H:i:s',$this->tpl_var['data']['currentbasic']['basicexam']['opentime']['start']); ?> - <?php echo date('Y-m-d H:i:s',$this->tpl_var['data']['currentbasic']['basicexam']['opentime']['end']); ?>，目前不是考试时间，请在规定时间内前来考试哦。</p>
                	<?php } ?>
                <?php } else { ?>
                	<?php if($this->tpl_var['sessionvars']){ ?>
                	<div style="clear:both;overflow:hidden;background:#FFFFFF;margin-top:0.5rem;padding:1rem 0rem;">
						<div class="col-xs-4">
							<a href="index.php?exam-phone-recover" class="ajax" data-page="paper" data-target="paper">
								<img src="app/core/styles/img/item.jpg" alt="" style="width:10rem;margin-top:0.5rem">
							</a>
						</div>
						<div class="col-xs-8">
							<a href="index.php?exam-phone-recover" class="ajax" data-page="paper" data-target="paper"><h5 class="title" style="margin-top:0px;">意外续考</h5></a>
							<p>
								<a href="index.php?exam-phone-recover" class="btn btn-primary ajax" data-page="paper" data-target="paper">继续考试</a>&nbsp;&nbsp;
								<a href="index.php?exam-phone-recover-clearexamsession" class="btn btn-danger ajax" msg="放弃考试会删除此次考试会话并不能恢复，确认要放弃吗？">放弃考试</a>
							</p>
						</div>
					</div>
                	<?php } else { ?>
                	<?php if($this->tpl_var['data']['currentbasic']['basicexam']['selectrule']){ ?>
                		<?php if($this->tpl_var['data']['currentbasic']['basicexam']['examnumber'] > 0 && $this->tpl_var['number']['all'] >= $this->tpl_var['data']['currentbasic']['basicexam']['examnumber']){ ?>
						<div class="text-center"><a class="btn" href="javascript:;">您的考试次数已经用完</a></div>
						<?php } else { ?>
						<div class="text-center"><a class="ajax btn btn-primary btn-block" data-page="paper" data-target="paper" href="index.php?exam-phone-exam-selectquestions&examid=<?php echo $exam['examid']; ?>" action-before="clearStorage">开始考试</a></div>
						<?php } ?>
            		<?php } else { ?>
            			<?php $eid = 0;
 foreach($this->tpl_var['exams']['data'] as $key => $exam){ 
 $eid++; ?>
						<div style="clear:both;overflow:hidden;background:#FFFFFF;margin-top:0.5rem;padding:1rem 0rem;">
							<div class="col-xs-4">
								<?php if($this->tpl_var['data']['currentbasic']['basicexam']['examnumber'] > 0 && $this->tpl_var['number']['child'][$exam['examid']] >= $this->tpl_var['data']['currentbasic']['basicexam']['examnumber']){ ?>
								<a href="javascript:;">
								<?php } else { ?>
								<a action-before="clearStorage" href="index.php?exam-phone-exam-selectquestions&examid=<?php echo $exam['examid']; ?>" class="ajax" data-page="paper" data-target="paper">
								<?php } ?>
									<img src="app/core/styles/img/item.jpg" alt="" style="width:10rem;margin-top:0.5rem">
								</a>
							</div>
							<div class="col-xs-8" style="padding:0.2rem;">
								<div class="text-left" style="padding:0.2rem;">
									<?php if($this->tpl_var['data']['currentbasic']['basicexam']['examnumber'] > 0 && $this->tpl_var['number']['child'][$exam['examid']] >= $this->tpl_var['data']['currentbasic']['basicexam']['examnumber']){ ?>
									<a href="javascript:;">
									<?php } else { ?>
									<a action-before="clearStorage" href="index.php?exam-phone-exam-selectquestions&examid=<?php echo $exam['examid']; ?>" class="ajax" data-page="paper" data-target="paper">
									<?php } ?>
										<h5><?php echo $exam['exam']; ?></h5>
										<?php if($this->tpl_var['data']['currentbasic']['basicexam']['examnumber'] > 0 && $this->tpl_var['number']['child'][$exam['examid']] >= $this->tpl_var['data']['currentbasic']['basicexam']['examnumber']){ ?>
										<p style="font-size:1rem;" class="text-danger">考试次数已用完</p>
										<?php } else { ?>
										<p style="font-size:1rem;">总分：<?php echo $exam['examsetting']['score']; ?> 及格分：<?php echo $exam['examsetting']['passscore']; ?></p>
										<?php } ?>
									</a>
								</div>
							</div>
						</div>
						<?php } ?>
            		<?php } ?>
            		<?php } ?>
                <?php } ?>
			</div>
		</div>