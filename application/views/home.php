<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">

    <title>首页</title>

    <link href="/CodeIgniter-3.1.6/resource/AmazeUI-2.4.2/assets/css/amazeui.css" rel="stylesheet" type="text/css" />
    <link href="/CodeIgniter-3.1.6/resource/AmazeUI-2.4.2/assets/css/admin.css" rel="stylesheet" type="text/css" />

    <link href="/CodeIgniter-3.1.6/resource/basic/css/demo.css" rel="stylesheet" type="text/css" />

    <link href="/CodeIgniter-3.1.6/resource/css/hmstyle.css" rel="stylesheet" type="text/css" />
    <script src="/CodeIgniter-3.1.6/resource/AmazeUI-2.4.2/assets/js/jquery.min.js"></script>
    <script src="/CodeIgniter-3.1.6/resource/AmazeUI-2.4.2/assets/js/amazeui.min.js"></script>

</head>

<body>
    <div class="hmtop">
        <!--顶部导航条 -->
        <div class="am-container header">
            <ul class="message-l">
                <div class="topMessage">
                    <div class="menu-hd">

                        <?php
                                //有session值则设置为登陆状态
                                if(isset($_SESSION['useremail'])) {
                                    
                                    echo "<a href='' target='_top' class='h'>"."欢迎您，".$_SESSION['useremail']."</a>";
                                    echo "<a href='logout' target='_top'>"." 退出</a>";
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
                <!--
					<div class="topMessage home">
						<div class="menu-hd"><a href="show_home" target="_top" class="h">商城首页</a></div>
					</div>
-->
                <div class="topMessage my-shangcheng">
                    <div class="menu-hd MyShangcheng"><a href="show_information" target="_top"><i class="am-icon-user am-icon-fw"></i>个人中心</a></div>
                </div>
                <div class="topMessage mini-cart">
                    <div class="menu-hd"><a id="mc-menu-hd" href="/CodeIgniter-3.1.6/index.php/orderForm_controll/show_order_form_view" target="_top"><i class="am-icon-shopping-cart  am-icon-fw"></i><span>我的订单 </span><strong id="J_MiniCartNum" class="h">
                        <?php
                            
                            if(isset($num)){

                                echo $num[0]->haha;
                            }
                            else
                                echo 0;
                        ?>
                            </strong></a></div>
                </div>
                <div class="topMessage favorite">
                    <div class="menu-hd"><a href="#" target="_top"><i class=" am-icon-fw"></i><span></span></a></div>
            </ul>
            </div>

            <!--悬浮搜索框-->

            <div class="nav white">
                <div class="logo"><img src="/CodeIgniter-3.1.6/resource/images/logo.png" /></div>
                <div class="logoBig">
                    <li><img src="/CodeIgniter-3.1.6/resource/images/logobig.png" /></li>
                </div>

                <div class="search-bar pr">
                    <a name="index_none_header_sysc" href="#"></a>
                    <form action="/CodeIgniter-3.1.6/index.php/login_contrl/show_search" method="post">
                        <input id="searchInput" name="index_none_header_sysc" type="text" placeholder="搜索蛋糕" autocomplete="off">
                        <input id="ai-topsearch" class="submit am-btn" value="搜索" index="1" type="submit">
                    </form>
                </div>
            </div>

            <div class="clear"></div>
        </div>
        <b class="line"></b>
        <div class="shopNav">
            <div class="slideall" style="height: auto;">

                <div class="long-title"><span class="all-goods">蛋糕索引</span></div>
                <!--
					   <div class="nav-cont">
							<ul>
								<li class="index"><a href="#">首页</a></li>
                                <li class="qc"><a href="#">闪购</a></li>
                                <li class="qc"><a href="#">限时抢</a></li>
                                <li class="qc"><a href="#">团购</a></li>
                                <li class="qc last"><a href="#">大包装</a></li>
							</ul>
						    <div class="nav-extra">
						    	<i class="am-icon-user-secret am-icon-md nav-user"></i><b></b>我的福利
						    	<i class="am-icon-angle-right" style="padding-left: 10px;"></i>
						    </div>
						</div>
-->

                <div class="bannerTwo">
                    <!--轮播 -->
                    <div class="am-slider am-slider-default scoll" data-am-flexslider id="demo-slider-0">
                        <ul class="am-slides">
                            <li class="banner1"><a><img src="/CodeIgniter-3.1.6/resource/images/play6.jpg" /></a></li>
                            <li class="banner2"><a><img src="/CodeIgniter-3.1.6/resource/images/play5.jpg" /></a></li>
                            <li class="banner3"><a><img src="/CodeIgniter-3.1.6/resource/images/play4.jpg" /></a></li>
                            <li class="banner4"><a><img src="/CodeIgniter-3.1.6/resource/images/play1.jpg" /></a></li>
                        </ul>
                    </div>
                    <div class="clear"></div>
                </div>


                <?php
                        
                        $queryR = $this->db->query('select * from BirthdayCakes order by f_sale(bid) desc');
                    ?>

                    <!--侧边导航 -->
                    <div id="nav" class="navfull" style="position: static;">
                        <div class="area clearfix">
                            <div class="category-content" id="guide_2">

                                <div class="category" style="box-shadow:none ;margin-top: 2px;">
                                    <ul class="category-list navTwo" id="js_climit_li">
                                        <li>
                                            <div class="category-info">
                                                <h3 class="category-name b-category-name"><i><img src="/CodeIgniter-3.1.6/resource/images/cake.png"></i>
                                                    <a class="ml-22" title="点心">
                                                        <?php
                                                        
                                                            $row = $queryR->unbuffered_row('array');
                                                            echo $row['bname'];
                                                            $str=$row['bdescription'];
                                                            $strArray=explode(' ',$str);
                                                        ?>
                                                    </a>
                                                </h3>
                                                <em>&gt;</em></div>
                                            <div class="menu-item menu-in top">
                                                <div class="area-in">
                                                    <div class="area-bg">
                                                        <div class="menu-srot">
                                                            <div class="sort-side">
                                                                <dl class="dl-sort">
                                                                    <dt><span title="蛋糕">蛋糕风情</span></dt>
                                                                    <!--
																		<dd><a title="蒸蛋糕" href="show_introdution"><span></span></a></dd>
																		<dd><a title="脱水蛋糕" href="show_introdution"><span>脱水蛋糕</span></a></dd>
																		<dd><a title="瑞士卷" href="show_introdution"><span>瑞士卷</span></a></dd>
																		<dd><a title="软面包" href="show_introdution"><span>软面包</span></a></dd>
																		<dd><a title="马卡龙" href="show_introdution"><span>马卡龙</span></a></dd>
																		<dd><a title="千层饼" href="show_introdution"><span>千层饼</span></a></dd>
																		<dd><a title="甜甜圈" href="show_introdution"><span>甜甜圈</span></a></dd>
																		<dd><a title="蒸三明治" href="show_introdution"><span>蒸三明治</span></a></dd>
																		<dd><a title="铜锣烧" href="show_introdution"><span>铜锣烧</span></a></dd>
-->
                                                                    <?php
                                                                            
                                                                            for($i=0;$i<count($strArray);$i++){
                                                                                
                                                                                echo "<dd><a title='' href='show_introdution/".$row['bid']."'><span>".$strArray[$i]."</span></a></dd>";
                                                                            }
                                                                        ?>
                                                                </dl>
                                                                <!--
																	<dl class="dl-sort">
																		<dt><span title="蛋糕">点心</span></dt>
																		<dd><a title="蒸蛋糕" href="#"><span>蒸蛋糕</span></a></dd>
																		<dd><a title="脱水蛋糕" href="#"><span>脱水蛋糕</span></a></dd>
																		<dd><a title="瑞士卷" href="#"><span>瑞士卷</span></a></dd>
																		<dd><a title="软面包" href="#"><span>软面包</span></a></dd>
																		<dd><a title="马卡龙" href="#"><span>马卡龙</span></a></dd>
																		<dd><a title="千层饼" href="#"><span>千层饼</span></a></dd>
																		<dd><a title="甜甜圈" href="#"><span>甜甜圈</span></a></dd>
																		<dd><a title="蒸三明治" href="#"><span>蒸三明治</span></a></dd>
																		<dd><a title="铜锣烧" href="#"><span>铜锣烧</span></a></dd>
																	</dl>
-->

                                                            </div>
                                                            <div class="brand-side">
                                                                <dl class="dl-sort"><dt><span>商品详情</span></dt>
                                                                    <?php
																		  echo "<dd><a rel='nofollow' title='呵官方旗舰店' target='_blank' href='". "show_introdution/".$row['bid']."' rel='nofollow'><span class='red' >前往商品详情页</span></a></dd>";
                                                                        ?>
                                                                        <!--
																		<dd><a rel="nofollow" title="格瑞旗舰店" target="_blank" href="#" rel="nofollow"><span >格瑞旗舰店</span></a></dd>
																		<dd><a rel="nofollow" title="飞彦大厂直供" target="_blank" href="#" rel="nofollow"><span  class="red" >飞彦大厂直供</span></a></dd>
																		<dd><a rel="nofollow" title="红e·艾菲妮" target="_blank" href="#" rel="nofollow"><span >红e·艾菲妮</span></a></dd>
																		<dd><a rel="nofollow" title="本真旗舰店" target="_blank" href="#" rel="nofollow"><span  class="red" >本真旗舰店</span></a></dd>
																		<dd><a rel="nofollow" title="杭派女装批发网" target="_blank" href="#" rel="nofollow"><span  class="red" >杭派女装批发网</span></a></dd>
-->
                                                                </dl>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <b class="arrow"></b>
                                        </li>
                                        <li>
                                            <div class="category-info">
                                                <h3 class="category-name b-category-name"><i><img src="/CodeIgniter-3.1.6/resource/images/cookies.png"></i>
                                                    <a class="ml-22" title="饼干、膨化">
                                                        <?php
                                                        
                                                            $row = $queryR->unbuffered_row('array');
                                                            echo $row['bname'];
                                                            $str1=$row['bdescription'];
//                                                            echo $str1;
                                                            $strArray1=explode(' ',$str1);
//                                                            echo count($strArray1);
                                                        ?>
                                                    </a>
                                                </h3>
                                                <em>&gt;</em></div>
                                            <div class="menu-item menu-in top">
                                                <div class="area-in">
                                                    <div class="area-bg">
                                                        <div class="menu-srot">
                                                            <div class="sort-side">
                                                                <dl class="dl-sort">
                                                                    <dt><span title="饼干">蛋糕风情</span></dt>

                                                                    <!--
																		<dd><a title="蒸蛋糕" href="#"><span>蒸蛋糕</span></a></dd>
																		<dd><a title="脱水蛋糕" href="#"><span>脱水蛋糕</span></a></dd>
																		<dd><a title="瑞士卷" href="#"><span>瑞士卷</span></a></dd>
																		<dd><a title="软面包" href="#"><span>软面包</span></a></dd>
																		<dd><a title="马卡龙" href="#"><span>马卡龙</span></a></dd>
-->

                                                                    <?php
//                                                                            echo count($strArray1);
                                                                            for($i=0;$i<count($strArray1);$i++){
                                                                                
                                                                                echo "<dd><a title='' href='show_introdution/".$row['bid']."'><span>".$strArray1[$i]."</span></a></dd>";
                                                                            }
                                                                        ?>
                                                                </dl>

                                                                <!--
																	<dl class="dl-sort">
																		<dt><span title="薯片">薯片</span></dt>
																		<dd><a title="蒸蛋糕" href="#"><span>蒸蛋糕</span></a></dd>
																		<dd><a title="脱水蛋糕" href="#"><span>脱水蛋糕</span></a></dd>
																		<dd><a title="瑞士卷" href="#"><span>瑞士卷</span></a></dd>
																		<dd><a title="软面包" href="#"><span>软面包</span></a></dd>
																		<dd><a title="马卡龙" href="#"><span>马卡龙</span></a></dd>
																		<dd><a title="千层饼" href="#"><span>千层饼</span></a></dd>
																		<dd><a title="甜甜圈" href="#"><span>甜甜圈</span></a></dd>
																		<dd><a title="蒸三明治" href="#"><span>蒸三明治</span></a></dd>
																		<dd><a title="铜锣烧" href="#"><span>铜锣烧</span></a></dd>
																	</dl>
-->
                                                                <!--
																	<dl class="dl-sort">
																		<dt><span title="蛋糕">虾条</span></dt>
																		<dd><a title="蒸蛋糕" href="#"><span>蒸蛋糕</span></a></dd>
																		<dd><a title="脱水蛋糕" href="#"><span>脱水蛋糕</span></a></dd>
																		<dd><a title="瑞士卷" href="#"><span>瑞士卷</span></a></dd>
																		<dd><a title="软面包" href="#"><span>软面包</span></a></dd>
																		<dd><a title="马卡龙" href="#"><span>马卡龙</span></a></dd>
																		<dd><a title="千层饼" href="#"><span>千层饼</span></a></dd>
																		<dd><a title="甜甜圈" href="#"><span>甜甜圈</span></a></dd>
																		<dd><a title="蒸三明治" href="#"><span>蒸三明治</span></a></dd>
																		<dd><a title="铜锣烧" href="#"><span>铜锣烧</span></a></dd>
																	</dl>
-->
                                                            </div>
                                                            <div class="brand-side">
                                                                <dl class="dl-sort"><dt><span>商品详情</span></dt>
                                                                    <!--
																		<dd><a rel="nofollow" title="YYKCLOT" target="_blank" href="#" rel="nofollow"><span  class ="red" >YYKCLOT</span></a></dd>
																		<dd><a rel="nofollow" title="池氏品牌男装" target="_blank" href="#" rel="nofollow"><span  class ="red" >池氏品牌男装</span></a></dd>
																		<dd><a rel="nofollow" title="男装日志" target="_blank" href="#" rel="nofollow"><span >男装日志</span></a></dd>
																		<dd><a rel="nofollow" title="索比诺官方旗舰店" target="_blank" href="#" rel="nofollow"><span >索比诺官方旗舰店</span></a></dd>
																		<dd><a rel="nofollow" title="onTTno傲徒" target="_blank" href="#" rel="nofollow"><span  class ="red" >onTTno傲徒</span></a></dd>
																		<dd><a rel="nofollow" title="玛狮路男装旗舰店" target="_blank" href="#" rel="nofollow"><span >玛狮路男装旗舰店</span></a></dd>
																		<dd><a rel="nofollow" title="劳威特品牌男装" target="_blank" href="#" rel="nofollow"><span >劳威特品牌男装</span></a></dd>
																		<dd><a rel="nofollow" title="卡斯郎世家批发城" target="_blank" href="#" rel="nofollow"><span  class ="red" >卡斯郎世家批发城</span></a></dd>
-->
                                                                    <?php
																		  echo "<dd><a rel='nofollow' title='呵官方旗舰店' target='_blank' href='". "show_introdution/".$row['bid']."' rel='nofollow'><span class='red' >前往商品详情页</span></a></dd>";
                                                                        ?>
                                                                </dl>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <b class="arrow"></b>
                                        </li>
                                        <li>
                                            <div class="category-info">
                                                <h3 class="category-name b-category-name"><i><img src="/CodeIgniter-3.1.6/resource/images/meat.png"></i>
                                                    <a class="ml-22" title="熟食、肉类">
                                                        <?php
                                                            $row = $queryR->unbuffered_row('array');
                                                            echo $row['bname'];
                                                            $str=$row['bdescription'];
                                                            $strArray=explode(' ',$str);
                                                        ?>
                                                    </a>
                                                </h3>
                                                <em>&gt;</em></div>
                                            <div class="menu-item menu-in top">
                                                <div class="area-in">
                                                    <div class="area-bg">
                                                        <div class="menu-srot">
                                                            <div class="sort-side">
                                                                <dl class="dl-sort">
                                                                    <dt><span title="猪肉脯">蛋糕风情</span></dt>

                                                                    <?php
                                                                            
                                                                            for($i=0;$i<count($strArray);$i++){
                                                                                
                                                                                 echo "<dd><a title='' href='show_introdution/".$row['bid']."'><span>".$strArray[$i]."</span></a></dd>";
                                                                            }
                                                                        ?>
                                                                        <!--
																		<dd><a title="蒸蛋糕" href="#"><span>蒸蛋糕</span></a></dd>
																		<dd><a title="脱水蛋糕" href="#"><span>脱水蛋糕</span></a></dd>
																		<dd><a title="瑞士卷" href="#"><span>瑞士卷</span></a></dd>
																		<dd><a title="软面包" href="#"><span>软面包</span></a></dd>
																		<dd><a title="马卡龙" href="#"><span>马卡龙</span></a></dd>
-->
                                                                </dl>
                                                                <!--
																	<dl class="dl-sort">
																		<dt><span title="牛肉丝">牛肉丝</span></dt>
																		<dd><a title="蒸蛋糕" href="#"><span>蒸蛋糕</span></a></dd>
																		<dd><a title="脱水蛋糕" href="#"><span>脱水蛋糕</span></a></dd>
																		<dd><a title="瑞士卷" href="#"><span>瑞士卷</span></a></dd>
																		<dd><a title="软面包" href="#"><span>软面包</span></a></dd>
																		<dd><a title="马卡龙" href="#"><span>马卡龙</span></a></dd>
																	</dl>
																	<dl class="dl-sort">
																		<dt><span title="小香肠">小香肠</span></dt>
																		<dd><a title="蒸蛋糕" href="#"><span>蒸蛋糕</span></a></dd>
																		<dd><a title="脱水蛋糕" href="#"><span>脱水蛋糕</span></a></dd>
																		<dd><a title="瑞士卷" href="#"><span>瑞士卷</span></a></dd>
																		<dd><a title="软面包" href="#"><span>软面包</span></a></dd>
																		<dd><a title="铜锣烧" href="#"><span>铜锣烧</span></a></dd>
																	</dl>
-->
                                                            </div>
                                                            <div class="brand-side">
                                                                <dl class="dl-sort"><dt><span>商品详情</span></dt>

                                                                    <?php
																		  echo "<dd><a rel='nofollow' title='呵官方旗舰店' target='_blank' href='". "show_introdution/".$row['bid']."' rel='nofollow'><span class='red' >前往商品详情页</span></a></dd>";
                                                                        ?>


                                                                        <!--
																		<dd><a rel="nofollow" title="花颜巧语 " target="_blank" href="#" rel="nofollow"><span  class="red" >花颜巧语 </span></a></dd>
																		<dd><a rel="nofollow" title="糖衣小屋" target="_blank" href="#" rel="nofollow"><span >糖衣小屋</span></a></dd>
																		<dd><a rel="nofollow" title="卡拉迪克  " target="_blank" href="#" rel="nofollow"><span  class="red" >卡拉迪克  </span></a></dd>
																		<dd><a rel="nofollow" title="暖春童话 " target="_blank" href="#" rel="nofollow"><span >暖春童话 </span></a></dd>
																		<dd><a rel="nofollow" title="华盛童装批发行 " target="_blank" href="#" rel="nofollow"><span >华盛童装批发行 </span></a></dd>
																		<dd><a rel="nofollow" title="奈仕华童装旗舰店" target="_blank" href="#" rel="nofollow"><span >奈仕华童装旗舰店</span></a></dd>
																		<dd><a rel="nofollow" title="斑蒂尼BONDYNI" target="_blank" href="#" rel="nofollow"><span  class="red" >斑蒂尼BONDYNI</span></a></dd>
																		<dd><a rel="nofollow" title="猫儿朵朵 " target="_blank" href="#" rel="nofollow"><span >猫儿朵朵 </span></a></dd>
																		<dd><a rel="nofollow" title="童衣阁" target="_blank" href="#" rel="nofollow"><span  class="red" >童衣阁</span></a></dd>
-->
                                                                </dl>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <b class="arrow"></b>
                                        </li>
                                        <li>
                                            <div class="category-info">
                                                <h3 class="category-name b-category-name"><i><img src="/CodeIgniter-3.1.6/resource/images/bamboo.png"></i>
                                                    <a class="ml-22" title="素食、卤味">
                                                        <?php
                                                            $row = $queryR->unbuffered_row('array');
                                                            echo $row['bname'];
                                                            $str=$row['bdescription'];
                                                            $strArray=explode(' ',$str);
                                                        ?>
                                                    </a>
                                                </h3>
                                                <em>&gt;</em></div>
                                            <div class="menu-item menu-in top">
                                                <div class="area-in">
                                                    <div class="area-bg">
                                                        <div class="menu-srot">
                                                            <div class="sort-side">
                                                                <dl class="dl-sort">
                                                                    <dt><span title="豆干">蛋糕风情</span></dt>

                                                                    <?php
                                                                            
                                                                            for($i=0;$i<count($strArray);$i++){
                                                                                
                                                                                echo "<dd><a title='' href='show_introdution/".$row['bid']."'><span>".$strArray[$i]."</span></a></dd>";
                                                                            }
                                                                        ?>
                                                                        <!--
																		<dd><a title="蒸蛋糕" href="#"><span>蒸蛋糕</span></a></dd>
																		<dd><a title="脱水蛋糕" href="#"><span>脱水蛋糕</span></a></dd>
																		<dd><a title="瑞士卷" href="#"><span>瑞士卷</span></a></dd>
																		<dd><a title="铜锣烧" href="#"><span>铜锣烧</span></a></dd>
-->
                                                                </dl>
                                                                <!--
																	<dl class="dl-sort">
																		<dt><span title="干笋">干笋</span></dt>
																		<dd><a title="蒸蛋糕" href="#"><span>蒸蛋糕</span></a></dd>
																		<dd><a title="脱水蛋糕" href="#"><span>脱水蛋糕</span></a></dd>
																		<dd><a title="瑞士卷" href="#"><span>瑞士卷</span></a></dd>
																		<dd><a title="铜锣烧" href="#"><span>铜锣烧</span></a></dd>
																	</dl>
																	<dl class="dl-sort">
																		<dt><span title="鸭脖">鸭脖</span></dt>
																		<dd><a title="蒸蛋糕" href="#"><span>蒸蛋糕</span></a></dd>
																		<dd><a title="脱水蛋糕" href="#"><span>脱水蛋糕</span></a></dd>
																		<dd><a title="瑞士卷" href="#"><span>瑞士卷</span></a></dd>
																		<dd><a title="软面包" href="#"><span>软面包</span></a></dd>
																		<dd><a title="马卡龙" href="#"><span>马卡龙</span></a></dd>
																		<dd><a title="千层饼" href="#"><span>千层饼</span></a></dd>
																		<dd><a title="甜甜圈" href="#"><span>甜甜圈</span></a></dd>
																		<dd><a title="蒸三明治" href="#"><span>蒸三明治</span></a></dd>
																		<dd><a title="铜锣烧" href="#"><span>铜锣烧</span></a></dd>
																	</dl>
-->
                                                            </div>
                                                            <div class="brand-side">
                                                                <dl class="dl-sort"><dt><span>商品详情</span></dt>

                                                                    <?php
																		  echo "<dd><a rel='nofollow' title='呵官方旗舰店' target='_blank' href='". "show_introdution/".$row['bid']."' rel='nofollow'><span class='red' >前往商品详情页</span></a></dd>";
                                                                        ?>
                                                                        <!--
																		<dd><a rel="nofollow" title="歌芙品牌旗舰店" target="_blank" href="#" rel="nofollow"><span  class="red" >歌芙品牌旗舰店</span></a></dd>
																		<dd><a rel="nofollow" title="爱丝蓝内衣厂" target="_blank" href="#" rel="nofollow"><span >爱丝蓝内衣厂</span></a></dd>
																		<dd><a rel="nofollow" title="香港优蓓尔防辐射" target="_blank" href="#" rel="nofollow"><span >香港优蓓尔防辐射</span></a></dd>
																		<dd><a rel="nofollow" title="蓉莉娜内衣批发" target="_blank" href="#" rel="nofollow"><span >蓉莉娜内衣批发</span></a></dd>
-->
                                                                </dl>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <b class="arrow"></b>
                                        </li>
                                        <li>
                                            <div class="category-info">
                                                <h3 class="category-name b-category-name"><i><img src="/CodeIgniter-3.1.6/resource/images/nut.png"></i>
                                                    <a class="ml-22" title="坚果、炒货">
                                                        <?php
                                                            $row = $queryR->unbuffered_row('array');
                                                            echo $row['bname'];
                                                            $str=$row['bdescription'];
                                                            $strArray=explode(' ',$str);
                                                        ?>
                                                    </a>
                                                </h3>
                                                <em>&gt;</em></div>
                                            <div class="menu-item menu-in top">
                                                <div class="area-in">
                                                    <div class="area-bg">
                                                        <div class="menu-srot">
                                                            <div class="sort-side">
                                                                <dl class="dl-sort">
                                                                    <dt><span title="蛋糕">蛋糕风情</span></dt>

                                                                    <?php
                                                                            
                                                                            for($i=0;$i<count($strArray);$i++){
                                                                                
                                                                                echo "<dd><a title='' href='show_introdution/".$row['bid']."'><span>".$strArray[$i]."</span></a></dd>";
                                                                            }
                                                                        ?>
                                                                        <!--
																		<dd><a title="蒸蛋糕" href="#"><span>蒸蛋糕</span></a></dd>
																		<dd><a title="脱水蛋糕" href="#"><span>脱水蛋糕</span></a></dd>
																		<dd><a title="瑞士卷" href="#"><span>瑞士卷</span></a></dd>
																		<dd><a title="软面包" href="#"><span>软面包</span></a></dd>
																		<dd><a title="马卡龙" href="#"><span>马卡龙</span></a></dd>
																		<dd><a title="千层饼" href="#"><span>千层饼</span></a></dd>
																		<dd><a title="甜甜圈" href="#"><span>甜甜圈</span></a></dd>
																		<dd><a title="蒸三明治" href="#"><span>蒸三明治</span></a></dd>
																		<dd><a title="铜锣烧" href="#"><span>铜锣烧</span></a></dd>
-->
                                                                </dl>
                                                                <!--
																	<dl class="dl-sort">
																		<dt><span title="蛋糕">锅巴</span></dt>
																		<dd><a title="蒸蛋糕" href="#"><span>蒸蛋糕</span></a></dd>
																		<dd><a title="脱水蛋糕" href="#"><span>脱水蛋糕</span></a></dd>
																		<dd><a title="瑞士卷" href="#"><span>瑞士卷</span></a></dd>
																		<dd><a title="软面包" href="#"><span>软面包</span></a></dd>
																		<dd><a title="马卡龙" href="#"><span>马卡龙</span></a></dd>
																		<dd><a title="千层饼" href="#"><span>千层饼</span></a></dd>
																		<dd><a title="甜甜圈" href="#"><span>甜甜圈</span></a></dd>
																		<dd><a title="蒸三明治" href="#"><span>蒸三明治</span></a></dd>
																		<dd><a title="铜锣烧" href="#"><span>铜锣烧</span></a></dd>
																	</dl>
-->
                                                            </div>
                                                            <div class="brand-side">
                                                                <dl class="dl-sort"><dt><span>商品详情</span></dt>

                                                                    <?php
																		  echo "<dd><a rel='nofollow' title='呵官方旗舰店' target='_blank' href='". "show_introdution/".$row['bid']."' rel='nofollow'><span class='red' >前往商品详情页</span></a></dd>";
                                                                        ?>
                                                                        <!--
																		<dd><a rel="nofollow" title="呵呵嘿官方旗舰店" target="_blank" href="#" rel="nofollow"><span  class="red" >呵呵嘿官方旗舰店</span></a></dd>
																		<dd><a rel="nofollow" title="格瑞旗舰店" target="_blank" href="#" rel="nofollow"><span >格瑞旗舰店</span></a></dd>
																		<dd><a rel="nofollow" title="飞彦大厂直供" target="_blank" href="#" rel="nofollow"><span  class="red" >飞彦大厂直供</span></a></dd>
																		<dd><a rel="nofollow" title="红e·艾菲妮" target="_blank" href="#" rel="nofollow"><span >红e·艾菲妮</span></a></dd>
																		<dd><a rel="nofollow" title="本真旗舰店" target="_blank" href="#" rel="nofollow"><span  class="red" >本真旗舰店</span></a></dd>
																		<dd><a rel="nofollow" title="杭派女装批发网" target="_blank" href="#" rel="nofollow"><span  class="red" >杭派女装批发网</span></a></dd>
																		<dd><a rel="nofollow" title="华伊阁旗舰店" target="_blank" href="#" rel="nofollow"><span >华伊阁旗舰店</span></a></dd>
																		<dd><a rel="nofollow" title="独家折扣旗舰店" target="_blank" href="#" rel="nofollow"><span >独家折扣旗舰店</span></a></dd>
-->
                                                                </dl>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <b class="arrow"></b>
                                        </li>
                                        <li>
                                            <div class="category-info">
                                                <h3 class="category-name b-category-name"><i><img src="/CodeIgniter-3.1.6/resource/images/candy.png"></i>
                                                    <a class="ml-22" title="糖果、蜜饯">

                                                        <?php
                                                        
                                                            $row = $queryR->unbuffered_row('array');
                                                            echo $row['bname'];
                                                            $str=$row['bdescription'];
                                                            $strArray=explode(' ',$str);
                                                        ?>
                                                    </a>
                                                </h3>
                                                <em>&gt;</em></div>
                                            <div class="menu-item menu-in top">
                                                <div class="area-in">
                                                    <div class="area-bg">
                                                        <div class="menu-srot">
                                                            <div class="sort-side">
                                                                <dl class="dl-sort">
                                                                    <dt><span title="糖果">蛋糕风情</span></dt>


                                                                    <?php
                                                                            
                                                                            for($i=0;$i<count($strArray);$i++){
                                                                                
                                                                                 echo "<dd><a title='' href='show_introdution/".$row['bid']."'><span>".$strArray[$i]."</span></a></dd>";
                                                                            }
                                                                        ?>
                                                                        <!--
																		<dd><a title="蒸蛋糕" href="#"><span>蒸蛋糕</span></a></dd>
																		<dd><a title="脱水蛋糕" href="#"><span>脱水蛋糕</span></a></dd>
																		<dd><a title="瑞士卷" href="#"><span>瑞士卷</span></a></dd>
																		<dd><a title="软面包" href="#"><span>软面包</span></a></dd>
																		<dd><a title="马卡龙" href="#"><span>马卡龙</span></a></dd>
																		<dd><a title="千层饼" href="#"><span>千层饼</span></a></dd>
																		<dd><a title="甜甜圈" href="#"><span>甜甜圈</span></a></dd>
																		<dd><a title="蒸三明治" href="#"><span>蒸三明治</span></a></dd>
																		<dd><a title="铜锣烧" href="#"><span>铜锣烧</span></a></dd>
-->
                                                                </dl>
                                                                <!--
																	<dl class="dl-sort">
																		<dt><span title="蜜饯">蜜饯</span></dt>
																		<dd><a title="猕猴桃干" href="#"><span>猕猴桃干</span></a></dd>
																		<dd><a title="糖樱桃" href="#"><span>糖樱桃</span></a></dd>
																		<dd><a title="瑞士卷" href="#"><span>瑞士卷</span></a></dd>
																		<dd><a title="软面包" href="#"><span>软面包</span></a></dd>
																		<dd><a title="马卡龙" href="#"><span>马卡龙</span></a></dd>
																		<dd><a title="千层饼" href="#"><span>千层饼</span></a></dd>
																		<dd><a title="甜甜圈" href="#"><span>甜甜圈</span></a></dd>
																		<dd><a title="蒸三明治" href="#"><span>蒸三明治</span></a></dd>
																		<dd><a title="铜锣烧" href="#"><span>铜锣烧</span></a></dd>
																	</dl>
-->
                                                            </div>
                                                            <div class="brand-side">
                                                                <dl class="dl-sort"><dt><span>商品详情</span></dt>

                                                                    <?php
																		  echo "<dd><a rel='nofollow' title='呵官方旗舰店' target='_blank' href='". "show_introdution/".$row['bid']."' rel='nofollow'><span class='red' >前往商品详情页</span></a></dd>";
                                                                        ?>
                                                                        <!--
																		<dd><a rel="nofollow" title="YYKCLOT" target="_blank" href="#" rel="nofollow"><span  class ="red" >YYKCLOT</span></a></dd>
																		<dd><a rel="nofollow" title="池氏品牌男装" target="_blank" href="#" rel="nofollow"><span  class ="red" >池氏品牌男装</span></a></dd>
																		<dd><a rel="nofollow" title="男装日志" target="_blank" href="#" rel="nofollow"><span >男装日志</span></a></dd>
																		<dd><a rel="nofollow" title="索比诺官方旗舰店" target="_blank" href="#" rel="nofollow"><span >索比诺官方旗舰店</span></a></dd>
																		<dd><a rel="nofollow" title="onTTno傲徒" target="_blank" href="#" rel="nofollow"><span  class ="red" >onTTno傲徒</span></a></dd>
																		<dd><a rel="nofollow" title="卡斯郎世家批发城" target="_blank" href="#" rel="nofollow"><span  class ="red" >卡斯郎世家批发城</span></a></dd>
-->
                                                                </dl>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <b class="arrow"></b>
                                        </li>
                                        <li>
                                            <div class="category-info">
                                                <h3 class="category-name b-category-name"><i><img src="/CodeIgniter-3.1.6/resource/images/chocolate.png"></i>
                                                    <a class="ml-22" title="巧克力">
                                                        <?php
                                                        
                                                            $row = $queryR->unbuffered_row('array');
                                                            echo $row['bname'];
                                                            $str=$row['bdescription'];
                                                            $strArray=explode(' ',$str);
                                                        ?>
                                                    </a>
                                                </h3>
                                                <em>&gt;</em></div>
                                            <div class="menu-item menu-in top">
                                                <div class="area-in">
                                                    <div class="area-bg">
                                                        <div class="menu-srot">
                                                            <div class="sort-side">
                                                                <dl class="dl-sort">
                                                                    <dt><span title="蛋糕">蛋糕风情</span></dt>
                                                                    <?php
                                                                            
                                                                            for($i=0;$i<count($strArray);$i++){
                                                                                
                                                                                 echo "<dd><a title='' href='show_introdution/".$row['bid']."'><span>".$strArray[$i]."</span></a></dd>";
                                                                            }
                                                                        ?>

                                                                        <!--
																		<dd><a title="蒸蛋糕" href="#"><span>蒸蛋糕</span></a></dd>
																		<dd><a title="脱水蛋糕" href="#"><span>脱水蛋糕</span></a></dd>
																		<dd><a title="瑞士卷" href="#"><span>瑞士卷</span></a></dd>
																		<dd><a title="软面包" href="#"><span>软面包</span></a></dd>
																		<dd><a title="马卡龙" href="#"><span>马卡龙</span></a></dd>
																		<dd><a title="千层饼" href="#"><span>千层饼</span></a></dd>
																		<dd><a title="甜甜圈" href="#"><span>甜甜圈</span></a></dd>
																		<dd><a title="蒸三明治" href="#"><span>蒸三明治</span></a></dd>
																		<dd><a title="铜锣烧" href="#"><span>铜锣烧</span></a></dd>
-->
                                                                </dl>
                                                                <!--
																	<dl class="dl-sort">
																		<dt><span title="蛋糕">果冻</span></dt>
																		<dd><a title="蒸蛋糕" href="#"><span>蒸蛋糕</span></a></dd>
																		<dd><a title="脱水蛋糕" href="#"><span>脱水蛋糕</span></a></dd>
																		<dd><a title="瑞士卷" href="#"><span>瑞士卷</span></a></dd>
																		<dd><a title="软面包" href="#"><span>软面包</span></a></dd>
																		<dd><a title="马卡龙" href="#"><span>马卡龙</span></a></dd>
																		<dd><a title="千层饼" href="#"><span>千层饼</span></a></dd>
																		<dd><a title="甜甜圈" href="#"><span>甜甜圈</span></a></dd>
																		<dd><a title="蒸三明治" href="#"><span>蒸三明治</span></a></dd>
																		<dd><a title="铜锣烧" href="#"><span>铜锣烧</span></a></dd>
																	</dl>
-->
                                                            </div>
                                                            <div class="brand-side">
                                                                <dl class="dl-sort"><dt><span>商品详情</span></dt>

                                                                    <?php
																		  echo "<dd><a rel='nofollow' title='呵官方旗舰店' target='_blank' href='". "show_introdution/".$row['bid']."' rel='nofollow'><span class='red' >前往商品详情页</span></a></dd>";
                                                                        ?>
                                                                        <!--
																		<dd><a rel="nofollow" title="花颜巧语 " target="_blank" href="#" rel="nofollow"><span  class="red" >花颜巧语 </span></a></dd>
																		<dd><a rel="nofollow" title="糖衣小屋" target="_blank" href="#" rel="nofollow"><span >糖衣小屋</span></a></dd>
																		<dd><a rel="nofollow" title="卡拉迪克  " target="_blank" href="#" rel="nofollow"><span  class="red" >卡拉迪克  </span></a></dd>
																		<dd><a rel="nofollow" title="暖春童话 " target="_blank" href="#" rel="nofollow"><span >暖春童话 </span></a></dd>
																		<dd><a rel="nofollow" title="华盛童装批发行 " target="_blank" href="#" rel="nofollow"><span >华盛童装批发行 </span></a></dd>
																		<dd><a rel="nofollow" title="奈仕华童装旗舰店" target="_blank" href="#" rel="nofollow"><span >奈仕华童装旗舰店</span></a></dd>
																		<dd><a rel="nofollow" title="斑蒂尼BONDYNI" target="_blank" href="#" rel="nofollow"><span  class="red" >斑蒂尼BONDYNI</span></a></dd>
																		<dd><a rel="nofollow" title="童衣阁" target="_blank" href="#" rel="nofollow"><span  class="red" >童衣阁</span></a></dd>
-->
                                                                </dl>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <b class="arrow"></b>
                                        </li>
                                        <li>
                                            <div class="category-info">
                                                <h3 class="category-name b-category-name"><i><img src="/CodeIgniter-3.1.6/resource/images/fish.png"></i>
                                                    <a class="ml-22" title="海味、河鲜">
                                                        <?php
                                                        
                                                            $row = $queryR->unbuffered_row('array');
                                                            echo $row['bname'];
                                                            $str=$row['bdescription'];
                                                            $strArray=explode(' ',$str);
                                                        ?>
                                                    </a>
                                                </h3>
                                                <em>&gt;</em></div>
                                            <div class="menu-item menu-in top">
                                                <div class="area-in">
                                                    <div class="area-bg">
                                                        <div class="menu-srot">
                                                            <div class="sort-side">
                                                                <dl class="dl-sort">
                                                                    <dt><span title="海带丝">蛋糕风情</span></dt>

                                                                    <?php
                                                                            
                                                                            for($i=0;$i<count($strArray);$i++){
                                                                                
                                                                                 echo "<dd><a title='' href='show_introdution/".$row['bid']."'><span>".$strArray[$i]."</span></a></dd>";
                                                                            }
                                                                        ?>
                                                                        <!--
																		<dd><a title="蒸蛋糕" href="#"><span>蒸蛋糕</span></a></dd>
																		<dd><a title="脱水蛋糕" href="#"><span>脱水蛋糕</span></a></dd>
																		<dd><a title="瑞士卷" href="#"><span>瑞士卷</span></a></dd>
																		<dd><a title="软面包" href="#"><span>软面包</span></a></dd>
																		<dd><a title="马卡龙" href="#"><span>马卡龙</span></a></dd>
																		<dd><a title="千层饼" href="#"><span>千层饼</span></a></dd>
																		<dd><a title="甜甜圈" href="#"><span>甜甜圈</span></a></dd>
																		<dd><a title="蒸三明治" href="#"><span>蒸三明治</span></a></dd>
																		<dd><a title="铜锣烧" href="#"><span>铜锣烧</span></a></dd>
-->
                                                                </dl>
                                                                <!--
																	<dl class="dl-sort">
																		<dt><span title="小鱼干">小鱼干</span></dt>
																		<dd><a title="蒸蛋糕" href="#"><span>蒸蛋糕</span></a></dd>
																		<dd><a title="脱水蛋糕" href="#"><span>脱水蛋糕</span></a></dd>
																		<dd><a title="瑞士卷" href="#"><span>瑞士卷</span></a></dd>
																		<dd><a title="软面包" href="#"><span>软面包</span></a></dd>
																	</dl>
																	<dl class="dl-sort">
																		<dt><span title="鱿鱼丝">鱿鱼丝</span></dt>
																		<dd><a title="蒸蛋糕" href="#"><span>蒸蛋糕</span></a></dd>
																		<dd><a title="脱水蛋糕" href="#"><span>脱水蛋糕</span></a></dd>
																		<dd><a title="瑞士卷" href="#"><span>瑞士卷</span></a></dd>
																		<dd><a title="软面包" href="#"><span>软面包</span></a></dd>
																	</dl>
-->
                                                            </div>
                                                            <div class="brand-side">
                                                                <dl class="dl-sort"><dt><span>商品详情</span></dt>

                                                                    <?php
																		  echo "<dd><a rel='nofollow' title='呵官方旗舰店' target='_blank' href='". "show_introdution/".$row['bid']."' rel='nofollow'><span class='red' >前往商品详情页</span></a></dd>";
                                                                        ?>
                                                                        <!--
																		<dd><a rel="nofollow" title="歌芙品牌旗舰店" target="_blank" href="#" rel="nofollow"><span  class="red" >歌芙品牌旗舰店</span></a></dd>
																		<dd><a rel="nofollow" title="爱丝蓝内衣厂" target="_blank" href="#" rel="nofollow"><span >爱丝蓝内衣厂</span></a></dd>
																		<dd><a rel="nofollow" title="炫点服饰" target="_blank" href="#" rel="nofollow"><span >炫点服饰</span></a></dd>
																		<dd><a rel="nofollow" title="雪茵美内衣厂批发" target="_blank" href="#" rel="nofollow"><span >雪茵美内衣厂批发</span></a></dd>
																		<dd><a rel="nofollow" title="金钻夫人" target="_blank" href="#" rel="nofollow"><span >金钻夫人</span></a></dd>
																		<dd><a rel="nofollow" title="伊美莎内衣" target="_blank" href="#" rel="nofollow"><span  class="red" >伊美莎内衣</span></a></dd>
																		<dd><a rel="nofollow" title="粉客内衣旗舰店" target="_blank" href="#" rel="nofollow"><span >粉客内衣旗舰店</span></a></dd>
																		<dd><a rel="nofollow" title="泽芳行旗舰店" target="_blank" href="#" rel="nofollow"><span >泽芳行旗舰店</span></a></dd>
																		<dd><a rel="nofollow" title="彩婷" target="_blank" href="#" rel="nofollow"><span  class="red" >彩婷</span></a></dd>
																		<dd><a rel="nofollow" title="黛兰希" target="_blank" href="#" rel="nofollow"><span >黛兰希</span></a></dd>
																		<dd><a rel="nofollow" title="香港优蓓尔防辐射" target="_blank" href="#" rel="nofollow"><span >香港优蓓尔防辐射</span></a></dd>
																		<dd><a rel="nofollow" title="蓉莉娜内衣批发" target="_blank" href="#" rel="nofollow"><span >蓉莉娜内衣批发</span></a></dd>
-->
                                                                </dl>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <b class="arrow"></b>
                                        </li>
                                        <li>
                                            <div class="category-info">
                                                <h3 class="category-name b-category-name"><i><img src="/CodeIgniter-3.1.6/resource/images/tea.png"></i>
                                                    <a class="ml-22" title="花茶、果茶">
                                                        <?php
                                                        
                                                            $row = $queryR->unbuffered_row('array');
                                                            echo $row['bname'];
                                                            $str=$row['bdescription'];
                                                            $strArray=explode(' ',$str);
                                                        ?>
                                                    </a>
                                                </h3>
                                                <em>&gt;</em></div>
                                            <div class="menu-item menu-in top">
                                                <div class="area-in">
                                                    <div class="area-bg">
                                                        <div class="menu-srot">
                                                            <div class="sort-side">
                                                                <dl class="dl-sort">
                                                                    <dt><span title="蛋糕">蛋糕风情</span></dt>

                                                                    <?php
                                                                            
                                                                            for($i=0;$i<count($strArray);$i++){
                                                                                
//                                                                                echo $row['bid'];
                                                                                echo "<dd><a title='' href='show_introdution/".$row['bid']."'><span>".$strArray[$i]."</span></a></dd>";
                                                                                
                                                                            }
                                                                        ?>
                                                                        <!--
																		<dd><a title="蒸蛋糕" href="#"><span>蒸蛋糕</span></a></dd>
																		<dd><a title="脱水蛋糕" href="#"><span>脱水蛋糕</span></a></dd>
																		<dd><a title="瑞士卷" href="#"><span>瑞士卷</span></a></dd>
																		<dd><a title="软面包" href="#"><span>软面包</span></a></dd>
																		<dd><a title="马卡龙" href="#"><span>马卡龙</span></a></dd>
																		<dd><a title="千层饼" href="#"><span>千层饼</span></a></dd>
																		<dd><a title="甜甜圈" href="#"><span>甜甜圈</span></a></dd>
																		<dd><a title="蒸三明治" href="#"><span>蒸三明治</span></a></dd>
																		<dd><a title="铜锣烧" href="#"><span>铜锣烧</span></a></dd>
-->
                                                                </dl>
                                                                <!--
																	<dl class="dl-sort">
																		<dt><span title="蛋糕">点心</span></dt>
																		<dd><a title="蒸蛋糕" href="#"><span>蒸蛋糕</span></a></dd>
																		<dd><a title="脱水蛋糕" href="#"><span>脱水蛋糕</span></a></dd>
																		<dd><a title="瑞士卷" href="#"><span>瑞士卷</span></a></dd>
																		<dd><a title="软面包" href="#"><span>软面包</span></a></dd>
																		<dd><a title="马卡龙" href="#"><span>马卡龙</span></a></dd>
																		<dd><a title="千层饼" href="#"><span>千层饼</span></a></dd>
																		<dd><a title="甜甜圈" href="#"><span>甜甜圈</span></a></dd>
																		<dd><a title="蒸三明治" href="#"><span>蒸三明治</span></a></dd>
																		<dd><a title="铜锣烧" href="#"><span>铜锣烧</span></a></dd>
																	</dl>
-->
                                                            </div>
                                                            <div class="brand-side">
                                                                <dl class="dl-sort"><dt><span>商品详情</span></dt>

                                                                    <?php
																		  echo "<dd><a rel='nofollow' title='呵官方旗舰店' target='_blank' href='". "show_introdution/".$row['bid']."' rel='nofollow'><span class='red' >前往商品详情页</span></a></dd>";
                                                                        ?>
                                                                        <!--
																		<dd><a title="今生只围你" target="_blank" href="#" rel="nofollow"><span >今生只围你</span></a></dd>
																		<dd><a title="忆佳人" target="_blank" href="#" rel="nofollow"><span  class="red" >忆佳人</span></a></dd>
																		<dd><a title="斐洱普斯" target="_blank" href="#" rel="nofollow"><span  class="red" >斐洱普斯</span></a></dd>
																		<dd><a title="聚百坊" target="_blank" href="#" rel="nofollow"><span  class="red" >聚百坊</span></a></dd>
																		<dd><a title="朵朵棉织直营店" target="_blank" href="#" rel="nofollow"><span >朵朵棉织直营店</span></a></dd>
-->
                                                                </dl>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <b class="arrow"></b>
                                        </li>
                                        <li>
                                            <div class="category-info">
                                                <h3 class="category-name b-category-name"><i><img src="/CodeIgniter-3.1.6/resource/images/package.png"></i><a class="ml-22" title="品牌、礼包">更多蛋糕</a></h3>
                                                <em>&gt;</em></div>
                                            <div class="menu-item menu-in top">
                                                <div class="area-in">
                                                    <div class="area-bg">
                                                        <div class="menu-srot">
                                                            <div class="sort-side">
                                                                <dl class="dl-sort">
                                                                    <dt><span title="大包装">更多蛋糕</span></dt>
                                                                    <?php
                                                                            
                                                                            while($rows = $queryR->unbuffered_row('array')){
                                                                                
                                                                                echo "<dd><a title='' href='show_introdution/".$rows['bid']."'><span>".$rows['bname']."</span></a></dd>";
                                                                            }
                                                                        ?>
                                                                        <!--
																		<dd><a title="蒸蛋糕" href="#"><span>蒸蛋糕</span></a></dd>
																		<dd><a title="脱水蛋糕" href="#"><span>脱水蛋糕</span></a></dd>
																		<dd><a title="瑞士卷" href="#"><span>瑞士卷</span></a></dd>
																		<dd><a title="软面包" href="#"><span>软面包</span></a></dd>
																		<dd><a title="马卡龙" href="#"><span>马卡龙</span></a></dd>
																		<dd><a title="千层饼" href="#"><span>千层饼</span></a></dd>
																		<dd><a title="甜甜圈" href="#"><span>甜甜圈</span></a></dd>
																		<dd><a title="蒸三明治" href="#"><span>蒸三明治</span></a></dd>
																		<dd><a title="铜锣烧" href="#"><span>铜锣烧</span></a></dd>
-->
                                                                </dl>
                                                                <!--
																	<dl class="dl-sort">
																		<dt><span title="两件套">两件套</span></dt>
																		<dd><a title="蒸蛋糕" href="#"><span>蒸蛋糕</span></a></dd>
																		<dd><a title="脱水蛋糕" href="#"><span>脱水蛋糕</span></a></dd>
																		<dd><a title="瑞士卷" href="#"><span>瑞士卷</span></a></dd>
																		<dd><a title="软面包" href="#"><span>软面包</span></a></dd>
																		<dd><a title="马卡龙" href="#"><span>马卡龙</span></a></dd>
																		<dd><a title="千层饼" href="#"><span>千层饼</span></a></dd>
																		<dd><a title="甜甜圈" href="#"><span>甜甜圈</span></a></dd>
																		<dd><a title="蒸三明治" href="#"><span>蒸三明治</span></a></dd>
																		<dd><a title="铜锣烧" href="#"><span>铜锣烧</span></a></dd>
																	</dl>
-->
                                                            </div>
                                                            <!--
																<div class="brand-side">
																	<dl class="dl-sort"><dt><span>实力商家</span></dt>
																		<dd><a title="琳琅鞋业" target="_blank" href="#" rel="nofollow"><span >琳琅鞋业</span></a></dd>
																		<dd><a title="宏利鞋业" target="_blank" href="#" rel="nofollow"><span >宏利鞋业</span></a></dd>
																		<dd><a title="比爱靓点鞋业" target="_blank" href="#" rel="nofollow"><span >比爱靓点鞋业</span></a></dd>
																		<dd><a title="浪人怪怪" target="_blank" href="#" rel="nofollow"><span >浪人怪怪</span></a></dd>
																	</dl>
																</div>
-->
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </li>

                                        <!--比较多的导航	-->
                                        <!--
											<li >
												<div class="category-info">
													<h3 class="category-name b-category-name"><i><img src="/CodeIgniter-3.1.6/resource/images/cookies.png"></i><a class="ml-22" title="饼干、膨化">饼干/膨化</a></h3>
													<em>&gt;</em></div>
												<div class="menu-item menu-in top">
													<div class="area-in">
														<div class="area-bg">
															<div class="menu-srot">
																<div class="sort-side">
																	<dl class="dl-sort">
																		<dt><span title="饼干">饼干</span></dt>
																		<dd><a title="蒸蛋糕" href="#"><span>蒸蛋糕</span></a></dd>
																		<dd><a title="脱水蛋糕" href="#"><span>脱水蛋糕</span></a></dd>
																		<dd><a title="瑞士卷" href="#"><span>瑞士卷</span></a></dd>
																		<dd><a title="软面包" href="#"><span>软面包</span></a></dd>
																		<dd><a title="马卡龙" href="#"><span>马卡龙</span></a></dd>
																	</dl>
																	<dl class="dl-sort">
																		<dt><span title="薯片">薯片</span></dt>
																		<dd><a title="蒸蛋糕" href="#"><span>蒸蛋糕</span></a></dd>
																		<dd><a title="脱水蛋糕" href="#"><span>脱水蛋糕</span></a></dd>
																		<dd><a title="瑞士卷" href="#"><span>瑞士卷</span></a></dd>
																		<dd><a title="软面包" href="#"><span>软面包</span></a></dd>
																		<dd><a title="马卡龙" href="#"><span>马卡龙</span></a></dd>
																		<dd><a title="千层饼" href="#"><span>千层饼</span></a></dd>
																		<dd><a title="甜甜圈" href="#"><span>甜甜圈</span></a></dd>
																		<dd><a title="蒸三明治" href="#"><span>蒸三明治</span></a></dd>
																		<dd><a title="铜锣烧" href="#"><span>铜锣烧</span></a></dd>
																	</dl>
																	<dl class="dl-sort">
																		<dt><span title="蛋糕">虾条</span></dt>
																		<dd><a title="蒸蛋糕" href="#"><span>蒸蛋糕</span></a></dd>
																		<dd><a title="脱水蛋糕" href="#"><span>脱水蛋糕</span></a></dd>
																		<dd><a title="瑞士卷" href="#"><span>瑞士卷</span></a></dd>
																		<dd><a title="软面包" href="#"><span>软面包</span></a></dd>
																		<dd><a title="马卡龙" href="#"><span>马卡龙</span></a></dd>
																		<dd><a title="千层饼" href="#"><span>千层饼</span></a></dd>
																		<dd><a title="甜甜圈" href="#"><span>甜甜圈</span></a></dd>
																		<dd><a title="蒸三明治" href="#"><span>蒸三明治</span></a></dd>
																		<dd><a title="铜锣烧" href="#"><span>铜锣烧</span></a></dd>
																	</dl>
																</div>
																<div class="brand-side">
																	<dl class="dl-sort"><dt><span>实力商家</span></dt>
																		<dd><a rel="nofollow" title="YYKCLOT" target="_blank" href="#" rel="nofollow"><span  class ="red" >YYKCLOT</span></a></dd>
																		<dd><a rel="nofollow" title="池氏品牌男装" target="_blank" href="#" rel="nofollow"><span  class ="red" >池氏品牌男装</span></a></dd>
																		<dd><a rel="nofollow" title="男装日志" target="_blank" href="#" rel="nofollow"><span >男装日志</span></a></dd>
																		<dd><a rel="nofollow" title="索比诺官方旗舰店" target="_blank" href="#" rel="nofollow"><span >索比诺官方旗舰店</span></a></dd>
																		<dd><a rel="nofollow" title="onTTno傲徒" target="_blank" href="#" rel="nofollow"><span  class ="red" >onTTno傲徒</span></a></dd>
																		<dd><a rel="nofollow" title="玛狮路男装旗舰店" target="_blank" href="#" rel="nofollow"><span >玛狮路男装旗舰店</span></a></dd>
																		<dd><a rel="nofollow" title="劳威特品牌男装" target="_blank" href="#" rel="nofollow"><span >劳威特品牌男装</span></a></dd>
																		<dd><a rel="nofollow" title="卡斯郎世家批发城" target="_blank" href="#" rel="nofollow"><span  class ="red" >卡斯郎世家批发城</span></a></dd>
																	</dl>
																</div>
															</div>
														</div>
													</div>
												</div>
                                             <b class="arrow"></b>
											</li>
-->
                                        <!--
											<li >
												<div class="category-info">
													<h3 class="category-name b-category-name"><i><img src="/CodeIgniter-3.1.6/resource/images/meat.png"></i><a class="ml-22" title="熟食、肉类">熟食/肉类</a></h3>
													<em>&gt;</em></div>
												<div class="menu-item menu-in top">
													<div class="area-in">
														<div class="area-bg">
															<div class="menu-srot">
																<div class="sort-side">
																	<dl class="dl-sort">
																		<dt><span title="猪肉脯">猪肉脯</span></dt>
																		<dd><a title="蒸蛋糕" href="#"><span>蒸蛋糕</span></a></dd>
																		<dd><a title="脱水蛋糕" href="#"><span>脱水蛋糕</span></a></dd>
																		<dd><a title="瑞士卷" href="#"><span>瑞士卷</span></a></dd>
																		<dd><a title="软面包" href="#"><span>软面包</span></a></dd>
																		<dd><a title="马卡龙" href="#"><span>马卡龙</span></a></dd>
																	</dl>
																	<dl class="dl-sort">
																		<dt><span title="牛肉丝">牛肉丝</span></dt>
																		<dd><a title="蒸蛋糕" href="#"><span>蒸蛋糕</span></a></dd>
																		<dd><a title="脱水蛋糕" href="#"><span>脱水蛋糕</span></a></dd>
																		<dd><a title="瑞士卷" href="#"><span>瑞士卷</span></a></dd>
																		<dd><a title="软面包" href="#"><span>软面包</span></a></dd>
																		<dd><a title="马卡龙" href="#"><span>马卡龙</span></a></dd>
																	</dl>
																	<dl class="dl-sort">
																		<dt><span title="小香肠">小香肠</span></dt>
																		<dd><a title="蒸蛋糕" href="#"><span>蒸蛋糕</span></a></dd>
																		<dd><a title="脱水蛋糕" href="#"><span>脱水蛋糕</span></a></dd>
																		<dd><a title="瑞士卷" href="#"><span>瑞士卷</span></a></dd>
																		<dd><a title="软面包" href="#"><span>软面包</span></a></dd>
																		<dd><a title="铜锣烧" href="#"><span>铜锣烧</span></a></dd>
																	</dl>
																</div>
																<div class="brand-side">
																	<dl class="dl-sort"><dt><span>实力商家</span></dt>
																		<dd><a rel="nofollow" title="花颜巧语 " target="_blank" href="#" rel="nofollow"><span  class="red" >花颜巧语 </span></a></dd>
																		<dd><a rel="nofollow" title="糖衣小屋" target="_blank" href="#" rel="nofollow"><span >糖衣小屋</span></a></dd>
																		<dd><a rel="nofollow" title="卡拉迪克  " target="_blank" href="#" rel="nofollow"><span  class="red" >卡拉迪克  </span></a></dd>
																		<dd><a rel="nofollow" title="暖春童话 " target="_blank" href="#" rel="nofollow"><span >暖春童话 </span></a></dd>
																		<dd><a rel="nofollow" title="华盛童装批发行 " target="_blank" href="#" rel="nofollow"><span >华盛童装批发行 </span></a></dd>
																		<dd><a rel="nofollow" title="奈仕华童装旗舰店" target="_blank" href="#" rel="nofollow"><span >奈仕华童装旗舰店</span></a></dd>
																		<dd><a rel="nofollow" title="斑蒂尼BONDYNI" target="_blank" href="#" rel="nofollow"><span  class="red" >斑蒂尼BONDYNI</span></a></dd>
																		<dd><a rel="nofollow" title="猫儿朵朵 " target="_blank" href="#" rel="nofollow"><span >猫儿朵朵 </span></a></dd>
																		<dd><a rel="nofollow" title="童衣阁" target="_blank" href="#" rel="nofollow"><span  class="red" >童衣阁</span></a></dd>
																	</dl>
																</div>
															</div>
														</div>
													</div>
												</div>
                                            <b class="arrow"></b>
											</li>
-->
                                        <!--
											<li >
												<div class="category-info">
													<h3 class="category-name b-category-name"><i><img src="/CodeIgniter-3.1.6/resource/images/bamboo.png"></i><a class="ml-22" title="素食、卤味">素食/卤味</a></h3>
													<em>&gt;</em></div>
												<div class="menu-item menu-in top">
													<div class="area-in">
														<div class="area-bg">
															<div class="menu-srot">
																<div class="sort-side">
																	<dl class="dl-sort">
																		<dt><span title="豆干">豆干</span></dt>
																		<dd><a title="蒸蛋糕" href="#"><span>蒸蛋糕</span></a></dd>
																		<dd><a title="脱水蛋糕" href="#"><span>脱水蛋糕</span></a></dd>
																		<dd><a title="瑞士卷" href="#"><span>瑞士卷</span></a></dd>
																		<dd><a title="铜锣烧" href="#"><span>铜锣烧</span></a></dd>
																	</dl>
																	<dl class="dl-sort">
																		<dt><span title="干笋">干笋</span></dt>
																		<dd><a title="蒸蛋糕" href="#"><span>蒸蛋糕</span></a></dd>
																		<dd><a title="脱水蛋糕" href="#"><span>脱水蛋糕</span></a></dd>
																		<dd><a title="瑞士卷" href="#"><span>瑞士卷</span></a></dd>
																		<dd><a title="铜锣烧" href="#"><span>铜锣烧</span></a></dd>
																	</dl>
																	<dl class="dl-sort">
																		<dt><span title="鸭脖">鸭脖</span></dt>
																		<dd><a title="蒸蛋糕" href="#"><span>蒸蛋糕</span></a></dd>
																		<dd><a title="脱水蛋糕" href="#"><span>脱水蛋糕</span></a></dd>
																		<dd><a title="瑞士卷" href="#"><span>瑞士卷</span></a></dd>
																		<dd><a title="软面包" href="#"><span>软面包</span></a></dd>
																		<dd><a title="马卡龙" href="#"><span>马卡龙</span></a></dd>
																		<dd><a title="千层饼" href="#"><span>千层饼</span></a></dd>
																		<dd><a title="甜甜圈" href="#"><span>甜甜圈</span></a></dd>
																		<dd><a title="蒸三明治" href="#"><span>蒸三明治</span></a></dd>
																		<dd><a title="铜锣烧" href="#"><span>铜锣烧</span></a></dd>
																	</dl>
																</div>
																<div class="brand-side">
																	<dl class="dl-sort"><dt><span>实力商家</span></dt>
																		<dd><a rel="nofollow" title="歌芙品牌旗舰店" target="_blank" href="#" rel="nofollow"><span  class="red" >歌芙品牌旗舰店</span></a></dd>
																		<dd><a rel="nofollow" title="爱丝蓝内衣厂" target="_blank" href="#" rel="nofollow"><span >爱丝蓝内衣厂</span></a></dd>
																		<dd><a rel="nofollow" title="香港优蓓尔防辐射" target="_blank" href="#" rel="nofollow"><span >香港优蓓尔防辐射</span></a></dd>
																		<dd><a rel="nofollow" title="蓉莉娜内衣批发" target="_blank" href="#" rel="nofollow"><span >蓉莉娜内衣批发</span></a></dd>
																	</dl>
																</div>
															</div>
														</div>
													</div>
												</div>
                                             <b class="arrow"></b>
											</li>
											<li>
												<div class="category-info">
													<h3 class="category-name b-category-name"><i><img src="/CodeIgniter-3.1.6/resource/images/nut.png"></i><a class="ml-22" title="坚果、炒货">坚果/炒货</a></h3>
													<em>&gt;</em></div>
												<div class="menu-item menu-in top">
													<div class="area-in">
														<div class="area-bg">
															<div class="menu-srot">
																<div class="sort-side">
																	<dl class="dl-sort">
																		<dt><span title="蛋糕">坚果</span></dt>
																		<dd><a title="蒸蛋糕" href="#"><span>蒸蛋糕</span></a></dd>
																		<dd><a title="脱水蛋糕" href="#"><span>脱水蛋糕</span></a></dd>
																		<dd><a title="瑞士卷" href="#"><span>瑞士卷</span></a></dd>
																		<dd><a title="软面包" href="#"><span>软面包</span></a></dd>
																		<dd><a title="马卡龙" href="#"><span>马卡龙</span></a></dd>
																		<dd><a title="千层饼" href="#"><span>千层饼</span></a></dd>
																		<dd><a title="甜甜圈" href="#"><span>甜甜圈</span></a></dd>
																		<dd><a title="蒸三明治" href="#"><span>蒸三明治</span></a></dd>
																		<dd><a title="铜锣烧" href="#"><span>铜锣烧</span></a></dd>
																	</dl>
																	<dl class="dl-sort">
																		<dt><span title="蛋糕">锅巴</span></dt>
																		<dd><a title="蒸蛋糕" href="#"><span>蒸蛋糕</span></a></dd>
																		<dd><a title="脱水蛋糕" href="#"><span>脱水蛋糕</span></a></dd>
																		<dd><a title="瑞士卷" href="#"><span>瑞士卷</span></a></dd>
																		<dd><a title="软面包" href="#"><span>软面包</span></a></dd>
																		<dd><a title="马卡龙" href="#"><span>马卡龙</span></a></dd>
																		<dd><a title="千层饼" href="#"><span>千层饼</span></a></dd>
																		<dd><a title="甜甜圈" href="#"><span>甜甜圈</span></a></dd>
																		<dd><a title="蒸三明治" href="#"><span>蒸三明治</span></a></dd>
																		<dd><a title="铜锣烧" href="#"><span>铜锣烧</span></a></dd>
																	</dl>
																</div>
																<div class="brand-side">
																	<dl class="dl-sort"><dt><span>实力商家</span></dt>
																		<dd><a rel="nofollow" title="呵呵嘿官方旗舰店" target="_blank" href="#" rel="nofollow"><span  class="red" >呵呵嘿官方旗舰店</span></a></dd>
																		<dd><a rel="nofollow" title="格瑞旗舰店" target="_blank" href="#" rel="nofollow"><span >格瑞旗舰店</span></a></dd>
																		<dd><a rel="nofollow" title="飞彦大厂直供" target="_blank" href="#" rel="nofollow"><span  class="red" >飞彦大厂直供</span></a></dd>
																		<dd><a rel="nofollow" title="红e·艾菲妮" target="_blank" href="#" rel="nofollow"><span >红e·艾菲妮</span></a></dd>
																		<dd><a rel="nofollow" title="本真旗舰店" target="_blank" href="#" rel="nofollow"><span  class="red" >本真旗舰店</span></a></dd>
																		<dd><a rel="nofollow" title="杭派女装批发网" target="_blank" href="#" rel="nofollow"><span  class="red" >杭派女装批发网</span></a></dd>
																		<dd><a rel="nofollow" title="华伊阁旗舰店" target="_blank" href="#" rel="nofollow"><span >华伊阁旗舰店</span></a></dd>
																		<dd><a rel="nofollow" title="独家折扣旗舰店" target="_blank" href="#" rel="nofollow"><span >独家折扣旗舰店</span></a></dd>
																	</dl>
																</div>
															</div>
														</div>
													</div>
												</div>
												<b class="arrow"></b>
											</li>											
															<li >
												<div class="category-info">
													<h3 class="category-name b-category-name"><i><img src="/CodeIgniter-3.1.6/resource/images/candy.png"></i><a class="ml-22" title="糖果、蜜饯">糖果/蜜饯</a></h3>
													<em>&gt;</em></div>
												<div class="menu-item menu-in top">
													<div class="area-in">
														<div class="area-bg">
															<div class="menu-srot">
																<div class="sort-side">
																	<dl class="dl-sort">
																		<dt><span title="糖果">糖果</span></dt>
																		<dd><a title="蒸蛋糕" href="#"><span>蒸蛋糕</span></a></dd>
																		<dd><a title="脱水蛋糕" href="#"><span>脱水蛋糕</span></a></dd>
																		<dd><a title="瑞士卷" href="#"><span>瑞士卷</span></a></dd>
																		<dd><a title="软面包" href="#"><span>软面包</span></a></dd>
																		<dd><a title="马卡龙" href="#"><span>马卡龙</span></a></dd>
																		<dd><a title="千层饼" href="#"><span>千层饼</span></a></dd>
																		<dd><a title="甜甜圈" href="#"><span>甜甜圈</span></a></dd>
																		<dd><a title="蒸三明治" href="#"><span>蒸三明治</span></a></dd>
																		<dd><a title="铜锣烧" href="#"><span>铜锣烧</span></a></dd>
																	</dl>
																	<dl class="dl-sort">
																		<dt><span title="蜜饯">蜜饯</span></dt>
																		<dd><a title="猕猴桃干" href="#"><span>猕猴桃干</span></a></dd>
																		<dd><a title="糖樱桃" href="#"><span>糖樱桃</span></a></dd>
																		<dd><a title="瑞士卷" href="#"><span>瑞士卷</span></a></dd>
																		<dd><a title="软面包" href="#"><span>软面包</span></a></dd>
																		<dd><a title="马卡龙" href="#"><span>马卡龙</span></a></dd>
																		<dd><a title="千层饼" href="#"><span>千层饼</span></a></dd>
																		<dd><a title="甜甜圈" href="#"><span>甜甜圈</span></a></dd>
																		<dd><a title="蒸三明治" href="#"><span>蒸三明治</span></a></dd>
																		<dd><a title="铜锣烧" href="#"><span>铜锣烧</span></a></dd>
																	</dl>
																</div>
																<div class="brand-side">
																	<dl class="dl-sort"><dt><span>实力商家</span></dt>
																		<dd><a rel="nofollow" title="YYKCLOT" target="_blank" href="#" rel="nofollow"><span  class ="red" >YYKCLOT</span></a></dd>
																		<dd><a rel="nofollow" title="池氏品牌男装" target="_blank" href="#" rel="nofollow"><span  class ="red" >池氏品牌男装</span></a></dd>
																		<dd><a rel="nofollow" title="男装日志" target="_blank" href="#" rel="nofollow"><span >男装日志</span></a></dd>
																		<dd><a rel="nofollow" title="索比诺官方旗舰店" target="_blank" href="#" rel="nofollow"><span >索比诺官方旗舰店</span></a></dd>
																		<dd><a rel="nofollow" title="onTTno傲徒" target="_blank" href="#" rel="nofollow"><span  class ="red" >onTTno傲徒</span></a></dd>
																		<dd><a rel="nofollow" title="卡斯郎世家批发城" target="_blank" href="#" rel="nofollow"><span  class ="red" >卡斯郎世家批发城</span></a></dd>
																	</dl>
																</div>
															</div>
														</div>
													</div>
												</div>
                                            <b class="arrow"></b>
											</li>
-->
                                        <!--
											<li >
												<div class="category-info">
													<h3 class="category-name b-category-name"><i><img src="/CodeIgniter-3.1.6/resource/images/chocolate.png"></i><a class="ml-22" title="巧克力">巧克力</a></h3>
													<em>&gt;</em></div>
												<div class="menu-item menu-in top">
													<div class="area-in">
														<div class="area-bg">
															<div class="menu-srot">
																<div class="sort-side">
																	<dl class="dl-sort">
																		<dt><span title="蛋糕">巧克力</span></dt>
																		<dd><a title="蒸蛋糕" href="#"><span>蒸蛋糕</span></a></dd>
																		<dd><a title="脱水蛋糕" href="#"><span>脱水蛋糕</span></a></dd>
																		<dd><a title="瑞士卷" href="#"><span>瑞士卷</span></a></dd>
																		<dd><a title="软面包" href="#"><span>软面包</span></a></dd>
																		<dd><a title="马卡龙" href="#"><span>马卡龙</span></a></dd>
																		<dd><a title="千层饼" href="#"><span>千层饼</span></a></dd>
																		<dd><a title="甜甜圈" href="#"><span>甜甜圈</span></a></dd>
																		<dd><a title="蒸三明治" href="#"><span>蒸三明治</span></a></dd>
																		<dd><a title="铜锣烧" href="#"><span>铜锣烧</span></a></dd>
																	</dl>
																	<dl class="dl-sort">
																		<dt><span title="蛋糕">果冻</span></dt>
																		<dd><a title="蒸蛋糕" href="#"><span>蒸蛋糕</span></a></dd>
																		<dd><a title="脱水蛋糕" href="#"><span>脱水蛋糕</span></a></dd>
																		<dd><a title="瑞士卷" href="#"><span>瑞士卷</span></a></dd>
																		<dd><a title="软面包" href="#"><span>软面包</span></a></dd>
																		<dd><a title="马卡龙" href="#"><span>马卡龙</span></a></dd>
																		<dd><a title="千层饼" href="#"><span>千层饼</span></a></dd>
																		<dd><a title="甜甜圈" href="#"><span>甜甜圈</span></a></dd>
																		<dd><a title="蒸三明治" href="#"><span>蒸三明治</span></a></dd>
																		<dd><a title="铜锣烧" href="#"><span>铜锣烧</span></a></dd>
																	</dl>
																</div>
																<div class="brand-side">
																	<dl class="dl-sort"><dt><span>实力商家</span></dt>
																		<dd><a rel="nofollow" title="花颜巧语 " target="_blank" href="#" rel="nofollow"><span  class="red" >花颜巧语 </span></a></dd>
																		<dd><a rel="nofollow" title="糖衣小屋" target="_blank" href="#" rel="nofollow"><span >糖衣小屋</span></a></dd>
																		<dd><a rel="nofollow" title="卡拉迪克  " target="_blank" href="#" rel="nofollow"><span  class="red" >卡拉迪克  </span></a></dd>
																		<dd><a rel="nofollow" title="暖春童话 " target="_blank" href="#" rel="nofollow"><span >暖春童话 </span></a></dd>
																		<dd><a rel="nofollow" title="华盛童装批发行 " target="_blank" href="#" rel="nofollow"><span >华盛童装批发行 </span></a></dd>
																		<dd><a rel="nofollow" title="奈仕华童装旗舰店" target="_blank" href="#" rel="nofollow"><span >奈仕华童装旗舰店</span></a></dd>
																		<dd><a rel="nofollow" title="斑蒂尼BONDYNI" target="_blank" href="#" rel="nofollow"><span  class="red" >斑蒂尼BONDYNI</span></a></dd>
																		<dd><a rel="nofollow" title="童衣阁" target="_blank" href="#" rel="nofollow"><span  class="red" >童衣阁</span></a></dd>
																	</dl>
																</div>
															</div>
														</div>
													</div>
												</div>
												<b class="arrow"></b>
											</li>
-->

                                    </ul>
                                </div>
                            </div>

                        </div>
                    </div>
                    <!--导航 -->
                    <script type="text/javascript">
                        (function() {
                            $('.am-slider').flexslider();
                        });
                        $(document).ready(function() {
                            $("li").hover(function() {
                                $(".category-content .category-list li.first .menu-in").css("display", "none");
                                $(".category-content .category-list li.first").removeClass("hover");
                                $(this).addClass("hover");
                                $(this).children("div.menu-in").css("display", "block")
                            }, function() {
                                $(this).removeClass("hover")
                                $(this).children("div.menu-in").css("display", "none")
                            });
                        })

                    </script>


                    <!--小导航 -->
                    <div class="am-g am-g-fixed smallnav">
                        <div class="am-u-sm-3">
                            <a href="sort.html"><img src="/CodeIgniter-3.1.6/resource/images/navsmall.jpg" />
								<div class="title">商品分类</div>
							</a>
                        </div>
                        <div class="am-u-sm-3">
                            <a href="#"><img src="/CodeIgniter-3.1.6/resource/images/huismall.jpg" />
								<div class="title">大聚惠</div>
							</a>
                        </div>
                        <div class="am-u-sm-3">
                            <a href="#"><img src="/CodeIgniter-3.1.6/resource/images/mansmall.jpg" />
								<div class="title">个人中心</div>
							</a>
                        </div>
                        <div class="am-u-sm-3">
                            <a href="#"><img src="/CodeIgniter-3.1.6/resource/images/moneysmall.jpg" />
								<div class="title">投资理财</div>
							</a>
                        </div>
                    </div>


                    <!--各类活动-->
                    <!--
				<div class="row">
					<li><a><img src="/CodeIgniter-3.1.6/resource/images/row1.jpg"/></a></li>
					<li><a><img src="/CodeIgniter-3.1.6/resource/images/row2.jpg"/></a></li>
					<li><a><img src="/CodeIgniter-3.1.6/resource/images/row3.jpg"/></a></li>
					<li><a><img src="/CodeIgniter-3.1.6/resource/images/row4.jpg"/></a></li>
				</div>
-->
                    <div class="clear"></div>
                    <!--走马灯 -->

                    <div class="marqueenTwo">
                        <span class="marqueen-title"><i class="am-icon-volume-up am-icon-fw"></i>店主提醒<em class="am-icon-angle-double-right"></em></span>
                        <div class="demo">

                            <ul>
<!--
                                <li class="title-first"><a target="_blank" href="#">
									<img src="/CodeIgniter-3.1.6/resource/images/TJ2.jpg"></img>
									<span>[特惠]</span>洋河年末大促，低至两件五折							
								</a></li>
                                <li class="title-first"><a target="_blank" href="#">
									<span>[公告]</span>商城与广州市签署战略合作协议
								     <img src="/CodeIgniter-3.1.6/resource/images/TJ.jpg"></img>
								     <p>XXXXXXXXXXXXXXXXXX</p>
							    </a></li>
-->
                                <li><a target="_blank" ><span>[问候]</span>祝大家新的一年元气满满！</a></li>
                                <li><a target="_blank" ><span>[公告]</span>2018年7月暂不配送蛋糕。请谅解。</a></li>
                                <li><a target="_blank" ><span>[特惠]</span>新年蛋糕9折起！</a></li>
                                <li><a target="_blank" ><span>[特惠]</span>新年新优惠！</a></li>
                                <li><a target="_blank" ><span>[公告]</span>敬请期待新年蛋糕！</a></li>

                            </ul>

                        </div>
                    </div>
                    <div class="clear"></div>

            </div>



            <script type="text/javascript">
                if ($(window).width() < 640) {
                    function autoScroll(obj) {
                        $(obj).find("ul").animate({
                            marginTop: "-39px"
                        }, 500, function() {
                            $(this).css({
                                marginTop: "0px"
                            }).find("li:first").appendTo(this);
                        })
                    }
                    $(function() {
                        setInterval('autoScroll(".demo")', 3000);
                    })
                }

            </script>
        </div>
        <div class="shopMainbg">
            <div class="shopMain" id="shopmain">

                <!--热门活动 -->

                <!--
					<div class="am-container">
					
                     <div class="sale-mt">
		                   <i></i>
		                   <em class="sale-title">期末限时秒杀</em>
		                   <div class="s-time" id="countdown">
			                    <span class="hh">01</span>
			                    <span class="mm">20</span>
			                    <span class="ss">59</span>
		                   </div>
	                  </div>

					
					  <div class="am-g am-g-fixed sale">
						<div class="am-u-sm-3 sale-item">
							<div class="s-img">
								<a href="# "><img src="/CodeIgniter-3.1.6/resource/images/sale3.jpg" /></a>
							</div>
                           <div class="s-info">
                           	   <a href="#"><p class="s-title">ZEK 洗面奶</p></a>
                           	   <div class="s-price">￥<b>9.90</b>
                           	   	  <a class="s-buy" href="#">秒杀</a>
                           	   </div>                          	  
                           </div>								
						</div>
						
						<div class="am-u-sm-3 sale-item">
							<div class="s-img">
								<a href="# "><img src="/CodeIgniter-3.1.6/resource/images/sale2.jpg" /></a>
							</div>
                           <div class="s-info">
                           	   <a href="#"><p class="s-title">原木纯品纸巾</p></a>
                           	   <div class="s-price">￥<b>9.90</b>
                           	   	  <a class="s-buy" href="#">秒杀</a>
                           	   </div>                          	  
                           </div>								
						</div>					
						
						<div class="am-u-sm-3 sale-item">
							<div class="s-img">
								<a href="# "><img src="/CodeIgniter-3.1.6/resource/images/sale1.jpg" /></a>
							</div>
                           <div class="s-info">
                           	   <a href="#"><p class="s-title">葡萄干</p></a>
                           	   <div class="s-price">￥<b>9.90</b>
                           	   	  <a class="s-buy" href="#">秒杀</a>
                           	   </div>                          	  
                           </div>								
						</div>
						
						<div class="am-u-sm-3 sale-item">
							<div class="s-img">
								<a href="# "><img src="/CodeIgniter-3.1.6/resource/images/sale2.jpg " /></a>
							</div>
                           <div class="s-info">
                           	   <a href="#"><p class="s-title">巧克力</p></a>
                           	   <div class="s-price">￥<b>9.90</b>
                           	   	  <a class="s-buy" href="#">秒杀</a>
                           	   </div>                          	  
                           </div>								
						</div>
						
					  </div>
                   </div>
-->

                <?php
                        
                        $queryL = $this->db->query('select * from BirthdayCakes order by f_sale(bid) desc');
                        $rowL = $queryL->unbuffered_row('array');
                    ?>
                    <div class="clear "></div>
                    <div class="f1">
                        <!--甜点-->

                        <div class="am-container ">
                            <div class="shopTitle ">
                                <h4 class="floor-title">推荐</h4>
                                <div class="floor-subtitle"><em class="am-icon-caret-left"></em>
                                    <h3>每一份蛋糕都有一个甜蜜的故事</h3>
                                </div>
                                <!--
							<div class="today-brands " style="right:0px ;top:13px;">
								<a href="# ">桂花糕</a>|
								<a href="# ">奶皮酥</a>|
								<a href="# ">栗子糕 </a>|
								<a href="# ">马卡龙</a>|
								<a href="# ">铜锣烧</a>|
								<a href="# ">豌豆黄</a>
							</div>
-->

                            </div>
                        </div>

                        <div class="am-g am-g-fixed floodSix ">
                            <div class="am-u-sm-5 am-u-md-3 text-one list">
                                <!--
							<div class="word">
								<a class="outer" href="#"><span class="inner"><b class="text">核桃</b></span></a>
								<a class="outer" href="#"><span class="inner"><b class="text">核桃</b></span></a>
								<a class="outer" href="#"><span class="inner"><b class="text">核桃</b></span></a>	
								<a class="outer" href="#"><span class="inner"><b class="text">核桃</b></span></a>
								<a class="outer" href="#"><span class="inner"><b class="text">核桃</b></span></a>
								<a class="outer" href="#"><span class="inner"><b class="text">核桃</b></span></a>	
								<a class="outer" href="#"><span class="inner"><b class="text">核桃</b></span></a>
								<a class="outer" href="#"><span class="inner"><b class="text">核桃</b></span></a>
								<a class="outer" href="#"><span class="inner"><b class="text">核桃</b></span></a>								
							</div>							
-->
                                <?php
                                
                                echo "<a href='show_introdution/".$rowL['bid']."'>";
                                echo "<img src='/CodeIgniter-3.1.6/resource/images/".$rowL['bname']."_mid.jpg' />";
                            ?>
<!--                                    <img src="/CodeIgniter-3.1.6/resource/images/$rowL['bname'].jpg" />-->
                                    <div class="outer-con ">
                                        <div class="title ">
                                            <?php echo $rowL['bname']; ?>
                                        </div>
                                        <div class="sub-title ">
                                            ¥
                                            <?php echo $rowL['bprice']; ?>
                                        </div>
                                    </div>
                                    </a>
                                    <div class="triangle-topright"></div>
                            </div>

                            <div class="am-u-sm-7 am-u-md-5 am-u-lg-2 text-two big">

                                <div class="outer-con ">
                                    <div class="title ">
                                        <?php $rowL = $queryL->unbuffered_row('array'); echo $rowL['bname']; ?>
                                    </div>
                                    <div class="sub-title ">
                                        ¥
                                        <?php echo $rowL['bprice']; ?>
                                    </div>

                                </div>
                                <?php
								echo "<a href='show_introdution/".$rowL['bid']."'><img src='/CodeIgniter-3.1.6/resource/images/".$rowL['bname']."_show.jpg' /></a>";
                            ?>
                            </div>

                            <li>
                                <div class="am-u-md-2 am-u-lg-2 text-three">
                                    <div class="boxLi"></div>
                                    <div class="outer-con ">
                                        <div class="title ">
                                            <?php $rowL = $queryL->unbuffered_row('array'); echo $rowL['bname']; ?>
                                        </div>
                                        <div class="sub-title ">
                                            ¥
                                            <?php echo $rowL['bprice']; ?>
                                        </div>

                                    </div>
                                    <?php
								echo "<a href='show_introdution/".$rowL['bid']."'><img src='/CodeIgniter-3.1.6/resource/images/".$rowL['bname'].".jpg' /></a>";
                            ?>
                                </div>
                            </li>
                            <li>
                                <div class="am-u-md-2 am-u-lg-2 text-three sug">
                                    <div class="boxLi"></div>
                                    <div class="outer-con ">
                                        <div class="title ">
                                            <?php $rowL = $queryL->unbuffered_row('array'); echo $rowL['bname']; ?>
                                        </div>
                                        <div class="sub-title ">
                                            ¥
                                            <?php echo $rowL['bprice']; ?>
                                        </div>

                                    </div>
                                    <?php
								echo "<a href='show_introdution/".$rowL['bid']."'><img src='/CodeIgniter-3.1.6/resource/images/".$rowL['bname'].".jpg' /></a>";
                            ?>
                                </div>
                            </li>
                            <li>
                                <div class="am-u-sm-4 am-u-md-5 am-u-lg-4 text-five">
                                    <div class="boxLi"></div>
                                    <div class="outer-con ">
                                        <div class="title ">
                                            <?php $rowL = $queryL->unbuffered_row('array'); echo $rowL['bname']; ?>
                                        </div>
                                        <div class="sub-title ">
                                            ¥
                                            <?php echo $rowL['bprice']; ?>
                                        </div>

                                    </div>
                                    <?php
								echo "<a href='show_introdution/".$rowL['bid']."'><img src='/CodeIgniter-3.1.6/resource/images/".$rowL['bname'].".jpg' /></a>";
                            ?>
                                </div>
                            </li>
                            <li>
                                <div class="am-u-sm-4 am-u-md-2 am-u-lg-2 text-six">
                                    <div class="boxLi"></div>
                                    <div class="outer-con ">
                                        <div class="title ">
                                            <?php $rowL = $queryL->unbuffered_row('array'); echo $rowL['bname']; ?>
                                        </div>
                                        <div class="sub-title ">
                                            ¥
                                            <?php echo $rowL['bprice']; ?>
                                        </div>

                                    </div>
                                    <?php
								echo "<a href='show_introdution/".$rowL['bid']."'><img src='/CodeIgniter-3.1.6/resource/images/".$rowL['bname']."_mid.jpg' /></a>";
                            ?>
                                </div>
                            </li>
                            <li>
                                <div class="am-u-sm-4 am-u-md-2 am-u-lg-4 text-six">
                                    <div class="boxLi"></div>
                                    <div class="outer-con ">
                                        <div class="title ">
                                            <?php $rowL = $queryL->unbuffered_row('array'); echo $rowL['bname']; ?>
                                        </div>
                                        <div class="sub-title ">
                                            ¥
                                            <?php echo $rowL['bprice']; ?>
                                        </div>

                                    </div>
                                    <?php
								echo "<a href='show_introdution/".$rowL['bid']."'><img src='/CodeIgniter-3.1.6/resource/images/".$rowL['bname'].".jpg' /></a>";
                            ?>
                                </div>
                            </li>
                        </div>

                        <div class="clear "></div>
                    </div>
                    <div class="f2">

                        <!--坚果-->
                        <div class="am-container ">
                            <div class="shopTitle ">
                                <h4 class="floor-title">热销</h4>
                                <div class="floor-subtitle"><em class="am-icon-caret-left"></em>
                                    <h3>大家甜，才是真的甜</h3>
                                </div>
                                <!--
							<div class="today-brands " style="right:0px ;top:13px">
								<a href="# ">腰果</a>|
								<a href="# ">松子</a>|
								<a href="# ">夏威夷果 </a>|
								<a href="# ">碧根果</a>|
								<a href="# ">开心果</a>|
								<a href="# ">核桃仁</a>
							</div>
-->
                            </div>
                        </div>
                        <div class="am-g am-g-fixed floodSeven">
                            <div class="am-u-sm-5 am-u-md-4 text-one list ">
                                <!--
							<div class="word">
								<a class="outer" href="#"><span class="inner"><b class="text">核桃</b></span></a>
								<a class="outer" href="#"><span class="inner"><b class="text">核桃</b></span></a>
								<a class="outer" href="#"><span class="inner"><b class="text">核桃</b></span></a>	
								<a class="outer" href="#"><span class="inner"><b class="text">核桃</b></span></a>
								<a class="outer" href="#"><span class="inner"><b class="text">核桃</b></span></a>
								<a class="outer" href="#"><span class="inner"><b class="text">核桃</b></span></a>
								<a class="outer" href="#"><span class="inner"><b class="text">核桃</b></span></a>
								<a class="outer" href="#"><span class="inner"><b class="text">核桃</b></span></a>
								<a class="outer" href="#"><span class="inner"><b class="text">核桃</b></span></a>								
							</div>
-->
                            <?php
                                $rowL = $queryL->unbuffered_row('array');
                                echo "<a href='show_introdution/".$rowL['bid']."'>";
                            ?>
                                    <div class="outer-con ">
                                        <div class="title ">
                                            <?php echo $rowL['bname']; ?>
                                        </div>
                                        <div class="sub-title ">
                                            ¥
                                            <?php echo $rowL['bprice']; ?>
                                        </div>
                                    </div>
                                <?php
                                    echo "<img src='/CodeIgniter-3.1.6/resource/images/".$rowL['bname']."_mid.jpg' />";
                                ?>
                                    </a>
                                    <div class="triangle-topright"></div>
                            </div>

                            <div class="am-u-sm-7 am-u-md-4 text-two big">

                                <div class="outer-con ">
                                    <div class="title ">
                                        <?php $rowL = $queryL->unbuffered_row('array'); echo $rowL['bname']; ?>
                                    </div>
                                    <div class="sub-title ">
                                        ¥
                                        <?php echo $rowL['bprice']; ?>
                                    </div>

                                </div>
                                <?php
                                
								    echo "<a href='show_introdution/".$rowL['bid']."'><img src='/CodeIgniter-3.1.6/resource/images/".$rowL['bname']."_mid.jpg' /></a>";
                                ?>

                            </div>

                            <li>
                                <div class="am-u-sm-7 am-u-md-4 text-two">
                                    <div class="boxLi"></div>
                                    <div class="outer-con ">
                                        <div class="title ">
                                            <?php $rowL = $queryL->unbuffered_row('array'); echo $rowL['bname']; ?>
                                        </div>
                                        <div class="sub-title ">
                                            ¥
                                            <?php echo $rowL['bprice']; ?>
                                        </div>

                                    </div>
                                    <?php
                                
								    echo "<a href='show_introdution/".$rowL['bid']."'><img src='/CodeIgniter-3.1.6/resource/images/".$rowL['bname']."_mid.jpg' /></a>";
                                ?>
                                </div>
                            </li>
                            <li>
                                <div class="am-u-sm-3 am-u-md-2 text-three sug">
                                    <div class="boxLi"></div>
                                    <div class="outer-con ">
                                        <div class="title ">
                                            <?php $rowL = $queryL->unbuffered_row('array'); echo $rowL['bname']; ?>
                                        </div>
                                        <div class="sub-title ">
                                            ¥
                                            <?php echo $rowL['bprice']; ?>
                                        </div>

                                    </div>
                                    <?php
                                
								echo "<a href='show_introdution/".$rowL['bid']."'><img src='/CodeIgniter-3.1.6/resource/images/".$rowL['bname']."_mid.jpg' /></a>";
                            ?>
                                </div>
                            </li>
                            <li>
                                <div class="am-u-sm-3 am-u-md-2 text-three big">
                                    <div class="boxLi"></div>
                                    <div class="outer-con ">
                                        <div class="title ">
                                            <?php $rowL = $queryL->unbuffered_row('array'); echo $rowL['bname']; ?>
                                        </div>
                                        <div class="sub-title ">
                                            ¥
                                            <?php echo $rowL['bprice']; ?>
                                        </div>

                                    </div>
                                    <?php
                                
								echo "<a href='show_introdution/".$rowL['bid']."'><img src='/CodeIgniter-3.1.6/resource/images/".$rowL['bname']."_mid.jpg' /></a>";
                            ?>
                                </div>
                            </li>
                            <li>
                                <div class="am-u-sm-3 am-u-md-2 text-three ">
                                    <div class="boxLi"></div>
                                    <div class="outer-con ">
                                        <div class="title ">
                                            <?php $rowL = $queryL->unbuffered_row('array'); echo $rowL['bname']; ?>
                                        </div>
                                        <div class="sub-title ">
                                            ¥
                                            <?php echo $rowL['bprice']; ?>
                                        </div>

                                    </div>
                                    <?php
                                
								echo "<a href='show_introdution/".$rowL['bid']."'><img src='/CodeIgniter-3.1.6/resource/images/".$rowL['bname']."_mid.jpg' /></a>";
                            ?>
                                </div>
                            </li>
                            <li>
                                <div class="am-u-sm-3 am-u-md-2 text-three ">
                                    <div class="boxLi"></div>
                                    <div class="outer-con ">
                                        <div class="title ">
                                            <?php $rowL = $queryL->unbuffered_row('array'); echo $rowL['bname']; ?>
                                        </div>
                                        <div class="sub-title ">
                                            ¥
                                            <?php echo $rowL['bprice']; ?>
                                        </div>

                                    </div>
                                    <?php
                                
								echo "<a href='show_introdution/".$rowL['bid']."'><img src='/CodeIgniter-3.1.6/resource/images/".$rowL['bname']."_mid.jpg' /></a>";
                            ?>
                                </div>
                            </li>
                        </div>
                        <div class="clear "></div>
                    </div>
                    <!--
            <div class="f3">
					
					<div class="am-container " >
						<div class="shopTitle ">
							<h4 class="floor-title">甜品</h4>
							<div class="floor-subtitle"><em class="am-icon-caret-left"></em><h3>每一道甜品都有一个故事</h3></div>
							<div class="today-brands " style="right:0px ;top:13px;">
								<a href="# ">桂花糕</a>|
								<a href="# ">奶皮酥</a>|
								<a href="# ">栗子糕 </a>|
								<a href="# ">马卡龙</a>|
								<a href="# ">铜锣烧</a>|
								<a href="# ">豌豆黄</a>
							</div>

						</div>
					</div>
					
					<div class="am-g am-g-fixed floodSix ">
												
						<div class="am-u-sm-5 am-u-md-3 text-one list">
							<div class="word">
								<a class="outer" href="#"><span class="inner"><b class="text">核桃</b></span></a>
								<a class="outer" href="#"><span class="inner"><b class="text">核桃</b></span></a>
								<a class="outer" href="#"><span class="inner"><b class="text">核桃</b></span></a>	
								<a class="outer" href="#"><span class="inner"><b class="text">核桃</b></span></a>
								<a class="outer" href="#"><span class="inner"><b class="text">核桃</b></span></a>
								<a class="outer" href="#"><span class="inner"><b class="text">核桃</b></span></a>
								<a class="outer" href="#"><span class="inner"><b class="text">核桃</b></span></a>
								<a class="outer" href="#"><span class="inner"><b class="text">核桃</b></span></a>
								<a class="outer" href="#"><span class="inner"><b class="text">核桃</b></span></a>								
							</div>							
							<a href="# ">
								<img src="/CodeIgniter-3.1.6/resource/images/5.jpg" />
								<div class="outer-con ">
									<div class="title ">
										零食大礼包开抢啦
									</div>
									<div class="sub-title ">
										当小鱼儿恋上软豆腐
									</div>
								</div>
							</a>
							<div class="triangle-topright"></div>	
						</div>
						
						<div class="am-u-sm-7 am-u-md-5 am-u-lg-2 text-two big">
							
								<div class="outer-con ">
									<div class="title ">
										
									</div>
									<div class="sub-title ">
										¥
									</div>
									
								</div>
								<a href="# "><img src="/CodeIgniter-3.1.6/resource/images/act1.png" /></a>						
						</div>

						<li>
						<div class="am-u-md-2 am-u-lg-2 text-three">
							<div class="boxLi"></div>
							<div class="outer-con ">
								<div class="title ">
									小优布丁
								</div>								
								<div class="sub-title ">
									¥4.8
								</div>
								
							</div>
							<a href="# "><img src="/CodeIgniter-3.1.6/resource/images/1.jpg " /></a>
						</div>
						</li>
						<li>
						<div class="am-u-md-2 am-u-lg-2 text-three sug">
							<div class="boxLi"></div>
							<div class="outer-con ">
								<div class="title ">
									小优布丁
								</div>
								<div class="sub-title ">
									¥4.8
								</div>
								
							</div>
							<a href="# "><img src="/CodeIgniter-3.1.6/resource/images/2.jpg " /></a>
						</div>
						</li>
						<li>
						<div class="am-u-sm-4 am-u-md-5 am-u-lg-4 text-five">
							<div class="boxLi"></div>
							<div class="outer-con ">
								<div class="title ">
									小优布丁
								</div>								
								<div class="sub-title ">
									¥4.8
								</div>
								
							</div>
							<a href="# "><img src="/CodeIgniter-3.1.6/resource/images/5.jpg" /></a>
						</div>	
						</li>
						<li>
						<div class="am-u-sm-4 am-u-md-2 am-u-lg-2 text-six">
							<div class="boxLi"></div>
							<div class="outer-con ">
								<div class="title ">
									小优布丁
								</div>
								<div class="sub-title ">
									¥4.8
								</div>
								
							</div>
							<a href="# "><img src="/CodeIgniter-3.1.6/resource/images/3.jpg" /></a>
						</div>	
						</li>
						<li>
						<div class="am-u-sm-4 am-u-md-2 am-u-lg-4 text-six">
							<div class="boxLi"></div>
							<div class="outer-con ">
								<div class="title ">
									小优布丁
								</div>
								<div class="sub-title ">
									¥4.8
								</div>
								
							</div>
							<a href="# "><img src="/CodeIgniter-3.1.6/resource/images/4.jpg" /></a>
						</div>	
						</li>						
					</div>
					<div class="clear "></div>
            </div>
            <div class="f4">

					
					<div class="am-container ">
						<div class="shopTitle ">
							<h4 class="floor-title">坚果</h4>
							<div class="floor-subtitle"><em class="am-icon-caret-left"></em><h3>酥酥脆脆，回味无穷</h3></div>
							<div class="today-brands " style="right:0px ;top:13px">
								<a href="# ">腰果</a>|
								<a href="# ">松子</a>|
								<a href="# ">夏威夷果 </a>|
								<a href="# ">碧根果</a>|
								<a href="# ">开心果</a>|
								<a href="# ">核桃仁</a>
							</div>
						</div>
					</div>
					<div class="am-g am-g-fixed floodSeven">
						<div class="am-u-sm-5 am-u-md-4 text-one list ">
							<div class="word">
								<a class="outer" href="#"><span class="inner"><b class="text">核桃</b></span></a>
								<a class="outer" href="#"><span class="inner"><b class="text">核桃</b></span></a>
								<a class="outer" href="#"><span class="inner"><b class="text">核桃</b></span></a>	
								<a class="outer" href="#"><span class="inner"><b class="text">核桃</b></span></a>
								<a class="outer" href="#"><span class="inner"><b class="text">核桃</b></span></a>
								<a class="outer" href="#"><span class="inner"><b class="text">核桃</b></span></a>
								<a class="outer" href="#"><span class="inner"><b class="text">核桃</b></span></a>
								<a class="outer" href="#"><span class="inner"><b class="text">核桃</b></span></a>
								<a class="outer" href="#"><span class="inner"><b class="text">核桃</b></span></a>								
							</div>
							<a href="# ">
								<div class="outer-con ">
									<div class="title ">
									零食大礼包开抢啦！
									</div>
									<div class="sub-title ">
										零食大礼包
									</div>									
								</div>
                                  <img src="/CodeIgniter-3.1.6/resource/images/11.jpg" />								
							</a>
							<div class="triangle-topright"></div>						
						</div>
						
							<div class="am-u-sm-7 am-u-md-4 text-two big">
								
								<div class="outer-con ">
									<div class="title ">
										雪之恋和风大福
									</div>									
									<div class="sub-title ">
										¥13.8
									</div>
									
								</div>
								<a href="# "><img src="/CodeIgniter-3.1.6/resource/images/act2.png " /></a>
								
							</div>
                        
                        <li>
							<div class="am-u-sm-7 am-u-md-4 text-two">
								<div class="boxLi"></div>
								<div class="outer-con ">
									<div class="title ">
										雪之恋和风大福
									</div>
									<div class="sub-title ">
										¥13.8
									</div>
									
								</div>
								<a href="# "><img src="/CodeIgniter-3.1.6/resource/images/6.jpg" /></a>
							</div>
                        </li>
                        <li>
						<div class="am-u-sm-3 am-u-md-2 text-three sug">
							<div class="boxLi"></div>
							<div class="outer-con ">
								<div class="title ">
									小优布丁
								</div>
								<div class="sub-title ">
									¥4.8
								</div>
								
							</div>
							<a href="# "><img src="/CodeIgniter-3.1.6/resource/images/7.jpg" /></a>
						</div>
                        </li>
                        <li>
						<div class="am-u-sm-3 am-u-md-2 text-three big">
							<div class="boxLi"></div>
							<div class="outer-con ">
								<div class="title ">
									小优布丁
								</div>
								<div class="sub-title ">
									¥4.8
								</div>
								
							</div>
							<a href="# "><img src="/CodeIgniter-3.1.6/resource/images/10.jpg" /></a>
						</div>
                        </li>
                        <li>
						<div class="am-u-sm-3 am-u-md-2 text-three ">
							<div class="boxLi"></div>
							<div class="outer-con ">
								<div class="title ">
									小优布丁
								</div>
								<div class="sub-title ">
									¥4.8
								</div>
								
							</div>
							<a href="# "><img src="/CodeIgniter-3.1.6/resource/images/8.jpg" /></a>
						</div>
                        </li>
                        <li>
						<div class="am-u-sm-3 am-u-md-2 text-three ">
							<div class="boxLi"></div>
							<div class="outer-con ">
								<div class="title ">
									小优布丁
								</div>
								<div class="sub-title ">
									¥4.8
								</div>
								
							</div>
							<a href="# "><img src="/CodeIgniter-3.1.6/resource/images/9.jpg" /></a>
						</div>
						</li>
					</div>
                 <div class="clear "></div>                 
            </div>                    
	
            <div class="f5">
					
					
					<div class="am-container " >
						<div class="shopTitle ">
							<h4 class="floor-title">甜品</h4>
							<div class="floor-subtitle"><em class="am-icon-caret-left"></em><h3>每一道甜品都有一个故事</h3></div>
							<div class="today-brands " style="right:0px ;top:13px;">
								<a href="# ">桂花糕</a>|
								<a href="# ">奶皮酥</a>|
								<a href="# ">栗子糕 </a>|
								<a href="# ">马卡龙</a>|
								<a href="# ">铜锣烧</a>|
								<a href="# ">豌豆黄</a>
							</div>

						</div>
					</div>
					
					<div class="am-g am-g-fixed floodSix ">
												
						<div class="am-u-sm-5 am-u-md-3 text-one list">
							<div class="word">
								<a class="outer" href="#"><span class="inner"><b class="text">核桃</b></span></a>
								<a class="outer" href="#"><span class="inner"><b class="text">核桃</b></span></a>
								<a class="outer" href="#"><span class="inner"><b class="text">核桃</b></span></a>	
								<a class="outer" href="#"><span class="inner"><b class="text">核桃</b></span></a>
								<a class="outer" href="#"><span class="inner"><b class="text">核桃</b></span></a>
								<a class="outer" href="#"><span class="inner"><b class="text">核桃</b></span></a>
								<a class="outer" href="#"><span class="inner"><b class="text">核桃</b></span></a>
								<a class="outer" href="#"><span class="inner"><b class="text">核桃</b></span></a>
								<a class="outer" href="#"><span class="inner"><b class="text">核桃</b></span></a>								
							</div>							
							<a href="# ">
								<img src="/CodeIgniter-3.1.6/resource/images/5.jpg" />
								<div class="outer-con ">
									<div class="title ">
										零食大礼包开抢啦
									</div>
									<div class="sub-title ">
										当小鱼儿恋上软豆腐
									</div>
								</div>
							</a>
							<div class="triangle-topright"></div>	
						</div>
						
						<div class="am-u-sm-7 am-u-md-5 am-u-lg-2 text-two big">
							
								<div class="outer-con ">
									<div class="title ">
										雪之恋和风大福
									</div>
									<div class="sub-title ">
										¥13.8
									</div>
									
								</div>
								<a href="# "><img src="/CodeIgniter-3.1.6/resource/images/act1.png" /></a>						
						</div>

						<li>
						<div class="am-u-md-2 am-u-lg-2 text-three">
							<div class="boxLi"></div>
							<div class="outer-con ">
								<div class="title ">
									小优布丁
								</div>								
								<div class="sub-title ">
									¥4.8
								</div>
								
							</div>
							<a href="# "><img src="/CodeIgniter-3.1.6/resource/images/1.jpg " /></a>
						</div>
						</li>
						<li>
						<div class="am-u-md-2 am-u-lg-2 text-three sug">
							<div class="boxLi"></div>
							<div class="outer-con ">
								<div class="title ">
									小优布丁
								</div>
								<div class="sub-title ">
									¥4.8
								</div>
								
							</div>
							<a href="# "><img src="/CodeIgniter-3.1.6/resource/images/2.jpg " /></a>
						</div>
						</li>
						<li>
						<div class="am-u-sm-4 am-u-md-5 am-u-lg-4 text-five">
							<div class="boxLi"></div>
							<div class="outer-con ">
								<div class="title ">
									小优布丁
								</div>								
								<div class="sub-title ">
									¥4.8
								</div>
								
							</div>
							<a href="# "><img src="/CodeIgniter-3.1.6/resource/images/5.jpg" /></a>
						</div>	
						</li>
						<li>
						<div class="am-u-sm-4 am-u-md-2 am-u-lg-2 text-six">
							<div class="boxLi"></div>
							<div class="outer-con ">
								<div class="title ">
									小优布丁
								</div>
								<div class="sub-title ">
									¥4.8
								</div>
								
							</div>
							<a href="# "><img src="/CodeIgniter-3.1.6/resource/images/3.jpg" /></a>
						</div>	
						</li>
						<li>
						<div class="am-u-sm-4 am-u-md-2 am-u-lg-4 text-six">
							<div class="boxLi"></div>
							<div class="outer-con ">
								<div class="title ">
									小优布丁
								</div>
								<div class="sub-title ">
									¥4.8
								</div>
								
							</div>
							<a href="# "><img src="/CodeIgniter-3.1.6/resource/images/4.jpg" /></a>
						</div>	
						</li>						
					</div>
					<div class="clear "></div>
            </div>
            <div class="f6">

					<div class="am-container ">
						<div class="shopTitle ">
							<h4 class="floor-title">坚果</h4>
							<div class="floor-subtitle"><em class="am-icon-caret-left"></em><h3>酥酥脆脆，回味无穷</h3></div>
							<div class="today-brands " style="right:0px ;top:13px">
								<a href="# ">腰果</a>|
								<a href="# ">松子</a>|
								<a href="# ">夏威夷果 </a>|
								<a href="# ">碧根果</a>|
								<a href="# ">开心果</a>|
								<a href="# ">核桃仁</a>
							</div>
						</div>
					</div>
					<div class="am-g am-g-fixed floodSeven">
						<div class="am-u-sm-5 am-u-md-4 text-one list ">
							<div class="word">
								<a class="outer" href="#"><span class="inner"><b class="text">核桃</b></span></a>
								<a class="outer" href="#"><span class="inner"><b class="text">核桃</b></span></a>
								<a class="outer" href="#"><span class="inner"><b class="text">核桃</b></span></a>	
								<a class="outer" href="#"><span class="inner"><b class="text">核桃</b></span></a>
								<a class="outer" href="#"><span class="inner"><b class="text">核桃</b></span></a>
								<a class="outer" href="#"><span class="inner"><b class="text">核桃</b></span></a>
								<a class="outer" href="#"><span class="inner"><b class="text">核桃</b></span></a>
								<a class="outer" href="#"><span class="inner"><b class="text">核桃</b></span></a>
								<a class="outer" href="#"><span class="inner"><b class="text">核桃</b></span></a>								
							</div>
							<a href="# ">
								<div class="outer-con ">
									<div class="title ">
									零食大礼包开抢啦！
									</div>
									<div class="sub-title ">
										零食大礼包
									</div>									
								</div>
                                  <img src="/CodeIgniter-3.1.6/resource/images/11.jpg" />								
							</a>
							<div class="triangle-topright"></div>						
						</div>
						
							<div class="am-u-sm-7 am-u-md-4 text-two big">
								
								<div class="outer-con ">
									<div class="title ">
										雪之恋和风大福
									</div>									
									<div class="sub-title ">
										¥13.8
									</div>
									
								</div>
								<a href="# "><img src="/CodeIgniter-3.1.6/resource/images/act2.png " /></a>
								
							</div>
                        
                        <li>
							<div class="am-u-sm-7 am-u-md-4 text-two">
								<div class="boxLi"></div>
								<div class="outer-con ">
									<div class="title ">
										雪之恋和风大福
									</div>
									<div class="sub-title ">
										¥13.8
									</div>
									
								</div>
								<a href="# "><img src="/CodeIgniter-3.1.6/resource/images/6.jpg" /></a>
							</div>
                        </li>
                        <li>
						<div class="am-u-sm-3 am-u-md-2 text-three sug">
							<div class="boxLi"></div>
							<div class="outer-con ">
								<div class="title ">
									小优布丁
								</div>
								<div class="sub-title ">
									¥4.8
								</div>
								
							</div>
							<a href="# "><img src="/CodeIgniter-3.1.6/resource/images/7.jpg" /></a>
						</div>
                        </li>
                        <li>
						<div class="am-u-sm-3 am-u-md-2 text-three big">
							<div class="boxLi"></div>
							<div class="outer-con ">
								<div class="title ">
									小优布丁
								</div>
								<div class="sub-title ">
									¥4.8
								</div>
								
							</div>
							<a href="# "><img src="/CodeIgniter-3.1.6/resource/images/10.jpg" /></a>
						</div>
                        </li>
                        <li>
						<div class="am-u-sm-3 am-u-md-2 text-three ">
							<div class="boxLi"></div>
							<div class="outer-con ">
								<div class="title ">
									小优布丁
								</div>
								<div class="sub-title ">
									¥4.8
								</div>
								
							</div>
							<a href="# "><img src="/CodeIgniter-3.1.6/resource/images/8.jpg" /></a>
						</div>
                        </li>
                        <li>
						<div class="am-u-sm-3 am-u-md-2 text-three ">
							<div class="boxLi"></div>
							<div class="outer-con ">
								<div class="title ">
									小优布丁
								</div>
								<div class="sub-title ">
									¥4.8
								</div>
								
							</div>
							<a href="# "><img src="/CodeIgniter-3.1.6/resource/images/9.jpg" /></a>
						</div>
						</li>
					</div>
                 <div class="clear "></div>                 
            </div>   

            <div class="f7">
					
					<div class="am-container " >
						<div class="shopTitle ">
							<h4 class="floor-title">甜品</h4>
							<div class="floor-subtitle"><em class="am-icon-caret-left"></em><h3>每一道甜品都有一个故事</h3></div>
							<div class="today-brands " style="right:0px ;top:13px;">
								<a href="# ">桂花糕</a>|
								<a href="# ">奶皮酥</a>|
								<a href="# ">栗子糕 </a>|
								<a href="# ">马卡龙</a>|
								<a href="# ">铜锣烧</a>|
								<a href="# ">豌豆黄</a>
							</div>

						</div>
					</div>
					
					<div class="am-g am-g-fixed floodSix ">
												
						<div class="am-u-sm-5 am-u-md-3 text-one list">
							<div class="word">
								<a class="outer" href="#"><span class="inner"><b class="text">核桃</b></span></a>
								<a class="outer" href="#"><span class="inner"><b class="text">核桃</b></span></a>
								<a class="outer" href="#"><span class="inner"><b class="text">核桃</b></span></a>	
								<a class="outer" href="#"><span class="inner"><b class="text">核桃</b></span></a>
								<a class="outer" href="#"><span class="inner"><b class="text">核桃</b></span></a>
								<a class="outer" href="#"><span class="inner"><b class="text">核桃</b></span></a>
								<a class="outer" href="#"><span class="inner"><b class="text">核桃</b></span></a>
								<a class="outer" href="#"><span class="inner"><b class="text">核桃</b></span></a>
								<a class="outer" href="#"><span class="inner"><b class="text">核桃</b></span></a>
								<a class="outer" href="#"><span class="inner"><b class="text">核桃</b></span></a>
								<a class="outer" href="#"><span class="inner"><b class="text">核桃</b></span></a>
								<a class="outer" href="#"><span class="inner"><b class="text">核桃</b></span></a>								
							</div>							
							<a href="# ">
								<img src="/CodeIgniter-3.1.6/resource/images/5.jpg" />
								<div class="outer-con ">
									<div class="title ">
										零食大礼包开抢啦
									</div>
									<div class="sub-title ">
										当小鱼儿恋上软豆腐
									</div>
								</div>
							</a>
							<div class="triangle-topright"></div>	
						</div>
						
						<div class="am-u-sm-7 am-u-md-5 am-u-lg-2 text-two big">
							
								<div class="outer-con ">
									<div class="title ">
										雪之恋和风大福
									</div>
									<div class="sub-title ">
										¥13.8
									</div>
									
								</div>
								<a href="# "><img src="/CodeIgniter-3.1.6/resource/images/act1.png" /></a>						
						</div>

						<li>
						<div class="am-u-md-2 am-u-lg-2 text-three">
							<div class="boxLi"></div>
							<div class="outer-con ">
								<div class="title ">
									小优布丁
								</div>								
								<div class="sub-title ">
									¥4.8
								</div>
								
							</div>
							<a href="# "><img src="/CodeIgniter-3.1.6/resource/images/1.jpg " /></a>
						</div>
						</li>
						<li>
						<div class="am-u-md-2 am-u-lg-2 text-three sug">
							<div class="boxLi"></div>
							<div class="outer-con ">
								<div class="title ">
									小优布丁
								</div>
								<div class="sub-title ">
									¥4.8
								</div>
								
							</div>
							<a href="# "><img src="/CodeIgniter-3.1.6/resource/images/2.jpg " /></a>
						</div>
						</li>
						<li>
						<div class="am-u-sm-4 am-u-md-5 am-u-lg-4 text-five">
							<div class="boxLi"></div>
							<div class="outer-con ">
								<div class="title ">
									小优布丁
								</div>								
								<div class="sub-title ">
									¥4.8
								</div>
								
							</div>
							<a href="# "><img src="/CodeIgniter-3.1.6/resource/images/5.jpg" /></a>
						</div>
						</li>
						<li>
						<div class="am-u-sm-4 am-u-md-2 am-u-lg-2 text-six">
							<div class="boxLi"></div>
							<div class="outer-con ">
								<div class="title ">
									小优布丁
								</div>
								<div class="sub-title ">
									¥4.8
								</div>
								
							</div>
							<a href="# "><img src="/CodeIgniter-3.1.6/resource/images/3.jpg" /></a>
						</div>	
						</li>
						<li>
						<div class="am-u-sm-4 am-u-md-2 am-u-lg-4 text-six">
							<div class="boxLi"></div>
							<div class="outer-con ">
								<div class="title ">
									小优布丁
								</div>
								<div class="sub-title ">
									¥4.8
								</div>
								
							</div>
							<a href="# "><img src="/CodeIgniter-3.1.6/resource/images/4.jpg" /></a>
						</div>	
						</li>						
					</div>
					<div class="clear "></div>
            </div>

            <div class="f8">

					<div class="am-container ">
						<div class="shopTitle ">
							<h4 class="floor-title">坚果</h4>
							<div class="floor-subtitle"><em class="am-icon-caret-left"></em><h3>酥酥脆脆，回味无穷</h3></div>
							<div class="today-brands " style="right:0px ;top:13px">
								<a href="# ">腰果</a>|
								<a href="# ">松子</a>|
								<a href="# ">夏威夷果 </a>|
								<a href="# ">碧根果</a>|
								<a href="# ">开心果</a>|
								<a href="# ">核桃仁</a>
							</div>
						</div>
					</div>
					<div class="am-g am-g-fixed floodSeven">
						<div class="am-u-sm-5 am-u-md-4 text-one list ">
							<div class="word">
								<a class="outer" href="#"><span class="inner"><b class="text">核桃</b></span></a>
								<a class="outer" href="#"><span class="inner"><b class="text">核桃</b></span></a>
								<a class="outer" href="#"><span class="inner"><b class="text">核桃</b></span></a>	
								<a class="outer" href="#"><span class="inner"><b class="text">核桃</b></span></a>
								<a class="outer" href="#"><span class="inner"><b class="text">核桃</b></span></a>
								<a class="outer" href="#"><span class="inner"><b class="text">核桃</b></span></a>	
								<a class="outer" href="#"><span class="inner"><b class="text">核桃</b></span></a>
								<a class="outer" href="#"><span class="inner"><b class="text">核桃</b></span></a>
								<a class="outer" href="#"><span class="inner"><b class="text">核桃</b></span></a>								
							</div>
							<a href="# ">
								<div class="outer-con ">
									<div class="title ">
									零食大礼包开抢啦！
									</div>
									<div class="sub-title ">
										零食大礼包
									</div>									
								</div>
                                  <img src="/CodeIgniter-3.1.6/resource/images/11.jpg" />								
							</a>
							<div class="triangle-topright"></div>						
						</div>
						
							<div class="am-u-sm-7 am-u-md-4 text-two big">
								
								<div class="outer-con ">
									<div class="title ">
										雪之恋和风大福
									</div>									
									<div class="sub-title ">
										¥13.8
									</div>
									
								</div>
								<a href="# "><img src="/CodeIgniter-3.1.6/resource/images/act2.png " /></a>
								
							</div>
                        
                        <li>
							<div class="am-u-sm-7 am-u-md-4 text-two">
								<div class="boxLi"></div>
								<div class="outer-con ">
									<div class="title ">
										雪之恋和风大福
									</div>
									<div class="sub-title ">
										¥13.8
									</div>
									
								</div>
								<a href="# "><img src="/CodeIgniter-3.1.6/resource/images/6.jpg" /></a>
							</div>
                        </li>
                        <li>
						<div class="am-u-sm-3 am-u-md-2 text-three sug">
							<div class="boxLi"></div>
							<div class="outer-con ">
								<div class="title ">
									小优布丁
								</div>
								<div class="sub-title ">
									¥4.8
								</div>
								
							</div>
							<a href="# "><img src="/CodeIgniter-3.1.6/resource/images/7.jpg" /></a>
						</div>
                        </li>
                        <li>
						<div class="am-u-sm-3 am-u-md-2 text-three big">
							<div class="boxLi"></div>
							<div class="outer-con ">
								<div class="title ">
									小优布丁
								</div>
								<div class="sub-title ">
									¥4.8
								</div>
								
							</div>
							<a href="# "><img src="/CodeIgniter-3.1.6/resource/images/10.jpg" /></a>
						</div>
                        </li>
                        <li>
						<div class="am-u-sm-3 am-u-md-2 text-three ">
							<div class="boxLi"></div>
							<div class="outer-con ">
								<div class="title ">
									小优布丁
								</div>
								<div class="sub-title ">
									¥4.8
								</div>
								
							</div>
							<a href="# "><img src="/CodeIgniter-3.1.6/resource/images/8.jpg" /></a>
						</div>
                        </li>
                        <li>
						<div class="am-u-sm-3 am-u-md-2 text-three ">
							<div class="boxLi"></div>
							<div class="outer-con ">
								<div class="title ">
									小优布丁
								</div>
								<div class="sub-title ">
									¥4.8
								</div>
								
							</div>
							<a href="# "><img src="/CodeIgniter-3.1.6/resource/images/9.jpg" /></a>
						</div>
						</li>
					</div>
                 <div class="clear "></div>                 
            </div>   
            
            <div class="f9">
					甜点
					
					<div class="am-container " >
						<div class="shopTitle ">
							<h4 class="floor-title">甜品</h4>
							<div class="floor-subtitle"><em class="am-icon-caret-left"></em><h3>每一道甜品都有一个故事</h3></div>
							<div class="today-brands " style="right:0px ;top:13px;">
								<a href="# ">桂花糕</a>|
								<a href="# ">奶皮酥</a>|
								<a href="# ">栗子糕 </a>|
								<a href="# ">马卡龙</a>|
								<a href="# ">铜锣烧</a>|
								<a href="# ">豌豆黄</a>
							</div>

						</div>
					</div>
					
					<div class="am-g am-g-fixed floodSix ">
												
						<div class="am-u-sm-5 am-u-md-3 text-one list">
							<div class="word">
								<a class="outer" href="#"><span class="inner"><b class="text">核桃</b></span></a>
								<a class="outer" href="#"><span class="inner"><b class="text">核桃</b></span></a>
								<a class="outer" href="#"><span class="inner"><b class="text">核桃</b></span></a>	
								<a class="outer" href="#"><span class="inner"><b class="text">核桃</b></span></a>
								<a class="outer" href="#"><span class="inner"><b class="text">核桃</b></span></a>
								<a class="outer" href="#"><span class="inner"><b class="text">核桃</b></span></a>	
								<a class="outer" href="#"><span class="inner"><b class="text">核桃</b></span></a>
								<a class="outer" href="#"><span class="inner"><b class="text">核桃</b></span></a>
								<a class="outer" href="#"><span class="inner"><b class="text">核桃</b></span></a>								
							</div>							
							<a href="# ">
								<img src="/CodeIgniter-3.1.6/resource/images/5.jpg" />
								<div class="outer-con ">
									<div class="title ">
										零食大礼包开抢啦
									</div>
									<div class="sub-title ">
										当小鱼儿恋上软豆腐
									</div>
								</div>
							</a>
							<div class="triangle-topright"></div>	
						</div>
						
						<div class="am-u-sm-7 am-u-md-5 am-u-lg-2 text-two big">
							
								<div class="outer-con ">
									<div class="title ">
										雪之恋和风大福
									</div>
									<div class="sub-title ">
										¥13.8
									</div>
									
								</div>
								<a href="# "><img src="/CodeIgniter-3.1.6/resource/images/act1.png" /></a>						
						</div>

						<li>
						<div class="am-u-md-2 am-u-lg-2 text-three">
							<div class="boxLi"></div>
							<div class="outer-con ">
								<div class="title ">
									小优布丁
								</div>								
								<div class="sub-title ">
									¥4.8
								</div>
								
							</div>
							<a href="# "><img src="/CodeIgniter-3.1.6/resource/images/1.jpg " /></a>
						</div>
						</li>
						<li>
						<div class="am-u-md-2 am-u-lg-2 text-three sug">
							<div class="boxLi"></div>
							<div class="outer-con ">
								<div class="title ">
									小优布丁
								</div>
								<div class="sub-title ">
									¥4.8
								</div>
								
							</div>
							<a href="# "><img src="/CodeIgniter-3.1.6/resource/images/2.jpg " /></a>
						</div>
						</li>
						<li>
						<div class="am-u-sm-4 am-u-md-5 am-u-lg-4 text-five">
							<div class="boxLi"></div>
							<div class="outer-con ">
								<div class="title ">
									小优布丁
								</div>								
								<div class="sub-title ">
									¥4.8
								</div>
								
							</div>
							<a href="# "><img src="/CodeIgniter-3.1.6/resource/images/5.jpg" /></a>
						</div>	
						</li>
						<li>
						<div class="am-u-sm-4 am-u-md-2 am-u-lg-2 text-six">
							<div class="boxLi"></div>
							<div class="outer-con ">
								<div class="title ">
									小优布丁
								</div>
								<div class="sub-title ">
									¥4.8
								</div>
								
							</div>
							<a href="# "><img src="/CodeIgniter-3.1.6/resource/images/3.jpg" /></a>
						</div>	
						</li>
						<li>
						<div class="am-u-sm-4 am-u-md-2 am-u-lg-4 text-six">
							<div class="boxLi"></div>
							<div class="outer-con ">
								<div class="title ">
									小优布丁
								</div>
								<div class="sub-title ">
									¥4.8
								</div>
								
							</div>
							<a href="# "><img src="/CodeIgniter-3.1.6/resource/images/4.jpg" /></a>
						</div>	
						</li>						
					</div>
					<div class="clear "></div>
            </div>
-->
                    <div class="am-container ">
                        <div class="shopTitle ">
                            <h4>更多蛋糕</h4>
                            <h3>最多的蛋糕没有诱惑力，只有更多的蛋糕才能满足你</h3>
                            <div class="today-brands ">
                                <!--
								<a href="# ">小鱼干</a>
								<a href="# ">海苔</a>
								<a href="# ">鱿鱼丝</a>
								<a href="# ">海带丝</a>
-->
                            </div>
                            <span class="more ">
<!--                    <a class="more-link " href="# ">更多美味</a>-->
                        </span>
                        </div>
                    </div>
                    <div class="am-g am-g-fixed flood method3 ">
                        <ul class="am-thumbnails ">
                            <?php
                                while($left = $queryL->unbuffered_row('array')){
                                    
                                    echo "<li>
                                        <div class='list '>
                                            <a href='show_introdution/".$left['bid']."'>
                                                <img src='/CodeIgniter-3.1.6/resource/images/".$left['bname']."_mid.jpg ' />
                                                <div class='pro-title '>".$left['bname']."</div>
                                                <span class='e-price '>￥".$left['bprice']."</span>
                                            </a>
                                        </div>
                                    </li>";
                                }
                            ?>
                                <!--
							<li>
								<div class="list">
									<a href="#">
										<img src="/CodeIgniter-3.1.6/resource/images/cp2.jpg" />
										<div class="pro-title ">ZEK 原味海苔</div>
										<span class="e-price ">￥8.90</span>
									</a>
								</div>
							</li>
							<li>
								<div class="list ">
									<a href="# ">
										<img src="/CodeIgniter-3.1.6/resource/images/cp.jpg " />
										<div class="pro-title ">萨拉米 1+1小鸡腿</div>
										<span class="e-price ">￥29.90</span>
									</a>
								</div>
							</li>
							<li>
								<div class="list ">
									<a href="# ">
										<img src="/CodeIgniter-3.1.6/resource/images/cp2.jpg " />
										<div class="pro-title ">ZEK 原味海苔</div>
										<span class="e-price ">￥8.90</span>
									</a>
								</div>
							</li>
							<li>
								<div class="list ">
									<a href="# ">
										<img src="/CodeIgniter-3.1.6/resource/images/cp.jpg " />
										<div class="pro-title ">萨拉米 1+1小鸡腿</div>
										<span class="e-price ">￥29.90</span>
									</a>
								</div>
							</li>
							<li>
								<div class="list ">
									<a href="# ">
										<img src="/CodeIgniter-3.1.6/resource/images/cp2.jpg " />
										<div class="pro-title ">ZEK 原味海苔</div>
										<span class="e-price ">￥8.90</span>
									</a>
								</div>
							</li>
							<li>
								<div class="list ">
									<a href="# ">
										<img src="/CodeIgniter-3.1.6/resource/images/cp.jpg " />
										<div class="pro-title ">萨拉米 1+1小鸡腿</div>
										<span class="e-price ">￥29.90</span>
									</a>
								</div>
							</li>
							<li>
								<div class="list ">
									<a href="# ">
										<img src="/CodeIgniter-3.1.6/resource/images/cp2.jpg " />
										<div class="pro-title ">ZEK 原味海苔</div>
										<span class="e-price ">￥8.90</span>
									</a>
								</div>
							</li>
							<li>
								<div class="list ">
									<a href="# ">
										<img src="/CodeIgniter-3.1.6/resource/images/cp.jpg " />
										<div class="pro-title ">萨拉米 1+1小鸡腿</div>
										<span class="e-price ">￥29.90</span>
									</a>
								</div>
							</li>
							<li>
								<div class="list ">
									<a href="# ">
										<img src="/CodeIgniter-3.1.6/resource/images/cp2.jpg " />
										<div class="pro-title ">ZEK 原味海苔</div>
										<span class="e-price ">￥8.90</span>
									</a>
								</div>
							</li>
-->

                        </ul>

                    </div>
                    <!--                  
            <div class="f10">

					<div class="am-container ">
						<div class="shopTitle ">
							<h4 class="floor-title">坚果</h4>
							<div class="floor-subtitle"><em class="am-icon-caret-left"></em><h3>酥酥脆脆，回味无穷</h3></div>
							<div class="today-brands " style="right:0px ;top:13px">
								<a href="# ">腰果</a>|
								<a href="# ">松子</a>|
								<a href="# ">夏威夷果 </a>|
								<a href="# ">碧根果</a>|
								<a href="# ">开心果</a>|
								<a href="# ">核桃仁</a>
							</div>
						</div>
					</div>
					<div class="am-g am-g-fixed floodSeven">
						<div class="am-u-sm-5 am-u-md-4 text-one list ">
							<div class="word">
								<a class="outer" href="#"><span class="inner"><b class="text">核桃</b></span></a>
								<a class="outer" href="#"><span class="inner"><b class="text">核桃</b></span></a>
								<a class="outer" href="#"><span class="inner"><b class="text">核桃</b></span></a>	
								<a class="outer" href="#"><span class="inner"><b class="text">核桃</b></span></a>
								<a class="outer" href="#"><span class="inner"><b class="text">核桃</b></span></a>
								<a class="outer" href="#"><span class="inner"><b class="text">核桃</b></span></a>									
							</div>
							<a href="# ">
								<div class="outer-con ">
									<div class="title ">
									零食大礼包开抢啦！
									</div>
									<div class="sub-title ">
										零食大礼包
									</div>									
								</div>
                                  <img src="/CodeIgniter-3.1.6/resource/images/11.jpg" />								
							</a>
							<div class="triangle-topright"></div>						
						</div>
						
							<div class="am-u-sm-7 am-u-md-4 text-two big">
								
								<div class="outer-con ">
									<div class="title ">
										雪之恋和风大福
									</div>									
									<div class="sub-title ">
										¥13.8
									</div>
									
								</div>
								<a href="# "><img src="/CodeIgniter-3.1.6/resource/images/act2.png " /></a>
								
							</div>
                        
                        <li>
							<div class="am-u-sm-7 am-u-md-4 text-two">
								<div class="boxLi"></div>
								<div class="outer-con ">
									<div class="title ">
										雪之恋和风大福
									</div>
									<div class="sub-title ">
										¥13.8
									</div>
									
								</div>
								<a href="# "><img src="/CodeIgniter-3.1.6/resource/images/6.jpg" /></a>
							</div>
                        </li>
                        <li>
						<div class="am-u-sm-3 am-u-md-2 text-three sug">
							<div class="boxLi"></div>
							<div class="outer-con ">
								<div class="title ">
									小优布丁
								</div>
								<div class="sub-title ">
									¥4.8
								</div>
								
							</div>
							<a href="# "><img src="/CodeIgniter-3.1.6/resource/images/7.jpg" /></a>
						</div>
                        </li>
                        <li>
						<div class="am-u-sm-3 am-u-md-2 text-three big">
							<div class="boxLi"></div>
							<div class="outer-con ">
								<div class="title ">
									小优布丁
								</div>
								<div class="sub-title ">
									¥4.8
								</div>
								
							</div>
							<a href="# "><img src="/CodeIgniter-3.1.6/resource/images/10.jpg" /></a>
						</div>
                        </li>
                        <li>
						<div class="am-u-sm-3 am-u-md-2 text-three ">
							<div class="boxLi"></div>
							<div class="outer-con ">
								<div class="title ">
									小优布丁
								</div>
								<div class="sub-title ">
									¥4.8
								</div>
								
							</div>
							<a href="# "><img src="/CodeIgniter-3.1.6/resource/images/8.jpg" /></a>
						</div>
                        </li>
                        <li>
						<div class="am-u-sm-3 am-u-md-2 text-three ">
							<div class="boxLi"></div>
							<div class="outer-con ">
								<div class="title ">
									小优布丁
								</div>
								<div class="sub-title ">
									¥4.8
								</div>
								
							</div>
							<a href="# "><img src="/CodeIgniter-3.1.6/resource/images/9.jpg" /></a>
						</div>
						</li>
					</div>
                 <div class="clear "></div>       
            </div>
-->
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
        </div>
    </div>
    </div>

    <!--引导 -->
    <div class="navCir">
        <li class="active"><a href="home2.html"><i class="am-icon-home "></i>首页</a></li>
        <li><a href="sort.html"><i class="am-icon-list"></i>分类</a></li>
        <li><a href="shopcart.html"><i class="am-icon-shopping-basket"></i>购物车</a></li>
        <li><a href="../person/index.html"><i class="am-icon-user"></i>我的</a></li>
    </div>
    <!--菜单 -->
    <div class=tip>
        <div id="sidebar">
            <div id="wrap">
                <div id="prof" class="item ">
                    <a href="# ">
							<span class="setting "></span>
						</a>
                    <div class="ibar_login_box status_login ">
                        <div class="avatar_box ">
                            <p class="avatar_imgbox "><img src="/CodeIgniter-3.1.6/resource/images/no-img_mid_.jpg " /></p>
                            <ul class="user_info ">
                                <?php
                                        if(isset($_SESSION['useremail'])){
                                            
									       echo "<li>用户名：".$_SESSION['useremail'];
									       echo "</li><li>级&nbsp;别：普通会员</li>";
                                        }
//                                        else{
//
//                                           echo "<a href='show_login' class='login_favorite '>请登陆</a>";
//                                        }
                                    ?>
                            </ul>
                        </div>
                        <div class="login_btnbox ">
                            <?php
                                        if(isset($_SESSION['useremail'])){
                                            echo "<a href='show_information' class='login_order'>个人中心</a>
                                            <a href='/CodeIgniter-3.1.6/index.php/orderForm_controll/show_order_form_view' class='login_favorite '>我的订单</a>";
                                        }
                                        else{
                                            
                                            echo "<a href='show_login' class='login_favorite '>请登陆</a>";
                                        }
                                ?>
                        </div>
                        <i class="icon_arrow_white "></i>
                    </div>

                </div>
                <div id="shopCart " class="item ">
                    <a href="/CodeIgniter-3.1.6/index.php/orderForm_controll/show_order_form_view">
							<span class="message "></span>
						</a>
                    <p>
                        我的订单
                    </p>
                    <p class="cart_num ">
                        <?php
                                
                                if(isset($_SESSION['useremail'])){
                                    
                                    echo $_SESSION['order_num'];
                                }
                                else{

                                    echo 0;
                                }
                            ?>
                    </p>
                </div>
                <!--
					<div id="asset " class="item ">
						<a href="# ">
							<span class="view "></span>
						</a>
						<div class="mp_tooltip ">
							我的资产
							<i class="icon_arrow_right_black "></i>
						</div>
					</div>

					<div id="foot " class="item ">
						<a href="# ">
							<span class="zuji "></span>
						</a>
						<div class="mp_tooltip ">
							我的足迹
							<i class="icon_arrow_right_black "></i>
						</div>
					</div>

					<div id="brand " class="item ">
						<a href="#">
							<span class="wdsc "><img src="/CodeIgniter-3.1.6/resource/images/wdsc.png " /></span>
						</a>
						<div class="mp_tooltip ">
							我的收藏
							<i class="icon_arrow_right_black "></i>
						</div>
					</div>

					<div id="broadcast " class="item ">
						<a href="# ">
							<span class="chongzhi "><img src="/CodeIgniter-3.1.6/resource/images/chongzhi.png " /></span>
						</a>
						<div class="mp_tooltip ">
							我要充值
							<i class="icon_arrow_right_black "></i>
						</div>
					</div>
-->

                <div class="quick_toggle ">
                    <li class="qtitem ">
                        <a href="# "><span class="kfzx "></span></a>
                        <div class="mp_tooltip ">客服中心<i class="icon_arrow_right_black "></i></div>
                    </li>
                    <!--二维码 -->
                    <li class="qtitem ">
                        <a href="#none "><span class="mpbtn_qrcode "></span></a>
                        <div class="mp_qrcode " style="display:none; "><img src="/CodeIgniter-3.1.6/resource/images/weixin_code_145.png " /><i class="icon_arrow_white "></i></div>
                    </li>
                    <li class="qtitem ">
                        <a href="#top " class="return_top "><span class="top "></span></a>
                    </li>
                </div>

                <!--回到顶部 -->
                <div id="quick_links_pop " class="quick_links_pop hide "></div>

            </div>

        </div>
        <div id="prof-content " class="nav-content ">
            <div class="nav-con-close ">
                <i class="am-icon-angle-right am-icon-fw "></i>
            </div>
            <div>
                我
            </div>
        </div>
        <div id="shopCart-content " class="nav-content ">
            <div class="nav-con-close ">
                <i class="am-icon-angle-right am-icon-fw "></i>
            </div>
            <div>
                购物车
            </div>
        </div>
        <div id="asset-content " class="nav-content ">
            <div class="nav-con-close ">
                <i class="am-icon-angle-right am-icon-fw "></i>
            </div>
            <div>
                资产
            </div>

            <div class="ia-head-list ">
                <a href="# " target="_blank " class="pl ">
                    <div class="num ">0</div>
                    <div class="text ">优惠券</div>
                </a>
                <a href="# " target="_blank " class="pl ">
                    <div class="num ">0</div>
                    <div class="text ">红包</div>
                </a>
                <a href="# " target="_blank " class="pl money ">
                    <div class="num ">￥0</div>
                    <div class="text ">余额</div>
                </a>
            </div>

        </div>
        <div id="foot-content " class="nav-content ">
            <div class="nav-con-close ">
                <i class="am-icon-angle-right am-icon-fw "></i>
            </div>
            <div>
                足迹
            </div>
        </div>
        <div id="brand-content " class="nav-content ">
            <div class="nav-con-close ">
                <i class="am-icon-angle-right am-icon-fw "></i>
            </div>
            <div>
                收藏
            </div>
        </div>
        <div id="broadcast-content " class="nav-content ">
            <div class="nav-con-close ">
                <i class="am-icon-angle-right am-icon-fw "></i>
            </div>
            <div>
                充值
            </div>
        </div>
    </div>
    <script>
        window.jQuery || document.write('<script src="/CodeIgniter-3.1.6/resource/basic/js/jquery.min.js "><\/script>');

    </script>
    <script type="text/javascript " src="/CodeIgniter-3.1.6/resource/basic/js/quick_links.js "></script>
</body>

</html>
