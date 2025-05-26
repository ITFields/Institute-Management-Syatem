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

<!-- 🌐 Introduction to CSS -->
<h2 id="css-intro">🌐 Introduction to CSS</h2>
<p>CSS (Cascading Style Sheets) is used to style and layout web pages — for example, to change fonts, colors, spacing, and positioning of elements. It allows developers to separate content (HTML) from presentation (CSS).</p>
<p>With CSS, you can create visually attractive and responsive websites that work across different screen sizes and devices.</p>

<!-- 📌 CSS Syntax -->
<h2 id="css-syntax">📌 CSS Syntax</h2>
<p>A CSS rule-set consists of a selector and a declaration block:</p>
<pre><code>
selector {
property: value;
}
</code></pre>
<p><strong>Example:</strong></p>
<pre><code>
p {
color: red;
font-size: 16px;
}
</code></pre>
<p>Here, <code>p</code> is the selector, and the properties are <code>color</code> and <code>font-size</code>.</p>

<!-- 🎯 CSS Selectors -->
<h2 id="css-selectors">📌 CSS Selectors</h2>
<h3>🔹 What are CSS Selectors?</h3>
<p>CSS selectors are patterns used to select elements on the page that you want to style.</p>

<h3>🔹 Common CSS Selectors:</h3>
<ul>
  <li><strong>Universal Selector:</strong> <code>*</code> - Selects all elements</li>
  <li><strong>Element Selector:</strong> <code>div</code> - Selects all <code>&lt;div&gt;</code> elements</li>
  <li><strong>Class Selector:</strong> <code>.classname</code> - Selects elements with a specific class</li>
  <li><strong>ID Selector:</strong> <code>#idname</code> - Selects an element with a specific ID</li>
  <li><strong>Attribute Selector:</strong> <code>[type="text"]</code> - Selects elements with a specific attribute</li>
  <li><strong>Pseudo-class Selector:</strong> <code>:hover</code> - Selects elements in a specific state, like when hovered over</li>
</ul>

<h3>🔹 Example:</h3>
<pre><code>p {
  color: red;
}

#main {
  font-size: 20px;
}

a:hover {
  color: green;
}</code></pre>

<h3>🔹 Notes:</h3>
<ul>
  <li>Selectors are key in CSS to target specific HTML elements for styling.</li>
  <li>The most common selectors are element, class, ID, and pseudo-classes like :hover.</li>
</ul>


<!-- 💬 CSS Comments -->
<h2 id="css-comments">💬 CSS Comments</h2>
<p>CSS comments start with <code>/*</code> and end with <code>*/</code>. They are ignored by the browser.</p>
<pre><code>
/* This is a comment */
p {
color: blue; /* This is an inline comment */
}
</code></pre>

<!-- 🎨 CSS Colors -->
<h2 id="css-color">📌 CSS Colors</h2>
<h3>🔹 What are CSS Colors?</h3>
<p>CSS colors are used to define the color of text, background, borders, etc., in a webpage.</p>

<h3>🔹 CSS Color Syntax:</h3>
<ul>
  <li><strong>Named Colors:</strong> red, blue, green, etc.</li>
  <li><strong>Hexadecimal:</strong> #ff0000, #00ff00, etc.</li>
  <li><strong>RGB:</strong> rgb(255, 0, 0), rgb(0, 255, 0), etc.</li>
  <li><strong>RGBA:</strong> rgba(255, 0, 0, 0.5), rgba(0, 255, 0, 0.3), etc.</li>
  <li><strong>HSL:</strong> hsl(0, 100%, 50%), hsl(120, 100%, 50%), etc.</li>
</ul>

<h3>🔹 Example:</h3>
<pre><code>body {
  background-color: #f0f0f0;
  color: rgb(0, 0, 255);
}</code></pre>

<h3>🔹 Notes:</h3>
<ul>
  <li>CSS supports various ways to define colors (names, hex, rgb, rgba, etc.).</li>
  <li>RGBA allows transparency using the alpha channel.</li>
</ul>

 <!-- 🖼️ CSS Backgrounds -->
 <h2 id="css-backgrounds">🖼️ CSS Backgrounds</h2>
  <p>CSS lets you control the background of elements.</p>
  <pre><code>
body {
  background-color: lightblue;
  background-image: url("bg.jpg");
  background-repeat: no-repeat;
  background-position: center;
}
  </code></pre>
