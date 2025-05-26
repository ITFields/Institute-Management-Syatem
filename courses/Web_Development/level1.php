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
    <li><a href="#intro">Introduction to HTML</a></li>
    <li><a href="#elements">HTML Elements</a></li>
    <li><a href="#attributes">HTML Attributes</a></li>
    <li><a href="#headings">HTML Headings</a></li>
    <li><a href="#paragraphs">HTML Paragraphs</a></li>
    <li><a href="#links">HTML Links</a></li>
    <li><a href="#images">HTML Images</a></li>
    <li><a href="#lists">HTML Lists</a></li>
    <li><a href="#tables">HTML Tables</a></li>
    <li><a href="#forms">HTML Forms</a></li>
    <li><a href="#input-types">HTML Input Types</a></li>
    <li><a href="#buttons">HTML Buttons</a></li>
    <li><a href="#media">HTML Audio & Video</a></li>
    <li><a href="#iframes">HTML Iframes</a></li>
    <li><a href="#block-inline">Block vs Inline Elements</a></li>
    <li><a href="#div-span">HTML div & span</a></li>
    <li><a href="#semantics">HTML Semantics</a></li>
    <li><a href="#html5">HTML5 New Elements</a></li>
    <li><a href="#meta">HTML Meta Tags</a></li>
    <li><a href="#entities">HTML Entities</a></li>
    <li><a href="#comments">HTML Comments</a></li>
    <li><a href="#doctype">HTML Doctype</a></li>
    <li><a href="#global-attributes">HTML Global Attributes</a></li>
    </ul>

  <div class="content">
    <h2 id="intro">📘 Introduction to HTML</h2>
    <p>
        HTML (HyperText Markup Language) is the standard language for creating web pages. It forms the structure of all websites.
    </p>

    <div class="note">
        <strong>Note:</strong> HTML is a markup language, not a programming language.
    </div>

    <h3>📂 Basic Structure of HTML Document</h3>
    <button onclick="toggleCode('code1')">Show/Hide Code</button>
    <button onclick="copyPreCode()">Copy Code</button> <!-- Copy Code for pre-defined code -->
    <pre id="code1" style="display:none;">
&lt;!DOCTYPE html&gt;
&lt;html&gt;
  &lt;head&gt;
    &lt;title&gt;My Web Page&lt;/title&gt;
  &lt;/head&gt;
  &lt;body&gt;
    &lt;h1&gt;Welcome to HTML&lt;/h1&gt;
    &lt;p&gt;This is a paragraph.&lt;/p&gt;
  &lt;/body&gt;
&lt;/html&gt;
    </pre>



    <h3>🧠 Table: Basic HTML Tags</h3>
    <table>
        <thead>
            <tr>
                <th>Tag</th>
                <th>Description</th>
                <th>Try</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><code>&lt;html&gt;</code></td>
                <td>Root element</td>
                <td><button onclick="tryIt(`&lt;html&gt;&lt;/html&gt;`)">Try</button></td>
            </tr>
            <tr>
                <td><code>&lt;head&gt;</code></td>
                <td>Metadata</td>
                <td><button onclick="tryIt(`&lt;head&gt;&lt;/head&gt;`)">Try</button></td>
            </tr>
            <tr>
                <td><code>&lt;body&gt;</code></td>
                <td>Main content</td>
                <td><button onclick="tryIt(`&lt;body&gt;Hello&lt;/body&gt;`)">Try</button></td>
            </tr>
        </tbody>
    </table>

    <h3>🧪 Live Output</h3>
    <textarea id="editor" rows="6" style="width:100%;"></textarea>
    <br/>
    <button onclick="runCode()">Run Code</button>
    <iframe id="resultFrame" style="width:100%; height:200px; border:1px solid #ccc;"></iframe>

    <button onclick="copyCode()">Copy Code from Editor</button> <!-- Copy Code for the editor content -->



<h2 id="elements">📘 HTML Elements</h2>
<p>
    HTML elements are the building blocks of HTML. They represent the structure of the web page and define how content is displayed.
</p>

<div class="note">
    <strong>Note:</strong> An HTML element typically consists of a start tag, content, and an end tag.
</div>

<h3>📂 Basic HTML Elements</h3>
<button onclick="toggleCode('code2')">Show/Hide Code</button>
<button onclick="copyPreCode()">Copy Code</button>
<pre id="code2" style="display:none;">
&lt;html&gt;
  &lt;head&gt;
    &lt;title&gt;Web Page&lt;/title&gt;
  &lt;/head&gt;
  &lt;body&gt;
    &lt;h1&gt;Welcome&lt;/h1&gt;
    &lt;p&gt;This is a simple paragraph&lt;/p&gt;
  &lt;/body&gt;
&lt;/html&gt;
</pre>

<h3>📌 Key Elements</h3>
<ul>
    <li><input type="checkbox" /> <code>&lt;html&gt;</code> - Root element</li>
    <li><input type="checkbox" /> <code>&lt;head&gt;</code> - Metadata and links to external resources</li>
    <li><input type="checkbox" /> <code>&lt;body&gt;</code> - Contains the visible content of the page</li>
</ul>

<h3>🧠 Table: Common HTML Elements</h3>
<table>
    <thead>
        <tr>
            <th>Tag</th>
            <th>Description</th>
            <th>Try</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td><code>&lt;p&gt;</code></td>
            <td>Defines a paragraph of text</td>
            <td><button onclick="tryIt(`&lt;p&gt;This is a paragraph&lt;/p&gt;`)">Try</button></td>
        </tr>
        <tr>
            <td><code>&lt;h1&gt;</code></td>
            <td>Defines the largest heading</td>
            <td><button onclick="tryIt(`&lt;h1&gt;Main Heading&lt;/h1&gt;`)">Try</button></td>
        </tr>
        <tr>
            <td><code>&lt;img&gt;</code></td>
            <td>Defines an image</td>
            <td><button onclick="tryIt(`&lt;img src='image.jpg' alt='description' /&gt;`)">Try</button></td>
        </tr>
    </tbody>
</table>

<h3>🧪 Live Output</h3>
<textarea id="editor" rows="6" style="width:100%;"></textarea>
<br/>
<button onclick="runCode()">Run Code</button>
<iframe id="resultFrame" style="width:100%; height:200px; border:1px solid #ccc;"></iframe>

