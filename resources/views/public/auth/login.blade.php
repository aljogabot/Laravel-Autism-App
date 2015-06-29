<div class="modal fade" id="login" tabindex="-1" role="dialog" aria-labelledby="loginLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <form name="login_form" role="form" method="POST" action="{{ url( 'auth/login' ) }}">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
                    <h4 class="modal-title" id="loginLabel">Login</h4>
                </div>

                <div class="modal-body">

                    <div class="alert" id="alert-message-box"></div>

                    <div class="form-group">
                        <label for="email">Email address</label>
                        <input type="email" name="email" class="form-control" id="email" placeholder="Enter email">
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" name="password" class="form-control" id="password" placeholder="Password">
                    </div>
                    <div class="checkbox">
                        <label>
                            <input type="checkbox" name="remember" value="true"> Remember me
                        </label>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-rw btn-primary">Login</button>
                </div>
            </form><!-- /form -->
        </div><!-- /modal content -->
    </div><!-- /modal dialog -->
</div><!-- /modal holder -->