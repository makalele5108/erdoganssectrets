<?php

/* @Alba/rooms/index.html.twig */
class __TwigTemplate_cd212c4293c21a0868472b08790d17ee09ac1c5cc18640c9891a8fd6e7347f19 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "@Alba/rooms/index.html.twig", 1);
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
        $__internal_a81eb96816093fa83cd8ef2b3718f7ac9e9e719b0523744f5da3ceb0d0119f8a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a81eb96816093fa83cd8ef2b3718f7ac9e9e719b0523744f5da3ceb0d0119f8a->enter($__internal_a81eb96816093fa83cd8ef2b3718f7ac9e9e719b0523744f5da3ceb0d0119f8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Alba/rooms/index.html.twig"));

        $__internal_db5efcd9ba8507d311bd0b5b39a7034fb7cb37068ccc9cdd3e82bdc90c99e6fe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_db5efcd9ba8507d311bd0b5b39a7034fb7cb37068ccc9cdd3e82bdc90c99e6fe->enter($__internal_db5efcd9ba8507d311bd0b5b39a7034fb7cb37068ccc9cdd3e82bdc90c99e6fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Alba/rooms/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a81eb96816093fa83cd8ef2b3718f7ac9e9e719b0523744f5da3ceb0d0119f8a->leave($__internal_a81eb96816093fa83cd8ef2b3718f7ac9e9e719b0523744f5da3ceb0d0119f8a_prof);

        
        $__internal_db5efcd9ba8507d311bd0b5b39a7034fb7cb37068ccc9cdd3e82bdc90c99e6fe->leave($__internal_db5efcd9ba8507d311bd0b5b39a7034fb7cb37068ccc9cdd3e82bdc90c99e6fe_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_69ebde9af083ba36da2b6c00d430aa75300e9c7ea5353661dd8728359a44a1d8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_69ebde9af083ba36da2b6c00d430aa75300e9c7ea5353661dd8728359a44a1d8->enter($__internal_69ebde9af083ba36da2b6c00d430aa75300e9c7ea5353661dd8728359a44a1d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_27600989c9ecae734c595c117da78e294e509e759b3c5472cf3e5d1a9eeae019 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_27600989c9ecae734c595c117da78e294e509e759b3c5472cf3e5d1a9eeae019->enter($__internal_27600989c9ecae734c595c117da78e294e509e759b3c5472cf3e5d1a9eeae019_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Rooms list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Seasonprice</th>
                <th>Description</th>
                <th>Price</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["rooms"]) ? $context["rooms"] : $this->getContext($context, "rooms")));
        foreach ($context['_seq'] as $context["_key"] => $context["room"]) {
            // line 18
            echo "            <tr>
                <td><a href=\"";
            // line 19
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("rooms_show", array("id" => $this->getAttribute($context["room"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["room"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["room"], "seasonPrice", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($context["room"], "description", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["room"], "price", array()), "html", null, true);
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 26
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("rooms_show", array("id" => $this->getAttribute($context["room"], "id", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 29
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("rooms_edit", array("id" => $this->getAttribute($context["room"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['room'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 40
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("rooms_new");
        echo "\">Create a new room</a>
        </li>
    </ul>
";
        
        $__internal_27600989c9ecae734c595c117da78e294e509e759b3c5472cf3e5d1a9eeae019->leave($__internal_27600989c9ecae734c595c117da78e294e509e759b3c5472cf3e5d1a9eeae019_prof);

        
        $__internal_69ebde9af083ba36da2b6c00d430aa75300e9c7ea5353661dd8728359a44a1d8->leave($__internal_69ebde9af083ba36da2b6c00d430aa75300e9c7ea5353661dd8728359a44a1d8_prof);

    }

    public function getTemplateName()
    {
        return "@Alba/rooms/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 40,  110 => 35,  98 => 29,  92 => 26,  85 => 22,  81 => 21,  77 => 20,  71 => 19,  68 => 18,  64 => 17,  49 => 4,  40 => 3,  11 => 1,);
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
    <h1>Rooms list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Seasonprice</th>
                <th>Description</th>
                <th>Price</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        {% for room in rooms %}
            <tr>
                <td><a href=\"{{ path('rooms_show', { 'id': room.id }) }}\">{{ room.id }}</a></td>
                <td>{{ room.seasonPrice }}</td>
                <td>{{ room.description }}</td>
                <td>{{ room.price }}</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"{{ path('rooms_show', { 'id': room.id }) }}\">show</a>
                        </li>
                        <li>
                            <a href=\"{{ path('rooms_edit', { 'id': room.id }) }}\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('rooms_new') }}\">Create a new room</a>
        </li>
    </ul>
{% endblock %}
", "@Alba/rooms/index.html.twig", "C:\\xampp\\htdocs\\ALA\\ala-alba\\src\\Alba\\Bundle\\Resources\\views\\rooms\\index.html.twig");
    }
}
