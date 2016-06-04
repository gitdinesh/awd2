#Shell Scripting File permissions

File access permissions based on the owners
    
    * File Owner (Linux represent u)
    * Group Owner (Linux represent g)
    * Other User (Linux represent o)
    * All User (Linux represent a)
 
 File Permissions
 
    * Read (Linux represent 4)
    * Write (Linux represent 2)
    * Execute (Linux represent 1)

## Changing file permissions
   
Add Full permissions to all users

    root@ubuntu:/ $ chmod 777 <file name>

Add Read permission only for the file owner

    root@ubuntu:/ $ chmod 400 <file name>


Remove execute permission  from the file owner

    root@ubuntu:/ $ chmod o-x <file name>
    
        