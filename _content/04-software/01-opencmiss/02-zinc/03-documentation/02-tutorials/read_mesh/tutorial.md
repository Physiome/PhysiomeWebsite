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
            
  <div class="section" id="tutorial-read-and-view-a-mesh">
<h1>Tutorial: Read and View a Mesh<a class="headerlink" href="#tutorial-read-and-view-a-mesh" title="Permalink to this headline">¶</a></h1>
<p>This example loads a deforming heart model and allows you to vary time with a slider to animate its deformation. You can rotate, pan and zoom the model in the window using the same controls as the Cmgui application (which uses Zinc under the hood!).</p>
<p>It uses the <a class="reference external" href="https://github.com/OpenCMISS-Zinc/ZincPythonUtilities/">Zinc Widget</a> which takes care of graphics rendering so you only need to take care of the parts that are special to your application.</p>
<p>Topics which this example show include:</p>
<ul class="simple">
<li>Setting up the Zinc Context</li>
<li>Configuring the Zinc Widget</li>
<li>Reading a time-varying model from EX files using a stream information object</li>
<li>Making surface and points graphics.</li>
</ul>
<p>The souce code used in this tutorial is available from the <a class="reference external" href="https://svn.physiomeproject.org/svn/cmiss/zinc/bindings/examples/trunk/python/read_mesh/">physiome
project svn server</a>.</p>
<div class="figure align-center">
<img alt="/assets/img/software/zinclibrary/tutorials/read_mesh.png" src="/assets/img/software/zinclibrary/tutorials/read_mesh.png" />
</div>
<div class="section" id="overview">
<h2>Overview<a class="headerlink" href="#overview" title="Permalink to this headline">¶</a></h2>
<p>This example comes with a Qt user interface layout already defined in the read_mesh.ui file. It consists of a Zinc Widget which handles the graphics, a slider control and two buttons &#8216;Quit&#8217; and &#8216;Custom&#8217;. When you run the example with &#8216;python read_mesh.py&#8217; you can slide the time slider to vary time and animate the model, which is initially drawn with surface graphics. Clicking on the Custom button adds gold points at the nodes.</p>
</div>
<div class="section" id="initialising-your-application">
<h2>Initialising your application<a class="headerlink" href="#initialising-your-application" title="Permalink to this headline">¶</a></h2>
<p>The Read Mesh dialog is derived from QWidget. Following is its initialisation method:</p>
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
40</pre></div></td><td class="code"><div class="highlight"><pre>    <span class="k">def</span> <span class="nf">__init__</span><span class="p">(</span><span class="bp">self</span><span class="p">,</span> <span class="n">parent</span><span class="o">=</span><span class="bp">None</span><span class="p">):</span>
        <span class="sd">&#39;&#39;&#39;</span>
