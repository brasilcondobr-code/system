<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <a href="{{ route('dashboard') }}" class="brand-link">
        <img src="https://adminlte.io/themes/v3/dist/img/AdminLTELogo.png" alt="Brasil Condo Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">Brasil Condo</span>
    </a>

    <div class="sidebar">
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="https://ui-avatars.com/api/?name={{ urlencode(Auth::user()->name) }}&background=007bff&color=ffffff" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="{{ route('profile.edit') }}" class="d-block">{{ Auth::user()->name }}</a>
            </div>
        </div>

        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                
                {{-- MÓDULO DASHBOARD --}}
                <li class="nav-item">
                    <a href="{{ route('dashboard') }}" class="nav-link {{ request()->routeIs('dashboard') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Dashboard
                        </p>
                    </a>
                </li>
                
                {{-- MÓDULO GESTÃO --}}
                <li class="nav-header">GESTÃO DO SISTEMA</li>
                <li class="nav-item {{ request()->routeIs('users.*') ? 'menu-open' : '' }}">
                    <a href="#" class="nav-link {{ request()->routeIs('users.*') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-users"></i>
                        <p>
                            Usuários
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            {{-- A rota 'users.index' será criada no CRUD de Usuários --}}
                            <a href="#" class="nav-link {{ request()->routeIs('users.index') ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Lista de Usuários</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            {{-- A rota 'users.create' será criada no CRUD de Usuários --}}
                            <a href="#" class="nav-link {{ request()->routeIs('users.create') ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Novo Usuário</p>
                            </a>
                        </li>
                    </ul>
                </li>
                
                {{-- FUTUROS MÓDULOS --}}
                <li class="nav-header">PRÓXIMOS MÓDULOS</li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-door-open"></i>
                        <p>
                            Reservas de Áreas
                        </p>
                    </a>
                </li>
                {{-- ... Outros módulos como Financeiro, Boletos, Condomínios ... --}}
            </ul>
        </nav>
        </div>
    </aside>