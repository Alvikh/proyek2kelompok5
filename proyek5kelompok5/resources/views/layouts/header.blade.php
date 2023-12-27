<header class="u-clearfix u-custom-color-1 u-header u-sticky u-sticky-6746 u-valign-middle-lg u-valign-middle-md u-valign-middle-sm u-valign-middle-xs u-header" id="sec-150b">
    <div class="u-clearfix u-sheet u-sheet-1">
        <nav class="u-menu u-menu-one-level u-offcanvas u-menu-1" data-responsive-from="MD">
            <div class="menu-collapse" style="font-size: 1rem; letter-spacing: 0px; font-weight: 700;">
                <a class="u-button-style u-custom-active-border-color u-custom-active-color u-custom-border u-custom-border-color u-custom-borders u-custom-hover-border-color u-custom-hover-color u-custom-left-right-menu-spacing u-custom-padding-bottom u-custom-text-active-color u-custom-text-color u-custom-text-hover-color u-custom-top-bottom-menu-spacing u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="#">
                    <svg class="u-svg-link" viewBox="0 0 24 24"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#menu-hamburger"></use></svg>
                    <svg class="u-svg-content" version="1.1" id="menu-hamburger" viewBox="0 0 16 16" x="0px" y="0px" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg">
                        <g>
                            <rect y="1" width="16" height="2"></rect>
                            <rect y="7" width="16" height="2"></rect>
                            <rect y="13" width="16" height="2"></rect>
                        </g>
                    </svg>
                </a>
            </div>
            <div class="u-custom-menu u-nav-container">
                <ul class="u-nav u-spacing-20 u-unstyled u-nav-1">
                    <li class="u-nav-item"><a class="u-border-active-palette-1-base u-border-hover-palette-1-base u-border-no-bottom u-border-no-left u-border-no-right u-border-no-top u-button-style u-nav-link u-text-active-palette-1-base u-text-grey-90 u-text-hover-custom-color-3" href="{{ route('beranda') }}" style="padding: 10px;">Beranda</a></li>
                    <li class="u-nav-item"><a class="u-border-active-palette-1-base u-border-hover-palette-1-base u-border-no-bottom u-border-no-left u-border-no-right u-border-no-top u-button-style u-nav-link u-text-active-palette-1-base u-text-grey-90 u-text-hover-custom-color-3" href="{{ url('informasi') }}" style="padding: 10px;">Informasi</a></li>
                    <li class="u-nav-item"><a class="u-border-active-palette-1-base u-border-hover-palette-1-base u-border-no-bottom u-border-no-left u-border-no-right u-border-no-top u-button-style u-nav-link u-text-active-palette-1-base u-text-grey-90 u-text-hover-custom-color-3" href="{{ url('hubungikami') }}" style="padding: 10px;">Hubungi Kami</a></li>
                </ul>
            </div>
            <div class="u-custom-menu u-nav-container-collapse">
                <div class="u-black u-container-style u-inner-container-layout u-opacity u-opacity-95 u-sidenav">
                    <div class="u-inner-container-layout u-sidenav-overflow">
                        <div class="u-menu-close"></div>
                        <ul class="u-align-center u-nav u-popupmenu-items u-unstyled u-nav-2">
                            <li class="u-nav-item"><a class="u-button-style u-nav-link @if(Request::is('beranda')) active @endif" href="{{ route('beranda') }}">Beranda</a></li>
                            <li class="u-nav-item"><a class="u-button-style u-nav-link @if(Request::is('informasi')) active @endif" href="{{ route('informasi') }}">Informasi</a></li>
                            <li class="u-nav-item"><a class="u-button-style u-nav-link @if(Request::is('hubungikami')) active @endif" href="{{ route('hubungikami') }}">Hubungi Kami</a></li>
                        </ul>                        
                    </div>
                </div>
                <div class="u-black u-menu-overlay u-opacity u-opacity-70"></div>
            </div>
        </nav>
        <img class="u-image u-image-contain u-image-default u-image-1" src="{{ asset ('img/LOGOMITRA.png') }}" alt="" data-image-width="320" data-image-height="329">
        <img class="u-image u-image-contain u-image-default u-image-2" src="{{ asset ('img/NAMAMITRA.png') }}" alt="" data-image-width="500" data-image-height="70">
        <a href="{{ route('login') }}" class="u-border-2 u-border-active-palette-1-base u-border-grey-75 u-border-hover-custom-color-3 u-border-no-left u-border-no-right u-border-no-top u-bottom-left-radius-0 u-bottom-right-radius-0 u-btn u-button-style u-none u-radius-0 u-text-active-palette-1-base u-text-body-color u-text-hover-custom-color-3 u-top-left-radius-0 u-top-right-radius-0 u-btn-1">MASUK</a>
        <div class="u-icon u-icon-rectangle u-icon-1" data-href="{{ url('profile') }}">
            <img src="{{ asset('img/user-profil.png') }}" alt="Foto Profil" width="70" height="70">
        </div>
    </div>
</header>