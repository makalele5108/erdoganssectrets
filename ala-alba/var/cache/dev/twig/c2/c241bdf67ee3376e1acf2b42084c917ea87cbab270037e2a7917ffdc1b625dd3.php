<?php

/* @Framework/Form/email_widget.html.php */
class __TwigTemplate_5337e74765082029c4dac36c170d74ab357353bb2059665b6ea22c0914d65600 extends Twig_Template
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
        $__internal_d37f961e5f7232c7a15b9bbc1f08ce6ed1927d9c7b65a6d80f69a73b93c22dfb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d37f961e5f7232c7a15b9bbc1f08ce6ed1927d9c7b65a6d80f69a73b93c22dfb->enter($__internal_d37f961e5f7232c7a15b9bbc1f08ce6ed1927d9c7b65a6d80f69a73b93c22dfb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        $__internal_8a1c9385a0e3a063c9c826c5d7aaac9e7343f0d2a61b1adac15d56e9d70d2fa3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8a1c9385a0e3a063c9c826c5d7aaac9e7343f0d2a61b1adac15d56e9d70d2fa3->enter($__internal_8a1c9385a0e3a063c9c826c5d7aaac9e7343f0d2a61b1adac15d56e9d70d2fa3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_d37f961e5f7232c7a15b9bbc1f08ce6ed1927d9c7b65a6d80f69a73b93c22dfb->leave($__internal_d37f961e5f7232c7a15b9bbc1f08ce6ed1927d9c7b65a6d80f69a73b93c22dfb_prof);

        
        $__internal_8a1c9385a0e3a063c9c826c5d7aaac9e7343f0d2a61b1adac15d56e9d70d2fa3->leave($__internal_8a1c9385a0e3a063c9c826c5d7aaac9e7343f0d2a61b1adac15d56e9d70d2fa3_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/email_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
", "@Framework/Form/email_widget.html.php", "C:\\xampp\\htdocs\\ALA\\ala-alba\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\email_widget.html.php");
    }
}
