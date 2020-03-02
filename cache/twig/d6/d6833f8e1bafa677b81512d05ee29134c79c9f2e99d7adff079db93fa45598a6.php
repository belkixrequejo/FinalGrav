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

/* reports/security.html.twig */
class __TwigTemplate_175ae42c1bde3bc6a3e625373ec11255575f9673cd828d3dec0e2c3f4c95613f extends \Twig\Template
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
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->enter($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reports/security.html.twig"));

        // line 1
        if (($context["result"] ?? null)) {
            // line 2
            echo "    <div class=\"alert warning\"> Security Scan complete: <strong>";
            echo twig_escape_filter($this->env, twig_length_filter($this->env, ($context["result"] ?? null)), "html", null, true);
            echo " potential XSS issues found...</strong></div>
    <table>
        ";
            // line 4
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["result"] ?? null));
            foreach ($context['_seq'] as $context["route"] => $context["results"]) {
                // line 5
                echo "            <tr>
                <td><i class=\"fa fa-file-text-o\"></i> <a href=\"";
                // line 6
                echo twig_escape_filter($this->env, ((($context["base_url"] ?? null) . "/pages") . $context["route"]), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $context["route"], "html", null, true);
                echo "</a></td>
                ";
                // line 7
                $context["results_string"] = [];
                // line 8
                echo "                ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["results"]);
                foreach ($context['_seq'] as $context["key"] => $context["value"]) {
                    // line 9
                    echo "                    ";
                    $context["results_string"] = twig_array_merge(($context["results_string"] ?? null), [0 => (((("<span class=\"key\">" . $context["key"]) . "</span>: <span class=\"value\">") . $this->env->getExtension('Grav\Common\Twig\TwigExtension')->inflectorFilter("title", $context["value"])) . "</span>")]);
                    // line 10
                    echo "                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 11
                echo "
                <td class=\"double\">";
                // line 12
                echo twig_join_filter(($context["results_string"] ?? null), ", ");
                echo "</td>
            </tr>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['route'], $context['results'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 15
            echo "    </table>

";
        } else {
            // line 18
            echo "    <div class=\"alert info\">Security Scan complete: <strong>No issues found...</strong></div>
";
        }
        // line 20
        echo "
";
        
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->leave($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof);

    }

    public function getTemplateName()
    {
        return "reports/security.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  91 => 20,  87 => 18,  82 => 15,  73 => 12,  70 => 11,  64 => 10,  61 => 9,  56 => 8,  54 => 7,  48 => 6,  45 => 5,  41 => 4,  35 => 2,  33 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% if result %}
    <div class=\"alert warning\"> Security Scan complete: <strong>{{ result|length }} potential XSS issues found...</strong></div>
    <table>
        {% for route, results in result %}
            <tr>
                <td><i class=\"fa fa-file-text-o\"></i> <a href=\"{{ base_url ~ '/pages' ~ route }}\">{{ route }}</a></td>
                {% set results_string = [] %}
                {% for key, value in results %}
                    {% set results_string = results_string|merge(['<span class=\"key\">' ~ key ~ '</span>: <span class=\"value\">' ~ value|titleize ~ '</span>']) %}
                {% endfor %}

                <td class=\"double\">{{ results_string|join(', ')|raw }}</td>
            </tr>
        {% endfor %}
    </table>

{% else %}
    <div class=\"alert info\">Security Scan complete: <strong>No issues found...</strong></div>
{% endif %}

", "reports/security.html.twig", "/var/www/grav/user/plugins/admin/themes/grav/templates/reports/security.html.twig");
    }
}
