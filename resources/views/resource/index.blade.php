<x-layouts.app>
    <section class="heading-page header-text" id="top">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h6>Puedes encontrar recursos importantes aqui</h6>
                    <h2>Dale Click!!</h2>
                </div>
            </div>
        </div>
    </section>
    <section class="meetings-page mt-0 pt-4" id="meetings">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="row">
                        <style>
                            .list-group-item.active {
                                background-color: #f2ae5d;
                                color: white;
                                border-color: transparent;
                            }

                            .list-group-item.active a {
                                color: white;
                            }
                        </style>
                        <div class="col-lg-12">
                            <div class="row mb-4">
                                <ul class="listado list-group list-group-horizontal">
                                    <li class="list-group-item bg-danger"><a href="#" style="color: white;">Todos</a>
                                    </li>
                                    @forelse ($type_resources as $type)
                                    <li class="list-group-item"><a href="#">{{ $type }}</a></li>
                                    @empty
                                    @endforelse
                                </ul>
                            </div>

                            <div class="row grid filtros">
                                @forelse($resources as $resource)
                                <div class="col-lg-4 templatemo-item-col all soon {{ $resource->code_type }}">
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
                        <x-layouts.back_home />
                        {{--<div class="col-lg-12">
                            <div class="pagination">
                                <ul>
                                    <li><a href="#">1</a></li>
                                    <li class="active"><a href="#">2</a></li>
                                    <li><a href="#">3</a></li>
                                    <li><a href="#"><i class="fa fa-angle-right"></i></a></li>
                                </ul>
                            </div>
                        </div>--}}
                    </div>

                </div>
            </div>
        </div>
    </section>
    @section('js')
    <script>
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
    </script>
    @endsection
</x-layouts.app>