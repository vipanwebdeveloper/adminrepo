<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_61b1a551a06ff5c7ce413120e217e4ad4bdb3b3d8626dcede40f8e2e49a3e6eb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_30c84f91e7fa8a549dfdb23cd5e295c82760f37e38f0c5c0567b937defe8ed76 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_30c84f91e7fa8a549dfdb23cd5e295c82760f37e38f0c5c0567b937defe8ed76->enter($__internal_30c84f91e7fa8a549dfdb23cd5e295c82760f37e38f0c5c0567b937defe8ed76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_30c84f91e7fa8a549dfdb23cd5e295c82760f37e38f0c5c0567b937defe8ed76->leave($__internal_30c84f91e7fa8a549dfdb23cd5e295c82760f37e38f0c5c0567b937defe8ed76_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_e49095da70aebd07299fc5568f96091ec4cd16e324f538d2934849d965f36c79 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e49095da70aebd07299fc5568f96091ec4cd16e324f538d2934849d965f36c79->enter($__internal_e49095da70aebd07299fc5568f96091ec4cd16e324f538d2934849d965f36c79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_e49095da70aebd07299fc5568f96091ec4cd16e324f538d2934849d965f36c79->leave($__internal_e49095da70aebd07299fc5568f96091ec4cd16e324f538d2934849d965f36c79_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_5ed070eab800dd305b05d0ea3ae06a06e44ecbf5a6dc48a704fe55680fb2df60 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5ed070eab800dd305b05d0ea3ae06a06e44ecbf5a6dc48a704fe55680fb2df60->enter($__internal_5ed070eab800dd305b05d0ea3ae06a06e44ecbf5a6dc48a704fe55680fb2df60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_5ed070eab800dd305b05d0ea3ae06a06e44ecbf5a6dc48a704fe55680fb2df60->leave($__internal_5ed070eab800dd305b05d0ea3ae06a06e44ecbf5a6dc48a704fe55680fb2df60_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_7706dcbf57b4ef83b949679539c7805176d81cf48ba423906c30acc5d12494a9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7706dcbf57b4ef83b949679539c7805176d81cf48ba423906c30acc5d12494a9->enter($__internal_7706dcbf57b4ef83b949679539c7805176d81cf48ba423906c30acc5d12494a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_7706dcbf57b4ef83b949679539c7805176d81cf48ba423906c30acc5d12494a9->leave($__internal_7706dcbf57b4ef83b949679539c7805176d81cf48ba423906c30acc5d12494a9_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <link href=\"{{ absolute_url(asset('bundles/framework/css/exception.css')) }}\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "/opt/lampp/htdocs/newcr/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
