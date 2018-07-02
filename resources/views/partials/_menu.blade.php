<div class="header d-lg-flex p-0 collapse" id="headerMenuCollapse" style="">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-3 ml-auto">
                <form class="input-icon my-3 my-lg-0">
                    <input type="search" class="form-control header-search" placeholder="Search…" tabindex="1">
                    <div class="input-icon-addon">
                        <i class="fe fe-search"></i>
                    </div>
                </form>
            </div>
            <div class="col-lg order-lg-first">
                <ul class="nav nav-tabs border-0 flex-column flex-lg-row">
                    <li class="nav-item">
                        <a href="{{ route('home') }}" class="nav-link {{ set_menu_class('home') }}"><i class="fe fe-home"></i> Home</a>
                    </li>
                    <li class="nav-item">
                        <a href="javascript:void(0)" class="nav-link {{ set_menu_class(['houses', 'houses']) }}" data-toggle="dropdown" aria-expanded="false"><i
                                    class="fe fe-grid"></i> Households</a>
                        <div class="dropdown-menu dropdown-menu-arrow" x-placement="bottom-start"
                             style="position: absolute; transform: translate3d(12px, 55px, 0px); top: 0px; left: 0px; will-change: transform;">
                            <a href="{{ route('houses.index') }}" class="dropdown-item">Browse households</a>
                            <a href="{{ route('houses.create') }}" class="dropdown-item">Register a household</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a href="javascript:void(0)" class="nav-link {{ set_menu_class('rules.index') }}"><i class="fe fe-file-text"></i> FAQ</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>