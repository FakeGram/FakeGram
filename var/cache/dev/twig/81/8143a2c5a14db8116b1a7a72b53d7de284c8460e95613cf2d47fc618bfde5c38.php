<?php

/* image_upload.html */
class __TwigTemplate_5d69b57de7e8fe86c546ddaabc67111902179d91c6830bd77cd8f658ccc3c566 extends Twig_Template
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
        $__internal_bdb638d26dcefb03bce668b80f4b348a2508ae6fb2803690ee04f0fb2164439b = $this->env->getExtension("native_profiler");
        $__internal_bdb638d26dcefb03bce668b80f4b348a2508ae6fb2803690ee04f0fb2164439b->enter($__internal_bdb638d26dcefb03bce668b80f4b348a2508ae6fb2803690ee04f0fb2164439b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "image_upload.html"));

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

  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
  <link rel=\"stylesheet\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/css/header_and_footer.css"), "html", null, true);
        echo "\" />
  <link rel=\"stylesheet\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/css/image_upload.css"), "html", null, true);
        echo "\" />
  </head>
  <body>
  <!-- HEADER potem do innego pliku wyjebać -->
  <nav class=\"navbar navbar-default\">
    <div class=\"container-fluid\">
      <div class=\"navbar-header\">
        <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#myNavbar\">
          <span class=\"icon-bar\"></span>
          <span class=\"icon-bar\"></span>
          <span class=\"icon-bar\"></span> 
        </button>
        <a class=\"navbar-brand\" href=\"#\"><div class=\"logo\">FakeGram</div></a>
      </div>
      <div class=\"collapse navbar-collapse\" id=\"myNavbar\">
        <ul class=\"nav navbar-nav navbar-right\">
          <li><a href=\"#\"><span class=\"glyphicon glyphicon-user\"></span> Sign Up</a></li>
          <li><a href=\"#\"><span class=\"glyphicon glyphicon-log-in\"></span> Login</a></li>
        </ul>
        <ul class=\"nav navbar-nav navbar-right nav-pages\">
          <li class=\"active\"><a href=\"#\">Home</a></li>
          <li><a href=\"#\">Page 1</a></li>
          <li><a href=\"#\">Page 2</a></li> 
          <li><a href=\"#\">Page 3</a></li> 
        </ul>
      </div>
    </div>
  </nav>
  <!-- |||||||||||||||||||||||||||||||||||| -->

