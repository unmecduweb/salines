<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_f1b2c898a336b26628f735cb7e87f3f73be54d0e5b2eee5245d8f5161b5c4f15 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
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
        $__internal_ee5f582d4b9dea03e912b7a50618ada2d5fc30b418e12ccfa826eabb59601608 = $this->env->getExtension("native_profiler");
        $__internal_ee5f582d4b9dea03e912b7a50618ada2d5fc30b418e12ccfa826eabb59601608->enter($__internal_ee5f582d4b9dea03e912b7a50618ada2d5fc30b418e12ccfa826eabb59601608_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ee5f582d4b9dea03e912b7a50618ada2d5fc30b418e12ccfa826eabb59601608->leave($__internal_ee5f582d4b9dea03e912b7a50618ada2d5fc30b418e12ccfa826eabb59601608_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_1cf627d16938a14d06e1f70a48f4074d6746e4836c081a63fe54c615dbe6ce8e = $this->env->getExtension("native_profiler");
        $__internal_1cf627d16938a14d06e1f70a48f4074d6746e4836c081a63fe54c615dbe6ce8e->enter($__internal_1cf627d16938a14d06e1f70a48f4074d6746e4836c081a63fe54c615dbe6ce8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_1cf627d16938a14d06e1f70a48f4074d6746e4836c081a63fe54c615dbe6ce8e->leave($__internal_1cf627d16938a14d06e1f70a48f4074d6746e4836c081a63fe54c615dbe6ce8e_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_1fb654ac8d8119a0687eb1c66cad0198917fc5669ea0031f5efe0d16a54c6339 = $this->env->getExtension("native_profiler");
        $__internal_1fb654ac8d8119a0687eb1c66cad0198917fc5669ea0031f5efe0d16a54c6339->enter($__internal_1fb654ac8d8119a0687eb1c66cad0198917fc5669ea0031f5efe0d16a54c6339_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_1fb654ac8d8119a0687eb1c66cad0198917fc5669ea0031f5efe0d16a54c6339->leave($__internal_1fb654ac8d8119a0687eb1c66cad0198917fc5669ea0031f5efe0d16a54c6339_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_16ec8f71806170e43c1f0b25ae8cc01ac8701f655f4d64b0c49e6875376f39bd = $this->env->getExtension("native_profiler");
        $__internal_16ec8f71806170e43c1f0b25ae8cc01ac8701f655f4d64b0c49e6875376f39bd->enter($__internal_16ec8f71806170e43c1f0b25ae8cc01ac8701f655f4d64b0c49e6875376f39bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_16ec8f71806170e43c1f0b25ae8cc01ac8701f655f4d64b0c49e6875376f39bd->leave($__internal_16ec8f71806170e43c1f0b25ae8cc01ac8701f655f4d64b0c49e6875376f39bd_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
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
