#!/bin/bash
# If condition 
# when you are using after start if statement, you need to end it with fi



clear

echo " =========== IF COMMAND========="

echo " Enter user name"
read user_name

echo " Enter Password"
read password

# Check whether username is test and password is test1
# -a = and
if [ $user_name = "test" -a  $password = 'test1' ]
#if [[  $user_name = "test" &&  $password = 'test1' ]]
then
    echo "WELCOME TEST user"

else 
    echo " Ooopse invalid usename and password"
fi


