<?php

interface LooPHP_EventSource
{
/*
 *这个函数可以做 * 任何事 * ，但应尽量接近 $timeout 时间返回
Timeout 为秒，但它可以为 NULL。如果为 NULL 则不超时 (无挂起的事件)。
必须返回一个布尔值，TRUE-> 继续，FALSE-停止 >
 */
	public function process( LooPHP_EventLoop $event_loop, $timeout );
	
}

?>
