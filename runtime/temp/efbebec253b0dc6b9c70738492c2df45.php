<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:50:"D:\wamp64\www./application/view\pond\pondtest.html";i:1505660811;s:43:"D:\wamp64\www./application/view\header.html";i:1505395733;s:40:"D:\wamp64\www./application/view\top.html";i:1505662559;s:43:"D:\wamp64\www./application/view\footer.html";i:1476168386;}*/ ?>
<!DOCTYPE html>
<html>
<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title><?php echo $title; ?></title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="/public/static/bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="/public/static/dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="/public/static/dist/css/skins/_all-skins.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="/public/static/plugins/iCheck/flat/blue.css">
  <!-- Morris chart -->
  <link rel="stylesheet" href="/public/static/plugins/morris/morris.css">
  <!-- jvectormap -->
  <link rel="stylesheet" href="/public/static/plugins/jvectormap/jquery-jvectormap-1.2.2.css">
  <!-- Date Picker -->
  <link rel="stylesheet" href="/public/static/plugins/datepicker/datepicker3.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="/public/static/plugins/daterangepicker/daterangepicker.css">
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="/public/static/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
  
  
  
  
  
  
  
  
  
  
  
  
<!-- jQuery 2.2.3 -->
<script src="/public/static/plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.6 -->
<script src="/public/static/bootstrap/js/bootstrap.min.js"></script>
<!-- Morris.js charts -->
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
<script src="/public/static/plugins/morris/morris.min.js"></script> -->
<!-- Sparkline -->
<script src="/public/static/plugins/sparkline/jquery.sparkline.min.js"></script>
<!-- jvectormap -->
<script src="/public/static/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="/public/static/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<!-- jQuery Knob Chart -->
<script src="/public/static/plugins/knob/jquery.knob.js"></script>
<!-- daterangepicker -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.11.2/moment.min.js"></script>
<script src="/public/static/plugins/daterangepicker/daterangepicker.js"></script>
<!-- datepicker -->
<script src="/public/static/plugins/datepicker/bootstrap-datepicker.js"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="/public/static/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<!-- Slimscroll -->
<script src="/public/static/plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="/public/static/plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="/public/static/dist/js/app.min.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<!-- <script src="/public/static/dist/js/pages/dashboard.js"></script>-->
<!-- AdminLTE for demo purposes -->
<script src="/public/static/dist/js/demo.js"></script>
  <script src="/public/third-party/ace/ace.js"></script>
  <script src="/public/common/boot.js"></script>
  <script src="/public/common/duckchange.js"></script>
  <link rel="stylesheet" href="/public/common/common.css">
  <link rel="stylesheet" href="/public/pondtest/style.css">
  <link rel="stylesheet" href="/public/pondtest/duck/style.css">
  
</head>
<body class="hold-transition skin-blue sidebar-mini">

<div class="wrapper">

	  <header class="main-header">
    <!-- Logo -->
    <a href="/" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>池塘</b></span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>池塘大战</b></span>
    </a>
	
	
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
              <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse pull-left" id="navbar-collapse">
          <ul class="nav navbar-nav">
            <li><a href=<?php echo url('/index/index/userinfo'); ?>> <span>个人信息</span></a></li>
			<li><a href=<?php echo url('/index/index/ducklist'); ?>> <span>脚本列表</span></a></li>
			 <li><a href=<?php echo url('/index/pond'); ?>> <span>训练塘</span></a></li>
			 <!--
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu">

		 
                <li><a href="#">Action</a></li>
                <li><a href="#">Another action</a></li>
                <li><a href="#">Something else here</a></li>
                <li class="divider"></li>
                <li><a href="#">Separated link</a></li>
                <li class="divider"></li>
                <li><a href="#">One more separated link</a></li>
              </ul>
            </li>
			-->
          </ul>
        </div>
		
		

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- Messages: style can be found in dropdown.less-->
		  <!--
          <li class="dropdown messages-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-envelope-o"></i>
              <span class="label label-success">4</span>
            </a>
            <ul class="dropdown-menu">
              <li class="header">你有 4 条新信息</li>
              <li>
                <ul class="menu">
                  <li>
                    <a href="#">
                      <div class="pull-left">
                        <img src="/public/static/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
                      </div>
                      <h4>
                        Support Team
                        <small><i class="fa fa-clock-o"></i> 5 mins</small>
                      </h4>
                    </a>
                  </li>
                  
                </ul>
              </li>
              <li class="footer"><a href="#">查看全部信息</a></li>
            </ul>
          </li>
          -->
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="<?php echo $uavatar; ?>" class="user-image" alt="User Image">
              <span class="hidden-xs"><?php echo $uname; ?></span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="<?php echo $uavatar; ?>" class="img-circle" alt="User Image">

                <p>
                  <?php echo $uname; ?>
                  <!-- <small>Member since Nov. 2012</small> -->
                </p>
              </li>
              <!-- Menu Body -->
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  <a href="<?php echo url('index/index/userinfo'); ?>" class="btn btn-default btn-flat">个人信息</a>
                </div>
                <div class="pull-right">
                  <a href="<?php echo url('index/user/logout'); ?>" class="btn btn-default btn-flat">退出登录</a>
                </div>
              </li>
            </ul>
          </li>
        </ul>
      </div>
    </nav>
  </header>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
     
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        训练塘
      </h1>
		  <div class="form-group">  
		<form class="form-inline" onkeydown="if(event.keyCode==13){return false;}" role="form">
			  <div class="form-group">
				<label for="name">当前加载的脚本：<?php echo $sname; ?></label>
				<input type="text" class="form-control" id="sname" value='<?php echo $sname; ?>' placeholder="请为脚本命名">
			  </div>
			  <button type="button" onclick="saveScript()" class="btn btn-success">保存脚本</button>
		</form>
	</div>  
    </section>

    <!-- Main content -->
    <section class="content">
		<div class="row">
		
			<div class="col-sm-3">
			     <div class="form-group">
                  <label>选手1</label>
                  <select class="form-control" id="player1">
				  <option value='0'>--无--</option>
                    <option value='-1'>兔子</option>
                    <option value='-2'>计数者</option>
                    <option value='-3'>堡垒</option>
                    <option value='-4'>狙击手</option>
                    <option value='1'>(玩家)<?php echo $sname; ?></option>
                  </select>
                </div>
			</div>
			<div class="col-sm-3">
			     <div class="form-group">
                  <label>选手2</label>
                  <select class="form-control" id="player2">
				  <option value='0'>--无--</option>
                    <option value='-1'>兔子</option>
                    <option value='-2'>计数者</option>
                    <option value='-3'>堡垒</option>
                    <option value='-4'>狙击手</option>
					<option value='1'>(玩家)<?php echo $sname; ?></option>
                  </select>
                </div>
			</div>
						<div class="col-sm-3">
			     <div class="form-group">
                  <label>选手3</label>
                  <select class="form-control" id="player3">
				  <option value='0'>--无--</option>
                    <option value='-1'>兔子</option>
                    <option value='-2'>计数者</option>
                    <option value='-3'>堡垒</option>
                    <option value='-4'>狙击手</option>
					<option value='1'>(玩家)<?php echo $sname; ?></option>
                  </select>
                </div>
			</div>
						<div class="col-sm-3">
			     <div class="form-group">
                  <label>选手4</label>
                  <select class="form-control" id="player4">
				  <option value='0'>--无--</option>
                    <option value='-1'>兔子</option>
                    <option value='-2'>计数者</option>
                    <option value='-3'>堡垒</option>
                    <option value='-4'>狙击手</option>
					<option value='1'>(玩家)<?php echo $sname; ?></option>
                  </select>
                </div>
			</div>
		
		</div>
      <div id="pond_game_content" class="row">
	   
	  </div>

    </section>
    <!-- /.content -->
  
  <!-- 
   <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> 2.3.6
    </div>
    <strong>Copyright &copy; 2014-2016 <a href="http://almsaeedstudio.com">Almsaeed Studio</a>.</strong> All rights
    reserved.
  </footer>-->
  </div>
