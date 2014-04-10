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
            
  <div class="section" id="tutorial-1-axis-viewer">
<h1>Tutorial 1 - Axis Viewer<a class="headerlink" href="#tutorial-1-axis-viewer" title="Permalink to this headline">¶</a></h1>
<p>The Axis Viewer is a very simple application designed to illustrate the fundamentals of using PyZinc.  The application illustrates how to</p>
<ul class="simple">
<li>Set up a Context</li>
<li>Create a scene</li>
<li>Visualise some graphics</li>
<li>Handle mouse input.</li>
</ul>
<p>This tutorial also discusses issues that are related to using PySide or PyQt4 with PyZinc.  The souce code used in this tutorial is available from the <a class="reference external" href="https://svn.physiomeproject.org/svn/cmiss/zinc/bindings/examples/trunk/python/axis_viewer/">physiome
project svn server</a>.</p>
<div class="figure align-center">
<a class="reference internal image-reference" href="/assets/img/software/zinclibrary/tutorials/axis_viewer.png"><img alt="/assets/img/software/zinclibrary/tutorials/axis_viewer.png" src="/assets/img/software/zinclibrary/tutorials/axis_viewer.png" style="width: 636px; height: 471px;" /></a>
</div>
<div class="section" id="overview">
<h2>Overview<a class="headerlink" href="#overview" title="Permalink to this headline">¶</a></h2>
<p>The axis viewer uses PySide or PyQt4 to create a simple application that consists of an OpenGL enabled widget and a quit button.
The OpenGL widget is used by the Zinc library to render a basic scene consisting of a single point graphic.
The Zinc library has a standard input handling routine that is used to show how the scene viewport can be manipulated.
In order to visualise the effects of mouse movement the point graphic is defined to use the inbuilt glyph type &#8216;axes_solid&#8217;.</p>
<p><strong>Note:</strong></p>
<blockquote>
<div>This example uses either PySide or PyQt4 depending on which one it successfully imports.  These two different Python bindings for the Qt libraries are,
for this simple example, interchangeable.  However this is not always the case for more complicated applications.  This web page shows the differences
between the two <a class="reference external" href="http://qt-project.org/wiki/Differences_Between_PySide_and_PyQt">http://qt-project.org/wiki/Differences_Between_PySide_and_PyQt</a></div></blockquote>
</div>
<div class="section" id="the-entry-point">
<h2>The Entry Point<a class="headerlink" href="#the-entry-point" title="Permalink to this headline">¶</a></h2>
<p>In this first tutorial we start at the entry point to the application which is in the axis_viewer.py file.  When we
call this file directly (and not imported as a module) the __name__ variable is set to __main__ and we can setup and
initialise the application.  We do this so that we can mimic C/C++ and call our &#8216;main()&#8217; function as the entry point of the
application.  In the &#8216;main&#8217; function the program initialises the application-wide resources and starts the event loop.  Here is the code.</p>
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
12</pre></div></td><td class="code"><div class="highlight"><pre><span class="k">def</span> <span class="nf">main</span><span class="p">(</span><span class="n">argv</span><span class="p">):</span>
    <span class="sd">&#39;&#39;&#39;</span>
<span class="sd">    The entry point for the application, handle application arguments and initialise the </span>
<span class="sd">    GUI.</span>
<span class="sd">    &#39;&#39;&#39;</span>
    
    <span class="n">app</span> <span class="o">=</span> <span class="n">QtGui</span><span class="o">.</span><span class="n">QApplication</span><span class="p">(</span><span class="n">argv</span><span class="p">)</span>

    <span class="n">w</span> <span class="o">=</span> <span class="n">AxisViewerDlg</span><span class="p">()</span>
    <span class="n">w</span><span class="o">.</span><span class="n">show</span><span class="p">()</span>

    <span class="n">sys</span><span class="o">.</span><span class="n">exit</span><span class="p">(</span><span class="n">app</span><span class="o">.</span><span class="n">exec_</span><span class="p">())</span>
