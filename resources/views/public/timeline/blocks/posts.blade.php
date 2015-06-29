@foreach( $posts as $index => $post )
    <li{!! $index % 2 == 0 ? '' : ' class="timeline-inverted"' !!} id="post-{{ $post->id }}">
        @include( 'public.timeline.blocks.post' )
    </li>
@endforeach