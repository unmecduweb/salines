<?php

/* @Twig/Exception/error.atom.twig */
class __TwigTemplate_00f6ba68ce79fbd450bdbe69cb5a2ec7b6dc6e3153ddc5c96f67d4ceb4bb32bb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_33fd27388b479b534a058dd19c7957b27f50000ad8580cdb5620f9a714964659 = $this->env->getExtension("native_profiler");
        $__internal_33fd27388b479b534a058dd19c7957b27f50000ad8580cdb5620f9a714964659->enter($__internal_33fd27388b479b534a058dd19c7957b27f50000ad8580cdb5620f9a714964659_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.atom.twig", 1)->display($context);
        
        $__internal_33fd27388b479b534a058dd19c7957b27f50000ad8580cdb5620f9a714964659->leave($__internal_33fd27388b479b534a058dd19c7957b27f50000ad8580cdb5620f9a714964659_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.atom.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
