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

/* blog/beranda.twig */
class __TwigTemplate_8f7a47eefd900d41f3156df9d887a3e54b862769395101a61cc9918f297a3b07 extends \Twig\Template
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
        $this->parent = $this->loadTemplate("layout/default.twig", "blog/beranda.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_isi($context, array $blocks = [])
    {
        // line 4
        echo "    <div class=\"list-group\">
    \t";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["data"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["x"]) {
            // line 6
            echo "    \t    <a href=\"";
            echo twig_escape_filter($this->env, site_url(), "html", null, true);
            echo twig_escape_filter($this->env, $this->getAttribute($context["x"], "id", []), "html", null, true);
            echo "\" class=\"list-group-item hasil-pencarian-item\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["x"], "judul", []), "html", null, true);
            echo "</a>
    \t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['x'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 8
        echo "    </div>
";
    }

    // line 11
    public function block_bawah($context, array $blocks = [])
    {
        // line 12
        echo "    <div class=\"navbar navbar-default navbar-fixed-bottom\">
    \t<div class=\"container\">
    \t\t<div class=\"navbar-header\">
    \t\t\t<table class=\"table table-bordered\">
    \t\t\t\t<tbody>
    \t\t\t\t\t<tr>
    \t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control cari\">
\t\t\t\t\t\t\t\t\t<div class=\"input-group-addon hapus\">x</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</td>
    \t\t\t\t\t\t<td><a href=\"";
        // line 24
        echo twig_escape_filter($this->env, site_url(), "html", null, true);
        echo "tambah\" class=\"btn btn-default\">Tambah</a></td>
    \t\t\t\t\t</tr>
    \t\t\t\t</tbody>
    \t\t\t</table>
    \t\t</div>
    \t</div>
    </div>
";
    }

    // line 33
    public function block_head($context, array $blocks = [])
    {
        // line 34
        echo "    <style>
\t\tbody {
\t\t\tpadding-bottom: 50px;
\t\t}

        .hapus {
            cursor: pointer;
        }
    </style>
";
    }

    // line 45
    public function block_skrip($context, array $blocks = [])
    {
        // line 46
        echo "    <script type=\"text/javascript\">
        \$('.cari').on('keyup', function(){
            if (\$('.cari').val() != ''){
                \$('.hasil-pencarian-item').addClass('sembunyi')
                \$('.hasil-pencarian-item').each(function(){
                    if (\$(this).is(\":contains(\" + \$('.cari').val() + \")\")) {
                        \$(this).removeClass('sembunyi')
                    }
                })
            } else {
                \$('.hasil-pencarian-item').removeClass('sembunyi')
            }
        })

        \$('.hapus').each(function(){
            \$(this).click(function(){
                \$(this).parent().find('.form-control').val('')
                \$('.hasil-pencarian-item').removeClass('sembunyi')
            })
        })
    </script>
";
    }

    public function getTemplateName()
    {
        return "blog/beranda.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 46,  114 => 45,  101 => 34,  98 => 33,  86 => 24,  72 => 12,  69 => 11,  64 => 8,  52 => 6,  48 => 5,  45 => 4,  42 => 3,  32 => 1,);
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
    <div class=\"list-group\">
    \t{% for x in data %}
    \t    <a href=\"{{ site_url() }}{{ x.id }}\" class=\"list-group-item hasil-pencarian-item\">{{ x.judul }}</a>
    \t{% endfor %}
    </div>
{% endblock %}

{% block bawah %}
    <div class=\"navbar navbar-default navbar-fixed-bottom\">
    \t<div class=\"container\">
    \t\t<div class=\"navbar-header\">
    \t\t\t<table class=\"table table-bordered\">
    \t\t\t\t<tbody>
    \t\t\t\t\t<tr>
    \t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control cari\">
\t\t\t\t\t\t\t\t\t<div class=\"input-group-addon hapus\">x</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</td>
    \t\t\t\t\t\t<td><a href=\"{{ site_url() }}tambah\" class=\"btn btn-default\">Tambah</a></td>
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

        .hapus {
            cursor: pointer;
        }
    </style>
{% endblock %}

{% block skrip %}
    <script type=\"text/javascript\">
        \$('.cari').on('keyup', function(){
            if (\$('.cari').val() != ''){
                \$('.hasil-pencarian-item').addClass('sembunyi')
                \$('.hasil-pencarian-item').each(function(){
                    if (\$(this).is(\":contains(\" + \$('.cari').val() + \")\")) {
                        \$(this).removeClass('sembunyi')
                    }
                })
            } else {
                \$('.hasil-pencarian-item').removeClass('sembunyi')
            }
        })

        \$('.hapus').each(function(){
            \$(this).click(function(){
                \$(this).parent().find('.form-control').val('')
                \$('.hasil-pencarian-item').removeClass('sembunyi')
            })
        })
    </script>
{% endblock %}", "blog/beranda.twig", "/mnt/C48455A884559E2C/nitip/blog/application/views/blog/beranda.twig");
    }
}
