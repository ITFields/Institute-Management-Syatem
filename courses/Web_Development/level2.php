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
  <li><a href="#css-intro">Introduction to CSS</a></li>
  <li><a href="#css-syntax">CSS Syntax</a></li>
  <li><a href="#css-selectors">CSS Selectors</a></li>
  <li><a href="#css-comments">CSS Comments</a></li>
  <li><a href="#css-color">CSS Colors</a></li>
  <li><a href="#css-backgrounds">CSS Backgrounds</a></li>
  <li><a href="#css-borders">CSS Borders</a></li>
  <li><a href="#css-margins">CSS Margins</a></li>
  <li><a href="#css-padding">CSS Padding</a></li>
  <li><a href="#css-height-width">CSS Height & Width</a></li>
  <li><a href="#css-box-model">CSS Box Model</a></li>
  <li><a href="#css-text">CSS Text</a></li>
  <li><a href="#css-fonts">CSS Fonts</a></li>
  <li><a href="#css-icons">CSS Icons</a></li>
  <li><a href="#css-links">CSS Links</a></li>
  <li><a href="#css-lists">CSS Lists</a></li>
  <li><a href="#css-tables">CSS Tables</a></li>
  <li><a href="#css-position">CSS Position</a></li>
  <li><a href="#css-zindex">CSS z-index</a></li>
  <li><a href="#css-overflow">CSS Overflow</a></li>
  <li><a href="#css-float">CSS Float</a></li>
  <li><a href="#css-display">CSS Display</a></li>
  <li><a href="#css-visibility">CSS Visibility</a></li>
  <li><a href="#css-opacity">CSS Opacity</a></li>
  <li><a href="#css-units">CSS Units (px, em, rem, %)</a></li>
  <li><a href="#css-calc">CSS calc()</a></li>
  <li><a href="#css-variables">CSS Variables</a></li>
  <li><a href="#css-mediaqueries">CSS Media Queries</a></li>
  <li><a href="#css-flexbox">CSS Flexbox</a></li>
  <li><a href="#css-grid">CSS Grid</a></li>
  <li><a href="#css-align">CSS Alignment</a></li>
  <li><a href="#css-transitions">CSS Transitions</a></li>
  <li><a href="#css-transform">CSS Transform</a></li>
  <li><a href="#css-animations">CSS Animations</a></li>
  <li><a href="#css-pseudo-classes">CSS Pseudo-classes</a></li>
  <li><a href="#css-pseudo-elements">CSS Pseudo-elements</a></li>
  <li><a href="#css-important">CSS !important</a></li>
  <li><a href="#css-bestpractices">CSS Best Practices</a></li>
</ul>

<div class="content">
<h2 id="css-intro">🎨 Introduction to CSS</h2>
<p>CSS (Cascading Style Sheets) is used to style and layout web pages — for example, to alter the font, color, size, and spacing of your content, split it into multiple columns, or add animations and other decorative features.</p>

<div class="note">
  <strong>Note:</strong> CSS enhances the appearance of HTML elements and allows for responsive designs across various devices.
</div>

<h3>📂 Example</h3>
<button onclick="toggleCode('code1')">Show/Hide Code</button>
<button onclick="copyPreCode()">Copy Code</button>
<pre id="code1" style="display:none;">
&lt;!DOCTYPE html&gt;
&lt;html&gt;
&lt;head&gt;
  &lt;style&gt;
    body {
      background-color: lightblue;
    }
    h1 {
      color: navy;
      margin-left: 20px;
    }
  &lt;/style&gt;
&lt;/head&gt;
&lt;body&gt;

&lt;h1&gt;Hello World!&lt;/h1&gt;

&lt;/body&gt;
&lt;/html&gt;
</pre>

<h3>🧠 Try It</h3>
<table>
  <tr>
    <td><code>&lt;style&gt;</code></td>
    <td>Defines CSS styles within HTML</td>
    <td><button onclick="tryIt(`&lt;style&gt;body { background-color: lightblue; }&lt;/style&gt;`)">Try</button></td>
  </tr>
</table>

<h2 id="css-syntax">📝 CSS Syntax</h2>
<p>CSS syntax consists of a selector and a declaration block. The selector points to the HTML element you want to style. The declaration block contains one or more declarations separated by semicolons.</p>

<div class="note">
  <strong>Note:</strong> Each declaration includes a CSS property name and a value, separated by a colon.
</div>

<h3>📂 Example</h3>
<button onclick="toggleCode('code2')">Show/Hide Code</button>
<button onclick="copyPreCode()">Copy Code</button>
<pre id="code2" style="display:none;">
p {
  color: red;
  text-align: center;
}
</pre>

<h3>🧠 Try It</h3>
<table>
  <tr>
    <td><code>p</code></td>
    <td>Selector for paragraph elements</td>
    <td><button onclick="tryIt(`p { color: red; text-align: center; }`)">Try</button></td>
  </tr>
</table>

<h2 id="css-selectors">🔍 CSS Selectors</h2>
<p>CSS selectors are used to "find" (or select) the HTML elements you want to style. We can divide CSS selectors into five categories: Simple selectors, Combinator selectors, Pseudo-class selectors, Pseudo-elements selectors, and Attribute selectors.</p>

<div class="note">
  <strong>Note:</strong> Understanding selectors is crucial for applying styles effectively.
</div>

