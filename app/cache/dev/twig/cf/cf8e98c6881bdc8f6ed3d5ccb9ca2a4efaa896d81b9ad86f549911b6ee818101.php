<?php

/* ::layout.html.twig */
class __TwigTemplate_3f3aa456e4ceedd728ca8bbf7bb5735976b963217a7a52f813288a84bac33750 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "::layout.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'headTitle' => array($this, 'block_headTitle'),
            'meta' => array($this, 'block_meta'),
            'metaDescription' => array($this, 'block_metaDescription'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'container' => array($this, 'block_container'),
            'footer' => array($this, 'block_footer'),
            'modal' => array($this, 'block_modal'),
            'js' => array($this, 'block_js'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_499d7c1e2d47bc5b6b3132faeae13eeb2b7c8033df0da5e4cc234ae1d3599b57 = $this->env->getExtension("native_profiler");
        $__internal_499d7c1e2d47bc5b6b3132faeae13eeb2b7c8033df0da5e4cc234ae1d3599b57->enter($__internal_499d7c1e2d47bc5b6b3132faeae13eeb2b7c8033df0da5e4cc234ae1d3599b57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_499d7c1e2d47bc5b6b3132faeae13eeb2b7c8033df0da5e4cc234ae1d3599b57->leave($__internal_499d7c1e2d47bc5b6b3132faeae13eeb2b7c8033df0da5e4cc234ae1d3599b57_prof);

    }

    // line 4
    public function block_head($context, array $blocks = array())
    {
        $__internal_3afd95b2659f088d5ee67b1812331c6ff16b832178b1d70d504718b84aa68917 = $this->env->getExtension("native_profiler");
        $__internal_3afd95b2659f088d5ee67b1812331c6ff16b832178b1d70d504718b84aa68917->enter($__internal_3afd95b2659f088d5ee67b1812331c6ff16b832178b1d70d504718b84aa68917_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 5
        echo "
    <title>";
        // line 6
        $this->displayBlock('headTitle', $context, $blocks);
        echo "</title>

    ";
        // line 8
        $this->displayBlock('meta', $context, $blocks);
        // line 12
        echo "
    <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("files/image/favicon.png"), "html", null, true);
        echo "\" />

    ";
        // line 15
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 20
        echo "        


";
        
        $__internal_3afd95b2659f088d5ee67b1812331c6ff16b832178b1d70d504718b84aa68917->leave($__internal_3afd95b2659f088d5ee67b1812331c6ff16b832178b1d70d504718b84aa68917_prof);

    }

    // line 6
    public function block_headTitle($context, array $blocks = array())
    {
        $__internal_f6e828b85932246f67e0342901d7fd6946adbc692b185cc1022edc7752b82a54 = $this->env->getExtension("native_profiler");
        $__internal_f6e828b85932246f67e0342901d7fd6946adbc692b185cc1022edc7752b82a54->enter($__internal_f6e828b85932246f67e0342901d7fd6946adbc692b185cc1022edc7752b82a54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "headTitle"));

        echo "LL projet - Salines Arc et Senans";
        
        $__internal_f6e828b85932246f67e0342901d7fd6946adbc692b185cc1022edc7752b82a54->leave($__internal_f6e828b85932246f67e0342901d7fd6946adbc692b185cc1022edc7752b82a54_prof);

    }

    // line 8
    public function block_meta($context, array $blocks = array())
    {
        $__internal_2b5d39f06335235b422650eb83600d8b4285d0c132ff4113e3a9f34fa03ccd34 = $this->env->getExtension("native_profiler");
        $__internal_2b5d39f06335235b422650eb83600d8b4285d0c132ff4113e3a9f34fa03ccd34->enter($__internal_2b5d39f06335235b422650eb83600d8b4285d0c132ff4113e3a9f34fa03ccd34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "meta"));

        // line 9
        echo "        <meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\">
        <meta name=\"description\" content=\"";
        // line 10
        $this->displayBlock('metaDescription', $context, $blocks);
        echo "\" />
    ";
        
        $__internal_2b5d39f06335235b422650eb83600d8b4285d0c132ff4113e3a9f34fa03ccd34->leave($__internal_2b5d39f06335235b422650eb83600d8b4285d0c132ff4113e3a9f34fa03ccd34_prof);

    }

    public function block_metaDescription($context, array $blocks = array())
    {
        $__internal_f5d1289a6074175ae01e54d6b6a90881608348d25166544a97c39cbda8915960 = $this->env->getExtension("native_profiler");
        $__internal_f5d1289a6074175ae01e54d6b6a90881608348d25166544a97c39cbda8915960->enter($__internal_f5d1289a6074175ae01e54d6b6a90881608348d25166544a97c39cbda8915960_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "metaDescription"));

        
        $__internal_f5d1289a6074175ae01e54d6b6a90881608348d25166544a97c39cbda8915960->leave($__internal_f5d1289a6074175ae01e54d6b6a90881608348d25166544a97c39cbda8915960_prof);

    }

    // line 15
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_613d34c560691ac313195ef1df26a3bfe9f02f44e75ef1cd835387d6b45a8606 = $this->env->getExtension("native_profiler");
        $__internal_613d34c560691ac313195ef1df26a3bfe9f02f44e75ef1cd835387d6b45a8606->enter($__internal_613d34c560691ac313195ef1df26a3bfe9f02f44e75ef1cd835387d6b45a8606_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        echo "    
        ";
        // line 16
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "7b33b8f_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_7b33b8f_0") : $this->env->getExtension('asset')->getAssetUrl("_controller/css/7b33b8f_part_1_bootstrap-datepicker_1.css");
            // line 17
            echo "            <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" type=\"text/css\" />
        ";
            // asset "7b33b8f_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_7b33b8f_1") : $this->env->getExtension('asset')->getAssetUrl("_controller/css/7b33b8f_part_1_bootstrap.min_2.css");
            echo "            <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" type=\"text/css\" />
        ";
            // asset "7b33b8f_2"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_7b33b8f_2") : $this->env->getExtension('asset')->getAssetUrl("_controller/css/7b33b8f_part_1_chosen_3.css");
            echo "            <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" type=\"text/css\" />
        ";
            // asset "7b33b8f_3"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_7b33b8f_3") : $this->env->getExtension('asset')->getAssetUrl("_controller/css/7b33b8f_part_1_fabulous-library_4.css");
            echo "            <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" type=\"text/css\" />
        ";
            // asset "7b33b8f_4"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_7b33b8f_4") : $this->env->getExtension('asset')->getAssetUrl("_controller/css/7b33b8f_part_1_jquery-ui.min_5.css");
            echo "            <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" type=\"text/css\" />
        ";
        } else {
            // asset "7b33b8f"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_7b33b8f") : $this->env->getExtension('asset')->getAssetUrl("_controller/css/7b33b8f.css");
            echo "            <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" type=\"text/css\" />
        ";
        }
        unset($context["asset_url"]);
        // line 19
        echo "
    ";
        
        $__internal_613d34c560691ac313195ef1df26a3bfe9f02f44e75ef1cd835387d6b45a8606->leave($__internal_613d34c560691ac313195ef1df26a3bfe9f02f44e75ef1cd835387d6b45a8606_prof);

    }

    // line 25
    public function block_body($context, array $blocks = array())
    {
        $__internal_8c393879d707b242f78c245b25a1a37c454e744cc111bb48196494d2a6d8dabc = $this->env->getExtension("native_profiler");
        $__internal_8c393879d707b242f78c245b25a1a37c454e744cc111bb48196494d2a6d8dabc->enter($__internal_8c393879d707b242f78c245b25a1a37c454e744cc111bb48196494d2a6d8dabc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 26
        echo "
    <body>
        
    ";
        // line 29
        $this->displayBlock('container', $context, $blocks);
        // line 30
        echo "
    ";
        // line 31
        $this->displayBlock('footer', $context, $blocks);
        // line 32
        echo "
    ";
        // line 33
        $this->displayBlock('modal', $context, $blocks);
        // line 34
        echo "    
        ";
        // line 36
        echo "        <div id=\"modal-container\"></div>
        
        <div id=\"loading-wrap\">
            <img src=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("files/image/loader.gif"), "html", null, true);
        echo "\" alt=\"loader\" />
        </div>
     ";
        // line 42
        echo "    <div id=\"modal-container\"></div>

    <div id=\"loading-wrap\">
        <img src=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("files/image/loader.gif"), "html", null, true);
        echo "\" alt=\"loader\" />
    </div>
    
    ";
        // line 48
        $this->displayBlock('js', $context, $blocks);
        // line 61
        echo "

    </body>

