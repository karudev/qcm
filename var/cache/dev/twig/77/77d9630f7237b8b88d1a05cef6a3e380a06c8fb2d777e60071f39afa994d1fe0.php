<?php

/* KdvQuizBundle:Quiz:Index.html.twig */
class __TwigTemplate_f42a6623cb891d5091fc455952f1e07719177fbc432c40a5610fd931c0379c01 extends Twig_Template
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
        $__internal_65a9dd18d37161a38991fadf8287c069e972576f798fd09cc90db879d857807d = $this->env->getExtension("native_profiler");
        $__internal_65a9dd18d37161a38991fadf8287c069e972576f798fd09cc90db879d857807d->enter($__internal_65a9dd18d37161a38991fadf8287c069e972576f798fd09cc90db879d857807d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "KdvQuizBundle:Quiz:Index.html.twig"));

        // line 1
        echo "<div align=\"center\">
";
        // line 2
        if ( !(null === (isset($context["question"]) ? $context["question"] : $this->getContext($context, "question")))) {
            // line 3
            echo "<h1>";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["question"]) ? $context["question"] : $this->getContext($context, "question")), "quiz", array()), "name", array()), "html", null, true);
            echo "</h1>
<div>
<h2>Catégorie : ";
            // line 5
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["question"]) ? $context["question"] : $this->getContext($context, "question")), "category", array()), "name", array()), "html", null, true);
            echo "</h2>
<h3>Question #";
            // line 6
            echo twig_escape_filter($this->env, (isset($context["questionNumber"]) ? $context["questionNumber"] : $this->getContext($context, "questionNumber")), "html", null, true);
            echo "</h3>
<p>";
            // line 7
            echo $this->getAttribute((isset($context["question"]) ? $context["question"] : $this->getContext($context, "question")), "enunciated", array());
            echo "</p>
";
            // line 8
            if ( !(null === $this->getAttribute((isset($context["question"]) ? $context["question"] : $this->getContext($context, "question")), "picturePath", array()))) {
                // line 9
                echo "    <p><img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl($this->getAttribute((isset($context["question"]) ? $context["question"] : $this->getContext($context, "question")), "picturePath", array())), "html", null, true);
                echo "\"></p>
";
            }
            // line 11
            echo "</div>
<div>
    <form action=\"";
            // line 13
            echo $this->env->getExtension('routing')->getPath("kdv_quiz_quiz_saveanswer");
            echo "\" method=\"post\">
    <input name=\"question\" type=\"hidden\" value=\"";
            // line 14
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["question"]) ? $context["question"] : $this->getContext($context, "question")), "id", array()), "html", null, true);
            echo "\">
    <ul>
        ";
            // line 16
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["question"]) ? $context["question"] : $this->getContext($context, "question")), "answers", array()));
            foreach ($context['_seq'] as $context["key"] => $context["a"]) {
                // line 17
                echo "            
                ";
                // line 18
                if (($this->getAttribute((isset($context["question"]) ? $context["question"] : $this->getContext($context, "question")), "type", array()) == "single_choice")) {
                    // line 19
                    echo "                   <li> <input required name=\"answers\" value=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["a"], "id", array()), "html", null, true);
                    echo "\" type=\"radio\"> <label>";
                    echo $this->getAttribute($context["a"], "text", array());
                    echo "</label></li>
                ";
                } elseif (($this->getAttribute(                // line 20
(isset($context["question"]) ? $context["question"] : $this->getContext($context, "question")), "type", array()) == "multiple_choice")) {
                    // line 21
                    echo "                    <li><input name=\"answers[]\" value=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["a"], "id", array()), "html", null, true);
                    echo "\" type=\"checkbox\"> <label>";
                    echo $this->getAttribute($context["a"], "text", array());
                    echo "</label></li>
                ";
                } elseif (($this->getAttribute(                // line 22
(isset($context["question"]) ? $context["question"] : $this->getContext($context, "question")), "type", array()) == "multiple_text")) {
                    // line 23
                    echo "                <li><b>";
                    echo twig_escape_filter($this->env, ($context["key"] + 1), "html", null, true);
                    echo "</b> <input autocomplete=\"off\" type=\"text\" name=\"answers[]\" /></li>
                ";
                }
                // line 25
                echo "                
            
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['a'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 28
            echo "    </ul>
    <div align=\"center\"> <button type=\"submit\">Envoyer</button></div>
    </form>
</div>
";
        } else {
            // line 33
            echo "    <div>Il n'y a plus de questions à poser.</div>
";
        }
        // line 35
        echo "</div>";
        
        $__internal_65a9dd18d37161a38991fadf8287c069e972576f798fd09cc90db879d857807d->leave($__internal_65a9dd18d37161a38991fadf8287c069e972576f798fd09cc90db879d857807d_prof);

    }

    public function getTemplateName()
    {
        return "KdvQuizBundle:Quiz:Index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  118 => 35,  114 => 33,  107 => 28,  99 => 25,  93 => 23,  91 => 22,  84 => 21,  82 => 20,  75 => 19,  73 => 18,  70 => 17,  66 => 16,  61 => 14,  57 => 13,  53 => 11,  47 => 9,  45 => 8,  41 => 7,  37 => 6,  33 => 5,  27 => 3,  25 => 2,  22 => 1,);
    }
}
/* <div align="center">*/
/* {% if question is not null %}*/
/* <h1>{{question.quiz.name}}</h1>*/
/* <div>*/
/* <h2>Catégorie : {{question.category.name}}</h2>*/
/* <h3>Question #{{questionNumber}}</h3>*/
/* <p>{{question.enunciated|raw}}</p>*/
/* {% if question.picturePath is not null %}*/
/*     <p><img src="{{asset(question.picturePath)}}"></p>*/
/* {% endif %}*/
/* </div>*/
/* <div>*/
/*     <form action="{{path('kdv_quiz_quiz_saveanswer')}}" method="post">*/
/*     <input name="question" type="hidden" value="{{question.id}}">*/
/*     <ul>*/
/*         {% for key,a in question.answers %}*/
/*             */
/*                 {% if question.type == 'single_choice' %}*/
/*                    <li> <input required name="answers" value="{{a.id}}" type="radio"> <label>{{a.text|raw}}</label></li>*/
/*                 {% elseif question.type == 'multiple_choice'%}*/
/*                     <li><input name="answers[]" value="{{a.id}}" type="checkbox"> <label>{{a.text|raw}}</label></li>*/
/*                 {% elseif question.type == 'multiple_text'%}*/
/*                 <li><b>{{key+1}}</b> <input autocomplete="off" type="text" name="answers[]" /></li>*/
/*                 {% endif %}*/
/*                 */
/*             */
/*         {% endfor %}*/
/*     </ul>*/
/*     <div align="center"> <button type="submit">Envoyer</button></div>*/
/*     </form>*/
/* </div>*/
/* {% else %}*/
/*     <div>Il n'y a plus de questions à poser.</div>*/
/* {% endif %}*/
/* </div>*/
