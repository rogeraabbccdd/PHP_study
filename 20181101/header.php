<head><style>
table,tbody,tr,th,td{
	border: 1px solid black;
}
table{
	min-width:200px;
	border-collapse: collapse;
}
</style></head>

<form method="GET">
	<button type="submit" name="page" value="main">回首頁</button>
	<button type="submit" name="page" value="print_sql">查詢Create Table SQL語法</button>
	<button type="submit" name="page" value="add_animal">新增</button>
	<button type="submit" name="page" value="show_all">顯示所有</button>
	<button type="submit" name="page" value="show_all_2">顯示所有_2</button>
	<button type="submit" name="page" value="del_animal">刪除</button>
	<button type="submit" name="page" value="modify_animal">修改</button>
</form>
<hr/>
<?php include_once("linkdb.php");?>