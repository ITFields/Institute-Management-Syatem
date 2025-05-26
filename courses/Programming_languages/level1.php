<?php
include($_SERVER['DOCUMENT_ROOT'] . '/Project/navbar.php');
include($_SERVER['DOCUMENT_ROOT'] . '/Project/auth.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <link rel="stylesheet" href="style.css">

</head>
<body>

<ul id="vnav">
    <li><a href="#history">History of C</a></li>
    <li><a href="#features">Features of C</a></li>
    <li><a href="#install">How to install C</a></li>
    <li><a href="#firstprogram">First C Program</a></li>
    <li><a href="#compilation">Compilation Process in C</a></li>
    <li><a href="#printf">printf & scanf</a></li>
    <li><a href="#variables">Variables in C</a></li>
    <li><a href="#data-types">Data Types in C</a></li>
    <li><a href="#keywords">Keywords in C</a></li>
    <li><a href="#identifiers">C Identifiers</a></li>
    <li><a href="#operators">C Operators</a></li>
    <li><a href="#comments">C Comments</a></li>
    <li><a href="#format">C Format Specifier</a></li>
    <li><a href="#escape">C Escape Sequence</a></li>
    <li><a href="#ascii">ASCII value in C</a></li>
    <li><a href="#constants">Constants in C</a></li>
    <li><a href="#literals">Literals in C</a></li>
    <li><a href="#tokens">Tokens in C</a></li>
    <li><a href="#boolean">C Boolean</a></li>
    <li><a href="#static">Static in C</a></li>
    <li><a href="#errors">Programming Errors in C</a></li>
    <li><a href="#compilevsruntime">Compile time vs Runtime</a></li>
    <li><a href="#conditional">Conditional Operator in C</a></li>
    <li><a href="#bitwise">Bitwise Operator in C</a></li>
    <li><a href="#twoscomplement">2s complement in C</a></li>
    <li><a href="#fundamentals">C Fundamental Test</a></li>
    <li><a href="#compiler">Difference between Compiler and Interpreter</a></li>
    <li><a href="#structure">Structure of C Program</a></li>
    <li><a href="#programming">What is Programming Language?</a></li>
    <li><a href="#ifelse">C if-else</a></li>
    <li><a href="#switch">C switch</a></li>
    <li><a href="#ifelseswitch">if-else vs switch</a></li>
    <li><a href="#cloops">C Loops</a></li>
    <li><a href="#dowhile">C do-while loop</a></li>
    <li><a href="#while">C while loop</a></li>
    <li><a href="#forloop">C for loop</a></li>
    <li><a href="#nestedloops">Nested Loops in C</a></li>
   
</ul>
<div class="content">
  <div id="history">
    <h2>History of C Programming Language</h2>
    <p>The C programming language, one of the most influential programming languages in the world, was developed by Dennis Ritchie in 1972 at Bell Labs. It was created as an evolution of the B programming language, which itself was derived from an earlier language, BCPL (Basic Combined Programming Language). The story of C is closely tied to the development of the UNIX operating system, which Ritchie and his colleagues were also working on at the time.</p>

    <p><strong>Early Days and the Birth of C</strong></p>
    <p>In the early 1970s, the computing world was still in its infancy, and programming was largely done in assembly language, which was both time-consuming and difficult to manage. The development of the C programming language was spurred by the need for a more flexible, higher-level language that could be used to write operating systems and applications that were more portable and easier to maintain.</p>
    <p>C’s predecessor, the B language, was itself derived from BCPL, but it had significant limitations. For example, B lacked data types such as integers and floating-point numbers, making it difficult to write system programs. Dennis Ritchie, along with Brian Kernighan, took inspiration from these earlier languages and added more features to create C, with a focus on giving the programmer more control over hardware, while still being more readable than assembly language.</p>

    <p><strong>The Development of UNIX</strong></p>
    <p>C’s rise to prominence was heavily influenced by its use in the development of the UNIX operating system. Originally, UNIX was written in assembly language, which made it difficult to port the operating system to different hardware platforms. By rewriting UNIX in C, Ritchie and his colleagues made it much easier to adapt to different systems. This move was groundbreaking because it demonstrated that high-level languages like C could be used for system-level programming, something that was previously considered the domain of low-level assembly language.</p>
    <p>The portability of UNIX, now written in C, made it one of the first operating systems that could run on different types of hardware, paving the way for a revolution in how operating systems were developed and distributed.</p>

    <p><strong>The Standardization of C</strong></p>
    <p>By the late 1970s and early 1980s, C had become a popular language for system programming, and its use spread across academic institutions, government organizations, and businesses. However, by this time, various organizations and individuals had created their own versions of the C language, which led to a lack of standardization. To address this issue, in 1983, the American National Standards Institute (ANSI) formed a committee to define a standardized version of C. In 1989, the committee published the ANSI C standard, which helped to unify the language and ensure its portability across different systems.</p>

    <p><strong>C's Impact on Other Programming Languages</strong></p>
    <p>One of the key reasons for C's enduring popularity is its influence on many modern programming languages. Many programming languages, such as C++, Java, C#, and even Python, have inherited key features of C, particularly its syntax. The structure of C, its use of curly braces for block definitions, its straightforward control structures (such as loops and conditionals), and its function-based approach to program design all served as the foundation for future languages.</p>
    <p>C's success also encouraged the development of new tools and techniques for system programming, including more sophisticated debuggers, compilers, and development environments. Additionally, because C allows direct manipulation of memory using pointers, it has long been used for embedded systems and low-level programming, where performance and memory efficiency are critical.</p>

    <p><strong>Modern Usage and C's Legacy</strong></p>
    <p>Today, C is still widely used in both academia and industry, particularly in areas where performance and efficiency are critical, such as embedded systems, operating systems, and device drivers. While more modern languages like Python and JavaScript have gained popularity for web development and general-purpose programming, C remains an essential part of the software development landscape, especially for systems programming.</p>
    <p>Many modern programming languages continue to borrow ideas from C. For example, the C++ language is a direct descendant of C, extending its capabilities to support object-oriented programming (OOP). Even languages like Java, which are much higher-level, still retain many of C's syntax and programming concepts. C's legacy is undeniable, and its influence can be seen in countless modern applications and systems.</p>

    <p>Moreover, C's enduring popularity in embedded systems, IoT devices, and other low-level applications proves that, despite being more than 50 years old, C is still very much alive and well.</p>

    <p><strong>Conclusion</strong></p>
    <p>In conclusion, the history of C is a story of innovation and influence. From its humble beginnings as an improvement over B to its pivotal role in the development of UNIX and modern operating systems, C has shaped the way we think about programming. Its simplicity, efficiency, and flexibility have ensured that it remains a cornerstone of software development, influencing both the design of other programming languages and the evolution of computing as a whole.</p>
  </div>

  <div id="features">
  <h2>Features of the C Programming Language</h2>
  
  <h3>1. Simple and Easy to Learn</h3>
  <p>C is a simple language with a clear and concise syntax, making it easy to learn for beginners. It is considered a "low-level" language that bridges the gap between high-level languages and machine-level operations.</p>

  <h3>2. Efficient and Fast Execution</h3>
  <p>C provides low-level access to memory and system resources, enabling developers to write highly efficient and fast programs. It is ideal for performance-critical applications, such as system programming, embedded systems, and high-performance computing.</p>

  <h3>3. Portability</h3>
  <p>Programs written in C can be easily ported to different hardware platforms with minimal changes. This is possible because C is a machine-independent language, and the ANSI C standard ensures consistent behavior across platforms.</p>

  <h3>4. Rich Library Support</h3>
  <p>C offers a rich collection of libraries that help in solving complex tasks, such as string manipulation, file handling, memory management, and mathematical operations. These libraries reduce development time and effort significantly.</p>

  <h3>5. Modularity and Function-Based Design</h3>
  <p>C supports modular programming by allowing code to be divided into functions. This approach enables easier debugging, testing, and maintenance, as well as promoting code reuse and organization.</p>

  <h3>6. Pointers and Memory Management</h3>
  <p>C provides the powerful feature of pointers, which allows direct manipulation of memory. Pointers are crucial for dynamic memory allocation, efficient memory usage, and handling of complex data structures like linked lists and trees.</p>

  <h3>7. System-Level Access</h3>
  <p>Being a low-level language, C allows direct interaction with hardware resources, making it ideal for system-level programming. It is commonly used for writing operating systems, device drivers, and embedded applications that require access to hardware components.</p>

  <h3>8. Structured Programming</h3>
  <p>C encourages structured programming, a methodology that promotes clarity and maintainability in code. It enables developers to break down complex problems into smaller, manageable functions, improving readability and reducing errors.</p>

  <h3>9. Extensibility</h3>
  <p>C is highly extensible, allowing developers to add new features or enhance existing ones. Many modern programming languages, such as C++, are built upon the foundation of C, extending its features to support object-oriented programming (OOP) concepts.</p>

  <h3>10. Wide Usage in Various Domains</h3>
  <p>C is widely used in various domains, including embedded systems, operating systems, compilers, database management systems, networking, and scientific computing. Its versatility and performance make it a go-to language for developers working on performance-critical applications.</p>
</div>
<div id="firstprogram">
  <h2>First C Program</h2>
  <p>In C programming, the first program usually prints "Hello, World!" to the console. It's the simplest program for beginners to understand the structure of a C program.</p>
  <pre><code>#include <stdio.h>

int main() {
    printf("Hello, World!\n");
    return 0;
}</code></pre>
  <p>Explanation:</p>
  <ul>
    <li><code>#include <stdio.h>:</code> This preprocessor command is used to include the standard input/output library that allows you to use functions like <code>printf()</code> and <code>scanf()</code>.</li>
    <li><code>int main():</code> This defines the main function where the execution of the program starts.</li>
    <li><code>printf("Hello, World!");</code> The <code>printf()</code> function is used to output text to the console.</li>
    <li><code>return 0;</code> This ends the main function and indicates the program executed successfully.</li>
  </ul>
</div>

<div id="compilation">
  <h2>Compilation Process in C</h2>
  <p>The compilation process in C involves several steps that convert the human-readable C source code into machine-readable binary code that the computer can execute. The main stages of the compilation process are:</p>
  <ul>
    <li><strong>Preprocessing:</strong> The preprocessor handles directives like <code>#include</code> and <code>#define</code>. It includes the necessary libraries and macros in the code before actual compilation.</li>
    <li><strong>Compiling:</strong> The compiler translates the source code (.c file) into an intermediate assembly language code.</li>
    <li><strong>Assembly:</strong> The assembly code is converted into machine code (binary code) by the assembler.</li>
    <li><strong>Linking:</strong> The linker links object code (machine code) with necessary libraries to create an executable file (.exe or similar).</li>
  </ul>
  <p>The output of the process is an executable file that you can run on your machine.</p>
</div>

<div id="printf">
  <h2>printf & scanf</h2>
  <p><code>printf()</code> and <code>scanf()</code> are standard input/output functions in C used to display and read data, respectively.</p>
  <h3>printf() Function</h3>
  <p>The <code>printf()</code> function is used to print formatted output to the console. Here's an example:</p>
  <pre><code>#include <stdio.h>

int main() {
    printf("Enter your name: ");
    printf("Hello, World!\n");
    return 0;
}</code></pre>
  <p>Explanation:</p>
  <ul>
    <li><code>printf("Hello, World!\n");</code> prints the text "Hello, World!" on the screen.</li>
    <li>The <code>\n</code> is an escape sequence that moves the cursor to the next line.</li>
  </ul>
  
  <h3>scanf() Function</h3>
  <p>The <code>scanf()</code> function is used to take input from the user. Here's an example:</p>
  <pre><code>#include <stdio.h>

int main() {
    char name[30];
    printf("Enter your name: ");
    scanf("%s", name);
    printf("Hello, %s!\n", name);
    return 0;
}</code></pre>
  <p>Explanation:</p>
  <ul>
    <li><code>scanf("%s", name);</code> reads the input from the user and stores it in the <code>name</code> variable.</li>
    <li><code>%s</code> is a format specifier used to read strings.</li>
    <li><code>printf("Hello, %s!\n", name);</code> prints the name entered by the user.</li>
  </ul>
</div>

<div id="variables">
  <h2>Variables in C</h2>
  <p>Variables in C are used to store data values. Each variable has a specific data type, which defines the size and type of data it can store.</p>
  <h3>Declaring Variables</h3>
  <p>In C, you must declare the variable before using it, specifying the data type and the variable name.</p>
  <pre><code>int age;
float height;
char initial;</code></pre>
  <p>In the above code:</p>
  <ul>
    <li><code>int</code> is used for storing integer values.</li>
    <li><code>float</code> is used for storing decimal numbers.</li>
    <li><code>char</code> is used for storing a single character.</li>
  </ul>
  
  <h3>Initializing Variables</h3>
  <p>Variables can be initialized (given an initial value) when they are declared:</p>
  <pre><code>int age = 25;
float height = 5.8;
char initial = 'A';</code></pre>
  <p>Here, the <code>age</code> variable is initialized to 25, the <code>height</code> variable to 5.8, and the <code>initial</code> variable to 'A'.</p>
  
  <h3>Variable Scope</h3>
  <p>The scope of a variable refers to the portion of the program where the variable is accessible. Variables can be:</p>
  <ul>
    <li><strong>Local:</strong> Variables declared inside a function and accessible only within that function.</li>
    <li><strong>Global:</strong> Variables declared outside all functions and accessible throughout the program.</li>
  </ul>
</div>
<div id="data-types">
  <h2>Data Types in C</h2>
  <p>In C, data types are used to specify the type of data a variable can hold. C provides several types of data types including primitive types and derived types.</p>
  
  <h3>1. Primitive Data Types</h3>
  <p>These are the most basic data types in C, and they define the type of data a variable can hold. They are:</p>
  <ul>
    <li><strong>int:</strong> Used for storing integer values (whole numbers).</li>
    <li><strong>float:</strong> Used for storing floating-point numbers (decimal values).</li>
    <li><strong>double:</strong> Used for storing double-precision floating-point numbers (higher precision than float).</li>
    <li><strong>char:</strong> Used for storing a single character.</li>
    <li><strong>void:</strong> Represents the absence of type, usually used for functions that do not return any value.</li>
  </ul>

  <h3>2. Size of Data Types</h3>
  <p>The size of data types can vary based on the system and compiler, but generally, the sizes are as follows:</p>
  <ul>
    <li><strong>int:</strong> Typically 4 bytes</li>
    <li><strong>float:</strong> Typically 4 bytes</li>
    <li><strong>double:</strong> Typically 8 bytes</li>
    <li><strong>char:</strong> Typically 1 byte</li>
  </ul>
  
  <h3>3. Example: Declaration and Initialization of Variables</h3>
  <p>Here’s how to declare and initialize variables with different data types:</p>
  <pre><code>#include <stdio.h>

int main() {
    int age = 25;          // integer data type
    float height = 5.9;    // floating-point data type
    double pi = 3.14159;   // double precision floating-point data type
    char grade = 'A';      // character data type

    printf("Age: %d\n", age);
    printf("Height: %.2f\n", height);
    printf("Value of Pi: %.5f\n", pi);
    printf("Grade: %c\n", grade);

    return 0;
}</code></pre>
  
  <h3>4. Type Modifiers</h3>
  <p>C also provides type modifiers that allow you to modify the size and range of certain data types. The common type modifiers are:</p>
  <ul>
    <li><strong>short:</strong> Modifies an <code>int</code> to store a smaller integer value (typically 2 bytes).</li>
    <li><strong>long:</strong> Modifies an <code>int</code> to store a larger integer value (typically 8 bytes).</li>
    <li><strong>signed:</strong> Specifies that the data type can store both negative and positive values (default for <code>int</code> and <code>char</code>).</li>
    <li><strong>unsigned:</strong> Specifies that the data type can only store non-negative values.</li>
  </ul>
  
  <h3>5. Example: Using Type Modifiers</h3>
  <p>Here’s an example of using type modifiers:</p>
  <pre><code>#include <stdio.h>

int main() {
    short smallInt = 32000;   // small integer
    long largeInt = 1000000;  // large integer
    unsigned int positiveInt = 300;  // non-negative integer

    printf("Small Integer: %hd\n", smallInt);
    printf("Large Integer: %ld\n", largeInt);
    printf("Positive Integer: %u\n", positiveInt);

    return 0;
}</code></pre>
  
  <h3>6. Other Data Types</h3>
  <p>Besides the primitive data types, C also supports:</p>
  <ul>
    <li><strong>enum:</strong> A user-defined data type that consists of a set of named integer constants.</li>
    <li><strong>struct:</strong> A user-defined data type that groups variables of different data types.</li>
    <li><strong>union:</strong> Similar to a struct, but allows different data types to share the same memory location.</li>
  </ul>
  
  <h3>7. Example: Using enum and struct</h3>
  <p>Here’s an example of using <code>enum</code> and <code>struct</code>:</p>
  <pre><code>#include <stdio.h>

enum Day {Monday, Tuesday, Wednesday, Thursday, Friday, Saturday, Sunday};

struct Person {
    char name[50];
    int age;
};

int main() {
    enum Day today = Wednesday;
    struct Person person1 = {"Alice", 30};

    printf("Today is: %d\n", today);
    printf("Person: %s, Age: %d\n", person1.name, person1.age);

    return 0;
}</code></pre>
</div>
<div id="keywords">
  <h2>Keywords in C</h2>
  <p>Keywords in C are predefined words that have a special meaning in the language. These words are reserved for specific functions and cannot be used as identifiers (e.g., names of variables, functions). Below are some of the most important keywords in C:</p>

  <h3>List of Keywords:</h3>
  <ul>
    <li><code>int</code> - Used to declare integer variables.</li>
    <li><code>float</code> - Used to declare floating-point variables.</li>
    <li><code>char</code> - Used to declare character variables.</li>
    <li><code>void</code> - Used to define functions that do not return any value.</li>
    <li><code>if</code>, <code>else</code> - Used for conditional statements.</li>
    <li><code>while</code>, <code>for</code>, <code>do</code> - Used for loops.</li>
    <li><code>return</code> - Used to return a value from a function.</li>
    <li><code>break</code>, <code>continue</code> - Used to control the flow inside loops and switch statements.</li>
    <li><code>switch</code>, <code>case</code>, <code>default</code> - Used in switch-case statements for multi-way branching.</li>
    <li><code>sizeof</code> - Used to get the size (in bytes) of a data type or object.</li>
    <li><code>struct</code> - Used to define structures (custom data types).</li>
    <li><code>enum</code> - Used to define an enumeration (set of constants).</li>
    <li><code>typedef</code> - Used to create an alias for a data type.</li>
    <li><code>const</code> - Used to declare constant values that cannot be modified.</li>
    <li><code>volatile</code> - Used to tell the compiler that a variable may be changed by outside forces.</li>
    <li><code>goto</code> - Used to transfer control to a labeled statement (though generally avoided).</li>
  </ul>

  <h3>Example Code:</h3>
  <pre><code>#include <stdio.h>

int main() {
    int num = 10;  // 'int' is a keyword
    if (num > 5) {
        printf("Number is greater than 5\n");
    }
    return 0;  // 'return' is a keyword
}</code></pre>
</div>

<div id="identifiers">
  <h2>C Identifiers</h2>
  <p>Identifiers in C are names given to various program elements such as variables, functions, arrays, and other user-defined items. These names are chosen by the programmer but must follow certain rules:</p>

  <h3>Rules for Identifiers:</h3>
  <ul>
    <li>Identifiers must begin with a letter (a-z, A-Z) or an underscore (_).</li>
    <li>The rest of the identifier can include letters, digits (0-9), or underscores.</li>
    <li>Identifiers cannot be the same as any C keyword.</li>
    <li>Identifiers are case-sensitive (e.g., <code>myVar</code> and <code>MyVar</code> are different).</li>
    <li>Identifiers should not exceed 31 characters in some older compilers, but modern compilers generally allow more characters.</li>
  </ul>

  <h3>Examples of Valid Identifiers:</h3>
  <ul>
    <li><code>num</code> - A simple variable name.</li>
    <li><code>myVariable</code> - A valid name with letters and a capital letter.</li>
    <li><code>_myVar</code> - A name starting with an underscore.</li>
    <li><code>total_sum_1</code> - A valid name with digits and an underscore.</li>
  </ul>

  <h3>Examples of Invalid Identifiers:</h3>
  <ul>
    <li><code>1var</code> - Starts with a digit (invalid).</li>
    <li><code>int</code> - A keyword cannot be used as an identifier.</li>
    <li><code>my-var</code> - Hyphen (-) is not allowed in identifiers.</li>
  </ul>

  <h3>Example Code:</h3>
  <pre><code>#include <stdio.h>

int main() {
    int num = 10;         // 'num' is a valid identifier
    float sum_total = 25.5;  // 'sum_total' is a valid identifier

    // Invalid identifier example:
    // int 1number = 5; // Error: cannot start with a digit
    
    return 0;
}</code></pre>
</div>
<div id="operators">
  <h2>Operators in C</h2>
  <p>Operators in C are symbols that perform operations on variables and values. C has a variety of operators, including arithmetic, relational, logical, bitwise, and assignment operators.</p>

  <h3>Types of Operators:</h3>
  <ul>
    <li><strong>Arithmetic Operators:</strong> Used to perform mathematical calculations.</li>
    <ul>
      <li><code>+</code> - Addition</li>
      <li><code>-</code> - Subtraction</li>
      <li><code>*</code> - Multiplication</li>
      <li><code>/</code> - Division</li>
      <li><code>%</code> - Modulo (remainder)</li>
    </ul>

    <li><strong>Relational Operators:</strong> Used to compare two values.</li>
    <ul>
      <li><code>==</code> - Equal to</li>
      <li><code>!=</code> - Not equal to</li>
      <li><code>></code> - Greater than</li>
      <li><code><</code> - Less than</li>
      <li><code>>=</code> - Greater than or equal to</li>
      <li><code><=</code> - Less than or equal to</li>
    </ul>

    <li><strong>Logical Operators:</strong> Used to perform logical operations (usually in conditional statements).</li>
    <ul>
      <li><code>&&</code> - Logical AND</li>
      <li><code>||</code> - Logical OR</li>
      <li><code>!</code> - Logical NOT</li>
    </ul>

    <li><strong>Assignment Operators:</strong> Used to assign values to variables.</li>
    <ul>
      <li><code>=</code> - Assign</li>
      <li><code>+=</code> - Add and assign</li>
      <li><code>-=</code> - Subtract and assign</li>
      <li><code>*=</code> - Multiply and assign</li>
      <li><code>/=</code> - Divide and assign</li>
      <li><code>%=</code> - Modulo and assign</li>
    </ul>

    <li><strong>Increment and Decrement Operators:</strong> Used to increase or decrease a variable’s value by 1.</li>
    <ul>
      <li><code>++</code> - Increment</li>
      <li><code>--</code> - Decrement</li>
    </ul>

    <li><strong>Bitwise Operators:</strong> Used to perform bit-level operations.</li>
    <ul>
      <li><code>&</code> - Bitwise AND</li>
      <li><code>|</code> - Bitwise OR</li>
      <li><code>^</code> - Bitwise XOR</li>
      <li><code>~</code> - Bitwise NOT</li>
      <li><code>&lt;&lt;</code> - Left shift</li>
      <li><code>&gt;&gt;</code> - Right shift</li>
    </ul>
  </ul>

  <h3>Example Code:</h3>
  <pre><code>#include <stdio.h>

int main() {
    int a = 10, b = 5;

    // Arithmetic Operator
    int sum = a + b;
    printf("Sum: %d\n", sum);

    // Relational Operator
    if (a > b) {
        printf("a is greater than b\n");
    }

    // Logical Operator
    if (a > 0 && b > 0) {
        printf("Both a and b are positive\n");
    }

    // Increment Operator
    a++;
    printf("Incremented a: %d\n", a);

    return 0;
}</code></pre>
</div>
<div id="comments">
  <h2>Comments in C</h2>
  <p>Comments in C are used to provide explanations and notes in the code. They are ignored by the compiler and do not affect the execution of the program. C supports two types of comments:</p>

  <h3>1. Single-line Comment:</h3>
  <p>Single-line comments begin with <code>//</code> and extend to the end of the line.</p>
  <pre><code>// This is a single-line comment</code></pre>

  <h3>2. Multi-line Comment:</h3>
  <p>Multi-line comments begin with <code>/*</code> and end with <code>*/</code>. These can span across multiple lines.</p>
  <pre><code>/*
  This is a multi-line comment.
  It can span multiple lines.
  */</code></pre>

  <h3>Why Use Comments?</h3>
  <ul>
    <li>To explain complex code or logic.</li>
    <li>To provide context or description of what the code is doing.</li>
    <li>To temporarily disable a part of the code for testing or debugging.</li>
    <li>To make the code more readable and maintainable.</li>
  </ul>

  <h3>Example Code:</h3>
  <pre><code>#include <stdio.h>

int main() {
    int a = 10, b = 5;
    
    // Single-line comment: Performing addition
    int sum = a + b;

    /*
    Multi-line comment:
    The following code checks if a is greater than b,
    and prints the result.
    */
    if (a > b) {
        printf("a is greater than b\n");
    }

    return 0;
}</code></pre>
</div>
<div id="format">
  <h2>C Format Specifier</h2>
  <p>Format specifiers are used in C to specify the type of data. The most commonly used format specifiers are:</p>
  
  <ul>
    <li><code>%d</code> - For printing integers (decimal).</li>
    <li><code>%f</code> - For printing floating-point numbers.</li>
    <li><code>%c</code> - For printing single characters.</li>
    <li><code>%s</code> - For printing strings.</li>
    <li><code>%lf</code> - For printing double precision floating-point numbers.</li>
    <li><code>%x</code> - For printing hexadecimal (lowercase).</li>
    <li><code>%X</code> - For printing hexadecimal (uppercase).</li>
    <li><code>%o</code> - For printing octal values.</li>
    <li><code>%p</code> - For printing pointer values.</li>
  </ul>

  <h3>Example Code:</h3>
  <pre><code>#include <stdio.h>

int main() {
    int num = 42;
    float pi = 3.14159;
    char letter = 'A';
    char str[] = "Hello, World!";

    // Using format specifiers
    printf("Integer: %d\n", num);
    printf("Floating point: %.2f\n", pi);
    printf("Character: %c\n", letter);
    printf("String: %s\n", str);

    return 0;
}</code></pre>
</div>
<div id="escape">
  <h2>C Escape Sequence</h2>
  <p>Escape sequences are special characters that are used in strings and characters to represent certain non-printable characters or formatting.</p>

  <ul>
    <li><code>\n</code> - Newline</li>
    <li><code>\t</code> - Horizontal Tab</li>
    <li><code>\\</code> - Backslash</li>
    <li><code>\"</code> - Double Quote</li>
    <li><code>\'</code> - Single Quote</li>
    <li><code>\r</code> - Carriage Return</li>
    <li><code>\b</code> - Backspace</li>
    <li><code>\f</code> - Form Feed</li>
    <li><code>\v</code> - Vertical Tab</li>
  </ul>

  <h3>Example Code:</h3>
  <pre><code>#include <stdio.h>

int main() {
    printf("Hello, World!\n");  // Newline
    printf("This\tis\ta\ttabbed\tline.\n");  // Tabs
    printf("This is a backslash: \\\n");  // Backslash
    printf("This is a quote: \"Hello!\"\n");  // Double Quote

    return 0;
}</code></pre>
</div>
<div id="ascii">
  <h2>ASCII Value in C</h2>
  <p>ASCII (American Standard Code for Information Interchange) is a character encoding standard used to represent text in computers. Each character is assigned a numerical value.</p>

  <p>In C, you can print the ASCII value of a character using the <code>%d</code> format specifier.</p>

  <h3>Example Code:</h3>
  <pre><code>#include <stdio.h>

int main() {
    char character = 'A';
    int asciiValue = (int) character;  // Convert character to its ASCII value

    printf("The ASCII value of %c is %d\n", character, asciiValue);

    return 0;
}</code></pre>
</div>
<div id="constants">
  <h2>C Constants</h2>
  <p>Constants are fixed values in C that do not change during the execution of a program. They are used to represent values that remain constant throughout the program. Constants can be of various types, such as integer constants, floating-point constants, and character constants.</p>
  
  <h3>Types of Constants in C:</h3>
  <ul>
    <li><strong>Integer Constants:</strong> These represent integer values. They can be of different bases: decimal, octal, and hexadecimal.</li>
    <li><strong>Floating-Point Constants:</strong> These represent numbers with decimal points. They can be written in standard or scientific notation.</li>
    <li><strong>Character Constants:</strong> These represent single characters enclosed in single quotes (e.g., <code>'A'</code>, <code>'1'</code>, etc.).</li>
    <li><strong>String Constants:</strong> These represent sequences of characters enclosed in double quotes (e.g., <code>"Hello"</code>, <code>"C programming"</code>).</li>
  </ul>
  
  <h3>Integer Constants:</h3>
  <p>Integer constants can be written in three different formats:</p>
  <ul>
    <li><strong>Decimal:</strong> Regular base-10 integers (e.g., <code>100</code>, <code>-45</code>).</li>
    <li><strong>Octal:</strong> Numbers starting with <code>0</code> (e.g., <code>077</code> represents decimal 63).</li>
    <li><strong>Hexadecimal:</strong> Numbers starting with <code>0x</code> (e.g., <code>0x1A</code> represents decimal 26).</li>
  </ul>
  
  <h3>Floating-Point Constants:</h3>
  <p>Floating-point constants can be written in standard notation (e.g., <code>3.14</code>) or in scientific notation (e.g., <code>3.14e2</code> for <code>314.0</code>).</p>
  
  <h3>Character Constants:</h3>
  <p>Character constants are written in single quotes, representing a single character or a special escape sequence. For example:</p>
  <pre><code>'A'     // Character constant</code></pre>
  <p>Special escape sequences in character constants:</p>
  <ul>
    <li><code>'\n'</code> - Newline</li>
    <li><code>'\t'</code> - Tab</li>
    <li><code>'\\'</code> - Backslash</li>
  </ul>
  
  <h3>String Constants:</h3>
  <p>String constants are sequences of characters enclosed in double quotes. For example:</p>
  <pre><code>"Hello, World!"</code></pre>
  
  <h3>Defining Constants Using <code>#define</code> Preprocessor Directive:</h3>
  <p>In addition to using the standard constants, C allows you to define your own constants using the <code>#define</code> preprocessor directive. For example:</p>
  <pre><code>#define PI 3.14159
#define MAX 100</code></pre>
  <p>This defines <code>PI</code> as <code>3.14159</code> and <code>MAX</code> as <code>100</code>, and they can be used throughout the program in place of these values.</p>
  
  <h3>Example Code:</h3>
  <pre><code>#include <stdio.h>

#define PI 3.14159
#define MAX 100

int main() {
    const int length = 5; // constant integer
    const float pi = PI;  // constant float
    
    printf("The value of PI is: %.5f\n", pi);
    printf("The maximum value is: %d\n", MAX);
    printf("Length is: %d\n", length);
    
    return 0;
}</code></pre>
  <p>This program demonstrates the use of both the <code>const</code> keyword and <code>#define</code> to create constants.</p>
</div>
<div id="literals">
  <h2>C Literals</h2>
  <p>Literals in C are fixed values used directly in the program. They represent constant values of various data types like integers, floating-point numbers, characters, and strings. Literals are the most basic form of data used in C programming.</p>

  <h3>Types of Literals in C:</h3>
  <ul>
    <li><strong>Integer Literals:</strong> These are used to represent integer values. They can be written in three formats: decimal, octal, and hexadecimal.</li>
    <li><strong>Floating-Point Literals:</strong> These represent numbers with fractional parts, also called real numbers. They can be written in either standard or scientific notation.</li>
    <li><strong>Character Literals:</strong> These represent single characters, enclosed in single quotes.</li>
    <li><strong>String Literals:</strong> These represent sequences of characters enclosed in double quotes.</li>
    <li><strong>Escape Sequence Literals:</strong> These are special character literals like newline (<code>\n</code>), tab (<code>\t</code>), etc.</li>
  </ul>
  
  <h3>Integer Literals:</h3>
  <p>Integer literals are whole numbers. They can be written in the following formats:</p>
  <ul>
    <li><strong>Decimal:</strong> Base-10 numbers (e.g., <code>123</code>, <code>-10</code>).</li>
    <li><strong>Octal:</strong> Numbers starting with <code>0</code> (e.g., <code>075</code> represents decimal 61).</li>
    <li><strong>Hexadecimal:</strong> Numbers starting with <code>0x</code> (e.g., <code>0x1A</code> represents decimal 26).</li>
  </ul>
  
  <h3>Floating-Point Literals:</h3>
  <p>Floating-point literals are numbers that contain a decimal point. They can be written in two ways:</p>
  <ul>
    <li><strong>Standard notation:</strong> E.g., <code>3.14</code>, <code>-0.5</code>.</li>
    <li><strong>Scientific notation:</strong> E.g., <code>1.23e4</code> (which equals <code>12300.0</code>).</li>
  </ul>
  
  <h3>Character Literals:</h3>
  <p>Character literals represent single characters, enclosed in single quotes (e.g., <code>'A'</code>, <code>'1'</code>, <code>'%' </code>). A character literal can also represent special characters like newline (<code>'\n'</code>) or tab (<code>'\t'</code>).</p>
  
  <h3>String Literals:</h3>
  <p>String literals represent sequences of characters enclosed in double quotes. For example:</p>
  <pre><code>"Hello, World!"</code></pre>
  <p>String literals are always terminated by a null character <code>'\0'</code>, which marks the end of the string.</p>
  
  <h3>Escape Sequence Literals:</h3>
  <p>Escape sequence literals represent special characters that are not printable directly. These are often used in strings and character literals to represent characters that cannot be typed directly:</p>
  <ul>
    <li><code>'\\'</code> - Backslash</li>
    <li><code>'\n'</code> - Newline</li>
    <li><code>'\t'</code> - Horizontal Tab</li>
    <li><code>'\r'</code> - Carriage Return</li>
    <li><code>'\b'</code> - Backspace</li>
    <li><code>'\f'</code> - Form Feed</li>
    <li><code>'\''</code> - Single Quote</li>
    <li><code> '\"' </code> - Double Quote</li>
  </ul>

  <h3>Examples of Literals in C:</h3>
  <pre><code>#include <stdio.h>

int main() {
    int a = 10;           // Integer literal
    float b = 3.14;       // Floating-point literal
    char c = 'A';         // Character literal
    char str[] = "Hello"; // String literal
    
    printf("Integer literal: %d\n", a);
    printf("Floating-point literal: %.2f\n", b);
    printf("Character literal: %c\n", c);
    printf("String literal: %s\n", str);

    return 0;
}</code></pre>
  <p>This program demonstrates the usage of various types of literals. The <code>printf</code> function is used to print the values of the literals.</p>
  
  <h3>Using Escape Sequences:</h3>
  <p>Escape sequences allow you to represent special characters in strings or character literals. For example, printing a string with a newline:</p>
  <pre><code>printf("Hello\nWorld"); // Prints "Hello" and then moves to the next line</code></pre>
</div>
<div id="tokens">
  <h2>C Token</h2>
  <p>In C programming, a token is the smallest unit of a program. Tokens are the building blocks of C programs, and they are classified into various categories, such as keywords, identifiers, constants, operators, and separators.</p>

  <h3>Types of Tokens:</h3>
  <ul>
    <li><strong>Keywords:</strong> Reserved words like <code>int</code>, <code>if</code>, <code>while</code> that have special meanings in the language.</li>
    <li><strong>Identifiers:</strong> Names given to variables, functions, arrays, etc., such as <code>x</code>, <code>sum</code>.</li>
    <li><strong>Constants:</strong> Literal values such as numbers or characters. For example, <code>10</code> or <code>'a'</code>.</li>
    <li><strong>Operators:</strong> Symbols used to perform operations on variables and values. For example, <code>+</code>, <code>-</code>, <code>*</code>.</li>
    <li><strong>Separators:</strong> Characters that separate statements, variables, or other constructs. For example, <code>;</code>, <code>{}</code>, <code>()</code>.</li>
  </ul>

  <h3>Example of Tokens:</h3>
  <pre><code>#include <stdio.h>

int main() {
    int a = 10;       // Keyword: int, Identifier: a, Constant: 10, Operator: =
    float b = 20.5;   // Keyword: float, Identifier: b, Constant: 20.5, Operator: =
    int sum = a + b;  // Identifier: sum, Operator: +

    printf("Sum: %d\n", sum); // Function: printf, Operator: %
    return 0;
}</code></pre>
  <p>In this example, the keywords, identifiers, constants, and operators are examples of tokens. Each part of the program is a token.</p>
</div>
<div id="boolean">
  <h2>C Boolean</h2>
  <p>C does not have a built-in <code>boolean</code> data type, but you can represent Boolean values using <code>int</code>. Typically, <code>0</code> is used to represent <code>false</code> and any non-zero value (usually <code>1</code>) represents <code>true</code>.</p>

  <h3>Boolean Representation in C:</h3>
  <ul>
    <li><strong>False:</strong> In C, <code>0</code> is considered false.</li>
    <li><strong>True:</strong> In C, any non-zero value (commonly <code>1</code>) is considered true.</li>
  </ul>

  <h3>Example of Boolean in C:</h3>
  <pre><code>#include <stdio.h>

int main() {
    int isTrue = 1;  // Represents true
    int isFalse = 0; // Represents false

    if (isTrue) {
        printf("True\n");
    } else {
        printf("False\n");
    }

    if (isFalse) {
        printf("True\n");
    } else {
        printf("False\n");
    }

    return 0;
}</code></pre>
  <p>This example shows how we use <code>int</code> values to represent Boolean values in C. The condition <code>if (isTrue)</code> will print "True" because <code>isTrue</code> is 1, which is treated as true. Similarly, <code>isFalse</code> is 0, so the second condition prints "False".</p>

  <h3>Boolean Operations:</h3>
  <p>In C, logical operations can be performed using operators like <code>&&</code> (AND), <code>||</code> (OR), and <code>!</code> (NOT), which work with Boolean values.</p>
  <pre><code>#include <stdio.h>

int main() {
    int a = 1, b = 0;

    if (a && b) {
        printf("Both are true\n");
    } else {
        printf("At least one is false\n");
    }

    return 0;
}</code></pre>
  <p>This will print "At least one is false" since <code>b</code> is 0, which is treated as false.</p>
</div>

<div id="static">
  <h2>Static in C</h2>
  <p>The <code>static</code> keyword in C is used to declare variables that retain their value between function calls. It can be applied to variables inside functions as well as outside functions (global variables) to limit their scope.</p>

  <h3>Uses of static in C:</h3>
  <ul>
    <li><strong>Static Local Variables:</strong> A local variable declared as <code>static</code> retains its value between function calls. It is initialized only once and does not get reinitialized each time the function is called.</li>
    <li><strong>Static Global Variables:</strong> When a global variable is declared as <code>static</code>, it limits the scope of that variable to the file in which it is declared, making it inaccessible from other files.</li>
  </ul>

  <h3>Static Local Variable Example:</h3>
  <pre><code>#include <stdio.h>

void counter() {
    static int count = 0;  // Static variable to retain its value across function calls
    count++;
    printf("Count: %d\n", count);
}

int main() {
    counter();  // Output: Count: 1
    counter();  // Output: Count: 2
    counter();  // Output: Count: 3

    return 0;
}</code></pre>
  <p>In this example, the variable <code>count</code> retains its value between function calls because it is declared as <code>static</code>. Each time the function <code>counter()</code> is called, the value of <code>count</code> is incremented and retained.</p>

  <h3>Static Global Variable Example:</h3>
  <pre><code>#include <stdio.h>

static int globalVar = 10;  // Static global variable

void display() {
    printf("Global Variable: %d\n", globalVar);
}

int main() {
    display();  // Output: Global Variable: 10
    globalVar = 20;
    display();  // Output: Global Variable: 20

    return 0;
}</code></pre>
  <p>Here, <code>globalVar</code> is a static global variable. It can be accessed within the file, but it cannot be accessed from other files, which is the key difference between static global variables and regular global variables.</p>

  <h3>Important Notes:</h3>
  <ul>
    <li>Static variables are initialized only once, at the time of program execution.</li>
    <li>The default value of a static variable is zero if not explicitly initialized.</li>
    <li>Static variables are not destroyed when the scope of the function or block ends, unlike automatic variables.</li>
    <li>The scope of a static global variable is limited to the file in which it is declared.</li>
  </ul>
</div>
<div id="errors">
  <h2>Programming Errors in C</h2>
  <p>Programming errors are mistakes made in the code that can prevent the program from executing as expected. They are mainly classified into three types:</p>
  <ul>
    <li><strong>Syntax Errors:</strong> These occur when the code violates the grammar rules of the C programming language. Examples include missing semicolons, parentheses, or curly braces.</li>
    <li><strong>Runtime Errors:</strong> These occur while the program is running. Examples include division by zero, accessing invalid memory, or using uninitialized variables.</li>
    <li><strong>Logical Errors:</strong> These occur when the program runs without crashing but does not produce the expected output. They usually arise from incorrect algorithm logic.</li>
  </ul>

  <h3>Syntax Error Example:</h3>
  <pre><code>#include <stdio.h>

int main() {
    printf("Hello, World!")  // Missing semicolon here
    return 0;
}</code></pre>
  <p>This code will produce a syntax error because it is missing a semicolon after the <code>printf</code> function.</p>

  <h3>Runtime Error Example:</h3>
  <pre><code>#include <stdio.h>

int main() {
    int num = 0;
    printf("Enter a number: ");
    scanf("%d", &num);
    printf("Result: %d\n", 10 / num); // Division by zero can cause runtime error
    return 0;
}</code></pre>
  <p>This code causes a runtime error if the user enters 0, resulting in a division by zero error.</p>

  <h3>Logical Error Example:</h3>
  <pre><code>#include <stdio.h>

int main() {
    int a = 5, b = 0;
    printf("Result: %d\n", a / b); // Logical mistake: Dividing by zero is wrong even though it doesn't cause a compile-time error.
    return 0;
}</code></pre>
  <p>Here, dividing by zero is a logical error, as it gives an incorrect result despite no compilation error.</p>
</div>
<div id="compilevsruntime">
  <h2>Compile Time vs Runtime</h2>
  <p>In C programming, errors can be classified as either compile-time errors or runtime errors:</p>
  <ul>
    <li><strong>Compile-Time Errors:</strong> These errors occur during the compilation of the program. The program cannot be executed until these errors are fixed. Examples include syntax errors, undeclared variables, and type mismatches.</li>
    <li><strong>Runtime Errors:</strong> These errors occur while the program is running. The program compiles successfully but encounters issues during execution. Examples include accessing out-of-bounds memory, division by zero, or file not found.</li>
  </ul>

  <h3>Compile-Time Error Example:</h3>
  <pre><code>#include <stdio.h>

int main() {
    int a;
    a = 10 + "hello"; // Error: Invalid operation between integer and string.
    printf("%d\n", a);
    return 0;
}</code></pre>
  <p>This code will give a compile-time error because we are trying to perform an invalid operation between an integer and a string.</p>

  <h3>Runtime Error Example:</h3>
  <pre><code>#include <stdio.h>

int main() {
    int arr[5];
    printf("%d\n", arr[10]); // Error: Accessing out-of-bounds memory
    return 0;
}</code></pre>
  <p>This will compile but give a runtime error because it accesses memory outside the bounds of the array.</p>
</div>
<div id="conditional">
  <h2>Conditional Operator in C</h2>
  <p>The conditional operator (also known as the ternary operator) is a shorthand for an if-else statement. It is used to evaluate a condition and return one of two values based on the condition.</p>

  <h3>Syntax:</h3>
  <pre><code>condition ? expression1 : expression2;</code></pre>

  <h3>Conditional Operator Example:</h3>
  <pre><code>#include <stdio.h>

int main() {
    int x = 10, y = 20;
    int max = (x > y) ? x : y;  // If x > y, max = x, else max = y
    printf("The maximum number is: %d\n", max);
    return 0;
}</code></pre>
  <p>This program uses the ternary operator to determine the larger of two numbers and prints the maximum value.</p>
</div>
<div id="bitwise">
  <h2>Bitwise Operator in C</h2>
  <p>Bitwise operators are used to manipulate individual bits of data. They work directly on the binary representations of integers. Common bitwise operators include <code>&</code>, <code>|</code>, <code>^</code>, <code>~</code>, <code><<</code>, and <code>>></code>.</p>

  <h3>Bitwise AND (&) Operator:</h3>
  <pre><code>#include <stdio.h>

int main() {
    int a = 5, b = 3;
    printf("a & b = %d\n", a & b);  // Bitwise AND
    return 0;
}</code></pre>
  <p>This will output 1, as 5 (binary 101) AND 3 (binary 011) results in 1 (binary 001).</p>

  <h3>Bitwise OR (|) Operator:</h3>
  <pre><code>#include <stdio.h>

int main() {
    int a = 5, b = 3;
    printf("a | b = %d\n", a | b);  // Bitwise OR
    return 0;
}</code></pre>
  <p>This will output 7, as 5 (binary 101) OR 3 (binary 011) results in 7 (binary 111).</p>
</div>
<div id="twoscomplement">
  <h2>2's Complement in C</h2>
  <p>The 2's complement is a way of representing negative numbers in binary. It is calculated by inverting all bits of the number (1's complement) and then adding 1.</p>

  <h3>2's Complement Example:</h3>
  <pre><code>#include <stdio.h>

