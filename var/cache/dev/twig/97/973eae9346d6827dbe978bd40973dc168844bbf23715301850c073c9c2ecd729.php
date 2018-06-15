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
        $__internal_cab55c033c92485b990888e8fb0083f60dfa852d3b752f87a5fa33c5c9a84efe = $this->env->getExtension("native_profiler");
        $__internal_cab55c033c92485b990888e8fb0083f60dfa852d3b752f87a5fa33c5c9a84efe->enter($__internal_cab55c033c92485b990888e8fb0083f60dfa852d3b752f87a5fa33c5c9a84efe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_cab55c033c92485b990888e8fb0083f60dfa852d3b752f87a5fa33c5c9a84efe->leave($__internal_cab55c033c92485b990888e8fb0083f60dfa852d3b752f87a5fa33c5c9a84efe_prof);

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
