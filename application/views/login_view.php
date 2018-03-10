<!DOCTYPE html>
<html>

<head lang="en">
    <meta charset="UTF-8">
    <title>登录</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="format-detection" content="telephone=no">
    <meta name="renderer" content="webkit">
    <meta http-equiv="Cache-Control" content="no-siteapp" />

    <link rel="stylesheet" href="/CodeIgniter-3.1.6/resource/AmazeUI-2.4.2/assets/css/amazeui.css" />
    <link href="/CodeIgniter-3.1.6/resource/css/dlstyle.css" rel="stylesheet" type="text/css">
</head>

<body>

    <div class="login-boxtitle">
        <a href="home.html"><img alt="logo" src="/CodeIgniter-3.1.6/resource/images/logobig.png" /></a>
    </div>

    <div class="login-banner">
<!--        <div class="login-main">-->
            <div class="login-banner-bg"><span></span><img src="/CodeIgniter-3.1.6/resource/images/login_background.jpg" /></div>
            <div class="login-box">

                <h3 class="title">登录蛋糕店</h3>

                <div class="clear"></div>

                <div class="login-form">
                        <?php
                            
                            $this->load->helper('form');
                            echo validation_errors()."";
                        ?>
                        <form action="/CodeIgniter-3.1.6/index.php/login_contrl/check_login" method="post">
                            <div class="user-name">
                                <label for="user"><i class="am-icon-user"></i></label>
                                <input type="text" name="uname" id="user" placeholder="邮箱" value="<?php $this->load->helper('form'); echo set_value('uname'); ?>">
                            </div>
                            <div class="user-pass">
                                <label for="password"><i class="am-icon-lock"></i></label>
                                <input type="password" name="upass" id="password" placeholder="请输入密码" value="<?php $this->load->helper('form'); echo set_value('upass'); ?>">
                            </div>
                            <div class="am-cf">
                                <input type="submit" name="" value="登 录" class="am-btn am-btn-primary am-btn-sm">
                            </div>
                        </form>
                </div>

                <div class="login-links">
<!--                    <label for="remember-me"><input id="remember-me" type="checkbox">记住密码</label>-->
                    <a href="#" class="am-fr">忘记密码</a>
                    <a href="/CodeIgniter-3.1.6/index.php/login_contrl/show_register" class="zcnext am-fr am-btn-default">注册</a>
                    <br/>
                </div>
                <!--
                <div class="am-cf">
                    <input type="submit" name="" value="登 录" class="am-btn am-btn-primary am-btn-sm">
                </div>
-->
                <div class="partner">
                    <h3>合作账号</h3>
                    <div class="am-btn-group">
                        <li><a href="#"><i class="am-icon-qq am-icon-sm"></i><span>QQ登录</span></a></li>
                        <li><a href="#"><i class="am-icon-weibo am-icon-sm"></i><span>微博登录</span> </a></li>
                        <li><a href="#"><i class="am-icon-weixin am-icon-sm"></i><span>微信登录</span> </a></li>
                    </div>
                </div>

            </div>
<!--        </div>-->
    </div>


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
