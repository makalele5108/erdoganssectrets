<?php

/* rooms/edit.html.twig */
class __TwigTemplate_1de954ca6bda66db5fb45e5cb2d92d5b6648c87ca5febeca87e2ee43e7f9f452 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "rooms/edit.html.twig", 1);
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
        $__internal_819378e36994e04115c169f4ec60ffe2330ac6f6f5e888ad94bdb86675b3ac1c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_819378e36994e04115c169f4ec60ffe2330ac6f6f5e888ad94bdb86675b3ac1c->enter($__internal_819378e36994e04115c169f4ec60ffe2330ac6f6f5e888ad94bdb86675b3ac1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "rooms/edit.html.twig"));

        $__internal_4ba08900e09e80a64e33d6eca0449234a3320eccd89581f2eb05e1f3fae53e0c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4ba08900e09e80a64e33d6eca0449234a3320eccd89581f2eb05e1f3fae53e0c->enter($__internal_4ba08900e09e80a64e33d6eca0449234a3320eccd89581f2eb05e1f3fae53e0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "rooms/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_819378e36994e04115c169f4ec60ffe2330ac6f6f5e888ad94bdb86675b3ac1c->leave($__internal_819378e36994e04115c169f4ec60ffe2330ac6f6f5e888ad94bdb86675b3ac1c_prof);

        
        $__internal_4ba08900e09e80a64e33d6eca0449234a3320eccd89581f2eb05e1f3fae53e0c->leave($__internal_4ba08900e09e80a64e33d6eca0449234a3320eccd89581f2eb05e1f3fae53e0c_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_00f5d124ee7d4fbfee55973b45a7ecea858e4796cf25677b16c974b189cf2dc2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_00f5d124ee7d4fbfee55973b45a7ecea858e4796cf25677b16c974b189cf2dc2->enter($__internal_00f5d124ee7d4fbfee55973b45a7ecea858e4796cf25677b16c974b189cf2dc2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_b9208ebc8b4cf4753b908d2a640d1689c98165fc037b49d31612b0fb9752bb09 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b9208ebc8b4cf4753b908d2a640d1689c98165fc037b49d31612b0fb9752bb09->enter($__internal_b9208ebc8b4cf4753b908d2a640d1689c98165fc037b49d31612b0fb9752bb09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_b9208ebc8b4cf4753b908d2a640d1689c98165fc037b49d31612b0fb9752bb09->leave($__internal_b9208ebc8b4cf4753b908d2a640d1689c98165fc037b49d31612b0fb9752bb09_prof);

        
        $__internal_00f5d124ee7d4fbfee55973b45a7ecea858e4796cf25677b16c974b189cf2dc2->leave($__internal_00f5d124ee7d4fbfee55973b45a7ecea858e4796cf25677b16c974b189cf2dc2_prof);

    }

    public function getTemplateName()
    {
        return "rooms/edit.html.twig";
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
", "rooms/edit.html.twig", "C:\\xampp\\htdocs\\ALA\\ala-alba\\app\\Resources\\views\\rooms\\edit.html.twig");
    }
}
