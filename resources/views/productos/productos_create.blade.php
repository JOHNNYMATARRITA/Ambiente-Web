<x-app-layout>
    <x-slot name="product">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Agregar Productos') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                @include("notificacion")
                <div class="p-6 lg:p-8 bg-white border-b border-gray-200">
                    <div class="row">
                        <div class="col-12">
                            <form method="POST" action="{{route("productos.store")}}">
                                @csrf
                                <div class="form-group">
                                    <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"> Código
                                        de barras </label>
                                    <input required value="codigo_barras" autocomplete="off" name="codigo_barras"
                                        class="text-md block px-3 py-2 rounded-lg bg-white border-2 border-gray-300 placeholder-gray-600 shadow-md 
                                                                    focus:placeholder-gray-500 focus:bg-white focus:border-gray-600 focus:outline-none" type="text"
                                        placeholder="Código de barras" />
                                </div>
                                <div class="form-group">
                                    <label
                                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Descripción</label>
                                    <input required value="descripcion" autocomplete="off" name="descripcion"
                                        class="text-md block px-3 py-2 rounded-lg bg-white border-2 border-gray-300 placeholder-gray-600 shadow-md 
                                                                    focus:placeholder-gray-500 focus:bg-white focus:border-gray-600 focus:outline-none" type="text"
                                        placeholder="Descripción">
                                </div>
                                <div class="form-group">
                                    <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Precio
                                        de compra</label>
                                    <input required value="precio_compra" autocomplete="off" name="precio_compra"
                                        class="text-md block px-3 py-2 rounded-lg bg-white border-2 border-gray-300 placeholder-gray-600 shadow-md 
                                                                    focus:placeholder-gray-500 focus:bg-white focus:border-gray-600 focus:outline-none" type="decimal(9,2)"
                                        placeholder="Precio de compra">
                                </div>
                                <div class="form-group">
                                    <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Precio
                                        de venta</label>
                                    <input required value="precio_venta" autocomplete="off" name="precio_venta"
                                        class="text-md block px-3 py-2 rounded-lg bg-white border-2 border-gray-300 placeholder-gray-600 shadow-md 
                                                                    focus:placeholder-gray-500 focus:bg-white focus:border-gray-600 focus:outline-none" type="decimal(9,2)"
                                        placeholder="Precio de venta">
                                </div>
                                <div class="form-group">
                                    <label
                                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Existencia</label>
                                    <input required value="existencia" autocomplete="off" name="existencia"
                                        class="text-md block px-3 py-2 rounded-lg bg-white border-2 border-gray-300 placeholder-gray-600 shadow-md 
                                                                    focus:placeholder-gray-500 focus:bg-white focus:border-gray-600 focus:outline-none" type="decimal(9,2)"
                                        placeholder="Existencia">
                                </div>
                                <br>
                                @include("notificacion")
                                <button
                                    class="px-3 py-2 bg-blue-500 hover:bg-blue-700 rounded-lg text-white text-xs font-bold hover:no-underline">Guardar</button>
                                <a class="px-3 py-2 bg-green-500 hover:bg-green-700 rounded-lg text-white text-xs font-bold hover:no-underline"
                                    href="{{route("productos.index")}}">Volver al listado</a>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>