<?php

/* LLCoreBundle::layout-admin.html.twig */
class __TwigTemplate_e110d463887399503552ec66091edaeb00f2390dbc48f1a82df13b23ff2b80c9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout.html.twig", "LLCoreBundle::layout-admin.html.twig", 1);
        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'container' => array($this, 'block_container'),
            'pageH1' => array($this, 'block_pageH1'),
            'admin_container' => array($this, 'block_admin_container'),
            'js' => array($this, 'block_js'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3eb7fec82664885d6eafb5ee900b43b2c33578c39cb7b182433bda4d92ffe29b = $this->env->getExtension("native_profiler");
        $__internal_3eb7fec82664885d6eafb5ee900b43b2c33578c39cb7b182433bda4d92ffe29b->enter($__internal_3eb7fec82664885d6eafb5ee900b43b2c33578c39cb7b182433bda4d92ffe29b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LLCoreBundle::layout-admin.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3eb7fec82664885d6eafb5ee900b43b2c33578c39cb7b182433bda4d92ffe29b->leave($__internal_3eb7fec82664885d6eafb5ee900b43b2c33578c39cb7b182433bda4d92ffe29b_prof);

    }

    // line 4
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_4dacb7fc922fb55b40534aa9e1d27550d79dda3ae9aa05c2d1c9683430b13209 = $this->env->getExtension("native_profiler");
        $__internal_4dacb7fc922fb55b40534aa9e1d27550d79dda3ae9aa05c2d1c9683430b13209->enter($__internal_4dacb7fc922fb55b40534aa9e1d27550d79dda3ae9aa05c2d1c9683430b13209_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        echo "    
    ";
        // line 5
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    ";
        // line 6
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "c86df20_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_c86df20_0") : $this->env->getExtension('asset')->getAssetUrl("_controller/css/c86df20_part_1_forms_1.css");
            // line 7
            echo "        <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" type=\"text/css\" />
    ";
            // asset "c86df20_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_c86df20_1") : $this->env->getExtension('asset')->getAssetUrl("_controller/css/c86df20_part_1_jquery.dataTables.min_2.css");
            echo "        <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" type=\"text/css\" />
    ";
            // asset "c86df20_2"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_c86df20_2") : $this->env->getExtension('asset')->getAssetUrl("_controller/css/c86df20_part_1_jquery.dataTables_themeroller_3.css");
            echo "        <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" type=\"text/css\" />
    ";
            // asset "c86df20_3"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_c86df20_3") : $this->env->getExtension('asset')->getAssetUrl("_controller/css/c86df20_part_1_main_4.css");
            echo "        <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" type=\"text/css\" />
    ";
            // asset "c86df20_4"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_c86df20_4") : $this->env->getExtension('asset')->getAssetUrl("_controller/css/c86df20_part_1_plugin-noty-animate_5.css");
            echo "        <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" type=\"text/css\" />
    ";
        } else {
            // asset "c86df20"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_c86df20") : $this->env->getExtension('asset')->getAssetUrl("_controller/css/c86df20.css");
            echo "        <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" type=\"text/css\" />
    ";
        }
        unset($context["asset_url"]);
        // line 9
        echo "
";
        
        $__internal_4dacb7fc922fb55b40534aa9e1d27550d79dda3ae9aa05c2d1c9683430b13209->leave($__internal_4dacb7fc922fb55b40534aa9e1d27550d79dda3ae9aa05c2d1c9683430b13209_prof);

    }

    // line 14
    public function block_container($context, array $blocks = array())
    {
        $__internal_58f2fec8e2ce045d277285ea9b3b26ee3276f36c03a8db9d0ad712594658085e = $this->env->getExtension("native_profiler");
        $__internal_58f2fec8e2ce045d277285ea9b3b26ee3276f36c03a8db9d0ad712594658085e->enter($__internal_58f2fec8e2ce045d277285ea9b3b26ee3276f36c03a8db9d0ad712594658085e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "container"));

        // line 15
        echo "
    <div class=\"container-fluid\">
        <h1>";
        // line 17
        $this->displayBlock('pageH1', $context, $blocks);
        echo "</h1>
        ";
        // line 18
        $this->displayBlock('admin_container', $context, $blocks);
        // line 21
        echo "    </div>
    

