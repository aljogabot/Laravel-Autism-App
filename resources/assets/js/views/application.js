function Main_Application() {
    this.construct();
};

Main_Application.prototype = {

    construct : function() {
        this.init_login_form();
        this.init_common_actions();
    },

    init_common_actions : function() {

        if( $site_config.logged_in ) {
            // Action Logout ...
            $( '.user_logout' ).click(
                function( $e ) {
                    $e.preventDefault();
                    $( '#logout' ).modal( 'show' );
                    $( '#logout #alert-message-box' ).show();
                }
            );
        }

    },

    init_login_form : function() {

        if( ! $site_config.logged_in ) {
            $Site.form( 'form[name=login_form]' );
        }

    }

};


var $Main_Application;
$( document ).ready(
    function() {
        $Main_Application = new Main_Application();
    }
);