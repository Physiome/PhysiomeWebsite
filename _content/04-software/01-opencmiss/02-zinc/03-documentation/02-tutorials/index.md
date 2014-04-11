---
_layout: default
_template: 
_fieldset: 
title: 
description:
intro:
---


<!--#include virtual="/inc/header-software.txt" -->

<section id="content" class="container clearfix">

	<article class="single-project">

		<header class="page-header clearfix">
			<h1 class="page-title align-left">PyZinc library tutorials</h1>		
			<a href="/software/" class="button no-bg medium align-right">
				All software projects <img src="/img/icon-grid.png" alt="" class="icon">
			</a>			
		</header><!-- end .page-header -->

		<div id="main">
		
			<!-- Content -->
    <div class="document">
      <div class="documentwrapper">
          <div class="body">
            
  <p>The PyZinc tutorials are arranged so that you can get know the Zinc library on a number of different levels.  First and foremost are the installation and
getting started documents.  Once you have installed Zinc and have seen it working you can move on to the interaction tutorials.  The interaction tutorials
are split into three levels with the first level on understanding how the Zinc library can respond to user events.  The second level covers a particular feature
or module of the Zinc library and utilises the helper ZincWidget class and the third level is based around zlab a collection of high level classes and functions
that can quickly produce visualisations in Zinc.</p>
<div class="section" id="introduction">
<h1>Introduction<a class="headerlink" href="#introduction" title="Permalink to this headline">¶</a></h1>
<p>These examples cover the installation and a first look at using Zinc that are non-graphical
that may for instances be used for batch processing purposes.</p>
<div class="toctree-wrapper compound">
<ul>
<li class="toctree-l1"><a class="reference internal" href="guides/getting-started">Getting Started with PyZinc</a><ul>
<li class="toctree-l2"><a class="reference internal" href="guides/getting-started#what-you-need">What You Need</a></li>
<li class="toctree-l2"><a class="reference internal" href="guides/getting-started#executing-the-script">Executing the Script</a></li>
</ul>
</li>
<li class="toctree-l1"><a class="reference internal" href="image_reader/tutorial">Tutorial: Image Reader</a><ul>
<li class="toctree-l2"><a class="reference internal" href="image_reader/tutorial#overview">Overview</a></li>
<li class="toctree-l2"><a class="reference internal" href="image_reader/tutorial#the-code">The Code</a></li>
</ul>
</li>
</ul>
</div>
</div>
<div class="section" id="user-events">
<h1>User Events<a class="headerlink" href="#user-events" title="Permalink to this headline">¶</a></h1>
<p>These examples contain all the basic code to interact with the Qt GUI toolkit
and respond to user events that show basic Zinc visualisations.</p>
<div class="toctree-wrapper compound">
<ul>
<li class="toctree-l1"><a class="reference internal" href="axis_viewer/tutorial">Tutorial: Axis Viewer</a><ul>
<li class="toctree-l2"><a class="reference internal" href="axis_viewer/tutorial#overview">Overview</a></li>
<li class="toctree-l2"><a class="reference internal" href="axis_viewer/tutorial#the-entry-point">The Entry Point</a></li>
<li class="toctree-l2"><a class="reference internal" href="axis_viewer/tutorial#something-to-look-at">Something to Look At</a></li>
<li class="toctree-l2"><a class="reference internal" href="axis_viewer/tutorial#setting-the-scene">Setting the Scene</a></li>
<li class="toctree-l2"><a class="reference internal" href="axis_viewer/tutorial#handling-interaction">Handling Interaction</a></li>
</ul>
</li>
</ul>
</div>
</div>
<div class="section" id="interaction-utilising-the-zincwidget">
<h1>Interaction Utilising the ZincWidget<a class="headerlink" href="#interaction-utilising-the-zincwidget" title="Permalink to this headline">¶</a></h1>
<p>These examples make use of the ZincWidget to handle common user interactions with the Sceneviewer and
explore the features of Zinc.</p>
<div class="toctree-wrapper compound">
<ul>
<li class="toctree-l1"><a class="reference internal" href="read_mesh/tutorial">Tutorial: Read and View a Mesh</a><ul>
<li class="toctree-l2"><a class="reference internal" href="read_mesh/tutorial#overview">Overview</a></li>
<li class="toctree-l2"><a class="reference internal" href="read_mesh/tutorial#initialising-your-application">Initialising your application</a></li>
<li class="toctree-l2"><a class="reference internal" href="read_mesh/tutorial#reading-a-time-varying-model">Reading a time-varying model</a></li>
<li class="toctree-l2"><a class="reference internal" href="read_mesh/tutorial#creating-surface-graphics">Creating surface graphics</a></li>
<li class="toctree-l2"><a class="reference internal" href="read_mesh/tutorial#updating-time">Updating time</a></li>
<li class="toctree-l2"><a class="reference internal" href="read_mesh/tutorial#the-custom-button">The Custom button</a></li>
<li class="toctree-l2"><a class="reference internal" href="read_mesh/tutorial#creating-node-points-graphics">Creating node points graphics</a></li>
<li class="toctree-l2"><a class="reference internal" href="read_mesh/tutorial#id1">Creating node points graphics</a></li>
</ul>
</li>
<li class="toctree-l1"><a class="reference internal" href="finite_element_creation/tutorial">Tutorial: Finite Element Creation</a><ul>
<li class="toctree-l2"><a class="reference internal" href="finite_element_creation/tutorial#overview">Overview</a></li>
<li class="toctree-l2"><a class="reference internal" href="finite_element_creation/tutorial#initialise">Initialise</a></li>
<li class="toctree-l2"><a class="reference internal" href="finite_element_creation/tutorial#create">Create</a></li>
<li class="toctree-l2"><a class="reference internal" href="finite_element_creation/tutorial#visualise">Visualise</a></li>
</ul>
</li>
<li class="toctree-l1"><a class="reference internal" href="materials/tutorial">Tutorial: Materials</a><ul>
<li class="toctree-l2"><a class="reference internal" href="materials/tutorial#overview">Overview</a></li>
<li class="toctree-l2"><a class="reference internal" href="materials/tutorial#regions">Regions</a></li>
<li class="toctree-l2"><a class="reference internal" href="materials/tutorial#standard-graphic-materials">Standard Graphic Materials</a></li>
<li class="toctree-l2"><a class="reference internal" href="materials/tutorial#creating-graphic-materials">Creating Graphic Materials</a></li>
<li class="toctree-l2"><a class="reference internal" href="materials/tutorial#creating-graphic-material-using-an-image-field">Creating Graphic Material Using an Image Field</a></li>
<li class="toctree-l2"><a class="reference internal" href="materials/tutorial#applying-graphic-material-to-graphic">Applying Graphic Material to Graphic</a></li>
</ul>
</li>
</ul>
</div>
<div class="section" id="indices-and-tables">
<h2>Indices and tables<a class="headerlink" href="#indices-and-tables" title="Permalink to this headline">¶</a></h2>
<ul class="simple">
<li><a class="reference internal" href="genindex"><em>Index</em></a></li>
<li><a class="reference internal" href="py-modindex"><em>Module Index</em></a></li>
<li><a class="reference internal" href="search"><em>Search Page</em></a></li>
</ul>
</div>
</div>


          </div>
      </div>
    </div>
      <div class="botnav">
      
        <p>
        <a class="uplink" href="#">Contents</a>
        &#160;&#160;::&#160;&#160;
        <a href="guides/getting-started">Getting Started with PyZinc</a>&#160;&#160;»
        </p>

      </div>
            
		</div><!-- end #main -->

		<div id="sidebar">
<!--#include virtual="/software/zinclibrary/utility-peer-nav.txt" -->    
         <div id="toc">
          <h6><a href="#"><span>PyZinc v3.0.0 tutorials</span></a></h6>
          <ul>
<li><a class="reference internal" href="#">Introduction</a></li>
<li><a class="reference internal" href="#user-events">User Events</a></li>
<li><a class="reference internal" href="#interaction-utilising-the-zincwidget">Interaction Utilising the ZincWidget</a><ul>
<li><a class="reference internal" href="#indices-and-tables">Indices and tables</a></li>
</ul>
</li>
</ul>

        </div>
            <!--#include virtual="utility-download.txt" -->

		</div><!-- end #sidebar -->
		
	</article><!-- end .single-project -->
	
</section><!-- end #content -->

<!--#include virtual="/inc/footer.txt" -->
