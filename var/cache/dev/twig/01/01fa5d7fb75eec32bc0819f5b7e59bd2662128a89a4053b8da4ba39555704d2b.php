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
        $__internal_ccdeefeda834e7842790349b5d3802796e11a4581e3818aba1947bcc4aae25c2 = $this->env->getExtension("native_profiler");
        $__internal_ccdeefeda834e7842790349b5d3802796e11a4581e3818aba1947bcc4aae25c2->enter($__internal_ccdeefeda834e7842790349b5d3802796e11a4581e3818aba1947bcc4aae25c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

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
        
        $__internal_ccdeefeda834e7842790349b5d3802796e11a4581e3818aba1947bcc4aae25c2->leave($__internal_ccdeefeda834e7842790349b5d3802796e11a4581e3818aba1947bcc4aae25c2_prof);

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
