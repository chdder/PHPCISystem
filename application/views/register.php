<!DOCTYPE html>
<html>

<head lang="en">
    <meta charset="UTF-8">
    <title>注册</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="format-detection" content="telephone=no">
    <meta name="renderer" content="webkit">
    <meta http-equiv="Cache-Control" content="no-siteapp" />

    <link rel="stylesheet" href="/CodeIgniter-3.1.6/resource/AmazeUI-2.4.2/assets/css/amazeui.min.css" />
    <link href="/CodeIgniter-3.1.6/resource/css/dlstyle.css" rel="stylesheet" type="text/css">
    <script src="/CodeIgniter-3.1.6/resource/AmazeUI-2.4.2/assets/js/jquery.min.js"></script>
    <script src="/CodeIgniter-3.1.6/resource/AmazeUI-2.4.2/assets/js/amazeui.min.js"></script>

</head>

<body>

    <div class="login-boxtitle">
        <a href="home/demo.html"><img alt="" src="/CodeIgniter-3.1.6/resource/images/logobig.png" /></a>
    </div>

    <div class="res-banner">
<!--        <div class="res-main">-->
            <div class="login-banner-bg"><span></span><img src="/CodeIgniter-3.1.6/resource/images/login_background.jpg" /></div>
            <div class="login-box">

                <div class="am-tabs" id="doc-my-tabs">
                    <ul class="am-tabs-nav am-nav am-nav-tabs am-nav-justify">
                        <li class="am-active"><a href="">邮箱注册</a></li>
<!--                       <a href="localhost/CodeIgniter-3.1.6/index.php/login_contrl/show_login" class="zcnext am-fr am-btn-default">登陆</a>-->
<!--                        <li><a href="">手机号注册</a></li>-->
                    </ul>
                    <a href="/CodeIgniter-3.1.6/index.php/login_contrl/show_login" class="zcnext am-fr am-btn-default">登录</a>

                    <div class="am-tabs-bd">
                        <div class="am-tab-panel am-active">
                            <?php
                            
                                $this->load->helper('form');
                                echo validation_errors();
                            ?>
                                <form action="/CodeIgniter-3.1.6/index.php/login_contrl/index" method="post">

                                    <div class="user-email">
                                        <label for="email"><i class="am-icon-envelope-o"></i></label>
                                        <input type="email" name="uemail" id="email" placeholder="请输入邮箱账号" value="<?php $this->load->helper('form'); echo set_value('uemail'); ?>">
                                    </div>
                                    
                                    <div class="user-pass">
                                        <label for="password"><i class="am-icon-lock"></i></label>
                                        <input type="password" name="set_pwd" id="password" placeholder="设置密码" value="<?php $this->load->helper('form'); echo set_value('set_pwd'); ?>">
                                    </div>
                                    
                                    <div class="user-pass">
                                        <label for="passwordRepeat"><i class="am-icon-lock"></i></label>
                                        <input type="password" name="check_pwd" id="passwordRepeat" placeholder="确认密码" value="<?php $this->load->helper('form'); echo set_value('check_pwd'); ?>">
                                    </div>
                                
                                    <div class="am-cf">
                                        <input type="submit" name="" value="注册" class="am-btn am-btn-primary am-btn-sm am-fl">
                                    </div>

                                </form>

                                
                            <div class="login-links">
                                <label for="reader-me">
								    <input id="reader-me" type="checkbox" name="agree_email" value="1" checked="checked" <?php echo set_checkbox('agree_email','1',TRUE); ?> > 点击表示您同意商城《服务协议》    
								</label>
                            </div>

                                <!--
                            <div class="am-cf">
                                <input type="submit" name="" value="注册" class="am-btn am-btn-primary am-btn-sm am-fl">
                            </div>
-->

                        </div>

<!--
                        <div class="am-tab-panel">
                            <form method="post">
                                <div class="user-phone">
                                    <label for="phone"><i class="am-icon-mobile-phone am-icon-md"></i></label>
                                    <input type="tel" name="" id="phone" placeholder="请输入手机号">
                                </div>
                                <div class="verification">
                                    <label for="code"><i class="am-icon-code-fork"></i></label>
                                    <input type="tel" name="" id="code" placeholder="请输入验证码">
                                    <a class="btn" href="javascript:void(0);" onclick="sendMobileCode();" id="sendMobileCode">
												<span id="dyMobileButton">获取</span></a>
                                </div>
                                <div class="user-pass">
                                    <label for="password"><i class="am-icon-lock"></i></label>
                                    <input type="password" name="" id="password" placeholder="设置密码">
                                </div>
                                <div class="user-pass">
                                    <label for="passwordRepeat"><i class="am-icon-lock"></i></label>
                                    <input type="password" name="" id="passwordRepeat" placeholder="确认密码">
                                </div>
                            </form>
                            <div class="login-links">
                                <label for="reader-me">
											<input id="reader-me" name="agree_phone" type="checkbox"> 点击表示您同意商城《服务协议》
										</label>
                            </div>
                            <div class="am-cf">
                                <input type="submit" name="" value="注册" class="am-btn am-btn-primary am-btn-sm am-fl">
                            </div>

                            <hr>
                        </div>
-->

                        <script>
                            $(function() {
                                $('#doc-my-tabs').tabs();
                            })
                        </script>

                    </div>
                </div>

            </div>
<!--        </div>-->

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
</body>

</html>