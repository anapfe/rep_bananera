// esta funcion es porque no se vuelve a ejectura el frontdesjk js y no sé como hacer para que se vuelva a ejecutar
function projectCaption() {
  var projectCaption = document.querySelectorAll('.project-caption');
  projectCaption.forEach(function(element)
  {
    element.addEventListener('mouseover', function() {
      var parent = element.parentElement;
      var child = parent.children[1];
      child.classList.add('show-caption');
    });
  });
  projectCaption.forEach(function(element)
  {
    element.addEventListener('mouseout', function() {
      element.classList.remove('show-caption');
    });
  });
}

function ajaxLoad( filename, content ){
  content = typeof content !== 'undefined' ? content : 'content'
  var loader = document.querySelector('.loader');
  loader.style.display = "block";

  // iniciamos ajax
  var ajax = new XMLHttpRequest();

  // Le decimos al objeto que cuando cambia su estado (tiene 4 estados, el que nos importa es le 4to) corra la función.
  ajax.onreadystatechange = function(){
    // Si el estado es el 4to (significa que recibimos datos) y el status (http) es 200 (de nuevo, significa que todo está perfecto) hacemos algo.
    if(this.readyState == 4 && this.status == 200){
      // Guardamos en una variable, this(se refiere a ajax de arriba).responseText que nos devuelve el json. Usando JSON.parse() lo convertimos en objeto.
      var contenido = this.responseText;
      //la siguiente linea es para cuando traigo un JSON de algun lado tipo consumo de API
      // var contenido = JSON.parse(this.responseText);
      //mi codigo va a partir de acá. HACER ALGO CON LA INFO QUE VIENE
      var contenedor = document.querySelector('#content');
      contenedor.innerHTML = contenido;
      // var loading = document.querySelector('.loading');
      projectCaption();
      loader.style.display = "none";
    };
  };

  //define si traigo(GET) o  si llevo (POST) y a qué dirección
  ajax.open("GET", filename);
  //le avisa a la página que recibe que es una petición de AJAX
  ajax.setRequestHeader('X-Requested-With', 'XMLHttpRequest');

  //envia la petición
  ajax.send();
};
