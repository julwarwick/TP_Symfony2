<?php

/* ::layout.html.twig */
class __TwigTemplate_be09ab6194f7f3d18c37cba893d09f90952ce84ad3fd3097e67de504bf823eb1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheet' => array($this, 'block_stylesheet'),
            'body' => array($this, 'block_body'),
            'javascript' => array($this, 'block_javascript'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        echo "
<!DOCTYPE>

<html>
    <head>
        <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
        
        <title>";
        // line 9
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        
        ";
        // line 11
        $this->displayBlock('stylesheet', $context, $blocks);
        // line 14
        echo "    </head>
    <body>
        <div class=\"container\">
            <div id=\"header\" class=\"hero-unit\">
                <h1>Mon projet Symfony2</h1>
                <p>Ce projet est propulsé par Symfony2</p>
                <p><a class=\"btn btn-primary btn-large\" href=\"http://www.siteduzero.com\">Lire le tutoriel >></a>
                </p>
            </div>
            
            <div class=\"row\">
                <div id=\"menu\" class=span3\">
                    <h3>Le Blog</h3>
                    <ul class=\"nav nav-pills nav-stacked\">
                        <li><a href=\"";
        // line 28
        echo $this->env->getExtension('routing')->getPath("sdzblog_accueil");
        echo "\">Accueil du blog</a></li>
                        <li><a href=\"";
        // line 29
        echo $this->env->getExtension('routing')->getPath("sdzblog_ajouter");
        echo "\">Ajouter un article</a></li>
                    </ul>
                    ";
        // line 31
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("SdzBlogBundle:Blog:menu", array("nombre" => 3)));
        echo "
            </div>
                <div id=\"content\" class=\"span9\">
                    ";
        // line 34
        $this->displayBlock('body', $context, $blocks);
        // line 36
        echo "                </div>
            </div>
            
            <hr>
            
            <footer>
                <p>The sky's the limit @2012 and beyond.</p>
            </footer>
        </div>
  ";
        // line 45
        $this->displayBlock('javascript', $context, $blocks);
        // line 49
        echo "        
    </body>
</html>
";
    }

    // line 9
    public function block_title($context, array $blocks = array())
    {
        echo "Sdz";
    }

    // line 11
    public function block_stylesheet($context, array $blocks = array())
    {
        // line 12
        echo "            <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/bootstrap.css"), "html", null, true);
        echo "\" type=\"text/css\" />
        ";
    }

    // line 34
    public function block_body($context, array $blocks = array())
    {
        // line 35
        echo "                    ";
    }

    // line 45
    public function block_javascript($context, array $blocks = array())
    {
        // line 46
        echo "        <script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 47
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
        return array (  121 => 47,  118 => 46,  115 => 45,  111 => 35,  108 => 34,  101 => 12,  98 => 11,  92 => 9,  85 => 49,  83 => 45,  72 => 36,  70 => 34,  64 => 31,  59 => 29,  55 => 28,  39 => 14,  37 => 11,  32 => 9,  23 => 2,);
    }
}
