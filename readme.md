# Setup Vagrant  Box
In order to setup vagrant box in to your local machine you need to download vagratn software from the internet
you can download [Vagrant](https://www.vagrantup.com/) from [here](https://www.vagrantup.com/).

After installing Vagrant you need to install [Virtualbox](https://www.virtualbox.org/wiki/Download_Old_Builds_4_3) provider. 
You can download it from [here](https://www.virtualbox.org/wiki/Download_Old_Builds_4_3).
We are using VirtualBox 4.3 with latest vagrant setup.

##Vagrant commands

If you dont have VagrantFile you can genrate it with following command
    
    vagrant init

once you execute this command in your gitbash (in windows) or  terminal(in Mac) you can see VagrantFile created by the system

If you already have VagrantFile place it in your project directory and execute following command
    
    vagrant up   
 
 This will take some time to download ubuntu version from the internet. However If you have 
 downloaded ubuntu server version (trusty64.box) uncomment 
    
    config.vm.box_url = "file:///location/to/trusty64.box"