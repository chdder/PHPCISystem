<!DOCTYPE html>
<html>

	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1.0, user-scalable=0">

		<title>查看个人资料</title>

		<link href="/CodeIgniter-3.1.6/resource/AmazeUI-2.4.2/assets/css/admin.css" rel="stylesheet" type="text/css">
		<link href="/CodeIgniter-3.1.6/resource/AmazeUI-2.4.2/assets/css/amazeui.css" rel="stylesheet" type="text/css">

		<link href="/CodeIgniter-3.1.6/resource/css/personal.css" rel="stylesheet" type="text/css">
		<link href="/CodeIgniter-3.1.6/resource/css/infstyle.css" rel="stylesheet" type="text/css">
	</head>

	<body>
		<!--头 -->
		<header>
			<article>
				<div class="mt-logo">
					<!--顶部导航条 -->
					<div class="am-container header">
						<ul class="message-l">
							<div class="topMessage">
								<div class="menu-hd">
									<?php
                                        //有session值则设置为登陆状态
                                        if(isset($_SESSION['useremail'])){

                                            echo "<a href='' target='_top' class='h'>"."欢迎您，".$_SESSION['useremail']."</a>";
                                            echo "<a href='/CodeIgniter-3.1.6/index.php/login_contrl/logout' target='_top'>"." 退出</a>";
                                        }
                                        //否则设置为未登陆状态
                                        else{

                                            echo "<a href='/CodeIgniter-3.1.6/index.php/login_contrl/show_login' target='_top' class='h'>"."亲，请登录"."  </a>";
                                            echo "<a href='/CodeIgniter-3.1.6/index.php/login_contrl/show_register' target='_top'>"."免费注册</a>";
                                        }
                                    ?>
								</div>
							</div>
						</ul>
						<ul class="message-r">
							<div class="topMessage home">
								<div class="menu-hd"><a href="/CodeIgniter-3.1.6/index.php/login_contrl/show_home" target="_top" class="h">商城首页</a></div>
							</div>
<!--
							<div class="topMessage my-shangcheng">
								<div class="menu-hd MyShangcheng"><a href="show_information" target="_top"><i class="am-icon-user am-icon-fw"></i>个人中心</a></div>
							</div>
-->
							<div class="topMessage mini-cart">
								<div class="menu-hd"><a id="mc-menu-hd" href="/CodeIgniter-3.1.6/index.php/orderForm_controll/show_order_form_view" target="_top"><i class="am-icon-shopping-cart  am-icon-fw"></i><span>我的订单</span><strong id="J_MiniCartNum" class="h">
                                    
                                    <?php
                            
                                        if(isset($_SESSION['useremail'])){

                                            echo $_SESSION['order_num'];
                                        }
                                        else
                                            echo 0;
                                    ?>
                                    </strong></a></div>
							</div>
							<div class="topMessage favorite">
<!--								<div class="menu-hd"><a href="#" target="_top"><i class="am-icon-heart am-icon-fw"></i><span>收藏夹</span></a></div>-->
                            </ul>
                            </div>

						<!--悬浮搜索框-->

<!--
						<div class="nav white">
							<div class="logoBig">
								<li><img src="/CodeIgniter-3.1.6/resource/images/logobig.png" /></li>
							</div>

							<div class="search-bar pr">
								<a name="index_none_header_sysc" href="#"></a>
								<form>
									<input id="searchInput" name="index_none_header_sysc" type="text" placeholder="搜索" autocomplete="off">
									<input id="ai-topsearch" class="submit am-btn" value="搜索" index="1" type="submit">
								</form>
							</div>
						</div>
-->

						<div class="clear"></div>
					</div>
				</div>
			</article>
		</header>
            <div class="nav-table">
					   <div class="long-title"><span class="all-goods">个人中心</span></div>
					   <div class="nav-cont">
