<div class="p-6 lg:p-8 bg-white border-b border-gray-200">
    <h1>Edicion de Producto</h1>
    <br>
   
    @section("contenido")
    <div class="row">
        <div class="col-12">
            <h1>Editar producto</h1>
            <form class = "bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4 flex flex-col" method="POST" action="{{route("productos.update", [$producto])}}">
                @method("PUT")
                @csrf
                <div class="form-group">
                    <label class="label uppercase tracking-wide text-black text-xs font-bold mb-2">Código de barras</label>
                    <input required value="{{$producto->codigo_barras}}" autocomplete="off" name="codigo_barras"
                           class="form-control w-full bg-gray-200 text-black border border-gray-200 rounded py-3 px-4 mb-3"
                           type="text" placeholder="Código de barras">
                </div>
                <div class="form-group">
                    <label class="label">Descripción</label>
                    <input required value="{{$producto->descripcion}}" autocomplete="off" name="descripcion"
                           class="form-control"
                           type="text" placeholder="Descripción">
                </div>
                <div class="form-group">
                    <label class="label">Precio de compra</label>
                    <input required value="{{$producto->precio_compra}}" autocomplete="off" name="precio_compra"
                           class="form-control"
                           type="decimal(9,2)" placeholder="Precio de compra">
                </div>
                <div class="form-group">
                    <label class="label">Precio de venta</label>
                    <input required value="{{$producto->precio_venta}}" autocomplete="off" name="precio_venta"
                           class="form-control"
                           type="decimal(9,2)" placeholder="Precio de venta">
                </div>
                <div class="form-group">
                    <label class="label">Existencia</label>
                    <input required value="{{$producto->existencia}}" autocomplete="off" name="existencia"
                           class="form-control"
                           type="decimal(9,2)" placeholder="Existencia">
                </div>

                @include("notificacion")
                <button class="btn btn-success">Guardar</button>
                <a class="btn btn-primary" href="{{route("productos.index")}}">Volver</a>
            </form>
        </div>
    </div>
@endsection

</div>