<h3>📂 Example</h3>
<button onclick="toggleCode('code3')">Show/Hide Code</button>
<button onclick="copyPreCode()">Copy Code</button>
<pre id="code3" style="display:none;">
/* Selects all elements with class="intro" */
.intro {
  background-color: yellow;
}

/* Selects the element with id="main" */
#main {
  border: 1px solid black;
}
</pre>

<h3>🧠 Try It</h3>
<table>
  <tr>
    <td><code>.intro</code></td>
    <td>Class selector</td>
    <td><button onclick="tryIt(`.intro { background-color: yellow; }`)">Try</button></td>
  </tr>
  <tr>
    <td><code>#main</code></td>
    <td>ID selector</td>
    <td><button onclick="tryIt(`#main { border: 1px solid black; }`)">Try</button></td>
  </tr>
</table>

<h2 id="css-comments">💬 CSS Comments</h2>
<p>Comments are used to explain the code and may help when you edit the source code at a later date. Comments are ignored by browsers.</p>

<div class="note">
  <strong>Note:</strong> A CSS comment is placed inside the <code>&lt;style&gt;</code> element and starts with <code>/*</code> and ends with <code>*/</code>.
</div>

<h3>📂 Example</h3>
<button onclick="toggleCode('code4')">Show/Hide Code</button>
<button onclick="copyPreCode()">Copy Code</button>
<pre id="code4" style="display:none;">
/* This is a single-line comment */
p {
  color: red;
}

/*
This is a
multi-line comment
*/
h1 {
  color: blue;
}
</pre>

<h3>🧠 Try It</h3>
<table>
  <tr>
    <td><code>/* comment */</code></td>
    <td>CSS Comment Syntax</td>
    <td><button onclick="tryIt(`/* This is a comment */`)">Try</button></td>
  </tr>
</table>

<h2 id="css-color">🌈 CSS Colors</h2>
<p>CSS colors are used to define the color of HTML elements. You can specify colors by name, HEX, RGB, RGBA, HSL, and HSLA values.</p>

<div class="note">
  <strong>Note:</strong> Using RGBA or HSLA allows you to set the opacity of the color too.
</div>

<h3>📂 Example</h3>
<button onclick="toggleCode('code5')">Show/Hide Code</button>
<button onclick="copyPreCode()">Copy Code</button>
<pre id="code5" style="display:none;">
h1 {
  color: red;
}
p {
  color: #00ff00;
}
div {
  color: rgb(0, 0, 255);
}
</pre>

<h3>🧠 Try It</h3>
<table>
  <tr>
    <td><code>color: red;</code></td>
    <td>Named color</td>
    <td><button onclick="tryIt(`h1 { color: red; }`)">Try</button></td>
  </tr>
  <tr>
    <td><code>color: #00ff00;</code></td>
    <td>Hex color</td>
    <td><button onclick="tryIt(`p { color: #00ff00; }`)">Try</button></td>
  </tr>
  <tr>
    <td><code>color: rgb(0, 0, 255);</code></td>
    <td>RGB color</td>
    <td><button onclick="tryIt(`div { color: rgb(0, 0, 255); }`)">Try</button></td>
  </tr>
</table>

<h2 id="css-backgrounds">🖼️ CSS Backgrounds</h2>
<p>CSS background properties are used to define background effects for elements. You can set color, image, position, repeat, and more.</p>

<div class="note">
  <strong>Note:</strong> Combine properties using <code>background</code> shorthand.
</div>

<h3>📂 Example</h3>
<button onclick="toggleCode('code6')">Show/Hide Code</button>
<button onclick="copyPreCode()">Copy Code</button>
<pre id="code6" style="display:none;">
body {
  background-color: lightblue;
}

div {
  background-image: url('bg.jpg');
  background-repeat: no-repeat;
  background-position: right top;
}
</pre>

<h3>🧠 Try It</h3>
<table>
  <tr>
    <td><code>background-color</code></td>
    <td>Sets background color</td>
    <td><button onclick="tryIt(`body { background-color: lightblue; }`)">Try</button></td>
  </tr>
  <tr>
    <td><code>background-image</code></td>
    <td>Sets a background image</td>
    <td><button onclick="tryIt(`div { background-image: url('bg.jpg'); }`)">Try</button></td>
  </tr>
</table>

<h2 id="css-borders">📏 CSS Borders</h2>
<p>CSS borders are used to add borders around elements. You can set border style, width, and color individually or with shorthand.</p>

<div class="note">
  <strong>Note:</strong> Border styles include: solid, dotted, dashed, double, groove, ridge, inset, outset, none, hidden.
</div>

<h3>📂 Example</h3>
<button onclick="toggleCode('code7')">Show/Hide Code</button>
<button onclick="copyPreCode()">Copy Code</button>
<pre id="code7" style="display:none;">
p {
  border: 2px solid red;
}

div {
  border: 5px dashed green;
}
</pre>

<h3>🧠 Try It</h3>
<table>
  <tr>
    <td><code>border</code></td>
    <td>Shorthand for width, style, color</td>
    <td><button onclick="tryIt(`p { border: 2px solid red; }`)">Try</button></td>
  </tr>
  <tr>
    <td><code>border-style</code></td>
    <td>Sets the line style</td>
    <td><button onclick="tryIt(`div { border-style: dashed; }`)">Try</button></td>
  </tr>
