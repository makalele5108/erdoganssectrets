<?php

/* @Alba/rooms/edit.html.twig */
class __TwigTemplate_6674583f7cc75ccfc5e4a9bf99d364e527a132756bf1c25df5292478e673f223 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "@Alba/rooms/edit.html.twig", 1);
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
        $__internal_2809be3176a849810903190c4f23246e47be5db2aabc6ae48495a82f4b71cdce = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2809be3176a849810903190c4f23246e47be5db2aabc6ae48495a82f4b71cdce->enter($__internal_2809be3176a849810903190c4f23246e47be5db2aabc6ae48495a82f4b71cdce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Alba/rooms/edit.html.twig"));

        $__internal_f0055f1b936e2a4ccdd729d15c89de3f2fddbc06951abf0975f9c68a62ec0b65 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f0055f1b936e2a4ccdd729d15c89de3f2fddbc06951abf0975f9c68a62ec0b65->enter($__internal_f0055f1b936e2a4ccdd729d15c89de3f2fddbc06951abf0975f9c68a62ec0b65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Alba/rooms/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2809be3176a849810903190c4f23246e47be5db2aabc6ae48495a82f4b71cdce->leave($__internal_2809be3176a849810903190c4f23246e47be5db2aabc6ae48495a82f4b71cdce_prof);

        
        $__internal_f0055f1b936e2a4ccdd729d15c89de3f2fddbc06951abf0975f9c68a62ec0b65->leave($__internal_f0055f1b936e2a4ccdd729d15c89de3f2fddbc06951abf0975f9c68a62ec0b65_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_220752bc87002f6e3a0d69000b142ecb47510c9da4946048afe86d1da4a1f7de = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_220752bc87002f6e3a0d69000b142ecb47510c9da4946048afe86d1da4a1f7de->enter($__internal_220752bc87002f6e3a0d69000b142ecb47510c9da4946048afe86d1da4a1f7de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_9cd46446298dd6bf90fba77eb86afaf8ecbb4ebcafa70d77b66e51e558de7b23 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9cd46446298dd6bf90fba77eb86afaf8ecbb4ebcafa70d77b66e51e558de7b23->enter($__internal_9cd46446298dd6bf90fba77eb86afaf8ecbb4ebcafa70d77b66e51e558de7b23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_9cd46446298dd6bf90fba77eb86afaf8ecbb4ebcafa70d77b66e51e558de7b23->leave($__internal_9cd46446298dd6bf90fba77eb86afaf8ecbb4ebcafa70d77b66e51e558de7b23_prof);

        
        $__internal_220752bc87002f6e3a0d69000b142ecb47510c9da4946048afe86d1da4a1f7de->leave($__internal_220752bc87002f6e3a0d69000b142ecb47510c9da4946048afe86d1da4a1f7de_prof);

    }

    public function getTemplateName()
    {
        return "@Alba/rooms/edit.html.twig";
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
", "@Alba/rooms/edit.html.twig", "C:\\xampp\\htdocs\\ALA\\ala-alba\\src\\Alba\\Bundle\\Resources\\views\\rooms\\edit.html.twig");
    }
}