<!-- 🧱 CSS Borders -->
<h2 id="css-borders">🧱 CSS Borders</h2>
<p>You can add borders to elements using the <code>border</code> property.</p>
<pre><code>
div {
border: 2px solid black;
}
</code></pre>
<p>Other related properties:</p>
<ul>
  <li><code>border-width</code></li>
  <li><code>border-style</code></li>
  <li><code>border-color</code></li>
  <li><code>border-radius</code> (for rounded corners)</li>
</ul>

<!-- ➖ CSS Margins -->
<h2 id="css-margins">➖ CSS Margins</h2>
<p>Margins are used to create space around elements, outside of any defined borders.</p>
<pre><code>
div {
margin: 20px;
}
</code></pre>
<p>Individual properties:</p>
<ul>
  <li><code>margin-top</code></li>
  <li><code>margin-right</code></li>
  <li><code>margin-bottom</code></li>
  <li><code>margin-left</code></li>
</ul>
<p>You can also use shorthand:</p>
<pre><code>
margin: 10px 20px 30px 40px; /* top right bottom left */
</code></pre>
<!-- 🎨 CSS Padding --> <h2 id="css-padding">🎨 CSS Padding</h2> <p>Padding is the space between the content of an element and its border. It is used to create space inside elements.</p> <pre><code> div { padding: 20px; } </code></pre> <p>Individual properties for padding:</p> <ul> <li><code>padding-top</code></li> <li><code>padding-right</code></li> <li><code>padding-bottom</code></li> <li><code>padding-left</code></li> </ul> <p>Shorthand for padding:</p> <pre><code> padding: 10px 20px 30px 40px; /* top right bottom left */ </code></pre>
<!-- 📏 CSS Height & Width --> <h2 id="css-height-width">📏 CSS Height & Width</h2> <p>The <code>height</code> and <code>width</code> properties are used to set the dimensions of an element.</p> <pre><code> div { height: 100px; width: 200px; } </code></pre> <p>These properties can be set using:</p> <ul> <li><strong>px:</strong> Pixels (absolute measurement)</li> <li><strong>%:</strong> Percentage of the parent element's size</li> <li><strong>auto:</strong> Let the element size adjust based on content</li> </ul> <p>You can also use <code>min-height</code>, <code>max-height</code>, <code>min-width</code>, and <code>max-width</code> for more control.</p>
<!-- 📦 CSS Box Model --> <h2 id="css-box-model">📦 CSS Box Model</h2> <p>The CSS box model describes the rectangular boxes generated for elements in the document tree. Every element in HTML is a box, and the model defines the space taken by the element.</p> <p>The box model consists of the following parts:</p> <ul> <li><strong>Content:</strong> The actual content of the element, where text and images appear.</li> <li><strong>Padding:</strong> Space around the content inside the border.</li> <li><strong>Border:</strong> Surrounds the padding (if any).</li> <li><strong>Margin:</strong> Space outside the border, separating the element from others.</li> </ul> <pre><code> div { padding: 10px; border: 2px solid black; margin: 20px; } </code></pre> <p>Note: The <code>box-sizing</code> property can control whether the padding and border are included in the element's total width and height.</p>
<!-- ✒️ CSS Text -->
<!-- ✒️ CSS Text -->
<h2 id="css-text">✒️ CSS Text</h2>
<p>CSS provides properties to style text, including adjusting the font, size, weight, line height, and more.</p>

<h3>🔹 Example:</h3>
<pre><code>
p {
  font-family: 'Arial', sans-serif;
  font-size: 16px;
  color: #333;
  line-height: 1.5;
}
</code></pre>

<h3>🔹 Key Properties:</h3>
<ul>
  <li><code>font-family</code>: Specifies the font type</li>
  <li><code>font-size</code>: Defines the size of the text</li>
  <li><code>font-weight</code>: Sets the thickness of the text (normal, bold, etc.)</li>
  <li><code>line-height</code>: Controls the spacing between lines of text</li>
  <li><code>text-align</code>: Aligns text (left, right, center, justify)</li>
</ul>

<h3>🔹 Example with Multiple Properties:</h3>
<pre><code>
h1 {
  font-family: 'Times New Roman', serif;
  font-size: 32px;
  font-weight: bold;
  text-align: center;
}
</code></pre>