</table>

<h2 id="css-margins">📐 CSS Margins</h2>
<p>CSS margin properties are used to create space around elements, outside of any defined borders.</p>

<div class="note">
  <strong>Tip:</strong> Use margin shorthand to set top, right, bottom, and left margins in one line.
</div>

<h3>📂 Example</h3>
<button onclick="toggleCode('code8')">Show/Hide Code</button>
<button onclick="copyPreCode()">Copy Code</button>
<pre id="code8" style="display:none;">
div {
  margin-top: 50px;
  margin-bottom: 20px;
  margin-left: 30px;
  margin-right: 30px;
}

/* Shorthand */
p {
  margin: 20px 30px 10px 40px; /* top right bottom left */
}
</pre>

<h3>🧠 Try It</h3>
<table>
  <tr>
    <td><code>margin: 20px;</code></td>
    <td>Sets margin on all sides</td>
    <td><button onclick="tryIt(`p { margin: 20px; }`)">Try</button></td>
  </tr>
</table>
<h2 id="css-padding">🧊 CSS Padding</h2>
<p>Padding is the space between the content of an element and its border. It helps to push the content inward.</p>

<div class="note">
  <strong>Tip:</strong> Like margin, padding also accepts shorthand for all four sides.
</div>

<h3>📂 Example</h3>
<button onclick="toggleCode('code9')">Show/Hide Code</button>
<button onclick="copyPreCode()">Copy Code</button>
<pre id="code9" style="display:none;">
div {
  padding-top: 20px;
  padding-right: 30px;
  padding-bottom: 20px;
  padding-left: 30px;
}

/* Shorthand */
p {
  padding: 10px 20px 15px 5px;
}
</pre>

<h3>🧠 Try It</h3>
<table>
  <tr>
    <td><code>padding: 20px;</code></td>
    <td>All sides equal</td>
    <td><button onclick="tryIt(`div { padding: 20px; }`)">Try</button></td>
  </tr>
</table>

<h2 id="css-height-width">📏 CSS Height & Width</h2>
<p>Height and width define the size of an element. You can use values in px, %, em, vh, etc.</p>

<div class="note">
  <strong>Tip:</strong> Use <code>max-width</code> and <code>min-width</code> for responsive layouts.
</div>

<h3>📂 Example</h3>
<button onclick="toggleCode('code10')">Show/Hide Code</button>
<button onclick="copyPreCode()">Copy Code</button>
<pre id="code10" style="display:none;">
div {
  width: 300px;
  height: 150px;
  background-color: lightgreen;
}

img {
  max-width: 100%;
  height: auto;
}
</pre>

<h3>🧠 Try It</h3>
<table>
  <tr>
    <td><code>width: 300px;</code></td>
    <td>Fixed width</td>
    <td><button onclick="tryIt(`div { width: 300px; }`)">Try</button></td>
  </tr>
</table><h2 id="css-box-model">📦 CSS Box Model</h2>
<p>Box Model = Content + Padding + Border + Margin. It defines how the size of an element is calculated.</p>

<div class="note">
  <strong>Note:</strong> Use <code>box-sizing: border-box;</code> to include padding and border in total width and height.
</div>

<h3>📂 Example</h3>
<button onclick="toggleCode('code11')">Show/Hide Code</button>
<button onclick="copyPreCode()">Copy Code</button>
<pre id="code11" style="display:none;">
div {
  width: 200px;
  padding: 20px;
  border: 5px solid black;
  margin: 10px;
  box-sizing: border-box;
}
</pre>

<h3>🧠 Try It</h3>
<table>
  <tr>
    <td><code>box-sizing: border-box;</code></td>
    <td>Includes padding & border</td>
    <td><button onclick="tryIt(`div { box-sizing: border-box; }`)">Try</button></td>
  </tr>
</table>

<h2 id="css-text">📝 CSS Text</h2>
<p>Text properties control the appearance of text like alignment, decoration, spacing, transformation, etc.</p>

<div class="note">
  <strong>Note:</strong> Combine text properties for cool effects.
</div>

<h3>📂 Example</h3>
<button onclick="toggleCode('code12')">Show/Hide Code</button>
<button onclick="copyPreCode()">Copy Code</button>
<pre id="code12" style="display:none;">
h1 {
  text-align: center;
  text-transform: uppercase;
  text-decoration: underline;
  letter-spacing: 2px;
  color: darkblue;
}
</pre>

<h3>🧠 Try It</h3>
<table>
  <tr>
    <td><code>text-align: center;</code></td>
    <td>Centers the text</td>
    <td><button onclick="tryIt(`h1 { text-align: center; }`)">Try</button></td>
  </tr>
</table>
<h2 id="css-fonts">🔤 CSS Fonts</h2>
<p>CSS lets you style fonts using font-family, size, weight, style, and more.</p>

<div class="note">
  <strong>Tip:</strong> Always include fallback fonts in the stack.
</div>

<h3>📂 Example</h3>
<button onclick="toggleCode('code13')">Show/Hide Code</button>
<button onclick="copyPreCode()">Copy Code</button>
<pre id="code13" style="display:none;">
p {
  font-family: 'Arial', sans-serif;
  font-size: 16px;
  font-weight: bold;
  font-style: italic;
}
</pre>

