<?php

/* E:\xampp\htdocs\blog/themes/HashBazaar/partials/site/scripts.htm */
class __TwigTemplate_e4d7c046536bcf260c663b15045de88c32b4f7f8c951d3aa2e007287cbd5c506 extends Twig_Template
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
        echo "<script src=\"";
        echo $this->extensions['Cms\Twig\Extension']->themeFilter(array(0 => "@jquery", 1 => "@framework", 2 => "@framework.extras", 3 => "assets/vendor/bootstrap.js", 4 => "assets/javascript/app.js"));
        // line 7
        echo "\"></script>
";
        // line 8
        echo $this->env->getExtension('Cms\Twig\Extension')->assetsFunction('js');
        echo $this->env->getExtension('Cms\Twig\Extension')->displayBlock('scripts');
    }

    public function getTemplateName()
    {
        return "E:\\xampp\\htdocs\\blog/themes/HashBazaar/partials/site/scripts.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 8,  26 => 7,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<script src=\"{{ [
    '@jquery',
    '@framework',
    '@framework.extras',
    'assets/vendor/bootstrap.js',
    'assets/javascript/app.js'
]|theme }}\"></script>
{% scripts %}", "E:\\xampp\\htdocs\\blog/themes/HashBazaar/partials/site/scripts.htm", "");
    }
}
