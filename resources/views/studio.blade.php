@extends('layouts.frontLayout')

@section('content')
  <div class="main">
    <img class="image" src=" {{ asset('images/le_me.jpg') }}" alt="studio">
    <div class="text">
      @if (App::isLocale('en'))
        <p>
          Hi! My name is Ana Pfefferkorn, I was born in Vicente Lopez on March 21, 1988. I am a Graphic Designer graduated from UBA in 2015 although I started studying Clothing Design and then I changed. Some of my work from that stage can be found in the "Projects" tab. I have also been a Fullstack Web Developer at Digital House since 2017. In this course I learned CSS, HTML5, Javascript, how to use GIT, PHP, Laravel repositories, how to make AJAX requests, a bit of SASS, a bit of REACT and to work with Agile Methodologies.
        </p>
        <br>
        <p>
          Since 2008 I have been working with my family at Repuestos Miter, a family business that sells spare parts for household appliances where I am in charge of customer service, both via WhatsApp and MercadoLibre, product photography and the creation of publications. In 2008 I worked as a receptionist and telephone operator in a commercial production company, Banana Films, and in 2011 I worked as an assistant in a graphic design studio, Imagenzero. Also, for some years I have been working as a freelance graphic designer.
        </p>
        <br>
        <p>
          I consider myself a restless and passionate person. I like to learn things almost constantly, I am currently learning German and working with the VUEjs framework. I did many courses such as handmade screen printing, crochet, Chinese embroidery, classic embroidery focused on illustration, marbling on fabric, handmade serography, photography and black and white laboratory, manual development of c-41 color film, studio lighting, digital photographic editing, lingerie (mold, use of machines).
        </p>
        <br>
        <p>
          I made this page using references and adapting it to what I was needing. I am using Laravel as Framework, CSS and Javascript written by me. On home I implemented AJAX requests. This and other projects can be found on my github:
          <a style="color:coral" href="https://github.com/anapfe/ "> github.com/anapfe/ </a>
        </p>
      @elseif (App::isLocale('cat'))
        <p>
          Hola! El meu nom és Ana Pfefferkorn, vaig néixer a Vicente Lopez el 21 de març de 1988. Sóc Dissenyadora Gràfica graduada de l'UBA en 2015 tot i que vaig començar cursant Disseny d'Indumentària i després em vaig canviar. Alguns dels meus treballs d'aquesta etapa es poden trobar a la pestanya "proyetos". També sóc Desenvolupadora Web Fullstack de Digital House des 2017. En aquest curs vaig aprendre CSS, HTML5, Javascript, a fer servir repositoris GIT, PHP, Laravel, a fer peticions AJAX, una mica de SASS, un altre poc de REACT i a treballar amb Metodologies Àgils.
        </p>
        <br>
        <p>
          Des de 2008 treball amb la meva família a Recanvis Mitre, una empresa familiar que comercialitza recanvis electrodomèstics on m'encarrego de l'atenció a client, tant per WhatsApp com per MercadoLibre, de la fotografia dels productes i de la creació de les publicacions. El 2008 vaig treballar com a recepcionista i telefonista en una productora de comercials, Banana Films, i el 2011 vaig treballar com a assistent en un estudi de Disseny gràfic, Imagenzero. També, des de fa alguns anys treball com a dissenyadora gràfica de forma freelance.
        </p>
        <br>
        <p>
          Em considero una persona inquieta i apassionada. M'agrada aprendre coses gairebé de forma constant, actualment estic aprenent Aleman i a treballar amb el framework VUEjs. vaig fer molts cursos com ser serigrafia artesanal, ganxet, brodat xinès, brodat clàssic enfocat a il·lustració, marbre sobre tela, serografía artesanal, fotografia i laboratori blanc i negre, revelat manual de pel·lícula color c-41, il·luminació en estudi, edició fotogràfica digital, llenceria (moldería, ús de màquines).
        </p>
        <br>
        <p>
          Aquesta pàgina la vaig fer usant referents i adaptant-la al que estava necessitant. Estic usant Laravel com Framework, CSS i Javascript escrits per mi. A la home vaig implementar peticions AJAX. Aquest i altres projectes es poden trobar en el meu github:
          <a style="color:coral" href="https://github.com/anapfe/ ">github.com/anapfe/</a>
        </p>
      @else
        <p>
          Hola! Mi nombre es Ana Pfefferkorn, nací en Vicente Lopez el 21 de marzo de 1988. Soy Diseñadora Gráfica graduada de la UBA en 2015 aunque empecé cursando Diseño de Indumentaria y después me cambié. Algunos de mis trabajos de esa etapa se pueden encontrar en la pestaña "Proyetos". También soy Desarrolladora Web Fullstack de Digital House desde 2017. En este curso aprendí CSS, HTML5, Javascript, a usar repositorios GIT, PHP, Laravel, a hacer peticiones AJAX, un poco de SASS, otro poco de REACT y a trabajar con Metodologías Ágiles.
        </p>
        <br>
        <p>
          Desde 2008 trabajo con mi familia en Repuestos Mitre, una empresa familiar que comercializa repuestos electrodomésticos donde me encargo de la atención al cliente, tanto por whatsapp como por MercadoLibre, de la fotografía de los productos y de la creación de las publicaciones. En 2008 trabajé como recepcionista y telefonista en una productora de comerciales, Banana Films, y en 2011 trabajé como asistente en un estudio de Diseño gráfico, Imagenzero.  También, desde hace algunos años trabajo como diseñadora gráfica de forma freelance.
        </p>
        <br>
        <p>
          Me considero una persona inquieta y apasionada. Me gusta aprender cosas casi de forma constante, actualmente estoy aprendiendo Aleman y a trabajar con el framework VUEjs. hice muchos cursos como ser serigrafía artesanal, crochet, bordado chino, bordado clásico enfocado a ilustración, marmolado sobre tela, serografía artesanal, fotografía y laboratorio blanco y negro, revelado manual de película color c-41, iluminación en estudio, edición fotográfica digital, lencería (moldería, uso de máquinas).
        </p>
        <br>
        <p>
          Esta página la hice usando referentes y adaptándola a lo que estaba necesitando. Estoy usando Laravel como Framework, CSS y Javascript escritos por mí. En la home implementé peticiones AJAX. Tiene un usuario administrador y uso bases de datos MySQL. Este y otros proyectos se pueden encontrar en mi github:
          <a style="color:coral" href="https://github.com/anapfe/ ">github.com/anapfe/</a>
        </p>
      @endif
    </div>
    <img class="image" src=" {{ asset('images/studio.jpg') }}" alt="studio">
  </div>

@endsection