int main() {
    int num = 5;
    int twos_complement = ~num + 1; // Calculate 2's complement of 5
    printf("2's Complement of %d is: %d\n", num, twos_complement);
    return 0;
}</code></pre>
  <p>This code calculates the 2's complement of 5. The result will be -5.</p>
</div>
<div id="fundamentals">
  <h2>C Fundamental Test</h2>
  <p>This test focuses on fundamental concepts of the C programming language, including variables, data types, operators, and functions. Below is a sample code with basic tests for C fundamentals:</p>

  <h3>Test Example:</h3>
  <pre><code>#include <stdio.h>

int main() {
    // Test 1: Variable Declaration and Initialization
    int num = 10;
    float price = 19.99;
    char grade = 'A';

    // Test 2: Arithmetic Operations
    int sum = num + 5;
    float total_price = price * 2;

    // Test 3: Conditional Operator
    int result = (num > 5) ? 100 : 200;

    // Test 4: Bitwise Operation
    int bitwise_result = num & 5;  // 5 in binary is 0101, num in binary is 1010

    printf("num: %d\n", num);
    printf("sum: %d\n", sum);
    printf("total_price: %.2f\n", total_price);
    printf("result: %d\n", result);
    printf("bitwise_result: %d\n", bitwise_result);
    
    return 0;
}</code></pre>
  <p>This code tests variable declaration, basic arithmetic, the conditional operator, and a bitwise operation. It prints the results of these operations.</p>
