<?php

/* XieheWebBundle::base.html.twig */
class __TwigTemplate_f0221e2d350f526b4df2f2fecacb6c9e976271eb19438fbb1000388a10e1c8c8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'header' => array($this, 'block_header'),
            'body' => array($this, 'block_body'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE HTML PUBLIC \"-//W3C//DTD HTML 4.01 Transitional//EN\"
        \"http://www.w3.org/TR/html4/loose.dtd\">
<html>
<head>
    <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
</head>
<body>
    ";
        // line 8
        $this->displayBlock('header', $context, $blocks);
        // line 9
        echo "    ";
        $this->displayBlock('body', $context, $blocks);
        // line 10
        echo "    ";
        $this->displayBlock('footer', $context, $blocks);
        // line 11
        echo "</body>
</html>";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo "base.html.twig";
    }

    // line 8
    public function block_header($context, array $blocks = array())
    {
    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
    }

    // line 10
    public function block_footer($context, array $blocks = array())
    {
        echo "<h2 class=\"copyright\">copyright @zr</h2>";
    }

    public function getTemplateName()
    {
        return "XieheWebBundle::base.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  64 => 10,  59 => 9,  54 => 8,  48 => 5,  43 => 11,  40 => 10,  37 => 9,  35 => 8,  29 => 5,  23 => 1,);
    }
}
