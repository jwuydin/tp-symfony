<?php

/* testBlogBundle::layout.html.twig */
class __TwigTemplate_6ad49669c4f364eea4be1faebc4122345c8ca33bb2f24eaedb9c6e614bfe2295 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'testblog_body' => array($this, 'block_testblog_body'),
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

    // line 3
    public function block_title($context, array $blocks = array())
    {
        // line 4
        echo "  Blog - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        // line 8
        echo "
  ";
        // line 10
        echo "  <!--<h1>Blog</h1>-->

  <hr>

  ";
        // line 15
        echo "  ";
        $this->displayBlock('testblog_body', $context, $blocks);
        // line 17
        echo "
";
    }

    // line 15
    public function block_testblog_body($context, array $blocks = array())
    {
        // line 16
        echo "  ";
    }

    public function getTemplateName()
    {
        return "testBlogBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  63 => 16,  60 => 15,  55 => 17,  52 => 15,  46 => 10,  43 => 8,  40 => 7,  33 => 4,  30 => 3,  51 => 11,  47 => 9,  45 => 8,  42 => 7,  39 => 6,  32 => 4,  29 => 3,);
    }
}
