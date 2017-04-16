<?php

/* @Alba/user/show.html.twig */
class __TwigTemplate_6573f6c94fbbed9741615388d4f1a0216eb05ce58ed1e97357de1a475e95da31 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Alba/base.html.twig", "@Alba/user/show.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Alba/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_02411bd24f2fe9b0e4cb43c70b508302f620b7c722cb31af273c28d01ed20f2d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_02411bd24f2fe9b0e4cb43c70b508302f620b7c722cb31af273c28d01ed20f2d->enter($__internal_02411bd24f2fe9b0e4cb43c70b508302f620b7c722cb31af273c28d01ed20f2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Alba/user/show.html.twig"));

        $__internal_69136edaf838721a0c97502dcf88c6384377bbde270f40553ea7d1067252aada = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_69136edaf838721a0c97502dcf88c6384377bbde270f40553ea7d1067252aada->enter($__internal_69136edaf838721a0c97502dcf88c6384377bbde270f40553ea7d1067252aada_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Alba/user/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_02411bd24f2fe9b0e4cb43c70b508302f620b7c722cb31af273c28d01ed20f2d->leave($__internal_02411bd24f2fe9b0e4cb43c70b508302f620b7c722cb31af273c28d01ed20f2d_prof);

        
        $__internal_69136edaf838721a0c97502dcf88c6384377bbde270f40553ea7d1067252aada->leave($__internal_69136edaf838721a0c97502dcf88c6384377bbde270f40553ea7d1067252aada_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_1c3d34e36e0074043476b5c721bbecbdadb46b3831d9e616ae7e1542b3ccd44e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1c3d34e36e0074043476b5c721bbecbdadb46b3831d9e616ae7e1542b3ccd44e->enter($__internal_1c3d34e36e0074043476b5c721bbecbdadb46b3831d9e616ae7e1542b3ccd44e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_fa6a8b24700365cd78cbcee36212016bebe8f141d64539f168fd8c152658890f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fa6a8b24700365cd78cbcee36212016bebe8f141d64539f168fd8c152658890f->enter($__internal_fa6a8b24700365cd78cbcee36212016bebe8f141d64539f168fd8c152658890f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>User</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Firstname</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "firstName", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Preposition</th>
                <td>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "prePosition", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Lastname</th>
                <td>";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "lastName", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Sex</th>
                <td>";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "sex", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Date</th>
                <td>";
        // line 30
        if ($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "date", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "date", array()), "Y-m-d H:i:s"), "html", null, true);
        }
        echo "</td>
            </tr>
            <tr>
                <th>Place</th>
                <td>";
        // line 34
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "place", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Zipcode</th>
                <td>";
        // line 38
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "zipcode", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>City</th>
                <td>";
        // line 42
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "city", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Country</th>
                <td>";
        // line 46
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "country", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Phonenumber</th>
                <td>";
        // line 50
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "phoneNumber", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 57
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 60
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_edit", array("id" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "id", array()))), "html", null, true);
        echo "\">Edit</a>
        </li>
        <li>
            ";
        // line 63
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 65
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_fa6a8b24700365cd78cbcee36212016bebe8f141d64539f168fd8c152658890f->leave($__internal_fa6a8b24700365cd78cbcee36212016bebe8f141d64539f168fd8c152658890f_prof);

        
        $__internal_1c3d34e36e0074043476b5c721bbecbdadb46b3831d9e616ae7e1542b3ccd44e->leave($__internal_1c3d34e36e0074043476b5c721bbecbdadb46b3831d9e616ae7e1542b3ccd44e_prof);

    }

    public function getTemplateName()
    {
        return "@Alba/user/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  156 => 65,  151 => 63,  145 => 60,  139 => 57,  129 => 50,  122 => 46,  115 => 42,  108 => 38,  101 => 34,  92 => 30,  85 => 26,  78 => 22,  71 => 18,  64 => 14,  57 => 10,  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Alba/base.html.twig' %}

{% block body %}
    <h1>User</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>{{ user.id }}</td>
            </tr>
            <tr>
                <th>Firstname</th>
                <td>{{ user.firstName }}</td>
            </tr>
            <tr>
                <th>Preposition</th>
                <td>{{ user.prePosition }}</td>
            </tr>
            <tr>
                <th>Lastname</th>
                <td>{{ user.lastName }}</td>
            </tr>
            <tr>
                <th>Sex</th>
                <td>{{ user.sex }}</td>
            </tr>
            <tr>
                <th>Date</th>
                <td>{% if user.date %}{{ user.date|date('Y-m-d H:i:s') }}{% endif %}</td>
            </tr>
            <tr>
                <th>Place</th>
                <td>{{ user.place }}</td>
            </tr>
            <tr>
                <th>Zipcode</th>
                <td>{{ user.zipcode }}</td>
            </tr>
            <tr>
                <th>City</th>
                <td>{{ user.city }}</td>
            </tr>
            <tr>
                <th>Country</th>
                <td>{{ user.country }}</td>
            </tr>
            <tr>
                <th>Phonenumber</th>
                <td>{{ user.phoneNumber }}</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('user_index') }}\">Back to the list</a>
        </li>
        <li>
            <a href=\"{{ path('user_edit', { 'id': user.id }) }}\">Edit</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", "@Alba/user/show.html.twig", "C:\\xampp\\htdocs\\ALA\\ala-alba\\src\\Alba\\Bundle\\Resources\\views\\user\\show.html.twig");
    }
}
