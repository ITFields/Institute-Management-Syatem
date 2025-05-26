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
  <li><a href="#adv-js-intro">Introduction to Advanced JavaScript</a></li>
  <li><a href="#js-closures">JavaScript Closures</a></li>
  <li><a href="#js-promises">JavaScript Promises</a></li>
  <li><a href="#js-async-await">JavaScript Async/Await</a></li>
  <li><a href="#js-callapplybind">Call, Apply & Bind</a></li>
  <li><a href="#js-destructuring">JavaScript Destructuring</a></li>
  <li><a href="#js-modules">JavaScript Modules</a></li>
  <li><a href="#js-event-loop">JavaScript Event Loop</a></li>
  <li><a href="#js-fetch">JavaScript Fetch API</a></li>
  <li><a href="#js-class">JavaScript Classes</a></li>
</ul>

<div class="content">
<h2 id="adv-js-intro">Introduction to Advanced JavaScript</h2>
<p>Advanced JavaScript includes concepts and features that help in writing efficient and cleaner code. Understanding closures, promises, async/await, and other advanced topics can make you a better JavaScript developer.</p>

<h2 id="js-closures">JavaScript Closures</h2>
<p>A closure is a function that retains access to its lexical scope, even when the function is executed outside that scope.</p>

<h3>📂 Example 1: Basic Closure</h3>
<button onclick="toggleCode('code201')">Show/Hide Code</button>
<button onclick="copyPreCode()">Copy Code</button>
<pre id="code201" style="display:none;">
&lt;script&gt;
function outerFunction() {
    let count = 0;

    return function innerFunction() {
        count++;
        console.log(count);
    };
}

const increment = outerFunction();
increment();
increment();
&lt;/script&gt;
</pre>

<h3>📂 Example 2: Closure with Arguments</h3>
<button onclick="toggleCode('code202')">Show/Hide Code</button>
<button onclick="copyPreCode()">Copy Code</button>
<pre id="code202" style="display:none;">
&lt;script&gt;
function outerFunction(x) {
    return function innerFunction(y) {
        console.log(x + y);
    };
}

const add5 = outerFunction(5);
add5(3);  // Output: 8
&lt;/script&gt;
</pre>

<h3>📂 Example 3: Function Factory using Closure</h3>
<button onclick="toggleCode('code203')">Show/Hide Code</button>
<button onclick="copyPreCode()">Copy Code</button>
<pre id="code203" style="display:none;">
&lt;script&gt;
function multiplier(factor) {
    return function(number) {
        return number * factor;
    };
}

const multiplyBy2 = multiplier(2);
console.log(multiplyBy2(3)); // Output: 6
&lt;/script&gt;
</pre>

<h3>📂 Example 4: Closure with Object Context</h3>
<button onclick="toggleCode('code204')">Show/Hide Code</button>
<button onclick="copyPreCode()">Copy Code</button>
<pre id="code204" style="display:none;">
&lt;script&gt;
function person(name) {
    return {
        greet: function() {
            console.log("Hello, " + name);
        }
    };
}

const john = person("John");
john.greet();  // Output: Hello, John
&lt;/script&gt;
</pre>

<h3>📂 Example 5: Private Variables using Closure</h3>
<button onclick="toggleCode('code205')">Show/Hide Code</button>
<button onclick="copyPreCode()">Copy Code</button>
<pre id="code205" style="display:none;">
&lt;script&gt;
function createCounter() {
    let count = 0;

    return {
        increment: function() {
            count++;
            return count;
        },
        decrement: function() {
            count--;
            return count;
        }
    };
}

const counter = createCounter();
console.log(counter.increment());  // Output: 1
console.log(counter.increment());  // Output: 2
&lt;/script&gt;
</pre>

<h2 id="js-promises">JavaScript Promises</h2>
<p>A promise is a JavaScript object that represents the eventual completion (or failure) of an asynchronous operation.</p>