</div>
<div id="compiler">
  <h2>Difference between Compiler and Interpreter</h2>
  <p>In programming, compilers and interpreters are used to convert high-level code into machine code, but they function in different ways. Here's a detailed comparison of the two:</p>

  <h3>Compiler:</h3>
  <ul>
    <li>A compiler translates the entire program from high-level language to machine code in one go, producing an output file (e.g., an executable file).</li>
    <li>It performs all the translation before any execution starts, and any errors in the program will only be detected after the whole code is compiled.</li>
    <li>Compilers are faster in execution because the translation occurs in advance.</li>
    <li>Once the code is compiled, it can be executed multiple times without the need for recompilation unless the source code is modified.</li>
    <li>Examples of compiled languages: C, C++, Java (compiled to bytecode).</li>
  </ul>

  <h3>Interpreter:</h3>
  <ul>
    <li>An interpreter translates code line by line and immediately executes it. It does not produce a machine code file but runs the program directly from the source code.</li>
    <li>It executes the program, detecting errors one by one while running the code.</li>
    <li>Interpreted languages tend to be slower than compiled languages because each line of code is translated at runtime.</li>
    <li>It does not generate an output file. The program must be interpreted every time it runs.</li>
    <li>Examples of interpreted languages: Python, JavaScript, Ruby.</li>
  </ul>

  <h3>Key Differences:</h3>
  <table border="1">
    <tr>
      <th>Aspect</th>
      <th>Compiler</th>
      <th>Interpreter</th>
    </tr>
    <tr>
      <td>Translation</td>
      <td>Translates the whole program at once</td>
      <td>Translates and executes line by line</td>
    </tr>
    <tr>
      <td>Error Detection</td>
      <td>Detects errors after compiling the entire program</td>
      <td>Detects errors during execution</td>
    </tr>
    <tr>
      <td>Execution Speed</td>
      <td>Faster execution after compilation</td>
      <td>Slower execution because it translates and executes line by line</td>
    </tr>
    <tr>
      <td>Output</td>
      <td>Generates an output file (e.g., executable)</td>
      <td>Does not produce a separate output file</td>
    </tr>
    <tr>
      <td>Example Languages</td>
      <td>C, C++, Java</td>
      <td>Python, JavaScript, Ruby</td>
    </tr>
  </table>

  <h3>Example of Compilation in C:</h3>
  <pre><code>#include <stdio.h>

