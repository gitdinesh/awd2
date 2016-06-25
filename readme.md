#Conditional flow

## If condition

The if...else...fi statement is the next form of control statement that allows Shell to execute statements in more controlled way and making
 decision between two choices.

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


## Boolean Operators


    !	This is logical negation. This inverts a true condition 
    into false and vice versa.	
    [ ! false ] is true.
    
    -o	This is logical OR. If one of the operands is true 
    then condition would be true.	[ $a -lt 20 -o $b -gt 100 ] is true.
   
    -a	This is logical AND. If both the operands are true then 
    condition would be true otherwise it would be false.	[ $a -lt 20 -a $b -gt 100 ] is false.




## String Operators


    =	Checks if the value of two operands are equal or not, 
    if yes then condition becomes true.	[ $a = $b ] is not true.

    !=	Checks if the value of two operands are equal or not, 
    if values are not equal then condition becomes true.	
    [ $a != $b ] is true.

    -z	Checks if the given string operand size is zero. 
    If it is zero length then it returns true.	[ -z $a ] 
    is not true.

    -n	Checks if the given string operand size is non-zero. 
    If it is non-zero length then it returns true.	
    [ -n $a ] is not false.

    str	Check if str is not the empty string. 
    If it is empty then it returns false.	[ $a ] is not false.