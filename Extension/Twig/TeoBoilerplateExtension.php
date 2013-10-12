<?php

namespace Teo\BoilerplateBundle\Extension\Twig;

class TeoBoilerplateExtension extends \Twig_Extension
{
    protected $container;

    public function __construct($container)
    {
        $this->container = $container;
    }

    public function getGlobals()
    {
        return array(
            'html_language' => $this->container->get('teo_boilerplate.language_provider')->provide($this->container)
        );
    }

    public function getName()
    {
        return 'teoboilerplate_extension';
    }
}