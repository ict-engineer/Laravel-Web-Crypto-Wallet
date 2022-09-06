@extends('layouts.client')

@section('content')
<div class="inner">
    <div class="post-feed">
    @foreach ($blogs as $blog)
        <article class="post-card post tag-product-updates">
            <a class="post-card-image-link" href="/blog/{{ $blog->id }}">
            <img class="post-card-image"  sizes="(max-width: 1000px) 400px, 700px" src="/public/assets/images/blog/{{$blog->image}}"  alt="Your Step-By-Step Guide for BitPay's New Payment Flow"></img>
            </a>
            <div class="post-card-content">
                <a class="post-card-content-link" href="/blog/{{ $blog->id }}">
                    <header class="post-card-header">
                    <span class="post-card-tags">Blog</span>
                    <h2 class="post-card-title">{{ $blog->title}}</h2>
                    </header>
                    <section class="post-card-excerpt">
                    <p>{{ $blog->description}}</p>
                    </section>
                    <footer class="post-card-meta">
                    <ul class="author-list">
                        <li class="author-list-item">
                            <div class="author-name-tooltip">
                                The Raplex Team 
                            </div>
                            <a href="/blog/author/team/" class="static-avatar">
                                <img class="author-profile-image" src="/public/assets/images/team-1.png" alt="The Raplex Team"></img>
                            </a>
                        </li>
                    </ul>
                    <span class="reading-time">{{$blog->readingtime}}min read</span>
                    </footer>
                </a>
            </div>
        </article>        
    @endforeach
    </div>
</div>

@endsection

@section('script')

@endsection