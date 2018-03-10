<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">

    <title>商品页面</title>

    <link href="/CodeIgniter-3.1.6/resource/AmazeUI-2.4.2/assets/css/admin.css" rel="stylesheet" type="text/css" />
    <link href="/CodeIgniter-3.1.6/resource/AmazeUI-2.4.2/assets/css/amazeui.css" rel="stylesheet" type="text/css" />
    <link href="/CodeIgniter-3.1.6/resource/basic/css/demo.css" rel="stylesheet" type="text/css" />
    <link type="text/css" href="/CodeIgniter-3.1.6/resource/css/optstyle.css" rel="stylesheet" />
    <link type="text/css" href="/CodeIgniter-3.1.6/resource/css/style.css" rel="stylesheet" />

    <script type="text/javascript" src="/CodeIgniter-3.1.6/resource/basic/js/jquery-1.7.min.js"></script>
    <script type="text/javascript" src="/CodeIgniter-3.1.6/resource/basic/js/quick_links.js"></script>

    <script type="text/javascript" src="/CodeIgniter-3.1.6/resource/AmazeUI-2.4.2/assets/js/amazeui.js"></script>
    <script type="text/javascript" src="/CodeIgniter-3.1.6/resource/js/jquery.imagezoom.min.js"></script>
    <script type="text/javascript" src="/CodeIgniter-3.1.6/resource/js/jquery.flexslider.js"></script>
    <script type="text/javascript" src="/CodeIgniter-3.1.6/resource/js/list.js"></script>

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
                                    
                                    echo "<a href='/CodeIgniter-3.1.6/index.php/login_contrl/show_login' target='_top' class='h'>"."亲，请登录"."  </a>";
                                    echo "<a href='/CodeIgniter-3.1.6/index.php/login_contrl/show_register' target='_top'>"."免费注册</a>";
                                }
//                                echo $data['bname'];
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
                    ?>
                    </strong></a></div>
            </div>
            <div class="topMessage favorite">
<!--                <div class="menu-hd"><a href="#" target="_top"><i class="am-icon-heart am-icon-fw"></i><span>收藏夹</span></a></div>-->
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
        <b class="line"></b>
        <div class="listMain">

            <!--分类-->
            <div class="nav-table">
                <div class="long-title"><span class="all-goods">商品详情</span></div>
                <div class="nav-cont">
<!--
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
-->
                </div>
            </div>
            <ol class="am-breadcrumb am-breadcrumb-slash">
<!--
                <li><a href="#">首页</a></li>
                <li><a href="#">分类</a></li>
                <li class="am-active">内容</li>
-->
            </ol>
            <script type="text/javascript">
                $(function() {});
                $(window).load(function() {
                    $('.flexslider').flexslider({
                        animation: "slide",
                        start: function(slider) {
                            $('body').removeClass('loading');
                        }
                    });
                });

            </script>
            <div class="scoll">
                <section class="slider">
                    <div class="flexslider">
                        <ul class="slides">
                            <li>
                                <img src="/CodeIgniter-3.1.6/resource/images/01.jpg" title="pic" />
                            </li>
                            <li>
                                <img src="/CodeIgniter-3.1.6/resource/images/02.jpg" />
                            </li>
                            <li>
                                <img src="/CodeIgniter-3.1.6/resource/images/03.jpg" />
                            </li>
                        </ul>
                    </div>
                </section>
            </div>

            <!--放大镜-->

            <div class="item-inform">
                <div class="clearfixLeft" id="clearcontent">

                    <div class="box">
                        <script type="text/javascript">
                            $(document).ready(function() {
                                $(".jqzoom").imagezoom();
                                $("#thumblist li a").click(function() {
                                    $(this).parents("li").addClass("tb-selected").siblings().removeClass("tb-selected");
                                    $(".jqzoom").attr('src', $(this).find("img").attr("mid"));
                                    $(".jqzoom").attr('rel', $(this).find("img").attr("big"));
                                });
                            });

                        </script>

                        <div class="tb-booth tb-pic tb-s310">
                            <?php
                                echo "<a href='/CodeIgniter-3.1.6/resource/images/".$data['bname']."_big.jpg'><img src='/CodeIgniter-3.1.6/resource/images/".$data['bname']."_mid.jpg' alt='细节展示放大镜特效' rel='/CodeIgniter-3.1.6/resource/images/".$data['bname']."_big.jpg' class='jqzoom' /></a>";
                            ?>
                        </div>
                        <ul class="tb-thumb" id="thumblist">
                            <li class="tb-selected">
                                <div class="tb-pic tb-s40">
                                    <?php
                                        echo "<a href=''><img src='/CodeIgniter-3.1.6/resource/images/".$data['bname']."_small.jpg' mid='/CodeIgniter-3.1.6/resource/images/".$data['bname']."_mid.jpg' big='/CodeIgniter-3.1.6/resource/images/".$data['bname']."_big.jpg'></a>";
                                    ?>
                                </div>
                            </li>