<h3>🧠 Try It</h3>
<table>
  <tr>
    <td><code>font-family: 'Arial', sans-serif;</code></td>
    <td>Uses Arial font</td>
    <td><button onclick="tryIt(`p { font-family: 'Arial', sans-serif; }`)">Try</button></td>
  </tr>
</table>
<h2 id="css-icons">🌟 CSS Icons</h2>
<p>You can use icon libraries like Font Awesome or Bootstrap Icons to add scalable icons via CSS.</p>

<div class="note">
  <strong>Tip:</strong> Include the CDN in your HTML head to access icon fonts.
</div>

<h3>📂 Example</h3>
<button onclick="toggleCode('code14')">Show/Hide Code</button>
<button onclick="copyPreCode()">Copy Code</button>
<pre id="code14" style="display:none;">
<!-- Example using Font Awesome -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
<i class="fas fa-home"></i>
</pre>

<h3>🧠 Try It</h3>
<table>
  <tr>
    <td><code>&lt;i class="fas fa-user"&gt;&lt;/i&gt;</code></td>
    <td>User icon</td>
    <td><button onclick="tryIt(`<i class='fas fa-user'></i>`)">Try</button></td>
  </tr>
</table>
<h2 id="css-links">🔗 CSS Links</h2>
<p>Links can be styled in different states like normal, hover, visited, and active.</p>

<div class="note">
  <strong>Tip:</strong> Always define hover effect for a better UX.
</div>

<h3>📂 Example</h3>
<button onclick="toggleCode('code15')">Show/Hide Code</button>
<button onclick="copyPreCode()">Copy Code</button>
<pre id="code15" style="display:none;">
a {
  color: blue;
  text-decoration: none;
}

a:hover {
  color: red;
  text-decoration: underline;
}
</pre>

<h3>🧠 Try It</h3>
<table>
  <tr>
    <td><code>a:hover</code></td>
    <td>Change on hover</td>
    <td><button onclick="tryIt(`a:hover { color: red; }`)">Try</button></td>
  </tr>
</table>
<h2 id="css-lists">📋 CSS Lists</h2>
<p>CSS can style ordered and unordered lists, including bullet type, spacing, and position.</p>

<div class="note">
  <strong>Note:</strong> Use <code>list-style-type</code> and <code>list-style-position</code> to control bullets.
</div>

<h3>📂 Example</h3>
<button onclick="toggleCode('code16')">Show/Hide Code</button>
<button onclick="copyPreCode()">Copy Code</button>
<pre id="code16" style="display:none;">
ul {
  list-style-type: square;
  padding-left: 20px;
}

ol {
  list-style-type: upper-roman;
}
</pre>

<h3>🧠 Try It</h3>
<table>
  <tr>
    <td><code>list-style-type: square;</code></td>
    <td>Square bullets</td>
    <td><button onclick="tryIt(`ul { list-style-type: square; }`)">Try</button></td>
  </tr>
</table>
<h2 id="css-lists">📋 CSS Lists</h2>
<p>CSS can style ordered and unordered lists, including bullet type, spacing, and position.</p>

<div class="note">
  <strong>Note:</strong> Use <code>list-style-type</code> and <code>list-style-position</code> to control bullets.
</div>

<h3>📂 Example</h3>
<button onclick="toggleCode('code16')">Show/Hide Code</button>
<button onclick="copyPreCode()">Copy Code</button>
<pre id="code16" style="display:none;">
ul {
  list-style-type: square;
  padding-left: 20px;
}

ol {
  list-style-type: upper-roman;
}
</pre>

<h3>🧠 Try It</h3>
<table>
  <tr>
    <td><code>list-style-type: square;</code></td>
    <td>Square bullets</td>
    <td><button onclick="tryIt(`ul { list-style-type: square; }`)">Try</button></td>
  </tr>
</table>
<h2 id="css-tables">📊 CSS Tables</h2>
<p>CSS allows you to style tables by setting borders, padding, alignment, and spacing.</p>

<div class="note">
  <strong>Tip:</strong> Use <code>border-collapse</code> to control border spacing.
</div>

<h3>📂 Example</h3>
<button onclick="toggleCode('code17')">Show/Hide Code</button>
<button onclick="copyPreCode()">Copy Code</button>
<pre id="code17" style="display:none;">
table {
  width: 100%;
  border-collapse: collapse;
}

th, td {
  border: 1px solid black;
  padding: 8px;
  text-align: left;
}
</pre>

<h3>🧠 Try It</h3>
<table>
  <tr>
    <td><code>border-collapse: collapse;</code></td>
    <td>Removes double borders</td>
    <td><button onclick="tryIt(`table { border-collapse: collapse; }`)">Try</button></td>
  </tr>
</table>
<h2 id="css-position">📍 CSS Position</h2>
<p>The <code>position</code> property specifies how an element is positioned in a document.</p>

<div class="note">
  <strong>Types:</strong> static, relative, absolute, fixed, sticky.
</div>

<h3>📂 Example</h3>
<button onclick="toggleCode('code18')">Show/Hide Code</button>
<button onclick="copyPreCode()">Copy Code</button>
<pre id="code18" style="display:none;">
.box {
  position: absolute;
  top: 20px;
  left: 30px;
}
</pre>

<h3>🧠 Try It</h3>
<table>
  <tr>
    <td><code>position: absolute;</code></td>
    <td>Position based on nearest relative parent</td>
    <td><button onclick="tryIt(`.box { position: absolute; top: 20px; left: 30px; }`)">Try</button></td>
  </tr>
