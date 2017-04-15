<?php 

include("xiaonei-util.php");
$uid = getCurrentUser(SERVER_NAME);
if($uid==""){
 	echo "<script> window.location='http://www.renren.com';</script>";
	exit;
}
$curBalance = getXiaoneiBalance($uid);
$exchangeCount = $_GET['exchangeCount'];
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7" />

<link href="css/base.css" rel="stylesheet" type="text/css" media="all"/>
<title>热血三国 - 游戏大厅- 校内网</title>
</head>
<body id="rexuePage">
<div id="wrapper">
<div id="container">
		<!-- navigation-wrapper -->
<div class="navigation-wrapper">
		<div class="navigation clearfix">
				<div id="logo">
						 <h1><a title="校内" href="http://www.renren.com/">校内</a></h1>
				</div>
				<div class="nav-body clearfix">
						<div class="nav-main">
							<div class="menu">
									<div class="menu-title"><a href="http://www.renren.com/">首页</a></div>
							</div>
								<div style="margin: 0pt;" class="menu">
										<div class="menu-title"><a href="http://game.renren.com/">游戏</a></div>
								</div>

						</div>

						<div class="nav-other">
								<div class="menu">
										<div class="charge menu-title"><a href="http://pay.renren.com" target="_blank">充值</a></div>
								</div>
								<div class="menu last">
										<div class="menu-title"><a href="http://www.renren.com/Logout.do">退出</a></div>
								</div>

						 </div>
				</div>
		</div>
</div>
<!--  /navigation-wrapper -->
<div class="main-content">
	<div class="main-inner">
		  <div class="arrow"></div>
				<div class="pay-detail-wrapper">
				<div class="pay-detail success">
					<h3 >恭喜您！您已经成功用 <em><?php echo $exchangeCount; ?></em> 校内豆兑换了 <em><?php echo $exchangeCount*10; ?></em> 个元宝</h3>
					<p class="money">您的校内豆余额：<em><?php echo $curBalance; ?></em></p>
				</div>		
				</div>
	</div>
	
</div>
</div>
</div>
		<div id="footer">
			<div class="copyright">
				<span class="float-right">
					<a href="http://renren.com/getsysupdateinfo.do">校内日志</a><span class="pipe">|</span><a href="http://renren.com/info/About.do">关于</a><span class="pipe">|</span><a href="http://app.renren.com/developers/portal.do">开放平台</a><span class="pipe">|</span><a href="http://renren.com/info/jobs.jsp">招聘</a><span class="pipe">|</span><a href="http://supprot.renren.com/GetGuestbookList.do">客服</a><span class="pipe">|</span><a href="http://renren.com/info/Help.do">帮助</a><span class="pipe">|</span><a href="http://renren.com/info/PrivacyClaim.do">隐私声明</a>
				</span>
				<span>千橡公司 <span title="revision$revxxx$; ${applicationScope.hostName}">©</span> 2008</span>
			</div>
		</div>

</body>
</html>
