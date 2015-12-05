var fs = require('fs');

var index_filename = "index.php";
var header_filename = "php/head.php";

var index = fs.readFileSync(index_filename).toString();
var header = fs.readFileSync(header_filename).toString();

var result = index.replace(/require-header/g, header);

//console.log(result);	

// save the file
fs.writeFile("build.html", result, 'utf8', function (err) {
	if (err) return console.log(err);
});