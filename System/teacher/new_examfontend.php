<?php
include 'check_login.php';
include 'count_records.php';
include '../db_config/connection.php';
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>OES | New Examination</title>
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <link rel="stylesheet" href="../dist/css/AdminLTE.min.css">
  <link rel="stylesheet" href="../dist/css/skins/_all-skins.min.css">
  <link rel="stylesheet" href="../plugins/iCheck/flat/blue.css">
  <link rel="stylesheet" href="../plugins/morris/morris.css">
  <link rel="stylesheet" href="../plugins/jvectormap/jquery-jvectormap-1.2.2.css">
  <link rel="stylesheet" href="../plugins/datepicker/datepicker3.css">
  <link rel="stylesheet" href="../plugins/daterangepicker/daterangepicker.css">
  <link rel="stylesheet" href="../plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
    <link rel="icon" href="../dist/img/icon.png">
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <header class="main-header">
    <a href="#" class="logo">
      <span class="logo-mini"><b>O</b>ES</span>
      <span class="logo-lg"><b>Examination</b> System</span>
    </a>
    <nav class="navbar navbar-static-top">
      <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
								  <?php
			  $sql = "SELECT * FROM user_info where user_id='$myusername' or email='$myusername'";
               $result = $conn->query($sql);

                  if ($result->num_rows > 0) {
        
                while($row = $result->fetch_assoc()) {
                 $avatar = $row['avatar'];
				 $gender = $row['gender'];
				 $regid = $row['user_id'];
				 if ($avatar == null) {
					 if ($gender == "Male") {
						 print '<img src="../dist/img/avatar.png" class="user-image" alt="'.$current_user.'" title="'.$current_user.'">';
					 }else {
						 print '<img src="../dist/img/avatar3.png" class="user-image" alt="'.$current_user.'" title="'.$current_user.'">';
					 }
					 
				 }else{
					   echo '<img src="data:image/jpeg;base64,'.base64_encode($row['avatar'] ).'" class="user-image" alt="'.$current_user.'" title="'.$current_user.'"/>';
				 }
                     }
                   } else {
                
                  }
			  ?>
          
              <span class="hidden-xs"><?php echo"$current_user"; ?></span>
            </a>
            <ul class="dropdown-menu">
              <li class="user-header">
			  <?php
			  $sql = "SELECT * FROM user_info where user_id='$myusername' or email='$myusername'";
               $result = $conn->query($sql);

                  if ($result->num_rows > 0) {
        
                while($row = $result->fetch_assoc()) {
                 $avatar = $row['avatar'];
				 $gender = $row['gender'];
				 $regid = $row['user_id'];
				 if ($avatar == null) {
					 if ($gender == "Male") {
						 print '<img src="../dist/img/avatar.png" class="img-circle" alt="'.$current_user.'" title="'.$current_user.'">';
					 }else {
						 print '<img src="../dist/img/avatar3.png" class="img-circle" alt="'.$current_user.'" title="'.$current_user.'">';
					 }
					 
				 }else{
					  echo '<img src="data:image/jpeg;base64,'.base64_encode($row['avatar'] ).'" class="img-circle" alt="'.$current_user.'" title="'.$current_user.'"/>';
				 }
                     }
                   } else {
                 
                  }
			  ?>
                <p>
                  <?php echo"$current_user"; ?>
<<<<<<< HEAD
                  <small><?php echo"$regid"; ?> , Admin</small>
=======
                  <small><?php echo"$regid"; ?> , Teacher</small>
