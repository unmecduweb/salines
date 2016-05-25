<?php

/* LLCoreBundle:menu:menu-list.html.twig */
class __TwigTemplate_5f9c4bf2986625214c1e06a0dcd6ea16c570152caa1a9761ceb626ce39c02c5e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("SKCMSAdminBundle:Element/Template:admin-list.html.twig", "LLCoreBundle:menu:menu-list.html.twig", 1);
        $this->blocks = array(
            'header2' => array($this, 'block_header2'),
            'createLink' => array($this, 'block_createLink'),
            'th' => array($this, 'block_th'),
            'tr' => array($this, 'block_tr'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SKCMSAdminBundle:Element/Template:admin-list.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7846738e4025663077761a3dcf9b0fe231bc087b5f8ba939ba67f69f21cdff78 = $this->env->getExtension("native_profiler");
        $__internal_7846738e4025663077761a3dcf9b0fe231bc087b5f8ba939ba67f69f21cdff78->enter($__internal_7846738e4025663077761a3dcf9b0fe231bc087b5f8ba939ba67f69f21cdff78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LLCoreBundle:menu:menu-list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7846738e4025663077761a3dcf9b0fe231bc087b5f8ba939ba67f69f21cdff78->leave($__internal_7846738e4025663077761a3dcf9b0fe231bc087b5f8ba939ba67f69f21cdff78_prof);

    }

    // line 2
    public function block_header2($context, array $blocks = array())
    {
        $__internal_344778117db365fb33428fcfbd0662c6d03d739488edb7ac32df71d039c1d4e2 = $this->env->getExtension("native_profiler");
        $__internal_344778117db365fb33428fcfbd0662c6d03d739488edb7ac32df71d039c1d4e2->enter($__internal_344778117db365fb33428fcfbd0662c6d03d739488edb7ac32df71d039c1d4e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header2"));

        echo "Menu";
        
        $__internal_344778117db365fb33428fcfbd0662c6d03d739488edb7ac32df71d039c1d4e2->leave($__internal_344778117db365fb33428fcfbd0662c6d03d739488edb7ac32df71d039c1d4e2_prof);

    }

    // line 3
    public function block_createLink($context, array $blocks = array())
    {
        $__internal_13e71ac4662f32d78919ef2a4d4f3ce7b9f1b7980b0e4add0bf10e0f8b673b4f = $this->env->getExtension("native_profiler");
        $__internal_13e71ac4662f32d78919ef2a4d4f3ce7b9f1b7980b0e4add0bf10e0f8b673b4f->enter($__internal_13e71ac4662f32d78919ef2a4d4f3ce7b9f1b7980b0e4add0bf10e0f8b673b4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "createLink"));

        echo $this->env->getExtension('routing')->getPath("sk_admin_menuedit");
        
        $__internal_13e71ac4662f32d78919ef2a4d4f3ce7b9f1b7980b0e4add0bf10e0f8b673b4f->leave($__internal_13e71ac4662f32d78919ef2a4d4f3ce7b9f1b7980b0e4add0bf10e0f8b673b4f_prof);

    }

    // line 4
    public function block_th($context, array $blocks = array())
    {
        $__internal_c01d444a1f7d5fd385198f713c548140fe7ef123553ed57f068c85e4bda39415 = $this->env->getExtension("native_profiler");
        $__internal_c01d444a1f7d5fd385198f713c548140fe7ef123553ed57f068c85e4bda39415->enter($__internal_c01d444a1f7d5fd385198f713c548140fe7ef123553ed57f068c85e4bda39415_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "th"));

        // line 5
        echo "    <th>Name</th>
    ";
        // line 6
        $this->displayParentBlock("th", $context, $blocks);
        echo "
";
        
        $__internal_c01d444a1f7d5fd385198f713c548140fe7ef123553ed57f068c85e4bda39415->leave($__internal_c01d444a1f7d5fd385198f713c548140fe7ef123553ed57f068c85e4bda39415_prof);

    }

    // line 8
    public function block_tr($context, array $blocks = array())
    {
        $__internal_b819356eb31e1f2c968d3acfdac7b47f2bbf4948c01121dc523e4134853c2635 = $this->env->getExtension("native_profiler");
        $__internal_b819356eb31e1f2c968d3acfdac7b47f2bbf4948c01121dc523e4134853c2635->enter($__internal_b819356eb31e1f2c968d3acfdac7b47f2bbf4948c01121dc523e4134853c2635_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tr"));

        // line 9
        echo "    <td>";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "name", array()), "html", null, true);
        echo "</td>
    <td class=\"center\">
        <a class=\"btn btn-info\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("sk_admin_menuedit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()))), "html", null, true);
        echo "\">
                <i class=\"icon-edit icon-white\"></i>  
                Edit                                            
        </a>
        <a class=\"btn btn-danger btn-setting\" data-content=\"Voulez vous vraiment supprimer cette entité ?\" data-title=\"Confirmation de suppression\" data-confirm=\"Oui\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("sk_admin_menudelete", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()))), "html", null, true);
        echo "\">
                <i class=\"icon-trash icon-white\"></i> 
                Delete
        </a>

    </td>
";
        
        $__internal_b819356eb31e1f2c968d3acfdac7b47f2bbf4948c01121dc523e4134853c2635->leave($__internal_b819356eb31e1f2c968d3acfdac7b47f2bbf4948c01121dc523e4134853c2635_prof);

    }

    public function getTemplateName()
    {
        return "LLCoreBundle:menu:menu-list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  98 => 15,  91 => 11,  85 => 9,  79 => 8,  70 => 6,  67 => 5,  61 => 4,  49 => 3,  37 => 2,  11 => 1,);
    }
}
/* {%extends "SKCMSAdminBundle:Element/Template:admin-list.html.twig"%}*/
/* {%block header2 %}Menu{%endblock%}*/
/* {%block createLink %}{{path('sk_admin_menuedit')}}{%endblock%}*/
/* {%block th %}*/
/*     <th>Name</th>*/
/*     {{parent()}}*/
/* {%endblock%}*/
/* {%block tr %}*/
/*     <td>{{entity.name}}</td>*/
/*     <td class="center">*/
/*         <a class="btn btn-info" href="{{path('sk_admin_menuedit',{id:entity.id})}}">*/
/*                 <i class="icon-edit icon-white"></i>  */
/*                 Edit                                            */
/*         </a>*/
/*         <a class="btn btn-danger btn-setting" data-content="Voulez vous vraiment supprimer cette entité ?" data-title="Confirmation de suppression" data-confirm="Oui" href="{{path('sk_admin_menudelete',{id:entity.id})}}">*/
/*                 <i class="icon-trash icon-white"></i> */
/*                 Delete*/
/*         </a>*/
/* */
/*     </td>*/
/* {%endblock%}*/
