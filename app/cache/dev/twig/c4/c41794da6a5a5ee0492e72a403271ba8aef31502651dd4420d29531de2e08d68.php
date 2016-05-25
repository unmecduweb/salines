<?php

/* @Twig/Exception/exception.rdf.twig */
class __TwigTemplate_8a0e0031cddd3e6909b34cfbf40177a3acf55804aef2c844fcd3986f50233a5b extends Twig_Template
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
        $__internal_26e1af861e104d44674fcbbd6bd47b801eff89c64608c143f2939034fdb8fa56 = $this->env->getExtension("native_profiler");
        $__internal_26e1af861e104d44674fcbbd6bd47b801eff89c64608c143f2939034fdb8fa56->enter($__internal_26e1af861e104d44674fcbbd6bd47b801eff89c64608c143f2939034fdb8fa56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "@Twig/Exception/exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_26e1af861e104d44674fcbbd6bd47b801eff89c64608c143f2939034fdb8fa56->leave($__internal_26e1af861e104d44674fcbbd6bd47b801eff89c64608c143f2939034fdb8fa56_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.rdf.twig";
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
