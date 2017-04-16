<?php

/* @Framework/Form/hidden_widget.html.php */
class __TwigTemplate_b9fd4c8bc3f0db723c4cea6ded59b0b275ed10a798fa53e0c50dbb487702bbfd extends Twig_Template
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
        $__internal_c927df347aa34569fb7386a0b33855d3ae162bf532df7ca7394cc69a321ad8d5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c927df347aa34569fb7386a0b33855d3ae162bf532df7ca7394cc69a321ad8d5->enter($__internal_c927df347aa34569fb7386a0b33855d3ae162bf532df7ca7394cc69a321ad8d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        $__internal_0f859cf12e42b388f0befe0f9bfda392d1dcfb69c9c9190e4b0f9ac31a9df336 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0f859cf12e42b388f0befe0f9bfda392d1dcfb69c9c9190e4b0f9ac31a9df336->enter($__internal_0f859cf12e42b388f0befe0f9bfda392d1dcfb69c9c9190e4b0f9ac31a9df336_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_c927df347aa34569fb7386a0b33855d3ae162bf532df7ca7394cc69a321ad8d5->leave($__internal_c927df347aa34569fb7386a0b33855d3ae162bf532df7ca7394cc69a321ad8d5_prof);

        
        $__internal_0f859cf12e42b388f0befe0f9bfda392d1dcfb69c9c9190e4b0f9ac31a9df336->leave($__internal_0f859cf12e42b388f0befe0f9bfda392d1dcfb69c9c9190e4b0f9ac31a9df336_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
", "@Framework/Form/hidden_widget.html.php", "C:\\xampp\\htdocs\\ALA\\ala-alba\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\hidden_widget.html.php");
    }
}
