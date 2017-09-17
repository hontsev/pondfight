<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:51:"D:\wamp64\www./application/view\index\ducklist.html";i:1505659213;s:43:"D:\wamp64\www./application/view\header.html";i:1505395733;s:40:"D:\wamp64\www./application/view\top.html";i:1505662559;s:43:"D:\wamp64\www./application/view\footer.html";i:1476168386;}*/ ?>
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
        脚本列表
        <small>大家创作的小鸭子AI</small>
      </h1>
    </section>

    <!-- Main content -->
    <section class="content">
      
      <!-- Main row -->
      <div class="row">
        <div class="col-xs-12 table-responsive">
          <table class="table table-striped">
            <thead>
            <tr>
              <th>名字</th>
              <th>作者</th>
              <th>发布时间</th>
			  <th>胜率</th>
              <th>操作</th>
            </tr>
            </thead>
            <tbody>
			
			<?php if(is_array($ducks) || $ducks instanceof \think\Collection || $ducks instanceof \think\Paginator): $i = 0; $__LIST__ = $ducks;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$d): $mod = ($i % 2 );++$i;?>
			<tr>
				<td><?php echo $d['name']; ?></td>
				<td><a href='<?php echo url("/index/index/userinfo/tname/".$d['creater']); ?>'><?php echo $d['creater']; ?></a></td>
				<td><?php echo $d['createtime']; ?></td>
				<td><?php echo $d['win_rate']; ?>%</td>
				<td>
				<?php if($d['creater'] == $uname): ?>
					<a class='btn btn-success'  href='javascript:editSelfDuck("<?php echo $d['id']; ?>");'>编辑</a></td>
				<?php else: ?>
					<a class='btn btn-warning'  href='javascript:chooseSelfDuck("<?php echo $d['id']; ?>");'>比试</a></td>
				<?php endif; ?>
				
			</tr>
			<?php endforeach; endif; else: echo "" ;endif; ?>
			

            </tbody>
          </table>
        </div>
        <!-- /.col -->
		

      </div>
      <!-- /.row -->
	  
	  

	
	
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

  
</div>
<!-- ./wrapper -->

	  <div class="modal fade" id="chooseDuck" tabindex="-1" role="dialog">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">
					&times;
				</button>
				<h4 class="modal-title" id="myModalLabel">
					选择你要作战的小鸭子AI
				</h4>
			</div>
			<div class="modal-body">
				<select class="form-control" id="myduck">
					<?php if(is_array($myducks) || $myducks instanceof \think\Collection || $myducks instanceof \think\Paginator): $i = 0; $__LIST__ = $myducks;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$md): $mod = ($i % 2 );++$i;?>
						 <option value='<?php echo $md['id']; ?>'><?php echo $md['name']; ?></option>
					<?php endforeach; endif; else: echo "" ;endif; ?>
				   
				</select>
			</div>
			<div class="modal-footer">
				<a href="javascript:startMatch();" class="btn btn-success">开始比赛</a>
				<a href="#" class="btn" data-dismiss="modal">关闭</a>
			</div>
		</div><!-- /.modal-content -->
	</div><!-- /.modal -->
</div>


	
<script>

function post(URL, PARAMS) {
  console.log(URL);
  var temp = document.createElement("form");
  temp.action = URL;
  temp.method = "post";
  temp.style.display = "none";
  for (var x in PARAMS) {
    var opt = document.createElement("textarea");
    opt.name = x;
    opt.value = PARAMS[x];
    // alert(opt.name)
    temp.appendChild(opt);
  }
  document.body.appendChild(temp);
  temp.submit();
  return temp;
}

var targetid;
function startMatch(){
	myid=$("select#myduck").val();console.log(myid);
	post('<?php echo url("/index/pond/pondmatch"); ?>',{ id1:myid,id2:window.targetid });
	return false;
}

function chooseSelfDuck(id){
	if($("select#myduck").val()==null){
	
		// dont have any duck
		alert("你还没有任何小鸭子AI，所以无法进行比赛。去“训练塘”创建你的小鸭子AI吧！");
		return false;
	}
	window.targetid=id;
	$("#chooseDuck").modal('show');  
	return false;
}

function editSelfDuck(id){
	post('<?php echo url("/index/pond/pondtest"); ?>',{ sid:id });
	return false;
}

</script>

</body>
</html>
