﻿<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
<title>显示查询自己的IP地址</title>
<meta name="keywords" content="IP地址" />
<meta name="description" content="从中国和美国显示查询自己的IP地址" />

	<link rel="icon"			href="style/css/favicon.ico"	type="image/x-icon" />
	<link rel="shortcut icon"	href="style/css/favicon.ico"	type="image/x-icon" />
    <!-- Bootstrap core CSS -->
    <link href="style/css/bootstrap.min.css" rel="stylesheet">
	<link href="style/css/jumbotron-narrow.css" rel="stylesheet">
<script>
var _hmt = _hmt || [];
(function() {
  var hm = document.createElement("script");
  hm.src = "//hm.baidu.com/hm.js?f8c1e4d81c965d1da79624c14b47f440";
  var s = document.getElementsByTagName("script")[0]; 
  s.parentNode.insertBefore(hm, s);
})();
</script>

  </head>

  <body>

    <div class="container">
      <div class="header clearfix">
            <h3 class="text-muted">ip.rregg.com 全方位查询您的IP地址</h3>
      </div>

	<div class="jumbotron">
		<table class="table table-bordered">
			<tr>
				<td width="20%">检测点</td>
				<td>检测结果</td>
				<td>解释</td>
			</tr>

			<tr>
				<td>国内网站</td>
				<td>
<?php
function GetIP(){
if(!empty($_SERVER["HTTP_CLIENT_IP"])){
  $cip = $_SERVER["HTTP_CLIENT_IP"];
}
elseif(!empty($_SERVER["HTTP_X_FORWARDED_FOR"])){
  $cip = $_SERVER["HTTP_X_FORWARDED_FOR"];
}
elseif(!empty($_SERVER["REMOTE_ADDR"])){
  $cip = $_SERVER["REMOTE_ADDR"];
}
else{
  $cip = "无法获取！";
}
return $cip;
}
echo GetIP();
?>
				</td>
				<td>如果没有全局代理或者VPN，左侧显示的IP就是您本机的IP。如果有，则显示的就是全局代理或者VPN的IP地址。</td>
			</tr>
			<tr>
				<td>国外网站 </td>
				<td>
<iframe src="http://x302.rashost.com/ip.php" width="100%" height="30" scrolling="no" frameborder="0" marginheight="0" marginwidth="0"> </iframe> 
				</td>
				<td>左侧IP就是您用来访问国外普通网站（没有被封的网站）的IP地址。</td>
			</tr>

			<tr>
				<td>谷歌网站</td>
				<td>
<iframe src="http://ip.appspot.com/" width="100%" height="30" scrolling="no" frameborder="0" marginheight="0" marginwidth="0"> 
您无法访问谷歌网站
</iframe> 
</td>
				<td>左侧如果没有显示一个IP地址，则说明您现在还不能科学上网，不能访问谷歌，Facebook，Twitter等国外网站。显示IP则表示可以科学上网，这个IP地址就是您用来科学上网的IP地址，通常是您的SS服务器的IP地址，或者VPN服务器，代理服务器的IP地址。</td>
			</tr>

		</table>

      </div>



      <footer class="footer">
        <p>Powered By <a href="http://www.rregg.com">www.rregg.com</a> 联系我们请发Email到 info@rregg.com </p>
      </footer>

    </div> <!-- /container -->


  </body>
</html>

