<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_a879f67a3b9b52b23759e467fc03a9ec727962128be312d3a57f67f9c79769d4 extends Twig_Template
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
        $__internal_b4e82166bad0b7672a1988c3367fda5761d949bac4a64b20cad8198fe1f9072a = $this->env->getExtension("native_profiler");
        $__internal_b4e82166bad0b7672a1988c3367fda5761d949bac4a64b20cad8198fe1f9072a->enter($__internal_b4e82166bad0b7672a1988c3367fda5761d949bac4a64b20cad8198fe1f9072a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_b4e82166bad0b7672a1988c3367fda5761d949bac4a64b20cad8198fe1f9072a->leave($__internal_b4e82166bad0b7672a1988c3367fda5761d949bac4a64b20cad8198fe1f9072a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php foreach ($form as $child): ?>*/
/*     <?php if (!$child->isRendered()): ?>*/
/*         <?php echo $view['form']->row($child) ?>*/
/*     <?php endif; ?>*/
/* <?php endforeach; ?>*/
/* */
