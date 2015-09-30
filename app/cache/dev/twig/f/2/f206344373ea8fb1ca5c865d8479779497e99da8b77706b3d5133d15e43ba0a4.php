<?php

/* ::base.html.twig */
class __TwigTemplate_f206344373ea8fb1ca5c865d8479779497e99da8b77706b3d5133d15e43ba0a4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'scripts_include' => array($this, 'block_scripts_include'),
            'form_widget_simple' => array($this, 'block_form_widget_simple'),
            'form_row' => array($this, 'block_form_row'),
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
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\"  name=\"viewport\" content=\"width=device-width, initial-scale=1.0\",maximum-scale=1.0, user-scalable=no\"/>
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 13
        echo "        ";
        $this->displayBlock('scripts_include', $context, $blocks);
        // line 23
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>";
        // line 27
        $this->env->getExtension('form')->renderer->setTheme((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), array(0 => $this));
        // line 29
        $this->displayBlock('form_widget_simple', $context, $blocks);
        // line 34
        $this->displayBlock('form_row', $context, $blocks);
        // line 43
        echo "<div class=\"container\">
        ";
        // line 44
        $this->displayBlock('nav', $context, $blocks);
        // line 79
        echo "        <div id=\"body\">
            ";
        // line 80
        $this->displayBlock('body', $context, $blocks);
        // line 91
        echo "        </div>
        <div id=\"footer\">
            ";
        // line 93
        $this->displayBlock('footer', $context, $blocks);
        // line 96
        echo "        </div>
        <div id=\"modal\">
            ";
        // line 98
        $this->displayBlock('modal', $context, $blocks);
        // line 100
        echo "        </div>
        ";
        // line 101
        $this->displayBlock('javascripts', $context, $blocks);
        // line 103
        echo "    </div>
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
        echo "            <!-- 新 Bootstrap 核心 CSS 文件 -->
            <link href=\"http://apps.bdimg.com/libs/bootstrap/3.3.0/css/bootstrap.min.css\" rel=\"stylesheet\">
            ";
        // line 9
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "71372ac_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_71372ac_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/71372ac_part_1_base_1.css");
            // line 10
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
        // line 12
        echo "        ";
    }

    // line 13
    public function block_scripts_include($context, array $blocks = array())
    {
        // line 14
        echo "            <!-- jQuery文件。务必在bootstrap.min.js 之前引入 -->
            <script src=\"http://apps.bdimg.com/libs/jquery/2.1.4/jquery.min.js\"></script>

            <!-- 最新的 Bootstrap 核心 JavaScript 文件 -->
            <script src=\"http://apps.bdimg.com/libs/bootstrap/3.3.4/js/bootstrap.min.js\"></script>
            ";
        // line 19
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
        } else {
            // asset "8a81101"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_8a81101") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/8a81101.js");
            // line 20
            echo "                <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" type=\"text/javascript\"/>
            ";
        }
        unset($context["asset_url"]);
        // line 22
        echo "        ";
    }

    // line 29
    public function block_form_widget_simple($context, array $blocks = array())
    {
        // line 30
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "text")) : ("text"));
        // line 31
        echo "<input class=\"form-control\" type=\"";
        echo twig_escape_filter($this->env, (isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "html", null, true);
        echo "\" ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        echo " ";
        if ( !twig_test_empty((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")))) {
            echo "value=\"";
            echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
            echo "\" ";
        }
        echo "/>";
    }

    // line 34
    public function block_form_row($context, array $blocks = array())
    {
        // line 35
        echo "<div class=\"form-group\">";
        // line 36
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'label');
        // line 37
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        // line 38
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        // line 39
        echo "</div>";
    }

    // line 44
    public function block_nav($context, array $blocks = array())
    {
        // line 45
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
        // line 62
        if (($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()) == null)) {
            // line 63
            echo "                            <li class=\"nav-li\"><a href=\"/login\">登录</a></li>
                        ";
        } else {
            // line 65
            echo "                            <li class=\"dropdown\" >
                                <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">";
            // line 66
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
            echo "</a>
                                <ul class=\"dropdown-menu\">
                                    <li><a href=\"/profile\">用户中心</a></li>
                                    <li class=\"divider\"></li>
                                    <li><a href=\"";
            // line 70
            echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
            echo "\">退出</a></li>
                                </ul>
                            </li>
                        ";
        }
        // line 74
        echo "                        <li class=\"nav-li\"><a href=\"/register\">注册</a></li>
                    </ul>
                </div>
            </nav>
        ";
    }

    // line 80
    public function block_body($context, array $blocks = array())
    {
        // line 81
        echo "                <div id=\"left\">
                    ";
        // line 82
        $this->displayBlock('body_left', $context, $blocks);
        // line 83
        echo "                </div>
                <div id=\"center\">
                    ";
        // line 85
        $this->displayBlock('body_center', $context, $blocks);
        // line 86
        echo "                </div>
                <div id=\"right\">
                    ";
        // line 88
        $this->displayBlock('body_right', $context, $blocks);
        // line 89
        echo "                </div>
            ";
    }

    // line 82
    public function block_body_left($context, array $blocks = array())
    {
    }

    // line 85
    public function block_body_center($context, array $blocks = array())
    {
    }

    // line 88
    public function block_body_right($context, array $blocks = array())
    {
    }

    // line 93
    public function block_footer($context, array $blocks = array())
    {
        // line 94
        echo "            <p id=\"copyright\">copyright @2015</p>
            ";
    }

    // line 98
    public function block_modal($context, array $blocks = array())
    {
        // line 99
        echo "            ";
    }

    // line 101
    public function block_javascripts($context, array $blocks = array())
    {
        // line 102
        echo "        ";
    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  299 => 102,  296 => 101,  292 => 99,  289 => 98,  284 => 94,  281 => 93,  276 => 88,  271 => 85,  266 => 82,  261 => 89,  259 => 88,  255 => 86,  253 => 85,  249 => 83,  247 => 82,  244 => 81,  241 => 80,  233 => 74,  226 => 70,  219 => 66,  216 => 65,  212 => 63,  210 => 62,  191 => 45,  188 => 44,  184 => 39,  182 => 38,  180 => 37,  178 => 36,  176 => 35,  173 => 34,  159 => 31,  157 => 30,  154 => 29,  150 => 22,  143 => 20,  138 => 19,  131 => 14,  128 => 13,  124 => 12,  110 => 10,  106 => 9,  102 => 7,  99 => 6,  93 => 5,  86 => 103,  84 => 101,  81 => 100,  79 => 98,  75 => 96,  73 => 93,  69 => 91,  67 => 80,  64 => 79,  62 => 44,  59 => 43,  57 => 34,  55 => 29,  53 => 27,  47 => 23,  44 => 13,  42 => 6,  38 => 5,  32 => 1,);
    }
}
