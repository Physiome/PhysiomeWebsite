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
            
  <div class="section" id="tutorial-axis-viewer">
<h1>Tutorial: Axis Viewer<a class="headerlink" href="#tutorial-axis-viewer" title="Permalink to this headline">¶</a></h1>
<p>The Axis Viewer is a very simple Zinc application written in Python with a Qt user interface. It sets up a Zinc scene containing only graphics showing 3-D axes, and renders them in the window using a simplified version of the Zinc Widget which allows interactive rotation, panning and zooming of the scene.</p>
<div class="figure align-center">
<a class="reference internal image-reference" href="/assets/img/software/zinclibrary/tutorials/axis_viewer.png"><img alt="/assets/img/software/zinclibrary/tutorials/axis_viewer.png" src="/assets/img/software/zinclibrary/tutorials/axis_viewer.png" style="width: 636px; height: 471px;" /></a>
</div>
<p>This tutorial has two goals:</p>
<ol class="arabic simple">
<li>Set up a minimal graphical application using the Zinc in Python with a Qt user interface.</li>
<li>For those interested, explain how the Zinc Widget works, including set up, drawing graphics and handling mouse input.</li>
</ol>
<p>In addition, it also discussions differences between using the two different Python bindings to Qt: PySide and PyQt4.</p>
<p>The souce code used in this tutorial is available from the <a class="reference external" href="https://svn.physiomeproject.org/svn/cmiss/zinc/bindings/examples/trunk/python/axis_viewer/">physiome
project svn server</a>.</p>
<div class="section" id="creating-the-user-interface-with-qt">
<h2>Creating the User Interface with Qt<a class="headerlink" href="#creating-the-user-interface-with-qt" title="Permalink to this headline">¶</a></h2>
<p>The user interface for this example consists of a window with a graphical rendering area with a Quit button below, as shown in the above figure. It is defined in the axis_viewer.ui file, created in Qt Designer as shown below.</p>
<div class="figure align-center">
<img alt="/assets/img/software/zinclibrary/tutorials/axis_viewer_qtdesigner.png" src="/assets/img/software/zinclibrary/tutorials/axis_viewer_qtdesigner.png" />
</div>
<p>The AxisViewerDlg is the class for this application, and is based on a QWidget. It includes three other widgets, a ZincWidget for the graphical display area, a spacer and the Quit button. We can see in this example that the clicked() signal (event) from the Quit button triggers the close() slot (function) on the AxisViewerDlg class; in this case close() is handled by the base QWidget class, but as your user interface grows you will connect signals from other widgets to new slots on your classes, which you must implement as class methods.</p>
<p>The ZincWidget is a custom Qt widget made specifically for use with PyZinc. Qt Designer allows the use of custom widgets by &#8216;promoting&#8217; them from a specified Qt base class (here QWidget) to a derived class name. It requires the &#8216;header file&#8217; declaring the derived widget class to be specified, here &#8216;zincwidget.h&#8217; as appropriate to C++, however Qt on Python will look for the definition of the derived widget class in &#8216;zincwidget.py&#8217;. For more information on promoting widgets in Qt Designer read the document at this location <a class="reference external" href="http://qt-project.org/doc/qt-4.8/designer-using-custom-widgets.html">http://qt-project.org/doc/qt-4.8/designer-using-custom-widgets.html</a>.</p>
<p>The UI description is converted to a python module using a Python Qt UI compiler.:</p>
<div class="highlight-python"><div class="highlight"><pre># PySide
pyside-uic -o axis_viewer_ui_pyside.py axis_viewer.ui
# PyQt4
pyuic4 -o axis_viewer_ui_pyqt4.py axis_viewer.ui
</pre></div>
</div>
<p>add &#8216;&#8211;from-imports&#8217; if targeting Python 3.0 or later in the above command.</p>
<p><strong>Note:</strong></p>
<blockquote>
<div>This example uses either PySide or PyQt4 depending on which one it successfully imports.  These two different Python bindings for the Qt libraries are, for this simple example, interchangeable.  However this is not always the case for more complicated applications.  This web page shows the differences
between the two <a class="reference external" href="http://qt-project.org/wiki/Differences_Between_PySide_and_PyQt">http://qt-project.org/wiki/Differences_Between_PySide_and_PyQt</a>. The two bindings differ in license: PySide (LGPL) vs. PyQt4 (GPL/commercial).</div></blockquote>
<p>We also set an application icon here which is defined in a resource file
using qt-designer and compiled into a python resource using a Python Qt resource compiler.:</p>
<div class="highlight-python"><div class="highlight"><pre># PySide
pyside-rcc -py3 -o icons_rc.py icons.qrc
# PyQt4
pyrcc4 -py3 -o icons_rc.py icons.qrc
</pre></div>
</div>
<p>The implementation of the Zinc Widget in file zincwidget.py is explained later.</p>
</div>
<div class="section" id="creating-the-application">
<h2>Creating the Application<a class="headerlink" href="#creating-the-application" title="Permalink to this headline">¶</a></h2>
<div class="section" id="the-entry-point">
<h3>The Entry Point<a class="headerlink" href="#the-entry-point" title="Permalink to this headline">¶</a></h3>
<p>When executing axis_viewer.py directly (i.e. not imported as a module) the __name__ variable is set to &#8216;__main__&#8217;. The axis viewer detects this and invokes the function main(sys.argv), which mimics the entry point for C/C++ programs. The main() function initialises the application-wide resources and starts the event loop:</p>
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
<div class="section" id="the-axis-viewer-dialog-class">
<h3>The Axis Viewer Dialog class<a class="headerlink" href="#the-axis-viewer-dialog-class" title="Permalink to this headline">¶</a></h3>
<p>The AxisViewerDlg class, derived from QWidget is where your application-specific code goes. Since we wish to use Zinc, we first need to import OpenCMISS-Zinc modules:</p>
<div class="highlight-python"><table class="highlighttable"><tr><td class="linenos"><div class="linenodiv"><pre>1
2</pre></div></td><td class="code"><div class="highlight"><pre><span class="kn">from</span> <span class="nn">opencmiss.zinc.context</span> <span class="kn">import</span> <span class="n">Context</span> <span class="k">as</span> <span class="n">ZincContext</span>
<span class="kn">from</span> <span class="nn">opencmiss.zinc.glyph</span> <span class="kn">import</span> <span class="n">Glyph</span>
</pre></div>
</td></tr></table></div>
<p>Each application using Zinc must create a Zinc &#8216;Context&#8217; object so that module must always be imported. You don&#8217;t need to import modules for objects created from the Context, but enumerations such as the
glyph shape type are only defined in their module, hence they must be imported as above.</p>
<p>The AxisViewerDlg class defines the code that is special to your application, and this includes setting up a few things specific to Zinc:</p>
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
34</pre></div></td><td class="code"><div class="highlight"><pre><span class="k">class</span> <span class="nc">AxisViewerDlg</span><span class="p">(</span><span class="n">QtGui</span><span class="o">.</span><span class="n">QWidget</span><span class="p">):</span>
    <span class="sd">&#39;&#39;&#39;</span>
