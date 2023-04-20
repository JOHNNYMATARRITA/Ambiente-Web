<div class="p-6 lg:p-8 bg-white border-b border-gray-200">
    <h1>Gestion de Productos</h1>
    <br>

    <a href="{{route("productos.create")}}" class="px-3 py-2 bg-green-500 hover:bg-green-700 rounded-lg text-white text-xs font-bold hover:no-underline">Agregar</a>
    <br>
    <br>
    @method("DELETE")
    @livewire('producto-datatable')
  
</div>