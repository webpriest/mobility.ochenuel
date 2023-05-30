<x-front-layout title="News Post">
    <section class="page-title" style="background-image:url(/storage/images/background/urban.webp);">
        <div class="auto-container">
            <h1>News</h1>
            <ul class="bread-crumb clearfix">
                <li><a href="{{ route('home') }}">Home</a></li>
                <li>News</li>
            </ul>
        </div>
    </section>

    <div class="sidebar-page-container">
        <div class="auto-container">
            <div class="row clearfix">

                <div class="content-side col-lg-9 col-md-12 col-sm-12">
                    <div class="blog-sidebar">
                        <div class="news-block">
                            <div class="inner-box">
                                <div class="image-box">
                                    <figure class="image"><img src="{{ $post->photo() }}" alt="{{ $post->title }}"></figure>
                                </div>
                                <div class="lower-content">
                                    <ul class="post-info">
                                        <li><span class="far fa-user"></span> {{ $post->author }}</li>
                                        <li><span class="far fa-calendar"></span> {{ $post->news_date }}</li>
                                    </ul>
                                    <h2>{{ $post->title }}</h2>
                                    
                                    {!! $post->content !!}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!--Sidebar Side-->
                <div class="sidebar-side col-lg-3 col-md-12 col-sm-12">
                    <livewire:front.page.sidebar />
                </div>
            </div>
        </div>
    </div>
</x-front-layout>