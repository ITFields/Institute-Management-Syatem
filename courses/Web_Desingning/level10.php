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
  <title>Level 10: Portfolio Project</title>
</head>
<body>

<ul id="vnav">
  <li><a href="#portfolio-intro">Why Create a Portfolio?</a></li>
  <li><a href="#essential-elements">Essential Elements of a Portfolio</a></li>
  <li><a href="#designing-your-portfolio">Designing Your Portfolio</a></li>
  <li><a href="#showcasing-projects">Showcasing Your Projects</a></li>
  <li><a href="#best-practices-portfolio">Best Practices</a></li>
</ul>

<div class="content">

  <div id="portfolio-intro">
    <h2>Why Create a Portfolio?</h2>
    <p>A portfolio is a collection of your work that demonstrates your skills, expertise, and creativity. It is a tool for showcasing your abilities and helps potential employers or clients understand the type of work you do. A well-crafted portfolio enhances your credibility and increases your chances of securing jobs and projects.</p>
  </div>

  <div id="essential-elements">
    <h2>Essential Elements of a Portfolio</h2>
    <p>Your portfolio should include the following key components:</p>
    <ul>
      <li><strong>Introduction/About Me:</strong> A brief section about you, your background, and what you do.</li>
      <li><strong>Project Gallery:</strong> Display your projects with descriptions and links to view more details or live demos.</li>
      <li><strong>Skills & Tools:</strong> A section highlighting the technologies you are proficient in.</li>
      <li><strong>Resume:</strong> Include your educational and professional background.</li>
      <li><strong>Contact Information:</strong> Provide your contact details or a form to reach you.</li>
    </ul>
  </div>

  <div id="designing-your-portfolio">
    <h2>Designing Your Portfolio</h2>
    <p>The design of your portfolio plays a crucial role in creating a lasting impression. Consider these tips when designing your portfolio:</p>
    <ul>
      <li><strong>Simplicity:</strong> Keep the design clean and straightforward to allow your work to stand out.</li>
      <li><strong>Navigation:</strong> Ensure the navigation is easy to follow with a user-friendly layout.</li>
      <li><strong>Responsiveness:</strong> Your portfolio should be mobile-friendly and look great on all devices.</li>
      <li><strong>Personalization:</strong> Use your unique branding style, including fonts, colors, and logos, to make the portfolio reflect your personal touch.</li>
    </ul>
  </div>

  <div id="showcasing-projects">
    <h2>Showcasing Your Projects</h2>
    <p>When showcasing your projects, it’s important to present them clearly. Consider including:</p>
    <ul>
      <li><strong>Project Title:</strong> A short, descriptive name for the project.</li>
      <li><strong>Project Description:</strong> Explain what the project is about, the problem it solves, and how you tackled it.</li>
      <li><strong>Technologies Used:</strong> List the technologies, tools, and frameworks used in the project.</li>
      <li><strong>Link to Live Project:</strong> Include a URL for a live demo if applicable.</li>
      <li><strong>Code Repository:</strong> Provide links to GitHub or other code hosting platforms if available.</li>
    </ul>
    <p>Here is a sample of how to display a project in HTML:</p>
    <pre><code>&lt;div class="project"&gt;
  &lt;h3&gt;Project Title&lt;/h3&gt;
  &lt;p&gt;A brief description of the project and its goals.&lt;/p&gt;
  &lt;ul&gt;
    &lt;li&gt;Technologies Used: HTML, CSS, JavaScript&lt;/li&gt;
    &lt;li&gt;Live Demo: &lt;a href="http://example.com"&gt;View Project&lt;/a&gt;&lt;/li&gt;
    &lt;li&gt;Code: &lt;a href="https://github.com/username/project"&gt;GitHub Repo&lt;/a&gt;&lt;/li&gt;
  &lt;/ul&gt;
&lt;/div&gt;</code></pre>
  </div>

  <div id="best-practices-portfolio">
    <h2>Best Practices</h2>
    <p>Here are some tips for creating an impressive portfolio:</p>
    <ul>
      <li><strong>Keep It Updated:</strong> Regularly update your portfolio with new projects and skills.</li>
      <li><strong>Highlight Your Best Work:</strong> Display your best projects that reflect your skills, not just every project you’ve ever worked on.</li>
      <li><strong>Personal Branding:</strong> Incorporate elements of personal branding, such as a logo and a consistent color scheme.</li>
      <li><strong>Call to Action:</strong> Make it easy for potential clients or employers to contact you by including a call to action, such as a contact form or an email link.</li>
    </ul>
    <p>Building a portfolio is not just about showcasing what you’ve done, but also demonstrating your potential. It’s an opportunity to express who you are and what you stand for as a web developer.</p>
  </div>

</div>
</body>
</html>