";
        
        $__internal_58f2fec8e2ce045d277285ea9b3b26ee3276f36c03a8db9d0ad712594658085e->leave($__internal_58f2fec8e2ce045d277285ea9b3b26ee3276f36c03a8db9d0ad712594658085e_prof);

    }

    // line 17
    public function block_pageH1($context, array $blocks = array())
    {
        $__internal_2639f9d1afd022a4cc68af29fa3af02ad47b7d9ac696095d3f9ef127ba9fd9de = $this->env->getExtension("native_profiler");
        $__internal_2639f9d1afd022a4cc68af29fa3af02ad47b7d9ac696095d3f9ef127ba9fd9de->enter($__internal_2639f9d1afd022a4cc68af29fa3af02ad47b7d9ac696095d3f9ef127ba9fd9de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pageH1"));

        
        $__internal_2639f9d1afd022a4cc68af29fa3af02ad47b7d9ac696095d3f9ef127ba9fd9de->leave($__internal_2639f9d1afd022a4cc68af29fa3af02ad47b7d9ac696095d3f9ef127ba9fd9de_prof);

    }

    // line 18
    public function block_admin_container($context, array $blocks = array())
    {
        $__internal_d2f3a42beefafcf8f06e0363dfc9d99e7f06bf8fc90f23bab7cf71cb77d357ee = $this->env->getExtension("native_profiler");
        $__internal_d2f3a42beefafcf8f06e0363dfc9d99e7f06bf8fc90f23bab7cf71cb77d357ee->enter($__internal_d2f3a42beefafcf8f06e0363dfc9d99e7f06bf8fc90f23bab7cf71cb77d357ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "admin_container"));

        echo "        

        ";
        
        $__internal_d2f3a42beefafcf8f06e0363dfc9d99e7f06bf8fc90f23bab7cf71cb77d357ee->leave($__internal_d2f3a42beefafcf8f06e0363dfc9d99e7f06bf8fc90f23bab7cf71cb77d357ee_prof);

    }

    // line 26
    public function block_js($context, array $blocks = array())
    {
        $__internal_8ecbdde22c04fedff387ce193fdb6999cbd986f8a31d30f04944b94ecf920e42 = $this->env->getExtension("native_profiler");
        $__internal_8ecbdde22c04fedff387ce193fdb6999cbd986f8a31d30f04944b94ecf920e42->enter($__internal_8ecbdde22c04fedff387ce193fdb6999cbd986f8a31d30f04944b94ecf920e42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "js"));

        // line 27
        echo "
    ";
        // line 28
        $this->displayParentBlock("js", $context, $blocks);
        echo "


    ";
        // line 31
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "7e01d33_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_7e01d33_0") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/7e01d33_part_1_jquery.dataTables.min_1.js");
            // line 32
            echo "        <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
            // asset "7e01d33_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_7e01d33_1") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/7e01d33_part_1_jquery.mjs.nestedSortable_2.js");
            echo "        <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
            // asset "7e01d33_2"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_7e01d33_2") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/7e01d33_part_1_plugin-noty.packaged.min_3.js");
            echo "        <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
        } else {
            // asset "7e01d33"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_7e01d33") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/7e01d33.js");
            echo "        <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
        }
        unset($context["asset_url"]);
        // line 34
        echo "    ";
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "45accbc_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_45accbc_0") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/45accbc_part_1_list_1.js");
            // line 35
            echo "        <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
            // asset "45accbc_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_45accbc_1") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/45accbc_part_1_script_2.js");
            echo "        <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
        } else {
            // asset "45accbc"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_45accbc") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/45accbc.js");
            echo "        <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
        }
        unset($context["asset_url"]);
        // line 37
        echo "


";
        
        $__internal_8ecbdde22c04fedff387ce193fdb6999cbd986f8a31d30f04944b94ecf920e42->leave($__internal_8ecbdde22c04fedff387ce193fdb6999cbd986f8a31d30f04944b94ecf920e42_prof);

    }

    public function getTemplateName()
    {
        return "LLCoreBundle::layout-admin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  221 => 37,  201 => 35,  196 => 34,  170 => 32,  166 => 31,  160 => 28,  157 => 27,  151 => 26,  137 => 18,  126 => 17,  116 => 21,  114 => 18,  110 => 17,  106 => 15,  100 => 14,  92 => 9,  54 => 7,  50 => 6,  46 => 5,  38 => 4,  11 => 1,);
    }
}
/* {% extends "::layout.html.twig" %}*/
/* */
/* */
/* {% block stylesheets %}    */
/*     {{ parent() }}*/
/*     {% stylesheets 'bundles/llcore/css/*' %}*/
/*         <link rel="stylesheet" href="{{ asset_url }}" type="text/css" />*/
/*     {% endstylesheets  %}*/
/* */
/* {% endblock %}   */
/* */
/* */
/* */
/* {% block container %}*/
/* */
/*     <div class="container-fluid">*/
/*         <h1>{%block pageH1 %}{%endblock%}</h1>*/
/*         {% block admin_container %}        */
/* */
/*         {% endblock %}*/
/*     </div>*/
/*     */
/* */
/* {% endblock %}*/
/* */
/* {% block js %}*/
/* */
/*     {{ parent() }}*/
/* */
/* */
/*     {% javascripts 'bundles/llcore/js/plugin/*' %}*/
/*         <script type="text/javascript" src="{{ asset_url }}"></script>*/
/*     {% endjavascripts %}*/
/*     {% javascripts 'bundles/llcore/js/script/*' %}*/
/*         <script type="text/javascript" src="{{ asset_url }}"></script>*/
/*     {% endjavascripts %}*/
/* */
/* */
/* */
/* {% endblock %}*/
/* */
/* */
