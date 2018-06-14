<?php

/* @Framework/Form/choice_attributes.html.php */
class __TwigTemplate_f8bd2b2345fccfb00ca43537fec8be59e1771534534439cc46d739f239eb72e3 extends Twig_Template
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
        $__internal_10570cf3ee821693f773c6c92ceaa22781abbeea46c3d0e0dad3f3e9c1c73497 = $this->env->getExtension("native_profiler");
        $__internal_10570cf3ee821693f773c6c92ceaa22781abbeea46c3d0e0dad3f3e9c1c73497->enter($__internal_10570cf3ee821693f773c6c92ceaa22781abbeea46c3d0e0dad3f3e9c1c73497_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        // line 1
        echo "id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"
<?php if (\$disabled): ?>disabled=\"disabled\" <?php endif ?>
<?php foreach (\$choice_attr as \$k => \$v): ?>
<?php if (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
";
        
        $__internal_10570cf3ee821693f773c6c92ceaa22781abbeea46c3d0e0dad3f3e9c1c73497->leave($__internal_10570cf3ee821693f773c6c92ceaa22781abbeea46c3d0e0dad3f3e9c1c73497_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_attributes.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* id="<?php echo $view->escape($id) ?>" name="<?php echo $view->escape($full_name) ?>"*/
/* <?php if ($disabled): ?>disabled="disabled" <?php endif ?>*/
/* <?php foreach ($choice_attr as $k => $v): ?>*/
/* <?php if ($v === true): ?>*/
/* <?php printf('%s="%s" ', $view->escape($k), $view->escape($k)) ?>*/
/* <?php elseif ($v !== false): ?>*/
/* <?php printf('%s="%s" ', $view->escape($k), $view->escape($v)) ?>*/
/* <?php endif ?>*/
/* <?php endforeach ?>*/
/* */
