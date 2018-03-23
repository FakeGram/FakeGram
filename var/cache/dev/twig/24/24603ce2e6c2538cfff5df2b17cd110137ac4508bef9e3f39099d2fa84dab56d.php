<?php

/* test.html */
class __TwigTemplate_7114d38288b84f19df33e102b8d0485f7c6cfd22f3b4cc2a92809e442faec418 extends Twig_Template
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
        $__internal_b0e6a8b25b1e28592c372f9110627c56a1c8b34f52d80dea77aa65557f86fbf1 = $this->env->getExtension("native_profiler");
        $__internal_b0e6a8b25b1e28592c372f9110627c56a1c8b34f52d80dea77aa65557f86fbf1->enter($__internal_b0e6a8b25b1e28592c372f9110627c56a1c8b34f52d80dea77aa65557f86fbf1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "test.html"));

        // line 1
        echo "<html>
\t<head>
\t<link rel=\"stylesheet\" href=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/css/bootstrap.min.css"), "html", null, true);
        echo "\" />
\t<script src=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/js/jquery.min.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
\t</head>
\t<body>
\t\t<h1>";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["number"]) ? $context["number"] : $this->getContext($context, "number")), "html", null, true);
        echo "</h1>
\t\t<div class=\"testclass col-lg-6\">aaa</div><div id=\"testid\" class=\"col-lg-6\">aaa</div>
\t</body>
\t<script>
\t\t\$(document).ready(function(){
\t\t\$(\"#testid\").html(\"testid\");
\t\t\$('.testclass').html(\"testclass\");
\t\t//alert(\"works!\");
\t\tdocument.getElementById(\"testid\").InnerHTML=\"dupa\";
\t\t});
\t</script>
</html>
";
        
        $__internal_b0e6a8b25b1e28592c372f9110627c56a1c8b34f52d80dea77aa65557f86fbf1->leave($__internal_b0e6a8b25b1e28592c372f9110627c56a1c8b34f52d80dea77aa65557f86fbf1_prof);

    }

    public function getTemplateName()
    {
        return "test.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 8,  34 => 5,  30 => 4,  26 => 3,  22 => 1,);
    }
}
/* <html>*/
/* 	<head>*/
/* 	<link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}" />*/
/* 	<script src="{{ asset('assets/js/jquery.min.js') }}"></script>*/
/* 	<script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>*/
/* 	</head>*/
/* 	<body>*/
/* 		<h1>{{number}}</h1>*/
/* 		<div class="testclass col-lg-6">aaa</div><div id="testid" class="col-lg-6">aaa</div>*/
/* 	</body>*/
/* 	<script>*/
/* 		$(document).ready(function(){*/
/* 		$("#testid").html("testid");*/
/* 		$('.testclass').html("testclass");*/
/* 		//alert("works!");*/
/* 		document.getElementById("testid").InnerHTML="dupa";*/
/* 		});*/
/* 	</script>*/
/* </html>*/
/* */
