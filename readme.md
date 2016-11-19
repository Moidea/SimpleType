##主题信息

* 名称：SimpleType
* 版本：V4.1
* 作者：罗格 Roogle
* 联系：Q1989473781
* 博客：http://www.moidea.info
* 下载：http://www.moidea.info/archives/296.html
* 主题支持：PC端/移动端


##更新说明

2016年11月18日 SimpleType更新到V 4.1

版本优势：4.1版本没有重大改变，主要为修复页面排版，对颜色进行了统一，因为去除了部分无用代码，所以主题比上一版本更小了，目前该4.1版本单纯主题文件大小仅为41KB左右，如果去除分类图片主题包会更小，不过越往后对该主题优化的难度越大，因为能优化的地方越来越少了，也许有一天我会推翻全部代码将网站样式改成无CSS版本的纯文字网页，将前端功能减少到只有文章列表和文章，就像当初的1.0版本一样。

1. 主要更新了CSS样式，建议老版用户直接更新主题
2. page.php更新了部分显示问题
3. header.php更新了顶部导航栏
4. post.php更新了排版并微调
5. 文章归档页面更新排版样式

2016年11月12日 SimpleType更新到V 4.0

版本优势：4.0版本比3.0版本又小了，将静态图片转化为BASE64图片，减少了图片和请求，后期还会继续优化

1. 首页函数优化，将原来写死的代码改成自动函数调用，不再需要手动填入分类mid
2. 搜索功能action无效修改
3. 顶部logo图片去除改成文字logo
4. 部分图片转化为base64编码，减少请求，减小主题大小

2016年9月10日 SimpleType更新到V 3.0

版本优势：去除了2.0版本的背景，修复手机版自适应问题和2.0版本的多出显示BUG，将文章浏览统计插件改成TeStat，首页图片格子更加好看

1. 请自行更改comments.php文件的多说评论，不要再询问如何改成默认评论
2. 文档归档页建立方法为后台新建页面选择“归档模板”
3. 网站访客统计，请更改footer.php文件
4. 手机版底部联系方式，请更改footer.php文件
5. 网站运行时间请更改function.php文件，时间格式为：2012-06-26 00:00:00
6. 网站首页顶部导航，请更改header.php文件
7. 网站侧边栏，对不起，我们没有侧边栏提供
8. 首页分类图标自己制作图片放在img目录里：c-分类名缩略名.png
9. 首页分类对应方法，请更改index.php文件里的mid号，不懂mid号获取的请自行百度
10. 主题文章自带几个自定义字段分别为：desc 为文章描述文字/copyright 为文章版权链接/tips 为文章小提示
11. 主题版权信息，请随意，想去就去，不想去就不去，修改地方为footer.php
12. 记得开启插件TeStat

2016年1月15日 SimpleType更新到V 2.0

版本优势：2.0版本比1.0变化要大很多，期间收到很多朋友发来消息希望对1.0版本更新一些细节，讲真当初并没有打算继续更新，1.0版本对我来说几乎满足我所有的要求，代码也比较随意，发布出来以后没想到还受到了不少朋友的喜爱，大家也给我提了很多建设性的意见，今天才有了2.0的版本诞生，由于我有自己的商业项目需要维护，平时并没有多少时间来打理该款主题，只能借着午夜更新一下代码，2.0的第一个版本我没有发布出来，感觉那样背弃了我的初衷，之所以创造这款主题，就是希望能尽一切的可能保留最原始的东西，让作者能积极的去写作，而不是去折腾主题。

1. 优化了404页面，去除部分赘余代码和图片
2. 增加归档页面，后台新建页面是选择“归档模版”
3. 优化了原来网页标题的显示
4. 文章页添加了文章描述自定义字段desc
5. 文章页去除了顶部的导航功能，添加了相关文章
6. 主题不提供搜索功能，想看网站以前内容，请新建归档页，查看很方便
7. 对于折腾人的评论给了简单的样式
8. 简单自适应了手机屏幕
9. 部分细节进行了优化


##安装说明

注：3.0以后版本在我博客里的下载包已经包含插件包，之前的版本插件包需要单独下载，从Github下载的请到我博客下载插件

1. 将插件上传网站并后台打开
2. 修改header.php文件里的菜单导航
3. 修改comments.php文件里的多说评论代码
4. 修改footer.php文件里的访客统计代码，手机版联系电话代码，建站时间代码，时间格式为：2012-06-26 00:00:00
5. 修改img里的分类图片为你的分类图片，图片名称为：c-分类缩略名.png 
6. 修改function.php里的你的对应分类的显示文章数量
7. 文章的几个小功能分别为：desc 文章顶部描述 / copyright 转载文章链接 / tips 为文章底部小提示
8. 主题集成小按钮定义class="button" 和 class="download" ，红色文字 class="red" 

##主题声明

关于主题配置问题，本主题过于简单，没有复杂的逻辑代码，因为是自己使用，所以好多地方调用文章分类都是直接代码写死的，写死的另外一个好处就是减少函数调用，提升速度，毕竟写这个主题的目的就是为了追求速度与小巧，你只要按照安装说明自己修改即可，有问题可自行谷歌。

显示问题或者建议请Q1989473781
