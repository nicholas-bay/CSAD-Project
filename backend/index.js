const express = require('express');
const bodyParser = require('body-parser');
const { createDB } = require('./config/db.config');
const app = express(); // create express app
createDB(); // create MySQL database
app.use(bodyParser.urlencoded({ extended: false }));
app.use(bodyParser.json());
// define root route
app.get("/", (req, res) => {
  res.json({ message: 'Hello to root route' });
});
// import users route
const usersRoutes = require('./src/routes/users.route');
// create users route
app.use('/api/v1/users', usersRoutes);
// set up localhost port
app.listen(3001, () => {
  console.log('Server running on port 3001');
});