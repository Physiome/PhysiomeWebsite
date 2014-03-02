---
_layout: support
title: Simple axis viewer
categories:
  - users guide
intro: >
  Familiarise yourself with the
  fundamentals of using PyZinc by
  following along with our simple axis
  viewer tutorial.
description: >
  The simple axis viewer is a very simple
  application designed to illustrate the
  fundamentals of using PyZinc.
navtitle: Simple axis viewer
---
<img src="/assets/img/software/pyzinc/505/simple-axis-viewer.png" alt="The simple axis viewer application window." />
The simple axis viewer is a very simple application designed to illustrate the fundamentals of using PyZinc. The application illustrates how to:

- Set up a context
- Create a scene
- Visualise some graphics
- Handle mouse input

This tutorial also discusses issues that are related to using PyQt4 with PyZinc. The souce code used in this tutorial is available from the [Physiome project SVN server](https://svn.physiomeproject.org/svn/cmiss/zinc/bindings/examples/trunk/simple_axis_viewer/).

### Overview

The simple axis viewer uses PyQt4 to create a simple application that consists of an OpenGL enabled widget and a quit button. The OpenGL widget is used by the Zinc library to render a basic scene consisting of a single point graphic. The Zinc library has a standard input handling routine that is used to show how the scene viewport can be manipulated. In order to visualise the effects of mouse movement the point graphic is defined to use the inbuilt glyph 'axes'.

### The entry point

In this first tutorial we start at the entry point to the application which is in the axis_viewer.py file. When we call this file directly (and not imported as a module) the <code>__name__</code> variable is set to <code>__main__</code> and we can setup and initialise the application. We do this to so that we can mimic C/C++ and call our <code>main()</code> function as the entry point of the application. In the <code>main()</code>  function the program initialises the application-wide resources and starts the event loop. Here is the code.
<code>
	<ol class="code">
    	<li style="display: none; "></li>
		<li>def main():</li>
		<li>   '''</li>
		<li>   The entry point for the application, handle application arguments and initialise the GUI.</li>
		<li>   '''</li>
		<li> </li>
		<li>   app = QtGui.QApplication(sys.argv)</li>
		<li></li>
		<li>   w = AxisViewerDlg()</li>
		<li>   w.show()</li>
		<li> </li>
		<li>   sys.exit(app.exec_())</li>
        <li style="display: none; "></li>
	</ol>
</code>

On line 6 we create a QApplication object which controls the main flow of the program. Among other things it also contains the main event loop. An application has _precisely_ one QApplicatoin object. After this we create an instance of the AxisViewerDlg (line 7). The AxisViewerDlg is the visual element in the GUI and defines the main window of the application. Next we show the main window (line 8) and then start the execution of the main event loop (line 10). The event loop handles the events that are generated when the program is running. Examples of events are mouse presses and key strokes.

### Something to look at

The AxisViewerDlg class subclasses QWidget and uses composition to include the ui part of the application. The ui part is created using qt-designer and converted to a python module using pyuic4.:
<code>
	<ol class="code">
    	<li style="display: none; "></li>
        <li>pyuic4 -o axis_viewer_ui.py axis_viewer.ui</li>
        <li style="display: none; "></li>
	</ol>
</code>

We also set an application icon here which is defined in a resource file using qt-designer and compiled into a python resource using pyrcc4.:
<code>
	<ol class="code">
    	<li style="display: none; "></li>
        <li>pyrcc4 -o icons_rc.py icons.qrc</li>
        <li style="display: none; "></li>
	</ol>
</code>

The AxisViewerDlg uses qt-designer to promote a widget to a QtGraphicsCanvas which we define in qtgraphicscanvas.py. For more information on promoting widgets in qt-designer please [read the documentation](http://doc.qt.digia.com/qt/designer-using-custom-widgets.html) (doc.qt.digia.com).

### Setting the scene

The QtGraphicsCanvas class is sub-classed from QGLWidget. QGLWidget is a widget for rendering OpenGL graphics. The QGLWidget sets up the OpenGL context that is required for the Zinc library to draw into. The QtGraphicsCanvas will be the view widget into our Zinc library scene.

In the initialisation of the class we call <code>__init__</code> of the super class QGLWidget. Then we create a Zinc context, we must keep a handle to this context until it is no longer needed. We use the context to create all other Zinc objects either directly or indirectly. Once the context handle is destroyed everything in the context will also be destroyed and thus all handles to objects created from this context will become invalid. In the initialisation of the class we also create a class member for a handle to the scene viewer. It is advisable to keep a handle to the scene viewer, from this handle we can (obviously) access all the objects required to render (view) our scene.
<code>
	<ol class="code">
    	<li style="display: none; "></li>
		<li>def __init__(self, parent = None):</li>
		<li>    '''</li>
		<li>    Call the super class init functions, create a Zinc context and set the scene viewer handle to None.</li>
		<li>    '''</li>
		<li> </li>
		<li>    QtOpenGL.QGLWidget.__init__(self, parent)</li>
		<li>    # Create a Zinc context from which all other objects can be derived either directly or indirectly.</li>
		<li>    self.context_ = Context("axisviewer")</li>
		<li>    self.scene_viewer_ = None</li>
        <li style="display: none; "></li>
	</ol>
</code>

We implement the initializeGL() function to set up the scene we want to show. Here is the code:
<code>
	<ol class="code">
    	<li style="display: none; "></li>
		<li>def initializeGL(self):</li>
		<li>    '''</li>
		<li>    Initialise the Zinc scene for drawing the axis glyph at a point.</li>
		<li>    '''</li>
		<li> </li>
		<li>    # From the context get the default scene viewer package.</li>
		<li>    scene_viewer_package_ = self.context_.getDefaultSceneViewerPackage()</li>
		<li>    # From the scene viewer package we can create a scene viewer, we set up the scene viewer to have the same OpenGL properties as the QGLWidget.</li>
		<li>    self.scene_viewer_ = scene_viewer_package_.createSceneViewer(SceneViewer.BUFFERING_MODE_DOUBLE, SceneViewer.STEREO_MODE_ANY)</li>
		<li> </li>
		<li>    # Get a the root region to create the point in.  Every context has a default region called the root region.</li>
		<li>    root_region = self.context_.getDefaultRegion()</li>
		<li> </li>
		<li>    # Get the default graphics module from the context and enable renditions</li>
		<li>    graphics_module = self.context_.getDefaultGraphicsModule()</li>
		<li>    graphics_module.enableRenditions(root_region)</li>
		<li> </li>
		<li>    # Once the renditions have been enabled for a region tree you can get a valid handle for a rendition and create graphics for it.</li>
		<li>    rendition = graphics_module.getRendition(root_region)</li>
		<li> </li>
		<li>    # We use the beginChange and endChange to wrap any immediate changes and will streamline the rendering of the scene.</li>
		<li>    rendition.beginChange()</li>
		<li> </li>
		<li>    # Create a filter for visibility flags which will allow us to see our graphic. By default graphics are created with their visibility flags set to true.</li>
		<li>    graphics_filter = graphics_module.createFilterVisibilityFlags()</li>
		<li> </li>
		<li>    # Create a scene and set the region tree for it to show. We also set the graphics filter for the scene otherwise nothing will be visible.</li>
		<li>    scene = graphics_module.createScene()</li>
		<li>    scene.setRegion(root_region)</li>
		<li>    scene.setFilter(graphics_filter)</li>
		<li> </li>
		<li>    # Create a graphic point in our rendition and set it's glyph type to axes.</li>
		<li>    graphic = rendition.createGraphic(Graphic.GRAPHIC_POINT)</li>
		<li>    graphic.setGlyphType(Graphic.GLYPH_TYPE_AXES)</li>
		<li> </li>
		<li>    # Set the scene to our scene viewer.</li>
		<li>    self.scene_viewer_.setScene(scene)</li>
		<li> </li>
		<li>    # Let the rendition render the scene.</li>
		<li>    rendition.endChange()</li>
        <li style="display: none; "></li>
	</ol>
</code>

This function is called once before resizeGL() or paintGL() is called. At this point the scene consisting of a single point shown using the axis glyph has been created. There are other default glyphs that exist and can be used for representing graphic points and these can be found in the Graphic class. For this tutorial though we use the axis glyph to show the effect of mouse interaction with the QtGraphicsCanvas widget. The resizeGL() and paintGL() are very simple functions and are given here:

<code>
	<ol class="code">
    	<li style="display: none; "></li>
		<li>def paintGL(self):</li>
		<li>    '''</li>
		<li>    Render the scene for this scene viewer.  The QGLWidget has already set up the correct OpenGL buffer for us so all we need do is render into it.  The scene viewer will clear the background so any OpenGL drawing of your own needs to go after this API call.</li>
		<li>    '''</li>
		<li>    self.scene_viewer_.renderScene()</li>
        <li style="display: none; "></li>
	</ol>
</code>

We can see here in paintGL(), on line 5, that we simply need to tell the scene viewer to render the scene.
<code>
	<ol class="code">
    	<li style="display: none; "></li>
		<li>def resizeGL(self, width, height):</li>
		<li>    '''</li>
		<li>    Respond to widget resize events.</li>
		<li>    '''</li>
		<li>    self.scene_viewer_.setViewportSize(width, height)</li>
        <li style="display: none; "></li>
	</ol>
</code>

Line 5 shows how a resize event is passed through to the scene viewer, here we tell the scene viewer the new viewport size.

### Handling interaction

In visualising a 3D scene it is helpful to be able to change the view point to see objects that are hidden or occluded. It is also helpful to be able to change the view point to understand how objects relate to each other in the scene. The Zinc library scene viewer has a default handler for manipulating the view point of the scene which we can utilise. The default input handler allows the user to rotate, translate, magnify, and minaturise the scene.

To use the in-built handler we must create a scene viewer input object and set the event position, input type, and mouse button number. The left mouse button is given the value 1, the middle mouse button is given the value 2, and the right mouse button is given the value 3.

For the default input handler the left mouse button will rotate the scene, the middle mouse button will translate the scene, and the right mouse button will magnify and minaturise the scene.

The mousePressEvent(), mouseReleaseEvent(), and mouseMoveEvent() functions utilise the default input handler by calling the scene viewer setInput() API function. Because the mouseMoveEvent() function has possibly triggered a change in the scene viewer we must call updateGL() to get the scene rendered again to reflect any changes.