<?php

/* KdvEstheticQuizBundle:Quiz:index.html.twig */
class __TwigTemplate_3e6a2abb3d5c16fbcc15a5ff93229588f5e823393bf2f0e8ccb497c26112e0c1 extends Twig_Template
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
        $__internal_59a5e6f2e36b40ce2dfb7b29cfe3ddd850e5272131f550b2786f5539f27eb76c = $this->env->getExtension("native_profiler");
        $__internal_59a5e6f2e36b40ce2dfb7b29cfe3ddd850e5272131f550b2786f5539f27eb76c->enter($__internal_59a5e6f2e36b40ce2dfb7b29cfe3ddd850e5272131f550b2786f5539f27eb76c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "KdvEstheticQuizBundle:Quiz:index.html.twig"));

        // line 1
        echo "<div align=\"center\">
<h1>";
        // line 2
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["question"]) ? $context["question"] : $this->getContext($context, "question")), "quiz", array()), "name", array()), "html", null, true);
        echo "</h1>
<div>
<h2>Question #";
        // line 4
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["question"]) ? $context["question"] : $this->getContext($context, "question")), "id", array()), "html", null, true);
        echo "</h2>
<p>";
        // line 5
        echo $this->getAttribute((isset($context["question"]) ? $context["question"] : $this->getContext($context, "question")), "enunciated", array());
        echo "</p>
</div>
<div>
    <form action=\"";
        // line 8
        echo $this->env->getExtension('routing')->getPath("kdv_estheticquiz_quiz_index");
        echo "\" method=\"post\">
    <input name=\"question\" type=\"hidden\" value=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["question"]) ? $context["question"] : $this->getContext($context, "question")), "id", array()), "html", null, true);
        echo "\">
    <ul>
        ";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["question"]) ? $context["question"] : $this->getContext($context, "question")), "answers", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["a"]) {
            // line 12
            echo "            <li>
                ";
            // line 13
            if (($this->getAttribute((isset($context["question"]) ? $context["question"] : $this->getContext($context, "question")), "type", array()) == "single_choice")) {
                // line 14
                echo "                    <input name=\"answers\" value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["a"], "id", array()), "html", null, true);
                echo "\" type=\"radio\">
                ";
            } elseif (($this->getAttribute(            // line 15
(isset($context["question"]) ? $context["question"] : $this->getContext($context, "question")), "type", array()) == "multiple_choice")) {
                // line 16
                echo "                    <input name=\"answers[]\" value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["a"], "id", array()), "html", null, true);
                echo "\" type=\"checkbox\">
                ";
            }
            // line 18
            echo "                <label>";
            echo $this->getAttribute($context["a"], "text", array());
            echo "</label>
            </li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['a'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        echo "    </ul>
    <div align=\"center\"> <button type=\"submit\">Envoyer</button></div>
    </form>
</div>
</div>";
        
        $__internal_59a5e6f2e36b40ce2dfb7b29cfe3ddd850e5272131f550b2786f5539f27eb76c->leave($__internal_59a5e6f2e36b40ce2dfb7b29cfe3ddd850e5272131f550b2786f5539f27eb76c_prof);

    }

    public function getTemplateName()
    {
        return "KdvEstheticQuizBundle:Quiz:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  81 => 21,  71 => 18,  65 => 16,  63 => 15,  58 => 14,  56 => 13,  53 => 12,  49 => 11,  44 => 9,  40 => 8,  34 => 5,  30 => 4,  25 => 2,  22 => 1,);
    }
}
/* <div align="center">*/
/* <h1>{{question.quiz.name}}</h1>*/
/* <div>*/
/* <h2>Question #{{question.id}}</h2>*/
/* <p>{{question.enunciated|raw}}</p>*/
/* </div>*/
/* <div>*/
/*     <form action="{{path('kdv_estheticquiz_quiz_index')}}" method="post">*/
/*     <input name="question" type="hidden" value="{{question.id}}">*/
/*     <ul>*/
/*         {% for a in question.answers %}*/
/*             <li>*/
/*                 {% if question.type == 'single_choice' %}*/
/*                     <input name="answers" value="{{a.id}}" type="radio">*/
/*                 {% elseif question.type == 'multiple_choice'%}*/
/*                     <input name="answers[]" value="{{a.id}}" type="checkbox">*/
/*                 {% endif %}*/
/*                 <label>{{a.text|raw}}</label>*/
/*             </li>*/
/*         {% endfor %}*/
/*     </ul>*/
/*     <div align="center"> <button type="submit">Envoyer</button></div>*/
/*     </form>*/
/* </div>*/
/* </div>*/