<div class=\"container-fluid\">
      <div class=\"panel panel-default\">
        <div class=\"panel-heading\"><strong>Upload Files</strong> <small>Bootstrap files upload</small></div>
        <div class=\"panel-body\">

          <!-- Standar Form -->
          <h4>Select files from your computer</h4>
          <form action=\"\" method=\"post\" enctype=\"multipart/form-data\" id=\"js-upload-form\">
            <div class=\"form-inline\">
              <div class=\"form-group\">
                <input type=\"file\" name=\"files[]\" id=\"js-upload-files\" multiple>
              </div>
              <button type=\"submit\" class=\"btn btn-sm btn-primary\" id=\"js-upload-submit\">Upload files</button>
            </div>
          </form>

          <!-- Drop Zone -->
          <h4>Or drag and drop files below</h4>
          <div class=\"upload-drop-zone\" id=\"drop-zone\">
            Just drag and drop files here
          </div>

          <!-- Progress Bar -->
          <div class=\"progress\">
            <div class=\"progress-bar\" role=\"progressbar\" aria-valuenow=\"60\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 60%;\">
              <span class=\"sr-only\">60% Complete</span>
            </div>
          </div>

          <!-- Upload Finished -->
          <div class=\"js-upload-finished\">
            <h3>Processed files</h3>
            <div class=\"list-group\">
             <!-- <a href=\"#\" class=\"list-group-item list-group-item-success\"><span class=\"badge alert-success pull-right\">Success</span>image-01.jpg</a>
              <a href=\"#\" class=\"list-group-item list-group-item-success\"><span class=\"badge alert-success pull-right\">Success</span>image-02.jpg</a>-->
            </div>
          </div>
        </div>
      </div>
    </div> <!-- /container -->

    <!-- FOOTER potem do innego pliku wyjebać -->
    <div class=\"footer\">
      <div class=\"row\">
        <div class=\"col-lg-4 col-md-4 col-sm-4 col-xs-4\">
          <div class=\"FooterLogo\">FakeGram</div>
        </div>
        <div class=\"col-lg-4 col-md-4 col-sm-4 col-xs-4\" style=\"margin-top: 2%;\">
          <p>Projekt z przedmiotu \"systemy multimedialne\". Politechnika Śląska, Wydział Elektryczny. 2018 r.</p>
        </div>
        <div class=\"col-lg-4 col-md-4 col-sm-4 col-xs-4\">
          <ul>
            Odjebali:
            <li>Konrad Sladkowski</li>
            <li>Krzysztof Szwej</li>
            <li>Domingo Żurawski</li>
          </ul>
        </div>
      </div>
    </div>
    <!-- |||||||||||||||||||||||||||||||||||| -->
  </body>
  <script type=\"text/javascript\">
    + function(\$) {
    'use strict';

    // UPLOAD CLASS DEFINITION
    // ======================

    var dropZone = document.getElementById('drop-zone');
    var uploadForm = document.getElementById('js-upload-form');

    var startUpload = function(files) {
        console.log(files)
    }

    uploadForm.addEventListener('submit', function(e) {
        var uploadFiles = document.getElementById('js-upload-files').files;
        e.preventDefault()

        startUpload(uploadFiles)
    })

    dropZone.ondrop = function(e) {
        e.preventDefault();
        this.className = 'upload-drop-zone';

        startUpload(e.dataTransfer.files)
    }

    dropZone.ondragover = function() {
        this.className = 'upload-drop-zone drop';
        return false;
    }

    dropZone.ondragleave = function() {
        this.className = 'upload-drop-zone';
        return false;
    }

}(jQuery);
  </script>
