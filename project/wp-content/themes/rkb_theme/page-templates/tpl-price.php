<?php
    /**
     * Template Name: Price
     */

    the_post();
    header('Location: ' . the_field('price'));