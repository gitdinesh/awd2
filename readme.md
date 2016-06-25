#Conditional flow

## If condition

When you are using if condition use folwing syntax

    if [ $user_name = "test" ] 
    then
        //Condition body
    fi

## Relational Operators

Bourne Shell supports following relational operators which are 
specific to numeric values. These operators would not work 
for string values unless their value is numeric.

For example, following operators would work to check a relation 
between 10 and 20 as well as in between "10" and "20" but not in 
between "ten" and "twenty".

    -eq	Checks if the value of two operands are equal or not, if yes then condition becomes true.	
    [ $a -eq $b ] is not true.
    -ne	Checks if the value of two operands are equal or not, if values are not equal then condition becomes true.	
    [ $a -ne $b ] is true.
    -gt	Checks if the value of left operand is greater than the value of right operand, if yes then condition becomes true.	
    [ $a -gt $b ] is not true.
    -lt	Checks if the value of left operand is less than the value of right operand, if yes then condition becomes true.	
    [ $a -lt $b ] is true.
    -ge	Checks if the value of left operand is greater than or equal to the value of right operand, if yes then condition becomes true.	
    [ $a -ge $b ] is not true.
    -le	Checks if the value of left operand is less than or equal to the value of right operand, if yes then condition becomes true.
    [ $a -le $b ] is true.