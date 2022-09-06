@extends('layouts.client')

@section('content')
<div class="inner">
    <article class="post-full post tag-product-updates" >
        <header class="post-full-header">
        <section class="post-full-meta">
            <time class="post-full-meta-date" datetime="2019-12-10">{{ $blog->updated_at}}</time>
                <span class="date-divider">/</span> <a href="/blog/tag/product-updates/">Blog Updates</a>
        </section>
        <h1 class="post-full-title">{{ $blog->title}}</h1>
        </header>
        <figure class="post-full-image">
        <img  class="rotario-img" src="/public/assets/images/blog/{{ $blog->image}}"  alt="How Stablecoins will Shake Up Payments"></img>
        </figure>
        <section class="post-full-content">
        <div class="post-content">
            {{ $blog->content}}  
        </div>
        </section>                
    </article>
</div>

@endsection

@section('script')

@endsection