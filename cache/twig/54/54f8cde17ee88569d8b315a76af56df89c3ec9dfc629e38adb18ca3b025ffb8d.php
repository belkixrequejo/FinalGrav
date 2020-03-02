<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* partials/feed-block.html.twig */
class __TwigTemplate_6598b8467c8cff388eba66c7ec0c73b57c600e338cb15534e6601eb49eea9c32 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4 = $this->env->getExtension("Twig\\Extension\\ProfilerExtension");
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->enter($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partials/feed-block.html.twig"));

        // line 1
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["feed"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["entry"]) {
            // line 2
            echo "<li><span class=\"date\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["entry"], "nicetime", []), "html", null, true);
            echo "</span> <a href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["entry"], "url", []), "html", null, true);
            echo "\" target=\"_blank\" title=\"";
            echo twig_escape_filter($this->env, strip_tags($this->getAttribute($context["entry"], "title", [])), "html_attr");
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["entry"], "title", []), "html", null, true);
            echo "</a>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entry'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->leave($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof);

    }

    public function getTemplateName()
    {
        return "partials/feed-block.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  37 => 2,  33 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% for entry in feed %}
<li><span class=\"date\">{{ entry.nicetime }}</span> <a href=\"{{ entry.url }}\" target=\"_blank\" title=\"{{ entry.title|striptags|e('html_attr') }}\">{{ entry.title }}</a>
{% endfor %}
", "partials/feed-block.html.twig", "/var/www/grav/user/plugins/admin/themes/grav/templates/partials/feed-block.html.twig");
    }
}