";
        
        $__internal_8c393879d707b242f78c245b25a1a37c454e744cc111bb48196494d2a6d8dabc->leave($__internal_8c393879d707b242f78c245b25a1a37c454e744cc111bb48196494d2a6d8dabc_prof);

    }

    // line 29
    public function block_container($context, array $blocks = array())
    {
        $__internal_9c5b8cd25661885f516796bd35f98f4cc3896afdf8b61059923a33f26d3fb83e = $this->env->getExtension("native_profiler");
        $__internal_9c5b8cd25661885f516796bd35f98f4cc3896afdf8b61059923a33f26d3fb83e->enter($__internal_9c5b8cd25661885f516796bd35f98f4cc3896afdf8b61059923a33f26d3fb83e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "container"));

        
        $__internal_9c5b8cd25661885f516796bd35f98f4cc3896afdf8b61059923a33f26d3fb83e->leave($__internal_9c5b8cd25661885f516796bd35f98f4cc3896afdf8b61059923a33f26d3fb83e_prof);

    }

    // line 31
    public function block_footer($context, array $blocks = array())
    {
        $__internal_139a9ea0f424bd2b7ee6185f45ef1e84e81f7c76931939aac3cd572f5b457216 = $this->env->getExtension("native_profiler");
        $__internal_139a9ea0f424bd2b7ee6185f45ef1e84e81f7c76931939aac3cd572f5b457216->enter($__internal_139a9ea0f424bd2b7ee6185f45ef1e84e81f7c76931939aac3cd572f5b457216_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        
        $__internal_139a9ea0f424bd2b7ee6185f45ef1e84e81f7c76931939aac3cd572f5b457216->leave($__internal_139a9ea0f424bd2b7ee6185f45ef1e84e81f7c76931939aac3cd572f5b457216_prof);

    }

    // line 33
    public function block_modal($context, array $blocks = array())
    {
        $__internal_57a0c68f44f172d6c017f2935c30904f0d37be88c40a8cf0a33713f4c6d2bd0b = $this->env->getExtension("native_profiler");
        $__internal_57a0c68f44f172d6c017f2935c30904f0d37be88c40a8cf0a33713f4c6d2bd0b->enter($__internal_57a0c68f44f172d6c017f2935c30904f0d37be88c40a8cf0a33713f4c6d2bd0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "modal"));

        
        $__internal_57a0c68f44f172d6c017f2935c30904f0d37be88c40a8cf0a33713f4c6d2bd0b->leave($__internal_57a0c68f44f172d6c017f2935c30904f0d37be88c40a8cf0a33713f4c6d2bd0b_prof);

    }

    // line 48
    public function block_js($context, array $blocks = array())
    {
        $__internal_32147e7c279ce75bb0e7d28b5f5f6e9b060b393fc827ffc762c0f0fb41168033 = $this->env->getExtension("native_profiler");
        $__internal_32147e7c279ce75bb0e7d28b5f5f6e9b060b393fc827ffc762c0f0fb41168033->enter($__internal_32147e7c279ce75bb0e7d28b5f5f6e9b060b393fc827ffc762c0f0fb41168033_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "js"));

        // line 49
        echo "        <script  type=\"text/javascript\">
            var DOMAIN = \" ";
        // line 50
        echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "getSchemeAndHttpHost", array(), "method") . $this->env->getExtension('asset')->getAssetUrl("")), "html", null, true);
        echo "\";
        </script>

        ";
        // line 53
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "437ab5c_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_437ab5c_0") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/437ab5c_part_1_aa_jquery-2.1.4.min_1.js");
            // line 54
            echo "            <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
        ";
            // asset "437ab5c_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_437ab5c_1") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/437ab5c_part_1_jquery-ui.min_2.js");
            echo "            <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
        ";
            // asset "437ab5c_2"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_437ab5c_2") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/437ab5c_part_1_plugin-ab_jquery.ui.widget_3.js");
            echo "            <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
        ";
            // asset "437ab5c_3"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_437ab5c_3") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/437ab5c_part_1_plugin-bootstrap-datepicker.min_4.js");
            echo "            <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
        ";
            // asset "437ab5c_4"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_437ab5c_4") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/437ab5c_part_1_plugin-bootstrap.min_5.js");
            echo "            <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
        ";
            // asset "437ab5c_5"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_437ab5c_5") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/437ab5c_part_1_plugin-chosen.jquery_6.js");
            echo "            <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
        ";
            // asset "437ab5c_6"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_437ab5c_6") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/437ab5c_part_1_script-common-function_7.js");
            echo "            <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
        ";
            // asset "437ab5c_7"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_437ab5c_7") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/437ab5c_part_1_zen-library-maps_8.js");
            echo "            <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
        ";
            // asset "437ab5c_8"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_437ab5c_8") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/437ab5c_part_1_zen-library_9.js");
            echo "            <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
        ";
        } else {
            // asset "437ab5c"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_437ab5c") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/437ab5c.js");
            echo "            <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
        ";
        }
        unset($context["asset_url"]);
        // line 56
        echo "        
        
        <script type=\"text/javascript\" charset=\"UTF-8\" src=\"";
        // line 58
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl((("js/common/locales/bootstrap-datepicker." . $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "getLocale", array(), "method")) . ".min.js")), "html", null, true);
        echo "\"></script>
        
    ";
        
        $__internal_32147e7c279ce75bb0e7d28b5f5f6e9b060b393fc827ffc762c0f0fb41168033->leave($__internal_32147e7c279ce75bb0e7d28b5f5f6e9b060b393fc827ffc762c0f0fb41168033_prof);

    }

    public function getTemplateName()
    {
        return "::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  355 => 58,  351 => 56,  289 => 54,  285 => 53,  279 => 50,  276 => 49,  270 => 48,  259 => 33,  248 => 31,  237 => 29,  226 => 61,  224 => 48,  218 => 45,  213 => 42,  208 => 39,  203 => 36,  200 => 34,  198 => 33,  195 => 32,  193 => 31,  190 => 30,  188 => 29,  183 => 26,  177 => 25,  169 => 19,  131 => 17,  127 => 16,  119 => 15,  100 => 10,  97 => 9,  91 => 8,  79 => 6,  69 => 20,  67 => 15,  62 => 13,  59 => 12,  57 => 8,  52 => 6,  49 => 5,  43 => 4,  11 => 1,);
    }
}
/* {% extends "base.html.twig" %}*/
/* */
/* */
/* {% block head %}*/
/* */
/*     <title>{% block headTitle %}LL projet - Salines Arc et Senans{% endblock %}</title>*/
/* */
/*     {% block meta %}*/
/*         <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">*/
/*         <meta name="description" content="{% block metaDescription %}{% endblock metaDescription %}" />*/
/*     {% endblock %}*/
/* */
/*     <link rel="icon" type="image/png" href="{{ asset('files/image/favicon.png') }}" />*/
/* */
/*     {% block stylesheets %}    */
/*         {% stylesheets 'css/common/*' %}*/
/*             <link rel="stylesheet" href="{{ asset_url }}" type="text/css" />*/
/*         {% endstylesheets %}*/
/* */
/*     {% endblock %}        */
/* */
/* */
/* {% endblock %}        */
/* */
/* {% block body %}*/
/* */
/*     <body>*/
/*         */
/*     {% block container %}{% endblock %}*/
/* */
/*     {% block footer %}{% endblock %}*/
/* */
/*     {% block modal %}{% endblock %}*/
/*     */
/*         {# Container des modal chargé en ajax   #}*/
/*         <div id="modal-container"></div>*/
/*         */
/*         <div id="loading-wrap">*/
/*             <img src="{{ asset('files/image/loader.gif') }}" alt="loader" />*/
/*         </div>*/
/*      {# Container des modal chargé en ajax #}*/
/*     <div id="modal-container"></div>*/
/* */
/*     <div id="loading-wrap">*/
/*         <img src="{{ asset('files/image/loader.gif') }}" alt="loader" />*/
/*     </div>*/
/*     */
/*     {% block js %}*/
/*         <script  type="text/javascript">*/
/*             var DOMAIN = " {{  app.request.getSchemeAndHttpHost() ~ asset('') }}";*/
/*         </script>*/
/* */
/*         {% javascripts 'js/common/*' %}*/
/*             <script type="text/javascript" src="{{ asset_url }}"></script>*/
/*         {% endjavascripts %}*/
/*         */
/*         */
/*         <script type="text/javascript" charset="UTF-8" src="{{ asset('js/common/locales/bootstrap-datepicker.'~ app.request.getLocale() ~'.min.js' ) }}"></script>*/
/*         */
/*     {% endblock %}*/
/* */
/* */
/*     </body>*/
/* */
/* {% endblock %}*/
