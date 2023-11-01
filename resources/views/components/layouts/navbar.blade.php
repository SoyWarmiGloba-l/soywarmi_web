<!-- ***** Header Area Start ***** -->
<header class="header-area header-sticky">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav class="main-nav">
                    <!-- ***** Logo Start ***** -->
                    <a href="{{ route('home') }}" class="logo">
                        <img class="w-50" src="{{ asset('assets/images/logo.png') }}" />
                    </a>
                    <!-- ***** Logo End ***** -->
                    <!-- ***** Menu Start ***** -->
                    <ul class="nav">
                        {{--<li class="scroll-to-section"><a href="{{ route('home') }}" class="active">Inicio</a></li>--}}
                        <li><a href="meetings.html">Programas</a></li>
                        <li><a href="{{ route('resources') }}">Recursos</a></li>
                        <li class="scroll-to-section"><a href="#courses">Nosotros</a></li>
                        <li class="scroll-to-section"><a href="#contact">Cont&aacute;ctanos</a></li>
                        <li class="scroll-to-section"><a href="#apply">Postular</a></li>
                        <li class="has-sub">
                            <a href="javascript:void(0)">
                                {{ config('app.locale') }}
                            </a>
                            <ul class="sub-menu">
                                <li><a href="{{ url('locale/en') }}">En</a></li>
                                <li><a href="{{ url('locale/es') }}">Es</a></li>
                            </ul>
                        </li>
                    </ul>
                    <a class='menu-trigger'>
                        <span>Menu</span>
                    </a>
                    <!-- ***** Menu End ***** -->
                </nav>
            </div>
        </div>
    </div>
</header>
<!-- ***** Header Area End ***** -->
