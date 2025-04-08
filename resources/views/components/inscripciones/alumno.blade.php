
    @for ($i = 0; $i < 10; $i++)
        <div class="col-6 col-12-xsmall {{ $oldNombre && isset($oldNombre[$i]) ? '' : 'oculto' }} alumnos">
            <input type="text" name="nombre[{{ $i }}]" id="nombre{{ $i }}" value="{{ $oldNombre ? $oldNombre[$i] : '' }}" placeholder="Nombre Alumno {{ $i }}" />
        </div>
        <div class="col-6 col-12-xsmall {{ $oldDni && isset($oldDni[$i]) ? '' : 'oculto' }}  dnis">
            <input type="text" name="dni[{{ $i }}]" id="dni{{ $i }}" value="{{ $oldDni ? $oldDni[$i] : '' }}" placeholder="DNI Alumno {{ $i }}" />
        </div>
    @endfor
