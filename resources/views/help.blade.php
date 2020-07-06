@extends('layouts.app')

@section('title', 'Presentacion')

@section('content')
		<!-- Event Details Start -->
        <div class="event-details-area blog-area pt-0 pb-140">
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        <div class="event-details">
                            <div class="event-details-img">
                                {{-- <img src="img/event/event-details-1.jpg" alt="event-details"> --}}
                            </div>
                            <div class="event-details-content">
                                <h2>Ayuda sobre las propuestas ciudadanas</h2>
                                <p>I must explain to you how all this a mistaken idea of denouncing great explorer of the rut the is lder of human happiness pcias unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit asnatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui </p>
                                <p>I must explain to you how all this a mistaken idea of denouncing great explorer of the rut the is lder of human happiness pcias unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem </p>
                                <p>I must explain to you how all this a mistaken idea of denouncing great explorer of the rut the is lder of human happiness pcias unde omnis iste natus error sit voluptatem accusantium doloremque laudantium</p>                                
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deleniti esse, eos porro provident quisquam, cum, veniam ex dicta laudantium ad accusamus quas. Incidunt corporis consequuntur minima reprehenderit voluptatem, veniam totam.</p>

                                <h3>Pasos para realizar el registro de su propuesta</h3><br>
                                <div class="single-notice-left mb-23 pb-30" >
                                    <h4>1, Regístrate en SoyPropuesta</h4>
	                                    <p>I must explain to you how all this mistaken idea of denouncing plasure and praising pain was born and I will give you a complete </p>
	                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium expedita, tempore dolorem, sapiente, eveniet ut tempora sit illum a possimus voluptatibus, libero rem aliquid eligendi aut corporis quas odio laborum?</p>
                                    	<img src="/img/registro-usuario.jpg">
                                </div>

                                <div class="single-notice-left mb-23 pb-30" >
                                    <h4>2, Escribe tu propuesta</h4>
                                    <p>I must explain to you how all this mistaken idea of denouncing plasure and praising pain was born and I will give you a complete </p>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium expedita, tempore dolorem, sapiente, eveniet ut tempora sit illum a possimus voluptatibus, libero rem aliquid eligendi aut corporis quas odio laborum?</p>
                                	<img src="/img/crear-propuesta.jpg">
                                </div>
                            </div>                                
                        </div>
                    </div>
                    @include('includes.sidebar')
                </div>
            </div>
        </div>
        <!-- Event Details End -->
@endsection