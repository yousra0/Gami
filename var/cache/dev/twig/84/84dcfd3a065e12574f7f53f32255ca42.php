<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* Admin/details.html.twig */
class __TwigTemplate_dd40aed00c385a47fcc83eb7720a5754 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Admin/details.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Admin/details.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "Admin/details.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 4
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "<!-- ***** Preloader Start ***** -->
  <div id=\"js-preloader\" class=\"js-preloader\">
    <div class=\"preloader-inner\">
      <span class=\"dot\"></span>
      <div class=\"dots\">
        <span></span>
        <span></span>
        <span></span>
      </div>
    </div>
  </div>
  <!-- ***** Preloader End ***** -->

  <!-- ***** Header Area Start ***** -->
  <header class=\"header-area header-sticky\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-12\">
                <nav class=\"main-nav\">
                    <!-- ***** Logo Start ***** -->
                    <a href=\"index.html\" class=\"logo\">
                        <img src=\"assets/images/logo.png\" alt=\"\">
                    </a>
                    <!-- ***** Logo End ***** -->
                    <!-- ***** Search End ***** -->
                    <div class=\"search-input\">
                      <form id=\"search\" action=\"#\">
                        <input type=\"text\" placeholder=\"Type Something\" id='searchText' name=\"searchKeyword\" onkeypress=\"handle\" />
                        <i class=\"fa fa-search\"></i>
                      </form>
                    </div>
                    <!-- ***** Search End ***** -->
                    <!-- ***** Menu Start ***** -->
                    <ul class=\"nav\">
                        <li><a href=\"";
        // line 39
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_index");
        echo "\">Home</a></li>
                        <li><a href=\"";
        // line 40
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_browse");
        echo "\" class=\"active\">Browse</a></li>
                        <li><a href=\"details.html\">Details</a></li>
                        <li><a href=\"";
        // line 42
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_streams");
        echo "\">Streams</a></li>
                        <li><a href=\"";
        // line 43
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_profile");
        echo "\">Profile <img src=\"assets/images/profile-header.jpg\" alt=\"\"></a></li>
                    </ul>    
                    <a class='menu-trigger'>
                        <span>Menu</span>
                    </a>
                    <!-- ***** Menu End ***** -->
                </nav>
            </div>
        </div>
    </div>
  </header>
  <!-- ***** Header Area End ***** -->

  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-lg-12\">
        <div class=\"page-content\">

          <!-- ***** Featured Start ***** -->
          <div class=\"row\">
            <div class=\"col-lg-12\">
              <div class=\"feature-banner header-text\">
                <div class=\"row\">
                  <div class=\"col-lg-4\">
                    <img src=\"assets/images/feature-left.jpg\" alt=\"\" style=\"border-radius: 23px;\">
                  </div>
                  <div class=\"col-lg-8\">
                    <div class=\"thumb\">
                      <img src=\"assets/images/feature-right.jpg\" alt=\"\" style=\"border-radius: 23px;\">
                      <a href=\"https://www.youtube.com/watch?v=r1b03uKWk_M\" target=\"_blank\"><i class=\"fa fa-play\"></i></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- ***** Featured End ***** -->

          <!-- ***** Details Start ***** -->
          <div class=\"game-details\">
            <div class=\"row\">
              <div class=\"col-lg-12\">
                <h2>Fortnite Details</h2>
              </div>
              <div class=\"col-lg-12\">
                <div class=\"content\">
                  <div class=\"row\">
                    <div class=\"col-lg-6\">
                      <div class=\"left-info\">
                        <div class=\"left\">
                          <h4>Fortnite</h4>
                          <span>Sandbox</span>
                        </div>
                        <ul>
                          <li><i class=\"fa fa-star\"></i> 4.8</li>
                          <li><i class=\"fa fa-download\"></i> 2.3M</li>
                        </ul>
                      </div>
                    </div>
                    <div class=\"col-lg-6\">
                      <div class=\"right-info\">
                        <ul>
                          <li><i class=\"fa fa-star\"></i> 4.8</li>
                          <li><i class=\"fa fa-download\"></i> 2.3M</li>
                          <li><i class=\"fa fa-server\"></i> 36GB</li>
                          <li><i class=\"fa fa-gamepad\"></i> Action</li>
                        </ul>
                      </div>
                    </div>
                    <div class=\"col-lg-4\">
                      <img src=\"assets/images/details-01.jpg\" alt=\"\" style=\"border-radius: 23px; margin-bottom: 30px;\">
                    </div>
                    <div class=\"col-lg-4\">
                      <img src=\"assets/images/details-02.jpg\" alt=\"\" style=\"border-radius: 23px; margin-bottom: 30px;\">
                    </div>
                    <div class=\"col-lg-4\">
                      <img src=\"assets/images/details-03.jpg\" alt=\"\" style=\"border-radius: 23px; margin-bottom: 30px;\">
                    </div>
                    <div class=\"col-lg-12\">
                      <p>Cyborg Gaming is free HTML CSS website template provided by TemplateMo. This is Bootstrap v5.2.0 layout. You can make a <a href=\"https://paypal.me/templatemo\" target=\"_blank\">small contribution via PayPal</a> to info [at] templatemo.com and thank you for supporting. If you want to get the PSD source files, please contact us. Lorem ipsum dolor sit consectetur es dispic dipiscingei elit, sed doers eiusmod lisum hored tempor.</p>
                    </div>
                    <div class=\"col-lg-12\">
                      <div class=\"main-border-button\">
                        <a href=\"#\">Download Fortnite Now!</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- ***** Details End ***** -->

          <!-- ***** Other Start ***** -->
          <div class=\"other-games\">
            <div class=\"row\">
              <div class=\"col-lg-12\">
                <div class=\"heading-section\">
                  <h4><em>Other Related</em> Games</h4>
                </div>
              </div>
              <div class=\"col-lg-6\">
                <div class=\"item\">
                  <img src=\"assets/images/game-01.jpg\" alt=\"\" class=\"templatemo-item\">
                  <h4>Dota 2</h4><span>Sandbox</span>
                  <ul>
                    <li><i class=\"fa fa-star\"></i> 4.8</li>
                    <li><i class=\"fa fa-download\"></i> 2.3M</li>
                  </ul>
                </div>
              </div>
              <div class=\"col-lg-6\">
                <div class=\"item\">
                  <img src=\"assets/images/game-02.jpg\" alt=\"\" class=\"templatemo-item\">
                  <h4>Dota 2</h4><span>Sandbox</span>
                  <ul>
                    <li><i class=\"fa fa-star\"></i> 4.8</li>
                    <li><i class=\"fa fa-download\"></i> 2.3M</li>
                  </ul>
                </div>
              </div>
              <div class=\"col-lg-6\">
                <div class=\"item\">
                  <img src=\"assets/images/game-03.jpg\" alt=\"\" class=\"templatemo-item\">
                  <h4>Dota 2</h4><span>Sandbox</span>
                  <ul>
                    <li><i class=\"fa fa-star\"></i> 4.8</li>
                    <li><i class=\"fa fa-download\"></i> 2.3M</li>
                  </ul>
                </div>
              </div>
              <div class=\"col-lg-6\">
                <div class=\"item\">
                  <img src=\"assets/images/game-02.jpg\" alt=\"\" class=\"templatemo-item\">
                  <h4>Dota 2</h4><span>Sandbox</span>
                  <ul>
                    <li><i class=\"fa fa-star\"></i> 4.8</li>
                    <li><i class=\"fa fa-download\"></i> 2.3M</li>
                  </ul>
                </div>
              </div>
              <div class=\"col-lg-6\">
                <div class=\"item\">
                  <img src=\"assets/images/game-03.jpg\" alt=\"\" class=\"templatemo-item\">
                  <h4>Dota 2</h4><span>Sandbox</span>
                  <ul>
                    <li><i class=\"fa fa-star\"></i> 4.8</li>
                    <li><i class=\"fa fa-download\"></i> 2.3M</li>
                  </ul>
                </div>
              </div>
              <div class=\"col-lg-6\">
                <div class=\"item\">
                  <img src=\"assets/images/game-01.jpg\" alt=\"\" class=\"templatemo-item\">
                  <h4>Dota 2</h4><span>Sandbox</span>
                  <ul>
                    <li><i class=\"fa fa-star\"></i> 4.8</li>
                    <li><i class=\"fa fa-download\"></i> 2.3M</li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <!-- ***** Other End ***** -->

        </div>
      </div>
    </div>
  </div>
  
  <footer>
    <div class=\"container\">
      <div class=\"row\">
        <div class=\"col-lg-12\">
          <p>Copyright © 2036 <a href=\"#\">Cyborg Gaming</a> Company. All rights reserved. 
          
          <br>Design: <a href=\"https://templatemo.com\" target=\"_blank\" title=\"free CSS templates\">TemplateMo</a>  Distributed By <a href=\"https://themewagon.com\" target=\"_blank\" >ThemeWagon</a></p>
        </div>
      </div>
    </div>
  </footer>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "Admin/details.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable()
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  117 => 43,  113 => 42,  108 => 40,  104 => 39,  68 => 5,  58 => 4,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}


