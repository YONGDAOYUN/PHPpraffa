# PHPpraffa是什么？
PHPpraffa 是praffa的PHP版本。（[Python版本点这里](https://github.com/YONGDAOYUN/praffa "源码")）是一款针对阿里云的函数计算+API网关产品开发的轻型框架。  

# 开发说明
* 在method里的Example是示例类，类文件名、类名、method**三者同名**，建议采用大驼峰规则定义，例如：GetUserInfo  
* 主返回方法名必须是handler，并且放在类方法的最后一个。其他代码自己是自己业务代码。  
* method放到API网关配置的Query里，配置为映射方式，**body为非表单提交模式的JSON**  

# 图解从零开始  
鼠标放在图片上有说明  

![01新建函数计算服务](https://cdn.yongdaoyun.com/pub/images/praffa/01.png "01新建函数计算服务")
![02选择python3](https://cdn.yongdaoyun.com/pub/images/praffa/02.png "02选择python3")
![03选择空白函数](https://cdn.yongdaoyun.com/pub/images/praffa/03.png "03选择空白函数")
![04不用触发器](https://cdn.yongdaoyun.com/pub/images/praffa/04.png "04不用触发器")
![05选择文件夹上传](https://cdn.yongdaoyun.com/pub/images/praffa/05.png "05选择文件夹上传")
![06授权](https://cdn.yongdaoyun.com/pub/images/praffa/06.png "06授权")
![07完成设置](https://cdn.yongdaoyun.com/pub/images/praffa/07.png "07完成设置")
![08新建API网关服务](https://cdn.yongdaoyun.com/pub/images/praffa/08.png "08新建API网关服务")
![09创建API](https://cdn.yongdaoyun.com/pub/images/praffa/09.png "09创建API")
![10入参设置注意对照](https://cdn.yongdaoyun.com/pub/images/praffa/10.png "10入参设置注意对照")
![11绑定函数计算](https://cdn.yongdaoyun.com/pub/images/praffa/11.png "11绑定函数计算")
![12保存API设定](https://cdn.yongdaoyun.com/pub/images/praffa/12.png "12保存API设定")
![13发布API到测试](https://cdn.yongdaoyun.com/pub/images/praffa/13.png "13发布API到测试")
![14调试API](https://cdn.yongdaoyun.com/pub/images/praffa/14.png "14调试API")
![15调试成功](https://cdn.yongdaoyun.com/pub/images/praffa/15.png "15调试成功")  
# 我的联系方式
微信：  
![微信](https://cdn.yongdaoyun.com/pub/images/praffa/wx.jpg "微信") 