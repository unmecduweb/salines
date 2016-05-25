<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_768976dfc699cb19438ddac74f213d5f4431622efc24a878ba93a890fe966f91 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_fb83c0e03c54935ed962349dac91a6f2c0d3ee7011895162c85dfe434cf99dbe = $this->env->getExtension("native_profiler");
        $__internal_fb83c0e03c54935ed962349dac91a6f2c0d3ee7011895162c85dfe434cf99dbe->enter($__internal_fb83c0e03c54935ed962349dac91a6f2c0d3ee7011895162c85dfe434cf99dbe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fb83c0e03c54935ed962349dac91a6f2c0d3ee7011895162c85dfe434cf99dbe->leave($__internal_fb83c0e03c54935ed962349dac91a6f2c0d3ee7011895162c85dfe434cf99dbe_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_9aeec02d8e9b0709fca91ef7ca57af3cfef9c9869cf117f819ff39caa7307717 = $this->env->getExtension("native_profiler");
        $__internal_9aeec02d8e9b0709fca91ef7ca57af3cfef9c9869cf117f819ff39caa7307717->enter($__internal_9aeec02d8e9b0709fca91ef7ca57af3cfef9c9869cf117f819ff39caa7307717_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_9aeec02d8e9b0709fca91ef7ca57af3cfef9c9869cf117f819ff39caa7307717->leave($__internal_9aeec02d8e9b0709fca91ef7ca57af3cfef9c9869cf117f819ff39caa7307717_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_8b6215212c6abe9f966fa58bf3619b544ecffbd736243c61ef01e8cdf2910509 = $this->env->getExtension("native_profiler");
        $__internal_8b6215212c6abe9f966fa58bf3619b544ecffbd736243c61ef01e8cdf2910509->enter($__internal_8b6215212c6abe9f966fa58bf3619b544ecffbd736243c61ef01e8cdf2910509_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_8b6215212c6abe9f966fa58bf3619b544ecffbd736243c61ef01e8cdf2910509->leave($__internal_8b6215212c6abe9f966fa58bf3619b544ecffbd736243c61ef01e8cdf2910509_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_ee7c1219132e02205e610d2e15f811c6bab1704c7b5ee8394e2200eb6ec41721 = $this->env->getExtension("native_profiler");
        $__internal_ee7c1219132e02205e610d2e15f811c6bab1704c7b5ee8394e2200eb6ec41721->enter($__internal_ee7c1219132e02205e610d2e15f811c6bab1704c7b5ee8394e2200eb6ec41721_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_ee7c1219132e02205e610d2e15f811c6bab1704c7b5ee8394e2200eb6ec41721->leave($__internal_ee7c1219132e02205e610d2e15f811c6bab1704c7b5ee8394e2200eb6ec41721_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
