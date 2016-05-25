<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_f1482eb4a5695aebb058dd650dddb7f44504177ca0d58df1973760f4969b67a4 extends Twig_Template
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
        $__internal_e2922a6b5c39cfd290c3ed19838f40b63d72d6c64d74f77a9391e541773da656 = $this->env->getExtension("native_profiler");
        $__internal_e2922a6b5c39cfd290c3ed19838f40b63d72d6c64d74f77a9391e541773da656->enter($__internal_e2922a6b5c39cfd290c3ed19838f40b63d72d6c64d74f77a9391e541773da656_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_e2922a6b5c39cfd290c3ed19838f40b63d72d6c64d74f77a9391e541773da656->leave($__internal_e2922a6b5c39cfd290c3ed19838f40b63d72d6c64d74f77a9391e541773da656_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {{ status_code }} {{ status_text }}*/
/* */
/* *//* */
/* */
