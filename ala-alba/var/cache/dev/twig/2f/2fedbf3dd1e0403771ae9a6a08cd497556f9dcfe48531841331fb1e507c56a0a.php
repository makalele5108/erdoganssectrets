<?php

/* :rooms:edit.html.twig */
class __TwigTemplate_334c5d6fff58e3cb0dccda20bf54a33d3f7caa971c688793fdc8aa91463519cc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":rooms:edit.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_776ca776d242490ccf4c16eaac51fb4ad73e2eef41c8d30a30c41933129a8af6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_776ca776d242490ccf4c16eaac51fb4ad73e2eef41c8d30a30c41933129a8af6->enter($__internal_776ca776d242490ccf4c16eaac51fb4ad73e2eef41c8d30a30c41933129a8af6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":rooms:edit.html.twig"));

        $__internal_da9681b7bd210dc160b11409f5aa444d5d3239ac1871b4c9fa8fcf4ba41f9f46 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_da9681b7bd210dc160b11409f5aa444d5d3239ac1871b4c9fa8fcf4ba41f9f46->enter($__internal_da9681b7bd210dc160b11409f5aa444d5d3239ac1871b4c9fa8fcf4ba41f9f46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":rooms:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_776ca776d242490ccf4c16eaac51fb4ad73e2eef41c8d30a30c41933129a8af6->leave($__internal_776ca776d242490ccf4c16eaac51fb4ad73e2eef41c8d30a30c41933129a8af6_prof);

        
        $__internal_da9681b7bd210dc160b11409f5aa444d5d3239ac1871b4c9fa8fcf4ba41f9f46->leave($__internal_da9681b7bd210dc160b11409f5aa444d5d3239ac1871b4c9fa8fcf4ba41f9f46_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_c0b9fe6cb6e086f7100406a2c110e21528600f9ef2fd7797c0c731df7e212394 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c0b9fe6cb6e086f7100406a2c110e21528600f9ef2fd7797c0c731df7e212394->enter($__internal_c0b9fe6cb6e086f7100406a2c110e21528600f9ef2fd7797c0c731df7e212394_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_858c6b2dcd5640d913a302d6a66db9ec2d03560170cfc39679716e96c6b602e7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_858c6b2dcd5640d913a302d6a66db9ec2d03560170cfc39679716e96c6b602e7->enter($__internal_858c6b2dcd5640d913a302d6a66db9ec2d03560170cfc39679716e96c6b602e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Room edit</h1>

    ";
        // line 6
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_start');
        echo "
        ";
        // line 7
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Edit\" />
    ";
        // line 9
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("rooms_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            ";
        // line 16
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 18
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_858c6b2dcd5640d913a302d6a66db9ec2d03560170cfc39679716e96c6b602e7->leave($__internal_858c6b2dcd5640d913a302d6a66db9ec2d03560170cfc39679716e96c6b602e7_prof);

        
        $__internal_c0b9fe6cb6e086f7100406a2c110e21528600f9ef2fd7797c0c731df7e212394->leave($__internal_c0b9fe6cb6e086f7100406a2c110e21528600f9ef2fd7797c0c731df7e212394_prof);

    }

    public function getTemplateName()
    {
        return ":rooms:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 18,  75 => 16,  69 => 13,  62 => 9,  57 => 7,  53 => 6,  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
    <h1>Room edit</h1>

    {{ form_start(edit_form) }}
        {{ form_widget(edit_form) }}
        <input type=\"submit\" value=\"Edit\" />
    {{ form_end(edit_form) }}

    <ul>
        <li>
            <a href=\"{{ path('rooms_index') }}\">Back to the list</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", ":rooms:edit.html.twig", "C:\\xampp\\htdocs\\ALA\\ala-alba\\app/Resources\\views/rooms/edit.html.twig");
    }
}
