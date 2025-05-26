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
  <title>Level 5: Figma & Wireframes</title>
</head>
<body>

<ul id="vnav">
  <li><a href="#figma-intro">What is Figma?</a></li>
  <li><a href="#wireframes">What are Wireframes?</a></li>
  <li><a href="#low-high">Low-Fidelity vs High-Fidelity</a></li>
  <li><a href="#figma-tools">Figma Tools Overview</a></li>
  <li><a href="#figma-steps">Creating a Wireframe in Figma</a></li>
  <li><a href="#figma-tips">Best Practices</a></li>
</ul>

<div class="content">

  <div id="figma-intro">
    <h2>What is Figma?</h2>
    <p>Figma is a free, web-based UI/UX design tool used for creating prototypes, wireframes, and user interfaces collaboratively in real-time. It's beginner-friendly and perfect for team projects.</p>
  </div>

  <div id="wireframes">
    <h2>What are Wireframes?</h2>
    <p>Wireframes are basic visual guides used to suggest the layout of a web page or app. They show content placement without color, images, or styling. It's like a skeleton or blueprint.</p>
  </div>

  <div id="low-high">
    <h2>Low-Fidelity vs High-Fidelity</h2>
    <table border="1" cellpadding="8">
      <thead>
        <tr>
          <th>Low-Fidelity Wireframe</th>
          <th>High-Fidelity Wireframe</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>Simple sketches or blocks</td>
          <td>Detailed design with fonts and images</td>
        </tr>
        <tr>
          <td>Used early in the design process</td>
          <td>Used in final stages before development</td>
        </tr>
        <tr>
          <td>Focuses on layout only</td>
          <td>Focuses on visuals and interaction</td>
        </tr>
      </tbody>
    </table>
  </div>

  <div id="figma-tools">
    <h2>Figma Tools Overview</h2>
    <ul>
      <li><strong>Frames:</strong> The base container (like Artboards).</li>
      <li><strong>Shapes:</strong> Rectangle, line, circle for wireframing.</li>
      <li><strong>Text Tool:</strong> Add headings, labels, paragraphs.</li>
      <li><strong>Auto Layout:</strong> Makes responsive, aligned designs.</li>
      <li><strong>Components:</strong> Reusable design elements (buttons, cards).</li>
      <li><strong>Prototyping:</strong> Add interactivity between screens.</li>
    </ul>
  </div>

  <div id="figma-steps">
    <h2>Steps to Create a Wireframe in Figma</h2>
    <ol>
      <li>Go to <a href="https://www.figma.com" target="_blank">figma.com</a> and create a free account.</li>
      <li>Click on “New Design File”.</li>
      <li>Use <strong>Frame Tool</strong> to create mobile or desktop screens.</li>
      <li>Add <strong>rectangles</strong> for headers, images, and text blocks.</li>
      <li>Use <strong>Text Tool</strong> to place dummy content (like lorem ipsum).</li>
      <li>Group and align elements using Auto Layout.</li>
      <li>Use <strong>Prototype tab</strong> to link screens (for navigation).</li>
      <li>Click “Present” to preview your wireframe as a flow.</li>
    </ol>
  </div>

  <div id="figma-tips">
    <h2>Best Practices</h2>
    <ul>
      <li>Start with low-fidelity wireframes to get quick feedback.</li>
      <li>Keep components reusable to save time.</li>
      <li>Use naming conventions and organize frames properly.</li>
      <li>Collaborate using comments and share links.</li>
      <li>Always test your prototype with actual users before moving forward.</li>
    </ul>
  </div>

</div>
</body>
</html>
