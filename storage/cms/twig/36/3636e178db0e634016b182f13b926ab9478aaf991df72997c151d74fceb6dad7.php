<?php

/* E:\xampp\htdocs\october/themes/HashBazaar/layouts/default.htm */
class __TwigTemplate_bf125dcf5b0dc91b95f720c3ab1ddcbaf850f63de8dc156771aaafb78cc283a4 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"utf-8\">
        <title>HashBazaar - ";
        // line 5
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", array()), "title", array()), "html", null, true);
        echo "</title>
        <meta name=\"description\" content=\"";
        // line 6
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", array()), "meta_description", array()), "html", null, true);
        echo "\">
        <meta name=\"title\" content=\"";
        // line 7
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", array()), "meta_title", array()), "html", null, true);
        echo "\">
        <meta name=\"author\" content=\"OctoberCMS\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
        <meta name=\"generator\" content=\"OctoberCMS\">
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 11
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/october.png");
        echo "\">
        <link href=\"";
        // line 12
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/vendor.css");
        echo "\" rel=\"stylesheet\">
        <link href=\"";
        // line 13
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/theme.css");
        echo "\" rel=\"stylesheet\">
        <link href=\"";
        // line 14
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/main.css");
        echo "\" rel=\"stylesheet\">
        <link href=\"";
        // line 15
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/bootstrap.min.css");
        echo "\" rel=\"stylesheet\">
        ";
        // line 16
        echo $this->env->getExtension('Cms\Twig\Extension')->assetsFunction('css');
        echo $this->env->getExtension('Cms\Twig\Extension')->displayBlock('styles');
        // line 17
        echo "
     <STYLE>
      @font-face {
        font-family: BYekanFont;
        src: url(";
        // line 21
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/fonts/BYekan.ttf");
        echo ");
      }
      * {
        font-family: BYekanFont;
      }
      h1, h2, h3, h4, h5, h6 {
        font-family: BYekanFont;
      }
      th, a, p, input, button, legend, label {font-family: BYekanFont;}
      .btn {font-family: BYekanFont;}
    </STYLE>
    </head>
    <body>

    <header id=\"header\" >
      <div class=\"header-navbar\">
         <div id=\"header-navbar-logo\">
            <ul>
                <li class=\"navbar-list big\"><a href=\"http://hashbazaar.com\"><img class=\"navbar-small-logo\" src=\"https://www.hashbazaar.com/img/Logo_header.svg\" alt=\"hash bazaar Logo\"></a></li>
            </ul>
         </div>
         <div id=\"header-navbar-menu\" >
            <ul>
                <li class=\"navbar-list small1 a1\"><a href=\"https://www.hashbazaar.com/faq\">سوالات متداول</a></li>
                <li class=\"navbar-list small1 a1\"><a href=\"https://www.hashbazaar.com/about\">درباره ما</a></li>
                <li class=\"navbar-list small1 a1\"><a href=\"https://www.hashbazaar.com/blog\">مجله</a></li>
                <li class=\"navbar-list small1 a1\"><a href=\"https://www.hashbazaar.com/collaboration\">همکاری سازمانی</a></li>
                <li class=\"navbar-list small1 a1\"><a href=\"https://www.hashbazaar.com/\">خانه</a></li>
                <li class=\"flags\">
                    <div>
                        <a href=\"https://www.hashbazaar.com/fa/blog\" id=\"persianFA\"><img src=\"https://www.hashbazaar.com/flags/ir.svg\" alt=\"Persian (FA)\"></a>
                        <a href=\"https://www.hashbazaar.com/en/blog\" id=\"engUK\"><img src=\"https://www.hashbazaar.com/flags/uk.svg\" alt=\"English (UK)\"></a>
                    </div>
                </li>
            </ul>
            
         </div>
         <div class=\"navigation-menu\">
            <div class=\"bar1\"></div>
            <div class=\"bar2\"></div>
            <div class=\"bar3\"></div>
         </div>
     </div>
    </header>
    <div class=\"container\">
    <br/><br/><br/><br/><br/><br/>
     <!-- Content -->
        <section id=\"layout-content\">
            ";
        // line 69
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFunction();
        // line 70
        echo "        </section>
    </div>
       

        <!-- Footer -->
    <footer class=\"backgroundMoreGrey pl-5 pr-5\">
      <div class=\"row\">
          <div class=\"followUs col-lg-3 col-md-3 col-sm-12\">
             <h6 class=\"text-center\">ما را در شبکه های اجتماعی دنبال کنید</h6>     
             <!-- <div class=\"network-flex\"> -->
                    <div class=\"row  pl-1 pr-1\">
                        <a href=\"https://www.linkedin.com/company/hashbazaar\" class=\"col-md-3 col-sm-3 socialnet-flex\">
                                <img src=\"https://www.hashbazaar.com/img/icons/linkedin.png\" alt=\"linkedin\"></a>

                        <a href=\"https://www.instagram.com/hashbazaar/\" target=\"_blank\" class=\"col-md-3 col-sm-3 socialnet-flex\">
                                <img src=\"https://www.hashbazaar.com/img/icons/insta.svg\" alt=\"hashbazaar instagram\"></a> 
      
                        <a href=\"https://twitter.com/Hashbazaar_CMC\" class=\"col-md-3 col-sm-3 socialnet-flex\" >
                                <img src=\"https://www.hashbazaar.com/img/icons/tweet.svg\" alt=\"Twitter\"></a>
                    </div>
            <!-- </div> -->
          </div>
          <div class=\"col-lg-4 col-md-5 col-sm-12\" style=\"text-align: right;color: white;\">
            <div class=\"important-links row\">
                <div class=\"col-md-5 col-sm-6\" style=\"display: flex;flex-direction: column;\">
                    <a href=\"https://www.hashbazaar.com/about\">درباره ما</a>
                    <a href=\"https://www.hashbazaar.com/faq\">سوالات متداول</a>
                </div>
                <div class=\"col-md-5 col-sm-6\" style=\"display: flex;flex-direction: column;\">
                    <a href=\"https://www.hashbazaar.com/\">خانه</a>
                    <a href=\"https://www.hashbazaar.com/collaboration\">همکاری سازمانی</a>
                    <a href=\"https://www.hashbazaar.com/blog\">مجله</a>
                </div>
            </div>
          </div>
          <div class=\"contact-us col-lg-5 col-md-4 col-sm-12\" style=\"text-align: right;\">
              <h6 class=\"text-center\">تماس با ما</h6> 
              <div class=\"tell\">
                   <a href=\"tel:+989371869568\" style=\"color:white; cursor:pointer\">
                         0937 186 9568 &nbsp;<i class=\"fa fa-phone\" aria-hidden=\"true\"></i> 
                   </a>
              </div>
              <div class=\"\" style=\"direction:rtl\">
                   <i class=\"fa fa-map-marker\" aria-hidden=\"true\"></i>
                                تهران، میدان ونک، خیابان ملاصدرا، خیابان پردیس، پلاک ۷
               </div>
          </div>
      </div>
      <div class=\"container text-center copy-right\">
         <p>تمام حقوق مادی و معنوی آثار متعلق به هش بازار می باشد.</p>
      </div>
  </footer>


<style type=\"text/css\">
    #header-navbar-menu {
        text-align: right;
    }
    #header-navbar-menu ul li {
        padding-right: 20px;
    }
    
    .flags a {
        float:right
    }
    
    .flags a#persianFA {
        border-left: 1px solid white;
        margin-left: 10px
    }

    @media screen and (max-width:769px){
        .flags {
            margin-left: 95% !important
        }
    }

    .footerrow {
        font-size: 1.6rem
    }
    .followUs img {
        height: 60px;

    }
    .followUs div {
        margin-top: 5%;
    }

    footer {margin-top: 5%;}
    footer a {
        color: white;
    }
    .copy-right {margin-top: 2%;direction: rtl; font-size: 1rem;}

    @media screen and (max-width:769px){
      .followUs img {
        height: 40px;
       }
       .followUs h6 {
         font-size: 0.8rem;
       }
    }
    @media screen and (max-width:420px){
        .footerrow {
            font-size: 1.2rem
        }

        .ctr {
            margin-bottom: 5%
        }

         .tell {
             text-align: center;
             
         } 
         .copy-right {margin-top: 5%; font-size: 0.8rem;}  
         .contact-us {margin-top: 5%;}
         .important-links div{
            width: 50%;text-align: center;
         }
         .important-links { margin-top: 5%; }
         .followUs div a {
            width: 33%;
          }
    }