<h3>🔄 Code Copy</h3>
<button onclick="copyCode()">Copy Code</button>
<input type="text" id="codeToCopy" readonly />
  
<h2 id="attributes">📘 HTML Attributes</h2>
<p>
    HTML attributes provide additional information about HTML elements. They are usually written in the opening tag of an element and consist of a name and a value.
</p>

<!-- HTML Attributes Code Example -->
<h3>📂 Basic HTML Attributes</h3>
<button onclick="toggleCode('code3')">Show/Hide Code</button>
<button onclick="copyPreCode()">Copy Code</button>
<pre id="code3" style="display:none;">
&lt;div class="container"&gt;
  &lt;img src="image.jpg" alt="description"&gt;
  &lt;a href="https://www.example.com"&gt;Click Here&lt;/a&gt;
&lt;/div&gt;
</pre>

<h3>📌 Key HTML Attributes</h3>
<ul>
    <li><input type="checkbox" /> <code>class</code> - Specifies one or more class names for an element</li>
    <li><input type="checkbox" /> <code>id</code> - Specifies a unique identifier for an element</li>
    <li><input type="checkbox" /> <code>src</code> - Specifies the source file for images or media</li>
    <li><input type="checkbox" /> <code>href</code> - Specifies the destination of a link</li>
</ul>

<h3>🧠 Example Table for HTML Attributes</h3>
<table>
    <thead>
        <tr>
            <th>Attribute</th>
            <th>Description</th>
            <th>Try</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td><code>class</code></td>
            <td>Specifies one or more class names for an element</td>
            <td><button onclick="tryIt(`&lt;div class='myClass'&gt;Content&lt;/div&gt;`)">Try</button></td>
        </tr>
        <tr>
            <td><code>id</code></td>
            <td>Specifies a unique identifier for an element</td>
            <td><button onclick="tryIt(`&lt;div id='uniqueId'&gt;Content&lt;/div&gt;`)">Try</button></td>
        </tr>
        <tr>
            <td><code>src</code></td>
            <td>Specifies the source file for images or media</td>
            <td><button onclick="tryIt(`&lt;img src='image.jpg' alt='description' /&gt;`)">Try</button></td>
        </tr>
        <tr>
            <td><code>href</code></td>
            <td>Specifies the destination of a link</td>
            <td><button onclick="tryIt(`&lt;a href='https://www.example.com'&gt;Visit Example&lt;/a&gt;`)">Try</button></td>
        </tr>
    </tbody>
</table>

<h3>🧪 Live Output</h3>
<textarea id="editor" rows="6" style="width:100%;"></textarea>
<br/>
<button onclick="runCode()">Run Code</button>
<iframe id="resultFrame" style="width:100%; height:200px; border:1px solid #ccc;"></iframe>

<h3>🔄 Code Copy</h3>
<button onclick="copyCode()">Copy Code</button>
<input type="text" id="codeToCopy" readonly />
<h2 id="headings">📘 HTML Headings</h2>
<p>
    HTML headings define the structure of your document by separating content into distinct sections. They range from <code>&lt;h1&gt;</code> to <code>&lt;h6&gt;</code>, with <code>&lt;h1&gt;</code> being the most important and <code>&lt;h6&gt;</code> the least.
</p>

<h3>📂 Basic HTML Headings</h3>
<button onclick="toggleCode('code4')">Show/Hide Code</button>
<button onclick="copyPreCode()">Copy Code</button>
<pre id="code4" style="display:none;">
&lt;h1&gt;Main Heading&lt;/h1&gt;
&lt;h2&gt;Secondary Heading&lt;/h2&gt;
&lt;h3&gt;Tertiary Heading&lt;/h3&gt;
&lt;h4&gt;Quaternary Heading&lt;/h4&gt;
&lt;h5&gt;Quinary Heading&lt;/h5&gt;
&lt;h6&gt;Senary Heading&lt;/h6&gt;
</pre>

<h3>📌 Key HTML Headings</h3>
<ul>
    <li><input type="checkbox" /> <code>&lt;h1&gt;</code> - Main heading, most important</li>
    <li><input type="checkbox" /> <code>&lt;h2&gt;</code> - Secondary heading</li>
    <li><input type="checkbox" /> <code>&lt;h3&gt;</code> - Tertiary heading</li>
    <li><input type="checkbox" /> <code>&lt;h4&gt;</code> - Quaternary heading</li>
    <li><input type="checkbox" /> <code>&lt;h5&gt;</code> - Quinary heading</li>
    <li><input type="checkbox" /> <code>&lt;h6&gt;</code> - Senary heading, least important</li>
</ul>

<h3>🧠 Example of HTML Headings</h3>
<table>
    <thead>
        <tr>
            <th>Tag</th>
            <th>Description</th>
            <th>Try</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td><code>&lt;h1&gt;</code></td>
            <td>Main heading, most important</td>
            <td><button onclick="tryIt(`&lt;h1&gt;This is a Main Heading&lt;/h1&gt;`)">Try</button></td>
        </tr>
        <tr>
            <td><code>&lt;h2&gt;</code></td>
            <td>Secondary heading</td>
            <td><button onclick="tryIt(`&lt;h2&gt;This is a Secondary Heading&lt;/h2&gt;`)">Try</button></td>
        </tr>
    </tbody>
</table>

<h3>🧪 Live Output</h3>
<textarea id="editor" rows="6" style="width:100%;"></textarea>
<br/>
<button onclick="runCode()">Run Code</button>
<iframe id="resultFrame" style="width:100%; height:200px; border:1px solid #ccc;"></iframe>

<h3>🔄 Code Copy</h3>
<button onclick="copyCode()">Copy Code</button>
<input type="text" id="codeToCopy" readonly />

<h2 id="paragraphs">📘 HTML Paragraphs</h2>
<p>
    The <code>&lt;p&gt;</code> element is used to define a paragraph of text. It automatically adds space before and after each paragraph.
</p>

<h3>📂 Basic HTML Paragraph</h3>
<button onclick="toggleCode('code5')">Show/Hide Code</button>
<button onclick="copyPreCode()">Copy Code</button>
<pre id="code5" style="display:none;">
&lt;p&gt;This is a simple paragraph&lt;/p&gt;
</pre>

<h3>📌 Key HTML Paragraphs</h3>
<ul>
    <li><input type="checkbox" /> <code>&lt;p&gt;</code> - Defines a paragraph of text</li>
