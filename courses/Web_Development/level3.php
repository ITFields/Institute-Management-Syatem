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
  <li><a href="#js-intro">Introduction to JavaScript</a></li>
  <li><a href="#js-syntax">JavaScript Syntax</a></li>
  <li><a href="#js-variables">JavaScript Variables</a></li>
  <li><a href="#js-data-types">JavaScript Data Types</a></li>
  <li><a href="#js-operators">JavaScript Operators</a></li>
  <li><a href="#js-functions">JavaScript Functions</a></li>
  <li><a href="#js-arrays">JavaScript Arrays</a></li>
  <li><a href="#js-objects">JavaScript Objects</a></li>
  <li><a href="#js-conditions">JavaScript Conditions</a></li>
  <li><a href="#js-loops">JavaScript Loops</a></li>
  <li><a href="#js-events">JavaScript Events</a></li>
  <li><a href="#js-dom">JavaScript DOM </a></li>
  <li><a href="#js-async">JavaScript Asynchronous </a></li>
  <li><a href="#js-errors">JavaScript Error </a></li>
  <li><a href="#js-errors">JavaScript Error </a></li>
</ul>

<div class="content">
<h2 id="js-intro">Introduction to JavaScript</h2>
<p>JavaScript is a versatile scripting language used for building interactive web applications. Let's see the examples:</p>

<h3>📂 Example 1: Basic JavaScript Output</h3>
<button onclick="toggleCode('code1')">Show/Hide Code</button>
<button onclick="copyPreCode()">Copy Code</button>
<pre id="code1" style="display:none;">
&lt;script&gt;
console.log("Hello, World!");
&lt;/script&gt;
</pre>

<h3>📂 Example 2: Alert Box</h3>
<button onclick="toggleCode('code2')">Show/Hide Code</button>
<button onclick="copyPreCode()">Copy Code</button>
<pre id="code2" style="display:none;">
&lt;script&gt;
alert("This is an alert box!");
&lt;/script&gt;
</pre>

<h3>📂 Example 3: Changing the Background Color</h3>
<button onclick="toggleCode('code3')">Show/Hide Code</button>
<button onclick="copyPreCode()">Copy Code</button>
<pre id="code3" style="display:none;">
&lt;script&gt;
document.body.style.backgroundColor = "lightblue";
&lt;/script&gt;
</pre>

<h3>📂 Example 4: Writing Text to HTML</h3>
<button onclick="toggleCode('code4')">Show/Hide Code</button>
<button onclick="copyPreCode()">Copy Code</button>
<pre id="code4" style="display:none;">
&lt;script&gt;
document.getElementById("demo").innerHTML = "JavaScript is fun!";
&lt;/script&gt;
</pre>
<p id="demo"></p>

<h3>📂 Example 5: Using JavaScript with Buttons</h3>
<button onclick="toggleCode('code5')">Show/Hide Code</button>
<button onclick="copyPreCode()">Copy Code</button>
<pre id="code5" style="display:none;">
&lt;script&gt;
function showMessage() {
    alert("You clicked the button!");
}
&lt;/script&gt;
<button onclick="showMessage()">Click Me</button>
</pre>

<h3>📂 Example 6: Handling User Input</h3>
<button onclick="toggleCode('code6')">Show/Hide Code</button>
<button onclick="copyPreCode()">Copy Code</button>
<pre id="code6" style="display:none;">
&lt;script&gt;
var name = prompt("What is your name?");
alert("Hello, " + name + "!");
&lt;/script&gt;
</pre>

<h3>📂 Example 7: Declaring Variables</h3>
<button onclick="toggleCode('code7')">Show/Hide Code</button>
<button onclick="copyPreCode()">Copy Code</button>
<pre id="code7" style="display:none;">
&lt;script&gt;
let age = 25;
const name = "John";
console.log("Name: " + name + ", Age: " + age);
&lt;/script&gt;
</pre>

<h3>📂 Example 8: Using Loops</h3>
<button onclick="toggleCode('code8')">Show/Hide Code</button>
<button onclick="copyPreCode()">Copy Code</button>
<pre id="code8" style="display:none;">
&lt;script&gt;
for (let i = 0; i < 5; i++) {
    console.log("Number: " + i);
}
&lt;/script&gt;
</pre>

<h3>📂 Example 9: Conditional Statements</h3>
<button onclick="toggleCode('code9')">Show/Hide Code</button>
<button onclick="copyPreCode()">Copy Code</button>
<pre id="code9" style="display:none;">
&lt;script&gt;
let score = 75;
if (score >= 60) {
    alert("You passed!");
} else {
    alert("You failed!");
}
&lt;/script&gt;
</pre>

<h3>📂 Example 10: Using Functions</h3>
<button onclick="toggleCode('code10')">Show/Hide Code</button>
<button onclick="copyPreCode()">Copy Code</button>
<pre id="code10" style="display:none;">
&lt;script&gt;
function greet(name) {
    alert("Hello, " + name + "!");
}
greet("Alice");
&lt;/script&gt;
</pre>

<h3>🧪 Live Output</h3>
<textarea id="editor" rows="6" style="width:100%;"></textarea>
<br/>
<button onclick="runCode()">Run Code</button>
<iframe id="resultFrame" style="width:100%; height:200px; border:1px solid #ccc;"></iframe>


<h2 id="js-syntax">JavaScript Syntax</h2>
<p>Learn the basic syntax and rules for writing JavaScript code.</p>

<h3>📂 Example 1: Basic Variable Declaration</h3>
<button onclick="toggleCode('code11')">Show/Hide Code</button>
<button onclick="copyPreCode()">Copy Code</button>
<pre id="code11" style="display:none;">
&lt;script&gt;
var x = 5;
var y = 10;
console.log(x + y);
&lt;/script&gt;
</pre>

<h3>📂 Example 2: Using let and const</h3>
<button onclick="toggleCode('code12')">Show/Hide Code</button>
<button onclick="copyPreCode()">Copy Code</button>
<pre id="code12" style="display:none;">
&lt;script&gt;
let x = 5;
const y = 10;
x = 6; // Works fine
y = 11; // Error: Assignment to constant variable.
&lt;/script&gt;
</pre>

<h3>📂 Example 3: Data Types</h3>
<button onclick="toggleCode('code13')">Show/Hide Code</button>
<button onclick="copyPreCode()">Copy Code</button>
<pre id="code13" style="display:none;">
&lt;script&gt;
let name = "Alice";
let age = 25;
let isActive = true;
console.log(typeof name, typeof age, typeof isActive);
&lt;/script&gt;
</pre>

<h3>📂 Example 4: String Concatenation</h3>
<button onclick="toggleCode('code14')">Show/Hide Code</button>
<button onclick="copyPreCode()">Copy Code</button>
<pre id="code14" style="display:none;">
&lt;script&gt;
let firstName = "John";
let lastName = "Doe";
console.log(firstName + " " + lastName);
&lt;/script&gt;
</pre>

<h3>📂 Example 5: Arrow Function</h3>
<button onclick="toggleCode('code15')">Show/Hide Code</button>
<button onclick="copyPreCode()">Copy Code</button>
<pre id="code15" style="display:none;">
&lt;script&gt;
const greet = (name) => {
    return "Hello, " + name;
};
console.log(greet("Alice"));
&lt;/script&gt;
</pre>

<h3>📂 Example 6: Template Literals</h3>
<button onclick="toggleCode('code16')">Show/Hide Code</button>
<button onclick="copyPreCode()">Copy Code</button>
<pre id="code16" style="display:none;">
&lt;script&gt;
let name = "Alice";
let message = `Hello, ${name}! Welcome.`;
console.log(message);
&lt;/script&gt;
</pre>

