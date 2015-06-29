@extends( 'public.app' )
@section( 'page_name', 'Registration' )

@section( 'content' )
<div class="content-40mg">
    <div class="container">

        <div class="row">

            <!-- Begin Register -->
            <div class="col-sm-6 mt30-xs">
                <h2>Create an Account</h2>

                <div class="panel no-margin panel-default">

                    <div class="panel-body">
                        <form name="register-form" role="form" method="POST" action="{{ url('/auth/register') }}">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}" />
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
                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <span class="ion-android-mail" style="font-size:9px;"></span>
                                    </div>
                                    <input class="form-control" type="email" name="email" placeholder="Enter email">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <span class="ion-ios7-locked"></span>
                                    </div>
                                    <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="input-group">
                                    <div class="input-group-addon"><span class="ion-ios7-locked"></span></div>
                                    <input type="password" name="password_confirmation" class="form-control" id="password_confirmation" placeholder="Confirm Password">
                                </div>
                            </div>
                            <div class="checkbox form-group">
                                <label>
                                    <input type="checkbox" name="terms" value="true"> I read the terms of service.
                                </label>
                            </div>
                            <hr class="mb20 mt20">
                            <div class="form-group">
                                <input type="text" class="form-control" id="first_name" name="first_name" placeholder="First Name">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" id="last_name" name="last_name" placeholder="Last Name">
                            </div>
                            <hr class="mt20 mb20">
                            <button type="submit" class="btn btn-rw btn-primary">Register</button> &nbsp;&nbsp;&nbsp;<small><a href="#">Terms of service</a></small>
                        </form><!-- /form -->
                    </div><!-- /panel body -->
                </div><!-- /panel -->
            </div><!-- /column-->
            <!-- End Register -->

        </div><!-- /row -->

    </div><!-- /container -->
</div><!-- /content -->
<!-- End Content -->
@endsection

@section( 'scripts' )
        <script type="text/javascript" src="/js/views/public.auth.register.js"></script>
@endsection