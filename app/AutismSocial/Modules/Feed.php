<?php

    namespace AutismSocial\Modules;

    use \SimplePie;
    use \SimplePie_Sanitize;
    use \SimplePie_Registry;

    class Feed extends \SimplePie {

        public static function create( $feed_url ) {

            $object = new self();
            $object->set_cache_location( storage_path() . '/framework/cache' );
            $object->set_cache_duration( 3600 );
            $object->set_feed_url( $feed_url );
            $object->init();
            $object->handle_content_type();

            return $object;

        }

        public function __construct() {
            if (version_compare(PHP_VERSION, '5.2', '<'))
            {
                trigger_error('PHP 4.x, 5.0 and 5.1 are no longer supported. Please upgrade to PHP 5.2 or newer.');
                die();
            }

            // Other objects, instances created here so we can set options on them
            $this->sanitize = new SimplePie_Sanitize();
            $this->registry = new SimplePie_Registry();

            $this->registry->register( 'Item', '\AutismSocial\Modules\FeedItem' );

            if (func_num_args() > 0)
            {
                $level = defined('E_USER_DEPRECATED') ? E_USER_DEPRECATED : E_USER_WARNING;
                trigger_error('Passing parameters to the constructor is no longer supported. Please use set_feed_url(), set_cache_location(), and set_cache_location() directly.', $level);

                $args = func_get_args();
                switch (count($args)) {
                    case 3:
                        $this->set_cache_duration($args[2]);
                    case 2:
                        $this->set_cache_location($args[1]);
                    case 1:
                        $this->set_feed_url($args[0]);
                        $this->init();
                }
            }
        }

        public function get_items( $start = 0, $end = 0 ) {
            if (!isset($this->data['items']))
            {
                if (!empty($this->multifeed_objects))
                {
                    $this->data['items'] = SimplePie::merge_items($this->multifeed_objects, $start, $end, $this->item_limit);
                }
                else
                {
                    $this->data['items'] = array();
                    if ($items = $this->get_feed_tags(SIMPLEPIE_NAMESPACE_ATOM_10, 'entry'))
                    {
                        $keys = array_keys($items);
                        foreach ($keys as $key)
                        {
                            $this->data['items'][] = $this->registry->create('Item', array($this, $items[$key]));
                        }
                    }
                    if ($items = $this->get_feed_tags(SIMPLEPIE_NAMESPACE_ATOM_03, 'entry'))
                    {
                        $keys = array_keys($items);
                        foreach ($keys as $key)
                        {
                            $this->data['items'][] = $this->registry->create('Item', array($this, $items[$key]));
                        }
                    }
                    if ($items = $this->get_feed_tags(SIMPLEPIE_NAMESPACE_RSS_10, 'item'))
                    {
                        $keys = array_keys($items);
                        foreach ($keys as $key)
                        {
                            $this->data['items'][] = $this->registry->create('Item', array($this, $items[$key]));
                        }
                    }
                    if ($items = $this->get_feed_tags(SIMPLEPIE_NAMESPACE_RSS_090, 'item'))
                    {
                        $keys = array_keys($items);
                        foreach ($keys as $key)
                        {
                            $this->data['items'][] = $this->registry->create('Item', array($this, $items[$key]));
                        }
                    }
                    if ($items = $this->get_channel_tags(SIMPLEPIE_NAMESPACE_RSS_20, 'item'))
                    {
                        $keys = array_keys($items);
                        foreach ($keys as $key)
                        {
                            $this->data['items'][] = $this->registry->create('Item', array($this, $items[$key]));
                        }
                    }
                }
            }

            if (!empty($this->data['items']))
            {
                // If we want to order it by date, check if all items have a date, and then sort it
                if ($this->order_by_date && empty($this->multifeed_objects))
                {
                    if (!isset($this->data['ordered_items']))
                    {
                        $do_sort = true;
                        foreach ($this->data['items'] as $item)
                        {
                            if (!$item->get_date('U'))
                            {
                                $do_sort = false;
                                break;
                            }
                        }
                        $item = null;
                        $this->data['ordered_items'] = $this->data['items'];
                        if ($do_sort)
                        {
                            usort($this->data['ordered_items'], array(get_class($this), 'sort_items'));
                        }
                    }
                    $items = $this->data['ordered_items'];
                }
                else
                {
                    $items = $this->data['items'];
                }

                // Slice the data as desired
                if ($end === 0)
                {
                    return array_slice($items, $start);
                }
                else
                {
                    return array_slice($items, $start, $end);
                }
            }
            else
            {
                return array();
            }
        }

    }