<span class="sd">    Create a subclass of QWidget for our application.  We could also have derived this </span>
<span class="sd">    application from QMainWindow to give us a menu bar among other things, but a</span>
<span class="sd">    QWidget is sufficient for our purposes.</span>
<span class="sd">    &#39;&#39;&#39;</span>
    
    <span class="k">def</span> <span class="nf">__init__</span><span class="p">(</span><span class="bp">self</span><span class="p">,</span> <span class="n">parent</span><span class="o">=</span><span class="bp">None</span><span class="p">):</span>
        <span class="sd">&#39;&#39;&#39;</span>
<span class="sd">        Initiaise the AxisViewerDlg first calling the QWidget __init__ function.</span>
<span class="sd">        &#39;&#39;&#39;</span>
        <span class="n">QtGui</span><span class="o">.</span><span class="n">QWidget</span><span class="o">.</span><span class="n">__init__</span><span class="p">(</span><span class="bp">self</span><span class="p">,</span> <span class="n">parent</span><span class="p">)</span>
 
        <span class="c"># create instance of Zinc Context from which all other objects are obtained</span>
        <span class="bp">self</span><span class="o">.</span><span class="n">_context</span> <span class="o">=</span> <span class="n">ZincContext</span><span class="p">(</span><span class="s">&quot;Axis Viewer&quot;</span><span class="p">);</span>

        <span class="c"># set up standard materials and glyphs so we can use them elsewhere</span>
        <span class="c"># define standard materials first as some coloured glyphs use them</span>
        <span class="n">materialmodule</span> <span class="o">=</span> <span class="bp">self</span><span class="o">.</span><span class="n">_context</span><span class="o">.</span><span class="n">getMaterialmodule</span><span class="p">()</span>
        <span class="n">materialmodule</span><span class="o">.</span><span class="n">defineStandardMaterials</span><span class="p">()</span>
        <span class="c"># this example uses a standard axes glyph hence need the following:</span>
        <span class="n">glyphmodule</span> <span class="o">=</span> <span class="bp">self</span><span class="o">.</span><span class="n">_context</span><span class="o">.</span><span class="n">getGlyphmodule</span><span class="p">()</span>
        <span class="n">glyphmodule</span><span class="o">.</span><span class="n">defineStandardGlyphs</span><span class="p">()</span>

        <span class="c"># Using composition to include the visual element of the GUI.</span>
        <span class="bp">self</span><span class="o">.</span><span class="n">ui</span> <span class="o">=</span> <span class="n">Ui_AxisViewerDlg</span><span class="p">()</span>
        <span class="bp">self</span><span class="o">.</span><span class="n">ui</span><span class="o">.</span><span class="n">setupUi</span><span class="p">(</span><span class="bp">self</span><span class="p">)</span>
        <span class="c"># Must pass the context to the ZincWidget to set it up</span>
        <span class="bp">self</span><span class="o">.</span><span class="n">ui</span><span class="o">.</span><span class="n">_zincwidget</span><span class="o">.</span><span class="n">setContext</span><span class="p">(</span><span class="bp">self</span><span class="o">.</span><span class="n">_context</span><span class="p">)</span>
        <span class="bp">self</span><span class="o">.</span><span class="n">setWindowIcon</span><span class="p">(</span><span class="n">QtGui</span><span class="o">.</span><span class="n">QIcon</span><span class="p">(</span><span class="s">&quot;:/cmiss_icon.ico&quot;</span><span class="p">))</span>
        <span class="bp">self</span><span class="o">.</span><span class="n">resize</span><span class="p">(</span><span class="mi">620</span><span class="p">,</span> <span class="mi">440</span><span class="p">)</span>

        <span class="c"># set up content for this application</span>
        <span class="bp">self</span><span class="o">.</span><span class="n">setupAxes</span><span class="p">()</span>
