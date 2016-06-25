#!/bin/bash
# Create deployment script


clear

echo " =========== Welcome to globalpay deployment script ==============="

echo " 1. Production"
echo " 2. QA"
echo " 3. Development"

read -p "Pleaes select the project enviornment : " opt


env=""
case $opt in
    1) env="production"
    ;;
    2) env="qa"
    ;;
    3) env="dev"
    ;;  
esac 

projectpath="/web/globalpay/*"
deploymentpath="/web/"
deploymentpath=$deploymentpath$env
if [[ ! -e $deploymentpath ]]; then
    echo "This is Fresh build...."
    echo " creating derectory on .... $deploymentpath"
    sudo mkdir $deploymentpath
    echo "done..."

    echo " Copying source code......."

    sudo cp -f $projectpath $deploymentpath
    echo " done ...."



else 
    echo "$deploymentpath already exists"
    echo " Copying source code......."
    sudo cp -f $projectpath $deploymentpath
    echo " done ...."

fi
