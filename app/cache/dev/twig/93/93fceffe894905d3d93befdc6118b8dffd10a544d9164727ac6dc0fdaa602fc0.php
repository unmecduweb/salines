<?php

/* LLCoreBundle::index.html.twig */
class __TwigTemplate_b82e0905ffc37b6ba4e843fe9477b99c381588691ee40501fa2b149c485e9f89 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("LLCoreBundle::layout-admin.html.twig", "LLCoreBundle::index.html.twig", 2);
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
        $__internal_bd10f3c00769ae3754f7ff77b9dd80e90da30cf026328d7b55c28d9fc6a050e9 = $this->env->getExtension("native_profiler");
        $__internal_bd10f3c00769ae3754f7ff77b9dd80e90da30cf026328d7b55c28d9fc6a050e9->enter($__internal_bd10f3c00769ae3754f7ff77b9dd80e90da30cf026328d7b55c28d9fc6a050e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LLCoreBundle::index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bd10f3c00769ae3754f7ff77b9dd80e90da30cf026328d7b55c28d9fc6a050e9->leave($__internal_bd10f3c00769ae3754f7ff77b9dd80e90da30cf026328d7b55c28d9fc6a050e9_prof);

    }

    // line 4
    public function block_js($context, array $blocks = array())
    {
        $__internal_650eebb40bc37554b75794e43081dfdae247ba67d5dd8ce2fe3b7a8095f7e51e = $this->env->getExtension("native_profiler");
        $__internal_650eebb40bc37554b75794e43081dfdae247ba67d5dd8ce2fe3b7a8095f7e51e->enter($__internal_650eebb40bc37554b75794e43081dfdae247ba67d5dd8ce2fe3b7a8095f7e51e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "js"));

        // line 5
        echo "    ";
        $this->displayParentBlock("js", $context, $blocks);
        echo "
    
";
        
        $__internal_650eebb40bc37554b75794e43081dfdae247ba67d5dd8ce2fe3b7a8095f7e51e->leave($__internal_650eebb40bc37554b75794e43081dfdae247ba67d5dd8ce2fe3b7a8095f7e51e_prof);

    }

    // line 9
    public function block_pageH1($context, array $blocks = array())
    {
        $__internal_40d3d6830e030f05d41f1e014346603051ea73224f18d844d72c7ab7db5f5769 = $this->env->getExtension("native_profiler");
        $__internal_40d3d6830e030f05d41f1e014346603051ea73224f18d844d72c7ab7db5f5769->enter($__internal_40d3d6830e030f05d41f1e014346603051ea73224f18d844d72c7ab7db5f5769_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pageH1"));

        echo "Système gestion Salines Arc-et-Senans";
        
        $__internal_40d3d6830e030f05d41f1e014346603051ea73224f18d844d72c7ab7db5f5769->leave($__internal_40d3d6830e030f05d41f1e014346603051ea73224f18d844d72c7ab7db5f5769_prof);

    }

    // line 11
    public function block_admin_container($context, array $blocks = array())
    {
        $__internal_db3ec75f1d5646e4239ba25d119d134ddd73a59f38d237a1d0c29443ca62a8b1 = $this->env->getExtension("native_profiler");
        $__internal_db3ec75f1d5646e4239ba25d119d134ddd73a59f38d237a1d0c29443ca62a8b1->enter($__internal_db3ec75f1d5646e4239ba25d119d134ddd73a59f38d237a1d0c29443ca62a8b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "admin_container"));

        echo "    
    
    Quand j'aurai du temps, je te fais un dashboard magnifique ;)
    
";
        
        $__internal_db3ec75f1d5646e4239ba25d119d134ddd73a59f38d237a1d0c29443ca62a8b1->leave($__internal_db3ec75f1d5646e4239ba25d119d134ddd73a59f38d237a1d0c29443ca62a8b1_prof);

    }

    public function getTemplateName()
    {
        return "LLCoreBundle::index.html.twig";
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
