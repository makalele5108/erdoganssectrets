<?php

/* @Alba/rooms/new.html.twig */
class __TwigTemplate_dd3c2fd5f837e7293bacafe9081e739c38cfec6be41b9688379f47669937e8c2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "@Alba/rooms/new.html.twig", 1);
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
        $__internal_a558386782a5df38213c4d7dfb8e7ff49fc0a392b18dae3ea244fcb666898b0d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a558386782a5df38213c4d7dfb8e7ff49fc0a392b18dae3ea244fcb666898b0d->enter($__internal_a558386782a5df38213c4d7dfb8e7ff49fc0a392b18dae3ea244fcb666898b0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Alba/rooms/new.html.twig"));

        $__internal_3edd0a82fa5e216e01e3aebd1eb8833025c30807e8cd3182d4bc420bdf64df60 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3edd0a82fa5e216e01e3aebd1eb8833025c30807e8cd3182d4bc420bdf64df60->enter($__internal_3edd0a82fa5e216e01e3aebd1eb8833025c30807e8cd3182d4bc420bdf64df60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Alba/rooms/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a558386782a5df38213c4d7dfb8e7ff49fc0a392b18dae3ea244fcb666898b0d->leave($__internal_a558386782a5df38213c4d7dfb8e7ff49fc0a392b18dae3ea244fcb666898b0d_prof);

        
        $__internal_3edd0a82fa5e216e01e3aebd1eb8833025c30807e8cd3182d4bc420bdf64df60->leave($__internal_3edd0a82fa5e216e01e3aebd1eb8833025c30807e8cd3182d4bc420bdf64df60_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_3950aa9e76e676f8b925470762bdc5af710ac12e6d1851a202c2064cb3918426 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3950aa9e76e676f8b925470762bdc5af710ac12e6d1851a202c2064cb3918426->enter($__internal_3950aa9e76e676f8b925470762bdc5af710ac12e6d1851a202c2064cb3918426_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_565cef09cceef20d6eeefce3a9e3e3f52177c946ef8efc15645e020e1f0d3282 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_565cef09cceef20d6eeefce3a9e3e3f52177c946ef8efc15645e020e1f0d3282->enter($__internal_565cef09cceef20d6eeefce3a9e3e3f52177c946ef8efc15645e020e1f0d3282_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Room creation</h1>

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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("rooms_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_565cef09cceef20d6eeefce3a9e3e3f52177c946ef8efc15645e020e1f0d3282->leave($__internal_565cef09cceef20d6eeefce3a9e3e3f52177c946ef8efc15645e020e1f0d3282_prof);

        
        $__internal_3950aa9e76e676f8b925470762bdc5af710ac12e6d1851a202c2064cb3918426->leave($__internal_3950aa9e76e676f8b925470762bdc5af710ac12e6d1851a202c2064cb3918426_prof);

    }

    public function getTemplateName()
    {
        return "@Alba/rooms/new.html.twig";
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
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
    <h1>Room creation</h1>

    {{ form_start(form) }}
        {{ form_widget(form) }}
        <input type=\"submit\" value=\"Create\" />
    {{ form_end(form) }}

    <ul>
        <li>
            <a href=\"{{ path('rooms_index') }}\">Back to the list</a>
        </li>
    </ul>
{% endblock %}
", "@Alba/rooms/new.html.twig", "C:\\xampp\\htdocs\\ALA\\ala-alba\\src\\Alba\\Bundle\\Resources\\views\\rooms\\new.html.twig");
    }
}
