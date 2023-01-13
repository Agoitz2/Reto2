
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
    <div class="col-12 col-md-6 col-lg-4 mb-4">
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
    <div class="col-12 col-md-6 col-lg-4 mb-4">
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
    <div class="col-12 col-md-6 col-lg-4 mb-4">
        <div class="card">
            <img src="{{asset('img/eventos/Exposiciones.jpg')}}" alt="" class="card-img-top">
            <div class="card-body">
                <h5 class="card-title">Exposiciones</h5>
                <p class="card-text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ut eum similique repellat a laborum, rerum voluptates ipsam eos quo tempore iusto dolore modi dolorum in pariatur. Incidunt repellendus praesentium quae!</p>
                <a href="" class="btn botonRojo btn-sm">Ver más</a>
            </div>
        </div>
    </div>

    <!-- Danza -->
    <div class="col-12 col-md-6 col-lg-4 mb-4">
        <div class="card">
            <img src="{{asset('img/eventos/Danza.jpg')}}" alt="" class="card-img-top">
            <div class="card-body">
                <h5 class="card-title">Danza</h5>
                <p class="card-text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ut eum similique repellat a laborum, rerum voluptates ipsam eos quo tempore iusto dolore modi dolorum in pariatur. Incidunt repellendus praesentium quae!</p>
                <a href="" class="btn botonRojo btn-sm">Ver más</a>
            </div>
        </div>
    </div>

    <!-- Conferencia -->
    <div class="col-12 col-md-6 col-lg-4 mb-4">
        <div class="card">
            <img src="{{asset('img/eventos/Conferencia.jpg')}}" alt="" class="card-img-top">
            <div class="card-body">
                <h5 class="card-title">Conferencias</h5>
                <p class="card-text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ut eum similique repellat a laborum, rerum voluptates ipsam eos quo tempore iusto dolore modi dolorum in pariatur. Incidunt repellendus praesentium quae!</p>
                <a href="" class="btn botonRojo btn-sm">Ver más</a>
            </div>
        </div>
    </div>

    <!-- Bertsolarismo -->
    <div class="col-12 col-md-6 col-lg-4 mb-4">
        <div class="card">
            <img src="{{asset('img/eventos/Bertsolarismo.jpg')}}" alt="" class="card-img-top">
            <div class="card-body">
                <h5 class="card-title">Bertsolarismo</h5>
                <p class="card-text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ut eum similique repellat a laborum, rerum voluptates ipsam eos quo tempore iusto dolore modi dolorum in pariatur. Incidunt repellendus praesentium quae!</p>
                <a href="" class="btn botonRojo btn-sm">Ver más</a>
            </div>
        </div>
    </div>

    <!-- Feria -->
    <div class="col-12 col-md-6 col-lg-4 mb-4">
        <div class="card">
            <img src="{{asset('img/eventos/Feria.jpg')}}" alt="" class="card-img-top">
            <div class="card-body">
                <h5 class="card-title">Ferias</h5>
                <p class="card-text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ut eum similique repellat a laborum, rerum voluptates ipsam eos quo tempore iusto dolore modi dolorum in pariatur. Incidunt repellendus praesentium quae!</p>
                <a href="" class="btn botonRojo btn-sm">Ver más</a>
            </div>
        </div>
    </div>

    <!-- Audiovisual -->
    <div class="col-12 col-md-6 col-lg-4 mb-4">
        <div class="card">
            <img src="{{asset('img/eventos/Audiovisual.jpg')}}" alt="" class="card-img-top">
            <div class="card-body">
                <h5 class="card-title">Audiovisual</h5>
                <p class="card-text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ut eum similique repellat a laborum, rerum voluptates ipsam eos quo tempore iusto dolore modi dolorum in pariatur. Incidunt repellendus praesentium quae!</p>
                <a href="" class="btn botonRojo btn-sm">Ver más</a>
            </div>
        </div>
    </div>   

    <!-- Formacion -->
    <div class="col-12 col-md-6 col-lg-4 mb-4">
        <div class="card">
            <img src="{{asset('img/eventos/Formacion.jpg')}}" alt="" class="card-img-top">
            <div class="card-body">
                <h5 class="card-title">Formacion</h5>
                <p class="card-text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ut eum similique repellat a laborum, rerum voluptates ipsam eos quo tempore iusto dolore modi dolorum in pariatur. Incidunt repellendus praesentium quae!</p>
                <a href="" class="btn botonRojo btn-sm">Ver más</a>
            </div>
        </div>
    </div> 

    <!-- Concursos -->
    <div class="col-12 col-md-6 col-lg-4 mb-4">
        <div class="card">
            <img src="{{asset('img/eventos/Concursos.jpg')}}" alt="" class="card-img-top">
            <div class="card-body">
                <h5 class="card-title">Concursos</h5>
                <p class="card-text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ut eum similique repellat a laborum, rerum voluptates ipsam eos quo tempore iusto dolore modi dolorum in pariatur. Incidunt repellendus praesentium quae!</p>
                <a href="" class="btn botonRojo btn-sm">Ver más</a>
            </div>
        </div>
    </div>    
    
    <!-- Festivales -->
    <div class="col-12 col-md-6 col-lg-4 mb-4">
        <div class="card">
            <img src="{{asset('img/eventos/Festivales.jpg')}}" alt="" class="card-img-top">
            <div class="card-body">
                <h5 class="card-title">Festivales</h5>
                <p class="card-text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ut eum similique repellat a laborum, rerum voluptates ipsam eos quo tempore iusto dolore modi dolorum in pariatur. Incidunt repellendus praesentium quae!</p>
                <a href="" class="btn botonRojo btn-sm">Ver más</a>
            </div>
        </div>
    </div>     
    <!-- ActividadesNinios    -->
    <div class="col-12 col-md-6 col-lg-4 mb-4">
        <div class="card">
            <img src="{{asset('img/eventos/ActividadesNinios.jpg')}}" alt="" class="card-img-top">
            <div class="card-body">
                <h5 class="card-title">Actividades infantiles</h5>
                <p class="card-text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ut eum similique repellat a laborum, rerum voluptates ipsam eos quo tempore iusto dolore modi dolorum in pariatur. Incidunt repellendus praesentium quae!</p>
                <a href="" class="btn botonRojo btn-sm">Ver más</a>
            </div>
        </div>
    </div> 

    <!-- Fiestas    -->
    <div class="col-12 col-md-6 col-lg-4 mb-4">
        <div class="card">
            <img src="{{asset('img/eventos/Fiestas.jpg')}}" alt="" class="card-img-top">
            <div class="card-body">
                <h5 class="card-title">Fiestas</h5>
                <p class="card-text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ut eum similique repellat a laborum, rerum voluptates ipsam eos quo tempore iusto dolore modi dolorum in pariatur. Incidunt repellendus praesentium quae!</p>
                <a href="" class="btn botonRojo btn-sm">Ver más</a>
            </div>
        </div>
    </div> 

    <!-- Otros    -->
    <div class="col-12 col-md-6 col-lg-4 mb-4">
        <div class="card">
            <img src="{{asset('img/eventos/Otros.jpg')}}" alt="" class="card-img-top">
            <div class="card-body">
                <h5 class="card-title">Otros</h5>
                <p class="card-text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ut eum similique repellat a laborum, rerum voluptates ipsam eos quo tempore iusto dolore modi dolorum in pariatur. Incidunt repellendus praesentium quae!</p>
                <a href="" class="btn botonRojo btn-sm">Ver más</a>
            </div>
        </div>
    </div> 


  </div>
</div>
</section>



@endsection