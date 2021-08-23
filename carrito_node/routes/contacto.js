const express = require('express')
const router = express.Router()
const nodemailer = require("nodemailer");


let title = "Contacto"

router.get('/', function (request, response) {  
  response.render('contacto', {title})
})

router.post('/', (req, res) => {

  const remitente = {
    nombre: req.body.nombre,
    email: req.body.email,
    mensaje: req.body.mensaje
  }


  async function main() {
   
    const transporter = nodemailer.createTransport({
      host: "smtp.gmail.com",
      port: 587,
      secure: false, // true for 465, false for other ports
      auth: {
        user: "correodeprueba.fp@gmail.com", // generated ethereal user
        pass: "correodeprueba", // generated ethereal password
      },
    });
    
    let info = await transporter.sendMail({
      from: `${remitente.nombre} <${remitente.email}>`, // sender address
      to: "correodeprueba.fp@gmail.com", // list of receivers
      subject: "Nuevo Mensaje", // Subject line            
      html: `<strong>Nuevo Contacto</strong>
            <p>Nombre: ${remitente.nombre}</p>
            <p>Email: ${remitente.email}</p>
            <p>Mensaje: ${remitente.mensaje}</p>`, // html body
    });

    //console.log("Message sent: %s", info.messageId);
    console.log(info)
    // Message sent: <b658f8ca-6296-ccf4-8306-87d57a0b4321@example.com>    
  }

  //main().catch(res.render("errorcontacto.hbs",{error:"error"}));
  main().catch(console.error)

})

module.exports = router;