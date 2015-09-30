<?php

/* FOSUserBundle:Security:login.html.twig */
class __TwigTemplate_e3e092538e834dc0b1fc3b058c0352aa7e39590c66ca358f8b0d6081b162b6dd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Security:login.html.twig", 1);
        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'scripts_include' => array($this, 'block_scripts_include'),
            'modal' => array($this, 'block_modal'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 3
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
";
    }

    // line 6
    public function block_scripts_include($context, array $blocks = array())
    {
        // line 7
        echo "    ";
        $this->displayParentBlock("scripts_include", $context, $blocks);
        echo "
";
    }

    // line 10
    public function block_modal($context, array $blocks = array())
    {
        // line 11
        echo "<!-- 模态框（Modal） -->
<div class=\"modal fade\" id=\"myModal\" tabindex=\"-1\" role=\"dialog\"
     aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
    <div class=\"modal-dialog\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <button type=\"button\" class=\"close\"
                        data-dismiss=\"modal\" aria-hidden=\"true\">
                    &times;
                </button>
                <h4 class=\"modal-title\" id=\"myModalLabel\">
                    用户登录
                </h4>
            </div>
            <div class=\"modal-body\">
                <form action=\"";
        // line 26
        echo $this->env->getExtension('routing')->getPath("fos_user_security_check");
        echo "\" method=\"post\">
                    <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 27
        echo twig_escape_filter($this->env, (isset($context["csrf_token"]) ? $context["csrf_token"] : $this->getContext($context, "csrf_token")), "html", null, true);
        echo "\" />
                    <div id=\"username\">
                        <label id=\"username-label\" for=\"username\">";
        // line 29
        echo "用户名";
        echo "</label>
                        <input type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 30
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\" required=\"required\" />
                    </div>
                    <div id=\"password\">
                        <label for=\"password\">";
        // line 33
        echo "密码";
        echo "</label>
                        <input type=\"password\" id=\"password\" name=\"_password\" required=\"required\" />
                    </div>
                    <div id=\"remember_me\">
                        <input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\" />
                        <label for=\"remember_me\">";
        // line 38
        echo "自动登录";
        echo "</label>
                    </div>
                    <div id=\"submit\">
                        <input type=\"submit\" id=\"_submit\" name=\"_submit\" value=\"";
        // line 41
        echo "登录";
        echo "\" />
                    </div>
                </form>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal -->
";
    }

    // line 48
    public function block_javascripts($context, array $blocks = array())
    {
        // line 49
        echo "<script>
    \$(document).ready(function(){
        \$(\"#myModal\").modal(true);
    });
</script>
";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Security:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  118 => 49,  115 => 48,  104 => 41,  98 => 38,  90 => 33,  84 => 30,  80 => 29,  75 => 27,  71 => 26,  54 => 11,  51 => 10,  44 => 7,  41 => 6,  34 => 3,  31 => 2,  11 => 1,);
    }
}
