<?php

/* :rooms:new.html.twig */
class __TwigTemplate_c829e40a23f0c90918b69cf91242d0a0e03bfe086f62c3216a05f315ae186e38 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":rooms:new.html.twig", 1);
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
        $__internal_c87183385e7ffc50cef5b5ae64a185e62285796c88578c7db1e871e36903226c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c87183385e7ffc50cef5b5ae64a185e62285796c88578c7db1e871e36903226c->enter($__internal_c87183385e7ffc50cef5b5ae64a185e62285796c88578c7db1e871e36903226c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":rooms:new.html.twig"));

        $__internal_fc07cdb50252b9d224a3939bbd7c8c1dc2c1a1ae3e12ef89b3ed1c44d2396933 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fc07cdb50252b9d224a3939bbd7c8c1dc2c1a1ae3e12ef89b3ed1c44d2396933->enter($__internal_fc07cdb50252b9d224a3939bbd7c8c1dc2c1a1ae3e12ef89b3ed1c44d2396933_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":rooms:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c87183385e7ffc50cef5b5ae64a185e62285796c88578c7db1e871e36903226c->leave($__internal_c87183385e7ffc50cef5b5ae64a185e62285796c88578c7db1e871e36903226c_prof);

        
        $__internal_fc07cdb50252b9d224a3939bbd7c8c1dc2c1a1ae3e12ef89b3ed1c44d2396933->leave($__internal_fc07cdb50252b9d224a3939bbd7c8c1dc2c1a1ae3e12ef89b3ed1c44d2396933_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_da5b7d3f4f5b3ae6c79b84f89596beb90b54c6fc4e4c689933dcfb1b442fdc48 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_da5b7d3f4f5b3ae6c79b84f89596beb90b54c6fc4e4c689933dcfb1b442fdc48->enter($__internal_da5b7d3f4f5b3ae6c79b84f89596beb90b54c6fc4e4c689933dcfb1b442fdc48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_ddf891569f4f322987210803bfe8c955307f5dedfbdcedc61b163a1b1b936daf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ddf891569f4f322987210803bfe8c955307f5dedfbdcedc61b163a1b1b936daf->enter($__internal_ddf891569f4f322987210803bfe8c955307f5dedfbdcedc61b163a1b1b936daf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_ddf891569f4f322987210803bfe8c955307f5dedfbdcedc61b163a1b1b936daf->leave($__internal_ddf891569f4f322987210803bfe8c955307f5dedfbdcedc61b163a1b1b936daf_prof);

        
        $__internal_da5b7d3f4f5b3ae6c79b84f89596beb90b54c6fc4e4c689933dcfb1b442fdc48->leave($__internal_da5b7d3f4f5b3ae6c79b84f89596beb90b54c6fc4e4c689933dcfb1b442fdc48_prof);

    }

    public function getTemplateName()
    {
        return ":rooms:new.html.twig";
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
", ":rooms:new.html.twig", "C:\\xampp\\htdocs\\ALA\\ala-alba\\app/Resources\\views/rooms/new.html.twig");
    }
}
