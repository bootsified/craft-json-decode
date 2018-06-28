<?php
/**
 * craft-json-decode plugin for Craft CMS 3.x
 *
 * A SUPER simple plugin that decodes JSON data for use in Craft CMS v3 templates.
 *
 * @link      http://boots.media
 * @copyright Copyright (c) 2018 Boots Highland
 */

namespace bootsified\craftjsondecode\twigextensions;

use bootsified\craftjsondecode\Craftjsondecode;

use Craft;

/**
 * Twig can be extended in many ways; you can add extra tags, filters, tests, operators,
 * global variables, and functions. You can even extend the parser itself with
 * node visitors.
 *
 * http://twig.sensiolabs.org/doc/advanced.html
 *
 * @author    Boots Highland
 * @package   Craftjsondecode
 * @since     1.0.0
 */
class CraftjsondecodeTwigExtension extends \Twig_Extension
{
    // Public Methods
    // =========================================================================

    /**
     * Returns the name of the extension.
     *
     * @return string The extension name
     */
    public function getName()
    {
        return 'Craftjsondecode';
	}

    public function getFilters()
    {
        return [
            new \Twig_SimpleFilter('json_decode', [$this, 'jsonDecode']),
        ];
	}

    public function getFunctions()
    {
        return [
            new \Twig_SimpleFunction('json_decode', [$this, 'jsonDecode']),
        ];
	}

	public function jsonDecode($json, $assoc = false)
	{
        return json_decode($json, $assoc);
    }
}
