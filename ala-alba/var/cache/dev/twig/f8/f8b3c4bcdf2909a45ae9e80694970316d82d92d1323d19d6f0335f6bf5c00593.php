<?php

/* AlbaBundle:user:index.html.twig */
class __TwigTemplate_842ae2ec2aeb76e1bcbe7b85cef2f5cf66f8a5b49fd30aa50124ecdd2dd3d083 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Alba/base.html.twig", "AlbaBundle:user:index.html.twig", 1);
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
        $__internal_6dfed5c821726068b66146eb67c4dc036a327fdd6766f753aa13b4d4dc2dd6de = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6dfed5c821726068b66146eb67c4dc036a327fdd6766f753aa13b4d4dc2dd6de->enter($__internal_6dfed5c821726068b66146eb67c4dc036a327fdd6766f753aa13b4d4dc2dd6de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AlbaBundle:user:index.html.twig"));

        $__internal_ec88a957f17918a2f508cfa8236cf09016f231a7601fc0a100144200bdad8bf8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ec88a957f17918a2f508cfa8236cf09016f231a7601fc0a100144200bdad8bf8->enter($__internal_ec88a957f17918a2f508cfa8236cf09016f231a7601fc0a100144200bdad8bf8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AlbaBundle:user:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6dfed5c821726068b66146eb67c4dc036a327fdd6766f753aa13b4d4dc2dd6de->leave($__internal_6dfed5c821726068b66146eb67c4dc036a327fdd6766f753aa13b4d4dc2dd6de_prof);

        
        $__internal_ec88a957f17918a2f508cfa8236cf09016f231a7601fc0a100144200bdad8bf8->leave($__internal_ec88a957f17918a2f508cfa8236cf09016f231a7601fc0a100144200bdad8bf8_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_c9a03dd5ad71fc0d4c3793fda7e559c8275061cab03379257fed65b602bde9cd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c9a03dd5ad71fc0d4c3793fda7e559c8275061cab03379257fed65b602bde9cd->enter($__internal_c9a03dd5ad71fc0d4c3793fda7e559c8275061cab03379257fed65b602bde9cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_57a27d228d9023b4d713b0df92b19f4665dc8c3a86541173ef35e7018ca03b7b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_57a27d228d9023b4d713b0df92b19f4665dc8c3a86541173ef35e7018ca03b7b->enter($__internal_57a27d228d9023b4d713b0df92b19f4665dc8c3a86541173ef35e7018ca03b7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Users list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Firstname</th>
                <th>Preposition</th>
                <th>Lastname</th>
                <th>Sex</th>
                <th>Date</th>
                <th>Place</th>
                <th>Zipcode</th>
                <th>City</th>
                <th>Country</th>
                <th>Phonenumber</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["users"]) ? $context["users"] : $this->getContext($context, "users")));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 25
            echo "            <tr>
                <td><a href=\"";
            // line 26
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_show", array("id" => $this->getAttribute($context["user"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "firstName", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "prePosition", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "lastName", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "sex", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 31
            if ($this->getAttribute($context["user"], "date", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["user"], "date", array()), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
                <td>";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "place", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "zipcode", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "city", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "country", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 36
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "phoneNumber", array()), "html", null, true);
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 40
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_show", array("id" => $this->getAttribute($context["user"], "id", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 43
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_edit", array("id" => $this->getAttribute($context["user"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 49
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 54
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_new");
        echo "\">Create a new user</a>
        </li>
    </ul>
";
        
        $__internal_57a27d228d9023b4d713b0df92b19f4665dc8c3a86541173ef35e7018ca03b7b->leave($__internal_57a27d228d9023b4d713b0df92b19f4665dc8c3a86541173ef35e7018ca03b7b_prof);

        
        $__internal_c9a03dd5ad71fc0d4c3793fda7e559c8275061cab03379257fed65b602bde9cd->leave($__internal_c9a03dd5ad71fc0d4c3793fda7e559c8275061cab03379257fed65b602bde9cd_prof);

    }

    public function getTemplateName()
    {
        return "AlbaBundle:user:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  154 => 54,  147 => 49,  135 => 43,  129 => 40,  122 => 36,  118 => 35,  114 => 34,  110 => 33,  106 => 32,  100 => 31,  96 => 30,  92 => 29,  88 => 28,  84 => 27,  78 => 26,  75 => 25,  71 => 24,  49 => 4,  40 => 3,  11 => 1,);
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
    <h1>Users list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Firstname</th>
                <th>Preposition</th>
                <th>Lastname</th>
                <th>Sex</th>
                <th>Date</th>
                <th>Place</th>
                <th>Zipcode</th>
                <th>City</th>
                <th>Country</th>
                <th>Phonenumber</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        {% for user in users %}
            <tr>
                <td><a href=\"{{ path('user_show', { 'id': user.id }) }}\">{{ user.id }}</a></td>
                <td>{{ user.firstName }}</td>
                <td>{{ user.prePosition }}</td>
                <td>{{ user.lastName }}</td>
                <td>{{ user.sex }}</td>
                <td>{% if user.date %}{{ user.date|date('Y-m-d H:i:s') }}{% endif %}</td>
                <td>{{ user.place }}</td>
                <td>{{ user.zipcode }}</td>
                <td>{{ user.city }}</td>
                <td>{{ user.country }}</td>
                <td>{{ user.phoneNumber }}</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"{{ path('user_show', { 'id': user.id }) }}\">show</a>
                        </li>
                        <li>
                            <a href=\"{{ path('user_edit', { 'id': user.id }) }}\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('user_new') }}\">Create a new user</a>
        </li>
    </ul>
{% endblock %}
", "AlbaBundle:user:index.html.twig", "C:\\xampp\\htdocs\\ALA\\ala-alba\\src\\Alba\\Bundle/Resources/views/user/index.html.twig");
    }
}
