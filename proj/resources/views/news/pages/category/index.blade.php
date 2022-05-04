@extends('news.main')
@section('content')
    <!-- Home -->
    <div class="section-category">
        <div class="home">
            <div class="parallax_background parallax-window" data-parallax="scroll" data-image-src="{!! asset('news/images/footer.jpg') !!}"
                data-speed="0.8"></div>
            <div class="home_content_container">
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <div class="home_content">
                                <div class="home_title">Thể thao</div>
                                <div class="breadcrumbs">
                                    <ul class="d-flex flex-row align-items-start justify-content-start">
                                        <li><a href="">Trang chủ</a></li>
                                        <li>Thể thao</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="content_container container_category">
            <div class="featured_title">
                <div class="container">
                    <div class="row">
                        <!-- Main Content -->
                        <div class="col-lg-9">
                            @include('news.pages.category.child-index.category', ['item' => $itemCategory[0]])
                        </div>
                        <!-- Sidebar -->
                        <div class="col-lg-3">
                            <div class="sidebar">
                                <!-- Latest Posts -->
                                @include('news.block.latest_posts', [
                                    'items' => $itemsLatest,
                                ])
                                <!-- Advertisement -->
                                @include('news.block.advertisement', [
                                    'itemsAdvertisement' => [],
                                ])
                                <!-- Most Viewed -->
                                @include('news.block.most_viewed', ['itemsMostViewed' => []])
                                <!-- Tags -->
                                @include('news.block.tags', ['itemsTags' => []])
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
