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
  <title>Level 6: Bootstrap Design</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>
<body>

<ul id="vnav">
  <li><a href="#bootstrap-intro">What is Bootstrap?</a></li>
  <li><a href="#bootstrap-setup">Setup & CDN</a></li>
  <li><a href="#bootstrap-grid">Bootstrap Grid System</a></li>
  <li><a href="#bootstrap-components">Common Components</a></li>
  <li><a href="#bootstrap-utilities">Utility Classes</a></li>
  <li><a href="#bootstrap-example">Simple Webpage Layout</a></li>
</ul>

<div class="content">

  <div id="bootstrap-intro">
    <h2>What is Bootstrap?</h2>
    <p>Bootstrap is a popular open-source CSS framework for developing responsive and mobile-first websites. It includes pre-designed components like buttons, navbars, modals, and more.</p>
  </div>

  <div id="bootstrap-setup">
    <h2>Setup & CDN</h2>
    <p>To start using Bootstrap, include the CDN in your HTML file's head section:</p>
    <pre><code>&lt;link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"&gt;
&lt;script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"&gt;&lt;/script&gt;</code></pre>
  </div>

  <div id="bootstrap-grid">
    <h2>Bootstrap Grid System</h2>
    <p>Bootstrap uses a 12-column responsive grid system:</p>
    <pre><code>&lt;div class="container"&gt;
  &lt;div class="row"&gt;
    &lt;div class="col-md-6"&gt;Left Column&lt;/div&gt;
    &lt;div class="col-md-6"&gt;Right Column&lt;/div&gt;
  &lt;/div&gt;
&lt;/div&gt;</code></pre>
    <p><strong>Breakpoints:</strong> sm, md, lg, xl, xxl for different screen sizes.</p>
  </div>

  <div id="bootstrap-components">
    <h2>Common Bootstrap Components</h2>
    <ul>
      <li><strong>Navbar:</strong> Responsive navigation menu.</li>
      <li><strong>Buttons:</strong> Styled buttons using `.btn` classes.</li>
      <li><strong>Cards:</strong> Flexible content containers.</li>
      <li><strong>Modals:</strong> Popup dialogs for alerts/forms.</li>
      <li><strong>Forms:</strong> Input fields, selects, checkboxes etc.</li>
    </ul>
    <pre><code>&lt;button class="btn btn-primary"&gt;Click Me&lt;/button&gt;</code></pre>
  </div>

  <div id="bootstrap-utilities">
    <h2>Utility Classes</h2>
    <p>Bootstrap includes classes to style margin, padding, colors, and more.</p>
    <ul>
      <li><code>.mt-3</code>, <code>.mb-4</code> – Margin top/bottom</li>
      <li><code>.text-center</code> – Center text</li>
      <li><code>.bg-light</code>, <code>.text-dark</code> – Background & text colors</li>
      <li><code>.d-flex</code>, <code>.justify-content-between</code> – Flex utilities</li>
    </ul>
  </div>

  <div id="bootstrap-example">
    <h2>Simple Webpage Layout using Bootstrap</h2>
    <pre><code>&lt;div class="container mt-4"&gt;
  &lt;div class="row"&gt;
    &lt;div class="col-md-4"&gt;
      &lt;div class="card"&gt;
        &lt;div class="card-body"&gt;
          &lt;h5 class="card-title"&gt;Card Title&lt;/h5&gt;
          &lt;p class="card-text"&gt;Card content goes here.&lt;/p&gt;
          &lt;a href="#" class="btn btn-success"&gt;Read More&lt;/a&gt;
        &lt;/div&gt;
      &lt;/div&gt;
    &lt;/div&gt;
  &lt;/div&gt;
&lt;/div&gt;</code></pre>
  </div>

</div>
</body>
</html>
