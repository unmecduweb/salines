<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_05ad82e600093be303648384d3c7db80fb5ca426520b9f18aab35354164d9da1 extends Twig_Template
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
        $__internal_96b3d4cfb4540d35fc60501a32967d72ab2d246dfc6dfe6a486df6158109c204 = $this->env->getExtension("native_profiler");
        $__internal_96b3d4cfb4540d35fc60501a32967d72ab2d246dfc6dfe6a486df6158109c204->enter($__internal_96b3d4cfb4540d35fc60501a32967d72ab2d246dfc6dfe6a486df6158109c204_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_96b3d4cfb4540d35fc60501a32967d72ab2d246dfc6dfe6a486df6158109c204->leave($__internal_96b3d4cfb4540d35fc60501a32967d72ab2d246dfc6dfe6a486df6158109c204_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
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
