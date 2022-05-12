@extends('news.main')
@section('content')
    <!-- Home -->
    <div class="section-category">
        @include('news.block.breadcrumb', ['item' => ['category_name' => $title]])
        <div class="content_container container_category">
            <div class="featured_title">
                <div class="container">
                    <div class="row">
                        <!-- Main Content -->
                        <div class="col-lg-12">
                            @include('news.pages.rss.child-index.list', ['items' => $items])
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
