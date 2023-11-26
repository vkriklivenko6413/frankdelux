<nav class="navbar navbar-light navbar-glass navbar-top navbar-expand" style="padding-bottom: 0;">

    <button class="btn navbar-toggler-humburger-icon navbar-toggler me-1 me-sm-3" type="button" data-bs-toggle="collapse" data-bs-target="#navbarVerticalCollapse" aria-controls="navbarVerticalCollapse" aria-expanded="false" aria-label="Toggle Navigation"><span class="navbar-toggle-icon"><span class="toggle-line"></span></span></button>
    <a class="navbar-brand me-1 me-sm-3" href="index.html">
        <div class="d-flex align-items-center">
            <img class="me-2" src="{{ asset('assets/admin/img/icons/spot-illustrations/falcon.png') }}" alt="" width="40" /><span class="font-sans-serif">falcon</span>
        </div>
    </a>
    <ul class="navbar-nav navbar-nav-icons ms-auto flex-row align-items-center">
        <li class="nav-item dropdown"><a class="nav-link pe-0 ps-2" id="navbarDropdownUser" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <div class="avatar avatar-xl">
                    <img class="rounded-circle" src="{{ asset('assets/admin/img/avatar-placeholder.png') }}" alt="" />
                </div>
            </a>
            <div class="dropdown-menu dropdown-caret dropdown-caret dropdown-menu-end py-0" aria-labelledby="navbarDropdownUser">
{{--                <div class="bg-white dark__bg-1000 rounded-2">--}}
{{--                    <a class="dropdown-item" href="#">--}}
{{--                        {{ Str::ucfirst(trans('messages.general.profile')) }}--}}
{{--                    </a>--}}
{{--                </div>--}}
                <div class="bg-white dark__bg-1000 rounded-2">
                    @if(Auth::check())
                    <a class="dropdown-item" href="{{ route('logout') }}">
                       Выйти
                    </a>
                    @endif
                </div>
            </div>
        </li>
    </ul>
</nav>
