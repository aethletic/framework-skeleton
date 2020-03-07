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

/* index.html */
class __TwigTemplate_e71b54fd3ef71f156205cfc9601839dc3736471264d6f0bf997629ba47496b15 extends Template
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
        <title></title>
    </head>
    <body>
        Hello!
    </body>
</html>
";
    }

    public function getTemplateName()
    {
        return "index.html";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\" dir=\"ltr\">
    <head>
        <meta charset=\"utf-8\">
        <title></title>
    </head>
    <body>
        Hello!
    </body>
</html>
", "index.html", "/home/s/svetozar79/www-botify/public_html/framework/test/app/views/index.html");
    }
}