</pre></div>
</td></tr></table></div>
<p>On line 7 we create a QApplication object which controls the main flow of the program.  Among other things
it also contains the main event loop.  An application has <strong>precisely</strong> one QApplication object.  After this we create
an instance of the AxisViewerDlg (line 9).  The AxisViewerDlg is the visual element in the GUI and defines the main
window of the application.  Next we show the main window (line 10) and then start the execution of the main event loop (line 12).
The event loop handles the events that are generated when the program is running.  Examples of events are mouse presses and
key strokes.</p>
</div>
<div class="section" id="something-to-look-at">
<h2>Something to Look At<a class="headerlink" href="#something-to-look-at" title="Permalink to this headline">¶</a></h2>
<p>The AxisViewerDlg class subclasses QWidget and uses composition to include
the ui part of the application.  The ui part is created using qt-designer and
converted to a python module using a Python Qt ui compiler.:</p>
<div class="highlight-python"><div class="highlight"><pre># PySide
pyside-uic -o axis_viewer_ui_pyside.py axis_viewer.ui
# PyQt4
pyuic4 -o axis_viewer_ui_pyqt4.py axis_viewer.ui
</pre></div>
</div>
<p>add &#8216;&#8211;from-imports&#8217; if targeting Python 3.0 or later in the above command.</p>
<p>We also set an application icon here which is defined in a resource file
using qt-designer and compiled into a python resource using a Python Qt resource compiler.:</p>
<div class="highlight-python"><div class="highlight"><pre># PySide
pyside-rcc -py3 -o icons_rc.py icons.qrc
# PyQt4
pyrcc4 -py3 -o icons_rc.py icons.qrc
</pre></div>
</div>
<p>The AxisViewerDlg uses qt-designer to promote a widget to a ZincWidget which we define in
zincwidget.py.  For more information on promoting widgets in qt-designer read the document
at this location <a class="reference external" href="http://qt-project.org/doc/qt-4.8/designer-using-custom-widgets.html">http://qt-project.org/doc/qt-4.8/designer-using-custom-widgets.html</a>.</p>
</div>
<div class="section" id="setting-the-scene">
<h2>Setting the Scene<a class="headerlink" href="#setting-the-scene" title="Permalink to this headline">¶</a></h2>
<p>The ZincWidget class is sub-classed from QGLWidget.  QGLWidget is a widget for rendering OpenGL graphics.
The QGLWidget sets up the OpenGL context that is required for the Zinc library to draw into.  The ZincWidget
will be the view widget into our Zinc library scene.</p>
<p>In the initialisation of the class we call __init__ of the super class QGLWidget.  Then we create a Zinc context,
we keep a handle to this context until we are no longer using objects obtained from it (either directly or indirectly).
If we don&#8217;t all the resources associated with the context will be released and any new actions performed on objects from
the context will be invalid resulting in undefined behaviour.  This means that the Zinc context handle should be the last
handle we let go of.</p>
<p>note:</p>
<div class="highlight-python"><div class="highlight"><pre>We use the context to create all other Zinc objects either directly or indirectly.
</pre></div>
</div>
<p>In the initialisation of the class we also create a class member for a handle to the scene viewer.  It is advisable
to keep a handle to the scene viewer, from this handle we can (obviously) access all the objects required to render (view) our scene.</p>
<div class="highlight-python"><table class="highlighttable"><tr><td class="linenos"><div class="linenodiv"><pre>1
2
3
4
5
6
7
8</pre></div></td><td class="code"><div class="highlight"><pre>    <span class="k">def</span> <span class="nf">__init__</span><span class="p">(</span><span class="bp">self</span><span class="p">,</span> <span class="n">parent</span> <span class="o">=</span> <span class="bp">None</span><span class="p">):</span>
        <span class="sd">&#39;&#39;&#39;</span>
<span class="sd">        Call the super class init functions, create a Zinc context and set the scene viewer handle to None.</span>
<span class="sd">        &#39;&#39;&#39;</span>
        <span class="n">QtOpenGL</span><span class="o">.</span><span class="n">QGLWidget</span><span class="o">.</span><span class="n">__init__</span><span class="p">(</span><span class="bp">self</span><span class="p">,</span> <span class="n">parent</span><span class="p">)</span>
        <span class="c"># Create a Zinc context from which all other objects can be derived either directly or indirectly.</span>
        <span class="bp">self</span><span class="o">.</span><span class="n">_context</span> <span class="o">=</span> <span class="n">Context</span><span class="p">(</span><span class="s">&quot;axisviewer&quot;</span><span class="p">)</span>
        <span class="bp">self</span><span class="o">.</span><span class="n">_scene_viewer</span> <span class="o">=</span> <span class="bp">None</span>
