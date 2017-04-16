<?php

/* AlbaBundle:rooms:edit.html.twig */
class __TwigTemplate_87f6d7c23f4f81969ca0dac3ff48fe1f33f520877eb9875c618c9ff43b7fa2b1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "AlbaBundle:rooms:edit.html.twig", 1);
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
        $__internal_b24ea9fecac376733f7a4fe6536fa6a592392ab5873eb55eef0268a90ec0b4a7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b24ea9fecac376733f7a4fe6536fa6a592392ab5873eb55eef0268a90ec0b4a7->enter($__internal_b24ea9fecac376733f7a4fe6536fa6a592392ab5873eb55eef0268a90ec0b4a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AlbaBundle:rooms:edit.html.twig"));

        $__internal_b64f3af6a83dfda60b07fcb0b7764361367913468b934535881800e5126eb6b8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b64f3af6a83dfda60b07fcb0b7764361367913468b934535881800e5126eb6b8->enter($__internal_b64f3af6a83dfda60b07fcb0b7764361367913468b934535881800e5126eb6b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AlbaBundle:rooms:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b24ea9fecac376733f7a4fe6536fa6a592392ab5873eb55eef0268a90ec0b4a7->leave($__internal_b24ea9fecac376733f7a4fe6536fa6a592392ab5873eb55eef0268a90ec0b4a7_prof);

        
        $__internal_b64f3af6a83dfda60b07fcb0b7764361367913468b934535881800e5126eb6b8->leave($__internal_b64f3af6a83dfda60b07fcb0b7764361367913468b934535881800e5126eb6b8_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_7ed0f09ea288cc6e781dee5b927700ce2f64a5e7149c67e378d7e7ffb8db45d4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7ed0f09ea288cc6e781dee5b927700ce2f64a5e7149c67e378d7e7ffb8db45d4->enter($__internal_7ed0f09ea288cc6e781dee5b927700ce2f64a5e7149c67e378d7e7ffb8db45d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_442cba55f5046420859525ec27cfaf15848846f6a680f103eb43e3d978347860 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_442cba55f5046420859525ec27cfaf15848846f6a680f103eb43e3d978347860->enter($__internal_442cba55f5046420859525ec27cfaf15848846f6a680f103eb43e3d978347860_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_442cba55f5046420859525ec27cfaf15848846f6a680f103eb43e3d978347860->leave($__internal_442cba55f5046420859525ec27cfaf15848846f6a680f103eb43e3d978347860_prof);

        
        $__internal_7ed0f09ea288cc6e781dee5b927700ce2f64a5e7149c67e378d7e7ffb8db45d4->leave($__internal_7ed0f09ea288cc6e781dee5b927700ce2f64a5e7149c67e378d7e7ffb8db45d4_prof);

    }

    public function getTemplateName()
    {
        return "AlbaBundle:rooms:edit.html.twig";
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
", "AlbaBundle:rooms:edit.html.twig", "C:\\xampp\\htdocs\\ALA\\ala-alba\\src\\Alba\\Bundle/Resources/views/rooms/edit.html.twig");
    }
}
