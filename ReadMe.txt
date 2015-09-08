LooPHP -- 撸PHP
=============

LooPHP是一个PHP事件循环程序 (http://en.wikipedia.org/wiki/Event_loop) .
它为  PHP 使用事件驱动的编程风格提供抽象基类。LooPHP可以处理高达 150,000 ~ 事件/秒。由于 PHP 的单一线程的性质和缺乏一种统一方法的轮询socket/streams等，事件源码的实现留给大家去完成。

注意:
	-什么都不应阻塞，如果你需要等待某事发生，应安排使用事件。
	-事件能通过 $loophp_event->cancel() 取消运行.

要求:
	-PHP 5.3+
	
TODO:
	-异步非阻塞
 
