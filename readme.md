#OOP in PHP


##Understanding Objects and Classes

###Object

An object is a software bundle of related state and behavior. Software objects are often used to model the real-world objects that you find in everyday life. This lesson explains how state and behavior are represented within an object, introduces the concept of data encapsulation, and explains the benefits of designing your software in this manner.
In programming terms, an object is a self-contained component that contains properties and methods needed to make a certain type of data useful. An object’s properties are what it knows and its methods are what it can do. 

The project management application mentioned above had a status object, a cost object, and a client object, among others. One property of the status object would be the current status of the project. The status object would have a method that could update that status. 

The client object’s properties would include all of the important details about the client and its methods would be able to change them. The cost object would have methods necessary to calculate the project’s cost based on hours worked, hourly rate, materials cost, and fees.

In addition to providing the functionality of the application, methods ensure that an object’s data is used appropriately by running checks for the specific type of data being used. They also allow for the actual implementation of tasks to be hidden and for particular operations to be standardized across different types of objects

[Read More](https://docs.oracle.com/javase/tutorial/java/concepts/object.html) 

###Classes, instances, and instantiation


A class is a blueprint or template or set of instructions to build a specific type of object. Every object is built from a class. Each class should be designed and programmed to accomplish one, and only one, thing.

An instance is a specific object built from a specific class. It is assigned to a reference variable that is used to access all of the instance's properties and methods. When you make a new instance the process is called instantiation and is typically done using the new keyword.

[Read More](https://docs.oracle.com/javase/tutorial/java/concepts/class.html)


###Inheritence

Inheritance is the concept that when a class of objects is defined, any subclass that is defined can inherit the definitions of one or more general classes. This means for the programmer that an object in a subclass need not carry its own definition of data and methods that are generic to the class (or classes) of which it is a part. This not only speeds up program development; it also ensures an inherent validity to the defined subclass object (what works and is consistent about the class will also work for the subclass).

[Read More](https://docs.oracle.com/javase/tutorial/java/concepts/inheritance.html)

###Abstraction

Abstraction (from the Latin abs, meaning away from and trahere, meaning to draw) is the process of taking away or removing characteristics from something in order to reduce it to a set of essential characteristics. 


Abstraction means to show only the necessary details to the client of the object. Do you know the inner details of the Monitor of your PC? 
What happen when you switch ON Monitor? Does this matter to you what is happening inside the Monitor? No Right, 
Important thing for you is weather Monitor is ON or NOT. When you change the gear of your vehicle are you really concern about the inner details of your vehicle engine? No but what matter to you is that Gear must get changed that’s it!! This is abstraction; 
show only the details which matter to the user. 

Let’s say you have a method "CalculateSalary" in your Employee class, which takes EmployeeId as parameter and returns the salary of the 
employee for the current month as an integer value. Now if someone wants to use that method. He does not need to care about how 
Employee object calculates the salary? An only thing he needs to be concern is name of the method, its input parameters and 
format of resulting member, Right? 

So abstraction says expose only the details which are concern with the user (client) of your object. 
So the client who is using your class need not to be aware of the inner details like how you class do the operations? 
He needs to know just few details. This certainly helps in reusability of the code.

Let’s say you are designing a class that is used to interact with the database and to perform some of database operations. 
Now client of your class need not to be aware of database programming, he just need to be aware of some of the details of 
your class and easily can perform the database operations exposed by your class without deep knowledge of database programming.

The best thing of abstract is that this decouples the user of the object and its implementation. So now object is easy to understand 
and maintain also. As if there is any change in the process of some operation. You just need to change the inner details of a method, 
which have no impact on the client of class. 




###Polymorphism

Polymorphism describes a pattern in object oriented programming in which classes have different functionality while sharing a common interface.

The beauty of polymorphism is that the code working with the different classes does not need to know which class it is using since they’re 
all used the same way. A real world analogy for polymorphism is a button. Everyone knows how to use a button: you simply apply pressure to it.
What a button “does,” however, depends on what it is connected to and the context in which it is used — but the 
result does not affect how it is used. If your boss tells you to press a button, you already have all the information needed to 
perform the task.

In the programming world, polymorphism is used to make applications more modular and extensible. Instead of messy conditional 
statements describing different courses of action, you create interchangeable objects that you select based on your needs. 
That is the basic goal of polymorphism.





##Namespaces

###Why Do We Need Namespaces?

As the size of your PHP code library increases, the more likely you will accidentally reuse a function or class name that has been declared before. The problem is exacerbated if you attempt to add third-party components or plugins; what if two or more code sets implement a ‘Database’ class?

Until now, the only solution has been long class/function names. For example, WordPress prefixes every name with ‘WP_’. The Zend Framework uses a highly descriptive naming convention that resullts in long-winded class names such as Zend_Search_Lucene_Analysis_Analyzer_Common_Text_CaseInsensitive.

Name collision problems can be solved with namespaces. PHP constants, classes, and functions can be grouped into namespaced libraries.

[Read More](https://www.sitepoint.com/php-53-namespaces-basics/)