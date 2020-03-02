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

/* reports/yamllinter.html.twig */
class __TwigTemplate_df75e6aa3769d7f3d9bfcee48a418f221ff36ade9e5c7d5d1501c98b0fbfc330 extends \Twig\Template
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
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->enter($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reports/yamllinter.html.twig"));

        // line 1
        if (($context["result"] ?? null)) {
            // line 2
            echo "    <div class=\"alert warning\"><strong>YAML Linting:</strong> Found <strong>";
            echo twig_escape_filter($this->env, twig_length_filter($this->env, ($context["result"] ?? null)), "html", null, true);
            echo "</strong> linting errors</div>
    <table>
        ";
            // line 4
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["result"] ?? null));
            foreach ($context['_seq'] as $context["path"] => $context["error"]) {
                // line 5
                echo "            ";
                $context["page_path"] = (($context["base_path"] ?? null) . $this->getAttribute(pathinfo($context["path"]), "dirname", []));
                // line 6
                echo "            ";
                $context["page"] = $this->getAttribute($this->getAttribute(($context["grav"] ?? null), "pages", []), "get", [0 => ($context["page_path"] ?? null)], "method");
                // line 7
                echo "            <tr>
                <td><i class=\"fa fa-file-text-o\"></i>
                    ";
                // line 9
                if ($this->getAttribute(($context["page"] ?? null), "url", [])) {
                    // line 10
                    echo "                        <a href=\"";
                    echo twig_escape_filter($this->env, ((($context["base_url"] ?? null) . "/pages") . $this->getAttribute(($context["page"] ?? null), "route", [])), "html", null, true);
                    echo "/mode:expert\">";
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["page"] ?? null), "route", []), "html", null, true);
                    echo "</a>
                    ";
                } else {
                    // line 12
                    echo "                        ";
                    echo twig_escape_filter($this->env, $context["path"], "html", null, true);
                    echo "
                    ";
                }
                // line 14
                echo "                </td>
                <td class=\"double\">";
                // line 15
                echo twig_escape_filter($this->env, $context["error"], "html", null, true);
                echo "</td>
            </tr>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['path'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 18
            echo "    </table>
";
        } else {
            // line 20
            echo "    <div class=\"alert info\"><strong>YAML Linting:</strong> No errors found.</div>
";
        }
        // line 22
        echo "
";
        
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->leave($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof);

    }

    public function getTemplateName()
    {
        return "reports/yamllinter.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  91 => 22,  87 => 20,  83 => 18,  74 => 15,  71 => 14,  65 => 12,  57 => 10,  55 => 9,  51 => 7,  48 => 6,  45 => 5,  41 => 4,  35 => 2,  33 => 1,);
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
    <div class=\"alert warning\"><strong>YAML Linting:</strong> Found <strong>{{ result|length }}</strong> linting errors</div>
    <table>
        {% for path, error in result %}
            {% set page_path = base_path ~ (path|pathinfo).dirname %}
            {% set page = grav.pages.get(page_path) %}
            <tr>
                <td><i class=\"fa fa-file-text-o\"></i>
                    {% if page.url %}
                        <a href=\"{{ base_url ~ '/pages' ~ page.route }}/mode:expert\">{{ page.route }}</a>
                    {% else %}
                        {{ path }}
                    {% endif %}
                </td>
                <td class=\"double\">{{ error }}</td>
            </tr>
        {% endfor %}
    </table>
{% else %}
    <div class=\"alert info\"><strong>YAML Linting:</strong> No errors found.</div>
{% endif %}

", "reports/yamllinter.html.twig", "/var/www/grav/user/plugins/admin/themes/grav/templates/reports/yamllinter.html.twig");
    }
}
