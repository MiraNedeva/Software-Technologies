<?php

/* form/fields.html.twig */
class __TwigTemplate_c7a68081914b29d04613f55bfa16fc033933c129c964450c18f0c6cb9c88230b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'date_time_picker_widget' => array($this, 'block_date_time_picker_widget'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2d8c6298a31cd7821d3d1dd552c6548f1e545a65d9346410c20718e7fe32bf9d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2d8c6298a31cd7821d3d1dd552c6548f1e545a65d9346410c20718e7fe32bf9d->enter($__internal_2d8c6298a31cd7821d3d1dd552c6548f1e545a65d9346410c20718e7fe32bf9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "form/fields.html.twig"));

        // line 9
        echo "
";
        // line 10
        $this->displayBlock('date_time_picker_widget', $context, $blocks);
        
        $__internal_2d8c6298a31cd7821d3d1dd552c6548f1e545a65d9346410c20718e7fe32bf9d->leave($__internal_2d8c6298a31cd7821d3d1dd552c6548f1e545a65d9346410c20718e7fe32bf9d_prof);

    }

    public function block_date_time_picker_widget($context, array $blocks = array())
    {
        $__internal_ff440ae99ea2e1563a164be49675778cdd4c62179a3f742baac584bd9d50ee71 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ff440ae99ea2e1563a164be49675778cdd4c62179a3f742baac584bd9d50ee71->enter($__internal_ff440ae99ea2e1563a164be49675778cdd4c62179a3f742baac584bd9d50ee71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_time_picker_widget"));

        // line 11
        echo "    ";
        ob_start();
        // line 12
        echo "        <div class=\"input-group date\" data-toggle=\"datetimepicker\">
            ";
        // line 13
        $this->displayBlock("datetime_widget", $context, $blocks);
        echo "
            ";
        // line 15
        echo "                ";
        // line 16
        echo "            ";
        // line 17
        echo "        </div>
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_ff440ae99ea2e1563a164be49675778cdd4c62179a3f742baac584bd9d50ee71->leave($__internal_ff440ae99ea2e1563a164be49675778cdd4c62179a3f742baac584bd9d50ee71_prof);

    }

    public function getTemplateName()
    {
        return "form/fields.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  52 => 17,  50 => 16,  48 => 15,  44 => 13,  41 => 12,  38 => 11,  26 => 10,  23 => 9,);
    }

    public function getSource()
    {
        return "{#
   Each field type is rendered by a template fragment, which is determined
   by the name of your form type class (DateTimePickerType -> date_time_picker)
   and the suffix \"_widget\". This can be controlled by overriding getBlockPrefix()
   in DateTimePickerType.

   See http://symfony.com/doc/current/cookbook/form/create_custom_field_type.html#creating-a-template-for-the-field
#}

{% block date_time_picker_widget %}
    {% spaceless %}
        <div class=\"input-group date\" data-toggle=\"datetimepicker\">
            {{ block('datetime_widget') }}
            {#<span class=\"input-group-addon\">#}
                {#<span class=\"fa fa-calendar\" aria-hidden=\"true\"></span>#}
            {#</span>#}
        </div>
    {% endspaceless %}
{% endblock %}
";
    }
}
