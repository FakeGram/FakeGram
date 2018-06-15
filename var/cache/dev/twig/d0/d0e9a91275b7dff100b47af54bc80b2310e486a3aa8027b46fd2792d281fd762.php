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
        $__internal_89a2896d9f260e5c1ba6b62d944cdbaf6eaf82147bdfa225e7b0340330a5ed0f = $this->env->getExtension("native_profiler");
        $__internal_89a2896d9f260e5c1ba6b62d944cdbaf6eaf82147bdfa225e7b0340330a5ed0f->enter($__internal_89a2896d9f260e5c1ba6b62d944cdbaf6eaf82147bdfa225e7b0340330a5ed0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

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
        
        $__internal_89a2896d9f260e5c1ba6b62d944cdbaf6eaf82147bdfa225e7b0340330a5ed0f->leave($__internal_89a2896d9f260e5c1ba6b62d944cdbaf6eaf82147bdfa225e7b0340330a5ed0f_prof);

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