</html>";
        
        $__internal_bdb638d26dcefb03bce668b80f4b348a2508ae6fb2803690ee04f0fb2164439b->leave($__internal_bdb638d26dcefb03bce668b80f4b348a2508ae6fb2803690ee04f0fb2164439b_prof);

    }

    public function getTemplateName()
    {
        return "image_upload.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 14,  45 => 13,  34 => 5,  30 => 4,  26 => 3,  22 => 1,);
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
/* */
/*   <meta name="viewport" content="width=device-width, initial-scale=1">*/
/*   <link rel="stylesheet" href="{{ asset('assets/css/header_and_footer.css') }}" />*/
/*   <link rel="stylesheet" href="{{ asset('assets/css/image_upload.css') }}" />*/
/*   </head>*/
/*   <body>*/
/*   <!-- HEADER potem do innego pliku wyjebać -->*/
/*   <nav class="navbar navbar-default">*/
/*     <div class="container-fluid">*/
/*       <div class="navbar-header">*/
/*         <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">*/
/*           <span class="icon-bar"></span>*/
/*           <span class="icon-bar"></span>*/
/*           <span class="icon-bar"></span> */
/*         </button>*/
/*         <a class="navbar-brand" href="#"><div class="logo">FakeGram</div></a>*/
/*       </div>*/
/*       <div class="collapse navbar-collapse" id="myNavbar">*/
/*         <ul class="nav navbar-nav navbar-right">*/
/*           <li><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>*/
/*           <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>*/
/*         </ul>*/
/*         <ul class="nav navbar-nav navbar-right nav-pages">*/
/*           <li class="active"><a href="#">Home</a></li>*/
/*           <li><a href="#">Page 1</a></li>*/
/*           <li><a href="#">Page 2</a></li> */
/*           <li><a href="#">Page 3</a></li> */
/*         </ul>*/
/*       </div>*/
/*     </div>*/
/*   </nav>*/
/*   <!-- |||||||||||||||||||||||||||||||||||| -->*/
/* */
/* <div class="container-fluid">*/
/*       <div class="panel panel-default">*/
/*         <div class="panel-heading"><strong>Upload Files</strong> <small>Bootstrap files upload</small></div>*/
/*         <div class="panel-body">*/
/* */
/*           <!-- Standar Form -->*/
/*           <h4>Select files from your computer</h4>*/
/*           <form action="" method="post" enctype="multipart/form-data" id="js-upload-form">*/
/*             <div class="form-inline">*/
/*               <div class="form-group">*/
/*                 <input type="file" name="files[]" id="js-upload-files" multiple>*/
/*               </div>*/
/*               <button type="submit" class="btn btn-sm btn-primary" id="js-upload-submit">Upload files</button>*/
/*             </div>*/
/*           </form>*/
/* */
/*           <!-- Drop Zone -->*/
/*           <h4>Or drag and drop files below</h4>*/
/*           <div class="upload-drop-zone" id="drop-zone">*/
/*             Just drag and drop files here*/
/*           </div>*/
/* */
/*           <!-- Progress Bar -->*/
/*           <div class="progress">*/
/*             <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;">*/
/*               <span class="sr-only">60% Complete</span>*/
/*             </div>*/
/*           </div>*/
/* */
/*           <!-- Upload Finished -->*/
/*           <div class="js-upload-finished">*/
/*             <h3>Processed files</h3>*/
/*             <div class="list-group">*/
/*              <!-- <a href="#" class="list-group-item list-group-item-success"><span class="badge alert-success pull-right">Success</span>image-01.jpg</a>*/
/*               <a href="#" class="list-group-item list-group-item-success"><span class="badge alert-success pull-right">Success</span>image-02.jpg</a>-->*/
/*             </div>*/
/*           </div>*/
/*         </div>*/
/*       </div>*/
/*     </div> <!-- /container -->*/
/* */
/*     <!-- FOOTER potem do innego pliku wyjebać -->*/
/*     <div class="footer">*/
/*       <div class="row">*/
/*         <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">*/
/*           <div class="FooterLogo">FakeGram</div>*/
/*         </div>*/
/*         <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4" style="margin-top: 2%;">*/
/*           <p>Projekt z przedmiotu "systemy multimedialne". Politechnika Śląska, Wydział Elektryczny. 2018 r.</p>*/
/*         </div>*/
/*         <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">*/
/*           <ul>*/
/*             Odjebali:*/
/*             <li>Konrad Sladkowski</li>*/
/*             <li>Krzysztof Szwej</li>*/
/*             <li>Domingo Żurawski</li>*/
/*           </ul>*/
/*         </div>*/
/*       </div>*/
/*     </div>*/
/*     <!-- |||||||||||||||||||||||||||||||||||| -->*/
/*   </body>*/
/*   <script type="text/javascript">*/
/*     + function($) {*/
/*     'use strict';*/
/* */
/*     // UPLOAD CLASS DEFINITION*/
/*     // ======================*/
/* */
/*     var dropZone = document.getElementById('drop-zone');*/
/*     var uploadForm = document.getElementById('js-upload-form');*/
/* */
/*     var startUpload = function(files) {*/
/*         console.log(files)*/
/*     }*/
/* */
/*     uploadForm.addEventListener('submit', function(e) {*/
/*         var uploadFiles = document.getElementById('js-upload-files').files;*/
/*         e.preventDefault()*/
/* */
/*         startUpload(uploadFiles)*/
/*     })*/
/* */
/*     dropZone.ondrop = function(e) {*/
/*         e.preventDefault();*/
/*         this.className = 'upload-drop-zone';*/
/* */
/*         startUpload(e.dataTransfer.files)*/
/*     }*/
/* */
/*     dropZone.ondragover = function() {*/
/*         this.className = 'upload-drop-zone drop';*/
/*         return false;*/
/*     }*/
/* */
/*     dropZone.ondragleave = function() {*/
/*         this.className = 'upload-drop-zone';*/
/*         return false;*/
/*     }*/
/* */
/* }(jQuery);*/
/*   </script>*/
/* </html>*/
