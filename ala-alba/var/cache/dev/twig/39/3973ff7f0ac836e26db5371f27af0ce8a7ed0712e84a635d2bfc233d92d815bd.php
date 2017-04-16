<?php

/* @Framework/Form/password_widget.html.php */
class __TwigTemplate_d33c8d21ceb6be9ed47eae3e34c2443d8807401725e5aa048ca284fa276fcc6e extends Twig_Template
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
        $__internal_b8d2e3efb191ffd0b37f5f2e4cbd9d2051fd79f752eb7376a988f1d1b4953f04 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b8d2e3efb191ffd0b37f5f2e4cbd9d2051fd79f752eb7376a988f1d1b4953f04->enter($__internal_b8d2e3efb191ffd0b37f5f2e4cbd9d2051fd79f752eb7376a988f1d1b4953f04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        $__internal_9b2b678d00cb0778544fe797f7159291fe4c472e38d3974d811a2c5fd3f7a923 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9b2b678d00cb0778544fe797f7159291fe4c472e38d3974d811a2c5fd3f7a923->enter($__internal_9b2b678d00cb0778544fe797f7159291fe4c472e38d3974d811a2c5fd3f7a923_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_b8d2e3efb191ffd0b37f5f2e4cbd9d2051fd79f752eb7376a988f1d1b4953f04->leave($__internal_b8d2e3efb191ffd0b37f5f2e4cbd9d2051fd79f752eb7376a988f1d1b4953f04_prof);

        
        $__internal_9b2b678d00cb0778544fe797f7159291fe4c472e38d3974d811a2c5fd3f7a923->leave($__internal_9b2b678d00cb0778544fe797f7159291fe4c472e38d3974d811a2c5fd3f7a923_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/password_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
", "@Framework/Form/password_widget.html.php", "C:\\xampp\\htdocs\\ALA\\ala-alba\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\password_widget.html.php");
    }
}
