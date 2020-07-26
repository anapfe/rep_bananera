@extends('layouts.frontLayout')

@section('content')
  <div class="main">
    <div class="">
      <img class="studio-img" src=" {{ asset('images/le_me.jpg') }}" alt="studio">
    </div>
    <div class="studio">
      @if (App::isLocale('en'))
        <p>
          My name is Ana Pfefferkorn, I was born in Vicente Lopez on March 21, 1988. I am a graphic designer graduated from the UBA since 2015 and fullstack web developer of Digital House since 2017. For many years I have been working in the family business, Repuestos Miter, that allowed me to grow, train and today allows me to make this study possible.
        </p>
        <br>
        <p>
          Several years ago I also worked freelance for the industrial design studio that my brother, Ignacio Pfefferkorn, has with his partners where I had the great opportunity to design an identity that I highly appreciate is Altoestudio.
        </p>
        <br>
        <p>
          I am passionate about many things, I have many hobbies and I always like to be learning. I did a lot of courses such as silk screen printing, crochet, Chinese embroidery, classical embroidery, black and white photography and laboratory, color development, studio lighting and much more.
        </p>
      @elseif (App::isLocale('cat'))
        <p>
          El meu nom és Ana Pfefferkorn, vaig néixer a Vicente Lopez el 21 de març de 1988. Sóc dissenyadora gràfica graduada de la UBA des del 2015 i desenvolupadora web fullstack de Digital House des 2017. Des de fa molts anys treball en el negoci familiar, Recanvis Mitre, que em va permetre crecer, formar-me i avui em permet fer possible aquest estudi.
        </p>
        <br>
        <p>
          Fa diversos anys també treball de forma freelance per a l'estudi de disseny industrial que té el meu germà, Ignacio Pfefferkorn, amb els seus socis on vaig tenir la gran oportunitat de dissenyar una identitat que aprecio molt que és Altoestudio.
        </p>
        <br>
        <p>
          M'apassionen moltes coses, tinc molts hobbies i sempre m'agrada estar aprenent. Vaig fer molts cursos com ser serigrafia artesanal, ganxet, brodat xinès, brodat clàssic, fotografia i laboratori blanc i negre, revelat color, il·luminació en estudi i moltes coses més.
        </p>
      @else
        <p>
          Mi nombre es Ana Pfefferkorn, nací en Vicente Lopez el 21 de marzo de 1988. Soy diseñadora gráfica graduada de la UBA desde el 2015 aunque empecé cursando Diseño de Indumentaria y después me cambié. También soy desarrolladora web fullstack de Digital House desde 2017. Desde hace muchos años trabajo en el negocio familiar, Repuestos Mitre, donde aprendí administración de empresar, atención al cliente, comercio online y fotografía de producto. Me permitió crecer, formarme y hoy me permite hacer posible este estudio.
        </p>
        <br>
        <p>
          Hace varios años también trabajo de forma freelance para el estudio de diseño industrial que tiene mi hermano, Ignacio Pfefferkorn, con sus socios donde tuve la gran oportunidad de diseñar una identidad que aprecio mucho que es Altoestudio.
        </p>
        <br>
        <p>
          Me apasionan muchas cosas, tengo muchos hobbies y siempre me gusta estar aprendiendo diferentes cosas, hace poco empecé a estudiar Alemán. Hice muchos cursos como ser serigrafía artesanal, crochet, bordado chino, bordado clásico, fotografía y laboratorio blanco y negro, revelado color, moldería de lencería, iluminación en estudio y muchas cosas más.
        </p>
        <br>
        <p>
          Esta página la hice usando referentes, adaptándola a lo que estaba necesitando. Este y otros proyectos se pueden encontrar en mi github:
          <a style="color:coral" href="https://github.com/anapfe/rep_bananera ">github.com/anapfe/rep_bananera </a>
        </p>
      @endif
    </div>
    <div class="">
      <img class="studio-img" src=" {{ asset('images/studio.jpg') }}" alt="studio">
    </div>
  </div>

@endsection
