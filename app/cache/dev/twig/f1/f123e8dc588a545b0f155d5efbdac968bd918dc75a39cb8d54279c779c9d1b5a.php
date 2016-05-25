<?php

/* @LLCore/menu/menu-list.html.twig */
class __TwigTemplate_ce26c7c97a0423e061f5aed3db497a315b411b47efe40abef77010060310b422 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("SKCMSAdminBundle:Element/Template:admin-list.html.twig", "@LLCore/menu/menu-list.html.twig", 1);
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
        $__internal_7bd9b41a4edcb93d75aeb2e31647abacc0d8720d6456c7d66202c8587a206cd3 = $this->env->getExtension("native_profiler");
        $__internal_7bd9b41a4edcb93d75aeb2e31647abacc0d8720d6456c7d66202c8587a206cd3->enter($__internal_7bd9b41a4edcb93d75aeb2e31647abacc0d8720d6456c7d66202c8587a206cd3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@LLCore/menu/menu-list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7bd9b41a4edcb93d75aeb2e31647abacc0d8720d6456c7d66202c8587a206cd3->leave($__internal_7bd9b41a4edcb93d75aeb2e31647abacc0d8720d6456c7d66202c8587a206cd3_prof);

    }

    // line 2
    public function block_header2($context, array $blocks = array())
    {
        $__internal_a117560e710b517b82d8345e93f30105b1e8701006e811323152526a50603d88 = $this->env->getExtension("native_profiler");
        $__internal_a117560e710b517b82d8345e93f30105b1e8701006e811323152526a50603d88->enter($__internal_a117560e710b517b82d8345e93f30105b1e8701006e811323152526a50603d88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header2"));

        echo "Menu";
        
        $__internal_a117560e710b517b82d8345e93f30105b1e8701006e811323152526a50603d88->leave($__internal_a117560e710b517b82d8345e93f30105b1e8701006e811323152526a50603d88_prof);

    }

    // line 3
    public function block_createLink($context, array $blocks = array())
    {
        $__internal_1e513ded5a872dd74dd2b23e164f8c22fa4736708d6ae68aee049b38118bd965 = $this->env->getExtension("native_profiler");
        $__internal_1e513ded5a872dd74dd2b23e164f8c22fa4736708d6ae68aee049b38118bd965->enter($__internal_1e513ded5a872dd74dd2b23e164f8c22fa4736708d6ae68aee049b38118bd965_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "createLink"));

        echo $this->env->getExtension('routing')->getPath("sk_admin_menuedit");
        
        $__internal_1e513ded5a872dd74dd2b23e164f8c22fa4736708d6ae68aee049b38118bd965->leave($__internal_1e513ded5a872dd74dd2b23e164f8c22fa4736708d6ae68aee049b38118bd965_prof);

    }

    // line 4
    public function block_th($context, array $blocks = array())
    {
        $__internal_131669eb137f43491526f673f1a39d6cc0fea0261fbded781523dc20ddb8a449 = $this->env->getExtension("native_profiler");
        $__internal_131669eb137f43491526f673f1a39d6cc0fea0261fbded781523dc20ddb8a449->enter($__internal_131669eb137f43491526f673f1a39d6cc0fea0261fbded781523dc20ddb8a449_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "th"));

        // line 5
        echo "    <th>Name</th>
    ";
        // line 6
        $this->displayParentBlock("th", $context, $blocks);
        echo "
";
        
        $__internal_131669eb137f43491526f673f1a39d6cc0fea0261fbded781523dc20ddb8a449->leave($__internal_131669eb137f43491526f673f1a39d6cc0fea0261fbded781523dc20ddb8a449_prof);

    }

    // line 8
    public function block_tr($context, array $blocks = array())
    {
        $__internal_a8e9ae48348b57a86dc22aa7a3a838df82ec6c9d7273d8fb9899f6ee6011c69c = $this->env->getExtension("native_profiler");
        $__internal_a8e9ae48348b57a86dc22aa7a3a838df82ec6c9d7273d8fb9899f6ee6011c69c->enter($__internal_a8e9ae48348b57a86dc22aa7a3a838df82ec6c9d7273d8fb9899f6ee6011c69c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tr"));

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
        
        $__internal_a8e9ae48348b57a86dc22aa7a3a838df82ec6c9d7273d8fb9899f6ee6011c69c->leave($__internal_a8e9ae48348b57a86dc22aa7a3a838df82ec6c9d7273d8fb9899f6ee6011c69c_prof);

    }

    public function getTemplateName()
    {
        return "@LLCore/menu/menu-list.html.twig";
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
