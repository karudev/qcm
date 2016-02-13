<?php

/* KdvEstheticQuizBundle:Quiz:home.html.twig */
class __TwigTemplate_28cfe0ebd850171f8970d5c7884bb501edc20157d3e4637f4d5afa654a2ff2e6 extends Twig_Template
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
        $__internal_8b826d445f099559c0292d68c478c7630f8c9cb19daf6c646829c6a1274d2faf = $this->env->getExtension("native_profiler");
        $__internal_8b826d445f099559c0292d68c478c7630f8c9cb19daf6c646829c6a1274d2faf->enter($__internal_8b826d445f099559c0292d68c478c7630f8c9cb19daf6c646829c6a1274d2faf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "KdvEstheticQuizBundle:Quiz:home.html.twig"));

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
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("kdv_estheticquiz_quiz_index", array("quiz" => $this->getAttribute($context["q"], "id", array()))), "html", null, true);
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
        
        $__internal_8b826d445f099559c0292d68c478c7630f8c9cb19daf6c646829c6a1274d2faf->leave($__internal_8b826d445f099559c0292d68c478c7630f8c9cb19daf6c646829c6a1274d2faf_prof);

    }

    public function getTemplateName()
    {
        return "KdvEstheticQuizBundle:Quiz:home.html.twig";
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
/*             <li><a href="{{path('kdv_estheticquiz_quiz_index',{quiz:q.id})}}" >{{q.name}}</a></li>*/
/*         {% endfor %}*/
/*     </ul>*/
/*     */
/* </div>*/
/* */
