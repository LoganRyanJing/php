<?php if(!$this->tpl_var['userhash']){ ?>
<?php $this->_compileInclude('header'); ?>
<body>
<div id="content">
	<div class="pages" id="paper">
<?php } ?>
		<header class="container-fluid" style="background-color:#9856a9;">
			<h5 class="text-center">
				<em style="font-size:2rem;" class="pull-left glyphicon glyphicon-chevron-left" onclick="javascript:$.goPrePage();"></em>
				<?php echo $this->tpl_var['sessionvars']['examsession']; ?>
				<em style="font-size:2rem;" class="pull-right glyphicon glyphicon-home" onclick="javascript:$.goPage($('#page1'));"></em>
			</h5>
		</header>
		<div class="container-fluid" style="margin-bottom:2.5rem;">
			<div class="row-fluid">
				<div class="col-xs-12" id="questionbar" style="display:none;">
					<dl class="clear" id="questionindex">
						<?php $oid = 0; ?>
						<?php $qmid = 0; ?>
						<?php $qid = 0;
 foreach($this->tpl_var['sessionvars']['examsessionsetting']['examsetting']['questypelite'] as $key => $lite){ 
 $qid++; ?>
						<?php if($lite){ ?>
						<?php $quest = $key; ?>
						<?php if($this->tpl_var['sessionvars']['examsessionquestion']['questions'][$quest] || $this->tpl_var['sessionvars']['examsessionquestion']['questionrows'][$quest]){ ?>
						<?php if($this->tpl_var['data']['currentbasic']['basicexam']['changesequence']){ ?>
						<?php shuffle($this->tpl_var['sessionvars']['examsessionquestion']['questions'][$quest]);; ?>
						<?php shuffle($this->tpl_var['sessionvars']['examsessionquestion']['questionrows'][$quest]);; ?>
						<?php } ?>
						<?php $oid++; ?>
						<dt class="float_l"><h4 class="title"><?php echo $this->tpl_var['ols'][$oid]; ?>、<?php echo $this->tpl_var['questype'][$quest]['questype']; ?></h4></dt>
						<dd class="tableindex">
							<?php $tid = 0; ?>
			                <?php $qnid = 0;
 foreach($this->tpl_var['sessionvars']['examsessionquestion']['questions'][$quest] as $key => $question){ 
 $qnid++; ?>
			                <?php $tid++; ?>
			                <?php $qmid++; ?>
							<a style="margin-bottom:0.5rem;" id="sign_<?php echo $question['questionid']; ?>" href="javascript:;" onclick="javascript:$.leftMenu($('#questionbar'));gotoquestion('<?php echo $question['questionid']; ?>');$('#form1').toggle();" class="btn btn-default<?php if($this->tpl_var['sessionvars']['examsessionsign'][$question['questionid']]){ ?> btn-danger<?php } ?>"><?php echo $tid; ?></a>
							<?php } ?>
							<?php $qrid = 0;
 foreach($this->tpl_var['sessionvars']['examsessionquestion']['questionrows'][$quest] as $key => $questionrow){ 
 $qrid++; ?>
			                <?php $tid++; ?>
			                <?php $did = 0;
 foreach($questionrow['data'] as $key => $data){ 
 $did++; ?>
			                <?php $qmid++; ?>
			                <a style="margin-bottom:0.5rem;" id="sign_<?php echo $data['questionid']; ?>" href="javascript:;" onclick="javascript:$.leftMenu($('#questionbar'));gotoquestion('<?php echo $data['questionid']; ?>');$('#form1').toggle();" class="btn btn-default<?php if($this->tpl_var['sessionvars']['examsessionsign'][$data['questionid']]){ ?> btn-danger<?php } ?>"><?php echo $tid; ?>-<?php echo $did; ?></a>
	            			<?php } ?>
	            			<?php } ?>
						</dd>
						<?php } ?>
						<?php } ?>
						<?php } ?>
					</dl>
				</div>
				<form id="form1" name="form1" method="post" action="index.php?exam-phone-exam-score" class="col-xs-12" style="padding:0px;">
					<input type="hidden" name="insertscore" value="1"/>
					<?php $oid = 0; ?>
					<?php $qcid = 0; ?>
					<?php $qid = 0;
 foreach($this->tpl_var['sessionvars']['examsessionsetting']['examsetting']['questypelite'] as $key => $lite){ 
 $qid++; ?>
					<?php if($lite){ ?>
					<?php $quest = $key; ?>
					<?php if($this->tpl_var['sessionvars']['examsessionquestion']['questions'][$quest] || $this->tpl_var['sessionvars']['examsessionquestion']['questionrows'][$quest]){ ?>
					<?php $oid++; ?>
					<h4 class="title questionpanel" id="questype_<?php echo $quest; ?>"><?php echo $this->tpl_var['ols'][$oid]; ?>、<?php echo $this->tpl_var['questype'][$quest]['questype']; ?><?php echo $this->tpl_var['sessionvars']['examsessionsetting']['examsetting']['questype'][$quest]['describe']; ?></h4>
					<?php $tid = 0; ?>
	                <?php $qnid = 0;
 foreach($this->tpl_var['sessionvars']['examsessionquestion']['questions'][$quest] as $key => $question){ 
 $qnid++; ?>
	                <?php $tid++; ?>
	                <?php $qcid++; ?>
					<div class="paperexamcontent" id="questions_<?php echo $question['questionid']; ?>" rel="<?php echo $quest; ?>" style="clear:both;overflow:hidden;background:#FFFFFF;margin-top:0.5rem;padding:1rem;">
						<h4 class="title">
							第<?php echo $tid; ?>题
							<span class="pull-right">
								<a class="btn <?php if($this->tpl_var['sessionvars']['examsessionsign'][$question['questionid']]){ ?>text-danger<?php } else { ?>text-info<?php } ?> qicon" href="javascript:;" onclick="javascript:signQuestion('<?php echo $question['questionid']; ?>',this);"><i class="glyphicon glyphicon-bookmark"></i></a>
								<a name="question_<?php echo $question['questionid']; ?>">
								<input id="time_<?php echo $question['questionid']; ?>" type="hidden" name="time[<?php echo $question['questionid']; ?>]"/>
							</span>
						</h4>
						<div class="choice">
							</a><?php echo html_entity_decode($this->ev->stripSlashes($question['question'])); ?>
						</div>
						<?php if(!$this->tpl_var['questype'][$quest]['questsort']){ ?>
						<?php if($question['questionselect'] && $this->tpl_var['questype'][$quest]['questchoice'] != 5){ ?>
						<div class="choice" style="padding-bottom:0.5rem;">
	                    	<?php echo html_entity_decode($this->ev->stripSlashes($question['questionselect'])); ?>
	                    </div>
	                    <?php } ?>
						<div class="selector">
	                    	<?php if($this->tpl_var['questype'][$quest]['questchoice'] == 1 || $this->tpl_var['questype'][$quest]['questchoice'] == 4){ ?>
		                        <?php $sid = 0;
 foreach($this->tpl_var['selectorder'] as $key => $so){ 
 $sid++; ?>
		                        <?php if($key == $question['questionselectnumber']){ ?>
		                        <?php break;; ?>
		                        <?php } ?>
		                        <label class="radio-inline" style="line-height:2.8rem;"><input type="radio" name="question[<?php echo $question['questionid']; ?>]" rel="<?php echo $question['questionid']; ?>" value="<?php echo $so; ?>" <?php if($so == $this->tpl_var['sessionvars']['examsessionuseranswer'][$question['questionid']]){ ?>checked<?php } ?>/><?php echo $so; ?> </label>
		                        <?php } ?>
		                    <?php } elseif($this->tpl_var['questype'][$quest]['questchoice'] == 5){ ?>
	                        	<input type="text" style="width:100%;height:2em;" name="question[<?php echo $question['questionid']; ?>]" value="<?php echo $this->tpl_var['sessionvars']['examsessionuseranswer'][$question['questionid']]; ?>" rel="<?php echo $question['questionid']; ?>"/>
	                        <?php } else { ?>
		                        <?php $sid = 0;
 foreach($this->tpl_var['selectorder'] as $key => $so){ 
 $sid++; ?>
		                        <?php if($key >= $question['questionselectnumber']){ ?>
		                        <?php break;; ?>
		                        <?php } ?>
		                        <label class="checkbox-inline" style="line-height:2.8rem;"><input type="checkbox" name="question[<?php echo $question['questionid']; ?>][<?php echo $key; ?>]" rel="<?php echo $question['questionid']; ?>" value="<?php echo $so; ?>" <?php if(in_array($so,$this->tpl_var['sessionvars']['examsessionuseranswer'][$question['questionid']])){ ?>checked<?php } ?>/><?php echo $so; ?> </label>
		                        <?php } ?>
	                        <?php } ?>
	                    </div>
						<?php } else { ?>
						<div class="selector">
							<?php $this->tpl_var['dataid'] = $question['questionid']; ?>
							<?php $this->_compileInclude('plugin_editor'); ?>
						</div>
						<?php } ?>
						<div class="toolbar" style="padding:1rem 0.5rem;">
							<?php if($qcid > 1){ ?>
							<a class="btn btn-default" onclick="javascript:gotoindexquestion(<?php echo $qcid - 2;; ?>);"><span class="glyphicon glyphicon-chevron-left"></span>上一题</a>
							<?php } ?>
							<?php if($qcid < $qmid){ ?>
							<a class="pull-right btn btn-primary" onclick="javascript:gotoindexquestion(<?php echo $qcid; ?>);">下一题<span class="glyphicon glyphicon-chevron-right"></span></a>
							<?php } ?>
						</div>
					</div>
					<?php } ?>
					<?php $qrid = 0;
 foreach($this->tpl_var['sessionvars']['examsessionquestion']['questionrows'][$quest] as $key => $questionrow){ 
 $qrid++; ?>
	                <?php $tid++; ?>
	                <?php $did = 0;
 foreach($questionrow['data'] as $key => $data){ 
 $did++; ?>
		            <?php $qcid++; ?>
					<div class="paperexamcontent" id="questions_<?php echo $data['questionid']; ?>" rel="<?php echo $quest; ?>" style="clear:both;overflow:hidden;background:#FFFFFF;margin-top:0.5rem;padding:1rem;">
						<h4 class="title">第<?php echo $tid; ?>题<?php echo $did; ?>小题
							<span class="pull-right">
								<a class="btn <?php if($this->tpl_var['sessionvars']['examsessionsign'][$data['questionid']]){ ?>text-danger<?php } else { ?>text-info<?php } ?> qicon" href="javascript:;" onclick="javascript:signQuestion('<?php echo $data['questionid']; ?>',this);"><i class="glyphicon glyphicon-bookmark"></i></a>
								<a name="question_<?php echo $data['questionid']; ?>"></a>
								<input id="time_<?php echo $data['questionid']; ?>" type="hidden" name="time[<?php echo $data['questionid']; ?>]"/>
							</span>
						</h4>
						<div class="choice">
							<?php echo html_entity_decode($this->ev->stripSlashes($questionrow['qrquestion'])); ?>
						</div>
		                <hr />
		                <div style="padding:0rem 1.5rem;margin-top:1rem;">
							<div class="choice">
								<?php echo html_entity_decode($this->ev->stripSlashes($data['question'])); ?>
							</div>
							<?php if(!$this->tpl_var['questype'][$quest]['questsort']){ ?>
							<?php if($data['questionselect'] && $this->tpl_var['questype'][$quest]['questchoice'] != 5){ ?>
							<div class="choice" style="padding-bottom:0.5rem;">
		                    	<?php echo html_entity_decode($this->ev->stripSlashes($data['questionselect'])); ?>
		                    </div>
		                    <?php } ?>
							<div class="selector">
		                    	<?php if($this->tpl_var['questype'][$quest]['questchoice'] == 1 || $this->tpl_var['questype'][$quest]['questchoice'] == 4){ ?>
			                        <?php $sid = 0;
 foreach($this->tpl_var['selectorder'] as $key => $so){ 
 $sid++; ?>
			                        <?php if($key == $data['questionselectnumber']){ ?>
			                        <?php break;; ?>
			                        <?php } ?>
			                        <label class="radio-inline" style="line-height:2.8rem;"><input type="radio" name="question[<?php echo $data['questionid']; ?>]" rel="<?php echo $data['questionid']; ?>" value="<?php echo $so; ?>" <?php if($so == $this->tpl_var['sessionvars']['examsessionuseranswer'][$data['questionid']]){ ?>checked<?php } ?>/><?php echo $so; ?> </label>
			                        <?php } ?>
			                    <?php } elseif($this->tpl_var['questype'][$quest]['questchoice'] == 5){ ?>
		                        	<input type="text" style="width:100%;height:2em;" name="question[<?php echo $data['questionid']; ?>]" value="<?php echo $this->tpl_var['sessionvars']['examsessionuseranswer'][$data['questionid']]; ?>" rel="<?php echo $data['questionid']; ?>"/>
		                        <?php } else { ?>
			                        <?php $sid = 0;
 foreach($this->tpl_var['selectorder'] as $key => $so){ 
 $sid++; ?>
			                        <?php if($key >= $data['questionselectnumber']){ ?>
			                        <?php break;; ?>
			                        <?php } ?>
			                        <label class="checkbox-inline" style="line-height:2.8rem;"><input type="checkbox" name="question[<?php echo $data['questionid']; ?>][<?php echo $key; ?>]" rel="<?php echo $data['questionid']; ?>" value="<?php echo $so; ?>" <?php if(in_array($so,$this->tpl_var['sessionvars']['examsessionuseranswer'][$data['questionid']])){ ?>checked<?php } ?>/><?php echo $so; ?> </label>
			                        <?php } ?>
		                        <?php } ?>
		                    </div>
							<?php } else { ?>
							<div class="selector">
								<?php $this->tpl_var['dataid'] = $data['questionid']; ?>
								<?php $this->_compileInclude('plugin_editor'); ?>
							</div>
							<?php } ?>
						</div>
						<div class="toolbar" style="padding:1rem 0.5rem;">
							<?php if($qcid > 1){ ?>
							<a class="btn btn-default" onclick="javascript:gotoindexquestion(<?php echo $qcid - 2;; ?>);"><span class="glyphicon glyphicon-chevron-left"></span>上一题</a>
							<?php } ?>
							<?php if($qcid < $qmid){ ?>
							<a class="pull-right btn btn-primary" onclick="javascript:gotoindexquestion(<?php echo $qcid; ?>);">下一题<span class="glyphicon glyphicon-chevron-right"></span></a>
							<?php } ?>
						</div>
					</div>
					<?php } ?>
					<?php } ?>
					<?php } ?>
					<?php } ?>
					<?php } ?>
				</form>
			</div>
		</div>
		<div class="container-fluid text-center" style="background-color:#9856a9;z-index:9999;position:fixed;bottom:0px;border-top:1px solid #E9E9E9;">
			<div style="clear:both;background-color:#9856a9;padding-top:0px;border:0px;padding:0rem;padding-bottom:0.8rem;" class="input-group-addon footer">
				<div class="col-xs-3">
					<div class="text-center" style="height:4.2rem;padding:0.2rem;">
						<a href="javascript:;" onclick="javascript:$.leftMenu($('#questionbar'));$('#form1').toggle();">
							<h5 style="line-height:3.2rem;color:#FFFFFF;"><em class="glyphicon glyphicon-th"></em> 题序</h5>
						</a>
					</div>
				</div>
				<div class="col-xs-6">
					<div class="text-center" style="height:4.2rem;padding:0.2rem;">
						<a href="index.php?item-phone-cart" class="ajax" data-page="cart" data-target="cart">
							<h4 style="line-height:3.2rem;color:#FFFFFF;"><em class="glyphicon glyphicon-time"></em> <span id="timer_h">00</span><span>：</span><span id="timer_m">00</span><span>：</span><span id="timer_s">00</span></h4>
						</a>
					</div>
				</div>
				<div class="col-xs-3">
					<div class="text-center" style="height:4.2rem;padding:0.2rem;">
						<a href="#submodal" role="button" data-toggle="modal">
							<h5 style="line-height:3.2rem;color:#FFFFFF;"><em class="glyphicon glyphicon-list-alt"></em> 交卷</h5>
						</a>
					</div>
				</div>
			</div>
		</div>
		<div class="modal fade" id="submodal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						<h4 class="modal-title" id="myModalLabel">交卷</h4>
					</div>
					<div class="modal-body">
						<p>共有试题 <span class="allquestionnumber">50</span> 题，已做 <span class="yesdonumber">0</span> 题。您确认要交卷吗？</p>
					</div>
					<div class="modal-footer">
						<button type="button" onclick="javascript:submitPaper();" class="btn btn-primary">确定交卷</button>
						<button aria-hidden="true" class="btn" type="button" data-dismiss="modal">再检查一下</button>
					</div>
				</div>
			</div>
		</div>
		<script type="text/javascript">
		var qindex = 0;
		function gotoquestion(questid)
		{
			$(".questionpanel").hide();
			$(".paperexamcontent").hide();
			$("#questions_"+questid).show();
			$("#questype_"+$("#questions_"+questid).attr('rel')).show();
		}
		function gotoindexquestion(index)
		{
			$(".questionpanel").hide();
			$(".paperexamcontent").hide();
			$(".paperexamcontent").eq(index).show();
			$("#questype_"+$(".paperexamcontent").eq(index).attr('rel')).show();
		}
		$(document).ready(function(){
			$.get('index.php?exam-phone-index-ajax-lefttime&rand'+Math.random(),function(data){
				var setting = {
					time:<?php echo $this->tpl_var['sessionvars']['examsessiontime']; ?>,
					hbox:$("#timer_h"),
					mbox:$("#timer_m"),
					sbox:$("#timer_s"),
					finish:function(){
						submitPaper();
					}
				}
				setting.lefttime = parseInt(data);
				countdown(setting);
			});

			(function(){
				$(".questionpanel").hide();
				$(".questionpanel:first").show();
				$(".paperexamcontent").hide();
				$(".paperexamcontent:first").show();
			})();

			setInterval(saveanswer,120000);

			initData = $.parseJSON(storage.getItem('questions'));
			if(initData){
				for(var p in initData){
					if(p!='set')
					formData[p]=initData[p];
					$("#time_"+$('[name="'+p+'"]').attr('rel')).val(initData[p].time);
				}

				var textarea = $('#form1 textarea');
				$.each(textarea,function(){
					var _this = $(this);
					if(initData[_this.attr('name')])
					{
						_this.val(initData[_this.attr('name')].value);
						batmark(_this.attr('rel'),initData[_this.attr('name')].value);
					}
				});
				var texts = $('#form1 :input[type=text]');
				$.each(texts,function(){
					var _this = $(this);
					if(initData[_this.attr('name')])
					{
						_this.val(initData[_this.attr('name')]?initData[_this.attr('name')].value:'');
						if(initData[_this.attr('name')].value && initData[_this.attr('name')].value != '')
						batmark(_this.attr('rel'),initData[_this.attr('name')].value);
					}
				});

				var radios = $('#form1 :input[type=radio]');
				$.each(radios,function(){
					var _= this, v = initData[_.name]?initData[_.name].value:null;
					var _this = $(this);
					if(v!=''&&v==_.value){
						_.checked = true;
						batmark(_this.attr('rel'),initData[_this.attr('name')].value);
					}else{
						_.checked=false;
					}
				});

				var checkboxs=$('#form1 :input[type=checkbox]');
				$.each(checkboxs,function(){
					var _=this,v=initData[_.name]?initData[_.name].value:null;
					var _this = $(this);
					if(v!=''&&v==_.value){
						_.checked=true;
						batmark(_this.attr('rel'),initData[_this.attr('name')].value);
					}else{
						_.checked=false;
					}
				});
			}

			$('#form1 :input[type=text]').change(function(){
				var _this=$(this);
				var p=[];
				p.push(_this.attr('name'));
				p.push(_this.val());
				p.push(Date.parse(new Date())/1000);
				$('#time_'+_this.attr('rel')).val(Date.parse(new Date())/1000);
				set.apply(formData,p);
				markQuestion(_this.attr('rel'),true);
			});

			$('#form1 :input[type=radio]').change(function(){
				var _=this;
				var _this=$(this);
				var p=[];
				p.push(_.name);
				if(_.checked){
					p.push(_.value);
					p.push(Date.parse(new Date())/1000);
					$('#time_'+_this.attr('rel')).val(Date.parse(new Date())/1000);
					set.apply(formData,p);
				}else{
					p.push('');
					p.push(null);
					set.apply(formData,p);
				}
				markQuestion(_this.attr('rel'));
			});

			$('#form1 textarea').change(function(){
				var _= this;
				var _this=$(this);
				var p=[];
				p.push(_.name);
				p.push(_.value);
				p.push(Date.parse(new Date())/1000);
				$('#time_'+_this.attr('rel')).val(Date.parse(new Date())/1000);
				set.apply(formData,p);
				markQuestion(_this.attr('rel'),true);
			});
			$('#form1 :input[type=checkbox]').change(function(){
				var _= this;
				var _this = $(this);
				var p=[];
				p.push(_.name);
				if(_.checked){
					p.push(_.value);
					p.push(Date.parse(new Date())/1000);
					$('#time_'+_this.attr('rel')).val(Date.parse(new Date())/1000);
					set.apply(formData,p);
				}else{
					p.push('');
					p.push(null);
					set.apply(formData,p);
				}
				markQuestion(_this.attr('rel'));
			});
			$('.allquestionnumber').html($('.paperexamcontent').length);
			$('.yesdonumber').html($('#questionindex .btn-primary').length);
		});
		</script>
	<?php if(!$this->tpl_var['userhash']){ ?>
    </div>
</div>
</body>
</html>
<?php } ?>