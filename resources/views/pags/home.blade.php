
import Exposiciones from "../../img/eventos/Exposiciones.jpg";
import Danza from "../../img/eventos/Danza.jpg";
import Conferencias from "../../img/eventos/Conferencia.jpg";
import Bertsolarismo from "../../img/eventos/Bertsolarismo.jpg";
import Feria from "../../img/eventos/Feria.jpg";
import Audiovisual from "../../img/eventos/Audiovisual.jpg";
import Formacion from "../../img/eventos/Formacion.jpg";
import Concursos from "../../img/eventos/Concursos.jpg";
import Festivales from "../../img/eventos/Festivales.jpg";
import ActividadesNinios from "../../img/eventos/ActividadesNinios.jpg";
import Fiestas from "../../img/eventos/Fiestas.jpg";
import Otros from "../../img/eventos/Otros.jpg";




@extends('layout.layout')

@section('nav')
  @include('nav.generalNav')
@endsection



@section('content')
<section id="gallery">
  <div class="container">
    <div class="row">
    <!-- conciertos -->
    <div class="col-lg-4 mb-4">
        <div class="card">
            <img src="{{asset('img/eventos/Conciertos.jpg')}}" alt="" class="card-img-top">
            <div class="card-body">
                <h5 class="card-title">Conciertos</h5>
                <p class="card-text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ut eum similique repellat a laborum, rerum voluptates ipsam eos quo tempore iusto dolore modi dolorum in pariatur. Incidunt repellendus praesentium quae!</p>
                <a href="" class="btn botonRojo btn-sm">Ver más</a>
            </div>
        </div>
    </div>
    <!-- teatro -->
    <div class="col-lg-4 mb-4">
        <div class="card">
            <img src="{{asset('img/eventos/Teatro.jpg')}}" alt="" class="card-img-top">
            <div class="card-body">
                <h5 class="card-title">Teatro</h5>
                <p class="card-text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ut eum similique repellat a laborum, rerum voluptates ipsam eos quo tempore iusto dolore modi dolorum in pariatur. Incidunt repellendus praesentium quae!</p>
                <a href="" class="btn botonRojo btn-sm">Ver más</a>
            </div>
        </div>
    </div>

    <!-- Exposiciones -->
    <div class="col-lg-4 mb-4">
        <div class="card">
            <img src="{{asset('img/eventos/Exposiciones.jpg')}}" alt="" class="card-img-top">
            <div class="card-body">
                <h5 class="card-title">Exposiciones</h5>
                <p class="card-text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ut eum similique repellat a laborum, rerum voluptates ipsam eos quo tempore iusto dolore modi dolorum in pariatur. Incidunt repellendus praesentium quae!</p>
                <a href="" class="btn botonRojo btn-sm">Ver más</a>
            </div>
        </div>
    </div>



  </div>
</div>
</section>



@endsection