<?php

namespace Teo\BoilerplateBundle\Provider;

class Language
{
    public function provide($container)
    {
        $locale = $container->get('request')->get('_locale');

        if ($locale) {
            return $locale;
        }

        return $container->getParameter('locale');
    }
}