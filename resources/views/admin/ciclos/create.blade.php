
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Crear Ciclo') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    @include('partials.alerts')
                    <form action="{{ route('ciclos.store') }}" method="POST">
                        @csrf
                        <div class="mb-4">
                            <label for="codigo" class="block text-gray-700">Código</label>
                            <input type="text" name="codigo" id="codigo" value="{{ old('codigo') }}" class="w-full border-gray-300 rounded-md">
                        </div>
                        <div class="mb-4">
                            <label for="nombre" class="block text-gray-700">Nombre</label>
                            <input type="text" name="nombre" id="nombre" value="{{ old('nombre') }}" class="w-full border-gray-300 rounded-md">
                        </div>
                        <div class="mb-4">
                            <label for="grado_id" class="block text-gray-700">Grado</label>
                            <select name="grado_id" id="grado_id" class="w-full border-gray-300 rounded-md">
                                @foreach ($grados as $grado)
                                    <option value="{{ $grado->id }}">
                                        {{ $grado->nombre }}
                                    </option>
                                @endforeach
                            </select>
                            <!--<input type="text" name="grado_id" id="grado_id" value="{{ old('grado_id') }}" class="w-full border-gray-300 rounded-md">
                            -->
                        </div>
                        <input type="submit" class="primary" value="Guardar"/>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