<h3>📂 Example 1: Creating a Promise</h3>
<button onclick="toggleCode('code301')">Show/Hide Code</button>
<button onclick="copyPreCode()">Copy Code</button>
<pre id="code301" style="display:none;">
&lt;script&gt;
let myPromise = new Promise((resolve, reject) => {
    let success = true;
    if(success) {
        resolve("The promise is fulfilled!");
    } else {
        reject("The promise is rejected.");
    }
});

myPromise
    .then(result => console.log(result))
    .catch(error => console.log(error));
&lt;/script&gt;
</pre>

<h3>📂 Example 2: Chaining Promises</h3>
<button onclick="toggleCode('code302')">Show/Hide Code</button>
<button onclick="copyPreCode()">Copy Code</button>
<pre id="code302" style="display:none;">
&lt;script&gt;
let promise = new Promise((resolve, reject) => {
    resolve("Step 1: Success!");
});

promise
    .then(result => {
        console.log(result);
        return "Step 2: Success!";
    })
    .then(result => {
        console.log(result);
        return "Step 3: Success!";
    })
    .catch(error => console.log("Error:", error));
&lt;/script&gt;
</pre>

<h2 id="js-async-await">JavaScript Async/Await</h2>
<p>Async/Await is a syntax for handling asynchronous operations, making asynchronous code look and behave like synchronous code.</p>

<h3>📂 Example 1: Basic Async/Await</h3>
<button onclick="toggleCode('code401')">Show/Hide Code</button>
<button onclick="copyPreCode()">Copy Code</button>
<pre id="code401" style="display:none;">
&lt;script&gt;
async function fetchData() {
    let result = await new Promise((resolve) => setTimeout(() => resolve("Data fetched!"), 1000));
    console.log(result);
}

fetchData();
&lt;/script&gt;
</pre>

<h3>📂 Example 2: Handling Errors with Async/Await</h3>
<button onclick="toggleCode('code402')">Show/Hide Code</button>
<button onclick="copyPreCode()">Copy Code</button>
<pre id="code402" style="display:none;">
&lt;script&gt;
async function fetchData() {
    try {
        let result = await new Promise((resolve, reject) => setTimeout(() => reject("Error occurred!"), 1000));
        console.log(result);
    } catch (error) {
        console.log(error);
    }
}

fetchData();
&lt;/script&gt;
</pre>

<h2 id="js-callapplybind">Call, Apply & Bind</h2>
<p>These are methods in JavaScript that allow you to call a function with a specific context and arguments.</p>

<h3>📂 Example 1: Using call() Method</h3>
<button onclick="toggleCode('code501')">Show/Hide Code</button>
<button onclick="copyPreCode()">Copy Code</button>
<pre id="code501" style="display:none;">
&lt;script&gt;
function greet(message) {
    console.log(message + ", " + this.name);
}

const person = { name: "Alice" };
greet.call(person, "Hello");  // Output: Hello, Alice
&lt;/script&gt;
</pre>

<h3>📂 Example 2: Using apply() Method</h3>
<button onclick="toggleCode('code502')">Show/Hide Code</button>
<button onclick="copyPreCode()">Copy Code</button>
<pre id="code502" style="display:none;">
&lt;script&gt;
function greet(message, punctuation) {
    console.log(message + ", " + this.name + punctuation);
}

const person = { name: "Bob" };
greet.apply(person, ["Hello", "!"]);  // Output: Hello, Bob!
&lt;/script&gt;
</pre>

<h3>📂 Example 3: Using bind() Method</h3>
<button onclick="toggleCode('code503')">Show/Hide Code</button>
<button onclick="copyPreCode()">Copy Code</button>
<pre id="code503" style="display:none;">
&lt;script&gt;
function greet() {
    console.log("Hello, " + this.name);
}

const person = { name: "Charlie" };
const greetCharlie = greet.bind(person);
greetCharlie();  // Output: Hello, Charlie
&lt;/script&gt;
</pre>

<h2 id="js-destructuring">JavaScript Destructuring</h2>
<p>Destructuring allows you to unpack values from arrays or properties from objects into distinct variables.</p>