int main() {
    printf("Hello, World!\n");
    return 0;
}</code></pre>
  <p>This simple C program will be compiled by a compiler before it runs, generating an executable file which can be run independently without recompiling it.</p>

  <h3>Example of Interpretation in Python:</h3>
  <pre><code>print("Hello, World!")</code></pre>
  <p>This Python program is executed line by line by an interpreter without producing a separate executable file.</p>
</div>

<div id="structure">
  <h2>Structure of C Program</h2>
  <p>The structure of a C program is essential to understanding how a C program is organized and executed. A typical C program consists of the following parts:</p>

  <h3>1. Preprocessor Directives:</h3>
  <p>Preprocessor directives are instructions given to the compiler to preprocess the source code before actual compilation. They typically include header files.</p>
  <pre><code>#include <stdio.h> // Header file inclusion
</code></pre>

  <h3>2. Global Declarations:</h3>
  <p>Global variables or functions are declared here, and they can be used throughout the program.</p>
  <pre><code>int globalVariable = 10; // A global variable</code></pre>

  <h3>3. Main Function:</h3>
  <p>The <code>main()</code> function is the entry point of every C program. The execution starts from here. Every C program must contain a <code>main()</code> function.</p>
  <pre><code>int main() {
    // Code to be executed
    return 0;
}</code></pre>

  <h3>4. Local Declarations:</h3>
  <p>Local variables are declared inside the <code>main()</code> function or any other functions.</p>
  <pre><code>int num = 5; // A local variable</code></pre>

  <h3>5. Function Definitions:</h3>
  <p>In addition to the <code>main()</code> function, you can define other functions to perform specific tasks. Function definitions typically contain the function signature, body, and return statements.</p>
  <pre><code>void myFunction() {
    printf("Hello, I am a function!");
}</code></pre>

  <h3>6. Return Statement:</h3>
  <p>Every <code>main()</code> function must return an integer value, typically <code>return 0;</code>, to indicate the program has executed successfully.</p>
  <pre><code>return 0; // Signals successful program execution</code></pre>

  <h3>Complete C Program Structure Example:</h3>
  <pre><code>#include <stdio.h>