<!--
                            <li>
                                <div class="tb-pic tb-s40">
                                    <?php
                                        echo "<a href=''><img src='/CodeIgniter-3.1.6/resource/images/".$data['bname']."_small.jpg' mid='/CodeIgniter-3.1.6/resource/images/".$data['bname']."_mid.jpg' big='/CodeIgniter-3.1.6/resource/images/".$data['bname']."_big.jpg'></a>";
                                    ?>
                                </div>
                            </li>
                            <li>
                                <div class="tb-pic tb-s40">
                                   <?php
                                        echo "<a href=''><img src='/CodeIgniter-3.1.6/resource/images/".$data['bname']."_small.jpg' mid='/CodeIgniter-3.1.6/resource/images/".$data['bname']."_mid.jpg' big='/CodeIgniter-3.1.6/resource/images/".$data['bname']."_big.jpg'></a>";
                                    ?>
                                </div>
                            </li>
-->
                        </ul>
                    </div>

                    <div class="clear"></div>
                </div>

                <div class="clearfixRight">

                    <!--规格属性-->
                    <!--名称-->
                    <div class="tb-detail-hd">
                        <h1>
                            <?php echo $data['bname']; ?>
                        </h1>
                    </div>
                    <div class="tb-detail-list">
                        <!--价格-->
                        <div class="tb-detail-price">
                            <li class="price iteminfo_price">
                                <dt>促销价</dt>
                                <dd><em>¥</em><b class="sys_item_price"><?php echo $data['bprice']*$data['brate']; ?></b></dd>
                            </li>
                            <li class="price iteminfo_mktprice">
                                <dt>原价</dt>
                                <dd><em>¥</em><b class="sys_item_mktprice"><?php echo $data['bprice']; ?></b></dd>
                            </li>
                            <div class="clear"></div>
                        </div>

                        <!--地址-->
                        <dl class="iteminfo_parameter freight">
<!--
                            <dt>配送至</dt>
                            <div class="iteminfo_freprice">
                                <div class="am-form-content address">
                                    <select data-am-selected>
											<option value="a">浙江省</option>
											<option value="b">湖北省</option>
										</select>
                                    <select data-am-selected>
											<option value="a">温州市</option>
											<option value="b">武汉市</option>
										</select>
                                    <select data-am-selected>
											<option value="a">瑞安区</option>
											<option value="b">洪山区</option>
										</select>
                                </div>
                                <div class="pay-logis">
                                    快递<b class="sys_item_freprice">10</b>元
                                </div>
                            </div>
-->
                        </dl>
                        <div class="clear"></div>

                        <!--销量-->
                        <ul class="tm-ind-panel">
                            <li class="tm-ind-item tm-ind-sellCount canClick">
                                <div class="tm-indcon"><span class="tm-label">月平均销量</span><span class="tm-count"><?php echo $month_sale; ?></span></div>
                            </li>
<!--
                            <li class="tm-ind-item tm-ind-sumCount canClick">
                                <div class="tm-indcon"><span class="tm-label">累计销量</span><span class="tm-count">6015</span></div>
                            </li>
                            <li class="tm-ind-item tm-ind-reviewCount canClick tm-line3">
                                <div class="tm-indcon"><span class="tm-label">累计评价</span><span class="tm-count">640</span></div>
                            </li>
