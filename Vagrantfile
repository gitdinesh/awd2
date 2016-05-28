Vagrant.configure("2") do |config|
    config.vm.box = "ubuntu/trusty64"
	config.vm.network :private_network, ip: '10.10.10.120'

	config.vm.synced_folder "../", "/web", :owner=> 'vagrant', :group=>'www-data', :mount_options => ['dmode=770', 'fmode=770']

   
    config.vm.provider :virtualbox do |vb|
        vb.customize ["setextradata", :id, "VBoxInternal2/SharedFoldersEnableSymlinksCreate/v-root", "1"]
        vb.customize ["modifyvm", :id, "--memory", "1028"]
		vb.name = "ESOFT_AWD"
    end
end
