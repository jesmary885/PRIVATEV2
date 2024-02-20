<?php

/*
 * This file is part of the yoeunes/toastr package.
 * (c) Younes KHOUBZA <younes.khoubza@gmail.com>
 */

return array(
    /*
    |--------------------------------------------------------------------------
    | Toastr options
    |--------------------------------------------------------------------------
    |
    | Here you can specify the options that will be passed to the toastr.js
    | library. For a full list of options, visit the documentation.
    |
    | Example:
    | 'options' => [
    |     'closeButton' => true,
    |     'debug' => false,
    |     'newestOnTop' => false,
    |     'progressBar' => true,
    | ],
    */

    'accessibility' => true,

    /**
     * The vertical alignment of the toast container.
     *
     * Supported: "bottom", "middle" or "top"
     */
    'alignment' => 'top',

    /**
     * Allow users to close toast messages prematurely.
     *
     * Supported: true | false
     */
    'closeable' => true,

    /**
     * The on-screen duration of each toast.
     *
     * Minimum: 3000 (in milliseconds)
     */
    'duration' => 8000,

    /**
     * The horizontal position of each toast.
     *
     * Supported: "center", "left" or "right"
     */
    'position' => 'right',

    /**
     * Whether messages passed as translation keys should be translated automatically.
     *
     * Supported: true | false
     */
    'translate' => true,

    'options' => array(),
);