// Global declaration
int num = 5;

void display() {
    printf("Number: %d\n", num);
}

int main() {
    // Local declaration
    int localVar = 10;
    printf("Local Variable: %d\n", localVar);
    display(); // Calling the function
    return 0;
}</code></pre>
  <p>This program contains the basic structure: preprocessor directives, global declarations, local declarations, and function definitions.</p>
</div>

<div id="programming">
  <h2>What is a Programming Language?</h2>
  <p>A programming language is a formal system that provides a set of instructions used to produce a desired output. These instructions can be used to create software, solve problems, and control hardware. Programming languages are used to write programs that instruct a computer to perform specific tasks.</p>

  <h3>Types of Programming Languages:</h3>
  <ul>
    <li><strong>High-Level Languages:</strong> These languages are closer to human languages, making them easier to write and understand. Examples include C, Python, Java, and Ruby.</li>
    <li><strong>Low-Level Languages:</strong> These are closer to machine language and are harder to understand and write. Examples include assembly languages and machine code.</li>
    <li><strong>Domain-Specific Languages:</strong> These are designed for specific tasks or industries, such as SQL for database queries or HTML for web page design.</li>
  </ul>

  <h3>Categories of Programming Languages:</h3>
  <p>Programming languages can be divided into various categories based on how they are executed and their purpose:</p>
  <ul>
    <li><strong>Procedural Programming Languages:</strong> These languages follow a step-by-step procedure to perform tasks. Examples include C and Pascal.</li>
    <li><strong>Object-Oriented Programming Languages (OOP):</strong> These languages use objects and classes to organize code. Examples include Java, Python, and C++.</li>
    <li><strong>Functional Programming Languages:</strong> These languages treat computation as the evaluation of mathematical functions and avoid changing state or mutable data. Examples include Haskell and Lisp.</li>
    <li><strong>Logic Programming Languages:</strong> These languages are based on formal logic. Prolog is a common example.</li>
  </ul>

  <h3>Key Features of a Programming Language:</h3>
  <ul>
    <li><strong>Syntax:</strong> The rules that define the structure of valid code.</li>
    <li><strong>Semantics:</strong> The meaning of the code or the logic it expresses.</li>
    <li><strong>Abstraction:</strong> The ability to hide complex details and provide simple interfaces.</li>
    <li><strong>Portability:</strong> The ability of a program to run on different types of systems without modification.</li>
  </ul>

  <h3>Examples of Programming Languages:</h3>
  <pre><code>// C - A procedural language
#include <stdio.h>
int main() {
    printf("Hello, World!");
    return 0;
}
</code></pre>
  <pre><code># Python - A high-level, interpreted language
print("Hello, World!")
</code></pre>
  <p>In the above examples, C is a procedural programming language, while Python is a high-level, interpreted language.</p>

  <h3>Importance of Programming Languages:</h3>
  <p>Programming languages are the foundation of all software development. They allow developers to write code that communicates with hardware and solves complex problems. The choice of programming language affects the efficiency, scalability, and maintainability of software systems. It is essential to choose the right language based on the task and the environment in which the program will run.</p>
</div>
<div id="ifelse">
  <h2>if-else in C (Advanced Examples)</h2>

  <h3>1. Check if a number is prime or not</h3>
  <pre><code>
#include &lt;stdio.h&gt;
int main() {
    int num, i, flag = 1;
    printf("Enter a number: ");
    scanf("%d", &num);
    if (num <= 1)
        flag = 0;
    else {
        for(i = 2; i <= num/2; ++i) {
            if(num % i == 0) {
                flag = 0;
                break;
            }
        }
    }
    if (flag)
        printf("Prime number\n");
    else
        printf("Not a prime number\n");
}
  </code></pre>

  <h3>2. Find the largest among three numbers</h3>
  <pre><code>
