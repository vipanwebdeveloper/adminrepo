<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_e614d3dadd353cbd3d567201eda1e9974ad66c4cc4d1d2b64cda6407873b4f4a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_34a5a767368870a9f346c3e94acc2ee0b74704f71dd67c11eaa66b9b434dff15 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_34a5a767368870a9f346c3e94acc2ee0b74704f71dd67c11eaa66b9b434dff15->enter($__internal_34a5a767368870a9f346c3e94acc2ee0b74704f71dd67c11eaa66b9b434dff15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_34a5a767368870a9f346c3e94acc2ee0b74704f71dd67c11eaa66b9b434dff15->leave($__internal_34a5a767368870a9f346c3e94acc2ee0b74704f71dd67c11eaa66b9b434dff15_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_7c582f301f930fefc5953d503685b8f9c8f092af7763c4614c63110a3f54698f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7c582f301f930fefc5953d503685b8f9c8f092af7763c4614c63110a3f54698f->enter($__internal_7c582f301f930fefc5953d503685b8f9c8f092af7763c4614c63110a3f54698f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_7c582f301f930fefc5953d503685b8f9c8f092af7763c4614c63110a3f54698f->leave($__internal_7c582f301f930fefc5953d503685b8f9c8f092af7763c4614c63110a3f54698f_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_a76623487333cace88360558e92027c2a8d85c823090f618609d3a5d2e17e835 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a76623487333cace88360558e92027c2a8d85c823090f618609d3a5d2e17e835->enter($__internal_a76623487333cace88360558e92027c2a8d85c823090f618609d3a5d2e17e835_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_a76623487333cace88360558e92027c2a8d85c823090f618609d3a5d2e17e835->leave($__internal_a76623487333cace88360558e92027c2a8d85c823090f618609d3a5d2e17e835_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_7fc6cc3d1c230176d2861e3271ad42ed29c7597aa4f95536cf8be92a4a2c9907 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7fc6cc3d1c230176d2861e3271ad42ed29c7597aa4f95536cf8be92a4a2c9907->enter($__internal_7fc6cc3d1c230176d2861e3271ad42ed29c7597aa4f95536cf8be92a4a2c9907_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_7fc6cc3d1c230176d2861e3271ad42ed29c7597aa4f95536cf8be92a4a2c9907->leave($__internal_7fc6cc3d1c230176d2861e3271ad42ed29c7597aa4f95536cf8be92a4a2c9907_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "/opt/lampp/htdocs/newcr/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
