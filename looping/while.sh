#!/bin/bash
# While loop

clear
echo " ============  While loop =========="

echo " Enter end of loop"
read endLoop

a=0
while [ $a -lt $endLoop  ]
do
    echo "while loop index - $a"
    a=`expr $a + 1`
done

