<div class="container">
    <h3>Categorías</h3>
    <p>Los estudiantes de los cilos formativos de la
         Familia Profesional de Informática y Comunicaciones,
         pueden inscribirse en las siguientes categorías:</p>
    <div>
        @foreach ($categorias as $categoria)
            <article>
                <div class="inner">
                    <h4>
                        {{ $categoria->romano_convocatoria }} {{ $categoria->nombre }}
                        @auth
                            @if (Auth::user()->isAdmin())
                                <a href="{{ route('categorias.edit', $categoria->id) }}" class="btn btn-primary btn-sm">
                                    <i class="fas fa-edit"></i>
                                </a>
                            @endif
                        @endauth
                    </h4>
                    <p>{!! $categoria->descripcion !!}</p>
                </div>
            </article>
        @endforeach
    </div>
</div>
