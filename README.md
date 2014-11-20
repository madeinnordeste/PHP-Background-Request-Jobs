#PHP-Background-Request-Jobs

Run Background Request Jobs

##Syntax:
	
	php web-worker.php URL [COUNTER]

##Params:
	
**URL** : URL to access, ex: http://google.com

**COUNTER (Optional)** : requests for minute ( max: 60)

##Examples of use:

Default:

	php web-worker.php http://www.google.com
	
With COUNTER:

	php web-worker.php http://www.google.com 10

With nohup (in background)

	nohup php web-worker.php http://www.google.com &

Send to /dev/null
	
	php web-worker.php http://www.google.com 10 >> /dev/null


	
	