<?php

namespace Config;

use CodeIgniter\Config\BaseConfig;
use CodeIgniter\Format\FormatterInterface;
use CodeIgniter\Format\JSONFormatter;
use CodeIgniter\Format\XMLFormatter;

/**
 * --------------------------------------------------------------------------
 * Format Configuration
 * --------------------------------------------------------------------------
 * This class manages the configuration for handling different response formats
 * in your application. It specifies the available formats, the formatters to
 * use for each format, and options for formatting behavior.
 */
class Format extends BaseConfig
{
    /**
     * --------------------------------------------------------------------------
     * Available Response Formats
     * --------------------------------------------------------------------------
     * 
     * Defines the response formats supported by the application. This is
     * used for content negotiation and should correspond to a valid formatter.
     * 
     * @var list<string>
     */
    public array $supportedResponseFormats = [
        'application/json', // JSON format
        'application/xml',  // Machine-readable XML format
        'text/xml',         // Human-readable XML format
    ];

    /**
     * --------------------------------------------------------------------------
     * Formatters
     * --------------------------------------------------------------------------
     * 
     * Maps MIME types to the classes used for formatting responses. The
     * appropriate formatter class is used based on the MIME type of the
     * response.
     * 
     * @var array<string, string>
     */
    public array $formatters = [
        'application/json' => JSONFormatter::class, // Formatter for JSON
        'application/xml'  => XMLFormatter::class,  // Formatter for XML
        'text/xml'         => XMLFormatter::class,  // Formatter for text-based XML
    ];

    /**
     * --------------------------------------------------------------------------
     * Formatters Options
     * --------------------------------------------------------------------------
     * 
     * Specifies additional options for the formatters to adjust their behavior.
     * Options vary depending on the MIME type and are passed to the formatter
     * instance.
     * 
     * @var array<string, int>
     */
    public array $formatterOptions = [
        'application/json' => JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES, // JSON formatting options
        'application/xml'  => 0,  // Default options for XML
        'text/xml'         => 0,  // Default options for text-based XML
    ];

    /**
     * --------------------------------------------------------------------------
     * Get Formatter
     * --------------------------------------------------------------------------
     * 
     * Factory method to return the appropriate formatter based on the MIME type.
     * 
     * @param string $mime The MIME type for which to get the formatter.
     * 
     * @return FormatterInterface The formatter instance for the specified MIME type.
     * 
     * @deprecated This is an alias of `\CodeIgniter\Format\Format::getFormatter`. 
     * Use that method instead.
     */
    public function getFormatter(string $mime): FormatterInterface
    {
        return Services::format()->getFormatter($mime);
    }
}
