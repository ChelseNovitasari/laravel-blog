<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
<div class="sidebar border border-right col-md-3 col-lg-2 p-0 bg-body-tertiary">
    <div class="offcanvas-md offcanvas-end bg-body-tertiary" tabindex="-1" id="sidebarMenu"
        aria-labelledby="sidebarMenuLabel">
        <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="sidebarMenuLabel">Company name</h5> <button type="button" class="btn-close"
                data-bs-dismiss="offcanvas" data-bs-target="#sidebarMenu" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body d-md-flex flex-column p-0 pt-lg-3 overflow-y-auto">
            <ul class="nav flex-column">
                <li class="nav-item"> <a class="nav-link d-flex align-items-center gap-2 active" aria-current="page"
                        href="{{ url('dashboard') }}"> <svg class="bi" aria-hidden="true">
                            <use xlink:href="#house-fill"></use>
                        </svg>
                        Dashboard
                    </a>
                </li>
                <li class="nav-item"> <a class="nav-link d-flex align-items-center gap-2" href="{{ url('article') }}"> <svg class="bi"
                            aria-hidden="true">
                            <use xlink:href="#file-earmark"></use>
                        </svg>
                        Article
                    </a>
                </li>

                @if (auth()->user()->role == 1)
                <li class="nav-item"> <a class="nav-link d-flex align-items-center justify-content-start ps-0" href="{{ url('categories') }}"> <svg class="bi"
                            aria-hidden="true">
                            <i class="bi bi-folder me-2"></i>
                        </svg>
                        Categories
                    </a>
                </li>
                @endif

                <li class="nav-item"> <a class="nav-link d-flex align-items-center justify-content-start ps-0" href="{{ url('config') }}"> <svg class="bi"
                            aria-hidden="true">
                            <i class="bi bi-gear me-2"></i>
                        </svg>
                        Config
                    </a>
                </li>

                <li class="nav-item"> <a class="nav-link d-flex align-items-center gap-2" href="{{ url('users') }}"> <svg class="bi"
                            aria-hidden="true">
                            <use xlink:href="#people"></use>
                        </svg>
                        Users
                    </a>
                </li>

                <li class="nav-item">
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>

                    <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">
                        <i class="bi bi-box-arrow-right me-2"></i>
                        Logout
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>


