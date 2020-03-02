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

/* partials/tools-reports.html.twig */
class __TwigTemplate_f6268c57be5bef077d3d9421b5552eec78270572ff2761e223f5074c57242fce extends \Twig\Template
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
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->enter($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partials/tools-reports.html.twig"));

        // line 1
        echo "<div class=\"reports-content\">

    ";
        // line 3
        $context["reports"] = $this->getAttribute(($context["admin"] ?? null), "generateReports", [], "method");
        // line 4
        echo "
    <div class=\"report-output\">
    ";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["reports"] ?? null));
        foreach ($context['_seq'] as $context["title"] => $context["report"]) {
            // line 7
            echo "        <h1>";
            echo twig_escape_filter($this->env, $context["title"], "html", null, true);
            echo "</h1>
        ";
            // line 8
            echo $context["report"];
            echo "
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['title'], $context['report'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 10
        echo "    </div>

    ";
        // line 12
        $this->loadTemplate("partials/modal-changes-detected.html.twig", "partials/tools-reports.html.twig", 12)->display($context);
        // line 13
        echo "

</div>
";
        
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->leave($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof);

    }

    public function getTemplateName()
    {
        return "partials/tools-reports.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  66 => 13,  64 => 12,  60 => 10,  52 => 8,  47 => 7,  43 => 6,  39 => 4,  37 => 3,  33 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"reports-content\">

    {% set reports = admin.generateReports() %}

    <div class=\"report-output\">
    {% for title, report in reports %}
        <h1>{{ title }}</h1>
        {{ report|raw }}
    {% endfor %}
    </div>

    {% include 'partials/modal-changes-detected.html.twig' %}


</div>
", "partials/tools-reports.html.twig", "/var/www/grav/user/plugins/admin/themes/grav/templates/partials/tools-reports.html.twig");
    }
}
