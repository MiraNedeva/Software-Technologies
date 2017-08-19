<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_3493830b2b488528436b1b44dfacc76f5f8dbe07ae8543b9a643c14e7745c3fd extends Twig_Template
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
        $__internal_3a2b5d730ffdf47798ba45ab68a39a849f7714aefb4dd659fb4de10fd473b617 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3a2b5d730ffdf47798ba45ab68a39a849f7714aefb4dd659fb4de10fd473b617->enter($__internal_3a2b5d730ffdf47798ba45ab68a39a849f7714aefb4dd659fb4de10fd473b617_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3a2b5d730ffdf47798ba45ab68a39a849f7714aefb4dd659fb4de10fd473b617->leave($__internal_3a2b5d730ffdf47798ba45ab68a39a849f7714aefb4dd659fb4de10fd473b617_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_1f7c93dc126803804f7b38aeee364b6607417d6b6c76fc049d358a102a9ebebf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1f7c93dc126803804f7b38aeee364b6607417d6b6c76fc049d358a102a9ebebf->enter($__internal_1f7c93dc126803804f7b38aeee364b6607417d6b6c76fc049d358a102a9ebebf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_1f7c93dc126803804f7b38aeee364b6607417d6b6c76fc049d358a102a9ebebf->leave($__internal_1f7c93dc126803804f7b38aeee364b6607417d6b6c76fc049d358a102a9ebebf_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_3900509f8b4b89c374de9586dc5d8f2f7776a16cef9dc705cc6b0aec514a5cdf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3900509f8b4b89c374de9586dc5d8f2f7776a16cef9dc705cc6b0aec514a5cdf->enter($__internal_3900509f8b4b89c374de9586dc5d8f2f7776a16cef9dc705cc6b0aec514a5cdf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_3900509f8b4b89c374de9586dc5d8f2f7776a16cef9dc705cc6b0aec514a5cdf->leave($__internal_3900509f8b4b89c374de9586dc5d8f2f7776a16cef9dc705cc6b0aec514a5cdf_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_675a128e49061da5d5c2ff325687f3db89d0068c8f8b5eb0596672635e0c3bb6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_675a128e49061da5d5c2ff325687f3db89d0068c8f8b5eb0596672635e0c3bb6->enter($__internal_675a128e49061da5d5c2ff325687f3db89d0068c8f8b5eb0596672635e0c3bb6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_675a128e49061da5d5c2ff325687f3db89d0068c8f8b5eb0596672635e0c3bb6->leave($__internal_675a128e49061da5d5c2ff325687f3db89d0068c8f8b5eb0596672635e0c3bb6_prof);

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

    public function getSource()
    {
        return "{% extends '@WebProfiler/Profiler/layout.html.twig' %}

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
";
    }
}
