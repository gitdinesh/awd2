clear

echo " =========== IF CONDITION WITH RELATIONAL OPERATORS ========="

echo " Enter two numbers "
read number1
read number2

# Check whether username is test and password is test1
# -a = and
if [ $number1 -eq $number2 ]
then
    echo "NUmbers are equal"

if [  $number1 -gt $number2 ]
then    
    echo "Number 1 Greater than Number 2"

elif [  $number1 -lt $number2 ]
then    
    echo "Number 1 Less than Number 2"


elif [  $number1 -ge $number2 ]
then    
    echo "Number 1 Greater than or equal Number 2"



elif [  $number1 -le $number2 ]
then    
    echo "Number 1 Less than or equal Number 2"


else 
    echo " Not in any relational operators"
fi
