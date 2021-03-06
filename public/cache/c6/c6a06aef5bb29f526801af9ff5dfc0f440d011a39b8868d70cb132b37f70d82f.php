<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* fc-rates-ffr.html */
class __TwigTemplate_1e89146a48b8cd5141546927cd1ee93654bf9a9145297c79e344400ff79e760a extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'meta' => [$this, 'block_meta'],
            'staticlinks' => [$this, 'block_staticlinks'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("base.html", "fc-rates-ffr.html", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_meta($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "<meta name=\"description\" content=\"Monthly forecasts for the federal funds rate (FFR) and the secured overnight financing rate (SOFR) using futures.\"/>
";
    }

    // line 7
    public function block_staticlinks($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 10
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 11
        echo "<div class=\"row gx-0\">
\t";
        // line 12
        $this->loadTemplate("fc-rates-sidebar.html", "fc-rates-ffr.html", 12)->display($context);
        // line 13
        echo "\t<div class=\"col px-0\">
\t
\t\t
\t\t<div class=\"row justify-content-center mx-3\" style=\"background-color:rgba(25, 50, 20, 0.05)\">
\t\t\t<div id=\"chart-container\" class=\"col-xl-8 col-lg-10 col-12-md px-2\">
\t\t\t</div>
\t\t</div>
\t\t
\t\t<div class=\"container pb-5\">
\t\t\t<div class=\"row justify-content-center pt-3 px-3 mx-1\">
\t\t\t
\t\t\t\t<div class=\"card border-secondary border-2 m-2 col-xl-5 col-lg-10 col-sm-12 order-xl-2 bg-white\">
\t\t\t\t\t<div class=\"card-body\" id=\"tables-container\">
\t\t\t\t\t\t<div class=\"py-1 px-2 bg-econblue d-inline-block text-white\"><svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" class=\"bi bi-bar-chart-fill\" viewBox=\"0 0 16 16\">
\t\t\t\t\t\t  <path d=\"M1 11a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v3a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1v-3zm5-4a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v7a1 1 0 0 1-1 1H7a1 1 0 0 1-1-1V7zm5-5a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1h-2a1 1 0 0 1-1-1V2z\"/>
\t\t\t\t\t\t</svg></div>
\t\t\t\t\t\t<div class=\"d-inline\"><span style=\"vertical-align:middle;font-size:1.4rem; color: var(--bs-econblue)\">DATA</span></div>
\t\t\t\t\t\t<hr class=\"mt-0 mb-3 bg-econblue\">
\t\t\t\t\t\t<ul class=\"list-group list-group-horizontal\" id=\"li-container\">
\t\t\t\t\t\t</ul>

\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"col-xl-6 col-lg-10 col-sm-12 order-xl-1\" id=\"text-container\">
\t\t\t\t</div>
\t\t\t\t
\t\t\t</div>
\t\t</div>

\t
\t</div>
</div>
";
    }

    public function getTemplateName()
    {
        return "fc-rates-ffr.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 13,  70 => 12,  67 => 11,  63 => 10,  57 => 7,  52 => 4,  48 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"base.html\" %}

{% block meta %}
<meta name=\"description\" content=\"Monthly forecasts for the federal funds rate (FFR) and the secured overnight financing rate (SOFR) using futures.\"/>
{% endblock %}

{% block staticlinks %}
{% endblock %}

{% block content %}
<div class=\"row gx-0\">
\t{% include 'fc-rates-sidebar.html' %}
\t<div class=\"col px-0\">
\t
\t\t
\t\t<div class=\"row justify-content-center mx-3\" style=\"background-color:rgba(25, 50, 20, 0.05)\">
\t\t\t<div id=\"chart-container\" class=\"col-xl-8 col-lg-10 col-12-md px-2\">
\t\t\t</div>
\t\t</div>
\t\t
\t\t<div class=\"container pb-5\">
\t\t\t<div class=\"row justify-content-center pt-3 px-3 mx-1\">
\t\t\t
\t\t\t\t<div class=\"card border-secondary border-2 m-2 col-xl-5 col-lg-10 col-sm-12 order-xl-2 bg-white\">
\t\t\t\t\t<div class=\"card-body\" id=\"tables-container\">
\t\t\t\t\t\t<div class=\"py-1 px-2 bg-econblue d-inline-block text-white\"><svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" class=\"bi bi-bar-chart-fill\" viewBox=\"0 0 16 16\">
\t\t\t\t\t\t  <path d=\"M1 11a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v3a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1v-3zm5-4a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v7a1 1 0 0 1-1 1H7a1 1 0 0 1-1-1V7zm5-5a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1h-2a1 1 0 0 1-1-1V2z\"/>
\t\t\t\t\t\t</svg></div>
\t\t\t\t\t\t<div class=\"d-inline\"><span style=\"vertical-align:middle;font-size:1.4rem; color: var(--bs-econblue)\">DATA</span></div>
\t\t\t\t\t\t<hr class=\"mt-0 mb-3 bg-econblue\">
\t\t\t\t\t\t<ul class=\"list-group list-group-horizontal\" id=\"li-container\">
\t\t\t\t\t\t</ul>

\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"col-xl-6 col-lg-10 col-sm-12 order-xl-1\" id=\"text-container\">
\t\t\t\t</div>
\t\t\t\t
\t\t\t</div>
\t\t</div>

\t
\t</div>
</div>
{% endblock %}", "fc-rates-ffr.html", "/var/www/econforecasting.com/public/templates/fc-rates-ffr.html");
    }
}
