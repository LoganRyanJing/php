		<header class="container-fluid" style="background-color:#9856a9;">
			<h5 class="text-center">
				<em style="font-size:2rem;" class="pull-left glyphicon glyphicon-chevron-left" onclick="javascript:$.goPrePage();"></em>
				考试记录
				<em style="font-size:2rem;" class="pull-right glyphicon glyphicon-home" onclick="javascript:$.goPage($('#page1'));"></em>
			</h5>
		</header>
		<div class="container-fluid">
			<div class="row-fluid">
				<div style="clear:both;overflow:hidden;background:#FFFFFF;margin-top:0.5rem;padding:1rem;">
					<ul class="nav nav-pills">
						<li<?php if($this->tpl_var['ehtype'] == 0){ ?> class="active"<?php } ?>>
							<a href="index.php?exam-phone-history" class="ajax" data-target="history" data-page="history">强化训练</a>
						</li>
						<li<?php if($this->tpl_var['ehtype'] == 1){ ?> class="active"<?php } ?>>
							<a href="index.php?exam-phone-history&ehtype=1" class="ajax" data-target="history" data-page="history">模拟考试</a>
						</li>
						<li<?php if($this->tpl_var['ehtype'] == 2){ ?> class="active"<?php } ?>>
							<a href="index.php?exam-phone-history&ehtype=2" class="ajax" data-target="history" data-page="history">正式考试</a>
						</li>
					</ul>
				</div>
				<div style="clear:both;overflow:hidden;background:#FFFFFF;margin-top:0.5rem;padding:1rem;">
					<blockquote class="questype" style="margin:0px;">
						<?php if($this->tpl_var['ehtype'] == 0){ ?>
						<p><span class="text-warning">提示：</span>强化训练最多记录20条信息。</p>
						<?php } elseif($this->tpl_var['ehtype'] == 1){ ?>
						<p>您完成了<b class="text-warning"><?php echo $this->tpl_var['exams']['number']; ?></b>次考试， 平均分：<b class="text-warning"><?php echo $this->tpl_var['avgscore']; ?></b>分！</p>
						<?php } elseif($this->tpl_var['ehtype'] == 2){ ?>
						<p>您完成了<b class="text-warning"><?php echo $this->tpl_var['exams']['number']; ?></b>次考试， 平均分：<b class="text-warning"><?php echo $this->tpl_var['avgscore']; ?></b>分！</p>
						<?php } ?>
					</blockquote>
				</div>
				<div style="clear:both;overflow:hidden;background:#FFFFFF;margin-top:0.5rem;padding:1rem;">
					<table class="table table-bordered table-hover">
						<tr class="info">
							<td>答题记录</td>
							<td>得分</td>
							<td>解析</td>
							<td>删除</td>
						</tr>
						<?php $eid = 0;
 foreach($this->tpl_var['exams']['data'] as $key => $exam){ 
 $eid++; ?>
						<tr>
							<td><?php echo $exam['ehexam']; ?></td>
							<td><b class="red"><?php if(!$exam['ehstatus'] && $exam['ehdecide']){ ?>评分中<?php } else { ?><?php echo $exam['ehscore']; ?><?php } ?></b></td>
							<td><a href="index.php?exam-phone-history-view&ehid=<?php echo $exam['ehid']; ?>" class="ajax" data-target="views" data-page="views">解析</a></td>
							<td>
								<?php if($this->tpl_var['ehtype'] != 2){ ?>
								<a class="ajax" href="index.php?exam-phone-history-del&ehid=<?php echo $exam['ehid']; ?>">删除</a>
								<?php } else { ?>
								-
								<?php } ?>
							</td>
						</tr>
					<?php } ?>
					</table>
					<?php if($this->tpl_var['exams']['pages'] && $this->tpl_var['ehtype']){ ?>
					<ul class="pagination pull-right"><?php echo $this->tpl_var['exams']['pages']; ?></ul>
					<?php } ?>
				</div>
			</div>
		</div>