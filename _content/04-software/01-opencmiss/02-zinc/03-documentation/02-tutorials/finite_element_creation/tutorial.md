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
            
  <div class="section" id="tutorial-finite-element-creation">
<h1>Tutorial: Finite Element Creation<a class="headerlink" href="#tutorial-finite-element-creation" title="Permalink to this headline">¶</a></h1>
<p>The Finite Element Creator application is designed to illustrate how to create a 2D finite element
and visualise it.</p>
<p>This tutorial shows how to</p>
<ul class="simple">
<li>create a 2D finite element using a template</li>
<li>visualise the element using a surface graphic and node points</li>
</ul>
<p>The souce code used in this tutorial is available from the <a class="reference external" href="https://svn.physiomeproject.org/svn/cmiss/zinc/bindings/examples/trunk/python/finite_element_creation/">physiome project svn server</a>.</p>
<div class="figure align-center">
<a class="reference internal image-reference" href="/assets/img/software/zinclibrary/tutorials/finite_element_creation.png"><img alt="/assets/img/software/zinclibrary/tutorials/finite_element_creation.png" src="/assets/img/software/zinclibrary/tutorials/finite_element_creation.png" style="width: 636px; height: 471px;" /></a>
</div>
<div class="section" id="overview">
<h2>Overview<a class="headerlink" href="#overview" title="Permalink to this headline">¶</a></h2>
<p>Finite elements are the building blocks of any model.  To create a model from finite elements the
Zinc library uses templates.  Using templates enables a modeller to create very large model with ease.</p>
<p>This tutorial uses the same technique for creating an application as the simple axis viewer tutorial, see
this tutorial for more information.</p>
</div>
<div class="section" id="initialise">
<h2>Initialise<a class="headerlink" href="#initialise" title="Permalink to this headline">¶</a></h2>
<p>The initialisation is done in two parts one for the PyZinc context  and one for the OpenGL Context.
Creating the PyZinc context is straightforward, we need only create a Context object and give it
a unique name:</p>
<div class="highlight-python"><div class="highlight"><pre><span class="bp">self</span><span class="o">.</span><span class="n">_context</span> <span class="o">=</span> <span class="n">Context</span><span class="p">(</span><span class="s">&quot;finiteelementcreation&quot;</span><span class="p">)</span>
</pre></div>
</div>
<p>We keep a handle to the PyZinc context as any handles originating from this context will be invalid
once the context has been deleted.</p>
<p>The OpenGL Context is created by Qt and we must set any Zinc scene viewers that we create to have the
same properties.</p>
<div class="highlight-python"><table class="highlighttable"><tr><td class="linenos"><div class="linenodiv"><pre> 1
 2
 3
 4
 5
 6
 7
 8
 9
10
11
12
13
14
15
16
17
18
19
20
21
22
23
24
25
26
27
28
29
30</pre></div></td><td class="code"><div class="highlight"><pre>    <span class="k">def</span> <span class="nf">initializeGL</span><span class="p">(</span><span class="bp">self</span><span class="p">):</span>
        <span class="sd">&#39;&#39;&#39;</span>
