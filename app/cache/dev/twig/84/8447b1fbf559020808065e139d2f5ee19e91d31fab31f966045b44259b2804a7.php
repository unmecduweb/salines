<?php

/* Form/main-form-layout.html.twig */
class __TwigTemplate_4d1a5760129ad071d869e8798b9f72527ac9de3e080e9d4041920b8219e2ecab extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("form_div_layout.html.twig", "Form/main-form-layout.html.twig", 3);
        $this->blocks = array(
            'form_row' => array($this, 'block_form_row'),
            'time_widget' => array($this, 'block_time_widget'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "form_div_layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_201e1b89730bd26f362829cd6f48940ca5c2b66295096713c38e448804095006 = $this->env->getExtension("native_profiler");
        $__internal_201e1b89730bd26f362829cd6f48940ca5c2b66295096713c38e448804095006->enter($__internal_201e1b89730bd26f362829cd6f48940ca5c2b66295096713c38e448804095006_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Form/main-form-layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_201e1b89730bd26f362829cd6f48940ca5c2b66295096713c38e448804095006->leave($__internal_201e1b89730bd26f362829cd6f48940ca5c2b66295096713c38e448804095006_prof);

    }

    // line 7
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_841dee415fffbd07f121e5bddf9002828cadc666151c7b750f543f1b77e7727e = $this->env->getExtension("native_profiler");
        $__internal_841dee415fffbd07f121e5bddf9002828cadc666151c7b750f543f1b77e7727e->enter($__internal_841dee415fffbd07f121e5bddf9002828cadc666151c7b750f543f1b77e7727e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 8
        echo "    ";
        ob_start();
        // line 9
        echo "
        ";
        // line 11
        echo "        ";
        $context["field_class"] = "";
        // line 12
        echo "        ";
        if ($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "field_class", array(), "any", true, true)) {
            // line 13
            echo "            ";
            $context["field_class"] = $this->getAttribute((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), "field_class", array());
            // line 14
            echo "        ";
        }
        // line 15
        echo "
        ";
        // line 17
        echo "        ";
        $context["class"] = "";
        // line 18
        echo "        ";
        if ($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) {
            // line 19
            echo "            ";
            $context["class"] = $this->getAttribute((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), "class", array());
            // line 20
            echo "        ";
        }
        // line 21
        echo "
        <div class=\"form-group\">
           ";
        // line 23
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'label');
        echo "
           ";
        // line 24
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget', array("attr" => array("class" => "form-control")));
        echo "
        </div>
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_841dee415fffbd07f121e5bddf9002828cadc666151c7b750f543f1b77e7727e->leave($__internal_841dee415fffbd07f121e5bddf9002828cadc666151c7b750f543f1b77e7727e_prof);

    }

    // line 30
    public function block_time_widget($context, array $blocks = array())
    {
        $__internal_5c82de450d7f751da3a3ebaee511c7c38551c209994c37898a256b3974b94efe = $this->env->getExtension("native_profiler");
        $__internal_5c82de450d7f751da3a3ebaee511c7c38551c209994c37898a256b3974b94efe->enter($__internal_5c82de450d7f751da3a3ebaee511c7c38551c209994c37898a256b3974b94efe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

        // line 31
        if (((isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")) == "single_text")) {
            // line 32
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 34
            $context["vars"] = ((((isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")) == "text")) ? (array("attr" => array("size" => 1, "class" => "form-cntrol col-xs-5"))) : (array()));
            // line 35
            echo "<div class=\"form-goup\" ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">
            ";
            // line 36
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "hour", array()), 'widget', (isset($context["vars"]) ? $context["vars"] : $this->getContext($context, "vars")));
            echo "H
            ";
            // line 37
            if ((isset($context["with_minutes"]) ? $context["with_minutes"] : $this->getContext($context, "with_minutes"))) {
                echo ":";
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "minute", array()), 'widget', (isset($context["vars"]) ? $context["vars"] : $this->getContext($context, "vars")));
                echo "M";
            }
            // line 38
            echo "            ";
            if ((isset($context["with_seconds"]) ? $context["with_seconds"] : $this->getContext($context, "with_seconds"))) {
                echo ":";
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "second", array()), 'widget', (isset($context["vars"]) ? $context["vars"] : $this->getContext($context, "vars")));
                echo "S";
            }
            // line 39
            echo "        </div>";
        }
        
        $__internal_5c82de450d7f751da3a3ebaee511c7c38551c209994c37898a256b3974b94efe->leave($__internal_5c82de450d7f751da3a3ebaee511c7c38551c209994c37898a256b3974b94efe_prof);

    }

    public function getTemplateName()
    {
        return "Form/main-form-layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  128 => 39,  121 => 38,  115 => 37,  111 => 36,  106 => 35,  104 => 34,  101 => 32,  99 => 31,  93 => 30,  82 => 24,  78 => 23,  74 => 21,  71 => 20,  68 => 19,  65 => 18,  62 => 17,  59 => 15,  56 => 14,  53 => 13,  50 => 12,  47 => 11,  44 => 9,  41 => 8,  35 => 7,  11 => 3,);
    }
}
/* */
/* */
/* {% extends "form_div_layout.html.twig" %} */
/* */
/*     */
/* {# Affichage d'un groupe de champ ou d'un champ de son label et des erreurs#}*/
/* {% block form_row %}*/
/*     {% spaceless %}*/
/* */
/*         {# Class du champ #}*/
/*         {% set field_class='' %}*/
/*         {% if attr.field_class is defined %}*/
/*             {% set field_class = attr.field_class %}*/
/*         {% endif %}*/
/* */
/*         {# Class de la div qui entoure le champ #}*/
/*         {% set class='' %}*/
/*         {% if attr.class is defined %}*/
/*             {% set class = attr.class %}*/
/*         {% endif %}*/
/* */
/*         <div class="form-group">*/
/*            {{ form_label(form) }}*/
/*            {{ form_widget(form, {"attr":{'class':'form-control'}} ) }}*/
/*         </div>*/
/*     {% endspaceless %}*/
/* {% endblock form_row %}*/
/* */
/* */
/* {%- block time_widget -%}*/
/*     {%- if widget == 'single_text' -%}*/
/*         {{ block('form_widget_simple') }}*/
/*     {%- else -%}*/
/*         {%- set vars = widget == 'text' ? { 'attr': { 'size': 1 , 'class' : 'form-cntrol col-xs-5'}} : {} -%}*/
/*         <div class="form-goup" {{ block('widget_container_attributes') }}>*/
/*             {{ form_widget(form.hour, vars) }}H*/
/*             {% if with_minutes %}:{{ form_widget(form.minute, vars) }}M{% endif %}*/
/*             {% if with_seconds %}:{{ form_widget(form.second, vars) }}S{% endif %}*/
/*         </div>*/
/*     {%- endif -%}*/
/* {%- endblock time_widget -%}*/
/* */
/* */