<h3>📂 Example 7: Template Literal Multiline</h3>
<button onclick="toggleCode('code17')">Show/Hide Code</button>
<button onclick="copyPreCode()">Copy Code</button>
<pre id="code17" style="display:none;">
&lt;script&gt;
let message = `This is a
multiline string 
in JavaScript.`;
console.log(message);
&lt;/script&gt;
</pre>

<h3>📂 Example 8: Object Destructuring</h3>
<button onclick="toggleCode('code18')">Show/Hide Code</button>
<button onclick="copyPreCode()">Copy Code</button>
<pre id="code18" style="display:none;">
&lt;script&gt;
let person = { name: "Alice", age: 25 };
let { name, age } = person;
console.log(name, age);
&lt;/script&gt;
</pre>

<h3>📂 Example 9: Arrays</h3>
<button onclick="toggleCode('code19')">Show/Hide Code</button>
<button onclick="copyPreCode()">Copy Code</button>
<pre id="code19" style="display:none;">
&lt;script&gt;
let arr = [1, 2, 3, 4, 5];
arr.forEach(num => console.log(num));
&lt;/script&gt;
</pre>

<h3>📂 Example 10: Switch Case</h3>
<button onclick="toggleCode('code20')">Show/Hide Code</button>
<button onclick="copyPreCode()">Copy Code</button>
<pre id="code20" style="display:none;">
&lt;script&gt;
let day = 3;
switch(day) {
    case 1:
        console.log("Monday");
        break;
    case 2:
        console.log("Tuesday");
        break;
    case 3:
        console.log("Wednesday");
        break;
    default:
        console.log("Unknown day");
}
&lt;/script&gt;
</pre>

<h2 id="js-variables">JavaScript Variables</h2>
<p>Learn about variables in JavaScript and how to declare them using `var`, `let`, and `const`.</p>

<h3>📂 Example 1: Declaring a Variable</h3>
<button onclick="toggleCode('code21')">Show/Hide Code</button>
<button onclick="copyPreCode()">Copy Code</button>
<pre id="code21" style="display:none;">
&lt;script&gt;
let name = "Alice";
console.log(name);
&lt;/script&gt;
</pre>

<h3>📂 Example 2: Reassigning Variables</h3>
<button onclick="toggleCode('code22')">Show/Hide Code</button>
<button onclick="copyPreCode()">Copy Code</button>
<pre id="code22" style="display:none;">
&lt;script&gt;
let name = "Alice";
name = "Bob";
console.log(name);
&lt;/script&gt;
</pre>

<h3>📂 Example 3: Constant Variables</h3>
<button onclick="toggleCode('code23')">Show/Hide Code</button>
<button onclick="copyPreCode()">Copy Code</button>
<pre id="code23" style="display:none;">
&lt;script&gt;
const PI = 3.14;
console.log(PI);
&lt;/script&gt;
</pre>

<h3>📂 Example 4: Undefined Variable</h3>
<button onclick="toggleCode('code24')">Show/Hide Code</button>
<button onclick="copyPreCode()">Copy Code</button>
<pre id="code24" style="display:none;">
&lt;script&gt;
let myVar;
console.log(myVar);  // undefined
&lt;/script&gt;
</pre>

<h3>📂 Example 5: Block-scoped Variables</h3>
<button onclick="toggleCode('code25')">Show/Hide Code</button>
<button onclick="copyPreCode()">Copy Code</button>
<pre id="code25" style="display:none;">
&lt;script&gt;
if (true) {
    let message = "Hello!";
    console.log(message);  // "Hello!"
}
console.log(message);  // Error: message is not defined
&lt;/script&gt;
</pre>

<h3>📂 Example 6: Var vs Let</h3>
<button onclick="toggleCode('code26')">Show/Hide Code</button>
<button onclick="copyPreCode()">Copy Code</button>
<pre id="code26" style="display:none;">
&lt;script&gt;
var name = "Alice";
if (true) {
    var name = "Bob";  // var is function-scoped, overwriting the original value
}
console.log(name);  // Bob
&lt;/script&gt;
</pre>

<h3>📂 Example 7: Destructuring Arrays</h3>
<button onclick="toggleCode('code27')">Show/Hide Code</button>
<button onclick="copyPreCode()">Copy Code</button>
<pre id="code27" style="display:none;">
&lt;script&gt;
let [x, y] = [1, 2];
console.log(x, y);  // 1 2
&lt;/script&gt;
</pre>

<h3>📂 Example 8: Destructuring Objects</h3>
<button onclick="toggleCode('code28')">Show/Hide Code</button>
<button onclick="copyPreCode()">Copy Code</button>
<pre id="code28" style="display:none;">
&lt;script&gt;
let person = { name: "Alice", age: 25 };
let { name, age } = person;
console.log(name, age);  // Alice 25
&lt;/script&gt;
</pre>

<h3>📂 Example 9: Template Literals with Variables</h3>
<button onclick="toggleCode('code29')">Show/Hide Code</button>
<button onclick="copyPreCode()">Copy Code</button>
<pre id="code29" style="display:none;">
&lt;script&gt;
let name = "Alice";
let greeting = `Hello, ${name}!`;
console.log(greeting);  // Hello, Alice!
&lt;/script&gt;
</pre>

<h3>📂 Example 10: Dynamic Variable Names</h3>
<button onclick="toggleCode('code30')">Show/Hide Code</button>
<button onclick="copyPreCode()">Copy Code</button>
<pre id="code30" style="display:none;">
&lt;script&gt;
let varName = "x";
let x = 5;
console.log(window[varName]);  // 5
&lt;/script&gt;
</pre>

<h2 id="js-data-types">JavaScript Data Types</h2>
<p>Learn about the different data types in JavaScript: Numbers, Strings, Objects, Arrays, etc.</p>

<h3>📂 Example 1: String Data Type</h3>
<button onclick="toggleCode('code31')">Show/Hide Code</button>
<button onclick="copyPreCode()">Copy Code</button>
<pre id="code31" style="display:none;">
&lt;script&gt;
let name = "Alice";
console.log(typeof name);  // string
&lt;/script&gt;
</pre>

<h3>📂 Example 2: Number Data Type</h3>
<button onclick="toggleCode('code32')">Show/Hide Code</button>
<button onclick="copyPreCode()">Copy Code</button>
<pre id="code32" style="display:none;">
&lt;script&gt;
let age = 25;
console.log(typeof age);  // number
&lt;/script&gt;
</pre>

<h3>📂 Example 3: Boolean Data Type</h3>
<button onclick="toggleCode('code33')">Show/Hide Code</button>
<button onclick="copyPreCode()">Copy Code</button>
<pre id="code33" style="display:none;">
&lt;script&gt;
let isActive = true;
console.log(typeof isActive);  // boolean
&lt;/script&gt;
</pre>

<h3>📂 Example 4: Object Data Type</h3>
<button onclick="toggleCode('code34')">Show/Hide Code</button>
<button onclick="copyPreCode()">Copy Code</button>
<pre id="code34" style="display:none;">
&lt;script&gt;
let person = { name: "Alice", age: 25 };
console.log(typeof person);  // object
&lt;/script&gt;
</pre>

<h3>📂 Example 5: Array Data Type</h3>
<button onclick="toggleCode('code35')">Show/Hide Code</button>
<button onclick="copyPreCode()">Copy Code</button>
<pre id="code35" style="display:none;">
&lt;script&gt;
let numbers = [1, 2, 3, 4];
console.log(typeof numbers);  // object (arrays are special objects)
&lt;/script&gt;
</pre>

