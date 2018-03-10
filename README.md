# PHPCISystem
在线蛋糕订购系统
查看说明：
后台使用PHP的CI框架，分成三部分：view、controller、model。
	view:视图层，主要由html页面组成，路径：PHPCISystem/application/views。
	model：模型层，主要处理数据，路径：PHPCISystem/application/models。
	controller：控制器层，接收view层的请求，调用model层完成数据处理，路径：PHPCISystem/application/controllers。
系统基本流程：view点击按钮提交表单或者点击链接跳转，会调用对应的controller，controller根据请求的内容调用对应的model完成数据从数据库的搜索或者计算等。
