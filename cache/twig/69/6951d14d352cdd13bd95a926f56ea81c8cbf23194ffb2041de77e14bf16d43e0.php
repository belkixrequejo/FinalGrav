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

/* partials/noscript.html.twig */
class __TwigTemplate_20e608936b9e4c86678f4bfb50c0bda2b72b2e3299c43e8f541ca9ad16fed8dd extends \Twig\Template
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
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->enter($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partials/noscript.html.twig"));

        // line 1
        echo "<style>
.error-message {
  background-color: #fce4e4;
  border: 1px solid #fcc2c3;
  width: 100%;
  padding: 20px 30px;
}
.error-text {
  color: #cc0033;
  font-family: Helvetica, Arial, sans-serif;
  width: 100%;
  font-weight: bold;
  line-height: 20px;
  text-shadow: 1px 1px rgba(250,250,250,.3);
}
.full-height {
  display: block;
  width: 100%;
  height: 100%;
}
</style>

<div id=\"noscript\" class=\"full-height\">
    <main id=\"admin-main\" class=\"full-height\">
        <div id=\"titlebar\" class=\"titlebar\">
            <h1><i class=\"fa fa-fw fa-exclamation-triangle\"></i>";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.ERROR"), "html", null, true);
        echo "</h1>
        </div>
        <div class=\"full-height\">
                <div class=\"error-message ";
        // line 29
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", []), "admin", []), "content_padding", [])) {
            echo "content-padding";
        }
        echo "\">
                    <span class=\"error-text\">";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.ADMIN_NOSCRIPT_MSG"), "html", null, true);
        echo "</span>
                </div>
        </div>
    </main>
</div>

<script type=\"text/javascript\">
  function checkjs() {
    var element = document.getElementById(\"noscript\");
    element.style.display = 'none';
  }
  checkjs();
</script>
";
        
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->leave($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof);

    }

    public function getTemplateName()
    {
        return "partials/noscript.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 30,  66 => 29,  60 => 26,  33 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<style>
.error-message {
  background-color: #fce4e4;
  border: 1px solid #fcc2c3;
  width: 100%;
  padding: 20px 30px;
}
.error-text {
  color: #cc0033;
  font-family: Helvetica, Arial, sans-serif;
  width: 100%;
  font-weight: bold;
  line-height: 20px;
  text-shadow: 1px 1px rgba(250,250,250,.3);
}
.full-height {
  display: block;
  width: 100%;
  height: 100%;
}
</style>

<div id=\"noscript\" class=\"full-height\">
    <main id=\"admin-main\" class=\"full-height\">
        <div id=\"titlebar\" class=\"titlebar\">
            <h1><i class=\"fa fa-fw fa-exclamation-triangle\"></i>{{ \"PLUGIN_ADMIN.ERROR\"|tu }}</h1>
        </div>
        <div class=\"full-height\">
                <div class=\"error-message {% if config.plugins.admin.content_padding %}content-padding{% endif %}\">
                    <span class=\"error-text\">{{ \"PLUGIN_ADMIN.ADMIN_NOSCRIPT_MSG\"|tu }}</span>
                </div>
        </div>
    </main>
</div>

<script type=\"text/javascript\">
  function checkjs() {
    var element = document.getElementById(\"noscript\");
    element.style.display = 'none';
  }
  checkjs();
</script>
", "partials/noscript.html.twig", "/var/www/grav/user/plugins/admin/themes/grav/templates/partials/noscript.html.twig");
    }
}
