<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_9b4738065b66994ac3a4dc995d551a3157f6839a7f170ebc23d5da8ab6a61b44 extends Twig_Template
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
        $__internal_8c71b134ca62efe187773fedf247dce740b5b7d71c0d10e0a46f12f63130314b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8c71b134ca62efe187773fedf247dce740b5b7d71c0d10e0a46f12f63130314b->enter($__internal_8c71b134ca62efe187773fedf247dce740b5b7d71c0d10e0a46f12f63130314b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        $__internal_f4b588a17bc62cbd89c6b2ce7a5f6398a41fe022da9537f1cbf863edb48a031a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f4b588a17bc62cbd89c6b2ce7a5f6398a41fe022da9537f1cbf863edb48a031a->enter($__internal_f4b588a17bc62cbd89c6b2ce7a5f6398a41fe022da9537f1cbf863edb48a031a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_8c71b134ca62efe187773fedf247dce740b5b7d71c0d10e0a46f12f63130314b->leave($__internal_8c71b134ca62efe187773fedf247dce740b5b7d71c0d10e0a46f12f63130314b_prof);

        
        $__internal_f4b588a17bc62cbd89c6b2ce7a5f6398a41fe022da9537f1cbf863edb48a031a->leave($__internal_f4b588a17bc62cbd89c6b2ce7a5f6398a41fe022da9537f1cbf863edb48a031a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
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
        return new Twig_Source("<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
", "@Framework/Form/form_rows.html.php", "C:\\xampp\\htdocs\\ALA\\ala-alba\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_rows.html.php");
    }
}