</ul>

<h3>🧠 Example of HTML Paragraphs</h3>
<table>
    <thead>
        <tr>
            <th>Tag</th>
            <th>Description</th>
            <th>Try</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td><code>&lt;p&gt;</code></td>
            <td>Defines a paragraph of text</td>
            <td><button onclick="tryIt(`&lt;p&gt;This is a paragraph&lt;/p&gt;`)">Try</button></td>
        </tr>
    </tbody>
</table>

<h3>🧪 Live Output</h3>
<textarea id="editor" rows="6" style="width:100%;"></textarea>
<br/>
<button onclick="runCode()">Run Code</button>
<iframe id="resultFrame" style="width:100%; height:200px; border:1px solid #ccc;"></iframe>

<h3>🔄 Code Copy</h3>
<button onclick="copyCode()">Copy Code</button>
<input type="text" id="codeToCopy" readonly />

<h2 id="links">📘 HTML Links</h2>
<p>
    The <code>&lt;a&gt;</code> element defines a hyperlink. It can link to another page, an external resource, or a section within the same page.
</p>

<h3>📂 Basic HTML Link</h3>
<button onclick="toggleCode('code6')">Show/Hide Code</button>
<button onclick="copyPreCode()">Copy Code</button>
<pre id="code6" style="display:none;">
&lt;a href="https://www.example.com"&gt;Visit Example&lt;/a&gt;
</pre>

<h3>📌 Key HTML Links</h3>
<ul>
    <li><input type="checkbox" /> <code>href</code> - Specifies the destination of the link</li>
</ul>

<h3>🧠 Example of HTML Links</h3>
<table>
    <thead>
        <tr>
            <th>Tag</th>
            <th>Description</th>
            <th>Try</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td><code>&lt;a&gt;</code></td>
            <td>Defines a hyperlink</td>
            <td><button onclick="tryIt(`&lt;a href='https://www.example.com'&gt;Visit Example&lt;/a&gt;`)">Try</button></td>
        </tr>
    </tbody>
</table>

<h3>🧪 Live Output</h3>
<textarea id="editor" rows="6" style="width:100%;"></textarea>
<br/>
<button onclick="runCode()">Run Code</button>
<iframe id="resultFrame" style="width:100%; height:200px; border:1px solid #ccc;"></iframe>

<h3>🔄 Code Copy</h3>
<button onclick="copyCode()">Copy Code</button>
<input type="text" id="codeToCopy" readonly />
<h2 id="images">📘 HTML Images</h2>
<p>
    The <code>&lt;img&gt;</code> element is used to embed an image on a webpage. It requires the <code>src</code> attribute to specify the image source.
</p>

<h3>📂 Basic HTML Image</h3>
<button onclick="toggleCode('code7')">Show/Hide Code</button>
<button onclick="copyPreCode()">Copy Code</button>
<pre id="code7" style="display:none;">
&lt;img src="image.jpg" alt="Description"&gt;
</pre>

<h3>📌 Key HTML Image Attributes</h3>
<ul>
    <li><input type="checkbox" /> <code>src</code> - Specifies the path to the image file</li>
    <li><input type="checkbox" /> <code>alt</code> - Provides an alternative text if the image is not found</li>
    <li><input type="checkbox" /> <code>width</code> - Specifies the width of the image</li>
    <li><input type="checkbox" /> <code>height</code> - Specifies the height of the image</li>
</ul>

<h3>🧠 Example of HTML Images</h3>
<table>
    <thead>
        <tr>
            <th>Tag</th>
            <th>Description</th>
            <th>Try</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td><code>&lt;img&gt;</code></td>
            <td>Defines an image</td>
            <td><button onclick="tryIt(`&lt;img src='image.jpg' alt='A beautiful image' /&gt;`)">Try</button></td>
        </tr>
    </tbody>
</table>

<h3>🧪 Live Output</h3>
<textarea id="editor" rows="6" style="width:100%;"></textarea>
<br/>
<button onclick="runCode()">Run Code</button>
<iframe id="resultFrame" style="width:100%; height:200px; border:1px solid #ccc;"></iframe>

<h3>🔄 Code Copy</h3>
<button onclick="copyCode()">Copy Code</button>
<input type="text" id="codeToCopy" readonly />

<h2 id="lists">📘 HTML Lists</h2>
<p>
    HTML supports two types of lists: ordered lists (<code>&lt;ol&gt;</code>) and unordered lists (<code>&lt;ul&gt;</code>).
</p>

<h3>📂 Basic HTML List</h3>
<button onclick="toggleCode('code8')">Show/Hide Code</button>
<button onclick="copyPreCode()">Copy Code</button>
<pre id="code8" style="display:none;">
&lt;ul&gt;
  &lt;li&gt;Item 1&lt;/li&gt;
  &lt;li&gt;Item 2&lt;/li&gt;
  &lt;li&gt;Item 3&lt;/li&gt;
&lt;/ul&gt;
</pre>

<h3>📌 Key HTML List Elements</h3>
<ul>
    <li><input type="checkbox" /> <code>&lt;ul&gt;</code> - Defines an unordered list</li>
    <li><input type="checkbox" /> <code>&lt;ol&gt;</code> - Defines an ordered list</li>
    <li><input type="checkbox" /> <code>&lt;li&gt;</code> - Defines a list item</li>
</ul>

<h3>🧠 Example of HTML Lists</h3>
<table>
    <thead>
        <tr>
            <th>Tag</th>
            <th>Description</th>
            <th>Try</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td><code>&lt;ul&gt;</code></td>
            <td>Defines an unordered list</td>
            <td><button onclick="tryIt(`&lt;ul&gt;&lt;li&gt;Item 1&lt;/li&gt;&lt;li&gt;Item 2&lt;/li&gt;&lt;/ul&gt;`)">Try</button></td>
        </tr>
    </tbody>
</table>

<h3>🧪 Live Output</h3>
<textarea id="editor" rows="6" style="width:100%;"></textarea>
<br/>
<button onclick="runCode()">Run Code</button>
<iframe id="resultFrame" style="width:100%; height:200px; border:1px solid #ccc;"></iframe>

<h3>🔄 Code Copy</h3>
<button onclick="copyCode()">Copy Code</button>
<input type="text" id="codeToCopy" readonly />

<h2 id="forms">📘 HTML Forms</h2>
<p>
    Forms in HTML are used to collect user input. The <code>&lt;form&gt;</code> element defines the form and can include different types of input fields.
