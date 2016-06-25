#Conditional flow

##If condition

The if...else...fi statement is the next form of control statement that allows Shell to execute statements in more controlled way and making
 decision between two choices.

    if [ $user_name = "test" ] 
    then
        //Condition body
    fi

##Relational Operators

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


##Boolean Operators


    !	This is logical negation. This inverts a true condition 
    into false and vice versa.	
    [ ! false ] is true.
    
    -o	This is logical OR. If one of the operands is true 
    then condition would be true.	[ $a -lt 20 -o $b -gt 100 ] is true.
   
    -a	This is logical AND. If both the operands are true then 
    condition would be true otherwise it would be false.	[ $a -lt 20 -a $b -gt 100 ] is false.


##File Test Operators

There are following operators to test various properties associated with a Unix file.
Assume a variable file holds an existing file name "test" whose size is 100 bytes and has read, 
write and execute permission on −
    -b file	Checks if file is a block special file if yes then condition becomes true.
    [ -b $file ] is false.

    -c file	Checks if file is a character special file if yes then condition becomes true.	
    [ -c $file ] is false.

    -d file	Check if file is a directory if yes then condition becomes true.	
    [ -d $file ] is not true.

    -f file	Check if file is an ordinary file as opposed to a directory or special file if yes then condition becomes true.	
    [ -f $file ] is true.

    -g file	Checks if file has its set group ID (SGID) bit set if yes then condition becomes true.	
    [ -g $file ] is false.

    -k file	Checks if file has its sticky bit set if yes then condition becomes true.	
    [ -k $file ] is false.

    -p file	Checks if file is a named pipe if yes then condition becomes true.	
    [ -p $file ] is false.

    -t file	Checks if file descriptor is open and associated with a terminal if yes then condition becomes true.	
    [ -t $file ] is false.

    -u file	Checks if file has its set user id (SUID) bit set if yes then condition becomes true.	
    [ -u $file ] is false.

    -r file	Checks if file is readable if yes then condition becomes true.	
    [ -r $file ] is true.

    -w file	Check if file is writable if yes then condition becomes true.	
    [ -w $file ] is true.

    -x file	Check if file is execute if yes then condition becomes true.	
    [ -x $file ] is true.

    -s file	Check if file has size greater than 0 if yes then condition becomes true.	
    [ -s $file ] is true.

    -e file	Check if file exists. Is true even if file is a directory but exists.	
    [ -e $file ] is true.

##String Operators


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



## Case Esac

You can use multiple if...elif statements to perform a multiway 
branch. However, this is not always the best solution, 
especially when all of the branches depend on the value of a 
single variable.
Shell support case...esac statement which handles exactly this situation, 
and it does so more efficiently than repeated if...elif statements.

    clear
    echo " ================== case esac=================="
    echo "Enter option"
    read -p "[ a,b,c,or x ] : " opt

    case "$opt" in
        "a") echo " You have selected a "
        ;;
        "b") echo " You have selected b"
        ;;
        "c") echo " You have selected c"
        ;;
        "x") exit
        ;;
    esac



#Looping 

##While Loop

The while loop enables you to execute a set of commands repeatedly until some condition occurs. 
It is usually used when you need to manipulate the value of a variable repeatedly.

    while command
    do
        #Statement(s) to be executed if command is true
    done

##For loop
The for loop operate on lists of items. It repeats a set of 
commands for every item in a list.

    for var in word1 word2 ... wordN
    do
    #Statement(s) to be executed for every word.
    done