<!--
							<ul>
								<li class="index"><a href="#">首页</a></li>
                                <li class="qc"><a href="#">闪购</a></li>
                                <li class="qc"><a href="#">限时抢</a></li>
                                <li class="qc"><a href="#">团购</a></li>
                                <li class="qc last"><a href="#">大包装</a></li>
							</ul>
-->
<!--
						    <div class="nav-extra">
						    	<i class="am-icon-user-secret am-icon-md nav-user"></i><b></b>我的福利
						    	<i class="am-icon-angle-right" style="padding-left: 10px;"></i>
						    </div>
-->
						</div>
			</div>
			<b class="line"></b>
		<div class="center">
			<div class="col-main">
				<div class="main-wrap">
                    <?php
                        
                        if(isset($material))
                        $row=$material;
                    ?>

					<!--标题 -->
					<div class="user-safety">
						<div class="am-cf am-padding">
							<div class="am-fl am-cf"><strong class="am-text-danger am-text-lg">查看个人资料</strong> / <small>&nbsp;Check&nbsp;Personal&nbsp;Information</small></div>
						</div>
						<hr/>

						<!--头像 -->
<!--
						<div class="user-infoPic">

							<div class="filePic">
								<img class="am-circle am-img-thumbnail" src="/CodeIgniter-3.1.6/resource/images/getAvatar.do.jpg" alt="" />
							</div>

							<p class="am-form-help">头像</p>

							<div class="info-m">
								<div><b>用户名：<i>小叮当</i></b></div>
                                <div class="safeText">
                                  	<a href="safety.html">账户安全:<em style="margin-left:20px ;">60</em>分</a>
									<div class="progressBar"><span style="left: -95px;" class="progress"></span></div>
								</div>
							</div>
						</div>
-->

						<div class="check">
							<ul>
<!--
								<li>
									<i class="i-safety-lock"></i>
									<div class="m-left">
										<div class="fore1">登录密码</div>
										<div class="fore2"><small>为保证您购物安全，建议您定期更改密码以保护账户安全。</small></div>
									</div>
									<div class="fore3">
										<a href="password.html">
											<div class="am-btn am-btn-secondary">修改</div>
										</a>
									</div>
								</li>
								<li>
									<i class="i-safety-wallet"></i>
									<div class="m-left">
										<div class="fore1">支付密码</div>
										<div class="fore2"><small>启用支付密码功能，为您资产账户安全加把锁。</small></div>
									</div>
									<div class="fore3">
										<a href="setpay.html">
											<div class="am-btn am-btn-secondary">立即启用</div>
										</a>
									</div>
								</li>
-->
								<li>
									<i class="i-safety-idcard"></i>
									<div class="m-left">
										<div class="fore1">性别</div>
										<div class="fore2"><small>Gender</small></div>
									</div>
                                    <div class="m-left">
								        <div class="fore1"><?php if($row->gender!="") echo $row->gender; else echo "未设置"; ?></div>
									</div>
<!--
									<div class="fore3">
										<a href="idcard.html">
											<div class="am-btn am-btn-secondary"><?php if(isset($material)) echo $row->gender; ?></div>
										</a>
									</div>
-->
								</li>
								<li>
									<i class="i-safety-iphone"></i>
									<div class="m-left">
										<div class="fore1">手机号码</div>
										<div class="fore2"><small>Phone Number</small></div>
									</div>
									<div class="m-left">
								        <div class="fore1"><?php if($row->phone_number!="") echo $row->phone_number; else echo "未设置"; ?></div>
									</div>
								</li>
								<li>
									<i class="i-safety-mail"></i>
									<div class="m-left">
										<div class="fore1">邮箱</div>
										<div class="fore2"><small>Email</small></div>
									</div>
                                    <div class="m-left">
								        <div class="fore1"><?php if($row->uemail!="") echo $row->uemail; else echo "未设置"; ?></div>
									</div>
<!--
									<div class="fore3">
										<a href="email.html">
											<div class="am-btn am-btn-secondary"><?php if(isset($material)) echo $row->uemail; ?></div>
										</a>
									</div>