</div>
<!-- ./wrapper -->


<script>


$("select#player1").change(function(){
     //console.log($(this).val());
	 updateUser();
 });
 $("select#player2").change(function(){
     //console.log($(this).val());
	 updateUser();
 });
 $("select#player3").change(function(){
     //console.log($(this).val());
	 updateUser();
 });
 $("select#player4").change(function(){
     //console.log($(this).val());
	 updateUser();
 }); 
 
 
function setScriptData() { 
	if(<?php echo $isBlock; ?>==0){
		Pond.Duck.changeTab(1);
	
		Pond.Duck.blocksEnabled_ = false;
		
		var defaultCode = '<?php echo $script; ?>';
	    BlocklyInterface.editor['setValue'](defaultCode, -1);
		
		

		  
	}else{
		Pond.Duck.changeTab(0);
	
	    console.log("block!");
		Pond.Duck.blocksEnabled_ = true;

		
		var defaultXml ='<?php echo $script; ?>';
		var xml = Blockly.Xml.textToDom(defaultXml);
		// Clear the workspace to avoid merge.
		BlocklyGames.workspace.clear();
		Blockly.Xml.domToWorkspace(xml, BlocklyGames.workspace);
		BlocklyGames.workspace.clearUndo();
		
		
	}
  
}
 
 function getUserScript(){
 		
         if (Pond.Duck.blocksEnabled_) {
		    var xml = Blockly.Xml.workspaceToDom(BlocklyGames.workspace);
			var xmlData = Blockly.Xml.domToText(xml);
           return xmlData.replace(new RegExp("'",'gm'),'');
         } else {
           return BlocklyInterface.editor['getValue']().replace(new RegExp("'",'gm'),'"');
		   }
 
 }
 
 function saveScript(){
 
	script=getUserScript();//return false;
	console.log(script);
	sid=$("#sid").val();
	sname=$("#sname").val().replace(new RegExp("'",'gm'),'');
	if(Pond.Duck.blocksEnabled_==true)isBlock=1;
	else isBlock=0;
	
	if(sname.length<=0){
		alert("请输入要保存的脚本名称");
		return false;
	}
	
	
	if(!confirm("将覆盖你的同名脚本（"+sname+"），确定吗？")){
		return false;
	}
	
	
	$.ajax({
		type:"POST",
		url:"<?php echo url('index/pond/saveScript'); ?>",
		dataType:"json",
		data:{
			sid:sid,
			sname:sname,
			script:script,
			isBlock:isBlock
			},
		success:function (msg)
		{
			console.log(msg);
			if (msg.status==0)
			{
				//success
				alert("保存成功");
				
			}else
			{
				//error
				alert("保存出错");
				
			}
			
			return false;

		},
		error:function (msg)
		{
			console.log(msg);
			
			return false;

		}
	});
	
	
	return false;
 }

</script>

</body>
</html>