</style>
        <!-- Scripts -->
        <!-- <script src=\"";
        // line 197
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/vendor/jquery.js");
        echo "\"></script> -->
        <!-- <script src=\"";
        // line 198
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/vendor/bootstrap.js");
        echo "\"></script> -->
        <script src=\"";
        // line 199
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/javascript/app.js");
        echo "\"></script>
        <script src=\"";
        // line 200
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/javascript/jquery-3.3.1.js");
        echo "\"></script>
        <!-- <script src=\"";
        // line 201
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/javascript/jquery-3.3.1.js");
        echo "\"></script> -->
        <script src=\"";
        // line 202
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/javascript/jquery.animate-colors.js");
        echo "\"></script>
     <!--    ";
        // line 203
        $_minify = System\Classes\CombineAssets::instance()->useMinify;
        if ($_minify) {
            echo '<script src="'. Request::getBasePath()
                    .'/modules/system/assets/js/framework.combined-min.js"></script>'.PHP_EOL;
        }
        else {
            echo '<script src="'. Request::getBasePath()
                    .'/modules/system/assets/js/framework.js"></script>'.PHP_EOL;
            echo '<script src="'. Request::getBasePath()
                    .'/modules/system/assets/js/framework.extras.js"></script>'.PHP_EOL;
        }
        echo '<link rel="stylesheet" property="stylesheet" href="'. Request::getBasePath()
                    .'/modules/system/assets/css/framework.extras'.($_minify ? '-min' : '').'.css">'.PHP_EOL;
        unset($_minify);
        // line 204
        echo "        ";
        echo $this->env->getExtension('Cms\Twig\Extension')->assetsFunction('js');
        echo $this->env->getExtension('Cms\Twig\Extension')->displayBlock('scripts');
        echo " -->
