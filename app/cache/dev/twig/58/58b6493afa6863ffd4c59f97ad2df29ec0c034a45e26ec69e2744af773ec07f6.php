<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_76eea61f173fb4e4141efc796108bb02794097b6719f2d21dd3b04cfee3d33f1 extends Twig_Template
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
        $__internal_3e57fac428fb6abed8583ac17386b5d6b3161f14c1923a326fe692166f5d93cf = $this->env->getExtension("native_profiler");
        $__internal_3e57fac428fb6abed8583ac17386b5d6b3161f14c1923a326fe692166f5d93cf->enter($__internal_3e57fac428fb6abed8583ac17386b5d6b3161f14c1923a326fe692166f5d93cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_3e57fac428fb6abed8583ac17386b5d6b3161f14c1923a326fe692166f5d93cf->leave($__internal_3e57fac428fb6abed8583ac17386b5d6b3161f14c1923a326fe692166f5d93cf_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (count($errors) > 0): ?>*/
/*     <ul>*/
/*         <?php foreach ($errors as $error): ?>*/
/*             <li><?php echo $error->getMessage() ?></li>*/
/*         <?php endforeach; ?>*/
/*     </ul>*/
/* <?php endif ?>*/
/* */
