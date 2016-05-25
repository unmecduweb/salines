<?php

/* @LLCore/index.html.twig */
class __TwigTemplate_b0a5620b0a6eed1a3a40802caead2739c3d15e441a449cde0b7d1ed852df0935 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("LLCoreBundle::layout-admin.html.twig", "@LLCore/index.html.twig", 2);
        $this->blocks = array(
            'js' => array($this, 'block_js'),
            'pageH1' => array($this, 'block_pageH1'),
            'admin_container' => array($this, 'block_admin_container'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "LLCoreBundle::layout-admin.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f2895da3ed81f07f2e701cfa27530c6395ed99142b6d8d725005946b73825e84 = $this->env->getExtension("native_profiler");
        $__internal_f2895da3ed81f07f2e701cfa27530c6395ed99142b6d8d725005946b73825e84->enter($__internal_f2895da3ed81f07f2e701cfa27530c6395ed99142b6d8d725005946b73825e84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@LLCore/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f2895da3ed81f07f2e701cfa27530c6395ed99142b6d8d725005946b73825e84->leave($__internal_f2895da3ed81f07f2e701cfa27530c6395ed99142b6d8d725005946b73825e84_prof);

    }

    // line 4
    public function block_js($context, array $blocks = array())
    {
        $__internal_1b2863da238cec56ab710ac59503dc1ef1f229a2164947f1853866222ebcc69f = $this->env->getExtension("native_profiler");
        $__internal_1b2863da238cec56ab710ac59503dc1ef1f229a2164947f1853866222ebcc69f->enter($__internal_1b2863da238cec56ab710ac59503dc1ef1f229a2164947f1853866222ebcc69f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "js"));

        // line 5
        echo "    ";
        $this->displayParentBlock("js", $context, $blocks);
        echo "
    
";
        
        $__internal_1b2863da238cec56ab710ac59503dc1ef1f229a2164947f1853866222ebcc69f->leave($__internal_1b2863da238cec56ab710ac59503dc1ef1f229a2164947f1853866222ebcc69f_prof);

    }

    // line 9
    public function block_pageH1($context, array $blocks = array())
    {
        $__internal_bcd39e0f5ae70bd016741ce39e2f0af6ebff6bc347c85f0b3f31bdda8be610ba = $this->env->getExtension("native_profiler");
        $__internal_bcd39e0f5ae70bd016741ce39e2f0af6ebff6bc347c85f0b3f31bdda8be610ba->enter($__internal_bcd39e0f5ae70bd016741ce39e2f0af6ebff6bc347c85f0b3f31bdda8be610ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pageH1"));

        echo "Système gestion Salines Arc-et-Senans";
        
        $__internal_bcd39e0f5ae70bd016741ce39e2f0af6ebff6bc347c85f0b3f31bdda8be610ba->leave($__internal_bcd39e0f5ae70bd016741ce39e2f0af6ebff6bc347c85f0b3f31bdda8be610ba_prof);

    }

    // line 11
    public function block_admin_container($context, array $blocks = array())
    {
        $__internal_ea8ac5633f9d10f64a77e63397d740e4066ab6937aa087a46d2f291f878f21b7 = $this->env->getExtension("native_profiler");
        $__internal_ea8ac5633f9d10f64a77e63397d740e4066ab6937aa087a46d2f291f878f21b7->enter($__internal_ea8ac5633f9d10f64a77e63397d740e4066ab6937aa087a46d2f291f878f21b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "admin_container"));

        echo "    
    
    Quand j'aurai du temps, je te fais un dashboard magnifique ;)
    
";
        
        $__internal_ea8ac5633f9d10f64a77e63397d740e4066ab6937aa087a46d2f291f878f21b7->leave($__internal_ea8ac5633f9d10f64a77e63397d740e4066ab6937aa087a46d2f291f878f21b7_prof);

    }

    public function getTemplateName()
    {
        return "@LLCore/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 11,  53 => 9,  42 => 5,  36 => 4,  11 => 2,);
    }
}
/* */
/* {% extends "LLCoreBundle::layout-admin.html.twig" %}*/
/* */
/* {% block js %}*/
/*     {{ parent() }}*/
/*     */
/* {% endblock %}*/
/* */
/* {% block pageH1 %}Système gestion Salines Arc-et-Senans{% endblock %}*/
/* */
/* {% block admin_container %}    */
/*     */
/*     Quand j'aurai du temps, je te fais un dashboard magnifique ;)*/
/*     */
/* {% endblock %}*/
