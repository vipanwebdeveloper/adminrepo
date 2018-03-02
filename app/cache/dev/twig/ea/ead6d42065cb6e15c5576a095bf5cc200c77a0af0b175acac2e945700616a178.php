<?php

/* MazeWorldMoviesBundle:Default:index.html.twig */
class __TwigTemplate_64df0942e424b270c9f64d57efd3b282558716e86fd3f73d9e1118ee0f0415fb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_82963bbaf4cf0502dfa9544c5f60e27d07fa4b985d45ef930a358b3f65460ea1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_82963bbaf4cf0502dfa9544c5f60e27d07fa4b985d45ef930a358b3f65460ea1->enter($__internal_82963bbaf4cf0502dfa9544c5f60e27d07fa4b985d45ef930a358b3f65460ea1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MazeWorldMoviesBundle:Default:index.html.twig"));

        // line 1
        echo "Hello World!
";
        
        $__internal_82963bbaf4cf0502dfa9544c5f60e27d07fa4b985d45ef930a358b3f65460ea1->leave($__internal_82963bbaf4cf0502dfa9544c5f60e27d07fa4b985d45ef930a358b3f65460ea1_prof);

    }

    public function getTemplateName()
    {
        return "MazeWorldMoviesBundle:Default:index.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("Hello World!
", "MazeWorldMoviesBundle:Default:index.html.twig", "/opt/lampp/htdocs/newcr/src/MazeWorld/MoviesBundle/Resources/views/Default/index.html.twig");
    }
}
