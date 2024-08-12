<?php

namespace Config;

use CodeIgniter\Config\BaseConfig;

/**
 * --------------------------------------------------------------------------
 * Honeypot Configuration
 * --------------------------------------------------------------------------
 * This class defines the configuration settings for the Honeypot feature,
 * which helps protect forms from automated spam bots. It sets the visibility
 * and appearance of the Honeypot field that is used to detect and block
 * spam submissions.
 */
class Honeypot extends BaseConfig
{
    /**
     * --------------------------------------------------------------------------
     * Honeypot Visibility
     * --------------------------------------------------------------------------
     * Determines whether the Honeypot field is visible to human users or not.
     * If set to `true`, the Honeypot field is hidden from human users to prevent
     * them from interacting with it. If set to `false`, it will be visible.
     *
     * @var bool
     */
    public bool $hidden = true;

    /**
     * --------------------------------------------------------------------------
     * Honeypot Label Content
     * --------------------------------------------------------------------------
     * The label text for the Honeypot field. This text will be used as a label
     * for the hidden field to trick bots into filling it out.
     *
     * @var string
     */
    public string $label = 'Fill This Field';

    /**
     * --------------------------------------------------------------------------
     * Honeypot Field Name
     * --------------------------------------------------------------------------
     * The name attribute for the Honeypot field. This is used to identify the
     * Honeypot field in form submissions.
     *
     * @var string
     */
    public string $name = 'honeypot';

    /**
     * --------------------------------------------------------------------------
     * Honeypot HTML Template
     * --------------------------------------------------------------------------
     * The HTML template used to generate the Honeypot field. This template
     * includes placeholders for the label and field name, which will be replaced
     * with actual values.
     *
     * @var string
     */
    public string $template = '<label>{label}</label><input type="text" name="{name}" value="">';

    /**
     * --------------------------------------------------------------------------
     * Honeypot Container
     * --------------------------------------------------------------------------
     * The HTML container that wraps the Honeypot field. It is hidden from human
     * users to avoid interaction. If Content Security Policy (CSP) is enabled,
     * you can remove the inline `style` attribute.
     *
     * @var string
     */
    public string $container = '<div style="display:none">{template}</div>';

    /**
     * --------------------------------------------------------------------------
     * Honeypot Container ID
     * --------------------------------------------------------------------------
     * The `id` attribute for the Honeypot container element. This is used when
     * Content Security Policy (CSP) is enabled to allow specific styling or
     * scripting for the container.
     *
     * @var string
     */
    public string $containerId = 'hpc';
}
