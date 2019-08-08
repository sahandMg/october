<?php

/* E:\xampp\htdocs\blog/themes/HashBazaar/pages/home.htm */
class __TwigTemplate_7345f7aa9673dc000562a04a739c87fda0c7e1c608527587ea6bf42b23c44d4f extends Twig_Template
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
        echo "<!-- class=\"post-list home-posts\"  -->
<div id=\"homePosts\" class=\"row\">
    ";
        // line 3
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("home/posts"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 4
        echo "</div>
<!-- <div
    class=\"text-center\"
    data-control=\"auto-pager\"
    data-request=\"onPagePosts\"
    data-request-update=\"'home/posts': '@#homePosts'\"
    data-current-page=\"1\"
    data-last-page=\"";
        // line 11
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["posts"] ?? null), "lastPage", array()), "html", null, true);
        echo "\">
    <a class=\"text-muted oc-loading\">Fetching posts..</a>
</div> -->";
    }

    public function getTemplateName()
    {
        return "E:\\xampp\\htdocs\\blog/themes/HashBazaar/pages/home.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 11,  31 => 4,  27 => 3,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!-- class=\"post-list home-posts\"  -->
<div id=\"homePosts\" class=\"row\">
    {% partial 'home/posts' %}
</div>
<!-- <div
    class=\"text-center\"
    data-control=\"auto-pager\"
    data-request=\"onPagePosts\"
    data-request-update=\"'home/posts': '@#homePosts'\"
    data-current-page=\"1\"
    data-last-page=\"{{ posts.lastPage }}\">
    <a class=\"text-muted oc-loading\">Fetching posts..</a>
</div> -->", "E:\\xampp\\htdocs\\blog/themes/HashBazaar/pages/home.htm", "");
    }
}