</table>
<h2 id="css-zindex">🔢 CSS z-index</h2>
<p><code>z-index</code> controls the stack order of elements.</p>

<div class="note">
  <strong>Note:</strong> Works only with positioned elements (relative, absolute, etc.).
</div>

<h3>📂 Example</h3>
<button onclick="toggleCode('code19')">Show/Hide Code</button>
<button onclick="copyPreCode()">Copy Code</button>
<pre id="code19" style="display:none;">
.box1 {
  position: absolute;
  z-index: 1;
}

.box2 {
  position: absolute;
  z-index: 2;
}
</pre>

<h3>🧠 Try It</h3>
<table>
  <tr>
    <td><code>z-index: 2;</code></td>
    <td>Box on top of lower z-index</td>
    <td><button onclick="tryIt(`.box2 { z-index: 2; }`)">Try</button></td>
  </tr>
</table>
<h2 id="css-overflow">📐 CSS Overflow</h2>
<p>Controls what happens to content that overflows an element's box.</p>

<div class="note">
  <strong>Values:</strong> visible, hidden, scroll, auto.
</div>

<h3>📂 Example</h3>
<button onclick="toggleCode('code20')">Show/Hide Code</button>
<button onclick="copyPreCode()">Copy Code</button>
<pre id="code20" style="display:none;">
.box {
  width: 200px;
  height: 100px;
  overflow: scroll;
}
</pre>

<h3>🧠 Try It</h3>
<table>
  <tr>
    <td><code>overflow: scroll;</code></td>
    <td>Adds scrollbars when content overflows</td>
    <td><button onclick="tryIt(`.box { overflow: scroll; }`)">Try</button></td>
  </tr>
</table>
<h2 id="css-float">🏄‍♀️ CSS Float</h2>
<p>Float is used for positioning and formatting content, allowing text and inline elements to wrap around it.</p>

<div class="note">
  <strong>Note:</strong> Elements can be floated left or right.
</div>

<h3>📂 Example</h3>
<button onclick="toggleCode('code21')">Show/Hide Code</button>
<button onclick="copyPreCode()">Copy Code</button>
<pre id="code21" style="display:none;">
.float-left {
  float: left;
  margin-right: 20px;
}

.float-right {
  float: right;
  margin-left: 20px;
}
</pre>

<h3>🧠 Try It</h3>
<table>
  <tr>
    <td><code>float: left;</code></td>
    <td>Floats the element to the left of its container</td>
    <td><button onclick="tryIt(`.float-left { float: left; }`)">Try</button></td>
  </tr>
</table>
<h2 id="css-display">📐 CSS Display</h2>
<p>Defines how an element is displayed in the document flow. The most common values are <code>block</code>, <code>inline</code>, and <code>none</code>.</p>

<div class="note">
  <strong>Note:</strong> <code>display: none;</code> hides the element entirely.
</div>

<h3>📂 Example</h3>
<button onclick="toggleCode('code22')">Show/Hide Code</button>
<button onclick="copyPreCode()">Copy Code</button>
<pre id="code22" style="display:none;">
.block {
  display: block;
  width: 100%;
}

.inline {
  display: inline;
}
</pre>

<h3>🧠 Try It</h3>
<table>
  <tr>
    <td><code>display: block;</code></td>
    <td>Element will take up the full width of its container</td>
    <td><button onclick="tryIt(`.block { display: block; }`)">Try</button></td>
  </tr>
</table>
<h2 id="css-visibility">👀 CSS Visibility</h2>
<p>Visibility controls whether an element is visible or hidden, but it still takes up space in the layout.</p>

<div class="note">
  <strong>Note:</strong> Use <code>visibility: hidden;</code> to hide elements without removing their space.
</div>

<h3>📂 Example</h3>
<button onclick="toggleCode('code23')">Show/Hide Code</button>
<button onclick="copyPreCode()">Copy Code</button>
<pre id="code23" style="display:none;">
.hidden {
  visibility: hidden;
}

.visible {
  visibility: visible;
}
</pre>

<h3>🧠 Try It</h3>
<table>
  <tr>
    <td><code>visibility: hidden;</code></td>
    <td>Hides the element but retains its space in the layout</td>
    <td><button onclick="tryIt(`.hidden { visibility: hidden; }`)">Try</button></td>
  </tr>
</table>
<h2 id="css-opacity">🕶 CSS Opacity</h2>
<p>Opacity defines the transparency level of an element. It ranges from 0 (completely transparent) to 1 (completely opaque).</p>

<div class="note">
  <strong>Note:</strong> Use <code>opacity</code> to make elements semi-transparent.
</div>

<h3>📂 Example</h3>
<button onclick="toggleCode('code24')">Show/Hide Code</button>
<button onclick="copyPreCode()">Copy Code</button>
<pre id="code24" style="display:none;">
.transparent {
  opacity: 0.5;
}

.opaque {
  opacity: 1;
}
</pre>

<h3>🧠 Try It</h3>
<table>
  <tr>
    <td><code>opacity: 0.5;</code></td>
    <td>50% transparent</td>
    <td><button onclick="tryIt(`.transparent { opacity: 0.5; }`)">Try</button></td>
  </tr>
</table>

