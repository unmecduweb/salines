<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_c2d9cc259a80fe39a2b0275a50e158c866f37fdce58ff3409056e1eaffe239c7 extends Twig_Template
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
        $__internal_7f7b37f0b78db12f7d652df7483cee32da967421b16a5c0b18c987bb2773326b = $this->env->getExtension("native_profiler");
        $__internal_7f7b37f0b78db12f7d652df7483cee32da967421b16a5c0b18c987bb2773326b->enter($__internal_7f7b37f0b78db12f7d652df7483cee32da967421b16a5c0b18c987bb2773326b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_7f7b37f0b78db12f7d652df7483cee32da967421b16a5c0b18c987bb2773326b->leave($__internal_7f7b37f0b78db12f7d652df7483cee32da967421b16a5c0b18c987bb2773326b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/datetime_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($widget == 'single_text'): ?>*/
/*     <?php echo $view['form']->block($form, 'form_widget_simple'); ?>*/
/* <?php else: ?>*/
/*     <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*         <?php echo $view['form']->widget($form['date']).' '.$view['form']->widget($form['time']) ?>*/
/*     </div>*/
/* <?php endif ?>*/
/* */
