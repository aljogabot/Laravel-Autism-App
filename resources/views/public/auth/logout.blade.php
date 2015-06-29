<div class="modal fade" id="logout" tabindex="-1" role="dialog" aria-labelledby="loginLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">

            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
                <h4 class="modal-title" id="loginLabel">Logout</h4>
            </div>

            <div class="modal-body">

                <div class="alert alert-warning" id="alert-message-box">Are You Sure You Want To Logout?</div>

            </div>
            <div class="modal-footer">
                <a href="{{ url( 'auth/logout' ) }}" class="btn btn-rw btn-primary">Logout</a>
            </div>

        </div><!-- /modal content -->
    </div><!-- /modal dialog -->
</div><!-- /modal holder -->