<h2 id="css-units">📏 CSS Units (px, em, rem, %)</h2>
<p>CSS units define the measurement of an element's size or distance. Some common units are <code>px</code>, <code>em</code>, <code>rem</code>, and <code>%</code>.</p>

<div class="note">
  <strong>Note:</strong> <code>px</code> is fixed, <code>em</code> and <code>rem</code> are relative, and <code>%</code> is relative to the parent element.
</div>

<h3>📂 Example</h3>
<button onclick="toggleCode('code25')">Show/Hide Code</button>
<button onclick="copyPreCode()">Copy Code</button>
<pre id="code25" style="display:none;">
.fixed {
  width: 200px;
}

.relative {
  font-size: 1.5em;
}

.root-relative {
  font-size: 2rem;
}

.percent {
  width: 50%;
}
</pre>

<h3>🧠 Try It</h3>
<table>
  <tr>
    <td><code>width: 200px;</code></td>
    <td>Fixed width of 200px</td>
    <td><button onclick="tryIt(`.fixed { width: 200px; }`)">Try</button></td>
  </tr>
  <tr>
    <td><code>font-size: 1.5em;</code></td>
    <td>Font size relative to parent element</td>
    <td><button onclick="tryIt(`.relative { font-size: 1.5em; }`)">Try</button></td>
  </tr>
</table>

<h2 id="css-calc">🧮 CSS calc()</h2>
<p>The <code>calc()</code> function is used to perform mathematical calculations to determine the size or position of elements.</p>

<div class="note">
  <strong>Note:</strong> You can combine different units like <code>px</code>, <code>%</code>, and <code>em</code> within <code>calc()</code>.
</div>

<h3>📂 Example</h3>
<button onclick="toggleCode('code26')">Show/Hide Code</button>
<button onclick="copyPreCode()">Copy Code</button>
<pre id="code26" style="display:none;">
.container {
  width: calc(100% - 20px);
}

.element {
  margin-left: calc(50% - 100px);
}
</pre>

<h3>🧠 Try It</h3>
<table>
  <tr>
    <td><code>width: calc(100% - 20px);</code></td>
    <td>Sets width based on remaining space</td>
    <td><button onclick="tryIt(`.container { width: calc(100% - 20px); }`)">Try</button></td>
  </tr>
  <tr>
    <td><code>margin-left: calc(50% - 100px);</code></td>
    <td>Margin calculated relative to the center</td>
    <td><button onclick="tryIt(`.element { margin-left: calc(50% - 100px); }`)">Try</button></td>
  </tr>
</table>

<h2 id="css-variables">🎛️ CSS Variables</h2>
<p>CSS Variables, also known as custom properties, allow you to store values for reuse throughout your stylesheet. They help make your CSS more flexible and easier to manage.</p>

<div class="note">
  <strong>Note:</strong> CSS variables are defined using <code>--</code> and accessed using <code>var()</code>.
</div>

<h3>📂 Example</h3>
<button onclick="toggleCode('code27')">Show/Hide Code</button>
<button onclick="copyPreCode()">Copy Code</button>
<pre id="code27" style="display:none;">
:root {
  --primary-color: #3498db;
  --font-size: 16px;
}

.container {
  background-color: var(--primary-color);
  font-size: var(--font-size);
}
</pre>

<h3>🧠 Try It</h3>
<table>
  <tr>
    <td><code>--primary-color: #3498db;</code></td>
    <td>Define a custom property for color</td>
    <td><button onclick="tryIt(`:root { --primary-color: #3498db; }`)">Try</button></td>
  </tr>
  <tr>
    <td><code>background-color: var(--primary-color);</code></td>
    <td>Apply custom property in styles</td>
    <td><button onclick="tryIt(`.container { background-color: var(--primary-color); }`)">Try</button></td>
  </tr>
</table>

<h2 id="css-mediaqueries">📱 CSS Media Queries</h2>
<p>CSS Media Queries are used to apply different styles to different devices or screen sizes. They enable responsive web design.</p>

<div class="note">
  <strong>Note:</strong> Media queries can target properties like width, height, orientation, and more.
</div>

<h3>📂 Example</h3>
<button onclick="toggleCode('code28')">Show/Hide Code</button>
<button onclick="copyPreCode()">Copy Code</button>
<pre id="code28" style="display:none;">
@media (max-width: 768px) {
  .container {
    background-color: #f1f1f1;
  }
}
</pre>

<h3>🧠 Try It</h3>
<table>
  <tr>
    <td><code>@media (max-width: 768px) { ... }</code></td>
    <td>Change styles on smaller screens</td>
    <td><button onclick="tryIt(`@media (max-width: 768px) { .container { background-color: #f1f1f1; } }`)">Try</button></td>
  </tr>
</table>
<h2 id="css-flexbox">🔲 CSS Flexbox</h2>
<p>CSS Flexbox is a layout model that allows you to create complex layouts with ease. It enables you to align and distribute items in a container, even when their size is unknown or dynamic.</p>

<div class="note">
  <strong>Note:</strong> Flexbox properties are used on the container (parent) and the items (children) to control alignment and spacing.
</div>

<h3>📂 Example</h3>
<button onclick="toggleCode('code29')">Show/Hide Code</button>
<button onclick="copyPreCode()">Copy Code</button>
<pre id="code29" style="display:none;">
.container {
  display: flex;
  justify-content: center;
  align-items: center;
}

