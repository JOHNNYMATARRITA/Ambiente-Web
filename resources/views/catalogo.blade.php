

@section('content')
<div class="container" style="margin-top: 80px">
        <nav class="flex px-5 py-3 text-gray-700 border border-gray-200 rounded-lg bg-gray-50 dark:bg-gray-800 dark:border-gray-700"
            aria-label="Breadcrumb">
            <ol class="inline-flex items-center space-x-1 md:space-x-3">
                <li class="inline-flex items-center"><a href="/">Home</a></li>
                <li class="inline-flex items-center" aria-current="page">Productos</li>
            </ol>
        </nav>
        <section class="contenedor">
            <hr>
            <div class="contenedor-items flex flex-wrap md:flex-wrap ml-14 h-30 w-2/2">
            
                @foreach($productos as $pro)
                <!-- <div class="rounded overflow-hidden shadow-lg"> -->
                <div class="item">
                    <!--   <img src="/images/{{ $pro->image_path }}"
                                     class="card-img-top mx-auto"
                                     style="height: 150px; width: 150px;display: block;"
                                     alt="{{ $pro->image_path }}"
                                >  -->
                        <div class="titulo-item">
                            <h6>{{ $pro->descripcion}}</h6>
                        </div>
                        <p class="precio-item">₡{{ $pro->precio_venta}}</p>
                       <form action="{{ route('cart.store', $pro->id) }}" method="POST">
                            {{ csrf_field() }}
                            <input type="hidden" value="{{ $pro->id }}" id="id" name="id">
                            <input type="hidden" value="{{ $pro->descripcion }}" id="descripcion" name="descripcion">
                            <input type="hidden" value="{{ $pro->precio_venta }}" id="precio_venta" name="precio_venta">
                            <input type="hidden" value="{{ $pro->image_path }}" id="img" name="img"> 
                            <input type="hidden" value="1" id="quantity" name="quantity"> 
                            <div class="px-6 pt-6 pb-6 dark:bg-gray-800" >
                                <div class="row">
                                    <button
                                        class="boton-item">
                                        <i ></i> Agregar a Carrito
                                    </button>
                                </div>
                            </div>
                       </form> 
                   
                </div>
                <!--</div> -->
                @endforeach
            </div>
        </section>
    </div>

    @extends('welcome')