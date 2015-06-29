function Contact_Us() {
    this.construct();
};

Contact_Us.prototype = {

    construct : function() {
        this.init_form();
    },

    init_form : function() {

        var $self = this;

        $Site.form(
            'form[name=contact-form]',
            {},
            function( $json_response ) {
                if( $json_response.success ) {
                    $self.clear_fields();
                }
            }
        );

    },

    clear_fields : function() {

        $( '.contact-fields' ).val( '' );

    }

};

var $Contact_Us;

$( document ).ready(
    function() {
        $Contact_Us = new Contact_Us();
    }
);