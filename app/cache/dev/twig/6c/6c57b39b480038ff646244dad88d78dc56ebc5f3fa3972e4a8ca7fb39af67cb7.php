<?php

/* MazeWorldMoviesBundle:Security:login.html.twig */
class __TwigTemplate_3a71a34792a9ed97f43982fcf2d2597a2c8ca955f022064cba94bd11c77f3e9e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("MazeWorldMoviesBundle::templates/login.html.twig", "MazeWorldMoviesBundle:Security:login.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "MazeWorldMoviesBundle::templates/login.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_317e99376cf353871e460cc06bc083679fe412b50976c24ac1025010201659a8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_317e99376cf353871e460cc06bc083679fe412b50976c24ac1025010201659a8->enter($__internal_317e99376cf353871e460cc06bc083679fe412b50976c24ac1025010201659a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MazeWorldMoviesBundle:Security:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_317e99376cf353871e460cc06bc083679fe412b50976c24ac1025010201659a8->leave($__internal_317e99376cf353871e460cc06bc083679fe412b50976c24ac1025010201659a8_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_bec836900fb0d081c8371a01e19149269c3b7a741ce06af0f65f4d8e04e27326 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bec836900fb0d081c8371a01e19149269c3b7a741ce06af0f65f4d8e04e27326->enter($__internal_bec836900fb0d081c8371a01e19149269c3b7a741ce06af0f65f4d8e04e27326_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<div class=\"wrapper\">
        <div class=\"block-center mt-xl wd-xl\">
\t    
\t    ";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "notice"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 8
            echo "\t\t<div class=\"alert alert-info\">";
            echo $context["flashMessage"];
            echo "</div>
\t    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 10
        echo "
\t    ";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "error"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 12
            echo "\t\t<div class=\"alert alert-danger\">";
            echo $context["flashMessage"];
            echo "</div>
\t    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        echo "
\t    ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "success"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 16
            echo "\t\t<div class=\"alert alert-success\">";
            echo $context["flashMessage"];
            echo "</div>
\t    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 18
        echo "            ";
        if (($context["error"] ?? $this->getContext($context, "error"))) {
            // line 19
            echo "                <div class=\"alert alert-danger\" role=\"alert\">
                    <small>";
            // line 20
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute(($context["error"] ?? $this->getContext($context, "error")), "message", array())), "html", null, true);
            echo "</small>
                </div>
            ";
        }
        // line 22
        echo "            

            <div class=\"row\">

                <div class=\"col-lg-12\">
                    <form method=\"post\" action=\"";
        // line 27
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_login_check");
        echo "\" data-parsley-validate=\"\" novalidate=\"\">
                        <!-- START panel-->
                        <div class=\"panel panel-dark panel-flat\">
                            <div class=\"panel-body\">
                                <p class=\"text-center pv\">";
        // line 31
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("SIGN IN TO CONTINUE", array(), "messages");
        echo "</p>
                                <div class=\"form-group has-feedback\">
                                    <input id=\"username\" name=\"_username\" type=\"email\" placeholder=\"Enter email\" autocomplete=\"off\" required class=\"form-control\">
                                    <span class=\"fa fa-envelope form-control-feedback text-muted\"></span>
                                </div>
                                <div class=\"form-group has-feedback\">
                                    <input id=\"password\" name=\"_password\" type=\"password\" placeholder=\"Password\" required class=\"form-control\">
                                    <span class=\"fa fa-lock form-control-feedback text-muted\"></span>
                                </div>
                                <input type=\"hidden\" name=\"_target_path\" value=\"/process/login\" />                            
                                <div class=\"clearfix\">
                                    <div class=\"checkbox c-checkbox pull-left mt0\">
                                        <label>
                                            <input type=\"checkbox\" id=\"_remember_me\" name=\"_remember_me\">
                                            <span class=\"fa fa-check\"></span>Remember Me
                                        </label>

                                    </div>
                                    <div class=\"pull-right\"><a href=\"";
        // line 49
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("forgot_password");
        echo "\">Forgot Password?</a></div>
                                </div>
                                <button type=\"submit\" class=\"btn btn-block btn-primary mt-lg\">Login</button>

                            </div>
                        </div>
                        <!-- END panel-->
                    </form>
                </div>
            </div>
        </div>
    </div>

";
        
        $__internal_bec836900fb0d081c8371a01e19149269c3b7a741ce06af0f65f4d8e04e27326->leave($__internal_bec836900fb0d081c8371a01e19149269c3b7a741ce06af0f65f4d8e04e27326_prof);

    }

    public function getTemplateName()
    {
        return "MazeWorldMoviesBundle:Security:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 49,  116 => 31,  109 => 27,  102 => 22,  96 => 20,  93 => 19,  90 => 18,  81 => 16,  77 => 15,  74 => 14,  65 => 12,  61 => 11,  58 => 10,  49 => 8,  45 => 7,  40 => 4,  34 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'MazeWorldMoviesBundle::templates/login.html.twig' %}

{% block body -%}
    <div class=\"wrapper\">
        <div class=\"block-center mt-xl wd-xl\">
\t    
\t    {% for flashMessage in app.session.flashbag.get('notice') %}
\t\t<div class=\"alert alert-info\">{{ flashMessage|raw }}</div>
\t    {% endfor %}

\t    {% for flashMessage in app.session.flashbag.get('error') %}
\t\t<div class=\"alert alert-danger\">{{ flashMessage|raw }}</div>
\t    {% endfor %}

\t    {% for flashMessage in app.session.flashbag.get('success') %}
\t\t<div class=\"alert alert-success\">{{ flashMessage|raw }}</div>
\t    {% endfor %}
            {% if error %}
                <div class=\"alert alert-danger\" role=\"alert\">
                    <small>{{ error.message|trans }}</small>
                </div>
            {% endif %}            

            <div class=\"row\">

                <div class=\"col-lg-12\">
                    <form method=\"post\" action=\"{{ path('admin_login_check') }}\" data-parsley-validate=\"\" novalidate=\"\">
                        <!-- START panel-->
                        <div class=\"panel panel-dark panel-flat\">
                            <div class=\"panel-body\">
                                <p class=\"text-center pv\">{%trans%}SIGN IN TO CONTINUE{%endtrans%}</p>
                                <div class=\"form-group has-feedback\">
                                    <input id=\"username\" name=\"_username\" type=\"email\" placeholder=\"Enter email\" autocomplete=\"off\" required class=\"form-control\">
                                    <span class=\"fa fa-envelope form-control-feedback text-muted\"></span>
                                </div>
                                <div class=\"form-group has-feedback\">
                                    <input id=\"password\" name=\"_password\" type=\"password\" placeholder=\"Password\" required class=\"form-control\">
                                    <span class=\"fa fa-lock form-control-feedback text-muted\"></span>
                                </div>
                                <input type=\"hidden\" name=\"_target_path\" value=\"/process/login\" />                            
                                <div class=\"clearfix\">
                                    <div class=\"checkbox c-checkbox pull-left mt0\">
                                        <label>
                                            <input type=\"checkbox\" id=\"_remember_me\" name=\"_remember_me\">
                                            <span class=\"fa fa-check\"></span>Remember Me
                                        </label>

                                    </div>
                                    <div class=\"pull-right\"><a href=\"{{path('forgot_password')}}\">Forgot Password?</a></div>
                                </div>
                                <button type=\"submit\" class=\"btn btn-block btn-primary mt-lg\">Login</button>

                            </div>
                        </div>
                        <!-- END panel-->
                    </form>
                </div>
            </div>
        </div>
    </div>

{% endblock %}
", "MazeWorldMoviesBundle:Security:login.html.twig", "/opt/lampp/htdocs/newcr/src/MazeWorld/MoviesBundle/Resources/views/Security/login.html.twig");
    }
}
