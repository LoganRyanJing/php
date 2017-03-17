{x2;include:header}
<body>
{x2;include:nav}
<div class="container-fluid">
	<!-- <div class="row-fluid">
		<div class="main box">
			<div class="col-xs-7" style="padding:15px;">
				<img src="app/core/styles/img/login.jpg" />
			</div>
			<div class="col-xs-4 pull-right" style="margin:30px 30px 0px auto;background-color:#FFFFFF;">
				<form class="col-xs-12" method="post" action="index.php?user-app-register">
					<h4 class="title" style="line-height:3em;margin-bottom:40px;">用户注册</h4>
					<div class="form-group input-group">
						<span class="input-group-addon" id="basic-addon1"><a class="glyphicon glyphicon-user" style="font-size:16px;"></a></span>
						<input class="form-control" name="args[username]" datatype="userName" needle="needle" msg="请你输入用户名" placeholder="请输入用户名" style="height:44px;line-height:24px;font-size:16px;">
					</div>
					<div class="form-group input-group">
						<span class="input-group-addon" id="basic-addon1"><a class="glyphicon glyphicon-envelope" style="font-size:16px;"></a></span>
						<input class="form-control" name="args[useremail]" datatype="email" needle="needle" msg="请你输入邮箱" placeholder="请输入邮箱" style="height:44px;line-height:24px;font-size:16px;">
					</div>
					<div class="form-group input-group">
						<span class="input-group-addon" id="basic-addon1"><a class="glyphicon glyphicon-lock" style="font-size:16px;"></a></span>
						<input class="form-control"  name="args[userpassword]" datatype="password" needle="needle" msg="请你输入密码" placeholder="请输入密码" type="password" style="height:44px;line-height:24px;font-size:16px;">
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
	</div> -->
	<div class="h-signup-box">
    <header>
        <h1>注册</h1>
    </header>
    <form class="layui-form" action="">
        <div class="layui-form-item">
            <label class="layui-form-label">用户名</label>
            <div class="layui-input-inline">
                <input type="text" name="ghsdm" lay-verify="required" autocomplete="off" placeholder="请输入用户名" class="layui-input">
            </div>
        </div>
        <div class="layui-form-item">
            <label class="layui-form-label">密码</label>
            <div class="layui-input-inline">
                <input type="password" name="password" lay-verify="required" autocomplete="off" placeholder="请输入密码" class="layui-input">
            </div>
        </div>
        <div class="layui-form-item">
            <label class="layui-form-label">地址</label>
            <div class="layui-input-inline">
                <input type="text" name="address" lay-verify="required" autocomplete="off" placeholder="请输入地址" class="layui-input">
            </div>
        </div>
        <div class="layui-form-item">
            <label class="layui-form-label">邮箱</label>
            <div class="layui-input-inline">
                <input type="email" name="email" lay-verify="required" autocomplete="off" placeholder="请输入邮箱" class="layui-input">
            </div>
        </div>
        <div class="layui-form-item">
            <label class="layui-form-label">固定电话</label>
            <div class="layui-input-inline">
                <input type="tel" name="phone" lay-verify="required" autocomplete="off" placeholder="请输入固定电话" class="layui-input">
            </div>
        </div>
        <div class="layui-form-item">
            <label class="layui-form-label">手机号</label>
            <div class="layui-input-inline">
                <input type="tel" name="mobilePhone" lay-verify="required" autocomplete="off" placeholder="请输入手机号" class="layui-input">
            </div>
        </div>
        <div class="layui-form-item h-center">
            <button class="layui-btn layui-btn-radius" lay-submit="submit" lay-filter="signup">确定</button>
        </div>
    </form>
    <div class="h-right">已有账号？去<a href="signin.html">登录</a></div>
</div>
</div>
{x2;include:footer}
</body>
</html>