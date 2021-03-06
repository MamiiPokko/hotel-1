var express = require('express')
var app = express()
var bodyParser = require('body-parser')
var cors = require('cors')
var mysql      = require('mysql');
var connection = mysql.createConnection({
  host     : 'localhost',
  user     : 'root',
  password : '',
  database : 'blog'
});
const request = require('request');
const token = 'GyYfc9kXm5d5QchtZnLLi4nj8GPeHOUTECb56Rdorcs';

app.use(cors())

// parse application/x-www-form-urlencoded 
app.use(bodyParser.urlencoded({ extended: false }))
 
// parse application/json 
app.use(bodyParser.json())

app.get('/', function (req, res) {
	connection.query('SELECT * FROM HOTELS', function (error, results, fields) {
	  if (error) throw error;
	  // connected!
	  console.log(results)
	  res.send(JSON.stringify(results))
	});
})

app.post('/bookingroom', function(req, res) {
	console.log('income request')
	console.log(req.body)
	const _selfRes = res
	const newMessage = ` ชื่อ : ${req.body.name}  นามสกุล : ${req.body.surname}  เบอร์ติดต่อกลับ : ${req.body.tel} ` 
						
						
	connection.query('INSERT INTO CUSTOMERS (name,surname,address,email,tel) VALUES ("'+req.body.name+'","'+req.body.surname+'","'+req.body.address+'","'+req.body.email+'","'+req.body.tel+'")',
		function (error, results, feilds){
			if (error) throw error;
			else
			{
				const _selfResults = results
				//console.log(_selfResults)
				request({
				       method: 'POST',
				       uri: 'https://notify-api.line.me/api/notify',
				       headers: {
				         'Content-Type': 'application/x-www-form-urlencoded',
				       },
				       'auth': {
				         'bearer': token
				       },form: {
				         message: newMessage,
				       }
				}, function(err,httpResponse,body){
				    _selfRes.redirect('http://localhost/hotel-1/public/result/'+JSON.stringify(_selfResults.insertId))
				})
			}
		});
})

app.listen(3000, function () {
  console.log('Example app listening on port 3000!')
})


