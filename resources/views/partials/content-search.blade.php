<article @php post_class() @endphp>
    <header>
        <h3 class="entry-title"><a href="{{ get_permalink() }}">{{ get_the_title() }}</a></h2>
        @if (get_post_type() === 'post')
        @endif
    </header>
    <div class="entry-summary">
        @php the_excerpt() @endphp
    </div>
</article>
