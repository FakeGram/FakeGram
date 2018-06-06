<?php

/* ImgOperations/image_edit.html.twig */
class __TwigTemplate_b4244353220f9f345ae5f4de5b110c79d587dcfdcd570c9b4fad25df645a430a extends Twig_Template
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
        $__internal_b4eea482b922b9cf35af4bb3345a7a573490d7829c0f9513f6ca9bb787795cdf = $this->env->getExtension("native_profiler");
        $__internal_b4eea482b922b9cf35af4bb3345a7a573490d7829c0f9513f6ca9bb787795cdf->enter($__internal_b4eea482b922b9cf35af4bb3345a7a573490d7829c0f9513f6ca9bb787795cdf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ImgOperations/image_edit.html.twig"));

        // line 1
        $this->loadTemplate("header.html.twig", "ImgOperations/image_edit.html.twig", 1)->display($context);
        // line 2
        echo "
        <div class=\"container-fluid\">
            <div class=\"edit_picture_tile\">
                <canvas id=\"edit_picture_cnv\" width=\"500px\" height=\"500px\" style=\"border:1px solid #000000;\"></canvas>
                <div class=\"owl-carousel owl-theme\">
                  <div class=\"effect_tile\" onclick=\"clear_effects();\"><canvas id=\"effect0_canvas\" width=\"100px\" height=\"100px\"></canvas></div>
                  <div class=\"effect_tile\" onclick=\"apply_effect1();\"><canvas id=\"effect1_canvas\" width=\"100px\" height=\"100px\"></canvas></div>
                  <div class=\"effect_tile\" onclick=\"apply_effect2();\"><canvas id=\"effect2_canvas\" width=\"100px\" height=\"100px\"></canvas></div>
                  <div class=\"effect_tile\" onclick=\"apply_effect3();\"><canvas id=\"effect3_canvas\" width=\"100px\" height=\"100px\"></canvas></div>
                  <div class=\"effect_tile\" onclick=\"apply_effect4();\"><canvas id=\"effect4_canvas\" width=\"100px\" height=\"100px\"></canvas></div>
                  <div class=\"effect_tile\" onclick=\"apply_effect5();\"><canvas id=\"effect5_canvas\" width=\"100px\" height=\"100px\"></canvas></div>
                </div>
                <button class=\"btn\" onclick=\"save();\">Save Photo</button>
            </div> 



            <!-- Useful things for js below XD -->
            <div id=\"hidden_pic_title\" style=\"display: none;\">";
        // line 20
        echo twig_escape_filter($this->env, (isset($context["pic_name"]) ? $context["pic_name"] : $this->getContext($context, "pic_name")), "html", null, true);
        echo "</div>
            <img id=\"pic_to_redraw\" style=\"display: none;\" width=\"500px\" height=\"500px\" src=\"";
        // line 21
        echo twig_escape_filter($this->env, (isset($context["pic_name"]) ? $context["pic_name"] : $this->getContext($context, "pic_name")), "html", null, true);
        echo "\" />
            <img id=\"pic_to_redraw_scale\" style=\"display: none;\" width=\"100px\" height=\"100px\" src=\"";
        // line 22
        echo twig_escape_filter($this->env, (isset($context["pic_name"]) ? $context["pic_name"] : $this->getContext($context, "pic_name")), "html", null, true);
        echo "\" />
        </div>


    <script type=\"text/javascript\">
    
        var cnv;
        var ctx;
        var img;
        window.onload = function() {

          //main image
          cnv = document.getElementById(\"edit_picture_cnv\");
          ctx = cnv.getContext(\"2d\");
          img = document.getElementById(\"pic_to_redraw\");
          ctx.drawImage(img, 0, 0, 500, 500);

          //effects below:
          var effect0 = document.getElementById(\"effect0_canvas\");
          var effect1 = document.getElementById(\"effect1_canvas\");
          var effect2 = document.getElementById(\"effect2_canvas\");
          var effect3 = document.getElementById(\"effect3_canvas\");
          var effect4 = document.getElementById(\"effect4_canvas\");
          var effect5 = document.getElementById(\"effect5_canvas\");

          var ctx_effect0 = effect0.getContext(\"2d\");
          var ctx_effect1 = effect1.getContext(\"2d\");
          var ctx_effect2 = effect2.getContext(\"2d\");
          var ctx_effect3 = effect3.getContext(\"2d\");
          var ctx_effect4 = effect4.getContext(\"2d\");
          var ctx_effect5 = effect5.getContext(\"2d\");

          effect1.getContext('2d').filter = 'blur(2px) opacity(60%)';
          effect2.getContext('2d').filter = 'invert(30%)';
          effect3.getContext('2d').filter = 'saturate(76%)';
          effect4.getContext('2d').filter = 'sepia(83%)';
          effect5.getContext('2d').filter = 'sepia(83%) invert(100%)';

          var img_scale = document.getElementById(\"pic_to_redraw_scale\");
          ctx_effect0.drawImage(img_scale, 0, 0, 100, 100);
          ctx_effect1.drawImage(img_scale, 0, 0, 100, 100);
          ctx_effect2.drawImage(img_scale, 0, 0, 100, 100);
          ctx_effect3.drawImage(img_scale, 0, 0, 100, 100);
          ctx_effect4.drawImage(img_scale, 0, 0, 100, 100);
          ctx_effect5.drawImage(img_scale, 0, 0, 100, 100);
      };

      function clear_effects()
      {
        cnv = document.getElementById(\"edit_picture_cnv\");
        ctx = cnv.getContext(\"2d\");
        img = document.getElementById(\"pic_to_redraw\");
        cnv.getContext('2d').filter = null;
        ctx.drawImage(img, 0, 0, 500, 500);
      }

      function apply_effect1()
      {
        cnv = document.getElementById(\"edit_picture_cnv\");
        ctx = cnv.getContext(\"2d\");
        img = document.getElementById(\"pic_to_redraw\");
        cnv.getContext('2d').filter = 'blur(5px) opacity(60%)';
        ctx.drawImage(img, 0, 0, 500, 500);
      }

      function apply_effect2()
      {
        cnv = document.getElementById(\"edit_picture_cnv\");
        ctx = cnv.getContext(\"2d\");
        img = document.getElementById(\"pic_to_redraw\");
        cnv.getContext('2d').filter = 'invert(30%)';
        ctx.drawImage(img, 0, 0, 500, 500);
      }

      function apply_effect3()
      {
        cnv = document.getElementById(\"edit_picture_cnv\");
        ctx = cnv.getContext(\"2d\");
        img = document.getElementById(\"pic_to_redraw\");
        cnv.getContext('2d').filter = 'saturate(76%)';
        ctx.drawImage(img, 0, 0, 500, 500);
      }

      function apply_effect4()
      {
        cnv = document.getElementById(\"edit_picture_cnv\");
        ctx = cnv.getContext(\"2d\");
        img = document.getElementById(\"pic_to_redraw\");
        cnv.getContext('2d').filter = 'sepia(83%)';
        ctx.drawImage(img, 0, 0, 500, 500);
      }

      function apply_effect5()
      {
        cnv = document.getElementById(\"edit_picture_cnv\");
        ctx = cnv.getContext(\"2d\");
        img = document.getElementById(\"pic_to_redraw\");
        cnv.getContext('2d').filter = 'sepia(83%) invert(100%)';
        ctx.drawImage(img, 0, 0, 500, 500);
      }

      function save()
      {
        //var data = document.getElementById(\"edit_picture_cnv\").toDataURL();
        //var canvasData = canvasElement.toDataURL(\"image/png\");
        var canvasData = document.getElementById(\"edit_picture_cnv\").toDataURL();
        var PictureName = document.getElementById(\"hidden_pic_title\").innerHTML;
        \$.ajax({
        url:'save_edited', 
        type:'POST', 
        data:{
        name:PictureName,
        pic:canvasData
        }
        });
      }

      \$( document ).ready(function() {
        \$(\".owl-carousel\").owlCarousel();
        \$('.owl-carousel').owlCarousel({
        stagePadding: 50,
        loop:true,
        margin:10,
        nav:true,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:3
            },
            1000:{
                items:5
            }
        }
      });
      });

    </script>

";
        // line 162
        $this->loadTemplate("footer.html.twig", "ImgOperations/image_edit.html.twig", 162)->display($context);
        
        $__internal_b4eea482b922b9cf35af4bb3345a7a573490d7829c0f9513f6ca9bb787795cdf->leave($__internal_b4eea482b922b9cf35af4bb3345a7a573490d7829c0f9513f6ca9bb787795cdf_prof);

    }

    public function getTemplateName()
    {
        return "ImgOperations/image_edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  195 => 162,  52 => 22,  48 => 21,  44 => 20,  24 => 2,  22 => 1,);
    }
}
/* {% include 'header.html.twig' %}*/
/* */
/*         <div class="container-fluid">*/
/*             <div class="edit_picture_tile">*/
/*                 <canvas id="edit_picture_cnv" width="500px" height="500px" style="border:1px solid #000000;"></canvas>*/
/*                 <div class="owl-carousel owl-theme">*/
/*                   <div class="effect_tile" onclick="clear_effects();"><canvas id="effect0_canvas" width="100px" height="100px"></canvas></div>*/
/*                   <div class="effect_tile" onclick="apply_effect1();"><canvas id="effect1_canvas" width="100px" height="100px"></canvas></div>*/
/*                   <div class="effect_tile" onclick="apply_effect2();"><canvas id="effect2_canvas" width="100px" height="100px"></canvas></div>*/
/*                   <div class="effect_tile" onclick="apply_effect3();"><canvas id="effect3_canvas" width="100px" height="100px"></canvas></div>*/
/*                   <div class="effect_tile" onclick="apply_effect4();"><canvas id="effect4_canvas" width="100px" height="100px"></canvas></div>*/
/*                   <div class="effect_tile" onclick="apply_effect5();"><canvas id="effect5_canvas" width="100px" height="100px"></canvas></div>*/
/*                 </div>*/
/*                 <button class="btn" onclick="save();">Save Photo</button>*/
/*             </div> */
/* */
/* */
/* */
/*             <!-- Useful things for js below XD -->*/
/*             <div id="hidden_pic_title" style="display: none;">{{pic_name}}</div>*/
/*             <img id="pic_to_redraw" style="display: none;" width="500px" height="500px" src="{{pic_name}}" />*/
/*             <img id="pic_to_redraw_scale" style="display: none;" width="100px" height="100px" src="{{pic_name}}" />*/
/*         </div>*/
/* */
/* */
/*     <script type="text/javascript">*/
/*     */
/*         var cnv;*/
/*         var ctx;*/
/*         var img;*/
/*         window.onload = function() {*/
/* */
/*           //main image*/
/*           cnv = document.getElementById("edit_picture_cnv");*/
/*           ctx = cnv.getContext("2d");*/
/*           img = document.getElementById("pic_to_redraw");*/
/*           ctx.drawImage(img, 0, 0, 500, 500);*/
/* */
/*           //effects below:*/
/*           var effect0 = document.getElementById("effect0_canvas");*/
/*           var effect1 = document.getElementById("effect1_canvas");*/
/*           var effect2 = document.getElementById("effect2_canvas");*/
/*           var effect3 = document.getElementById("effect3_canvas");*/
/*           var effect4 = document.getElementById("effect4_canvas");*/
/*           var effect5 = document.getElementById("effect5_canvas");*/
/* */
/*           var ctx_effect0 = effect0.getContext("2d");*/
/*           var ctx_effect1 = effect1.getContext("2d");*/
/*           var ctx_effect2 = effect2.getContext("2d");*/
/*           var ctx_effect3 = effect3.getContext("2d");*/
/*           var ctx_effect4 = effect4.getContext("2d");*/
/*           var ctx_effect5 = effect5.getContext("2d");*/
/* */
/*           effect1.getContext('2d').filter = 'blur(2px) opacity(60%)';*/
/*           effect2.getContext('2d').filter = 'invert(30%)';*/
/*           effect3.getContext('2d').filter = 'saturate(76%)';*/
/*           effect4.getContext('2d').filter = 'sepia(83%)';*/
/*           effect5.getContext('2d').filter = 'sepia(83%) invert(100%)';*/
/* */
/*           var img_scale = document.getElementById("pic_to_redraw_scale");*/
/*           ctx_effect0.drawImage(img_scale, 0, 0, 100, 100);*/
/*           ctx_effect1.drawImage(img_scale, 0, 0, 100, 100);*/
/*           ctx_effect2.drawImage(img_scale, 0, 0, 100, 100);*/
/*           ctx_effect3.drawImage(img_scale, 0, 0, 100, 100);*/
/*           ctx_effect4.drawImage(img_scale, 0, 0, 100, 100);*/
/*           ctx_effect5.drawImage(img_scale, 0, 0, 100, 100);*/
/*       };*/
/* */
/*       function clear_effects()*/
/*       {*/
/*         cnv = document.getElementById("edit_picture_cnv");*/
/*         ctx = cnv.getContext("2d");*/
/*         img = document.getElementById("pic_to_redraw");*/
/*         cnv.getContext('2d').filter = null;*/
/*         ctx.drawImage(img, 0, 0, 500, 500);*/
/*       }*/
/* */
/*       function apply_effect1()*/
/*       {*/
/*         cnv = document.getElementById("edit_picture_cnv");*/
/*         ctx = cnv.getContext("2d");*/
/*         img = document.getElementById("pic_to_redraw");*/
/*         cnv.getContext('2d').filter = 'blur(5px) opacity(60%)';*/
/*         ctx.drawImage(img, 0, 0, 500, 500);*/
/*       }*/
/* */
/*       function apply_effect2()*/
/*       {*/
/*         cnv = document.getElementById("edit_picture_cnv");*/
/*         ctx = cnv.getContext("2d");*/
/*         img = document.getElementById("pic_to_redraw");*/
/*         cnv.getContext('2d').filter = 'invert(30%)';*/
/*         ctx.drawImage(img, 0, 0, 500, 500);*/
/*       }*/
/* */
/*       function apply_effect3()*/
/*       {*/
/*         cnv = document.getElementById("edit_picture_cnv");*/
/*         ctx = cnv.getContext("2d");*/
/*         img = document.getElementById("pic_to_redraw");*/
/*         cnv.getContext('2d').filter = 'saturate(76%)';*/
/*         ctx.drawImage(img, 0, 0, 500, 500);*/
/*       }*/
/* */
/*       function apply_effect4()*/
/*       {*/
/*         cnv = document.getElementById("edit_picture_cnv");*/
/*         ctx = cnv.getContext("2d");*/
/*         img = document.getElementById("pic_to_redraw");*/
/*         cnv.getContext('2d').filter = 'sepia(83%)';*/
/*         ctx.drawImage(img, 0, 0, 500, 500);*/
/*       }*/
/* */
/*       function apply_effect5()*/
/*       {*/
/*         cnv = document.getElementById("edit_picture_cnv");*/
/*         ctx = cnv.getContext("2d");*/
/*         img = document.getElementById("pic_to_redraw");*/
/*         cnv.getContext('2d').filter = 'sepia(83%) invert(100%)';*/
/*         ctx.drawImage(img, 0, 0, 500, 500);*/
/*       }*/
/* */
/*       function save()*/
/*       {*/
/*         //var data = document.getElementById("edit_picture_cnv").toDataURL();*/
/*         //var canvasData = canvasElement.toDataURL("image/png");*/
/*         var canvasData = document.getElementById("edit_picture_cnv").toDataURL();*/
/*         var PictureName = document.getElementById("hidden_pic_title").innerHTML;*/
/*         $.ajax({*/
/*         url:'save_edited', */
/*         type:'POST', */
/*         data:{*/
/*         name:PictureName,*/
/*         pic:canvasData*/
/*         }*/
/*         });*/
/*       }*/
/* */
/*       $( document ).ready(function() {*/
/*         $(".owl-carousel").owlCarousel();*/
/*         $('.owl-carousel').owlCarousel({*/
/*         stagePadding: 50,*/
/*         loop:true,*/
/*         margin:10,*/
/*         nav:true,*/
/*         responsive:{*/
/*             0:{*/
/*                 items:1*/
/*             },*/
/*             600:{*/
/*                 items:3*/
/*             },*/
/*             1000:{*/
/*                 items:5*/
/*             }*/
/*         }*/
/*       });*/
/*       });*/
/* */
/*     </script>*/
/* */
/* {% include 'footer.html.twig' %}*/
/* */