</p>

<h3>📂 Basic HTML Form</h3>
<button onclick="toggleCode('code9')">Show/Hide Code</button>
<button onclick="copyPreCode()">Copy Code</button>
<pre id="code9" style="display:none;">
&lt;form action="/submit" method="POST"&gt;
  &lt;label for="name"&gt;Name&lt;/label&gt;
  &lt;input type="text" id="name" name="name"&gt;
  &lt;input type="submit" value="Submit"&gt;
&lt;/form&gt;
</pre>

<h3>📌 Key HTML Form Elements</h3>
<ul>
    <li><input type="checkbox" /> <code>&lt;form&gt;</code> - Defines the form</li>
    <li><input type="checkbox" /> <code>&lt;input&gt;</code> - Defines an input field</li>
    <li><input type="checkbox" /> <code>&lt;label&gt;</code> - Defines a label for the input field</li>
    <li><input type="checkbox" /> <code>&lt;select&gt;</code> - Defines a dropdown menu</li>
</ul>

<h3>🧠 Example of HTML Forms</h3>
<table>
    <thead>
        <tr>
            <th>Tag</th>
            <th>Description</th>
            <th>Try</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td><code>&lt;input&gt;</code></td>
            <td>Defines an input field</td>
            <td><button onclick="tryIt(`&lt;input type='text' name='name' /&gt;`)">Try</button></td>
        </tr>
        <tr>
            <td><code>&lt;label&gt;</code></td>
            <td>Defines a label for an input</td>
            <td><button onclick="tryIt(`&lt;label for='name'&gt;Name&lt;/label&gt;`)">Try</button></td>
        </tr>
    </tbody>
</table>

<h3>🧪 Live Output</h3>
<textarea id="editor" rows="6" style="width:100%;"></textarea>
<br/>
<button onclick="runCode()">Run Code</button>
<iframe id="resultFrame" style="width:100%; height:200px; border:1px solid #ccc;"></iframe>

<h3>🔄 Code Copy</h3>
<button onclick="copyCode()">Copy Code</button>
<input type="text" id="codeToCopy" readonly />
<h2 id="tables">📘 HTML Tables</h2>
<p>
    Tables in HTML are used to display data in a tabular format. The <code>&lt;table&gt;</code> element is used to define a table.
</p>

<h3>📂 Basic HTML Table</h3>
<button onclick="toggleCode('code10')">Show/Hide Code</button>
<button onclick="copyPreCode()">Copy Code</button>
<pre id="code10" style="display:none;">
&lt;table border="1"&gt;
  &lt;tr&gt;
    &lt;th&gt;Name&lt;/th&gt;
    &lt;th&gt;Age&lt;/th&gt;
  &lt;/tr&gt;
  &lt;tr&gt;
    &lt;td&gt;John&lt;/td&gt;
    &lt;td&gt;25&lt;/td&gt;
  &lt;/tr&gt;
  &lt;tr&gt;
    &lt;td&gt;Jane&lt;/td&gt;
    &lt;td&gt;30&lt;/td&gt;
  &lt;/tr&gt;
&lt;/table&gt;
</pre>

<h3>📌 Key HTML Table Elements</h3>
<ul>
    <li><input type="checkbox" /> <code>&lt;table&gt;</code> - Defines the table</li>
    <li><input type="checkbox" /> <code>&lt;tr&gt;</code> - Defines a row in the table</li>
    <li><input type="checkbox" /> <code>&lt;th&gt;</code> - Defines a header cell</li>
    <li><input type="checkbox" /> <code>&lt;td&gt;</code> - Defines a data cell</li>
</ul>

<h3>🧠 Example of HTML Tables</h3>
<table>
    <thead>
        <tr>
            <th>Tag</th>
            <th>Description</th>
            <th>Try</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td><code>&lt;table&gt;</code></td>
            <td>Defines the table</td>
            <td><button onclick="tryIt(`&lt;table&gt;&lt;tr&gt;&lt;td&gt;Cell 1&lt;/td&gt;&lt;td&gt;Cell 2&lt;/td&gt;&lt;/tr&gt;&lt;/table&gt;`)">Try</button></td>
        </tr>
    </tbody>
</table>

<h3>🧪 Live Output</h3>
<textarea id="editor" rows="6" style="width:100%;"></textarea>
<br/>
<button onclick="runCode()">Run Code</button>
<iframe id="resultFrame" style="width:100%; height:200px; border:1px solid #ccc;"></iframe>

<h3>🔄 Code Copy</h3>
<button onclick="copyCode()">Copy Code</button>
<input type="text" id="codeToCopy" readonly />

<h2 id="buttons">📘 HTML Buttons</h2>
<p>
    HTML buttons are used to trigger actions on a web page. The <code>&lt;button&gt;</code> element is used to create a clickable button.
</p>

<h3>📂 Basic HTML Button</h3>
<button onclick="toggleCode('code11')">Show/Hide Code</button>
<button onclick="copyPreCode()">Copy Code</button>
<pre id="code11" style="display:none;">
&lt;button&gt;Click Me&lt;/button&gt;
</pre>

<h3>📌 Key HTML Button Attributes</h3>
<ul>
    <li><input type="checkbox" /> <code>type</code> - Specifies the button type (e.g., submit, button, reset)</li>
    <li><input type="checkbox" /> <code>onclick</code> - Specifies a function to run when the button is clicked</li>
</ul>

<h3>🧠 Example of HTML Buttons</h3>
<table>
    <thead>
        <tr>
            <th>Tag</th>
            <th>Description</th>
            <th>Try</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td><code>&lt;button&gt;</code></td>
            <td>Defines a clickable button</td>
            <td><button onclick="tryIt(`&lt;button&gt;Click Me&lt;/button&gt;`)">Try</button></td>
        </tr>
    </tbody>
</table>

<h3>🧪 Live Output</h3>
<textarea id="editor" rows="6" style="width:100%;"></textarea>
<br/>
<button onclick="runCode()">Run Code</button>
<iframe id="resultFrame" style="width:100%; height:200px; border:1px solid #ccc;"></iframe>

<h3>🔄 Code Copy</h3>
<button onclick="copyCode()">Copy Code</button>
<input type="text" id="codeToCopy" readonly />

