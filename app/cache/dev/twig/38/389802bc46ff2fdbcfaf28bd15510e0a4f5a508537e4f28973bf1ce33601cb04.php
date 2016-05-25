<?php

/* @Twig/Exception/exception.atom.twig */
class __TwigTemplate_5163786ac278aa13e1274101a70a037f840bf142c4a293361c842c4d084388c7 extends Twig_Template
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
        $__internal_d4af532428f3ee174125c8c28a7421f622180009bb388707c1e7d3f8fe2149de = $this->env->getExtension("native_profiler");
        $__internal_d4af532428f3ee174125c8c28a7421f622180009bb388707c1e7d3f8fe2149de->enter($__internal_d4af532428f3ee174125c8c28a7421f622180009bb388707c1e7d3f8fe2149de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "@Twig/Exception/exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_d4af532428f3ee174125c8c28a7421f622180009bb388707c1e7d3f8fe2149de->leave($__internal_d4af532428f3ee174125c8c28a7421f622180009bb388707c1e7d3f8fe2149de_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.atom.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}*/
/* */
