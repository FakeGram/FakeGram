<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_b93669170d2430e8ab1eea6c2f9633c3ac153f4229557452b5b8232a22d1913e extends Twig_Template
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
        $__internal_94b171a88fdeaeabd560ee7650b09ef5a14e1ec8001b1634cc0f26b799c820da = $this->env->getExtension("native_profiler");
        $__internal_94b171a88fdeaeabd560ee7650b09ef5a14e1ec8001b1634cc0f26b799c820da->enter($__internal_94b171a88fdeaeabd560ee7650b09ef5a14e1ec8001b1634cc0f26b799c820da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_94b171a88fdeaeabd560ee7650b09ef5a14e1ec8001b1634cc0f26b799c820da->leave($__internal_94b171a88fdeaeabd560ee7650b09ef5a14e1ec8001b1634cc0f26b799c820da_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_expanded.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/* <?php foreach ($form as $child): ?>*/
/*     <?php echo $view['form']->widget($child) ?>*/
/*     <?php echo $view['form']->label($child, null, array('translation_domain' => $choice_translation_domain)) ?>*/
/* <?php endforeach ?>*/
/* </div>*/
/* */
