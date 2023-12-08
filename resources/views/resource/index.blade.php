<x-layouts.app>
    <section class="heading-page header-text" id="top">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h6>{{ __('home.tittleResource') }}</h6>
                    <h2>{{ __('home.click') }}</h2>
                </div>
            </div>
        </div>
    </section>
    <section class="meetings-page mt-0 pt-4" id="meetings">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="filters">
                                <ul>
                                    <li data-filter="*" class="active">Todos</li>
                                    @forelse ($type_resources as $type)
                                    <li data-filter=".{{ $type }}">{{ $type }}</li>
                                    @empty
                                    @endforelse
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="row grid">

                                @forelse($resources as $resource)
                                <div class="col-lg-4 templatemo-item-col all {{ $resource->code_type }}">
                                    <a href="{{ asset($resource->url) }}" target="_blank">
                                        <div class="meeting-item">
                                            <div class="thumb">
                                                <div class="price">
                                                    <span>{{ '.' .$resource->code_type }}</span>
                                                </div>
                                            </div>
                                            <div class="down-content">
                                                <h4>{{ $resource->name }}</h4>
                                                <p>{{ $resource->description }}</p>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                @empty
                                <div class="col-lg-12">
                                    <div class="text-center">
                                        <h4>No hay recursos disponibles</h4>
                                    </div>
                                </div>
                                @endforelse
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @section('js')
    {{-- <script>
        $(document).ready(function(){
        $('ul.listado li a').click(function() {
            $(this).parent().addClass('active').siblings().removeClass('active');
        var textoFiltro = $(this).text().toLowerCase().replace(/\s/g,"-");
        switch(textoFiltro)
        {
        case 'power-point':
            textoFiltro = 'pptx';
        break;
        case 'word':
            textoFiltro = 'docx';
        break;
        case 'excel':
            textoFiltro = 'xlsx';
        break;
        case 'pdf':
            textoFiltro = 'pdf';
        break;

        default:
            textoFiltro = 'todos';
        break;
        }

        if(textoFiltro == 'todos')
        {
        $('div.filtros div.none').fadeIn('slow').removeClass('none');
        }
        else
        {
        $('.filtros div').each(function()
        {
        if(!$(this).hasClass(textoFiltro) && !$(this).hasClass('meeting-item') && !$(this).hasClass('thumb') && !$(this).hasClass('down-content') && !$(this).hasClass('price'))
        {
        $(this).fadeOut('normal').addClass('none');
        }
        else
        {
        $(this).fadeIn('slow').removeClass('none');
        }
        });
        }
        return false;
        });
        });
    </script> --}}
    @endsection
</x-layouts.app>