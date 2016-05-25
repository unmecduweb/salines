<?php

/* LLCoreBundle:product:edit.html.twig */
class __TwigTemplate_ef81bc03d70604442b7912da3c5aeaedfc359f90979c2d3a912d458bebf4cbfc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("LLCoreBundle:default:edit.html.twig", "LLCoreBundle:product:edit.html.twig", 1);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "LLCoreBundle:default:edit.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5f8d4d31330b2c95184b1e1f83482ac6c0ae81e496f5cb1845fc722e66233c96 = $this->env->getExtension("native_profiler");
        $__internal_5f8d4d31330b2c95184b1e1f83482ac6c0ae81e496f5cb1845fc722e66233c96->enter($__internal_5f8d4d31330b2c95184b1e1f83482ac6c0ae81e496f5cb1845fc722e66233c96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LLCoreBundle:product:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5f8d4d31330b2c95184b1e1f83482ac6c0ae81e496f5cb1845fc722e66233c96->leave($__internal_5f8d4d31330b2c95184b1e1f83482ac6c0ae81e496f5cb1845fc722e66233c96_prof);

    }

    public function getTemplateName()
    {
        return "LLCoreBundle:product:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  11 => 1,);
    }
}
/* {% extends "LLCoreBundle:default:edit.html.twig" %}*/
