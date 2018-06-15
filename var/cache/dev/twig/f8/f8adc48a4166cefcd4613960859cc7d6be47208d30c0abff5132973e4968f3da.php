<?php

/* @Framework/Form/button_widget.html.php */
class __TwigTemplate_4bcbef30cd010fb98b2862c59cf8f85fe24f7141efd33c1ba7e656525d1c9155 extends Twig_Template
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
        $__internal_0c57ed9aab491c16c48740848122f04bd2c1b2444c7a9d0788d5f02bf112d2b5 = $this->env->getExtension("native_profiler");
        $__internal_0c57ed9aab491c16c48740848122f04bd2c1b2444c7a9d0788d5f02bf112d2b5->enter($__internal_0c57ed9aab491c16c48740848122f04bd2c1b2444c7a9d0788d5f02bf112d2b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_0c57ed9aab491c16c48740848122f04bd2c1b2444c7a9d0788d5f02bf112d2b5->leave($__internal_0c57ed9aab491c16c48740848122f04bd2c1b2444c7a9d0788d5f02bf112d2b5_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (!$label) { $label = isset($label_format)*/
/*     ? strtr($label_format, array('%name%' => $name, '%id%' => $id))*/
/*     : $view['form']->humanize($name); } ?>*/
/* <button type="<?php echo isset($type) ? $view->escape($type) : 'button' ?>" <?php echo $view['form']->block($form, 'button_attributes') ?>><?php echo $view->escape(false !== $translation_domain ? $view['translator']->trans($label, array(), $translation_domain) : $label) ?></button>*/
/* */
