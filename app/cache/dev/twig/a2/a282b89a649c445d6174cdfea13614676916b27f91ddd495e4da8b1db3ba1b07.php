<?php

/* @LLCore/product/edit.html.twig */
class __TwigTemplate_b350611a69a1596a12ba714128c5dfde0cce2491815c8f3c9488837f2136cc1c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("LLCoreBundle:default:edit.html.twig", "@LLCore/product/edit.html.twig", 1);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "LLCoreBundle:default:edit.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d78fc48039dc93987bd259b5030b4936f0c07b76e25aa2930d4dd1fedb73b010 = $this->env->getExtension("native_profiler");
        $__internal_d78fc48039dc93987bd259b5030b4936f0c07b76e25aa2930d4dd1fedb73b010->enter($__internal_d78fc48039dc93987bd259b5030b4936f0c07b76e25aa2930d4dd1fedb73b010_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@LLCore/product/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d78fc48039dc93987bd259b5030b4936f0c07b76e25aa2930d4dd1fedb73b010->leave($__internal_d78fc48039dc93987bd259b5030b4936f0c07b76e25aa2930d4dd1fedb73b010_prof);

    }

    public function getTemplateName()
    {
        return "@LLCore/product/edit.html.twig";
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
