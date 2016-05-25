<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_98cd58b9d5ba624c9a3d5692036581264d70b746cd157bc3b58db8acd81ea9c1 extends Twig_Template
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
        $__internal_ebfdd864408bd06368ba917882eb2975823206545345fc2a84b1b377c18de16d = $this->env->getExtension("native_profiler");
        $__internal_ebfdd864408bd06368ba917882eb2975823206545345fc2a84b1b377c18de16d->enter($__internal_ebfdd864408bd06368ba917882eb2975823206545345fc2a84b1b377c18de16d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_ebfdd864408bd06368ba917882eb2975823206545345fc2a84b1b377c18de16d->leave($__internal_ebfdd864408bd06368ba917882eb2975823206545345fc2a84b1b377c18de16d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (isset($prototype)): ?>*/
/*     <?php $attr['data-prototype'] = $view->escape($view['form']->row($prototype)) ?>*/
/* <?php endif ?>*/
/* <?php echo $view['form']->widget($form, array('attr' => $attr)) ?>*/
/* */
