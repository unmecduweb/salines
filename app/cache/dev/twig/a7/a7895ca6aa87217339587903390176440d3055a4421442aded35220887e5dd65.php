<?php

/* LLCoreBundle::menu.html.twig */
class __TwigTemplate_9a1357fd3a3725a46b794487527112deba3e29ad5ed0a37530716597ce1adc91 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a44f21029251d61a28b3a6760d687e8f4d73bbc32a75a0d96de215a5fb72d641 = $this->env->getExtension("native_profiler");
        $__internal_a44f21029251d61a28b3a6760d687e8f4d73bbc32a75a0d96de215a5fb72d641->enter($__internal_a44f21029251d61a28b3a6760d687e8f4d73bbc32a75a0d96de215a5fb72d641_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LLCoreBundle::menu.html.twig"));

        // line 1
        echo "<nav class=\"navbar navbar-inverse\" style=\"position:fixed;top:0;z-index:99999;width:100%;\">
    <div class=\"container-fluid\">
        <ul class=\"nav navbar-nav\">
            <li class=\"active\"><a href=\"";
        // line 4
        echo $this->env->getExtension('routing')->getPath("ll_admin");
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("files/image/logo/logo-admin.png"), "html", null, true);
        echo "\" alt=\"\" height=\"26px\" /></a></li>

            ";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["adminMenu"]) ? $context["adminMenu"] : $this->getContext($context, "adminMenu")));
        foreach ($context['_seq'] as $context["menuKey"] => $context["menu"]) {
            // line 7
            echo "                <li class=\"dropdown\">
                    <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">";
            // line 8
            echo twig_escape_filter($this->env, $this->getAttribute($context["menu"], "beautyName", array()), "html", null, true);
            echo "<span class=\"caret\"></span></a>
                    <ul class=\"dropdown-menu\">
                        ";
            // line 10
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["adminEntities"]) ? $context["adminEntities"] : $this->getContext($context, "adminEntities")));
            foreach ($context['_seq'] as $context["key"] => $context["entity"]) {
                // line 11
                echo "                            ";
                if (($this->getAttribute($context["entity"], "menu", array()) == $context["menuKey"])) {
                    // line 13
                    echo "                                <li><a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ll_list_entity", array("entityAlias" => $context["key"])), "html", null, true);
                    echo "\">Liste des ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "beautyName", array()), "html", null, true);
                    echo "</a></li>
                                <li role=\"separator\" class=\"divider\"></li>
";
                    // line 16
                    echo "                            ";
                }
                // line 17
                echo "                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['entity'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 18
            echo "                    </ul>
                </li>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['menuKey'], $context['menu'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        echo "            
        </ul>
        <div class=\"navbar-collapse\">
            ";
        // line 27
        echo "        </div>
    </div><!-- /.container-fluid -->
</nav>";
        
        $__internal_a44f21029251d61a28b3a6760d687e8f4d73bbc32a75a0d96de215a5fb72d641->leave($__internal_a44f21029251d61a28b3a6760d687e8f4d73bbc32a75a0d96de215a5fb72d641_prof);

    }

    public function getTemplateName()
    {
        return "LLCoreBundle::menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  83 => 27,  78 => 21,  70 => 18,  64 => 17,  61 => 16,  53 => 13,  50 => 11,  46 => 10,  41 => 8,  38 => 7,  34 => 6,  27 => 4,  22 => 1,);
    }
}
/* <nav class="navbar navbar-inverse" style="position:fixed;top:0;z-index:99999;width:100%;">*/
/*     <div class="container-fluid">*/
/*         <ul class="nav navbar-nav">*/
/*             <li class="active"><a href="{{ path('ll_admin') }}"><img src="{{ asset('files/image/logo/logo-admin.png') }}" alt="" height="26px" /></a></li>*/
/* */
/*             {% for menuKey, menu in adminMenu %}*/
/*                 <li class="dropdown">*/
/*                     <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">{{menu.beautyName}}<span class="caret"></span></a>*/
/*                     <ul class="dropdown-menu">*/
/*                         {% for key, entity in adminEntities %}*/
/*                             {% if entity.menu == menuKey %}*/
/* {#                                {{ dump(entity) }}#}*/
/*                                 <li><a href="{{ path('ll_list_entity',{'entityAlias': key}) }}">Liste des {{entity.beautyName}}</a></li>*/
/*                                 <li role="separator" class="divider"></li>*/
/* {#                                <li><a href="{{ path('ll_edit_entity',{'entityAlias': key, 'id': 'new'}) }}">Ajouter un {{entity.beautyName}}</a></li>#}*/
/*                             {% endif %}*/
/*                         {% endfor %}*/
/*                     </ul>*/
/*                 </li>*/
/*             {% endfor %}*/
/*             */
/*         </ul>*/
/*         <div class="navbar-collapse">*/
/*             {#<ul class="nav navbar-nav navbar-right">*/
/*                 <li><a class="btn btn-default" href="{{ path('fos_user_security_logout') }}">Déconnexion</a></li>*/
/*             </ul>#}*/
/*         </div>*/
/*     </div><!-- /.container-fluid -->*/
/* </nav>*/
