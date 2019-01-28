<?php

if (!function_exists('broadcast')) {

    function broadcast()
    {
        return app(\PaulKatipunan\Broadcast\Broadcast::class);
    }

}