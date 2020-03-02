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

/* partials/tools-scheduler.html.twig */
class __TwigTemplate_aeeef298baeedfdd247830d0688b653c73261974b858821a3bb4951a9815c54f extends \Twig\Template
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
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->enter($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partials/tools-scheduler.html.twig"));

        // line 1
        echo "<div class=\"scheduler-content\">

    ";
        // line 3
        $context["data"] = $this->getAttribute(($context["admin"] ?? null), "data", [0 => "config/scheduler"], "method");
        // line 4
        echo "    ";
        $context["cron_status"] = $this->getAttribute($this->getAttribute(($context["grav"] ?? null), "scheduler", []), "isCrontabSetup", [], "method");
        // line 5
        echo "
    ";
        // line 6
        if ((($context["cron_status"] ?? null) == 1)) {
            // line 7
            echo "        <div class=\"alert notice secondary-accent\">
            <div id=\"show-instructions\" class=\"button button-small\"><i class=\"fa fa-clock-o\"></i> ";
            // line 8
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.SCHEDULER_INSTALL_INSTRUCTIONS"), "html", null, true);
            echo "</div>
            <i class=\"fa fa-check\"></i> ";
            // line 9
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.SCHEDULER_INSTALLED_READY"), "html", null, true);
            echo "
        </div>
    ";
        } elseif ((        // line 11
($context["cron_status"] ?? null) == 2)) {
            // line 12
            echo "        <div class=\"alert warning\"> ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.SCHEDULER_CRON_NA"), "html", null, true);
            echo "</div>
    ";
        } else {
            // line 14
            echo "        <div class=\"alert warning\"> ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.SCHEDULER_NOT_ENABLED"), "html", null, true);
            echo "</div>
    ";
        }
        // line 16
        echo "
    <div id=\"cron-install\" class=\"form-border overlay ";
        // line 17
        echo (((($context["cron_status"] ?? null) == 1)) ? ("hide") : (""));
        echo "\">
        <pre><code>";
        // line 18
        echo twig_escape_filter($this->env, twig_trim_filter($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "scheduler", []), "getCronCommand", [], "method")), "html", null, true);
        echo "</code></pre>

        <p>";
        // line 20
        echo $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.SCHEDULER_POST_INSTRUCTIONS");
        echo "</p>
    </div>

    ";
        // line 23
        $this->loadTemplate("partials/blueprints.html.twig", "partials/tools-scheduler.html.twig", 23)->display(twig_array_merge($context, ["blueprints" => $this->getAttribute(($context["data"] ?? null), "blueprints", []), "data" => ($context["data"] ?? null)]));
        // line 24
        echo "
    ";
        // line 25
        $this->loadTemplate("partials/modal-changes-detected.html.twig", "partials/tools-scheduler.html.twig", 25)->display($context);
        // line 26
        echo "
    <script>
        \$('#show-instructions').click(function() {
            \$('#cron-install').toggleClass( \"hide\" );
        });
    </script>

</div>
";
        
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->leave($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof);

    }

    public function getTemplateName()
    {
        return "partials/tools-scheduler.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  98 => 26,  96 => 25,  93 => 24,  91 => 23,  85 => 20,  80 => 18,  76 => 17,  73 => 16,  67 => 14,  61 => 12,  59 => 11,  54 => 9,  50 => 8,  47 => 7,  45 => 6,  42 => 5,  39 => 4,  37 => 3,  33 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"scheduler-content\">

    {% set data = admin.data('config/scheduler') %}
    {% set cron_status = grav.scheduler.isCrontabSetup()%}

    {% if cron_status == 1 %}
        <div class=\"alert notice secondary-accent\">
            <div id=\"show-instructions\" class=\"button button-small\"><i class=\"fa fa-clock-o\"></i> {{ \"PLUGIN_ADMIN.SCHEDULER_INSTALL_INSTRUCTIONS\"|tu }}</div>
            <i class=\"fa fa-check\"></i> {{ \"PLUGIN_ADMIN.SCHEDULER_INSTALLED_READY\"|tu }}
        </div>
    {% elseif cron_status == 2 %}
        <div class=\"alert warning\"> {{ \"PLUGIN_ADMIN.SCHEDULER_CRON_NA\"|tu }}</div>
    {% else %}
        <div class=\"alert warning\"> {{ \"PLUGIN_ADMIN.SCHEDULER_NOT_ENABLED\"|tu }}</div>
    {% endif %}

    <div id=\"cron-install\" class=\"form-border overlay {{ cron_status == 1 ? 'hide' : ''}}\">
        <pre><code>{{- grav.scheduler.getCronCommand()|trim -}}</code></pre>

        <p>{{ \"PLUGIN_ADMIN.SCHEDULER_POST_INSTRUCTIONS\"|tu|raw }}</p>
    </div>

    {% include 'partials/blueprints.html.twig' with { blueprints: data.blueprints, data: data } %}

    {% include 'partials/modal-changes-detected.html.twig' %}

    <script>
        \$('#show-instructions').click(function() {
            \$('#cron-install').toggleClass( \"hide\" );
        });
    </script>

</div>
", "partials/tools-scheduler.html.twig", "/var/www/grav/user/plugins/admin/themes/grav/templates/partials/tools-scheduler.html.twig");
    }
}