.item {
  width: 100px;
  height: 100px;
  background-color: #3498db;
  margin: 10px;
}
</pre>

<h3>🧠 Try It</h3>
<table>
  <tr>
    <td><code>display: flex;</code></td>
    <td>Enable flexbox on the container</td>
    <td><button onclick="tryIt(`.container { display: flex; }`)">Try</button></td>
  </tr>
  <tr>
    <td><code>justify-content: center;</code></td>
    <td>Center items horizontally</td>
    <td><button onclick="tryIt(`.container { justify-content: center; }`)">Try</button></td>
  </tr>
  <tr>
    <td><code>align-items: center;</code></td>
    <td>Center items vertically</td>
    <td><button onclick="tryIt(`.container { align-items: center; }`)">Try</button></td>
  </tr>
</table>
<h2 id="css-grid">🧮 CSS Grid</h2>
<p>CSS Grid is a powerful layout system that allows you to create two-dimensional layouts with rows and columns. It provides more flexibility and control compared to Flexbox, especially for complex designs.</p>

<div class="note">
  <strong>Note:</strong> Grid properties are applied to both the container and the items to manage the layout structure.
</div>

<h3>📂 Example</h3>
<button onclick="toggleCode('code30')">Show/Hide Code</button>
<button onclick="copyPreCode()">Copy Code</button>
<pre id="code30" style="display:none;">
.container {
  display: grid;
  grid-template-columns: 1fr 1fr 1fr;
  grid-gap: 10px;
}

.item {
  background-color: #3498db;
  height: 100px;
}
</pre>

<h3>🧠 Try It</h3>
<table>
  <tr>
    <td><code>display: grid;</code></td>
    <td>Enable grid on the container</td>
    <td><button onclick="tryIt(`.container { display: grid; }`)">Try</button></td>
  </tr>
  <tr>
    <td><code>grid-template-columns: 1fr 1fr 1fr;</code></td>
    <td>Define three equal columns</td>
    <td><button onclick="tryIt(`.container { grid-template-columns: 1fr 1fr 1fr; }`)">Try</button></td>
  </tr>
  <tr>
    <td><code>grid-gap: 10px;</code></td>
    <td>Set gap between grid items</td>
    <td><button onclick="tryIt(`.container { grid-gap: 10px; }`)">Try</button></td>
  </tr>
</table>
<h2 id="css-align">🎯 CSS Alignment</h2>
<p>CSS Alignment properties allow you to control the alignment of content inside a container. You can align content horizontally and vertically using various properties in Flexbox, Grid, and block-level elements.</p>

<div class="note">
  <strong>Note:</strong> Alignment properties are used with Flexbox and Grid layouts, but they can also apply to block elements like text and images.
</div>

<h3>📂 Example</h3>
<button onclick="toggleCode('code31')">Show/Hide Code</button>
<button onclick="copyPreCode()">Copy Code</button>
<pre id="code31" style="display:none;">
.container {
  display: flex;
  justify-content: center;
  align-items: center;
}

.item {
  width: 100px;
  height: 100px;
  background-color: #3498db;
}
</pre>

<h3>🧠 Try It</h3>
<table>
  <tr>
    <td><code>justify-content: center;</code></td>
    <td>Align items horizontally in the center</td>
    <td><button onclick="tryIt(`.container { justify-content: center; }`)">Try</button></td>
  </tr>
  <tr>
    <td><code>align-items: center;</code></td>
    <td>Align items vertically in the center</td>
    <td><button onclick="tryIt(`.container { align-items: center; }`)">Try</button></td>
  </tr>
  <tr>
    <td><code>text-align: center;</code></td>
    <td>Align text horizontally in the center</td>
    <td><button onclick="tryIt(`p { text-align: center; }`)">Try</button></td>
  </tr>
</table>

<h2 id="css-transitions">🌀 CSS Transitions</h2>
<p>CSS Transitions allow you to change property values smoothly (over a given duration), providing visual effects that can improve user experience.</p>

<div class="note">
  <strong>Note:</strong> Transitions can be applied to properties like color, background-color, transform, etc., to create smooth animations when an element's state changes.
</div>

<h3>📂 Example</h3>
<button onclick="toggleCode('code32')">Show/Hide Code</button>
<button onclick="copyPreCode()">Copy Code</button>
<pre id="code32" style="display:none;">
.button {
  background-color: #3498db;
  color: white;
  padding: 10px 20px;
  border: none;
  cursor: pointer;
  transition: background-color 0.3s ease;
}

.button:hover {
  background-color: #2980b9;
}
</pre>

<h3>🧠 Try It</h3>
<table>
  <tr>
    <td><code>transition: background-color 0.3s ease;</code></td>
    <td>Apply a smooth transition to background color</td>
    <td><button onclick="tryIt(`.button { transition: background-color 0.3s ease; }`)">Try</button></td>
  </tr>
  <tr>
    <td><code>transition-duration: 1s;</code></td>
    <td>Control the duration of the transition</td>
    <td><button onclick="tryIt(`.button { transition-duration: 1s; }`)">Try</button></td>
  </tr>
</table>
<h2 id="css-transform">📘 CSS Transform</h2>
<p>
    The <code>transform</code> property in CSS is used to apply 2D or 3D transformations to an element, such as scaling, rotating, translating, or skewing it.
</p>