<script type=\"text/javascript\">
    \$(document).ready(function(){
             var flag = 0;
             \$('.navigation-menu').click(function(){
                console.log(\"navigation test\");
                if(flag == 0) {
                  flag = 1 ;
                  \$('#header-navbar-menu').show();
                  \$('.navigation-menu').addClass( \"change\" );
                    isOpen =true;

                } else {
                  flag = 0 ;
                  \$('#header-navbar-menu').hide();
                  \$('.navigation-menu').removeClass( \"change\" );
                  isOpen =false;

                }
                
            });
         });
</script>
    </body>
</html>";
    }

    public function getTemplateName()
    {
        return "E:\\xampp\\htdocs\\october/themes/HashBazaar/layouts/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  294 => 204,  279 => 203,  275 => 202,  271 => 201,  267 => 200,  263 => 199,  259 => 198,  255 => 197,  126 => 70,  124 => 69,  73 => 21,  67 => 17,  64 => 16,  60 => 15,  56 => 14,  52 => 13,  48 => 12,  44 => 11,  37 => 7,  33 => 6,  29 => 5,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"utf-8\">
        <title>HashBazaar - {{ this.page.title }}</title>
        <meta name=\"description\" content=\"{{ this.page.meta_description }}\">
        <meta name=\"title\" content=\"{{ this.page.meta_title }}\">
        <meta name=\"author\" content=\"OctoberCMS\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
        <meta name=\"generator\" content=\"OctoberCMS\">
        <link rel=\"icon\" type=\"image/png\" href=\"{{ 'assets/images/october.png'|theme }}\">
        <link href=\"{{ 'assets/css/vendor.css'|theme }}\" rel=\"stylesheet\">
        <link href=\"{{ 'assets/css/theme.css'|theme }}\" rel=\"stylesheet\">
        <link href=\"{{ 'assets/css/main.css'|theme }}\" rel=\"stylesheet\">
        <link href=\"{{ 'assets/css/bootstrap.min.css'|theme }}\" rel=\"stylesheet\">
        {% styles %}

     <STYLE>
      @font-face {
        font-family: BYekanFont;
        src: url({{ 'assets/fonts/BYekan.ttf'|theme }});
      }
      * {
        font-family: BYekanFont;
      }
      h1, h2, h3, h4, h5, h6 {
        font-family: BYekanFont;
      }
      th, a, p, input, button, legend, label {font-family: BYekanFont;}
      .btn {font-family: BYekanFont;}
    </STYLE>
    </head>
    <body>

    <header id=\"header\" >
      <div class=\"header-navbar\">
         <div id=\"header-navbar-logo\">
            <ul>
                <li class=\"navbar-list big\"><a href=\"http://hashbazaar.com\"><img class=\"navbar-small-logo\" src=\"https://www.hashbazaar.com/img/Logo_header.svg\" alt=\"hash bazaar Logo\"></a></li>
            </ul>
         </div>
         <div id=\"header-navbar-menu\" >
            <ul>
                <li class=\"navbar-list small1 a1\"><a href=\"https://www.hashbazaar.com/faq\">سوالات متداول</a></li>
                <li class=\"navbar-list small1 a1\"><a href=\"https://www.hashbazaar.com/about\">درباره ما</a></li>
                <li class=\"navbar-list small1 a1\"><a href=\"https://www.hashbazaar.com/blog\">مجله</a></li>
                <li class=\"navbar-list small1 a1\"><a href=\"https://www.hashbazaar.com/collaboration\">همکاری سازمانی</a></li>
                <li class=\"navbar-list small1 a1\"><a href=\"https://www.hashbazaar.com/\">خانه</a></li>
                <li class=\"flags\">
                    <div>
                        <a href=\"https://www.hashbazaar.com/fa/blog\" id=\"persianFA\"><img src=\"https://www.hashbazaar.com/flags/ir.svg\" alt=\"Persian (FA)\"></a>
                        <a href=\"https://www.hashbazaar.com/en/blog\" id=\"engUK\"><img src=\"https://www.hashbazaar.com/flags/uk.svg\" alt=\"English (UK)\"></a>
                    </div>
                </li>
            </ul>
            
         </div>
         <div class=\"navigation-menu\">
            <div class=\"bar1\"></div>
            <div class=\"bar2\"></div>
            <div class=\"bar3\"></div>
         </div>
     </div>
    </header>
    <div class=\"container\">
    <br/><br/><br/><br/><br/><br/>
     <!-- Content -->
        <section id=\"layout-content\">
            {% page %}
        </section>
    </div>
       

        <!-- Footer -->
    <footer class=\"backgroundMoreGrey pl-5 pr-5\">
      <div class=\"row\">
          <div class=\"followUs col-lg-3 col-md-3 col-sm-12\">
             <h6 class=\"text-center\">ما را در شبکه های اجتماعی دنبال کنید</h6>     
             <!-- <div class=\"network-flex\"> -->
                    <div class=\"row  pl-1 pr-1\">
                        <a href=\"https://www.linkedin.com/company/hashbazaar\" class=\"col-md-3 col-sm-3 socialnet-flex\">
                                <img src=\"https://www.hashbazaar.com/img/icons/linkedin.png\" alt=\"linkedin\"></a>

                        <a href=\"https://www.instagram.com/hashbazaar/\" target=\"_blank\" class=\"col-md-3 col-sm-3 socialnet-flex\">
                                <img src=\"https://www.hashbazaar.com/img/icons/insta.svg\" alt=\"hashbazaar instagram\"></a> 
      
                        <a href=\"https://twitter.com/Hashbazaar_CMC\" class=\"col-md-3 col-sm-3 socialnet-flex\" >
                                <img src=\"https://www.hashbazaar.com/img/icons/tweet.svg\" alt=\"Twitter\"></a>
                    </div>
            <!-- </div> -->
          </div>
          <div class=\"col-lg-4 col-md-5 col-sm-12\" style=\"text-align: right;color: white;\">
            <div class=\"important-links row\">
                <div class=\"col-md-5 col-sm-6\" style=\"display: flex;flex-direction: column;\">
                    <a href=\"https://www.hashbazaar.com/about\">درباره ما</a>
                    <a href=\"https://www.hashbazaar.com/faq\">سوالات متداول</a>
                </div>
                <div class=\"col-md-5 col-sm-6\" style=\"display: flex;flex-direction: column;\">
                    <a href=\"https://www.hashbazaar.com/\">خانه</a>
                    <a href=\"https://www.hashbazaar.com/collaboration\">همکاری سازمانی</a>
                    <a href=\"https://www.hashbazaar.com/blog\">مجله</a>
                </div>
            </div>
          </div>
          <div class=\"contact-us col-lg-5 col-md-4 col-sm-12\" style=\"text-align: right;\">
              <h6 class=\"text-center\">تماس با ما</h6> 
              <div class=\"tell\">
                   <a href=\"tel:+989371869568\" style=\"color:white; cursor:pointer\">
                         0937 186 9568 &nbsp;<i class=\"fa fa-phone\" aria-hidden=\"true\"></i> 
                   </a>
              </div>
              <div class=\"\" style=\"direction:rtl\">
                   <i class=\"fa fa-map-marker\" aria-hidden=\"true\"></i>
                                تهران، میدان ونک، خیابان ملاصدرا، خیابان پردیس، پلاک ۷
               </div>
          </div>
      </div>
      <div class=\"container text-center copy-right\">
         <p>تمام حقوق مادی و معنوی آثار متعلق به هش بازار می باشد.</p>
      </div>
  </footer>


<style type=\"text/css\">
    #header-navbar-menu {
        text-align: right;
    }
    #header-navbar-menu ul li {
        padding-right: 20px;
    }
    
    .flags a {
        float:right
    }
    
    .flags a#persianFA {
        border-left: 1px solid white;
        margin-left: 10px
    }

    @media screen and (max-width:769px){
        .flags {
            margin-left: 95% !important
        }
    }

    .footerrow {
        font-size: 1.6rem
    }
    .followUs img {
        height: 60px;

    }
    .followUs div {
        margin-top: 5%;
    }

    footer {margin-top: 5%;}
    footer a {
        color: white;
    }
    .copy-right {margin-top: 2%;direction: rtl; font-size: 1rem;}

    @media screen and (max-width:769px){
      .followUs img {
        height: 40px;
       }
       .followUs h6 {
         font-size: 0.8rem;
       }
    }
    @media screen and (max-width:420px){
        .footerrow {
            font-size: 1.2rem
        }

        .ctr {
            margin-bottom: 5%
        }

         .tell {
             text-align: center;
             
         } 
         .copy-right {margin-top: 5%; font-size: 0.8rem;}  
         .contact-us {margin-top: 5%;}
         .important-links div{
            width: 50%;text-align: center;
         }
         .important-links { margin-top: 5%; }
         .followUs div a {
            width: 33%;
          }
    }
