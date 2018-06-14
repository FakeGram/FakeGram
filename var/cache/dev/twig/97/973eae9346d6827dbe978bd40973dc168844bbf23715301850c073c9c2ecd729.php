<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_949c1754f712685dc5cff01830a1268d3a4997692964de18948b657e34391762 extends Twig_Template
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
        $__internal_437b4ae89d346f6f894cabda18b0300b3b11f24953a9d374d71b0d9946f986a2 = $this->env->getExtension("native_profiler");
        $__internal_437b4ae89d346f6f894cabda18b0300b3b11f24953a9d374d71b0d9946f986a2->enter($__internal_437b4ae89d346f6f894cabda18b0300b3b11f24953a9d374d71b0d9946f986a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_437b4ae89d346f6f894cabda18b0300b3b11f24953a9d374d71b0d9946f986a2->leave($__internal_437b4ae89d346f6f894cabda18b0300b3b11f24953a9d374d71b0d9946f986a2_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php foreach ($form as $child) : ?>*/
/*     <?php echo $view['form']->row($child) ?>*/
/* <?php endforeach; ?>*/
/* */