<h3>📂 Example 6: Null Data Type</h3>
<button onclick="toggleCode('code36')">Show/Hide Code</button>
<button onclick="copyPreCode()">Copy Code</button>
<pre id="code36" style="display:none;">
&lt;script&gt;
let value = null;
console.log(typeof value);  // object (bug in JavaScript)
&lt;/script&gt;
</pre>

<h3>📂 Example 7: Undefined Data Type</h3>
<button onclick="toggleCode('code37')">Show/Hide Code</button>
<button onclick="copyPreCode()">Copy Code</button>
<pre id="code37" style="display:none;">
&lt;script&gt;
let value;
console.log(typeof value);  // undefined
&lt;/script&gt;
</pre>

<h3>📂 Example 8: Symbol Data Type</h3>
<button onclick="toggleCode('code38')">Show/Hide Code</button>
<button onclick="copyPreCode()">Copy Code</button>
<pre id="code38" style="display:none;">
&lt;script&gt;
let sym = Symbol('description');
console.log(typeof sym);  // symbol
&lt;/script&gt;
</pre>

<h3>📂 Example 9: BigInt Data Type</h3>
<button onclick="toggleCode('code39')">Show/Hide Code</button>
<button onclick="copyPreCode()">Copy Code</button>
<pre id="code39" style="display:none;">
&lt;script&gt;
let bigIntValue = 1234567890123456789012345678901234567890n;
console.log(typeof bigIntValue);  // bigint
&lt;/script&gt;
</pre>

<h3>📂 Example 10: Type Conversion</h3>
<button onclick="toggleCode('code40')">Show/Hide Code</button>
<button onclick="copyPreCode()">Copy Code</button>
<pre id="code40" style="display:none;">
&lt;script&gt;
let str = "123";
let num = Number(str);
console.log(num);  // 123
console.log(typeof num);  // number
&lt;/script&gt;
</pre>
<h2 id="js-operators">JavaScript Operators</h2>
<p>Learn about the different operators in JavaScript: Arithmetic, Comparison, Logical, etc.</p>

<h3>📂 Example 1: Arithmetic Operators</h3>
<button onclick="toggleCode('code41')">Show/Hide Code</button>
<button onclick="copyPreCode()">Copy Code</button>
<pre id="code41" style="display:none;">
&lt;script&gt;
let x = 5, y = 2;
console.log(x + y);  // 7
console.log(x - y);  // 3
console.log(x * y);  // 10
console.log(x / y);  // 2.5
console.log(x % y);  // 1
&lt;/script&gt;
</pre>

<h3>📂 Example 2: Comparison Operators</h3>
<button onclick="toggleCode('code42')">Show/Hide Code</button>
<button onclick="copyPreCode()">Copy Code</button>
<pre id="code42" style="display:none;">
&lt;script&gt;
let a = 10, b = 20;
console.log(a == b);  // false
console.log(a != b);  // true
console.log(a > b);   // false
console.log(a < b);   // true
console.log(a >= b);  // false
console.log(a <= b);  // true
&lt;/script&gt;
</pre>

<h3>📂 Example 3: Logical Operators</h3>
<button onclick="toggleCode('code43')">Show/Hide Code</button>
<button onclick="copyPreCode()">Copy Code</button>
<pre id="code43" style="display:none;">
&lt;script&gt;
let x = true, y = false;
console.log(x && y);  // false
console.log(x || y);  // true
console.log(!x);      // false
&lt;/script&gt;
</pre>

<h3>📂 Example 4: Increment and Decrement Operators</h3>
<button onclick="toggleCode('code44')">Show/Hide Code</button>
<button onclick="copyPreCode()">Copy Code</button>
<pre id="code44" style="display:none;">
&lt;script&gt;
let count = 0;
count++;
console.log(count);  // 1
count--;
console.log(count);  // 0
&lt;/script&gt;
</pre>

<h3>📂 Example 5: Assignment Operators</h3>
<button onclick="toggleCode('code45')">Show/Hide Code</button>
<button onclick="copyPreCode()">Copy Code</button>
<pre id="code45" style="display:none;">
&lt;script&gt;
let x = 5;
x += 3;  // x = x + 3
console.log(x);  // 8
x *= 2;  // x = x * 2
console.log(x);  // 16
&lt;/script&gt;
</pre>

<h3>📂 Example 6: Ternary Operator</h3>
<button onclick="toggleCode('code46')">Show/Hide Code</button>
<button onclick="copyPreCode()">Copy Code</button>
<pre id="code46" style="display:none;">
&lt;script&gt;
let age = 18;
let result = (age >= 18) ? "Adult" : "Minor";
console.log(result);  // Adult
&lt;/script&gt;
</pre>

<h3>📂 Example 7: Bitwise Operators</h3>
<button onclick="toggleCode('code47')">Show/Hide Code</button>
<button onclick="copyPreCode()">Copy Code</button>
<pre id="code47" style="display:none;">
&lt;script&gt;
let x = 5;  // 0101 in binary
let y = 3;  // 0011 in binary
console.log(x & y);  // 1 (AND)
console.log(x | y);  // 7 (OR)
console.log(x ^ y);  // 6 (XOR)
console.log(~x);     // -6 (NOT)
console.log(x << 1); // 10 (Shift left)
console.log(x >> 1); // 2 (Shift right)
&lt;/script&gt;
</pre>

<h3>📂 Example 8: Logical AND (&&) vs OR (||)</h3>
<button onclick="toggleCode('code48')">Show/Hide Code</button>
<button onclick="copyPreCode()">Copy Code</button>
<pre id="code48" style="display:none;">
&lt;script&gt;
let x = 5, y = 10;
console.log(x && y);  // 10 (returns y as x is truthy)
console.log(x || y);  // 5 (returns x as it is truthy)
&lt;/script&gt;
</pre>

<h3>📂 Example 9: Nullish Coalescing Operator</h3>
<button onclick="toggleCode('code49')">Show/Hide Code</button>
<button onclick="copyPreCode()">Copy Code</button>
<pre id="code49" style="display:none;">
&lt;script&gt;
let userName = null;
let defaultName = "Guest";
console.log(userName ?? defaultName);  // Guest
&lt;/script&gt;
</pre>

<h3>📂 Example 10: Typeof Operator</h3>
<button onclick="toggleCode('code50')">Show/Hide Code</button>
<button onclick="copyPreCode()">Copy Code</button>
<pre id="code50" style="display:none;">
&lt;script&gt;
let name = "John";
console.log(typeof name);  // string
console.log(typeof 42);     // number
console.log(typeof true);   // boolean
&lt;/script&gt;
</pre>
<h2 id="js-functions">JavaScript Functions</h2>
<p>Learn how to declare and invoke functions in JavaScript, including built-in functions and custom functions.</p>

<h3>📂 Example 1: Function Declaration</h3>
<button onclick="toggleCode('code51')">Show/Hide Code</button>
<button onclick="copyPreCode()">Copy Code</button>
<pre id="code51" style="display:none;">
&lt;script&gt;
function greet() {
    console.log("Hello, World!");
}
greet();  // Hello, World!
&lt;/script&gt;
</pre>

<h3>📂 Example 2: Function with Parameters</h3>
<button onclick="toggleCode('code52')">Show/Hide Code</button>
<button onclick="copyPreCode()">Copy Code</button>
<pre id="code52" style="display:none;">
&lt;script&gt;
function greet(name) {
    console.log("Hello, " + name);
}
greet("Alice");  // Hello, Alice
greet("Bob");    // Hello, Bob
&lt;/script&gt;
</pre>

