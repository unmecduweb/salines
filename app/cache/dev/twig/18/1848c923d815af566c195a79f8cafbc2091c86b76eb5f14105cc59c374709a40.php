<?php

/* @LLCore/product/list.html.twig */
class __TwigTemplate_cba0a75527ae8a2d22b9a1e8b3d4ba7f135d2577c4f1b02d4f2630f78c7e8c5b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("LLCoreBundle:default:list.html.twig", "@LLCore/product/list.html.twig", 2);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "LLCoreBundle:default:list.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5f63c067c5a143881ee7bfdb7cbbb1bac03f21f87c90a75e1f6d1ab3f792bdac = $this->env->getExtension("native_profiler");
        $__internal_5f63c067c5a143881ee7bfdb7cbbb1bac03f21f87c90a75e1f6d1ab3f792bdac->enter($__internal_5f63c067c5a143881ee7bfdb7cbbb1bac03f21f87c90a75e1f6d1ab3f792bdac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@LLCore/product/list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5f63c067c5a143881ee7bfdb7cbbb1bac03f21f87c90a75e1f6d1ab3f792bdac->leave($__internal_5f63c067c5a143881ee7bfdb7cbbb1bac03f21f87c90a75e1f6d1ab3f792bdac_prof);

    }

    public function getTemplateName()
    {
        return "@LLCore/product/list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  11 => 2,);
    }
}
/* */
/* {% extends "LLCoreBundle:default:list.html.twig" %}*/
/* */
