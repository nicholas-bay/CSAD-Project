const express = require('express');
const router = express.Router();
const usersController = require('../controllers/users.controller');

router.get('/', usersController.getUsersList);

router.get('/:username', usersController.getUserByUsername);

router.post('/', usersController.createNewUser);

module.exports = router;