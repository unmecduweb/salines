<?php

/* @LLCore/layout-admin.html.twig */
class __TwigTemplate_4a135373a26eafa089a08c350a76e06a8787d1f9efbff8c5fddca3e295060710 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout.html.twig", "@LLCore/layout-admin.html.twig", 1);
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
        $__internal_3b3e6bbd8cd9309d0cdd338f0b2fe68d5e1e2c3ed81c39a2b6bd1ebed1cc4437 = $this->env->getExtension("native_profiler");
        $__internal_3b3e6bbd8cd9309d0cdd338f0b2fe68d5e1e2c3ed81c39a2b6bd1ebed1cc4437->enter($__internal_3b3e6bbd8cd9309d0cdd338f0b2fe68d5e1e2c3ed81c39a2b6bd1ebed1cc4437_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@LLCore/layout-admin.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3b3e6bbd8cd9309d0cdd338f0b2fe68d5e1e2c3ed81c39a2b6bd1ebed1cc4437->leave($__internal_3b3e6bbd8cd9309d0cdd338f0b2fe68d5e1e2c3ed81c39a2b6bd1ebed1cc4437_prof);

    }

    // line 4
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_6f4de58d0336d73532438b9b9cbe0584a0a9754b01cc66b3cf326c7982f0667e = $this->env->getExtension("native_profiler");
        $__internal_6f4de58d0336d73532438b9b9cbe0584a0a9754b01cc66b3cf326c7982f0667e->enter($__internal_6f4de58d0336d73532438b9b9cbe0584a0a9754b01cc66b3cf326c7982f0667e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_6f4de58d0336d73532438b9b9cbe0584a0a9754b01cc66b3cf326c7982f0667e->leave($__internal_6f4de58d0336d73532438b9b9cbe0584a0a9754b01cc66b3cf326c7982f0667e_prof);

    }

    // line 14
    public function block_container($context, array $blocks = array())
    {
        $__internal_08444ce017480109ded04b255951b88d9931435582984bc5f071d70cfb6de2c3 = $this->env->getExtension("native_profiler");
        $__internal_08444ce017480109ded04b255951b88d9931435582984bc5f071d70cfb6de2c3->enter($__internal_08444ce017480109ded04b255951b88d9931435582984bc5f071d70cfb6de2c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "container"));

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
        
        $__internal_08444ce017480109ded04b255951b88d9931435582984bc5f071d70cfb6de2c3->leave($__internal_08444ce017480109ded04b255951b88d9931435582984bc5f071d70cfb6de2c3_prof);

    }

    // line 17
    public function block_pageH1($context, array $blocks = array())
    {
        $__internal_1341710694de1552536bb780a3765ba8d60fcefc6eca86ee0dd61547e4d4ba70 = $this->env->getExtension("native_profiler");
        $__internal_1341710694de1552536bb780a3765ba8d60fcefc6eca86ee0dd61547e4d4ba70->enter($__internal_1341710694de1552536bb780a3765ba8d60fcefc6eca86ee0dd61547e4d4ba70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pageH1"));

        
        $__internal_1341710694de1552536bb780a3765ba8d60fcefc6eca86ee0dd61547e4d4ba70->leave($__internal_1341710694de1552536bb780a3765ba8d60fcefc6eca86ee0dd61547e4d4ba70_prof);

    }

    // line 18
    public function block_admin_container($context, array $blocks = array())
    {
        $__internal_5ba72c3a6757bb609553a18a1cb81df9d040d87debc67c99f57f92fd4c8ea724 = $this->env->getExtension("native_profiler");
        $__internal_5ba72c3a6757bb609553a18a1cb81df9d040d87debc67c99f57f92fd4c8ea724->enter($__internal_5ba72c3a6757bb609553a18a1cb81df9d040d87debc67c99f57f92fd4c8ea724_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "admin_container"));

        echo "        

        ";
        
        $__internal_5ba72c3a6757bb609553a18a1cb81df9d040d87debc67c99f57f92fd4c8ea724->leave($__internal_5ba72c3a6757bb609553a18a1cb81df9d040d87debc67c99f57f92fd4c8ea724_prof);

    }

    // line 26
    public function block_js($context, array $blocks = array())
    {
        $__internal_6fb4f98349472060e2a579bdbd16738e3981e9800789af1c2126ba584f2c225c = $this->env->getExtension("native_profiler");
        $__internal_6fb4f98349472060e2a579bdbd16738e3981e9800789af1c2126ba584f2c225c->enter($__internal_6fb4f98349472060e2a579bdbd16738e3981e9800789af1c2126ba584f2c225c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "js"));

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
        
        $__internal_6fb4f98349472060e2a579bdbd16738e3981e9800789af1c2126ba584f2c225c->leave($__internal_6fb4f98349472060e2a579bdbd16738e3981e9800789af1c2126ba584f2c225c_prof);

    }

    public function getTemplateName()
    {
        return "@LLCore/layout-admin.html.twig";
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
