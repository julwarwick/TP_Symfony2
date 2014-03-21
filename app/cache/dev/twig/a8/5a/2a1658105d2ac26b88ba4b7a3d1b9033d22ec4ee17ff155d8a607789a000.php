<?php

/* SdzBlogBundle::layout.html.twig */
class __TwigTemplate_a85a2a1658105d2ac26b88ba4b7a3d1b9033d22ec4ee17ff155d8a607789a000 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'sdzblog_body' => array($this, 'block_sdzblog_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        // line 6
        echo "Blog - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        // line 10
        echo "
";
        // line 12
        echo "<h1>Blog</h1>

<hr>

";
        // line 17
        $this->displayBlock('sdzblog_body', $context, $blocks);
        // line 19
        echo "
";
    }

    // line 17
    public function block_sdzblog_body($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "SdzBlogBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  59 => 17,  54 => 19,  52 => 17,  46 => 12,  43 => 10,  40 => 9,  33 => 6,  30 => 5,);
    }
}
