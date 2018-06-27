var fs = require('fs')
var request = require('request')

let file = process.argv[2]
let documentType = process.argv[3]


if ( fs.existsSync( file ) ) {
  if ( ! documentType ) { documentType = 'factura'}
  fs.readFile( file, function(err, contents) {
//    console.log(contents)
    request({
      url: 'https://prueba-fact.logicaldesign.pe/api/send-document',
      method: 'POST',
      json: {
        document: Buffer.from( contents ).toString('base64'),
        type: documentType
      }
    }, function(error, response, body){
      console.log( body )
    });
  })
} else {
  console.log( 'no existe el archivo ' + file )
}
