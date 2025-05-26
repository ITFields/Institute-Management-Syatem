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
  <title>Level 7: Color Theory</title>
</head>
<body>

<ul id="vnav">
  <li><a href="#color-basics">What is Color Theory?</a></li>
  <li><a href="#color-wheel">The Color Wheel</a></li>
  <li><a href="#color-types">Color Categories</a></li>
  <li><a href="#color-contrast">Contrast & Accessibility</a></li>
  <li><a href="#color-palettes">Creating Color Palettes</a></li>
  <li><a href="#color-examples">Color Usage Examples</a></li>
</ul>

<div class="content">

  <div id="color-basics">
    <h2>What is Color Theory?</h2>
    <p>Color theory is a set of principles used to create harmonious and effective color combinations in design. It helps evoke emotions, create visual interest, and improve readability.</p>
  </div>

  <div id="color-wheel">
    <h2>The Color Wheel</h2>
    <p>The color wheel includes 12 colors:</p>
    <ul>
      <li><strong>Primary:</strong> Red, Blue, Yellow</li>
      <li><strong>Secondary:</strong> Green, Orange, Purple</li>
      <li><strong>Tertiary:</strong> Mix of primary & secondary (e.g., Red-Orange)</li>
    </ul>
    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/7/7d/RYB_color_wheel.svg/768px-RYB_color_wheel.svg.png" alt="Color Wheel" width="300" />
  </div>

  <div id="color-types">
    <h2>Color Categories</h2>
    <ul>
      <li><strong>Monochromatic:</strong> Variations of a single hue (light to dark)</li>
      <li><strong>Analogous:</strong> Colors next to each other on the wheel</li>
      <li><strong>Complementary:</strong> Opposite colors on the wheel</li>
      <li><strong>Triadic:</strong> Equally spaced colors (like a triangle)</li>
    </ul>
    <p>Choose based on the mood and purpose of your design.</p>
  </div>

  <div id="color-contrast">
    <h2>Contrast & Accessibility</h2>
    <p>Ensure that your colors have enough contrast, especially between background and text. Use tools like:</p>
    <ul>
      <li><a href="https://webaim.org/resources/contrastchecker/" target="_blank">WebAIM Contrast Checker</a></li>
      <li><a href="https://color.adobe.com" target="_blank">Adobe Color</a></li>
    </ul>
    <p>Example: Dark text on light background is more readable.</p>
  </div>

  <div id="color-palettes">
    <h2>Creating Color Palettes</h2>
    <p>Good palettes enhance user experience and branding. Keep it simple: 1 primary, 1 secondary, and 2–3 accent colors.</p>
    <p>Use palette generators:</p>
    <ul>
      <li><a href="https://coolors.co" target="_blank">Coolors.co</a></li>
      <li><a href="https://material.io/resources/color/" target="_blank">Material Color Tool</a></li>
    </ul>
  </div>

  <div id="color-examples">
    <h2>Color Usage Examples</h2>
    <pre><code>body {
  background-color: #f8f9fa; /* Light gray */
  color: #212529;            /* Dark text */
}

.btn-primary {
  background-color: #007bff;
  border-color: #007bff;
}</code></pre>

    <p>Try to maintain brand consistency with colors across your entire website.</p>
  </div>

</div>
</body>
</html>
