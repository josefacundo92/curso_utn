var express = require('express');
var router = express.Router();

let title = "Nosotros"

/* GET home page. */
router.get('/', function(req, res) {
  res.render('index', {title});
});

module.exports = router;
