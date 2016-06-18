#!/bin/bash
#Working with numbers

echo "Enter 2 numbers"
read num1
read num2

echo "===========Summation==========="
tot=`expr $num1 + $num2`

echo $tot

