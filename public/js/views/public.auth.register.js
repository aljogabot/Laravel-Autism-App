function Auth_Register() {
    this.construct();
};

Auth_Register.prototype = {
    construct : function() {
        this.init_form();
    },

    init_form : function() {
        $Site.form( 'form[name=register-form]' );
    }
};

var $Auth_Register;
$( document ).ready(
    function() {
        $Auth_Register = new Auth_Register();
    }
);