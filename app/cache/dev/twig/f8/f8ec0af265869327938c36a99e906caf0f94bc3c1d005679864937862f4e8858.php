<?php

/* MazeWorldMoviesBundle::templates/login.html.twig */
class __TwigTemplate_997704b2fb36581bb4bcd5a7c61e0be49d8d990aaa77082a413eea803881aba2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_32b84663e4dcd29cf0b071a144fa17a8998cf9b7e02f8d02c8c9e91e0f4f0a77 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_32b84663e4dcd29cf0b071a144fa17a8998cf9b7e02f8d02c8c9e91e0f4f0a77->enter($__internal_32b84663e4dcd29cf0b071a144fa17a8998cf9b7e02f8d02c8c9e91e0f4f0a77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MazeWorldMoviesBundle::templates/login.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, maximum-scale=1\">
        <title>";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"stylesheet\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/tftapp/css/font-awesome.min.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/tftapp/css/app.css"), "html", null, true);
        echo "\" id=\"maincss\">
        <link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/tftapp/css/theme-e.css"), "html", null, true);
        echo "\">
        ";
        // line 10
        if ($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "get", array(0 => "loginFavicon"), "method")) {
            // line 11
            echo "            <link rel=\"icon\" type=\"image/x-icon\" href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "get", array(0 => "loginFavicon"), "method"), "html", null, true);
            echo "\" />
        ";
        } else {
            // line 13
            echo "            <link rel=\"icon\" type=\"image/x-icon\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
            echo "\" />
        ";
        }
        // line 15
        echo "        
        <script src=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/tftapp/js/jquery.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/tftapp/js/formValidation.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/tftapp/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/tftapp/js/validator.js"), "html", null, true);
        echo "\"></script>
    </head>
    <body>
        <div class=\"wrapper\">

            <!-- Main section-->

            <div class=\"row\">
                <div class=\"panel-body\">
                    <div align=\"center\" style=\"margin-top: 50px\">
                        ";
        // line 29
        if ($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "get", array(0 => "loginDomainLogo"), "method")) {
            // line 30
            echo "                            <img src=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "get", array(0 => "loginDomainLogo"), "method"), "html", null, true);
            echo "\" alt=\"\">
                        ";
        } else {
            // line 32
            echo "                            <img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/tftapp/images/logo2.png"), "html", null, true);
            echo "\" alt=\"\">
                        ";
        }
        // line 34
        echo "                    </div>

                ";
        // line 36
        $this->displayBlock('body', $context, $blocks);
        // line 37
        echo "                <div class=\"p-lg text-center\">
                    <!--<span>&copy;</span>
                    <span>";
        // line 39
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo "</span>
                    <span><a href=\"\" target=\"_blank\" class=\"link-muted\"></a></span>
                    <span>&bull;</span>
                    <span>All Rights Reserved</span>-->
                </div>
            </div>
        </div>
    </div>
</body>
</html>
";
        
        $__internal_32b84663e4dcd29cf0b071a144fa17a8998cf9b7e02f8d02c8c9e91e0f4f0a77->leave($__internal_32b84663e4dcd29cf0b071a144fa17a8998cf9b7e02f8d02c8c9e91e0f4f0a77_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_c6db59b51d029fb74ea285728634248c783dc8b7b2cc9561067c6d5c903966b5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c6db59b51d029fb74ea285728634248c783dc8b7b2cc9561067c6d5c903966b5->enter($__internal_c6db59b51d029fb74ea285728634248c783dc8b7b2cc9561067c6d5c903966b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        if ($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "get", array(0 => "loginDisplayName"), "method")) {
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "get", array(0 => "loginDisplayName"), "method"), "html", null, true);
        } else {
            echo "pulsetracker";
        }
        
        $__internal_c6db59b51d029fb74ea285728634248c783dc8b7b2cc9561067c6d5c903966b5->leave($__internal_c6db59b51d029fb74ea285728634248c783dc8b7b2cc9561067c6d5c903966b5_prof);

    }

    // line 36
    public function block_body($context, array $blocks = array())
    {
        $__internal_7f08a1593c4eef021ac0e65da6639b4ccb8c36bd9205ba185970b42d94e39b0e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7f08a1593c4eef021ac0e65da6639b4ccb8c36bd9205ba185970b42d94e39b0e->enter($__internal_7f08a1593c4eef021ac0e65da6639b4ccb8c36bd9205ba185970b42d94e39b0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_7f08a1593c4eef021ac0e65da6639b4ccb8c36bd9205ba185970b42d94e39b0e->leave($__internal_7f08a1593c4eef021ac0e65da6639b4ccb8c36bd9205ba185970b42d94e39b0e_prof);

    }

    public function getTemplateName()
    {
        return "MazeWorldMoviesBundle::templates/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  147 => 36,  131 => 6,  113 => 39,  109 => 37,  107 => 36,  103 => 34,  97 => 32,  91 => 30,  89 => 29,  76 => 19,  72 => 18,  68 => 17,  64 => 16,  61 => 15,  55 => 13,  49 => 11,  47 => 10,  43 => 9,  39 => 8,  35 => 7,  31 => 6,  24 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, maximum-scale=1\">
        <title>{% block title %}{%if app.session.get('loginDisplayName')%}{{app.session.get('loginDisplayName')}}{%else%}pulsetracker{%endif%}{% endblock %}</title>
        <link rel=\"stylesheet\" href=\"{{ asset('bundles/tftapp/css/font-awesome.min.css') }}\">
        <link rel=\"stylesheet\" href=\"{{ asset('bundles/tftapp/css/app.css') }}\" id=\"maincss\">
        <link rel=\"stylesheet\" href=\"{{ asset('bundles/tftapp/css/theme-e.css') }}\">
        {% if app.session.get('loginFavicon') %}
            <link rel=\"icon\" type=\"image/x-icon\" href=\"{{app.session.get('loginFavicon')}}\" />
        {% else %}
            <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
        {% endif %}
        
        <script src=\"{{ asset('bundles/tftapp/js/jquery.js') }}\"></script>
        <script src=\"{{ asset('bundles/tftapp/js/formValidation.min.js') }}\"></script>
        <script src=\"{{ asset('bundles/tftapp/js/bootstrap.min.js') }}\"></script>
        <script src=\"{{ asset('bundles/tftapp/js/validator.js') }}\"></script>
    </head>
    <body>
        <div class=\"wrapper\">

            <!-- Main section-->

            <div class=\"row\">
                <div class=\"panel-body\">
                    <div align=\"center\" style=\"margin-top: 50px\">
                        {% if app.session.get('loginDomainLogo') %}
                            <img src=\"{{app.session.get('loginDomainLogo')}}\" alt=\"\">
                        {% else %}
                            <img src=\"{{ asset('bundles/tftapp/images/logo2.png')}}\" alt=\"\">
                        {% endif %}
                    </div>

                {% block body %}{% endblock %}
                <div class=\"p-lg text-center\">
                    <!--<span>&copy;</span>
                    <span>{{ \"now\"|date(\"Y\") }}</span>
                    <span><a href=\"\" target=\"_blank\" class=\"link-muted\"></a></span>
                    <span>&bull;</span>
                    <span>All Rights Reserved</span>-->
                </div>
            </div>
        </div>
    </div>
</body>
</html>
", "MazeWorldMoviesBundle::templates/login.html.twig", "/opt/lampp/htdocs/newcr/src/MazeWorld/MoviesBundle/Resources/views/templates/login.html.twig");
    }
}