<h2 id="anchors">📘 HTML Anchors</h2>
<p>
    Anchors are used to create hyperlinks in HTML. The <code>&lt;a&gt;</code> tag defines a hyperlink.
</p>

<h3>📂 Basic HTML Anchor</h3>
<button onclick="toggleCode('code12')">Show/Hide Code</button>
<button onclick="copyPreCode()">Copy Code</button>
<pre id="code12" style="display:none;">
&lt;a href="https://www.example.com"&gt;Visit Example&lt;/a&gt;
</pre>

<h3>📌 Key HTML Anchor Attributes</h3>
<ul>
    <li><input type="checkbox" /> <code>href</code> - Specifies the URL the link points to</li>
    <li><input type="checkbox" /> <code>target</code> - Specifies where to open the linked document</li>
</ul>

<h3>🧠 Example of HTML Anchors</h3>
<table>
    <thead>
        <tr>
            <th>Tag</th>
            <th>Description</th>
            <th>Try</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td><code>&lt;a&gt;</code></td>
            <td>Defines a hyperlink</td>
            <td><button onclick="tryIt(`&lt;a href='https://www.example.com'&gt;Visit Example&lt;/a&gt;`)">Try</button></td>
        </tr>
    </tbody>
</table>

<h3>🧪 Live Output</h3>
<textarea id="editor" rows="6" style="width:100%;"></textarea>
<br/>
<button onclick="runCode()">Run Code</button>
<iframe id="resultFrame" style="width:100%; height:200px; border:1px solid #ccc;"></iframe>

<h3>🔄 Code Copy</h3>
<button onclick="copyCode()">Copy Code</button>
<input type="text" id="codeToCopy" readonly />
<h2 id="forms">📘 HTML Forms</h2>
<p>
    HTML forms are used to collect user input. The <code>&lt;form&gt;</code> element is used to define a form.
</p>

<h3>📂 Basic HTML Form</h3>
<button onclick="toggleCode('code13')">Show/Hide Code</button>
<button onclick="copyPreCode()">Copy Code</button>
<pre id="code13" style="display:none;">
&lt;form action="/submit_form" method="post"&gt;
  &lt;label for="fname"&gt;First Name:&lt;/label&gt;
  &lt;input type="text" id="fname" name="fname"&gt;&lt;br&gt;
  &lt;input type="submit" value="Submit"&gt;
&lt;/form&gt;
</pre>

<h3>📌 Key HTML Form Elements</h3>
<ul>
    <li><input type="checkbox" /> <code>&lt;form&gt;</code> - Defines the form</li>
    <li><input type="checkbox" /> <code>&lt;label&gt;</code> - Defines a label for an input element</li>
    <li><input type="checkbox" /> <code>&lt;input&gt;</code> - Defines an input field</li>
    <li><input type="checkbox" /> <code>&lt;textarea&gt;</code> - Defines a multiline text input</li>
    <li><input type="checkbox" /> <code>&lt;button&gt;</code> - Defines a clickable button</li>
</ul>

<h3>🧠 Example of HTML Form</h3>
<table>
    <thead>
        <tr>
            <th>Tag</th>
            <th>Description</th>
            <th>Try</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td><code>&lt;form&gt;</code></td>
            <td>Defines a form</td>
            <td><button onclick="tryIt(`&lt;form action='/submit_form' method='post'&gt;&lt;input type='text' id='fname' name='fname' /&gt;&lt;input type='submit' value='Submit' /&gt;&lt;/form&gt;`)">Try</button></td>
        </tr>
    </tbody>
</table>

<h3>🧪 Live Output</h3>
<textarea id="editor" rows="6" style="width:100%;"></textarea>
<br/>
<button onclick="runCode()">Run Code</button>
<iframe id="resultFrame" style="width:100%; height:200px; border:1px solid #ccc;"></iframe>

<h3>🔄 Code Copy</h3>
<button onclick="copyCode()">Copy Code</button>
<input type="text" id="codeToCopy" readonly />

<h2 id="images">📘 HTML Images</h2>
<p>
    HTML images are used to embed images on a web page. The <code>&lt;img&gt;</code> tag is used to embed images.
</p>

<h3>📂 Basic HTML Image</h3>
<button onclick="toggleCode('code14')">Show/Hide Code</button>
<button onclick="copyPreCode()">Copy Code</button>
<pre id="code14" style="display:none;">
&lt;img src="image.jpg" alt="Description"&gt;
</pre>

<h3>📌 Key HTML Image Attributes</h3>
<ul>
    <li><input type="checkbox" /> <code>src</code> - Specifies the source of the image</li>
    <li><input type="checkbox" /> <code>alt</code> - Specifies an alternative text for the image if it cannot be displayed</li>
    <li><input type="checkbox" /> <code>width</code> - Specifies the width of the image</li>
    <li><input type="checkbox" /> <code>height</code> - Specifies the height of the image</li>
</ul>

<h3>🧠 Example of HTML Image</h3>
<table>
    <thead>
        <tr>
            <th>Tag</th>
            <th>Description</th>
            <th>Try</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td><code>&lt;img&gt;</code></td>
            <td>Defines an image</td>
            <td><button onclick="tryIt(`&lt;img src='image.jpg' alt='Image Description' width='200' height='200' /&gt;`)">Try</button></td>
        </tr>
    </tbody>
</table>

<h3>🧪 Live Output</h3>
<textarea id="editor" rows="6" style="width:100%;"></textarea>
<br/>
<button onclick="runCode()">Run Code</button>
<iframe id="resultFrame" style="width:100%; height:200px; border:1px solid #ccc;"></iframe>

<h3>🔄 Code Copy</h3>
<button onclick="copyCode()">Copy Code</button>
<input type="text" id="codeToCopy" readonly />

<h2 id="lists">📘 HTML Lists</h2>
<p>
    HTML lists are used to group related items in a specific order or unordered. The two main types of lists are ordered and unordered lists.
</p>

<h3>📂 Basic HTML List</h3>
<button onclick="toggleCode('code15')">Show/Hide Code</button>
<button onclick="copyPreCode()">Copy Code</button>
<pre id="code15" style="display:none;">
&lt;ul&gt;
  &lt;li&gt;Item 1&lt;/li&gt;
  &lt;li&gt;Item 2&lt;/li&gt;
  &lt;li&gt;Item 3&lt;/li&gt;
&lt;/ul&gt;
</pre>

