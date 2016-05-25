<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_127c4c8cc2932436e74903d10d1bf2771692e72428e6dcd0a436314581e8e131 extends Twig_Template
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
        $__internal_105f47f93fb843e4bad41d7d7ac88bda8bdc1cd6ce79863192fa3e4b1507b975 = $this->env->getExtension("native_profiler");
        $__internal_105f47f93fb843e4bad41d7d7ac88bda8bdc1cd6ce79863192fa3e4b1507b975->enter($__internal_105f47f93fb843e4bad41d7d7ac88bda8bdc1cd6ce79863192fa3e4b1507b975_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_105f47f93fb843e4bad41d7d7ac88bda8bdc1cd6ce79863192fa3e4b1507b975->leave($__internal_105f47f93fb843e4bad41d7d7ac88bda8bdc1cd6ce79863192fa3e4b1507b975_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($compound): ?>*/
/* <?php echo $view['form']->block($form, 'form_widget_compound')?>*/
/* <?php else: ?>*/
/* <?php echo $view['form']->block($form, 'form_widget_simple')?>*/
/* <?php endif ?>*/
/* */
