@extends('layouts.app')

@section('subtitle', 'welcome')
@section('content_header_title', 'Home')
@section('content_header_subtitle', 'Welcome')

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">Manage Kategori</div>
            <div class="card-body">
                {{ $dataTable->table() }}
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    {{ $dataTable->scripts() }}
@endpush