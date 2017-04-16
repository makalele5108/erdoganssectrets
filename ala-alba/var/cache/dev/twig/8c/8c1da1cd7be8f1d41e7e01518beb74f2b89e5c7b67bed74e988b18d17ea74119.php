<?php

/* @Alba/user/new.html.twig */
class __TwigTemplate_c4777d4488e2b804b627d59a75e707fbcdf78f60566672736ebcc60af162ad20 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Alba/base.html.twig", "@Alba/user/new.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Alba/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8e2d9d878dcbfd3bfd3adffda67d85f29a1e448f721ae92ddd13506a9018fe82 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8e2d9d878dcbfd3bfd3adffda67d85f29a1e448f721ae92ddd13506a9018fe82->enter($__internal_8e2d9d878dcbfd3bfd3adffda67d85f29a1e448f721ae92ddd13506a9018fe82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Alba/user/new.html.twig"));

        $__internal_5ae4899efa7ca0eced014c381e016aad93110cb46b1f0fb890deb659005c8ae3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5ae4899efa7ca0eced014c381e016aad93110cb46b1f0fb890deb659005c8ae3->enter($__internal_5ae4899efa7ca0eced014c381e016aad93110cb46b1f0fb890deb659005c8ae3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Alba/user/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8e2d9d878dcbfd3bfd3adffda67d85f29a1e448f721ae92ddd13506a9018fe82->leave($__internal_8e2d9d878dcbfd3bfd3adffda67d85f29a1e448f721ae92ddd13506a9018fe82_prof);

        
        $__internal_5ae4899efa7ca0eced014c381e016aad93110cb46b1f0fb890deb659005c8ae3->leave($__internal_5ae4899efa7ca0eced014c381e016aad93110cb46b1f0fb890deb659005c8ae3_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_6ca3edff7f29cef909fc2e876182c57784cf764064124a9b9fc809ab9f0abfc8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6ca3edff7f29cef909fc2e876182c57784cf764064124a9b9fc809ab9f0abfc8->enter($__internal_6ca3edff7f29cef909fc2e876182c57784cf764064124a9b9fc809ab9f0abfc8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_bf0c532ccc2fea8bfe7615225d04436788cf86662fd1ff5ea85812218b39a47b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bf0c532ccc2fea8bfe7615225d04436788cf86662fd1ff5ea85812218b39a47b->enter($__internal_bf0c532ccc2fea8bfe7615225d04436788cf86662fd1ff5ea85812218b39a47b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>User creation</h1>

    ";
        // line 6
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
        ";
        // line 7
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Create\" />
    ";
        // line 9
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_bf0c532ccc2fea8bfe7615225d04436788cf86662fd1ff5ea85812218b39a47b->leave($__internal_bf0c532ccc2fea8bfe7615225d04436788cf86662fd1ff5ea85812218b39a47b_prof);

        
        $__internal_6ca3edff7f29cef909fc2e876182c57784cf764064124a9b9fc809ab9f0abfc8->leave($__internal_6ca3edff7f29cef909fc2e876182c57784cf764064124a9b9fc809ab9f0abfc8_prof);

    }

    public function getTemplateName()
    {
        return "@Alba/user/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 13,  62 => 9,  57 => 7,  53 => 6,  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Alba/base.html.twig' %}

{% block body %}
    <h1>User creation</h1>

    {{ form_start(form) }}
        {{ form_widget(form) }}
        <input type=\"submit\" value=\"Create\" />
    {{ form_end(form) }}

    <ul>
        <li>
            <a href=\"{{ path('user_index') }}\">Back to the list</a>
        </li>
    </ul>
{% endblock %}
", "@Alba/user/new.html.twig", "C:\\xampp\\htdocs\\ALA\\ala-alba\\src\\Alba\\Bundle\\Resources\\views\\user\\new.html.twig");
    }
}
