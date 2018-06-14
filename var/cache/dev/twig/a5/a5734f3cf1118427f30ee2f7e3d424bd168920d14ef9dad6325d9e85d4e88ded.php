<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_5a8857451985da65b72e84a2f0188a47e065792d24409a8802ed4e617337e19b extends Twig_Template
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
        $__internal_5facfc86c6ff6faf17c378ef050ba56d5faeb3a141ce4b410161e77eea326558 = $this->env->getExtension("native_profiler");
        $__internal_5facfc86c6ff6faf17c378ef050ba56d5faeb3a141ce4b410161e77eea326558->enter($__internal_5facfc86c6ff6faf17c378ef050ba56d5faeb3a141ce4b410161e77eea326558_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, (isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_5facfc86c6ff6faf17c378ef050ba56d5faeb3a141ce4b410161e77eea326558->leave($__internal_5facfc86c6ff6faf17c378ef050ba56d5faeb3a141ce4b410161e77eea326558_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/money_widget.html.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php echo str_replace('{{ widget }}', $view['form']->block($form, 'form_widget_simple'), $money_pattern) ?>*/
/* */
