			<?php if($this->tpl_var['question']['questionid']){ ?>
			<h4 class="title">
				第<?php echo $this->tpl_var['number']; ?>题
				<span class="pull-right">
					<a class="btn text-primary qicon" onclick="javascript:favorquestion('<?php echo $this->tpl_var['question']['questionid']; ?>');"><i class="glyphicon glyphicon-heart-empty"></i></a>
				</span>
			</h4>
			<div class="choice">
				</a><?php echo html_entity_decode($this->ev->stripSlashes($this->tpl_var['question']['question'])); ?>
			</div>
			<?php if(!$this->tpl_var['questype']['questsort']){ ?>
			<?php if($this->tpl_var['question']['questionselect'] && $this->tpl_var['questype']['questchoice'] != 5){ ?>
			<div class="choice" style="padding-bottom:0.5rem;">
            	<?php echo html_entity_decode($this->ev->stripSlashes($this->tpl_var['question']['questionselect'])); ?>
            </div>
            <?php } ?>
			<div class="selector">
            	<?php if($this->tpl_var['questype']['questchoice'] == 1 || $this->tpl_var['questype']['questchoice'] == 4){ ?>
                    <?php $sid = 0;
 foreach($this->tpl_var['selectorder'] as $key => $so){ 
 $sid++; ?>
                    <?php if($key == $this->tpl_var['question']['questionselectnumber']){ ?>
                    <?php break;; ?>
                    <?php } ?>
                    <label class="radio-inline" style="line-height:2.8rem;"><input type="radio" name="question[<?php echo $this->tpl_var['question']['questionid']; ?>]" rel="<?php echo $this->tpl_var['question']['questionid']; ?>" value="<?php echo $so; ?>" <?php if($so == $this->tpl_var['sessionvars']['examsessionuseranswer'][$this->tpl_var['question']['questionid']]){ ?>checked<?php } ?>/><?php echo $so; ?> </label>
                    <?php } ?>
                <?php } elseif($this->tpl_var['questype']['questchoice'] == 5){ ?>
                	<input type="text" style="width:100%;height:2em;" name="question[<?php echo $this->tpl_var['question']['questionid']; ?>]" value="<?php echo $this->tpl_var['sessionvars']['examsessionuseranswer'][$this->tpl_var['question']['questionid']]; ?>" rel="<?php echo $this->tpl_var['question']['questionid']; ?>"/>
                <?php } else { ?>
                    <?php $sid = 0;
 foreach($this->tpl_var['selectorder'] as $key => $so){ 
 $sid++; ?>
                    <?php if($key >= $this->tpl_var['question']['questionselectnumber']){ ?>
                    <?php break;; ?>
                    <?php } ?>
                    <label class="checkbox-inline" style="line-height:2.8rem;"><input type="checkbox" name="question[<?php echo $this->tpl_var['question']['questionid']; ?>][<?php echo $key; ?>]" rel="<?php echo $this->tpl_var['question']['questionid']; ?>" value="<?php echo $so; ?>" <?php if(in_array($so,$this->tpl_var['sessionvars']['examsessionuseranswer'][$this->tpl_var['question']['questionid']])){ ?>checked<?php } ?>/><?php echo $so; ?> </label>
                    <?php } ?>
                <?php } ?>
            </div>
			<?php } else { ?>
			<div class="selector">
				<?php $this->tpl_var['dataid'] = $this->tpl_var['question']['questionid']; ?>
				<textarea class="jckeditors" etype="simple" id="editor<?php echo $this->tpl_var['dataid']; ?>" name="question[<?php echo $this->tpl_var['dataid']; ?>]" rel="<?php echo $this->tpl_var['question']['questionid']; ?>"><?php echo html_entity_decode($this->ev->stripSlashes($this->tpl_var['sessionvars']['examsessionuseranswer'][$this->tpl_var['dataid']])); ?></textarea>
			</div>
			<?php } ?>
			<div class="choice" style="margin-top:20px;overflow:hidden;">
				<div class="btn-group hide answerbox pull-right">
            		<?php if($this->tpl_var['number'] > 1){ ?>
            		<a class="btn btn-primary ajax" data-page="paper" data-target="lessonpaper-questionpanel" href="index.php?<?php echo $this->tpl_var['_app']; ?>-phone-lesson-ajax-questions&number=<?php echo intval($this->tpl_var['number'] - 1); ?>" title="上一题">上一题</a>
            		<?php } ?>
					<a class="btn btn-primary ajax" data-page="paper" data-target="lessonpaper-questionpanel" href="index.php?<?php echo $this->tpl_var['_app']; ?>-phone-lesson-ajax-questions&number=<?php echo intval($this->tpl_var['number'] + 1); ?>" title="下一题">下一题</a>
            	</div>
            	<div class="btn-group pull-right">
            		<a class="btn btn-primary questionbtn" href="javascript:;" onclick="javascript:$('.questionbtn').addClass('hide');$('.answerbox').removeClass('hide');" title="查看答案">查看答案</a>
            	</div>
        	</div>
			<div class="answerbox hide" style="border-left:10px solid #CCCCCC;margin-top:20px;">
				<table class="table table-hover table-bordered">
            		<tr class="info">
                		<td width="20%">答案</td>
                		<td><?php echo html_entity_decode($this->ev->stripSlashes($this->tpl_var['question']['questionanswer'])); ?></td>
                	</tr>
                	<tr>
                		<td>解析</td>
                		<td><?php echo html_entity_decode($this->ev->stripSlashes($this->tpl_var['question']['questiondescribe'])); ?></td>
                	</tr>
            	</table>
			</div>
			<div id="rightanswer_<?php echo $this->tpl_var['question']['questionid']; ?>" class="hide"><?php echo html_entity_decode($this->ev->stripSlashes($this->tpl_var['question']['questionanswer'])); ?></div>
			<?php } else { ?>
			<h4 class="title">
				第<?php echo $this->tpl_var['number']; ?>题
				<span class="pull-right">
					<a class="btn text-primary qicon" onclick="javascript:favorquestion('<?php echo $this->tpl_var['vquestion']['questionid']; ?>');"><i class="glyphicon glyphicon-heart-empty"></i></a>
					<a name="question_<?php echo $this->tpl_var['vquestion']['questionid']; ?>"></a>
					<input id="time_<?php echo $this->tpl_var['vquestion']['questionid']; ?>" type="hidden" name="time[<?php echo $this->tpl_var['vquestion']['questionid']; ?>]"/>
				</span>
			</h4>
			<div class="choice">
				<?php echo html_entity_decode($this->ev->stripSlashes($this->tpl_var['question']['qrquestion'])); ?>
			</div>
			<hr />
            <div class="paperexamcontent_<?php echo $this->tpl_var['vquestion']['questionid']; ?> form-horizontal" style="padding:0rem 1.5rem;">
				<div class="choice">
					<a name="qrchild_<?php echo $this->tpl_var['vquestion']['questionid']; ?>"></a>
					<?php echo html_entity_decode($this->ev->stripSlashes($this->tpl_var['vquestion']['question'])); ?>
				</div>
				<?php if(!$this->tpl_var['questype']['questsort']){ ?>
				<?php if($this->tpl_var['vquestion']['questionselect'] && $this->tpl_var['questype']['questchoice'] != 5){ ?>
				<div class="choice" style="padding-bottom:0.5rem;">
	            	<?php echo html_entity_decode($this->ev->stripSlashes($this->tpl_var['vquestion']['questionselect'])); ?>
	            </div>
	            <?php } ?>
	            <div class="selector questionanswerbox">
		        	<?php if($this->tpl_var['questype']['questchoice'] == 1 || $this->tpl_var['questype']['questchoice'] == 4){ ?>
		                <?php $sid = 0;
 foreach($this->tpl_var['selectorder'] as $key => $so){ 
 $sid++; ?>
		                <?php if($key == $this->tpl_var['vquestion']['questionselectnumber']){ ?>
		                <?php break;; ?>
		                <?php } ?>
		                <label class="radio-inline" style="line-height:2.8rem;"><input type="radio" name="question[<?php echo $this->tpl_var['vquestion']['questionid']; ?>]" rel="<?php echo $this->tpl_var['vquestion']['questionid']; ?>" value="<?php echo $so; ?>" <?php if($so == $this->tpl_var['sessionvars']['examsessionuseranswer'][$this->tpl_var['vquestion']['questionid']]){ ?>checked<?php } ?>/><?php echo $so; ?> </label>
		                <?php } ?>
		            <?php } elseif($this->tpl_var['questype']['questchoice'] == 5){ ?>
		            	<input type="text" class="form-control" name="question[<?php echo $this->tpl_var['vquestion']['questionid']; ?>]" value="<?php echo $this->tpl_var['sessionvars']['examsessionuseranswer'][$this->tpl_var['vquestion']['questionid']]; ?>" rel="<?php echo $this->tpl_var['vquestion']['questionid']; ?>"/>
		            <?php } else { ?>
		                <?php $sid = 0;
 foreach($this->tpl_var['selectorder'] as $key => $so){ 
 $sid++; ?>
		                <?php if($key >= $this->tpl_var['vquestion']['questionselectnumber']){ ?>
		                <?php break;; ?>
		                <?php } ?>
		                <label class="checkbox-inline" style="line-height:2.8rem;"><input type="checkbox" name="question[<?php echo $this->tpl_var['vquestion']['questionid']; ?>][<?php echo $key; ?>]" rel="<?php echo $this->tpl_var['vquestion']['questionid']; ?>" value="<?php echo $so; ?>" <?php if(in_array($so,$this->tpl_var['sessionvars']['examsessionuseranswer'][$this->tpl_var['vquestion']['questionid']])){ ?>checked<?php } ?>/><?php echo $so; ?> </label>
		                <?php } ?>
		            <?php } ?>
		        </div>
				<?php } else { ?>
				<div class="selector questionanswerbox">
					<?php $this->tpl_var['dataid'] = $this->tpl_var['vquestion']['questionid']; ?>
					<textarea class="jckeditors" etype="simple" id="editor<?php echo $this->tpl_var['dataid']; ?>" name="question[<?php echo $this->tpl_var['dataid']; ?>]" rel="<?php echo $this->tpl_var['vquestion']['questionid']; ?>"><?php echo html_entity_decode($this->ev->stripSlashes($this->tpl_var['sessionvars']['examsessionuseranswer'][$this->tpl_var['dataid']])); ?></textarea>
				</div>
				<?php } ?>
				<div class="choice" style="margin-top:20px;overflow:hidden;">
					<div class="btn-group pull-right hide answerbox">
		            		<?php if($this->tpl_var['number'] > 1){ ?>
		            		<a class="btn btn-primary ajax" action-pageant="pre" data-page="paper" data-target="lessonpaper-questionpanel" href="index.php?<?php echo $this->tpl_var['_app']; ?>-phone-lesson-ajax-questions&number=<?php echo intval($this->tpl_var['number'] - 1); ?>" title="上一题">上一题</a>
		            		<?php } ?>
		            		<?php if(($did + $this->tpl_var['number']) < $this->tpl_var['allnumber']){ ?>
							<a class="btn btn-primary ajax" data-page="paper" data-target="lessonpaper-questionpanel" href="index.php?<?php echo $this->tpl_var['_app']; ?>-phone-lesson-ajax-questions&number=<?php echo intval($this->tpl_var['number'] + 1); ?>" title="下一题">下一题</a>
							<?php } ?>
		        	</div>
		        	<div class="btn-group pull-right">
		        		<a class="btn btn-primary questionbtn" href="javascript:;" onclick="javascript:$('.paperexamcontent_<?php echo $this->tpl_var['vquestion']['questionid']; ?>').find('.questionbtn').addClass('hide');$('.paperexamcontent_<?php echo $this->tpl_var['vquestion']['questionid']; ?>').find('.answerbox').removeClass('hide');" title="查看答案">查看答案</a>
		        	</div>
		    	</div>
		    	<div id="rightanswer_<?php echo $this->tpl_var['vquestion']['questionid']; ?>" class="hide"><?php echo html_entity_decode($this->ev->stripSlashes($this->tpl_var['vquestion']['questionanswer'])); ?></div>
				<div class="answerbox hide" style="margin-top:20px;">
					<table class="table table-hover table-bordered">
	            		<tr class="info">
	                		<td width="20%">答案</td>
	                		<td><?php echo html_entity_decode($this->ev->stripSlashes($this->tpl_var['vquestion']['questionanswer'])); ?></td>
	                	</tr>
	                	<tr>
	                		<td>解析</td>
	                		<td><?php echo html_entity_decode($this->ev->stripSlashes($this->tpl_var['vquestion']['questiondescribe'])); ?></td>
	                	</tr>
	            	</table>
				</div>
			</div>
		</div>
		<?php } ?>
		<script type="text/javascript">
			$("input:radio").click(function(){
				var _this = $(this);
				var qid = _this.attr('rel');
				_this.parents('.selector').parent().find('.questionbtn').addClass('hide');
				_this.parents('.selector').parent().find('.answerbox').removeClass('hide');
				if(_this.val() == $("#rightanswer_"+qid).html())
				{
					_this.parents('.selector').addClass('alert-success').addClass('alert').html('恭喜您回答正确！');
				}
				else
				{
					_this.parents('.selector').addClass('alert-danger').addClass('alert').html('回答错误，正确答案为：'+$("#rightanswer_"+qid).html()+'，您选择的答案是：'+_this.val());
				}
			});
		</script>