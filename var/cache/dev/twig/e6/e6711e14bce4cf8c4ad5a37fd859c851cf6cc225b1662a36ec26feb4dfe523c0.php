<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_19533601cd7f5a8eadcdfd8b74fad75cf3e2d7096c0719d9898864ebb11a6ba3 extends Twig_Template
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
        $__internal_d32b22faf6b656520650bf5cc5b03a67e5b9caef42f825a47c8d6d895aeb2195 = $this->env->getExtension("native_profiler");
        $__internal_d32b22faf6b656520650bf5cc5b03a67e5b9caef42f825a47c8d6d895aeb2195->enter($__internal_d32b22faf6b656520650bf5cc5b03a67e5b9caef42f825a47c8d6d895aeb2195_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_d32b22faf6b656520650bf5cc5b03a67e5b9caef42f825a47c8d6d895aeb2195->leave($__internal_d32b22faf6b656520650bf5cc5b03a67e5b9caef42f825a47c8d6d895aeb2195_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="checkbox"*/
/*     <?php echo $view['form']->block($form, 'widget_attributes') ?>*/
/*     <?php if (strlen($value) > 0): ?> value="<?php echo $view->escape($value) ?>"<?php endif ?>*/
/*     <?php if ($checked): ?> checked="checked"<?php endif ?>*/
/* />*/
/* */