</pre></div>
</td></tr></table></div>
<p>We implement the initializeGL() function to set up the scene we want to show.  Here is the code:</p>
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
63
64</pre></div></td><td class="code"><div class="highlight"><pre>    <span class="k">def</span> <span class="nf">initializeGL</span><span class="p">(</span><span class="bp">self</span><span class="p">):</span>
        <span class="sd">&#39;&#39;&#39;</span>
<span class="sd">        Initialise the Zinc scene for drawing the axis glyph at a point.  </span>
<span class="sd">        &#39;&#39;&#39;</span>
        
        <span class="c"># Get the default region to create a point in.</span>
        <span class="n">default_region</span> <span class="o">=</span> <span class="bp">self</span><span class="o">.</span><span class="n">_context</span><span class="o">.</span><span class="n">getDefaultRegion</span><span class="p">()</span>

        <span class="c"># From the graphics module get the scene viewer module.</span>
        <span class="n">scene_viewer_module</span> <span class="o">=</span> <span class="bp">self</span><span class="o">.</span><span class="n">_context</span><span class="o">.</span><span class="n">getSceneviewermodule</span><span class="p">()</span>
        
        <span class="c"># From the scene viewer module we can create a scene viewer, we set up the </span>
        <span class="c"># scene viewer to have the same OpenGL properties as the QGLWidget.</span>
        <span class="bp">self</span><span class="o">.</span><span class="n">_scene_viewer</span> <span class="o">=</span> <span class="n">scene_viewer_module</span><span class="o">.</span><span class="n">createSceneviewer</span><span class="p">(</span><span class="n">Sceneviewer</span><span class="o">.</span><span class="n">BUFFERING_MODE_DOUBLE</span><span class="p">,</span> <span class="n">Sceneviewer</span><span class="o">.</span><span class="n">STEREO_MODE_DEFAULT</span><span class="p">)</span>
        
        <span class="c"># Get the glyph module from the graphics module and define the standard glyphs</span>
        <span class="n">glyph_module</span> <span class="o">=</span> <span class="bp">self</span><span class="o">.</span><span class="n">_context</span><span class="o">.</span><span class="n">getGlyphmodule</span><span class="p">()</span>
        <span class="n">glyph_module</span><span class="o">.</span><span class="n">defineStandardGlyphs</span><span class="p">()</span>
        
        <span class="c"># Once the scenes have been enabled for a region tree you can get a valid </span>
        <span class="c"># handle for a scene and then populate the scene with graphics.</span>
        <span class="n">scene</span> <span class="o">=</span> <span class="n">default_region</span><span class="o">.</span><span class="n">getScene</span><span class="p">()</span>
        
        <span class="c"># We use the beginChange and endChange to wrap any immediate changes and will</span>
        <span class="c"># streamline the rendering of the scene.</span>
        <span class="n">scene</span><span class="o">.</span><span class="n">beginChange</span><span class="p">()</span>
        
        <span class="c"># Create a filter for visibility flags which will allow us to see our graphic.  By default graphics</span>
        <span class="n">filter_module</span> <span class="o">=</span> <span class="bp">self</span><span class="o">.</span><span class="n">_context</span><span class="o">.</span><span class="n">getScenefiltermodule</span><span class="p">()</span>
        <span class="c"># are created with their visibility flags set to on (or true).</span>
        <span class="n">graphics_filter</span> <span class="o">=</span> <span class="n">filter_module</span><span class="o">.</span><span class="n">createScenefilterVisibilityFlags</span><span class="p">()</span>
        
        <span class="c"># Set the graphics filter for the scene viewer otherwise nothing will be visible.</span>
        <span class="bp">self</span><span class="o">.</span><span class="n">_scene_viewer</span><span class="o">.</span><span class="n">setScenefilter</span><span class="p">(</span><span class="n">graphics_filter</span><span class="p">)</span>
        
        <span class="c"># Create a graphic point in our scene and set it&#39;s glyph type to axes.</span>
        <span class="n">graphic</span> <span class="o">=</span> <span class="n">scene</span><span class="o">.</span><span class="n">createGraphicsPoints</span><span class="p">()</span>
        <span class="c"># When creating a generic point graphic as we are here we don&#39;t need to </span>
        <span class="c"># specify the domain, but usually you would for example.</span>
        <span class="c">#graphic.setDomainType(Field.DOMAIN_TYPE_POINT)</span>
        
        <span class="c"># Also we would normally be required to set the coordinate field for the graphic</span>
        <span class="c"># but for the special case of the graphic point the location is evaluated as</span>
        <span class="c"># (0, 0, 0) which is acceptable for this simple case.  Note that in this simple example we</span>
        <span class="c"># haven&#39;t even created a coordinate field to set.</span>
        <span class="c">#graphic.setCoordinateField(coordinate_field)</span>
        
        <span class="c"># The glyph type is an attribute of any point graphic type so to set it we </span>
        <span class="c"># must first get the point attributes</span>
        <span class="n">attributes</span> <span class="o">=</span> <span class="n">graphic</span><span class="o">.</span><span class="n">getGraphicspointattributes</span><span class="p">()</span>
        <span class="n">attributes</span><span class="o">.</span><span class="n">setGlyphShapeType</span><span class="p">(</span><span class="n">Glyph</span><span class="o">.</span><span class="n">SHAPE_TYPE_AXES_SOLID</span><span class="p">)</span>
        <span class="c"># We must set the base size of the graphic, if you comment out this line</span>
        <span class="c"># then nothing will be visible as the default base size is 0.</span>
        <span class="n">attributes</span><span class="o">.</span><span class="n">setBaseSize</span><span class="p">([</span><span class="mi">1</span><span class="p">])</span>
        <span class="c"># Set the scene to our scene viewer.</span>
        <span class="bp">self</span><span class="o">.</span><span class="n">_scene_viewer</span><span class="o">.</span><span class="n">setScene</span><span class="p">(</span><span class="n">scene</span><span class="p">)</span>

        <span class="c"># Let the rendition render the scene.</span>
        <span class="n">scene</span><span class="o">.</span><span class="n">endChange</span><span class="p">()</span>
        
        <span class="c"># Set the zinc callback so that we are informed of changes to the scene</span>
        <span class="bp">self</span><span class="o">.</span><span class="n">_scene_viewer_notifier</span> <span class="o">=</span> <span class="bp">self</span><span class="o">.</span><span class="n">_scene_viewer</span><span class="o">.</span><span class="n">createSceneviewernotifier</span><span class="p">()</span>
        <span class="bp">self</span><span class="o">.</span><span class="n">_scene_viewer_notifier</span><span class="o">.</span><span class="n">setCallback</span><span class="p">(</span><span class="bp">self</span><span class="o">.</span><span class="n">_zincCallback</span><span class="p">)</span>
        
