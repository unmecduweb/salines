<?php

/* @Twig/Exception/error.js.twig */
class __TwigTemplate_e555c1642e127e1f1dfccd7714d8f87834945c99733ba79b0e76886fa4f1e5ed extends Twig_Template
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
        $__internal_33fcdf9d20e0a28fd728c8fb0209b2c8f42dc716f729bb669b6d7e8bd1b468f2 = $this->env->getExtension("native_profiler");
        $__internal_33fcdf9d20e0a28fd728c8fb0209b2c8f42dc716f729bb669b6d7e8bd1b468f2->enter($__internal_33fcdf9d20e0a28fd728c8fb0209b2c8f42dc716f729bb669b6d7e8bd1b468f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.js.twig"));

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
        
        $__internal_33fcdf9d20e0a28fd728c8fb0209b2c8f42dc716f729bb669b6d7e8bd1b468f2->leave($__internal_33fcdf9d20e0a28fd728c8fb0209b2c8f42dc716f729bb669b6d7e8bd1b468f2_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.js.twig";
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
