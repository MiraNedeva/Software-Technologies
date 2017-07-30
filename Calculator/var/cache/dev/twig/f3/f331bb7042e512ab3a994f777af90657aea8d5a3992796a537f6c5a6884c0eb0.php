<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_fbf3eac13cebbbe3112c616782f7ed2cda560e2dcafdb14c6b860688fcbaafe9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_341af77f25d57d1258c996c1c3eaa87ffc335c0116913f6e636f9bb5e96f8cf7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_341af77f25d57d1258c996c1c3eaa87ffc335c0116913f6e636f9bb5e96f8cf7->enter($__internal_341af77f25d57d1258c996c1c3eaa87ffc335c0116913f6e636f9bb5e96f8cf7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_341af77f25d57d1258c996c1c3eaa87ffc335c0116913f6e636f9bb5e96f8cf7->leave($__internal_341af77f25d57d1258c996c1c3eaa87ffc335c0116913f6e636f9bb5e96f8cf7_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_7f82f7009e48847f0bebad17a4183832e43b13ffcfc36e6135bd19ed43d51071 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7f82f7009e48847f0bebad17a4183832e43b13ffcfc36e6135bd19ed43d51071->enter($__internal_7f82f7009e48847f0bebad17a4183832e43b13ffcfc36e6135bd19ed43d51071_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_7f82f7009e48847f0bebad17a4183832e43b13ffcfc36e6135bd19ed43d51071->leave($__internal_7f82f7009e48847f0bebad17a4183832e43b13ffcfc36e6135bd19ed43d51071_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_6a84eea87b04a721cf35b08e84f4708e8578ba7a8a0ed95996b1f03fd8f702b3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6a84eea87b04a721cf35b08e84f4708e8578ba7a8a0ed95996b1f03fd8f702b3->enter($__internal_6a84eea87b04a721cf35b08e84f4708e8578ba7a8a0ed95996b1f03fd8f702b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_6a84eea87b04a721cf35b08e84f4708e8578ba7a8a0ed95996b1f03fd8f702b3->leave($__internal_6a84eea87b04a721cf35b08e84f4708e8578ba7a8a0ed95996b1f03fd8f702b3_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_236189af1567f339fa9726a02578506dfe5a6402d5c2043b12aae4a49231a8f9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_236189af1567f339fa9726a02578506dfe5a6402d5c2043b12aae4a49231a8f9->enter($__internal_236189af1567f339fa9726a02578506dfe5a6402d5c2043b12aae4a49231a8f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_236189af1567f339fa9726a02578506dfe5a6402d5c2043b12aae4a49231a8f9->leave($__internal_236189af1567f339fa9726a02578506dfe5a6402d5c2043b12aae4a49231a8f9_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 33,  114 => 32,  108 => 28,  106 => 27,  102 => 25,  96 => 24,  88 => 21,  82 => 17,  80 => 16,  75 => 14,  70 => 13,  64 => 12,  54 => 9,  48 => 6,  45 => 5,  42 => 4,  36 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
";
    }
}
