<?php

/* @Twig/Exception/error.css.twig */
class __TwigTemplate_2253d13ae19ce54dbcd178606b0319139f28d37b8c556e2a1761db5e3151bc32 extends Twig_Template
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
        $__internal_6c9a5935f2a691b29fec1f595091bad23b7b3d61d1f610032596749cd5e4625e = $this->env->getExtension("native_profiler");
        $__internal_6c9a5935f2a691b29fec1f595091bad23b7b3d61d1f610032596749cd5e4625e->enter($__internal_6c9a5935f2a691b29fec1f595091bad23b7b3d61d1f610032596749cd5e4625e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.css.twig"));

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
        
        $__internal_6c9a5935f2a691b29fec1f595091bad23b7b3d61d1f610032596749cd5e4625e->leave($__internal_6c9a5935f2a691b29fec1f595091bad23b7b3d61d1f610032596749cd5e4625e_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.css.twig";
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
