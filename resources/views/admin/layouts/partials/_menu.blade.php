<nav class="navbar navbar-light navbar-vertical navbar-expand-xl">
    <script>
        var navbarStyle = localStorage.getItem("navbarStyle");
        if (navbarStyle && navbarStyle !== 'transparent') {
            document.querySelector('.navbar-vertical').classList.add(`navbar-${navbarStyle}`);
        }
    </script>
    <div class="d-flex align-items-center">
        <div class="toggle-icon-wrapper">


        </div><a class="navbar-brand" href="/admin">
            <div class="d-flex align-items-center py-3">
                <span class="font-sans-serif">
                    frankdelux
                </span>
            </div>
        </a>
    </div>
    <div class="collapse navbar-collapse" id="navbarVerticalCollapse">
        <div class="navbar-vertical-content scrollbar">
            <ul class="navbar-nav flex-column mb-3" id="navbarVerticalNav">
                <a class="nav-link" href="{{ route('admin.card.list') }}" role="button">
                    <div class="d-flex align-items-center">
                        <span class="nav-link-icon">
                            <span class="fas fa-tags"></span>
                        </span>
                        <span class="nav-link-text ps-1">
                            Карточка товара
                        </span>
                    </div>
                </a>
                <a class="nav-link" href="{{ route('admin.seo.lading') }}" role="button">
                    <div class="d-flex align-items-center">
                        <span class="nav-link-icon">
                            <span class="fas fa-tags"></span>
                        </span>
                        <span class="nav-link-text ps-1">
                            SEO Главная
                        </span>
                    </div>
                </a>

                <a class="nav-link" href="{{ route('admin.setting.list') }}" role="button">
                    <div class="d-flex align-items-center">
                        <span class="nav-link-icon">
                            <span class="fas fa-tags"></span>
                        </span>
                        <span class="nav-link-text ps-1">
                            Настройки
                        </span>
                    </div>
                </a>

                <a class="nav-link" href="{{ route('admin.block.blockOne') }}" role="button">
                    <div class="d-flex align-items-center">
                        <span class="nav-link-icon">
                            <span class="fas fa-tags"></span>
                        </span>
                        <span class="nav-link-text ps-1">
                            Блок 1
                        </span>
                    </div>
                </a>


                <a class="nav-link" href="{{ route('admin.block.blockTwo') }}" role="button">
                    <div class="d-flex align-items-center">
                        <span class="nav-link-icon">
                            <span class="fas fa-tags"></span>
                        </span>
                        <span class="nav-link-text ps-1">
                            Блок 2
                        </span>
                    </div>
                </a>

                <a class="nav-link" href="{{ route('admin.block.blockThree') }}" role="button">
                    <div class="d-flex align-items-center">
                        <span class="nav-link-icon">
                            <span class="fas fa-tags"></span>
                        </span>
                        <span class="nav-link-text ps-1">
                            Блок 3
                        </span>
                    </div>
                </a>

                <a class="nav-link" href="{{ route('admin.block.blockFour') }}" role="button">
                    <div class="d-flex align-items-center">
                        <span class="nav-link-icon">
                            <span class="fas fa-tags"></span>
                        </span>
                        <span class="nav-link-text ps-1">
                            Блок 4
                        </span>
                    </div>
                </a>
{{--                <a class="nav-link" href="#" role="button">--}}
{{--                    <div class="d-flex align-items-center">--}}
{{--                        <span class="nav-link-icon">--}}
{{--                             <span class="fas fa-tags"></span>--}}
{{--                        </span>--}}
{{--                        <span class="nav-link-text ps-1">--}}
{{--                            {{ Str::ucfirst(trans('messages.general.posts')) }}--}}
{{--                        </span>--}}
{{--                    </div>--}}
{{--                </a>--}}

{{--                <a class="nav-link" href="#" role="button">--}}
{{--                    <div class="d-flex align-items-center">--}}
{{--                        <span class="nav-link-icon">--}}
{{--                              <span class="fas fa-user-shield"></span>--}}
{{--                        </span>--}}
{{--                        <span class="nav-link-text ps-1">--}}
{{--                            {{ Str::ucfirst(trans('messages.general.defenders')) }}--}}
{{--                        </span>--}}
{{--                    </div>--}}
{{--                </a>--}}
{{--                <a class="nav-link" href="#" role="button">--}}
{{--                    <div class="d-flex align-items-center">--}}
{{--                        <span class="nav-link-icon">--}}
{{--                             <span class="fas fa-briefcase"></span>--}}
{{--                        </span>--}}
{{--                        <span class="nav-link-text ps-1">--}}
{{--                            {{ Str::ucfirst(trans('messages.general.benefactors')) }}--}}
{{--                        </span>--}}
{{--                    </div>--}}
{{--                </a>--}}
{{--                <a class="nav-link" href="#" role="button">--}}
{{--                    <div class="d-flex align-items-center">--}}
{{--                        <span class="nav-link-icon">--}}
{{--                            <span class="fas fa-money-check"></span>--}}
{{--                        </span>--}}
{{--                        <span class="nav-link-text ps-1">--}}
{{--                            {{ Str::ucfirst(trans('messages.general.payments')) }}--}}
{{--                        </span>--}}
{{--                    </div>--}}
{{--                </a>--}}
            </ul>
        </div>
    </div>
</nav>
