<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_123e00ec8a0480d91a5fb0c62338fbd88a6e079dafce9c9ae62a55e3462f3cf4 extends Twig_Template
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
        $__internal_0f455ea8acb138d7743832a3a7bc82ba060ddcf6b2571f1f6a5281431237a6ed = $this->env->getExtension("native_profiler");
        $__internal_0f455ea8acb138d7743832a3a7bc82ba060ddcf6b2571f1f6a5281431237a6ed->enter($__internal_0f455ea8acb138d7743832a3a7bc82ba060ddcf6b2571f1f6a5281431237a6ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, (isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_0f455ea8acb138d7743832a3a7bc82ba060ddcf6b2571f1f6a5281431237a6ed->leave($__internal_0f455ea8acb138d7743832a3a7bc82ba060ddcf6b2571f1f6a5281431237a6ed_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/money_widget.html.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php echo str_replace('{{ widget }}', $view['form']->block($form, 'form_widget_simple'), $money_pattern) ?>*/
/* */
