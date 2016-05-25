<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_1c3f76e0dfb77bf5a4f6f6dedf6d164c7649a7df97d4a34d202a398620673d49 extends Twig_Template
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
        $__internal_237cbebd1beeabebfd49ad13461ba01bfdc0aa15db23e524b5b1aa056ec64af0 = $this->env->getExtension("native_profiler");
        $__internal_237cbebd1beeabebfd49ad13461ba01bfdc0aa15db23e524b5b1aa056ec64af0->enter($__internal_237cbebd1beeabebfd49ad13461ba01bfdc0aa15db23e524b5b1aa056ec64af0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_237cbebd1beeabebfd49ad13461ba01bfdc0aa15db23e524b5b1aa056ec64af0->leave($__internal_237cbebd1beeabebfd49ad13461ba01bfdc0aa15db23e524b5b1aa056ec64af0_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
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