</pre></div>
</td></tr></table></div>
<p>After initialising the base class the first thing we do is create a Zinc Context object and store it in a member variable.</p>
<p>note:</p>
<div class="highlight-python"><div class="highlight"><pre>We use the context to create all other Zinc objects either directly or indirectly.
</pre></div>
</div>
<p>We keep a handle to this context until we are no longer using objects obtained from it (either directly or indirectly).
If we don&#8217;t all the resources associated with the context will be released and any new actions performed on objects from
the context will be invalid resulting in undefined behaviour.  This means that the Zinc context handle should be the last
handle we let go of. Most users will want to define standard materials and glyphs for their later visualisations, as is done here.</p>
<p>Following creation of the Zinc context we create the UI from the python module created from the Qt UI compiler. This creates a Zinc Widget, however we must immediately pass it the Zinc Context so it can complete its initialisation when its initializeGL() method is called as the window is shown.</p>
<p>The setupAxes() method of the AxisViewerDlg class sets up the simple graphics specific to this Zinc application, namely a visualisation of the origin point with unit-sized 3-D axes:</p>
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
20</pre></div></td><td class="code"><div class="highlight"><pre>    <span class="k">def</span> <span class="nf">setupAxes</span><span class="p">(</span><span class="bp">self</span><span class="p">):</span>
        <span class="n">region</span> <span class="o">=</span> <span class="bp">self</span><span class="o">.</span><span class="n">_context</span><span class="o">.</span><span class="n">getDefaultRegion</span><span class="p">()</span>
        <span class="c"># Graphics for visualising a region belong to its scene      </span>
        <span class="n">scene</span> <span class="o">=</span> <span class="n">region</span><span class="o">.</span><span class="n">getScene</span><span class="p">()</span>
        
        <span class="c"># Call beginChange() to stop scene change messages being sent while</span>
        <span class="c"># making multiple changes to scene or its graphics.</span>
        <span class="c"># It&#39;s very important to call endChange() at the end!</span>
        <span class="n">scene</span><span class="o">.</span><span class="n">beginChange</span><span class="p">()</span>
        
        <span class="c"># Create Points graphics in scene and visualise with unit-sized solid 3-D axes</span>
        <span class="n">graphics</span> <span class="o">=</span> <span class="n">scene</span><span class="o">.</span><span class="n">createGraphicsPoints</span><span class="p">()</span>
        <span class="n">attributes</span> <span class="o">=</span> <span class="n">graphics</span><span class="o">.</span><span class="n">getGraphicspointattributes</span><span class="p">()</span>
        <span class="n">attributes</span><span class="o">.</span><span class="n">setGlyphShapeType</span><span class="p">(</span><span class="n">Glyph</span><span class="o">.</span><span class="n">SHAPE_TYPE_AXES_SOLID</span><span class="p">)</span>
        <span class="c"># Note: default base size of 0.0 would make axes invisible!</span>
        <span class="n">attributes</span><span class="o">.</span><span class="n">setBaseSize</span><span class="p">([</span><span class="mf">1.0</span><span class="p">])</span>

        <span class="c"># Restart scene messaging and inform clients of changes.</span>
        <span class="c"># This ultimately triggers a redraw in the Zinc Widget.</span>
        <span class="n">scene</span><span class="o">.</span><span class="n">endChange</span><span class="p">()</span>
