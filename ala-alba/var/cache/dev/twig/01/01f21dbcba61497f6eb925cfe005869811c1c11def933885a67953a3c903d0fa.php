<?php

/* @Alba/rooms/show.html.twig */
class __TwigTemplate_346772b4657b7610e9b3979b485f44400d3e86d0fb78a7023fae6f99d20a5d3c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "@Alba/rooms/show.html.twig", 1);
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
        $__internal_8fe1c070ed1b4cf9b3c0e4a8682d016163e1907cbb87d3ca0e447644419f0f25 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8fe1c070ed1b4cf9b3c0e4a8682d016163e1907cbb87d3ca0e447644419f0f25->enter($__internal_8fe1c070ed1b4cf9b3c0e4a8682d016163e1907cbb87d3ca0e447644419f0f25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Alba/rooms/show.html.twig"));

        $__internal_9640f724f2ec71c351ad5aa6641e309e6427f3f45f8078976aa696217cd7ad8b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9640f724f2ec71c351ad5aa6641e309e6427f3f45f8078976aa696217cd7ad8b->enter($__internal_9640f724f2ec71c351ad5aa6641e309e6427f3f45f8078976aa696217cd7ad8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Alba/rooms/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8fe1c070ed1b4cf9b3c0e4a8682d016163e1907cbb87d3ca0e447644419f0f25->leave($__internal_8fe1c070ed1b4cf9b3c0e4a8682d016163e1907cbb87d3ca0e447644419f0f25_prof);

        
        $__internal_9640f724f2ec71c351ad5aa6641e309e6427f3f45f8078976aa696217cd7ad8b->leave($__internal_9640f724f2ec71c351ad5aa6641e309e6427f3f45f8078976aa696217cd7ad8b_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_6d5e0e973be4649755384ca0c691d3950b1d12d282ad9bdbf314f844c985fea2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6d5e0e973be4649755384ca0c691d3950b1d12d282ad9bdbf314f844c985fea2->enter($__internal_6d5e0e973be4649755384ca0c691d3950b1d12d282ad9bdbf314f844c985fea2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_68e96cefa34e60615c3313443d15527629e6c9749ed55ecf274a80611235ee66 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_68e96cefa34e60615c3313443d15527629e6c9749ed55ecf274a80611235ee66->enter($__internal_68e96cefa34e60615c3313443d15527629e6c9749ed55ecf274a80611235ee66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_68e96cefa34e60615c3313443d15527629e6c9749ed55ecf274a80611235ee66->leave($__internal_68e96cefa34e60615c3313443d15527629e6c9749ed55ecf274a80611235ee66_prof);

        
        $__internal_6d5e0e973be4649755384ca0c691d3950b1d12d282ad9bdbf314f844c985fea2->leave($__internal_6d5e0e973be4649755384ca0c691d3950b1d12d282ad9bdbf314f844c985fea2_prof);

    }

    public function getTemplateName()
    {
        return "@Alba/rooms/show.html.twig";
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
", "@Alba/rooms/show.html.twig", "C:\\xampp\\htdocs\\ALA\\ala-alba\\src\\Alba\\Bundle\\Resources\\views\\rooms\\show.html.twig");
    }
}
