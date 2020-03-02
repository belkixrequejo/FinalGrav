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

/* forms/fields/userinfo/userinfo.html.twig */
class __TwigTemplate_e332565dffa107f24d64056012a4f70fb0ebc07e63bdec6bdcc732dc57c0bb85 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'field' => [$this, 'block_field'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "forms/field.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4 = $this->env->getExtension("Twig\\Extension\\ProfilerExtension");
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->enter($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "forms/fields/userinfo/userinfo.html.twig"));

        $this->parent = $this->loadTemplate("forms/field.html.twig", "forms/fields/userinfo/userinfo.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->leave($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof);

    }

    // line 3
    public function block_field($context, array $blocks = [])
    {
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4 = $this->env->getExtension("Twig\\Extension\\ProfilerExtension");
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->enter($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "field"));

        // line 4
        echo "<div class=\"form-field grid user-details\">
    <div class=\"form-label block size-1-3\">
        ";
        // line 6
        $this->loadTemplate("partials/userinfo-avatar.html.twig", "forms/fields/userinfo/userinfo.html.twig", 6)->display($context);
        // line 7
        echo "    </div>
    <div class=\"form-data block size-2-3\">
        <h2>";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute(($context["data"] ?? null), "fullname", []), "html", null, true);
        echo "</h2>
        <h5>
        <a href=\"mailto:";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute(($context["data"] ?? null), "email", []), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["data"] ?? null), "email", []), "html", null, true);
        echo "</a>
        ";
        // line 12
        if ($this->getAttribute(($context["data"] ?? null), "title", [])) {
            // line 13
            echo "        - ";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["data"] ?? null), "title", []), "html", null, true);
            echo "
        ";
        }
        // line 15
        echo "        </h5>
        ";
        // line 16
        $this->loadTemplate("partials/userinfo-avatar-credit.html.twig", "forms/fields/userinfo/userinfo.html.twig", 16)->display($context);
        // line 17
        echo "    </div>
</div>
";
        
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->leave($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof);

    }

    public function getTemplateName()
    {
        return "forms/fields/userinfo/userinfo.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 17,  83 => 16,  80 => 15,  74 => 13,  72 => 12,  66 => 11,  61 => 9,  57 => 7,  55 => 6,  51 => 4,  45 => 3,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"forms/field.html.twig\" %}

{% block field %}
<div class=\"form-field grid user-details\">
    <div class=\"form-label block size-1-3\">
        {% include 'partials/userinfo-avatar.html.twig' %}
    </div>
    <div class=\"form-data block size-2-3\">
        <h2>{{ data.fullname }}</h2>
        <h5>
        <a href=\"mailto:{{ data.email }}\">{{ data.email }}</a>
        {% if data.title %}
        - {{ data.title }}
        {% endif %}
        </h5>
        {% include 'partials/userinfo-avatar-credit.html.twig' %}
    </div>
</div>
{% endblock %}", "forms/fields/userinfo/userinfo.html.twig", "/var/www/grav/user/plugins/admin/themes/grav/templates/forms/fields/userinfo/userinfo.html.twig");
    }
}