</pre></div>
</td></tr></table></div>
<p>New &#8216;Points&#8217; Graphics default to the special single &#8216;point&#8217; domain. To create points for any other domains you need to call graphics.setFieldDomainType(Field.DOMAIN_TYPE_NODES) or similar, which requires the OpenCMISS-Zinc &#8216;Field&#8217; module to be imported.</p>
<p>The single point domain with Points graphics is unique in that it doesn&#8217;t require a coordinate field to be specified, since it defaults to the origin (0,0,0). All other graphics require a coordinate field defined over the relevant domain to be set via graphics.setCoordinateField(coordinate_field).</p>
<p>In some cases you&#8217;ll want to show a subset of the domain. Do this by setting the subgroup field to a
Group or any other Boolean-valued field (where non-zero == True == show) with graphics.setSubgroupField(subgroup_field).</p>
<p>The glyph specifies a 3-D graphical object to draw at every point in the points graphics, here just the origin of the coordinate system. The default glyph is a single point/pixel, but we wish to show solid axes so rotating and zooming the window has a more visible effect. The glyph is set in the &#8216;graphics point attributes&#8217;, and can be set by &#8216;glyph shape type&#8217; or by object, e.g. found by name in the Glyphmodule.</p>
</div>
</div>
<div class="section" id="implementation-of-the-zinc-widget">
<h2>Implementation of the Zinc Widget<a class="headerlink" href="#implementation-of-the-zinc-widget" title="Permalink to this headline">¶</a></h2>
<div class="section" id="rendering">
<h3>Rendering<a class="headerlink" href="#rendering" title="Permalink to this headline">¶</a></h3>
<p>The ZincWidget class is derived from the QGLWidget. QGLWidget is a widget for rendering OpenGL graphics, and is responsible for setting up the OpenGL context that the Zinc library draws into. The Zinc Widget creates a Zinc Sceneviewer which manages the viewing parameters for the scene and can render it into the current OpenGL context.</p>
<p>This example includes a simplified Zinc Widget which only handles rotating, panning and zooming the scene,
and the following explains how it works. For your own code we recommend you take the more powerful version from <a class="reference external" href="https://github.com/OpenCMISS-Zinc/ZincPythonUtilities/">here</a>.</p>
<p>In the initialisation of the ZincWidget class we call __init__ of the super class QGLWidget. In order to use the
Zinc Widget, the application must pass the Context to it using the setContext() method; see the
AxisViewerDlg class __init__ method above.</p>
<p>In the initializeGL() method we create a Zinc scene viewer which keeps track of the current scene and view direction, angle and other parameters for viewing it.</p>
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
26</pre></div></td><td class="code"><div class="highlight"><pre>    <span class="k">def</span> <span class="nf">initializeGL</span><span class="p">(</span><span class="bp">self</span><span class="p">):</span>
        <span class="sd">&#39;&#39;&#39;</span>
