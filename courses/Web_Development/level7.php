<?php
include($_SERVER['DOCUMENT_ROOT'] . '/Project/navbar.php');
include($_SERVER['DOCUMENT_ROOT'] . '/Project/auth.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <title>Node.js Full Tutorial</title>
</head>
<body>

<ul id="vnav">
  <li><a href="#node-intro">Introduction to Node.js</a></li>
  <li><a href="#node-install">Installation & Setup</a></li>
  <li><a href="#node-modules">Modules in Node.js</a></li>
  <li><a href="#node-fs">File System Module</a></li>
  <li><a href="#node-http">HTTP Module</a></li>
  <li><a href="#node-events">Event Module</a></li>
  <li><a href="#node-express">Express.js Framework</a></li>
  <li><a href="#node-routing">Routing with Express</a></li>
  <li><a href="#node-middleware">Middleware</a></li>
  <li><a href="#node-restapi">REST API</a></li>
  <li><a href="#node-mongodb">MongoDB with Node</a></li>
  <li><a href="#node-auth">Authentication (JWT)</a></li>
  <li><a href="#node-env">Environment Variables</a></li>
  <li><a href="#node-error">Error Handling</a></li>
  <li><a href="#node-error">Error Handling</a></li>
</ul>

<div class="content">

  <div id="node-intro">
    <h2>Introduction to Node.js</h2>
    <p>Node.js is a runtime environment that lets you run JavaScript on the server side. It is built on Chrome’s V8 engine and is ideal for scalable, event-driven applications.</p>
  </div>

  <div id="node-install">
    <h2>Installation & Setup</h2>
    <pre><code># Windows/macOS: Download from nodejs.org
# Terminal command to check version
node -v
npm -v

# Create a new Node project
mkdir myapp
cd myapp
npm init -y</code></pre>
  </div>

  <div id="node-modules">
    <h2>Modules in Node.js</h2>
    <pre><code>// Using built-in module
const os = require('os');
console.log(os.platform());

// Creating custom module
// file: greet.js
module.exports = function(name) {
  return `Hello, ${name}`;
};

// file: app.js
const greet = require('./greet');
console.log(greet("Buddy"));</code></pre>
  </div>

  <div id="node-fs">
    <h2>File System Module</h2>
    <pre><code>const fs = require('fs');

// Read file
fs.readFile('text.txt', 'utf8', (err, data) => {
  if (err) throw err;
  console.log(data);
});

// Write file
fs.writeFile('hello.txt', 'Hi Buddy!', err => {
  if (err) throw err;
  console.log('File written!');
});</code></pre>
  </div>

  <div id="node-http">
    <h2>HTTP Module</h2>
    <pre><code>const http = require('http');

http.createServer((req, res) => {
  res.writeHead(200, {'Content-Type': 'text/plain'});
  res.end('Hello from Node Server!');
}).listen(3000);</code></pre>
  </div>

  <div id="node-events">
    <h2>Event Module</h2>
    <pre><code>const EventEmitter = require('events');
const emitter = new EventEmitter();

// Listen for event
emitter.on('greet', () => {
  console.log('Hello there!');
});

// Emit event
emitter.emit('greet');</code></pre>
  </div>

  <div id="node-express">
    <h2>Express.js Framework</h2>
    <pre><code>const express = require('express');
const app = express();

app.get('/', (req, res) => {
  res.send('Welcome to Express!');
});

app.listen(3000, () => console.log('Server running...'));</code></pre>
  </div>

  <div id="node-routing">
    <h2>Routing with Express</h2>
    <pre><code>app.get('/about', (req, res) => {
  res.send('About Page');
});

app.post('/submit', (req, res) => {
  res.send('Data submitted');
});</code></pre>
  </div>

  <div id="node-middleware">
    <h2>Middleware</h2>
    <pre><code>// Middleware example
app.use((req, res, next) => {
  console.log('Request received');
  next();
});</code></pre>
  </div>

  <div id="node-restapi">
    <h2>REST API</h2>
    <pre><code>app.use(express.json());

let users = [];

app.post('/api/users', (req, res) => {
  users.push(req.body);
  res.status(201).send('User added');
});

app.get('/api/users', (req, res) => {
  res.json(users);
});</code></pre>
  </div>

  <div id="node-mongodb">
    <h2>MongoDB with Node.js (Mongoose)</h2>
    <pre><code>const mongoose = require('mongoose');
mongoose.connect('mongodb://localhost:27017/mydb');

const User = mongoose.model('User', {
  name: String,
  email: String
});

app.post('/api/user', async (req, res) => {
  const user = new User(req.body);
  await user.save();
  res.send(user);
});</code></pre>
  </div>

  <div id="node-auth">
    <h2>Authentication with JWT</h2>
    <pre><code>const jwt = require('jsonwebtoken');

const token = jwt.sign({ id: 123 }, 'secretKey', { expiresIn: '1h' });

jwt.verify(token, 'secretKey', (err, decoded) => {
  if (err) return res.status(401).send('Invalid Token');
  console.log(decoded);
});</code></pre>
  </div>

  <div id="node-env">
    <h2>Environment Variables (.env)</h2>
    <pre><code>// .env file
PORT=3000
DB_URI=mongodb://localhost/mydb

// app.js
require('dotenv').config();
console.log(process.env.PORT);</code></pre>
  </div>

  <div id="node-error">
    <h2>Error Handling</h2>
    <pre><code>// Try-Catch
try {
  throw new Error("Something went wrong");
} catch (error) {
  console.error(error.message);
}

// Express Error Middleware
app.use((err, req, res, next) => {
  console.error(err.stack);
  res.status(500).send("Internal Server Error");
});</code></pre>
  </div>

</div>
</body>
</html>
