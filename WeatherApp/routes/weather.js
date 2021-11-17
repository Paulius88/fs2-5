let express = require('express');
let router = express.Router();

router.get('/', function(req, res, next) {
	res.send('respond with a resource');
});

router.get('/places', function(req, res, next) {
	res.send('respond with a "places" resource');
});

module.exports = router;