</pre></div>
</td></tr></table></div>
<p>This function is called once before resizeGL() or paintGL() is called.  At this point the scene consisting of a single point
shown using the axes solid glyph has been created.  There are other default glyphs that exist and can be used for representing graphic
points and these can be found in the Glyph class.  For this tutorial though we use the axes solid glyph to show the effect of mouse interaction
with the Zinc scene.  The resizeGL() and paintGL() are very simple functions and are given here:</p>
<div class="highlight-python"><table class="highlighttable"><tr><td class="linenos"><div class="linenodiv"><pre>1
2
3
4
5
6
7
8</pre></div></td><td class="code"><div class="highlight"><pre>    <span class="k">def</span> <span class="nf">paintGL</span><span class="p">(</span><span class="bp">self</span><span class="p">):</span>
        <span class="sd">&#39;&#39;&#39;</span>
<span class="sd">        Render the scene for this scene viewer.  The QGLWidget has already set up the</span>
<span class="sd">        correct OpenGL buffer for us so all we need do is render into it.  The scene viewer</span>
<span class="sd">        will clear the background so any OpenGL drawing of your own needs to go after this</span>
<span class="sd">        API call.</span>
<span class="sd">        &#39;&#39;&#39;</span>
        <span class="bp">self</span><span class="o">.</span><span class="n">_scene_viewer</span><span class="o">.</span><span class="n">renderScene</span><span class="p">()</span>