<h3>📂 Example 1: Destructuring an Array</h3>
<button onclick="toggleCode('code601')">Show/Hide Code</button>
<button onclick="copyPreCode()">Copy Code</button>
<pre id="code601" style="display:none;">
&lt;script&gt;
const numbers = [1, 2, 3];
const [a, b] = numbers;
console.log(a, b);  // Output: 1 2
&lt;/script&gt;
</pre>

<h3>📂 Example 2: Destructuring an Object</h3>
<button onclick="toggleCode('code602')">Show/Hide Code</button>
<button onclick="copyPreCode()">Copy Code</button>
<pre id="code602" style="display:none;">
&lt;script&gt;
const person = { name: "David", age: 25 };
const { name, age } = person;
console.log(name, age);  // Output: David 25
&lt;/script&gt;
</pre>

<h3>📂 Example 3: Nested Destructuring</h3>
<button onclick="toggleCode('code603')">Show/Hide Code</button>
<button onclick="copyPreCode()">Copy Code</button>
<pre id="code603" style="display:none;">
&lt;script&gt;
const user = { name: "Eve", address: { city: "London", country: "UK" } };
const { name, address: { city, country } } = user;
console.log(name, city, country);  // Output: Eve London UK
&lt;/script&gt;
</pre>

<h2 id="js-modules">JavaScript Modules</h2>
<p>Modules in JavaScript allow us to break down a program into smaller, reusable components by exporting and importing functionality.</p>

<h3>📂 Example 1: Exporting a Function</h3>
<button onclick="toggleCode('code701')">Show/Hide Code</button>
<button onclick="copyPreCode()">Copy Code</button>
<pre id="code701" style="display:none;">
&lt;script type="module"&gt;
// file1.js
export function greet(name) {
    console.log("Hello, " + name);
}
&lt;/script&gt;

&lt;script type="module"&gt;
// file2.js
import { greet } from './file1.js';
greet('Alice');  // Output: Hello, Alice
&lt;/script&gt;
</pre>

<h3>📂 Example 2: Exporting an Object</h3>
<button onclick="toggleCode('code702')">Show/Hide Code</button>
<button onclick="copyPreCode()">Copy Code</button>
<pre id="code702" style="display:none;">
&lt;script type="module"&gt;
// data.js
export const user = { name: "Bob", age: 30 };
&lt;/script&gt;

&lt;script type="module"&gt;
// app.js
import { user } from './data.js';
console.log(user.name);  // Output: Bob
&lt;/script&gt;
</pre>
<h2 id="js-event-loop">JavaScript Event Loop</h2>
<p>The event loop is responsible for executing the code, collecting and processing events, and executing sub-tasks in JavaScript.</p>

<h3>📂 Example 1: Basic Event Loop</h3>
<button onclick="toggleCode('code801')">Show/Hide Code</button>
<button onclick="copyPreCode()">Copy Code</button>
<pre id="code801" style="display:none;">
&lt;script&gt;
console.log("Start");

setTimeout(() => {
    console.log("Delayed message");
}, 2000);

console.log("End");
// Output: 
// Start
// End
// Delayed message
&lt;/script&gt;
</pre>

<h3>📂 Example 2: Event Loop with Promises</h3>
<button onclick="toggleCode('code802')">Show/Hide Code</button>
<button onclick="copyPreCode()">Copy Code</button>
<pre id="code802" style="display:none;">
&lt;script&gt;
console.log("Start");

Promise.resolve("Resolved promise").then(result => {
    console.log(result);
});

console.log("End");
// Output: 
// Start
// End
// Resolved promise
&lt;/script&gt;
</pre>
<h2 id="js-event-loop">JavaScript Event Loop</h2>
<p>The event loop is responsible for executing the code, collecting and processing events, and executing sub-tasks in JavaScript.</p>

<h3>📂 Example 1: Basic Event Loop</h3>
<button onclick="toggleCode('code801')">Show/Hide Code</button>
<button onclick="copyPreCode()">Copy Code</button>
<pre id="code801" style="display:none;">
&lt;script&gt;
console.log("Start");

