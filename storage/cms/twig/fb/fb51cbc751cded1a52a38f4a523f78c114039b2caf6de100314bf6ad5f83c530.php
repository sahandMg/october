<?php

/* E:\xampp\htdocs\blog/themes/HashBazaar/partials/site/footer.htm */
class __TwigTemplate_a436300c245f4df0dbcaccd57214a2ee5a5f4c827587f58a6a0ca9e1452d8c0c extends Twig_Template
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
        echo "<!-- <div class=\"footer-inner\">
    <p class=\"muted credit\">
        &copy; 2013 - ";
        // line 3
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo "
        &mdash; Powered by <a href=\"#\">October CMS</a>
        using <a href=\"https://github.com/responsiv/clean-theme\">a clean theme</a>.
    </p>
</div>
 -->";
    }

    public function getTemplateName()
    {
        return "E:\\xampp\\htdocs\\blog/themes/HashBazaar/partials/site/footer.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 3,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!-- <div class=\"footer-inner\">
    <p class=\"muted credit\">
        &copy; 2013 - {{ \"now\"|date(\"Y\") }}
        &mdash; Powered by <a href=\"#\">October CMS</a>
        using <a href=\"https://github.com/responsiv/clean-theme\">a clean theme</a>.
    </p>
</div>
 -->", "E:\\xampp\\htdocs\\blog/themes/HashBazaar/partials/site/footer.htm", "");
    }
}