-->
                        </ul>
                        <div class="clear"></div>

                        <!--各种规格-->
                        <dl class="iteminfo_parameter sys_item_specpara">
                            <dt class="theme-login"><div class="cart-title">可选规格<span class="am-icon-angle-right"></span></div></dt>
                            <dd>
                                <!--操作页面-->

                                <div class="theme-popover-mask"></div>

                                <div class="theme-popover">
                                    <div class="theme-span"></div>
                                    <div class="theme-poptit">
                                        <a href="javascript:;" title="关闭" class="close">×</a>
                                    </div>
                                    <div class="theme-popbod dform">
                                        <?php
                                            echo "<form class='theme-signin' name='loginform' action='/CodeIgniter-3.1.6/index.php/login_contrl/show_pay/".$data['bid']."' method='post'>";
                                        ?>

                                            <div class="theme-signin-left">

                                                
													<div class="theme-options">
														<div class="cart-title">供应商</div>
														<ul>
															<li class="sku-line">
                                                                <?php
                                                                    
                                                                    echo $data['city']."市".$data['sname'];
                                                                ?>
                                                            <i></i></li>
<!--
															<li class="sku-line">奶油<i></i></li>
															<li class="sku-line">炭烧<i></i></li>
															<li class="sku-line">咸香<i></i></li>
-->
														</ul>
													</div>

                                                
                                                <div class="theme-options">
														<div class="cart-title">联系电话</div>
														<ul>
															<li class="sku-line">
                                                                <?php
                                                                    
                                                                    echo $data['telephone_no'];
                                                                ?>
                                                            <i></i></li>
<!--
															<li class="sku-line">礼盒双人份<i></i></li>
															<li class="sku-line">全家福礼包<i></i></li>
-->
														</ul>
													</div>

                                                <div class="theme-options">
                                                    <div class="cart-title number">数量</div>
                                                    <dd>
                                                        <input id="min" class="am-btn am-btn-default" name="" type="button" value="-" />
                                                        <input id="text_box" name="number" type="text" value="1" style="width:35px;" />
                                                        <input id="add" class="am-btn am-btn-default" name="" type="button" value="+" />
                                                        <span id="Stock" class="tb-hidden">库存<span class="stock"><?php echo $data['bown']; ?></span>件</span>
                                                    </dd>

                                                </div>
                                                <div class="clear"></div>

                                                <div class="btn-op">
                                                    <div class="btn am-btn am-btn-warning">确认</div>
                                                    <div class="btn close am-btn am-btn-warning">取消</div>
                                                </div>
                                            </div>
                                            <div class="theme-signin-right">
                                                <div class="img-info">
                                                    <img src="/CodeIgniter-3.1.6/resource/images/songzi.jpg" />
                                                </div>
                                                <div class="text-info">
                                                    <span class="J_Price price-now">¥39.00</span>
                                                    <span id="Stock" class="tb-hidden">库存<span class="stock">1000</span>件</span>
                                                </div>
                                            </div>
                                            <div class="order-go clearfix">
                                                <div class="pay-confirm clearfix">
                                                    <div id="holyshit269" class="submitOrder">
                                                        <div class="go-btn-wrap">
                                                            <a id="J_Go" href="success.html" class="btn-go" tabindex="0" title="点击此按钮，提交订单"></a>
                                                        </div>
                                                    </div>
                                                    <div class="clear"></div>
                                                </div>
                                            </div>
<!--
                                            <div class="am-cf">
                                                <input type="submit" name="" value="立即预定" class="am-btn am-btn-primary am-btn-sm am-fl">
                                            </div>
-->

                                        <div class="info-btn">
<!--									<div class="am-btn am-btn-danger">保存修改</div>-->
                                            <input type="submit" name="" value="立即预定" class="am-btn am-btn-danger">
                                        </div>
                                        
                                        </form>
                                    </div>
                                </div>

                            </dd>
                        </dl>
                        <div class="clear"></div>
                        <!--活动	-->
                        <div class="shopPromotion gold">
                            <div class="hot">
                                <dt class="tb-metatit">店铺优惠</dt>
<!--
                                <div class="gold-list">
                                    <p>购物满2件打8折，满3件7折<span>点击领券<i class="am-icon-sort-down"></i></span></p>
                                </div>
-->
                            </div>
                            <div class="clear"></div>
                            <div class="coupon">
                                <dt class="tb-metatit">优惠券</dt>
                                <div class="gold-list">
                                    <ul>
                                        <li>125减5</li>
                                        <li>198减10</li>
                                        <li>298减20</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="pay">
                        <div class="pay-opt">
                            <a href="home.html"><span class="am-icon-home am-icon-fw">首页</span></a>
                            <a><span class="am-icon-heart am-icon-fw">收藏</span></a>

                        </div>