<span class="sd">        Initialise the Zinc scene, create the finite element, and the surface to visualise it.  </span>
<span class="sd">        &#39;&#39;&#39;</span>
               
        <span class="c"># From the graphics module get the scene viewer module.</span>
        <span class="n">scene_viewer_module</span> <span class="o">=</span> <span class="bp">self</span><span class="o">.</span><span class="n">_context</span><span class="o">.</span><span class="n">getSceneviewermodule</span><span class="p">()</span>
        
        <span class="c"># Get the glyph module from the graphics module and define the standard glyphs</span>
        <span class="n">glyph_module</span> <span class="o">=</span> <span class="bp">self</span><span class="o">.</span><span class="n">_context</span><span class="o">.</span><span class="n">getGlyphmodule</span><span class="p">()</span>
        <span class="n">glyph_module</span><span class="o">.</span><span class="n">defineStandardGlyphs</span><span class="p">()</span>

        <span class="c"># From the scene viewer package we can create a scene viewer, we set up the scene viewer to have the same OpenGL properties as</span>
        <span class="c"># the QGLWidget.</span>
        <span class="bp">self</span><span class="o">.</span><span class="n">_scene_viewer</span> <span class="o">=</span> <span class="n">scene_viewer_module</span><span class="o">.</span><span class="n">createSceneviewer</span><span class="p">(</span><span class="n">Sceneviewer</span><span class="o">.</span><span class="n">BUFFERING_MODE_DOUBLE</span><span class="p">,</span> <span class="n">Sceneviewer</span><span class="o">.</span><span class="n">STEREO_MODE_DEFAULT</span><span class="p">)</span>

        <span class="c"># Create a filter for visibility flags which will allow us to see our graphics.</span>
        <span class="n">filter_module</span> <span class="o">=</span> <span class="bp">self</span><span class="o">.</span><span class="n">_context</span><span class="o">.</span><span class="n">getScenefiltermodule</span><span class="p">()</span>
        <span class="n">graphics_filter</span> <span class="o">=</span> <span class="n">filter_module</span><span class="o">.</span><span class="n">createScenefilterVisibilityFlags</span><span class="p">()</span>

        <span class="c"># Set the filter for the scene viewer to use.</span>
        <span class="bp">self</span><span class="o">.</span><span class="n">_scene_viewer</span><span class="o">.</span><span class="n">setScenefilter</span><span class="p">(</span><span class="n">graphics_filter</span><span class="p">)</span>
        
        <span class="bp">self</span><span class="o">.</span><span class="n">create2DFiniteElement</span><span class="p">()</span>
        <span class="bp">self</span><span class="o">.</span><span class="n">createSurfaceGraphic</span><span class="p">()</span>

        <span class="c"># Place the viewport to contain everything visible in the scene.</span>
        <span class="bp">self</span><span class="o">.</span><span class="n">_scene_viewer</span><span class="o">.</span><span class="n">viewAll</span><span class="p">()</span>
        <span class="bp">self</span><span class="o">.</span><span class="n">_notifier</span> <span class="o">=</span> <span class="bp">self</span><span class="o">.</span><span class="n">_scene_viewer</span><span class="o">.</span><span class="n">createSceneviewernotifier</span><span class="p">()</span>
        <span class="bp">self</span><span class="o">.</span><span class="n">_notifier</span><span class="o">.</span><span class="n">setCallback</span><span class="p">(</span><span class="bp">self</span><span class="o">.</span><span class="n">sceneviewerEvent</span><span class="p">)</span>
</pre></div>
</td></tr></table></div>
<p><strong>Line 10</strong> we get the scene viewer package from the graphics module, from the scene viewer package we can create
scene viewers.</p>
<p><strong>Line 18</strong> here we create a scene viewer we also keep the handle that is returned in the class because
we will use it a lot.</p>
<p><strong>Line 25</strong> function call to create a basic linear 2D finite element</p>
<p><strong>Line 26</strong> function call to create a surface graphic so that we may visualise the 2D finite element
created on line 25.</p>
<p><strong>Line 29</strong> using the viewAll() API function from the scene viewer we can set the viewport to contain
all the visible elements of the scene viewer&#8217;s scene.</p>
</div>
<div class="section" id="create">
<h2>Create<a class="headerlink" href="#create" title="Permalink to this headline">¶</a></h2>
<p>To create a finite element we must use templates, this is a bit cumbersome for creating basic meshes
but it is much more useful when we create very big meshes.  Here is the code:</p>
<div class="highlight-python"><table class="highlighttable"><tr><td class="linenos"><div class="linenodiv"><pre> 1
 2
 3
 4
 5
 6
 7
 8
 9