<!-- 📚 CSS Fonts --> <h2 id="css-fonts">📚 CSS Fonts</h2> <p>CSS allows you to style fonts using various properties and techniques to improve typography on your website.</p> <h3>🔹 Font Properties:</h3> <ul> <li><strong>font-family:</strong> Specifies the font for the text.</li> <li><strong>font-size:</strong> Defines the size of the font.</li> <li><strong>font-weight:</strong> Specifies the thickness of the font (normal, bold, etc.).</li> <li><strong>font-style:</strong> Controls the style (normal, italic, oblique).</li> <li><strong>font-variant:</strong> Controls the display of alternative glyphs (e.g., small-caps).</li> </ul> <p>For custom fonts, you can use <code>@font-face</code> to import fonts or rely on web fonts (like Google Fonts).</p> <pre><code> @font-face { font-family: 'OpenSans'; src: url('OpenSans-Regular.ttf'); }
body { font-family: 'OpenSans', sans-serif; } </code></pre>

<div id="css-icons" class="content-section">
  <h2>CSS Icons</h2>
  <p>CSS allows the use of icon libraries like Font Awesome or Bootstrap Icons. Add icons with classes like <code>&lt;i class="fa fa-user"&gt;&lt;/i&gt;</code>.</p>
</div>

<div id="css-links" class="content-section">
  <h2>CSS Links</h2>
  <p>Style hyperlinks using pseudo-classes like <code>:hover</code>, <code>:visited</code>, <code>:active</code>. Customize link color, decoration, and transition.</p>
</div>

<div id="css-lists" class="content-section">
  <h2>CSS Lists</h2>
  <p>Style ordered and unordered lists using <code>list-style-type</code>, <code>list-style-position</code>, and remove bullets with <code>list-style: none</code>.</p>
</div>
<div id="css-tables" class="content-section">
  <h2>CSS Tables</h2>
  <p>Customize table appearance using properties like <code>border-collapse</code>, <code>text-align</code>, <code>padding</code>, and <code>background-color</code>.</p>
</div>

<div id="css-position" class="content-section">
  <h2>CSS Position</h2>
  <p>Control element placement using <code>position: static</code>, <code>relative</code>, <code>absolute</code>, <code>fixed</code>, or <code>sticky</code>.</p>
</div>

<div id="css-zindex" class="content-section">
  <h2>CSS z-index</h2>
  <p>Manage element stacking order using <code>z-index</code>. Higher values appear on top. Only works with positioned elements.</p>
</div>

<div id="css-overflow" class="content-section">
  <h2>CSS Overflow</h2>
  <p>Control content that overflows its container using <code>overflow: visible</code>, <code>hidden</code>, <code>scroll</code> </p><div>
<!-- CSS Float -->
<div id="css-float" class="content-section">
  <h2>CSS Float</h2>
  <p>The <code>float</code> property allows elements to be taken out of the normal document flow and placed to the left or right.</p>
  <ul>
    <li><code>left</code>: floats the element to the left</li>
    <li><code>right</code>: floats the element to the right</li>
    <li><code>none</code>: no float (default)</li>
  </ul>
</div>

<!-- CSS Display -->
<div id="css-display" class="content-section">
  <h2>CSS Display</h2>
  <p>Defines how elements are displayed:</p>
  <ul>
    <li><code>block</code>, <code>inline</code>, <code>inline-block</code></li>
    <li><code>flex</code>, <code>grid</code>, <code>none</code></li>
  </ul>
  <p><code>display: none;</code> removes the element from the flow completely.</p>
</div>

<!-- CSS Visibility -->
<div id="css-visibility" class="content-section">
  <h2>CSS Visibility</h2>
  <p>Controls the visibility of elements:</p>
  <ul>
    <li><code>visible</code>: Element is shown</li>
    <li><code>hidden</code>: Element is hidden but space is reserved</li>
  </ul>
</div>

<!-- CSS Opacity -->
<div id="css-opacity" class="content-section">
  <h2>CSS Opacity</h2>
  <p>Controls transparency of an element.</p>
  <ul>
    <li>Range: <code>0</code> (fully transparent) to <code>1</code> (fully opaque)</li>
  </ul>
  <p>Example: <code>opacity: 0.5;</code></p>
</div>

<!-- CSS Units -->
<div id="css-units" class="content-section">
  <h2>CSS Units</h2>
  <p>Used to define size, spacing, and positioning.</p>
  <ul>
    <li><strong>Absolute:</strong> px, pt, cm, mm, in</li>
    <li><strong>Relative:</strong> %, em, rem, vw, vh</li>
  </ul>
</div>

