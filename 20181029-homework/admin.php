<head>
  <meta charset="UTF-8">
  <title>系統維護後台</title>
	<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css'>
	<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css'>
	<link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css'>
	<link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container">
	<a href="index.php"><button class="btn btn-danger">前台登入</button></a>
</div>


<?php
	include_once("adminlinkdb.php");
	$sql="SELECT * from w05_webstop_2;";	//load last_set datetime
	//echo $sql;
	$ro=mysqli_query($link,$sql);
	$row=mysqli_fetch_assoc($ro);

	if(!empty($_POST["sleep_start"])||!empty($_POST["sleep_end"])) {		//for mdy_set datetime
		$sql="
			UPDATE w05_webstop_2
			SET datetime_s='".$_POST['sleep_start']."',datetime_e='".$_POST['sleep_end']."'
			WHERE ws2_id=1";
			echo $sql;
		mysqli_query($link,$sql) or die("修改失敗");
		header("location:?page=");
	}
	

 
 
 ?>
<div class="container">
<form method="POST">
  <div class="row vertical-align">
	<h1>系統維護參數設定</h1>
    <div class="col-md-6">
      <div class="content">
        <h2>開始：系統維護時間</h2>
        <label>Date & Time</label>
        <div class="input-group date-time" id="datetimestart">
          <input name="sleep_start" value="<?=$row['datetime_s']?>" class="form-control"/>
		  <span class="input-group-addon"><span class="fa fa-calendar"></span></span>
        </div>
      </div>
    </div>
    <div class="col-md-6">
      <div class="content">
        <h2>結束：系統維護時間</h2>
        <label>Date & Time</label>
        <div class="input-group date-time" id="datetimeending">
          <input name="sleep_end" value="<?=$row['datetime_e']?>" class="form-control"/>
		  <span class="input-group-addon"><span class="fa fa-calendar"></span></span>
        </div>
      </div>
    </div>
	<div class="col-md-12" style="padding-top:20px">
		<button type="submit" class="btn btn-primary btn-lg btn-block">提交</button>
	</div>
  </div>
</form>
</div>





<script src='https://code.jquery.com/jquery-2.2.4.min.js'></script>
<script src='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.14.1/moment.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.37/js/bootstrap-datetimepicker.min.js'></script>

<script  src="js/index.js"></script>




</body>