-->
								</li>
                                
                                <li>
									<i class="i-safety-idcard"></i>
									<div class="m-left">
										<div class="fore1">生日</div>
										<div class="fore2"><small>Birthday</small></div>
									</div>
                                    <div class="m-left">
								        <div class="fore1"><?php if($row->birthday!="") echo $row->birthday; else echo "未设置"; ?></div>
									</div>
<!--
									<div class="fore3">
										<a href="email.html">
											<div class="am-btn am-btn-secondary"><?php if(isset($material)) echo $row->uemail;?></div>
										</a>
									</div>
-->
								</li>
                                <li>
									<i class="i-safety-iphone"></i>
									<div class="m-left">
										<div class="fore1">收货地址</div>
										<div class="fore2"><small>Address</small></div>
									</div>
									<div class="m-left">
								        <div class=""><?php if($row->address!="") echo $row->address; else echo "未设置"; ?></div>
									</div>
								</li>
<!--
								<li>
									<i class="i-safety-security"></i>
									<div class="m-left">
										<div class="fore1">安全问题</div>
										<div class="fore2"><small>保护账户安全，验证您身份的工具之一。</small></div>
									</div>
									<div class="fore3">
										<a href="question.html">
											<div class="am-btn am-btn-secondary">认证</div>
										</a>
									</div>
								</li>
-->
							</ul>
						</div>

					</div>
				</div>
				<!--底部-->
				<div class="footer ">
        <div class="footer-hd ">
            <p>
                <a href="">数据库期末大作业</a>
<!--
                <b>|</b>
                <a href=" ">商城首页</a>
                <b>|</b>
                <a href="# ">支付宝</a>
                <b>|</b>
                <a href="# ">物流</a>
-->
            </p>
        </div>
        <div class="footer-bd ">
            <p>
                <a href="">深圳大学</a>
                <a href="">计算机与软件学院</a>
                <a href="">软件工程</a>
                <a href="">2015150228</a>
                <em>版权所有</em>
            </p>
        </div>
    </div>
			</div>

			<aside class="menu">
				<ul>
					<li class="person active">
						<a href="index.html"><i class="am-icon-user"></i>个人中心</a>
					</li>
					<li class="person">
						<p><i class="am-icon-newspaper-o"></i>个人资料</p>
						<ul>
							<li> <a href="show_information">修改个人资料</a></li>
							<li> <a href="">查看个人资料</a></li>
<!--
							<li> <a href="address.html">地址管理</a></li>
							<li> <a href="cardlist.html">快捷支付</a></li>
-->
						</ul>
					</li>
<!--
					<li class="person">
						<p><i class="am-icon-balance-scale"></i>我的交易</p>
						<ul>
							<li><a href="order.html">订单管理</a></li>
							<li> <a href="change.html">退款售后</a></li>
							<li> <a href="comment.html">评价商品</a></li>
						</ul>
					</li>
					<li class="person">
						<p><i class="am-icon-dollar"></i>我的资产</p>
						<ul>
							<li> <a href="points.html">我的积分</a></li>
							<li> <a href="coupon.html">优惠券 </a></li>
							<li> <a href="bonus.html">红包</a></li>
							<li> <a href="walletlist.html">账户余额</a></li>
							<li> <a href="bill.html">账单明细</a></li>
						</ul>
					</li>

					<li class="person">
						<p><i class="am-icon-tags"></i>我的收藏</p>
						<ul>
							<li> <a href="collection.html">收藏</a></li>
							<li> <a href="foot.html">足迹</a></li>
						</ul>
					</li>

					<li class="person">
						<p><i class="am-icon-qq"></i>在线客服</p>
						<ul>
							<li> <a href="consultation.html">商品咨询</a></li>
							<li> <a href="suggest.html">意见反馈</a></li>							
							
							<li> <a href="news.html">我的消息</a></li>
						</ul>
					</li>
-->
				</ul>

			</aside>
		</div>

	</body>

</html>