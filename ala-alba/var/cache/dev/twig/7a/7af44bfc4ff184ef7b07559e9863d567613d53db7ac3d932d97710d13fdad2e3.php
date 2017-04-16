<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_76a96879b72fa0a4728d497f0de4bd638f5ef6ebf8bd0561a18a93cf9f13f6a1 extends Twig_Template
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
        $__internal_262e729753dd44ff4ea3086e8a331b61134fc67ff0a25f3ef361a1df4aa02351 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_262e729753dd44ff4ea3086e8a331b61134fc67ff0a25f3ef361a1df4aa02351->enter($__internal_262e729753dd44ff4ea3086e8a331b61134fc67ff0a25f3ef361a1df4aa02351_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        $__internal_09b08fd72be3387c535bd806cc0f13ba5f20b46e5e6d054ce460081aaf03e2d2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_09b08fd72be3387c535bd806cc0f13ba5f20b46e5e6d054ce460081aaf03e2d2->enter($__internal_09b08fd72be3387c535bd806cc0f13ba5f20b46e5e6d054ce460081aaf03e2d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_262e729753dd44ff4ea3086e8a331b61134fc67ff0a25f3ef361a1df4aa02351->leave($__internal_262e729753dd44ff4ea3086e8a331b61134fc67ff0a25f3ef361a1df4aa02351_prof);

        
        $__internal_09b08fd72be3387c535bd806cc0f13ba5f20b46e5e6d054ce460081aaf03e2d2->leave($__internal_09b08fd72be3387c535bd806cc0f13ba5f20b46e5e6d054ce460081aaf03e2d2_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
", "@Framework/Form/form.html.php", "C:\\xampp\\htdocs\\ALA\\ala-alba\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form.html.php");
    }
}
