<?php
include($_SERVER['DOCUMENT_ROOT'] . '/Project/navbar.php');
include($_SERVER['DOCUMENT_ROOT'] . '/Project/auth.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <link rel="stylesheet" href="style.css" />
  <title>Level 9: Website Templates</title>
</head>
<body>

<ul id="vnav">
  <li><a href="#templates-intro">What are Website Templates?</a></li>
  <li><a href="#types-templates">Types of Website Templates</a></li>
  <li><a href="#html-templates">HTML Templates</a></li>
  <li><a href="#css-templates">CSS Templates</a></li>
  <li><a href="#responsive-templates">Responsive Templates</a></li>
  <li><a href="#customization">Customization of Templates</a></li>
  <li><a href="#best-practices-templates">Best Practices</a></li>
</ul>

<div class="content">

  <div id="templates-intro">
    <h2>What are Website Templates?</h2>
    <p>Website templates are pre-designed webpage layouts that you can customize and use to create a website. Templates often come with a basic structure, styling, and layout, and can be easily modified for different needs.</p>
  </div>

  <div id="types-templates">
    <h2>Types of Website Templates</h2>
    <p>There are a few common types of templates:</p>
    <ul>
      <li><strong>Landing Page Templates:</strong> For product promotions or service offerings.</li>
      <li><strong>Business Website Templates:</strong> Professional templates for companies.</li>
      <li><strong>Portfolio Templates:</strong> For displaying personal projects or artistic work.</li>
      <li><strong>Blog Templates:</strong> Perfect for bloggers who want a simple layout.</li>
      <li><strong>E-commerce Templates:</strong> Templates for online stores with shopping cart features.</li>
    </ul>
  </div>

  <div id="html-templates">
    <h2>HTML Templates</h2>
    <p>HTML templates are made using HTML to define the structure and layout of the website.</p>
    <pre><code>&lt;!DOCTYPE html&gt;
&lt;html lang="en"&gt;
  &lt;head&gt;
    &lt;meta charset="UTF-8"&gt;
    &lt;meta name="viewport" content="width=device-width, initial-scale=1.0"&gt;
    &lt;link rel="stylesheet" href="styles.css"&gt;
    &lt;title&gt;My Template&lt;/title&gt;
  &lt;/head&gt;
  &lt;body&gt;
    &lt;header&gt;Welcome to My Template&lt;/header&gt;
    &lt;section&gt;
      &lt;h1&gt;Main Content&lt;/h1&gt;
      &lt;p&gt;This is the main content area of the template.&lt;/p&gt;
    &lt;/section&gt;
  &lt;/body&gt;
&lt;/html&gt;</code></pre>
  </div>

  <div id="css-templates">
    <h2>CSS Templates</h2>
    <p>CSS templates define the look and feel of a website by controlling the layout, fonts, colors, and other design elements.</p>
    <pre><code>body {
  font-family: Arial, sans-serif;
  background-color: #f4f4f4;
  margin: 0;
  padding: 0;
}

header {
  background-color: #333;
  color: white;
  padding: 15px;
  text-align: center;
}

section {
  padding: 20px;
}

h1 {
  font-size: 2rem;
}

p {
  line-height: 1.6;
}</code></pre>
  </div>

  <div id="responsive-templates">
    <h2>Responsive Templates</h2>
    <p>Responsive templates adapt their layout based on the screen size and resolution. These templates use CSS media queries to ensure the website is mobile-friendly.</p>
    <pre><code>@media (max-width: 768px) {
  body {
    background-color: lightblue;
  }

  header {
    font-size: 1.2rem;
  }
}</code></pre>
  </div>

  <div id="customization">
    <h2>Customization of Templates</h2>
    <p>Website templates are customizable. You can:</p>
    <ul>
      <li>Change the color scheme.</li>
      <li>Replace text and images.</li>
      <li>Modify the layout using CSS.</li>
      <li>Add or remove sections according to your needs.</li>
    </ul>
    <p>Most templates come with documentation on how to modify them easily.</p>
  </div>

  <div id="best-practices-templates">
    <h2>Best Practices</h2>
    <ul>
      <li>Choose a template that fits your needs.</li>
      <li>Keep customization simple and avoid overloading the design.</li>
      <li>Test responsiveness on different devices.</li>
      <li>Make sure to use clean, valid code.</li>
    </ul>
    <p>Following these best practices will ensure your template-based website is professional, functional, and easy to maintain.</p>
  </div>

</div>
</body>
</html>
