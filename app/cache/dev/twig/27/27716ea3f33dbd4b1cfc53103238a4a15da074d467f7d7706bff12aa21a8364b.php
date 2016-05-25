<?php

/* @IvoryCKEditor/Form/ckeditor_widget.html.php */
class __TwigTemplate_b612d82f03e446c23900bc257e5c88a715c80513273286e7a66fb86a972db199 extends Twig_Template
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
        $__internal_85cd4c96d701c6632898741efeb0fdecb1a3c2cb388603a2d20e3f4871a68627 = $this->env->getExtension("native_profiler");
        $__internal_85cd4c96d701c6632898741efeb0fdecb1a3c2cb388603a2d20e3f4871a68627->enter($__internal_85cd4c96d701c6632898741efeb0fdecb1a3c2cb388603a2d20e3f4871a68627_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@IvoryCKEditor/Form/ckeditor_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'attributes') ?>><?php echo htmlspecialchars(\$value) ?></textarea>

<?php if (\$enable) : ?>
    <?php if (\$autoload) : ?>
        <script type=\"text/javascript\">
            var CKEDITOR_BASEPATH = \"<?php echo \$view['ivory_ckeditor']->renderBasePath(\$base_path); ?>\";
        </script>
        <script type=\"text/javascript\" src=\"<?php echo \$view['ivory_ckeditor']->renderJsPath(\$js_path); ?>\"></script>
    <?php endif; ?>
    <script type=\"text/javascript\">
        <?php echo \$view['ivory_ckeditor']->renderDestroy(\$id); ?>

        <?php foreach (\$plugins as \$pluginName => \$plugin): ?>
            <?php echo \$view['ivory_ckeditor']->renderPlugin(\$pluginName, \$plugin); ?>
        <?php endforeach; ?>

        <?php foreach (\$styles as \$styleName => \$style): ?>
            <?php echo \$view['ivory_ckeditor']->renderStylesSet(\$styleName, \$style); ?>
        <?php endforeach; ?>

        <?php foreach (\$templates as \$templateName => \$template): ?>
            <?php echo \$view['ivory_ckeditor']->renderTemplate(\$templateName, \$template); ?>
        <?php endforeach; ?>

        <?php echo \$view['ivory_ckeditor']->renderReplace(\$id, \$config); ?>
    </script>
<?php endif; ?>
";
        
        $__internal_85cd4c96d701c6632898741efeb0fdecb1a3c2cb388603a2d20e3f4871a68627->leave($__internal_85cd4c96d701c6632898741efeb0fdecb1a3c2cb388603a2d20e3f4871a68627_prof);

    }

    public function getTemplateName()
    {
        return "@IvoryCKEditor/Form/ckeditor_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <textarea <?php echo $view['form']->block($form, 'attributes') ?>><?php echo htmlspecialchars($value) ?></textarea>*/
/* */
/* <?php if ($enable) : ?>*/
/*     <?php if ($autoload) : ?>*/
/*         <script type="text/javascript">*/
/*             var CKEDITOR_BASEPATH = "<?php echo $view['ivory_ckeditor']->renderBasePath($base_path); ?>";*/
/*         </script>*/
/*         <script type="text/javascript" src="<?php echo $view['ivory_ckeditor']->renderJsPath($js_path); ?>"></script>*/
/*     <?php endif; ?>*/
/*     <script type="text/javascript">*/
/*         <?php echo $view['ivory_ckeditor']->renderDestroy($id); ?>*/
/* */
/*         <?php foreach ($plugins as $pluginName => $plugin): ?>*/
/*             <?php echo $view['ivory_ckeditor']->renderPlugin($pluginName, $plugin); ?>*/
/*         <?php endforeach; ?>*/
/* */
/*         <?php foreach ($styles as $styleName => $style): ?>*/
/*             <?php echo $view['ivory_ckeditor']->renderStylesSet($styleName, $style); ?>*/
/*         <?php endforeach; ?>*/
/* */
/*         <?php foreach ($templates as $templateName => $template): ?>*/
/*             <?php echo $view['ivory_ckeditor']->renderTemplate($templateName, $template); ?>*/
/*         <?php endforeach; ?>*/
/* */
/*         <?php echo $view['ivory_ckeditor']->renderReplace($id, $config); ?>*/
/*     </script>*/
/* <?php endif; ?>*/
/* */