<span class="sd">        Set up the Zinc Sceneviewer.  </span>
<span class="sd">        &#39;&#39;&#39;</span>

        <span class="c"># From the graphics module get the scene viewer module.</span>
        <span class="n">scene_viewer_module</span> <span class="o">=</span> <span class="bp">self</span><span class="o">.</span><span class="n">_context</span><span class="o">.</span><span class="n">getSceneviewermodule</span><span class="p">()</span>
        
        <span class="c"># From the scene viewer module we can create a scene viewer, we set up the </span>
        <span class="c"># scene viewer to have the same OpenGL properties as the QGLWidget.</span>
        <span class="bp">self</span><span class="o">.</span><span class="n">_scene_viewer</span> <span class="o">=</span> <span class="n">scene_viewer_module</span><span class="o">.</span><span class="n">createSceneviewer</span><span class="p">(</span><span class="n">Sceneviewer</span><span class="o">.</span><span class="n">BUFFERING_MODE_DOUBLE</span><span class="p">,</span> <span class="n">Sceneviewer</span><span class="o">.</span><span class="n">STEREO_MODE_DEFAULT</span><span class="p">)</span>

        <span class="c"># default to showing the root region scene</span>
        <span class="n">root_region</span> <span class="o">=</span> <span class="bp">self</span><span class="o">.</span><span class="n">_context</span><span class="o">.</span><span class="n">getDefaultRegion</span><span class="p">()</span>
        <span class="n">scene</span> <span class="o">=</span> <span class="n">root_region</span><span class="o">.</span><span class="n">getScene</span><span class="p">()</span>
        <span class="bp">self</span><span class="o">.</span><span class="n">_scene_viewer</span><span class="o">.</span><span class="n">setScene</span><span class="p">(</span><span class="n">scene</span><span class="p">)</span>

        <span class="c"># New scene viewers use the default scene filter which is initially</span>
        <span class="c"># by scene and graphics visibility flags. Can set a different filter</span>
        <span class="c"># with the following, or set no filter to show all graphics:</span>
        <span class="c">#self._scene_viewer.setScenefilter(scene_filter)</span>
        
        <span class="c"># Set the zinc callback so that we are informed of changes to the scene</span>
        <span class="bp">self</span><span class="o">.</span><span class="n">_scene_viewer_notifier</span> <span class="o">=</span> <span class="bp">self</span><span class="o">.</span><span class="n">_scene_viewer</span><span class="o">.</span><span class="n">createSceneviewernotifier</span><span class="p">()</span>
        <span class="bp">self</span><span class="o">.</span><span class="n">_scene_viewer_notifier</span><span class="o">.</span><span class="n">setCallback</span><span class="p">(</span><span class="bp">self</span><span class="o">.</span><span class="n">_zincCallback</span><span class="p">)</span>
       
