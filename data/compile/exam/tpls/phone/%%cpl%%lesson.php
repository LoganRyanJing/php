		<header class="container-fluid" style="background-color:#9856a9;">
			<h5 class="text-center">
				<em style="font-size:2rem;" class="pull-left glyphicon glyphicon-chevron-left" onclick="javascript:$.goPrePage();"></em>
				课后练习
				<em style="font-size:2rem;" class="pull-right glyphicon glyphicon-home" onclick="javascript:$.goPage($('#page1'));"></em>
			</h5>
		</header>
		<div class="container-fluid">
			<?php if($this->tpl_var['record']){ ?>
			<div style="clear:both;overflow:hidden;background:#FFFFFF;margin-top:0.5rem;padding:1rem">
				<p>系统检测到您上次做到《<?php echo $this->tpl_var['knows'][$this->tpl_var['record']['exerknowsid']]['knows']; ?>》的<?php echo $this->tpl_var['questype'][$this->tpl_var['record']['exerqutype']]['questype']; ?>第<?php echo $this->tpl_var['record']['exernumber']; ?>题，点此<a data-page="paper" data-target="paper" class="ajax text-danger" href="index.php?exam-phone-lesson-ajax-setlesson&questype=<?php echo $this->tpl_var['record']['exerqutype']; ?>&knowsid=<?php echo $this->tpl_var['record']['exerknowsid']; ?>&number=<?php echo $this->tpl_var['record']['exernumber']; ?>">继续练习</a></p>
			</div>
			<?php } ?>
			<div style="clear:both;overflow:hidden;background:#FFFFFF;margin-top:0.5rem;padding:1rem;margin-bottom:0.5rem;">
				<?php $sid = 0;
 foreach($this->tpl_var['sections'] as $key => $section){ 
 $sid++; ?>
				<table class="table table-hover table-bordered">
					<tr class="info"><td colspan="2"><?php echo $section['section']; ?></td></tr>
					<tr>
						<?php $kid = 0;
 foreach($this->tpl_var['basic']['basicknows'][$section['sectionid']] as $key => $know){ 
 $kid++; ?>
				    	<td><a href="index.php?exam-phone-lesson-lessonnumber&knowsid=<?php echo $know; ?>" data-page="lessonpaper" data-target="lessonpaper" class="ajax"><?php echo $this->tpl_var['knows'][$know]['knows']; ?></a></td>
				    	<?php if($kid % 2 == 0){ ?></tr><tr><?php } ?>
				    	<?php } ?>
				    	<?php if(($kid % 2 != 0) && ($kid/6 >= 1)){ ?>
				    	<?php $mod = 2 - $kid % 2;; ?>
				    	<td colspan="<?php echo $mod; ?>"></td>
				    	<?php } ?>
					</tr>
				</table>
				<?php } ?>
			</div>
		</div>