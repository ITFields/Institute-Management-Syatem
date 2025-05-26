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
  <li><a href="#git-intro">Introduction to Git</a></li>
  <li><a href="#git-setup">Git Installation & Setup</a></li>
  <li><a href="#git-commands">Basic Git Commands</a></li>
  <li><a href="#github-intro">Introduction to GitHub</a></li>
  <li><a href="#github-commands">Pushing to GitHub</a></li>
  <li><a href="#git-clone">Cloning a Repository</a></li>
  <li><a href="#git-branching">Branching in Git</a></li>
  <li><a href="#git-merge">Merging in Git</a></li>
</ul>

<div class="content">
  <div id="git-intro">
    <h2>Introduction to Git</h2>
    <p>Git is a distributed version control system that helps you track changes in your codebase and collaborate with other developers efficiently.</p>
  </div>

  <div id="git-setup">
    <h2>Git Installation & Setup</h2>
    <pre><code>// Check Git Version
git --version

// Set username and email (only once)
git config --global user.name "Your Name"
git config --global user.email "you@example.com"

// To view current config
git config --list</code></pre>
  </div>

  <div id="git-commands">
    <h2>Basic Git Commands</h2>
    <pre><code>// Initialize git in a folder
git init

// Check status of changes
git status

// Add all files to staging area
git add .

// Commit changes with message
git commit -m "Initial commit"

// View commit history
git log</code></pre>
  </div>

  <div id="github-intro">
    <h2>Introduction to GitHub</h2>
    <p>GitHub is a cloud-based platform that hosts your Git repositories and enables collaboration with others on your code.</p>
    <p>URL: <a href="https://github.com" target="_blank">https://github.com</a></p>
  </div>

  <div id="github-commands">
    <h2>Pushing to GitHub</h2>
    <pre><code>// Add remote origin
git remote add origin https://github.com/username/repo-name.git

// Push your local code to GitHub
git push -u origin main

// If you're pushing updates later
git push</code></pre>
  </div>

  <div id="git-clone">
    <h2>Cloning a Repository</h2>
    <pre><code>// Clone a GitHub repo to your local system
git clone https://github.com/username/repo-name.git</code></pre>
  </div>

  <div id="git-branching">
    <h2>Branching in Git</h2>
    <pre><code>// Create a new branch
git branch feature1

// Switch to the branch
git checkout feature1

// Create and switch at the same time
git checkout -b feature1</code></pre>
  </div>

  <div id="git-merge">
    <h2>Merging in Git</h2>
    <pre><code>// Switch to main branch
git checkout main

// Merge changes from feature1 branch
git merge feature1

// Delete feature1 branch (optional)
git branch -d feature1</code></pre>
  </div>
</div>

</body>
</html>
