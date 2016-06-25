#!/bin/bash
# For loop

clear
echo " ============  For loop =========="

for i in 1 2 3 4 5 6 
do 
    echo $i
done


projectpath="/web/globalpay/*"
echo "  Used for loop to list all files in $projectpath "
for f in $projectpath
do 
    echo $f
done