<!--
                        <li>
                            <div class="clearfix tb-btn tb-btn-buy theme-login">
                                <a id="LikBuy" title="点此按钮到下一步确认购买信息" href="#">立即购买</a>
                            </div>
                        </li>
                        <li>
                            <div class="clearfix tb-btn tb-btn-basket theme-login">
                                <a id="LikBasket" title="加入购物车" href="#"><i></i>加入购物车</a>
                            </div>
                        </li>
-->
                    </div>

                </div>

                <div class="clear"></div>

            </div>

            <!--优惠套装-->
            <!--
				<div class="match">
					<div class="match-title">优惠套装</div>
					<div class="match-comment">
						<ul class="like_list">
							<li>
								<div class="s_picBox">
									<a class="s_pic" href="#"><img src="/CodeIgniter-3.1.6/resource/images/cp.jpg"></a>
								</div> <a class="txt" target="_blank" href="#">萨拉米 1+1小鸡腿</a>
								<div class="info-box"> <span class="info-box-price">¥ 29.90</span> <span class="info-original-price">￥ 199.00</span> </div>
							</li>
							<li class="plus_icon"><i>+</i></li>
							<li>
								<div class="s_picBox">
									<a class="s_pic" href="#"><img src="/CodeIgniter-3.1.6/resource/images/cp2.jpg"></a>
								</div> <a class="txt" target="_blank" href="#">ZEK 原味海苔</a>
								<div class="info-box"> <span class="info-box-price">¥ 8.90</span> <span class="info-original-price">￥ 299.00</span> </div>
							</li>
							<li class="plus_icon"><i>=</i></li>
							<li class="total_price">
								<p class="combo_price"><span class="c-title">套餐价:</span><span>￥35.00</span> </p>
								<p class="save_all">共省:<span>￥463.00</span></p> <a href="#" class="buy_now">立即购买</a> </li>
							<li class="plus_icon"><i class="am-icon-angle-right"></i></li>
						</ul>
					</div>
				</div>
-->
            <div class="clear"></div>


            <!-- introduce-->

            <div class="introduce">
                <!--
					<div class="browse">
					    <div class="mc"> 
						     <ul>					    
						     	<div class="mt">            
						            <h2>看了又看</h2>        
					            </div>
						     	
							      <li class="first">
							      	<div class="p-img">                    
							      		<a  href="#"> <img class="" src="/CodeIgniter-3.1.6/resource/images/browse1.jpg"> </a>               
							      	</div>
							      	<div class="p-name"><a href="#">
							      		【三只松鼠_开口松子】零食坚果特产炒货东北红松子原味
							      	</a>
							      	</div>
							      	<div class="p-price"><strong>￥35.90</strong></div>
							      </li>
							      <li>
							      	<div class="p-img">                    
							      		<a  href="#"> <img class="" src="/CodeIgniter-3.1.6/resource/images/browse1.jpg"> </a>               
							      	</div>
							      	<div class="p-name"><a href="#">
							      		【三只松鼠_开口松子】零食坚果特产炒货东北红松子原味
							      	</a>
							      	</div>
							      	<div class="p-price"><strong>￥35.90</strong></div>
							      </li>
							      <li>
							      	<div class="p-img">                    
							      		<a  href="#"> <img class="" src="/CodeIgniter-3.1.6/resource/images/browse1.jpg"> </a>               
							      	</div>
							      	<div class="p-name"><a href="#">
							      		【三只松鼠_开口松子】零食坚果特产炒货东北红松子原味
							      	</a>
							      	</div>
							      	<div class="p-price"><strong>￥35.90</strong></div>
							      </li>							      
							      <li>
							      	<div class="p-img">                    
							      		<a  href="#"> <img class="" src="/CodeIgniter-3.1.6/resource/images/browse1.jpg"> </a>               
							      	</div>
							      	<div class="p-name"><a href="#">
							      		【三只松鼠_开口松子】零食坚果特产炒货东北红松子原味
							      	</a>
							      	</div>
							      	<div class="p-price"><strong>￥35.90</strong></div>
							      </li>							      
							      <li>
							      	<div class="p-img">                    
							      		<a  href="#"> <img class="" src="/CodeIgniter-3.1.6/resource/images/browse1.jpg"> </a>               
							      	</div>
							      	<div class="p-name"><a href="#">
							      		【三只松鼠_开口松子218g】零食坚果特产炒货东北红松子原味
							      	</a>
							      	</div>
							      	<div class="p-price"><strong>￥35.90</strong></div>
							      </li>							      
					      
						     </ul>					
					    </div>
					</div>
