<?php

/* E:\xampp\htdocs\blog/themes/HashBazaar/partials/home/posts.htm */
class __TwigTemplate_d722faa5c6cb7c0153c670bd406bf462d4523f5765d1a546963c5b7f84c1ddde extends Twig_Template
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
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["posts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 2
            echo "
    <!-- <div class=\"home-post\"> -->
    <div class=\"col-md-6 col-sm-12\">
        ";
            // line 5
            $context['__cms_partial_params'] = [];
            $context['__cms_partial_params']['post'] = $context["post"]            ;
            echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("blog/post"            , $context['__cms_partial_params']            , true            );
            unset($context['__cms_partial_params']);
            // line 6
            echo "    </div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "E:\\xampp\\htdocs\\blog/themes/HashBazaar/partials/home/posts.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  37 => 6,  32 => 5,  27 => 2,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% for post in posts %}

    <!-- <div class=\"home-post\"> -->
    <div class=\"col-md-6 col-sm-12\">
        {% partial 'blog/post' post=post %}
    </div>
{% endfor %}", "E:\\xampp\\htdocs\\blog/themes/HashBazaar/partials/home/posts.htm", "");
    }
}
