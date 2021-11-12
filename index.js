const express = require('express')
const app = express()

app.use("/", function(req, res){
    res.send({
        body: "hello there"
    })
})

app.listen(4000)

// start server = with "npm start"
// test with http = http localhost:4000