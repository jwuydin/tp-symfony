<?php

/* testBlogBundle:Blog:menu.html.twig */
class __TwigTemplate_0b371f0f46f4a16b4c1f06f5aa1838313609e04f5421adb57803eded7281b625 extends Twig_Template
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
        // line 1
        echo "<ul>
<ul class=\"nav nav-pills nav-stacked\">
  ";
        // line 3
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["liste_articles"]) ? $context["liste_articles"] : $this->getContext($context, "liste_articles")));
        foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
            // line 4
            echo "    <li><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("testblog_voir", array("id" => $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "id"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "titre"), "html", null, true);
            echo "</a></li>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 6
        echo "</ul>
</ul>";
    }

    public function getTemplateName()
    {
        return "testBlogBundle:Blog:menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  38 => 6,  27 => 4,  19 => 1,  120 => 45,  117 => 44,  115 => 43,  112 => 42,  108 => 31,  105 => 30,  98 => 9,  95 => 8,  89 => 6,  83 => 47,  81 => 42,  69 => 32,  67 => 30,  61 => 27,  37 => 11,  35 => 8,  23 => 3,  63 => 16,  60 => 15,  55 => 24,  52 => 15,  46 => 10,  43 => 8,  40 => 7,  33 => 4,  30 => 6,  51 => 23,  47 => 9,  45 => 8,  42 => 7,  39 => 6,  32 => 4,  29 => 3,);
    }
}
