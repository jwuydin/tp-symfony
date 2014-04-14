<?php

/* ::layout.html.twig */
class __TwigTemplate_ea9abcc56754c237e171268b7cbb570056134ccc3dcc6d15a2a724194cbe134b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />

    <title>";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

    ";
        // line 8
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 11
        echo "  </head>

  <body>
    <div class=\"container\">
      <div id=\"header\" class=\"hero-unit\">
        <h1>Blog NoSQL - MongoDB</h1>      
      </div>

      <div class=\"row\">
        <div id=\"menu\" class=\"span3\">
          <h3>Le blog</h3>
          <ul class=\"nav nav-pills nav-stacked\">
            <li><a href=\"";
        // line 23
        echo $this->env->getExtension('routing')->getPath("testblog_accueil");
        echo "\">Accueil du blog</a></li>
            <li><a href=\"";
        // line 24
        echo $this->env->getExtension('routing')->getPath("testblog_ajouter");
        echo "\">Ajouter un article</a></li>
          </ul>
                    
          ";
        // line 27
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("testBlogBundle:Blog:menu", array("nombre" => 3)));
        echo "
        </div>
        <div id=\"content\" class=\"span9\">
          ";
        // line 30
        $this->displayBlock('body', $context, $blocks);
        // line 32
        echo "        </div>
      </div>

      <hr>

      <footer>
        <p>The sky's the limit @ 2012 and beyond.</p>
      </footer>
    </div>

  ";
        // line 42
        $this->displayBlock('javascripts', $context, $blocks);
        // line 47
        echo "
  </body>
</html>";
    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        echo "Sdz";
    }

    // line 8
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 9
        echo "      <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/bootstrap.css"), "html", null, true);
        echo "\" type=\"text/css\" />
    ";
    }

    // line 30
    public function block_body($context, array $blocks = array())
    {
        // line 31
        echo "          ";
    }

    // line 42
    public function block_javascripts($context, array $blocks = array())
    {
        // line 43
        echo "    ";
        // line 44
        echo "    <script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/bootstrap.js"), "html", null, true);
        echo "\"></script>
  ";
    }

    public function getTemplateName()
    {
        return "::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  120 => 45,  117 => 44,  115 => 43,  112 => 42,  108 => 31,  105 => 30,  98 => 9,  95 => 8,  89 => 6,  83 => 47,  81 => 42,  69 => 32,  67 => 30,  61 => 27,  37 => 11,  35 => 8,  23 => 1,  63 => 16,  60 => 15,  55 => 24,  52 => 15,  46 => 10,  43 => 8,  40 => 7,  33 => 4,  30 => 6,  51 => 23,  47 => 9,  45 => 8,  42 => 7,  39 => 6,  32 => 4,  29 => 3,);
    }
}