<h3>📌 Key HTML List Elements</h3>
<ul>
    <li><input type="checkbox" /> <code>&lt;ul&gt;</code> - Defines an unordered list</li>
    <li><input type="checkbox" /> <code>&lt;ol&gt;</code> - Defines an ordered list</li>
    <li><input type="checkbox" /> <code>&lt;li&gt;</code> - Defines a list item</li>
</ul>

<h3>🧠 Example of HTML Lists</h3>
<table>
    <thead>
        <tr>
            <th>Tag</th>
            <th>Description</th>
            <th>Try</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td><code>&lt;ul&gt;</code></td>
            <td>Defines an unordered list</td>
            <td><button onclick="tryIt(`&lt;ul&gt;&lt;li&gt;Item 1&lt;/li&gt;&lt;li&gt;Item 2&lt;/li&gt;&lt;/ul&gt;`)">Try</button></td>
        </tr>
    </tbody>
</table>

<h3>🧪 Live Output</h3>
<textarea id="editor" rows="6" style="width:100%;"></textarea>
<br/>
<button onclick="runCode()">Run Code</button>
<iframe id="resultFrame" style="width:100%; height:200px; border:1px solid #ccc;"></iframe>

<h3>🔄 Code Copy</h3>
<button onclick="copyCode()">Copy Code</button>
<input type="text" id="codeToCopy" readonly />

<h2 id="tables">📘 HTML Tables</h2>
<p>
    HTML tables are used to display data in a tabular format. The <code>&lt;table&gt;</code> element is used to define a table.
</p>

<h3>📂 Basic HTML Table</h3>
<button onclick="toggleCode('code16')">Show/Hide Code</button>
<button onclick="copyPreCode()">Copy Code</button>
<pre id="code16" style="display:none;">
&lt;table border="1"&gt;
  &lt;tr&gt;
    &lt;th&gt;Name&lt;/th&gt;
    &lt;th&gt;Age&lt;/th&gt;
  &lt;/tr&gt;
  &lt;tr&gt;
    &lt;td&gt;John&lt;/td&gt;
    &lt;td&gt;30&lt;/td&gt;
  &lt;/tr&gt;
&lt;/table&gt;
</pre>

<h3>📌 Key HTML Table Elements</h3>
<ul>
    <li><input type="checkbox" /> <code>&lt;table&gt;</code> - Defines the table</li>
    <li><input type="checkbox" /> <code>&lt;tr&gt;</code> - Defines a table row</li>
    <li><input type="checkbox" /> <code>&lt;th&gt;</code> - Defines a table header cell</li>
    <li><input type="checkbox" /> <code>&lt;td&gt;</code> - Defines a table data cell</li>
</ul>

<h3>🧠 Example of HTML Table</h3>
<table>
    <thead>
        <tr>
            <th>Tag</th>
            <th>Description</th>
            <th>Try</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td><code>&lt;table&gt;</code></td>
            <td>Defines a table</td>
            <td><button onclick="tryIt(`&lt;table border='1'&gt;&lt;tr&gt;&lt;th&gt;Name&lt;/th&gt;&lt;th&gt;Age&lt;/th&gt;&lt;/tr&gt;&lt;tr&gt;&lt;td&gt;John&lt;/td&gt;&lt;td&gt;30&lt;/td&gt;&lt;/tr&gt;&lt;/table&gt;`)">Try</button></td>
        </tr>
    </tbody>
</table>

<h3>🧪 Live Output</h3>
<textarea id="editor" rows="6" style="width:100%;"></textarea>
<br/>
<button onclick="runCode()">Run Code</button>
<iframe id="resultFrame" style="width:100%; height:200px; border:1px solid #ccc;"></iframe>

<h3>🔄 Code Copy</h3>
<button onclick="copyCode()">Copy Code</button>
<input type="text" id="codeToCopy" readonly />

<h2 id="links">📘 HTML Links</h2>
<p>
    HTML links are used to link one page to another. The <code>&lt;a&gt;</code> element is used to define a hyperlink.
</p>

<h3>📂 Basic HTML Link</h3>
<button onclick="toggleCode('code17')">Show/Hide Code</button>
<button onclick="copyPreCode()">Copy Code</button>
<pre id="code17" style="display:none;">
&lt;a href="https://www.example.com"&gt;Visit Example&lt;/a&gt;
</pre>

<h3>📌 Key HTML Link Attributes</h3>
<ul>
    <li><input type="checkbox" /> <code>href</code> - Specifies the URL of the page the link goes to</li>
    <li><input type="checkbox" /> <code>target</code> - Specifies where to open the linked document</li>
    <li><input type="checkbox" /> <code>title</code> - Specifies extra information about the link (appears as a tooltip)</li>
</ul>

<h3>🧠 Example of HTML Link</h3>
<table>
    <thead>
        <tr>
            <th>Tag</th>
            <th>Description</th>
            <th>Try</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td><code>&lt;a&gt;</code></td>
            <td>Defines a link</td>
            <td><button onclick="tryIt(`&lt;a href='https://www.example.com' target='_blank'&gt;Click Here&lt;/a&gt;`)">Try</button></td>
        </tr>
    </tbody>
</table>

<h3>🧪 Live Output</h3>
<textarea id="editor" rows="6" style="width:100%;"></textarea>
<br/>
<button onclick="runCode()">Run Code</button>
<iframe id="resultFrame" style="width:100%; height:200px; border:1px solid #ccc;"></iframe>

<h3>🔄 Code Copy</h3>
<button onclick="copyCode()">Copy Code</button>
<input type="text" id="codeToCopy" readonly />

<h2 id="media">📘 HTML Video</h2>
<p>
    HTML video is used to embed videos on a webpage. The <code>&lt;video&gt;</code> tag is used to define a video.
</p>

<h3>📂 Basic HTML Video</h3>
<button onclick="toggleCode('code18')">Show/Hide Code</button>
<button onclick="copyPreCode()">Copy Code</button>
<pre id="code18" style="display:none;">
&lt;video controls&gt;
  &lt;source src="movie.mp4" type="video/mp4"&gt;
  Your browser does not support the video tag.
&lt;/video&gt;
</pre>

<h3>📌 Key HTML Video Attributes</h3>
<ul>
    <li><input type="checkbox" /> <code>controls</code> - Specifies that video controls (play, pause, etc.) should be displayed</li>
    <li><input type="checkbox" /> <code>src</code> - Specifies the path to the video file</li>
    <li><input type="checkbox" /> <code>width</code> - Specifies the width of the video player</li>
    <li><input type="checkbox" /> <code>height</code> - Specifies the height of the video player</li>