</pre></div>
</td></tr></table></div>
<p>This function is called once before resizeGL() or paintGL() is called.</p>
<p>The resizeGL() and paintGL() are very simple functions and are given here:</p>
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
<div class="section" id="handling-mouse-interaction">
<h3>Handling Mouse Interaction<a class="headerlink" href="#handling-mouse-interaction" title="Permalink to this headline">¶</a></h3>
<p>In visualising a 3D scene it is helpful to be able to change the view point to see objects that are hidden or occluded.  It is also
helpful to be able to change the view point to understand how objects relate to each other in the scene.  The Zinc library scene viewer
has a default handler for manipulating the view point of the scene which we can utilise. The default input handler allows the user to
rotate, translate, magnify, and miniaturise the scene.</p>
<p>To use the built-in handler we must create a &#8216;Sceneviewerinput&#8217; object and set the event position,
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
<p>For the default input handler the left mouse button will rotate the scene, the middle mouse button will translate/pan the scene, the
right mouse button moves the viewer towards or away from the current interest point in the scene (which looks best in perspective mode, and clips when you get too close). Holding down the shift key with the right mouse button drag magnifies or miniaturises the scene, just like a camera zoom lens.</p>
<p>The mousePressEvent(), mouseReleaseEvent(), and mouseMoveEvent() functions utilise the default input handler by calling the scene viewer
processSceneviewerinput() API function.  Note that we don&#8217;t need to manually redraw the graphics here; the changes to the view made by processSceneviewerinput() trigger a callback to _zincCallback(), described earlier.</p>
</div>
</div>
</div>


          </div>
      </div>
    </div>
      <div class="botnav">
      
        <p>
        «&#160;&#160;<a href="../image_reader/tutorial">Tutorial: Image Reader</a>
        &#160;&#160;::&#160;&#160;
        <a class="uplink" href="../index">Contents</a>
        &#160;&#160;::&#160;&#160;
        <a href="../read_mesh/tutorial">Tutorial: Read and View a Mesh</a>&#160;&#160;»
        </p>

      </div>
            
		</div><!-- end #main -->

		<div id="sidebar">
<!--#include virtual="/software/zinclibrary/utility-peer-nav.txt" -->    
         <div id="toc">
          <h6><a href="../index"><span>PyZinc v3.0.0 tutorials</span></a></h6>
          <ul>
<li><a class="reference internal" href="#">Tutorial: Axis Viewer</a><ul>
<li><a class="reference internal" href="#creating-the-user-interface-with-qt">Creating the User Interface with Qt</a></li>
<li><a class="reference internal" href="#creating-the-application">Creating the Application</a><ul>
<li><a class="reference internal" href="#the-entry-point">The Entry Point</a></li>
<li><a class="reference internal" href="#the-axis-viewer-dialog-class">The Axis Viewer Dialog class</a></li>
</ul>
</li>
<li><a class="reference internal" href="#implementation-of-the-zinc-widget">Implementation of the Zinc Widget</a><ul>
<li><a class="reference internal" href="#rendering">Rendering</a></li>
<li><a class="reference internal" href="#handling-mouse-interaction">Handling Mouse Interaction</a></li>
</ul>
</li>
</ul>
</li>
</ul>

        </div>
            <!--#include virtual="utility-download.txt" -->

		</div><!-- end #sidebar -->
		
	</article><!-- end .single-project -->
	
</section><!-- end #content -->

<!--#include virtual="/inc/footer.txt" -->
