@extends( 'public.app' )
@section( 'page_name', 'Home' )

@section( 'content' )
<div class="content-40mg">
    <div class="container">

        <div class="cta2 arrow-down">
            <div class="text-center"><!-- //add container, columns, or rows if needed. -->
                <h2>Welcome to Autism Social Philippines</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas metus nulla, commodo a sodales sed, dignissim pretium nunc. Nam et lacus neque. Ut enim massa, sodales tempor convallis et.</p>
            </div>
        </div>

        <div class="row content-40mg">
            <section class="col-lg-9 col-md-9 col-sm-8">
                <?php $x = 0; ?>
                @foreach( $feed_items as $item )
                    @if( $x == 0 )
                        <div class="row">
                    @endif
                    <!-- Content 1 -->
                    <div class="col-sm-4 col-xs-6">
                        <div class="thumbnail custom-content">
                            <a href="javascript:void(0);">
                                {!! $item->get_image() !!}
                            </a>
                            <div class="caption">
                                <h4>
                                    <a href="single-post.html">{{ $item->get_title() }}</a>
                                </h4>
                                <p>
                                    {!! $item->get_content_without_image() !!}
                                </p>
                                <p>
                                    <a role="button" class="btn btn-rw btn-primary" href="javascript:void(0);">View post</a>
                                </p>
                            </div>
                        </div><!-- /thumbnail -->
                    </div><!-- /column -->
                    @if( $x == 2 )
                        </div>
                        <?php $x = 0; ?>
                    @else
                        <?php $x++; ?>
                    @endif
                @endforeach
                </div>
            </section>
            <aside class="col-lg-3 col-md-3 col-sm-4">
                @include( 'public.blocks.right-side-bar' )
            </aside>
        </div>
    </div>
</div>

@endsection


