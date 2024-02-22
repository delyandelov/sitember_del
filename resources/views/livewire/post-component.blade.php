@section('title', 'POST - Sitembera.com')
@section('metatitle', 'POST - Sitember.com')
@section('metadescription', 'Recent Post from Sitember.com')
<div>
    <!-- single post content start -->
        <main class="post">
            <div class="page">
                <div class="container">
                    <ul class="breadcrumbs d-flex flex-wrap">
                        <li class="breadcrumbs_item">
                            <a class="link" href="/">Home</a>
                        </li>
                        <li class="breadcrumbs_item">
                            <a class="link" href="{{ route('blog') }}">Blog</a>
                        </li>
                        <li class="breadcrumbs_item current">
                            <span id="currentpage">{{ $post->title }}</span>
                        </li>
                    </ul>
                </div>
                <div class="container">
                    <div class="page_main maxWidth-none">
                        <div class="wrapper">
                            <span class="tw-height h2">
                                <span class="text">{{ $post->title }}</span>
                            </span>
                            <h2 class="page_main-title type" data-text="{{ $post->title }}">{{ $post->title }}</h2>
                        </div>

                        <div class="main_meta d-flex flex-wrap align-items-center">
                            <span class="main_meta-bookmark">
                                <i class="icon-bookmark icon"></i>
                            </span>

                            <p class="main_meta-item">{{ $post->created_at }}</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container pt-xl">
                <article class="article">
                    <div class="article_media article_media--main">
                        <picture>
                            <source data-srcset="img/placeholder.jpg" srcset="img/placeholder.jpg" type="image/webp" />
                            <img
                                class="lazy"
                                data-src="img/placeholder.jpg"
                                src="img/placeholder.jpg"
                                alt="{{ $post->title }}"
                            />
                        </picture>
                        <div class="share_panel">
                            <span class="share_panel-label">Share</span>
                            <ul class="share_panel-list d-flex flex-column">
                                <li class="share_panel-list_item">
                                    <a class="link" href="#">
                                        <i class="icon-link icon"></i>
                                    </a>
                                </li>
                                <li class="share_panel-list_item">
                                    <a class="link" href="#">
                                        <i class="icon-facebook icon"></i>
                                    </a>
                                </li>
                                <li class="share_panel-list_item">
                                    <a class="link" href="#">
                                        <i class="icon-instagram icon"></i>
                                    </a>
                                </li>
                                <li class="share_panel-list_item">
                                    <a class="link" href="#">
                                        <i class="icon-twitter icon"></i>
                                    </a>
                                </li>
                                <li class="share_panel-list_item">
                                    <a class="link" href="#">
                                        <i class="icon-linkedin icon"></i>
                                    </a>
                                </li>
                                <li class="share_panel-list_item">
                                    <a class="link" href="#">
                                        <i class="icon-whatsapp icon"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div>
                        {!! $post->content !!}
                    </div>
                    <div class="article_tags container--sm">
                        <ul class="article_tags-list d-flex flex-wrap">
                            <li class="list-item">
                                <a class="tag" href="#">New Post</a>
                            </li>
                            <li class="list-item">
                                <a class="tag" href="#">Marketing</a>
                            </li>
                            <li class="list-item">
                                <a class="tag" href="#">Saas</a>
                            </li>
                            <li class="list-item">
                                <a class="tag" href="#">Data</a>
                            </li>
                        </ul>
                    </div>
                </article>
                <div class="navigation d-flex flex-column flex-md-row">
                    @if (isset($prevPost->slug))
                        <div class="navigation_block navigation_block--prev">
                            <a class="label" href="{{ route('post', $prevPost->slug) }}">
                                <i class="icon-arrow-left icon arrow-rotate"></i>
                                Previous
                            </a>
                            <a class="title h6" href="href="{{ route('post', $prevPost->slug) }}"> {{ $prevPost->title }} </a>
                        </div>
                    @endif
                    <span class="divider"></span>
                    @if (isset($nextPost->slug))
                        <div class="navigation_block navigation_block--next">
                            <a class="label" href="href="{{ route('post', $nextPost->slug) }}">
                                Next
                                <i class="icon-arrow-left icon arrow-rotate"></i>
                            </a>
                            <a class="title h6" href="href="{{ route('post', $nextPost->slug) }}">
                                {{ $nextPost->title }}
                            </a>
                        </div>
                    @endif
                </div>
            </div>
        </main>
</div>
