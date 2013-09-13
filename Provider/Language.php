<?php

namespace Teo\BoilerplateBundle\Provider;

class Language
{
    public function provide($container)
    {
        return $container->getParameter('teo_boilerplate.html_language');
    }
}