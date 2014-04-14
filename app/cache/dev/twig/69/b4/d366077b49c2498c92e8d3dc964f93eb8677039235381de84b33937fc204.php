<?php

/* testBlogBundle:Blog:modifier.html.twig */
class __TwigTemplate_69b4d366077b49c2498c92e8d3dc964f93eb8677039235381de84b33937fc204 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("testBlogBundle::layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'testblog_body' => array($this, 'block_testblog_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "testBlogBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        // line 3
        echo "  Modifier un article - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
    }

    // line 5
    public function block_testblog_body($context, array $blocks = array())
    {
        // line 6
        echo "  <h2>Modifier un article</h2>
  ";
        // line 7
        $this->env->loadTemplate("testBlogBundle:Blog:formulaire.html.twig")->display($context);
        // line 8
        echo "  <p>
    Vous éditez un article déjà existant,
    ne le changez pas trop pour éviter
    aux membres de ne pas comprendre
    ce qu'il se passe.
  </p>
  <p>
    <a href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("testblog_voir", array("id" => $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "id"))), "html", null, true);
        echo "\" class=\"btn\">
      <i class=\"icon-chevron-left\"></i>
      Retour à l'article
    </a>
  </p>
";
    }

    public function getTemplateName()
    {
        return "testBlogBundle:Blog:modifier.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 15,  47 => 8,  45 => 7,  42 => 6,  39 => 5,  32 => 3,  29 => 2,);
    }
}
