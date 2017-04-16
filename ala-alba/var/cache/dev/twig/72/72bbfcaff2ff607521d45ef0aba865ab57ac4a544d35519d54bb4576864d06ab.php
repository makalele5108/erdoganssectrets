<?php

/* rooms/show.html.twig */
class __TwigTemplate_ccb3ebd94677bf5ed52a17550bbb8fada8dc3a1087800f010698afc1efbb2865 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "rooms/show.html.twig", 1);
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
        $__internal_388e8714ab3600060e91e44a7726bdbec4c845bcf58233ebeb9a76dbfd1d6f7a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_388e8714ab3600060e91e44a7726bdbec4c845bcf58233ebeb9a76dbfd1d6f7a->enter($__internal_388e8714ab3600060e91e44a7726bdbec4c845bcf58233ebeb9a76dbfd1d6f7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "rooms/show.html.twig"));

        $__internal_55b8b96c2bef31cf33ac14dc91ab1b5a000db22da6aebcf74f3fa8f73ac6bb47 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_55b8b96c2bef31cf33ac14dc91ab1b5a000db22da6aebcf74f3fa8f73ac6bb47->enter($__internal_55b8b96c2bef31cf33ac14dc91ab1b5a000db22da6aebcf74f3fa8f73ac6bb47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "rooms/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_388e8714ab3600060e91e44a7726bdbec4c845bcf58233ebeb9a76dbfd1d6f7a->leave($__internal_388e8714ab3600060e91e44a7726bdbec4c845bcf58233ebeb9a76dbfd1d6f7a_prof);

        
        $__internal_55b8b96c2bef31cf33ac14dc91ab1b5a000db22da6aebcf74f3fa8f73ac6bb47->leave($__internal_55b8b96c2bef31cf33ac14dc91ab1b5a000db22da6aebcf74f3fa8f73ac6bb47_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_d324fa5b3bede67bdb0e2d91042dea9bd105bbab65e9343c09ea55341caa5811 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d324fa5b3bede67bdb0e2d91042dea9bd105bbab65e9343c09ea55341caa5811->enter($__internal_d324fa5b3bede67bdb0e2d91042dea9bd105bbab65e9343c09ea55341caa5811_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_330f1f8b06bccb5f6d210532877469713aba99b5a76120114963f1b713770f52 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_330f1f8b06bccb5f6d210532877469713aba99b5a76120114963f1b713770f52->enter($__internal_330f1f8b06bccb5f6d210532877469713aba99b5a76120114963f1b713770f52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_330f1f8b06bccb5f6d210532877469713aba99b5a76120114963f1b713770f52->leave($__internal_330f1f8b06bccb5f6d210532877469713aba99b5a76120114963f1b713770f52_prof);

        
        $__internal_d324fa5b3bede67bdb0e2d91042dea9bd105bbab65e9343c09ea55341caa5811->leave($__internal_d324fa5b3bede67bdb0e2d91042dea9bd105bbab65e9343c09ea55341caa5811_prof);

    }

    public function getTemplateName()
    {
        return "rooms/show.html.twig";
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
", "rooms/show.html.twig", "C:\\xampp\\htdocs\\ALA\\ala-alba\\app\\Resources\\views\\rooms\\show.html.twig");
    }
}
