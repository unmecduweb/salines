<?php

/* layout.html.twig */
class __TwigTemplate_d73dab405188fe9987e94d48347ac53033503164ddcb107758afb269898e5ab3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "layout.html.twig", 1);
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
        $__internal_852d9eb23c989eff1435348c652ea1949f78916110d7ddd34113fd4dff947ab8 = $this->env->getExtension("native_profiler");
        $__internal_852d9eb23c989eff1435348c652ea1949f78916110d7ddd34113fd4dff947ab8->enter($__internal_852d9eb23c989eff1435348c652ea1949f78916110d7ddd34113fd4dff947ab8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_852d9eb23c989eff1435348c652ea1949f78916110d7ddd34113fd4dff947ab8->leave($__internal_852d9eb23c989eff1435348c652ea1949f78916110d7ddd34113fd4dff947ab8_prof);

    }

    // line 4
    public function block_head($context, array $blocks = array())
    {
        $__internal_ff61294f97aa125641ae1085952f4a147f852e7d4fad58816939fcced5140972 = $this->env->getExtension("native_profiler");
        $__internal_ff61294f97aa125641ae1085952f4a147f852e7d4fad58816939fcced5140972->enter($__internal_ff61294f97aa125641ae1085952f4a147f852e7d4fad58816939fcced5140972_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_ff61294f97aa125641ae1085952f4a147f852e7d4fad58816939fcced5140972->leave($__internal_ff61294f97aa125641ae1085952f4a147f852e7d4fad58816939fcced5140972_prof);

    }

    // line 6
    public function block_headTitle($context, array $blocks = array())
    {
        $__internal_15a47da5b770b248aaee183196490f12216a2ea4f4a0237b3901ea8617ce7ada = $this->env->getExtension("native_profiler");
        $__internal_15a47da5b770b248aaee183196490f12216a2ea4f4a0237b3901ea8617ce7ada->enter($__internal_15a47da5b770b248aaee183196490f12216a2ea4f4a0237b3901ea8617ce7ada_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "headTitle"));

        echo "LL projet - Salines Arc et Senans";
        
        $__internal_15a47da5b770b248aaee183196490f12216a2ea4f4a0237b3901ea8617ce7ada->leave($__internal_15a47da5b770b248aaee183196490f12216a2ea4f4a0237b3901ea8617ce7ada_prof);

    }

    // line 8
    public function block_meta($context, array $blocks = array())
    {
        $__internal_dae6943fa701e2adb45d33cc6b22646d9b5ce42afd8d9a1d83871eef68c014a2 = $this->env->getExtension("native_profiler");
        $__internal_dae6943fa701e2adb45d33cc6b22646d9b5ce42afd8d9a1d83871eef68c014a2->enter($__internal_dae6943fa701e2adb45d33cc6b22646d9b5ce42afd8d9a1d83871eef68c014a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "meta"));

        // line 9
        echo "        <meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\">
        <meta name=\"description\" content=\"";
        // line 10
        $this->displayBlock('metaDescription', $context, $blocks);
        echo "\" />
    ";
        
        $__internal_dae6943fa701e2adb45d33cc6b22646d9b5ce42afd8d9a1d83871eef68c014a2->leave($__internal_dae6943fa701e2adb45d33cc6b22646d9b5ce42afd8d9a1d83871eef68c014a2_prof);

    }

    public function block_metaDescription($context, array $blocks = array())
    {
        $__internal_b9174764b9da65d83c9631446d0b8941c23d86facf310e84b43d8993a224c24d = $this->env->getExtension("native_profiler");
        $__internal_b9174764b9da65d83c9631446d0b8941c23d86facf310e84b43d8993a224c24d->enter($__internal_b9174764b9da65d83c9631446d0b8941c23d86facf310e84b43d8993a224c24d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "metaDescription"));

        
        $__internal_b9174764b9da65d83c9631446d0b8941c23d86facf310e84b43d8993a224c24d->leave($__internal_b9174764b9da65d83c9631446d0b8941c23d86facf310e84b43d8993a224c24d_prof);

    }

    // line 15
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_407f7998745b6f4609e6967175ea66ff2d4715d2c22f773228b3c7973fc7e05e = $this->env->getExtension("native_profiler");
        $__internal_407f7998745b6f4609e6967175ea66ff2d4715d2c22f773228b3c7973fc7e05e->enter($__internal_407f7998745b6f4609e6967175ea66ff2d4715d2c22f773228b3c7973fc7e05e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_407f7998745b6f4609e6967175ea66ff2d4715d2c22f773228b3c7973fc7e05e->leave($__internal_407f7998745b6f4609e6967175ea66ff2d4715d2c22f773228b3c7973fc7e05e_prof);

    }

    // line 25
    public function block_body($context, array $blocks = array())
    {
        $__internal_66c03679f9ff6c542f6b4c998f02db2611e92207f86c63c0e290c3fe633026b6 = $this->env->getExtension("native_profiler");
        $__internal_66c03679f9ff6c542f6b4c998f02db2611e92207f86c63c0e290c3fe633026b6->enter($__internal_66c03679f9ff6c542f6b4c998f02db2611e92207f86c63c0e290c3fe633026b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_66c03679f9ff6c542f6b4c998f02db2611e92207f86c63c0e290c3fe633026b6->leave($__internal_66c03679f9ff6c542f6b4c998f02db2611e92207f86c63c0e290c3fe633026b6_prof);

    }

    // line 29
    public function block_container($context, array $blocks = array())
    {
        $__internal_c04144d1b1d73a5f9c5f74c6b2828c76c24cd67aacb6426b3c11655f4f4a5724 = $this->env->getExtension("native_profiler");
        $__internal_c04144d1b1d73a5f9c5f74c6b2828c76c24cd67aacb6426b3c11655f4f4a5724->enter($__internal_c04144d1b1d73a5f9c5f74c6b2828c76c24cd67aacb6426b3c11655f4f4a5724_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "container"));

        
        $__internal_c04144d1b1d73a5f9c5f74c6b2828c76c24cd67aacb6426b3c11655f4f4a5724->leave($__internal_c04144d1b1d73a5f9c5f74c6b2828c76c24cd67aacb6426b3c11655f4f4a5724_prof);

    }

    // line 31
    public function block_footer($context, array $blocks = array())
    {
        $__internal_e49eae2c629006ce719a71bf420bb7f5b3304fd8deb46756dafd14faa4a2a85a = $this->env->getExtension("native_profiler");
        $__internal_e49eae2c629006ce719a71bf420bb7f5b3304fd8deb46756dafd14faa4a2a85a->enter($__internal_e49eae2c629006ce719a71bf420bb7f5b3304fd8deb46756dafd14faa4a2a85a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        
        $__internal_e49eae2c629006ce719a71bf420bb7f5b3304fd8deb46756dafd14faa4a2a85a->leave($__internal_e49eae2c629006ce719a71bf420bb7f5b3304fd8deb46756dafd14faa4a2a85a_prof);

    }

    // line 33
    public function block_modal($context, array $blocks = array())
    {
        $__internal_7f5aafb8a23a1c28019d638a8b95dce0b81a0f80ccf35a97e377a07ff703fcd4 = $this->env->getExtension("native_profiler");
        $__internal_7f5aafb8a23a1c28019d638a8b95dce0b81a0f80ccf35a97e377a07ff703fcd4->enter($__internal_7f5aafb8a23a1c28019d638a8b95dce0b81a0f80ccf35a97e377a07ff703fcd4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "modal"));

        
        $__internal_7f5aafb8a23a1c28019d638a8b95dce0b81a0f80ccf35a97e377a07ff703fcd4->leave($__internal_7f5aafb8a23a1c28019d638a8b95dce0b81a0f80ccf35a97e377a07ff703fcd4_prof);

    }

    // line 48
    public function block_js($context, array $blocks = array())
    {
        $__internal_909116fee563eea36d5c28fb6d8e2184b6eae67191ff788d082a2c17ffb07b32 = $this->env->getExtension("native_profiler");
        $__internal_909116fee563eea36d5c28fb6d8e2184b6eae67191ff788d082a2c17ffb07b32->enter($__internal_909116fee563eea36d5c28fb6d8e2184b6eae67191ff788d082a2c17ffb07b32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "js"));

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
        
        $__internal_909116fee563eea36d5c28fb6d8e2184b6eae67191ff788d082a2c17ffb07b32->leave($__internal_909116fee563eea36d5c28fb6d8e2184b6eae67191ff788d082a2c17ffb07b32_prof);

    }

    public function getTemplateName()
    {
        return "layout.html.twig";
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