setTimeout(() => {
    console.log("Delayed message");
}, 2000);

console.log("End");
// Output: 
// Start
// End
// Delayed message
&lt;/script&gt;
</pre>

<h3>📂 Example 2: Event Loop with Promises</h3>
<button onclick="toggleCode('code802')">Show/Hide Code</button>
<button onclick="copyPreCode()">Copy Code</button>
<pre id="code802" style="display:none;">
&lt;script&gt;
console.log("Start");

Promise.resolve("Resolved promise").then(result => {
    console.log(result);
});

console.log("End");
// Output: 
// Start
// End
// Resolved promise
&lt;/script&gt;
</pre>
<h2 id="js-fetch">JavaScript Fetch API</h2>
<p>The Fetch API provides a way to make network requests in JavaScript. It is a modern alternative to XMLHttpRequest.</p>

<h3>📂 Example 1: Basic Fetch Request</h3>
<button onclick="toggleCode('code901')">Show/Hide Code</button>
<button onclick="copyPreCode()">Copy Code</button>
<pre id="code901" style="display:none;">
&lt;script&gt;
fetch('https://jsonplaceholder.typicode.com/posts')
    .then(response => response.json())
    .then(data => console.log(data))
    .catch(error => console.error("Error:", error));
&lt;/script&gt;
</pre>

<h3>📂 Example 2: Fetch with Async/Await</h3>
<button onclick="toggleCode('code902')">Show/Hide Code</button>
<button onclick="copyPreCode()">Copy Code</button>
<pre id="code902" style="display:none;">
&lt;script&gt;
async function getData() {
    try {
        const response = await fetch('https://jsonplaceholder.typicode.com/posts');
        const data = await response.json();
        console.log(data);
    } catch (error) {
        console.error("Error:", error);
    }
}

getData();
&lt;/script&gt;
</pre>
<h2 id="js-class">JavaScript Classes</h2>
<p>Classes in JavaScript allow us to create blueprints for objects, encapsulating data and methods within a single unit.</p>

<h3>📂 Example 1: Basic Class Definition</h3>
<button onclick="toggleCode('code1001')">Show/Hide Code</button>
<button onclick="copyPreCode()">Copy Code</button>
<pre id="code1001" style="display:none;">
&lt;script&gt;
class Person {
    constructor(name, age) {
        this.name = name;
        this.age = age;
    }

    greet() {
        console.log("Hello, " + this.name);
    }
}

const person1 = new Person("Alice", 25);
person1.greet();  // Output: Hello, Alice
&lt;/script&gt;
</pre>

<h3>📂 Example 2: Inheritance in Classes</h3>
<button onclick="toggleCode('code1002')">Show/Hide Code</button>
<button onclick="copyPreCode()">Copy Code</button>
<pre id="code1002" style="display:none;">
&lt;script&gt;
class Employee extends Person {
    constructor(name, age, position) {
        super(name, age);
        this.position = position;
    }

    work() {
        console.log(this.name + " is working as a " + this.position);
    }
}

const employee1 = new Employee("Bob", 30, "Developer");
employee1.greet();  // Output: Hello, Bob
employee1.work();   // Output: Bob is working as a Developer
&lt;/script&gt;
</pre>

<h3>📂 Example 3: Getters and Setters</h3>
<button onclick="toggleCode('code1003')">Show/Hide Code</button>
<button onclick="copyPreCode()">Copy Code</button>
<pre id="code1003" style="display:none;">
&lt;script&gt;
class Rectangle {
    constructor(width, height) {
        this._width = width;
        this._height = height;
    }

    get area() {
        return this._width * this._height;
    }

    set width(value) {
        if(value <= 0) {
            console.log("Width must be positive!");
        } else {
            this._width = value;
        }
    }
}

const rectangle = new Rectangle(5, 10);
console.log(rectangle.area); // Output: 50
rectangle.width = 7;
console.log(rectangle.area); // Output: 70
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