<h3>📂 Example 3: Function with Return Value</h3>
<button onclick="toggleCode('code53')">Show/Hide Code</button>
<button onclick="copyPreCode()">Copy Code</button>
<pre id="code53" style="display:none;">
&lt;script&gt;
function add(x, y) {
    return x + y;
}
let result = add(3, 5);
console.log(result);  // 8
&lt;/script&gt;
</pre>

<h3>📂 Example 4: Anonymous Function</h3>
<button onclick="toggleCode('code54')">Show/Hide Code</button>
<button onclick="copyPreCode()">Copy Code</button>
<pre id="code54" style="display:none;">
&lt;script&gt;
let greet = function(name) {
    console.log("Hello, " + name);
};
greet("Alice");  // Hello, Alice
&lt;/script&gt;
</pre>

<h3>📂 Example 5: Arrow Function</h3>
<button onclick="toggleCode('code55')">Show/Hide Code</button>
<button onclick="copyPreCode()">Copy Code</button>
<pre id="code55" style="display:none;">
&lt;script&gt;
let add = (x, y) => x + y;
let result = add(5, 3);
console.log(result);  // 8
&lt;/script&gt;
</pre>

<h3>📂 Example 6: Immediately Invoked Function Expression (IIFE)</h3>
<button onclick="toggleCode('code56')">Show/Hide Code</button>
<button onclick="copyPreCode()">Copy Code</button>
<pre id="code56" style="display:none;">
&lt;script&gt;
(function() {
    console.log("IIFE executed!");
})();  // IIFE executed!
&lt;/script&gt;
</pre>

<h3>📂 Example 7: Function Arguments</h3>
<button onclick="toggleCode('code57')">Show/Hide Code</button>
<button onclick="copyPreCode()">Copy Code</button>
<pre id="code57" style="display:none;">
&lt;script&gt;
function greet(name = "Guest") {
    console.log("Hello, " + name);
}
greet();  // Hello, Guest
greet("Alice");  // Hello, Alice
&lt;/script&gt;
</pre>

<h3>📂 Example 8: Function Expressions</h3>
<button onclick="toggleCode('code58')">Show/Hide Code</button>
<button onclick="copyPreCode()">Copy Code</button>
<pre id="code58" style="display:none;">
&lt;script&gt;
let multiply = function(x, y) {
    return x * y;
};
console.log(multiply(2, 3));  // 6
&lt;/script&gt;
</pre>
<h2 id="js-arrays">JavaScript Arrays</h2>
<p>Learn about arrays in JavaScript, how to create and manipulate them.</p>

<h3>📂 Example 1: Create and Access Array</h3>
<button onclick="toggleCode('code61')">Show/Hide Code</button>
<button onclick="copyPreCode()">Copy Code</button>
<pre id="code61" style="display:none;">
&lt;script&gt;
let fruits = ["Apple", "Banana", "Orange"];
console.log(fruits[0]);  // Apple
console.log(fruits[1]);  // Banana
console.log(fruits[2]);  // Orange
&lt;/script&gt;
</pre>

<h3>📂 Example 2: Array Length</h3>
<button onclick="toggleCode('code62')">Show/Hide Code</button>
<button onclick="copyPreCode()">Copy Code</button>
<pre id="code62" style="display:none;">
&lt;script&gt;
let fruits = ["Apple", "Banana", "Orange"];
console.log(fruits.length);  // 3
&lt;/script&gt;
</pre>

<h3>📂 Example 3: Add/Remove Elements</h3>
<button onclick="toggleCode('code63')">Show/Hide Code</button>
<button onclick="copyPreCode()">Copy Code</button>
<pre id="code63" style="display:none;">
&lt;script&gt;
let fruits = ["Apple", "Banana"];
fruits.push("Orange");  // Adds "Orange" at the end
console.log(fruits);  // ["Apple", "Banana", "Orange"]

fruits.pop();  // Removes the last element
console.log(fruits);  // ["Apple", "Banana"]
&lt;/script&gt;
</pre>

<h3>📂 Example 4: Loop through Array</h3>
<button onclick="toggleCode('code64')">Show/Hide Code</button>
<button onclick="copyPreCode()">Copy Code</button>
<pre id="code64" style="display:none;">
&lt;script&gt;
let fruits = ["Apple", "Banana", "Orange"];
for (let i = 0; i &lt; fruits.length; i++) {
    console.log(fruits[i]);
}
&lt;/script&gt;
</pre>

<h3>📂 Example 5: Array Methods</h3>
<button onclick="toggleCode('code65')">Show/Hide Code</button>
<button onclick="copyPreCode()">Copy Code</button>
<pre id="code65" style="display:none;">
&lt;script&gt;
let fruits = ["Apple", "Banana", "Orange"];

// Join the array elements into a string
console.log(fruits.join(", "));  // "Apple, Banana, Orange"

// Slice an array
console.log(fruits.slice(1, 2));  // ["Banana"]
&lt;/script&gt;
</pre>

<h3>📂 Example 6: Splice Method</h3>
<button onclick="toggleCode('code66')">Show/Hide Code</button>
<button onclick="copyPreCode()">Copy Code</button>
<pre id="code66" style="display:none;">
&lt;script&gt;
let fruits = ["Apple", "Banana", "Orange"];
fruits.splice(1, 1, "Grapes");  // Removes "Banana" and adds "Grapes"
console.log(fruits);  // ["Apple", "Grapes", "Orange"]
&lt;/script&gt;
</pre>

<h3>📂 Example 7: Sorting Arrays</h3>
<button onclick="toggleCode('code67')">Show/Hide Code</button>
<button onclick="copyPreCode()">Copy Code</button>
<pre id="code67" style="display:none;">
&lt;script&gt;
let numbers = [10, 5, 2, 8];
numbers.sort((a, b) =&gt; a - b);  // Sort in ascending order
console.log(numbers);  // [2, 5, 8, 10]
&lt;/script&gt;
</pre>

<h3>📂 Example 8: Array Destructuring</h3>
<button onclick="toggleCode('code68')">Show/Hide Code</button>
<button onclick="copyPreCode()">Copy Code</button>
<pre id="code68" style="display:none;">
&lt;script&gt;
let fruits = ["Apple", "Banana", "Orange"];
let [first, second] = fruits;
console.log(first);  // Apple
console.log(second); // Banana
&lt;/script&gt;
</pre>

<h3>📂 Example 9: Spread Operator with Arrays</h3>
<button onclick="toggleCode('code69')">Show/Hide Code</button>
<button onclick="copyPreCode()">Copy Code</button>
<pre id="code69" style="display:none;">
&lt;script&gt;
let fruits = ["Apple", "Banana"];
let moreFruits = [...fruits, "Orange", "Grapes"];
console.log(moreFruits);  // ["Apple", "Banana", "Orange", "Grapes"]
&lt;/script&gt;
</pre>

<h3>📂 Example 10: Filter and Map Methods</h3>
<button onclick="toggleCode('code70')">Show/Hide Code</button>
<button onclick="copyPreCode()">Copy Code</button>
<pre id="code70" style="display:none;">
&lt;script&gt;
let numbers = [1, 2, 3, 4, 5];
let evenNumbers = numbers.filter(num =&gt; num % 2 === 0);  // Filter even numbers
console.log(evenNumbers);  // [2, 4]

let doubled = numbers.map(num =&gt; num * 2);  // Double each number
console.log(doubled);  // [2, 4, 6, 8, 10]
&lt;/script&gt;
</pre>

<h2 id="js-objects">JavaScript Objects</h2>
<p>Learn about creating and manipulating objects in JavaScript.</p>

<h3>📂 Example 1: Create Object</h3>
<button onclick="toggleCode('code71')">Show/Hide Code</button>
<button onclick="copyPreCode()">Copy Code</button>
<pre id="code71" style="display:none;">
&lt;script&gt;
let person = {
    name: "John",
    age: 30,
    greet: function() {
        console.log("Hello, " + this.name);
    }
};
person.greet();  // Hello, John
&lt;/script&gt;
</pre>

