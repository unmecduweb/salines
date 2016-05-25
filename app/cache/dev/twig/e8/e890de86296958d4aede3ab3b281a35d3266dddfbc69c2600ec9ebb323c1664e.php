<?php

/* LLCoreBundle:product:list.html.twig */
class __TwigTemplate_e481fa9f7c2dbb49015dfff5121c66de55d0eac3ec04174df6751bb291079c3f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("LLCoreBundle:default:list.html.twig", "LLCoreBundle:product:list.html.twig", 2);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "LLCoreBundle:default:list.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6622329ca251ff7ddeec91533bc42de83be62effea318cf065d6a48b5f4e4caf = $this->env->getExtension("native_profiler");
        $__internal_6622329ca251ff7ddeec91533bc42de83be62effea318cf065d6a48b5f4e4caf->enter($__internal_6622329ca251ff7ddeec91533bc42de83be62effea318cf065d6a48b5f4e4caf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LLCoreBundle:product:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6622329ca251ff7ddeec91533bc42de83be62effea318cf065d6a48b5f4e4caf->leave($__internal_6622329ca251ff7ddeec91533bc42de83be62effea318cf065d6a48b5f4e4caf_prof);

    }

    public function getTemplateName()
    {
        return "LLCoreBundle:product:list.html.twig";
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
