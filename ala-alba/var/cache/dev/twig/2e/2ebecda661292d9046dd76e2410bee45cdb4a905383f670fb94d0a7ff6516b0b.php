<?php

/* :order_info:new.html.twig */
class __TwigTemplate_104faf081361b8317fd01951645439e9ef709e1b9cc3f35e33a35bcdeb33f26a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":order_info:new.html.twig", 1);
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
        $__internal_be896066c51cbd49bb04ecb8184b52c5c202151042c3d57b33af9c8b8145aeef = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_be896066c51cbd49bb04ecb8184b52c5c202151042c3d57b33af9c8b8145aeef->enter($__internal_be896066c51cbd49bb04ecb8184b52c5c202151042c3d57b33af9c8b8145aeef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":order_info:new.html.twig"));

        $__internal_7af76c994e64ca0e696f6c53fa04ac0e3a6f403db9369aac96b0daca53c94179 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7af76c994e64ca0e696f6c53fa04ac0e3a6f403db9369aac96b0daca53c94179->enter($__internal_7af76c994e64ca0e696f6c53fa04ac0e3a6f403db9369aac96b0daca53c94179_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":order_info:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_be896066c51cbd49bb04ecb8184b52c5c202151042c3d57b33af9c8b8145aeef->leave($__internal_be896066c51cbd49bb04ecb8184b52c5c202151042c3d57b33af9c8b8145aeef_prof);

        
        $__internal_7af76c994e64ca0e696f6c53fa04ac0e3a6f403db9369aac96b0daca53c94179->leave($__internal_7af76c994e64ca0e696f6c53fa04ac0e3a6f403db9369aac96b0daca53c94179_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_1366cc755d61ce4bdc68a6062d8ce9ba42075dbffc1b35857840f910fae338d0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1366cc755d61ce4bdc68a6062d8ce9ba42075dbffc1b35857840f910fae338d0->enter($__internal_1366cc755d61ce4bdc68a6062d8ce9ba42075dbffc1b35857840f910fae338d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_de2f57008026d0bbf96835fe2364b3b8b91f4d5cf8336552bf4b36f392e61b9e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_de2f57008026d0bbf96835fe2364b3b8b91f4d5cf8336552bf4b36f392e61b9e->enter($__internal_de2f57008026d0bbf96835fe2364b3b8b91f4d5cf8336552bf4b36f392e61b9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_de2f57008026d0bbf96835fe2364b3b8b91f4d5cf8336552bf4b36f392e61b9e->leave($__internal_de2f57008026d0bbf96835fe2364b3b8b91f4d5cf8336552bf4b36f392e61b9e_prof);

        
        $__internal_1366cc755d61ce4bdc68a6062d8ce9ba42075dbffc1b35857840f910fae338d0->leave($__internal_1366cc755d61ce4bdc68a6062d8ce9ba42075dbffc1b35857840f910fae338d0_prof);

    }

    public function getTemplateName()
    {
        return ":order_info:new.html.twig";
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
", ":order_info:new.html.twig", "C:\\xampp\\htdocs\\ALA\\ala-alba\\app/Resources\\views/order_info/new.html.twig");
    }
}
