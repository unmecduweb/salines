<?php

/* @LLCore/default/edit.html.twig */
class __TwigTemplate_a6990f495ac2ae437528dbd1bead5bc3a192c8ccb649efcf2b22e38d3b4d6efc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("LLCoreBundle::layout-admin.html.twig", "@LLCore/default/edit.html.twig", 1);
        $this->blocks = array(
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
        $__internal_1d59a88f9e5a376fe23fb5dc3edbba3b1b006beee6cae66095c9062ff51cff3c = $this->env->getExtension("native_profiler");
        $__internal_1d59a88f9e5a376fe23fb5dc3edbba3b1b006beee6cae66095c9062ff51cff3c->enter($__internal_1d59a88f9e5a376fe23fb5dc3edbba3b1b006beee6cae66095c9062ff51cff3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@LLCore/default/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1d59a88f9e5a376fe23fb5dc3edbba3b1b006beee6cae66095c9062ff51cff3c->leave($__internal_1d59a88f9e5a376fe23fb5dc3edbba3b1b006beee6cae66095c9062ff51cff3c_prof);

    }

    // line 3
    public function block_pageH1($context, array $blocks = array())
    {
        $__internal_649cede85cc324e58b6544aedab85c2b597fa3766888b2e5763ec00c761f6eaa = $this->env->getExtension("native_profiler");
        $__internal_649cede85cc324e58b6544aedab85c2b597fa3766888b2e5763ec00c761f6eaa->enter($__internal_649cede85cc324e58b6544aedab85c2b597fa3766888b2e5763ec00c761f6eaa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pageH1"));

        // line 4
        echo "    
";
        
        $__internal_649cede85cc324e58b6544aedab85c2b597fa3766888b2e5763ec00c761f6eaa->leave($__internal_649cede85cc324e58b6544aedab85c2b597fa3766888b2e5763ec00c761f6eaa_prof);

    }

    // line 6
    public function block_admin_container($context, array $blocks = array())
    {
        $__internal_647e62d7a90b43e227e30fd5ad089c43eb23c7884e77f8a46de463ce06100996 = $this->env->getExtension("native_profiler");
        $__internal_647e62d7a90b43e227e30fd5ad089c43eb23c7884e77f8a46de463ce06100996->enter($__internal_647e62d7a90b43e227e30fd5ad089c43eb23c7884e77f8a46de463ce06100996_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "admin_container"));

        // line 7
        echo "    <form action=\"\" method=\"post\">

    ";
        // line 9
        $this->env->getExtension('form')->renderer->setTheme((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), array(0 => "Form/main-form-layout.html.twig"));
        // line 10
        echo "
    

    ";
        // line 13
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "

    ";
        // line 15
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
    <input type=\"submit\" />
    </form>
";
        
        $__internal_647e62d7a90b43e227e30fd5ad089c43eb23c7884e77f8a46de463ce06100996->leave($__internal_647e62d7a90b43e227e30fd5ad089c43eb23c7884e77f8a46de463ce06100996_prof);

    }

    public function getTemplateName()
    {
        return "@LLCore/default/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 15,  66 => 13,  61 => 10,  59 => 9,  55 => 7,  49 => 6,  41 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends "LLCoreBundle::layout-admin.html.twig" %}*/
/* */
/* {%block pageH1 %}*/
/*     */
/* {%endblock%}*/
/* {% block admin_container %}*/
/*     <form action="" method="post">*/
/* */
/*     {% form_theme form 'Form/main-form-layout.html.twig' %}*/
/* */
/*     */
/* */
/*     {{ form_errors(form) }}*/
/* */
/*     {{ form_rest(form) }}*/
/*     <input type="submit" />*/
/*     </form>*/
/* {% endblock %}*/
