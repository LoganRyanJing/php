		<header class="container-fluid" style="background-color:#9856a9;">
			<h5 class="text-center">
				<em style="font-size:2rem;" class="pull-left glyphicon glyphicon-chevron-left" onclick="javascript:$.goPrePage();"></em>
				用户注册
				<em style="font-size:2rem;" class="pull-right glyphicon glyphicon-home" onclick="javascript:$.goPage($('#page1'));"></em>
			</h5>
		</header>
    	<div style="width:90%;margin:auto;margin-bottom:1rem;">
	    	<h2 class="text-center">
				<img src="app/core/styles/img/logo2.png" style="width:6rem;">
			</h2>
			<!-- <h4 class="text-center" style="padding:1rem;">用户注册</h4> -->
			<form class="col-xs-12" method="post" action="index.php?user-phone-register">
				<div class="form-group input-group">
					<span class="input-group-addon" id="basic-addon1"><a class="glyphicon glyphicon-globe"></a></span>
					<input type="hidden" value="1" name="userregister"/>
					<select class="form-control" id="areaid" name="args[userareaid]" needle="needle" style="font-size: 1.6rem;" msg="您必须选择店铺所在地区" >
                        <option value="">请选择所在地区</option>
                        {x2;tree:$areas,area,aid}
                        <option value="{x2;v:area['areaid']}"{x2;if:v:area['areaid'] == $basic['basicareaid']} selected{x2;endif}>{x2;v:area['area']}</option>
                        {x2;endtree}    
                    </select>					
				</div>
				<div class="form-group input-group">
					<span class="input-group-addon" id="basic-addon1"><a class="glyphicon glyphicon-home"></a></span>
					<input type="hidden" value="1" name="userregister"/>
					<select class="form-control" id="shopid" name="args[usershopid]" needle="needle" style="font-size: 1.6rem;" msg="您必须选择店铺所在地区" >
                        <option  value="">请选择所在店铺</option>
                        {x2;tree:$shops,shop,shopid}
                        <option value="{x2;v:shop['shopid']}"{x2;if:v:shop['shopid'] == $basic['basicshopid']} selected{x2;endif}>{x2;v:shop['name']}</option>
                        {x2;endtree}    
                    </select>		
				</div>
				<div class="form-group input-group">
					<span class="input-group-addon" id="basic-addon1"><a class="glyphicon glyphicon-user"></a></span>
					<input type="hidden" value="1" name="userregister"/>
					<input class="form-control" name="args[username]" datatype="userName" needle="needle" msg="请你输入用户名" placeholder="请输入用户名">
				</div>
				<div class="form-group input-group">
					<span class="input-group-addon" id="basic-addon1"><a class="glyphicon glyphicon-lock"></a></span>
					<input class="form-control"  name="args[userpassword]" datatype="password" needle="needle" msg="请你输入密码" placeholder="请输入密码" type="password">
				</div>
				<div class="form-group input-group">
					<span class="input-group-addon" id="basic-addon1"><a class="glyphicon glyphicon-lock"></a></span>
					<input class="form-control"  name="repeatpassword" datatype="password" needle="needle" msg="请再次输入密码" placeholder="请再次输入密码" type="password">
				</div>
				<div class="form-group input-group">
					<span class="input-group-addon" id="basic-addon1"><a class="glyphicon glyphicon-envelope"></a></span>
					<input type="hidden" value="1" name="userregister"/>
					<input class="form-control" name="args[useremail]" datatype="email" needle="needle" msg="请你输入邮箱" placeholder="请输入邮箱">
				</div>
				<div class="form-group input-group">
					<span class="input-group-addon" id="basic-addon1"><a class="glyphicon glyphicon-pencil"></a></span>
					<input type="hidden" value="1" name="userregister"/>
					<input class="form-control" id="usernumber" name="args[usernumber]" placeholder="请输入工号，没有可暂时不填写">
				</div>
				<button type="submit" class="btn btn-primary btn-block" style="line-height:3rem;">注册</button>
				<a class="btn btn-default btn-block ajax" href="index.php?user-phone-login" data-target="user" data-page="user" style="line-height:3rem;">登录</a>
			</form>
		</div>