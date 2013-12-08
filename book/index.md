# PHP扩展开发及内核应用

<span style='font-size:20px'>[**开始阅读**](</book/preface.md>)</span>

## 介绍

虽然用了书名号，但它是我的一个业余项目而已，它以Sara Golemon在2005年著作的《Extending and Embedding PHP》一书为蓝本翻译修改而来。这里先对Sara女士表示感谢，为我们奉献了这么优秀的一本技术图书。截止到目前（2011年），这几年以来，PHP的应用在中国突飞猛进，已经渗透到了互联网的各个方面，现在每个公司里都不可能一点没有PHP的影子了。有关PHP语言自身的书籍也是层出不穷，而有关PHP扩展开发以及PHP内核方面的文字却都比较零散，比较系统的有TIPI项目、Zend上面的几篇文章以及《Extending and Embedding PHP》这本书的英文版，不能不说这直接限制住了部分人在PHP语言上的深入研究与学习。我在学校的时候就翻阅过这本书的电子版，但因为是英文的终究没有在那时深入研究下去，也算是一件憾事。
浏览本项目，希望你已经具备以下技能：

   * 比较熟悉PHP语言。熟悉基本的C语言
   * 我希望你能在Linux上来实践这个项目里的东西，那会比较容易一些，当然win也没关系。

本项目不是一个翻译工作，而是以翻译为起点的一个系统的、持续的跟踪介绍PHP内核相关知识的系统，相对于原书来讲，本项目的内容有以下不同
   
   * 基准PHP版本由5.1改为了5.3.6，也就是说本书的例子默认都是以PHP5.3.6为例的。**记录的是2011年初次编辑的时候**
   * 改写了大部分例子，方便像我一样的初学者。
   * 会根据PHP的发展与自身的进步不断添加新的内容、优化原有内容。

现在项目的第一期的工作(初译)已经完成了，正在进入后续发布工作，每校正完一节就发布一节，期间如果朋友你发现了错误，还请帮忙斧正，我将在项目日志里声明以示感谢。此外还希望你能持续关注本项目，让我们一起为中国PHP事业的发展奉献一份力量。<span style="color:red;font-weight:bold;">这个项目每一次的修正日志都将以以下方式公布，还请大家予以关注：</span>
   
   * 微博： [http://weibo.com/walu](http://weibo.com/walu)

本人不才，这个项目刚刚起步，我就已经碰到了很多的困难，期间得到了许多帮助，这里记录下来，以示感谢：
   
   * 感谢Sara在2005年创作了[本书](http://www.amazon.com/Extending-Embedding-PHP-Sara-Golemon/dp/067232704X)。
   * 感谢小胖姜。
   * 感谢laruence大牛与你的[博客](http://www.laruence.com)。
   * 感谢TIPI项目, Google, Baidu。
   * ....


##《PHP扩展开发与内核应用》贡献者名单

根据首次参与时间，升序排列：
 
 * Walu, [weibo.com/walu](<http://weibo.com/walu>)，[site](<http://www.walu.cc>)，项目发起人。
 * Laruence, [weibo.com/laruence](<weibo.com/laruence>)，[Blog](<http://www.laruence.com>)，PHP开发组成员, Yaf, Taint, APC等Pecl扩展作者、维护者。鸟哥，不知道的话你就out了...
 * Demon，[weibo.com/409238807](<http://weibo.com/409238807>)，[Blog](<http://www.demon.at>)，12章内容贡献者。
 * 花生，[weibo.com/wenjuncool](<http://weibo.com/wenjuncool>)，校正&优化。
 * Guoguo，[blog@csdn](<http://blog.csdn.net/lgg201>)，14-20章内容贡献者。

## links  **点击下面的目录开始阅读**
   * [目录](</book/preface.md>)
