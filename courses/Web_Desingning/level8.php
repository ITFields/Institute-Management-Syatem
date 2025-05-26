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
  <title>Level 8: Typography</title>
</head>
<body>

<ul id="vnav">
  <li><a href="#typography-intro">What is Typography?</a></li>
  <li><a href="#font-families">Font Families</a></li>
  <li><a href="#font-hierarchy">Typography Hierarchy</a></li>
  <li><a href="#line-spacing">Line Height & Letter Spacing</a></li>
  <li><a href="#web-fonts">Google Fonts & Web Fonts</a></li>
  <li><a href="#best-practices">Best Practices</a></li>
</ul>

<div class="content">

  <div id="typography-intro">
    <h2>What is Typography?</h2>
    <p>Typography is the art of arranging type (text) to make written language readable and visually appealing. It includes font choice, size, spacing, and layout.</p>
  </div>

  <div id="font-families">
    <h2>Font Families</h2>
    <p>Fonts are grouped into families:</p>
    <ul>
      <li><strong>Serif:</strong> Times New Roman, Georgia</li>
      <li><strong>Sans-serif:</strong> Arial, Helvetica, Roboto</li>
      <li><strong>Monospace:</strong> Courier, Consolas</li>
      <li><strong>Display:</strong> Fancy fonts used for titles (e.g., Lobster)</li>
    </ul>
    <pre><code>body {
  font-family: 'Arial', sans-serif;
}</code></pre>
  </div>

  <div id="font-hierarchy">
    <h2>Typography Hierarchy</h2>
    <p>Use font sizes and weights to create a clear hierarchy:</p>
    <ul>
      <li><strong>Headings (h1-h6):</strong> Bold and large for importance</li>
      <li><strong>Paragraphs:</strong> Medium size, readable line length</li>
      <li><strong>Captions:</strong> Small, less prominent</li>
    </ul>
    <pre><code>h1 {
  font-size: 2.5rem;
  font-weight: bold;
}
p {
  font-size: 1rem;
  line-height: 1.6;
}</code></pre>
  </div>

  <div id="line-spacing">
    <h2>Line Height & Letter Spacing</h2>
    <p>Adjust spacing to improve readability:</p>
    <pre><code>p {
  line-height: 1.6;      /* Space between lines */
  letter-spacing: 0.5px; /* Space between letters */
}</code></pre>
    <p>Good line height makes paragraphs easier to read.</p>
  </div>

  <div id="web-fonts">
    <h2>Google Fonts & Web Fonts</h2>
    <p>You can import fonts from Google Fonts:</p>
    <pre><code>&lt;link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet"&gt;

body {
  font-family: 'Roboto', sans-serif;
}</code></pre>
    <p>Popular font pairings:</p>
    <ul>
      <li>Roboto & Open Sans</li>
      <li>Montserrat & Lato</li>
      <li>Poppins & Playfair Display</li>
    </ul>
  </div>

  <div id="best-practices">
    <h2>Best Practices</h2>
    <ul>
      <li>Use max 2–3 fonts per site</li>
      <li>Maintain contrast with background</li>
      <li>Keep consistency across headings and paragraphs</li>
      <li>Avoid using all caps for long text</li>
    </ul>
    <p>Typography affects how users perceive your site – keep it elegant and readable.</p>
  </div>

</div>
</body>
</html>