>>>>>>> 97ba57ce4d0ed582dfbdeae4ab998a41758539d4
                </p>
              </li>
          
              <li class="user-footer">
                <div class="pull-left">
                  <a href="profile.php" class="btn btn-default btn-flat">Profile</a>
                </div>
                <div class="pull-right">
                  <a href="logout.php" class="btn btn-default btn-flat">Sign out</a>
                </div>
              </li>
            </ul>
          </li>
   
        </ul>
      </div>
    </nav>
  </header>
  <aside class="main-sidebar">
    <section class="sidebar">
      <div class="user-panel">
        <div class="pull-left image">
					  <?php
			  $sql = "SELECT * FROM user_info where user_id='$myusername' or email='$myusername'";
               $result = $conn->query($sql);

                  if ($result->num_rows > 0) {
        
                while($row = $result->fetch_assoc()) {
                 $avatar = $row['avatar'];
				 $gender = $row['gender'];
				 $regid = $row['user_id'];
				 if ($avatar == null) {
					 if ($gender == "Male") {
						 print '<img src="../dist/img/avatar.png" class="img-circle" alt="'.$current_user.'" title="'.$current_user.'">';
					 }else {
						 print '<img src="../dist/img/avatar3.png" class="img-circle" alt="'.$current_user.'" title="'.$current_user.'">';
					 }
					 
				 }else {
					  echo '<img src="data:image/jpeg;base64,'.base64_encode($row['avatar'] ).'" class="img-circle" alt="'.$current_user.'" title="'.$current_user.'"/>';
				 }
                     }
                   } else {
                 
                  }
				$conn->close();
			  ?>
      
        </div>
        <div class="pull-left info">
          <p><?php echo"$current_user"; ?></p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>

      <ul class="sidebar-menu">
      <li class="header">MAIN NAVIGATION</li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-user"></i>
            <span>Students&Teachers</span>
   
          </a>
          <ul class="treeview-menu">
          <li ><a href="new_student.php"><i class="fa fa-circle-o"></i> Đăng kí học sinh  mới</a></li>
            <li><a href="students.php"><i class="fa fa-circle-o"></i> Chỉnh sửa học sinh</a></li>
            <li ><a href="new_teacher.php"><i class="fa fa-circle-o"></i> Đăng kí giáo viên mới</a></li>
            <li><a href="teacher.php"><i class="fa fa-circle-o"></i> Chỉnh sửa giáo viên</a></li>
          </ul>
        </li>
        <li>
     	  <li class="treeview">
          <a href="#">
            <i class="fa fa-file-text"></i>
            <span>Examination</span>
   
          </a>
          <ul class="treeview-menu">
            <li><a href="results.php"><i class="fa fa-circle-o"></i> Kết Quả</a></li>
            <li><a href="new_examfontend.php"><i class="fa fa-circle-o"></i> Thêm câu hỏi</a></li>
           <li><a href="examination.php"><i class="fa fa-circle-o"></i> Sửa câu hỏi</a></li>
		       <li><a href="lock_exam.php"><i class="fa fa-circle-o"></i> Khóa bài thi</a></li>
		        <li><a href="unlock_exam.php"><i class="fa fa-circle-o"></i> Mở khóa bài thi</a></li>
          </ul>
        </li>
		
		  <li class="treeview">
          <a href="#">
            <i class="fa fa-envelope"></i>
            <span>Email</span>
   
          </a>
          <ul class="treeview-menu">
            <li><a href="email_config.php"><i class="fa fa-circle-o"></i> Configuration</a></li>
           
          </ul>
        </li>

        <li class="header">SYSTEM</li>
     	  <li class="treeview">
          <a href="#">
            <i class="fa fa-database"></i>
            <span>Database</span>
   
          </a>
          <ul class="treeview-menu">
            <li><a <a onclick="return confirm('Are you sure you want to delete all students ?');" href="delete_students.php"><i class="fa fa-circle-o"></i> Delete all students</a></li>
           <li><a <a onclick="return confirm('Are you sure you want to delete all results ?');" href="delete_results.php"><i class="fa fa-circle-o"></i> Delete all results</a></li>
          </ul>
        </li>
      </ul>
    </section> 
  </aside>
  <div class="content-wrapper">
    <section class="content-header">
      <h1>
        New Examination    
      </h1>
      <ol class="breadcrumb">
        <li><a href="./"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">New Examination</li>
      </ol>
    </section>
    <section class="content"> 
      <div class="row">
        <section class="col-lg-12">
          <div class="box box-info">
            <div class="box-header">
              <i class="fa fa-user"></i>
              <h3 class="box-title">Exam Information</h3>
            </div>
            <div class="box-body">
              <form action="new_exam.php" method='POST'>
                <div class="form-group">
                <div class="form-group">
                  
				  <select class="form-control" name="sub" required>
                    <option value="" disabled selected>Chọn Môn</option>
                    <option value="Toán">Toán</option>
                    <option value="Lý">Lý</option>
                  </select>
                </div>
				<div class="form-group">
                  <input type="text" class="form-control" name="ques"  placeholder="Nhập câu hỏi" required>
                </div>
                <div class="form-group">
                  <input type="text" class="form-control" name="op1"  placeholder="câu trả lời 1" required>
                </div>
				 <div class="form-group">
                  <input type="text" class="form-control" name="op2"  placeholder="câu trả lời 2" required>
                </div>
                <div class="form-group">
                  <input type="text" class="form-control" name="op3"  placeholder="câu trả lời 3" required>
                </div>
                <div class="form-group">
                  <input type="text" class="form-control" name="op4"  placeholder="câu trả lời 4" required>
                </div>
                <div class="form-group">
                  <input type="text" class="form-control" name="ans"  placeholder="đáp án" required>
                </div>
            </div>
            <div class="box-footer clearfix">
              <button type="submit" class="pull-right btn btn-default" name="new_exam" id="sendEmail">Add question</button>
                <i class="fa fa-arrow-circle-up"></i></button>
            </div>
			</form>
          </div>
        </section>
      </div>

    </section>
  </div>
  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> 3.0
    </div>
    <strong>Copyright &copy; <?php echo date('Y'); ?> Developed By <a target="_blank" href="http://facebook.com/huy.huynhnguyenquang">BHPH</a>.</strong> All rights
    reserved.
  </footer>


  <div class="control-sidebar-bg"></div>
</div>

<script src="../plugins/jQuery/jquery-2.2.3.min.js"></script>

<script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>

<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<script src="../bootstrap/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
<script src="../plugins/morris/morris.min.js"></script>
<script src="../plugins/sparkline/jquery.sparkline.min.js"></script>
<script src="../plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="../plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<script src="../plugins/knob/jquery.knob.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.11.2/moment.min.js"></script>
<script src="../plugins/daterangepicker/daterangepicker.js"></script>
<script src="../plugins/datepicker/bootstrap-datepicker.js"></script>
<script src="../plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<script src="../plugins/slimScroll/jquery.slimscroll.min.js"></script>
<script src="../plugins/fastclick/fastclick.js"></script>
<script src="../dist/js/app.min.js"></script>
<script src="../dist/js/pages/dashboard.js"></script>
<script src="../dist/js/demo.js"></script>
</body>
</html>
