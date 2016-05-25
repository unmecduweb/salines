<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_dabef70f5d4d23d808b335b2aa15710b31ebf10074887009cfdc319d01659ef6 extends Twig_Template
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
        $__internal_b8edbcab85b350a0ce65ffea02585f7e057df686310f52f58a183847c8effd54 = $this->env->getExtension("native_profiler");
        $__internal_b8edbcab85b350a0ce65ffea02585f7e057df686310f52f58a183847c8effd54->enter($__internal_b8edbcab85b350a0ce65ffea02585f7e057df686310f52f58a183847c8effd54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_b8edbcab85b350a0ce65ffea02585f7e057df686310f52f58a183847c8effd54->leave($__internal_b8edbcab85b350a0ce65ffea02585f7e057df686310f52f58a183847c8effd54_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div>*/
/*     <?php echo $view['form']->label($form) ?>*/
/*     <?php echo $view['form']->errors($form) ?>*/
/*     <?php echo $view['form']->widget($form) ?>*/
/* </div>*/
/* */