-->
                <div class="introduceMain">
                    <div class="am-tabs" data-am-tabs>
                        <ul class="am-avg-sm-3 am-tabs-nav am-nav am-nav-tabs">
<!--                            <li class="am-active">-->
<!--
                                <a href="#">

										<span class="index-needs-dt-txt">宝贝详情</span></a>
-->

<!--                            </li>-->

                            <li>
<!--
                                <a href="#">

										<span class="index-needs-dt-txt">全部评价</span></a>
-->

                            </li>

                            <li>
<!--
                                <a href="#">

										<span class="index-needs-dt-txt">猜你喜欢</span></a>
-->
                            </li>
                        </ul>

                        <div class="am-tabs-bd">

<!--
                            <div class="am-tab-panel am-fade am-in am-active">
                                <div class="J_Brand">

                                    <div class="attr-list-hd tm-clear">
                                        <h4>产品参数：</h4>
                                    </div>
                                    <div class="clear"></div>
                                    <ul id="J_AttrUL">
                                        <li title="">产品类型:&nbsp;烘炒类</li>
                                        <li title="">原料产地:&nbsp;巴基斯坦</li>
                                        <li title="">产地:&nbsp;湖北省武汉市</li>
                                        <li title="">配料表:&nbsp;进口松子、食用盐</li>
                                        <li title="">产品规格:&nbsp;210g</li>
                                        <li title="">保质期:&nbsp;180天</li>
                                        <li title="">产品标准号:&nbsp;GB/T 22165</li>
                                        <li title="">生产许可证编号：&nbsp;QS4201 1801 0226</li>
                                        <li title="">储存方法：&nbsp;请放置于常温、阴凉、通风、干燥处保存 </li>
                                        <li title="">食用方法：&nbsp;开袋去壳即食</li>
                                    </ul>
                                    <div class="clear"></div>
                                </div>

                                <div class="details">
                                    <div class="attr-list-hd after-market-hd">
                                        <h4>商品细节</h4>
                                    </div>
                                    <div class="twlistNews">
                                        <img src="/CodeIgniter-3.1.6/resource/images/tw1.jpg" />
                                        <img src="/CodeIgniter-3.1.6/resource/images/tw2.jpg" />
                                        <img src="/CodeIgniter-3.1.6/resource/images/tw3.jpg" />
                                        <img src="/CodeIgniter-3.1.6/resource/images/tw4.jpg" />
                                        <img src="/CodeIgniter-3.1.6/resource/images/tw5.jpg" />
                                        <img src="/CodeIgniter-3.1.6/resource/images/tw6.jpg" />
                                        <img src="/CodeIgniter-3.1.6/resource/images/tw7.jpg" />
                                    </div>
                                </div>
                                <div class="clear"></div>

                            </div>
-->