</ul>

<h3>🧠 Example of HTML Video</h3>
<table>
    <thead>
        <tr>
            <th>Tag</th>
            <th>Description</th>
            <th>Try</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td><code>&lt;video&gt;</code></td>
            <td>Defines a video</td>
            <td><button onclick="tryIt(`&lt;video controls&gt;&lt;source src='movie.mp4' type='video/mp4' /&gt;Your browser does not support the video tag.&lt;/video&gt;`)">Try</button></td>
        </tr>
    </tbody>
</table>

<h3>🧪 Live Output</h3>
<textarea id="editor" rows="6" style="width:100%;"></textarea>
<br/>
<button onclick="runCode()">Run Code</button>
<iframe id="resultFrame" style="width:100%; height:200px; border:1px solid #ccc;"></iframe>

<h3>🔄 Code Copy</h3>
<button onclick="copyCode()">Copy Code</button>
<input type="text" id="codeToCopy" readonly />

<h2 id="input-types">📘 HTML Input Types</h2>
<p>
    HTML provides various input types for different kinds of user input. These input types enhance user experience and improve form functionality.
</p>

<h3>📂 Common HTML Input Types</h3>
<button onclick="toggleCode('code19')">Show/Hide Code</button>
<button onclick="copyPreCode()">Copy Code</button>
<pre id="code19" style="display:none;">
&lt;form&gt;
  Text: &lt;input type="text" name="name"&gt;&lt;br&gt;
  Password: &lt;input type="password" name="password"&gt;&lt;br&gt;
  Email: &lt;input type="email" name="email"&gt;&lt;br&gt;
  Number: &lt;input type="number" name="age"&gt;&lt;br&gt;
  Date: &lt;input type="date" name="dob"&gt;&lt;br&gt;
  File: &lt;input type="file" name="resume"&gt;&lt;br&gt;
  Checkbox: &lt;input type="checkbox" name="subscribe"&gt; Subscribe&lt;br&gt;
  Radio: &lt;input type="radio" name="gender" value="male"&gt; Male
         &lt;input type="radio" name="gender" value="female"&gt; Female&lt;br&gt;
  Submit: &lt;input type="submit" value="Submit"&gt;
&lt;/form&gt;
</pre>

<h3>📌 Important Input Types</h3>
<ul>
    <li><input type="checkbox" /> <code>text</code> - Single-line input</li>
    <li><input type="checkbox" /> <code>password</code> - Hides user input</li>
    <li><input type="checkbox" /> <code>email</code> - Validates email format</li>
    <li><input type="checkbox" /> <code>number</code> - Numeric input with arrows</li>
    <li><input type="checkbox" /> <code>date</code> - Date picker input</li>
    <li><input type="checkbox" /> <code>file</code> - File upload field</li>
    <li><input type="checkbox" /> <code>checkbox</code> - Toggle option</li>
    <li><input type="checkbox" /> <code>radio</code> - Select one from multiple options</li>
    <li><input type="checkbox" /> <code>submit</code> - Submit button</li>
</ul>

<h3>🧠 Example of HTML Input Types</h3>
<table>
    <thead>
        <tr>
            <th>Input Type</th>
            <th>Description</th>
            <th>Try</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td><code>text</code></td>
            <td>Single-line text input</td>
            <td><button onclick="tryIt(`&lt;input type='text' placeholder='Your Name' /&gt;`)">Try</button></td>
        </tr>
        <tr>
            <td><code>email</code></td>
            <td>Email address input</td>
            <td><button onclick="tryIt(`&lt;input type='email' placeholder='name@example.com' /&gt;`)">Try</button></td>
        </tr>
        <tr>
            <td><code>date</code></td>
            <td>Date picker</td>
            <td><button onclick="tryIt(`&lt;input type='date' /&gt;`)">Try</button></td>
        </tr>
        <tr>
            <td><code>file</code></td>
            <td>Upload a file</td>
            <td><button onclick="tryIt(`&lt;input type='file' /&gt;`)">Try</button></td>
        </tr>
    </tbody>
</table>

<h3>🧪 Live Output</h3>
<textarea id="editor" rows="6" style="width:100%;"></textarea>
<br/>
<button onclick="runCode()">Run Code</button>
<iframe id="resultFrame" style="width:100%; height:200px; border:1px solid #ccc;"></iframe>

<h3>🔄 Code Copy</h3>
<button onclick="copyCode()">Copy Code</button>
<input type="text" id="codeToCopy" readonly />
<h2 id="iframes">🖼️ HTML Iframes</h2>
<p>The <code>&lt;iframe&gt;</code> tag is used to embed another document within the current HTML document.</p>

<div class="note">
    <strong>Note:</strong> Iframes can display other websites or documents, but some sites may block being shown in iframes due to security policies.
</div>

<h3>📂 Basic Iframe Example</h3>
<button onclick="toggleCode('code5')">Show/Hide Code</button>
<button onclick="copyPreCode()">Copy Code</button>
<pre id="code5" style="display:none;">
&lt;iframe src="https://example.com" width="300" height="200"&gt;&lt;/iframe&gt;
</pre>

<h3>🧠 Try It</h3>
<table>
    <tr>
        <td><code>&lt;iframe&gt;</code></td>
        <td>Embeds external content</td>
        <td><button onclick="tryIt(`&lt;iframe src='https://example.com' width='300' height='200'&gt;&lt;/iframe&gt;`)">Try</button></td>
    </tr>
</table>

<h2 id="block-inline">📏 Block vs Inline Elements</h2>
<p>Block elements take up the full width available, while inline elements only take up as much width as necessary.</p>

<div class="note">
    <strong>Note:</strong> Common block elements include <code>&lt;div&gt;</code>, <code>&lt;p&gt;</code>; inline elements include <code>&lt;span&gt;</code>, <code>&lt;a&gt;</code>.
</div>

<h3>📂 Example</h3>
<button onclick="toggleCode('code6')">Show/Hide Code</button>
<button onclick="copyPreCode()">Copy Code</button>
<pre id="code6" style="display:none;">
&lt;div&gt;This is a block element&lt;/div&gt;
&lt;span&gt;This is an inline element&lt;/span&gt;
</pre>