<h3>📂 Example 2: Access Object Properties</h3>
<button onclick="toggleCode('code72')">Show/Hide Code</button>
<button onclick="copyPreCode()">Copy Code</button>
<pre id="code72" style="display:none;">
&lt;script&gt;
let person = {
    name: "Alice",
    age: 25
};
console.log(person.name);  // Alice
console.log(person["age"]);  // 25
&lt;/script&gt;
</pre>

<h3>📂 Example 3: Add and Delete Object Properties</h3>
<button onclick="toggleCode('code73')">Show/Hide Code</button>
<button onclick="copyPreCode()">Copy Code</button>
<pre id="code73" style="display:none;">
&lt;script&gt;
let person = { name: "John" };
person.age = 30;  // Add new property
delete person.name;  // Delete a property
console.log(person);  // { age: 30 }
&lt;/script&gt;
</pre>

<h3>📂 Example 4: Object Destructuring</h3>
<button onclick="toggleCode('code74')">Show/Hide Code</button>
<button onclick="copyPreCode()">Copy Code</button>
<pre id="code74" style="display:none;">
&lt;script&gt;
let person = { name: "Alice", age: 25 };
let { name, age } = person;
console.log(name);  // Alice
console.log(age);   // 25
&lt;/script&gt;
</pre>

<h3>📂 Example 5: Object Methods</h3>
<button onclick="toggleCode('code75')">Show/Hide Code</button>
<button onclick="copyPreCode()">Copy Code</button>
<pre id="code75" style="display:none;">
&lt;script&gt;
let person = {
    name: "John",
    greet: function() {
        console.log("Hello, " + this.name);
    }
};
person.greet();  // Hello, John
&lt;/script&gt;
</pre>

<h3>📂 Example 6: Object Constructor</h3>
<button onclick="toggleCode('code76')">Show/Hide Code</button>
<button onclick="copyPreCode()">Copy Code</button>
<pre id="code76" style="display:none;">
&lt;script&gt;
function Person(name, age) {
    this.name = name;
    this.age = age;
}
let person1 = new Person("Alice", 25);
console.log(person1.name);  // Alice
&lt;/script&gt;
</pre>

<h3>📂 Example 7: Object.assign()</h3>
<button onclick="toggleCode('code77')">Show/Hide Code</button>
<button onclick="copyPreCode()">Copy Code</button>
<pre id="code77" style="display:none;">
&lt;script&gt;
let person = { name: "John", age: 30 };
let newPerson = Object.assign({}, person, { city: "New York" });
console.log(newPerson);  // { name: "John", age: 30, city: "New York" }
&lt;/script&gt;
</pre>

<h3>📂 Example 8: for...in Loop for Objects</h3>
<button onclick="toggleCode('code78')">Show/Hide Code</button>
<button onclick="copyPreCode()">Copy Code</button>
<pre id="code78" style="display:none;">
&lt;script&gt;
let person = { name: "Alice", age: 25, city: "New York" };
for (let key in person) {
    console.log(key + ": " + person[key]);
}
// name: Alice
// age: 25
// city: New York
&lt;/script&gt;
</pre>

<h3>📂 Example 9: Object Spread Operator</h3>
<button onclick="toggleCode('code79')">Show/Hide Code</button>
<button onclick="copyPreCode()">Copy Code</button>
<pre id="code79" style="display:none;">
&lt;script&gt;
let person = { name: "John", age: 30 };
let updatedPerson = { ...person, city: "London" };
console.log(updatedPerson);  // { name: "John", age: 30, city: "London" }
&lt;/script&gt;
</pre>

<h3>📂 Example 10: Object Methods - Chaining</h3>
<button onclick="toggleCode('code80')">Show/Hide Code</button>
<button onclick="copyPreCode()">Copy Code</button>
<pre id="code80" style="display:none;">
&lt;script&gt;
let person = {
    name: "John",
    greet: function() {
        console.log("Hello, " + this.name);
        return this;
    },
    sayAge: function() {
        console.log("I am " + this.age + " years old.");
        return this;
    }
};
person.greet().sayAge();  // Chaining
&lt;/script&gt;
</pre>

<h2 id="js-conditions">JavaScript Conditions</h2>
<p>Learn about conditional statements like `if`, `else`, and `switch` in JavaScript.</p>

<h3>📂 Example 1: if Statement</h3>
<button onclick="toggleCode('code81')">Show/Hide Code</button>
<button onclick="copyPreCode()">Copy Code</button>
<pre id="code81" style="display:none;">
&lt;script&gt;
let age = 20;
if (age >= 18) {
    console.log("You are an adult.");
} else {
    console.log("You are a minor.");
}
&lt;/script&gt;
</pre>

<h3>📂 Example 2: if...else if...else Statement</h3>
<button onclick="toggleCode('code82')">Show/Hide Code</button>
<button onclick="copyPreCode()">Copy Code</button>
<pre id="code82" style="display:none;">
&lt;script&gt;
let age = 20;
if (age &lt; 13) {
    console.log("Child");
} else if (age &lt; 18) {
    console.log("Teenager");
} else {
    console.log("Adult");
}
&lt;/script&gt;
</pre>

<h3>📂 Example 3: switch Statement</h3>
<button onclick="toggleCode('code83')">Show/Hide Code</button>
<button onclick="copyPreCode()">Copy Code</button>
<pre id="code83" style="display:none;">
&lt;script&gt;
let day = 3;
switch (day) {
    case 1:
        console.log("Monday");
        break;
    case 2:
        console.log("Tuesday");
        break;
    case 3:
        console.log("Wednesday");
        break;
    default:
        console.log("Invalid day");
}
&lt;/script&gt;
</pre>

<h3>📂 Example 4: Ternary Operator</h3>
<button onclick="toggleCode('code84')">Show/Hide Code</button>
<button onclick="copyPreCode()">Copy Code</button>
<pre id="code84" style="display:none;">
&lt;script&gt;
let age = 18;
let result = (age >= 18) ? "Adult" : "Minor";
console.log(result);  // Adult
&lt;/script&gt;
</pre>

<h3>📂 Example 5: Nested if Statement</h3>
<button onclick="toggleCode('code85')">Show/Hide Code</button>
<button onclick="copyPreCode()">Copy Code</button>
<pre id="code85" style="display:none;">
&lt;script&gt;
let age = 25;
if (age >= 18) {
    if (age <= 25) {
        console.log("Young adult");
    } else {
        console.log("Adult");
    }
} else {
    console.log("Minor");
}
&lt;/script&gt;
</pre>

<h3>📂 Example 6: Logical Operators</h3>
<button onclick="toggleCode('code86')">Show/Hide Code</button>
<button onclick="copyPreCode()">Copy Code</button>
<pre id="code86" style="display:none;">
&lt;script&gt;
let age = 20;
if (age >= 18 && age <= 30) {
    console.log("You are in your twenties.");
} else if (age &gt; 30) {
    console.log("You are older than 30.");
} else {
    console.log("You are younger than 18.");
}
&lt;/script&gt;
</pre>

<h3>📂 Example 7: Using switch with multiple cases</h3>
<button onclick="toggleCode('code87')">Show/Hide Code</button>
<button onclick="copyPreCode()">Copy Code</button>
<pre id="code87" style="display:none;">
&lt;script&gt;
let color = "green";
switch (color) {
    case "red":
    case "green":
    case "blue":
        console.log("It's a primary color.");
        break;
    default:
        console.log("It's not a primary color.");
}
&lt;/script&gt;
</pre>

