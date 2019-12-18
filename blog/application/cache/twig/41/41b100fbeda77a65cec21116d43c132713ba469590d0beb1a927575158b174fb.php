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

/* layout/default.twig */
class __TwigTemplate_5fdf4c65a189ec4ef83ecd38f22923bd01e39dcc7261c4cb0e672e432b304711 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'head' => [$this, 'block_head'],
            'isi' => [$this, 'block_isi'],
            'bawah' => [$this, 'block_bawah'],
            'skrip' => [$this, 'block_skrip'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
\t<title>Blog</title>
\t<meta charset=\"utf-8\">
\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1, user-scalable=no\">
\t<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, site_url(), "html", null, true);
        echo "aset/vendor/bootstrap/css/bootstrap.min.css\">
\t<style type=\"text/css\">
\t\t* {
\t\t\tword-wrap: break-word;
\t\t}
\t\t
\t\tbody {
\t\t\tpadding-top: 70px;
\t\t}

\t\t.navbar-fixed-bottom table {
\t\t\tmargin-bottom: 0;
\t\t}

\t\t.navbar-fixed-bottom .btn {
\t\t\twidth: 100%;
\t\t}

\t\t.sembunyi {
\t\t\tdisplay: none;
\t\t}
\t</style>
\t";
        // line 29
        $this->displayBlock('head', $context, $blocks);
        // line 30
        echo "</head>
<body>
\t<div class=\"navbar navbar-default navbar-fixed-top\">
\t\t<div class=\"container\">
\t\t\t<div class=\"navbar-header\">
\t\t\t\t<a href=\"";
        // line 35
        echo twig_escape_filter($this->env, site_url(), "html", null, true);
        echo "\" class=\"navbar-brand\">Blog</a>
\t\t\t</div>
\t\t</div>
\t</div>
\t<div class=\"container\">
\t\t";
        // line 40
        $this->displayBlock('isi', $context, $blocks);
        // line 41
        echo "\t</div>
\t";
        // line 42
        $this->displayBlock('bawah', $context, $blocks);
        // line 43
        echo "\t<script src=\"";
        echo twig_escape_filter($this->env, site_url(), "html", null, true);
        echo "aset/vendor/jquery/jquery.min.js\"></script>
\t<script>
\t\t\$.expr[':'].contains = \$.expr.createPseudo(function(arg){
\t\t\treturn function(elem){
\t\t\t\treturn \$(elem).text().toUpperCase().indexOf(arg.toUpperCase()) >= 0
\t\t\t}
\t\t});
\t</script>
\t";
        // line 51
        $this->displayBlock('skrip', $context, $blocks);
        // line 52
        echo "</body>
</html>";
    }

    // line 29
    public function block_head($context, array $blocks = [])
    {
    }

    // line 40
    public function block_isi($context, array $blocks = [])
    {
    }

    // line 42
    public function block_bawah($context, array $blocks = [])
    {
    }

    // line 51
    public function block_skrip($context, array $blocks = [])
    {
    }

    public function getTemplateName()
    {
        return "layout/default.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  125 => 51,  120 => 42,  115 => 40,  110 => 29,  105 => 52,  103 => 51,  91 => 43,  89 => 42,  86 => 41,  84 => 40,  76 => 35,  69 => 30,  67 => 29,  42 => 7,  34 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
<head>
\t<title>Blog</title>
\t<meta charset=\"utf-8\">
\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1, user-scalable=no\">
\t<link rel=\"stylesheet\" type=\"text/css\" href=\"{{ site_url() }}aset/vendor/bootstrap/css/bootstrap.min.css\">
\t<style type=\"text/css\">
\t\t* {
\t\t\tword-wrap: break-word;
\t\t}
\t\t
\t\tbody {
\t\t\tpadding-top: 70px;
\t\t}

\t\t.navbar-fixed-bottom table {
\t\t\tmargin-bottom: 0;
\t\t}

\t\t.navbar-fixed-bottom .btn {
\t\t\twidth: 100%;
\t\t}

\t\t.sembunyi {
\t\t\tdisplay: none;
\t\t}
\t</style>
\t{% block head %}{% endblock %}
</head>
<body>
\t<div class=\"navbar navbar-default navbar-fixed-top\">
\t\t<div class=\"container\">
\t\t\t<div class=\"navbar-header\">
\t\t\t\t<a href=\"{{ site_url() }}\" class=\"navbar-brand\">Blog</a>
\t\t\t</div>
\t\t</div>
\t</div>
\t<div class=\"container\">
\t\t{% block isi %}{% endblock %}
\t</div>
\t{% block bawah %}{% endblock %}
\t<script src=\"{{ site_url() }}aset/vendor/jquery/jquery.min.js\"></script>
\t<script>
\t\t\$.expr[':'].contains = \$.expr.createPseudo(function(arg){
\t\t\treturn function(elem){
\t\t\t\treturn \$(elem).text().toUpperCase().indexOf(arg.toUpperCase()) >= 0
\t\t\t}
\t\t});
\t</script>
\t{% block skrip %}{% endblock %}
</body>
</html>", "layout/default.twig", "/mnt/C48455A884559E2C/nitip/blog/application/views/layout/default.twig");
    }
}
