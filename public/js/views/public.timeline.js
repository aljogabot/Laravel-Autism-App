function Public_Timeline() {
    this.construct();
};

Public_Timeline.prototype = {

    construct : function() {
        this.init_form();
        this.init_timeline();
        this.init_events();
    },

    init_events : function() {

        if( $site_config.logged_in ) {

            $( '.create-new-topic' ).click(
                function() {
                    $( this ).hide();
                    $( '.create-timeline' ).show();
                    $Site.scroll_to( '.create-timeline', 800, 100 );
                }
            );



        }

    },

    init_comment : function( $element ) {

        var $self = this;

        $element = $element ? $element : 'form[name=create-comment]';
        $element = $( $element );

        $element.submit(
            function( $e ) {
                $e.preventDefault();
                var $current_element = $( this );

                $Site.ajax(
                    $current_element.attr( 'action' ),
                    $current_element.serialize(),
                    $current_element,
                    function( $json_response ) {
                        if( $json_response.success ) {
                            var $post_element = $( 'li' + $json_response.post_id );
                            $post_element.html( $json_response.content );
                            var $comment_form = $post_element.find( 'form[name=create-comment]' );
                            $self.init_comment( $comment_form );
                        }
                    }
                );

                return false;
            }
        );

    },

    init_timeline : function() {

        var $self = this;

        $Site.use_own_message_script = false;

        $Site.ajax(
            $site_config.base_url + 'timeline/display',
            { sample : 'sample' },
            '',
            function( $json_response ) {
                if( $json_response.loaded ) {
                    $( 'ul.timeline' ).html( $json_response.content );
                    var $element = $( 'ul.timeline li:first' );
                    $Site.scroll_to( $element, 800, 10 );
                    $Site.use_own_message_script = true;
                    $self.init_comment();
                }
            }
        );

    },

    init_form : function() {

        var $self = this;
        var $form = $( 'form[name=create-timeline]' );

        if( $form.length ) {

            $Site.form(
                $form,
                {},
                function( $json_response ) {
                    if( $json_response.success ) {
                        $self.hide_create_form( $form );
                        $self.init_timeline();
                        $( '.create-new-topic' ).show();
                    }
                }
            );

        }

    },

    hide_create_form : function( $form ) {
        $form.find( '#alert-message-box').attr( 'class', 'alert' ).hide();
        $( '.create-timeline' ).hide();
        $( '.timeline-form-fields' ).val( '' );
    }
};

var $Public_Timeline;
$( document ).ready(
    function() {
        $Public_Timeline = new Public_Timeline();
    }
);