<div class="top-bar">
    <div class="container container-header">
        <div class="row top-bar-row">
            <!-- Address and Phone -->
            <div class="col-sm-7 hidden-xs contact-info">
                <span class="ion-android-system-home home-icon"></span>
                Chrysanthemum Village, San Pedro, Laguna
                <span class="ion-ios7-telephone phone-icon"></span>
                +632-919-3920
            </div>
            <!-- Social Buttons -->
            <div class="col-sm-5 text-right topmenu-holder">
                <ul class="topbar-list list-inline">
                    @if( Auth::check() )
                        <li>
                            Welcome <a href="{{ url( 'user/profile' ) }}" class="text-main">{{ Auth::user()->name() }}!</a>
                        </li>
                        <li>
                            <a href="{{ url( 'auth/logout' ) }}" class="user_logout text-main">Logout</a>
                        </li>
                    @else
                        <li>
                            <a data-toggle="modal" data-target="#login">Login</a>
                        </li>
                        <li>
                            <a href="{{ url( 'auth/register' ) }}">Register</a>
                        </li>
                    @endif
                    <li>
                        <a class="btn btn-social-icon btn-rw btn-primary btn-xs">
                            <i class="fa fa-twitter"></i>
                        </a>
                        <a class="btn btn-social-icon btn-rw btn-primary btn-xs">
                            <i class="fa fa-instagram"></i>
                        </a>
                        <a class="btn btn-social-icon btn-rw btn-primary btn-xs">
                            <i class="fa fa-facebook"></i>
                        </a>
                    </li>
                </ul>
            </div>
        </div><!--/row -->
    </div><!--/container header -->
</div><!--/top bar -->