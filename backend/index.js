const express = require('express');
const {createDB} = require('./modules');
const app = express();

createDB();
app.listen(3001, () => {
  console.log('Server running on port 3001');
});