<div class="note">
    <strong>Note:</strong> You can use <code>transform</code> to change the position, size, and shape of an element without affecting the document's layout.
</div>

<h3>📂 Basic Transformations</h3>
<button onclick="toggleCode('code1')">Show/Hide Code</button>
<button onclick="copyPreCode()">Copy Code</button>
<pre id="code1" style="display:none;">
<div class="box" style="transform: rotate(45deg);">Rotated Box</div>
</pre>

<h3>🧪 Live Output</h3>
<textarea id="editor" rows="6" style="width:100%;"></textarea>
<br/>
<button onclick="runCode()">Run Code</button>
<iframe id="resultFrame" style="width:100%; height:200px; border:1px solid #ccc;"></iframe>

<h2 id="css-animations">📘 CSS Animations</h2>
<p>
    CSS animations make it possible to animate transitions from one CSS style configuration to another. With <code>@keyframes</code>, you can control the intermediate steps of the animation.
</p>

<div class="note">
    <strong>Note:</strong> CSS animations allow more control over timing, including the ability to delay, repeat, and adjust the speed curve.
</div>

<h3>📂 Basic Animation</h3>
<button onclick="toggleCode('code2')">Show/Hide Code</button>
<button onclick="copyPreCode()">Copy Code</button>
<pre id="code2" style="display:none;">
@keyframes move {
    0% { transform: translateX(0); }
    100% { transform: translateX(100px); }
}

.box {
    animation: move 2s infinite;
}
</pre>

<h3>🧪 Live Output</h3>
<textarea id="editor" rows="6" style="width:100%;"></textarea>
<br/>
<button onclick="runCode()">Run Code</button>
<iframe id="resultFrame" style="width:100%; height:200px; border:1px solid #ccc;"></iframe>
<h2 id="css-pseudo-classes">📘 CSS Pseudo-classes</h2>
<p>
    CSS pseudo-classes are used to define the special states of an element. These are used to style an element based on its state, such as when it's being hovered over or when it’s the first child.
</p>

<div class="note">
    <strong>Note:</strong> Pseudo-classes are always prefixed with a colon, like <code>:hover</code> and <code>:focus</code>.
</div>

<h3>📂 Example with :hover</h3>
<button onclick="toggleCode('code3')">Show/Hide Code</button>
<button onclick="copyPreCode()">Copy Code</button>
<pre id="code3" style="display:none;">
.button:hover {
    background-color: green;
}
</pre>

<h3>🧪 Live Output</h3>
<textarea id="editor" rows="6" style="width:100%;"></textarea>
<br/>
<button onclick="runCode()">Run Code</button>
<iframe id="resultFrame" style="width:100%; height:200px; border:1px solid #ccc;"></iframe>
<h2 id="css-pseudo-elements">📘 CSS Pseudo-elements</h2>
<p>
    CSS pseudo-elements are used to style specific parts of an element, like the first letter or line. These are defined with a double colon <code>::</code> syntax.
</p>

<div class="note">
    <strong>Note:</strong> You can use pseudo-elements to apply styles to parts of elements without needing additional HTML elements.
</div>

<h3>📂 Example with ::before</h3>
<button onclick="toggleCode('code4')">Show/Hide Code</button>
<button onclick="copyPreCode()">Copy Code</button>
<pre id="code4" style="display:none;">
h2::before {
    content: "📘 ";
}
</pre>

<h3>🧪 Live Output</h3>
<textarea id="editor" rows="6" style="width:100%;"></textarea>
<br/>
<button onclick="runCode()">Run Code</button>
<iframe id="resultFrame" style="width:100%; height:200px; border:1px solid #ccc;"></iframe>

<h2 id="css-important">📘 CSS !important</h2>
<p>
    The <code>!important</code> declaration is used in CSS to give a style rule higher priority over other rules that may target the same property.
</p>

<div class="note">
    <strong>Note:</strong> Use <code>!important</code> sparingly, as it can make the code harder to maintain and override.
</div>

<h3>📂 Example of !important</h3>
<button onclick="toggleCode('code5')">Show/Hide Code</button>
<button onclick="copyPreCode()">Copy Code</button>
<pre id="code5" style="display:none;">
h1 {
    color: red !important;
}
</pre>

<h3>🧪 Live Output</h3>
<textarea id="editor" rows="6" style="width:100%;"></textarea>
<br/>
<button onclick="runCode()">Run Code</button>
<iframe id="resultFrame" style="width:100%; height:200px; border:1px solid #ccc;"></iframe>

<h2 id="css-bestpractices">📘 CSS Best Practices</h2>
<p>
    CSS best practices help make your code clean, efficient, and easy to maintain. They include organizing code well, avoiding inline styles, and using shorthand properties where possible.
</p>

<div class="note">
    <strong>Note:</strong> Best practices also include using external stylesheets, keeping selectors specific, and reducing the number of unnecessary styles.
</div>

<h3>📂 Key Tips</h3>
<ul>
    <li>Avoid inline styles</li>
    <li>Use shorthand properties for efficiency</li>
    <li>Organize your CSS by components</li>
</ul>

<h3>🧪 Live Output</h3>
<textarea id="editor" rows="6" style="width:100%;"></textarea>
<br/>
<button onclick="runCode()">Run Code</button>
<iframe id="resultFrame" style="width:100%; height:200px; border:1px solid #ccc;"></iframe>
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
