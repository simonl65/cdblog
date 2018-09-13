<div class="blog-post">
    <h2 class="blog-post-title"><a href="/posts/{{ $post->id }}">{{ $post->title }}</a></h2>
    <p class="blog-post-meta">{{ $post->created_at->toDayDateTimestring() }} by {{ $post->user->name }}</p>

    {{ str_limit( $post->body, 250 ) }}
</div>
<!-- /.blog-post -->
