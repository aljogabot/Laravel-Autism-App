<div class="timeline-badge"></div>
<div class="timeline-panel">
    <div class="heading">
        <h4>{{ $post->title }}</h4>
    </div>
    <div class="timeline-body">
        <ul class="list-inline posted-info">
            <li>
                By <a href="javascript:void(0);">{{ $post->user->name() }}</a>
                <small class="hidden-xs ml20">
                    <i class="glyphicon glyphicon-time"></i>
                    {{ $post->created_at->diffForHumans() }}
                </small>
            </li>
        </ul>
        <p class="mt10">{{ $post->body() }}</p>
    </div>
    @include( 'public.timeline.blocks.comments' )
</div>