</pre></div>
</td></tr></table></div>
<p>We can see here in paintGL(), on line 8, that we simply need to tell the scene viewer to render the scene.</p>
<div class="highlight-python"><table class="highlighttable"><tr><td class="linenos"><div class="linenodiv"><pre>1
2
3
4
5</pre></div></td><td class="code"><div class="highlight"><pre>    <span class="k">def</span> <span class="nf">resizeGL</span><span class="p">(</span><span class="bp">self</span><span class="p">,</span> <span class="n">width</span><span class="p">,</span> <span class="n">height</span><span class="p">):</span>
        <span class="sd">&#39;&#39;&#39;</span>
<span class="sd">        Respond to widget resize events.</span>
<span class="sd">        &#39;&#39;&#39;</span>
        <span class="bp">self</span><span class="o">.</span><span class="n">_scene_viewer</span><span class="o">.</span><span class="n">setViewportSize</span><span class="p">(</span><span class="n">width</span><span class="p">,</span> <span class="n">height</span><span class="p">)</span>
</pre></div>
</td></tr></table></div>
<p>Line 5 shows how a resize event is passed through to the scene viewer, here we tell the scene viewer the new viewport size.</p>
<div class="highlight-python"><table class="highlighttable"><tr><td class="linenos"><div class="linenodiv"><pre>1
2
3
4
5
6
7
8</pre></div></td><td class="code"><div class="highlight"><pre>    <span class="k">def</span> <span class="nf">_zincCallback</span><span class="p">(</span><span class="bp">self</span><span class="p">,</span> <span class="n">event</span><span class="p">):</span>
        <span class="sd">&#39;&#39;&#39;</span>
<span class="sd">        Receive callbacks from zinc about changes that effect this scene view.</span>
<span class="sd">        For changes that require a repaint we call the updateGL method to redraw</span>
<span class="sd">        the scene.</span>
<span class="sd">        &#39;&#39;&#39;</span>
        <span class="k">if</span> <span class="n">event</span><span class="o">.</span><span class="n">getChangeFlags</span><span class="p">()</span> <span class="o">&amp;</span> <span class="n">Sceneviewerevent</span><span class="o">.</span><span class="n">CHANGE_FLAG_REPAINT_REQUIRED</span><span class="p">:</span>
            <span class="bp">self</span><span class="o">.</span><span class="n">updateGL</span><span class="p">()</span>
</pre></div>
</td></tr></table></div>
<p>The above code snippet shows the callback received by the ZincWidget from Zinc when the scene viewer has changed. If the change affects the view, redraw.</p>
</div>
<div class="section" id="handling-interaction">
<h2>Handling Interaction<a class="headerlink" href="#handling-interaction" title="Permalink to this headline">¶</a></h2>
<p>In visualising a 3D scene it is helpful to be able to change the view point to see objects that are hidden or occluded.  It is also
helpful to be able to change the view point to understand how objects relate to each other in the scene.  The Zinc library scene viewer
has a default handler for manipulating the view point of the scene which we can utilise. The default input handler allows the user to
rotate, translate, magnify, and miniaturise the scene.</p>
<p>To use the built-in handler we must create a scene viewer input object and set the event position,
input type, mouse button and event modifiers.  We need to convert the widget specific mouse button identifier to
the scene viewer input mouse button identifier.  An efficient way of doing this is to create a map from the widget
set mouse buttons to the scene viewer input mouse buttons.  We also need to create a map from the widget set event
modifiers to the scene viewer input modifiers.  For PySide and PyQt4 we can use the following code.</p>
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
13</pre></div></td><td class="code"><div class="highlight"><pre><span class="c"># Create a button map of Qt mouse buttons to Zinc input buttons</span>
<span class="n">button_map</span> <span class="o">=</span> <span class="p">{</span><span class="n">QtCore</span><span class="o">.</span><span class="n">Qt</span><span class="o">.</span><span class="n">LeftButton</span><span class="p">:</span> <span class="n">Sceneviewerinput</span><span class="o">.</span><span class="n">BUTTON_TYPE_LEFT</span><span class="p">,</span> <span class="n">QtCore</span><span class="o">.</span><span class="n">Qt</span><span class="o">.</span><span class="n">MidButton</span><span class="p">:</span> <span class="n">Sceneviewerinput</span><span class="o">.</span><span class="n">BUTTON_TYPE_MIDDLE</span><span class="p">,</span> <span class="n">QtCore</span><span class="o">.</span><span class="n">Qt</span><span class="o">.</span><span class="n">RightButton</span><span class="p">:</span> <span class="n">Sceneviewerinput</span><span class="o">.</span><span class="n">BUTTON_TYPE_RIGHT</span><span class="p">}</span>
<span class="c"># Create a modifier map of Qt modifier keys to Zinc modifier keys</span>
<span class="k">def</span> <span class="nf">modifier_map</span><span class="p">(</span><span class="n">qt_modifiers</span><span class="p">):</span>
    <span class="sd">&#39;&#39;&#39;</span>
