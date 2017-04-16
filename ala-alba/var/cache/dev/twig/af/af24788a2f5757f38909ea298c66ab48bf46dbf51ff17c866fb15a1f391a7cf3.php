<?php

/* @Framework/FormTable/button_row.html.php */
class __TwigTemplate_2ea39f6d0a62c7cf8578778d3da964a05b2cacff91a6549cce2c2fac2935bee9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_159e99eabf0921b957d22c3cda9009da71caeb092813b49b19c30c84fceee0cc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_159e99eabf0921b957d22c3cda9009da71caeb092813b49b19c30c84fceee0cc->enter($__internal_159e99eabf0921b957d22c3cda9009da71caeb092813b49b19c30c84fceee0cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        $__internal_9f7e8f87c6bd240092bb55cd9accb625392c268599af4e8fd8c29e19c5ae407a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9f7e8f87c6bd240092bb55cd9accb625392c268599af4e8fd8c29e19c5ae407a->enter($__internal_9f7e8f87c6bd240092bb55cd9accb625392c268599af4e8fd8c29e19c5ae407a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_159e99eabf0921b957d22c3cda9009da71caeb092813b49b19c30c84fceee0cc->leave($__internal_159e99eabf0921b957d22c3cda9009da71caeb092813b49b19c30c84fceee0cc_prof);

        
        $__internal_9f7e8f87c6bd240092bb55cd9accb625392c268599af4e8fd8c29e19c5ae407a->leave($__internal_9f7e8f87c6bd240092bb55cd9accb625392c268599af4e8fd8c29e19c5ae407a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/button_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/button_row.html.php", "C:\\xampp\\htdocs\\ALA\\ala-alba\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\FormTable\\button_row.html.php");
    }
}
