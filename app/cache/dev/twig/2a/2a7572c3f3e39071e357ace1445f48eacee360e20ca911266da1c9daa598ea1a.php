<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_56846e2a286faa15ba90cbae8bef296046cca10e3e0a3201165a5de703445dcb extends Twig_Template
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
        $__internal_fb8b2b0e5099524550e076a54a60e826733ab371b93b37855969afab30810d50 = $this->env->getExtension("native_profiler");
        $__internal_fb8b2b0e5099524550e076a54a60e826733ab371b93b37855969afab30810d50->enter($__internal_fb8b2b0e5099524550e076a54a60e826733ab371b93b37855969afab30810d50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_fb8b2b0e5099524550e076a54a60e826733ab371b93b37855969afab30810d50->leave($__internal_fb8b2b0e5099524550e076a54a60e826733ab371b93b37855969afab30810d50_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
