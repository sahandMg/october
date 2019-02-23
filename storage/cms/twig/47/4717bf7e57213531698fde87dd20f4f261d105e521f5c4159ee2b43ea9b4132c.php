<?php

/* E:\xampp\htdocs\october/themes/responsiv-clean/partials/site/meta.htm */
class __TwigTemplate_6361de37691132ca8c88b1af398e8687df40dc54a286b287d944c3b756cee031 extends Twig_Template
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
        echo "<meta charset=\"utf-8\">
<title>Hash Bazaar</title>
<meta name=\"description\" content=\"Bitcoin is the digital gold of the future & HashBazaar is the most cost effective cloud mining company on the market. Mine bitcoin through the cloud, get started today!\">
<meta name=\"title\" content=\"Hash Bazaar\">
<!-- <meta name=\"author\" content=\"OctoberCMS\"> -->
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
<!-- <meta name=\"generator\" content=\"OctoberCMS\"> -->
<link rel=\"icon\" type=\"image/png\" href=\"http://hashbazaar.com/img/favicon.ico\">
<link href=\"";
        // line 9
        echo $this->extensions['Cms\Twig\Extension']->themeFilter(array(0 => "@framework.extras", 1 => "assets/less/vendor.less"));
        // line 12
        echo "\" rel=\"stylesheet\">
<link href=\"";
        // line 13
        echo $this->extensions['Cms\Twig\Extension']->themeFilter(array(0 => "assets/less/theme.less"));
        echo "\" rel=\"stylesheet\">
";
        // line 14
        echo $this->env->getExtension('Cms\Twig\Extension')->assetsFunction('css');
        echo $this->env->getExtension('Cms\Twig\Extension')->displayBlock('styles');
    }

    public function getTemplateName()
    {
        return "E:\\xampp\\htdocs\\october/themes/responsiv-clean/partials/site/meta.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 14,  38 => 13,  35 => 12,  33 => 9,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<meta charset=\"utf-8\">
<title>Hash Bazaar</title>
<meta name=\"description\" content=\"Bitcoin is the digital gold of the future & HashBazaar is the most cost effective cloud mining company on the market. Mine bitcoin through the cloud, get started today!\">
<meta name=\"title\" content=\"Hash Bazaar\">
<!-- <meta name=\"author\" content=\"OctoberCMS\"> -->
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
<!-- <meta name=\"generator\" content=\"OctoberCMS\"> -->
<link rel=\"icon\" type=\"image/png\" href=\"http://hashbazaar.com/img/favicon.ico\">
<link href=\"{{ [
    '@framework.extras',
    'assets/less/vendor.less'
]|theme }}\" rel=\"stylesheet\">
<link href=\"{{ ['assets/less/theme.less']|theme }}\" rel=\"stylesheet\">
{% styles %}", "E:\\xampp\\htdocs\\october/themes/responsiv-clean/partials/site/meta.htm", "");
    }
}