<h3>📂 Example 8: Default Case in Switch</h3>
<button onclick="toggleCode('code88')">Show/Hide Code</button>
<button onclick="copyPreCode()">Copy Code</button>
<pre id="code88" style="display:none;">
&lt;script&gt;
let color = "yellow";
switch (color) {
    case "red":
        console.log("Color is red");
        break;
    case "green":
        console.log("Color is green");
        break;
    default:
        console.log("Unknown color");
}
&lt;/script&gt;
</pre>

<h3>📂 Example 9: Boolean Evaluation in if</h3>
<button onclick="toggleCode('code89')">Show/Hide Code</button>
<button onclick="copyPreCode()">Copy Code</button>
<pre id="code89" style="display:none;">
&lt;script&gt;
let isActive = true;
if (isActive) {
    console.log("The object is active.");
} else {
    console.log("The object is not active.");
}
&lt;/script&gt;
</pre>

<h3>📂 Example 10: Combining Logical Operators</h3>
<button onclick="toggleCode('code90')">Show/Hide Code</button>
<button onclick="copyPreCode()">Copy Code</button>
<pre id="code90" style="display:none;">
&lt;script&gt;
let age = 20;
let hasPermission = true;
if (age >= 18 && hasPermission) {
    console.log("Access granted.");
} else {
    console.log("Access denied.");
}
&lt;/script&gt;
</pre>
<h2 id="js-loops">JavaScript Loops</h2>
<p>Learn about various types of loops in JavaScript: `for`, `while`, and `do...while`.</p>

<h3>📂 Example 1: for Loop</h3>
<button onclick="toggleCode('code91')">Show/Hide Code</button>
<button onclick="copyPreCode()">Copy Code</button>
<pre id="code91" style="display:none;">
&lt;script&gt;
for (let i = 0; i &lt; 5; i++) {
    console.log(i);  // Outputs: 0 1 2 3 4
}
&lt;/script&gt;
</pre>

<h3>📂 Example 2: while Loop</h3>
<button onclick="toggleCode('code92')">Show/Hide Code</button>
<button onclick="copyPreCode()">Copy Code</button>
<pre id="code92" style="display:none;">
&lt;script&gt;
let i = 0;
while (i &lt; 5) {
    console.log(i);  // Outputs: 0 1 2 3 4
    i++;
}
&lt;/script&gt;
</pre>

<h3>📂 Example 3: do...while Loop</h3>
<button onclick="toggleCode('code93')">Show/Hide Code</button>
<button onclick="copyPreCode()">Copy Code</button>
<pre id="code93" style="display:none;">
&lt;script&gt;
let i = 0;
do {
    console.log(i);  // Outputs: 0 1 2 3 4
    i++;
} while (i &lt; 5);
&lt;/script&gt;
</pre>

<h3>📂 Example 4: Looping Through Arrays</h3>
<button onclick="toggleCode('code94')">Show/Hide Code</button>
<button onclick="copyPreCode()">Copy Code</button>
<pre id="code94" style="display:none;">
&lt;script&gt;
let fruits = ["Apple", "Banana", "Orange"];
for (let i = 0; i &lt; fruits.length; i++) {
    console.log(fruits[i]);
}
// Outputs: Apple, Banana, Orange
&lt;/script&gt;
</pre>

<h3>📂 Example 5: for...in Loop</h3>
<button onclick="toggleCode('code95')">Show/Hide Code</button>
<button onclick="copyPreCode()">Copy Code</button>
<pre id="code95" style="display:none;">
&lt;script&gt;
let person = { name: "Alice", age: 25 };
for (let key in person) {
    console.log(key + ": " + person[key]);
}
// Outputs: name: Alice, age: 25
&lt;/script&gt;
</pre>

<h3>📂 Example 6: Nested Loops</h3>
<button onclick="toggleCode('code96')">Show/Hide Code</button>
<button onclick="copyPreCode()">Copy Code</button>
<pre id="code96" style="display:none;">
&lt;script&gt;
for (let i = 0; i &lt; 3; i++) {
    for (let j = 0; j &lt; 3; j++) {
        console.log(i + ", " + j);
    }
}
// Outputs:
// 0, 0
// 0, 1
// 0, 2
// 1, 0
// 1, 1
// 1, 2
// 2, 0
// 2, 1
// 2, 2
&lt;/script&gt;
</pre>

<h3>📂 Example 7: for...of Loop (Array)</h3>
<button onclick="toggleCode('code97')">Show/Hide Code</button>
<button onclick="copyPreCode()">Copy Code</button>
<pre id="code97" style="display:none;">
&lt;script&gt;
let numbers = [1, 2, 3, 4, 5];
for (let number of numbers) {
    console.log(number);
}
// Outputs: 1 2 3 4 5
&lt;/script&gt;
</pre>

<h3>📂 Example 8: forEach() Method</h3>
<button onclick="toggleCode('code98')">Show/Hide Code</button>
<button onclick="copyPreCode()">Copy Code</button>
<pre id="code98" style="display:none;">
&lt;script&gt;
let colors = ["Red", "Green", "Blue"];
colors.forEach(function(color) {
    console.log(color);
});
// Outputs: Red, Green, Blue
&lt;/script&gt;
</pre>

<h3>📂 Example 9: Breaking out of a Loop</h3>
<button onclick="toggleCode('code99')">Show/Hide Code</button>
<button onclick="copyPreCode()">Copy Code</button>
<pre id="code99" style="display:none;">
&lt;script&gt;
for (let i = 0; i &lt; 5; i++) {
    if (i === 3) {
        break;  // Breaks the loop when i is 3
    }
    console.log(i);
}
// Outputs: 0 1 2
&lt;/script&gt;
</pre>

<h3>📂 Example 10: continue Statement in Loop</h3>
<button onclick="toggleCode('code100')">Show/Hide Code</button>
<button onclick="copyPreCode()">Copy Code</button>
<pre id="code100" style="display:none;">
&lt;script&gt;
for (let i = 0; i &lt; 5; i++) {
    if (i === 2) {
        continue;  // Skips the iteration when i is 2
    }
    console.log(i);
}
// Outputs: 0 1 3 4
&lt;/script&gt;
</pre>
<h2 id="js-events">JavaScript Events</h2>
<p>Learn about how to handle events in JavaScript using event listeners and handlers.</p>

<h3>📂 Example 1: click Event</h3>
<button onclick="toggleCode('code101')">Show/Hide Code</button>
<button onclick="copyPreCode()">Copy Code</button>
<pre id="code101" style="display:none;">
&lt;script&gt;
document.getElementById("myButton").addEventListener("click", function() {
    alert("Button clicked!");
});
&lt;/script&gt;

&lt;button id="myButton"&gt;Click Me&lt;/button&gt;
</pre>

<h3>📂 Example 2: Mouseover Event</h3>
<button onclick="toggleCode('code102')">Show/Hide Code</button>
<button onclick="copyPreCode()">Copy Code</button>
<pre id="code102" style="display:none;">
&lt;script&gt;
document.getElementById("hoverDiv").addEventListener("mouseover", function() {
    document.getElementById("hoverDiv").style.backgroundColor = "lightblue";
});
&lt;/script&gt;

&lt;div id="hoverDiv" style="width: 200px; height: 200px; background-color: yellow;">
  Hover over me!
&lt;/div&gt;
</pre>

<h3>📂 Example 3: keydown Event</h3>
<button onclick="toggleCode('code103')">Show/Hide Code</button>
<button onclick="copyPreCode()">Copy Code</button>
<pre id="code103" style="display:none;">
&lt;script&gt;
document.addEventListener("keydown", function(event) {
    console.log("Key pressed: " + event.key);
});
&lt;/script&gt;
</pre>

