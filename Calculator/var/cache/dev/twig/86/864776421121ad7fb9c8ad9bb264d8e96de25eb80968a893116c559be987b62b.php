<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_5186b2deab58dd348616a827d1b151a0035b01f0d713e0a53a4900ca718dafad extends Twig_Template
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
        $__internal_91743c798aafff75a470a1748af27be4d6f398cb248bc56116ddd27422b9965a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_91743c798aafff75a470a1748af27be4d6f398cb248bc56116ddd27422b9965a->enter($__internal_91743c798aafff75a470a1748af27be4d6f398cb248bc56116ddd27422b9965a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_91743c798aafff75a470a1748af27be4d6f398cb248bc56116ddd27422b9965a->leave($__internal_91743c798aafff75a470a1748af27be4d6f398cb248bc56116ddd27422b9965a_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_d93d78402a96250286785dc4a0f054c023d91f8e3ebf3bd4a650d521d3ca8c5d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d93d78402a96250286785dc4a0f054c023d91f8e3ebf3bd4a650d521d3ca8c5d->enter($__internal_d93d78402a96250286785dc4a0f054c023d91f8e3ebf3bd4a650d521d3ca8c5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_d93d78402a96250286785dc4a0f054c023d91f8e3ebf3bd4a650d521d3ca8c5d->leave($__internal_d93d78402a96250286785dc4a0f054c023d91f8e3ebf3bd4a650d521d3ca8c5d_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_c9c83c58796b8a5b842fdc30269c22810e42b725ad2f434c0fd93c2d2648c4f5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c9c83c58796b8a5b842fdc30269c22810e42b725ad2f434c0fd93c2d2648c4f5->enter($__internal_c9c83c58796b8a5b842fdc30269c22810e42b725ad2f434c0fd93c2d2648c4f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_c9c83c58796b8a5b842fdc30269c22810e42b725ad2f434c0fd93c2d2648c4f5->leave($__internal_c9c83c58796b8a5b842fdc30269c22810e42b725ad2f434c0fd93c2d2648c4f5_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_240f8a1caf36461b86a982ec891ac563e141c03f0ce28e9de9b6251e31a31237 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_240f8a1caf36461b86a982ec891ac563e141c03f0ce28e9de9b6251e31a31237->enter($__internal_240f8a1caf36461b86a982ec891ac563e141c03f0ce28e9de9b6251e31a31237_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_240f8a1caf36461b86a982ec891ac563e141c03f0ce28e9de9b6251e31a31237->leave($__internal_240f8a1caf36461b86a982ec891ac563e141c03f0ce28e9de9b6251e31a31237_prof);

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

    public function getSource()
    {
        return "{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <link href=\"{{ absolute_url(asset('bundles/framework/css/exception.css')) }}\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
";
    }
}
