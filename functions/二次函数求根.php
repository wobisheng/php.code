<html>
<head>
<meta charset="utf-8">
<title>你好，这里可以开挂</title>
<body background="http://wobisheng.top/images/pic09.jpg">
</head>
<body>
<form method="get">
<center><h1>这里输系数a</h1><input type="text" name="a"></center>
<center><h1>这里输系数b</h1><input type="text" name="b"></center>
<center><h1>这里输系数c</h1><input type="text" name="c"></center>
<center><input type="submit" value="开挂!">
<input type="reset" url="https://tool.elstec.cn/1.php" value="重输" /></center>
</form></body></html>
<?php
$a=$_GET['a'];
$b=$_GET['b'];
$c=$_GET['c'];
$d=($b*$b)-(4*$a*$c);
if ($c==0)
{
echo "<script>alert('请输入二次函数的系数，如无c (#那tm那么简单你还来用这个#) 请输入0')</script>";
echo "<script>alert('本网页的计算采用二次函数求和公式。一式在手，天下我有! 本网页代码版权归发明家和节操所有!请勿侵权!')</script>";
}
else
{
if ($a==0)
{
echo "<script>alert('你这是二次函数？!(((￣へ￣井)')</script>";
}
else
{
if ($d>0)
{
$x1=(-$b+sqrt($d))/(2*$a);
$x2=(-$b-sqrt($d))/(2*$a);
echo "<script>alert('方程有两解，点确定查看答案。')</script>";
echo "<script>alert('X1为 {$x1} ， X2为 {$x2} ')</script>";
}
else if ($d==0)
{
$x1=(-$b+sqrt($d))/(2*$a);
echo "<script>alert('方程有一解，点确定查看答案。')</script>";
echo "<script>alert('X1=X2为 {$x1} ')</script>";
}
else
{
echo "<script>alert('方程无解!请重输(｡•ˇ‸ˇ•｡)')</script>";
}
}
}