<h3>📂 Example 4: Mouseout Event</h3>
<button onclick="toggleCode('code104')">Show/Hide Code</button>
<button onclick="copyPreCode()">Copy Code</button>
<pre id="code104" style="display:none;">
&lt;script&gt;
document.getElementById("hoverDiv").addEventListener("mouseout", function() {
    document.getElementById("hoverDiv").style.backgroundColor = "yellow";
});
&lt;/script&gt;

&lt;div id="hoverDiv" style="width: 200px; height: 200px; background-color: yellow;">
  Hover over me and move out!
&lt;/div&gt;
</pre>

<h3>📂 Example 5: Submit Event</h3>
<button onclick="toggleCode('code105')">Show/Hide Code</button>
<button onclick="copyPreCode()">Copy Code</button>
<pre id="code105" style="display:none;">
&lt;script&gt;
document.getElementById("myForm").addEventListener("submit", function(event) {
    event.preventDefault();  // Prevents the form from submitting
    alert("Form submitted!");
});
&lt;/script&gt;

&lt;form id="myForm"&gt;
  &lt;input type="text" name="name"&gt;
  &lt;button type="submit"&gt;Submit&lt;/button&gt;
&lt;/form&gt;
</pre>

<h3>📂 Example 6: Focus Event</h3>
<button onclick="toggleCode('code106')">Show/Hide Code</button>
<button onclick="copyPreCode()">Copy Code</button>
<pre id="code106" style="display:none;">
&lt;script&gt;
document.getElementById("myInput").addEventListener("focus", function() {
    document.getElementById("myInput").style.backgroundColor = "lightyellow";
});
&lt;/script&gt;

&lt;input type="text" id="myInput" placeholder="Focus on me!">
</pre>

<h3>📂 Example 7: Blur Event</h3>
<button onclick="toggleCode('code107')">Show/Hide Code</button>
<button onclick="copyPreCode()">Copy Code</button>
<pre id="code107" style="display:none;">
&lt;script&gt;
document.getElementById("myInput").addEventListener("blur", function() {
    document.getElementById("myInput").style.backgroundColor = "white";
});
&lt;/script&gt;

&lt;input type="text" id="myInput" placeholder="Focus and then blur me!">
</pre>

<h3>📂 Example 8: Resize Event</h3>
<button onclick="toggleCode('code108')">Show/Hide Code</button>
<button onclick="copyPreCode()">Copy Code</button>
<pre id="code108" style="display:none;">
&lt;script&gt;
window.addEventListener("resize", function() {
    console.log("Window resized!");
});
&lt;/script&gt;
</pre>

<h3>📂 Example 9: Scroll Event</h3>
<button onclick="toggleCode('code109')">Show/Hide Code</button>
<button onclick="copyPreCode()">Copy Code</button>
<pre id="code109" style="display:none;">
&lt;script&gt;
window.addEventListener("scroll", function() {
    console.log("Window scrolled!");
});
&lt;/script&gt;
</pre>

<h3>📂 Example 10: Change Event</h3>
<button onclick="toggleCode('code110')">Show/Hide Code</button>
<button onclick="copyPreCode()">Copy Code</button>
<pre id="code110" style="display:none;">
&lt;script&gt;
document.getElementById("mySelect").addEventListener("change", function() {
    alert("Option changed to: " + document.getElementById("mySelect").value);
});
&lt;/script&gt;

&lt;select id="mySelect"&gt;
  &lt;option value="option1"&gt;Option 1&lt;/option&gt;
  &lt;option value="option2"&gt;Option 2&lt;/option&gt;
</select>
</pre>
<h2 id="js-dom">JavaScript DOM</h2>
<p>Learn how to manipulate the Document Object Model (DOM) to dynamically change HTML and CSS using JavaScript.</p>

<h3>📂 Example 1: Changing HTML Content</h3>
<button onclick="toggleCode('code111')">Show/Hide Code</button>
<button onclick="copyPreCode()">Copy Code</button>
<pre id="code111" style="display:none;">
&lt;script&gt;
document.getElementById("demo").innerHTML = "Hello, JavaScript DOM!";
&lt;/script&gt;

&lt;p id="demo"&gt;This is a placeholder&lt;/p&gt;
</pre>

<h3>📂 Example 2: Changing CSS Styles</h3>
<button onclick="toggleCode('code112')">Show/Hide Code</button>
<button onclick="copyPreCode()">Copy Code</button>
<pre id="code112" style="display:none;">
&lt;script&gt;
document.getElementById("demo").style.color = "red";
document.getElementById("demo").style.fontSize = "20px";
&lt;/script&gt;

&lt;p id="demo"&gt;This text will be styled using JavaScript&lt;/p&gt;
</pre>

<h3>📂 Example 3: Adding an HTML Element</h3>
<button onclick="toggleCode('code113')">Show/Hide Code</button>
<button onclick="copyPreCode()">Copy Code</button>
<pre id="code113" style="display:none;">
&lt;script&gt;
let newElement = document.createElement("p");
newElement.innerHTML = "This is a new paragraph!";
document.body.appendChild(newElement);
&lt;/script&gt;
</pre>

<h3>📂 Example 4: Removing an HTML Element</h3>
<button onclick="toggleCode('code114')">Show/Hide Code</button>
<button onclick="copyPreCode()">Copy Code</button>
<pre id="code114" style="display:none;">
&lt;script&gt;
let element = document.getElementById("removeMe");
element.remove();
&lt;/script&gt;

&lt;p id="removeMe"&gt;This paragraph will be removed by JavaScript&lt;/p&gt;
</pre>

<h3>📂 Example 5: Changing Attribute Values</h3>
<button onclick="toggleCode('code115')">Show/Hide Code</button>
<button onclick="copyPreCode()">Copy Code</button>
<pre id="code115" style="display:none;">
&lt;script&gt;
document.getElementById("myImg").setAttribute("src", "newImage.jpg");
&lt;/script&gt;

&lt;img id="myImg" src="oldImage.jpg" alt="Old Image"&gt;
</pre>

<h3>📂 Example 6: Event Listener on DOM Element</h3>
<button onclick="toggleCode('code116')">Show/Hide Code</button>
<button onclick="copyPreCode()">Copy Code</button>
<pre id="code116" style="display:none;">
&lt;script&gt;
document.getElementById("myButton").addEventListener("click", function() {
    alert("Button clicked!");
});
&lt;/script&gt;

&lt;button id="myButton"&gt;Click Me&lt;/button&gt;
</pre>

<h3>📂 Example 7: Traversing the DOM</h3>
<button onclick="toggleCode('code117')">Show/Hide Code</button>
<button onclick="copyPreCode()">Copy Code</button>
<pre id="code117" style="display:none;">
&lt;script&gt;
let parent = document.getElementById("parentDiv");
let firstChild = parent.firstElementChild;
alert(firstChild.innerHTML);
&lt;/script&gt;

&lt;div id="parentDiv"&gt;
  &lt;p&gt;First child&lt;/p&gt;
  &lt;p&gt;Second child&lt;/p&gt;
</div>
</pre>

<h3>📂 Example 8: Changing the Class Name</h3>
<button onclick="toggleCode('code118')">Show/Hide Code</button>
<button onclick="copyPreCode()">Copy Code</button>
<pre id="code118" style="display:none;">
&lt;script&gt;
document.getElementById("demo").className = "newClass";
&lt;/script&gt;

&lt;p id="demo"&gt;This paragraph will change its class&lt;/p&gt;
</pre>