<span class="sd">        Initiaise the ReadMeshDlg first calling the QWidget __init__ function.</span>
<span class="sd">        &#39;&#39;&#39;</span>
        <span class="n">QtGui</span><span class="o">.</span><span class="n">QWidget</span><span class="o">.</span><span class="n">__init__</span><span class="p">(</span><span class="bp">self</span><span class="p">,</span> <span class="n">parent</span><span class="p">)</span>

        <span class="c"># create instance of Zinc Context from which all other objects are obtained</span>
        <span class="bp">self</span><span class="o">.</span><span class="n">_context</span> <span class="o">=</span> <span class="n">ZincContext</span><span class="p">(</span><span class="s">&quot;ModelViewer&quot;</span><span class="p">);</span>
        <span class="c"># set up standard materials and glyphs so we can use them elsewhere</span>
        <span class="bp">self</span><span class="o">.</span><span class="n">_materialmodule</span> <span class="o">=</span> <span class="bp">self</span><span class="o">.</span><span class="n">_context</span><span class="o">.</span><span class="n">getMaterialmodule</span><span class="p">()</span>
        <span class="bp">self</span><span class="o">.</span><span class="n">_materialmodule</span><span class="o">.</span><span class="n">defineStandardMaterials</span><span class="p">()</span>
        <span class="bp">self</span><span class="o">.</span><span class="n">_glyphmodule</span> <span class="o">=</span> <span class="bp">self</span><span class="o">.</span><span class="n">_context</span><span class="o">.</span><span class="n">getGlyphmodule</span><span class="p">()</span>
        <span class="bp">self</span><span class="o">.</span><span class="n">_glyphmodule</span><span class="o">.</span><span class="n">defineStandardGlyphs</span><span class="p">()</span>

        <span class="c"># improve tessellation quality</span>
        <span class="n">tessellationmodule</span> <span class="o">=</span> <span class="bp">self</span><span class="o">.</span><span class="n">_context</span><span class="o">.</span><span class="n">getTessellationmodule</span><span class="p">()</span>
        <span class="n">defaultTessellation</span> <span class="o">=</span> <span class="n">tessellationmodule</span><span class="o">.</span><span class="n">getDefaultTessellation</span><span class="p">()</span>
        <span class="n">defaultTessellation</span><span class="o">.</span><span class="n">setMinimumDivisions</span><span class="p">([</span><span class="mi">6</span><span class="p">])</span>

        <span class="n">default_region</span> <span class="o">=</span> <span class="bp">self</span><span class="o">.</span><span class="n">_context</span><span class="o">.</span><span class="n">getDefaultRegion</span><span class="p">()</span>
        <span class="n">timekeepermodule</span> <span class="o">=</span> <span class="bp">self</span><span class="o">.</span><span class="n">_context</span><span class="o">.</span><span class="n">getTimekeepermodule</span><span class="p">()</span>
        <span class="bp">self</span><span class="o">.</span><span class="n">_timekeeper</span> <span class="o">=</span> <span class="n">timekeepermodule</span><span class="o">.</span><span class="n">getDefaultTimekeeper</span><span class="p">()</span>
        
        <span class="c"># create region to load mesh into</span>
        <span class="bp">self</span><span class="o">.</span><span class="n">_region</span> <span class="o">=</span> <span class="n">default_region</span><span class="o">.</span><span class="n">createChild</span><span class="p">(</span><span class="s">&#39;myregion&#39;</span><span class="p">)</span>

        <span class="c"># read the model and create some graphics to see it</span>
        <span class="bp">self</span><span class="o">.</span><span class="n">readMesh</span><span class="p">()</span>
        <span class="bp">self</span><span class="o">.</span><span class="n">createSurfaceGraphics</span><span class="p">()</span>

        <span class="c"># Using composition to include the visual element of the GUI.</span>
        <span class="bp">self</span><span class="o">.</span><span class="n">ui</span> <span class="o">=</span> <span class="n">Ui_ReadMeshDlg</span><span class="p">()</span>
        <span class="bp">self</span><span class="o">.</span><span class="n">ui</span><span class="o">.</span><span class="n">setupUi</span><span class="p">(</span><span class="bp">self</span><span class="p">)</span>
        <span class="c"># Must pass the context to the ZincWidget for it to work</span>
        <span class="bp">self</span><span class="o">.</span><span class="n">ui</span><span class="o">.</span><span class="n">_zincwidget</span><span class="o">.</span><span class="n">setContext</span><span class="p">(</span><span class="bp">self</span><span class="o">.</span><span class="n">_context</span><span class="p">)</span>
        <span class="bp">self</span><span class="o">.</span><span class="n">setWindowIcon</span><span class="p">(</span><span class="n">QtGui</span><span class="o">.</span><span class="n">QIcon</span><span class="p">(</span><span class="s">&quot;:/cmiss_icon.ico&quot;</span><span class="p">))</span>

        <span class="c"># set up callbacks for changes in the time slider</span>
        <span class="bp">self</span><span class="o">.</span><span class="n">ui</span><span class="o">.</span><span class="n">timeSlider</span><span class="o">.</span><span class="n">valueChanged</span><span class="o">.</span><span class="n">connect</span><span class="p">(</span><span class="bp">self</span><span class="o">.</span><span class="n">timeChanged</span><span class="p">)</span>
        <span class="bp">self</span><span class="o">.</span><span class="n">resize</span><span class="p">(</span><span class="mi">620</span><span class="p">,</span> <span class="mi">440</span><span class="p">)</span>
</pre></div>
</td></tr></table></div>
<p>Most of what is being done here is explained in the comments. Some parts are initialising member variables for convenient use later; by convention, these begin with an underscore. This example is somewhat contrived as it reads exactly one mesh and sets up graphics appropriate to it; in a real application one may have a file dialog to choose input files.</p>
</div>
<div class="section" id="reading-a-time-varying-model">
<h2>Reading a time-varying model<a class="headerlink" href="#reading-a-time-varying-model" title="Permalink to this headline">¶</a></h2>
<div class="highlight-python"><table class="highlighttable"><tr><td class="linenos"><div class="linenodiv"><pre>1
2
3
4
5
6
7
8</pre></div></td><td class="code"><div class="highlight"><pre>    <span class="k">def</span> <span class="nf">readMesh</span><span class="p">(</span><span class="bp">self</span><span class="p">):</span>
        <span class="n">sir</span> <span class="o">=</span> <span class="bp">self</span><span class="o">.</span><span class="n">_region</span><span class="o">.</span><span class="n">createStreaminformationRegion</span><span class="p">()</span>
        <span class="k">for</span> <span class="n">i</span> <span class="ow">in</span> <span class="nb">range</span><span class="p">(</span><span class="mi">51</span><span class="p">):</span>
            <span class="n">filename</span> <span class="o">=</span> <span class="s">&#39;mesh_data/heart{:0&gt;4}.exnode&#39;</span><span class="o">.</span><span class="n">format</span><span class="p">(</span><span class="n">i</span><span class="p">)</span>
            <span class="n">fr</span> <span class="o">=</span> <span class="n">sir</span><span class="o">.</span><span class="n">createStreamresourceFile</span><span class="p">(</span><span class="n">filename</span><span class="p">)</span>
            <span class="n">sir</span><span class="o">.</span><span class="n">setResourceAttributeReal</span><span class="p">(</span><span class="n">fr</span><span class="p">,</span> <span class="n">StreaminformationRegion</span><span class="o">.</span><span class="n">ATTRIBUTE_TIME</span><span class="p">,</span> <span class="n">i</span><span class="o">/</span><span class="mf">50.0</span><span class="p">)</span>
        <span class="n">sir</span><span class="o">.</span><span class="n">createStreamresourceFile</span><span class="p">(</span><span class="s">&#39;mesh_data/heart.exelem&#39;</span><span class="p">)</span>
        <span class="bp">self</span><span class="o">.</span><span class="n">_region</span><span class="o">.</span><span class="n">read</span><span class="p">(</span><span class="n">sir</span><span class="p">)</span>
</pre></div>
</td></tr></table></div>
<p>This example uses a stream information to read 51 node files from a time-varying solution, and associates time with each file. The single element file is added to the information and these are read together into the region.</p>
</div>
<div class="section" id="creating-surface-graphics">
<h2>Creating surface graphics<a class="headerlink" href="#creating-surface-graphics" title="Permalink to this headline">¶</a></h2>
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
15</pre></div></td><td class="code"><div class="highlight"><pre>    <span class="k">def</span> <span class="nf">createSurfaceGraphics</span><span class="p">(</span><span class="bp">self</span><span class="p">):</span>
        
        <span class="n">scene</span> <span class="o">=</span> <span class="bp">self</span><span class="o">.</span><span class="n">_region</span><span class="o">.</span><span class="n">getScene</span><span class="p">()</span>
        <span class="n">field_module</span> <span class="o">=</span> <span class="bp">self</span><span class="o">.</span><span class="n">_region</span><span class="o">.</span><span class="n">getFieldmodule</span><span class="p">()</span>

        <span class="c"># We use the beginChange and endChange to wrap any immediate changes and will</span>
        <span class="c"># streamline the rendering of the scene.</span>
        <span class="n">scene</span><span class="o">.</span><span class="n">beginChange</span><span class="p">()</span>
        
        <span class="n">surface</span> <span class="o">=</span> <span class="n">scene</span><span class="o">.</span><span class="n">createGraphicsSurfaces</span><span class="p">()</span>
        <span class="n">coordinate_field</span> <span class="o">=</span> <span class="n">field_module</span><span class="o">.</span><span class="n">findFieldByName</span><span class="p">(</span><span class="s">&#39;coordinates&#39;</span><span class="p">)</span>
        <span class="n">surface</span><span class="o">.</span><span class="n">setCoordinateField</span><span class="p">(</span><span class="n">coordinate_field</span><span class="p">)</span>
        <span class="n">surface</span><span class="o">.</span><span class="n">setExterior</span><span class="p">(</span><span class="bp">True</span><span class="p">)</span> <span class="c"># show only exterior surfaces</span>
        <span class="c"># Let the scene render the scene.</span>
        <span class="n">scene</span><span class="o">.</span><span class="n">endChange</span><span class="p">()</span>
</pre></div>
</td></tr></table></div>
<p>With one minor exception (Points on the simple &#8216;point&#8217; domain), every graphics object needs a coordinate field to give its coordinates, and here we find this by name &#8216;coordinates&#8217; in the fieldmodule which manages fields in our region.</p>
</div>
<div class="section" id="updating-time">
<h2>Updating time<a class="headerlink" href="#updating-time" title="Permalink to this headline">¶</a></h2>
<div class="highlight-python"><table class="highlighttable"><tr><td class="linenos"><div class="linenodiv"><pre>1
2</pre></div></td><td class="code"><div class="highlight"><pre>    <span class="k">def</span> <span class="nf">timeChanged</span><span class="p">(</span><span class="bp">self</span><span class="p">,</span> <span class="n">value</span><span class="p">):</span>
        <span class="bp">self</span><span class="o">.</span><span class="n">_timekeeper</span><span class="o">.</span><span class="n">setTime</span><span class="p">(</span><span class="n">value</span><span class="o">/</span><span class="mf">100.0</span><span class="p">)</span>
</pre></div>
</td></tr></table></div>
<p>The timeChanged() method was set up in the initialise function. It takes the time from the slider widget and sets it in Zinc&#8217;s default timekeeper object, so zinc knows which time to generate graphics at. Note that the Zinc Widget is automatically informed that the graphics have been changed, and redraws itself.</p>
</div>
<div class="section" id="the-custom-button">
<h2>The Custom button<a class="headerlink" href="#the-custom-button" title="Permalink to this headline">¶</a></h2>
<div class="highlight-python"><table class="highlighttable"><tr><td class="linenos"><div class="linenodiv"><pre>1
2
3
4
5</pre></div></td><td class="code"><div class="highlight"><pre>    <span class="k">def</span> <span class="nf">customButton</span><span class="p">(</span><span class="bp">self</span><span class="p">):</span>
        <span class="sd">&#39;&#39;&#39;</span>
<span class="sd">        Open model and visualise lines.</span>
<span class="sd">        &#39;&#39;&#39;</span>
        <span class="bp">self</span><span class="o">.</span><span class="n">createPointGraphics</span><span class="p">()</span>
</pre></div>
</td></tr></table></div>
<p>This method is called when the Custom button is clicked, and is currently set to add points graphics.</p>
</div>
<div class="section" id="creating-node-points-graphics">
<h2>Creating node points graphics<a class="headerlink" href="#creating-node-points-graphics" title="Permalink to this headline">¶</a></h2>
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
23</pre></div></td><td class="code"><div class="highlight"><pre>    <span class="k">def</span> <span class="nf">createPointGraphics</span><span class="p">(</span><span class="bp">self</span><span class="p">):</span>

        <span class="n">scene</span> <span class="o">=</span> <span class="bp">self</span><span class="o">.</span><span class="n">_region</span><span class="o">.</span><span class="n">getScene</span><span class="p">()</span>
        <span class="n">graphicsName</span> <span class="o">=</span> <span class="s">&quot;points&quot;</span>
        <span class="c"># only create points if we don&#39;t already have them</span>
        <span class="n">existingGraphics</span> <span class="o">=</span> <span class="n">scene</span><span class="o">.</span><span class="n">findGraphicsByName</span><span class="p">(</span><span class="n">graphicsName</span><span class="p">)</span>
        <span class="k">if</span> <span class="n">existingGraphics</span><span class="o">.</span><span class="n">isValid</span><span class="p">():</span>
            <span class="k">return</span>

        <span class="n">field_module</span> <span class="o">=</span> <span class="bp">self</span><span class="o">.</span><span class="n">_region</span><span class="o">.</span><span class="n">getFieldmodule</span><span class="p">()</span>
        <span class="n">scene</span><span class="o">.</span><span class="n">beginChange</span><span class="p">()</span>
        <span class="c"># create points at nodes shown with gold spheres</span>
        <span class="n">points</span> <span class="o">=</span> <span class="n">scene</span><span class="o">.</span><span class="n">createGraphicsPoints</span><span class="p">()</span>
        <span class="n">points</span><span class="o">.</span><span class="n">setName</span><span class="p">(</span><span class="n">graphicsName</span><span class="p">)</span>
        <span class="n">coordinate_field</span> <span class="o">=</span> <span class="n">field_module</span><span class="o">.</span><span class="n">findFieldByName</span><span class="p">(</span><span class="s">&#39;coordinates&#39;</span><span class="p">)</span>
        <span class="n">points</span><span class="o">.</span><span class="n">setFieldDomainType</span><span class="p">(</span><span class="n">Field</span><span class="o">.</span><span class="n">DOMAIN_TYPE_NODES</span><span class="p">)</span> <span class="c"># show points at nodes</span>
        <span class="n">points</span><span class="o">.</span><span class="n">setCoordinateField</span><span class="p">(</span><span class="n">coordinate_field</span><span class="p">)</span>
        <span class="n">pointattr</span> <span class="o">=</span> <span class="n">points</span><span class="o">.</span><span class="n">getGraphicspointattributes</span><span class="p">()</span>
        <span class="n">pointattr</span><span class="o">.</span><span class="n">setGlyphShapeType</span><span class="p">(</span><span class="n">Glyph</span><span class="o">.</span><span class="n">SHAPE_TYPE_SPHERE</span><span class="p">)</span>
        <span class="n">pointattr</span><span class="o">.</span><span class="n">setBaseSize</span><span class="p">([</span><span class="mf">2.0</span><span class="p">])</span>
        <span class="n">gold</span> <span class="o">=</span> <span class="bp">self</span><span class="o">.</span><span class="n">_materialmodule</span><span class="o">.</span><span class="n">findMaterialByName</span><span class="p">(</span><span class="s">&quot;gold&quot;</span><span class="p">)</span>
        <span class="n">points</span><span class="o">.</span><span class="n">setMaterial</span><span class="p">(</span><span class="n">gold</span><span class="p">)</span>
        <span class="n">scene</span><span class="o">.</span><span class="n">endChange</span><span class="p">()</span>
</pre></div>
</td></tr></table></div>
<p>Points have a lot more options than surfaces, since you need to decide which domain to view points on, the glyph (here: a sphere) to visualise each point, scaling of the glyph, and more. Point-specific attributes of the glyph are set by the Graphicspointattributes object, and include methods for setting many other scaling options, adding labels and setting the font.</p>
</div>
<div class="section" id="extending-this-example">
<h2>Extending this example<a class="headerlink" href="#extending-this-example" title="Permalink to this headline">¶</a></h2>
<p>As an exercise you may wish to make your own visualisation or other change, perhaps adapting the customButton() method to do something different. If you have access to QtDesigner you may wish to add more buttons and controls, add signals (actions) and slots (methods on your object) to make them perform useful tasks.</p>
</div>
</div>


          </div>
      </div>
    </div>
      <div class="botnav">
      
        <p>
        «&#160;&#160;<a href="../axis_viewer/tutorial">Tutorial: Axis Viewer</a>
        &#160;&#160;::&#160;&#160;
        <a class="uplink" href="../index">Contents</a>
        &#160;&#160;::&#160;&#160;
        <a href="../finite_element_creation/tutorial">Tutorial: Finite Element Creation</a>&#160;&#160;»
        </p>

      </div>
            
		</div><!-- end #main -->

		<div id="sidebar">
<!--#include virtual="/software/zinclibrary/utility-peer-nav.txt" -->    
         <div id="toc">
          <h6><a href="../index"><span>PyZinc v3.0.0 tutorials</span></a></h6>
          <ul>
<li><a class="reference internal" href="#">Tutorial: Read and View a Mesh</a><ul>
<li><a class="reference internal" href="#overview">Overview</a></li>
<li><a class="reference internal" href="#initialising-your-application">Initialising your application</a></li>
<li><a class="reference internal" href="#reading-a-time-varying-model">Reading a time-varying model</a></li>
<li><a class="reference internal" href="#creating-surface-graphics">Creating surface graphics</a></li>
<li><a class="reference internal" href="#updating-time">Updating time</a></li>
<li><a class="reference internal" href="#the-custom-button">The Custom button</a></li>
<li><a class="reference internal" href="#creating-node-points-graphics">Creating node points graphics</a></li>
<li><a class="reference internal" href="#extending-this-example">Extending this example</a></li>
</ul>
</li>
</ul>

        </div>
            <!--#include virtual="utility-download.txt" -->

		</div><!-- end #sidebar -->
		
	</article><!-- end .single-project -->
	
</section><!-- end #content -->

<!--#include virtual="/inc/footer.txt" -->
