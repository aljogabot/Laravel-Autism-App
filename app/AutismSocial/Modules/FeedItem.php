<?php

    namespace AutismSocial\Modules;

    class FeedItem extends \SimplePie_Item {

        public function get_image() {
            $html_dom = new \simple_html_dom();
            $html_dom->load( $this->get_content() );
            return $html_dom->find( 'img', 0 );
        }

        public function get_description_without_image() {

            $html_dom = new \simple_html_dom();
            $html_dom->load( $this->get_description() );

            foreach( $html_dom->find( 'img' ) as $image ) {
                $image->outertext = '';
            }

            $html_dom->save();
            return $html_dom;

        }

        public function get_content_without_image() {
            $html_dom = new \simple_html_dom();

            $content = str_limit( strip_tags( $this->get_content() ), 350, '...' );

            $html_dom->load( $content );

            foreach( $html_dom->find( 'img' ) as $image ) {
                $image->outertext = '';
            }

            $html_dom->save();
            return $html_dom;
        }

    }