<h3>📂 Example 9: DOM Manipulation with Loops</h3>
<button onclick="toggleCode('code119')">Show/Hide Code</button>
<button onclick="copyPreCode()">Copy Code</button>
<pre id="code119" style="display:none;">
&lt;script&gt;
let items = document.querySelectorAll(".listItem");
items.forEach(function(item) {
    item.style.color = "blue";
});
&lt;/script&gt;

&lt;ul&gt;
  &lt;li class="listItem"&gt;Item 1&lt;/li&gt;
  &lt;li class="listItem"&gt;Item 2&lt;/li&gt;
  &lt;li class="listItem"&gt;Item 3&lt;/li&gt;
</ul>
</pre>

<h3>📂 Example 10: Inserting HTML Before or After an Element</h3>
<button onclick="toggleCode('code120')">Show/Hide Code</button>
<button onclick="copyPreCode()">Copy Code</button>
<pre id="code120" style="display:none;">
&lt;script&gt;
let newElement = document.createElement("p");
newElement.innerHTML = "This paragraph is added before!";
let refElement = document.getElementById("refDiv");
refElement.parentNode.insertBefore(newElement, refElement);
&lt;/script&gt;

&lt;div id="refDiv"&gt;Reference Div&lt;/div&gt;
</pre>
<h2 id="js-async">JavaScript Asynchronous</h2>
<p>Asynchronous JavaScript allows you to execute code without blocking the main thread, improving performance by handling operations like file reading, network requests, and timers concurrently.</p>

<h3>📂 Example 1: Using setTimeout()</h3>
<button onclick="toggleCode('code121')">Show/Hide Code</button>
<button onclick="copyPreCode()">Copy Code</button>
<pre id="code121" style="display:none;">
&lt;script&gt;
setTimeout(function() {
    alert("This alert shows after 3 seconds!");
}, 3000);
&lt;/script&gt;
</pre>

<h3>📂 Example 2: Using setInterval()</h3>
<button onclick="toggleCode('code122')">Show/Hide Code</button>
<button onclick="copyPreCode()">Copy Code</button>
<pre id="code122" style="display:none;">
&lt;script&gt;
let intervalId = setInterval(function() {
    console.log("This logs every 2 seconds!");
}, 2000);
&lt;/script&gt;
</pre>

<h3>📂 Example 3: Using Promises</h3>
<button onclick="toggleCode('code123')">Show/Hide Code</button>
<button onclick="copyPreCode()">Copy Code</button>
<pre id="code123" style="display:none;">
&lt;script&gt;
let myPromise = new Promise(function(resolve, reject) {
    let success = true;
    if (success) {
        resolve("Promise resolved successfully!");
    } else {
        reject("Promise rejected!");
    }
});

myPromise.then(function(result) {
    alert(result);
}).catch(function(error) {
    alert(error);
});
&lt;/script&gt;
</pre>

<h3>📂 Example 4: Fetching Data with Fetch API</h3>
<button onclick="toggleCode('code124')">Show/Hide Code</button>
<button onclick="copyPreCode()">Copy Code</button>
<pre id="code124" style="display:none;">
&lt;script&gt;
fetch('https://jsonplaceholder.typicode.com/posts')
  .then(response => response.json())
  .then(data => {
    console.log(data);
  })
  .catch(error => {
    console.error('Error:', error);
  });
&lt;/script&gt;
</pre>

<h3>📂 Example 5: Using async/await</h3>
<button onclick="toggleCode('code125')">Show/Hide Code</button>
<button onclick="copyPreCode()">Copy Code</button>
<pre id="code125" style="display:none;">
&lt;script&gt;
async function fetchData() {
    let response = await fetch('https://jsonplaceholder.typicode.com/posts');
    let data = await response.json();
    console.log(data);
}

fetchData();
&lt;/script&gt;
</pre>

<h3>📂 Example 6: Handling Multiple Promises with Promise.all()</h3>
<button onclick="toggleCode('code126')">Show/Hide Code</button>
<button onclick="copyPreCode()">Copy Code</button>
<pre id="code126" style="display:none;">
&lt;script&gt;
let promise1 = new Promise(resolve => setTimeout(() => resolve("First Promise"), 1000));
let promise2 = new Promise(resolve => setTimeout(() => resolve("Second Promise"), 2000));

Promise.all([promise1, promise2])
  .then(values => {
    console.log(values);  // Output: ["First Promise", "Second Promise"]
  });
&lt;/script&gt;
</pre>

<h3>📂 Example 7: Timeout with Promise</h3>
<button onclick="toggleCode('code127')">Show/Hide Code</button>
<button onclick="copyPreCode()">Copy Code</button>
<pre id="code127" style="display:none;">
&lt;script&gt;
function delay(ms) {
    return new Promise(resolve => setTimeout(resolve, ms));
}

async function run() {
    console.log("Wait for it...");
    await delay(3000);
    console.log("3 seconds passed!");
}

run();
&lt;/script&gt;
</pre>

<h3>📂 Example 8: Error Handling with Async/Await</h3>
<button onclick="toggleCode('code128')">Show/Hide Code</button>
<button onclick="copyPreCode()">Copy Code</button>
<pre id="code128" style="display:none;">
&lt;script&gt;
async function fetchDataWithError() {
    try {
        let response = await fetch('https://nonexistent-url.com');
        if (!response.ok) {
            throw new Error('Network response was not ok');
        }
        let data = await response.json();
        console.log(data);
    } catch (error) {
        console.error('Fetch error:', error);
    }
}

fetchDataWithError();
&lt;/script&gt;
</pre>

<h3>📂 Example 9: Using setTimeout and Promise Together</h3>
<button onclick="toggleCode('code129')">Show/Hide Code</button>
<button onclick="copyPreCode()">Copy Code</button>
<pre id="code129" style="display:none;">
&lt;script&gt;
function delay(ms) {
    return new Promise(resolve => setTimeout(resolve, ms));
}

async function run() {
    await delay(2000);
    console.log("2 seconds passed!");
}

run();
&lt;/script&gt;
</pre>

<h3>📂 Example 10: Sequential Fetching with async/await</h3>
<button onclick="toggleCode('code130')">Show/Hide Code</button>
<button onclick="copyPreCode()">Copy Code</button>
<pre id="code130" style="display:none;">
&lt;script&gt;
async function sequentialFetching() {
    let response1 = await fetch('https://jsonplaceholder.typicode.com/posts/1');
    let data1 = await response1.json();
    console.log(data1);

    let response2 = await fetch('https://jsonplaceholder.typicode.com/posts/2');
    let data2 = await response2.json();
    console.log(data2);
}

sequentialFetching();
&lt;/script&gt;
</pre>

<script>
    function toggleCode(id) {
        var pre = document.getElementById(id);
        pre.style.display = (pre.style.display === 'none') ? 'block' : 'none';
    }

    function runCode() {
        var code = document.getElementById('editor').value;
        var frame = document.getElementById('resultFrame');
        frame.srcdoc = code;
    }

    function tryIt(sampleCode) {
        document.getElementById('editor').value = sampleCode;
        runCode();
    }

    // Function to copy code from editor
    function copyCode() {
        var code = document.getElementById('editor').value;
        navigator.clipboard.writeText(code).then(function() {
            alert("Code from editor copied to clipboard!");
        }, function(err) {
            alert("Failed to copy code from editor: " + err);
        });
    }

    // Function to copy pre-defined code from <pre> tag
    function copyPreCode() {
        var preCode = document.getElementById('code1').innerText;
        navigator.clipboard.writeText(preCode).then(function() {
            alert("Pre-defined code copied to clipboard!");
        }, function(err) {
            alert("Failed to copy pre-defined code: " + err);
        });
    }

</script>

</div>

</body>
</html>
