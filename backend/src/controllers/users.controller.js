const userModel = require('../models/users.model');
// get all users
exports.getUsersList = (req, res) => {
  userModel.getAllUsers((err, users) => {
    if (err) res.send(err);
    console.log('Users', users);
    res.send(users)
  })
}
// get user by username
exports.getUserByUsername = (req, res) => {
  userModel.getUserbyUsername(req.params.username, (err, users) => {
    if (err) res.send(err);
    console.log('User by username', users);
    res.send(users)
  })
}
// create new user
exports.createNewUser = (req, res) => {
  const userReqData = new userModel(req.body);
  console.log('req data', userReqData);
  // check null
  if (req.body.constructor === Object && Object.keys(req.body).length === 0)
    res.send(400).send({ success: false, message: 'Please fill all fields' });
  else {
    userModel.createUser(userReqData, (err, user) => {
      if (err) res.send(err); 
      res.json({ status: true, message: 'User Created Successfully', data: user.insertUsername })
    })
  }
}