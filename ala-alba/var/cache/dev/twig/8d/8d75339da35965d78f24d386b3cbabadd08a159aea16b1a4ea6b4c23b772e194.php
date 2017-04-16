<?php

/* rooms/new.html.twig */
class __TwigTemplate_1da78c5c1cba23a4c6d3827a32fe9fc313ef63ad1837abee6616702834c75ffe extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "rooms/new.html.twig", 1);
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
        $__internal_7a300224c0ad06c10848964d74b914c4eed5690f261fe1987473b3f0e7656723 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7a300224c0ad06c10848964d74b914c4eed5690f261fe1987473b3f0e7656723->enter($__internal_7a300224c0ad06c10848964d74b914c4eed5690f261fe1987473b3f0e7656723_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "rooms/new.html.twig"));

        $__internal_2939f5d227d53a7ce74948637e3bb3961e1bcf3d343243aa8ea00a8834b615f0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2939f5d227d53a7ce74948637e3bb3961e1bcf3d343243aa8ea00a8834b615f0->enter($__internal_2939f5d227d53a7ce74948637e3bb3961e1bcf3d343243aa8ea00a8834b615f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "rooms/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7a300224c0ad06c10848964d74b914c4eed5690f261fe1987473b3f0e7656723->leave($__internal_7a300224c0ad06c10848964d74b914c4eed5690f261fe1987473b3f0e7656723_prof);

        
        $__internal_2939f5d227d53a7ce74948637e3bb3961e1bcf3d343243aa8ea00a8834b615f0->leave($__internal_2939f5d227d53a7ce74948637e3bb3961e1bcf3d343243aa8ea00a8834b615f0_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_d118467671d5823acae65116b154111b733e0d504e1b998b84bc260443af2db7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d118467671d5823acae65116b154111b733e0d504e1b998b84bc260443af2db7->enter($__internal_d118467671d5823acae65116b154111b733e0d504e1b998b84bc260443af2db7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_73616e94f5a543214f4c85526794a7a9e134f557f66822b4f5c3022695b1e87a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_73616e94f5a543214f4c85526794a7a9e134f557f66822b4f5c3022695b1e87a->enter($__internal_73616e94f5a543214f4c85526794a7a9e134f557f66822b4f5c3022695b1e87a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_73616e94f5a543214f4c85526794a7a9e134f557f66822b4f5c3022695b1e87a->leave($__internal_73616e94f5a543214f4c85526794a7a9e134f557f66822b4f5c3022695b1e87a_prof);

        
        $__internal_d118467671d5823acae65116b154111b733e0d504e1b998b84bc260443af2db7->leave($__internal_d118467671d5823acae65116b154111b733e0d504e1b998b84bc260443af2db7_prof);

    }

    public function getTemplateName()
    {
        return "rooms/new.html.twig";
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
", "rooms/new.html.twig", "C:\\xampp\\htdocs\\ALA\\ala-alba\\app\\Resources\\views\\rooms\\new.html.twig");
    }
}