#include &lt;stdio.h&gt;
int main() {
    int a, b, c;
    printf("Enter 3 numbers: ");
    scanf("%d %d %d", &a, &b, &c);
    if (a >= b && a >= c)
        printf("%d is largest", a);
    else if (b >= a && b >= c)
        printf("%d is largest", b);
    else
        printf("%d is largest", c);
}
  </code></pre>

  <h3>3. Leap year check</h3>
  <pre><code>
#include &lt;stdio.h&gt;
int main() {
    int year;
    printf("Enter year: ");
    scanf("%d", &year);
    if ((year % 4 == 0 && year % 100 != 0) || year % 400 == 0)
        printf("Leap Year");
    else
        printf("Not a Leap Year");
}
  </code></pre>

  <h3>4. Grading system</h3>
  <pre><code>
#include &lt;stdio.h&gt;
int main() {
    int marks;
    printf("Enter marks (0-100): ");
    scanf("%d", &marks);
    if (marks >= 90)
        printf("Grade: A");
    else if (marks >= 75)
        printf("Grade: B");
    else if (marks >= 60)
        printf("Grade: C");
    else if (marks >= 40)
        printf("Grade: D");
    else
        printf("Fail");
}
  </code></pre>

  <h3>5. Character is vowel or consonant</h3>
  <pre><code>
#include &lt;stdio.h&gt;
int main() {
    char ch;
    printf("Enter a character: ");
    scanf(" %c", &ch);
    if (ch=='a'||ch=='e'||ch=='i'||ch=='o'||ch=='u' ||
        ch=='A'||ch=='E'||ch=='I'||ch=='O'||ch=='U')
        printf("Vowel");
    else
        printf("Consonant");
}
  </code></pre>

  <h3>6. Electricity Bill calculator</h3>
  <pre><code>
#include &lt;stdio.h&gt;
int main() {
    int units;
    float bill;
    printf("Enter consumed units: ");
    scanf("%d", &units);
    if(units <= 100)
        bill = units * 1.5;
    else if(units <= 300)
        bill = 100 * 1.5 + (units - 100) * 2.5;
    else
        bill = 100 * 1.5 + 200 * 2.5 + (units - 300) * 3.5;
    printf("Total Bill: ₹%.2f", bill);
}
  </code></pre>

  <h3>7. Check even or odd without modulus (%)</h3>
  <pre><code>
#include &lt;stdio.h&gt;
int main() {
    int num;
    printf("Enter a number: ");
    scanf("%d", &num);
    if ((num & 1) == 0)
        printf("Even");
    else
        printf("Odd");
}
  </code></pre>

  <h3>8. SI or CI calculator using menu</h3>
  <pre><code>
#include &lt;stdio.h&gt;
#include &lt;math.h&gt;
int main() {
    float p, r, t, ci, si;
    int choice;
    printf("Enter principal, rate, time: ");
    scanf("%f %f %f", &p, &r, &t);
    printf("1: SI  2: CI\nEnter choice: ");
    scanf("%d", &choice);
    if (choice == 1)
        si = (p * r * t) / 100, printf("Simple Interest = %.2f", si);
    else if (choice == 2)
        ci = p * pow((1 + r / 100), t) - p, printf("Compound Interest = %.2f", ci);
    else
        printf("Invalid Choice");
}
  </code></pre>

  <h3>9. Find roots of quadratic equation</h3>
  <pre><code>
#include &lt;stdio.h&gt;
#include &lt;math.h&gt;
int main() {
    float a, b, c, d, root1, root2;
    printf("Enter a, b, c: ");
    scanf("%f %f %f", &a, &b, &c);
    d = b*b - 4*a*c;
    if (d > 0) {
        root1 = (-b + sqrt(d)) / (2*a);
        root2 = (-b - sqrt(d)) / (2*a);
        printf("Real Roots: %.2f & %.2f", root1, root2);
    }
    else if (d == 0) {
        root1 = -b / (2*a);
        printf("Equal Roots: %.2f", root1);
    }
    else {
        printf("Imaginary Roots");
    }
}
  </code></pre>

  <h3>10. Day of week using if-else</h3>
  <pre><code>
#include &lt;stdio.h&gt;
int main() {
    int day;
    printf("Enter day number (1-7): ");
    scanf("%d", &day);
    if (day == 1)
        printf("Monday");
    else if (day == 2)
        printf("Tuesday");
    else if (day == 3)
        printf("Wednesday");
    else if (day == 4)
        printf("Thursday");
    else if (day == 5)
        printf("Friday");
    else if (day == 6)
        printf("Saturday");
    else if (day == 7)
        printf("Sunday");
    else
        printf("Invalid");
}
  </code></pre>

</div>


<div id="switch">
  <h2>Switch Case in C</h2>

  <h3>What is switch case in C?</h3>
  <p>
    In C, the <strong>switch</strong> statement is used to execute one block of code among many options.
    It is an alternative to using multiple <code>if-else-if</code> statements. The value of an expression is
    compared with various <code>case</code> labels, and the block matching the value is executed.
  </p>

  <h3>Syntax:</h3>
  <pre><code>
switch(expression) {
    case value1:
        // code block
        break;
    case value2:
        // code block
        break;
    ...
    default:
        // default code block
}
  </code></pre>

  <p><strong>Note:</strong> The <code>break</code> statement prevents fall-through (execution of remaining cases).</p>

  <h3>Advanced Switch Case Examples in C</h3>

  <h4>1. Simple Calculator</h4>
  <pre><code>
#include &lt;stdio.h&gt;
int main() {
    char op;
    float a, b;
    printf("Enter operation (+, -, *, /): ");
    scanf(" %c", &op);
    printf("Enter two numbers: ");
    scanf("%f %f", &a, &b);
    switch(op) {
        case '+': printf("Result = %.2f", a + b); break;
        case '-': printf("Result = %.2f", a - b); break;
        case '*': printf("Result = %.2f", a * b); break;
        case '/': 
            if(b != 0) printf("Result = %.2f", a / b);
            else printf("Cannot divide by zero");
            break;
        default: printf("Invalid operator");
    }
}
  </code></pre>

  <h4>2. Check vowel or consonant</h4>
  <pre><code>
#include &lt;stdio.h&gt;
int main() {
    char ch;
    printf("Enter a letter: ");
    scanf(" %c", &ch);
    switch(ch) {
        case 'a': case 'e': case 'i': case 'o': case 'u':
        case 'A': case 'E': case 'I': case 'O': case 'U':
            printf("Vowel"); break;
        default:
            printf("Consonant");
    }
}
  </code></pre>

  <h4>3. Display day name</h4>
  <pre><code>
#include &lt;stdio.h&gt;
int main() {
    int day;
    printf("Enter day number (1-7): ");
    scanf("%d", &day);
    switch(day) {
        case 1: printf("Monday"); break;
        case 2: printf("Tuesday"); break;
        case 3: printf("Wednesday"); break;
        case 4: printf("Thursday"); break;
        case 5: printf("Friday"); break;
        case 6: printf("Saturday"); break;
        case 7: printf("Sunday"); break;
        default: printf("Invalid day");
    }
}
  </code></pre>

  <h4>4. Grade based on marks</h4>
  <pre><code>
#include &lt;stdio.h&gt;
int main() {
    int marks;
    printf("Enter marks: ");
    scanf("%d", &marks);
    switch(marks / 10) {
        case 10:
        case 9: printf("Grade A"); break;
        case 8: printf("Grade B"); break;
        case 7: printf("Grade C"); break;
        case 6: printf("Grade D"); break;
        default: printf("Fail");
    }
}
  </code></pre>

  <h4>5. Calculator with multiple operations</h4>
  <pre><code>
#include &lt;stdio.h&gt;
#include &lt;math.h&gt;
int main() {
    int op;
    float x, y;
    printf("1: Add  2: Subtract  3: Multiply  4: Power\n");
    printf("Choose operation: ");
    scanf("%d", &op);
    printf("Enter two numbers: ");
    scanf("%f %f", &x, &y);
    switch(op) {
        case 1: printf("Sum = %.2f", x + y); break;
        case 2: printf("Difference = %.2f", x - y); break;
        case 3: printf("Product = %.2f", x * y); break;
        case 4: printf("Power = %.2f", pow(x, y)); break;
        default: printf("Invalid Choice");
    }
}
  </code></pre>

  <h4>6. Basic menu system</h4>
  <pre><code>
#include &lt;stdio.h&gt;
int main() {
    int choice;
    printf("1. Start Game\n2. Load Game\n3. Exit\nEnter choice: ");
    scanf("%d", &choice);
    switch(choice) {
        case 1: printf("Starting Game..."); break;
        case 2: printf("Loading Game..."); break;
        case 3: printf("Exiting..."); break;
        default: printf("Invalid Option");
    }
}
  </code></pre>

  <h4>7. Arithmetic using enum as menu</h4>
  <pre><code>
#include &lt;stdio.h&gt;
enum Operations { ADD = 1, SUB, MUL, DIV };
int main() {
    int op;
    float a, b;
    printf("1:Add 2:Sub 3:Mul 4:Div\nChoice: ");
    scanf("%d", &op);
    printf("Enter a & b: ");
    scanf("%f %f", &a, &b);
    switch(op) {
        case ADD: printf("Add = %.2f", a + b); break;
        case SUB: printf("Sub = %.2f", a - b); break;
        case MUL: printf("Mul = %.2f", a * b); break;
        case DIV: if (b != 0) printf("Div = %.2f", a / b);
                  else printf("Divide by zero"); break;
        default: printf("Invalid");
    }
}
  </code></pre>

  <h4>8. ASCII to character explanation</h4>
  <pre><code>
#include &lt;stdio.h&gt;
int main() {
    int code;
    printf("Enter ASCII code (65-90): ");
    scanf("%d", &code);
    switch(code) {
        case 65: printf("Character is A"); break;
        case 66: printf("Character is B"); break;
        case 67: printf("Character is C"); break;
        default: printf("Not A-C");
    }
}
  </code></pre>

  <h4>9. Temperature unit switch</h4>
  <pre><code>
#include &lt;stdio.h&gt;
int main() {
    char unit;
    float temp;
    printf("Enter unit (C/F): ");
    scanf(" %c", &unit);
    printf("Enter temperature: ");
    scanf("%f", &temp);
    switch(unit) {
        case 'C': printf("In Fahrenheit = %.2f", temp * 9/5 + 32); break;
        case 'F': printf("In Celsius = %.2f", (temp - 32) * 5/9); break;
        default: printf("Invalid unit");
    }
}
  </code></pre>

  <h4>10. Switch with nested switch</h4>
  <pre><code>
#include &lt;stdio.h&gt;
int main() {
    int mainMenu = 1, subMenu;
    switch(mainMenu) {
        case 1:
            printf("Submenu: 1.Play 2.Pause\nEnter choice: ");
            scanf("%d", &subMenu);
            switch(subMenu) {
                case 1: printf("Playing..."); break;
                case 2: printf("Paused..."); break;
                default: printf("Invalid Submenu");
            }
            break;
        default: printf("Invalid Main Menu");
    }
}
  </code></pre>
</div>

