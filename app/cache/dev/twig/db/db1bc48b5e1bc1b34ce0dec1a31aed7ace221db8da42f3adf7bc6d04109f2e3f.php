<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_379e81338c8c9634c63bb817a0207f101173e7922cc4282d9902c12cc55ba76f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9fd11fa810c248ca3bfd6e8c8c8421a574597fd957c113707a78a50d1d46125f = $this->env->getExtension("native_profiler");
        $__internal_9fd11fa810c248ca3bfd6e8c8c8421a574597fd957c113707a78a50d1d46125f->enter($__internal_9fd11fa810c248ca3bfd6e8c8c8421a574597fd957c113707a78a50d1d46125f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_9fd11fa810c248ca3bfd6e8c8c8421a574597fd957c113707a78a50d1d46125f->leave($__internal_9fd11fa810c248ca3bfd6e8c8c8421a574597fd957c113707a78a50d1d46125f_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_000683e6ae597bcacd73763bd066a25f00cb86c912c523942f689879d2a5e470 = $this->env->getExtension("native_profiler");
        $__internal_000683e6ae597bcacd73763bd066a25f00cb86c912c523942f689879d2a5e470->enter($__internal_000683e6ae597bcacd73763bd066a25f00cb86c912c523942f689879d2a5e470_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_000683e6ae597bcacd73763bd066a25f00cb86c912c523942f689879d2a5e470->leave($__internal_000683e6ae597bcacd73763bd066a25f00cb86c912c523942f689879d2a5e470_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }
}
/* {% block panel '' %}*/
/* */
