<?php 
/* 
Core Template Compile 
Created on: 2016-01-23 14:34:20 
*/ 
$this->checkCompile('index.html','df8525b3daae7b1514e65ec2b9ba51f3','1453530860');
?>
<?php echo $var;?>
<?php echo 123; ?>
this is index html.

<?php 
core::instance('header_widget')->display(array(
	'var' => $var,
));
 ?>