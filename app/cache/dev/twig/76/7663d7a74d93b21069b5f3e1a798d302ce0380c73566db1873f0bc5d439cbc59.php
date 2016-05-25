<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_3017d93a5730eab95d1263f67d2819f0da1d15057bf2527a6623a54cb580ce03 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9ff85576596df36fc0cef6eea2ec85c6ce0e9ca8b1388c0044e8eb9374806216 = $this->env->getExtension("native_profiler");
        $__internal_9ff85576596df36fc0cef6eea2ec85c6ce0e9ca8b1388c0044e8eb9374806216->enter($__internal_9ff85576596df36fc0cef6eea2ec85c6ce0e9ca8b1388c0044e8eb9374806216_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9ff85576596df36fc0cef6eea2ec85c6ce0e9ca8b1388c0044e8eb9374806216->leave($__internal_9ff85576596df36fc0cef6eea2ec85c6ce0e9ca8b1388c0044e8eb9374806216_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_30edc621fc62c1865d444336ff26b1ba9a8501251dd130b6ba9fd59a94e762b6 = $this->env->getExtension("native_profiler");
        $__internal_30edc621fc62c1865d444336ff26b1ba9a8501251dd130b6ba9fd59a94e762b6->enter($__internal_30edc621fc62c1865d444336ff26b1ba9a8501251dd130b6ba9fd59a94e762b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_30edc621fc62c1865d444336ff26b1ba9a8501251dd130b6ba9fd59a94e762b6->leave($__internal_30edc621fc62c1865d444336ff26b1ba9a8501251dd130b6ba9fd59a94e762b6_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_1900bce49233c052da2cd81e91f62b563a943a3690e3c6bd30d4c2be1985e6c8 = $this->env->getExtension("native_profiler");
        $__internal_1900bce49233c052da2cd81e91f62b563a943a3690e3c6bd30d4c2be1985e6c8->enter($__internal_1900bce49233c052da2cd81e91f62b563a943a3690e3c6bd30d4c2be1985e6c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_1900bce49233c052da2cd81e91f62b563a943a3690e3c6bd30d4c2be1985e6c8->leave($__internal_1900bce49233c052da2cd81e91f62b563a943a3690e3c6bd30d4c2be1985e6c8_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_86c9a829f9f87735c17f343cca2866ff1a23bb5ab2a2f245f36e1d1999d0a948 = $this->env->getExtension("native_profiler");
        $__internal_86c9a829f9f87735c17f343cca2866ff1a23bb5ab2a2f245f36e1d1999d0a948->enter($__internal_86c9a829f9f87735c17f343cca2866ff1a23bb5ab2a2f245f36e1d1999d0a948_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_86c9a829f9f87735c17f343cca2866ff1a23bb5ab2a2f245f36e1d1999d0a948->leave($__internal_86c9a829f9f87735c17f343cca2866ff1a23bb5ab2a2f245f36e1d1999d0a948_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
