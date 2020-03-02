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

/* partials/javascripts.html.twig */
class __TwigTemplate_54592e1986932cb506eb44f042ae5f7ec8f6178a7815e3c19425e3106c635fa4 extends \Twig\Template
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
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->enter($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partials/javascripts.html.twig"));

        // line 1
        $this->getAttribute(($context["assets"] ?? null), "add", [0 => "jquery", 1 => 101], "method");
        // line 2
        if ($this->env->getExtension('Grav\Common\Twig\TwigExtension')->authorize([0 => "admin.login", 1 => "admin.super"])) {
            // line 3
            $this->getAttribute(($context["assets"] ?? null), "addJs", [0 => (($context["theme_url"] ?? null) . "/js/vendor.min.js"), 1 => ["loading" => "defer"]], "method");
            // line 4
            $this->getAttribute(($context["assets"] ?? null), "addJs", [0 => (($context["theme_url"] ?? null) . "/js/admin.min.js"), 1 => ["loading" => "defer"]], "method");
            // line 5
            echo "
";
            // line 6
            if ((($this->getAttribute(($context["browser"] ?? null), "getBrowser", []) == "msie") || ($this->getAttribute(($context["browser"] ?? null), "getBrowser", []) == "edge"))) {
                // line 7
                echo "    ";
                $this->getAttribute(($context["assets"] ?? null), "addJs", [0 => (($context["theme_url"] ?? null) . "/js/form-attr.polyfill.js")], "method");
            }
            // line 9
            echo "
";
            // line 10
            $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = null;
            try {
                $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 =                 $this->loadTemplate("partials/javascripts-extra.html.twig", "partials/javascripts.html.twig", 10);
            } catch (LoaderError $e) {
                // ignore missing template
            }
            if ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) {
                $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4->display($context);
            }
        }
        
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->leave($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof);

    }

    public function getTemplateName()
    {
        return "partials/javascripts.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 10,  50 => 9,  46 => 7,  44 => 6,  41 => 5,  39 => 4,  37 => 3,  35 => 2,  33 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% do assets.add('jquery',101) %}
{% if authorize(['admin.login', 'admin.super']) %}
{% do assets.addJs(theme_url~'/js/vendor.min.js', { 'loading':'defer' }) %}
{% do assets.addJs(theme_url~'/js/admin.min.js' , { 'loading':'defer' }) %}

{% if browser.getBrowser == 'msie' or browser.getBrowser == 'edge' %}
    {% do assets.addJs(theme_url~'/js/form-attr.polyfill.js') %}
{% endif %}

{% include 'partials/javascripts-extra.html.twig' ignore missing %}
{% endif %}
", "partials/javascripts.html.twig", "/var/www/grav/user/plugins/admin/themes/grav/templates/partials/javascripts.html.twig");
    }
}
