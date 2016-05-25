<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_005b345eb6c1fadb6c0ff6b246584dca0452204a87f7f840cf1270136100eaaf extends Twig_Template
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
        $__internal_ff5b857bed521a032583c10800c986feb1cf58fc2545b4bf8c806ff2de16f4a4 = $this->env->getExtension("native_profiler");
        $__internal_ff5b857bed521a032583c10800c986feb1cf58fc2545b4bf8c806ff2de16f4a4->enter($__internal_ff5b857bed521a032583c10800c986feb1cf58fc2545b4bf8c806ff2de16f4a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_ff5b857bed521a032583c10800c986feb1cf58fc2545b4bf8c806ff2de16f4a4->leave($__internal_ff5b857bed521a032583c10800c986feb1cf58fc2545b4bf8c806ff2de16f4a4_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php echo $view['form']->start($form) ?>*/
/*     <?php echo $view['form']->widget($form) ?>*/
/* <?php echo $view['form']->end($form) ?>*/
/* */
