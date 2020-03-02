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

/* partials/head.html.twig */
class __TwigTemplate_9fae24ab31b05e01d7f0944fa872785ac5df9382fb10eaeddd9095dbcf4611c5 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'head' => [$this, 'block_head'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4 = $this->env->getExtension("Twig\\Extension\\ProfilerExtension");
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->enter($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partials/head.html.twig"));

        // line 1
        $this->displayBlock('head', $context, $blocks);
        
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->leave($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof);

    }

    public function block_head($context, array $blocks = [])
    {
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4 = $this->env->getExtension("Twig\\Extension\\ProfilerExtension");
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->enter($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "head"));

        // line 2
        echo "<title>";
        if ($this->getAttribute(($context["header"] ?? null), "title", [])) {
            echo $this->getAttribute(($context["header"] ?? null), "title", []);
            echo " ";
        } else {
            echo " ";
            echo $this->getAttribute(($context["site"] ?? null), "title", []);
            echo " ";
        }
        echo "</title>
<meta charset=\"utf-8\" />
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\" />

";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["page"] ?? null), "metadata", []));
        foreach ($context['_seq'] as $context["_key"] => $context["meta"]) {
            // line 7
            echo "    ";
            if (($this->getAttribute($context["meta"], "name", []) != "generator")) {
                // line 8
                echo "    <meta ";
                if ($this->getAttribute($context["meta"], "name", [])) {
                    echo "name=\"";
                    echo $this->getAttribute($context["meta"], "name", []);
                    echo "\" ";
                }
                if ($this->getAttribute($context["meta"], "http_equiv", [])) {
                    echo "http-equiv=\"";
                    echo $this->getAttribute($context["meta"], "http_equiv", []);
                    echo "\" ";
                }
                if ($this->getAttribute($context["meta"], "charset", [])) {
                    echo "charset=\"";
                    echo $this->getAttribute($context["meta"], "charset", []);
                    echo "\" ";
                }
                if ($this->getAttribute($context["meta"], "property", [])) {
                    echo "property=\"";
                    echo $this->getAttribute($context["meta"], "property", []);
                    echo "\" ";
                }
                if ($this->getAttribute($context["meta"], "content", [])) {
                    echo "content=\"";
                    echo $this->getAttribute($context["meta"], "content", []);
                    echo "\" ";
                }
                echo "/>
    ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['meta'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 11
        echo "
";
        // line 12
        if ($this->getAttribute(($context["header"] ?? null), "robots", [])) {
            // line 13
            echo "<meta name=\"robots\" content=\"";
            echo $this->getAttribute(($context["header"] ?? null), "robots", []);
            echo "\">
";
        }
        // line 15
        echo "
";
        // line 16
        $context["favicon"] = "favicon.png";
        // line 17
        if ((twig_length_filter($this->env, $this->getAttribute(($context["theme_config"] ?? null), "favicon", [])) > 0)) {
            // line 18
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["theme_config"] ?? null), "favicon", []));
            foreach ($context['_seq'] as $context["_key"] => $context["icon"]) {
                // line 19
                echo "        ";
                $context["favicon"] = $this->getAttribute($context["icon"], "name", []);
                // line 20
                echo "    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['icon'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        // line 22
        echo "
<link rel=\"icon\" href=\"";
        // line 23
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc(("theme://images/" . ($context["favicon"] ?? null)), true);
        echo "\" />

";
        // line 25
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 38
        echo "
";
        // line 39
        echo $this->getAttribute(($context["assets"] ?? null), "css", [], "method");
        echo "

";
        // line 41
        $this->displayBlock('javascripts', $context, $blocks);
        // line 60
        echo "
";
        // line 61
        echo $this->getAttribute(($context["assets"] ?? null), "js", [], "method");
        echo "

";
        
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->leave($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof);

    }

    // line 25
    public function block_stylesheets($context, array $blocks = [])
    {
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4 = $this->env->getExtension("Twig\\Extension\\ProfilerExtension");
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->enter($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 26
        echo "    <link href='//fonts.googleapis.com/css?family=Source+Sans+Pro:300,900' rel='stylesheet' type='text/css'>
    ";
        // line 27
        $this->getAttribute(($context["assets"] ?? null), "add", [0 => "theme://assets/css/font-awesome.min.css"], "method");
        // line 28
        echo "    ";
        $this->getAttribute(($context["assets"] ?? null), "add", [0 => "theme://assets/css/main.css"], "method");
        // line 29
        echo "
    ";
        // line 30
        if ((($this->getAttribute(($context["browser"] ?? null), "getBrowser", []) == "msie") && ($this->getAttribute(($context["browser"] ?? null), "getVersion", []) <= 8))) {
            // line 31
            echo "        ";
            $this->getAttribute(($context["assets"] ?? null), "add", [0 => "theme://assets/css/ie8.css"], "method");
            // line 32
            echo "    ";
        }
        // line 33
        echo "
    ";
        // line 34
        if ((($this->getAttribute(($context["browser"] ?? null), "getBrowser", []) == "msie") && ($this->getAttribute(($context["browser"] ?? null), "getVersion", []) == 9))) {
            // line 35
            echo "        ";
            $this->getAttribute(($context["assets"] ?? null), "add", [0 => "theme://assets/css/ie9.css"], "method");
            // line 36
            echo "    ";
        }
        
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->leave($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof);

    }

    // line 41
    public function block_javascripts($context, array $blocks = [])
    {
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4 = $this->env->getExtension("Twig\\Extension\\ProfilerExtension");
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->enter($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 42
        echo "    ";
        if ((($this->getAttribute(($context["browser"] ?? null), "getBrowser", []) == "msie") && ($this->getAttribute(($context["browser"] ?? null), "getVersion", []) <= 8))) {
            // line 43
            echo "        ";
            $this->getAttribute(($context["assets"] ?? null), "add", [0 => "theme://assets/js/ie/html5shiv.js"], "method");
            // line 44
            echo "    ";
        }
        // line 45
        echo "
    ";
        // line 46
        if ((($this->getAttribute(($context["browser"] ?? null), "getBrowser", []) == "msie") && ($this->getAttribute(($context["browser"] ?? null), "getVersion", []) <= 8))) {
            // line 47
            echo "        ";
            $this->getAttribute(($context["assets"] ?? null), "add", [0 => "theme://assets/js/ie/respond.min.js"], "method");
            // line 48
            echo "    ";
        }
        // line 49
        echo "
    ";
        // line 50
        $this->getAttribute(($context["assets"] ?? null), "addJs", [0 => "jquery", 1 => 101], "method");
        // line 51
        echo "    ";
        $this->getAttribute(($context["assets"] ?? null), "add", [0 => "theme://assets/js/jquery.poptrox.min.js"], "method");
        // line 52
        echo "    ";
        $this->getAttribute(($context["assets"] ?? null), "add", [0 => "theme://assets/js/jquery.dropotron.min.js"], "method");
        // line 53
        echo "    ";
        $this->getAttribute(($context["assets"] ?? null), "add", [0 => "theme://assets/js/jquery.onvisible.min.js"], "method");
        // line 54
        echo "    ";
        $this->getAttribute(($context["assets"] ?? null), "add", [0 => "theme://assets/js/jquery.scrolly.min.js"], "method");
        // line 55
        echo "    ";
        $this->getAttribute(($context["assets"] ?? null), "add", [0 => "theme://assets/js/jquery.scrollex.min.js"], "method");
        // line 56
        echo "    ";
        $this->getAttribute(($context["assets"] ?? null), "add", [0 => "theme://assets/js/skel.min.js"], "method");
        // line 57
        echo "    ";
        $this->getAttribute(($context["assets"] ?? null), "add", [0 => "theme://assets/js/util.js"], "method");
        // line 58
        echo "    ";
        $this->getAttribute(($context["assets"] ?? null), "add", [0 => "theme://assets/js/main.js"], "method");
        
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->leave($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof);

    }

    public function getTemplateName()
    {
        return "partials/head.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  263 => 58,  260 => 57,  257 => 56,  254 => 55,  251 => 54,  248 => 53,  245 => 52,  242 => 51,  240 => 50,  237 => 49,  234 => 48,  231 => 47,  229 => 46,  226 => 45,  223 => 44,  220 => 43,  217 => 42,  211 => 41,  203 => 36,  200 => 35,  198 => 34,  195 => 33,  192 => 32,  189 => 31,  187 => 30,  184 => 29,  181 => 28,  179 => 27,  176 => 26,  170 => 25,  160 => 61,  157 => 60,  155 => 41,  150 => 39,  147 => 38,  145 => 25,  140 => 23,  137 => 22,  130 => 20,  127 => 19,  122 => 18,  120 => 17,  118 => 16,  115 => 15,  109 => 13,  107 => 12,  104 => 11,  70 => 8,  67 => 7,  63 => 6,  48 => 2,  36 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% block head %}
<title>{% if header.title %}{{ header.title }} {% else %} {{ site.title }} {% endif %}</title>
<meta charset=\"utf-8\" />
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\" />

{% for meta in page.metadata %}
    {% if meta.name != 'generator' %}
    <meta {% if meta.name %}name=\"{{ meta.name }}\" {% endif %}{% if meta.http_equiv %}http-equiv=\"{{ meta.http_equiv }}\" {% endif %}{% if meta.charset %}charset=\"{{ meta.charset }}\" {% endif %}{% if meta.property %}property=\"{{ meta.property }}\" {% endif %}{% if meta.content %}content=\"{{ meta.content }}\" {% endif %}/>
    {% endif %}
{% endfor %}

{% if header.robots %}
<meta name=\"robots\" content=\"{{ header.robots }}\">
{% endif %}

{% set favicon = 'favicon.png' %}
{% if theme_config.favicon|length > 0 %}
    {% for icon in theme_config.favicon %}
        {% set favicon = icon.name %}
    {% endfor %}
{% endif %}

<link rel=\"icon\" href=\"{{ url('theme://images/' ~ favicon, true) }}\" />

{% block stylesheets %}
    <link href='//fonts.googleapis.com/css?family=Source+Sans+Pro:300,900' rel='stylesheet' type='text/css'>
    {% do assets.add('theme://assets/css/font-awesome.min.css') %}
    {% do assets.add('theme://assets/css/main.css') %}

    {% if browser.getBrowser == 'msie' and browser.getVersion <= 8 %}
        {% do assets.add('theme://assets/css/ie8.css') %}
    {% endif %}

    {% if browser.getBrowser == 'msie' and browser.getVersion == 9 %}
        {% do assets.add('theme://assets/css/ie9.css') %}
    {% endif %}
{% endblock %}

{{ assets.css() }}

{% block javascripts %}
    {% if browser.getBrowser == 'msie' and browser.getVersion <= 8 %}
        {% do assets.add('theme://assets/js/ie/html5shiv.js') %}
    {% endif %}

    {% if browser.getBrowser == 'msie' and browser.getVersion <= 8 %}
        {% do assets.add('theme://assets/js/ie/respond.min.js') %}
    {% endif %}

    {% do assets.addJs('jquery', 101) %}
    {% do assets.add('theme://assets/js/jquery.poptrox.min.js') %}
    {% do assets.add('theme://assets/js/jquery.dropotron.min.js') %}
    {% do assets.add('theme://assets/js/jquery.onvisible.min.js') %}
    {% do assets.add('theme://assets/js/jquery.scrolly.min.js') %}
    {% do assets.add('theme://assets/js/jquery.scrollex.min.js') %}
    {% do assets.add('theme://assets/js/skel.min.js') %}
    {% do assets.add('theme://assets/js/util.js') %}
    {% do assets.add('theme://assets/js/main.js') %}
{% endblock %}

{{ assets.js() }}

{% endblock head %}
", "partials/head.html.twig", "/var/www/grav/user/themes/big-picture/templates/partials/head.html.twig");
    }
}
