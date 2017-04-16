<?php

/* @Framework/Form/percent_widget.html.php */
class __TwigTemplate_fb5be64e80b9572126134ac5ed13eef8cc712716f8cfa1343dfde7531984aa80 extends Twig_Template
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
        $__internal_a5b33ad4532d4149076ee8890423ca7cdaafc70dee22291460ef086fa9e71226 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a5b33ad4532d4149076ee8890423ca7cdaafc70dee22291460ef086fa9e71226->enter($__internal_a5b33ad4532d4149076ee8890423ca7cdaafc70dee22291460ef086fa9e71226_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        $__internal_3ae674ce40a9ee56a3741c71632f17605c208cba3158c21c6a9ff38fb7ceb436 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3ae674ce40a9ee56a3741c71632f17605c208cba3158c21c6a9ff38fb7ceb436->enter($__internal_3ae674ce40a9ee56a3741c71632f17605c208cba3158c21c6a9ff38fb7ceb436_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
";
        
        $__internal_a5b33ad4532d4149076ee8890423ca7cdaafc70dee22291460ef086fa9e71226->leave($__internal_a5b33ad4532d4149076ee8890423ca7cdaafc70dee22291460ef086fa9e71226_prof);

        
        $__internal_3ae674ce40a9ee56a3741c71632f17605c208cba3158c21c6a9ff38fb7ceb436->leave($__internal_3ae674ce40a9ee56a3741c71632f17605c208cba3158c21c6a9ff38fb7ceb436_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/percent_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
", "@Framework/Form/percent_widget.html.php", "C:\\xampp\\htdocs\\ALA\\ala-alba\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\percent_widget.html.php");
    }
}
