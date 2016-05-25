<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_e198bbe4d6fbf45751d9f8666c2c0fe263e98c7e675e839015d6172bec364af5 extends Twig_Template
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
        $__internal_a5369ba773d2fb7a50327c7eac8fc58213a2ec5916e4b78f98c96076058ef796 = $this->env->getExtension("native_profiler");
        $__internal_a5369ba773d2fb7a50327c7eac8fc58213a2ec5916e4b78f98c96076058ef796->enter($__internal_a5369ba773d2fb7a50327c7eac8fc58213a2ec5916e4b78f98c96076058ef796_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_a5369ba773d2fb7a50327c7eac8fc58213a2ec5916e4b78f98c96076058ef796->leave($__internal_a5369ba773d2fb7a50327c7eac8fc58213a2ec5916e4b78f98c96076058ef796_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($expanded): ?>*/
/* <?php echo $view['form']->block($form, 'choice_widget_expanded') ?>*/
/* <?php else: ?>*/
/* <?php echo $view['form']->block($form, 'choice_widget_collapsed') ?>*/
/* <?php endif ?>*/
/* */
