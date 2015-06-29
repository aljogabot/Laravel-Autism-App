<?php

    namespace AutismSocial\Repositories;

    use AutismSocial\Modules\Feed;

    /*
     * @doc yeah
     */
    class AutismSpeaksFeed implements StoryFeedInterface {

        private $url = 'http://feeds.feedburner.com/autismspeaks/news-and-press-releases';

        public function fetch() {
            $feed = Feed::create( $this->url );
            $items = $feed->get_items();
            return $items;
        }



    }