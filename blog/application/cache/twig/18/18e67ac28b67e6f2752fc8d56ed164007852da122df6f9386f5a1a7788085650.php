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

/* blog/tampil.twig */
class __TwigTemplate_ecbc6a97071198ce100a0a8df0bfd7c3a2ce0fe862a3dc0f7927b9157a887c0b extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'isi' => [$this, 'block_isi'],
            'bawah' => [$this, 'block_bawah'],
            'head' => [$this, 'block_head'],
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
        $this->parent = $this->loadTemplate("layout/default.twig", "blog/tampil.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_isi($context, array $blocks = [])
    {
        // line 4
        echo "    <h3>";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["data"] ?? null), "judul", []), "html", null, true);
        echo "</h3>
    <p class=\"isi\">";
        // line 5
        echo twig_escape_filter($this->env, $this->getAttribute(($context["data"] ?? null), "isi", []), "html", null, true);
        echo "</p>
    <p>";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute(($context["data"] ?? null), "tanggal", []), "html", null, true);
        echo "</p>
";
    }

    // line 9
    public function block_bawah($context, array $blocks = [])
    {
        // line 10
        echo "    <div class=\"navbar navbar-default navbar-fixed-bottom\">
    \t<div class=\"container\">
    \t\t<div class=\"navbar-header\">
    \t\t\t<table class=\"table table-bordered\">
    \t\t\t\t<tbody>
    \t\t\t\t\t<tr>
                            <td><a href=\"";
        // line 16
        echo twig_escape_filter($this->env, site_url(), "html", null, true);
        echo "tambah\" class=\"btn btn-default\">Tambah</a></td>
    \t\t\t\t\t\t<td><a href=\"";
        // line 17
        echo twig_escape_filter($this->env, site_url(), "html", null, true);
        echo "edit/";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["data"] ?? null), "id", []), "html", null, true);
        echo "\" class=\"btn btn-warning\">Edit</a></td>
                            <td><a href=\"#!\" class=\"btn btn-danger hapus\">Hapus</a></td>
    \t\t\t\t\t</tr>
    \t\t\t\t</tbody>
    \t\t\t</table>
    \t\t</div>
    \t</div>
    </div>
";
    }

    // line 27
    public function block_head($context, array $blocks = [])
    {
        // line 28
        echo "    <style>
\t\tbody {
\t\t\tpadding-bottom: 50px;
\t\t}

        h3 {
            margin-top: 0;
        }

        .isi {
            white-space: pre-wrap;
        }
    </style>
";
    }

    // line 43
    public function block_skrip($context, array $blocks = [])
    {
        // line 44
        echo "    <script>
        \$('.hapus').click(function(){
            hapus = confirm('Hapus kah?')
            if (hapus){
                location.href = '";
        // line 48
        echo twig_escape_filter($this->env, site_url(), "html", null, true);
        echo "hapus/";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["data"] ?? null), "id", []), "html", null, true);
        echo "'
            }
        });
    </script>
";
    }

    public function getTemplateName()
    {
        return "blog/tampil.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  119 => 48,  113 => 44,  110 => 43,  93 => 28,  90 => 27,  75 => 17,  71 => 16,  63 => 10,  60 => 9,  54 => 6,  50 => 5,  45 => 4,  42 => 3,  32 => 1,);
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
    <h3>{{ data.judul }}</h3>
    <p class=\"isi\">{{ data.isi }}</p>
    <p>{{ data.tanggal }}</p>
{% endblock %}

{% block bawah %}
    <div class=\"navbar navbar-default navbar-fixed-bottom\">
    \t<div class=\"container\">
    \t\t<div class=\"navbar-header\">
    \t\t\t<table class=\"table table-bordered\">
    \t\t\t\t<tbody>
    \t\t\t\t\t<tr>
                            <td><a href=\"{{ site_url() }}tambah\" class=\"btn btn-default\">Tambah</a></td>
    \t\t\t\t\t\t<td><a href=\"{{ site_url() }}edit/{{ data.id }}\" class=\"btn btn-warning\">Edit</a></td>
                            <td><a href=\"#!\" class=\"btn btn-danger hapus\">Hapus</a></td>
    \t\t\t\t\t</tr>
    \t\t\t\t</tbody>
    \t\t\t</table>
    \t\t</div>
    \t</div>
    </div>
{% endblock %}

{% block head %}
    <style>
\t\tbody {
\t\t\tpadding-bottom: 50px;
\t\t}

        h3 {
            margin-top: 0;
        }

        .isi {
            white-space: pre-wrap;
        }
    </style>
{% endblock %}

{% block skrip %}
    <script>
        \$('.hapus').click(function(){
            hapus = confirm('Hapus kah?')
            if (hapus){
                location.href = '{{ site_url() }}hapus/{{ data.id }}'
            }
        });
    </script>
{% endblock %}", "blog/tampil.twig", "/mnt/C48455A884559E2C/nitip/blog/application/views/blog/tampil.twig");
    }
}
