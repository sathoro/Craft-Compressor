<?php

/**
 *
 * @package     Compressor
 * @version     Version 1.0
 * @author      Connor Smith
 * @copyright   Copyright (c) 2013
 * @link        sphinx.io
 *
 */

namespace Craft;

class CompressorVariable
{
    public function css($files)
    {
        return call_user_func_array([craft()->compressor, "css"], func_get_args());
    }

    public function js($files)
    {
        return craft()->compressor->js($files);
    }
}