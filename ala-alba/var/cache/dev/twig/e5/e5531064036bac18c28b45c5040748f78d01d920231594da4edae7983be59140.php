<?php

/* :rooms:show.html.twig */
class __TwigTemplate_7487aa0c3dab5b85c71e2e651719f2bb7659e86f0c3dc27b7a9e3c2b4504f036 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":rooms:show.html.twig", 1);
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
        $__internal_944a1deaf9390769534f53165b66a9a9b1a2abf371506d9af69f38eafee07746 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_944a1deaf9390769534f53165b66a9a9b1a2abf371506d9af69f38eafee07746->enter($__internal_944a1deaf9390769534f53165b66a9a9b1a2abf371506d9af69f38eafee07746_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":rooms:show.html.twig"));

        $__internal_025c8c84fe0ba69f8fe00ab8c50778851316fd3448ee18b0bcafbe54e831756f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_025c8c84fe0ba69f8fe00ab8c50778851316fd3448ee18b0bcafbe54e831756f->enter($__internal_025c8c84fe0ba69f8fe00ab8c50778851316fd3448ee18b0bcafbe54e831756f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":rooms:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_944a1deaf9390769534f53165b66a9a9b1a2abf371506d9af69f38eafee07746->leave($__internal_944a1deaf9390769534f53165b66a9a9b1a2abf371506d9af69f38eafee07746_prof);

        
        $__internal_025c8c84fe0ba69f8fe00ab8c50778851316fd3448ee18b0bcafbe54e831756f->leave($__internal_025c8c84fe0ba69f8fe00ab8c50778851316fd3448ee18b0bcafbe54e831756f_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_3d6ea0faad13e57876dc262b15c28696dd69f7edd40c20e0f826437fd43395f3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3d6ea0faad13e57876dc262b15c28696dd69f7edd40c20e0f826437fd43395f3->enter($__internal_3d6ea0faad13e57876dc262b15c28696dd69f7edd40c20e0f826437fd43395f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_fff7ba49ec15b251df80f1fac08aa530f26613492298b21801e4583f3353a94b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fff7ba49ec15b251df80f1fac08aa530f26613492298b21801e4583f3353a94b->enter($__internal_fff7ba49ec15b251df80f1fac08aa530f26613492298b21801e4583f3353a94b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Room</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["room"]) ? $context["room"] : $this->getContext($context, "room")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Seasonprice</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["room"]) ? $context["room"] : $this->getContext($context, "room")), "seasonPrice", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Description</th>
                <td>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["room"]) ? $context["room"] : $this->getContext($context, "room")), "description", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Price</th>
                <td>";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["room"]) ? $context["room"] : $this->getContext($context, "room")), "price", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 29
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("rooms_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("rooms_edit", array("id" => $this->getAttribute((isset($context["room"]) ? $context["room"] : $this->getContext($context, "room")), "id", array()))), "html", null, true);
        echo "\">Edit</a>
        </li>
        <li>
            ";
        // line 35
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 37
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_fff7ba49ec15b251df80f1fac08aa530f26613492298b21801e4583f3353a94b->leave($__internal_fff7ba49ec15b251df80f1fac08aa530f26613492298b21801e4583f3353a94b_prof);

        
        $__internal_3d6ea0faad13e57876dc262b15c28696dd69f7edd40c20e0f826437fd43395f3->leave($__internal_3d6ea0faad13e57876dc262b15c28696dd69f7edd40c20e0f826437fd43395f3_prof);

    }

    public function getTemplateName()
    {
        return ":rooms:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  105 => 37,  100 => 35,  94 => 32,  88 => 29,  78 => 22,  71 => 18,  64 => 14,  57 => 10,  49 => 4,  40 => 3,  11 => 1,);
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
    <h1>Room</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>{{ room.id }}</td>
            </tr>
            <tr>
                <th>Seasonprice</th>
                <td>{{ room.seasonPrice }}</td>
            </tr>
            <tr>
                <th>Description</th>
                <td>{{ room.description }}</td>
            </tr>
            <tr>
                <th>Price</th>
                <td>{{ room.price }}</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('rooms_index') }}\">Back to the list</a>
        </li>
        <li>
            <a href=\"{{ path('rooms_edit', { 'id': room.id }) }}\">Edit</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", ":rooms:show.html.twig", "C:\\xampp\\htdocs\\ALA\\ala-alba\\app/Resources\\views/rooms/show.html.twig");
    }
}
