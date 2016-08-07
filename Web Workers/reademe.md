
 Web Workers 是 HTML5 提供的一个javascript多线程解决方案，我们可以将一些大计算量的代码交由web Worker运行而不冻结用户界面。它独立于其他脚本，不会影响页面的性能。您可以继续做任何愿意做的事情：点击、选取内容等等，
 而此时 web worker 在后台运行。

    1.通过 worker = new Worker( url ) 加载一个JS文件来创建一个worker，同时返回一个worker实例。

    2.通过worker.postMessage( data ) 方法来向worker发送数据。

    3.绑定worker.onmessage方法来接收worker发送过来的数据。

    4.可以使用 worker.terminate() 来终止一个worker的执行。



﻿用来测试的js和html文件都需要发布到站点才可以正常访问，否则会提示如下错误：

![image](https://github.com/missfish/New-properties-of-HTML5/blob/master/Web%20Workers/screenshot/error.png)
