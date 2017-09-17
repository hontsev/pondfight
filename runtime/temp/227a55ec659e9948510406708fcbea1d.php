<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:51:"D:\wamp64\www./application/view\pond\pondmatch.html";i:1505661330;s:43:"D:\wamp64\www./application/view\header.html";i:1505395733;s:40:"D:\wamp64\www./application/view\top.html";i:1505649427;s:43:"D:\wamp64\www./application/view\footer.html";i:1476168386;}*/ ?>
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

  <link rel="stylesheet" href="/public/common/common.css">
  <link rel="stylesheet" href="/public/pondmatch/style.css">
  <link rel="stylesheet" href="/public/pondmatch/duck/style.css">
  
</head>
<body class="hold-transition skin-blue sidebar-mini">

<div class="wrapper">

	  <header class="main-header">
    <!-- Logo -->
    <a href="index.html" class="logo">
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
        <?php echo $name1; ?>&nbsp;&nbsp;&nbsp;&nbsp;VS&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $name2; ?>
      </h1>
		<p id="leftTime">剩余时间 : 30 秒</p>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
	    <div class="col-md-4"  id="pond_game_content">
		
		</div><div show="hidden" id="blockly"></div>
		<div class="col-md-8">
			<div class="box box-success direct-chat direct-chat-success" >
                <div class="box-header with-border">
                  <h3 class="box-title">战斗过程</h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body" >
                  <div class="direct-chat-messages" id="matchdetail" style="min-height:370px">
                     <!-- <div class="direct-chat-info clearfix">战斗234</div> -->
					 
                <!-- /.box-footer-->
				  </div>
				  <!--/.direct-chat -->
				</div>
			</div>
		  </div>
		</div>
    </section>
    <!-- /.content -->
  </div>
  <!-- 
   <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> 2.3.6
    </div>
    <strong>Copyright &copy; 2014-2016 <a href="http://almsaeedstudio.com">Almsaeed Studio</a>.</strong> All rights
    reserved.
  </footer>-->

  
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<script>

function print(str){
	$("#matchdetail").append('<div class="direct-chat-info clearfix">'+str+'</div>');
	$("#matchdetail").scrollTop($("#matchdetail").height()); 
	
}

function setTime(time){
	if(time<=0)time=0;
	$("#leftTime").text("剩余时间: "+time+" 秒")
}


 

function gameover(){
	console.log(Pond.Battle.RANK);
    winner=Pond.Battle.RANK[0];
	winnerIndex=winner.visualizationIndex;
	winnerName=winner.name;
	winnerHP=100-winner.damage;
	
	loser=Pond.Battle.RANK[1];
	loserIndex=loser.visualizationIndex;
	loserName=loser.name;
	loserHP=100-loser.damage;
	
	winnerHP=Math.round(winnerHP * 100) / 100;
	loserHP=Math.round(loserHP * 100) / 100;
	
	if(winnerHP>loserHP){
		//someone win
		print((winnerIndex+1)+"号选手："+winnerName+" 取得胜利！给对手造成"+(100-loserHP)+"点伤害，自己还剩下"+winnerHP+"点生命值");
		switch(winnerIndex+1){
			case 1:score1=1;score2=0;break;
			case 2:score1=0;score2=1;break;
			default:score1=0;score2=0;break;
		}
	}else{
		//draw match
		print((winnerIndex+1)+"号选手："+winnerName+" 和"+(loserIndex+1)+"号选手："+loserName+" 菜鸡互啄，打了个平手。");
		score1=0;
		score2=0;
	}
	id1=<?php echo $id1; ?>;
	id2=<?php echo $id2; ?>;


	
	$.ajax({
		type:"POST",
		url:"<?php echo url('index/pond/submitMatchResult'); ?>",
		dataType:"json",
		data:{
			id1:id1,
			id2:id2,
			score1:score1,
			score2:score2
			},
		success:function (msg)
		{
			console.log(msg);
			if (msg.status==0)
			{
				//success
				//alert("保存成功");
				print("(比赛结束。请自行返回之前的页面)");
				
			}else
			{
				//error
				//alert("保存出错");
				
			}
			
			return false;

		},
		error:function (msg)
		{
			console.log(msg);
			
			return false;

		}
	});
}

 function getUserScript(script,isBlock){
 		
         if (isBlock==1) {
		    var xml = Blockly.Xml.textToDom(script);
		    Blockly.Xml.domToWorkspace(xml, BlocklyGames.workspace);
			xmlData=Blockly.JavaScript.workspaceToCode(BlocklyGames.workspace);
           return xmlData.replace(new RegExp("'",'gm'),'');
         } else {
           return script.replace(new RegExp("'",'gm'),'"');
		   }
 
 }


function initMatch(){
BlocklyGames.workspace = Blockly.inject('blockly',
      {'media': '/public/third-party/blockly/media/',
       'rtl': false,
       'toolbox': false,
       'trashcan': false,
       'zoom': null});
	   
	   
	script1=getUserScript('<?php echo $script1; ?>',<?php echo $isBlock1; ?>);
	if(<?php echo $isBlock1; ?>)
	script2=getUserScript('<?php echo $script2; ?>',<?php echo $isBlock2; ?>);
	name1='<?php echo $name1; ?>';
	name2='<?php echo $name2; ?>';
	console.log(script1);
	Pond.Battle.addAvatar(name1, script1, new goog.math.Coordinate(20, 50), 0);
	Pond.Battle.addAvatar(name2, script2, new goog.math.Coordinate(80, 50), 0);
	
	var time=3;
  var timer = setInterval(function (){
  
	if(time<=0){
		print("开始比赛");
	}else{
		print("还剩"+time+"秒开始比赛");
	}
    
	time-=1;
	
	if(time<=-1){
		
		clearInterval(timer);
		Pond.execute();
		return;
	}
    
  }, 1000);
}

</script>
  <script src="/public/third-party/ace/ace.js"></script>
  <script src="/public/common/boot.js"></script>
   <script src="/public/common/duckchange.js"></script>
</body>
</html>
