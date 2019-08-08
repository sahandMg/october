<?php

/* E:\xampp\htdocs\blog/themes/HashBazaar/partials/site/header.htm */
class __TwigTemplate_e83d7b87f63c3514af91aa9e417d660922cbc904e1c83061af31c7f649d4379c extends Twig_Template
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
        echo "<div class=\"row\">
    <div class=\"col-sm-9\">
        <h1 class=\"site-name\">
            <a href=\"";
        // line 4
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("home");
        echo "\"><img class=\"navbar-small-logo\" src=\"http://blog.hashbazaar.com/themes/responsiv-clean/assets/images/Logo_header.svg\" alt=\"hashbazaar Logo\"></a>
        </h1>
        <p class=\"site-motto\">
            ";
        // line 7
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", array()), "site_motto", array()), "html", null, true);
        echo "
        </p>
    </div>
    <div class=\"col-sm-3\">
        <button type=\"button\" class=\"sidebar-toggle\" onclick=\"toggleSidebar()\">
            <span class=\"icon-bars\">
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
            </span>
            <span class=\"menu-text\">Menu</span>
        </button>
    </div>
    <style>
      #layout-header {
       background-color: black;
       color: white;
      }
      #layout-header .sidebar-toggle { border: 1px solid white;}
      #layout-header .sidebar-toggle .icon-bar {background-color: white; }

   </style>
</div>";
    }

    public function getTemplateName()
    {
        return "E:\\xampp\\htdocs\\blog/themes/HashBazaar/partials/site/header.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  34 => 7,  28 => 4,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"row\">
    <div class=\"col-sm-9\">
        <h1 class=\"site-name\">
            <a href=\"{{ 'home'|page }}\"><img class=\"navbar-small-logo\" src=\"http://blog.hashbazaar.com/themes/responsiv-clean/assets/images/Logo_header.svg\" alt=\"hashbazaar Logo\"></a>
        </h1>
        <p class=\"site-motto\">
            {{ this.theme.site_motto }}
        </p>
    </div>
    <div class=\"col-sm-3\">
        <button type=\"button\" class=\"sidebar-toggle\" onclick=\"toggleSidebar()\">
            <span class=\"icon-bars\">
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
            </span>
            <span class=\"menu-text\">Menu</span>
        </button>
    </div>
    <style>
      #layout-header {
       background-color: black;
       color: white;
      }
      #layout-header .sidebar-toggle { border: 1px solid white;}
      #layout-header .sidebar-toggle .icon-bar {background-color: white; }

   </style>
</div>", "E:\\xampp\\htdocs\\blog/themes/HashBazaar/partials/site/header.htm", "");
    }
}