</style>
        <!-- Scripts -->
        <!-- <script src=\"{{ 'assets/vendor/jquery.js'|theme }}\"></script> -->
        <!-- <script src=\"{{ 'assets/vendor/bootstrap.js'|theme }}\"></script> -->
        <script src=\"{{ 'assets/javascript/app.js'|theme }}\"></script>
        <script src=\"{{ 'assets/javascript/jquery-3.3.1.js'|theme }}\"></script>
        <!-- <script src=\"{{ 'assets/javascript/jquery-3.3.1.js'|theme }}\"></script> -->
        <script src=\"{{ 'assets/javascript/jquery.animate-colors.js'|theme }}\"></script>
     <!--    {% framework extras %}
        {% scripts %} -->
<script type=\"text/javascript\">
    \$(document).ready(function(){
             var flag = 0;
             \$('.navigation-menu').click(function(){
                console.log(\"navigation test\");
                if(flag == 0) {
                  flag = 1 ;
                  \$('#header-navbar-menu').show();
                  \$('.navigation-menu').addClass( \"change\" );
                    isOpen =true;

                } else {
                  flag = 0 ;
                  \$('#header-navbar-menu').hide();
                  \$('.navigation-menu').removeClass( \"change\" );
                  isOpen =false;

                }
                
            });
         });
</script>
    </body>
</html>", "E:\\xampp\\htdocs\\october/themes/HashBazaar/layouts/default.htm", "");
    }
}
