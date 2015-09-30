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
            'scripts_include' => array($this, 'block_scripts_include'),
            'nav' => array($this, 'block_nav'),
            'body' => array($this, 'block_body'),
            'body_left' => array($this, 'block_body_left'),
            'body_center' => array($this, 'block_body_center'),
            'body_right' => array($this, 'block_body_right'),
            'footer' => array($this, 'block_footer'),
            'modal' => array($this, 'block_modal'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "

<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\"  name=\"viewport\" content=\"width=device-width, initial-scale=1.0\",maximum-scale=1.0, user-scalable=no\"/>
        <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 8
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 15
        echo "        ";
        $this->displayBlock('scripts_include', $context, $blocks);
        // line 25
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>

    <body>
    <div class=\"container\">
        ";
        // line 30
        $this->displayBlock('nav', $context, $blocks);
        // line 65
        echo "        <div id=\"body\">
            ";
        // line 66
        $this->displayBlock('body', $context, $blocks);
        // line 77
        echo "        </div>
        <div id=\"footer\">
            ";
        // line 79
        $this->displayBlock('footer', $context, $blocks);
        // line 82
        echo "        </div>
        <div id=\"modal\">
            ";
        // line 84
        $this->displayBlock('modal', $context, $blocks);
        // line 86
        echo "        </div>
        ";
        // line 87
        $this->displayBlock('javascripts', $context, $blocks);
        // line 89
        echo "    </div>
    </body>
</html>


";
    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        echo "Welcome!";
    }

    // line 8
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 9
        echo "            <!-- 新 Bootstrap 核心 CSS 文件 -->
            <link href=\"http://apps.bdimg.com/libs/bootstrap/3.3.0/css/bootstrap.min.css\" rel=\"stylesheet\">
            ";
        // line 11
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "71372ac_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_71372ac_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/71372ac_part_1_base_1.css");
            // line 12
            echo "                <link href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" rel=\"stylesheet\"/>
            ";
        } else {
            // asset "71372ac"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_71372ac") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/71372ac.css");
            echo "                <link href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" rel=\"stylesheet\"/>
            ";
        }
        unset($context["asset_url"]);
        // line 14
        echo "        ";
    }

    // line 15
    public function block_scripts_include($context, array $blocks = array())
    {
        // line 16
        echo "            <!-- jQuery文件。务必在bootstrap.min.js 之前引入 -->
            <script src=\"http://apps.bdimg.com/libs/jquery/2.1.4/jquery.min.js\"></script>

            <!-- 最新的 Bootstrap 核心 JavaScript 文件 -->
            <script src=\"http://apps.bdimg.com/libs/bootstrap/3.3.4/js/bootstrap.min.js\"></script>
            ";
        // line 21
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
        } else {
            // asset "8a81101"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_8a81101") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/8a81101.js");
            // line 22
            echo "                <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" type=\"text/javascript\"/>
            ";
        }
        unset($context["asset_url"]);
        // line 24
        echo "        ";
    }

    // line 30
    public function block_nav($context, array $blocks = array())
    {
        // line 31
        echo "            <nav class=\"navbar navbar-default navbar-static-top\" role=\"navigation\">
                <div class=\"navbar-header\">
                    <a class=\"navbar-brand\" href=\"/\">Logo</a>
                </div>
                <div>
                    <ul class=\"nav navbar-nav\">
                        <li class=\"nav-li\"><a href=\"/\">首页</a></li>
                        <li class=\"nav-li\"><a href=\"/question\">浏览</a></li>
                        <li class=\"nav-li\"><a href=\"/question/new\">提问</a></li>
                    </ul>
                    <form class=\"nav navbar-form navbar-left\">
                        <div class=\"form-group\">
                            <input type=\"text\" class=\"form-control\" placeholder=\"Search\">
                        </div>
                        <button type=\"submit\" class=\"btn btn-default\">搜索</button>
                    </form>
                    <ul class=\"nav navbar-nav navbar-right\">
                        ";
        // line 48
        if (($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()) == null)) {
            // line 49
            echo "                            <li class=\"nav-li\"><a href=\"/login\">登录</a></li>
                        ";
        } else {
            // line 51
            echo "                            <li class=\"dropdown\" >
                                <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">";
            // line 52
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
            echo "</a>
                                <ul class=\"dropdown-menu\">
                                    <li><a href=\"/profile\">用户中心</a></li>
                                    <li class=\"divider\"></li>
                                    <li><a href=\"";
            // line 56
            echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
            echo "\">退出</a></li>
                                </ul>
                            </li>
                        ";
        }
        // line 60
        echo "                        <li class=\"nav-li\"><a href=\"/register\">注册</a></li>
                    </ul>
                </div>
            </nav>
        ";
    }

    // line 66
    public function block_body($context, array $blocks = array())
    {
        // line 67
        echo "                <div id=\"left\">
                    ";
        // line 68
        $this->displayBlock('body_left', $context, $blocks);
        // line 69
        echo "                </div>
                <div id=\"center\">
                    ";
        // line 71
        $this->displayBlock('body_center', $context, $blocks);
        // line 72
        echo "                </div>
                <div id=\"right\">
                    ";
        // line 74
        $this->displayBlock('body_right', $context, $blocks);
        // line 75
        echo "                </div>
            ";
    }

    // line 68
    public function block_body_left($context, array $blocks = array())
    {
    }

    // line 71
    public function block_body_center($context, array $blocks = array())
    {
    }

    // line 74
    public function block_body_right($context, array $blocks = array())
    {
    }

    // line 79
    public function block_footer($context, array $blocks = array())
    {
        // line 80
        echo "            <p id=\"copyright\">copyright @2015</p>
            ";
    }

    // line 84
    public function block_modal($context, array $blocks = array())
    {
        // line 85
        echo "            ";
    }

    // line 87
    public function block_javascripts($context, array $blocks = array())
    {
        // line 88
        echo "        ";
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
        return array (  261 => 88,  258 => 87,  254 => 85,  251 => 84,  246 => 80,  243 => 79,  238 => 74,  233 => 71,  228 => 68,  223 => 75,  221 => 74,  217 => 72,  215 => 71,  211 => 69,  209 => 68,  206 => 67,  203 => 66,  195 => 60,  188 => 56,  181 => 52,  178 => 51,  174 => 49,  172 => 48,  153 => 31,  150 => 30,  146 => 24,  139 => 22,  134 => 21,  127 => 16,  124 => 15,  120 => 14,  106 => 12,  102 => 11,  98 => 9,  95 => 8,  89 => 7,  80 => 89,  78 => 87,  75 => 86,  73 => 84,  69 => 82,  67 => 79,  63 => 77,  61 => 66,  58 => 65,  56 => 30,  47 => 25,  44 => 15,  42 => 8,  38 => 7,  30 => 1,);
    }
}
