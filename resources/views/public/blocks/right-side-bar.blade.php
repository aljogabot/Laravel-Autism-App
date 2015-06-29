<nav role="navigation">
    <ul id="sidebar-nav" class="sidebar-nav list-group no-margin">
        <li class="list-group-item text-center">
            <span class="fa fa-weixin bordered-icon-sm bordered-icon-color"></span>
            <h4 class="pt15">Latest on Discussions</h4>
            <p class="no-margin">
                Lorem ipsum dolor sit amet, consec tetur adipiscing elit. Integer a elit turpis. Phasellus non varius mi.
            </p>
        </li>
    </ul>
    <hr class="mb20" />
    <ul class="list-unstyled latest-posts">
        @foreach( $latest_posts as $post )
            <li>
                <h3 class="no-margin">
                    <a href="javascript:void(0);">{{ $post->title }}</a>
                </h3>
                <small>
                    By <a href="javascript:void(0);">{{ $post->user->name() }}</a>
                    <br class="no-margin"/>
                    {{ $post->created_at->toDayDateTimeString() }}
                </small>

                <p>{{ $post->body_preview() }}</p>
            </li>
        @endforeach
    </ul>
</nav>