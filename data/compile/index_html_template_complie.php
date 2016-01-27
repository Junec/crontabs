<?php 
/* 
Core Template Compile 
Created on: 2016-01-27 13:56:50 
*/ 
$this->checkCompile('index.html','d1c750356963cfc3405c170e6d3fb335','1453874210');
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title></title>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="renderer" content="webkit">
<link rel="stylesheet" href="<?=core::getConfig('app_dir');?>/data/static/default/css/style.css">
<script src="<?=core::getConfig('app_dir');?>/data/static/default/js/jquery-1.9.1.js"></script>
</head>

<body>

<table cellpadding="0" cellspacing="0" class="table-list" style='width:100%;'>
<thead>
<tr>
<th>ID</th>
<th>脚本名称</th>
<th>状态</th>
<th>下次运行时间</th>
</tr>
</thead>
<tbody>
<?php if(is_array($data) && count($data)>0){foreach($data as $v){ ?>
<tr>
<td><?php echo $v['id'];?></td>
<td><?php echo $v['title'];?></td>
<td><?php echo $v['status'];?></td>
<td><?php echo $v['time'];?></td>
</tr>
<?php }} ?>
</tbody>
</table>

</body>
</html>
