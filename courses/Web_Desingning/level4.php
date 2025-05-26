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
  <title>Level 4: UI/UX Basics</title>
</head>
<body>

<ul id="vnav">
  <li><a href="#uiux-intro">What is UI/UX?</a></li>
  <li><a href="#ui-principles">UI Design Principles</a></li>
  <li><a href="#ux-principles">UX Design Principles</a></li>
  <li><a href="#uiux-difference">UI vs UX</a></li>
  <li><a href="#uiux-tools">Common Tools</a></li>
  <li><a href="#uiux-tips">Best Practices</a></li>
</ul>

<div class="content">

  <div id="uiux-intro">
    <h2>What is UI/UX?</h2>
    <p><strong>UI (User Interface)</strong> focuses on how the product looks—layout, colors, typography, buttons, etc.<br>
    <strong>UX (User Experience)</strong> focuses on how the product works—navigation, flow, ease of use, satisfaction, etc.</p>
  </div>

  <div id="ui-principles">
    <h2>UI Design Principles</h2>
    <ul>
      <li><strong>Consistency:</strong> Use consistent elements like colors, fonts, and buttons throughout the interface.</li>
      <li><strong>Clarity:</strong> Keep the design clean and readable.</li>
      <li><strong>Feedback:</strong> Show visual response to user actions (hover, loading, success messages).</li>
      <li><strong>Visual Hierarchy:</strong> Important elements should be more visible (size, color, position).</li>
      <li><strong>Accessibility:</strong> Design for all users, including those with disabilities.</li>
    </ul>
  </div>

  <div id="ux-principles">
    <h2>UX Design Principles</h2>
    <ul>
      <li><strong>Understand the User:</strong> Know your target audience and their pain points.</li>
      <li><strong>Simplicity:</strong> Remove unnecessary steps and simplify tasks.</li>
      <li><strong>Navigation:</strong> Make it easy to move around and know where the user is.</li>
      <li><strong>Performance:</strong> Fast-loading, responsive websites lead to a better experience.</li>
      <li><strong>Testing:</strong> Always test with real users and improve based on feedback.</li>
    </ul>
  </div>

  <div id="uiux-difference">
    <h2>UI vs UX</h2>
    <table border="1" cellpadding="8">
      <thead>
        <tr>
          <th>UI</th>
          <th>UX</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>How it looks</td>
          <td>How it feels</td>
        </tr>
        <tr>
          <td>Focus on visuals</td>
          <td>Focus on user journey</td>
        </tr>
        <tr>
          <td>Colors, fonts, buttons</td>
          <td>Navigation, feedback, speed</td>
        </tr>
        <tr>
          <td>Tools: Figma, Adobe XD</td>
          <td>Tools: User testing, analytics</td>
        </tr>
      </tbody>
    </table>
  </div>

  <div id="uiux-tools">
    <h2>Common UI/UX Tools</h2>
    <ul>
      <li><strong>Figma:</strong> Online UI/UX design tool for prototyping and collaboration.</li>
      <li><strong>Adobe XD:</strong> Powerful tool for wireframing and design.</li>
      <li><strong>Sketch:</strong> Mac-based UI design app.</li>
      <li><strong>InVision:</strong> For prototyping and user feedback.</li>
      <li><strong>Zeplin:</strong> For developer handoff.</li>
    </ul>
  </div>

  <div id="uiux-tips">
    <h2>Best Practices</h2>
    <ul>
      <li>Start with wireframes before jumping into colors and images.</li>
      <li>Use white space effectively to avoid clutter.</li>
      <li>Design for mobile users first (mobile-first approach).</li>
      <li>Use colors and typography that enhance readability.</li>
      <li>Always get user feedback before finalizing the design.</li>
    </ul>
  </div>

</div>
</body>
</html>
