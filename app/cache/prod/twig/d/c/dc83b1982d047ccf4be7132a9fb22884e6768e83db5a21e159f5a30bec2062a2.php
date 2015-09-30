<?php

/* base.html.twig */
class __TwigTemplate_dc83b1982d047ccf4be7132a9fb22884e6768e83db5a21e159f5a30bec2062a2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'footer' => array($this, 'block_footer'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 13
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 16
        $this->displayBlock('body', $context, $blocks);
        // line 17
        echo "        ";
        $this->displayBlock('footer', $context, $blocks);
        // line 20
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 21
        echo "
    </body>
</html>
";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo "Welcome!";
    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 7
        echo "            <style>
                .copyright{
                text-align: center;
                }
            </style>
        ";
    }

    // line 16
    public function block_body($context, array $blocks = array())
    {
    }

    // line 17
    public function block_footer($context, array $blocks = array())
    {
        // line 18
        echo "            <p class=\"copyright\">copyright @2015</p>
        ";
    }

    // line 20
    public function block_javascripts($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 20,  84 => 18,  81 => 17,  76 => 16,  67 => 7,  64 => 6,  58 => 5,  51 => 21,  48 => 20,  45 => 17,  43 => 16,  36 => 13,  34 => 6,  30 => 5,  24 => 1,);
    }
}
