# cloud-broker
A cloud broker service provider that offers a service from one CSP to the cloud consumer
Steps to follow:

    1. Make 2 virtual machines. Connect them in a same network.
    
    2. Now install the xampp server on both the machines and the needed programs were written namely cloudServer.php and cloudBroker.php.

    3. Cloud service program(cloudServer.php) for multiplication of 2 numbers to be written on the service provider machine.

    4. Cloud Broker program(cloudBroker.php) to provide the service to the cloud consumer to be written on another broker machine.

    5. Start the broker service on one vm and provider service on another machine.
         sudo opt/lampp/lampp start

    6. If we enter the correct username and password then it will automatically redirected to the service and we can use the service.
