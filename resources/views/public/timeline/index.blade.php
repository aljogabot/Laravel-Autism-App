@extends( 'public.app' )
@section( 'page_name', 'Timeline' )

@section( 'content' )
    <div class="container">

        <div class="container mt40">

            <div class="cta2 mb30">
                <div class="text-center"><!-- //add container, columns, or rows if needed. -->
                    <h2>Welcome to Timeline</h2>
                    <p>
                        Here you can Share your Stories, Ask Questions,
                        The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum"
                    </p>
                </div>
            </div>

            @if( Auth::check() )
                <div class="create-timeline" style="display: none;">
                    <h2>Create New</h2>

                    <form action="{{ url( 'timeline' ) }}" method="POST" name="create-timeline">
                        <div class="alert" id="alert-message-box"></div>
                        <input type="hidden" name="_token" value="{{ csrf_token() }}"/>
                        <div class="form-group">
                            <input type="text" placeholder="Title" class="form-control timeline-form-fields" id="title" name="title">
                        </div>
                        <div class="form-group">
                            <textarea class="form-control timeline-form-fields" name="body" placeholder="Message" id="body" rows="7"></textarea>
                        </div>
                        <button type="submit" class="btn btn-rw btn-block btn-primary">
                            Add To Timeline
                        </button>
                    </form>
                </div>
                <button class="btn btn-info btn-rw btn-block create-new-topic">Create New Topic</button>
            @else
                <div class="alert alert-info alert-info-rw">
                    You Need To Be Logged In Order To Participate
                </div>
            @endif
        </div>

        <hr class="mb20" />

        <ul class="timeline no-margin"></ul>
    </div>
@endsection

@section( 'scripts' )
    <script type="text/javascript" src="/js/views/public.timeline.js"></script>
@endsection