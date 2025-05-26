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
  <title>Full Stack REST API Integration</title>
</head>
<body>

<ul id="vnav">
  <li><a href="#stack-overview">Overview of the Stack</a></li>
  <li><a href="#backend-setup">Backend Setup (Node + Express + MongoDB)</a></li>
  <li><a href="#frontend-setup">Frontend Setup (React)</a></li>
  <li><a href="#connect-frontend-backend">Connecting React to Node.js API</a></li>
  <li><a href="#fetch-data">Fetching and Displaying Data</a></li>
  <li><a href="#form-submit">Submitting Form Data</a></li>
  <li><a href="#update-delete">Update and Delete Operations</a></li>
  <li><a href="#final-tips">Final Integration Tips</a></li>
</ul>

<div class="content">

  <div id="stack-overview">
    <h2>Overview of the Full Stack</h2>
    <p>We will use the MERN stack:</p>
    <ul>
      <li><strong>MongoDB</strong> – Database</li>
      <li><strong>Express</strong> – Node.js web framework (Backend)</li>
      <li><strong>React</strong> – Frontend library</li>
      <li><strong>Node.js</strong> – Server-side runtime</li>
    </ul>
  </div>

  <div id="backend-setup">
    <h2>Backend Setup</h2>
    <pre><code>// 1. Create project folder
mkdir mern-backend
cd mern-backend
npm init -y
npm install express mongoose cors

// 2. Basic server (index.js)
const express = require('express');
const mongoose = require('mongoose');
const cors = require('cors');

const app = express();
app.use(cors());
app.use(express.json());

mongoose.connect('mongodb://localhost:27017/myapp', {
  useNewUrlParser: true, useUnifiedTopology: true
});

const userSchema = new mongoose.Schema({
  name: String, email: String
});
const User = mongoose.model('User', userSchema);

// Routes
app.get('/users', async (req, res) => {
  const users = await User.find();
  res.json(users);
});

app.post('/users', async (req, res) => {
  const newUser = new User(req.body);
  await newUser.save();
  res.status(201).json(newUser);
});

app.listen(5000, () => console.log("Server running on http://localhost:5000"));</code></pre>
  </div>

  <div id="frontend-setup">
    <h2>Frontend Setup</h2>
    <pre><code>// 1. Create frontend
npx create-react-app mern-frontend
cd mern-frontend
npm start

// 2. Install Axios for API calls
npm install axios

// 3. Folder structure suggestion
/src
  /components
    - UserList.js
    - AddUserForm.js
  - App.js
</code></pre>
  </div>

  <div id="connect-frontend-backend">
    <h2>Connecting React to Node API</h2>
    <p>Use Axios to send requests from React to Node server:</p>
    <pre><code>// src/components/UserList.js
import axios from 'axios';
import React, { useEffect, useState } from 'react';

function UserList() {
  const [users, setUsers] = useState([]);

  useEffect(() => {
    axios.get('http://localhost:5000/users')
      .then(res => setUsers(res.data))
      .catch(err => console.error(err));
  }, []);

  return (
    &lt;div&gt;
      &lt;h3&gt;User List&lt;/h3&gt;
      &lt;ul&gt;
        {users.map((u, i) => (
          &lt;li key={i}&gt;{u.name} ({u.email})&lt;/li&gt;
        ))}
      &lt;/ul&gt;
    &lt;/div&gt;
  );
}

export default UserList;
</code></pre>
  </div>

  <div id="fetch-data">
    <h2>Fetching and Displaying Data</h2>
    <p>Use `useEffect()` to fetch data on page load and map to display it.</p>
  </div>

  <div id="form-submit">
    <h2>Submitting Form Data</h2>
    <pre><code>// src/components/AddUserForm.js
import axios from 'axios';
import React, { useState } from 'react';

function AddUserForm() {
  const [name, setName] = useState('');
  const [email, setEmail] = useState('');

  const handleSubmit = (e) => {
    e.preventDefault();
    axios.post('http://localhost:5000/users', { name, email })
      .then(res => alert("User Added"))
      .catch(err => console.error(err));
  };

  return (
    &lt;form onSubmit={handleSubmit}&gt;
      &lt;input type="text" placeholder="Name" value={name} onChange={e => setName(e.target.value)} /&gt;
      &lt;input type="email" placeholder="Email" value={email} onChange={e => setEmail(e.target.value)} /&gt;
      &lt;button type="submit"&gt;Add User&lt;/button&gt;
    &lt;/form&gt;
  );
}

export default AddUserForm;
</code></pre>
  </div>

  <div id="update-delete">
    <h2>Update and Delete Operations</h2>
    <pre><code>// DELETE example
axios.delete(`http://localhost:5000/users/${id}`)

// PUT example
axios.put(`http://localhost:5000/users/${id}`, { name, email })</code></pre>
    <p>Backend mein bhi DELETE aur PUT route banana padega.</p>
  </div>

  <div id="final-tips">
    <h2>Final Integration Tips</h2>
    <ul>
      <li>Use <code>proxy</code> in React’s package.json for development:</li>
      <pre><code>"proxy": "http://localhost:5000"</code></pre>
      <li>Don’t forget to handle CORS and JSON parsing in backend.</li>
      <li>Always test APIs in Postman before frontend integration.</li>
    </ul>
  </div>

</div>
</body>
</html>
