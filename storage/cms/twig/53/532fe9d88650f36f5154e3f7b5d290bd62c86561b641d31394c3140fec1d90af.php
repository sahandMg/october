<?php

/* E:\xampp\htdocs\blog/themes/HashBazaar/pages/404.htm */
class __TwigTemplate_52a636aebbbf1e8c2776d3d232dd60334a2264f6af3883622682f538bf1547a5 extends Twig_Template
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
        echo "<div class=\"jumbotron\">
    <div class=\"container\">
        <h1>Page not found</h1>
        <p>We're sorry, but the page you requested cannot be found.</p>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "E:\\xampp\\htdocs\\blog/themes/HashBazaar/pages/404.htm";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"jumbotron\">
    <div class=\"container\">
        <h1>Page not found</h1>
        <p>We're sorry, but the page you requested cannot be found.</p>
    </div>
</div>", "E:\\xampp\\htdocs\\blog/themes/HashBazaar/pages/404.htm", "");
    }
}
