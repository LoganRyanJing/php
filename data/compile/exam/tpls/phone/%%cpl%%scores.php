		<header class="container-fluid" style="background-color:#9856a9;">
			<h5 class="text-center">
				<em style="font-size:2rem;" class="pull-left glyphicon glyphicon-chevron-left" onclick="javascript:$.goPrePage();"></em>
				成绩单
				<em style="font-size:2rem;" class="pull-right glyphicon glyphicon-home" onclick="javascript:$.goPage($('#page1'));"></em>
			</h5>
		</header>
		<div class="container-fluid">
			<div class="row-fluid">
				<div style="clear:both;overflow:hidden;background:#FFFFFF;margin-top:0.5rem;padding:1rem;margin-bottom:0.5rem;">
					<blockquote class="questype" style="margin:0px;">
						<p>您的最高分：<span class="text-warning"><?php echo $this->tpl_var['s']['score']; ?></span> 您的最好名次：<span class="text-warning"><?php echo $this->tpl_var['s']['index']; ?></span></p>
					</blockquote>
				</div>
				<div style="clear:both;overflow:hidden;background:#FFFFFF;margin-top:0.5rem;padding:1rem;margin-bottom:0.5rem;">
					<table class="table table-bordered table-hover">
						<tr class="info">
							<td>名次</td>
							<td>姓名</td>
	                        <td>得分</td>
							<td>考试时间</td>
							<td>用时</td>
						</tr>
						<?php $sid = 0;
 foreach($this->tpl_var['scores']['data'] as $key => $score){ 
 $sid++; ?>
						<tr>
							<td><?php echo ($this->tpl_var['page'] - 1)*20 + $sid; ?></td>
							<td><?php echo $score['usertruename']; ?></td>
							<td><?php echo $score['ehscore']; ?></td>
							<td><?php echo date('Y-m-d H:i:s',$score['ehstarttime']); ?></td>
							<td><?php if($score['ehtime'] >= 60){ ?><?php if($score['ehtime']%60){ ?><?php echo intval($score['ehtime']/60)+1; ?><?php } else { ?><?php echo intval($score['ehtime']/60); ?><?php } ?>分钟<?php } else { ?><?php echo $score['ehtime']; ?>秒<?php } ?></td>
						</tr>
					<?php } ?>
					</table>
				</div>
				<ul class="pagination pull-right"><?php echo $this->tpl_var['scores']['pages']; ?></ul>
			</div>
		</div>