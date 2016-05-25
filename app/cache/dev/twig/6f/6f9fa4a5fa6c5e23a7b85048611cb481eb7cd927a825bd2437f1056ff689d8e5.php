<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_afac025cbf23153dedfb448a7e0127b36ed81847f5012ef7f75d45954f456191 extends Twig_Template
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
        $__internal_77631507c87a6acd4df87802e17d965d6f1c6af6aafa66e0b1a479f761214148 = $this->env->getExtension("native_profiler");
        $__internal_77631507c87a6acd4df87802e17d965d6f1c6af6aafa66e0b1a479f761214148->enter($__internal_77631507c87a6acd4df87802e17d965d6f1c6af6aafa66e0b1a479f761214148_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_77631507c87a6acd4df87802e17d965d6f1c6af6aafa66e0b1a479f761214148->leave($__internal_77631507c87a6acd4df87802e17d965d6f1c6af6aafa66e0b1a479f761214148_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
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
