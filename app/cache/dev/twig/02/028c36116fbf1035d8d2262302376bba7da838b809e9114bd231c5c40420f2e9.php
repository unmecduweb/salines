<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_e21f586b30fa8b4dc8bf2c1e8db3bf825309c23dfed1e545626e6c046482c18e extends Twig_Template
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
        $__internal_8d556be1a1c2888b414dab4e0e5cc21af5a51648583a10609894e4581782736b = $this->env->getExtension("native_profiler");
        $__internal_8d556be1a1c2888b414dab4e0e5cc21af5a51648583a10609894e4581782736b->enter($__internal_8d556be1a1c2888b414dab4e0e5cc21af5a51648583a10609894e4581782736b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_8d556be1a1c2888b414dab4e0e5cc21af5a51648583a10609894e4581782736b->leave($__internal_8d556be1a1c2888b414dab4e0e5cc21af5a51648583a10609894e4581782736b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <textarea <?php echo $view['form']->block($form, 'widget_attributes') ?>><?php echo $view->escape($value) ?></textarea>*/
/* */
