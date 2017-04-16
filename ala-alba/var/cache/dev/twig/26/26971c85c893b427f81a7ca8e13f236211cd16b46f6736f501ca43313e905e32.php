<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_1a1d26203c8ce95ecab95a3377cdc0d207e50cc9d812d7b2318134e4fdb6dcbd extends Twig_Template
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
        $__internal_45fc17688b5949214f24b132968a4fac3a77334f31f43ff5bbec3f359f2804ff = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_45fc17688b5949214f24b132968a4fac3a77334f31f43ff5bbec3f359f2804ff->enter($__internal_45fc17688b5949214f24b132968a4fac3a77334f31f43ff5bbec3f359f2804ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        $__internal_7e2d56ced75e2cb2066373f7a859d6b8f5fa0fbbebe694b7f45b56b94f7b1c7b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7e2d56ced75e2cb2066373f7a859d6b8f5fa0fbbebe694b7f45b56b94f7b1c7b->enter($__internal_7e2d56ced75e2cb2066373f7a859d6b8f5fa0fbbebe694b7f45b56b94f7b1c7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_45fc17688b5949214f24b132968a4fac3a77334f31f43ff5bbec3f359f2804ff->leave($__internal_45fc17688b5949214f24b132968a4fac3a77334f31f43ff5bbec3f359f2804ff_prof);

        
        $__internal_7e2d56ced75e2cb2066373f7a859d6b8f5fa0fbbebe694b7f45b56b94f7b1c7b->leave($__internal_7e2d56ced75e2cb2066373f7a859d6b8f5fa0fbbebe694b7f45b56b94f7b1c7b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
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
        return new Twig_Source("<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
", "@Framework/Form/form_rest.html.php", "C:\\xampp\\htdocs\\ALA\\ala-alba\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_rest.html.php");
    }
}
