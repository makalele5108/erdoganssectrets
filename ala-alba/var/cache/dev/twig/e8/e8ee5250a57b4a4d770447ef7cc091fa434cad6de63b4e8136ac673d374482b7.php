<?php

/* order_info/new.html.twig */
class __TwigTemplate_3272f8f3b39146841456bb0e074c1c67c8c2418d1c729498f28ba057eef31551 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "order_info/new.html.twig", 1);
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
        $__internal_d41fbf4aa517ca025c479e05b1d4fb5065d39be0ec853aa87481d41435b59043 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d41fbf4aa517ca025c479e05b1d4fb5065d39be0ec853aa87481d41435b59043->enter($__internal_d41fbf4aa517ca025c479e05b1d4fb5065d39be0ec853aa87481d41435b59043_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "order_info/new.html.twig"));

        $__internal_336a7e99e7d7eec430c14dd67f807fd7ce24ee37ccfa89b38021704fd93a5e23 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_336a7e99e7d7eec430c14dd67f807fd7ce24ee37ccfa89b38021704fd93a5e23->enter($__internal_336a7e99e7d7eec430c14dd67f807fd7ce24ee37ccfa89b38021704fd93a5e23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "order_info/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d41fbf4aa517ca025c479e05b1d4fb5065d39be0ec853aa87481d41435b59043->leave($__internal_d41fbf4aa517ca025c479e05b1d4fb5065d39be0ec853aa87481d41435b59043_prof);

        
        $__internal_336a7e99e7d7eec430c14dd67f807fd7ce24ee37ccfa89b38021704fd93a5e23->leave($__internal_336a7e99e7d7eec430c14dd67f807fd7ce24ee37ccfa89b38021704fd93a5e23_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_c5e6d10d9e4e41cc392e2b39cab47a3782729360fb4d145b7f220f403878c6e4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c5e6d10d9e4e41cc392e2b39cab47a3782729360fb4d145b7f220f403878c6e4->enter($__internal_c5e6d10d9e4e41cc392e2b39cab47a3782729360fb4d145b7f220f403878c6e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_d8b922170251b00a85a8c7837347930caa589db013f7e155ca2effdb36a69b32 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d8b922170251b00a85a8c7837347930caa589db013f7e155ca2effdb36a69b32->enter($__internal_d8b922170251b00a85a8c7837347930caa589db013f7e155ca2effdb36a69b32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Order_info creation</h1>

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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("order_info_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_d8b922170251b00a85a8c7837347930caa589db013f7e155ca2effdb36a69b32->leave($__internal_d8b922170251b00a85a8c7837347930caa589db013f7e155ca2effdb36a69b32_prof);

        
        $__internal_c5e6d10d9e4e41cc392e2b39cab47a3782729360fb4d145b7f220f403878c6e4->leave($__internal_c5e6d10d9e4e41cc392e2b39cab47a3782729360fb4d145b7f220f403878c6e4_prof);

    }

    public function getTemplateName()
    {
        return "order_info/new.html.twig";
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
    <h1>Order_info creation</h1>

    {{ form_start(form) }}
        {{ form_widget(form) }}
        <input type=\"submit\" value=\"Create\" />
    {{ form_end(form) }}

    <ul>
        <li>
            <a href=\"{{ path('order_info_index') }}\">Back to the list</a>
        </li>
    </ul>
{% endblock %}
", "order_info/new.html.twig", "C:\\xampp\\htdocs\\ALA\\ala-alba\\app\\Resources\\views\\order_info\\new.html.twig");
    }
}
