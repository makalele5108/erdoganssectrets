<?php

/* AlbaBundle:rooms:new.html.twig */
class __TwigTemplate_a9008eaf1593f42d6ac9f5db51d0e68afa8840147fc8837830f80641efc8a75c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "AlbaBundle:rooms:new.html.twig", 1);
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
        $__internal_197e0390de87c9d109d949ccc9864367fd1d207e0d5baf6c9bdbe601b5e3e6fc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_197e0390de87c9d109d949ccc9864367fd1d207e0d5baf6c9bdbe601b5e3e6fc->enter($__internal_197e0390de87c9d109d949ccc9864367fd1d207e0d5baf6c9bdbe601b5e3e6fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AlbaBundle:rooms:new.html.twig"));

        $__internal_9495502a274d67d4db638459b96ce4b9d305607103aacb44f8066e2b8f45fe59 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9495502a274d67d4db638459b96ce4b9d305607103aacb44f8066e2b8f45fe59->enter($__internal_9495502a274d67d4db638459b96ce4b9d305607103aacb44f8066e2b8f45fe59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AlbaBundle:rooms:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_197e0390de87c9d109d949ccc9864367fd1d207e0d5baf6c9bdbe601b5e3e6fc->leave($__internal_197e0390de87c9d109d949ccc9864367fd1d207e0d5baf6c9bdbe601b5e3e6fc_prof);

        
        $__internal_9495502a274d67d4db638459b96ce4b9d305607103aacb44f8066e2b8f45fe59->leave($__internal_9495502a274d67d4db638459b96ce4b9d305607103aacb44f8066e2b8f45fe59_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_4244965ecff69de47a85e19b906a92b05d26450572fa77b6cc60f5cf0836a035 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4244965ecff69de47a85e19b906a92b05d26450572fa77b6cc60f5cf0836a035->enter($__internal_4244965ecff69de47a85e19b906a92b05d26450572fa77b6cc60f5cf0836a035_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_e92fe212c37ed42dfd138b0dc10809ed5bb59a08037d2d07ec3baad95ecce831 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e92fe212c37ed42dfd138b0dc10809ed5bb59a08037d2d07ec3baad95ecce831->enter($__internal_e92fe212c37ed42dfd138b0dc10809ed5bb59a08037d2d07ec3baad95ecce831_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_e92fe212c37ed42dfd138b0dc10809ed5bb59a08037d2d07ec3baad95ecce831->leave($__internal_e92fe212c37ed42dfd138b0dc10809ed5bb59a08037d2d07ec3baad95ecce831_prof);

        
        $__internal_4244965ecff69de47a85e19b906a92b05d26450572fa77b6cc60f5cf0836a035->leave($__internal_4244965ecff69de47a85e19b906a92b05d26450572fa77b6cc60f5cf0836a035_prof);

    }

    public function getTemplateName()
    {
        return "AlbaBundle:rooms:new.html.twig";
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
", "AlbaBundle:rooms:new.html.twig", "C:\\xampp\\htdocs\\ALA\\ala-alba\\src\\Alba\\Bundle/Resources/views/rooms/new.html.twig");
    }
}
