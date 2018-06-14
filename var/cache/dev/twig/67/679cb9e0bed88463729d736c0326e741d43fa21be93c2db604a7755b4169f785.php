<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_7b7a2e04eb7279cd038c46edac4ce22eb91eef61025449d54d558136e6074a2b extends Twig_Template
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
        $__internal_0a876fab9bd5a274a3829e80c6bd2fba8d0d880406b086d484813effe79fe298 = $this->env->getExtension("native_profiler");
        $__internal_0a876fab9bd5a274a3829e80c6bd2fba8d0d880406b086d484813effe79fe298->enter($__internal_0a876fab9bd5a274a3829e80c6bd2fba8d0d880406b086d484813effe79fe298_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_0a876fab9bd5a274a3829e80c6bd2fba8d0d880406b086d484813effe79fe298->leave($__internal_0a876fab9bd5a274a3829e80c6bd2fba8d0d880406b086d484813effe79fe298_prof);

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
