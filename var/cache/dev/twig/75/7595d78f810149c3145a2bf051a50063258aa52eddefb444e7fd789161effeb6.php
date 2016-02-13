<?php

/* KdvQuizBundle:Quiz:Home.html.twig */
class __TwigTemplate_d0e4abb99e85abac40b2d5fbf4d33b063acad74afbf640347779d841f7da9d9f extends Twig_Template
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
        $__internal_061ad8c507b9d643e4d4e319480826c3f00dbce2c2559cf39c6a0b9a17539274 = $this->env->getExtension("native_profiler");
        $__internal_061ad8c507b9d643e4d4e319480826c3f00dbce2c2559cf39c6a0b9a17539274->enter($__internal_061ad8c507b9d643e4d4e319480826c3f00dbce2c2559cf39c6a0b9a17539274_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "KdvQuizBundle:Quiz:Home.html.twig"));

        // line 1
        echo "<div align=\"center\">
<h1>Liste des QCM</h1>
</div>
<div>
   
    <ul>
        ";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["quiz"]) ? $context["quiz"] : $this->getContext($context, "quiz")));
        foreach ($context['_seq'] as $context["_key"] => $context["q"]) {
            // line 8
            echo "            <li><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("kdv_quiz_quiz_index", array("quiz" => $this->getAttribute($context["q"], "id", array()))), "html", null, true);
            echo "\" >";
            echo twig_escape_filter($this->env, $this->getAttribute($context["q"], "name", array()), "html", null, true);
            echo "</a></li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['q'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 10
        echo "    </ul>
    
</div>
";
        
        $__internal_061ad8c507b9d643e4d4e319480826c3f00dbce2c2559cf39c6a0b9a17539274->leave($__internal_061ad8c507b9d643e4d4e319480826c3f00dbce2c2559cf39c6a0b9a17539274_prof);

    }

    public function getTemplateName()
    {
        return "KdvQuizBundle:Quiz:Home.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 10,  34 => 8,  30 => 7,  22 => 1,);
    }
}
/* <div align="center">*/
/* <h1>Liste des QCM</h1>*/
/* </div>*/
/* <div>*/
/*    */
/*     <ul>*/
/*         {% for q in quiz %}*/
/*             <li><a href="{{path('kdv_quiz_quiz_index',{quiz:q.id})}}" >{{q.name}}</a></li>*/
/*         {% endfor %}*/
/*     </ul>*/
/*     */
/* </div>*/
/* */
