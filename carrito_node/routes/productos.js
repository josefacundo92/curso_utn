var express = require('express');
var router = express.Router();


let productos = [
  {
      id: 1,
      nombre: 'Mouse Logitech G PRO',
      stock: "Disponible",
      precio: 3999,
      imagen: 'mouse_logitech.jpg',
      descripcion: 'El G PRO se inspira en el sencillo y clásico chasis de Logitech G100 y G100s, favorito de destacados profesionales de eSports. La uniformidad y el confort son fundamentales para lograr el máximo. El mouse PRO cumple en ambos casos.'
  },

  {
      id: 2,
      nombre: 'Silla gamer Mars Gaming',
      stock: "Disponible",
      precio: 33499,
      imagen: 'silla_gamer.jpg',
      descripcion: 'La MGC3 es una silla gaming profesional con diseño de alta competición y excelente calidad. Con un respaldo totalmente reclinable, reposabrazos bidireccionales, zonas de contacto reforzadas y materiales resistentes. la MGC3 es la silla gaming perfecta para los jugadores más exigentes que buscan un aspecto deportivo.'
  },

  {
      id: 3,
      nombre: 'Tableta XP-PEN G640',
      stock: "Disponible",
      precio: 5899,
      imagen: 'tableta_grafica.jpg',
      descripcion: 'Disfruta el nuevo G640 de diseño ligero y elegante tal como el G430. Tiene tan sólo 2 mm de grosor, muy cómodo para llevarlo a cualquier lugar. El G640 proporciona una área activa más amplia si se compara con el G430! La nueva posición del puerto USB es para adaptarse de mejor forma en dibujar y jugar.'
  },

  {
      id: 4,
      nombre: 'Bangho MAX L4 i1',
      stock: "Disponible",
      precio: 48216 ,
      imagen: 'notebook.jpg',
      descripcion: 'La notebook Banghó MAX L4 i1 es una solución tanto para trabajar y estudiar como para entretenerte. Al ser portátil, el escritorio dejará de ser tu único espacio de uso para abrirte las puertas a otros ambientes ya sea en tu casa o en la oficina.'
  },

  {
      id: 5,
      nombre: 'Disco externo 2TB Seagate',
      stock: "Disponible",
      precio: 8465,
      imagen: 'disco.jpg',
      descripcion: 'Ultra Slim es una de las unidades portátiles más delgadas de Seagate. Con un tamaño de 9,6 mm para y 2 TB, obtendrá capacidad masiva sin tener que sacrificar nada. Disponible en atractivos colores dorado y platino, se trata de un almacenamiento con estilo. La puede guardar fácilmente en su mochila junto con todos sus demás artículos esenciales.'
  },

  {
      id: 6,
      nombre: 'Webcam PCBOX',
      stock: "Disponible",
      precio: 9999,
      imagen: 'webcam.jpg',
      descripcion: ' La marca fabricante de tecnología PCBOX anunció el lanzamiento y la disponibilidad de su nueva Webcam CALL. Ideal para video llamadas y/o hacer streaming en formato 4K y cuenta con doble micrófono incorporado y la posibilidad de tener una rotación de 360.'
  },

  {
      id: 7,
      nombre: 'Canon Pixma G3110',
      stock: "Disponible",
      precio: 32800,
      imagen: 'canon_pixma.jpg',
      descripcion: ' La impresora Canon Pixma te permitirá lograr impresiones de gran calidad con colores vivos y degradados suaves. Ocupa poco espacio y es fácil de manejar lo que la convierte en la opción ideal para cuestiones laborales, tareas escolares y requerimientos de la vida diaria.'
  },

  {
      id: 8,
      nombre: 'Monitor LG UL500',
      stock: "Disponible",
      precio: 72999,
      imagen: 'monitor.jpg',
      descripcion: 'Disfrutá de todas las cualidades que el monitor LG 27UL500 tiene para ofrecerte. Percibí las imágenes de una manera completamente diferente y complementa cualquier espacio ya sea en tu casa u oficina. Este monitor de 27" te va a resultar de gran comodidad para estudiar, trabajar o ver una película en tus tiempos de ocio. Asimismo, su resolución de 3840 x 2160 te permite disfrutar de momentos únicos gracias a una imagen con gran nitidez.'
  },
 
  {
      id: 9,
      nombre: 'Auriculares gamer Redragon ',
      stock: "Disponible",
      precio: 8090,
      imagen: 'auriculares.jpg',
      descripcion: '¡Experimentá la adrenalina de sumergirte en la escena de otra manera! Tener auriculares específicos para jugar cambia completamente tu experiencia en cada partida. Con los Redragon Zeus no te perdés ningún detalle y escuchás el audio tal y como fue diseñado por los creadores.'
  },

  {
      id: 10,
      nombre: 'Tablet Level Up',
      stock: "Disponible",
      precio: 9560,
      imagen: 'tablet_azul.jpg',
      descripcion: 'Esta tablet es ideal para cada una de tus actividades: editar fotos, documentos, navegar por internet y ¡mucho más! Su diseño delgado, compacto y portátil es la combinación perfecta de rendimiento y versatilidad. Transferir, sincronizar y acceder a tus dispositivos las veces que quieras ahora es posible. Sus conexiones bluetooth, micro usb, wi-fi te permiten potenciar sus funciones al máximo.'
  },

  {
      id: 11,
      nombre: 'Powerbank TP-LINK',
      stock: "Disponible",
      precio: 1590,
      imagen: 'cargador.jpg',
      descripcion: 'Esta tablet es ideal para cada una de tus actividades: editar fotos, documentos, navegar por internet y ¡mucho más! Su diseño delgado, compacto y portátil es la combinación perfecta de rendimiento y versatilidad. Transferir, sincronizar y acceder a tus dispositivos las veces que quieras ahora es posible. Sus conexiones bluetooth, micro usb, wi-fi te permiten potenciar sus funciones al máximo.'
  },

  {
      id: 12,
      nombre: 'Pendrive Kingston 64GB',
      stock: "Disponible",
      precio: 1126,
      imagen: 'pendrive.jpg',
      descripcion: 'Este pendrive te permitirá almacenar hasta 64 GB para que puedas guardar gran cantidad de información, imágenes u otros tipos de archivos. Con este dispositivo podrás mantener tus archivos siempre protegidos. Además su uso es muy práctico: solo debes conectarlo al aparato y arrastrar los archivos hasta la unidad.'
  },   

]

let title = "Catálogo de Productos"

/* GET home page. */
router.get('/', function(req, res) {
  res.render('productos',{title, productos});  
});

router.get('/:id', function(req, res) {    
    
    let paramURL = req.params.id
    
    let prodSingle = productos.find(productos => productos.id == paramURL)
    
    res.render('productoSimple.hbs',{prodSingle})

  });

module.exports = router;