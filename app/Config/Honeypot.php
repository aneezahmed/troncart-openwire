<?php

namespace Config;

use CodeIgniter\Config\BaseConfig;

class Honeypot extends BaseConfig
{
    /**
     * Makes Honeypot visible or not to human
     */
    public $hidden = true;

    /**
     * Honeypot Label Content
     */
    public $label = 'Fill This Field';

    /**
     * Honeypot Field Name
     */
    public $name = 'honeypot';

    /**
     * Honeypot HTML Template
     */
    public $template = '<label>{label}</label><input type="text" name="{name}" value="">';

    /**
     * Honeypot container
     *
     * If you enabled CSP, you can remove `style="display:none"`.
     */
    public $container = '<div style="display:none">{template}</div>';

    /**
     * The id attribute for Honeypot container tag
     *
     * Used when CSP is enabled.
     */
    public $containerId = 'hpc';
}

