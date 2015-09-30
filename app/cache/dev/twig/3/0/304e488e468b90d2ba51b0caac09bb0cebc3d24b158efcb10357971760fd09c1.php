<?php

/* question/new.question.html.twig */
class __TwigTemplate_304e488e468b90d2ba51b0caac09bb0cebc3d24b158efcb10357971760fd09c1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "question/new.question.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        echo "new question!";
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "    <form method=\"post\" action=\"/question/new\">

    </form>
";
    }

    public function getTemplateName()
    {
        return "question/new.question.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  38 => 4,  35 => 3,  29 => 2,  11 => 1,);
    }
}
