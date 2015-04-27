# PHP-Gearman-Router
Gearman Implementations &amp; Research
Contains samples of how I have implemented parallel processing of transactions using Gearman as a task-manager as opossed to 
the traditional C++/Java/Python daemons

How it works
------------
Within the src folder there is the GearmanRouter.php file. This file serves as the first integration point. Your transaction processing layer, will invoke the route() function within the GearmanRouter.php.

GearmanRouter.php sends the data/request to Gearman Server. The GearmanWorker, GRouterWorker.php receives the request from the server and dynamically loads the associated processing class for example ExampleA.php and calls the function process(). Process, by virtue of its name is where the request is handled for example connect to some external API and send same data or update a database table with the specific data.

Dependencies
-------------
http://gearman.org/getting-started/
