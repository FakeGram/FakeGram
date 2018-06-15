<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_0dc870784228818e2e863fc6c2044b4fc5e428ce9775aa67fee4930c6a2a2e7d extends Twig_Template
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
        $__internal_4fde32b3e6547c2711521bd890f27119150630b7fed1a9637bd5ebeeaa72c7da = $this->env->getExtension("native_profiler");
        $__internal_4fde32b3e6547c2711521bd890f27119150630b7fed1a9637bd5ebeeaa72c7da->enter($__internal_4fde32b3e6547c2711521bd890f27119150630b7fed1a9637bd5ebeeaa72c7da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_4fde32b3e6547c2711521bd890f27119150630b7fed1a9637bd5ebeeaa72c7da->leave($__internal_4fde32b3e6547c2711521bd890f27119150630b7fed1a9637bd5ebeeaa72c7da_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (count($errors) > 0): ?>*/
/*     <ul>*/
/*         <?php foreach ($errors as $error): ?>*/
/*             <li><?php echo $error->getMessage() ?></li>*/
/*         <?php endforeach; ?>*/
/*     </ul>*/
/* <?php endif ?>*/
/* */