<div id="ifelseswitch">
  <h2>if-else vs switch in C</h2>

  <p><strong>Definition:</strong> Both <code>if-else</code> and <code>switch</code> statements are used for decision-making in C programming. However, they differ in structure, use-case, and performance based on the scenario.</p>

  <h3>Difference Table:</h3>
  <table border="1" cellpadding="10">
    <thead>
      <tr>
        <th>Aspect</th>
        <th>if-else</th>
        <th>switch</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>Expression Type</td>
        <td>Can evaluate any condition (logical/relational expressions)</td>
        <td>Only works with constant integral expressions (int, char)</td>
      </tr>
      <tr>
        <td>Range of Choices</td>
        <td>Multiple conditions possible</td>
        <td>Fixed number of discrete choices</td>
      </tr>
      <tr>
        <td>Flexibility</td>
        <td>More flexible for complex conditions</td>
        <td>Less flexible — limited to simple comparisons</td>
      </tr>
      <tr>
        <td>Speed</td>
        <td>Slower for many conditions</td>
        <td>Faster for many cases (compiler optimizes with jump tables)</td>
      </tr>
      <tr>
        <td>Default Case Handling</td>
        <td>Handled using <code>else</code></td>
        <td>Handled using <code>default</code></td>
      </tr>
    </tbody>
  </table>

  <h3>When to Use?</h3>
  <ul>
    <li>Use <code>if-else</code> when conditions involve ranges, comparisons, or logical operations.</li>
    <li>Use <code>switch</code> when you have multiple fixed values for a single variable.</li>
  </ul>

  <h3>Examples (Advanced):</h3>

  <h4>Example 1 - if-else: Grade Classification</h4>
  <pre><code>
int score = 87;
if (score >= 90) printf("Grade: A");
else if (score >= 80) printf("Grade: B");
else if (score >= 70) printf("Grade: C");
else printf("Grade: D or Fail");
  </code></pre>

  <h4>Example 2 - switch: Day of Week</h4>
  <pre><code>
int day = 3;
switch(day) {
  case 1: printf("Monday"); break;
  case 2: printf("Tuesday"); break;
  case 3: printf("Wednesday"); break;
  default: printf("Invalid Day");
}
  </code></pre>

  <h4>Example 3 - if-else: Leap Year Check</h4>
  <pre><code>
int year = 2024;
if ((year % 4 == 0 && year % 100 != 0) || year % 400 == 0)
  printf("Leap Year");
else
  printf("Not a Leap Year");
  </code></pre>

  <h4>Example 4 - switch: Calculator</h4>
  <pre><code>
char op = '+';
int a = 10, b = 5;
switch(op) {
  case '+': printf("%d", a + b); break;
  case '-': printf("%d", a - b); break;
  case '*': printf("%d", a * b); break;
  case '/': printf("%d", a / b); break;
  default: printf("Invalid Operator");
}
  </code></pre>

  <h4>Example 5 - if-else: Largest of 3 Numbers</h4>
  <pre><code>
int a = 5, b = 10, c = 7;
if (a > b && a > c) printf("A is largest");
else if (b > c) printf("B is largest");
else printf("C is largest");
  </code></pre>

  <h4>Example 6 - switch: Menu Driven Program</h4>
  <pre><code>
int choice = 2;
switch(choice) {
  case 1: printf("Start Game"); break;
  case 2: printf("Load Game"); break;
  case 3: printf("Exit"); break;
  default: printf("Invalid Option");
}
  </code></pre>

  <h4>Example 7 - if-else: Vowel or Consonant</h4>
  <pre><code>
char ch = 'e';
if (ch=='a'||ch=='e'||ch=='i'||ch=='o'||ch=='u') printf("Vowel");
else printf("Consonant");
  </code></pre>

  <h4>Example 8 - switch: Vowel Checker</h4>
  <pre><code>
char ch = 'i';
switch(ch) {
  case 'a':
  case 'e':
  case 'i':
  case 'o':
  case 'u': printf("Vowel"); break;
  default: printf("Consonant");
}
  </code></pre>

  <h4>Example 9 - if-else: Triangle Type Checker</h4>
  <pre><code>
int a = 3, b = 3, c = 3;
if (a == b && b == c) printf("Equilateral");
else if (a == b || b == c || a == c) printf("Isosceles");
else printf("Scalene");
  </code></pre>

  <h4>Example 10 - switch: Marks to Grade Converter</h4>
  <pre><code>
int marks = 75;
switch(marks / 10) {
  case 10:
  case 9: printf("A+"); break;
  case 8: printf("A"); break;
  case 7: printf("B"); break;
  case 6: printf("C"); break;
  default: printf("Fail");
}
  </code></pre>
</div>
<div id="cloops">
  <h2>C Loops</h2>
  <p>Loops in C allow you to execute a block of code repeatedly based on a condition. There are three types of loops in C: <strong>for</strong>, <strong>while</strong>, and <strong>do-while</strong>.</p>

  <h3>1. For Loop</h3>
  <p>The for loop is used when the number of iterations is known beforehand.</p>
  <h4>Structure:</h4>
  <pre><code>
  for(initialization; condition; increment/decrement) {
      // Code block to be executed
  }
  </code></pre>
  <h4>Flowchart:</h4>
  <p>Start → Initialization → Condition Check → Execute Code → Increment/Decrement → Condition Check → (Repeat or Exit)</p>
  <h4>Example Code:</h4>
  <pre><code>
  #include <stdio.h>

  int main() {
      for(int i = 1; i <= 10; i++) {
          printf("%d ", i);
      }
      return 0;
  }
  </code></pre>

  <h3>2. While Loop</h3>
  <p>The while loop runs as long as the condition remains true.</p>
  <h4>Structure:</h4>
  <pre><code>
  while(condition) {
      // Code block to be executed
  }
  </code></pre>
  <h4>Flowchart:</h4>
  <p>Start → Condition Check → (If True: Execute Code → Increment/Decrement → Back to Condition Check) → (If False: Exit)</p>
  <h4>Example Code:</h4>
  <pre><code>
  #include <stdio.h>

  int main() {
      int i = 1;
      while(i <= 10) {
          printf("%d ", i);
          i++;
      }
      return 0;
  }
  </code></pre>

  <h3>3. Do-While Loop</h3>
  <p>The do-while loop guarantees that the code block is executed at least once.</p>
  <h4>Structure:</h4>
  <pre><code>
  do {
      // Code block to be executed
  } while(condition);
  </code></pre>
  <h4>Flowchart:</h4>
  <p>Start → Execute Code → Condition Check → (If True: Back to Execute Code) → (If False: Exit)</p>
  <h4>Example Code:</h4>
  <pre><code>
  #include <stdio.h>

  int main() {
      int i = 1;
      do {
          printf("%d ", i);
          i++;
      } while(i <= 10);
      return 0;
  }
  </code></pre>

  <h3>Conclusion:</h3>
  <p>Choose the appropriate loop based on the number of iterations and whether you need to guarantee at least one execution.</p>
</div>
<div id="dowhile">
  <h2>C do-while Loop</h2>
  <p>The do-while loop in C executes the loop's body first and then checks the condition. It guarantees that the loop body is executed at least once.</p>

  <h3>Structure:</h3>
  <pre><code>
  do {
      // Loop body
  } while (condition);
  </code></pre>

  <h3>10 Difficult Examples of do-while Loop:</h3>

  <h4>Example 1: Find the Factorial of a Number</h4>
  <pre><code>
  #include <stdio.h>

  int main() {
      int num, fact = 1;
      printf("Enter a number: ");
      scanf("%d", &num);

      do {
          fact *= num;
          num--;
      } while (num > 0);
      printf("Factorial: %d\n", fact);
      return 0;
  }
  </code></pre>

  <h4>Example 2: Reverse Digits of a Number</h4>
  <pre><code>
  #include <stdio.h>

  int main() {
      int num, reversed = 0, remainder;
      printf("Enter an integer: ");
      scanf("%d", &num);

      do {
          remainder = num % 10;
          reversed = reversed * 10 + remainder;
          num /= 10;
      } while (num != 0);
      printf("Reversed Number: %d\n", reversed);
      return 0;
  }
  </code></pre>

  <h4>Example 3: Sum of Digits of a Number</h4>
  <pre><code>
  #include <stdio.h>

  int main() {
      int num, sum = 0;
      printf("Enter a number: ");
      scanf("%d", &num);

      do {
          sum += num % 10;
          num /= 10;
      } while (num != 0);
      printf("Sum of digits: %d\n", sum);
      return 0;
  }
  </code></pre>

  <h4>Example 4: Check for Prime Number</h4>
  <pre><code>
  #include <stdio.h>

  int main() {
      int num, i = 2, isPrime = 1;
      printf("Enter a number: ");
      scanf("%d", &num);

      do {
          if (num % i == 0 && i != num) {
              isPrime = 0;
              break;
          }
          i++;
      } while (i <= num / 2);

      if (isPrime && num > 1)
          printf("%d is prime\n", num);
      else
          printf("%d is not prime\n", num);
      return 0;
  }
  </code></pre>

  <h4>Example 5: Display Fibonacci Sequence</h4>
  <pre><code>
  #include <stdio.h>

  int main() {
      int n, first = 0, second = 1, next;
      printf("Enter the number of terms: ");
      scanf("%d", &n);

      do {
          printf("%d ", first);
          next = first + second;
          first = second;
          second = next;
          n--;
      } while (n > 0);
      return 0;
  }
  </code></pre>

  <h4>Example 6: Print Pattern of Numbers</h4>
  <pre><code>
  #include <stdio.h>

  int main() {
      int n = 5, i = 1;
      do {
          int j = 1;
          do {
              printf("%d ", j);
              j++;
          } while (j <= i);
          printf("\n");
          i++;
      } while (i <= n);
      return 0;
  }
  </code></pre>

  <h4>Example 7: Menu-driven Program</h4>
  <pre><code>
  #include <stdio.h>

  int main() {
      int choice;
      do {
          printf("Menu:\n1. Option 1\n2. Option 2\n3. Exit\nEnter your choice: ");
          scanf("%d", &choice);

          switch(choice) {
              case 1: printf("Option 1 Selected\n"); break;
              case 2: printf("Option 2 Selected\n"); break;
              case 3: printf("Exiting...\n"); break;
              default: printf("Invalid choice!\n");
          }
      } while (choice != 3);
      return 0;
  }
  </code></pre>

  <h4>Example 8: Count Occurrences of a Character in a String</h4>
  <pre><code>
  #include <stdio.h>
  #include <string.h>

  int main() {
      char str[100], ch;
      int i = 0, count = 0;
      printf("Enter a string: ");
      gets(str);
      printf("Enter a character to count: ");
      scanf("%c", &ch);

      do {
          if (str[i] == ch)
              count++;
          i++;
      } while (str[i] != '\0');
      printf("The character '%c' appears %d times.\n", ch, count);
      return 0;
  }
  </code></pre>

  <h4>Example 9: Print Palindrome String</h4>
  <pre><code>
  #include <stdio.h>
  #include <string.h>

  int main() {
      char str[100], reverse[100];
      int i, length;
      printf("Enter a string: ");
      gets(str);

      length = strlen(str);
      i = 0;
      do {
          reverse[i] = str[length - i - 1];
          i++;
      } while (i < length);

      reverse[i] = '\0';
      printf("Reversed string: %s\n", reverse);
      return 0;
  }
  </code></pre>

  <h4>Example 10: Find GCD of Two Numbers</h4>
  <pre><code>
  #include <stdio.h>

  int main() {
      int a, b, temp;
      printf("Enter two numbers: ");
      scanf("%d %d", &a, &b);

      do {
          temp = a % b;
          a = b;
          b = temp;
      } while (b != 0);
      printf("GCD: %d\n", a);
      return 0;
  }
  </code></pre>
