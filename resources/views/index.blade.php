@extends('templates.principal')
{{-- META TAG | SEO SOLAMENTE de la página o sección de página (la página especifica es la URL actual --}}
{{-- Titulo --}}
@section('titulo-pagina', 'Inicio | ComprobantesFiscales.org')
 {{-- Descripción  --}}
@section('meta-descripcion', 'Comprobantes Fiscales es un sitio web que ha recopilado los puntos mas importantes y que brinda apoyo para un buen entendimiento y compresion de los nuevos cambios')
{{-- Palabras clave --}}
@section('meta-keywords', 'comprobantes, fiscales, facturas, facturación, electrónica, version, cfdi, sat, impuestos, catalogos, rfc, inelco, aspel, soluciones, para, restaurantes, syca, consultores, consultoría, monterrey, san luis potosí') 

{{-- =+=+ separador +=+= --}}

{{-- META TAG | SOCIAL MEDIA --}}
{{-- URL de la página (EXCLUIR http:// o https://) EJEMPLO: www.pagina.com/ --}}
@section('fb-url', 'www.comprobantesfiscales.org/')
{{-- Titulo --}}
@section('fb-titulo', 'ComprobantesFiscales.org')
{{-- Descripción --}}
@section('fb-descripcion', 'Comprobantes Fiscales es un sitio web que ha recopilado los puntos mas importantes y que brinda apoyo para un buen entendimiento y compresion de los nuevos cambios.')
{{-- url de dónde se aloja la imagen. (EXCLUIR http:// o https://) EJEMPLO: www.pagina.com/folder/imagen.png--}}
@section('fb-img', 'www.comprobantesfiscales.org/images/comprobantesfiscales-social-media.png') 
@push('agregar-fonts')
    {{-- AGREGA ARCHIVOS CSS EXCLUSIVOS DE ESTÁ SECCIÓN --}}
    {{-- Por ahora no hay ninguna FUENTE extra --}}
@endpush
@push('agregar-css')
    {{-- AGREGA ARCHIVOS CSS EXCLUSIVOS DE ESTÁ SECCIÓN --}}
    {{-- Por ahora no hay ningún CSS extra --}}
@endpush
@section('contenido')
 <!-- =========================
         INICIO | HOME
    ============================== -->
<section class="header parallax home-parallax page" id="inicio">
    {{-- <h2></h2> --}}
    <div class="section_overlay">
        <div class="container home-container">
            <div class="row">
                <div class="col-md-12">
                    <div class="logo text-center">
                        <!-- LOGO EN MOBILE -->
                        <img class="logotipo" src="/assets/imagenes/logos/logo-comprobantes.png" alt="Logotipo de comprobantesfiscales.org para dispositivo móvil.">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-8 col-sm-8">
                    <div class="home_text wow fadeIn" data-wow-duration="1s">
                        <!-- TITULO Y DESCRIPCÍÓN PRINCIPAL -->
                        <h1>Facturación Electrónica v3.3</h1>
                        <p>A través de la publicación del Anexo 20 de la Resolución Miscelánea Fiscal publicado el 10 de enero de 2017, se oficializan los cambios proyectados por el Servicio de Administración Tributaria (SAT) al Comprobante Fiscal Digital por Internet (CFDI). </p>
                        <div class="btn-download">
                            <!-- BOTONES -->
                            <a class="btn home-btn wow fadeInLeft" href="#contacto" data-wow-duration="1s">Contáctanos</a>
                            <a class="btn home-btn wow fadeInRight nuevo-cat" href="#catalogos" data-wow-duration="1s">Ver Nuevos Catálogos</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-md-offset-1 col-sm-4">
                    <div class="home-iphone">
                        <img class="logo-web" src="/assets/imagenes/logos/logo-comprobantes.png" alt="Logotipo de comprobantesfiscales.org">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="text-center">
                        <a class="btn_arrow" href="#cambios"><i class="fa fa-angle-down fa-4x"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- HOME | FIN -->
<!-- =========================
    CAMBIOS PRINCIPALES | INICIO
    ============================== -->
<div class="page" id="cambios">
    <div class="about">
        <div class="container wow bounceInLeft" data-wow-duration="0.7s">
            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                    <!-- TITULO DE SECCIÓN-->
                    <div class="section_title">
                        <h2>Cambios principales</h2>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="wrap-item text-center">
                        <div class="service-item">
                            <h3>
                                <span>
                                <i class="fa fa-credit-card fa-2x" aria-hidden="true"></i>
                                </span>
                            </h3>
                        </div>
                        <h3 class="pad-bt15">Formas de pago</h3>
                        <p class="text-center">En la nueva versión se invierten los datos que deben ir en “Método de pago” y en “Forma de pago”, como se señala a continuación.</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="wrap-item text-center">
                        <div class="service-item">
                            <h3>
                                <span>
                                    <i class="fa fa-book fa-2x" aria-hidden="true"></i>
                                </span>
                            </h3>
                        </div>
                        <h3 class="pad-bt15">Nuevos catálogos</h3>
                        <p class="text-center">Se incorporan 17 nuevos catálogos:
                            <br>Algunos son obligatorios y otros de uso condicional.</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="wrap-item text-center">
                        <div class="service-item">
                            <h3>
                                <span>
                                    <i class="fa fa-check-circle fa-2x" aria-hidden="true"></i>
                                </span>
                            </h3>
                        </div>
                        <h3 class="pad-bt15">Validación del RFC</h3>
                        <p class="text-center">Se validará que todos los RFC receptores se encuentren registrados ante el SAT a partir de un listado que ofrece la Autoridad.</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="wrap-item text-center">
                        <div class="service-item">
                            <h3>
                                <span>
                                    <i class="fa fa-clock-o fa-2x" aria-hidden="true"></i>
                                </span>
                            </h3>
                        </div>
                        <h3 class="pad-bt15">Zonas Horarias</h3>
                        <p>En las nuevas Facturas Electrónicas se hará uso de zonas horarias las cuales estarán basadas en el Código Postal.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- CAMBIOS PRINCIPALES | F I N -->
<!-- =========================
    MÉTODOS Y FORMAS | INICIO
    ============================== -->
<div class="page" id="pagos">
    <div class="section_grey">
        <div class="container wow bounceInLeft" data-wow-duration="0.7s">
            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                    <!-- TITULO-->
                    <div class="section_title">
                        <h2>Métodos y Formas de Pago</h2>
                        <p>En la nueva versión se invierten los datos que deben ir en “Método de pago” y en “Forma de pago”,
                            <br>como se señala a continuación:</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="center-block service-item">
                        <h3><span class="pago-upper">M</span>étodo de pago</h3>
                        <p>
                            <ul class="vinetas">
                                <li><i class="fa fa-check-circle" aria-hidden="true"></i> Efectivo</li>
                                <li><i class="fa fa-check-circle" aria-hidden="true"></i> Cheque</li>
                                <li><i class="fa fa-check-circle" aria-hidden="true"></i> Tarjeta de crédito</li>
                                <li><i class="fa fa-check-circle" aria-hidden="true"></i> Tarjeta de débito</li>
                                <li><i class="fa fa-check-circle" aria-hidden="true"></i> Depósito bancario</li>
                            </ul>
                        </p>
                        <span class="pago-date">
                                    <i class="fa fa-arrow-left fa" aria-hidden="true"></i><span> ANTES</span> de 1 de Julio 2017
                        </span>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="service-item">
                        <h3><span class="pago-upper">F</span>orma de pago</h3>
                        <p>Se utiliza para expresar:
                            <span class="block-12"></span>
                            <i class="fa fa-check-circle" aria-hidden="true"></i> Una sola exhibición.
                            <br>
                            <i class="fa fa-check-circle" aria-hidden="true"></i> Pago en parcialidades.
                        </p>
                        <br>
                        <span class="pago-date">
                                    <i class="fa fa-arrow-left fa" aria-hidden="true"></i><span> ANTES</span> de 1 de Julio 2017
                        </span>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="service-item">
                        <h3><span class="pago-upper">M</span>étodo de pago</h3>
                        <p>Se utiliza para expresar:
                            <span class="block-12"></span>
                            <i class="fa fa-check-circle" aria-hidden="true"></i> Una sola exhibición.
                            <br>
                            <i class="fa fa-check-circle" aria-hidden="true"></i> Pago en parcialidades.
                        </p>
                        <br>
                        <span class="pago-date">
                                    <i class="fa fa-arrow-right " aria-hidden="true"></i><span> DESPUÉS</span> de 1 de Julio 2017
                        </span>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="service-item">
                        <h3><span class="pago-upper">F</span>orma de pago</h3>
                        <p>
                            <ul class="vinetas">
                                <li>
                                    <i class="fa fa-check-circle" aria-hidden="true"></i> Efectivo
                                </li>
                                <li>
                                    <i class="fa fa-check-circle" aria-hidden="true"></i> Cheque
                                </li>
                                <li>
                                    <i class="fa fa-check-circle" aria-hidden="true"></i> Tarjeta de crédito
                                </li>
                                <li>
                                    <i class="fa fa-check-circle" aria-hidden="true"></i> Tarjeta de débito
                                </li>
                                <li>
                                    <i class="fa fa-check-circle" aria-hidden="true"></i> Depósito bancario
                                </li>
                            </ul>
                        </p>
                        <span class="pago-date">
                                    <i class="fa fa-arrow-right" aria-hidden="true"></i><span> DESPUÉS</span> de 1 de Julio 2017
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- MÉTODOS Y FORMAS | F I N -->
<!-- =========================
            CATÁLOGOS | INICIO
    ============================== -->
<div class="page" id="catalogos">
    <div class="container wow fadeIn" data-wow-duration="0.7s">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <!-- TITULO -->
                <div class="section_title">
                    <h2>Nuevos catálogos</h2>
                    <p>En la nueva versión se integran 17 cátalogos:</p>
                </div>
            </div>
            <!-- =========================== I N I C I O ------ DE LOS 17 CATALOGOS ====================== -->
            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="service-item">
                    <h3><span><i class="fa fa-ship" aria-hidden="true"></i>
                      </span>Aduanas</h3>
                    <p>En importación será la clave de la Aduana/Sección, por la que entra la mercancía a territorio nacional.</p>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="service-item">
                    <h3><span><i class="fa fa-globe" aria-hidden="true"></i>
                      </span>País</h3>
                    <p>Claves del país de residencia para efectos fiscales del receptor del comprobante.</p>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="service-item">
                    <h3><span><i class="fa fa-envelope" aria-hidden="true"></i>
                    </span>Código Postal</h3>
                    <p>Con este nuevo catálogo el sat podra tener datos mas exactos y tener mayor seguridad del momento que se genero la factura.</p>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="service-item">
                    <h3><span><i class="fa fa-money" aria-hidden="true"></i>
                      </span>Moneda</h3>
                    <p>Se debe registrar la clave de la moneda utilizada para expresar los montos, cuando se usa moneda nacional se registra MXN, conforme con la especificación ISO 4217.</p>
                </div>
            </div>
            <!-- estan quedando en el segundo renglon-->
            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="service-item">
                    <h3><span><i class="fa fa-hashtag" aria-hidden="true"></i>
                      </span>Clave producto</h3>
                    <p>Es requerido y deben utilizar las claves del catálogo de productos y servicios, cuando los conceptos que registren por sus actividades correspondan con dichos conceptos.</p>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="service-item">
                    <h3><span class="kl">Kl</span> Clave unidad</h3>
                    <p>Atributo requerido para precisar la clave de unidad de medida estandarizada aplicable para la cantidad expresada en el concepto.</p>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="service-item">
                    <h3><span><i class="fa fa-credit-card" aria-hidden="true"></i>
                      </span>Forma pago</h3>
                    <p>Ahora pasan a ser leyendas tales como: cheque, tarjeta de credito o debito, depósito en cuenta, etc.</p>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="service-item">
                    <h3><span><i class="fa fa-calculator" aria-hidden="true"></i>
                      </span>Impuesto</h3>
                    <p>Se debe registrar la clave del tipo de impuesto trasladado aplicable a cada concepto, las cuales se encuentran incluidas en el catálogo c_Impuesto publicado en el Portal del SAT</p>
                </div>
            </div>
        </div>
        <!-- reglon-->
        <div class="row">
            <!-- tercer renglon para mostrar los catalogos-->
            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="service-item">
                    <h3><span><i class="fa fa-area-chart" aria-hidden="true"></i>
                      </span>Tasa o cuota</h3>
                    <p>valor de la tasa o cuota del impuesto que se traslada en el concepto.</p>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="service-item">
                    <h3><span><i class="fa fa-file-text" aria-hidden="true"></i>

                      </span>Tipo Factor</h3>
                    <p>Este catálogo se utilizará para determinar el tipo de factor que en conjunto con la tasa o cuota se le aplica a los importes reflejados en los CFDI´s.</p>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="service-item">
                    <h3><span><i class="fa fa-building" aria-hidden="true"></i>
                      </span>Tipo relacion</h3>
                    <p>claves de la relación que existe entre el comprobante que se está generando y el o los CFDI’s previos.</p>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="service-item">
                    <h3><span><i class="fa fa-file-text-o" aria-hidden="true"></i>
                      </span>Tipo Comprobante</h3>
                    <p>claves que expresan el efecto del comprobante fiscal para el contribuyente emisor.</p>
                </div>
            </div>
        </div>
        <!-- tercer renglon-->
        <!-- cuarto renglon para mostrar los catalogos-->
        <div class="row">
            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="service-item">
                    <h3><span><i class="fa fa-laptop" aria-hidden="true"></i>
                          </span>Uso CFDI</h3>
                    <p>claves del uso que se le dará a la factura el receptor del comprobante.</p>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="service-item">
                    <h3><span>
                          <i class="fa fa-user" aria-hidden="true"></i>
                          </span>Pedimento aduanal</h3>
                    <p>Se debe registrar el número de identificación del documento aduanero (pedimento), que ampara la importación del bien.</p>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="service-item">
                    <h3><span><i class="fa fa-file-o" aria-hidden="true"></i>
                          </span>Método pago</h3>
                    <p>claves que precisan el método de pago que aplica al CFDI.</p>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="service-item">
                    <h3><span><i class="fa fa-registered" aria-hidden="true"></i>
                          </span>Patente Aduanal</h3>
                    <p>Persona física a quien la SHCP autoriza mediante una patente, promover por cuenta ajena el despacho de las mercancías, en los diferentes regímenes aduaneros.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="service-item">
                    <h3><span><i class="fa fa-file-pdf-o" aria-hidden="true"></i>
                          </span>Regimen fiscal</h3>
                    <p>Se debe especificar la clave del régimen fiscal del contribuyente emisor bajo el cual se está emitiendo el comprobante.</p>
                </div>
            </div>
        </div>
        <!-- =========================== F I N ------ DE LOS 17 CATALOGOS ====================== -->
    </div>
    <div class="video_area">
        <div class="container">
            <div class="row">
                <div class="col-md-6 wow fadeInLeft">
                    <div class="video_title">
                        <h2><i class="fa fa-download" aria-hidden="true"></i> Descarga los catálogos</h2>
                        <p>Puedes descargar los nuevos catálogos y tenerlos a la mano en cualquier momento. (Archivo en formato xls)</p>
                    </div>
                    <div class="video-button">
                        <a class="btn btn-primary btn-video" href="descargas/CFDI.xls" role="button">Descargar</a>
                    </div>
                </div>
                <div class="col-md-6 wow fadeInRight">
                    <div class="video">
                        <video width="560" height="315" controls>
                            <source src="assets/videos/nueva-factura.mp4" type="video/mp4"> Tu navegador no soporta el nuevo formato de video para HTML5.
                        </video>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="section_sat">
        <div class="container">
            <div class="row">
                <div class="col-md-6 wow fadeInLeft">
                    <div class="video">
                        <img class="img-responsive center-block" src="/assets/imagenes/generales/sitio-catalogos.png" alt="Imagen de la página de catálogos del SAT.">
                    </div>
                </div>
                <div class="col-md-6 wow fadeInRight">
                    <div class="video_title">
                        <h2>Catálogo de Productos y Servicios</h2>
                        <p>Te facilitamos el acceso a una herramienta liberada por el sat muy interactiva para que puedas copnsultar las claves de productos y servicios, además de unidades de medida que necesitas incluir al emitir tus facturas en su versión 3.3.</p>
                    </div>
                    <div class="video-button">
                        <a class="btn btn-primary btn-video" href="http://200.57.3.46:443/PyS/catPyS.aspx" role="button" target="_blank">Catálogos</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- CATÁLOGOS | F I N -->
<!-- =========================
        VALIDACIÓN RFC | INICIO
    ============================== -->
<div class="page" id="validacion">
    <div class="video_area">
        <div class="container">
            <div class="row">
                <div class="col-md-6 wow fadeInLeft">
                    <div class="video_title">
                        <h2>Validación del RFC</h2>
                        <p>Se validará que todos los RFC receptores se encuentren registrados ante el SAT a partir de un listado que ofrece la Autoridad. El listado se renueva todos los días de manera automática.
                        </p>
                        <p>El Registro Federal de Contribuyentes es una llave que requiere toda persona física o moral en México para realizar cualquier actividad económica lícita por la que esté obligada a pagar impuestos. </p>
                    </div>
                    <div class="video-button">
                        <a class="btn btn-primary btn-video" href="https://portalsat.plataforma.sat.gob.mx/ConsultaRFC/" role="button" target="_blank">Válidar RFC</a>
                    </div>
                </div>
                <div class="col-md-6 wow fadeInRight">
                    <div class="sat">
                        <img class="img-responsive center-block" src="/assets/imagenes/logos/logo-sat.png" alt="Logotipo del SAT.">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- VALIDACIÓN RFC | F I N -->
<!-- =========================
        SEPARADOR | INICIO
    ============================== -->
<div class="call_to_action">
    <div class="container">
        <div class="row wow bounceIn" data-wow-duration="0.7s">
            {{-- SE CAMBIOS LA PEQUEÑA DESCRIÓN DE Complemento de pago POR Evento Inelco de complemento --}} {{--
            <div class="col-md-12 text-center">
                <p>
                    ¿Cuándo aplica el complemento de pagos?
                </p>
                <p>
                    <i class="fa fa-list-alt fa-2x" aria-hidden="true"></i> El uso de este CFDI será de carácter obligatorio cuando se den los siguientes supuestos:
                </p>
            </div>
            <div class="col-md-12 text-center">
                <ul>
                    <li><i class="fa fa-check" aria-hidden="true"></i> Cuando se desconozca la forma en que se realiza el pago.</li>
                    <li><i class="fa fa-check" aria-hidden="true"></i> Cuando el pago se haga en parcialidades.</li>
                    <li><i class="fa fa-check" aria-hidden="true"></i> Cuando la factura se emita a crédito.</li>
                </ul>
                <hr>
            </div> --}}
            <div class="col-md-12 text-center">
                <p>
                    ¿Aún conoces la correcta operación y las consideraciones para la emisión del
                    <br><span>Complemento de Recepción de Pagos</span>?
                </p>
                <p>
                    ¡Asiste a nuestro curso presencial!
                </p>
                <a class="btn btn-primary btn-video" href="https://www.inelco.mx/curso/recepcion_de_pagos_aspel" role="button" target="_blank">ASISTIR AL CURSO</a>
            </div>
        </div>
    </div>
</div>
<!-- SEPARADOR | F I N -->
<!-- =========================
    MARCAS Y SOLUCIONES | INICIO
    ============================== -->
<div class="page" id="soluciones">
    <div class="section_grey">
        <div class="container wow bounceIn" data-wow-duration="0.7s">
            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                    <div class="section_title">
                        <h2>Soluciones para CFDI V.3.3</h2>
                        <p>
                            Contamos con asesores de sistemas administrativos
                            <br> para cumplir adecuadamente con los requisitos que exije el SAT,
                            <br> visita y conocelos:</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="service-item">
                        <div class="blog-img">
                            <a href="https://inelco.mx/" target="_blank" class="center-block">
                                    <img src="/assets/imagenes/logos/logo-inelco.png" class="img-responsive">
                                </a>
                        </div>
                        <h3 class="text-center">Inelco IT Solutions</h3>
                        <p>Inelco IT Solutions provee soluciones integrales a necesidad de información, automatizando los procesos de las micro, pequeñas y medianas empresas, con productos de calidad orientadas. </p>
                        <a class="conocelos" href="https://inelco.mx/" target="_blank">Conócelos →</a>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="service-item">
                        <div class="blog-img">
                            <a href="https://www.aspelsoluciones.com/" target="_blank">
                                    <img src="assets/imagenes/logos/logo-aspelsoluciones.png" class="img-responsive">
                                </a>
                        </div>
                        <h3 class="text-center">Aspel Soluciones</h3>
                        <p>Aspel Soluciones es el área especializada de Inelco IT Solutions para las empresas del sector administrativo, brindando soluciones completas de tecnología y servicios de consultoría que te permiten administrar y operar adecuadamente tu empresa. </p>
                        <a class="conocelos" href="https://www.aspelsoluciones.com/" target="_blank">Conócelos →</a>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="service-item">
                        <div class="blog-img">
                            <a href="http://solucionespararestaurantes.mx/" target="_blank">
                                    <img src="assets/imagenes/logos/logo-solucionespararestaurantes.png" class="img-responsive">
                                </a>
                        </div>
                        <h3 class="text-center">Soluciones Para Restaurantes</h3>
                        <p>Encuentra las soluciones de tecnología y consultoría empresarial que necesitas para controlar y optimizar los procesos de tu restaurante, bar u hotel de manera segura y eficiente. </p>
                        <a class="conocelos" href="http://solucionespararestaurantes.mx/" target="_blank">Conócelos →</a>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="service-item">
                        <div class="blog-img">
                            <a href="http://syca.com.mx/" target="_blank">
                                    <img src="assets/imagenes/logos/logo-syca.png" class="img-responsive">
                                </a>
                        </div>
                        <h3 class="text-center">SYCA Consultores</h3>
                        <p>
                            Nuestro principal objetivo es ayudarte a mejorar y automatizar el control de tu negocio a través de tecnología, sistemas administrativos y consultoría de bajo costo y alto impacto. </p>
                        <a class="conocelos" href="http://syca.com.mx/" target="_blank">Conócelos →</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- SOLUCIONES | F I N -->
<!-- =========================
            CONTACTO | INICIO
    ============================== -->
<section class="contact page" id="contacto">
    <div class="section_overlay">
        <div class="container">
            <div class="col-md-10 col-md-offset-1 wow bounceIn">
                <!-- Titulo de sección -->
                <div class="section_title">
                    <h2>Contáctanos</h2>
                    <p>Cuéntanos en que te podemos apoyar y en breve nos pondremos en contacto contigo.</p>
                </div>
            </div>
        </div>
        {{-- ======== INICIA FORMULARIO DE CONTACTO ========== --}}
        <div class="contact_form wow bounceIn">
            <div class="container">
                <!-- Mensajes de error y envió correcto | INICIO -->
                <div class="form_error text-center">
                    <div class="name_error hide error">Por favor ingresa un nombre.</div>
                    <div class="lastname_error hide error">Por favor ingresa un apellido.</div>
                    <div class="phone_error hide error">Por favor ingresa un número telefónico.</div>
                    <div class="phone_val_error hide error">Por favor ingresa un número telefónico válido a 10 digitos, sin espacios ni caracteres especiales.</div>
                    <div class="ext_val_error hide error">Por favor ingresa un número de extensión válido a 5 digitos, sin espacios ni caracteres especiales.</div>
                    <div class="email_error hide error">Por favor ingresa un correo eléctronico.</div>
                    <div class="email_val_error hide error">Por favor ingresa un correo eléctronico válido.</div>
                    <div class="message_error hide error">Por favor ingresa un mensaje.</div>
                    <div class="recaptcha_error hide error">Por favor marque el checkbox reCAPTCHA.</div>
                </div>
                <div class="Sucess"></div>
                <!-- Mensajes de error y envió correcto | F I N  -->
                <!-- Formulario de contacto | INICIO.-->
                {!! Form::open(['route' => 'contactus.store', 'role' => 'form', 'method' => 'POST', 'id' => 'form_submit']) !!}
                <div class="row">
                    <div class="col-md-6">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
                                    {!! Form::text('name', old('name'), ['class'=>'form-control', 'id'=>'name', 'placeholder'=>'Nombre:', 'title' => 'Ingresa tu nombre']) !!}
                                    <span class="text-danger">{{ $errors->first('name') }}</span>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group {{ $errors->has('lastname') ? 'has-error' : '' }}">
                                    {!! Form::text('lastname', old('lastname'), ['class'=>'form-control', 'id'=>'lastname', 'placeholder'=>'Apellido:', 'title' => 'Ingresa tu apellido']) !!}
                                    <span class="text-danger">{{ $errors->first('lastname') }}</span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group {{ $errors->has('phone') ? 'has-error' : '' }}">
                                    {!! Form::text('phone', old('phone'), ['class'=>'form-control', 'id'=>'phone', 'placeholder'=>'Teléfono:', 'title' => 'Ingresa tu teléfono (10 digitos sin espacios ni caracteres especiales)']) !!}
                                    <span class="text-danger">{{ $errors->first('phone') }}</span>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group {{ $errors->has('ext') ? 'has-error' : '' }}">
                                    {!! Form::text('ext', old('ext'), ['class'=>'form-control', 'id'=>'ext', 'placeholder'=>'Extensión:', 'title' => 'Ingresa una extensión (opcional)']) !!}
                                    <span class="text-danger">{{ $errors->first('ext') }}</span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group {{ $errors->has('email') ? 'has-error' : '' }}">
                                    {!! Form::text('email', old('email'), ['class'=>'form-control', 'id'=>'email', 'placeholder'=>'Correo electrónico:', 'title' => 'Ingresa tu correo electrónico']) !!}
                                    <span class="text-danger">{{ $errors->first('email') }}</span>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group {{ $errors->has('subject') ? 'has-error' : '' }}">
                                    {!! Form::text('subject', old('subject'), ['class'=>'form-control', 'id'=>'subject', 'placeholder'=>'Asunto: ', 'title' => 'Ingresa el asunto del mensaje']) !!}
                                    <span class="text-danger">{{ $errors->first('subject') }}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group {{ $errors->has('message') ? 'has-error' : '' }}">
                            {!! Form::textarea('message', old('message'), ['class'=>'form-control', 'id'=>'message', 'placeholder'=>'Mensaje:', 'title' => 'Dejanos tu mensaje']) !!}
                            <span class="text-danger">{{ $errors->first('message') }}</span>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4 col-md-offset-4">
                        <div class="form-group re-captcha">
                            {!! Recaptcha::render() !!}
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-4 col-md-offset-4">
                        <div class="form-group ">
                            <button class="btn-submit ">ENVIAR MENSAJE</button>
                        </div>
                    </div>
                </div>
                {!! Form::close() !!}
                <!-- Formulario de contacto | F I N.-->
                {{-- Versión original del formulario --}} {{--
                <form role="form" method="POST" action="" id="form_submit">
                    <div class="row">
                        <div class="col-md-4">
                            <input type="text" class="form-control" id="name" placeholder="Nombre" name="name">
                            <input type="email" class="form-control" id="email" placeholder="Correo electrónico" name="mail">
                            <input type="text" class="form-control" id="phone" placeholder="Teléfono" name="phone">
                            <input type="text" class="form-control" id="subject" placeholder="Asunto" name="subjectForm">
                        </div>
                        <div class="col-md-8">
                            <textarea class="form-control" id="message" rows="355" cols="10" name="messageForm" placeholder="Texto del mensaje..."></textarea>
                            <button type="submit" name="submit" class="btn btn-default btn-submit">
                                ENVIAR MENSAJE
                            </button>
                        </div>
                    </div>
                </form> --}}
            </div>
        </div>
        {{-- ======== TERMINA FORMULARIO ========== --}}
        <!-- Redes Sociales -->
        <div class="container">
            <div class="row">
                <div class="col-md-12 wow bounceInLeft">
                    <div class="social_icons">
                        <ul>
                            <li><a href="https://twitter.com/fiscalesorg" target="_blank"><i class="fa fa-twitter"></i></a>
                            </li>
                            <li><a href="https://www.facebook.com/comprobantesfiscalesorg/" target="_blank"><i class="fa fa-facebook"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- OFICINAS INELCO Y SYCA -->
    <div class="section_grey">
        <div class="container wow fadeInRight" data-wow-duration="2s">
            <div class="section_title">
                <h2 class="h2-css">Oficina en Monterrey</h2>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <p class="title-info"><i class="fa fa-map-marker" aria-hidden="true"></i> Dirección:</p>
                    <p>
                        Edificio Cintermex, Av. Fundidora N° 501 Local 18 PB, 64010, Monterrey, Nuevo León, México.
                    </p>
                    <p class="title-info"><i class="fa fa-phone" aria-hidden="true"></i> Teléfono: </p>
                    <p>
                        <a href="tel:528113522020">(81) 1352 2222</a>
                    </p>
                </div>
                <div class="col-md-8">
                    <div class="canvas1">
                        <iframe class="map_canvas1" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3595.793480944093!2d-100.29106668546014!3d25.678139818322215!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x866295620b11a765%3A0xa261ff913e98ee9e!2sInelco+IT+Solutions!5e0!3m2!1ses-419!2smx!4v1464149661376" width="100%" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
            <div class="section_title">
                <h2 class="h2-css">Oficina en San Luis Potosí</h2>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <p class="title-info"><i class="fa fa-map-marker" aria-hidden="true"></i> Dirección:</p>
                    <p>
                        Mariano Otero #610 Int 3, Col.Tequisquiapan, <span class="block">San Luis Potosí, S.L.P, México</span>
                    </p>
                    <p class="title-info"><i class="fa fa-phone" aria-hidden="true"></i> Teléfono: </p>
                    <p>
                        <a href="tel:524442119009">(444) 211 9009</a>
                    </p>
                </div>
                <div class="col-md-8">
                    <div class="canvas1">
                        <iframe class="map_canvas1" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3695.3760437451656!2d-100.99518268574494!3d22.14975345394168!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x842a98b29695cb8d%3A0xced6173409c0a00!2sMariano+Otero+610%2C+De+Tequisquiapan%2C+78230+San+Luis%2C+S.L.P.!5e0!3m2!1ses-419!2smx!4v1464151375539" width="100%" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- CONTACTO | F I N -->
@endsection
@push('agregar-script')
    {{-- AGREGA CONTENIDO JavaScript EXCLUSIVOS DE ESTÁ SECCIÓN --}}
    <script>
    {{-- Script de envió de datos a BD y correo --}}
        {{-- Valida el Token laravel  --}}
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
            }
        });

        {{-- Inicia el proceso Ajax para envió de info  --}}
        $(".btn-submit").click(function(e){

            e.preventDefault();

            var name = $("#name").val();
            var lastname = $("#lastname").val();
            var phone = $("#phone").val(); 
            var ext = $("#ext").val(); 
            var email = $("#email").val();
            var subject = $("#subject").val();
            var message = $("#message").val();
            var testEmail = /^[A-Z0-9._%+-]+@([A-Z0-9-]+\.)+[A-Z]{2,4}$/i;
            var testPhone = /^[0-9]{10}$/gm;
            var testExt = /^[0-9]{0,6}$/gm;

            var dataString = '&name=' + name + '&lastname=' + lastname + '&phone=' + phone + '&ext=' + ext + '&email=' + email + '&subject=' + subject + '&message=' + message + '&g-recaptcha-response=' + grecaptcha.getResponse();

            if (!name) {
                $(".form_error .name_error").addClass("show").removeClass("hide");
                return false;
            } else {
                $(".form_error .name_error").addClass("hide").removeClass("show");
            }
            if (!lastname) {
                $(".form_error .lastname_error").addClass("show").removeClass("hide");
                return false;
            } else {
                $(".form_error .lastname_error").addClass("hide").removeClass("show");
            }

            if (!phone) {
                 $(".form_error .phone_error").addClass("show").removeClass("hide");
                 return false;
             } else {
                $(".form_error .phone_error").addClass("hide").removeClass("show");
                if (testPhone.test(phone)) {
                    $(".form_error .phone_val_error").addClass("hide").removeClass("show");
                } else {
                    $(".form_error .phone_val_error").addClass("show").removeClass("hide");
                    return false;
                }
            }

            if (ext) {
                if (testExt.test(ext)) {
                    $(".form_error .ext_val_error").addClass("hide").removeClass("show");
                } else {
                    $(".form_error .ext_val_error").addClass("show").removeClass("hide");
                    return false;
                }
            }

            if (!email) {
                $(".form_error .email_error").addClass("show").removeClass("hide");
                return false;
            } else {
                $(".form_error .email_error").addClass("hide").removeClass("show");
                if (testEmail.test(email)) {
                    $(".form_error .email_val_error").addClass("hide").removeClass("show");
                } else {
                    $(".form_error .email_val_error").addClass("show").removeClass("hide");
                    return false;
                }
            }
            if (!message) {
                $(".form_error .message_error").addClass("show").removeClass("hide");
                return false;
            } else {
                $(".form_error .message_error").addClass("hide").removeClass("show");
            }

            if(grecaptcha && grecaptcha.getResponse().length > 0)
            {   
                var re_captcha = true;
                $(".form_error .recaptcha_error").addClass("hide").removeClass("show");
            }
            else
            {   
                var re_captcha = false;
                $(".form_error .recaptcha_error").addClass("show").removeClass("hide");
            }
            if (name && lastname && phone && email && message && re_captcha) {
                $.ajax({
                    type: 'POST',
                    url: "{{ url('/contact-us') }}",
                    data: dataString,
                    cache: false,
                    {{-- Valida envió de info por ajax --}}
                    {{-- success: function(data) { alert("success") },
                    error: function(ts) { alert(ts.responseText) } --}}
                     success: function(data) {
                        $(".Sucess").show();
                        $(".Sucess").fadeIn(2000);
                        $(".Sucess").html("<i class='fa fa-check'></i> ¡Gracias <b>" + name + " " + lastname + "</b>! Nos pondremos en contacto en la brevedad posible.");
                        $('.Sucess').fadeOut(9000,function(){$(this).remove();});
                        {{-- Desconozco el uso de estos ID --}}
                         {{-- $("#Name").val("");
                         $("#Email").val("");
                         $("#Phone").val("");
                         $("#Subject").val("");
                         $("#Message").val("");--}}
                        $(".form_error .name_error, .form_error .lastname_error, .form_error .phone_error, .form_error .ext_error, .form_error .email_error, .form_error .email_val_error, .form_error .message_error, .form_error .recaptcha_error").addClass("hide").removeClass("show");
                        $("#name").val("");
                        $("#lastname").val("");
                        $("#phone").val("");
                        $("#ext").val("");
                        $("#email").val("");
                        $("#subject").val("");
                        $("#message").val("");
                    }
                });
            }
            return false;
        });
    </script>
@endpush