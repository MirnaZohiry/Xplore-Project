const fetch = require('node-fetch');

var express = require('express');
var router = express.Router();

/* GET users listing. */
router.get('/', function(req, res, next) {
    fetch('http://user-service:3030/user')
        .then(res => res.json())
        .then(json => res.json(json));
});

router.post('/', function(req, res, next) {

    let data = {name : req.body.name, email : req.body.email, password : req.body.password, phone : req.body.phone};


    fetch('http://user-service:3030/user', { method: 'POST', body: JSON.stringify(data) })
        .then(res => res.json())
        .then(json => console.log(json));

});

router.get('/:id', function (req, res, next) {
    fetch('http://user-service:3030/user/' + req.params.id)
        .then(res => res.json())
        .then(json => res.json(json));
})
module.exports = router;
