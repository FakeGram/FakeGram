<?php

/* ImgOperations/image_upload.html */
class __TwigTemplate_b0b868913dba924705f5e3e3d064caa0355dfc778f2c69ee4eacc91cff3c84ac extends Twig_Template
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
        $__internal_5e13fab041a0513667570c552fad5677ca93c734929dd29c827c10a7c84dc0f2 = $this->env->getExtension("native_profiler");
        $__internal_5e13fab041a0513667570c552fad5677ca93c734929dd29c827c10a7c84dc0f2->enter($__internal_5e13fab041a0513667570c552fad5677ca93c734929dd29c827c10a7c84dc0f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ImgOperations/image_upload.html"));

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

<div class=\"container-fluid\">
      <div class=\"panel panel-default\">
        <div class=\"panel-heading\"><strong>Upload Files</strong></div>
        <div class=\"panel-body\">

          <!-- Standar Form -->
          <h4>Select files from your computer</h4>
          <form action=\"/pic_upload\" method=\"post\" enctype=\"multipart/form-data\">
            <div class=\"form-inline\">
              <div class=\"form-group\">
                <input type=\"file\" name=\"img\" id=\"js-upload-files\" accept=\"image/jpeg\">
              </div>
              <div class=\"pic_description\">
                <input type=\"text\" name=\"desc\" id=\"pic_desc\">
              </div>
              <button type=\"submit\" class=\"btn btn-sm btn-primary\" id=\"js-upload-submit\">Upload files</button>
              <div><input type=\"submit\" value=\"Wyślij\" /></div>
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
        
        $__internal_5e13fab041a0513667570c552fad5677ca93c734929dd29c827c10a7c84dc0f2->leave($__internal_5e13fab041a0513667570c552fad5677ca93c734929dd29c827c10a7c84dc0f2_prof);

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
/* */
/* <div class="container-fluid">*/
/*       <div class="panel panel-default">*/
/*         <div class="panel-heading"><strong>Upload Files</strong></div>*/
/*         <div class="panel-body">*/
/* */
/*           <!-- Standar Form -->*/
/*           <h4>Select files from your computer</h4>*/
/*           <form action="/pic_upload" method="post" enctype="multipart/form-data">*/
/*             <div class="form-inline">*/
/*               <div class="form-group">*/
/*                 <input type="file" name="img" id="js-upload-files" accept="image/jpeg">*/
/*               </div>*/
/*               <div class="pic_description">*/
/*                 <input type="text" name="desc" id="pic_desc">*/
/*               </div>*/
/*               <button type="submit" class="btn btn-sm btn-primary" id="js-upload-submit">Upload files</button>*/
/*               <div><input type="submit" value="Wyślij" /></div>*/
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
