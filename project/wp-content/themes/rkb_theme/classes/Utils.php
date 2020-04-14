<?php

class Utils
{
    public static function getLastPosts()
    {
        $args = [
            'numberposts'      => 3,
            'offset'           => 0,
            'category'         => 0,
            'orderby'          => 'post_date',
            'order'            => 'DESC',
            'include'          => '',
            'exclude'          => '',
            'meta_key'         => '',
            'meta_value'       => '',
            'post_type'        => 'post',
            'post_status'      => 'publish',
            'suppress_filters' => true,
        ];
        $result = wp_get_recent_posts($args);

        return $result;
    }
}