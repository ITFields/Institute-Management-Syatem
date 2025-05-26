<?php
include($_SERVER['DOCUMENT_ROOT'] . '/Project/navbar.php');
include($_SERVER['DOCUMENT_ROOT'] . '/Project/auth.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>HTML Tutorial</title>
  <link rel="stylesheet" href="style.css">

</head>
<body>
<ul id="vnav">
<li><a href="#difference">Difference between C and C++</a></li>
        <li><a href="#history">C++ History</a></li>
        <li><a href="#features">C++ Features</a></li>
        <li><a href="#installation">C++ Installation</a></li>
        <li><a href="#program">C++ Program</a></li>
        <li><a href="#cout">C++ cout, cin, endl</a></li>
        <li><a href="#variables">C++ Variable</a></li>
        <li><a href="#datatypes">C++ Data types</a></li>
        <li><a href="#keywords">C++ Keywords</a></li>
        <li><a href="#operators">C++ Operators</a></li>
        <li><a href="#identifiers">C++ Identifiers</a></li>
        <li><a href="#expression">C++ Expression</a></li>
        
        <li><a href="#ifelse">C++ if-else</a></li>
        <li><a href="#switch">C++ switch</a></li>
        <li><a href="#forloop">C++ For Loop</a></li>
        <li><a href="#whileloop">C++ While Loop</a></li>
        <li><a href="#dowhile">C++ Do-While Loop</a></li>
        <li><a href="#break">C++ Break Statement</a></li>
        <li><a href="#continue">C++ Continue Statement</a></li>
        <li><a href="#goto">C++ Goto Statement</a></li>
        <li><a href="#comments">C++ Comments</a></li>

        <li><a href="#functions">C++ Functions</a></li>
        <li><a href="#callbyvalue">Call by value & reference</a></li>
        <li><a href="#recursion">C++ Recursion</a></li>
        <li><a href="#storageclasses">C++ Storage Classes</a></li>

        <li><a href="#arrays">C++ Arrays</a></li>
        <li><a href="#arraytofunction">C++ Array to Function</a></li>
        <li><a href="#multidimensionalarrays">C++ Multidimensional Arrays</a></li>

        <li><a href="#strings">C++ Strings</a></li>

        <li><a href="#pointers">C++ Pointers</a></li>
        <li><a href="#sizeof">sizeof() operator in C++</a></li>
        <li><a href="#arrayofpointers">C++ Array of Pointers</a></li>
        <li><a href="#voidpointer">C++ Void Pointer</a></li>
        <li><a href="#references">C++ References</a></li>
        <li><a href="#referencevspointer">C++ Reference vs Pointer</a></li>
        <li><a href="#functionpointer">Function Pointer in C++</a></li>
        <li><a href="#memorymanagement">C++ Memory Management</a></li>
        <li><a href="#mallocvsnew">malloc() vs new in C++</a></li>
        <li><a href="#freevsdelete">free vs delete in C++</a></li>

        <li><a href="#oopconcepts">OOPs Concepts in C++</a></li>
        <li><a href="#classesandobjects">C++ Classes and Objects</a></li>
        <li><a href="#constructor">C++ Constructor</a></li>
        <li><a href="#copyconstructor">C++ Copy Constructor</a></li>
        <li><a href="#destructor">C++ Destructor</a></li>
        <li><a href="#thispointer">C++ this Pointer</a></li>
        <li><a href="#static">C++ static</a></li>
        <li><a href="#structs">C++ Structs</a></li>
        <li><a href="#enumeration">C++ Enumeration</a></li>
        <li><a href="#friendfunction">Friend Function in C++</a></li>
        <li><a href="#mathfunctions">C++ Math Functions</a></li>

        <li><a href="#inheritance">Inheritance in C++</a></li>
        <li><a href="#aggregation">C++ Aggregation</a></li>

        <li><a href="#polymorphism">C++ Polymorphism</a></li>
        <li><a href="#overloading">C++ Overloading</a></li>
        <li><a href="#overriding">C++ Overriding</a></li>
        <li><a href="#virtualfunction">Virtual Function in C++</a></li>

        <li><a href="#interfaces">C++ Interfaces</a></li>
        <li><a href="#dataabstraction">Data Abstraction in C++</a></li>
        <li><a href="#abstractclass">Abstract class in C++</a></li>
</ul>

<div class="content">
<div id="difference">
    <h2>Difference between C and C++</h2>
    <p><strong>C</strong> is a procedural programming language, while <strong>C++</strong> is an object-oriented programming language. C focuses on function-based programming and data processing, while C++ provides a platform for both procedural and object-oriented programming (OOP), supporting classes and objects.</p>
    <p><strong>Key Differences:</strong></p>
    <ul>
        <li>C is a procedural language, while C++ supports both procedural and object-oriented paradigms.</li>
        <li>C does not have classes, while C++ uses classes for defining objects.</li>
        <li>C is based on functions and procedures, while C++ is based on functions as well as classes and objects.</li>
        <li>C does not support data abstraction, inheritance, or polymorphism, while C++ does.</li>
        <li>C does not have a constructor and destructor, while C++ has both.</li>
    </ul>
</div>

<div id="history">
    <h2>C++ History</h2>
    <p>C++ was developed by Bjarne Stroustrup in 1979 at Bell Labs. Initially, it was an enhancement to the C programming language, and it was originally named "C with Classes". The language was designed to support object-oriented programming (OOP) while maintaining the efficiency of C. C++ was standardized by ANSI in 1990.</p>
    <p><strong>Key Milestones:</strong></p>
    <ul>
        <li>1979: Bjarne Stroustrup developed C++ as an extension of C.</li>
        <li>1983: The term "C++" was coined, and object-oriented features like classes and inheritance were introduced.</li>
        <li>1990: The first edition of C++ was standardized.</li>
        <li>1998: C++98 standard was published, introducing templates and the Standard Template Library (STL).</li>
        <li>2011: C++11 introduced many new features, including lambda expressions and auto keyword.</li>
        <li>2017: C++17, with further improvements, was introduced.</li>
    </ul>
</div>

<div id="features">
    <h2>C++ Features</h2>
    <p>C++ has several powerful features that make it one of the most popular programming languages in the world:</p>
    <ul>
        <li><strong>Object-Oriented Programming (OOP)</strong> – Supports classes, objects, inheritance, polymorphism, and encapsulation.</li>
        <li><strong>Platform Independence</strong> – C++ programs can run on various platforms with minimal modifications.</li>
        <li><strong>Memory Management</strong> – Direct memory access through pointers, dynamic memory allocation, and deallocation.</li>
        <li><strong>Abstraction and Encapsulation</strong> – Using classes to hide implementation details and expose only necessary functionalities.</li>
        <li><strong>Polymorphism</strong> – Supports both compile-time (method overloading) and run-time (method overriding) polymorphism.</li>
        <li><strong>Templates</strong> – Generic programming capabilities via function and class templates.</li>
        <li><strong>Exception Handling</strong> – Provides mechanisms for handling runtime errors.</li>
    </ul>
</div>

<div id="installation">
    <h2>C++ Installation</h2>
    <p>To begin programming in C++, you need to set up a development environment. This includes installing a C++ compiler, such as GCC or MinGW, and an Integrated Development Environment (IDE) like Visual Studio or Code::Blocks.</p>
    <p><strong>Steps for Installation:</strong></p>
    <ol>
        <li>Download and install a C++ compiler (e.g., GCC, MinGW) from the official website.</li>
        <li>Choose an IDE (e.g., Visual Studio, Code::Blocks, Eclipse) and install it.</li>
        <li>Set up the compiler path in your IDE for smooth execution of C++ programs.</li>
        <li>Write a simple "Hello World" program and run it to test the setup.</li>
    </ol>
</div>

<div id="program">
    <h2>C++ Program</h2>
    <p>A simple C++ program to display "Hello World" is as follows:</p>
    <pre>
        #include <iostream>
        
        int main() {
            std::cout << "Hello, World!" << std::endl;
            return 0;
        }
    </pre>
    <p><strong>Explanation:</strong> This program includes the <code>iostream</code> library, uses the <code>std::cout</code> object to print "Hello World", and then returns 0 to indicate successful execution.</p>
</div>

<div id="cout">
    <h2>C++ cout, cin, endl</h2>
    <p><strong>cout:</strong> Used for output in C++. It sends data to the standard output (console).</p>
    <p><strong>cin:</strong> Used for input in C++. It reads data from the standard input (keyboard).</p>
    <p><strong>endl:</strong> Used to insert a new line after output. It also flushes the output buffer, ensuring the data is printed immediately.</p>
    <pre>
        #include <iostream>
        
        int main() {
            int num;
            std::cout << "Enter a number: ";
            std::cin >> num;  // Input from user
            std::cout << "You entered: " << num << std::endl;  // Output
            return 0;
        }
    </pre>
</div>
<div id="variables">
    <h2>C++ Variable</h2>
    <p>A <strong>variable</strong> in C++ is a container used to store data values. Each variable has a data type that determines what kind of data it can hold. A variable must be declared before it is used in a program.</p>
    <p><strong>Declaration Syntax:</strong></p>
    <pre>
        data_type variable_name;
    </pre>
    <p><strong>Example:</strong></p>
    <pre>
        #include <iostream>
        using namespace std;
        
        int main() {
            int age = 25;
            cout << "Age: " << age << endl;
            return 0;
        }
    </pre>
    <p><strong>Explanation:</strong> In this example, we declare an integer variable <code>age</code> and assign it the value 25, then print it using <code>cout</code>.</p>
</div>

<div id="datatypes">
    <h2>C++ Data Types</h2>
    <p>C++ has various built-in data types that can store different types of data:</p>
    <ul>
        <li><strong>int</strong> – stores integers (whole numbers).</li>
        <li><strong>float</strong> – stores floating-point numbers (decimal numbers).</li>
        <li><strong>double</strong> – stores double-precision floating-point numbers.</li>
        <li><strong>char</strong> – stores single characters.</li>
        <li><strong>bool</strong> – stores boolean values (true or false).</li>
    </ul>
    <p><strong>Example:</strong></p>
    <pre>
        #include <iostream>
        using namespace std;
        
        int main() {
            int a = 10;
            float b = 5.75;
            char c = 'A';
            bool isTrue = true;
            cout << "Integer: " << a << endl;
            cout << "Float: " << b << endl;
            cout << "Char: " << c << endl;
            cout << "Boolean: " << isTrue << endl;
            return 0;
        }
    </pre>
</div>

<div id="keywords">
    <h2>C++ Keywords</h2>
    <p><strong>Keywords</strong> are reserved words in C++ that have a predefined meaning and cannot be used as identifiers (such as variable names, function names, etc.).</p>
    <p>Some of the commonly used C++ keywords include:</p>
    <ul>
        <li><strong>int</strong> – used to declare integer variables.</li>
        <li><strong>float</strong> – used to declare floating-point variables.</li>
        <li><strong>if</strong> – used for conditional statements.</li>
        <li><strong>else</strong> – used in conjunction with <code>if</code> for an alternative condition.</li>
        <li><strong>while</strong> – used for creating a loop that runs as long as a condition is true.</li>
    </ul>
</div>

<div id="operators">
    <h2>C++ Operators</h2>
    <p>C++ provides a variety of operators that can be used to perform operations on variables and values. These operators are categorized as:</p>
    <ul>
        <li><strong>Arithmetic Operators</strong>: <code>+, -, *, /, %</code></li>
        <li><strong>Relational Operators</strong>: <code>==, !=, <, >, <=, >=</code></li>
        <li><strong>Logical Operators</strong>: <code>&&, ||, !</code></li>
        <li><strong>Assignment Operators</strong>: <code>=, +=, -=, *=, /=</code></li>
        <li><strong>Increment/Decrement Operators</strong>: <code>++, --</code></li>
    </ul>
    <p><strong>Example:</strong></p>
    <pre>
        #include <iostream>
        using namespace std;
        
        int main() {
            int a = 10, b = 20;
            int sum = a + b; // Arithmetic addition
            bool result = (a == b); // Relational operator
            cout << "Sum: " << sum << endl;
            cout << "Is equal: " << result << endl;
            return 0;
        }
    </pre>
</div>

<div id="identifiers">
    <h2>C++ Identifiers</h2>
    <p><strong>Identifiers</strong> are names used to identify variables, functions, arrays, classes, or any other user-defined item in C++. An identifier must start with a letter (A-Z or a-z) or an underscore (_) and may contain letters, digits (0-9), and underscores.</p>
    <p><strong>Rules for Identifiers:</strong></p>
    <ul>
        <li>Must start with a letter or an underscore.</li>
        <li>Cannot start with a digit.</li>
        <li>Cannot be a C++ keyword.</li>
        <li>Identifiers are case-sensitive (e.g., <code>Variable</code> and <code>variable</code> are different).</li>
    </ul>
</div>

<div id="expression">
    <h2>C++ Expression</h2>
    <p>An <strong>expression</strong> in C++ is a combination of variables, constants, operators, and functions that are evaluated to produce a value. An expression can be a single value, a variable, or a more complex combination of variables and operators.</p>
    <p><strong>Example:</strong></p>
    <pre>
        #include <iostream>
        using namespace std;
        
        int main() {
            int a = 10, b = 20;
            int sum = a + b * 2; // Expression with operators
            cout << "Sum: " << sum << endl;
            return 0;
        }
    </pre>
    <p><strong>Explanation:</strong> In this example, the expression <code>a + b * 2</code> is evaluated. The multiplication operation has higher precedence than addition, so <code>b * 2</code> is evaluated first, and then the result is added to <code>a</code>.</p>
</div>

<div id="ifelse">
    <h2>C++ if-else</h2>
    <p>The <strong>if-else</strong> statement is used to execute code based on a condition. If the condition is true, the "if" block executes; otherwise, the "else" block executes.</p>
    <p><strong>Example:</strong></p>
    <pre><code>
if (x > 10) {
    cout << "x is greater than 10";
} else {
    cout << "x is less than or equal to 10";
}
    </code></pre>
</div>

<div id="switch">
    <h2>C++ switch</h2>
    <p>The <strong>switch</strong> statement is used to execute one out of multiple code blocks based on the value of an expression. It is an alternative to using multiple "if-else" statements.</p>
    <p><strong>Example:</strong></p>
    <pre><code>
switch (day) {
    case 1:
        cout << "Monday";
        break;
    case 2:
        cout << "Tuesday";
        break;
    default:
        cout << "Invalid day";
}
    </code></pre>
</div>

<div id="forloop">
    <h2>C++ For Loop</h2>
    <p>The <strong>for loop</strong> is used for iterating over a block of code a specific number of times.</p>
    <p><strong>Example:</strong></p>
    <pre><code>
for (int i = 0; i < 5; i++) {
    cout << i << " ";
}
    </code></pre>
</div>

<div id="whileloop">
    <h2>C++ While Loop</h2>
    <p>The <strong>while loop</strong> is used to execute a block of code as long as the given condition is true.</p>
    <p><strong>Example:</strong></p>
    <pre><code>
int i = 0;
while (i < 5) {
    cout << i << " ";
    i++;
}
    </code></pre>
</div>

<div id="do_while_loop">
    <h2>C++ Do-While Loop</h2>
    <p>The <strong>do-while loop</strong> executes a block of code at least once and then repeatedly executes the code as long as the condition is true.</p>
    <p><strong>Example:</strong></p>
    <pre><code>
int i = 0;
do {
    cout << i << " ";
    i++;
} while (i < 5);
    </code></pre>
</div>

<div id="break_statement">
    <h2>C++ Break Statement</h2>
    <p>The <strong>break</strong> statement is used to exit from a loop or switch statement prematurely.</p>
    <p><strong>Example:</strong></p>
    <pre><code>
for (int i = 0; i < 5; i++) {
    if (i == 3) break;
    cout << i << " ";
}
    </code></pre>
</div>

<div id="continue_statement">
    <h2>C++ Continue Statement</h2>
    <p>The <strong>continue</strong> statement is used to skip the current iteration of a loop and move to the next iteration.</p>
    <p><strong>Example:</strong></p>
    <pre><code>
for (int i = 0; i < 5; i++) {
    if (i == 3) continue;
    cout << i << " ";
}
    </code></pre>
</div>

<div id="goto_statement">
    <h2>C++ Goto Statement</h2>
    <p>The <strong>goto</strong> statement is used to transfer control to a specified label in the program.</p>
    <p><strong>Example:</strong></p>
    <pre><code>
goto label;
cout << "This will be skipped";
label:
cout << "This will be printed";
    </code></pre>
</div>

<div id="comments">
    <h2>C++ Comments</h2>
    <p>Comments in C++ are used to add explanatory notes to the code, making it more readable. They are ignored by the compiler.</p>
    <p><strong>Types:</strong> Single-line comments using // and multi-line comments using /* ... */</p>
    <p><strong>Example:</strong></p>
    <pre><code>
// This is a single-line comment
/* This is a 
   multi-line comment */
    </code></pre>
</div>

<div id="functions">
    <h2>C++ Functions</h2>
    <p>Functions in C++ are blocks of code designed to perform a specific task. Functions can take input parameters and return a value.</p>
    <p><strong>Example:</strong></p>
    <pre><code>
int add(int a, int b) {
    return a + b;
}
cout << add(3, 4); // Outputs 7
    </code></pre>
</div>

<!-- Continue adding other topics as needed -->

 
</div>


  </body>
</html>
