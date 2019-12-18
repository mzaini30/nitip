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

/* blog/tambah.twig */
class __TwigTemplate_eb5ed63fad0c041089e2191cc47a6638e1241a3e4fa6393286410695aded6b9c extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'isi' => [$this, 'block_isi'],
            'bawah' => [$this, 'block_bawah'],
            'skrip' => [$this, 'block_skrip'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "layout/default.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $this->parent = $this->loadTemplate("layout/default.twig", "blog/tambah.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_isi($context, array $blocks = [])
    {
        // line 4
        echo "    <form action=\"\" method=\"post\" class=\"form\">
        <div class=\"form-group\">
            <label for=\"\">Judul</label>
            <input type=\"text\" class=\"form-control\" required=\"\" name=\"judul\" value=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute(($context["data"] ?? null), "judul", []), "html", null, true);
        echo "\">
        </div>
        <div class=\"form-group\">
            <label for=\"\">Isi</label>
            <textarea name=\"isi\" id=\"\" cols=\"30\" rows=\"10\" class=\"form-control\">";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute(($context["data"] ?? null), "isi", []), "html", null, true);
        echo "</textarea>
        </div>
        <input type=\"submit\" class=\"submit sembunyi\" value=\"submit\">
    </form>
";
    }

    // line 17
    public function block_bawah($context, array $blocks = [])
    {
        // line 18
        echo "    <div class=\"navbar navbar-default navbar-fixed-bottom\">
        <div class=\"container\">
            <div class=\"navbar-header\">
                <table class=\"table table-bordered\">
                    <tbody>
                        <tr>
                            <td><a href=\"#!\" class=\"btn btn-success oke\">Oke</a></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
";
    }

    // line 33
    public function block_skrip($context, array $blocks = [])
    {
        // line 34
        echo "    <script>
        \$('.oke').click(function(){
            \$('.submit').click()
        });
    </script>
";
    }

    public function getTemplateName()
    {
        return "blog/tambah.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 34,  85 => 33,  68 => 18,  65 => 17,  56 => 11,  49 => 7,  44 => 4,  41 => 3,  31 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'layout/default.twig' %}

{% block isi %}
    <form action=\"\" method=\"post\" class=\"form\">
        <div class=\"form-group\">
            <label for=\"\">Judul</label>
            <input type=\"text\" class=\"form-control\" required=\"\" name=\"judul\" value=\"{{ data.judul }}\">
        </div>
        <div class=\"form-group\">
            <label for=\"\">Isi</label>
            <textarea name=\"isi\" id=\"\" cols=\"30\" rows=\"10\" class=\"form-control\">{{ data.isi }}</textarea>
        </div>
        <input type=\"submit\" class=\"submit sembunyi\" value=\"submit\">
    </form>
{% endblock %}

{% block bawah %}
    <div class=\"navbar navbar-default navbar-fixed-bottom\">
        <div class=\"container\">
            <div class=\"navbar-header\">
                <table class=\"table table-bordered\">
                    <tbody>
                        <tr>
                            <td><a href=\"#!\" class=\"btn btn-success oke\">Oke</a></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
{% endblock %}

{% block skrip %}
    <script>
        \$('.oke').click(function(){
            \$('.submit').click()
        });
    </script>
{% endblock %}", "blog/tambah.twig", "/mnt/C48455A884559E2C/nitip/blog/application/views/blog/tambah.twig");
    }
}