</div>
<div id="while">
  <h2>C while Loop</h2>
  <p>The while loop in C repeatedly executes a block of code as long as a given condition is true. If the condition is false initially, the loop will not execute.</p>

  <h3>Structure:</h3>
  <pre><code>
  while (condition) {
      // Loop body
  }
  </code></pre>

  <h3>10 Difficult Examples of while Loop:</h3>

  <h4>Example 1: Find Factorial of a Number</h4>
  <pre><code>
  #include <stdio.h>

  int main() {
      int num, fact = 1;
      printf("Enter a number: ");
      scanf("%d", &num);

      while (num > 0) {
          fact *= num;
          num--;
      }
      printf("Factorial: %d\n", fact);
      return 0;
  }
  </code></pre>

  <h4>Example 2: Print Fibonacci Sequence</h4>
  <pre><code>
  #include <stdio.h>

  int main() {
      int n, first = 0, second = 1, next;
      printf("Enter the number of terms: ");
      scanf("%d", &n);

      while (n > 0) {
          printf("%d ", first);
          next = first + second;
          first = second;
          second = next;
          n--;
      }
      return 0;
  }
  </code></pre>

  <h4>Example 3: Sum of Natural Numbers</h4>
  <pre><code>
  #include <stdio.h>

  int main() {
      int n, sum = 0;
      printf("Enter a number: ");
      scanf("%d", &n);

      while (n > 0) {
          sum += n;
          n--;
      }
      printf("Sum: %d\n", sum);
      return 0;
  }
  </code></pre>

  <h4>Example 4: Reverse a Number</h4>
  <pre><code>
  #include <stdio.h>

  int main() {
      int num, reversed = 0, remainder;
      printf("Enter an integer: ");
      scanf("%d", &num);

      while (num != 0) {
          remainder = num % 10;
          reversed = reversed * 10 + remainder;
          num /= 10;
      }
      printf("Reversed Number: %d\n", reversed);
      return 0;
  }
  </code></pre>

  <h4>Example 5: Count Digits in a Number</h4>
  <pre><code>
  #include <stdio.h>

  int main() {
      int num, count = 0;
      printf("Enter a number: ");
      scanf("%d", &num);

      while (num != 0) {
          num /= 10;
          count++;
      }
      printf("Number of digits: %d\n", count);
      return 0;
  }
  </code></pre>

  <h4>Example 6: Check Prime Number</h4>
  <pre><code>
  #include <stdio.h>

  int main() {
      int num, i = 2, isPrime = 1;
      printf("Enter a number: ");
      scanf("%d", &num);

      while (i <= num / 2) {
          if (num % i == 0) {
              isPrime = 0;
              break;
          }
          i++;
      }

      if (isPrime && num > 1)
          printf("%d is prime\n", num);
      else
          printf("%d is not prime\n", num);
      return 0;
  }
  </code></pre>

  <h4>Example 7: Print Pattern</h4>
  <pre><code>
  #include <stdio.h>

  int main() {
      int i = 1, n = 5;
      while (i <= n) {
          int j = 1;
          while (j <= i) {
              printf("* ");
              j++;
          }
          printf("\n");
          i++;
      }
      return 0;
  }
  </code></pre>

  <h4>Example 8: Display Multiplication Table</h4>
  <pre><code>
  #include <stdio.h>

  int main() {
      int num, i = 1;
      printf("Enter a number: ");
      scanf("%d", &num);

      while (i <= 10) {
          printf("%d x %d = %d\n", num, i, num * i);
          i++;
      }
      return 0;
  }
  </code></pre>

  <h4>Example 9: Sum of Odd Numbers</h4>
  <pre><code>
  #include <stdio.h>

  int main() {
      int n, sum = 0, i = 1;
      printf("Enter a number: ");
      scanf("%d", &n);

      while (i <= n) {
          if (i % 2 != 0)
              sum += i;
          i++;
      }
      printf("Sum of odd numbers: %d\n", sum);
      return 0;
  }
  </code></pre>

  <h4>Example 10: Count Vowels in a String</h4>
  <pre><code>
  #include <stdio.h>
  #include <string.h>

  int main() {
      char str[100];
      int i = 0, vowels = 0;
      printf("Enter a string: ");
      gets(str);

      while (str[i] != '\0') {
          if (str[i] == 'a' || str[i] == 'e' || str[i] == 'i' || str[i] == 'o' || str[i] == 'u' || 
              str[i] == 'A' || str[i] == 'E' || str[i] == 'I' || str[i] == 'O' || str[i] == 'U') {
              vowels++;
          }
          i++;
      }
      printf("Number of vowels:

</div>
<div id="forloop">
  <h2>C for Loop</h2>
  <p>The for loop in C is used to execute a block of code a specific number of times. It consists of three parts: initialization, condition, and update.</p>

  <h3>Structure:</h3>
  <pre><code>
  for (initialization; condition; update) {
      // Loop body
  }
  </code></pre>

  <h3>10 Difficult Examples of for Loop:</h3>

  <h4>Example 1: Print Multiplication Table of a Number</h4>
  <pre><code>
  #include <stdio.h>

  int main() {
      int num;
      printf("Enter a number: ");
      scanf("%d", &num);

      for (int i = 1; i <= 10; i++) {
          printf("%d * %d = %d\n", num, i, num * i);
      }
      return 0;
  }
  </code></pre>

  <h4>Example 2: Find Factorial of a Number</h4>
  <pre><code>
  #include <stdio.h>

  int main() {
      int num, fact = 1;
      printf("Enter a number: ");
      scanf("%d", &num);

      for (int i = 1; i <= num; i++) {
          fact *= i;
      }
      printf("Factorial: %d\n", fact);
      return 0;
  }
  </code></pre>

  <h4>Example 3: Print Fibonacci Sequence</h4>
  <pre><code>
  #include <stdio.h>

  int main() {
      int n, first = 0, second = 1, next;
      printf("Enter the number of terms: ");
      scanf("%d", &n);

      for (int i = 0; i < n; i++) {
          printf("%d ", first);
          next = first + second;
          first = second;
          second = next;
      }
      return 0;
  }
  </code></pre>

  <h4>Example 4: Prime Numbers Between Two Numbers</h4>
  <pre><code>
  #include <stdio.h>

  int main() {
      int start, end, i, j, isPrime;

      printf("Enter the range (start and end): ");
      scanf("%d %d", &start, &end);

      for (i = start; i <= end; i++) {
          isPrime = 1;
          for (j = 2; j <= i / 2; j++) {
              if (i % j == 0) {
                  isPrime = 0;
                  break;
              }
          }
          if (isPrime && i > 1)
              printf("%d ", i);
      }
      return 0;
  }
  </code></pre>

  <h4>Example 5: Reverse a Number</h4>
  <pre><code>
  #include <stdio.h>

  int main() {
      int num, reversed = 0, remainder;
      printf("Enter an integer: ");
      scanf("%d", &num);

      for (; num != 0; num /= 10) {
          remainder = num % 10;
          reversed = reversed * 10 + remainder;
      }
      printf("Reversed Number: %d\n", reversed);
      return 0;
  }
  </code></pre>

  <h4>Example 6: Display Pyramid Pattern</h4>
  <pre><code>
  #include <stdio.h>

  int main() {
      int n = 5;
      for (int i = 1; i <= n; i++) {
          for (int j = 1; j <= n - i; j++) {
              printf(" ");
          }
          for (int k = 1; k <= (2 * i - 1); k++) {
              printf("*");
          }
          printf("\n");
      }
      return 0;
  }
  </code></pre>

  <h4>Example 7: Print Armstrong Numbers Between Two Numbers</h4>
  <pre><code>
  #include <stdio.h>
  #include <math.h>

  int main() {
      int start, end, num, digit, sum, count;

      printf("Enter the range (start and end): ");
      scanf("%d %d", &start, &end);

      for (num = start; num <= end; num++) {
          sum = 0;
          count = log10(num) + 1;
          for (int temp = num; temp != 0; temp /= 10) {
              digit = temp % 10;
              sum += pow(digit, count);
          }
          if (sum == num) {
              printf("%d ", num);
          }
      }
      return 0;
  }
  </code></pre>

  <h4>Example 8: Multiplication of Two Matrices</h4>
  <pre><code>
  #include <stdio.h>

  int main() {
      int row1, col1, row2, col2;
      printf("Enter the dimensions of matrix A (rows columns): ");
      scanf("%d %d", &row1, &col1);
      printf("Enter the dimensions of matrix B (rows columns): ");
      scanf("%d %d", &row2, &col2);

      if (col1 != row2) {
          printf("Matrix multiplication is not possible\n");
          return 1;
      }

      int A[row1][col1], B[row2][col2], result[row1][col2];

      printf("Enter elements of matrix A:\n");
      for (int i = 0; i < row1; i++) {
          for (int j = 0; j < col1; j++) {
              scanf("%d", &A[i][j]);
          }
      }

      printf("Enter elements of matrix B:\n");
      for (int i = 0; i < row2; i++) {
          for (int j = 0; j < col2; j++) {
              scanf("%d", &B[i][j]);
          }
      }

      for (int i = 0; i < row1; i++) {
          for (int j = 0; j < col2; j++) {
              result[i][j] = 0;
              for (int k = 0; k < col1; k++) {
                  result[i][j] += A[i][k] * B[k][j];
              }
          }
      }

      printf("Resultant matrix:\n");
      for (int i = 0; i < row1; i++) {
          for (int j = 0; j < col2; j++) {
              printf("%d ", result[i][j]);
          }
          printf("\n");
      }
      return 0;
  }
  </code></pre>

  <h4>Example 9: Print Palindrome Numbers Between Two Numbers</h4>
  <pre><code>
  #include <stdio.h>

  int main() {
      int start, end, num, reverse, digit, temp;

      printf("Enter range (start and end): ");
      scanf("%d %d", &start, &end);

      for (num = start; num <= end; num++) {
          reverse = 0;
          temp = num;
          while (temp != 0) {
              digit = temp % 10;
              reverse = reverse * 10 + digit;
              temp /= 10;
          }
          if (num == reverse) {
              printf("%d ", num);
          }
      }
      return 0;
  }
  </code></pre>

  <h4>Example 10: Sum of Digits of a Number</h4>
  <pre><code>
  #include <stdio.h>

  int main() {
      int num, sum = 0;
      printf("Enter a number: ");
      scanf("%d", &num);

      for (; num != 0; num /= 10) {
          sum += num % 10;
      }
      printf("Sum of digits: %d\n", sum);
      return 0;
  }
  </code></pre>
</div>


</div>

</body>
</html>