<!--
                            <div class="am-tab-panel am-fade">
                                <div class="like">
                                    <ul class="am-avg-sm-2 am-avg-md-3 am-avg-lg-4 boxes">
                                        <li>
                                            <div class="i-pic limit">
                                                <img src="/CodeIgniter-3.1.6/resource/images/imgsearch1.jpg" />
                                                <p>【良品铺子_开口松子】零食坚果特产炒货
                                                    <span>东北红松子奶油味</span></p>
                                                <p class="price fl">
                                                    <b>¥</b>
                                                    <strong>298.00</strong>
                                                </p>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="i-pic limit">
                                                <img src="/CodeIgniter-3.1.6/resource/images/imgsearch1.jpg" />
                                                <p>【良品铺子_开口松子】零食坚果特产炒货
                                                    <span>东北红松子奶油味</span></p>
                                                <p class="price fl">
                                                    <b>¥</b>
                                                    <strong>298.00</strong>
                                                </p>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="i-pic limit">
                                                <img src="/CodeIgniter-3.1.6/resource/images/imgsearch1.jpg" />
                                                <p>【良品铺子_开口松子】零食坚果特产炒货
                                                    <span>东北红松子奶油味</span></p>
                                                <p class="price fl">
                                                    <b>¥</b>
                                                    <strong>298.00</strong>
                                                </p>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="i-pic limit">
                                                <img src="/CodeIgniter-3.1.6/resource/images/imgsearch1.jpg" />
                                                <p>【良品铺子_开口松子】零食坚果特产炒货
                                                    <span>东北红松子奶油味</span></p>
                                                <p class="price fl">
                                                    <b>¥</b>
                                                    <strong>298.00</strong>
                                                </p>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="i-pic limit">
                                                <img src="/CodeIgniter-3.1.6/resource/images/imgsearch1.jpg" />
                                                <p>【良品铺子_开口松子】零食坚果特产炒货
                                                    <span>东北红松子奶油味</span></p>
                                                <p class="price fl">
                                                    <b>¥</b>
                                                    <strong>298.00</strong>
                                                </p>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="i-pic limit">
                                                <img src="/CodeIgniter-3.1.6/resource/images/imgsearch1.jpg" />
                                                <p>【良品铺子_开口松子】零食坚果特产炒货
                                                    <span>东北红松子奶油味</span></p>
                                                <p class="price fl">
                                                    <b>¥</b>
                                                    <strong>298.00</strong>
                                                </p>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="i-pic limit">
                                                <img src="/CodeIgniter-3.1.6/resource/images/imgsearch1.jpg" />
                                                <p>【良品铺子_开口松子】零食坚果特产炒货
                                                    <span>东北红松子奶油味</span></p>
                                                <p class="price fl">
                                                    <b>¥</b>
                                                    <strong>298.00</strong>
                                                </p>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="i-pic limit">
                                                <img src="/CodeIgniter-3.1.6/resource/images/imgsearch1.jpg" />
                                                <p>【良品铺子_开口松子】零食坚果特产炒货
                                                    <span>东北红松子奶油味</span></p>
                                                <p class="price fl">
                                                    <b>¥</b>
                                                    <strong>298.00</strong>
                                                </p>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="i-pic limit">
                                                <img src="/CodeIgniter-3.1.6/resource/images/imgsearch1.jpg" />
                                                <p>【良品铺子_开口松子】零食坚果特产炒货
                                                    <span>东北红松子奶油味</span></p>
                                                <p class="price fl">
                                                    <b>¥</b>
                                                    <strong>298.00</strong>
                                                </p>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="i-pic limit">
                                                <img src="/CodeIgniter-3.1.6/resource/images/imgsearch1.jpg" />
                                                <p>【良品铺子_开口松子】零食坚果特产炒货
                                                    <span>东北红松子奶油味</span></p>
                                                <p class="price fl">
                                                    <b>¥</b>
                                                    <strong>298.00</strong>
                                                </p>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="i-pic limit">
                                                <img src="/CodeIgniter-3.1.6/resource/images/imgsearch1.jpg" />
                                                <p>【良品铺子_开口松子】零食坚果特产炒货
                                                    <span>东北红松子奶油味</span></p>
                                                <p class="price fl">
                                                    <b>¥</b>
                                                    <strong>298.00</strong>
                                                </p>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="i-pic limit">
                                                <img src="/CodeIgniter-3.1.6/resource/images/imgsearch1.jpg" />
                                                <p>【良品铺子_开口松子】零食坚果特产炒货
                                                    <span>东北红松子奶油味</span></p>
                                                <p class="price fl">
                                                    <b>¥</b>
                                                    <strong>298.00</strong>
                                                </p>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <div class="clear"></div>

                                分页 
                                <ul class="am-pagination am-pagination-right">
                                    <li class="am-disabled"><a href="#">&laquo;</a></li>
                                    <li class="am-active"><a href="#">1</a></li>
                                    <li><a href="#">2</a></li>
                                    <li><a href="#">3</a></li>
                                    <li><a href="#">4</a></li>
                                    <li><a href="#">5</a></li>
                                    <li><a href="#">&raquo;</a></li>
                                </ul>
                                <div class="clear"></div>

                            </div>
