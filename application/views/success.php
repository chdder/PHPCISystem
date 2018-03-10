<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <title>付款成功页面</title>
    <link rel="stylesheet" type="text/css" href="/CodeIgniter-3.1.6/resource/AmazeUI-2.4.2/assets/css/amazeui.css" />
    <link href="/CodeIgniter-3.1.6/resource/AmazeUI-2.4.2/assets/css/admin.css" rel="stylesheet" type="text/css">
    <link href="/CodeIgniter-3.1.6/resource/basic/css/demo.css" rel="stylesheet" type="text/css" />

    <link href="/CodeIgniter-3.1.6/resource/css/sustyle.css" rel="stylesheet" type="text/css" />
    <script type="text/javascript" src="/CodeIgniter-3.1.6/resource/basic/js/jquery-1.7.min.js"></script>

</head>

<body>


    <!--顶部导航条 -->
    <div class="am-container header">
        <ul class="message-l">
            <div class="topMessage">
                <div class="menu-hd">
                    <?php
                                //有session值则设置为登陆状态
                                if(isset($_SESSION['useremail'])) {
                                    
                                    echo "<a href='' target='_top' class='h'>"."欢迎您，".$_SESSION['useremail']."</a>";
                                    echo "<a href='/CodeIgniter-3.1.6/index.php/login_contrl/logout' target='_top'>"." 退出</a>";
                                }
                                //否则设置为未登陆状态
                                else {
                                    
                                    echo "<a href='show_login' target='_top' class='h'>"."亲，请登录"."  </a>";
                                    echo "<a href='show_register' target='_top'>"."免费注册</a>";
                                }
                            ?>
                </div>
            </div>
        </ul>
        <ul class="message-r">
            <div class="topMessage home">
                <div class="menu-hd"><a href="/CodeIgniter-3.1.6/index.php/login_contrl/show_home" target="_top" class="h">商城首页</a></div>
            </div>
            <div class="topMessage my-shangcheng">
                <div class="menu-hd MyShangcheng"><a href="/CodeIgniter-3.1.6/index.php/login_contrl/show_information" target="_top"><i class="am-icon-user am-icon-fw"></i>个人中心</a></div>
            </div>
            <div class="topMessage mini-cart">
                <div class="menu-hd"><a id="mc-menu-hd" href="/CodeIgniter-3.1.6/index.php/orderForm_controll/show_order_form_view" target="_top"><i class="am-icon-shopping-cart  am-icon-fw"></i><span>我的订单</span><strong id="J_MiniCartNum" class="h">
                                    <?php
                            
                                        if(isset($_SESSION['order_num'])){

                                            echo $_SESSION['order_num'];
                                        }
                                        else
                                            echo 0;
                                    ?>
                    </strong></a></div>
            </div>
            <div class="topMessage favorite">
                <!--                <div class="menu-hd"><a href="#" target="_top"><i class="am-icon-heart am-icon-fw"></i><span>收藏夹</span></a></div>-->
        </ul>
        </div>

        <!--悬浮搜索框-->

<!--
        <div class="nav white">
            <div class="logo"><img src="/CodeIgniter-3.1.6/resource/images/logo.png" /></div>
            <div class="logoBig">
                <li><img src="/CodeIgniter-3.1.6/resource/images/logobig.png" /></li>
            </div>

            <div class="search-bar pr">
                <a name="index_none_header_sysc" href="#"></a>
                <form>
                    <input id="searchInput" name="index_none_header_sysc" type="text" placeholder="搜索" autocomplete="off">
                    <input id="ai-topsearch" class="submit" value="搜索" index="1" type="submit"></form>
            </div>
        </div>
-->

        <div class="clear"></div>



        <div class="take-delivery">
            <div class="status">
                <h2>您已成功预定，请等待派送。</h2>
                <div class="successInfo">
                    <ul>
                        <li>预定金额<em>¥
                            <?php
                                
                                echo $_SESSION['total_price'];
                            ?>
                            </em></li>
                        <div class="user-info">
                            <p>用户邮箱：
                                <?php echo $_SESSION['useremail']; ?>
                            </p>
                            <p>联系电话：
                                <?php
                                
                                    if(isset($_SESSION)){
                                        
                                        if($_SESSION['number_of_phone']!=''){
                                            
                                            echo $_SESSION['number_of_phone'];
                                        }
                                        else{
                                            
                                            echo "<span style='color:#F00'>您尚未填写手机号，请到\"个人中心\"--\"修改个人资料\" 补充信息。</span>";
                                        }
                                    }
                                ?>
                            </p>
                            <p>联系地址：
                                <?php
                                
                                    if(isset($_SESSION)){
                                        
                                        if($_SESSION['address']!=''){
                                            
                                            echo $_SESSION['address'];
                                        }
                                        else{
                                            
                                            echo "<span style='color:#F00'>您尚未填写联系地址，请到\"个人中心\"--\"修改个人资料\" 补充信息。</span>";
                                        }
                                    }
                                ?>
                            </p>
                            <!--                            <p>收货地址：湖北省 武汉市 武昌区 东湖路75号众环大厦</p>-->
                            <p>商品名称:
                                <?php
                                    
                                    if(isset($_SESSION)){
                                        
                                        echo $_SESSION['c_name'];
                                    }
                                ?>
                            </p>
                            <p>订购数量：
                                <?php
                                    
                                    if(isset($_SESSION)){
                                        
                                        echo $_SESSION['quantity'];
                                    }
                                    $_SESSION['payed']=1;
                                ?>
                            </p>
                        </div>
                        请认真核对您的订单信息，如有错误请联系客服

                    </ul>
                    <div class="option">
                        <span class="info">您可以</span>
                        <a href="/CodeIgniter-3.1.6/index.php/orderForm_controll/show_order_form_view" class="J_MakePoint">查看<span>订单</span></a>
                        <!--                        <a href="../person/orderinfo.html" class="J_MakePoint">查看<span>交易详情</span></a>-->
                    </div>
                </div>
            </div>
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
