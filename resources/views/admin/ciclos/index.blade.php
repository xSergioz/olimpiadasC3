
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Ciclos') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <a href="{{ route('ciclos.create') }}" class="btn btn-primary mb-4">Crear Ciclo</a>
                    <table class="table-auto w-full">
                        <thead>
                            <tr>
                                <th class="px-4 py-2">ID</th>
                                <th class="px-4 py-2">Código</th>
                                <th class="px-4 py-2">Nombre</th>
                                <th class="px-4 py-2">Grado</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($ciclos as $ciclo)
                                <tr>
                                    <td class="border px-4 py-2">{{ $ciclo->id }}</td>
                                    <td class="border px-4 py-2">{{ $ciclo->codigo }}</td>
                                    <td class="border px-4 py-2">{{ $ciclo->nombre }}</td>
                                    @foreach ($grados as $grado)
                                        @if ($grado->id == $ciclo->grado_id)
                                            <td class="border px-4 py-2">{{ $grado->nombre }}</td>
                                        @endif
                                    @endforeach
                                    <td class="border px-4 py-2">
                                        <a href="{{ route('ciclos.edit', $ciclo) }}" class="btn btn-sm btn-warning">Editar</a>
                                        <form action="{{ route('ciclos.destroy', $ciclo) }}" method="POST" class="inline">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-sm btn-danger">Eliminar</button>
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