{% block body %}
<!-- ***** Preloader Start ***** -->
  <div id=\"js-preloader\" class=\"js-preloader\">
    <div class=\"preloader-inner\">
      <span class=\"dot\"></span>
      <div class=\"dots\">
        <span></span>
        <span></span>
        <span></span>
      </div>
    </div>
  </div>
  <!-- ***** Preloader End ***** -->

  <!-- ***** Header Area Start ***** -->
  <header class=\"header-area header-sticky\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-12\">
                <nav class=\"main-nav\">
                    <!-- ***** Logo Start ***** -->
                    <a href=\"index.html\" class=\"logo\">
                        <img src=\"assets/images/logo.png\" alt=\"\">
                    </a>
                    <!-- ***** Logo End ***** -->
                    <!-- ***** Search End ***** -->
                    <div class=\"search-input\">
                      <form id=\"search\" action=\"#\">
                        <input type=\"text\" placeholder=\"Type Something\" id='searchText' name=\"searchKeyword\" onkeypress=\"handle\" />
                        <i class=\"fa fa-search\"></i>
                      </form>
                    </div>
                    <!-- ***** Search End ***** -->
                    <!-- ***** Menu Start ***** -->
                    <ul class=\"nav\">
                        <li><a href=\"{{ path('app_index')}}\">Home</a></li>
                        <li><a href=\"{{ path('app_browse') }}\" class=\"active\">Browse</a></li>
                        <li><a href=\"details.html\">Details</a></li>
                        <li><a href=\"{{ path('app_streams') }}\">Streams</a></li>
                        <li><a href=\"{{ path('app_profile') }}\">Profile <img src=\"assets/images/profile-header.jpg\" alt=\"\"></a></li>
                    </ul>    
                    <a class='menu-trigger'>
                        <span>Menu</span>
                    </a>
                    <!-- ***** Menu End ***** -->
                </nav>
            </div>
        </div>
    </div>
  </header>
  <!-- ***** Header Area End ***** -->

  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-lg-12\">
        <div class=\"page-content\">

          <!-- ***** Featured Start ***** -->
          <div class=\"row\">
            <div class=\"col-lg-12\">
              <div class=\"feature-banner header-text\">
                <div class=\"row\">
                  <div class=\"col-lg-4\">
                    <img src=\"assets/images/feature-left.jpg\" alt=\"\" style=\"border-radius: 23px;\">
                  </div>
                  <div class=\"col-lg-8\">
                    <div class=\"thumb\">
                      <img src=\"assets/images/feature-right.jpg\" alt=\"\" style=\"border-radius: 23px;\">
                      <a href=\"https://www.youtube.com/watch?v=r1b03uKWk_M\" target=\"_blank\"><i class=\"fa fa-play\"></i></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- ***** Featured End ***** -->

          <!-- ***** Details Start ***** -->
          <div class=\"game-details\">
            <div class=\"row\">
              <div class=\"col-lg-12\">
                <h2>Fortnite Details</h2>
              </div>
              <div class=\"col-lg-12\">
                <div class=\"content\">
                  <div class=\"row\">
                    <div class=\"col-lg-6\">
                      <div class=\"left-info\">
                        <div class=\"left\">
                          <h4>Fortnite</h4>
                          <span>Sandbox</span>
                        </div>
                        <ul>
                          <li><i class=\"fa fa-star\"></i> 4.8</li>
                          <li><i class=\"fa fa-download\"></i> 2.3M</li>
                        </ul>
                      </div>
                    </div>
                    <div class=\"col-lg-6\">
                      <div class=\"right-info\">
                        <ul>
                          <li><i class=\"fa fa-star\"></i> 4.8</li>
                          <li><i class=\"fa fa-download\"></i> 2.3M</li>
                          <li><i class=\"fa fa-server\"></i> 36GB</li>
                          <li><i class=\"fa fa-gamepad\"></i> Action</li>
                        </ul>
                      </div>
                    </div>
                    <div class=\"col-lg-4\">
                      <img src=\"assets/images/details-01.jpg\" alt=\"\" style=\"border-radius: 23px; margin-bottom: 30px;\">
                    </div>
                    <div class=\"col-lg-4\">
                      <img src=\"assets/images/details-02.jpg\" alt=\"\" style=\"border-radius: 23px; margin-bottom: 30px;\">
                    </div>
                    <div class=\"col-lg-4\">
                      <img src=\"assets/images/details-03.jpg\" alt=\"\" style=\"border-radius: 23px; margin-bottom: 30px;\">
                    </div>
                    <div class=\"col-lg-12\">
                      <p>Cyborg Gaming is free HTML CSS website template provided by TemplateMo. This is Bootstrap v5.2.0 layout. You can make a <a href=\"https://paypal.me/templatemo\" target=\"_blank\">small contribution via PayPal</a> to info [at] templatemo.com and thank you for supporting. If you want to get the PSD source files, please contact us. Lorem ipsum dolor sit consectetur es dispic dipiscingei elit, sed doers eiusmod lisum hored tempor.</p>
                    </div>
                    <div class=\"col-lg-12\">
                      <div class=\"main-border-button\">
                        <a href=\"#\">Download Fortnite Now!</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- ***** Details End ***** -->

          <!-- ***** Other Start ***** -->
          <div class=\"other-games\">
            <div class=\"row\">
              <div class=\"col-lg-12\">
                <div class=\"heading-section\">
                  <h4><em>Other Related</em> Games</h4>
                </div>
              </div>
              <div class=\"col-lg-6\">
                <div class=\"item\">
                  <img src=\"assets/images/game-01.jpg\" alt=\"\" class=\"templatemo-item\">
                  <h4>Dota 2</h4><span>Sandbox</span>
                  <ul>
                    <li><i class=\"fa fa-star\"></i> 4.8</li>
                    <li><i class=\"fa fa-download\"></i> 2.3M</li>
                  </ul>
                </div>
              </div>
              <div class=\"col-lg-6\">
                <div class=\"item\">
                  <img src=\"assets/images/game-02.jpg\" alt=\"\" class=\"templatemo-item\">
                  <h4>Dota 2</h4><span>Sandbox</span>
                  <ul>
                    <li><i class=\"fa fa-star\"></i> 4.8</li>
                    <li><i class=\"fa fa-download\"></i> 2.3M</li>
                  </ul>
                </div>
              </div>
              <div class=\"col-lg-6\">
                <div class=\"item\">
                  <img src=\"assets/images/game-03.jpg\" alt=\"\" class=\"templatemo-item\">
                  <h4>Dota 2</h4><span>Sandbox</span>
                  <ul>
                    <li><i class=\"fa fa-star\"></i> 4.8</li>
                    <li><i class=\"fa fa-download\"></i> 2.3M</li>
                  </ul>
                </div>
              </div>
              <div class=\"col-lg-6\">
                <div class=\"item\">
                  <img src=\"assets/images/game-02.jpg\" alt=\"\" class=\"templatemo-item\">
                  <h4>Dota 2</h4><span>Sandbox</span>
                  <ul>
                    <li><i class=\"fa fa-star\"></i> 4.8</li>
                    <li><i class=\"fa fa-download\"></i> 2.3M</li>
                  </ul>
                </div>
              </div>
              <div class=\"col-lg-6\">
                <div class=\"item\">
                  <img src=\"assets/images/game-03.jpg\" alt=\"\" class=\"templatemo-item\">
                  <h4>Dota 2</h4><span>Sandbox</span>
                  <ul>
                    <li><i class=\"fa fa-star\"></i> 4.8</li>
                    <li><i class=\"fa fa-download\"></i> 2.3M</li>
                  </ul>
                </div>
              </div>
              <div class=\"col-lg-6\">
                <div class=\"item\">
                  <img src=\"assets/images/game-01.jpg\" alt=\"\" class=\"templatemo-item\">
                  <h4>Dota 2</h4><span>Sandbox</span>
                  <ul>
                    <li><i class=\"fa fa-star\"></i> 4.8</li>
                    <li><i class=\"fa fa-download\"></i> 2.3M</li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <!-- ***** Other End ***** -->

        </div>
      </div>
    </div>
  </div>
  
  <footer>
    <div class=\"container\">
      <div class=\"row\">
        <div class=\"col-lg-12\">
          <p>Copyright © 2036 <a href=\"#\">Cyborg Gaming</a> Company. All rights reserved. 
          
          <br>Design: <a href=\"https://templatemo.com\" target=\"_blank\" title=\"free CSS templates\">TemplateMo</a>  Distributed By <a href=\"https://themewagon.com\" target=\"_blank\" >ThemeWagon</a></p>
        </div>
      </div>
    </div>
  </footer>

{% endblock %}", "Admin/details.html.twig", "C:\\Users\\lenovo\\Desktop\\PIDEV\\web\\front\\GAMI\\templates\\admin\\details.html.twig");
    }
}