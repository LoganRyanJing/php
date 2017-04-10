{x2;include:header}
<body>
{x2;include:nav}
<div class="container-fluid">
	<div class="row-fluid">
		<div class="main">
			<div class="col-xs-2" style="padding-top:10px;margin-bottom:0px;">
			{x2;include:menu}
			</div>
			<div class="col-xs-10">
				<div class="box itembox" style="margin-bottom:0px;border-bottom:1px solid #CCCCCC;">
					<div class="col-xs-12">
						<ol class="breadcrumb">
							<li><a href="index.php?core-master">考试模块</a></li>
							<li><a href="index.php?exam-master-exams">试卷管理</a></li>
							<li class="active">试卷状态修改</li>
						</ol>
					</div>
				</div>
				<div class="box itembox" style="padding-top:10px;margin-bottom:0px;">
					<h4 class="title" style="padding:10px;">
						试卷转台修改
						<a class="btn btn-primary pull-right" href="index.php?{x2;$_app}-master-exams&page={x2;$page}{x2;$u}">试卷管理</a>
					</h4>
					<form action="index.php?exam-master-exams-modifystatus" method="post" class="form-horizontal" style="padding-top:10px;margin-bottom:0px;">
						<div class="form-group">
							<label for="examname" class="col-sm-2 control-label">试卷名称：</label>
							<div class="col-sm-6">
								<input id="examname" class="form-control" name="args[exam]" type="text" value="{x2;$exam['exam']}" needle="needle" msg="您必须输入试卷名称" />
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-2 control-label">试卷状态：</label>
							<div class="col-sm-10">
								<label class="radio-inline">
									<input name="args[examstatus]" type="radio" value="1" {x2;if:$exam['examstatus']}checked{x2;endif}/>开启
								</label>
								<label class="radio-inline">
									<input name="args[examstatus]" type="radio" value="0" {x2;if:!$exam['examstatus']}checked{x2;endif}/>禁用
								</label>
							</div>
						</div>
						<!-- <div class="form-group">
							<label class="col-sm-2 control-label">模块缩略图：</label>
							<div class="col-sm-10">
								<script type="text/template" id="pe-template-basicthumb">
						    		<div class="qq-uploader-selector" style="width:27%" qq-drop-area-text="可将图片拖拽至此处上传" style="clear:both;">
						            	<div class="qq-upload-button-selector" style="clear:both;">
						                	<ul class="qq-upload-list-selector list-unstyled" aria-live="polite" aria-relevant="additions removals" style="clear:both;">
								                <li class="text-center">
								                    <div class="thumbnail">
														<img class="qq-thumbnail-selector" alt="点击上传新图片">
														<input type="hidden" class="qq-edit-filename-selector" name="args[appthumb]" tabindex="0">
													</div>
								                </li>
								            </ul>
								            <ul class="qq-upload-list-selector list-unstyled" aria-live="polite" aria-relevant="additions removals" style="clear:both;">
									            <li class="text-center">
									                <div class="thumbnail">
														<img class="qq-thumbnail-selector" src="{x2;if:$app['appthumb']}{x2;$app['appthumb']}{x2;else}app/core/styles/images/noimage.gif{x2;endif}" alt="点击上传新图片">
														<input type="hidden" class="qq-edit-filename-selector" name="args[appthumb]" tabindex="0" value="{x2;if:$app['appthumb']}{x2;$app['appthumb']}{x2;else}app/core/styles/images/noimage.gif{x2;endif}">
						                			</div>
									            </li>
									        </ul>
						                </div>
						            </div>
						        </script>
						        <div class="fineuploader" attr-type="thumb" attr-template="pe-template-basicthumb"></div>
							</div>
						</div> -->
						<!--
						<div class="form-group">
							<label for="seo_title" class="col-sm-2 control-label">SEO Title：</label>
							<div class="col-sm-9">
								<input id="seo_title" class="form-control" name="args[appsetting][seo][title]" type="text" value="{x2;$app['appsetting']['seo']['title']}"/>
							</div>
						</div>
						<div class="form-group">
							<label for="seo_keywords" class="col-sm-2 control-label">SEO Keywords：</label>
							<div class="col-sm-9">
								<input id="seo_keywords" class="form-control" name="args[appsetting][seo][keywords]" type="text" value="{x2;$app['appsetting']['seo']['keywords']}"/>
							</div>
						</div>
						<div class="form-group">
							<label for="seo_description" class="col-sm-2 control-label">SEO Description：</label>
							<div class="col-sm-9">
								<textarea id="seo_description" class="form-control" name="args[appsetting][seo][description]" class="input-xxlarge">{x2;$app['appsetting']['seo']['description']}</textarea>
							</div>
						</div>
						-->
						<div class="form-group">
							<label for="seo_description" class="col-sm-2 control-label"></label>
							<div class="col-sm-9">
								<button class="btn btn-primary" type="submit">提交</button>
								<input type="hidden" name="page" value="{x2;$page}"/>
								<input type="hidden" name="modifystatus" value="1"/>
								<input type="hidden" name="examid" value="{x2;$examid}"/>
								{x2;tree:$search,arg,aid}
								<input type="hidden" name="search[{x2;v:key}]" value="{x2;v:arg}"/>
								{x2;endtree}
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
{x2;include:footer}
</body>
</html>