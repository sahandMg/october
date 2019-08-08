<?php

/* E:\xampp\htdocs\blog/themes/HashBazaar/layouts/default.htm */
class __TwigTemplate_bf2b5f4ba773aec988f8176a4f917205348662e8e2f7cd5d4db534a4ba9a7ea3 extends Twig_Template
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
        echo "    </head>
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
        // line 54
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFunction();
        // line 55
        echo "        </section>
    </div>
       

        <!-- Footer -->
     <!--    <footer id=\"layout-footer\">
            ";
        // line 61
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("site/footer"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 62
        echo "        </footer> -->


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
</style>
        <!-- Scripts -->
        <!-- <script src=\"";
        // line 89
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/vendor/jquery.js");
        echo "\"></script> -->
        <!-- <script src=\"";
        // line 90
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/vendor/bootstrap.js");
        echo "\"></script> -->
        <script src=\"";
        // line 91
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/javascript/app.js");
        echo "\"></script>
        <script src=\"";
        // line 92
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/javascript/jquery-3.3.1.js");
        echo "\"></script>
        <!-- <script src=\"";
        // line 93
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/javascript/jquery-3.3.1.js");
        echo "\"></script> -->
        <script src=\"";
        // line 94
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/javascript/jquery.animate-colors.js");
        echo "\"></script>
     <!--    ";
        // line 95
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
        // line 96
        echo "        ";
        echo $this->env->getExtension('Cms\Twig\Extension')->assetsFunction('js');
        echo $this->env->getExtension('Cms\Twig\Extension')->displayBlock('scripts');
        echo " -->
<script type=\"text/javascript\">
    \$(document).ready(function(){

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
        return "E:\\xampp\\htdocs\\blog/themes/HashBazaar/layouts/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  188 => 96,  173 => 95,  169 => 94,  165 => 93,  161 => 92,  157 => 91,  153 => 90,  149 => 89,  120 => 62,  116 => 61,  108 => 55,  106 => 54,  67 => 17,  64 => 16,  60 => 15,  56 => 14,  52 => 13,  48 => 12,  44 => 11,  37 => 7,  33 => 6,  29 => 5,  23 => 1,);
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
     <!--    <footer id=\"layout-footer\">
            {% partial 'site/footer' %}
        </footer> -->


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
</html>", "E:\\xampp\\htdocs\\blog/themes/HashBazaar/layouts/default.htm", "");
    }
}
