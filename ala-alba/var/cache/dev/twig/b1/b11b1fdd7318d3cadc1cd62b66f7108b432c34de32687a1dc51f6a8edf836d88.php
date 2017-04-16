<?php

/* order_info/edit.html.twig */
class __TwigTemplate_f9fa621e3a02737c8f7f6bcd32efc5ae6f96cb07ea9555427cb2d9fcaab33c50 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "order_info/edit.html.twig", 1);
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
        $__internal_2b299b3c29009175a0afd97663d06ad337093cdbc80aeb1f1124cb5f90c843bd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2b299b3c29009175a0afd97663d06ad337093cdbc80aeb1f1124cb5f90c843bd->enter($__internal_2b299b3c29009175a0afd97663d06ad337093cdbc80aeb1f1124cb5f90c843bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "order_info/edit.html.twig"));

        $__internal_7c073885fd7cc8e94403fae0373cb702802368019c42bd4aa8f0c2a2f00abc0a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7c073885fd7cc8e94403fae0373cb702802368019c42bd4aa8f0c2a2f00abc0a->enter($__internal_7c073885fd7cc8e94403fae0373cb702802368019c42bd4aa8f0c2a2f00abc0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "order_info/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2b299b3c29009175a0afd97663d06ad337093cdbc80aeb1f1124cb5f90c843bd->leave($__internal_2b299b3c29009175a0afd97663d06ad337093cdbc80aeb1f1124cb5f90c843bd_prof);

        
        $__internal_7c073885fd7cc8e94403fae0373cb702802368019c42bd4aa8f0c2a2f00abc0a->leave($__internal_7c073885fd7cc8e94403fae0373cb702802368019c42bd4aa8f0c2a2f00abc0a_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_9747e74f98fed17beb8df55d25167fdc93231978008eadfd787fbe788b581e47 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9747e74f98fed17beb8df55d25167fdc93231978008eadfd787fbe788b581e47->enter($__internal_9747e74f98fed17beb8df55d25167fdc93231978008eadfd787fbe788b581e47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_42c685863ecf4b0ff68c8d9b7f3625dbe838c36748ad3d0f9dcf76d572fa8e99 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_42c685863ecf4b0ff68c8d9b7f3625dbe838c36748ad3d0f9dcf76d572fa8e99->enter($__internal_42c685863ecf4b0ff68c8d9b7f3625dbe838c36748ad3d0f9dcf76d572fa8e99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Order_info edit</h1>

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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("order_info_index");
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
        
        $__internal_42c685863ecf4b0ff68c8d9b7f3625dbe838c36748ad3d0f9dcf76d572fa8e99->leave($__internal_42c685863ecf4b0ff68c8d9b7f3625dbe838c36748ad3d0f9dcf76d572fa8e99_prof);

        
        $__internal_9747e74f98fed17beb8df55d25167fdc93231978008eadfd787fbe788b581e47->leave($__internal_9747e74f98fed17beb8df55d25167fdc93231978008eadfd787fbe788b581e47_prof);

    }

    public function getTemplateName()
    {
        return "order_info/edit.html.twig";
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
    <h1>Order_info edit</h1>

    {{ form_start(edit_form) }}
        {{ form_widget(edit_form) }}
        <input type=\"submit\" value=\"Edit\" />
    {{ form_end(edit_form) }}

    <ul>
        <li>
            <a href=\"{{ path('order_info_index') }}\">Back to the list</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", "order_info/edit.html.twig", "C:\\xampp\\htdocs\\ALA\\ala-alba\\app\\Resources\\views\\order_info\\edit.html.twig");
    }
}
