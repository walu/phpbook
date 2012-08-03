# 《PHP扩展开发及内核应用》目录

目录中汉字部分代表已经翻译完成的章节，带链接的表示已经发布的，未待链接的表示正在校正即将发布的。
   * 1. [PHP的生命周期](1.md)
      * 1. [让我们从SAPI开始](1.1.md)
	  * 2. [PHP的启动与终止](1.2.md)
	  * 3. [PHP的生命周期](1.3.md)
	  * 4. [线程安全](1.4.md)
	  * 5. [小结](1.5.md)
   * 2. [PHP变量在内核中的实现](2.md)
      * 1. [变量的类型](2.1.md)
	  *	2. [变量的值](2.2.md)
	  *	3. [创建PHP变量](2.3.md)
	  *	4. [变量的存储方式](2.4.md)
	  *	5. [变量的检索](2.5.md)
	  *	6. [类型转换](2.6.md)
	  *	7. [小结](2.7.md)
   * 3. [内存管理](3.md)
      * 1. [内存管理](3.1.md)
	  * 2. [引用计数](3.2.md)
	  * 3. [总结](3.3.md)
   * 4. [配置编译环境](4.md)
      * 1. [编译前的准备](4.1.md)
      * 2. [PHP编译前的config配置](4.2.md)
      * 3. [Unix/Linux平台下的编译](4.3.md)
      * 4. [在Win32平台上编译PHP](4.4.md)
      * 5. [小结](4.5.md)
   * 5. [第一个扩展](5.md)
      * 1. [一个扩展的基本结构](5.1.md)
      * 2. [编译我们的扩展](5.2.md)
      * 3. [静态编译](5.3.md)
      * 4. [编写函数](5.4.md)
      * 5. [小结](5.5.md)
   * 6. [函数的返回值](6.md)
      * 1. [一个特殊的参数：return_value](6.1.md)
      * 2. [引用与函数的执行结果](6.2.md)
      * 3. [小结](6.3.md)
   * 7. [函数的参数](7.md)
      * 1. [zend_parse_parameters](7.1.md)
      * 2. [Arg Info 与类型绑定](7.2.md)
      * 3. [小结](7.3.md)
   * 8. [Array与HashTable](8.md)
      * 1. [数组(C中的)与链表](8.1.md)
      * 2. [操作HashTable的API](8.2.md)
      * 3. [在内核中操作PHP语言中数组](8.3.md)
      * 3. [小结](8.4.md)
   * 9. [PHP中的资源类型](9.md)
      * 1. [复合类型的数据——资源](9.1.md)
      * 2. [Persistent Resources](9.2.md)
      * 3. [资源自有的引用计数](9.3.md)
      * 4. [小结](9.4.md)
   * 10. [PHP中的面向对象（一）](10.md)
      * 1. [zend_class_entry](10.1.md)
      * 2. [定义一个类](10.2.md)
      * 3. [定义一个接口](10.3.md)
      * 4. [类的继承与接口的实现](10.4.md)
      * 5. [小结](10.5.md)
   * 11. [PHP中的面向对象（二）](11.md)
      * 1. [生成对象的实例与调用方法](11.1.md)
      * 2. [读写对象的属性](11.2.md)
      * 3. [小结](11.3.md)
   * 12. [启动与终止的那点事](12.md)
      * 1. [关于生命周期](12.1.md)
      * 2. [MINFO与phpinfo](12.2.md)
      * 3. [常量](12.3.md)
      * 4. [PHP扩展中的全局变量](12.4.md)
      * 5. [PHP语言中的超级全局变量](12.5.md)
      * 6. [小结](12.6.md)
   * 13. INI Settings
      * 1. Declaring and Accessing INI Settings
      * 2. Summary
   * 14. Accessing Streams
      * 1. Streams Overview
      * 2. Opening Streams
      * 3. Accessing Streams
      * 4. Static Stream Operations
      * 5. Summary
   * 15. Implementing Streams
      * 1. PHP Streams Below the Surface
      * 2. Wrapper Operations
      * 3. Implementing a Wrapper
      * 4. Manipulation
      * 5. Inspection
      * 6. Summary
   * 16. Diverting the Stream
      * 1. Contexts
      * 2. Filters
      * 3. Summary
   * 17. Configuration and Linking
      * 1. Autoconf
      * 2. Looking for Libraries
      * 3. Enforcing Module Dependencies
      * 4. Speaking the Windows Dialect
      * 5. Summary
   * 18. 扩展生成器
      * 1. ext_skel生成器
      * 2. PECL_Gen生成器
      * 3. 小结
   * 19. Setting Up a Host Environment
      * 1. The Embed SAPI
      * 2. Building and Compiling a Host Application
      * 3. Re-creating CLI by Wrapping Embed
      * 4. Reusing Old Tricks
      * 5. Summary
   * 20. Advanced Embedding
      * 1. Calling Back into PHP
      * 2. Dealing with Errors
      * 3. Initializing PHP
      * 4. Overriding INI_SYSTEM and INI_PERDIR Options
      * 5. Capturing Output
      * 6. Extending and Embedding at Once
      * 7. Summary


## links
   * [《PHP扩展开发及内核应用》](<index.md>)
   * 下一节: [PHP的生命周期](<1.md>)

## LastModified
   * $Id$