<!-- CSS calc() -->
<div id="css-calc" class="content-section">
  <h2>CSS calc()</h2>
  <p>Allows mathematical operations in CSS.</p>
  <p>Example:</p>
  <pre><code>width: calc(100% - 50px);</code></pre>
</div>

<!-- CSS Variables -->
<div id="css-variables" class="content-section">
  <h2>CSS Variables</h2>
  <p>Also known as custom properties.</p>
  <p>Defined with <code>--</code> and used via <code>var()</code>.</p>
  <pre><code>:root {
  --main-color: #ff6600;
}
h1 {
  color: var(--main-color);
}</code></pre>
</div>

<!-- CSS Media Queries -->
<div id="css-media-queries" class="content-section">
  <h2>CSS Media Queries</h2>
  <p>Allow CSS styles to be applied depending on the device characteristics, like screen width, height, or resolution.</p>
  <pre><code>@media (max-width: 600px) {
  body {
    background-color: lightblue;
  }
}</code></pre>
</div>

<!-- CSS Flexbox -->
<div id="css-flexbox" class="content-section">
  <h2>CSS Flexbox</h2>
  <p>Flexbox is a layout model that allows easy alignment and distribution of items within a container.</p>
  <ul>
    <li><code>display: flex;</code> to activate flexbox on a container.</li>
    <li><code>justify-content</code>: aligns items horizontally.</li>
    <li><code>align-items</code>: aligns items vertically.</li>
  </ul>
</div>

<!-- CSS Grid -->
<div id="css-grid" class="content-section">
  <h2>CSS Grid</h2>
  <p>CSS Grid Layout provides a two-dimensional grid-based layout system.</p>
  <pre><code>display: grid;
grid-template-columns: repeat(3, 1fr);
grid-gap: 10px;</code></pre>
</div>

<!-- CSS Alignment -->
<div id="css-alignment" class="content-section">
  <h2>CSS Alignment</h2>
  <p>Aligning content both horizontally and vertically using <code>text-align</code>, <code>vertical-align</code>, and Flexbox/Grid.</p>
  <ul>
    <li><code>text-align</code>: horizontally aligns text inside block-level elements.</li>
    <li><code>vertical-align</code>: aligns inline or inline-block elements vertically.</li>
  </ul>
</div>

<!-- CSS Transitions -->
<div id="css-transitions" class="content-section">
  <h2>CSS Transitions</h2>
  <p>Allows gradual change of CSS properties over time when an element's state changes.</p>
  <pre><code>a {
  transition: color 0.5s ease-in-out;
}
a:hover {
  color: red;
}</code></pre>
</div>

<!-- CSS Transform -->
<div id="css-transform" class="content-section">
  <h2>CSS Transform</h2>
  <p>Allows you to scale, rotate, translate, or skew an element.</p>
  <pre><code>div {
  transform: rotate(45deg);
}</code></pre>
</div>

<!-- CSS Animations -->
<div id="css-animations" class="content-section">
  <h2>CSS Animations</h2>
  <p>Used to create complex animations with keyframes.</p>
  <pre><code>@keyframes move {
  0% { transform: translateX(0); }
  100% { transform: translateX(100px); }
}
div {
  animation: move 2s infinite;
}</code></pre>
</div>

<!-- CSS Pseudo-classes -->
<div id="css-pseudo-classes" class="content-section">
  <h2>CSS Pseudo-classes</h2>
  <p>CSS pseudo-classes are used to define the special states of an element.</p>
  <ul>
    <li><code>:hover</code>: when an element is hovered over</li>
    <li><code>:focus</code>: when an element is focused</li>
    <li><code>:nth-child()</code>: for selecting specific children</li>
  </ul>
</div>

<!-- CSS Pseudo-elements -->
<div id="css-pseudo-elements" class="content-section">
  <h2>CSS Pseudo-elements</h2>
  <p>CSS pseudo-elements allow you to style specific parts of an element.</p>
  <ul>
    <li><code>::before</code>: inserts content before an element's content.</li>
    <li><code>::after</code>: inserts content after an element's content.</li>
  </ul>
</div>

<!-- CSS !important -->
<div id="css-important" class="content-section">
  <h2>CSS !important</h2>
  <p>Overrides all other declarations.</p>
  <pre><code>color: red !important;</code></pre>
  <p>⚠️ Use carefully — it breaks the natural cascade and makes debugging harder.</p>
</div>

</div>

</body>
</html>
