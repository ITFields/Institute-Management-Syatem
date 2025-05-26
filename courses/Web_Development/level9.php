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
  <title>REST API Full Tutorial</title>
</head>
<body>

<ul id="vnav">
  <li><a href="#api-intro">Introduction to REST APIs</a></li>
  <li><a href="#http-methods">HTTP Methods (GET, POST, PUT, DELETE)</a></li>
  <li><a href="#rest-routes">Setting up RESTful Routes</a></li>
  <li><a href="#rest-json">Working with JSON</a></li>
  <li><a href="#rest-node-express">REST API using Node.js & Express</a></li>
  <li><a href="#rest-mongodb">Connecting REST API to MongoDB</a></li>
  <li><a href="#rest-validation">Validation & Error Handling</a></li>
  <li><a href="#rest-postman">Testing API using Postman</a></li>
  <li><a href="#rest-auth">REST API Authentication (JWT)</a></li>
  <li><a href="#rest-best-practices">Best Practices</a></li>
</ul>

<div class="content">

  <div id="api-intro">
    <h2>Introduction to REST APIs</h2>
    <p>REST (Representational State Transfer) API is a set of rules that allows systems to communicate over HTTP. RESTful APIs are stateless and use standard HTTP methods like GET, POST, PUT, DELETE.</p>
  </div>

  <div id="http-methods">
    <h2>HTTP Methods</h2>
    <ul>
      <li><strong>GET</strong> – Read data</li>
      <li><strong>POST</strong> – Create data</li>
      <li><strong>PUT</strong> – Update data</li>
      <li><strong>DELETE</strong> – Delete data</li>
    </ul>
  </div>

  <div id="rest-routes">
    <h2>RESTful Routes Example</h2>
    <pre><code>
// RESTful routes for a "users" resource

GET      /users           → Get all users  
GET      /users/:id       → Get user by ID  
POST     /users           → Create a new user  
PUT      /users/:id       → Update user  
DELETE   /users/:id       → Delete user
</code></pre>
  </div>

  <div id="rest-json">
    <h2>Working with JSON</h2>
    <p>APIs send and receive data in JSON (JavaScript Object Notation) format:</p>
    <pre><code>{
  "name": "Alice",
  "email": "alice@example.com"
}</code></pre>
  </div>

  <div id="rest-node-express">
    <h2>REST API using Node.js & Express</h2>
    <pre><code>const express = require('express');
const app = express();
const port = 3000;

app.use(express.json()); // to parse JSON

let users = [];

// GET
app.get('/users', (req, res) => {
  res.json(users);
});

// POST
app.post('/users', (req, res) => {
  users.push(req.body);
  res.status(201).json({ message: 'User added' });
});

// PUT
app.put('/users/:id', (req, res) => {
  const id = req.params.id;
  users[id] = req.body;
  res.json({ message: 'User updated' });
});

// DELETE
app.delete('/users/:id', (req, res) => {
  const id = req.params.id;
  users.splice(id, 1);
  res.json({ message: 'User deleted' });
});

app.listen(port, () => console.log(`API running at http://localhost:${port}`));</code></pre>
  </div>

  <div id="rest-mongodb">
    <h2>Connecting REST API to MongoDB</h2>
    <pre><code>const mongoose = require('mongoose');

mongoose.connect('mongodb://localhost:27017/mydb', {
  useNewUrlParser: true,
  useUnifiedTopology: true
});

const userSchema = new mongoose.Schema({
  name: String,
  email: String
});
const User = mongoose.model('User', userSchema);

// POST
app.post('/users', async (req, res) => {
  const user = new User(req.body);
  await user.save();
  res.status(201).json(user);
});

// GET
app.get('/users', async (req, res) => {
  const users = await User.find();
  res.json(users);
});</code></pre>
  </div>

  <div id="rest-validation">
    <h2>Validation & Error Handling</h2>
    <pre><code>// Validation using mongoose
const userSchema = new mongoose.Schema({
  name: { type: String, required: true },
  email: { type: String, required: true }
});

// Error Handling
app.use((err, req, res, next) => {
  res.status(500).json({ error: err.message });
});</code></pre>
  </div>

  <div id="rest-postman">
    <h2>Testing API with Postman</h2>
    <p>Postman is a popular tool to test REST APIs. You can:</p>
    <ul>
      <li>Send requests (GET, POST, PUT, DELETE)</li>
      <li>Set Headers (e.g., Content-Type: application/json)</li>
      <li>View response and status codes</li>
    </ul>
  </div>

  <div id="rest-auth">
    <h2>REST API Authentication using JWT</h2>
    <pre><code>const jwt = require('jsonwebtoken');

app.post('/login', (req, res) => {
  const user = { id: 1, name: 'admin' }; // demo user
  const token = jwt.sign(user, 'secretkey');
  res.json({ token });
});

// Middleware to verify token
function verifyToken(req, res, next) {
  const bearerHeader = req.headers['authorization'];
  if (typeof bearerHeader !== 'undefined') {
    const token = bearerHeader.split(' ')[1];
    jwt.verify(token, 'secretkey', (err, authData) => {
      if (err) res.sendStatus(403);
      else {
        req.authData = authData;
        next();
      }
    });
  } else {
    res.sendStatus(403);
  }
}

// Protect route
app.get('/protected', verifyToken, (req, res) => {
  res.json({ message: 'You are authorized', authData: req.authData });
});</code></pre>
  </div>

  <div id="rest-best-practices">
    <h2>Best Practices for REST APIs</h2>
    <ul>
      <li>Use proper HTTP status codes (200, 201, 400, 404, 500)</li>
      <li>Use plural nouns for resources (e.g., /users)</li>
      <li>Keep it stateless – each request should be independent</li>
      <li>Use pagination for large data sets</li>
      <li>Secure your APIs using tokens (JWT, OAuth)</li>
    </ul>
  </div>

</div>
</body>
</html>
