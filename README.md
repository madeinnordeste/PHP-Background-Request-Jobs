#PHP-Background-Request-Jobs

Run Background Request Jobs

##Syntax:
	
	php web-worker.php URL [COUNTER]

##Params:
	
**URL** : URL to access, ex: http://google.com

**COUNTER (Optional)** : requests for minute ( max: 60)

##Examples of use:

Default:

	php request-worker.php http://www.google.com
	
With COUNTER:

	php request-worker.php http://www.google.com 10

With nohup (in background)

	nohup php request-worker.php http://www.google.com &

Send to /dev/null
	
	php request-worker.php http://www.google.com 10 >> /dev/null

##Output examples

**Success:**
	
	php request-worker.php http://www.google.com 3
	01 - 2014-11-20 06:12:31 - GET:http://www.google.com - SUCCESS
	02 - 2014-11-20 06:12:51 - GET:http://www.google.com - SUCCESS
	03 - 2014-11-20 06:13:12 - GET:http://www.google.com - SUCCESS
	
**Fail:**

	php requphp request-worker.php http://in.val.id 3
	01 - 2014-11-20 06:14:52 - GET:http://in.val.id - ERROR
	02 - 2014-11-20 06:15:12 - GET:http://in.val.id - ERROR
	03 - 2014-11-20 06:15:32 - GET:http://in.val.id - ERROR


	
	