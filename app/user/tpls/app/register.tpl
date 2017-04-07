{x2;include:header}
<body>
{x2;include:nav}
<div class="container-fluid">
	<div class="row-fluid">
		<div class="main box">
			<div class="col-xs-7" style="padding:15px;">
				<img src="app/core/styles/img/login.jpg" />
			</div>
			<div class="col-xs-4 pull-right" style="margin:0px 30px 0px auto;background-color:#FFFFFF;">
				<form class="col-xs-12" method="post" action="index.php?user-app-register">
					<h4 class="title" style="line-height:3em;margin-bottom:30px;">用户注册</h4>
					<div class="form-group input-group">
						<span class="input-group-addon" id="basic-addon1"><a class="glyphicon glyphicon-user" style="font-size:16px;"></a></span>
						<input class="form-control" name="args[username]" datatype="userName" needle="needle" msg="请你输入用户名" placeholder="请输入用户名">
					</div>
					<div class="form-group input-group">
						<span class="input-group-addon" id="basic-addon1"><a class="glyphicon glyphicon-lock" style="font-size:16px;"></a></span>
						<input class="form-control"  name="args[userpassword]" datatype="password" needle="needle" msg="请你输入密码" placeholder="请输入密码" type="password" >
					</div>
                    
                    <div class="form-group input-group">
                    <span class="input-group-addon" id="basic-addon1"><a class="glyphicon glyphicon-globe"></a></span>
                    <!-- <input type="hidden" value="1" name="userregister"/> -->
                        <select class="form-control" id="areaid" name="args[areaid]" needle="needle" msg="您必须选择店铺所在地区">
                            <option value="">请选择所在地区</option>
                            {x2;tree:$areas,area,aid}
                            <option value="{x2;v:area['areaid']}"{x2;if:v:area['areaid'] == $basic['basicareaid']} selected{x2;endif}>{x2;v:area['area']}</option>
                            {x2;endtree}
                         </select>
                    </div>
                    
                    <div class="form-group input-group">
                    <span class="input-group-addon" id="basic-addon1"><a class="glyphicon glyphicon-home"></a></span>
                        <select class="form-control" id="areaid" name="rags[areaid]" needle="needle" msg="请您选择您所在店铺">
                            <option value="">请选择所在店铺</option>
                            {x2;tree:$shops,shop,shopid}
                            <option value="{x2;v:shop['shopid']}"{x2;if:v:shop['shopid'] == $basic['basicareaid']} selected{x2;endif}>{x2;v:shop['name']}</option>
                            {x2;endtree}
                        </select>
                    </div>

                    <div class="form-group input-group">
                        <span class="input-group-addon" id="basic-addon1"><a class="glyphicon glyphicon-pencil"></a></span>
                        <input type="hidden" value="1" name="userregister"/>
                        <input class="form-control" name="args[useremail]" datatype="email" needle="needle" msg="请你输入工号" placeholder="请输入工号，没有可不填写">
                    </div>
					{x2;if:$app['appsetting']['closeregist']}
					<button type="button" class="btn btn-primary btn-block" style="height:44px;line-height:32px;font-size:16px;margin-top:30px;">管理员禁止用户注册</button>
					{x2;else}
					<button type="submit" class="btn btn-primary btn-block" style="height:44px;line-height:32px;font-size:16px;margin-top:30px;">注册</button>
					{x2;endif}
					<input type="hidden" value="1" name="userregister"/>
					<a class="btn btn-default btn-block" href="index.php?user-app-login" style="height:44px;line-height:32px;font-size:16px;margin-top:10px;">登录</a>
				</form>
			</div>
		</div>
	</div>
</div>
{x2;include:footer}
</body>
</html>