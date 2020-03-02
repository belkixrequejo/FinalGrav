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

/* forms/fields/select/select.html.twig */
class __TwigTemplate_940bd9c8280e44a5834991391cb8f9220f8ab11b335923b8994dbdf7c9adc7e2 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'global_attributes' => [$this, 'block_global_attributes'],
            'input' => [$this, 'block_input'],
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
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->enter($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "forms/fields/select/select.html.twig"));

        $this->parent = $this->loadTemplate("forms/field.html.twig", "forms/fields/select/select.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->leave($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof);

    }

    // line 3
    public function block_global_attributes($context, array $blocks = [])
    {
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4 = $this->env->getExtension("Twig\\Extension\\ProfilerExtension");
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->enter($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "global_attributes"));

        // line 4
        echo "    data-grav-selectize=\"";
        echo twig_escape_filter($this->env, twig_jsonencode_filter((($this->getAttribute(($context["field"] ?? null), "selectize", [], "any", true, true)) ? ($this->getAttribute(($context["field"] ?? null), "selectize", [])) : ([]))), "html_attr");
        echo "\"
    ";
        // line 5
        $this->displayParentBlock("global_attributes", $context, $blocks);
        echo "
";
        
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->leave($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof);

    }

    // line 8
    public function block_input($context, array $blocks = [])
    {
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4 = $this->env->getExtension("Twig\\Extension\\ProfilerExtension");
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->enter($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "input"));

        // line 9
        echo "    <div class=\"";
        ((($context["form_field_wrapper_classes"] ?? null)) ? (print (twig_escape_filter($this->env, ($context["form_field_wrapper_classes"] ?? null), "html", null, true))) : (print ("form-select-wrapper")));
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["field"] ?? null), "size", []), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["field"] ?? null), "wrapper_classes", []), "html", null, true);
        echo "\">
        <select name=\"";
        // line 10
        echo twig_escape_filter($this->env, ($this->env->getExtension('Grav\Common\Twig\TwigExtension')->fieldNameFilter((($context["scope"] ?? null) . $this->getAttribute(($context["field"] ?? null), "name", []))) . (($this->getAttribute(($context["field"] ?? null), "multiple", [])) ? ("[]") : (""))), "html", null, true);
        echo "\"
                class=\"";
        // line 11
        echo twig_escape_filter($this->env, ($context["form_field_select_classes"] ?? null), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["field"] ?? null), "classes", []), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["field"] ?? null), "size", []), "html", null, true);
        echo "\"
                ";
        // line 12
        if ($this->getAttribute(($context["field"] ?? null), "id", [], "any", true, true)) {
            echo "id=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["field"] ?? null), "id", []));
            echo "\" ";
        }
        // line 13
        echo "                ";
        if ($this->getAttribute(($context["field"] ?? null), "style", [], "any", true, true)) {
            echo "style=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["field"] ?? null), "style", []));
            echo "\" ";
        }
        // line 14
        echo "                ";
        if ($this->getAttribute(($context["field"] ?? null), "disabled", [])) {
            echo "disabled=\"disabled\"";
        }
        // line 15
        echo "                ";
        if (twig_in_filter($this->getAttribute(($context["field"] ?? null), "autofocus", []), [0 => "on", 1 => "true", 2 => 1])) {
            echo "autofocus=\"autofocus\"";
        }
        // line 16
        echo "                ";
        if (twig_in_filter($this->getAttribute(($context["field"] ?? null), "novalidate", []), [0 => "on", 1 => "true", 2 => 1])) {
            echo "novalidate=\"novalidate\"";
        }
        // line 17
        echo "                ";
        if (($context["required"] ?? null)) {
            echo "required=\"required\"";
        }
        // line 18
        echo "                ";
        if (twig_in_filter($this->getAttribute(($context["field"] ?? null), "multiple", []), [0 => "on", 1 => "true", 2 => 1])) {
            echo "multiple=\"multiple\"";
        }
        // line 19
        echo "                ";
        if (($this->getAttribute(($context["field"] ?? null), "disabled", []) || ($context["isDisabledToggleable"] ?? null))) {
            echo "disabled=\"disabled\"";
        }
        // line 20
        echo "                ";
        if ($this->getAttribute(($context["field"] ?? null), "tabindex", [])) {
            echo "tabindex=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["field"] ?? null), "tabindex", []), "html", null, true);
            echo "\"";
        }
        // line 21
        echo "                ";
        if ($this->getAttribute(($context["field"] ?? null), "form", [])) {
            echo "form=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["field"] ?? null), "form", []), "html", null, true);
            echo "\"";
        }
        // line 22
        echo "                ";
        if ($this->getAttribute(($context["field"] ?? null), "key", [])) {
            // line 23
            echo "                    data-key-observe=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\TwigExtension')->fieldNameFilter((($context["scope"] ?? null) . $this->getAttribute(($context["field"] ?? null), "name", []))), "html", null, true);
            echo "\"
                ";
        }
        // line 25
        echo "                ";
        if ($this->getAttribute(($context["field"] ?? null), "datasets", [])) {
            // line 26
            echo "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["field"] ?? null), "datasets", []));
            foreach ($context['_seq'] as $context["datakey"] => $context["datavalue"]) {
                // line 27
                echo "                        data-";
                echo twig_escape_filter($this->env, $context["datakey"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["datavalue"], "html_attr");
                echo "\"
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['datakey'], $context['datavalue'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 29
            echo "                ";
        }
        // line 30
        echo "                >
            ";
        // line 31
        if ($this->getAttribute(($context["field"] ?? null), "placeholder", [])) {
            echo "<option value=\"\" disabled selected>";
            echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate($this->env, $this->getAttribute(($context["field"] ?? null), "placeholder", []));
            echo "</option>";
        }
        // line 32
        echo "
            ";
        // line 33
        $context["options"] = $this->getAttribute(($context["field"] ?? null), "options", []);
        // line 34
        echo "            ";
        if (($this->getAttribute($this->getAttribute(($context["field"] ?? null), "selectize", []), "create", []) && $this->getAttribute(($context["field"] ?? null), "multiple", []))) {
            // line 35
            echo "                ";
            $context["options"] = array_unique(twig_array_merge(($context["options"] ?? null), (((isset($context["value"]) || array_key_exists("value", $context))) ? (_twig_default_filter(($context["value"] ?? null), [])) : ([]))));
            // line 36
            echo "            ";
        }
        // line 37
        echo "
            ";
        // line 38
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["options"] ?? null));
        foreach ($context['_seq'] as $context["key"] => $context["item_value"]) {
            // line 39
            echo "                ";
            if ((twig_test_iterable($context["item_value"]) && $this->getAttribute($context["item_value"], "value", []))) {
                // line 40
                echo "                    ";
                $context["akey"] = ((($this->getAttribute(($context["field"] ?? null), "selectize", []) && $this->getAttribute(($context["field"] ?? null), "multiple", []))) ? ($context["item_value"]) : ($context["key"]));
                // line 41
                echo "                    ";
                $context["avalue"] = $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate($this->env, $this->getAttribute($context["item_value"], "value", []));
                // line 42
                echo "                    <option ";
                echo (($this->getAttribute($context["item_value"], "disabled", [])) ? ("disabled=\"disabled\"") : (""));
                echo "
                        ";
                // line 43
                echo (($this->getAttribute($context["item_value"], "selected", [])) ? ("selected=\"selected\"") : (""));
                echo "
                        ";
                // line 44
                (($this->getAttribute($context["item_value"], "label", [])) ? (print (twig_escape_filter($this->env, ("label=" . $this->getAttribute($context["item_value"], "label", [])), "html", null, true))) : (print ("")));
                echo "
                        value=\"";
                // line 45
                echo twig_escape_filter($this->env, $this->getAttribute($context["item_value"], "akey", []), "html", null, true);
                echo "\"
                    >
                        ";
                // line 47
                echo ($context["avalue"] ?? null);
                echo "
                    </option>
                ";
            } elseif (twig_test_iterable(            // line 49
$context["item_value"])) {
                // line 50
                echo "                    ";
                $context["optgroup_label"] = twig_first($this->env, twig_get_array_keys_filter($context["item_value"]));
                // line 51
                echo "                    <optgroup label=\"";
                echo twig_escape_filter($this->env, ($context["optgroup_label"] ?? null), "html", null, true);
                echo "\">
                      ";
                // line 52
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["field"] ?? null), "options", []), $context["key"], [], "array"), ($context["optgroup_label"] ?? null), [], "array"));
                foreach ($context['_seq'] as $context["subkey"] => $context["suboption"]) {
                    // line 53
                    echo "                          ";
                    $context["selected"] = (($this->getAttribute(($context["field"] ?? null), "selectize", [])) ? ($context["suboption"]) : ($context["subkey"]));
                    // line 54
                    echo "                          ";
                    $context["item_value"] = ((($this->getAttribute(($context["field"] ?? null), "selectize", []) && $this->getAttribute(($context["field"] ?? null), "multiple", []))) ? ($context["suboption"]) : ($context["subkey"]));
                    // line 55
                    echo "                          <option ";
                    if ((($context["subkey"] == ($context["value"] ?? null)) || ($this->getAttribute(($context["field"] ?? null), "multiple", []) && twig_in_filter(($context["selected"] ?? null), ($context["value"] ?? null))))) {
                        echo "selected=\"selected\"";
                    }
                    echo " value=\"";
                    echo twig_escape_filter($this->env, $context["suboption"], "html", null, true);
                    echo "\">
                            ";
                    // line 56
                    echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate($this->env, $context["suboption"]);
                    echo "
                          </option>
                      ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['subkey'], $context['suboption'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 59
                echo "                    </optgroup>
                ";
            } else {
                // line 61
                echo "                    ";
                $context["selected"] = (($this->getAttribute(($context["field"] ?? null), "selectize", [])) ? ($context["item_value"]) : ($context["key"]));
                // line 62
                echo "                    ";
                $context["val"] = ((($this->getAttribute(($context["field"] ?? null), "selectize", []) && $this->getAttribute(($context["field"] ?? null), "multiple", []))) ? ($context["item_value"]) : ($context["key"]));
                // line 63
                echo "                    <option ";
                if (((($context["val"] ?? null) == ($context["value"] ?? null)) || ($this->getAttribute(($context["field"] ?? null), "multiple", []) && twig_in_filter(($context["selected"] ?? null), ($context["value"] ?? null))))) {
                    echo "selected=\"selected\"";
                }
                echo " value=\"";
                echo twig_escape_filter($this->env, ($context["val"] ?? null), "html", null, true);
                echo "\">";
                echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate($this->env, $context["item_value"]);
                echo "</option>
                ";
            }
            // line 65
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['item_value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 66
        echo "
        </select>
    </div>
";
        
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->leave($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof);

    }

    public function getTemplateName()
    {
        return "forms/fields/select/select.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  309 => 66,  303 => 65,  291 => 63,  288 => 62,  285 => 61,  281 => 59,  272 => 56,  263 => 55,  260 => 54,  257 => 53,  253 => 52,  248 => 51,  245 => 50,  243 => 49,  238 => 47,  233 => 45,  229 => 44,  225 => 43,  220 => 42,  217 => 41,  214 => 40,  211 => 39,  207 => 38,  204 => 37,  201 => 36,  198 => 35,  195 => 34,  193 => 33,  190 => 32,  184 => 31,  181 => 30,  178 => 29,  167 => 27,  162 => 26,  159 => 25,  153 => 23,  150 => 22,  143 => 21,  136 => 20,  131 => 19,  126 => 18,  121 => 17,  116 => 16,  111 => 15,  106 => 14,  99 => 13,  93 => 12,  85 => 11,  81 => 10,  72 => 9,  66 => 8,  57 => 5,  52 => 4,  46 => 3,  30 => 1,);
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

{% block global_attributes %}
    data-grav-selectize=\"{{ (field.selectize is defined ? field.selectize : {})|json_encode()|e('html_attr') }}\"
    {{ parent() }}
{% endblock %}

{% block input %}
    <div class=\"{{ form_field_wrapper_classes ?: 'form-select-wrapper' }} {{ field.size }} {{ field.wrapper_classes }}\">
        <select name=\"{{ (scope ~ field.name)|fieldName ~ (field.multiple ? '[]' : '') }}\"
                class=\"{{ form_field_select_classes }} {{ field.classes }} {{ field.size }}\"
                {% if field.id is defined %}id=\"{{ field.id|e }}\" {% endif %}
                {% if field.style is defined %}style=\"{{ field.style|e }}\" {% endif %}
                {% if field.disabled %}disabled=\"disabled\"{% endif %}
                {% if field.autofocus in ['on', 'true', 1] %}autofocus=\"autofocus\"{% endif %}
                {% if field.novalidate in ['on', 'true', 1] %}novalidate=\"novalidate\"{% endif %}
                {% if required %}required=\"required\"{% endif %}
                {% if field.multiple in ['on', 'true', 1] %}multiple=\"multiple\"{% endif %}
                {% if field.disabled or isDisabledToggleable %}disabled=\"disabled\"{% endif %}
                {% if field.tabindex %}tabindex=\"{{ field.tabindex }}\"{% endif %}
                {% if field.form %}form=\"{{ field.form }}\"{% endif %}
                {% if field.key %}
                    data-key-observe=\"{{ (scope ~ field.name)|fieldName }}\"
                {% endif %}
                {% if field.datasets %}
                    {% for datakey, datavalue in field.datasets %}
                        data-{{ datakey }}=\"{{ datavalue|e('html_attr') }}\"
                    {% endfor %}
                {% endif %}
                >
            {% if field.placeholder %}<option value=\"\" disabled selected>{{ field.placeholder|t|raw }}</option>{% endif %}

            {% set options = field.options %}
            {% if field.selectize.create and field.multiple %}
                {% set options = options|merge(value|default([]))|array_unique %}
            {% endif %}

            {% for key, item_value in options %}
                {% if item_value is iterable and item_value.value %}
                    {% set akey = field.selectize and field.multiple ? item_value : key %}
                    {% set avalue = item_value.value|t %}
                    <option {{ item_value.disabled ? 'disabled=\"disabled\"' : '' }}
                        {{ item_value.selected ? 'selected=\"selected\"' : '' }}
                        {{ item_value.label    ? 'label=' ~ item_value.label : '' }}
                        value=\"{{ item_value.akey }}\"
                    >
                        {{ avalue|raw }}
                    </option>
                {% elseif item_value is iterable %}
                    {% set optgroup_label = item_value|keys|first %}
                    <optgroup label=\"{{ optgroup_label }}\">
                      {% for subkey, suboption in field.options[key][optgroup_label] %}
                          {% set selected = field.selectize ? suboption : subkey %}
                          {% set item_value = field.selectize and field.multiple ? suboption : subkey %}
                          <option {% if subkey == value or (field.multiple and selected in value) %}selected=\"selected\"{% endif %} value=\"{{ suboption }}\">
                            {{ suboption|t|raw }}
                          </option>
                      {% endfor %}
                    </optgroup>
                {% else %}
                    {% set selected = field.selectize ? item_value : key %}
                    {% set val = field.selectize and field.multiple ? item_value : key %}
                    <option {% if val == value or (field.multiple and selected in value) %}selected=\"selected\"{% endif %} value=\"{{ val }}\">{{ item_value|t|raw }}</option>
                {% endif %}
            {% endfor %}

        </select>
    </div>
{% endblock %}
", "forms/fields/select/select.html.twig", "/var/www/grav/user/plugins/form/templates/forms/fields/select/select.html.twig");
    }
}
