<div id="kt_app_sidebar" class="app-sidebar flex-column" data-kt-drawer="true" data-kt-drawer-name="app-sidebar"
    data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true" data-kt-drawer-width="225px"
    data-kt-drawer-direction="start" data-kt-drawer-toggle="#kt_app_sidebar_mobile_toggle">
    <!--begin::Logo-->
    <div class="app-sidebar-logo px-6" id="kt_app_sidebar_logo">
        <!--begin::Logo image-->
        <a href="{{ url('/') }}">
            <img alt="Logo" src="{{ asset('assets/media/logos/house.png') }}"
                class="h-30px app-sidebar-logo-default theme-light-show" />
            <img alt="Logo" src="{{ asset('assets/media/logos/house.png') }}"
                class="h-25px app-sidebar-logo-default theme-dark-show" />&nbsp;{{ $nama_cv }}
            <img alt="Logo" src="{{ asset('assets/media/logos/house.png') }}"
                class="h-30px app-sidebar-logo-minimize" />
        </a>
        <!--end::Logo image-->
        <!--begin::Sidebar toggle-->
        <div id="kt_app_sidebar_toggle"
            class="app-sidebar-toggle btn btn-icon btn-shadow btn-sm btn-color-muted btn-active-color-primary h-30px w-30px position-absolute top-50 start-100 translate-middle rotate"
            data-kt-toggle="true" data-kt-toggle-state="active" data-kt-toggle-target="body"
            data-kt-toggle-name="app-sidebar-minimize">
            <i class="ki-outline ki-black-left-line fs-3 rotate-180"></i>
        </div>
        <!--end::Sidebar toggle-->
    </div>
    <!--end::Logo-->
    <!--begin::sidebar menu-->
    <div class="app-sidebar-menu overflow-hidden flex-column-fluid">
        <!--begin::Menu wrapper-->
        <div id="kt_app_sidebar_menu_wrapper" class="app-sidebar-wrapper">
            <!--begin::Scroll wrapper-->
            <div id="kt_app_sidebar_menu_scroll" class="scroll-y my-5 mx-3" data-kt-scroll="true"
                data-kt-scroll-activate="true" data-kt-scroll-height="auto"
                data-kt-scroll-dependencies="#kt_app_sidebar_logo, #kt_app_sidebar_footer"
                data-kt-scroll-wrappers="#kt_app_sidebar_menu" data-kt-scroll-offset="5px"
                data-kt-scroll-save-state="true">
                <!--begin::Menu-->
                <div class="menu menu-column menu-rounded menu-sub-indention fw-semibold fs-6" id="#kt_app_sidebar_menu"
                    data-kt-menu="true" data-kt-menu-expand="false">
                    <!--begin:Menu item-->
                    <div class="menu-item">
                        <!--begin:Menu link-->
                        <a class="menu-link {{ Request::is('dashboard') ? 'active' : '' }}"
                            href="{{ route('dashboard') }}">
                            <span class="menu-icon">
                                <i class="ki-outline ki-element-11 fs-2"></i>
                            </span>
                            <span class="menu-title">
                                @if (auth()->user()->role == 'admin')
                                Dashboards
                                @else
                                Persyaratan
                                @endif
                            </span>
                        </a>
                        <!--end:Menu link-->
                    </div>
                    <!--end:Menu item-->
                    @if (auth()->user()->role == 'admin')
                    <!--begin:Menu item-->
                    <div class="menu-item pt-5">
                        <!--begin:Menu content-->
                        <div class="menu-content">
                            <span class="menu-heading fw-bold text-uppercase fs-7">Pages</span>
                        </div>
                        <!--end:Menu content-->
                    </div>
                    <!--end:Menu item-->
                    <!--begin:Menu item-->
                    <div class="menu-item">
                        <!--begin:Menu link-->
                        <a class="menu-link {{ Request::is('admin/tipe-rumah*') ? 'active' : '' }}"
                            href="{{ route('tipe-rumah.index') }}">
                            <span class="menu-icon">
                                <i class="ki-outline ki-map fs-2"></i>
                            </span>
                            <span class="menu-title">Tipe Rumah</span>
                        </a>
                        <!--end:Menu link-->
                    </div>
                    <!--end:Menu item-->
                    <!--begin:Menu item-->
                    <div class="menu-item">
                        <!--begin:Menu link-->
                        <a class="menu-link {{ Request::is('admin/blok*') ? 'active' : '' }}"
                            href="{{ route('blok.index') }}">
                            <span class="menu-icon">
                                <i class="ki-outline ki-category fs-2"></i>
                            </span>
                            <span class="menu-title">Blok</span>
                        </a>
                        <!--end:Menu link-->
                    </div>
                    <!--end:Menu item-->
                    <!--begin:Menu item-->
                    <div class="menu-item">
                        <!--begin:Menu link-->
                        <a class="menu-link {{ Request::is('admin/berkas/verifikasi*') ? 'active' : '' }}"
                            href="{{ route('berkas.verifikasi') }}">
                            <span class="menu-icon">
                                <i class="ki-outline ki-double-check-circle fs-2"></i>
                            </span>
                            <span class="menu-title">Verifikasi</span>
                        </a>
                        <!--end:Menu link-->
                    </div>
                    <!--end:Menu item-->
                    <!--begin:Menu item-->
                    <div data-kt-menu-trigger="{default:'click', lg: 'hover'}" data-kt-menu-placement="right-start"
                        class="menu-item menu-lg-down-accordion">
                        <!--begin:Menu link-->
                        <span class="menu-link">
                            <span class="menu-icon">
                                <i class="ki-outline ki-message-text-2 fs-2"></i>
                            </span>
                            <span class="menu-title">Berkas Costumer</span>
                            <span class="menu-arrow"></span>
                        </span>
                        <!--end:Menu link-->
                        <!--begin:Menu sub-->
                        <div
                            class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown menu-active-bg px-lg-2 py-lg-4 w-lg-225px">
                            @foreach ($tipe_rumah as $item)
                            <!--begin:Menu item-->
                            <div class="menu-item">
                                <!--begin:Menu link-->
                                <a class="menu-link" href="{{ route('berkas.customer', $item->id) }}">
                                    <span class="menu-bullet">
                                        <span class="bullet bullet-dot"></span>
                                    </span>
                                    <span class="menu-title">{{ $item->tipe }}</span>
                                </a>
                                <!--end:Menu link-->
                            </div>
                            <!--end:Menu item-->
                            @endforeach
                        </div>
                        <!--end:Menu sub-->
                    </div>
                    <!--end:Menu item-->
                    <!--begin:Menu item-->
                    <div class="menu-item">
                        <!--begin:Menu link-->
                        <a class="menu-link {{ Request::is('admin/pengaturan*') ? 'active' : '' }}"
                            href="{{ route('pengaturan.edit', 1) }}">
                            <span class="menu-icon">
                                <i class="ki-outline ki-setting fs-2"></i>
                            </span>
                            <span class="menu-title">Pengaturan App</span>
                        </a>
                        <!--end:Menu link-->
                    </div>
                    <!--end:Menu item-->
                    @else
                    <!--begin:Menu item-->
                    <div class="menu-item">
                        <!--begin:Menu link-->
                        <a class="menu-link {{ Request::is('berkas*') ? 'active' : '' }}"
                            href="{{ route('berkas.index') }}">
                            <span class="menu-icon">
                                <i class="ki-outline ki-tablet-text-up fs-2"></i>
                            </span>
                            <span class="menu-title">Data Berkas</span>
                        </a>
                        <!--end:Menu link-->
                    </div>
                    <!--end:Menu item-->
                    @endif
                </div>
                <!--end::Menu-->
            </div>
            <!--end::Scroll wrapper-->
        </div>
        <!--end::Menu wrapper-->
    </div>
    <!--end::sidebar menu-->
</div>
