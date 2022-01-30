var con = require('../../config/dbCon.config');
var User = function(user) {
  this.username = User.username;
  this.password = User.password;
  this.type = User.type;
}
// get all users
User.getAllUsers = (result) => {
  con.query('SELECT * FROM users', (err, res) => {
    if (err) {
      console.log('Error while fetching users', err);
      result(null, err);
    }
    else {
      console.log('users fetched successfully');
      result(null, res);
    }
  })
}
// get user by username
User.getUserbyUsername = (username, result) => {
  con.query('SELECT * FROM users WHERE username = ?', username, (err, res) => {
    if (err) {
      console.log('Error while fetching user by username', err);
      result(null, err);
    }
    else {
      console.log('user by username fetched successfully');
      result(null, res);
    }
  })
}
// create new user
User.createUser = (userReqData, result) => {
  con.query('INSERT INTO users SET ?', userReqData, (err, res) => {
    if (err) {
      console.log('Error while inserting user');
      result(null, err);
    }
    else {
      console.log('user inserted successfully');
      result(null, res);
    }
  })
}

module.exports = User;