<span class="sd">    Return a Zinc SceneViewerInput modifiers object that is created from</span>
<span class="sd">    the Qt modifier flags passed in.</span>
<span class="sd">    &#39;&#39;&#39;</span>
    <span class="n">modifiers</span> <span class="o">=</span> <span class="n">Sceneviewerinput</span><span class="o">.</span><span class="n">MODIFIER_FLAG_NONE</span>
    <span class="k">if</span> <span class="n">qt_modifiers</span> <span class="o">&amp;</span> <span class="n">QtCore</span><span class="o">.</span><span class="n">Qt</span><span class="o">.</span><span class="n">SHIFT</span><span class="p">:</span>
        <span class="n">modifiers</span> <span class="o">=</span> <span class="n">modifiers</span> <span class="o">|</span> <span class="n">Sceneviewerinput</span><span class="o">.</span><span class="n">MODIFIER_FLAG_SHIFT</span>
    
    <span class="k">return</span> <span class="n">modifiers</span>
</pre></div>
</td></tr></table></div>
<p>For the default input handler the left mouse button will rotate the scene, the middle mouse button will translate the scene, the
right mouse button moves the viewer towards or away from the current interest point in the scene (which looks best in perspective mode, and clips when you get too close). Holding down the shift key with the right mouse button drag magnifies or miniaturises the scene, much like a camera zoom lens.</p>
<p>The mousePressEvent(), mouseReleaseEvent(), and mouseMoveEvent() functions utilise the default input handler by calling the scene viewer
processSceneviewerinput() API function.  Note that we don&#8217;t need to manually redraw the graphics here; the changes to the view made by processSceneviewerinput() trigger a callback to _zincCallback(), described earlier.</p>
</div>
</div>


          </div>
      </div>
    </div>
      <div class="botnav">
      
        <p>
        «&#160;&#160;<a href="../image_reader/tutorial">Tutorial 2 - Image Reader</a>
        &#160;&#160;::&#160;&#160;
        <a class="uplink" href="../index">Contents</a>
        &#160;&#160;::&#160;&#160;
        <a href="../finite_element_creation/tutorial">Tutorial 3 - Finite Element Creation</a>&#160;&#160;»
        </p>

      </div>
            
		</div><!-- end #main -->

		<div id="sidebar">
<!--#include virtual="/software/zinclibrary/utility-peer-nav.txt" -->    
         <div id="toc">
          <h6><a href="../index"><span>PyZinc v3.0.0 tutorials</span></a></h6>
          <ul>
<li><a class="reference internal" href="#">Tutorial 1 - Axis Viewer</a><ul>
<li><a class="reference internal" href="#overview">Overview</a></li>
<li><a class="reference internal" href="#the-entry-point">The Entry Point</a></li>
<li><a class="reference internal" href="#something-to-look-at">Something to Look At</a></li>
<li><a class="reference internal" href="#setting-the-scene">Setting the Scene</a></li>
<li><a class="reference internal" href="#handling-interaction">Handling Interaction</a></li>
</ul>
</li>
</ul>

        </div>
            <!--#include virtual="utility-download.txt" -->

		</div><!-- end #sidebar -->
		
	</article><!-- end .single-project -->
	
</section><!-- end #content -->

<!--#include virtual="/inc/footer.txt" -->
