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
            
  <div class="section" id="introduction-to-the-cmiss-zinc-library-api-v3-0">
<h1>Introduction to the CMISS Zinc Library API v3.0<a class="headerlink" href="#introduction-to-the-cmiss-zinc-library-api-v3-0" title="Permalink to this headline">¶</a></h1>
<table class="docutils field-list" frame="void" rules="none">
<col class="field-name" />
<col class="field-body" />
<tbody valign="top">
<tr class="field-odd field"><th class="field-name">Authors:</th><td class="field-body">Richard Christie and Hugh Sorby, Auckland Bioengineering Institute, University of Auckland, New Zealand</td>
</tr>
<tr class="field-even field"><th class="field-name">Version:</th><td class="field-body">15 December 2012</td>
</tr>
</tbody>
</table>
<div class="section" id="the-cmiss-zinc-library">
<h2>The CMISS Zinc Library<a class="headerlink" href="#the-cmiss-zinc-library" title="Permalink to this headline">¶</a></h2>
<p>The CMISS Zinc library, developed as part of the CMISS project, is primarily designed for building interactive graphical interfaces to mathematical field models. It provides functionality in several &#8216;layers&#8217;:</p>
<ol class="arabic simple">
<li>Representations of mathematical fields, including finite element, image-based and CAD.  Also fields derived by mathematical and other operators applied to source fields. Fields are created in hierarchical namespaces called &#8216;regions&#8217;.</li>
<li>Graphics conversions for making 3-D graphical &#8216;renditions&#8217; of the fields in each region, built from primitives including points, lines, surfaces, iso-surfaces and streamlines.</li>
<li>OpenGL rendering that can be used from any widget set. This also includes interaction such as picking and highlighting.</li>
<li>Utilities including non-linear optimisation.</li>
</ol>
</div>
<div class="section" id="api-concepts-and-standards">
<h2>API Concepts and Standards<a class="headerlink" href="#api-concepts-and-standards" title="Permalink to this headline">¶</a></h2>
<div class="section" id="context">
<h3>Context<a class="headerlink" href="#context" title="Permalink to this headline">¶</a></h3>
<p>A Context is the main object from which all other objects are obtained either directly or indirectly.</p>
</div>
<div class="section" id="field">
<h3>Field<a class="headerlink" href="#field" title="Permalink to this headline">¶</a></h3>
<p>A Field is an instance of a concrete field type which can be evaluated over elements, nodes etc.</p>
</div>
<div class="section" id="region">
<h3>Region<a class="headerlink" href="#region" title="Permalink to this headline">¶</a></h3>
<p>A Region is a hierarchical container of fields and child regions.</p>
</div>
<div class="section" id="mesh">
<h3>Mesh<a class="headerlink" href="#mesh" title="Permalink to this headline">¶</a></h3>
<p>A Mesh is a container of elements over which finite element fields are defined.</p>
</div>
<div class="section" id="element">
<h3>Element<a class="headerlink" href="#element" title="Permalink to this headline">¶</a></h3>
<p>An Element is a finite element chart over which fields can be interpolated.</p>
</div>
<div class="section" id="node">
<h3>Node<a class="headerlink" href="#node" title="Permalink to this headline">¶</a></h3>
<p>A Node is a point object, capable of having parameters stored at it.</p>
</div>
<div class="section" id="nodeset">
<h3>Nodeset<a class="headerlink" href="#nodeset" title="Permalink to this headline">¶</a></h3>
<p>A Nodeset is a container of nodes.</p>
</div>
<div class="section" id="graphic">
<h3>Graphic<a class="headerlink" href="#graphic" title="Permalink to this headline">¶</a></h3>
<p>A Graphic is an instance of a conversion operator making graphics from fields: points, lines, surfaces, isosurfaces, streamlines.</p>
</div>
<div class="section" id="rendition">
<h3>Rendition<a class="headerlink" href="#rendition" title="Permalink to this headline">¶</a></h3>
<p>A Rendition is a collection of graphic objects visualising fields in a region.</p>
</div>
<div class="section" id="ansi-c">
<h3>ANSI C<a class="headerlink" href="#ansi-c" title="Permalink to this headline">¶</a></h3>
<p>The underlying API is presented in ANSI C headers to ease integration into the widest variety of languages.</p>
</div>
<div class="section" id="not-threadsafe">
<h3>Not Threadsafe<a class="headerlink" href="#not-threadsafe" title="Permalink to this headline">¶</a></h3>
<p>The API is not threadsafe. Calling an API method in one thread while another API method is in progress on another thread is expected to cause uncertain behaviour or a crash. There are however plans to use multiple threads internally to parallelise graphics generation, which may involve making some APIs thread-safe in controlled situations.</p>
</div>
<div class="section" id="include-files">
<h3>Include Files<a class="headerlink" href="#include-files" title="Permalink to this headline">¶</a></h3>
<p>Public C and C++ API header files are installed under the zinc folder of the install prefix.  Headers are named for the main object or category of objects for which API is provided, so in many cases several related object types will be in the same header. Definitions of handle types and enumerations needed by multiple API headers are in the sub-folder &#8216;zinc/types&#8217;; it should not be necessary to include these directly. The latest C API can be viewed on our subversion viewer at:
<a class="reference external" href="https://svn.physiomeproject.org/svn/cmiss/zinc/library/core/source/api">https://svn.physiomeproject.org/svn/cmiss/zinc/library/core/source/api</a></p>
</div>
<div class="section" id="namespaces">
<h3>Namespaces<a class="headerlink" href="#namespaces" title="Permalink to this headline">¶</a></h3>
<p>To avoid function name collisions with other libraries, all types and their methods are prefixed by  &#8220;Cmiss_&#8221; and all enumerated constants are written in uppercase prefixed by &#8220;CMISS_&#8221;.  After the prefix, C API function names consist of unabbreviated words separated by underscores (&#8216;_&#8217;).</p>
</div>
<div class="section" id="object-interface-based">
<h3>Object/Interface-based<a class="headerlink" href="#object-interface-based" title="Permalink to this headline">¶</a></h3>
<p>The overall design of the API is based on calling methods on an object or interface, the owning object. Only the initial &#8216;context&#8217; object is created without reference to an existing (or owning) object:</p>
<div class="highlight-python"><div class="highlight"><pre>Cmiss_context_id context = Cmiss_context_create(&quot;Instance1&quot;);
</pre></div>
</div>
<p>All other objects are created or obtained by calling methods on objects/interfaces you have obtained:</p>
<div class="highlight-python"><div class="highlight"><pre>Cmiss_region_id region = Cmiss_context_get_default_region(context);
</pre></div>
</div>
<p>Here, a Cmiss_region_id is a handle to a Cmiss_region object (see later). All methods on an object start with the type name and take the object as the first argument.</p>
<p>Note that all required state must be passed as function arguments: there are no global singleton objects from which data is obtained.</p>
</div>
<div class="section" id="object-handles-and-clean-up">
<h3>Object Handles and Clean-Up<a class="headerlink" href="#object-handles-and-clean-up" title="Permalink to this headline">¶</a></h3>
<p>All objects are returned by the API as &#8216;handles&#8217;, and handle types always take the name of the object type with the suffix &#8216;_id&#8217;. The handle type is currently just a typedef for a pointer, but it is possible future implementations will change this:</p>
<div class="highlight-python"><div class="highlight"><pre>struct Cmiss_region;
typedef struct Cmiss_region * Cmiss_region_id;
</pre></div>
</div>
<p>With few exceptions, all handles returned by the API must be destroyed by a type-specific destroy function, which takes the address of the handle and clears it to prevent it being used again:</p>
<div class="highlight-python"><div class="highlight"><pre>Cmiss_region_destroy(&amp;region);
</pre></div>
</div>
<p>The only exceptions are &#8216;base_cast&#8217; functions for derived types which return a temporary handle to the base class for calling methods on it to simulate object-oriented polymorphism.
Excepting deliberate misuse of the API, while you have a valid handle to an object it is guaranteed to remain in existence, or at least in a safe state.</p>
</div>
<div class="section" id="reference-counting-and-object-lifetimes">
<h3>Reference Counting and Object Lifetimes<a class="headerlink" href="#reference-counting-and-object-lifetimes" title="Permalink to this headline">¶</a></h3>
<p>Internally, most objects are reference counted. Destroying the handle reduces the reference count, and, usually, when there are no external references held the object is destroyed.
Objects which are reference counted expose additional methods to obtain new references (i.e. increment reference count), which clients should use whenever additional handles must be held for an uncertain time by multiple objects:</p>
<div class="highlight-python"><div class="highlight"><pre>Cmiss_region_id extra_region_handle = Cmiss_region_access(region);
</pre></div>
</div>
<p>Handles to non-reference-counting API objects (those without &#8216;access&#8217; methods) should be carefully destroyed once when finished with them. It is possible these will be switched to being reference counted in future.
Most main reference counted objects are managed in sets by their owning objects to facilitate change messaging (see below).
Reference counted objects fall into 3 categories according to how their lifetimes are managed:</p>
<ol class="arabic">
<li><p class="first"><strong>Objects which can be discarded via methods on their owning object</strong>, including element (owner: mesh), node (owner: nodeset), graphic (owner: rendition), time_notifier (owner: time_keeper). There may be restrictions, for example, nodes may not be destroyed while in use by elements in the region. Calling the owner&#8217;s method to discard the object leaves it in a permanently orphaned, but safe state; the only practical action that can be done with them is to destroy any handles held.</p>
</li>
<li><p class="first"><strong>Objects whose lifetime management is switchable within their owning object</strong>, including major objects owned by field_module (field) and graphics_module (graphics_material, graphics_filter, tessellation, spectrum, scene). By default these objects are destroyed when the last external reference to them is removed. This strategy can be changed on a per-object basis by setting their &#8216;IS_MANAGED&#8217; flag to 1 which ensures that the object lives indefinitely in its owning object:</p>
<div class="highlight-python"><div class="highlight"><pre><span class="n">Cmiss_field_set_attribute_integer</span><span class="p">(</span><span class="n">field</span><span class="p">,</span> <span class="n">CMISS_FIELD_ATTRIBUTE_IS_MANAGED</span><span class="p">,</span> <span class="mi">1</span><span class="p">);</span>
</pre></div>
</div>
<p>The default case supports applications which want to do their own management of object lifetimes, and cases when an object is needed only temporarily. The common reason to &#8216;manage&#8217; objects is so they remain available for users to select to use: all objects read in from data files (e.g. fields) are automatically managed, otherwise they would never be available for use. Some field expressions require the use of intermediate fields which are often best left as &#8216;unmanaged&#8217; so they live or die with the final field.</p>
</li>
<li><p class="first"><strong>Simply reference counted objects</strong>, including region but many support objects which are not expected to be held after use. These are simply destroyed when no references are held to them.</p>
</li>
</ol>
<p>A further exception is that each region always has exactly 3 &#8216;master&#8217; mesh objects (for 1, 2 and 3 dimensions) and 2 nodesets (for nodes and &#8216;data&#8217;). These can be obtained from the region&#8217;s field module, but new ones cannot be created, nor can they be destroyed. These are limitations of the current data model.</p>
</div>
<div class="section" id="change-messaging">
<h3>Change Messaging<a class="headerlink" href="#change-messaging" title="Permalink to this headline">¶</a></h3>
<p>The library automatically updates graphics when changes are made to the fields and other objects which they are based on. It does this via internal change messages which are sent from their owning object to clients. Normally a change message is sent by every method call which modifies the state of an object, which is very inefficient if you are making many changes. Hence if more than one API is to be called, you should call the begin/end_change API on the owning object. The following example is for making many field changes to a region&#8217;s field module:</p>
<div class="highlight-python"><div class="highlight"><pre>Cmiss_field_module_begin_change(field_module);
// add or modify multiple fields from field_module here
Cmiss_field_module_end_change(field_module);
</pre></div>
</div>
<p>It is very important that you call the matching end_change for each begin_change. In code capable of throwing exceptions it is best to construct an object which calls begin_change on construction and end_change in its destructor so both are guaranteed to be called.
Region objects have hierarchical begin/end_hierarchical_change methods which prevent change messages for the entire region tree.</p>
</div>
<div class="section" id="api-method-details">
<h3>API Method Details<a class="headerlink" href="#api-method-details" title="Permalink to this headline">¶</a></h3>
<p>All constructors and functions for finding or getting existing objects return a new handle to the object on success, or NULL on failure:</p>
<div class="highlight-python"><div class="highlight"><pre>Cmiss_field_id field = Cmiss_field_module_find_field_by_name(field_module, &quot;coordinates&quot;);
</pre></div>
</div>
<p>Constructors (“Create” functions) always create the object in a safe, fully-constructed state. The primary reason for a constructor to fail is if arguments are missing or invalid. In most cases a different factory object is used to create new objects, e.g.:
String getter functions return allocated strings which must be freed using a supplied deallocate function:</p>
<div class="highlight-python"><div class="highlight"><pre>char *name = Cmiss_field_get_name(field);
// use name
Cmiss_deallocate(name);
</pre></div>
</div>
<p>API methods for setting or getting arrays of values require the size of the array to be passed as an argument, and it is up to the caller to provide a memory buffer of sufficient size:</p>
<div class="highlight-python"><div class="highlight"><pre>int Cmiss_field_assign_real(Cmiss_field_id field, Cmiss_field_cache_id cache, int number_of_values, const double *values);
int Cmiss_field_evaluate_real(Cmiss_field_id field, Cmiss_field_cache_id cache, int number_of_values, double *values);
</pre></div>
</div>
<p>Other functions return an integer &#8216;status code&#8217; which will be CMISS_OK on success, any other value on failure. We plan to return more useful error codes in future.</p>
</div>
</div>
<div class="section" id="the-zinc-plugin">
<h2>The Zinc Plugin<a class="headerlink" href="#the-zinc-plugin" title="Permalink to this headline">¶</a></h2>
<p>The Zinc plugin allows the library to be used from web pages including rendering into a canvas in the browser window with a custom GUI, all controlled by calling JavaScript bindings to the API. For the security of the client machine, the Zinc plugin omits all methods for writing to local files.
Some boilerplate code is needed to get the plugin up and running in a web page, and also to obtain data files over the web. These can be seen in the examples, plus other documentation on the website.
The Zinc JavaScript API is conceptually identical to the C API, but there are some key differences in appearance.
The Javascript bindings presents all API functions as methods on objects i.e. object.method(args), and the method name uses camelCase starting with little letters for the verb. Hence the C call:</p>
<div class="highlight-python"><div class="highlight"><pre>Cmiss_field_id field = Cmiss_field_module_find_field_by_name(field_module, &quot;coordinates&quot;);
</pre></div>
</div>
<p>becomes, in JavaScipt:</p>
<div class="highlight-python"><div class="highlight"><pre>var field = field_module.findFieldByName(&quot;coordinates&quot;)
</pre></div>
</div>
<p>Not only is the format much nicer to read, but you don&#8217;t have to clean-up any object handles as this is automatically done by the system when variables go out of scope, become unused or are reassigned.
Be aware that the Zinc plugin may be lag behind the C API, but it is a straight-forward task to bring missing functionality into the plugin, so do enquire. Also, we currently don&#8217;t have a good means for communicating what API is available, so it will be necessary to look at the full C API and translate the relevant function to the JavaScript format.</p>
</div>
<div class="section" id="the-zinc-bindings">
<h2>The Zinc Bindings<a class="headerlink" href="#the-zinc-bindings" title="Permalink to this headline">¶</a></h2>
<p>The Zinc bindings allows the library to be used from other scripting languages.  This is achieved through SWIG (Simplified Wrapper and Interface Generator).  Python bindings for the Zinc library are readily available, but bindings for other languages are easily generated through a similar process.
The Zinc Python API is conceptually identical to the C API, but there are some key differences in appearance.
The Python bindings presents all API functions as methods on objects i.e. object.method(args), and the method name uses camelCase starting with little letters for the verb. Hence the C call:</p>
<div class="highlight-python"><div class="highlight"><pre>Cmiss_field_id field = Cmiss_field_module_find_field_by_name(field_module, &quot;coordinates&quot;);
</pre></div>
</div>
<p>becomes, in Python:</p>
<div class="highlight-python"><div class="highlight"><pre><span class="n">field</span> <span class="o">=</span> <span class="n">field_module</span><span class="o">.</span><span class="n">findFieldByName</span><span class="p">(</span><span class="s">&quot;coordinates&quot;</span><span class="p">)</span>
</pre></div>
</div>
<p>Not only is the format much nicer to read, but you don&#8217;t have to clean-up any object handles as this is automatically done by the system when variables go out of scope, become unused or are reassigned.</p>
</div>
<div class="section" id="writing-an-application">
<h2>Writing an Application<a class="headerlink" href="#writing-an-application" title="Permalink to this headline">¶</a></h2>
<p>To start your application using the library, you will need to constuct the main Cmiss_context object using function Cmiss_context_create. The context provides access to all the other major objects in the data model, including the root region, and the graphics module. Current safest practice is to ensure that the handle to the Cmiss_context is destroyed after all other handles to CMISS Zinc objects are destroyed.</p>
<p>Model data is stored as fields, which belong to regions. Regions can be arranged into hierarchical tree structures, and provide namespaces for fields and some hierarchical relationships between them. Regions and fields can be read in from data files, including the native EX format and FieldML 0.4. Image fields can be defined from most common image formats. API is provided for creating finite element meshes and defining interpolation with basis functions, and a large number of field types are available to define new fields by applying operators to existing fields.</p>
<p>To create graphics, first we must get a handle to the graphics module by calling  Cmiss_context_get_default_graphics_module. All objects responsible for graphics generation are accessed from this module, including scenes, renditions, graphic objects, graphics materials, graphics filters, tessellation objects, spectrums.</p>
<p>Within the graphics module, each region can have a graphical representation called a &#8216;rendition&#8217; but before handles to each rendition can be created, renditions must be enabled for the region tree by calling Cmiss_graphics_module_enable_renditions on the root region. Thereafter you can call Cmiss_graphics_module_get_rendition to get a handle to the rendition for a region, and are then able to create graphics for it.</p>
<p>A rendition consists of a list of Cmiss_graphic objects, each of which has a type which sets the operation it uses to convert fields into graphics: points (element points, node points, data points, single point), lines, surfaces, iso-surfaces and streamlines. One of the key strengths of the CMISS Zinc library is that all aspects of graphics conversion are controlled by fields including the coordinates source, data values (for colouring with a spectrum to create &#8216;contour plots&#8217;), iso-scalar for iso-surfaces, stream vector for streamlines, glyph orientation and scaling for points. Combining this with the ability to define fields by applying operators on existing fields mean there are few limitations to what can be visualised.</p>
<p>To visualise the graphics using OpenGL in a widget you must set up the OpenGL context for the scene to be drawn into.  The scene_viewer_package can be obtained from the context and used to create a Cmiss_scene_viewer object.  A scene viewer renders the graphics from a scene; a scene essentially specifies the top region for which graphics are to be output and a graphics filter object controlling which graphics within that region tree are to be shown. The graphics module always has a default scene, and new scenes can also be created and managed. The default graphics filter, used by the default scene, filters according to the visibility flag for each graphic and each rendition.</p>
<p>To get the scene viewer to show all visible graphics within the scene at a default viewing angle, call the Cmiss_scene_viewer_view_all function.</p>
</div>
<div class="section" id="examples">
<h2>Examples<a class="headerlink" href="#examples" title="Permalink to this headline">¶</a></h2>
<p>The simple_axis_viewer example demonstrates how to make a simple application using the CMISS Zinc library and API:
<a class="reference external" href="http://cmiss.bioeng.auckland.ac.nz/development/examples/a/simple_axis_viewer/index.html">http://cmiss.bioeng.auckland.ac.nz/development/examples/a/simple_axis_viewer/index.html</a></p>
<p>The time_api example demonstrates how to set up a rendition and also how to receive time callbacks with the user interface is enabled:
<a class="reference external" href="http://cmiss.bioeng.auckland.ac.nz/development/examples/a/testing/cmiss_time_api/index.html">http://cmiss.bioeng.auckland.ac.nz/development/examples/a/testing/cmiss_time_api/index.html</a></p>
<p>The cmiss_field_image_api example demonstrates how an image field is created and modified via the API:
<a class="reference external" href="http://cmiss.bioeng.auckland.ac.nz/development/examples/a/testing/cmiss_field_image_api/index.html">http://cmiss.bioeng.auckland.ac.nz/development/examples/a/testing/cmiss_field_image_api/index.html</a></p>
<p>The meshing_api example shows how to create finite element meshes and interpolated fields:
<a class="reference external" href="http://cmiss.bioeng.auckland.ac.nz/development/examples/a/meshing_api/index.html">http://cmiss.bioeng.auckland.ac.nz/development/examples/a/meshing_api/index.html</a></p>
<p>The optimisation/mesh-alignment-c example shows how to use the optimisation API to optimise an objective function:
<a class="reference external" href="http://cmiss.bioeng.auckland.ac.nz/development/examples/a/optimisation/mesh-alignment-c/index.html">http://cmiss.bioeng.auckland.ac.nz/development/examples/a/optimisation/mesh-alignment-c/index.html</a></p>
</div>
<div class="section" id="main-cmiss-zinc-objects">
<h2>Main CMISS Zinc Objects<a class="headerlink" href="#main-cmiss-zinc-objects" title="Permalink to this headline">¶</a></h2>
<p>Following is a table describing the main classes of objects used in the CMISS Zinc interface, and their relationships to each other. Note that Field and to a lesser extent Mesh and Graphics filter objects have derived types with specialised behaviours and type-specific APIs; these are not listed here:</p>
<table border="1" class="docutils">
<colgroup>
<col width="9%" />
<col width="48%" />
<col width="14%" />
<col width="29%" />
</colgroup>
<thead valign="bottom">
<tr class="row-odd"><th class="head">Class</th>
<th class="head">Purpose</th>
<th class="head">Created or obtained from class.</th>
<th class="head">Main objects created or obtained from it.</th>
</tr>
</thead>
<tbody valign="top">
<tr class="row-even"><td>Context</td>
<td>Main object (instance) from which other main objects are obtained.</td>
<td>-</td>
<td><div class="first last line-block">
<div class="line">Region</div>
<div class="line">Graphics module</div>
<div class="line">Time keeper</div>
<div class="line">Scene viewer package</div>
</div>
</td>
</tr>
<tr class="row-odd"><td>Region</td>
<td>Hierarchical container of fields and child regions.</td>
<td><div class="first last line-block">
<div class="line">Context</div>
<div class="line">Region (as child)</div>
</div>
</td>
<td>Field module</td>
</tr>
<tr class="row-even"><td>Field module</td>
<td>Factory object for managing fields and related objects in a region.</td>
<td><div class="first last line-block">
<div class="line">Region</div>
<div class="line">Field</div>
</div>
</td>
<td><div class="first last line-block">
<div class="line">Field (many types)</div>
<div class="line">Mesh</div>
<div class="line">Nodeset</div>
<div class="line">Time Sequence</div>
<div class="line">Optimisation</div>
</div>
</td>
</tr>
<tr class="row-odd"><td>Field</td>
<td>Instance of concrete field type which can be evaluated over elements, at nodes etc.</td>
<td>Field module</td>
<td>-</td>
</tr>
<tr class="row-even"><td>Mesh</td>
<td>Owning container of elements over which finite element fields are defined.</td>
<td>Field module</td>
<td><div class="first last line-block">
<div class="line">Element</div>
<div class="line">Element template</div>
<div class="line">Element basis</div>
</div>
</td>
</tr>
<tr class="row-odd"><td>Element</td>
<td>A single finite element chart over which fields can be interpolated.</td>
<td>Mesh</td>
<td>-</td>
</tr>
<tr class="row-even"><td><div class="first last line-block">
<div class="line">Element template</div>
</div>
</td>
<td>Object storing information for creating new elements and defining element fields.</td>
<td>Mesh</td>
<td>-</td>
</tr>
<tr class="row-odd"><td>Element basis</td>
<td>Basis function description.</td>
<td>Mesh</td>
<td>-</td>
</tr>
<tr class="row-even"><td>Nodeset</td>
<td>Owning container of Nodes</td>
<td>Field module</td>
<td><div class="first last line-block">
<div class="line">Node</div>
<div class="line">Node template</div>
</div>
</td>
</tr>
<tr class="row-odd"><td>Node</td>
<td>A point object, capable of having parameters stored at it.</td>
<td>Nodeset</td>
<td>-</td>
</tr>
<tr class="row-even"><td>Node template</td>
<td>Object storing information for creating new nodes and defining node fields.</td>
<td>Nodeset</td>
<td>-</td>
</tr>
<tr class="row-odd"><td>Time sequence</td>
<td>Stores an increasing list of time values for defining time-varying fields.</td>
<td>Field module</td>
<td>-</td>
</tr>
<tr class="row-even"><td>Time keeper</td>
<td>Keeps track of system time and calls time notifiers to support animation.</td>
<td>Context</td>
<td>Time notifier</td>
</tr>
<tr class="row-odd"><td>Time notifier</td>
<td>Describes pattern of timer notification and callbacks for a client.</td>
<td>Time keeper</td>
<td>-</td>
</tr>
<tr class="row-even"><td>Graphics module</td>
<td>Container/owner of all graphics-related objects.</td>
<td>Context</td>
<td><div class="first last line-block">
<div class="line">Rendition</div>
<div class="line">Graphics material</div>
<div class="line">Spectrum</div>
<div class="line">Graphics filter</div>
<div class="line">Tessellation</div>
<div class="line">Scene</div>
</div>
</td>
</tr>
<tr class="row-odd"><td>Rendition</td>
<td>Collection of graphic objects visualising fields in a region.</td>
<td>Graphics module</td>
<td>Graphic</td>
</tr>
<tr class="row-even"><td>Graphics material</td>
<td>Object giving colour, lighting and material shader properties to a graphic.</td>
<td>Graphics module</td>
<td>-</td>
</tr>
<tr class="row-odd"><td>Spectrum</td>
<td>Object which modifies colours of graphics depending on values of the graphic&#8217;s data field.</td>
<td>Graphics module</td>
<td>-</td>
</tr>
<tr class="row-even"><td>Graphics filter</td>
<td>Boolean operator determining visibility of graphics.</td>
<td>Graphics module</td>
<td>-</td>
</tr>
<tr class="row-odd"><td>Tessellation</td>
<td>Controls discretization of elements into line segments for graphics.</td>
<td>Graphics module</td>
<td>-</td>
</tr>
<tr class="row-even"><td>Scene</td>
<td>Controls which graphics are visible by combining a top region and a graphics filter.</td>
<td>Graphics module</td>
<td>-</td>
</tr>
<tr class="row-odd"><td>Graphic</td>
<td>Instance of a conversion operator making graphics from fields: points, lines, surfaces, isosurfaces, streamlines.</td>
<td>Rendition</td>
<td>-</td>
</tr>
<tr class="row-even"><td><div class="first last line-block">
<div class="line">Scene viewer package</div>
</div>
</td>
<td>Factory object for creating scene viewers.</td>
<td>Context</td>
<td>Scene viewer</td>
</tr>
<tr class="row-odd"><td><div class="first last line-block">
<div class="line">Scene viewer</div>
</div>
</td>
<td>Object for rendering a CMISS Zinc scene into a UI-layer specific drawing canvas.</td>
<td>Scene viewer package</td>
<td>-</td>
</tr>
<tr class="row-even"><td>Optimisation</td>
<td>Describes and performs non-linear optimisation problems on Fields.</td>
<td>Field module</td>
<td>-</td>
</tr>
</tbody>
</table>
</div>
</div>


          </div>
      </div>
    </div>
      <div class="botnav">
      
        <p>
        <a class="uplink" href="../index">Contents</a>
        </p>

      </div>
            
		</div><!-- end #main -->

		<div id="sidebar">
<!--#include virtual="/software/zinclibrary/utility-peer-nav.txt" -->    
         <div id="toc">
          <h6><a href="../index"><span>PyZinc v3.0.0 tutorials</span></a></h6>
          <ul>
<li><a class="reference internal" href="#">Introduction to the CMISS Zinc Library API v3.0</a><ul>
<li><a class="reference internal" href="#the-cmiss-zinc-library">The CMISS Zinc Library</a></li>
<li><a class="reference internal" href="#api-concepts-and-standards">API Concepts and Standards</a><ul>
<li><a class="reference internal" href="#context">Context</a></li>
<li><a class="reference internal" href="#field">Field</a></li>
<li><a class="reference internal" href="#region">Region</a></li>
<li><a class="reference internal" href="#mesh">Mesh</a></li>
<li><a class="reference internal" href="#element">Element</a></li>
<li><a class="reference internal" href="#node">Node</a></li>
<li><a class="reference internal" href="#nodeset">Nodeset</a></li>
<li><a class="reference internal" href="#graphic">Graphic</a></li>
<li><a class="reference internal" href="#rendition">Rendition</a></li>
<li><a class="reference internal" href="#ansi-c">ANSI C</a></li>
<li><a class="reference internal" href="#not-threadsafe">Not Threadsafe</a></li>
<li><a class="reference internal" href="#include-files">Include Files</a></li>
<li><a class="reference internal" href="#namespaces">Namespaces</a></li>
<li><a class="reference internal" href="#object-interface-based">Object/Interface-based</a></li>
<li><a class="reference internal" href="#object-handles-and-clean-up">Object Handles and Clean-Up</a></li>
<li><a class="reference internal" href="#reference-counting-and-object-lifetimes">Reference Counting and Object Lifetimes</a></li>
<li><a class="reference internal" href="#change-messaging">Change Messaging</a></li>
<li><a class="reference internal" href="#api-method-details">API Method Details</a></li>
</ul>
</li>
<li><a class="reference internal" href="#the-zinc-plugin">The Zinc Plugin</a></li>
<li><a class="reference internal" href="#the-zinc-bindings">The Zinc Bindings</a></li>
<li><a class="reference internal" href="#writing-an-application">Writing an Application</a></li>
<li><a class="reference internal" href="#examples">Examples</a></li>
<li><a class="reference internal" href="#main-cmiss-zinc-objects">Main CMISS Zinc Objects</a></li>
</ul>
</li>
</ul>

        </div>
            <!--#include virtual="utility-download.txt" -->

		</div><!-- end #sidebar -->
		
	</article><!-- end .single-project -->
	
</section><!-- end #content -->

<!--#include virtual="/inc/footer.txt" -->
