#Apache2,PHP,Mysql instalation  and Configuration with Ubuntu 14.4 

##Installing Apache 2

Before install any utilities or softwares make sure to update Ubuntu version and other relevent application. 
NOTE:  You dont need to Ubntu update every time, However make sure everything up to date.
	
	sudo apt-get update
	sudo apt-get -y install apache2 

###Install PHP5: 

	sudo apt-get install software-properties-common python-software-properties -y
	sudo add-apt-repository ppa:ondrej/php5-5.6 -y
	sudo apt-get -y update

	sudo apt-get -y install php5 php-pear php5-curl php5-mysql php5-gd

###install MySQL: 

	sudo apt-get update
	sudo apt-get install -y mysql-server-5.6


###Install Phpmyadmin : 
	
	sudo apt-get install phpmyadmin


###Enable Mode rewrite  

Without enabling mode rewrite in apache2, Pretty URL routing will not work. in order to enable it,

*Locate /etc/apache2/apache2.conf.
*Change AllowOverride None   to AllowOverride All 

And then run

	sudo a2enmod rewrite 
	sudo service apache2 restart



###Change default document root 

When installing apache2 default document root will be /var/www/html. You can change document root in /var/etc/apache2/sites-available/000-default.conf

###Configure Apache for multiple sites

Apache allow you to host multiple sites that are host in deferent document roots. Following are the apache configurations for host your site in apache. 

Assume I have domain named abc.com. I want it to point my 10.10.10.120 host.


*STEP 1
 
 Create directory named abc.com under /var/www/. You can create directory without .com. It is more clear to have  same directory name and domain name. So this will not conflict when you are working with more sites in same host.

*STEP 2
 
 Create .conf file with the same name that you already created in STEP 1. You can do this following command
 
 	sudo cp /etc/apache2/000-defualt.conf /etc/apache2/abc.com.conf
 	sudo vi abc.com.conf

 In abc.com.conf change,

 	ServerName abc.com
 	DocumentRoot /var/www/abc.com


*STEP 3
 
 Enable site in order to make it work

 	sudo a2ensite abc.com.conf
 	sudo service apache2 restart
 	

Your Apache configurations are done ....



###Point domain name to the host/VPS server
   
Login to abc.com domain manage portal, Add your VPS IP address  as  A record.


###Point Local Domain name to vagrant box

While you are in Master PC (Windows or Mac OSX) Change Host file in your local PC. In Windows you can find it  somewhere ins System32 


###Do the symbolic link between vagrant web and /var/www

Since our source code straighter way sync with web on ubuntu. you need to make your source code available in /var/www/abc.com direcotory.
for this you can do 
	
	sudo ln -s /web/your_project_folder/* /var/www/abc.com