10
11
12
13
14
15
16
17
18
19
20
21
22
23
24
25
26
27
28
29
30
31
32
33
34
35
36
37
38
39
40
41
42
43
44
45
46
47
48
49
50
51
52
53
54
55
56
57
58
59
60
61
62
63</pre></div></td><td class="code"><div class="highlight"><pre>    <span class="k">def</span> <span class="nf">create2DFiniteElement</span><span class="p">(</span><span class="bp">self</span><span class="p">):</span>
        <span class="c"># Get a the root region, which is the default region of the context.</span>
        <span class="n">default_region</span> <span class="o">=</span> <span class="bp">self</span><span class="o">.</span><span class="n">_context</span><span class="o">.</span><span class="n">getDefaultRegion</span><span class="p">()</span>
        
        <span class="c"># Get the field module for root region, with which we  shall create a </span>
        <span class="c"># finite element coordinate field.</span>
        <span class="n">field_module</span> <span class="o">=</span> <span class="n">default_region</span><span class="o">.</span><span class="n">getFieldmodule</span><span class="p">()</span>
        
        <span class="n">field_module</span><span class="o">.</span><span class="n">beginChange</span><span class="p">()</span>
        
        <span class="c"># Create a finite element field with 2 components to represent 2 dimensions</span>
        <span class="n">finite_element_field</span> <span class="o">=</span> <span class="n">field_module</span><span class="o">.</span><span class="n">createFieldFiniteElement</span><span class="p">(</span><span class="mi">2</span><span class="p">)</span>
        <span class="c"># Set the name of the field, we give it label to help us understand it&#39;s purpose</span>
        <span class="n">finite_element_field</span><span class="o">.</span><span class="n">setName</span><span class="p">(</span><span class="s">&#39;coordinates&#39;</span><span class="p">)</span>
        <span class="bp">self</span><span class="o">.</span><span class="n">_finite_element_field</span> <span class="o">=</span> <span class="n">finite_element_field</span>
        <span class="c"># Find a special node set named &#39;cmiss_nodes&#39;</span>
        <span class="n">nodeset</span> <span class="o">=</span> <span class="n">field_module</span><span class="o">.</span><span class="n">findNodesetByName</span><span class="p">(</span><span class="s">&#39;nodes&#39;</span><span class="p">)</span>
        <span class="n">node_template</span> <span class="o">=</span> <span class="n">nodeset</span><span class="o">.</span><span class="n">createNodetemplate</span><span class="p">()</span>
        <span class="c"># Set the finite element coordinate field for the nodes to use</span>
        <span class="n">node_template</span><span class="o">.</span><span class="n">defineField</span><span class="p">(</span><span class="n">finite_element_field</span><span class="p">)</span>
        
        <span class="n">field_cache</span> <span class="o">=</span> <span class="n">field_module</span><span class="o">.</span><span class="n">createFieldcache</span><span class="p">()</span>
        
        <span class="c"># The node template for the square expects the nodes to be ordered in </span>
        <span class="c"># a mirrored Z - pattern for the square element.  The order of the coordinates</span>
        <span class="c"># for the nodes is unimportant here but it will allow us to index the nodes in</span>
        <span class="c"># order later when using the element template.</span>
        <span class="n">node_coordinates</span> <span class="o">=</span> <span class="p">[[</span><span class="mi">0</span><span class="p">,</span> <span class="mf">0.0</span><span class="p">],</span> <span class="p">[</span><span class="mf">3.0</span><span class="p">,</span> <span class="mf">0.0</span><span class="p">],</span> <span class="p">[</span><span class="mf">0.0</span><span class="p">,</span> <span class="mf">4.0</span><span class="p">],</span> <span class="p">[</span><span class="mf">2.0</span><span class="p">,</span> <span class="mf">2.0</span><span class="p">]]</span>
        <span class="c"># Create four nodes to define a square finite element over</span>
        <span class="k">for</span> <span class="n">i</span><span class="p">,</span> <span class="n">node_coordinate</span> <span class="ow">in</span> <span class="nb">enumerate</span><span class="p">(</span><span class="n">node_coordinates</span><span class="p">):</span>
            <span class="c"># Node indexes start from 1</span>
            <span class="n">node</span> <span class="o">=</span> <span class="n">nodeset</span><span class="o">.</span><span class="n">createNode</span><span class="p">(</span><span class="n">i</span><span class="o">+</span><span class="mi">1</span><span class="p">,</span> <span class="n">node_template</span><span class="p">)</span>
            <span class="c"># Set the node coordinates, first set the field cache to use the current node</span>
            <span class="n">field_cache</span><span class="o">.</span><span class="n">setNode</span><span class="p">(</span><span class="n">node</span><span class="p">)</span>
            <span class="c"># Pass in floats as an array</span>
            <span class="n">finite_element_field</span><span class="o">.</span><span class="n">assignReal</span><span class="p">(</span><span class="n">field_cache</span><span class="p">,</span> <span class="n">node_coordinate</span><span class="p">)</span>

        <span class="c"># We want to create a 2D element so we grab the predefined 2D mesh.  Currently there</span>
        <span class="c"># is only one mesh for each dimension 1D, 2D, and 3D the user is not able to name</span>
        <span class="c"># their own mesh.  This is due to change in an upcoming release of PyZinc.</span>
        <span class="n">mesh</span> <span class="o">=</span> <span class="n">field_module</span><span class="o">.</span><span class="n">findMeshByDimension</span><span class="p">(</span><span class="mi">2</span><span class="p">)</span>
        <span class="n">element_template</span> <span class="o">=</span> <span class="n">mesh</span><span class="o">.</span><span class="n">createElementtemplate</span><span class="p">()</span>
        <span class="n">element_template</span><span class="o">.</span><span class="n">setElementShapeType</span><span class="p">(</span><span class="n">Element</span><span class="o">.</span><span class="n">SHAPE_TYPE_SQUARE</span><span class="p">)</span>
        <span class="n">element_node_count</span> <span class="o">=</span> <span class="mi">4</span>
        <span class="n">element_template</span><span class="o">.</span><span class="n">setNumberOfNodes</span><span class="p">(</span><span class="n">element_node_count</span><span class="p">)</span>
        <span class="c"># Specify the dimension and the interpolation function for the element basis function. </span>
        <span class="n">linear_basis</span> <span class="o">=</span> <span class="n">field_module</span><span class="o">.</span><span class="n">createElementbasis</span><span class="p">(</span><span class="mi">2</span><span class="p">,</span> <span class="n">Elementbasis</span><span class="o">.</span><span class="n">FUNCTION_TYPE_LINEAR_LAGRANGE</span><span class="p">)</span>
        <span class="c"># The indexes of the nodes in the node template we want to use</span>
        <span class="n">node_indexes</span> <span class="o">=</span> <span class="p">[</span><span class="mi">1</span><span class="p">,</span> <span class="mi">2</span><span class="p">,</span> <span class="mi">3</span><span class="p">,</span> <span class="mi">4</span><span class="p">]</span>
        <span class="c"># Define a nodally interpolated element field or field component in the</span>
        <span class="c"># element_template. Only Lagrange, simplex and constant basis function types</span>
        <span class="c"># may be used with this function, i.e. where only a simple node value is</span>
        <span class="c"># mapped. Shape must be set before calling this function.  The -1 for the component number</span>
        <span class="c"># defines all components with identical basis and nodal mappings.</span>
        <span class="n">element_template</span><span class="o">.</span><span class="n">defineFieldSimpleNodal</span><span class="p">(</span><span class="n">finite_element_field</span><span class="p">,</span> <span class="o">-</span><span class="mi">1</span><span class="p">,</span> <span class="n">linear_basis</span><span class="p">,</span> <span class="n">node_indexes</span><span class="p">)</span>
                    
        <span class="k">for</span> <span class="n">i</span> <span class="ow">in</span> <span class="nb">range</span><span class="p">(</span><span class="n">element_node_count</span><span class="p">):</span>
            <span class="n">node</span> <span class="o">=</span> <span class="n">nodeset</span><span class="o">.</span><span class="n">findNodeByIdentifier</span><span class="p">(</span><span class="n">i</span><span class="o">+</span><span class="mi">1</span><span class="p">)</span>
            <span class="n">element_template</span><span class="o">.</span><span class="n">setNode</span><span class="p">(</span><span class="n">i</span><span class="o">+</span><span class="mi">1</span><span class="p">,</span> <span class="n">node</span><span class="p">)</span>

        <span class="n">mesh</span><span class="o">.</span><span class="n">defineElement</span><span class="p">(</span><span class="o">-</span><span class="mi">1</span><span class="p">,</span> <span class="n">element_template</span><span class="p">)</span>
        
        <span class="n">field_module</span><span class="o">.</span><span class="n">endChange</span><span class="p">()</span>
</pre></div>
</td></tr></table></div>
<p>We will cover some of the more pertinent parts of this code rather taking it line by line.</p>
<p><strong>Line 12</strong> from the field module we create a finite element field with the desired number of components.
For us the number of components will be used to give us values for a two-dimensional coordinate system.</p>
<p><strong>Line 14</strong> set the name of the finite element field to &#8216;coordinates&#8217;.  We can then search the field module
for this name later on when we require it.</p>
<p><strong>Line 16</strong> by setting the <strong>is managed</strong> flag we are telling the field module to keep this field around for us
and not delete it when it holds the only reference.</p>
<p><strong>Lines 19, 20</strong> there exists a special nodeset named &#8216;cmiss_nodes&#8217; where we can create nodes that can used
for constructing finite elements.  From the nodeset we create a node template for creating the nodes required
for our finite element.</p>
<p><strong>Line 23</strong> we set the finite element field as the field for the nodes to use.  We can add any number of fields
to the node template at this point.</p>
<p><strong>Line 25</strong> create a field cache for storing or retrieving known field values at a location.</p>
<p><strong>Line 31</strong> define the coordinates of the nodes for our finite element.  Because we are goint to define a
square two-dimensional finite element with linear basis functions we will use four distinct nodes.  We have
a range of options open to us here repeated nodes, quadratic basis functions etc. but in this situation we
will use four distinct nodes to describe our finite element.</p>
<p><strong>Lines 33 - 39</strong> we create our nodes from the nodeset by giving them a unique identifier in the set and the
template to create them from.  We also set the value of the field at the node location by first setting the
node into the field cache and then assigning the value of the node coordinate to all items in the field cache.
In this case this is the current node we have just created.</p>
<p><strong>Lines 44 - 48</strong> we want to create a top-level 2D element so we get the two-dimensional mesh.  We could create
a top-level 3D or 1D element similarly.  From the mesh we create an element template and set the element shape to
square.  We also tell the template how many nodes we are going to use for defining elements created from the template.</p>
<p><strong>Line 50</strong> create the element basis function which we are going to use for elements created from this template.</p>
<p><strong>Line 52</strong> define the indexes of the nodes in the element template in, the node index order is important to create
an element.  The nodes must be given so that the lowest xi coordinate varies fastest.  For the square with linear
basis functions we have bottom-left, bottom-right, top-left, top-right ordering.</p>
<p><strong>Line 58</strong> define a simple nodal field on the element template over the finite element field for all components
using a linear basis with node indexes [1, 2, 3, 4].</p>
<p><strong>Lines 60 - 63</strong> we set the nodes from the nodeset into the element template at the given <strong>node index</strong>.</p>
<p><strong>Line 64</strong> define the element automatically generating the integer identifier from the element template.  If we required
a handle to the element we could use the createElement() function from the mesh object.</p>
</div>
<div class="section" id="visualise">
<h2>Visualise<a class="headerlink" href="#visualise" title="Permalink to this headline">¶</a></h2>
<p>Once we have created a finite element we would like to visualise it.  Because we have made a 2D finite
element we can view it using a surface graphic.  Much of this code is the same as we have seen in the
simple axis viewer tutorial so we will only look at the bits that have changed.</p>
<div class="highlight-python"><table class="highlighttable"><tr><td class="linenos"><div class="linenodiv"><pre> 1
 2
 3
 4
 5
 6
 7
 8
 9
10
11
12
13
14
15</pre></div></td><td class="code"><div class="highlight"><pre>        <span class="n">field_module</span> <span class="o">=</span> <span class="n">default_region</span><span class="o">.</span><span class="n">getFieldmodule</span><span class="p">()</span>
        <span class="n">finite_element_field</span> <span class="o">=</span> <span class="n">field_module</span><span class="o">.</span><span class="n">findFieldByName</span><span class="p">(</span><span class="s">&#39;coordinates&#39;</span><span class="p">)</span>
        <span class="c"># Create a surface graphic and set it&#39;s coordinate field to the finite element coordinate field</span>
        <span class="c"># named coordinates</span>
        <span class="n">surface</span> <span class="o">=</span> <span class="n">scene</span><span class="o">.</span><span class="n">createGraphicsSurfaces</span><span class="p">()</span>
        <span class="n">surface</span><span class="o">.</span><span class="n">setCoordinateField</span><span class="p">(</span><span class="n">finite_element_field</span><span class="p">)</span>
        
        <span class="c"># Create point graphics and set the coordinate field to the finite element coordinate field</span>
        <span class="c"># named coordinates</span>
        <span class="n">sphere</span> <span class="o">=</span> <span class="n">scene</span><span class="o">.</span><span class="n">createGraphicsPoints</span><span class="p">()</span>
        <span class="n">sphere</span><span class="o">.</span><span class="n">setCoordinateField</span><span class="p">(</span><span class="n">finite_element_field</span><span class="p">)</span>
        <span class="n">sphere</span><span class="o">.</span><span class="n">setFieldDomainType</span><span class="p">(</span><span class="n">Field</span><span class="o">.</span><span class="n">DOMAIN_TYPE_NODES</span><span class="p">)</span>
        <span class="n">att</span> <span class="o">=</span> <span class="n">sphere</span><span class="o">.</span><span class="n">getGraphicspointattributes</span><span class="p">()</span>
        <span class="n">att</span><span class="o">.</span><span class="n">setGlyphShapeType</span><span class="p">(</span><span class="n">Glyph</span><span class="o">.</span><span class="n">SHAPE_TYPE_SPHERE</span><span class="p">)</span>
        <span class="n">att</span><span class="o">.</span><span class="n">setBaseSize</span><span class="p">([</span><span class="mi">1</span><span class="p">])</span>
</pre></div>
</td></tr></table></div>
<p><strong>Line 1</strong> get the field module for the region.</p>
<p><strong>Line 2</strong> we get the finite element field created in this field module by name.  Alternatively we could
have kept a handle to the field created in create2DFiniteElement().</p>
<p><strong>Line 6</strong> from the scene for the region create a surface graphic.</p>
<p><strong>Line 7</strong> set the coordinate field for the graphic.  The finite element field is defined over the domain of the
finite element, the domain is specified by the nodes we created.</p>
<p><strong>Line 11</strong> from the scene create a graphic points visualisation.</p>
<p><strong>Line 13</strong> set the domain type for the graphic points to be DOMAIN_NODES.</p>
<p><strong>Line 15</strong> set the glyph type to GLYPH_TYPE_SPHERE, note: if we don&#8217;t call defineStandardGlyphs() then we won&#8217;t see the node points.</p>
<p><strong>Line 16</strong> set the base size of the graphic, again note: if we don&#8217;t set the base size we won&#8217;t see the node points</p>
</div>
</div>


          </div>
      </div>
    </div>
      <div class="botnav">
      
        <p>
        «&#160;&#160;<a href="../read_mesh/tutorial">Tutorial Read and View a Mesh</a>
        &#160;&#160;::&#160;&#160;
        <a class="uplink" href="../index">Contents</a>
        &#160;&#160;::&#160;&#160;
        <a href="../materials/tutorial">Tutorial: Materials</a>&#160;&#160;»
        </p>

      </div>
            
		</div><!-- end #main -->

		<div id="sidebar">
<!--#include virtual="/software/zinclibrary/utility-peer-nav.txt" -->    
         <div id="toc">
          <h6><a href="../index"><span>PyZinc v3.0.0 tutorials</span></a></h6>
          <ul>
<li><a class="reference internal" href="#">Tutorial: Finite Element Creation</a><ul>
<li><a class="reference internal" href="#overview">Overview</a></li>
<li><a class="reference internal" href="#initialise">Initialise</a></li>
<li><a class="reference internal" href="#create">Create</a></li>
<li><a class="reference internal" href="#visualise">Visualise</a></li>
</ul>
</li>
</ul>

        </div>
            <!--#include virtual="utility-download.txt" -->

		</div><!-- end #sidebar -->
		
	</article><!-- end .single-project -->
	
</section><!-- end #content -->

<!--#include virtual="/inc/footer.txt" -->
