@extends('layouts.master')

@push('plugin-styles')
<link href="{{ asset('assets/plugins/custom/datatables/datatables.bundle.css') }}" rel="stylesheet" type="text/css" />
@endpush

@section('content')
<div class="d-flex flex-column flex-column-fluid">
    <!--begin::Toolbar-->
    <div id="kt_app_toolbar" class="app-toolbar py-3 py-lg-6">
        <!--begin::Toolbar container-->
        <div id="kt_app_toolbar_container" class="app-container container-xxl d-flex flex-stack">
            <!--begin::Page title-->
            <div class="page-title d-flex flex-column justify-content-center flex-wrap me-3">
                <!--begin::Title-->
                <h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">Data Denah Tipe Rumah : {{ $blok->tipe->tipe }} {{ $blok->nama_blok }}</h1>
                <!--end::Title-->
                <!--begin::Breadcrumb-->
                <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
                    <!--begin::Item-->
                    <li class="breadcrumb-item text-muted">
                        <span class="text-muted text-hover-primary">Home</span>
                    </li>
                    <!--end::Item-->
                    <!--begin::Item-->
                    <li class="breadcrumb-item">
                        <span class="bullet bg-gray-400 w-5px h-2px"></span>
                    </li>
                    <!--end::Item-->
                    <!--begin::Item-->
                    <li class="breadcrumb-item text-muted">Data Denah</li>
                    <!--end::Item-->
                </ul>
                <!--end::Breadcrumb-->
            </div>
            <!--end::Page title-->
        </div>
        <!--end::Toolbar container-->
    </div>
    <!--end::Toolbar-->
    <!--begin::Content-->
    <div id="kt_app_content" class="app-content flex-column-fluid">
        <!--begin::Content container-->
        <div id="kt_app_content_container" class="app-container container-xxl">
            @include('components.alert')
            <!--begin::Category-->
            <div class="card card-flush">
                <!--begin::Card header-->
                <div class="card-header align-items-center py-5 gap-2 gap-md-5">
                    <!--begin::Card title-->
                    <div class="card-title">
                        <!--begin::Search-->
                        <div class="d-flex align-items-center position-relative my-1">
                            <i class="ki-duotone ki-magnifier fs-3 position-absolute ms-4">
                                <span class="path1"></span>
                                <span class="path2"></span>
                            </i>
                            <input type="text" data-kt-ecommerce-category-filter="search" class="form-control form-control-solid w-250px ps-12" placeholder="Search" />
                        </div>
                        <!--end::Search-->
                    </div>
                    <!--end::Card title-->
                    <!--begin::Card toolbar-->
                    <div class="card-toolbar">
                        <!--begin::Add customer-->
                        <a href="{{ route('blok.add-denah', $blok->id) }}" class="btn btn-primary">Tambah Denah</a>
                        <!--end::Add customer-->
                    </div>
                    <!--end::Card toolbar-->
                </div>
                <!--end::Card header-->
                <!--begin::Card body-->
                <div class="card-body pt-0">
                    <!--begin::Table-->
                    <table class="table align-middle table-row-dashed fs-6 gy-5" id="kt_ecommerce_category_table">
                        <thead>
                            <tr class="text-start text-gray-400 fw-bold fs-7 text-uppercase gs-0">
                                <th class="w-10px pe-2">
                                    <div class="form-check form-check-sm form-check-custom form-check-solid me-3">
                                    </div>
                                </th>
                                <th class="min-w-50px">No</th>
                                <th class="min-w-150px">Denah</th>
                                <th class="text-end min-w-70px">Actions</th>
                            </tr>
                        </thead>
                        <tbody class="fw-semibold text-gray-600">
                            @foreach ($data as $item)
                            <tr>
                                <td>
                                    <div class="form-check form-check-sm form-check-custom form-check-solid">
                                    </div>
                                </td>
                                <td>
                                    {{ $loop->iteration }}
                                </td>
                                <td><a href="{{ url(Storage::url($item->file_denah)) }}" target="_blank"><img src="{{ url(Storage::url($item->file_denah)) }}" alt="Gambar Denah" width="100px"></a></td>
                                <td class="text-end">
                                    <a href="#" class="btn btn-sm btn-light btn-active-light-primary btn-flex btn-center" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
                                    <i class="ki-duotone ki-down fs-5 ms-1"></i></a>
                                    <!--begin::Menu-->
                                    <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="{{ route('blok.destroy-denah', ['denahBlok' => $item->id, 'blok' => $blok->id]) }}" class="menu-link px-3" data-kt-users-table-filter="delete_row" onclick="event.preventDefault(); if(confirm('Are you sure you want to delete this data?')) {document.getElementById('delete-form-{{ $item->id }}').submit();}">
                                                Delete
                                            </a>
                                            <form id="delete-form-{{ $item->id }}" action="{{ route('blok.destroy-denah', ['denahBlok' => $item->id, 'blok' => $blok->id]) }}" method="POST" style="display: none;">
                                                @method('DELETE')
                                                @csrf
                                            </form>
                                        </div>
                                        <!--end::Menu item-->
                                    </div>
                                    <!--end::Menu-->
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                        <!--end::Table body-->
                    </table>
                    <!--end::Table-->
                </div>
                <!--end::Card body-->
            </div>
            <!--end::Category-->
        </div>
        <!--end::Content container-->
    </div>
    <!--end::Content-->
</div>
@endsection

@push('plugin-scripts')
<script src="{{ asset('assets/plugins/custom/datatables/datatables.bundle.js') }}"></script>
<script src="{{ asset('assets/js/custom/apps/ecommerce/catalog/categories.js') }}"></script>
<script src="{{ asset('assets/js/widgets.bundle.js') }}"></script>
<script src="{{ asset('assets/js/custom/widgets.js') }}"></script>
<script src="{{ asset('assets/js/custom/apps/chat/chat.js') }}"></script>
<script src="{{ asset('assets/js/custom/utilities/modals/new-target.js') }}"></script>
@endpush

@push('custom-scripts')
@endpush
