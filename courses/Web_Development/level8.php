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
  <title>MongoDB Full Tutorial</title>
</head>
<body>

<ul id="vnav">
  <li><a href="#mongo-intro">Introduction to MongoDB</a></li>
  <li><a href="#mongo-install">Installation & Setup</a></li>
  <li><a href="#mongo-mongoose">Mongoose in MongoDB</a></li>
  <li><a href="#mongo-connection">Connecting to MongoDB</a></li>
  <li><a href="#mongo-crud">CRUD Operations</a></li>
  <li><a href="#mongo-model">Creating Models</a></li>
  <li><a href="#mongo-aggregation">Aggregation in MongoDB</a></li>
  <li><a href="#mongo-indexes">Indexes in MongoDB</a></li>
  <li><a href="#mongo-query">Querying Data</a></li>
  <li><a href="#mongo-validation">Data Validation</a></li>
  <li><a href="#mongo-performance">Performance & Optimization</a></li>
  <li><a href="#mongo-auth">Authentication</a></li>
</ul>

<div class="content">

  <div id="mongo-intro">
    <h2>Introduction to MongoDB</h2>
    <p>MongoDB is a NoSQL database that stores data in flexible, JSON-like documents. It's designed for scalability, high availability, and ease of use, especially for large applications with unstructured data.</p>
  </div>

  <div id="mongo-install">
    <h2>Installation & Setup</h2>
    <pre><code># Download MongoDB from mongodb.com
# Start MongoDB
mongod

# Install MongoDB Driver for Node.js
npm install mongodb</code></pre>
  </div>

  <div id="mongo-mongoose">
    <h2>Mongoose in MongoDB</h2>
    <p>Mongoose is an Object Data Modeling (ODM) library for MongoDB and Node.js. It provides a schema-based solution to model your data.</p>
    <pre><code>const mongoose = require('mongoose');
mongoose.connect('mongodb://localhost:27017/mydb', { useNewUrlParser: true, useUnifiedTopology: true });

const User = mongoose.model('User', {
  name: String,
  email: String
});

const newUser = new User({ name: 'John Doe', email: 'john@example.com' });
newUser.save();</code></pre>
  </div>

  <div id="mongo-connection">
    <h2>Connecting to MongoDB</h2>
    <pre><code>const mongoose = require('mongoose');

// Connecting to MongoDB
mongoose.connect('mongodb://localhost:27017/mydb', { useNewUrlParser: true, useUnifiedTopology: true })
  .then(() => console.log('MongoDB connected'))
  .catch(err => console.error('MongoDB connection error:', err));</code></pre>
  </div>

  <div id="mongo-crud">
    <h2>CRUD Operations</h2>
    <pre><code>// Create Operation
const newUser = new User({ name: 'Alice', email: 'alice@example.com' });
newUser.save();

// Read Operation
User.find({}, (err, users) => {
  if (err) console.error(err);
  console.log(users);
});

// Update Operation
User.updateOne({ name: 'Alice' }, { $set: { email: 'alice@newdomain.com' }});

// Delete Operation
User.deleteOne({ name: 'Alice' });</code></pre>
  </div>

  <div id="mongo-model">
    <h2>Creating Models</h2>
    <pre><code>const mongoose = require('mongoose');

// Create a schema
const userSchema = new mongoose.Schema({
  name: String,
  email: String
});

// Create a model based on the schema
const User = mongoose.model('User', userSchema);</code></pre>
  </div>

  <div id="mongo-aggregation">
    <h2>Aggregation in MongoDB</h2>
    <pre><code>// Aggregation Example
User.aggregate([
  { $match: { name: 'Alice' } },
  { $group: { _id: '$name', total: { $sum: 1 } } }
]).then(result => console.log(result));</code></pre>
  </div>

  <div id="mongo-indexes">
    <h2>Indexes in MongoDB</h2>
    <pre><code>// Creating an index on the 'email' field
User.createIndexes([{ email: 1 }]);</code></pre>
  </div>

  <div id="mongo-query">
    <h2>Querying Data</h2>
    <pre><code>// Find a specific user by name
User.findOne({ name: 'Alice' }, (err, user) => {
  if (err) console.error(err);
  console.log(user);
});

// Find all users with a condition
User.find({ name: /A/ }).then(users => console.log(users));</code></pre>
  </div>

  <div id="mongo-validation">
    <h2>Data Validation</h2>
    <pre><code>const userSchema = new mongoose.Schema({
  name: { type: String, required: true },
  email: { type: String, required: true, unique: true }
});

// Create a model using the schema
const User = mongoose.model('User', userSchema);</code></pre>
  </div>

  <div id="mongo-performance">
    <h2>Performance & Optimization</h2>
    <p>MongoDB offers indexing, sharding, and replication to ensure data scalability and performance.</p>
    <pre><code>// Indexing for optimization
User.createIndexes([{ name: 1 }]);</code></pre>
  </div>

  <div id="mongo-auth">
    <h2>Authentication</h2>
    <pre><code>const mongoose = require('mongoose');
const bcrypt = require('bcryptjs');

const userSchema = new mongoose.Schema({
  email: { type: String, required: true },
  password: { type: String, required: true }
});

// Hash password before saving to the database
userSchema.pre('save', async function(next) {
  if (this.isModified('password')) {
    this.password = await bcrypt.hash(this.password, 10);
  }
  next();
});

const User = mongoose.model('User', userSchema);

// To authenticate, compare hashed passwords
User.findOne({ email: 'alice@example.com' }).then(user => {
  bcrypt.compare('plainPassword', user.password, (err, result) => {
    if (result) {
      console.log('Authentication successful');
    } else {
      console.log('Invalid credentials');
    }
  });
});</code></pre>
  </div>

</div>
</body>
</html>
