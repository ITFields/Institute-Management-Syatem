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
  <title>Level 3: Responsive Design</title>
</head>
<body>

<ul id="vnav">
  <li><a href="#responsive-intro">Introduction to Responsive Design</a></li>
  <li><a href="#responsive-media">Media Queries</a></li>
  <li><a href="#responsive-units">Responsive Units</a></li>
  <li><a href="#responsive-flexbox">Flexbox for Layout</a></li>
  <li><a href="#responsive-grid">CSS Grid</a></li>
  <li><a href="#responsive-img">Responsive Images</a></li>
  <li><a href="#responsive-tips">Best Practices</a></li>
</ul>

<div class="content">

  <div id="responsive-intro">
    <h2>Introduction to Responsive Design</h2>
    <p>Responsive design ensures your website looks great on all devices—desktops, tablets, and smartphones. It uses flexible layouts, images, and CSS media queries to adjust content dynamically based on screen size.</p>
  </div>

  <div id="responsive-media">
    <h2>Media Queries</h2>
    <p>Media queries apply CSS styles conditionally based on the device's screen width or other properties.</p>
    <pre><code>/* Mobile First Approach */
body {
  font-size: 16px;
}

@media (min-width: 768px) {
  body {
    font-size: 18px;
  }
}

@media (min-width: 1024px) {
  body {
    font-size: 20px;
  }
}</code></pre>
  </div>

  <div id="responsive-units">
    <h2>Responsive Units</h2>
    <p>Instead of using fixed units like <code>px</code>, use relative units like <code>em</code>, <code>rem</code>, <code>%</code>, <code>vw</code>, and <code>vh</code>.</p>
    <pre><code>/* rem and % for scalable text and layout */
.container {
  width: 80%;
  padding: 2rem;
}

h1 {
  font-size: 2rem;
}</code></pre>
  </div>

  <div id="responsive-flexbox">
    <h2>Flexbox for Layout</h2>
    <p>Flexbox is perfect for building responsive 1D layouts—horizontal or vertical alignment of items.</p>
    <pre><code>.flex-container {
  display: flex;
  flex-wrap: wrap;
  justify-content: space-around;
}

.flex-item {
  flex: 1 1 200px;
  margin: 10px;
}</code></pre>
  </div>

  <div id="responsive-grid">
    <h2>CSS Grid</h2>
    <p>CSS Grid is used for 2D layouts (rows and columns). It's very powerful for creating structured, responsive layouts.</p>
    <pre><code>.grid-container {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
  gap: 20px;
}

.grid-item {
  background: #f4f4f4;
  padding: 20px;
}</code></pre>
  </div>

  <div id="responsive-img">
    <h2>Responsive Images</h2>
    <p>Images should scale with their container or switch sources based on screen size.</p>
    <pre><code>/* Make images scale automatically */
img {
  max-width: 100%;
  height: auto;
}</code></pre>

    <p><strong>Using &lt;picture&gt; element:</strong></p>
    <pre><code>&lt;picture&gt;
  &lt;source media="(min-width: 768px)" srcset="large.jpg" /&gt;
  &lt;img src="small.jpg" alt="Responsive Image" /&gt;
&lt;/picture&gt;</code></pre>
  </div>

  <div id="responsive-tips">
    <h2>Best Practices</h2>
    <ul>
      <li>Design mobile-first and enhance for larger screens.</li>
      <li>Use relative units instead of fixed pixels.</li>
      <li>Test your site on real devices or browser dev tools.</li>
      <li>Avoid horizontal scrolling by setting max-widths.</li>
      <li>Keep touch targets (like buttons) large enough.</li>
    </ul>
  </div>

</div>
</body>
</html>
