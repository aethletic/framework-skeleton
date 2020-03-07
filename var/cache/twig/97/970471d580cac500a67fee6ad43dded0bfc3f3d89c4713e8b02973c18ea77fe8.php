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

/* home/home.html */
class __TwigTemplate_bbd68fe7f2cba0860205d8c30160c1559453646850019be54df9f2dc315e1548 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\" dir=\"ltr\">
    <head>
        <meta charset=\"utf-8\">
        <title>Hello World</title>
    </head>
    <body>
        Hello ";
        // line 8
        echo twig_escape_filter($this->env, ($context["user"] ?? null), "html", null, true);
        echo "!
    </body>
</html>
";
    }

    public function getTemplateName()
    {
        return "home/home.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  46 => 8,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\" dir=\"ltr\">
    <head>
        <meta charset=\"utf-8\">
        <title>Hello World</title>
    </head>
    <body>
        Hello {{ user }}!
    </body>
</html>
", "home/home.html", "/home/s/svetozar79/www-botify/public_html/framework/test/app/views/home/home.html");
    }
}
