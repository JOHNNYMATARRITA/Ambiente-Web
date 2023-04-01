<x-app-layout>
    <x-slot name="product">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Productos') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">

                <a href="{{route("productos.create")}}" class="btn btn-success mb-2">Agregar</a>
                @include("notificacion")
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Código de barras</th>
                                <th>Descripción</th>
                                <th>Precio de compra</th>
                                <th>Precio de venta</th>
                                <th>Utilidad</th>
                                <th>Existencia</th>

                                <th>Editar</th>
                                <th>Eliminar</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($productos as $producto)
                            <tr>
                                <td>{{$producto->codigo_barras}}</td>
                                <td>{{$producto->descripcion}}</td>
                                <td>{{$producto->precio_compra}}</td>
                                <td>{{$producto->precio_venta}}</td>
                                <td>{{$producto->precio_venta - $producto->precio_compra}}</td>
                                <td>{{$producto->existencia}}</td>
                                <td>
                                    <button type="submit" class="btn btn-success"
                                        href="{{route("productos.edit",[$producto])}}">
                                        <i class="fa fa-edit"></i>
                                </td>
                                <td>
                                    <form action="{{route("productos.destroy", [$producto])}}" method="post">
                                        @method("delete")
                                        @csrf
                                        <button type="submit" class="btn btn-danger">
                                            <i class="fa fa-trash"></i>
                                        </button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>