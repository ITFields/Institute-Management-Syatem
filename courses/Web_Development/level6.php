<?php
include($_SERVER['DOCUMENT_ROOT'] . '/Project/navbar.php');
include($_SERVER['DOCUMENT_ROOT'] . '/Project/auth.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <link rel="stylesheet" href="style.css"/>
</head>
<body>

<ul id="vnav">
  <li><a href="#bootstrap-intro">Introduction to Bootstrap</a></li>
  <li><a href="#bootstrap-cdn">Adding Bootstrap via CDN</a></li>
  <li><a href="#bootstrap-grid">Grid System</a></li>
  <li><a href="#bootstrap-components">Common Components</a></li>
  <li><a href="#bootstrap-utilities">Utility Classes</a></li>
  <li><a href="#bootstrap-custom">Custom Styling</a></li>
</ul>

<div class="content">
  <div id="bootstrap-intro">
    <h2>Introduction to Bootstrap</h2>
    <p>Bootstrap is a popular front-end framework for building responsive, mobile-first websites using HTML, CSS, and JS components.</p>
    <p>Official Site: <a href="https://getbootstrap.com/" target="_blank">https://getbootstrap.com/</a></p>
  </div>

  <div id="bootstrap-cdn">
    <h2>Adding Bootstrap via CDN</h2>
    <pre><code>&lt;!-- Bootstrap CSS --&gt;
&lt;link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"&gt;

&lt;!-- Bootstrap JS --&gt;
&lt;script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"&gt;&lt;/script&gt;</code></pre>
  </div>

  <div id="bootstrap-grid">
    <h2>Grid System</h2>
    <p>Bootstrap uses a 12-column responsive grid system.</p>
    <pre><code>&lt;div class="container"&gt;
  &lt;div class="row"&gt;
    &lt;div class="col-md-6"&gt;Column 1&lt;/div&gt;
    &lt;div class="col-md-6"&gt;Column 2&lt;/div&gt;
  &lt;/div&gt;
&lt;/div&gt;</code></pre>
  </div>

  <div id="bootstrap-components">
    <h2>Common Components</h2>
    <p>Bootstrap provides reusable components:</p>
    <ul>
      <li>Navbar</li>
      <li>Buttons</li>
      <li>Cards</li>
      <li>Modals</li>
      <li>Alerts</li>
    </ul>

    <pre><code>&lt;button class="btn btn-primary"&gt;Click Me&lt;/button&gt;

&lt;div class="alert alert-success"&gt;
  Success! Your action was successful.
&lt;/div&gt;</code></pre>
  </div>

  <div id="bootstrap-utilities">
    <h2>Utility Classes</h2>
    <p>Bootstrap includes helpful utility classes:</p>
    <ul>
      <li><code>m-3</code> - Margin</li>
      <li><code>p-2</code> - Padding</li>
      <li><code>text-center</code> - Center text</li>
      <li><code>bg-primary</code> - Background color</li>
    </ul>
  </div>

  <div id="bootstrap-custom">
    <h2>Custom Styling</h2>
    <p>You can override Bootstrap styles using your own CSS.</p>
    <pre><code>&lt;style&gt;
.btn-primary {
  background-color: purple;
  border: none;
}
&lt;/style&gt;</code></pre>
  </div>
</div>

</body>
</html>
