@section('title', 'Blog - Sitember.com')
@section('metatitle', 'Blog - Sitember.com')
@section('metadescription', 'Recent Blog Posts from Sitember.com')
<div>
    <!-- blog boxes content start -->
        <main class="blog">
            <div class="page">
                <div class="container">
                    <div class="page_main">
                        <span class="page_main-subtitle">Blog</span>
                        <div class="wrapper mt-0">
                            <span class="tw-height h1">
                                <span class="text">Recent News & Articles</span>
                            </span>
                            <h1 class="page_main-title type" data-text="Recent News & Articles">Recent News & Articles</h1>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container pt-xl">
                <ul class="blog_filters d-flex flex-wrap unstyled">
                    <li class="list-item">
                        <a class="blog_filters-item current" data-target="all" href="#">all</a>
                    </li>
                    @foreach ($categories as $key => $category)
                        <li class="list-item">
                            <a class="blog_filters-item"  data-target="{{ $category->title }}" href="#">{{ $category->title }}</a>
                        </li>
                    @endforeach
                </ul>
                <div class="blog_posts row">
                    @foreach ($posts as $keyP => $post)
                    {{--  <div class="blog_posts-item post-item col-md-6" data-groups='["advices", "startups"]'> --}}
                    <div class="blog_posts-item post-item col-md-6" data-groups='{{ $post->categories }}'>
                        <div class="wrapper">
                            <div class="main">
                                <a class="main_title h5" href="{{ route('post', $post->slug) }}">
                                    {{ $post->title }}
                                </a>
                                <div class="main_meta d-flex flex-wrap align-items-center">
                                    <p class="main_meta-item">{{ $post->created_at }}</p>
                                </div>
                            </div>
                            <div class="media">
                                <picture>
                                    <source data-srcset="{{ $post->getFirstMediaURL('posts_head') }}" srcset="{{ $post->getFirstMediaURL('posts_head') }}" type="image/webp" />
                                    <img
                                        class="lazy"
                                        data-src="{{ $post->getFirstMediaURL('posts_head') }}"
                                        src="{{ $post->getFirstMediaURL('posts_head') }}"
                                        alt="{{ $post->title }}"
                                    />
                                </picture>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
                <ul class="pagination d-flex flex-wrap align-items-center justify-content-end">
                    <li class="pagination_item">
                        <a class="link current" href="#">1</a>
                    </li>
                    <li class="pagination_item">
                        <a class="link" href="#">2</a>
                    </li>
                    <li class="pagination_item">
                        <a class="link" href="#">3</a>
                    </li>
                    <li class="pagination_item">
                        <a class="control" href="#">
                            <i class="icon-chevron-double-right icon"></i>
                        </a>
                    </li>
                </ul>
            </div>
        </main>
        <!-- blog boxes content end -->

        <script src="{{ asset('assets/js/blog.min.js') }}"></script>
</div>
