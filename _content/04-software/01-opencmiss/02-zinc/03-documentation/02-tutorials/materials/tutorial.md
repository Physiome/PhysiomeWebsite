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
			<h1 class="page-title align-left"><a href="../index">PyZinc library tutorials</a></h1>		
			<a href="/software/" class="button no-bg medium align-right">
				All software projects <img src="/img/icon-grid.png" alt="" class="icon">
			</a>			
		</header><!-- end .page-header -->

		<div id="main">
		
			<!-- Content -->
    <div class="document">
      <div class="documentwrapper">
          <div class="body">
            
  <div class="section" id="tutorial-materials">
<h1>Tutorial: Materials<a class="headerlink" href="#tutorial-materials" title="Permalink to this headline">¶</a></h1>
<p>The Materials application illustrates how graphic materials can be used to add a bit of colour to our mesh.</p>
<p>This tutorial shows how to</p>
<ul class="simple">
<li>create standard materials</li>
<li>create proprietary material</li>
<li>create material with an image field</li>
<li>apply material to a graphic</li>
<li>use regions to separate parts of mesh</li>
</ul>
<p>The souce code used in this tutorial is available from the <a class="reference external" href="https://svn.physiomeproject.org/svn/cmiss/zinc/bindings/examples/trunk/python/materials/">physiome project svn server</a>.</p>
<div class="figure align-center">
<a class="reference internal image-reference" href="/assets/img/software/zinclibrary/tutorials/materials.png"><img alt="/assets/img/software/zinclibrary/tutorials/materials.png" src="/assets/img/software/zinclibrary/tutorials/materials.png" style="width: 636px; height: 471px;" /></a>
</div>
<div class="section" id="overview">
<h2>Overview<a class="headerlink" href="#overview" title="Permalink to this headline">¶</a></h2>
<p>In visualising a mesh we often use colours to separate the different objects being viewed.  One way to
add colour to visualise a mesh in PyZinc is with graphic materials (often
referred to as just materials).  Graphic materials work in the same way as OpenGL materials, that
is we set the diffuse, ambient, emission, shininess, and specular properties to achieve  the
colouring desired.  PyZinc comes with a standard set of graphic materials, these are
not defined automatically but can be created by calling defineStandardMaterials() from the graphics material
module.</p>
<p>This tutorial also introduces regions and how they can be used to separate parts of a mesh.  Regions
are completely independent of each other (except when using the alias field) and thus enable us to
have a high degree of independence from one region to another.</p>
<p>To see the effect of using materials we will create a simple 2D mesh in each region and visualise the mesh
with a surface graphic.  It is to the surface graphic that we apply the material to, to create the final visualisation.</p>
</div>
<div class="section" id="regions">
<h2>Regions<a class="headerlink" href="#regions" title="Permalink to this headline">¶</a></h2>
<p>The following code snippet creates five regions so that later we can have five 2D meshes which are independent of each other.
We keep a handle to each region so we can iterate over the regions and create the required mesh.  Here&#8217;s the code:</p>
<p><strong>Line 4</strong> here we create an attached region.  That is the child has the default_region as a parent, we can also
create unattached regions, move, and remove regions.</p>
</div>
<div class="section" id="standard-graphic-materials">
<h2>Standard Graphic Materials<a class="headerlink" href="#standard-graphic-materials" title="Permalink to this headline">¶</a></h2>
<p>To define the standard graphic materials we only need to call the appropriate API.  The graphics module
holds the graphics material module which defines a method defineStandardMaterials().  This method will
define twelve graphic materials, here is the full list:</p>
<ul class="simple">
<li>black</li>
<li>blue</li>
<li>bone</li>
<li>gray50</li>
<li>gold</li>
<li>green</li>
<li>muscle</li>
<li>red</li>
<li>silver</li>
<li>tissue</li>
<li>transparent_gray50</li>
<li>white</li>
</ul>
<p>Once defined these graphic materials can be found with findMaterialByName() from the graphics material module object.</p>
<p>note:</p>
<blockquote>
<div>If you create a graphic material and set its name to one used by a standard material.  Your material will be replaced
with the standard graphic material with the same name if you call defineStandardMaterials() after creating your graphic
material.</div></blockquote>
</div>
<div class="section" id="creating-graphic-materials">
<h2>Creating Graphic Materials<a class="headerlink" href="#creating-graphic-materials" title="Permalink to this headline">¶</a></h2>
<p>Creating a graphic material is very easy, here is how:</p>
<p><strong>Line 19</strong> creates a default graphic material from the graphics material module object.  The default material is opaque white.</p>
<p><strong>Line 20</strong> we give the graphic material a name so that we may retrieve it later from the graphics module.</p>
<p><strong>Line 21</strong> we set the &#8216;managed&#8217; attribute to true.  This tells the graphics module to keep the material until the
graphics module itself is being destroyed.  Which alleviates us from holding a handle to the new material.</p>
<p><strong>Lines 22 - 23</strong> we set the appropriate attributes with an RGB triple to represent the colour.</p>
<p>The remaining attributes that have not been used in this tutorial are:</p>
<ul class="simple">
<li>ATTRIBUTE_ALPHA</li>
<li>ATTRIBUTE_EMISSION</li>
<li>ATTRIBUTE_SHININESS</li>
<li>ATTRIBUTE_SPECULAR</li>
</ul>
<p>The alpha attribute controls the alpha channel or the level of opacity of the material.  For a full discussion of
the other attributes read the section &#8216;Defining Material Properties&#8217; in the OpenGl programming book, available online <a class="reference external" href="http://www.glprogramming.com/red/chapter05.html">here</a></p>
</div>
<div class="section" id="creating-graphic-material-using-an-image-field">
<h2>Creating Graphic Material Using an Image Field<a class="headerlink" href="#creating-graphic-material-using-an-image-field" title="Permalink to this headline">¶</a></h2>
<p>We can use an image field in a graphic material to create an OpenGL texture.  This is a very good way of visualising
images, wether they are DICOMs, jpg, or png.  Here is the code:</p>
<p><strong>Lines 7 - 11</strong> we create a graphic material from the graphics material module, assign it a name, and set the is managed attribute true.</p>
<p><strong>Lines 13 - 36</strong> we read in the desired image from disk using the stream information as seen in tutorial 2.</p>
<p><strong>Line 38</strong> we set the image field on the material and assign a texture buffer to use.  The PyZinc library has
four texture buffers for use numbered 1, 2, 3, and 4.  Each texture buffer has the following purpose: 1 is for a texture; 2 is for a normal map;
3 is for a colour lookup; 4 is undefined/for future use</p>
</div>
<div class="section" id="applying-graphic-material-to-graphic">
<h2>Applying Graphic Material to Graphic<a class="headerlink" href="#applying-graphic-material-to-graphic" title="Permalink to this headline">¶</a></h2>
<p>Graphic materials created from the graphic material module are available anywhere in the region tree for any graphic to use.
In each of our regions we create a 2D finite element and visualise it with a surface graphic.  When we create the
surface graphic we set the material for that surface to use.  Here is the code:</p>
<p><strong>Lines 7 - 10</strong> we iterate over the regions that we kept a handle to and use an index to get a matching list of graphic material names.</p>
<p><strong>Line 13</strong> search the graphic module for the current graphic material name.</p>
<p><strong>Line 22</strong> set the material for the surface graphic to use.</p>
<p><strong>Lines 23 - 25</strong> if the graphic material is our &#8216;texture&#8217; using the image field, we need to set a texture coordinate field.
Here we use the xi field which will map the image size to the finite element size automatically.</p>
</div>
</div>


          </div>
      </div>
    </div>
      <div class="botnav">
      
        <p>
        «&#160;&#160;<a href="../finite_element_creation/tutorial">Tutorial: Finite Element Creation</a>
        &#160;&#160;::&#160;&#160;
        <a class="uplink" href="../index">Contents</a>
        </p>

      </div>
            
		</div><!-- end #main -->

		<div id="sidebar">
<!--#include virtual="/software/zinclibrary/utility-peer-nav.txt" -->    
         <div id="toc">
          <h6><a href="../index"><span>PyZinc v3.0.0 tutorials</span></a></h6>
          <ul>
<li><a class="reference internal" href="#">Tutorial: Materials</a><ul>
<li><a class="reference internal" href="#overview">Overview</a></li>
<li><a class="reference internal" href="#regions">Regions</a></li>
<li><a class="reference internal" href="#standard-graphic-materials">Standard Graphic Materials</a></li>
<li><a class="reference internal" href="#creating-graphic-materials">Creating Graphic Materials</a></li>
<li><a class="reference internal" href="#creating-graphic-material-using-an-image-field">Creating Graphic Material Using an Image Field</a></li>
<li><a class="reference internal" href="#applying-graphic-material-to-graphic">Applying Graphic Material to Graphic</a></li>
</ul>
</li>
</ul>

        </div>
            <!--#include virtual="utility-download.txt" -->

		</div><!-- end #sidebar -->
		
	</article><!-- end .single-project -->
	
</section><!-- end #content -->

<!--#include virtual="/inc/footer.txt" -->
