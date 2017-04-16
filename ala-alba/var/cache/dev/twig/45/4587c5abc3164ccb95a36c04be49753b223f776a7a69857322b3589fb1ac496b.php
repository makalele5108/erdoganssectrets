<?php

/* @Framework/Form/reset_widget.html.php */
class __TwigTemplate_ff5d2831c4a80f724b5afcc8afd42f680c2d06048613efc3258362d37932a522 extends Twig_Template
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
        $__internal_a430dccd0fb686f69b8093a754050de5b5da379ae94a58f9c69adb413b901389 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a430dccd0fb686f69b8093a754050de5b5da379ae94a58f9c69adb413b901389->enter($__internal_a430dccd0fb686f69b8093a754050de5b5da379ae94a58f9c69adb413b901389_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        $__internal_890bd3e864652489a9a3323f86f07a4fc17c0ae32023c8cd2b320afe50ece135 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_890bd3e864652489a9a3323f86f07a4fc17c0ae32023c8cd2b320afe50ece135->enter($__internal_890bd3e864652489a9a3323f86f07a4fc17c0ae32023c8cd2b320afe50ece135_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_a430dccd0fb686f69b8093a754050de5b5da379ae94a58f9c69adb413b901389->leave($__internal_a430dccd0fb686f69b8093a754050de5b5da379ae94a58f9c69adb413b901389_prof);

        
        $__internal_890bd3e864652489a9a3323f86f07a4fc17c0ae32023c8cd2b320afe50ece135->leave($__internal_890bd3e864652489a9a3323f86f07a4fc17c0ae32023c8cd2b320afe50ece135_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/reset_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
", "@Framework/Form/reset_widget.html.php", "C:\\xampp\\htdocs\\ALA\\ala-alba\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\reset_widget.html.php");
    }
}
