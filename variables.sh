#!/bin/bash
# Working with variable in shell script
# create Small form with shell script


clear
echo "========= User Registration form ============="
echo "Enter First Name"
read fName
echo "Enter last name"
read lName
echo "Enter address"
read address
echo "Enter Age "
read age

echo "===================================================">>output.txt
cal >>output.txt
echo -e "\n\n"
echo "First Name : $fName" >>output.txt
echo "Last Name : $lName" >> output.txt
echo "Address : $address" >> output.txt
echo "Age : $age" >> output.txt

echo "=============== Have good day =======================" >> output.txt





