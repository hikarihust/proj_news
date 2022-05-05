@extends('admin.main')

@section('content')
    @include('admin.templates.page_header', ['pageIndex' => false])
    @include('admin.templates.error')

    @if ($item['id'])
        <div class="row">
            @include('admin.pages.user.form_info')
        </div>
    @else
        @include('admin.pages.user.form_add')
    @endif
@endsection
