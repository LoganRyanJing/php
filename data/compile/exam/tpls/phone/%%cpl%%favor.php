		<header class="container-fluid" style="background-color:#9856a9;">
			<h5 class="text-center">
				<em style="font-size:2rem;" class="pull-left glyphicon glyphicon-chevron-left" onclick="javascript:$.goPrePage();"></em>
				我的收藏
				<em style="font-size:2rem;" class="pull-right glyphicon glyphicon-home" onclick="javascript:$.goPage($('#page1'));"></em>
			</h5>
		</header>
		<div class="container-fluid">
			<div class="row-fluid">
				<div style="clear:both;overflow:hidden;background:#FFFFFF;margin-top:0.5rem;padding:1rem;">
					<ul class="nav nav-pills">
						<li<?php if(!$this->tpl_var['type']){ ?> class="active"<?php } ?>>
							<a href="index.php?exam-phone-favor" class="ajax" data-target="favor" data-page="favor">普通试题</a>
						</li>
						<li<?php if($this->tpl_var['type']){ ?> class="active"<?php } ?>>
							<a href="index.php?exam-phone-favor&type=1" class="ajax" data-target="favor" data-page="favor">题冒题</a>
						</li>
					</ul>
				</div>
				<div style="clear:both;overflow:hidden;background:#FFFFFF;margin-top:0.5rem;padding:1rem;">
					<form action="index.php?exam-phone-favor" method="post" class="form-inline" style="padding-top:10px;" data-target="favor">
						<blockquote class="questype">
							<table width="100%">
								<tr>
									<td width="70%">
										<select name="search[questype]" class="form-control" autocomplete="off">
				                        	<option value="0">请选择题型</option>
				                        	<?php $qid = 0;
 foreach($this->tpl_var['questype'] as $key => $quest){ 
 $qid++; ?>
				                    		<option value="<?php echo $quest['questid']; ?>"<?php if($this->tpl_var['search']['questype'] == $quest['questid']){ ?> selected<?php } ?>><?php echo $quest['questype']; ?></option>
				                    		<?php } ?>
				                        </select>
									</td>
									<td width="30%">
										<button class="btn btn-primary pull-right" type="submit">提交</button>
										<input type="hidden" value="<?php echo $this->tpl_var['type']; ?>" name="type" />
									</td>
								</tr>
							</table>
						</blockquote>
					</form>
				</div>
				<div style="clear:both;overflow:hidden;background:#FFFFFF;margin-top:0.5rem;padding:1rem;">
					<?php if($this->tpl_var['type']){ ?>
						<?php $ishead = 0; ?>
						<?php $ispre = 0; ?>
						<?php $qid = 0;
 foreach($this->tpl_var['favors']['data'] as $key => $question){ 
 $qid++; ?>
							<?php if($pre != $question['questionparent']){ ?>
							<?php $ishead = 0; ?>
							<?php } ?>
							<div class="paperexamcontent">
								<?php if(!$ishead){ ?>
								<h4 class="title">
									【<?php echo $this->tpl_var['questype'][$question['questiontype']]['questype']; ?>】
								</h4>
								<div class="choice">
									<?php echo html_entity_decode($this->ev->stripSlashes($question['qrquestion'])); ?>
								</div>
								<?php } ?>
								<hr />
								<div style="padding:0rem 1.5rem;">
									<h4 class="title">
										第<?php echo ($this->tpl_var['page']-1)*20+$qid; ?>题
									</h4>
									<div class="choice">
										<?php echo html_entity_decode($this->ev->stripSlashes($question['question'])); ?>
									</div>
									<?php if(!$this->tpl_var['questypes'][$question['questiontype']]['questsort']){ ?>
									<?php if($question['questionselect'] && $this->tpl_var['questype'][$question['questiontype']]['questchoice'] != 5){ ?>
									<div class="choice">
					                	<?php echo html_entity_decode($this->ev->stripSlashes($question['questionselect'])); ?>
					                </div>
					                <?php } ?>
				                    <?php } ?>
				                    <div class="selector" style="margin-top:0.5rem;">
					                	<table class="table table-hover table-bordered">
					                		<tr class="info">
					                    		<td style="border-top:0px;">正确答案：</td>
					                    	</tr>
					                    	<tr>
					                    		<td style="border-top:0px;"><?php echo html_entity_decode($this->ev->stripSlashes($question['questionanswer'])); ?></td>
					                    	</tr>
					                    	<tr class="info">
					                    		<td>所在章：</td>
					                    	</tr>
					                    	<tr>
					                    		<td><?php $kid = 0;
 foreach($question['qrknowsid'] as $key => $knowsid){ 
 $kid++; ?><?php echo $this->tpl_var['globalsections'][$this->tpl_var['globalknows'][$knowsid['knowsid']]['knowssectionid']]['section']; ?>&nbsp;&nbsp;&nbsp;<?php } ?></td>
					                    	</tr>
					                    	<tr class="info">
					                    		<td>知识点：</td>
					                    	</tr>
					                    	<tr>
					                    		<td><?php $kid = 0;
 foreach($question['qrknowsid'] as $key => $knowsid){ 
 $kid++; ?><?php echo $this->tpl_var['globalknows'][$knowsid['knowsid']]['knows']; ?>&nbsp;&nbsp;&nbsp;<?php } ?></td>
					                    	</tr>
					                    	<tr class="info">
					                    		<td>答案解析：</td>
					                    	</tr>
					                    	<tr>
					                    		<td><?php echo html_entity_decode($this->ev->stripSlashes($question['questiondescribe'])); ?></td>
					                    	</tr>
					                	</table>
					                </div>
								</div>
							<?php $ishead++; ?>
				            <?php $pre=$question['questionparent']; ?>
						<?php } ?>
						</div>
					<?php } else { ?>
						<?php $qid = 0;
 foreach($this->tpl_var['favors']['data'] as $key => $question){ 
 $qid++; ?>
						<div class="paperexamcontent">
							<h4 class="title">
								第<?php echo ($this->tpl_var['page']-1)*20+$qid; ?>题【<?php echo $this->tpl_var['questype'][$question['questiontype']]['questype']; ?>】
							</h4>
							<div class="choice">
								</a><?php echo html_entity_decode($this->ev->stripSlashes($question['question'])); ?>
							</div>
							<?php if(!$this->tpl_var['questype'][$question['questiontype']]['questsort']){ ?>
							<?php if($question['questionselect'] && $this->tpl_var['questype'][$question['questiontype']]['questchoice'] != 5){ ?>
							<div class="choice">
			                	<?php echo html_entity_decode($this->ev->stripSlashes($question['questionselect'])); ?>
			                </div>
			                <?php } ?>
			                <?php } ?>
							<div class="selector decidediv" style="margin-top:0.5rem;">
			                	<table class="table table-hover table-bordered">
			                		<tr class="info">
			                    		<td style="border-top:0px;">正确答案：</td>
			                    	</tr>
			                    	<tr>
			                    		<td style="border-top:0px;"><?php echo html_entity_decode($this->ev->stripSlashes($question['questionanswer'])); ?></td>
			                    	</tr>
			                    	<tr class="info">
			                    		<td>所在章：</td>
			                    	</tr>
			                    	<tr>
			                    		<td><?php $kid = 0;
 foreach($question['questionknowsid'] as $key => $knowsid){ 
 $kid++; ?><?php echo $this->tpl_var['globalsections'][$this->tpl_var['globalknows'][$knowsid['knowsid']]['knowssectionid']]['section']; ?>&nbsp;&nbsp;&nbsp;<?php } ?></td>
			                    	</tr>
			                    	<tr class="info">
			                    		<td>知识点：</td>
			                    	</tr>
			                    	<tr>
			                    		<td><?php $kid = 0;
 foreach($question['questionknowsid'] as $key => $knowsid){ 
 $kid++; ?><?php echo $this->tpl_var['globalknows'][$knowsid['knowsid']]['knows']; ?>&nbsp;&nbsp;&nbsp;<?php } ?></td>
			                    	</tr>
			                    	<tr class="info">
			                    		<td>答案解析：</td>
			                    	</tr>
			                    	<tr>
			                    		<td><?php echo html_entity_decode($this->ev->stripSlashes($question['questiondescribe'])); ?></td>
			                    	</tr>
			                	</table>
			                </div>
						</div>
						<?php } ?>
					<?php } ?>
					<ul class="pagination pagination-right"><?php echo $this->tpl_var['favors']['pages']; ?></ul>
				</div>
			</div>
		</div>