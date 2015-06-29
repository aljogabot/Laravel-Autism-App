@if( $breadcrumbs )
    <ol class="breadcrumb">
        @foreach( $breadcrumbs as $breadcrumb )

            @if( $breadcrumb->first )
                <li class="active">
                    <span class="ion-home breadcrumb-home"></span>
                    <a href="{{{ $breadcrumb->url }}}">{{{ $breadcrumb->title }}}</a>
                </li>
            @elseif( ! $breadcrumb->last )
                <li>
                    <a href="{{{ $breadcrumb->url }}}">{{{ $breadcrumb->title }}}</a>
                </li>
            @else
                <li>
                    {{{ $breadcrumb->title }}}
                </li>
            @endif
        @endforeach
    </ol>
@endif