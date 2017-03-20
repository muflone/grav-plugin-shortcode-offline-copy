<?php

namespace Grav\Plugin\Shortcodes;

use Grav\Common\Utils;
use Thunder\Shortcode\Shortcode\ShortcodeInterface;


class ShortcodeOfflineCopy extends Shortcode
{
    public function init()
    {
        $this->shortcode->getHandlers()->add('shortcode-offline-copy', function(ShortcodeInterface $sc) {
            $output = $this->twig->processTemplate('partials/shortcode-offline-copy.html.twig', [
                'content' => $sc->getContent(),
                'page' => $this->grav['page'],
             ]);
            return $output;
        });
    }
}
