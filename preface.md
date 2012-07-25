# preface 《PHP扩展开发及内核应用》目录 



目录中汉字部分代表已经翻译完成的章节，带链接的表示已经发布的，未待链接的表示正在校正即将发布的。
		<ul class="catalog">
			<li> [1. PHP的生命周期](ch1.html) </li>
			<li><ul>
				<li> [1. 让我们从SAPI开始](ch1.1.html) </li>
				<li> [2. PHP的启动与终止](ch1.2.html) </li>
				<li> [3. PHP的生命周期](ch1.3.html) </li>
				<li> [4. 线程安全](ch1.4.html) </li>
				<li> [5. 小结](ch1.5.html) </li>
			</ul></li>
			
			<li> [2. PHP变量在内核中的实现](ch2.html) </li>
			<li><ul>
				<li> [1. 变量的类型](ch2.1.html) </li>
				<li> [2. 变量的值](ch2.2.html) </li>
				<li> [3. 创建PHP变量](ch2.3.html) </li>
				<li> [4. 变量的存储方式](ch2.4.html) </li>
				<li> [5. 变量的检索](ch2.5.html) </li>
				<li> [6. 类型转换](ch2.6.html) </li>
				<li> [7. 小结](ch2.7.html) </li>
			</ul></li>
			
			<li> [3. 内存管理](ch3.html) </li>
			<li><ul>
				<li> [1. 内存管理](ch3.1.html) </li>
				<li> [2. 引用计数](ch3.2.html) </li>
				<li> [3. 总结](ch3.3.html) </li>
			</ul></li>
			
			<li> [4. 配置编译环境](ch4.html) </li>
			<li><ul>
				<li> [1. 编译前的准备](ch4.1.html) </li>
				<li> [2. PHP编译前的config配置](ch4.2.html) </li>
				<li> [3. Unix/Linux平台下的编译](ch4.3.html) </li>
				<li> [4. 在Win32平台上编译PHP](ch4.4.html) </li>
				<li> [5. 小结](ch4.5.html) </li>
			</ul></li>
			
			<li> [5. 第一个扩展](ch5.html) </li>
			<li><ul>
				<li> [1. 一个扩展的基本结构](ch5.1.html) </li>
				<li> [2. 编译我们的扩展](ch5.2.html) </li>
				<li> [3. 静态编译](ch5.3.html) </li>
				<li> [4. 编写函数](ch5.4.html) </li>
				<li> [5. 小结](ch5.5.html) </li>
			</ul></li>
			
			<li> [6. 函数的返回值](ch6.html) </li>
			<li><ul>
				<li> [1. 一个特殊的参数：return_value](ch6.1.html) </li>
				<li> [2. 引用与函数的执行结果](ch6.2.html) </li>
				<li> [3. 小结](ch6.3.html) </li>
			</ul></li>
			
			<li> [7. 函数的参数](ch7.html) </li>
			<li><ul>
				<li> [1. zend_parse_parameters](ch7.1.html) </li>
				<li> [2. Arg Info 与类型绑定](ch7.2.html) </li>
				<li> [3. 小结](ch7.3.html) </li>
			</ul></li>
			
			<li> [8. Array与HashTable](ch8.html) </li>
			<li><ul>
				<li> [1. 数组(C中的)与链表](ch8.1.html) </li>
				<li> [2. 操作HashTable的API](ch8.2.html) </li>
				<li> [3. 在内核中操作PHP语言中数组](ch8.3.html) </li>
				<li> [3. 小结](ch8.4.html) </li>
			</ul></li>
			
			<li> [9. PHP中的资源类型](ch9.html) </li>
			<li><ul>
				<li> [1. 复合类型的数据——{资源}](ch9.1.html) </li>
				<li> [2. Persistent Resources](ch9.2.html) </li>
				<li> [3. {资源}自有的引用计数](ch9.3.html) </li>
				<li> [4. 小结](ch9.4.html) </li>
			</ul></li>
			
			<li> [10. PHP中的面向对象（一）](ch10.html) </li>
			<li><ul>
				<li> [1. zend_class_entry](ch10.1.html) </li>
				<li> [2. 定义一个类](ch10.2.html) </li>
				<li> [3. 定义一个接口](ch10.3.html) </li>
				<li> [4. 类的继承与接口的实现 ](ch10.4.html) </li>
				<li> [5. 小结](ch10.5.html) </li>
			</ul></li>
			
			<li> [11. PHP中的面向对象（二）](ch11.html) </li>
			<li><ul>
				<li> [1. 生成对象的实例与调用方法](ch11.1.html) </li>
				<li> [2. 读写对象的属性](ch11.2.html) </li>
				<li> [3. 小结](ch11.3.html) </li>
			</ul></li>
			
			<li><a >12. 启动与终止的那点事</a></li>
			<li><ul>
				<li><a >1. 循环</a></li>
				<li><a >2. MINFO与phpinfo</a></li>
				<li><a >3. 常量</a></li>
				<li><a >4. 编写扩展时的常量</a></li>
				<li><a >5. PHP语言中的超级变量</a></li>
				<li><a >6. 小结</a></li>
			</ul></li>
			
			<li><a >13. INI Settings</a></li>
			<li><ul>
				<li><a >1. Declaring and Accessing INI Settings</a></li>
				<li><a >2. Summary</a></li>
			</ul></li>
			
			<li><a >14. Accessing Streams</a></li>
			<li><ul>
				<li><a >1. Streams Overview</a></li>
				<li><a >2. Opening Streams</a></li>
				<li><a >3. Accessing Streams</a></li>
				<li><a >4. Static Stream Operations</a></li>
				<li><a >5. Summary</a></li>
			</ul></li>
			
			<li><a >15. Implementing Streams</a></li>
			<li><ul>
				<li><a >1. PHP Streams Below the Surface</a></li>
				<li><a >2. Wrapper Operations</a></li>
				<li><a >3. Implementing a Wrapper</a></li>
				<li><a >4. Manipulation</a></li>
				<li><a >5. Inspection</a></li>
				<li><a >6. Summary</a></li>
			</ul></li>
			
			<li><a >16. Diverting the Stream</a></li>
			<li><ul>
				<li><a >1. Contexts</a></li>
				<li><a >2. Filters</a></li>
				<li><a >3. Summary</a></li>
			</ul></li>
			
			<li><a >17. Configuration and Linking</a></li>
			<li><ul>
				<li><a >1. Autoconf</a></li>
				<li><a >2. Looking for Libraries</a></li>
				<li><a >3. Enforcing Module Dependencies</a></li>
				<li><a >4. Speaking the Windows Dialect</a></li>
				<li><a >5. Summary</a></li>
			</ul></li>
			
			<li><a >18. 扩展生成器</a></li>
			<li><ul>
				<li><a >1. ext_skel生成器</a></li>
				<li><a >2. PECL_Gen生成器</a></li>
				<li><a >3. 小结</a></li>
			</ul></li>
			
			<li><a >19. Setting Up a Host Environment</a></li>
			<li><ul>
				<li><a >1. The Embed SAPI</a></li>
				<li><a >2. Building and Compiling a Host Application</a></li>
				<li><a >3. Re-creating CLI by Wrapping Embed</a></li>
				<li><a >4. Reusing Old Tricks</a></li>
				<li><a >5. Summary</a></li>
			</ul></li>
			
			<li><a >20. Advanced Embedding</a></li>
			<li><ul>
				<li><a >1. Calling Back into PHP</a></li>
				<li><a >2. Dealing with Errors</a></li>
				<li><a >3. Initializing PHP</a></li>
				<li><a >4. Overriding INI_SYSTEM and INI_PERDIR Options</a></li>
				<li><a >5. Capturing Output</a></li>
				<li><a >6. Extending and Embedding at Once</a></li>
				<li><a >7. Summary</a></li>
			</ul></li>
		</ul>


## links
   * [《PHP扩展开发及内核应用》](<index.md>)
   * [PHP的生命周期](<1.md>)

## LastModified 
   * $Id$
