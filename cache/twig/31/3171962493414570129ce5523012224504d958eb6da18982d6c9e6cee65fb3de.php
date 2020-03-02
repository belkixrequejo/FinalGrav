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

/* forms/fields/conditional/conditional.html.twig */
class __TwigTemplate_35d75b0b98915f8e5d72cd4967e4db6c69cdde7d2878b1c15df1721302d6fdbd extends \Twig\Template
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
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->enter($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "forms/fields/conditional/conditional.html.twig"));

        $this->parent = $this->loadTemplate("forms/field.html.twig", "forms/fields/conditional/conditional.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->leave($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof);

    }

    // line 3
    public function block_field($context, array $blocks = [])
    {
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4 = $this->env->getExtension("Twig\\Extension\\ProfilerExtension");
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->enter($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "field"));

        // line 4
        $context["value"] = $this->env->getExtension('Grav\Common\Twig\TwigExtension')->evaluateStringFunc($context, $this->getAttribute(($context["field"] ?? null), "condition", []));
        // line 5
        $context["value"] = (((($context["value"] ?? null) == "true")) ? (1) : (($context["value"] ?? null)));
        // line 6
        $context["value"] = (((($context["value"] ?? null) == "false")) ? (0) : (($context["value"] ?? null)));
        // line 7
        echo "
";
        // line 8
        if (($context["value"] ?? null)) {
            // line 9
            echo "    ";
            if ($this->getAttribute(($context["field"] ?? null), "classes", [])) {
                // line 10
                echo "    <div class=\"";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["field"] ?? null), "classes", []), "html", null, true);
                echo "\">
    ";
            }
            // line 12
            echo "
    ";
            // line 13
            if ($this->getAttribute(($context["field"] ?? null), "fields", [])) {
                // line 14
                echo "        ";
                $this->loadTemplate("forms/default/fields.html.twig", "forms/fields/conditional/conditional.html.twig", 14)->display(twig_array_merge($context, ["name" => $this->getAttribute(($context["field"] ?? null), "name", []), "fields" => $this->getAttribute(($context["field"] ?? null), "fields", [])]));
                // line 15
                echo "    ";
            }
            // line 16
            echo "
    ";
            // line 17
            if ($this->getAttribute(($context["field"] ?? null), "classes", [])) {
                // line 18
                echo "    </div>
    ";
            }
        }
        
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->leave($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof);

    }

    public function getTemplateName()
    {
        return "forms/fields/conditional/conditional.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  87 => 18,  85 => 17,  82 => 16,  79 => 15,  76 => 14,  74 => 13,  71 => 12,  65 => 10,  62 => 9,  60 => 8,  57 => 7,  55 => 6,  53 => 5,  51 => 4,  45 => 3,  29 => 1,);
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
{% set value = evaluate(field.condition) %}
{% set value = value == 'true' ? 1 : value %}
{% set value = value == 'false' ? 0 : value %}

{% if value %}
    {% if field.classes %}
    <div class=\"{{ field.classes }}\">
    {% endif %}

    {% if field.fields %}
        {% include 'forms/default/fields.html.twig' with {name: field.name, fields: field.fields} %}
    {% endif %}

    {% if field.classes %}
    </div>
    {% endif %}
{% endif %}
{% endblock %}", "forms/fields/conditional/conditional.html.twig", "/var/www/grav/user/plugins/form/templates/forms/fields/conditional/conditional.html.twig");
    }
}