-->

                        </div>

                    </div>

                    <div class="clear"></div>

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
        <!--菜单 -->
        <div class=tip>
            <div id="sidebar">
                <div id="wrap">
                    <div id="prof" class="item">
                        <a href="#">
								<span class="setting"></span>
							</a>
                        <div class="ibar_login_box status_login">
                            <div class="avatar_box">
                                <p class="avatar_imgbox"><img src="/CodeIgniter-3.1.6/resource/images/no-img_mid_.jpg" /></p>
                                <ul class="user_info">
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
                            <div class="login_btnbox">
                                <?php
                                        if(isset($_SESSION['useremail'])){
                                            echo "<a href='/CodeIgniter-3.1.6/index.php/login_contrl/show_information' class='login_order'>个人中心</a>
                                            <a href='/CodeIgniter-3.1.6/index.php/orderForm_controll/show_order_form_view' class='login_favorite '>我的订单</a>";
                                        }
                                        else{
                                            
                                            echo "<a href='/CodeIgniter-3.1.6/index.php/login_contrl/show_login' class='login_favorite '>请登陆</a>";
                                        }
                                ?>
                            </div>
                            <i class="icon_arrow_white"></i>
                        </div>

                    </div>
                    <div id="shopCart" class="item">
                        <a href="/CodeIgniter-3.1.6/index.php/orderForm_controll/show_order_form_view">
								<span class="message"></span>
							</a>
                        <p>
                            我的订单
                        </p>
                        <p class="cart_num">
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
                    <div id="asset" class="item">
                        <a href="#">
								<span class="view"></span>
							</a>
                        <div class="mp_tooltip">
                            我的资产
                            <i class="icon_arrow_right_black"></i>
                        </div>
                    </div>

                    <div id="foot" class="item">
                        <a href="#">
								<span class="zuji"></span>
							</a>
                        <div class="mp_tooltip">
                            我的足迹
                            <i class="icon_arrow_right_black"></i>
                        </div>
                    </div>

                    <div id="brand" class="item">
                        <a href="#">
								<span class="wdsc"><img src="/CodeIgniter-3.1.6/resource/images/wdsc.png" /></span>
							</a>
                        <div class="mp_tooltip">
                            我的收藏
                            <i class="icon_arrow_right_black"></i>
                        </div>
                    </div>

                    <div id="broadcast" class="item">
                        <a href="#">
								<span class="chongzhi"><img src="/CodeIgniter-3.1.6/resource/images/chongzhi.png" /></span>
							</a>
                        <div class="mp_tooltip">
                            我要充值
                            <i class="icon_arrow_right_black"></i>
                        </div>
                    </div>
-->

                    <div class="quick_toggle">
                        <li class="qtitem">
                            <a href="#"><span class="kfzx"></span></a>
                            <div class="mp_tooltip">客服中心<i class="icon_arrow_right_black"></i></div>
                        </li>
                        <!--二维码 -->
                        <li class="qtitem">
                            <a href="#none"><span class="mpbtn_qrcode"></span></a>
                            <div class="mp_qrcode" style="display:none;"><img src="/CodeIgniter-3.1.6/resource/images/weixin_code_145.png" /><i class="icon_arrow_white"></i></div>
                        </li>
                        <li class="qtitem">
                            <a href="#top" class="return_top"><span class="top"></span></a>
                        </li>
                    </div>

                    <!--回到顶部 -->
                    <div id="quick_links_pop" class="quick_links_pop hide"></div>

                </div>

            </div>
            <div id="prof-content" class="nav-content">
                <div class="nav-con-close">
                    <i class="am-icon-angle-right am-icon-fw"></i>
                </div>
                <div>
                    我
                </div>
            </div>
            <div id="shopCart-content" class="nav-content">
                <div class="nav-con-close">
                    <i class="am-icon-angle-right am-icon-fw"></i>
                </div>
                <div>
                    购物车
                </div>
            </div>
            <div id="asset-content" class="nav-content">
                <div class="nav-con-close">
                    <i class="am-icon-angle-right am-icon-fw"></i>
                </div>
                <div>
                    资产
                </div>

                <div class="ia-head-list">
                    <a href="#" target="_blank" class="pl">
                        <div class="num">0</div>
                        <div class="text">优惠券</div>
                    </a>
                    <a href="#" target="_blank" class="pl">
                        <div class="num">0</div>
                        <div class="text">红包</div>
                    </a>
                    <a href="#" target="_blank" class="pl money">
                        <div class="num">￥0</div>
                        <div class="text">余额</div>
                    </a>
                </div>

            </div>
            <div id="foot-content" class="nav-content">
                <div class="nav-con-close">
                    <i class="am-icon-angle-right am-icon-fw"></i>
                </div>
                <div>
                    足迹
                </div>
            </div>
            <div id="brand-content" class="nav-content">
                <div class="nav-con-close">
                    <i class="am-icon-angle-right am-icon-fw"></i>
                </div>
                <div>
                    收藏
                </div>
            </div>
            <div id="broadcast-content" class="nav-content">
                <div class="nav-con-close">
                    <i class="am-icon-angle-right am-icon-fw"></i>
                </div>
                <div>
                    充值
                </div>
            </div>
        </div>

</body>

</html>
