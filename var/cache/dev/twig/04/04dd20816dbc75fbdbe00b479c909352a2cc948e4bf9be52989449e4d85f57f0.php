<?php

/* ImgOperations/image_upload.html */
class __TwigTemplate_66c24ac42568412c47014852d3702d2cabb3590bd1e1595a435e1a826e042002 extends Twig_Template
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
        $__internal_c161924188ee36fcd1cf91677a28a2989f15324acb2c62e5f84bd2f4b800f9ff = $this->env->getExtension("native_profiler");
        $__internal_c161924188ee36fcd1cf91677a28a2989f15324acb2c62e5f84bd2f4b800f9ff->enter($__internal_c161924188ee36fcd1cf91677a28a2989f15324acb2c62e5f84bd2f4b800f9ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ImgOperations/image_upload.html"));

        // line 1
        echo "<html>
  <head>
  <!--<link rel=\"stylesheet\" href=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/css/bootstrap.min.css"), "html", null, true);
        echo "\" />
  <script src=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/js/jquery.min.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>-->
  

  <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\">
  <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js\"></script>
  <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\"></script>
  <link rel=\"stylesheet\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/css/image_upload.css"), "html", null, true);
        echo "\" />
  
  </head>
  <body>

    <div class=\"container-fluid\">
        <div class=\"tile\">

         
            <form action=\"/pic_upload\" method=\"post\" enctype=\"multipart/form-data\">
                <div class=\"custom-file\">
                  <input type=\"file\" name=\"img\" id=\"js-upload-files\" accept=\"image/jpeg\" class=\"form-control\" required>
                  <label class=\"custom-file-label\" for=\"validatedCustomFile\">Choose file...</label>
                </div>
                <div class=\"pic_description\">
                  <input type=\"text\" name=\"desc\" id=\"pic_desc\" class=\"form-control\">
                </div>
                <button type=\"submit\" class=\"btn btn-sm btn-primary\" id=\"js-upload-submit\">Upload files</button>
            </form>
   

        </div>
      </div> <!-- /container -->

  </body>
  <script type=\"text/javascript\">
  </script>
</html>";
        
        $__internal_c161924188ee36fcd1cf91677a28a2989f15324acb2c62e5f84bd2f4b800f9ff->leave($__internal_c161924188ee36fcd1cf91677a28a2989f15324acb2c62e5f84bd2f4b800f9ff_prof);

    }

    public function getTemplateName()
    {
        return "ImgOperations/image_upload.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 11,  34 => 5,  30 => 4,  26 => 3,  22 => 1,);
    }
}
/* <html>*/
/*   <head>*/
/*   <!--<link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}" />*/
/*   <script src="{{ asset('assets/js/jquery.min.js') }}"></script>*/
/*   <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>-->*/
/*   */
/* */
/*   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">*/
/*   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>*/
/*   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>*/
/*   <link rel="stylesheet" href="{{ asset('assets/css/image_upload.css') }}" />*/
/*   */
/*   </head>*/
/*   <body>*/
/* */
/*     <div class="container-fluid">*/
/*         <div class="tile">*/
/* */
/*          */
/*             <form action="/pic_upload" method="post" enctype="multipart/form-data">*/
/*                 <div class="custom-file">*/
/*                   <input type="file" name="img" id="js-upload-files" accept="image/jpeg" class="form-control" required>*/
/*                   <label class="custom-file-label" for="validatedCustomFile">Choose file...</label>*/
/*                 </div>*/
/*                 <div class="pic_description">*/
/*                   <input type="text" name="desc" id="pic_desc" class="form-control">*/
/*                 </div>*/
/*                 <button type="submit" class="btn btn-sm btn-primary" id="js-upload-submit">Upload files</button>*/
/*             </form>*/
/*    */
/* */
/*         </div>*/
/*       </div> <!-- /container -->*/
/* */
/*   </body>*/
/*   <script type="text/javascript">*/
/*   </script>*/
/* </html>*/