<h3>🧠 Try It</h3>
<table>
    <tr>
        <td><code>&lt;div&gt;</code></td>
        <td>Block element</td>
        <td><button onclick="tryIt(`&lt;div&gt;Block Element&lt;/div&gt;`)">Try</button></td>
    </tr>
    <tr>
        <td><code>&lt;span&gt;</code></td>
        <td>Inline element</td>
        <td><button onclick="tryIt(`&lt;span&gt;Inline Element&lt;/span&gt;`)">Try</button></td>
    </tr>
</table>
<h2 id="div-span">🔲 HTML div & span</h2>
<p>The <code>&lt;div&gt;</code> tag is used for block-level grouping, while <code>&lt;span&gt;</code> is used for inline grouping of content.</p>

<div class="note">
    <strong>Note:</strong> These tags are commonly used with CSS for layout and styling.
</div>

<h3>📂 Example</h3>
<button onclick="toggleCode('code7')">Show/Hide Code</button>
<button onclick="copyPreCode()">Copy Code</button>
<pre id="code7" style="display:none;">
&lt;div style="background:lightblue;"&gt;
  &lt;span style="color:red;"&gt;Hello&lt;/span&gt; world!
&lt;/div&gt;
</pre>

<h3>🧠 Try It</h3>
<table>
    <tr>
        <td><code>&lt;div&gt;</code></td>
        <td>Block-level container</td>
        <td><button onclick="tryIt(`&lt;div&gt;Block&lt;/div&gt;`)">Try</button></td>
    </tr>
    <tr>
        <td><code>&lt;span&gt;</code></td>
        <td>Inline container</td>
        <td><button onclick="tryIt(`&lt;span&gt;Inline&lt;/span&gt;`)">Try</button></td>
    </tr>
</table>
<h2 id="semantics">🔤 HTML Semantics</h2>
<p>Semantic HTML introduces meaning to web pages by using tags like <code>&lt;header&gt;</code>, <code>&lt;footer&gt;</code>, <code>&lt;article&gt;</code>, etc.</p>

<div class="note">
    <strong>Note:</strong> Semantic tags improve accessibility and SEO.
</div>

<h3>📂 Semantic Example</h3>
<button onclick="toggleCode('code8')">Show/Hide Code</button>
<button onclick="copyPreCode()">Copy Code</button>
<pre id="code8" style="display:none;">
&lt;header&gt;Site Header&lt;/header&gt;
&lt;main&gt;Main Content&lt;/main&gt;
&lt;footer&gt;Site Footer&lt;/footer&gt;
</pre>

<h3>🧠 Try It</h3>
<table>
    <tr>
        <td><code>&lt;article&gt;</code></td>
        <td>Content block</td>
        <td><button onclick="tryIt(`&lt;article&gt;News&lt;/article&gt;`)">Try</button></td>
    </tr>
    <tr>
        <td><code>&lt;nav&gt;</code></td>
        <td>Navigation links</td>
        <td><button onclick="tryIt(`&lt;nav&gt;Menu&lt;/nav&gt;`)">Try</button></td>
    </tr>
</table>
<h2 id="html5">🚀 HTML5 New Elements</h2>
<p>HTML5 introduced new elements like <code>&lt;section&gt;</code>, <code>&lt;article&gt;</code>, <code>&lt;aside&gt;</code>, <code>&lt;main&gt;</code>.</p>

<div class="note">
    <strong>Note:</strong> These tags improve document structure and readability.
</div>

<h3>📂 Example</h3>
<button onclick="toggleCode('code9')">Show/Hide Code</button>
<button onclick="copyPreCode()">Copy Code</button>
<pre id="code9" style="display:none;">
&lt;section&gt;
  &lt;h2&gt;News&lt;/h2&gt;
  &lt;article&gt;Latest update!&lt;/article&gt;
&lt;/section&gt;
</pre>

<h3>🧠 Try It</h3>
<table>
    <tr>
        <td><code>&lt;section&gt;</code></td>
        <td>Defines a section</td>
        <td><button onclick="tryIt(`&lt;section&gt;Section Content&lt;/section&gt;`)">Try</button></td>
    </tr>
    <tr>
        <td><code>&lt;main&gt;</code></td>
        <td>Main content</td>
        <td><button onclick="tryIt(`&lt;main&gt;Main Content&lt;/main&gt;`)">Try</button></td>
    </tr>
</table>

<h2 id="meta">📌 HTML Meta Tags</h2>
<p>The <code>&lt;meta&gt;</code> tag provides metadata about the HTML document, such as character set, author, and viewport settings.</p>

<div class="note">
    <strong>Note:</strong> Meta tags go inside the <code>&lt;head&gt;</code> section.
</div>

<h3>📂 Meta Example</h3>
<button onclick="toggleCode('code10')">Show/Hide Code</button>
<button onclick="copyPreCode()">Copy Code</button>
<pre id="code10" style="display:none;">
&lt;meta charset="UTF-8"&gt;
&lt;meta name="description" content="Learn HTML"&gt;
&lt;meta name="viewport" content="width=device-width, initial-scale=1.0"&gt;
</pre>

<h2 id="entities">🔠 HTML Entities</h2>
<p>Entities are used to display reserved characters in HTML like <code>&lt;</code>, <code>&gt;</code>, and non-breaking spaces.</p>

<div class="note">
    <strong>Note:</strong> They start with <code>&amp;</code> and end with <code>;</code>
</div>

<h3>📂 Example</h3>
<button onclick="toggleCode('code11')">Show/Hide Code</button>
<button onclick="copyPreCode()">Copy Code</button>
<pre id="code11" style="display:none;">
&lt;p&gt;10 &amp;lt; 20&lt;/p&gt;
&lt;p&gt;Use &amp;nbsp; for space&lt;/p&gt;
</pre>
<h2 id="comments">📝 HTML Comments</h2>
<p>Comments are not displayed in the browser and are used to leave notes in the code.</p>

<div class="note">
    <strong>Note:</strong> Comments are written using <code>&lt;!-- comment --&gt;</code>
</div>

<h3>📂 Example</h3>
<button onclick="toggleCode('code12')">Show/Hide Code</button>
<button onclick="copyPreCode()">Copy Code</button>
<pre id="code12" style="display:none;">
&lt;!-- This is a comment --&gt;
&lt;p&gt;Visible content&lt;/p&gt;
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
