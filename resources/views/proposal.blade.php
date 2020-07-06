@extends('layouts.app')

@section('title', 'Propuesta')

@section('content')
		<!-- Contact Start -->
        <div class="contact-area pt-0 pb-140"> 
            <div class="container">     
                <div class="row">
                    <div class="col-md-8 col-sm-8 col-xs-12">
                        <div class="reply-area">
                            <h3>Registrar propuesta</h3>
                            <p>I must explain to you how all this a mistaken idea of ncing great explorer of the rut the is lder of human happinescias unde omnis iste natus error sit volptatem </p>
                            <div class="single-notice-left mb-23 pb-30">
                                <h4>1. Datos personales</h4>
                                <p>I must explain to you how all this mistaken idea of denouncing plasure and praising pain was born and I will give you a complete </p>
                                <form id="contact-form" action="mail.php" method="post">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <p>Nombre</p>
                                            <input type="text" name="name" id="name">
                                        </div>
                                        <div class="col-md-12">
                                            <p>Correo electrónico</p>
                                            <input type="text" name="email" id="email">
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="single-notice-left mb-23 pb-30">
                                <h4>1. Datos propuesta</h4>
                                <p>I must explain to you how all this mistaken idea of denouncing plasure and praising pain was born and I will give you a complete </p>
                                <form id="contact-form" action="mail.php" method="post">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <p>Título</p>
                                            <input type="text" name="name" id="name">
                                        </div>
                                        <div class="col-md-12">
                                            <p>Resúmen</p>
                                            <input type="text" name="email" id="email">
                                        </div>
                                        <div class="col-md-12">
                                            <p>Descripción de la situación</p>
                                            <textarea name="message" id="message" cols="15" rows="5"></textarea>
                                        </div>
                                        <div class="col-md-12">
                                            <p>Propuesta de solución</p>
                                            <textarea name="message" id="message" cols="15" rows="5"></textarea>
                                        </div>
                                        <div class="col-md-12">
                                            <p>Acciones de corto, mediano y largo plazo</p>
                                            <textarea name="message" id="message" cols="15" rows="5"></textarea>
                                        </div>
                                        <div class="col-md-12">
                                            <p>Involucrados en la solución y operación</p>
                                            <textarea name="message" id="message" cols="15" rows="5"></textarea>
                                        </div>
                                        <div class="col-md-12">
                                            <p>Presupuesto estimado</p>
                                            <textarea name="message" id="message" cols="15" rows="5"></textarea>
                                        </div>
                                    </div>
                                    <a class="reply-btn" href="#" data-text="send"><span>enviar propuesta</span></a>
                                    <p class="form-messege"></p>
                                </form>
                            </div>
                        </div>
                    </div>
                    @include('includes.sidebar')
                </div>
            </div>
        </div>
        <!-- Contact End -->
@endsection