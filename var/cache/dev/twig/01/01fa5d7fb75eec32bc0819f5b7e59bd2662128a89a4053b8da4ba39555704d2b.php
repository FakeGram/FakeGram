<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_20cb405898d7a71ad4bacf9f75d3f4f93a3d8e53c2f90404c14b55067fb26bfc extends Twig_Template
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
        $__internal_47a0633a2d2cf50d48f441128bfe7df9503bc092bf8347c9c71cd0c49c43ae53 = $this->env->getExtension("native_profiler");
        $__internal_47a0633a2d2cf50d48f441128bfe7df9503bc092bf8347c9c71cd0c49c43ae53->enter($__internal_47a0633a2d2cf50d48f441128bfe7df9503bc092bf8347c9c71cd0c49c43ae53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        // line 1
        echo "<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
";
        
        $__internal_47a0633a2d2cf50d48f441128bfe7df9503bc092bf8347c9c71cd0c49c43ae53->leave($__internal_47a0633a2d2cf50d48f441128bfe7df9503bc092bf8347c9c71cd0c49c43ae53_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <table <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*     <?php if (!$form->parent && $errors): ?>*/
/*     <tr>*/
/*         <td colspan="2">*/
/*             <?php echo $view['form']->errors($form) ?>*/
/*         </td>*/
/*     </tr>*/
/*     <?php endif ?>*/
/*     <?php echo $view['form']->block($form, 'form_rows') ?>*/
/*     <?php echo $view['form']->rest($form) ?>*/
/* </table>*/
/* */
