@extends( 'public.app' )
@section( 'page_name', 'Contact Us' )

@section( 'content' )
    <!-- Begin Map -->
    <div class="container-fluid">
        <div class="row">
            <div class="col-xs-12 no-padding" style="margin-bottom: -7px;">
                <iframe
                    style="border: 0px none;
                    border-color:#fff;
                    width:100%;"
                    height="350"
                    src="https://www.google.com/maps/embed/v1/place?key=AIzaSyD8auQfyEc7BVE7KcaanT1YdYQY7kOXb-0&zoom=10&q=Chrysanthemum+Village+San+Pedro+Laguna+Philippines+4023"
                >
                </iframe>
            </div>
        </div>
    </div>
    <!-- End Map -->

    <!-- Begin Contact -->
    <section class="mt40 mb40">
        <div class="container">

            <!-- Form + Sidebar -->
            <div class="row">
                <div class="col-sm-8">
                    <div class="heading mb20"><h4><span class="ion-android-mail mr15"></span>Send us a Message</h4></div>
                    <h3 class="mb20">
                        <strong>Please send us a message. We love to hear from you ...</strong>
                    </h3>
                    <form role="form" name="contact-form" method="POST" action="{{ url( 'contact/process' ) }}">
                        <div class="alert" id="alert-message-box"></div>
                        @if (count($errors) > 0)
                            <div class="alert alert-danger">
                                <strong>Whoops!</strong> There were some problems with your input.<br><br>
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        <div class="form-group">
                            <input type="text" placeholder="Name" class="form-control contact-fields" id="name" name="name">
                        </div>
                        <div class="form-group">
                            <input type="email" placeholder="Email Address" class="form-control contact-fields" id="email" name="email">
                        </div>
                        <div class="form-group">
                            <textarea class="form-control contact-fields" name="message" placeholder="Message" id="message" rows="7"></textarea>
                        </div>
                        <button type="submit" class="btn btn-rw btn-primary">Submit</button>
                    </form>
                </div>
                <div class="col-sm-4 mt30-xs">
                    <div class="content-box content-box-primary mb30">
                        <span class="ion-ios7-telephone-outline text-white border-white bordered-icon-static-sm mb10"></span>
                        <h2 class="text-white no-margin">+632-919-3920</h2>
                    </div>
                    <div class="panel panel-primary no-margin">
                        <div class="panel-heading">
                            <h3 class="panel-title"><span class="ion-android-system-home"></span> Information</h3>
                        </div>
                        <div class="panel-body">
                            <address class="no-margin">
                                <strong>Autism Social</strong><br>
                                Chrysanthemum Village,<br>
                                San Pedro, Laguna<br>
                                <abbr title="Phone"></abbr> +(632) 919-3920 <br>
                                Mail: <a href="javascript:void(0);">support@autismsocial.com</a>
                            </address>
                        </div>
                    </div>
                </div>
            </div>

        </div><!-- /container -->
    </section><!-- /section -->
    <!-- End Contact -->
@endsection

@section( 'scripts' )
    <script type="text/javascript" src="/js/views/public.pages.contact.js"></script>
@endsection