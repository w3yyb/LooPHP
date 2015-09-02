<?php

require( dirname( dirname( __FILE__ ) )."/LooPHP/Autoload.php" );


LooPHP_Autoload::register();

$loop = new LooPHP_EventLoop();


for($i=0;$i<1000;$i++) {
$loop->addEvent( function() {
	//print "Event 1\n";
    $section = file_get_contents('https://qyapi.weixin.qq.com/cgi-bin/user/get?access_token=ACCESS_TOKEN&userid=USERID', NULL, NULL, 0, 10);
	error_log($section,3,'./err.log');
}, 0.001); //时间：秒

}

/*
$loop->addEvent( function() {
	print "Event 2\n";
}, 2 );


$loop->addEvent( function() {
	print "Event 2\n";
}, 3 );


$loop->addEvent( function() {
	print "Event 2\n";
}, 4);


$loop->addEvent( function() {
	print "Event 2\n";
}, 5 );

 

 $loop->addEvent( function() {
	print "Event 2\n";
}, 6 );

 $loop->addEvent( function() {
	print "Event 2\n";
}, 7);

 $loop->addEvent( function() {
	print "Event 2\n";
}, 8);

 $loop->addEvent( function() {
	print "Event 2\n";
}, 9);
*/

print "Starting Run Loop:\n";
$loop->run();

?>
