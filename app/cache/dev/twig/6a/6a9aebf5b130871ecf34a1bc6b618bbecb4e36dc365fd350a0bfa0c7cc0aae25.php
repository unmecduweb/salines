<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_241c034ed6e5fb366fafd16bd812f7961b52f409962d3e83ed76dcc402d87c15 extends Twig_Template
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
        $__internal_b4024dd182d12fde306439a6f3644a5a2bb0f33924c5a1345a0c4bba134749ce = $this->env->getExtension("native_profiler");
        $__internal_b4024dd182d12fde306439a6f3644a5a2bb0f33924c5a1345a0c4bba134749ce->enter($__internal_b4024dd182d12fde306439a6f3644a5a2bb0f33924c5a1345a0c4bba134749ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_b4024dd182d12fde306439a6f3644a5a2bb0f33924c5a1345a0c4bba134749ce->leave($__internal_b4024dd182d12fde306439a6f3644a5a2bb0f33924c5a1345a0c4bba134749ce_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_simple.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="<?php echo isset($type) ? $view->escape($type) : 'text' ?>" <?php echo $view['form']->block($form, 'widget_attributes') ?><?php if (!empty($value) || is_numeric($value)): ?> value="<?php echo $view->escape($value) ?>"<?php endif ?> />*/
/* */
