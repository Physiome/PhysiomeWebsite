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
		</header><!-- end .page-header --><!-- end .page-header -->

		<div id="main">
		
			<!-- Content -->
    <div class="document">
      <div class="documentwrapper">
          <div class="body">
            
  <div class="section" id="zinc-api-documentation">
<h1>Zinc API Documentation<a class="headerlink" href="#zinc-api-documentation" title="Permalink to this headline">¶</a></h1>
<div class="line-block" id="zinccontext_8h">
<div class="line"><em>file</em> <strong>context.h</strong></div>
<div class="line"><em>#include &#8220;types/contextid.h&#8221;</em></div>
<div class="line"><em>#include &#8220;types/fontid.h&#8221;</em></div>
<div class="line"><em>#include &#8220;types/glyphid.h&#8221;</em></div>
<div class="line"><em>#include &#8220;types/materialid.h&#8221;</em></div>
<div class="line"><em>#include &#8220;types/regionid.h&#8221;</em></div>
<div class="line"><em>#include &#8220;types/scenefilterid.h&#8221;</em></div>
<div class="line"><em>#include &#8220;types/sceneviewerid.h&#8221;</em></div>
<div class="line"><em>#include &#8220;types/spectrumid.h&#8221;</em></div>
<div class="line"><em>#include &#8220;types/tessellationid.h&#8221;</em></div>
<div class="line"><em>#include &#8220;types/timekeeperid.h&#8221;</em></div>
</div>
<blockquote>
<div><p></p>
<p></p>
<em>Functions</em><blockquote>
<div><p><span class="target" id="zinccontext_8h_1a7a037c5cc149bf2e9ee72a1f01ba0cd5"></span><div class="line-block">
<div class="line">ZINC_API cmzn_context_id <strong>cmzn_context_create</strong>(const char * id)</div>
</div>
</p>
<blockquote>
<div><p></p>
<p><p>context.h</p>
<p>API to access the main root structure of cmgui. Create a new cmgui context with an id &lt;id&gt;.</p>
<p><dl class="docutils">
<dt><strong>Return</strong></dt>
<dd>a handle to a new cmzn_context if successfully create, otherwise NULL. </dd>
<dt><strong>Parameters</strong></dt>
<dd><ul class="breatheparameterlist first last">
<li><tt class="first docutils literal"><span class="pre">id</span></tt> - <p>The identifier given to the new context. </p>
</li>
</ul>
</dd>
</dl>
</p>
</p>
</div></blockquote>
<p><span class="target" id="zinccontext_8h_1a075a9298261069aeddea70d5d577624d"></span><div class="line-block">
<div class="line">ZINC_API cmzn_context_id <strong>cmzn_context_access</strong>(cmzn_context_id context)</div>
</div>
</p>
<blockquote>
<div><p></p>
<p><p>Returns a new reference to the context with reference count incremented. Caller is responsible for destroying the new reference.</p>
<p><dl class="docutils">
<dt><strong>Return</strong></dt>
<dd>New region reference with incremented reference count. </dd>
<dt><strong>Parameters</strong></dt>
<dd><ul class="breatheparameterlist first last">
<li><tt class="first docutils literal"><span class="pre">context</span></tt> - <p>The context to obtain a new reference to. </p>
</li>
</ul>
</dd>
</dl>
</p>
</p>
</div></blockquote>
<p><span class="target" id="zinccontext_8h_1aa8b7f2afa7348fb9477a7aac36a96c5c"></span><div class="line-block">
<div class="line">ZINC_API int <strong>cmzn_context_destroy</strong>(cmzn_context_id * context_address)</div>
</div>
</p>
<blockquote>
<div><p></p>
<p><p>Destroy a context.</p>
<p><dl class="docutils">
<dt><strong>Return</strong></dt>
<dd>Status CMZN_OK on success, any other value on failure. </dd>
<dt><strong>Parameters</strong></dt>
<dd><ul class="breatheparameterlist first last">
<li><tt class="first docutils literal"><span class="pre">context_address</span></tt> - <p>The address to the handle of the context to be destroyed. </p>
</li>
</ul>
</dd>
</dl>
</p>
</p>
</div></blockquote>
<p><span class="target" id="zinccontext_8h_1a14cf17e747eddfc3bf848731b15b173d"></span><div class="line-block">
<div class="line">ZINC_API cmzn_region_id <strong>cmzn_context_get_default_region</strong>(cmzn_context_id context)</div>
</div>
</p>
<blockquote>
<div><p></p>
<p><p>Returns the default region in the context.</p>
<p><dl class="docutils">
<dt><strong>Return</strong></dt>
<dd>The handle to the default region of the context if successfully called, otherwise 0. </dd>
<dt><strong>Parameters</strong></dt>
<dd><ul class="breatheparameterlist first last">
<li><tt class="first docutils literal"><span class="pre">context</span></tt> - <p>Handle to a context object. </p>
</li>
</ul>
</dd>
</dl>
</p>
</p>
</div></blockquote>
<p><span class="target" id="zinccontext_8h_1aeb90d8a480dfc20eb513b7109d6bb4a5"></span><div class="line-block">
<div class="line">ZINC_API cmzn_region_id <strong>cmzn_context_create_region</strong>(cmzn_context_id context)</div>
</div>
</p>
<blockquote>
<div><p></p>
<p><p>Create a new region and return a reference to it. Use this function to create a region forming the root of an independent region tree. To create regions for addition to an existing region tree, use cmzn_region_create_region.</p>
<p><dl class="docutils">
<dt><strong>See</strong></dt>
<dd>cmzn_region_create_region </dd>
<dt><strong>Return</strong></dt>
<dd>Reference to newly created region if successful, otherwise NULL. </dd>
<dt><strong>Parameters</strong></dt>
<dd><ul class="breatheparameterlist first last">
<li><tt class="first docutils literal"><span class="pre">context</span></tt> - <p>Handle to a context object. </p>
</li>
</ul>
</dd>
</dl>
</p>
</p>
</div></blockquote>
<p><span class="target" id="zinccontext_8h_1af1915bb8e261dee1e3566fa3544f6983"></span><div class="line-block">
<div class="line">ZINC_API cmzn_fontmodule_id <strong>cmzn_context_get_fontmodule</strong>(cmzn_context_id context)</div>
</div>
</p>
<blockquote>
<div><p></p>
<p><p>Get the font module which manages fonts for rendering text in graphics.</p>
<p><dl class="docutils">
<dt><strong>Return</strong></dt>
<dd>Handle to the font module, or 0 on error. Up to caller to destroy. </dd>
<dt><strong>Parameters</strong></dt>
<dd><ul class="breatheparameterlist first last">
<li><tt class="first docutils literal"><span class="pre">context</span></tt> - <p>The context to request the module from. </p>
</li>
</ul>
</dd>
</dl>
</p>
</p>
</div></blockquote>
<p><span class="target" id="zinccontext_8h_1a314a0a198a4e5e8da64a99b1be5bdb31"></span><div class="line-block">
<div class="line">ZINC_API cmzn_glyphmodule_id <strong>cmzn_context_get_glyphmodule</strong>(cmzn_context_id context)</div>
</div>
</p>
<blockquote>
<div><p></p>
<p><p>Get the glyph module which stores static graphics for visualising points, vectors, axes etc. Note on startup no glyphs are defined and glyph module functions need to be called to define standard glyphs.</p>
<p><dl class="docutils">
<dt><strong>Return</strong></dt>
<dd>Handle to the glyph module, or 0 on error. Up to caller to destroy. </dd>
<dt><strong>Parameters</strong></dt>
<dd><ul class="breatheparameterlist first last">
<li><tt class="first docutils literal"><span class="pre">context</span></tt> - <p>The context to request the module from. </p>
</li>
</ul>
</dd>
</dl>
</p>
</p>
</div></blockquote>
<p><span class="target" id="zinccontext_8h_1a8d2846da8a87bf338f6a1e4fb00d1799"></span><div class="line-block">
<div class="line">ZINC_API cmzn_materialmodule_id <strong>cmzn_context_get_materialmodule</strong>(cmzn_context_id context)</div>
</div>
</p>
<blockquote>
<div><p></p>
<p><p>Return the material module which manages materials used to colour, texture and shade graphics. Note on startup only materials &#8220;default&#8221; and &#8220;default_selected&#8221; are defined, as white and red, respectively. Additional standard and custom materials can be defined using material module functions.</p>
<p><dl class="docutils">
<dt><strong>Return</strong></dt>
<dd>Handle to the material module, or 0 on error. Up to caller to destroy. </dd>
<dt><strong>Parameters</strong></dt>
<dd><ul class="breatheparameterlist first last">
<li><tt class="first docutils literal"><span class="pre">context</span></tt> - <p>The context to request the module from. </p>
</li>
</ul>
</dd>
</dl>
</p>
</p>
</div></blockquote>
<p><span class="target" id="zinccontext_8h_1ae02e54dda6faca39cb6b805df0484c16"></span><div class="line-block">
<div class="line">ZINC_API cmzn_scenefiltermodule_id <strong>cmzn_context_get_scenefiltermodule</strong>(cmzn_context_id context)</div>
</div>
</p>
<blockquote>
<div><p></p>
<p><p>Get the scene filter module which manages scenefilter objects for filtering contents of scenes with scenepicker and sceneviewer etc.</p>
<p><dl class="docutils">
<dt><strong>Return</strong></dt>
<dd>Handle to the scene filter module, or 0 on error. Up to caller to destroy. </dd>
<dt><strong>Parameters</strong></dt>
<dd><ul class="breatheparameterlist first last">
<li><tt class="first docutils literal"><span class="pre">context</span></tt> - <p>The context to request the module from. </p>
</li>
</ul>
</dd>
</dl>
</p>
</p>
</div></blockquote>
<p><span class="target" id="zinccontext_8h_1a56555a2d7d26f73db56ec9eb411dadda"></span><div class="line-block">
<div class="line">ZINC_API cmzn_sceneviewermodule_id <strong>cmzn_context_get_sceneviewermodule</strong>(cmzn_context_id context)</div>
</div>
</p>
<blockquote>
<div><p></p>
<p><p>Returns a handle to a sceneviewer module which manages sceneviewer objects for rendering 3-D scenes into rectangular windows or canvases using OpenGL.</p>
<p><dl class="docutils">
<dt><strong>Return</strong></dt>
<dd>Handle to the sceneviewer module, or 0 on error. Up to caller to destroy. </dd>
<dt><strong>Parameters</strong></dt>
<dd><ul class="breatheparameterlist first last">
<li><tt class="first docutils literal"><span class="pre">context</span></tt> - <p>The context to request the module from. </p>
</li>
</ul>
</dd>
</dl>
</p>
</p>
</div></blockquote>
<p><span class="target" id="zinccontext_8h_1ad12fc106419a0b57651af3e242a6e554"></span><div class="line-block">
<div class="line">ZINC_API cmzn_spectrummodule_id <strong>cmzn_context_get_spectrummodule</strong>(cmzn_context_id context)</div>
</div>
</p>
<blockquote>
<div><p></p>
<p><p>Get the spectrum module which manages spectrum objects controlling how graphics data fields are converted into colours.</p>
<p><dl class="docutils">
<dt><strong>Return</strong></dt>
<dd>Handle to the spectrum module, or 0 on error. Up to caller to destroy. </dd>
<dt><strong>Parameters</strong></dt>
<dd><ul class="breatheparameterlist first last">
<li><tt class="first docutils literal"><span class="pre">context</span></tt> - <p>The context to request the module from. </p>
</li>
</ul>
</dd>
</dl>
</p>
</p>
</div></blockquote>
<p><span class="target" id="zinccontext_8h_1a1b7036d1f44125fd558f1173c1108902"></span><div class="line-block">
<div class="line">ZINC_API cmzn_tessellationmodule_id <strong>cmzn_context_get_tessellationmodule</strong>(cmzn_context_id context)</div>
</div>
</p>
<blockquote>
<div><p></p>
<p><p>Get the tessellation module which manages objects controlling how curves are approximated by line segments in graphics.</p>
<p><dl class="docutils">
<dt><strong>Return</strong></dt>
<dd>Handle to the tesselation module, or 0 on error. Up to caller to destroy. </dd>
<dt><strong>Parameters</strong></dt>
<dd><ul class="breatheparameterlist first last">
<li><tt class="first docutils literal"><span class="pre">context</span></tt> - <p>The context to request the module from. </p>
</li>
</ul>
</dd>
</dl>
</p>
</p>
</div></blockquote>
<p><span class="target" id="zinccontext_8h_1a8f0a6449495a73e26d061f8500a50ecf"></span><div class="line-block">
<div class="line">ZINC_API cmzn_timekeepermodule_id <strong>cmzn_context_get_timekeepermodule</strong>(cmzn_context_id context)</div>
</div>
</p>
<blockquote>
<div><p></p>
<p><p>Get the timekeeper module which manages objects for synchronising time across zinc objects.</p>
<p><dl class="docutils">
<dt><strong>Return</strong></dt>
<dd>Handle to the timekeeper module, or 0 on error. Up to caller to destroy. </dd>
<dt><strong>Parameters</strong></dt>
<dd><ul class="breatheparameterlist first last">
<li><tt class="first docutils literal"><span class="pre">context</span></tt> - <p>The context to request the module from. </p>
</li>
</ul>
</dd>
</dl>
</p>
</p>
</div></blockquote>
<p><span class="target" id="zinccontext_8h_1a54a97431a1f6fc0020a0b44817bf741c"></span><div class="line-block">
<div class="line">ZINC_API int <strong>cmzn_context_get_version</strong>(cmzn_context_id context, int * version_out)</div>
</div>
</p>
<blockquote>
<div><p></p>
<p><p>Get the version number of this Zinc library. It will return the major version, minor version and patch version in a 3 component integer array.</p>
<p><dl class="docutils">
<dt><strong>Return</strong></dt>
<dd>Status CMZN_OK on success, any other value on failure. </dd>
<dt><strong>Parameters</strong></dt>
<dd><ul class="breatheparameterlist first last">
<li><tt class="first docutils literal"><span class="pre">context</span></tt> - <p>Handle to the context. </p>
</li>
<li><tt class="first docutils literal"><span class="pre">version_out</span></tt> - <p>Array of size 3 to hold the values of the version number, they are the major version, minor version and patch version respectively. </p>
</li>
</ul>
</dd>
</dl>
</p>
</p>
</div></blockquote>
<p><span class="target" id="zinccontext_8h_1ad724febaab2f164195b18a69b59c952f"></span><div class="line-block">
<div class="line">ZINC_API int <strong>cmzn_context_get_revision</strong>(cmzn_context_id context)</div>
</div>
</p>
<blockquote>
<div><p></p>
<p><p>Get the revision number of this Zinc library.</p>
<p><dl class="docutils">
<dt><strong>Return</strong></dt>
<dd>Revision of this Zinc library on success, 0 on failure. </dd>
<dt><strong>Parameters</strong></dt>
<dd><ul class="breatheparameterlist first last">
<li><tt class="first docutils literal"><span class="pre">context</span></tt> - <p>Handle to the context. </p>
</li>
</ul>
</dd>
</dl>
</p>
</p>
</div></blockquote>
<p><span class="target" id="zinccontext_8h_1affd344ecb3489a39aca7d4c2446c5d41"></span><div class="line-block">
<div class="line">ZINC_API char * <strong>cmzn_context_get_version_string</strong>(cmzn_context_id context)</div>
</div>
</p>
<blockquote>
<div><p></p>
<p><p>Get the version string of this Zinc library. The version string will be output in the following format &#8220;[major version].[minor version].[patch version].r[revision(M)](.Debug)&#8221; (M) indicates this binary contains local modifications that are not included in the revision, and (.Debug) indicates this binary is not optimised.</p>
<p><dl class="docutils">
<dt><strong>Return</strong></dt>
<dd>on success : allocated string containing version details. Up to caller to free using cmzn_deallocate(). </dd>
<dt><strong>Parameters</strong></dt>
<dd><ul class="breatheparameterlist first last">
<li><tt class="first docutils literal"><span class="pre">context</span></tt> - <p>Handle to the context. </p>
</li>
</ul>
</dd>
</dl>
</p>
</p>
</div></blockquote>
</div></blockquote>
</div></blockquote>
<div class="line-block" id="zinccore_8h">
<div class="line"><em>file</em> <strong>core.h</strong></div>
<div class="line"><em>#include &#8220;zinc/zincsharedobject.h&#8221;</em></div>
</div>
<blockquote>
<div><p></p>
<p></p>
<em>Functions</em><blockquote>
<div><p><span class="target" id="zinccore_8h_1a2eec85cc614e88c2e2f88c9a382a66c5"></span><div class="line-block">
<div class="line">ZINC_API void * <strong>cmzn_allocate</strong>(int bytes)</div>
</div>
</p>
<blockquote>
<div><p></p>
<p></p>
</div></blockquote>
<p><span class="target" id="zinccore_8h_1a11a0b58b48067b1cedbd90e35fe9580b"></span><div class="line-block">
<div class="line">ZINC_API int <strong>cmzn_deallocate</strong>(void * ptr)</div>
</div>
</p>
<blockquote>
<div><p></p>
<p></p>
</div></blockquote>
</div></blockquote>
</div></blockquote>
<div class="line-block" id="zincdifferentialoperator_8h">
<div class="line"><em>file</em> <strong>differentialoperator.h</strong></div>
<div class="line"><em>#include &#8220;types/differentialoperatorid.h&#8221;</em></div>
<div class="line"><em>#include &#8220;zinc/zincsharedobject.h&#8221;</em></div>
</div>
<blockquote>
<div><p></p>
<p></p>
<em>Functions</em><blockquote>
<div><p><span class="target" id="zincdifferentialoperator_8h_1a4277a405c2a97b5544dbf6b0eb9524f6"></span><div class="line-block">
<div class="line">ZINC_API cmzn_differentialoperator_id <strong>cmzn_differentialoperator_access</strong>(cmzn_differentialoperator_id differential_operator)</div>
</div>
</p>
<blockquote>
<div><p></p>
<p><p>FILE : differentialoperator.h</p>
<p>Public interface to differential operator objects used to specify which field derivative to evaluate. Returns a new reference to the differential operator with reference count incremented. Caller is responsible for destroying the new reference.</p>
<p><dl class="docutils">
<dt><strong>Return</strong></dt>
<dd>New differential operator reference with incremented reference count. </dd>
<dt><strong>Parameters</strong></dt>
<dd><ul class="breatheparameterlist first last">
<li><tt class="first docutils literal"><span class="pre">differential_operator</span></tt> - <p>The differential operator to obtain a new reference to. </p>
</li>
</ul>
</dd>
</dl>
</p>
</p>
</div></blockquote>
<p><span class="target" id="zincdifferentialoperator_8h_1a98a0251b34a76fe742f3849816b00776"></span><div class="line-block">
<div class="line">ZINC_API int <strong>cmzn_differentialoperator_destroy</strong>(cmzn_differentialoperator_id * differential_operator_address)</div>
</div>
</p>
<blockquote>
<div><p></p>
<p><p>Destroys reference to the differential operator and sets pointer/handle to NULL. Internally this just decrements the reference count.</p>
<p><dl class="docutils">
<dt><strong>Return</strong></dt>
<dd>Status CMZN_OK on success, any other value on failure. </dd>
<dt><strong>Parameters</strong></dt>
<dd><ul class="breatheparameterlist first last">
<li><tt class="first docutils literal"><span class="pre">differential_operator_address</span></tt> - <p>Address of differential operator reference. </p>
</li>
</ul>
</dd>
</dl>
</p>
</p>
</div></blockquote>
</div></blockquote>
</div></blockquote>
<div class="line-block" id="zincelement_8h">
<div class="line"><em>file</em> <strong>element.h</strong></div>
<div class="line"><em>#include &#8220;types/differentialoperatorid.h&#8221;</em></div>
<div class="line"><em>#include &#8220;types/elementid.h&#8221;</em></div>
<div class="line"><em>#include &#8220;types/fieldid.h&#8221;</em></div>
<div class="line"><em>#include &#8220;types/fieldmoduleid.h&#8221;</em></div>
<div class="line"><em>#include &#8220;types/nodeid.h&#8221;</em></div>
<div class="line"><em>#include &#8220;zinc/zincsharedobject.h&#8221;</em></div>
</div>
<blockquote>
<div><p></p>
<p></p>
<em>Functions</em><blockquote>
<div><p><span class="target" id="zincelement_8h_1ae75930ee818325f7a4f1af206bb0d315"></span><div class="line-block">
<div class="line">ZINC_API enum cmzn_element_shape_type <strong>cmzn_element_shape_type_enum_from_string</strong>(const char * string)</div>
</div>
</p>
<blockquote>
<div><p></p>
<p><p>FILE : element.h</p>
<p>The public interface to cmzn_element, finite element meshes. Convert a short name into an enum if the name matches any of the members in the enum.</p>
<p><dl class="docutils">
<dt><strong>Return</strong></dt>
<dd>the correct enum type if a match is found. </dd>
<dt><strong>Parameters</strong></dt>
<dd><ul class="breatheparameterlist first last">
<li><tt class="first docutils literal"><span class="pre">string</span></tt> - <p>string of the short enumerator name </p>
</li>
</ul>
</dd>
</dl>
</p>
</p>
</div></blockquote>
<p><span class="target" id="zincelement_8h_1a7171034fd0664b49e952564da0a418ba"></span><div class="line-block">
<div class="line">ZINC_API char * <strong>cmzn_element_shape_type_enum_to_string</strong>(enum cmzn_element_shape_type type)</div>
</div>
</p>
<blockquote>
<div><p></p>
<p><p>Return an allocated short name of the enum type from the provided enum. User must call cmzn_deallocate to destroy the successfully returned string.</p>
<p><dl class="docutils">
<dt><strong>Return</strong></dt>
<dd>an allocated string which stored the short name of the enum. </dd>
<dt><strong>Parameters</strong></dt>
<dd><ul class="breatheparameterlist first last">
<li><tt class="first docutils literal"><span class="pre">type</span></tt> - <p>enum to be converted into string </p>
</li>
</ul>
</dd>
</dl>
</p>
</p>
</div></blockquote>
<p><span class="target" id="zincelement_8h_1a63b85bc5853f8daa1e26f59dff906104"></span><div class="line-block">
<div class="line">ZINC_API enum cmzn_elementbasis_function_type <strong>cmzn_elementbasis_function_type_enum_from_string</strong>(const char * string)</div>
</div>
</p>
<blockquote>
<div><p></p>
<p><p>Convert a short name into an enum if the name matches any of the members in the enum.</p>
<p><dl class="docutils">
<dt><strong>Return</strong></dt>
<dd>the correct enum type if a match is found. </dd>
<dt><strong>Parameters</strong></dt>
<dd><ul class="breatheparameterlist first last">
<li><tt class="first docutils literal"><span class="pre">string</span></tt> - <p>string of the short enumerator name </p>
</li>
</ul>
</dd>
</dl>
</p>
</p>
</div></blockquote>
<p><span class="target" id="zincelement_8h_1a1f97789b97fa6ce25e759bdfc8041d46"></span><div class="line-block">
<div class="line">ZINC_API char * <strong>cmzn_elementbasis_function_type_enum_to_string</strong>(enum cmzn_elementbasis_function_type type)</div>
</div>
</p>
<blockquote>
<div><p></p>
<p><p>Return an allocated short name of the enum type from the provided enum. User must call cmzn_deallocate to destroy the successfully returned string.</p>
<p><dl class="docutils">
<dt><strong>Return</strong></dt>
<dd>an allocated string which stored the short name of the enum. </dd>
<dt><strong>Parameters</strong></dt>
<dd><ul class="breatheparameterlist first last">
<li><tt class="first docutils literal"><span class="pre">type</span></tt> - <p>enum to be converted into string </p>
</li>
</ul>
</dd>
</dl>
</p>
</p>
</div></blockquote>
<p><span class="target" id="zincelement_8h_1a69e75f2e1484b7056a256b352489e35c"></span><div class="line-block">
<div class="line">ZINC_API cmzn_elementbasis_id <strong>cmzn_fieldmodule_create_elementbasis</strong>(cmzn_fieldmodule_id fieldmodule, int dimension, enum cmzn_elementbasis_function_type function_type)</div>
</div>
</p>
<blockquote>
<div><p></p>
<p><p>Creates an element_basis object for describing element basis functions.</p>
<p><dl class="docutils">
<dt><strong>Return</strong></dt>
<dd>Handle to element_basis, or NULL if error. </dd>
<dt><strong>Parameters</strong></dt>
<dd><ul class="breatheparameterlist first last">
<li><tt class="first docutils literal"><span class="pre">fieldmodule</span></tt> - <p>Handle to a field module. Note the returned basis can be used to define fields in any field module of the region tree. </p>
</li>
<li><tt class="first docutils literal"><span class="pre">dimension</span></tt> - <p>The dimension of element chart the basis is for. </p>
</li>
<li><tt class="first docutils literal"><span class="pre">function_type</span></tt> - <p>The basis function type to use in each dimension i.e. basis function is initially homogeneous. </p>
</li>
</ul>
</dd>
</dl>
</p>
</p>
</div></blockquote>
<p><span class="target" id="zincelement_8h_1ab01435b5322650a04ae4aeb637223ae8"></span><div class="line-block">
<div class="line">ZINC_API cmzn_mesh_id <strong>cmzn_fieldmodule_find_mesh_by_dimension</strong>(cmzn_fieldmodule_id fieldmodule, int dimension)</div>
</div>
</p>
<blockquote>
<div><p></p>
<p><p>Get a handle to the default mesh of a given dimension. Cmgui is currently limited to 1 mesh of each dimension from 1 to 3. These meshes have default names of &#8220;mesh_Nd&#8221;, where &#8220;N&#8221; is the dimension.</p>
<p><dl class="docutils">
<dt><strong>Return</strong></dt>
<dd>Handle to the finite element mesh, or NULL if error. </dd>
<dt><strong>Parameters</strong></dt>
<dd><ul class="breatheparameterlist first last">
<li><tt class="first docutils literal"><span class="pre">fieldmodule</span></tt> - <p>The field module the mesh belongs to. </p>
</li>
<li><tt class="first docutils literal"><span class="pre">dimension</span></tt> - <p>The dimension of the mesh from 1 to 3. </p>
</li>
</ul>
</dd>
</dl>
</p>
</p>
</div></blockquote>
<p><span class="target" id="zincelement_8h_1a9d6a73e78ce363561987a045bd569b67"></span><div class="line-block">
<div class="line">ZINC_API cmzn_mesh_id <strong>cmzn_fieldmodule_find_mesh_by_name</strong>(cmzn_fieldmodule_id fieldmodule, const char * mesh_name)</div>
</div>
</p>
<blockquote>
<div><p></p>
<p><p>Get a handle to a finite element mesh from its name. A mesh is the container of elements of a fixed dimension. Valid names may be any element_group field, or any of the following special names: &#8220;mesh3d&#8221; = 3-D elements. &#8220;mesh2d&#8221; = 2-D elements including faces of 3-D elements. &#8220;mesh1d&#8221; = 1-D elements including faces (lines) of 2-D elements. Note that the default names for element group fields created from a group is GROUP_NAME.MESH_NAME, with mesh names as above.</p>
<p><dl class="docutils">
<dt><strong>Return</strong></dt>
<dd>Handle to the finite element mesh, or NULL if error. </dd>
<dt><strong>Parameters</strong></dt>
<dd><ul class="breatheparameterlist first last">
<li><tt class="first docutils literal"><span class="pre">fieldmodule</span></tt> - <p>The field module the mesh belongs to. </p>
</li>
<li><tt class="first docutils literal"><span class="pre">name</span></tt> - <p>The name of the finite element mesh. </p>
</li>
</ul>
</dd>
</dl>
</p>
</p>
</div></blockquote>
<p><span class="target" id="zincelement_8h_1aca3e076470b1879496f4eb4346e91cbb"></span><div class="line-block">
<div class="line">ZINC_API cmzn_mesh_id <strong>cmzn_mesh_access</strong>(cmzn_mesh_id mesh)</div>
</div>
</p>
<blockquote>
<div><p></p>
<p><p>Returns a new handle to the mesh with reference count incremented. Caller is responsible for destroying the new handle.</p>
<p><dl class="docutils">
<dt><strong>Return</strong></dt>
<dd>New mesh handle with incremented reference count. </dd>
<dt><strong>Parameters</strong></dt>
<dd><ul class="breatheparameterlist first last">
<li><tt class="first docutils literal"><span class="pre">mesh</span></tt> - <p>The mesh to obtain a new reference to. </p>
</li>
</ul>
</dd>
</dl>
</p>
</p>
</div></blockquote>
<p><span class="target" id="zincelement_8h_1ad6eb2163357d862b8bb41422774dc53a"></span><div class="line-block">
<div class="line">ZINC_API int <strong>cmzn_mesh_destroy</strong>(cmzn_mesh_id * mesh_address)</div>
</div>
</p>
<blockquote>
<div><p></p>
<p><p>Destroys this handle to the finite element mesh and sets it to NULL. Internally this just decrements the reference count.</p>
<p><dl class="docutils">
<dt><strong>Return</strong></dt>
<dd>Status CMZN_OK on success, any other value on failure. </dd>
<dt><strong>Parameters</strong></dt>
<dd><ul class="breatheparameterlist first last">
<li><tt class="first docutils literal"><span class="pre">mesh_address</span></tt> - <p>Address of handle to the mesh to destroy. </p>
</li>
</ul>
</dd>
</dl>
</p>
</p>
</div></blockquote>
<p><span class="target" id="zincelement_8h_1ac7cc5bfb9ca3b7ec57b1a4f47245a2b2"></span><div class="line-block">
<div class="line">ZINC_API bool <strong>cmzn_mesh_contains_element</strong>(cmzn_mesh_id mesh, cmzn_element_id element)</div>
</div>
</p>
<blockquote>
<div><p></p>
<p><p>Returns whether the element is from the mesh.</p>
<p><dl class="docutils">
<dt><strong>Return</strong></dt>
<dd>Boolean true if element is in the mesh, otherwise false. </dd>
<dt><strong>Parameters</strong></dt>
<dd><ul class="breatheparameterlist first last">
<li><tt class="first docutils literal"><span class="pre">mesh</span></tt> - <p>The mesh to query. </p>
</li>
<li><tt class="first docutils literal"><span class="pre">element</span></tt> - <p>The element to query about. </p>
</li>
</ul>
</dd>
</dl>
</p>
</p>
</div></blockquote>
<p><span class="target" id="zincelement_8h_1a368286bfdc517a400d7ee91ba6c8c6aa"></span><div class="line-block">
<div class="line">ZINC_API cmzn_elementtemplate_id <strong>cmzn_mesh_create_elementtemplate</strong>(cmzn_mesh_id mesh)</div>
</div>
</p>
<blockquote>
<div><p></p>
<p><p>Create a blank template from which new elements can be created in this mesh. Also used for defining new fields over elements.</p>
<p><dl class="docutils">
<dt><strong>Return</strong></dt>
<dd>Handle to element_template, or NULL if error. </dd>
<dt><strong>Parameters</strong></dt>
<dd><ul class="breatheparameterlist first last">
<li><tt class="first docutils literal"><span class="pre">mesh</span></tt> - <p>Handle to the mesh the template works with. </p>
</li>
</ul>
</dd>
</dl>
</p>
</p>
</div></blockquote>
<p><span class="target" id="zincelement_8h_1a2133ae5784571e0bec8fcf0be1f30a40"></span><div class="line-block">
<div class="line">ZINC_API cmzn_element_id <strong>cmzn_mesh_create_element</strong>(cmzn_mesh_id mesh, int identifier, cmzn_elementtemplate_id element_template)</div>
</div>
</p>
<blockquote>
<div><p></p>
<p>Create a new element in this mesh with shape and fields described by the element_template. Returns handle to new element. <dl class="docutils">
<dt><strong>See</strong></dt>
<dd>cmzn_mesh_define_element</dd>
<dt><strong>Return</strong></dt>
<dd>Handle to newly created element, or NULL if error. </dd>
<dt><strong>Parameters</strong></dt>
<dd><ul class="breatheparameterlist first last">
<li><tt class="first docutils literal"><span class="pre">mesh</span></tt> - <p>Handle to the mesh to create the new element in. </p>
</li>
<li><tt class="first docutils literal"><span class="pre">identifier</span></tt> - <p>Non-negative integer identifier of new element, or -1 to automatically generate, starting from 1. Fails if supplied identifier already used by an existing element. </p>
</li>
<li><tt class="first docutils literal"><span class="pre">element_template</span></tt> - <p>Template for element shape and fields. </p>
</li>
</ul>
</dd>
</dl>
</p>
</div></blockquote>
<p><span class="target" id="zincelement_8h_1a175bb494299c806456c4860ba5617b13"></span><div class="line-block">
<div class="line">ZINC_API cmzn_elementiterator_id <strong>cmzn_mesh_create_elementiterator</strong>(cmzn_mesh_id mesh)</div>
</div>
</p>
<blockquote>
<div><p></p>
<p><p>Create an element iterator object for iterating through the elements in the mesh which are ordered from lowest to highest identifier. The iterator initially points at the position before the first element, so the first call to cmzn_elementiterator_next() returns the first element and advances the iterator. Iterator becomes invalid if mesh is modified or any of its elements are given new identifiers.</p>
<p><dl class="docutils">
<dt><strong>Return</strong></dt>
<dd>Handle to element_iterator at position before first, or NULL if error. </dd>
<dt><strong>Parameters</strong></dt>
<dd><ul class="breatheparameterlist first last">
<li><tt class="first docutils literal"><span class="pre">mesh</span></tt> - <p>Handle to the mesh whose elements are to be iterated over. </p>
</li>
</ul>
</dd>
</dl>
</p>
</p>
</div></blockquote>
<p><span class="target" id="zincelement_8h_1a933c783e1bf2367b132d78ee0d5d0650"></span><div class="line-block">
<div class="line">ZINC_API int <strong>cmzn_mesh_define_element</strong>(cmzn_mesh_id mesh, int identifier, cmzn_elementtemplate_id element_template)</div>
</div>
</p>
<blockquote>
<div><p></p>
<p>Create a new element in this mesh with shape and fields described by the element_template. <dl class="docutils">
<dt><strong>See</strong></dt>
<dd>cmzn_mesh_create_element</dd>
<dt><strong>Return</strong></dt>
<dd>Status CMZN_OK on success, any other value on failure. </dd>
<dt><strong>Parameters</strong></dt>
<dd><ul class="breatheparameterlist first last">
<li><tt class="first docutils literal"><span class="pre">mesh</span></tt> - <p>Handle to the mesh to create the new element in. </p>
</li>
<li><tt class="first docutils literal"><span class="pre">identifier</span></tt> - <p>Non-negative integer identifier of new element, or -1 to automatically generate, starting from 1. Fails if supplied identifier already used by an existing element. </p>
</li>
<li><tt class="first docutils literal"><span class="pre">element_template</span></tt> - <p>Template for element shape and fields. </p>
</li>
</ul>
</dd>
</dl>
</p>
</div></blockquote>
<p><span class="target" id="zincelement_8h_1abb48bbc600e0e7ac2fb2018e89083311"></span><div class="line-block">
<div class="line">ZINC_API int <strong>cmzn_mesh_destroy_all_elements</strong>(cmzn_mesh_id mesh)</div>
</div>
</p>
<blockquote>
<div><p></p>
<p><p>Destroy all elements in mesh, also removing them from any related groups. All handles to the destroyed element become invalid.</p>
<p><dl class="docutils">
<dt><strong>Return</strong></dt>
<dd>Status CMZN_OK if all elements destroyed, any other value if failed. </dd>
<dt><strong>Parameters</strong></dt>
<dd><ul class="breatheparameterlist first last">
<li><tt class="first docutils literal"><span class="pre">mesh</span></tt> - <p>Handle to mesh to destroy elements from. </p>
</li>
</ul>
</dd>
</dl>
</p>
</p>
</div></blockquote>
<p><span class="target" id="zincelement_8h_1a072ffc1c3c24148861ed51bdbac1ad35"></span><div class="line-block">
<div class="line">ZINC_API int <strong>cmzn_mesh_destroy_element</strong>(cmzn_mesh_id mesh, cmzn_element_id element)</div>
</div>
</p>
<blockquote>
<div><p></p>
<p><p>Destroy the element if it is in the mesh. Removes element from any related groups it is in. All handles to the destroyed element become invalid.</p>
<p><dl class="docutils">
<dt><strong>Return</strong></dt>
<dd>Status CMZN_OK if element is successfully destroyed, any other value if failed. </dd>
<dt><strong>Parameters</strong></dt>
<dd><ul class="breatheparameterlist first last">
<li><tt class="first docutils literal"><span class="pre">mesh</span></tt> - <p>Handle to the mesh whose element is to be destroyed. </p>
</li>
<li><tt class="first docutils literal"><span class="pre">element</span></tt> - <p>The element to destroy. </p>
</li>
</ul>
</dd>
</dl>
</p>
</p>
</div></blockquote>
<p><span class="target" id="zincelement_8h_1a7231ae4f23ee602d68784a93215e2e95"></span><div class="line-block">
<div class="line">ZINC_API int <strong>cmzn_mesh_destroy_elements_conditional</strong>(cmzn_mesh_id mesh, cmzn_field_id conditional_field)</div>
</div>
</p>
<blockquote>
<div><p></p>
<p><p>Destroy all elements in the mesh for which the conditional field is true i.e. non-zero valued in element. These elements are removed from any related groups they are in. All handles to removed elements become invalid. Results are undefined if conditional field is not constant over element. Note that group and element_group fields are valid conditional fields.</p>
<p><dl class="docutils">
<dt><strong>Return</strong></dt>
<dd>Status CMZN_OK on success, any other value on failure. </dd>
<dt><strong>Parameters</strong></dt>
<dd><ul class="breatheparameterlist first last">
<li><tt class="first docutils literal"><span class="pre">mesh</span></tt> - <p>Handle to the mesh to destroy elements from. </p>
</li>
<li><tt class="first docutils literal"><span class="pre">conditional_field</span></tt> - <p>Field which if non-zero in the element indicates it is to be destroyed. </p>
</li>
</ul>
</dd>
</dl>
</p>
</p>
</div></blockquote>
<p><span class="target" id="zincelement_8h_1a9173f356e79d2294b2390364fda77198"></span><div class="line-block">
<div class="line">ZINC_API cmzn_element_id <strong>cmzn_mesh_find_element_by_identifier</strong>(cmzn_mesh_id mesh, int identifier)</div>
</div>
</p>
<blockquote>
<div><p></p>
<p><p>Return a handle to the element in the mesh with this identifier.</p>
<p><dl class="docutils">
<dt><strong>Return</strong></dt>
<dd>Handle to the element, or NULL if not found. </dd>
<dt><strong>Parameters</strong></dt>
<dd><ul class="breatheparameterlist first last">
<li><tt class="first docutils literal"><span class="pre">mesh</span></tt> - <p>Handle to the mesh to find the element in. </p>
</li>
<li><tt class="first docutils literal"><span class="pre">identifier</span></tt> - <p>Non-negative integer identifier of element. </p>
</li>
</ul>
</dd>
</dl>
</p>
</p>
</div></blockquote>
<p><span class="target" id="zincelement_8h_1a74701c661d139d43fac37b1cfdd081eb"></span><div class="line-block">
<div class="line">ZINC_API cmzn_differentialoperator_id <strong>cmzn_mesh_get_chart_differentialoperator</strong>(cmzn_mesh_id mesh, int order, int term)</div>
</div>
</p>
<blockquote>
<div><p></p>
<p><p>Returns the differential operator giving a field derivative of the given order with respect to the mesh&#8217;s chart. The term identifies which of the possible differential operator terms are available for the order and dimension of the mesh.</p>
<p><dl class="docutils">
<dt><strong>Return</strong></dt>
<dd>Handle to differential operator, or NULL if failed. Caller is responsible for destroying the returned handle. </dd>
<dt><strong>Parameters</strong></dt>
<dd><ul class="breatheparameterlist first last">
<li><tt class="first docutils literal"><span class="pre">mesh</span></tt> - <p>Handle to the mesh to get differential operator from. </p>
</li>
<li><tt class="first docutils literal"><span class="pre">order</span></tt> - <p>The order of the derivative. Currently must be 1. </p>
</li>
<li><tt class="first docutils literal"><span class="pre">term</span></tt> - <p>Which of the (dimensions)^order differential operators is required, starting at 1. For order 1, corresponds to a chart axis. </p>
</li>
</ul>
</dd>
</dl>
</p>
</p>
</div></blockquote>
<p><span class="target" id="zincelement_8h_1a048de420ea8ec072d844de4dcc4b9fb4"></span><div class="line-block">
<div class="line">ZINC_API int <strong>cmzn_mesh_get_dimension</strong>(cmzn_mesh_id mesh)</div>
</div>
</p>
<blockquote>
<div><p></p>
<p><p>Returns the number of dimensions of the mesh.</p>
<p><dl class="docutils">
<dt><strong>Return</strong></dt>
<dd>dimension of mesh. </dd>
<dt><strong>Parameters</strong></dt>
<dd><ul class="breatheparameterlist first last">
<li><tt class="first docutils literal"><span class="pre">mesh</span></tt> - <p>Handle to the mesh to query. </p>
</li>
</ul>
</dd>
</dl>
</p>
</p>
</div></blockquote>
<p><span class="target" id="zincelement_8h_1a968b2cbcd9227fdc1235028955bff5fe"></span><div class="line-block">
<div class="line">ZINC_API cmzn_fieldmodule_id <strong>cmzn_mesh_get_fieldmodule</strong>(cmzn_mesh_id mesh)</div>
</div>
</p>
<blockquote>
<div><p></p>
<p><p>Returns handle to field module for region this mesh belongs to.</p>
<p><dl class="docutils">
<dt><strong>Return</strong></dt>
<dd>Handle to field module object. Up to caller to destroy. </dd>
<dt><strong>Parameters</strong></dt>
<dd><ul class="breatheparameterlist first last">
<li><tt class="first docutils literal"><span class="pre">mesh</span></tt> - <p>The mesh from which to obtain the field module. </p>
</li>
</ul>
</dd>
</dl>
</p>
</p>
</div></blockquote>
<p><span class="target" id="zincelement_8h_1a667276ab1e1a670978cec285a619d591"></span><div class="line-block">
<div class="line">ZINC_API cmzn_mesh_id <strong>cmzn_mesh_get_master_mesh</strong>(cmzn_mesh_id mesh)</div>
</div>
</p>
<blockquote>
<div><p></p>
<p><p>Get the master mesh which owns the elements for this mesh. Can be the same as the supplied mesh if it is a master.</p>
<p><dl class="docutils">
<dt><strong>Return</strong></dt>
<dd>Handle to the master mesh. Caller is responsible for destroying the returned handle. </dd>
<dt><strong>Parameters</strong></dt>
<dd><ul class="breatheparameterlist first last">
<li><tt class="first docutils literal"><span class="pre">mesh</span></tt> - <p>The mesh to query. </p>
</li>
</ul>
</dd>
</dl>
</p>
</p>
</div></blockquote>
<p><span class="target" id="zincelement_8h_1ad7286d3329902deed1bfda476bcf8f78"></span><div class="line-block">
<div class="line">ZINC_API char * <strong>cmzn_mesh_get_name</strong>(cmzn_mesh_id mesh)</div>
</div>
</p>
<blockquote>
<div><p></p>
<p><p>Return the name of the mesh.</p>
<p><dl class="docutils">
<dt><strong>See</strong></dt>
<dd>cmzn_deallocate() </dd>
<dt><strong>Return</strong></dt>
<dd>On success: allocated string containing mesh name. Up to caller to free using cmzn_deallocate(). </dd>
<dt><strong>Parameters</strong></dt>
<dd><ul class="breatheparameterlist first last">
<li><tt class="first docutils literal"><span class="pre">mesh</span></tt> - <p>The mesh whose name is requested. </p>
</li>
</ul>
</dd>
</dl>
</p>
</p>
</div></blockquote>
<p><span class="target" id="zincelement_8h_1a6a6c36553d3caa037929003bb0397ee2"></span><div class="line-block">
<div class="line">ZINC_API int <strong>cmzn_mesh_get_size</strong>(cmzn_mesh_id mesh)</div>
</div>
</p>
<blockquote>
<div><p></p>
<p><p>Return the number of elements in the mesh.</p>
<p><dl class="docutils">
<dt><strong>Return</strong></dt>
<dd>Number of elements in mesh. </dd>
<dt><strong>Parameters</strong></dt>
<dd><ul class="breatheparameterlist first last">
<li><tt class="first docutils literal"><span class="pre">mesh</span></tt> - <p>Handle to the mesh to query. </p>
</li>
</ul>
</dd>
</dl>
</p>
</p>
</div></blockquote>
<p><span class="target" id="zincelement_8h_1ab461a0673dbc8bb6496fc7cd5ad7809a"></span><div class="line-block">
<div class="line">ZINC_API bool <strong>cmzn_mesh_match</strong>(cmzn_mesh_id mesh1, cmzn_mesh_id mesh2)</div>
</div>
</p>
<blockquote>
<div><p></p>
<p><p>Check if two mesh handles refer to the same object.</p>
<p><dl class="docutils">
<dt><strong>Return</strong></dt>
<dd>Boolean true if the two meshes match, false if not. </dd>
<dt><strong>Parameters</strong></dt>
<dd><ul class="breatheparameterlist first last">
<li><tt class="first docutils literal"><span class="pre">mesh1</span></tt> - <p>The first mesh to match. </p>
</li>
<li><tt class="first docutils literal"><span class="pre">mesh2</span></tt> - <p>The second mesh to match. </p>
</li>
</ul>
</dd>
</dl>
</p>
</p>
</div></blockquote>
<p><span class="target" id="zincelement_8h_1a7b22c720645cfebbb453c8293bd94f23"></span><div class="line-block">
<div class="line">ZINC_API cmzn_mesh_group_id <strong>cmzn_mesh_cast_group</strong>(cmzn_mesh_id mesh)</div>
</div>
</p>
<blockquote>
<div><p></p>
<p><p>If the mesh is a mesh group i.e. subset of elements from a master mesh, get the mesh group specific interface for add/remove functions. Caller is responsible for destroying the returned reference.</p>
<p><dl class="docutils">
<dt><strong>Return</strong></dt>
<dd>Mesh group specific representation if the input mesh is of this type, otherwise returns NULL. </dd>
<dt><strong>Parameters</strong></dt>
<dd><ul class="breatheparameterlist first last">
<li><tt class="first docutils literal"><span class="pre">field</span></tt> - <p>The mesh to be cast. </p>
</li>
</ul>
</dd>
</dl>
</p>
</p>
</div></blockquote>
<p><span class="target" id="zincelement_8h_1ab70d36183f061b91617ef189660de10e"></span><div class="line-block">
<div class="line">ZINC_API int <strong>cmzn_mesh_group_destroy</strong>(cmzn_mesh_group_id * mesh_group_address)</div>
</div>
</p>
<blockquote>
<div><p></p>
<p><p>Destroys this handle to the mesh group and sets it to NULL. Internally this just decrements the reference count.</p>
<p><dl class="docutils">
<dt><strong>Return</strong></dt>
<dd>Status CMZN_OK on success, any other value on failure. </dd>
<dt><strong>Parameters</strong></dt>
<dd><ul class="breatheparameterlist first last">
<li><tt class="first docutils literal"><span class="pre">mesh_group_address</span></tt> - <p>Address of mesh group handle to destroy. </p>
</li>
</ul>
</dd>
</dl>
</p>
</p>
</div></blockquote>
<p><span class="target" id="zincelement_8h_1a0aa15efde9b6f4687462ddc20d9b486a"></span><div class="line-block">
<div class="line">ZINC_C_INLINE cmzn_mesh_id <strong>cmzn_mesh_group_base_cast</strong>(cmzn_mesh_group_id mesh_group)</div>
</div>
</p>
<blockquote>
<div><p></p>
<p><p>Cast mesh group back to its base mesh class. IMPORTANT NOTE: Returned mesh does not have incremented reference count and must not be destroyed. Use cmzn_mesh_access() to add a reference if maintaining returned handle beyond the lifetime of the mesh_group. Use this function to call base-class API, e.g.: int size = cmzn_mesh_get_size(cmzn_mesh_group_base_cast(mesh_group);</p>
<p><dl class="docutils">
<dt><strong>Return</strong></dt>
<dd>Non-accessed handle to the mesh or NULL if failed. </dd>
<dt><strong>Parameters</strong></dt>
<dd><ul class="breatheparameterlist first last">
<li><tt class="first docutils literal"><span class="pre">mesh_group</span></tt> - <p>Handle to the mesh group to cast. </p>
</li>
</ul>
</dd>
</dl>
</p>
</p>
</div></blockquote>
</dd>
</dl>
</p>
</p>
</div></blockquote>
<p><span class="target" id="zinctessellation_8h_1ae3f6df36ca80804cb56f0e41b4d1b0d0"></span><div class="line-block">
<div class="line">ZINC_API int <strong>cmzn_tessellation_set_minimum_divisions</strong>(cmzn_tessellation_id tessellation, int valuesCount, const int * valuesIn)</div>
</div>
</p>
<blockquote>
<div><p></p>
<p><p>Sets the minimum number of line segments used to approximate curves in each element dimension of tessellation. Intended to be used where coarse tessellation is acceptable, e.g. where fields vary linearly over elements. The default minimum_divisions value for new tessellations is 1, size 1. Note: The value set for the last dimension applies to all higher dimensions.</p>
<p><dl class="docutils">
<dt><strong>Return</strong></dt>
<dd>Status CMZN_OK on success, otherwise CMZN_ERROR_ARGUMENT. </dd>
<dt><strong>Parameters</strong></dt>
<dd><ul class="breatheparameterlist first last">
<li><tt class="first docutils literal"><span class="pre">tessellation</span></tt> - <p>The tessellation to modify. </p>
</li>
<li><tt class="first docutils literal"><span class="pre">valuesCount</span></tt> - <p>The size of the valuesIn array, &gt;= 1. </p>
</li>
<li><tt class="first docutils literal"><span class="pre">valuesIn</span></tt> - <p>Array of number of divisions (&gt;=1) for each dimension, with the last number in array applying to all higher dimensions. </p>
</li>
</ul>
</dd>
</dl>
</p>
</p>
</div></blockquote>
<p><span class="target" id="zinctessellation_8h_1a49d8c1ce3b7325287bcad5eef856e8f2"></span><div class="line-block">
<div class="line">ZINC_API int <strong>cmzn_tessellation_get_refinement_factors</strong>(cmzn_tessellation_id tessellation, int valuesCount, int * valuesOut)</div>
</div>
</p>
<blockquote>
<div><p></p>
<p><p>Gets the refinements to be used in product with the minimum divisions to approximate curves in each element dimension for fine tessellation.</p>
<p><dl class="docutils">
<dt><strong>See</strong></dt>
<dd>cmzn_tessellation_set_refinement_factors </dd>
<dt><strong>Return</strong></dt>
<dd>The actual number of refinement factor values that have been explicitly set using cmzn_tessellation_set_refinement_factors. This can be more than the number requested, so a second call may be needed with a larger array. Returns 0 on error. </dd>
<dt><strong>Parameters</strong></dt>
<dd><ul class="breatheparameterlist first last">
<li><tt class="first docutils literal"><span class="pre">tessellation</span></tt> - <p>The tessellation to query. </p>
</li>
<li><tt class="first docutils literal"><span class="pre">valuesCount</span></tt> - <p>The size of the refinement_factors array to fill. Values for dimensions beyond the size set use the last refinement value. </p>
</li>
<li><tt class="first docutils literal"><span class="pre">valuesOut</span></tt> - <p>Array to receive refinement factors. </p>
</li>
</ul>
</dd>
</dl>
</p>
</p>
</div></blockquote>
<p><span class="target" id="zinctessellation_8h_1aa91355e2a592fc71c4b81b4d8689a6fd"></span><div class="line-block">
<div class="line">ZINC_API int <strong>cmzn_tessellation_set_refinement_factors</strong>(cmzn_tessellation_id tessellation, int valuesCount, const int * valuesIn)</div>
</div>
</p>
<blockquote>
<div><p></p>
<p><p>Sets the refinements to be used in product with the minimum divisions to approximate curves in each element dimension for fine tessellation. The refinement factors are applied whenever the basis functions of the graphics coordinate field (replaced by tessellation field if specified) are non-linear anywhere. If there is no tessellation field or if it matches the coordinate field, a non-linear coordinate system also triggers refinement. The default refinement_factors value for new tessellations is 1, size 1. Note: The value set for the last dimension applies to all higher dimensions.</p>
<p><dl class="docutils">
<dt><strong>See</strong></dt>
<dd>cmzn_tessellation_set_minimum_divisions </dd>
<dt><strong>Return</strong></dt>
<dd>Status CMZN_OK on success, otherwise CMZN_ERROR_ARGUMENT. </dd>
<dt><strong>Parameters</strong></dt>
<dd><ul class="breatheparameterlist first last">
<li><tt class="first docutils literal"><span class="pre">tessellation</span></tt> - <p>The tessellation to modify. </p>
</li>
<li><tt class="first docutils literal"><span class="pre">valuesCount</span></tt> - <p>The size of the refinement_factors array, &gt;= 1. </p>
</li>
<li><tt class="first docutils literal"><span class="pre">valuesIn</span></tt> - <p>Array of number of fine subdivisions (&gt;=1) per minimum_division for each dimension, with the last number in array applying to all higher dimensions. </p>
</li>
</ul>
</dd>
</dl>
</p>
</p>
</div></blockquote>
</div></blockquote>
</div></blockquote>
<div class="line-block" id="zinctimekeeper_8h">
<div class="line"><em>file</em> <strong>timekeeper.h</strong></div>
<div class="line"><em>#include &#8220;types/timenotifierid.h&#8221;</em></div>
<div class="line"><em>#include &#8220;types/timekeeperid.h&#8221;</em></div>
<div class="line"><em>#include &#8220;zinc/zincsharedobject.h&#8221;</em></div>
</div>
<blockquote>
<div><p></p>
<p></p>
<em>Functions</em><blockquote>
<div><p><span class="target" id="zinctimekeeper_8h_1a1e34f4e49b4da28fa386a673ff7409f6"></span><div class="line-block">
<div class="line">ZINC_API cmzn_timekeepermodule_id <strong>cmzn_timekeepermodule_access</strong>(cmzn_timekeepermodule_id timekeepermodule)</div>
</div>
</p>
<blockquote>
<div><p></p>
<p><p>FILE : timekeeper.h</p>
<p>The public interface of timekeeper which maintains a current time and manages several timenotifiers. Returns a new reference to the timekeeper module with reference count incremented. Caller is responsible for destroying the new reference.</p>
<p><dl class="docutils">
<dt><strong>Return</strong></dt>
<dd>timekeeper module with incremented reference count. </dd>
<dt><strong>Parameters</strong></dt>
<dd><ul class="breatheparameterlist first last">
<li><tt class="first docutils literal"><span class="pre">timekeepermodule</span></tt> - <p>The timekeeper module to obtain a new reference to. </p>
</li>
</ul>
</dd>
</dl>
</p>
</p>
</div></blockquote>
<p><span class="target" id="zinctimekeeper_8h_1aa0687eadad2086b71b2081ee99aa1c2c"></span><div class="line-block">
<div class="line">ZINC_API int <strong>cmzn_timekeepermodule_destroy</strong>(cmzn_timekeepermodule_id * timekeepermodule_address)</div>
</div>
</p>
<blockquote>
<div><p></p>
<p><p>Destroys this reference to the timekeeper module (and sets it to NULL). Internally this just decrements the reference count.</p>
<p><dl class="docutils">
<dt><strong>Return</strong></dt>
<dd>Status CMZN_OK on success, otherwise CMZN_ERROR_ARGUMENT. </dd>
<dt><strong>Parameters</strong></dt>
<dd><ul class="breatheparameterlist first last">
<li><tt class="first docutils literal"><span class="pre">timekeepermodule_address</span></tt> - <p>Address of handle to timekeeper module to destroy. </p>
</li>
</ul>
</dd>
</dl>
</p>
</p>
</div></blockquote>
<p><span class="target" id="zinctimekeeper_8h_1a838fc1f199e2833146fe493f6f0ca658"></span><div class="line-block">
<div class="line">ZINC_API cmzn_timekeeper_id <strong>cmzn_timekeepermodule_get_default_timekeeper</strong>(cmzn_timekeepermodule_id timekeepermodule)</div>
</div>
</p>
<blockquote>
<div><p></p>
<p><p>Get the default timekeeper, if any.</p>
<p><dl class="docutils">
<dt><strong>Return</strong></dt>
<dd>Handle to the default timekeeper, or 0 if none. Up to caller to destroy returned handle. </dd>
<dt><strong>Parameters</strong></dt>
<dd><ul class="breatheparameterlist first last">
<li><tt class="first docutils literal"><span class="pre">timekeepermodule</span></tt> - <p>timekeeper module to query. </p>
</li>
</ul>
</dd>
</dl>
</p>
</p>
</div></blockquote>
<p><span class="target" id="zinctimekeeper_8h_1a517fa31f64f01ae6070644c199d5c7d6"></span><div class="line-block">
<div class="line">ZINC_API cmzn_timekeeper_id <strong>cmzn_timekeeper_access</strong>(cmzn_timekeeper_id timekeeper)</div>
</div>
</p>
<blockquote>
<div><p></p>
<p><p>Access the timekeeper, increase the access count of the time keeper by one.</p>
<p><dl class="docutils">
<dt><strong>Return</strong></dt>
<dd>handle to timekeeper if successfully access timekeeper. </dd>
<dt><strong>Parameters</strong></dt>
<dd><ul class="breatheparameterlist first last">
<li><tt class="first docutils literal"><span class="pre">timekeeper</span></tt> - <p>handle to the &#8220;to be access&#8221; zinc timekeeper. </p>
</li>
</ul>
</dd>
</dl>
</p>
</p>
</div></blockquote>
<p><span class="target" id="zinctimekeeper_8h_1a834171eda361159adf01de23688c6851"></span><div class="line-block">
<div class="line">ZINC_API int <strong>cmzn_timekeeper_destroy</strong>(cmzn_timekeeper_id * timekeeper_address)</div>
</div>
</p>
<blockquote>
<div><p></p>
<p><p>Destroys this reference to the time keeper (and sets it to NULL). Internally this just decrements the reference count.</p>
<p><dl class="docutils">
<dt><strong>Return</strong></dt>
<dd>Status CMZN_OK if successfully destroy the time keeper, any other value on failure. </dd>
<dt><strong>Parameters</strong></dt>
<dd><ul class="breatheparameterlist first last">
<li><tt class="first docutils literal"><span class="pre">timekeeper_address</span></tt> - <p>The address to the handle to time keeper </p>
</li>
</ul>
</dd>
</dl>
</p>
</p>
</div></blockquote>
<p><span class="target" id="zinctimekeeper_8h_1a6830687edf6d90b6673d2080dafa1422"></span><div class="line-block">
<div class="line">ZINC_API cmzn_timenotifier_id <strong>cmzn_timekeeper_create_timenotifier_regular</strong>(cmzn_timekeeper_id timekeeper, double update_frequency, double time_offset)</div>
</div>
</p>
<blockquote>
<div><p></p>
<p><p>Create and returns a time notifier with regular update time in time keeper. The returned time notifier will automatically be added to the time keeper.</p>
<p><dl class="docutils">
<dt><strong>Return</strong></dt>
<dd>The time notifier if successfully create a time notifier otherwise NULL. </dd>
<dt><strong>Parameters</strong></dt>
<dd><ul class="breatheparameterlist first last">
<li><tt class="first docutils literal"><span class="pre">update_frequency</span></tt> - <p>The number of times which time notifier will receive callback per unit of time in the time keeper. </p>
</li>
<li><tt class="first docutils literal"><span class="pre">time_offset</span></tt> - <p>This value will set the exact time the notification happenes and allow setting the callback time other than t=0. Time notifier will receive/send out notification when time_offset + original callback time is reached. </p>
</li>
</ul>
</dd>
</dl>
</p>
</p>
</div></blockquote>
<p><span class="target" id="zinctimekeeper_8h_1a6b11f415dffde2ade8dbaed8dd23f3db"></span><div class="line-block">
<div class="line">ZINC_API double <strong>cmzn_timekeeper_get_maximum_time</strong>(cmzn_timekeeper_id timekeeper)</div>
</div>
</p>
<blockquote>
<div><p></p>
<p><p>Gets the maximum time in the timekeeper.</p>
<p><dl class="docutils">
<dt><strong>Return</strong></dt>
<dd>Current time or 0 if invalid argument. </dd>
<dt><strong>Parameters</strong></dt>
<dd><ul class="breatheparameterlist first last">
<li><tt class="first docutils literal"><span class="pre">timekeeper</span></tt> - <p>The timekeeper to query. </p>
</li>
</ul>
</dd>
</dl>
</p>
</p>
</div></blockquote>
<p><span class="target" id="zinctimekeeper_8h_1aa16485c63771d81dffde03644076db32"></span><div class="line-block">
<div class="line">ZINC_API int <strong>cmzn_timekeeper_set_maximum_time</strong>(cmzn_timekeeper_id timekeeper, double maximum_time)</div>
</div>
</p>
<blockquote>
<div><p></p>
<p><p>Sets the maximum time in the timekeeper.</p>
<p><dl class="docutils">
<dt><strong>Return</strong></dt>
<dd>CMZN_OK on success, otherwise CMZN_ERROR_ARGUMENT. </dd>
<dt><strong>Parameters</strong></dt>
<dd><ul class="breatheparameterlist first last">
<li><tt class="first docutils literal"><span class="pre">timenotifier</span></tt> - <p>The timekeeper to modify. </p>
</li>
<li><tt class="first docutils literal"><span class="pre">maximum_time</span></tt> - <p>The new maximum time. </p>
</li>
</ul>
</dd>
</dl>
</p>
</p>
</div></blockquote>
<p><span class="target" id="zinctimekeeper_8h_1ac453cb150e860a47711aa28b9e4ed908"></span><div class="line-block">
<div class="line">ZINC_API double <strong>cmzn_timekeeper_get_minimum_time</strong>(cmzn_timekeeper_id timekeeper)</div>
</div>
</p>
<blockquote>
<div><p></p>
<p><p>Gets the minimum time in the timekeeper.</p>
<p><dl class="docutils">
<dt><strong>Return</strong></dt>
<dd>Current time or 0 if invalid argument. </dd>
<dt><strong>Parameters</strong></dt>
<dd><ul class="breatheparameterlist first last">
<li><tt class="first docutils literal"><span class="pre">timekeeper</span></tt> - <p>The timekeeper to query. </p>
</li>
</ul>
</dd>
</dl>
</p>
</p>
</div></blockquote>
<p><span class="target" id="zinctimekeeper_8h_1a5ada103ebcd25798263c0c025586ffc1"></span><div class="line-block">
<div class="line">ZINC_API int <strong>cmzn_timekeeper_set_minimum_time</strong>(cmzn_timekeeper_id timekeeper, double minimum_time)</div>
</div>
</p>
<blockquote>
<div><p></p>
<p><p>Sets the minimum time in the timekeeper.</p>
<p><dl class="docutils">
<dt><strong>Return</strong></dt>
<dd>CMZN_OK on success, otherwise CMZN_ERROR_ARGUMENT. </dd>
<dt><strong>Parameters</strong></dt>
<dd><ul class="breatheparameterlist first last">
<li><tt class="first docutils literal"><span class="pre">timenotifier</span></tt> - <p>The timekeeper to modify. </p>
</li>
<li><tt class="first docutils literal"><span class="pre">minimum_time</span></tt> - <p>The new minimum time. </p>
</li>
</ul>
</dd>
</dl>
</p>
</p>
</div></blockquote>
<p><span class="target" id="zinctimekeeper_8h_1a52eea34b6c3c0a7617dcd2a1ea62fc9a"></span><div class="line-block">
<div class="line">ZINC_API double <strong>cmzn_timekeeper_get_time</strong>(cmzn_timekeeper_id timekeeper)</div>
</div>
</p>
<blockquote>
<div><p></p>
<p><p>Gets the current time from the timekeeper.</p>
<p><dl class="docutils">
<dt><strong>Return</strong></dt>
<dd>Current time or 0 if invalid argument. </dd>
<dt><strong>Parameters</strong></dt>
<dd><ul class="breatheparameterlist first last">
<li><tt class="first docutils literal"><span class="pre">timekeeper</span></tt> - <p>The timekeeper to query. </p>
</li>
</ul>
</dd>
</dl>
</p>
</p>
</div></blockquote>
<p><span class="target" id="zinctimekeeper_8h_1a06cbf56bd45019f51b02bd31f8460eab"></span><div class="line-block">
<div class="line">ZINC_API int <strong>cmzn_timekeeper_set_time</strong>(cmzn_timekeeper_id timekeeper, double time)</div>
</div>
</p>
<blockquote>
<div><p></p>
<p><p>Sets the current time in the timekeeper. Timenotifiers are informed of the time change.</p>
<p><dl class="docutils">
<dt><strong>Return</strong></dt>
<dd>CMZN_OK on success, otherwise CMZN_ERROR_ARGUMENT. </dd>
<dt><strong>Parameters</strong></dt>
<dd><ul class="breatheparameterlist first last">
<li><tt class="first docutils literal"><span class="pre">timekeeper</span></tt> - <p>The timekeeper to modify. </p>
</li>
<li><tt class="first docutils literal"><span class="pre">time</span></tt> - <p>The new current time. </p>
</li>
</ul>
</dd>
</dl>
</p>
</p>
</div></blockquote>
<p><span class="target" id="zinctimekeeper_8h_1a50efda5dc0fb0cf084032e4f4a38c095"></span><div class="line-block">
<div class="line">ZINC_API double <strong>cmzn_timekeeper_get_next_callback_time</strong>(cmzn_timekeeper_id timekeeper, enum cmzn_timekeeper_play_direction direction)</div>
</div>
</p>
<blockquote>
<div><p></p>
<p><p>Gets the next callback time required by any of the time notifiers in the timekeeper. This function takes the minimum and maximum time into consideration. If the direction of playback is forward and next callback time exceeds the maximum time, the next callback time will be timekeeper_minimum + (callback_time - timekeeper_maximum). If the direction of playback is reverse and next callback time is smaller than the minimum time, the next callback time will be timekeeper_maximum + (timekeeper_minimum - callback_time).</p>
<p><dl class="docutils">
<dt><strong>See</strong></dt>
<dd>cmzn_timenotifier_get_next_callback_time</dd>
<dt><strong>Return</strong></dt>
<dd>next callback time on success. </dd>
<dt><strong>Parameters</strong></dt>
<dd><ul class="breatheparameterlist first last">
<li><tt class="first docutils literal"><span class="pre">timekeeper</span></tt> - <p>The timekeeper to get next callback time.</p>
</li>
<li><tt class="first docutils literal"><span class="pre">direction</span></tt> - <p>Enumeration indicating rather next forward/reverse time will be calculated. </p>
</li>
</ul>
</dd>
</dl>
</p>
</p>
</div></blockquote>
</div></blockquote>
</div></blockquote>
<div class="line-block" id="zinctimenotifier_8h">
<div class="line"><em>file</em> <strong>timenotifier.h</strong></div>
<div class="line"><em>#include &#8220;types/timekeeperid.h&#8221;</em></div>
<div class="line"><em>#include &#8220;types/timenotifierid.h&#8221;</em></div>
<div class="line"><em>#include &#8220;zinc/zincsharedobject.h&#8221;</em></div>
</div>
<blockquote>
<div><p></p>
<p></p>
<em>Typedefs</em><blockquote>
<div><p><span class="target" id="zinctimenotifier_8h_1a7c8fc1c91e34fe9f19399ae10a581d18"></span>typedef void(* <strong>cmzn_timenotifier_callback</strong>)(cmzn_timenotifierevent_id timenotifierevent, void *user_data)</p>
<blockquote>
<div><p></p>
<p><p>FILE : timenotifier.h</p>
<p>The public interface to time notifier object which maintains conditions for notification of time changes from a timekeeper. The type used for time notifier callback. It is a pointer to a function which takes the same arguments.</p>
<p><dl class="docutils">
<dt><strong>Return</strong></dt>
<dd>return one if such the callback function has been called successfully otherwise 0. </dd>
<dt><strong>Parameters</strong></dt>
<dd><ul class="breatheparameterlist first last">
<li><tt class="first docutils literal"><span class="pre">cmzn_timenotifier_id</span></tt> - <p>Handle to time notifier. </p>
</li>
<li><tt class="first docutils literal"><span class="pre">current_time</span></tt> - <p>Time in the time notifier when the callback is being triggered by the time notifier. </p>
</li>
<li><tt class="first docutils literal"><span class="pre">User_data</span></tt> - <p>any data user want to pass into the callback function. </p>
</li>
</ul>
</dd>
</dl>
</p>
</p>
</div></blockquote>
</div></blockquote>
<em>Functions</em><blockquote>
<div><p><span class="target" id="zinctimenotifier_8h_1a371b026a1c68929275b5ffed52d753ee"></span><div class="line-block">
<div class="line">ZINC_API cmzn_timenotifier_id <strong>cmzn_timenotifier_access</strong>(cmzn_timenotifier_id timenotifier)</div>
</div>
</p>
<blockquote>
<div><p></p>
<p><p>Access the time notifier, increase the access count of the time notifier by one.</p>
<p><dl class="docutils">
<dt><strong>Return</strong></dt>
<dd>handle to timenotifier if successfully access timenotifier. </dd>
<dt><strong>Parameters</strong></dt>
<dd><ul class="breatheparameterlist first last">
<li><tt class="first docutils literal"><span class="pre">timenotifier</span></tt> - <p>handle to the &#8220;to be access&#8221; zinc timenotifier. </p>
</li>
</ul>
</dd>
</dl>
</p>
</p>
</div></blockquote>
<p><span class="target" id="zinctimenotifier_8h_1a91ff24dff36e05992b4b026e5660b3c2"></span><div class="line-block">
<div class="line">ZINC_API int <strong>cmzn_timenotifier_destroy</strong>(cmzn_timenotifier_id * timenotifier_address)</div>
</div>
</p>
<blockquote>
<div><p></p>
<p><p>Destroys this reference to the time notifier (and sets it to NULL). Internally this just decrements the reference count.</p>
<p><dl class="docutils">
<dt><strong>Return</strong></dt>
<dd>Status CMZN_OK on success, otherwise CMZN_ERROR_ARGUMENT. </dd>
<dt><strong>Parameters</strong></dt>
<dd><ul class="breatheparameterlist first last">
<li><tt class="first docutils literal"><span class="pre">timenotifier_address</span></tt> - <p>The address to the handle to time notifier </p>
</li>
</ul>
</dd>
</dl>
</p>
</p>
</div></blockquote>
<p><span class="target" id="zinctimenotifier_8h_1a411679fa6a9464b3a3bf1b0fdcbbcecf"></span><div class="line-block">
<div class="line">ZINC_API void * <strong>cmzn_timenotifier_get_callback_user_data</strong>(cmzn_timenotifier_id timenotifier)</div>
</div>
</p>
<blockquote>
<div><p></p>
<p><p>Return the user data set by user when calling cmzn_timenotifier_set_callback</p>
<p><dl class="docutils">
<dt><strong>See</strong></dt>
<dd>cmzn_timenotifier_set_callback </dd>
<dt><strong>Return</strong></dt>
<dd>user data or NULL on failure or not set. </dd>
<dt><strong>Parameters</strong></dt>
<dd><ul class="breatheparameterlist first last">
<li><tt class="first docutils literal"><span class="pre">timenotifier</span></tt> - <p>Handle to the time notifier. </p>
</li>
</ul>
</dd>
</dl>
</p>
</p>
</div></blockquote>
<p><span class="target" id="zinctimenotifier_8h_1a1a1076f1b26b43db100240653e148af7"></span><div class="line-block">
<div class="line">ZINC_API int <strong>cmzn_timenotifier_set_callback</strong>(cmzn_timenotifier_id timenotifier, cmzn_timenotifier_callback function, void * user_data_in)</div>
</div>
</p>
<blockquote>
<div><p></p>
<p><p>Assign the callback function and user_data for the time notifier. This function also starts the callback.</p>
<p><dl class="docutils">
<dt><strong>See</strong></dt>
<dd>cmzn_timenotifier_callback_function </dd>
<dt><strong>Return</strong></dt>
<dd>Status CMZN_OK on success, any other value on failure. Adds a callback routine which is called whenever the time given to the time notifier has been changed.</dd>
<dt><strong>Return</strong></dt>
<dd>Status CMZN_OK on success, any other value on failure. </dd>
<dt><strong>Parameters</strong></dt>
<dd><ul class="breatheparameterlist first last">
<li><tt class="first docutils literal"><span class="pre">timenotifier</span></tt> - <p>Handle to the time notifier. </p>
</li>
<li><tt class="first docutils literal"><span class="pre">function</span></tt> - <p>function to be called when event is triggered. </p>
</li>
<li><tt class="first docutils literal"><span class="pre">user_data_in</span></tt> - <p>Void pointer to an user object. User is responsible for the life time of such object. </p>
</li>
</ul>
</dd>
<dt><strong>Parameters</strong></dt>
<dd><ul class="breatheparameterlist first last">
<li><tt class="first docutils literal"><span class="pre">timenotifier</span></tt> - <p>Handle to time notifier. </p>
</li>
<li><tt class="first docutils literal"><span class="pre">function</span></tt> - <p>function to be called when event is triggered. </p>
</li>
<li><tt class="first docutils literal"><span class="pre">user_data_in</span></tt> - <p>Void pointer to an user object. User is responsible for the life time of such object. </p>
</li>
</ul>
</dd>
</dl>
</p>
</p>
</div></blockquote>
<p><span class="target" id="zinctimenotifier_8h_1a49762a7c3cc1017478b1465238de2a63"></span><div class="line-block">
<div class="line">ZINC_API int <strong>cmzn_timenotifier_clear_callback</strong>(cmzn_timenotifier_id timenotifier)</div>
</div>
</p>
<blockquote>
<div><p></p>
<p><p>Stop and clear selection callback. This will stop the callback and also remove the callback function from the selection notifier.</p>
<p><dl class="docutils">
<dt><strong>Return</strong></dt>
<dd>Status CMZN_OK on success, any other value on failure. </dd>
<dt><strong>Parameters</strong></dt>
<dd><ul class="breatheparameterlist first last">
<li><tt class="first docutils literal"><span class="pre">selectionnotifier</span></tt> - <p>Handle to the selection notifier. </p>
</li>
</ul>
</dd>
</dl>
</p>
</p>
</div></blockquote>
<p><span class="target" id="zinctimenotifier_8h_1a3fa2210d021474536f702e0b18948504"></span><div class="line-block">
<div class="line">ZINC_API double <strong>cmzn_timenotifier_get_time</strong>(cmzn_timenotifier_id timenotifier)</div>
</div>
</p>
<blockquote>
<div><p></p>
<p><p>Gets the current time from the time notifier.</p>
<p><dl class="docutils">
<dt><strong>Return</strong></dt>
<dd>Current time or 0 if invalid argument. </dd>
<dt><strong>Parameters</strong></dt>
<dd><ul class="breatheparameterlist first last">
<li><tt class="first docutils literal"><span class="pre">timenotifier</span></tt> - <p>Handle to time notifier. </p>
</li>
</ul>
</dd>
</dl>
</p>
</p>
</div></blockquote>
<p><span class="target" id="zinctimenotifier_8h_1a76eb5952da45b58703c6bca2ce06f168"></span><div class="line-block">
<div class="line">ZINC_API double <strong>cmzn_timenotifier_get_next_callback_time</strong>(cmzn_timenotifier_id timenotifier, enum cmzn_timekeeper_play_direction play_direction)</div>
</div>
</p>
<blockquote>
<div><p></p>
<p><p>Gets the next callback time required by this notifier. This function does not take the maximum and minimum of the timekeeper into consideration.</p>
<p><dl class="docutils">
<dt><strong>See</strong></dt>
<dd>cmzn_timekeeper_get_next_callback_time</dd>
<dt><strong>Return</strong></dt>
<dd>next callback time on success. </dd>
<dt><strong>Parameters</strong></dt>
<dd><ul class="breatheparameterlist first last">
<li><tt class="first docutils literal"><span class="pre">timenotifier</span></tt> - <p>The timenotifier to get next callback time for.</p>
</li>
<li><tt class="first docutils literal"><span class="pre">direction</span></tt> - <p>Enumeration indicating rather next forward/reverse time will be calculated. </p>
</li>
</ul>
</dd>
</dl>
</p>
</p>
</div></blockquote>
<p><span class="target" id="zinctimenotifier_8h_1a9e77087011120f2c4f5a3a5fc2ccb518"></span><div class="line-block">
<div class="line">ZINC_API cmzn_timenotifier_regular_id <strong>cmzn_timenotifier_cast_regular</strong>(cmzn_timenotifier_id timenotifier)</div>
</div>
</p>
<blockquote>
<div><p></p>
<p><p>If the timenotifier is of regular type, then this function returns the derived type, otherwise it returns NULL. Caller is responsible for destroying the returned derived handle.</p>
<p><dl class="docutils">
<dt><strong>Return</strong></dt>
<dd>Handle to regular timenotifier if the input timenotifier is of this type, otherwise NULL. </dd>
<dt><strong>Parameters</strong></dt>
<dd><ul class="breatheparameterlist first last">
<li><tt class="first docutils literal"><span class="pre">timenotifier</span></tt> - <p>The base timenotifier to be cast. </p>
</li>
</ul>
</dd>
</dl>
</p>
</p>
</div></blockquote>
<p><span class="target" id="zinctimenotifier_8h_1abd9df270a40c4a0e2b060ac22e45a27d"></span><div class="line-block">
<div class="line">ZINC_C_INLINE cmzn_timenotifier_id <strong>cmzn_timenotifier_regular_base_cast</strong>(cmzn_timenotifier_regular_id timenotifier_regular)</div>
</div>
</p>
<blockquote>
<div><p></p>
<p><p>Cast regular timenotifier back to its base timenotifier and return the timenotifier. IMPORTANT NOTE: Returned timenotifier does not have incremented reference count and must not be destroyed. Use cmzn_timenotifier_access() to add a reference if maintaining returned handle beyond the lifetime of the argument.</p>
<p><dl class="docutils">
<dt><strong>Return</strong></dt>
<dd>Non-accessed handle to the base field or NULL if failed. </dd>
<dt><strong>Parameters</strong></dt>
<dd><ul class="breatheparameterlist first last">
<li><tt class="first docutils literal"><span class="pre">timenotifier_regular</span></tt> - <p>Handle to the timenotifier regular to cast. </p>
</li>
</ul>
</dd>
</dl>
</p>
</p>
</div></blockquote>
<p><span class="target" id="zinctimenotifier_8h_1abee5276ec24f18711d9366f2bfb0d299"></span><div class="line-block">
<div class="line">ZINC_API int <strong>cmzn_timenotifier_regular_destroy</strong>(cmzn_timenotifier_regular_id * timenotifier_regular_address)</div>
</div>
</p>
<blockquote>
<div><p></p>
<p><p>Destroys this reference to the regular timenotifier (and sets it to NULL). Internally this just decrements the reference count.</p>
<p><dl class="docutils">
<dt><strong>Return</strong></dt>
<dd>Status CMZN_OK on success, otherwise CMZN_ERROR_ARGUMENT. </dd>
<dt><strong>Parameters</strong></dt>
<dd><ul class="breatheparameterlist first last">
<li><tt class="first docutils literal"><span class="pre">regular_timenotifier_address</span></tt> - <p>Address of handle to the regular timenotifier. </p>
</li>
</ul>
</dd>
</dl>
</p>
</p>
</div></blockquote>
<p><span class="target" id="zinctimenotifier_8h_1a8f03f405fbe9d2a505a3d58b48cb99f0"></span><div class="line-block">
<div class="line">ZINC_API int <strong>cmzn_timenotifier_regular_set_frequency</strong>(cmzn_timenotifier_regular_id timenotifier_regular, double frequency)</div>
</div>
</p>
<blockquote>
<div><p></p>
<p><p>This controls the rate which the time dependent object is called back. The default value is 10 which means time notifier will receive 10 callbacks per unit of time in the time keeper. i.e. If the update frequency of time notifier is set to be 10, the actual interval between each callbacks is: 1/(update frequency) which is 0.1s. Note that the time notifier does not promise to receive callback exactly 0.1s after the previous callback.</p>
<p><dl class="docutils">
<dt><strong>Return</strong></dt>
<dd>Status CMZN_OK on success, otherwise CMZN_ERROR_ARGUMENT. </dd>
<dt><strong>Parameters</strong></dt>
<dd><ul class="breatheparameterlist first last">
<li><tt class="first docutils literal"><span class="pre">timenotifier_regular</span></tt> - <p>Handle to regular time notifier. </p>
</li>
<li><tt class="first docutils literal"><span class="pre">frequency</span></tt> - <p>The number of times which time notifier will receive callback per unit of time in the time keeper. Must be positive. </p>
</li>
</ul>
</dd>
</dl>
</p>
</p>
</div></blockquote>
<p><span class="target" id="zinctimenotifier_8h_1a7a9fb85eba138db0a71208f63b3473e4"></span><div class="line-block">
<div class="line">ZINC_API int <strong>cmzn_timenotifier_regular_set_offset</strong>(cmzn_timenotifier_regular_id timenotifier_regular, double time_offset)</div>
</div>
</p>
<blockquote>
<div><p></p>
<p><p>Sets the offset of times when a regular time notifier notifies clients. Notification occurs at the given time_offset and every mulitple of 1/freqency away from the offset.</p>
<p><dl class="docutils">
<dt><strong>Return</strong></dt>
<dd>Status CMZN_OK on success, otherwise CMZN_ERROR_ARGUMENT. </dd>
<dt><strong>Parameters</strong></dt>
<dd><ul class="breatheparameterlist first last">
<li><tt class="first docutils literal"><span class="pre">timenotifier_regular</span></tt> - <p>Handle to regular time notifier. </p>
</li>
<li><tt class="first docutils literal"><span class="pre">time_offset</span></tt> - <p>This set the time that notifier will receive callback. </p>
</li>
</ul>
</dd>
</dl>
</p>
</p>
</div></blockquote>
<p><span class="target" id="zinctimenotifier_8h_1a1bf42ef424ed6ee08be8bcc01ceeb57d"></span><div class="line-block">
<div class="line">ZINC_API cmzn_timenotifierevent_id <strong>cmzn_timenotifierevent_access</strong>(cmzn_timenotifierevent_id timenotifierevent)</div>
</div>
</p>
<blockquote>
<div><p></p>
<p><p>Returns a new reference to the timenotifier event with reference count incremented. Caller is responsible for destroying the new reference.</p>
<p><dl class="docutils">
<dt><strong>Return</strong></dt>
<dd>New timenotifierevent reference with incremented reference count. </dd>
<dt><strong>Parameters</strong></dt>
<dd><ul class="breatheparameterlist first last">
<li><tt class="first docutils literal"><span class="pre">timenotifierevent</span></tt> - <p>The timenotifier event to obtain a new reference to. </p>
</li>
</ul>
</dd>
</dl>
</p>
</p>
</div></blockquote>
<p><span class="target" id="zinctimenotifier_8h_1a97d353c211f65c938906c89a8ebb9b6c"></span><div class="line-block">
<div class="line">ZINC_API int <strong>cmzn_timenotifierevent_destroy</strong>(cmzn_timenotifierevent_id * timenotifierevent_address)</div>
</div>
</p>
<blockquote>
<div><p></p>
<p><p>Destroys this reference to the timenotifier event (and sets it to NULL). Internally this just decrements the reference count.</p>
<p>Note: At the end of the cmzn_timenotifier_callback_function, the caller will destroy the event argument so users do not need to call this destroy function unless, an additional reference count has been added through cmzn_timenotifierevent_access function.</p>
<p><dl class="docutils">
<dt><strong>Return</strong></dt>
<dd>Status CMZN_OK on success, any other value on failure. </dd>
<dt><strong>Parameters</strong></dt>
<dd><ul class="breatheparameterlist first last">
<li><tt class="first docutils literal"><span class="pre">timenotifierevent_address</span></tt> - <p>Address of timenotifier event handle to destroy. </p>
</li>
</ul>
</dd>
</dl>
</p>
</p>
</div></blockquote>
<p><span class="target" id="zinctimenotifier_8h_1a05f4b6e2157e1a288247d0c5bc5a1c24"></span><div class="line-block">
<div class="line">ZINC_API double <strong>cmzn_timenotifierevent_get_time</strong>(cmzn_timenotifierevent_id timenotifierevent)</div>
</div>
</p>
<blockquote>
<div><p></p>
<p><p>Get the time when this timenotifier event is triggered.</p>
<p><dl class="docutils">
<dt><strong>Return</strong></dt>
<dd>The time when this timenotifier event is triggered </dd>
<dt><strong>Parameters</strong></dt>
<dd><ul class="breatheparameterlist first last">
<li><tt class="first docutils literal"><span class="pre">timenotifierevent</span></tt> - <p>Handle to the timenotifier event. </p>
</li>
</ul>
</dd>
</dl>
</p>
</p>
</div></blockquote>
</div></blockquote>
</div></blockquote>
<div class="line-block" id="zinctimesequence_8h">
<div class="line"><em>file</em> <strong>timesequence.h</strong></div>
<div class="line"><em>#include &#8220;types/fieldmoduleid.h&#8221;</em></div>
<div class="line"><em>#include &#8220;types/timesequenceid.h&#8221;</em></div>
<div class="line"><em>#include &#8220;zinc/zincsharedobject.h&#8221;</em></div>
</div>
<blockquote>
<div><p></p>
<p></p>
<em>Functions</em><blockquote>
<div><p><span class="target" id="zinctimesequence_8h_1aa6690299cc01be097b5f15216ab683af"></span><div class="line-block">
<div class="line">ZINC_API cmzn_timesequence_id <strong>cmzn_fieldmodule_get_matching_timesequence</strong>(cmzn_fieldmodule_id field_module, int number_of_times, const double * times)</div>
</div>
</p>
<blockquote>
<div><p></p>
<p><p>FILE : timesequence.h</p>
<p>The public interface to time sequence which represents a sequence of times usually used to index node parameters. Finds or creates a time sequence in the field module which matches the sequence of times provided.</p>
<p><dl class="docutils">
<dt><strong>Return</strong></dt>
<dd>The time sequence matching the times array, or 0 if failed. Up to caller to destroy the returned handle. </dd>
<dt><strong>Parameters</strong></dt>
<dd><ul class="breatheparameterlist first last">
<li><tt class="first docutils literal"><span class="pre">field_module</span></tt> - <p>The field module to search or create in. </p>
</li>
<li><tt class="first docutils literal"><span class="pre">number_of_times</span></tt> - <p>The size of the times array. </p>
</li>
<li><tt class="first docutils literal"><span class="pre">times</span></tt> - <p>Array of times. Note later times must not be less than earlier times. </p>
</li>
</ul>
</dd>
</dl>
</p>
</p>
</div></blockquote>
<p><span class="target" id="zinctimesequence_8h_1ae6b85856d379deb7785c271e97a6b49b"></span><div class="line-block">
<div class="line">ZINC_API cmzn_timesequence_id <strong>cmzn_timesequence_access</strong>(cmzn_timesequence_id timesequence)</div>
</div>
</p>
<blockquote>
<div><p></p>
<p><p>Returns a new reference to the time sequence with reference count incremented. Caller is responsible for destroying the new reference.</p>
<p><dl class="docutils">
<dt><strong>Return</strong></dt>
<dd>New time sequence reference with incremented reference count. </dd>
<dt><strong>Parameters</strong></dt>
<dd><ul class="breatheparameterlist first last">
<li><tt class="first docutils literal"><span class="pre">timesequence</span></tt> - <p>The time sequence to obtain a new reference to. </p>
</li>
</ul>
</dd>
</dl>
</p>
</p>
</div></blockquote>
<p><span class="target" id="zinctimesequence_8h_1a904fcfff13a30d87beca827186d463e7"></span><div class="line-block">
<div class="line">ZINC_API int <strong>cmzn_timesequence_destroy</strong>(cmzn_timesequence_id * timesequence_address)</div>
</div>
</p>
<blockquote>
<div><p></p>
<p><p>Destroys reference to the time sequence and sets pointer/handle to NULL. Internally this just decrements the reference count.</p>
<p><dl class="docutils">
<dt><strong>Return</strong></dt>
<dd>Status CMZN_OK on success, any other value on failure. </dd>
<dt><strong>Parameters</strong></dt>
<dd><ul class="breatheparameterlist first last">
<li><tt class="first docutils literal"><span class="pre">timesequence_address</span></tt> - <p>Address of time sequence reference. </p>
</li>
</ul>
</dd>
</dl>
</p>
</p>
</div></blockquote>
<p><span class="target" id="zinctimesequence_8h_1a403962b4415261e0df0898c75b22622a"></span><div class="line-block">
<div class="line">ZINC_API int <strong>cmzn_timesequence_get_number_of_times</strong>(cmzn_timesequence_id timesequence)</div>
</div>
</p>
<blockquote>
<div><p></p>
<p><p>Gets the number of times in the time sequence.</p>
<p><dl class="docutils">
<dt><strong>Return</strong></dt>
<dd>The number of times. </dd>
<dt><strong>Parameters</strong></dt>
<dd><ul class="breatheparameterlist first last">
<li><tt class="first docutils literal"><span class="pre">timesequence</span></tt> - <p>The time sequence to query. </p>
</li>
</ul>
</dd>
</dl>
</p>
</p>
</div></blockquote>
<p><span class="target" id="zinctimesequence_8h_1a2b71e1d6c750e06f58db08ebb982072c"></span><div class="line-block">
<div class="line">ZINC_API double <strong>cmzn_timesequence_get_time</strong>(cmzn_timesequence_id timesequence, int time_index)</div>
</div>
</p>
<blockquote>
<div><p></p>
<p><p>Gets the time at the given time_index in the time sequence.</p>
<p><dl class="docutils">
<dt><strong>Return</strong></dt>
<dd>The time or -0 if error. </dd>
<dt><strong>Parameters</strong></dt>
<dd><ul class="breatheparameterlist first last">
<li><tt class="first docutils literal"><span class="pre">timesequence</span></tt> - <p>The time sequence to query. </p>
</li>
<li><tt class="first docutils literal"><span class="pre">time_index</span></tt> - <p>The index of the time to get, starting at 1. </p>
</li>
</ul>
</dd>
</dl>
</p>
</p>
</div></blockquote>
<p><span class="target" id="zinctimesequence_8h_1a9ce8b0d64d82691e9e12105809624bb1"></span><div class="line-block">
<div class="line">ZINC_API int <strong>cmzn_timesequence_set_time</strong>(cmzn_timesequence_id timesequence, int time_index, double time)</div>
</div>
</p>
<blockquote>
<div><p></p>
<p><p>Sets the time for the given time_index in the time sequence. This can only be done while the time sequence is not in use by other objects. If the sequence does not have as many times as the &lt;time_index&gt; then it will be expanded and the unspecified times also set to &lt;time&gt;.</p>
<p><dl class="docutils">
<dt><strong>Return</strong></dt>
<dd>Status CMZN_OK on success, otherwise CMZN_ERROR_ARGUMENT. </dd>
<dt><strong>Parameters</strong></dt>
<dd><ul class="breatheparameterlist first last">
<li><tt class="first docutils literal"><span class="pre">timesequence</span></tt> - <p>The time sequence to modify. </p>
</li>
<li><tt class="first docutils literal"><span class="pre">time_index</span></tt> - <p>The index of the time to set, starting at 1. </p>
</li>
<li><tt class="first docutils literal"><span class="pre">time</span></tt> - <p>The time to set. </p>
</li>
</ul>
</dd>
</dl>
</p>
</p>
</div></blockquote>
</div></blockquote>
</div></blockquote>
<div class="line-block" id="zinccinline_8h">
<div class="line"><em>file</em> <strong>cinline.h</strong></div>
</div>
<blockquote>
<div><p></p>
<p></p>
<em>Defines</em><blockquote>
<div><p><span class="target" id="zinccinline_8h_1a2413a50d88c9af51b2cb3101eaa951be"></span><strong>CMZN_C_INLINE</strong></p>
<blockquote>
<div><p></p>
<p>FILE : cinline.h </p>
</div></blockquote>
<p><span class="target" id="zinccinline_8h_1a43787edb7f28fd7738852a12c3bbd96a"></span><strong>CMZN_CINLINE_H__</strong></p>
<blockquote>
<div><p></p>
<p></p>
</div></blockquote>
</div></blockquote>
</div></blockquote>
<div class="line-block" id="zinccontextid_8h">
<div class="line"><em>file</em> <strong>contextid.h</strong></div>
</div>
<blockquote>
<div><p></p>
<p></p>
<em>Typedefs</em><blockquote>
<div><p><span class="target" id="zinccontextid_8h_1a6a05f3fc8b7f0dbb89808dd83c5a909d"></span>typedef struct cmzn_context * <strong>cmzn_context_id</strong></p>
<blockquote>
<div><p></p>
<p></p>
</div></blockquote>
</div></blockquote>
</div></blockquote>
<div class="line-block" id="zincdifferentialoperatorid_8h">
<div class="line"><em>file</em> <strong>differentialoperatorid.h</strong></div>
</div>
<blockquote>
<div><p></p>
<p></p>
<em>Typedefs</em><blockquote>
<div><p><span class="target" id="zincdifferentialoperatorid_8h_1acf93abd1c2848c0e3a8f435746fd2fb3"></span>typedef struct cmzn_differentialoperator* <strong>cmzn_differentialoperator_id</strong></p>
<blockquote>
<div><p></p>
<p></p>
</div></blockquote>
</div></blockquote>
</div></blockquote>
<div class="line-block" id="zincelementid_8h">
<div class="line"><em>file</em> <strong>elementid.h</strong></div>
</div>
<blockquote>
<div><p></p>
<p></p>
<em>Typedefs</em><blockquote>
<div><p><span class="target" id="zincelementid_8h_1a0107d535a904cee9f47a6a114c3b868e"></span>typedef struct cmzn_mesh * <strong>cmzn_mesh_id</strong></p>
<blockquote>
<div><p></p>
<p></p>
</div></blockquote>
<p><span class="target" id="zincelementid_8h_1a30896ba3dfef851c2c20b32a7b455661"></span>typedef struct cmzn_mesh_group * <strong>cmzn_mesh_group_id</strong></p>
<blockquote>
<div><p></p>
<p></p>
</div></blockquote>
<p><span class="target" id="zincelementid_8h_1aea736b21f19c33d3170f37a9433f3dca"></span>typedef struct cmzn_elementtemplate * <strong>cmzn_elementtemplate_id</strong></p>
<blockquote>
<div><p></p>
<p></p>
</div></blockquote>
<p><span class="target" id="zincelementid_8h_1ad0c7ffc64948896c34b06cfa0b032af4"></span>typedef struct cmzn_element * <strong>cmzn_element_id</strong></p>
<blockquote>
<div><p></p>
<p>Handle to a single finite element object from a mesh </p>
</div></blockquote>
<p><span class="target" id="zincelementid_8h_1a12d6eb44f8d82588e13ab3ae199fc25f"></span>typedef struct cmzn_elementiterator * <strong>cmzn_elementiterator_id</strong></p>
<blockquote>
<div><p></p>
<p></p>
</div></blockquote>
<p><span class="target" id="zincelementid_8h_1a58a6eae6f4aed375317a7039061beb5c"></span>typedef struct cmzn_elementbasis * <strong>cmzn_elementbasis_id</strong></p>
<blockquote>
<div><p></p>
<p>Handle to an element basis function definition </p>
</div></blockquote>
<p><span class="target" id="zincelementid_8h_1a5d4fea1f2cfde979ab8de1ee1a59a52a"></span>typedef struct cmzn_meshchanges * <strong>cmzn_meshchanges_id</strong></p>
<blockquote>
<div><p></p>
<p>Handle to object describing changes to a mesh in a fieldmoduleevent </p>
</div></blockquote>
<p><span class="target" id="zincelementid_8h_1a86227fc5d2f55d058d3ae5969f06540a"></span>typedef int <strong>cmzn_element_change_flags</strong></p>
<blockquote>
<div><p></p>
<p>Type for passing logical OR of #cmzn_element_change_flag </p>
</div></blockquote>
</div></blockquote>
<em>Enums</em><blockquote>
<div><p><span class="target" id="zincelementid_8h_1a3dd13f0defa0708d67c7f5f6014209cc"></span><strong>cmzn_element_face_type enum</strong></p>
<blockquote>
<div><p></p>
<p>An enum for selecting the faces of elements. </p>
<p><em>Values:</em></p>
<ul class="breatheenumvalues">
<li><tt class="first docutils literal"><span class="pre">CMZN_ELEMENT_FACE_TYPE_INVALID</span></tt><tt class="docutils literal"> <span class="pre">=</span> <span class="pre">=</span> <span class="pre">-1</span></tt> - </li>
<li><tt class="first docutils literal"><span class="pre">CMZN_ELEMENT_FACE_TYPE_ALL</span></tt> - <p>include all faces </p>
</li>
<li><tt class="first docutils literal"><span class="pre">CMZN_ELEMENT_FACE_TYPE_XI1_0</span></tt> - <p>only faces where top-level xi1 == 0 </p>
</li>
<li><tt class="first docutils literal"><span class="pre">CMZN_ELEMENT_FACE_TYPE_XI1_1</span></tt> - <p>only faces where top-level xi1 == 1 </p>
</li>
<li><tt class="first docutils literal"><span class="pre">CMZN_ELEMENT_FACE_TYPE_XI2_0</span></tt> - <p>only faces where top-level xi2 == 0 </p>
</li>
<li><tt class="first docutils literal"><span class="pre">CMZN_ELEMENT_FACE_TYPE_XI2_1</span></tt> - <p>only faces where top-level xi2 == 1 </p>
</li>
<li><tt class="first docutils literal"><span class="pre">CMZN_ELEMENT_FACE_TYPE_XI3_0</span></tt> - <p>only faces where top-level xi3 == 0 </p>
</li>
<li><tt class="first docutils literal"><span class="pre">CMZN_ELEMENT_FACE_TYPE_XI3_1</span></tt> - <p>only faces where top-level xi3 == 1 </p>
</li>
</ul>
</div></blockquote>
<p><span class="target" id="zincelementid_8h_1ab765e437d5d0fd23b87465f128204d4e"></span><strong>cmzn_element_shape_type enum</strong></p>
<blockquote>
<div><p></p>
<p>Common element shapes. </p>
<p><em>Values:</em></p>
<ul class="breatheenumvalues">
<li><tt class="first docutils literal"><span class="pre">CMZN_ELEMENT_SHAPE_TYPE_INVALID</span></tt><tt class="docutils literal"> <span class="pre">=</span> <span class="pre">=</span> <span class="pre">0</span></tt> - <p>unspecified shape of known dimension </p>
</li>
<li><tt class="first docutils literal"><span class="pre">CMZN_ELEMENT_SHAPE_TYPE_LINE</span></tt><tt class="docutils literal"> <span class="pre">=</span> <span class="pre">=</span> <span class="pre">1</span></tt> - <p>1-D: 0 &lt;= xi1 &lt;= 1 </p>
</li>
<li><tt class="first docutils literal"><span class="pre">CMZN_ELEMENT_SHAPE_TYPE_SQUARE</span></tt><tt class="docutils literal"> <span class="pre">=</span> <span class="pre">=</span> <span class="pre">2</span></tt> - <p>2-D: 0 &lt;= xi1,xi2 &lt;= 1 </p>
</li>
<li><tt class="first docutils literal"><span class="pre">CMZN_ELEMENT_SHAPE_TYPE_TRIANGLE</span></tt><tt class="docutils literal"> <span class="pre">=</span> <span class="pre">=</span> <span class="pre">3</span></tt> - <p>3-D: 0 &lt;= xi1,xi2; xi1+xi2 &lt;= 1 </p>
</li>
<li><tt class="first docutils literal"><span class="pre">CMZN_ELEMENT_SHAPE_TYPE_CUBE</span></tt><tt class="docutils literal"> <span class="pre">=</span> <span class="pre">=</span> <span class="pre">4</span></tt> - <p>3-D: 0 &lt;= xi1,xi2,xi3 &lt;= 1 </p>
</li>
<li><tt class="first docutils literal"><span class="pre">CMZN_ELEMENT_SHAPE_TYPE_TETRAHEDRON</span></tt><tt class="docutils literal"> <span class="pre">=</span> <span class="pre">=</span> <span class="pre">5</span></tt> - <p>3-D: 0 &lt;= xi1,xi2,xi3; xi1+xi2+xi3 &lt;= 1 </p>
</li>
<li><tt class="first docutils literal"><span class="pre">CMZN_ELEMENT_SHAPE_TYPE_WEDGE12</span></tt><tt class="docutils literal"> <span class="pre">=</span> <span class="pre">=</span> <span class="pre">6</span></tt> - <p>3-D: 0 &lt;= xi1,xi2; xi1+xi2 &lt;= 1; 0 &lt;= xi3 &lt;= 1 </p>
</li>
<li><tt class="first docutils literal"><span class="pre">CMZN_ELEMENT_SHAPE_TYPE_WEDGE13</span></tt><tt class="docutils literal"> <span class="pre">=</span> <span class="pre">=</span> <span class="pre">7</span></tt> - <p>3-D: 0 &lt;= xi1,xi3; xi1+xi3 &lt;= 1; 0 &lt;= xi2 &lt;= 1 </p>
</li>
<li><tt class="first docutils literal"><span class="pre">CMZN_ELEMENT_SHAPE_TYPE_WEDGE23</span></tt><tt class="docutils literal"> <span class="pre">=</span> <span class="pre">=</span> <span class="pre">8</span></tt> - <p>3-D: 0 &lt;= xi2,xi3; xi2+xi3 &lt;= 1; 0 &lt;= xi1 &lt;= 1 </p>
</li>
</ul>
</div></blockquote>
<p><span class="target" id="zincelementid_8h_1a5ccd26a1044493f6503a561a59a1bfab"></span><strong>cmzn_elementbasis_function_type enum</strong></p>
<blockquote>
<div><p></p>
<p>Common 1-D or linked-dimension basis function types. </p>
<p><em>Values:</em></p>
<ul class="breatheenumvalues">
<li><tt class="first docutils literal"><span class="pre">CMZN_ELEMENTBASIS_FUNCTION_TYPE_INVALID</span></tt><tt class="docutils literal"> <span class="pre">=</span> <span class="pre">=</span> <span class="pre">0</span></tt> - </li>
<li><tt class="first docutils literal"><span class="pre">CMZN_ELEMENTBASIS_FUNCTION_TYPE_CONSTANT</span></tt><tt class="docutils literal"> <span class="pre">=</span> <span class="pre">=</span> <span class="pre">1</span></tt> - </li>
<li><tt class="first docutils literal"><span class="pre">CMZN_ELEMENTBASIS_FUNCTION_TYPE_LINEAR_LAGRANGE</span></tt><tt class="docutils literal"> <span class="pre">=</span> <span class="pre">=</span> <span class="pre">2</span></tt> - </li>
<li><tt class="first docutils literal"><span class="pre">CMZN_ELEMENTBASIS_FUNCTION_TYPE_QUADRATIC_LAGRANGE</span></tt><tt class="docutils literal"> <span class="pre">=</span> <span class="pre">=</span> <span class="pre">3</span></tt> - </li>
<li><tt class="first docutils literal"><span class="pre">CMZN_ELEMENTBASIS_FUNCTION_TYPE_CUBIC_LAGRANGE</span></tt><tt class="docutils literal"> <span class="pre">=</span> <span class="pre">=</span> <span class="pre">4</span></tt> - </li>
<li><tt class="first docutils literal"><span class="pre">CMZN_ELEMENTBASIS_FUNCTION_TYPE_LINEAR_SIMPLEX</span></tt><tt class="docutils literal"> <span class="pre">=</span> <span class="pre">=</span> <span class="pre">5</span></tt> - <p>linked on 2 or more dimensions </p>
</li>
<li><tt class="first docutils literal"><span class="pre">CMZN_ELEMENTBASIS_FUNCTION_TYPE_QUADRATIC_SIMPLEX</span></tt><tt class="docutils literal"> <span class="pre">=</span> <span class="pre">=</span> <span class="pre">6</span></tt> - <p>linked on 2 or more dimensions </p>
</li>
<li><tt class="first docutils literal"><span class="pre">CMZN_ELEMENTBASIS_FUNCTION_TYPE_CUBIC_HERMITE</span></tt><tt class="docutils literal"> <span class="pre">=</span> <span class="pre">=</span> <span class="pre">7</span></tt> - </li>
</ul>
</div></blockquote>
<p><span class="target" id="zincelementid_8h_1ac6659306e9c6043f36e6ea730946b3f0"></span><strong>cmzn_element_point_sampling_mode enum</strong></p>
<blockquote>
<div><p></p>
<p>Mode controlling how points are sampled from elements. </p>
<p><em>Values:</em></p>
<ul class="breatheenumvalues">
<li><tt class="first docutils literal"><span class="pre">CMZN_ELEMENT_POINT_SAMPLING_MODE_INVALID</span></tt><tt class="docutils literal"> <span class="pre">=</span> <span class="pre">=</span> <span class="pre">0</span></tt> - </li>
<li><tt class="first docutils literal"><span class="pre">CMZN_ELEMENT_POINT_SAMPLING_MODE_CELL_CENTRES</span></tt><tt class="docutils literal"> <span class="pre">=</span> <span class="pre">=</span> <span class="pre">1</span></tt> - <p>Sample points at centres of element or tessellation cells </p>
</li>
<li><tt class="first docutils literal"><span class="pre">CMZN_ELEMENT_POINT_SAMPLING_MODE_CELL_CORNERS</span></tt><tt class="docutils literal"> <span class="pre">=</span> <span class="pre">=</span> <span class="pre">2</span></tt> - <p>Sample points at corners of element or tessellation cells </p>
</li>
<li><tt class="first docutils literal"><span class="pre">CMZN_ELEMENT_POINT_SAMPLING_MODE_CELL_POISSON</span></tt><tt class="docutils literal"> <span class="pre">=</span> <span class="pre">=</span> <span class="pre">3</span></tt> - <p>Sample points randomly within each tessellation cell according to a Poisson distribution with expected number given by: sample density field * cell volume, area or length, depending on dimension. The sample density field should be evaluated at the cell centre. </p>
</li>
<li><tt class="first docutils literal"><span class="pre">CMZN_ELEMENT_POINT_SAMPLING_MODE_SET_LOCATION</span></tt><tt class="docutils literal"> <span class="pre">=</span> <span class="pre">=</span> <span class="pre">4</span></tt> - <p>One point at a specified location in the element chart. </p>
</li>
</ul>
</div></blockquote>
<p><span class="target" id="zincelementid_8h_1ad2312a74bc5c2bf31f745ead81cda8ee"></span><strong>cmzn_element_change_flag enum</strong></p>
<blockquote>
<div><p></p>
<p>Bit flags summarising changes to an element or elements in a mesh. </p>
<p><em>Values:</em></p>
<ul class="breatheenumvalues">
<li><tt class="first docutils literal"><span class="pre">CMZN_ELEMENT_CHANGE_FLAG_NONE</span></tt><tt class="docutils literal"> <span class="pre">=</span> <span class="pre">=</span> <span class="pre">0</span></tt> - <p>element(s) not changed </p>
</li>
<li><tt class="first docutils literal"><span class="pre">CMZN_ELEMENT_CHANGE_FLAG_ADD</span></tt><tt class="docutils literal"> <span class="pre">=</span> <span class="pre">=</span> <span class="pre">1</span></tt> - <p>element(s) added </p>
</li>
<li><tt class="first docutils literal"><span class="pre">CMZN_ELEMENT_CHANGE_FLAG_REMOVE</span></tt><tt class="docutils literal"> <span class="pre">=</span> <span class="pre">=</span> <span class="pre">2</span></tt> - <p>element(s) removed </p>
</li>
<li><tt class="first docutils literal"><span class="pre">CMZN_ELEMENT_CHANGE_FLAG_IDENTIFIER</span></tt><tt class="docutils literal"> <span class="pre">=</span> <span class="pre">=</span> <span class="pre">4</span></tt> - <p>element(s&#8217;) identifier changed </p>
</li>
<li><tt class="first docutils literal"><span class="pre">CMZN_ELEMENT_CHANGE_FLAG_DEFINITION</span></tt><tt class="docutils literal"> <span class="pre">=</span> <span class="pre">=</span> <span class="pre">8</span></tt> - <p>element(s&#8217;) definition other than identifier changed e.g. shape </p>
</li>
<li><tt class="first docutils literal"><span class="pre">CMZN_ELEMENT_CHANGE_FLAG_FIELD</span></tt><tt class="docutils literal"> <span class="pre">=</span> <span class="pre">=</span> <span class="pre">16</span></tt> - <p>change to field values mapped to element(s) </p>
</li>
</ul>
</div></blockquote>
</div></blockquote>
</div></blockquote>
<div class="line-block" id="zincfieldaliasid_8h">
<div class="line"><em>file</em> <strong>fieldaliasid.h</strong></div>
</div>
<blockquote>
<div><p></p>
<p></p>
<em>Defines</em><blockquote>
<div><p><span class="target" id="zincfieldaliasid_8h_1ad0e30b944a855a3e6b3664fb61d286ae"></span><strong>CMZN_FIELDALIASID_H__</strong></p>
<blockquote>
<div><p></p>
<p></p>
</div></blockquote>
</div></blockquote>
<em>Typedefs</em><blockquote>
<div><p><span class="target" id="zincfieldaliasid_8h_1a2c72d7fefd54a71c53229735199184f0"></span>typedef struct cmzn_field_alias * <strong>cmzn_field_alias_id</strong></p>
<blockquote>
<div><p></p>
<p></p>
</div></blockquote>
</div></blockquote>
</div></blockquote>
<div class="line-block" id="zincfieldcacheid_8h">
<div class="line"><em>file</em> <strong>fieldcacheid.h</strong></div>
</div>
<blockquote>
<div><p></p>
<p></p>
<em>Typedefs</em><blockquote>
<div><p><span class="target" id="zincfieldcacheid_8h_1a6c74a6c814bc432f1db4a1294ba37e9e"></span>typedef struct cmzn_fieldcache * <strong>cmzn_fieldcache_id</strong></p>
<blockquote>
<div><p></p>
<p>Handle to field evaluation and assignment cache </p>
</div></blockquote>
</div></blockquote>
</div></blockquote>
<div class="line-block" id="zincfieldcadid_8h">
<div class="line"><em>file</em> <strong>fieldcadid.h</strong></div>
</div>
<blockquote>
<div><p></p>
<p></p>
<em>Typedefs</em><blockquote>
<div><p><span class="target" id="zincfieldcadid_8h_1a31d563b8676d1e9c6b4697b5a1a10e8d"></span>typedef struct cmzn_field_cad_topology * <strong>cmzn_field_cad_topology_id</strong></p>
<blockquote>
<div><p></p>
<p></p>
</div></blockquote>
<p><span class="target" id="zincfieldcadid_8h_1a89324c9b3e0b05cb398b9b1832b81445"></span>typedef int <strong>cmzn_cad_surface_identifier</strong></p>
<blockquote>
<div><p></p>
<p></p>
</div></blockquote>
<p><span class="target" id="zincfieldcadid_8h_1a797082b6f0120f0a85836eb34931317c"></span>typedef int <strong>cmzn_cad_surface_point_identifier</strong></p>
<blockquote>
<div><p></p>
<p></p>
</div></blockquote>
<p><span class="target" id="zincfieldcadid_8h_1a91736cccbedf54285cd340a87350d082"></span>typedef int <strong>cmzn_cad_curve_identifier</strong></p>
<blockquote>
<div><p></p>
<p></p>
</div></blockquote>
<p><span class="target" id="zincfieldcadid_8h_1a00a57cdf436a7ec5a289cd59a9e369b9"></span>typedef int <strong>cmzn_cad_curve_point_identifier</strong></p>
<blockquote>
<div><p></p>
<p></p>
</div></blockquote>
</div></blockquote>
</div></blockquote>
<div class="line-block" id="zincfieldcompositeid_8h">
<div class="line"><em>file</em> <strong>fieldcompositeid.h</strong></div>
</div>
<blockquote>
<div><p></p>
<p></p>
<em>Typedefs</em><blockquote>
<div><p><span class="target" id="zincfieldcompositeid_8h_1a54375e02f800d4d7b8095e705bbbc0c3"></span>typedef struct cmzn_field_component * <strong>cmzn_field_component_id</strong></p>
<blockquote>
<div><p></p>
<p></p>
</div></blockquote>
</div></blockquote>
</div></blockquote>
<div class="line-block" id="zincfieldfiniteelementid_8h">
<div class="line"><em>file</em> <strong>fieldfiniteelementid.h</strong></div>
</div>
<blockquote>
<div><p></p>
<p></p>
<em>Defines</em><blockquote>
<div><p><span class="target" id="zincfieldfiniteelementid_8h_1a985570dc5fe8714083224ecff3cf1692"></span><strong>CMZN_FIELD_FINITE_ELEMENT_ID_DEFINED</strong></p>
<blockquote>
<div><p></p>
<p></p>
</div></blockquote>
</div></blockquote>
<em>Typedefs</em><blockquote>
<div><p><span class="target" id="zincfieldfiniteelementid_8h_1aaf83a0c5c11c1b8729921d10962e8e4f"></span>typedef struct cmzn_field_finite_element * <strong>cmzn_field_finite_element_id</strong></p>
<blockquote>
<div><p></p>
<p></p>
</div></blockquote>
<p><span class="target" id="zincfieldfiniteelementid_8h_1aa77e1a17719825a1cd1e204c8dffde11"></span>typedef struct cmzn_field_find_mesh_location * <strong>cmzn_field_find_mesh_location_id</strong></p>
<blockquote>
<div><p></p>
<p></p>
</div></blockquote>
<p><span class="target" id="zincfieldfiniteelementid_8h_1a452b91443f971892bcb7d76c8d68ab93"></span>typedef struct cmzn_field_stored_mesh_location * <strong>cmzn_field_stored_mesh_location_id</strong></p>
<blockquote>
<div><p></p>
<p></p>
</div></blockquote>
<p><span class="target" id="zincfieldfiniteelementid_8h_1ad3c45de5b374184ceee0f3a8724655a0"></span>typedef struct cmzn_field_stored_string * <strong>cmzn_field_stored_string_id</strong></p>
<blockquote>
<div><p></p>
<p></p>
</div></blockquote>
</div></blockquote>
<em>Enums</em><blockquote>
<div><p><span class="target" id="zincfieldfiniteelementid_8h_1a4a45eda38d575eae34154dce7b5fad6d"></span><strong>cmzn_field_find_mesh_location_search_mode enum</strong></p>
<blockquote>
<div><p></p>
<p>Enumeration controlling whether find_mesh_location returns location of exact field value match, or nearest value. </p>
<p><em>Values:</em></p>
<ul class="breatheenumvalues">
<li><tt class="first docutils literal"><span class="pre">CMZN_FIELD_FIND_MESH_LOCATION_SEARCH_MODE_INVALID</span></tt><tt class="docutils literal"> <span class="pre">=</span> <span class="pre">=</span> <span class="pre">0</span></tt> - </li>
<li><tt class="first docutils literal"><span class="pre">CMZN_FIELD_FIND_MESH_LOCATION_SEARCH_MODE_EXACT</span></tt><tt class="docutils literal"> <span class="pre">=</span> <span class="pre">=</span> <span class="pre">1</span></tt> - <p>Only location where mesh field value is exactly equal to source field is returned. This is the default search criterion. </p>
</li>
<li><tt class="first docutils literal"><span class="pre">CMZN_FIELD_FIND_MESH_LOCATION_SEARCH_MODE_NEAREST</span></tt><tt class="docutils literal"> <span class="pre">=</span> <span class="pre">=</span> <span class="pre">2</span></tt> - <p>Location of RMS nearest value of mesh field to source field is returned. </p>
</li>
</ul>
</div></blockquote>
</div></blockquote>
</div></blockquote>
<div class="line-block" id="zincfieldgroupid_8h">
<div class="line"><em>file</em> <strong>fieldgroupid.h</strong></div>
</div>
<blockquote>
<div><p></p>
<p></p>
<em>Typedefs</em><blockquote>
<div><p><span class="target" id="zincfieldgroupid_8h_1ac7fe8b5853ad6f3a47b1ce2fc255920b"></span>typedef struct cmzn_field_group * <strong>cmzn_field_group_id</strong></p>
<blockquote>
<div><p></p>
<p></p>
</div></blockquote>
</div></blockquote>
</div></blockquote>
<div class="line-block" id="zincfieldid_8h">
<div class="line"><em>file</em> <strong>fieldid.h</strong></div>
</div>
<blockquote>
<div><p></p>
<p></p>
<em>Typedefs</em><blockquote>
<div><p><span class="target" id="zincfieldid_8h_1a7017fd7b9084a8c2c4b29f1ef756080e"></span>typedef struct cmzn_field * <strong>cmzn_field_id</strong></p>
<blockquote>
<div><p></p>
<p></p>
</div></blockquote>
<p><span class="target" id="zincfieldid_8h_1a92b5d1e0eb8bcad4203ce6e5c2f12479"></span>typedef struct cmzn_fielditerator * <strong>cmzn_fielditerator_id</strong></p>
<blockquote>
<div><p></p>
<p></p>
</div></blockquote>
<p><span class="target" id="zincfieldid_8h_1a0066921d2842b8e803a38263cd1f8e88"></span>typedef int <strong>cmzn_field_change_flags</strong></p>
<blockquote>
<div><p></p>
<p>Type for passing logical OR of #cmzn_field_change_flag </p>
</div></blockquote>
<p><span class="target" id="zincfieldid_8h_1a458159218dd19f457d0b1a81eda96873"></span>typedef int <strong>cmzn_field_domain_types</strong></p>
<blockquote>
<div><p></p>
<p>Type for passing logical OR of #cmzn_field_domain_type </p>
</div></blockquote>
</div></blockquote>
<em>Enums</em><blockquote>
<div><p><span class="target" id="zincfieldid_8h_1a186fed82f166e78cc881950557eda8cc"></span><strong>cmzn_field_change_flag enum</strong></p>
<blockquote>
<div><p></p>
<p>Bit flags summarising changes to a field or fields in a fieldmodule. </p>
<p><em>Values:</em></p>
<ul class="breatheenumvalues">
<li><tt class="first docutils literal"><span class="pre">CMZN_FIELD_CHANGE_FLAG_NONE</span></tt><tt class="docutils literal"> <span class="pre">=</span> <span class="pre">=</span> <span class="pre">0</span></tt> - <p>field(s) not changed </p>
</li>
<li><tt class="first docutils literal"><span class="pre">CMZN_FIELD_CHANGE_FLAG_ADD</span></tt><tt class="docutils literal"> <span class="pre">=</span> <span class="pre">=</span> <span class="pre">1</span></tt> - <p>one or more fields added </p>
</li>
<li><tt class="first docutils literal"><span class="pre">CMZN_FIELD_CHANGE_FLAG_REMOVE</span></tt><tt class="docutils literal"> <span class="pre">=</span> <span class="pre">=</span> <span class="pre">2</span></tt> - <p>one or more fields removed </p>
</li>
<li><tt class="first docutils literal"><span class="pre">CMZN_FIELD_CHANGE_FLAG_IDENTIFIER</span></tt><tt class="docutils literal"> <span class="pre">=</span> <span class="pre">=</span> <span class="pre">4</span></tt> - <p>field identifier changed </p>
</li>
<li><tt class="first docutils literal"><span class="pre">CMZN_FIELD_CHANGE_FLAG_DEFINITION</span></tt><tt class="docutils literal"> <span class="pre">=</span> <span class="pre">=</span> <span class="pre">8</span></tt> - <p>change to field attributes other than identifier. If change affects result, CMZN_FIELD_CHANGE_FLAG_FULL_RESULT will also be set; metadata changes do not flag result as changed. </p>
</li>
<li><tt class="first docutils literal"><span class="pre">CMZN_FIELD_CHANGE_FLAG_FULL_RESULT</span></tt><tt class="docutils literal"> <span class="pre">=</span> <span class="pre">=</span> <span class="pre">16</span></tt> - <p>all resultant values of field changed, by its definition changing or by change to a field or other object it depends on. </p>
</li>
<li><tt class="first docutils literal"><span class="pre">CMZN_FIELD_CHANGE_FLAG_PARTIAL_RESULT</span></tt><tt class="docutils literal"> <span class="pre">=</span> <span class="pre">=</span> <span class="pre">32</span></tt> - <p>change to field values on subset of domain: nodes, elements etc. If this flag is set but not CHANGE_FLAG_FULL_RESULT then nodeset and mesh changes describe where on the domain its values have changed. </p>
</li>
<li><tt class="first docutils literal"><span class="pre">CMZN_FIELD_CHANGE_FLAG_RESULT</span></tt><tt class="docutils literal"> <span class="pre">=</span> <span class="pre">=</span>
<span class="pre">CMZN_FIELD_CHANGE_FLAG_FULL_RESULT</span> <span class="pre">|</span>
<span class="pre">CMZN_FIELD_CHANGE_FLAG_PARTIAL_RESULT</span></tt> - <p>convenient value representing any change affecting result </p>
</li>
<li><tt class="first docutils literal"><span class="pre">CMZN_FIELD_CHANGE_FLAG_FINAL</span></tt><tt class="docutils literal"> <span class="pre">=</span> <span class="pre">=</span> <span class="pre">32768</span></tt> - <p>final notification: owning field module i.e. region has been destroyed </p>
</li>
</ul>
</div></blockquote>
<p><span class="target" id="zincfieldid_8h_1a625ebf009d73d9274c1bdf9e6a4380fd"></span><strong>cmzn_field_coordinate_system_type enum</strong></p>
<blockquote>
<div><p></p>
<p>Field attribute describing the type of space that its values are to be interpreted in. Although it is usually set for all fields (default is rectangular cartesian, RC), the attribute is only relevant when field is used to supply coordinates or vector values, e.g. to graphics, where it prompts automatic conversion to the underlying RC coordinate system. </p>
<p><em>Values:</em></p>
<ul class="breatheenumvalues">
<li><tt class="first docutils literal"><span class="pre">CMZN_FIELD_COORDINATE_SYSTEM_TYPE_INVALID</span></tt><tt class="docutils literal"> <span class="pre">=</span> <span class="pre">=</span> <span class="pre">0</span></tt> - </li>
<li><tt class="first docutils literal"><span class="pre">CMZN_FIELD_COORDINATE_SYSTEM_TYPE_RECTANGULAR_CARTESIAN</span></tt><tt class="docutils literal"> <span class="pre">=</span> <span class="pre">=</span> <span class="pre">1</span></tt> - </li>
<li><tt class="first docutils literal"><span class="pre">CMZN_FIELD_COORDINATE_SYSTEM_TYPE_CYLINDRICAL_POLAR</span></tt><tt class="docutils literal"> <span class="pre">=</span> <span class="pre">=</span> <span class="pre">2</span></tt> - </li>
<li><tt class="first docutils literal"><span class="pre">CMZN_FIELD_COORDINATE_SYSTEM_TYPE_SPHERICAL_POLAR</span></tt><tt class="docutils literal"> <span class="pre">=</span> <span class="pre">=</span> <span class="pre">3</span></tt> - </li>
<li><tt class="first docutils literal"><span class="pre">CMZN_FIELD_COORDINATE_SYSTEM_TYPE_PROLATE_SPHEROIDAL</span></tt><tt class="docutils literal"> <span class="pre">=</span> <span class="pre">=</span> <span class="pre">4</span></tt> - <p><dl class="docutils">
<dt><strong>See</strong></dt>
<dd><p class="first last"><p>cmzn_field_set_coordinate_system_focus </p>
</p>
</dd>
</dl>
</p>
</li>
<li><tt class="first docutils literal"><span class="pre">CMZN_FIELD_COORDINATE_SYSTEM_TYPE_OBLATE_SPHEROIDAL</span></tt><tt class="docutils literal"> <span class="pre">=</span> <span class="pre">=</span> <span class="pre">5</span></tt> - <p><dl class="docutils">
<dt><strong>See</strong></dt>
<dd><p class="first last"><p>cmzn_field_set_coordinate_system_focus </p>
</p>
</dd>
</dl>
</p>
</li>
<li><tt class="first docutils literal"><span class="pre">CMZN_FIELD_COORDINATE_SYSTEM_TYPE_FIBRE</span></tt><tt class="docutils literal"> <span class="pre">=</span> <span class="pre">=</span> <span class="pre">6</span></tt> - <p>For Euler angles specifying fibre axes orientation from default aligned with element xi coordinates. </p>
</li>
</ul>
</div></blockquote>
<p><span class="target" id="zincfieldid_8h_1a47a2b226adb2cc387f3d2f62de828d29"></span><strong>cmzn_field_domain_type enum</strong></p>
<blockquote>
<div><p></p>
<p>An enum specifying the field domain (without domain objects) Also used as bit flags. </p>
<p><em>Values:</em></p>
<ul class="breatheenumvalues">
<li><tt class="first docutils literal"><span class="pre">CMZN_FIELD_DOMAIN_TYPE_INVALID</span></tt><tt class="docutils literal"> <span class="pre">=</span> <span class="pre">=</span> <span class="pre">0</span></tt> - </li>
<li><tt class="first docutils literal"><span class="pre">CMZN_FIELD_DOMAIN_TYPE_POINT</span></tt><tt class="docutils literal"> <span class="pre">=</span> <span class="pre">=</span> <span class="pre">1</span></tt> - <p>A single point for the region </p>
</li>
<li><tt class="first docutils literal"><span class="pre">CMZN_FIELD_DOMAIN_TYPE_NODES</span></tt><tt class="docutils literal"> <span class="pre">=</span> <span class="pre">=</span> <span class="pre">2</span></tt> - <p>The set of node points </p>
</li>
<li><tt class="first docutils literal"><span class="pre">CMZN_FIELD_DOMAIN_TYPE_DATAPOINTS</span></tt><tt class="docutils literal"> <span class="pre">=</span> <span class="pre">=</span> <span class="pre">4</span></tt> - <p>The set of data points </p>
</li>
<li><tt class="first docutils literal"><span class="pre">CMZN_FIELD_DOMAIN_TYPE_MESH1D</span></tt><tt class="docutils literal"> <span class="pre">=</span> <span class="pre">=</span> <span class="pre">8</span></tt> - <p>The set of 1-D elements and edge lines of 2-D or 3-D elements </p>
</li>
<li><tt class="first docutils literal"><span class="pre">CMZN_FIELD_DOMAIN_TYPE_MESH2D</span></tt><tt class="docutils literal"> <span class="pre">=</span> <span class="pre">=</span> <span class="pre">16</span></tt> - <p>The set of 2-D elements and faces of 3-D elements </p>
</li>
<li><tt class="first docutils literal"><span class="pre">CMZN_FIELD_DOMAIN_TYPE_MESH3D</span></tt><tt class="docutils literal"> <span class="pre">=</span> <span class="pre">=</span> <span class="pre">32</span></tt> - <p>The set of 3-D elements </p>
</li>
<li><tt class="first docutils literal"><span class="pre">CMZN_FIELD_DOMAIN_TYPE_MESH_HIGHEST_DIMENSION</span></tt><tt class="docutils literal"> <span class="pre">=</span> <span class="pre">=</span> <span class="pre">64</span></tt> - <p>The set of elements of highest dimension in region </p>
</li>
</ul>
</div></blockquote>
<p><span class="target" id="zincfieldid_8h_1a022ed7ce00cde76b46e6da25d8cadc7a"></span><strong>cmzn_field_value_type enum</strong></p>
<blockquote>
<div><p></p>
<p>The types of values fields may produce. <dl class="docutils">
<dt><strong>See</strong></dt>
<dd>cmzn_field_get_value_type </dd>
</dl>
</p>
<p><em>Values:</em></p>
<ul class="breatheenumvalues">
<li><tt class="first docutils literal"><span class="pre">CMZN_FIELD_VALUE_TYPE_INVALID</span></tt><tt class="docutils literal"> <span class="pre">=</span> <span class="pre">=</span> <span class="pre">0</span></tt> - </li>
<li><tt class="first docutils literal"><span class="pre">CMZN_FIELD_VALUE_TYPE_REAL</span></tt><tt class="docutils literal"> <span class="pre">=</span> <span class="pre">=</span> <span class="pre">1</span></tt> - </li>
<li><tt class="first docutils literal"><span class="pre">CMZN_FIELD_VALUE_TYPE_STRING</span></tt><tt class="docutils literal"> <span class="pre">=</span> <span class="pre">=</span> <span class="pre">2</span></tt> - </li>
<li><tt class="first docutils literal"><span class="pre">CMZN_FIELD_VALUE_TYPE_MESH_LOCATION</span></tt><tt class="docutils literal"> <span class="pre">=</span> <span class="pre">=</span> <span class="pre">3</span></tt> - </li>
</ul>
</div></blockquote>
</div></blockquote>
</div></blockquote>
<div class="line-block" id="zincfieldimageid_8h">
<div class="line"><em>file</em> <strong>fieldimageid.h</strong></div>
</div>
<blockquote>
<div><p></p>
<p></p>
<em>Typedefs</em><blockquote>
<div><p><span class="target" id="zincfieldimageid_8h_1a83c2ac18049887452c2f66bd12c8d0e4"></span>typedef struct cmzn_field_image * <strong>cmzn_field_image_id</strong></p>
<blockquote>
<div><p></p>
<p></p>
</div></blockquote>
<p><span class="target" id="zincfieldimageid_8h_1a63c8673df7c5e5b4cb849302e74799e9"></span>typedef struct cmzn_streaminformation_image * <strong>cmzn_streaminformation_image_id</strong></p>
<blockquote>
<div><p></p>
<p></p>
</div></blockquote>
</div></blockquote>
<em>Enums</em><blockquote>
<div><p><span class="target" id="zincfieldimageid_8h_1aad09c815e4d9611c08904093919ce36b"></span><strong>cmzn_field_image_combine_mode enum</strong></p>
<blockquote>
<div><p></p>
<p>Describes the blending of the texture with the texture constant colour and the underlying fragment colour </p>
<p><em>Values:</em></p>
<ul class="breatheenumvalues">
<li><tt class="first docutils literal"><span class="pre">CMZN_FIELD_IMAGE_COMBINE_MODE_INVALID</span></tt><tt class="docutils literal"> <span class="pre">=</span> <span class="pre">=</span> <span class="pre">0</span></tt> - </li>
<li><tt class="first docutils literal"><span class="pre">CMZN_FIELD_IMAGE_COMBINE_MODE_BLEND</span></tt><tt class="docutils literal"> <span class="pre">=</span> <span class="pre">=</span> <span class="pre">1</span></tt> - </li>
<li><tt class="first docutils literal"><span class="pre">CMZN_FIELD_IMAGE_COMBINE_MODE_DECAL</span></tt><tt class="docutils literal"> <span class="pre">=</span> <span class="pre">=</span> <span class="pre">2</span></tt> - <p>default combine mode </p>
</li>
<li><tt class="first docutils literal"><span class="pre">CMZN_FIELD_IMAGE_COMBINE_MODE_MODULATE</span></tt><tt class="docutils literal"> <span class="pre">=</span> <span class="pre">=</span> <span class="pre">3</span></tt> - </li>
<li><tt class="first docutils literal"><span class="pre">CMZN_FIELD_IMAGE_COMBINE_MODE_ADD</span></tt><tt class="docutils literal"> <span class="pre">=</span> <span class="pre">=</span> <span class="pre">4</span></tt> - </li>
<li><tt class="first docutils literal"><span class="pre">CMZN_FIELD_IMAGE_COMBINE_MODE_ADD_SIGNED</span></tt><tt class="docutils literal"> <span class="pre">=</span> <span class="pre">=</span> <span class="pre">5</span></tt> - <p>Add the value and subtract 0.5 so the texture value effectively ranges from -0.5 to 0.5 </p>
</li>
<li><tt class="first docutils literal"><span class="pre">CMZN_FIELD_IMAGE_COMBINE_MODE_MODULATE_SCALE_4</span></tt><tt class="docutils literal"> <span class="pre">=</span> <span class="pre">=</span> <span class="pre">6</span></tt> - <p>Multiply and then scale by 4, so that we can scale down or up </p>
</li>
<li><tt class="first docutils literal"><span class="pre">CMZN_FIELD_IMAGE_COMBINE_MODE_BLEND_SCALE_4</span></tt><tt class="docutils literal"> <span class="pre">=</span> <span class="pre">=</span> <span class="pre">7</span></tt> - <p>Same as blend with a 4 * scaling </p>
</li>
<li><tt class="first docutils literal"><span class="pre">CMZN_FIELD_IMAGE_COMBINE_MODE_SUBTRACT</span></tt><tt class="docutils literal"> <span class="pre">=</span> <span class="pre">=</span> <span class="pre">8</span></tt> - </li>
<li><tt class="first docutils literal"><span class="pre">CMZN_FIELD_IMAGE_COMBINE_MODE_ADD_SCALE_4</span></tt><tt class="docutils literal"> <span class="pre">=</span> <span class="pre">=</span> <span class="pre">9</span></tt> - </li>
<li><tt class="first docutils literal"><span class="pre">CMZN_FIELD_IMAGE_COMBINE_MODE_SUBTRACT_SCALE_4</span></tt><tt class="docutils literal"> <span class="pre">=</span> <span class="pre">=</span> <span class="pre">10</span></tt> - </li>
<li><tt class="first docutils literal"><span class="pre">CMZN_FIELD_IMAGE_COMBINE_MODE_INVERT_ADD_SCALE_4</span></tt><tt class="docutils literal"> <span class="pre">=</span> <span class="pre">=</span> <span class="pre">11</span></tt> - </li>
<li><tt class="first docutils literal"><span class="pre">CMZN_FIELD_IMAGE_COMBINE_MODE_INVERT_SUBTRACT_SCALE_4</span></tt><tt class="docutils literal"> <span class="pre">=</span> <span class="pre">=</span> <span class="pre">12</span></tt> - </li>
</ul>
</div></blockquote>
<p><span class="target" id="zincfieldimageid_8h_1a08c2058043be39ae3355c92a27ebf4c2"></span><strong>cmzn_field_image_filter_mode enum</strong></p>
<blockquote>
<div><p></p>
<p>Specfiy how the graphics hardware rasterises the texture onto the screen. </p>
<p><em>Values:</em></p>
<ul class="breatheenumvalues">
<li><tt class="first docutils literal"><span class="pre">CMZN_FIELD_IMAGE_FILTER_MODE_INVALID</span></tt><tt class="docutils literal"> <span class="pre">=</span> <span class="pre">=</span> <span class="pre">0</span></tt> - </li>
<li><tt class="first docutils literal"><span class="pre">CMZN_FIELD_IMAGE_FILTER_MODE_NEAREST</span></tt><tt class="docutils literal"> <span class="pre">=</span> <span class="pre">=</span> <span class="pre">1</span></tt> - <p>default combine mode </p>
</li>
<li><tt class="first docutils literal"><span class="pre">CMZN_FIELD_IMAGE_FILTER_MODE_LINEAR</span></tt><tt class="docutils literal"> <span class="pre">=</span> <span class="pre">=</span> <span class="pre">2</span></tt> - </li>
<li><tt class="first docutils literal"><span class="pre">CMZN_FIELD_IMAGE_FILTER_MODE_NEAREST_MIPMAP_NEAREST</span></tt><tt class="docutils literal"> <span class="pre">=</span> <span class="pre">=</span> <span class="pre">3</span></tt> - </li>
<li><tt class="first docutils literal"><span class="pre">CMZN_FIELD_IMAGE_FILTER_MODE_LINEAR_MIPMAP_NEAREST</span></tt><tt class="docutils literal"> <span class="pre">=</span> <span class="pre">=</span> <span class="pre">4</span></tt> - </li>
<li><tt class="first docutils literal"><span class="pre">CMZN_FIELD_IMAGE_FILTER_MODE_LINEAR_MIPMAP_LINEAR</span></tt><tt class="docutils literal"> <span class="pre">=</span> <span class="pre">=</span> <span class="pre">5</span></tt> - </li>
</ul>
</div></blockquote>
<p><span class="target" id="zincfieldimageid_8h_1ab02f9f08f57b6c878ee9ac8979ea1011"></span><strong>cmzn_field_image_hardware_compression_mode enum</strong></p>
<blockquote>
<div><p></p>
<p>Whether the texture is compressed. Could add specific compression formats that are explictly requested from the hardware. </p>
<p><em>Values:</em></p>
<ul class="breatheenumvalues">
<li><tt class="first docutils literal"><span class="pre">CMZN_FIELD_IMAGE_HARDWARE_COMPRESSION_MODE_INVALID</span></tt><tt class="docutils literal"> <span class="pre">=</span> <span class="pre">=</span> <span class="pre">0</span></tt> - </li>
<li><tt class="first docutils literal"><span class="pre">CMZN_FIELD_IMAGE_HARDWARE_COMPRESSION_MODE_UNCOMPRESSED</span></tt><tt class="docutils literal"> <span class="pre">=</span> <span class="pre">=</span> <span class="pre">1</span></tt> - </li>
<li><tt class="first docutils literal"><span class="pre">CMZN_FIELD_IMAGE_HARDWARE_COMPRESSION_MODE_AUTOMATIC</span></tt><tt class="docutils literal"> <span class="pre">=</span> <span class="pre">=</span> <span class="pre">2</span></tt> - <p>Allow the hardware to choose the compression </p>
</li>
</ul>
</div></blockquote>
<p><span class="target" id="zincfieldimageid_8h_1af9feed99c9e6c667ced48fcacead7ee6"></span><strong>cmzn_field_image_wrap_mode enum</strong></p>
<blockquote>
<div><p></p>
<p>Describes how the image is to be wrapped when texture coordinate is assigned outside the range [0,1], you can choose to have them clamp or repeat. </p>
<p><em>Values:</em></p>
<ul class="breatheenumvalues">
<li><tt class="first docutils literal"><span class="pre">CMZN_FIELD_IMAGE_WRAP_MODE_INVALID</span></tt><tt class="docutils literal"> <span class="pre">=</span> <span class="pre">=</span> <span class="pre">0</span></tt> - </li>
<li><tt class="first docutils literal"><span class="pre">CMZN_FIELD_IMAGE_WRAP_MODE_CLAMP</span></tt><tt class="docutils literal"> <span class="pre">=</span> <span class="pre">=</span> <span class="pre">1</span></tt> - <p>Clamp to a blend of the pixel edge and border colour </p>
</li>
<li><tt class="first docutils literal"><span class="pre">CMZN_FIELD_IMAGE_WRAP_MODE_REPEAT</span></tt><tt class="docutils literal"> <span class="pre">=</span> <span class="pre">=</span> <span class="pre">2</span></tt> - <p>Default wrap mode. Repeat texture cylically in multiples of the texture coordinate range </p>
</li>
<li><tt class="first docutils literal"><span class="pre">CMZN_FIELD_IMAGE_WRAP_MODE_EDGE_CLAMP</span></tt><tt class="docutils literal"> <span class="pre">=</span> <span class="pre">=</span> <span class="pre">3</span></tt> - <p>Always ignore the border, texels at or near the edge of the texure are used for texturing </p>
</li>
<li><tt class="first docutils literal"><span class="pre">CMZN_FIELD_IMAGE_WRAP_MODE_BORDER_CLAMP</span></tt><tt class="docutils literal"> <span class="pre">=</span> <span class="pre">=</span> <span class="pre">4</span></tt> - <p>Clamp to the border colour when outside the texture coordinate range. </p>
</li>
<li><tt class="first docutils literal"><span class="pre">CMZN_FIELD_IMAGE_WRAP_MODE_MIRROR_REPEAT</span></tt><tt class="docutils literal"> <span class="pre">=</span> <span class="pre">=</span> <span class="pre">5</span></tt> - <p>Repeat but mirror every second multiple of the texture coordinates range. Texture may appear up-right in coordinate range[0,1] but upside-down in coordinate range[1,2] </p>
</li>
</ul>
</div></blockquote>
<p><span class="target" id="zincfieldimageid_8h_1a432325c6c666aa6a4aff0e8e3b78884d"></span><strong>cmzn_streaminformation_image_file_format enum</strong></p>
<blockquote>
<div><p></p>
<p>Describes the format for storage. Whether a particular format is actually available depends on whether it is compatible with a particular format type when used with #cmzn_field_image_get_formatted_image_data and whether support for that combination has been included when the program was built. This is a small subset of formats available, more can be selected by specifying the appropriate format_string for a cmzn_streaminformation_image. </p>
<p><em>Values:</em></p>
<ul class="breatheenumvalues">
<li><tt class="first docutils literal"><span class="pre">CMZN_STREAMINFORMATION_IMAGE_FILE_FORMAT_INVALID</span></tt><tt class="docutils literal"> <span class="pre">=</span> <span class="pre">=</span> <span class="pre">0</span></tt> - </li>
<li><tt class="first docutils literal"><span class="pre">CMZN_STREAMINFORMATION_IMAGE_FILE_FORMAT_BMP</span></tt><tt class="docutils literal"> <span class="pre">=</span> <span class="pre">=</span> <span class="pre">1</span></tt> - </li>
<li><tt class="first docutils literal"><span class="pre">CMZN_STREAMINFORMATION_IMAGE_FILE_FORMAT_DICOM</span></tt><tt class="docutils literal"> <span class="pre">=</span> <span class="pre">=</span> <span class="pre">2</span></tt> - </li>
<li><tt class="first docutils literal"><span class="pre">CMZN_STREAMINFORMATION_IMAGE_FILE_FORMAT_JPG</span></tt><tt class="docutils literal"> <span class="pre">=</span> <span class="pre">=</span> <span class="pre">3</span></tt> - </li>
<li><tt class="first docutils literal"><span class="pre">CMZN_STREAMINFORMATION_IMAGE_FILE_FORMAT_GIF</span></tt><tt class="docutils literal"> <span class="pre">=</span> <span class="pre">=</span> <span class="pre">4</span></tt> - </li>
<li><tt class="first docutils literal"><span class="pre">CMZN_STREAMINFORMATION_IMAGE_FILE_FORMAT_PNG</span></tt><tt class="docutils literal"> <span class="pre">=</span> <span class="pre">=</span> <span class="pre">5</span></tt> - </li>
<li><tt class="first docutils literal"><span class="pre">CMZN_STREAMINFORMATION_IMAGE_FILE_FORMAT_SGI</span></tt><tt class="docutils literal"> <span class="pre">=</span> <span class="pre">=</span> <span class="pre">6</span></tt> - </li>
<li><tt class="first docutils literal"><span class="pre">CMZN_STREAMINFORMATION_IMAGE_FILE_FORMAT_TIFF</span></tt><tt class="docutils literal"> <span class="pre">=</span> <span class="pre">=</span> <span class="pre">7</span></tt> - </li>
<li><tt class="first docutils literal"><span class="pre">CMZN_STREAMINFORMATION_IMAGE_FILE_FORMAT_ANALYZE</span></tt><tt class="docutils literal"> <span class="pre">=</span> <span class="pre">=</span> <span class="pre">8</span></tt> - </li>
</ul>
</div></blockquote>
<p><span class="target" id="zincfieldimageid_8h_1aacb8bbcba1cb138a3c93a74bd2b5f630"></span><strong>cmzn_streaminformation_image_pixel_format enum</strong></p>
<blockquote>
<div><p></p>
<p>Optional information used to describe the binary data supplied to the images. </p>
<p><em>Values:</em></p>
<ul class="breatheenumvalues">
<li><tt class="first docutils literal"><span class="pre">CMZN_STREAMINFORMATION_IMAGE_PIXEL_FORMAT_INVALID</span></tt><tt class="docutils literal"> <span class="pre">=</span> <span class="pre">=</span> <span class="pre">0</span></tt> - </li>
<li><tt class="first docutils literal"><span class="pre">CMZN_STREAMINFORMATION_IMAGE_PIXEL_FORMAT_LUMINANCE</span></tt><tt class="docutils literal"> <span class="pre">=</span> <span class="pre">=</span> <span class="pre">1</span></tt> - </li>
<li><tt class="first docutils literal"><span class="pre">CMZN_STREAMINFORMATION_IMAGE_PIXEL_FORMAT_LUMINANCE_ALPHA</span></tt><tt class="docutils literal"> <span class="pre">=</span> <span class="pre">=</span> <span class="pre">2</span></tt> - </li>
<li><tt class="first docutils literal"><span class="pre">CMZN_STREAMINFORMATION_IMAGE_PIXEL_FORMAT_RGB</span></tt><tt class="docutils literal"> <span class="pre">=</span> <span class="pre">=</span> <span class="pre">3</span></tt> - </li>
<li><tt class="first docutils literal"><span class="pre">CMZN_STREAMINFORMATION_IMAGE_PIXEL_FORMAT_RGBA</span></tt><tt class="docutils literal"> <span class="pre">=</span> <span class="pre">=</span> <span class="pre">4</span></tt> - </li>
<li><tt class="first docutils literal"><span class="pre">CMZN_STREAMINFORMATION_IMAGE_PIXEL_FORMAT_ABGR</span></tt><tt class="docutils literal"> <span class="pre">=</span> <span class="pre">=</span> <span class="pre">5</span></tt> - </li>
<li><tt class="first docutils literal"><span class="pre">CMZN_STREAMINFORMATION_IMAGE_PIXEL_FORMAT_BGR</span></tt><tt class="docutils literal"> <span class="pre">=</span> <span class="pre">=</span> <span class="pre">6</span></tt> - </li>
</ul>
</div></blockquote>
<p><span class="target" id="zincfieldimageid_8h_1a73bfc958ac89b81a10a4da9282a62569"></span><strong>cmzn_streaminformation_image_attribute enum</strong></p>
<blockquote>
<div><p></p>
<p></p>
<p><em>Values:</em></p>
<ul class="breatheenumvalues">
<li><tt class="first docutils literal"><span class="pre">CMZN_STREAMINFORMATION_IMAGE_ATTRIBUTE_RAW_WIDTH_PIXELS</span></tt><tt class="docutils literal"> <span class="pre">=</span> <span class="pre">=</span> <span class="pre">1</span></tt> - <p>Integer specifies the pixel width for binary data reading in using this stream information. </p>
</li>
<li><tt class="first docutils literal"><span class="pre">CMZN_STREAMINFORMATION_IMAGE_ATTRIBUTE_RAW_HEIGHT_PIXELS</span></tt><tt class="docutils literal"> <span class="pre">=</span> <span class="pre">=</span> <span class="pre">2</span></tt> - <p>Integer specifies the pixel height for binary data reading in using this stream information. </p>
</li>
<li><tt class="first docutils literal"><span class="pre">CMZN_STREAMINFORMATION_IMAGE_ATTRIBUTE_BITS_PER_COMPONENT</span></tt><tt class="docutils literal"> <span class="pre">=</span> <span class="pre">=</span> <span class="pre">3</span></tt> - <p>Integer specifies the number of bytes per component for binary data using this stream information. Only 8 and 16 bits are supported at the moment. </p>
</li>
<li><tt class="first docutils literal"><span class="pre">CMZN_STREAMINFORMATION_IMAGE_ATTRIBUTE_COMPRESSION_QUALITY</span></tt><tt class="docutils literal"> <span class="pre">=</span> <span class="pre">=</span> <span class="pre">4</span></tt> - <p>Real number specifies the quality for binary data using this stream information. This parameter controls compression for compressed lossy formats, where a quality of 1.0 specifies the least lossy output for a given format and a quality of 0.0 specifies the most compression. </p>
</li>
</ul>
</div></blockquote>
</div></blockquote>
</div></blockquote>
<div class="line-block" id="zincfieldimageprocessingid_8h">
<div class="line"><em>file</em> <strong>fieldimageprocessingid.h</strong></div>
</div>
<blockquote>
<div><p></p>
<p></p>
<em>Typedefs</em><blockquote>
<div><p><span class="target" id="zincfieldimageprocessingid_8h_1ace5c7fa142aa1c22ca6c9ea57abaccd8"></span>typedef struct cmzn_field_imagefilter_binary_threshold * <strong>cmzn_field_imagefilter_binary_threshold_id</strong></p>
<blockquote>
<div><p></p>
<p></p>
</div></blockquote>
<p><span class="target" id="zincfieldimageprocessingid_8h_1ae76bf9a17d429cb7ac3dc83e9d0d9dee"></span>typedef struct cmzn_field_imagefilter_discrete_gaussian * <strong>cmzn_field_imagefilter_discrete_gaussian_id</strong></p>
<blockquote>
<div><p></p>
<p></p>
</div></blockquote>
<p><span class="target" id="zincfieldimageprocessingid_8h_1a7bad3a441f3731074951e56dce4f774e"></span>typedef struct cmzn_field_imagefilter_threshold * <strong>cmzn_field_imagefilter_threshold_id</strong></p>
<blockquote>
<div><p></p>
<p></p>
</div></blockquote>
<p><span class="target" id="zincfieldimageprocessingid_8h_1a84adc6b19bbf0cb890fe67af6bff2823"></span>typedef struct cmzn_field_imagefilter_histogram * <strong>cmzn_field_imagefilter_histogram_id</strong></p>
<blockquote>
<div><p></p>
<p></p>
</div></blockquote>
</div></blockquote>
<em>Enums</em><blockquote>
<div><p><span class="target" id="zincfieldimageprocessingid_8h_1af02fed1ce672feb62f71c2b0d5c54e59"></span><strong>cmzn_field_imagefilter_threshold_condition enum</strong></p>
<blockquote>
<div><p></p>
<p>The condition to be true for pixel values to be assigned to the outside value for the threshold image filter field. </p>
<p><em>Values:</em></p>
<ul class="breatheenumvalues">
<li><tt class="first docutils literal"><span class="pre">CMZN_FIELD_IMAGEFILTER_THRESHOLD_CONDITION_INVALID</span></tt><tt class="docutils literal"> <span class="pre">=</span> <span class="pre">=</span> <span class="pre">0</span></tt> - </li>
<li><tt class="first docutils literal"><span class="pre">CMZN_FIELD_IMAGEFILTER_THRESHOLD_CONDITION_ABOVE</span></tt><tt class="docutils literal"> <span class="pre">=</span> <span class="pre">=</span> <span class="pre">1</span></tt> - <p>Assign where pixel values are greater than or equal to the upper threshold </p>
</li>
<li><tt class="first docutils literal"><span class="pre">CMZN_FIELD_IMAGEFILTER_THRESHOLD_CONDITION_BELOW</span></tt><tt class="docutils literal"> <span class="pre">=</span> <span class="pre">=</span> <span class="pre">2</span></tt> - <p>Assign where pixel values are less than or equal to lower threshold This is the default condition for the threshold image filter. </p>
</li>
<li><tt class="first docutils literal"><span class="pre">CMZN_FIELD_IMAGEFILTER_THRESHOLD_CONDITION_OUTSIDE</span></tt><tt class="docutils literal"> <span class="pre">=</span> <span class="pre">=</span> <span class="pre">3</span></tt> - <p>Assign where pixel values are outside the lower to upper threshold range </p>
</li>
</ul>
</div></blockquote>
</div></blockquote>
</div></blockquote>
<div class="line-block" id="zincfieldmoduleid_8h">
<div class="line"><em>file</em> <strong>fieldmoduleid.h</strong></div>
</div>
<blockquote>
<div><p></p>
<p></p>
<em>Typedefs</em><blockquote>
<div><p><span class="target" id="zincfieldmoduleid_8h_1a0e5dfb67d0ab2abb66e55f82a9377ff2"></span>typedef struct cmzn_fieldmodule * <strong>cmzn_fieldmodule_id</strong></p>
<blockquote>
<div><p></p>
<p></p>
</div></blockquote>
<p><span class="target" id="zincfieldmoduleid_8h_1ac715b506754c56db89b06587f374dab0"></span>typedef struct cmzn_fieldmodulenotifier * <strong>cmzn_fieldmodulenotifier_id</strong></p>
<blockquote>
<div><p></p>
<p></p>
</div></blockquote>
<p><span class="target" id="zincfieldmoduleid_8h_1ad914b6ad46f9134a3a9933884c51de4c"></span>typedef struct cmzn_fieldmoduleevent * <strong>cmzn_fieldmoduleevent_id</strong></p>
<blockquote>
<div><p></p>
<p></p>
</div></blockquote>
<p><span class="target" id="zincfieldmoduleid_8h_1a4d3580155712ea52dfb4db5929865cbb"></span>typedef void(* <strong>cmzn_fieldmodulenotifier_callback_function</strong>)(cmzn_fieldmoduleevent_id event, void *client_data)</p>
<blockquote>
<div><p></p>
<p></p>
</div></blockquote>
</div></blockquote>
</div></blockquote>
<div class="line-block" id="zincfieldsubobjectgroupid_8h">
<div class="line"><em>file</em> <strong>fieldsubobjectgroupid.h</strong></div>
</div>
<blockquote>
<div><p></p>
<p></p>
<em>Typedefs</em><blockquote>
<div><p><span class="target" id="zincfieldsubobjectgroupid_8h_1aa81a8fc5570e10e0ea058896c31802d0"></span>typedef struct cmzn_field_node_group * <strong>cmzn_field_node_group_id</strong></p>
<blockquote>
<div><p></p>
<p></p>
</div></blockquote>
<p><span class="target" id="zincfieldsubobjectgroupid_8h_1a172df1aff73db583534a2c41b5d11b1a"></span>typedef struct cmzn_field_element_group * <strong>cmzn_field_element_group_id</strong></p>
<blockquote>
<div><p></p>
<p></p>
</div></blockquote>
</div></blockquote>
</div></blockquote>
<div class="line-block" id="zincfontid_8h">
<div class="line"><em>file</em> <strong>fontid.h</strong></div>
<div class="line"><em>#include &#8220;zinc/zincsharedobject.h&#8221;</em></div>
</div>
<blockquote>
<div><p></p>
<p></p>
<em>Typedefs</em><blockquote>
<div><p><span class="target" id="zincfontid_8h_1a95e7697fb4d1884b2b5c38f1d0394c76"></span>typedef struct cmzn_font * <strong>cmzn_font_id</strong></p>
<blockquote>
<div><p></p>
<p></p>
</div></blockquote>
<p><span class="target" id="zincfontid_8h_1a85962601a75b5f8d4e4c11163844be51"></span>typedef struct cmzn_fontmodule * <strong>cmzn_fontmodule_id</strong></p>
<blockquote>
<div><p></p>
<p></p>
</div></blockquote>
</div></blockquote>
<em>Enums</em><blockquote>
<div><p><span class="target" id="zincfontid_8h_1a8088082bfb186eec3627b3886219f216"></span><strong>cmzn_font_typeface_type enum</strong></p>
<blockquote>
<div><p></p>
<p>FILE : fontid.h </p>
<p><em>Values:</em></p>
<ul class="breatheenumvalues">
<li><tt class="first docutils literal"><span class="pre">CMZN_FONT_TYPEFACE_TYPE_INVALID</span></tt><tt class="docutils literal"> <span class="pre">=</span> <span class="pre">=</span> <span class="pre">0</span></tt> - </li>
<li><tt class="first docutils literal"><span class="pre">CMZN_FONT_TYPEFACE_TYPE_OPENSANS</span></tt><tt class="docutils literal"> <span class="pre">=</span> <span class="pre">=</span> <span class="pre">1</span></tt> - </li>
</ul>
</div></blockquote>
<p><span class="target" id="zincfontid_8h_1a68a94192a1231f21a7464663d3e504d0"></span><strong>cmzn_font_render_type enum</strong></p>
<blockquote>
<div><p></p>
<p></p>
<p><em>Values:</em></p>
<ul class="breatheenumvalues">
<li><tt class="first docutils literal"><span class="pre">CMZN_FONT_RENDER_TYPE_INVALID</span></tt><tt class="docutils literal"> <span class="pre">=</span> <span class="pre">=</span> <span class="pre">0</span></tt> - </li>
<li><tt class="first docutils literal"><span class="pre">CMZN_FONT_RENDER_TYPE_BITMAP</span></tt><tt class="docutils literal"> <span class="pre">=</span> <span class="pre">=</span> <span class="pre">1</span></tt> - </li>
<li><tt class="first docutils literal"><span class="pre">CMZN_FONT_RENDER_TYPE_PIXMAP</span></tt><tt class="docutils literal"> <span class="pre">=</span> <span class="pre">=</span> <span class="pre">2</span></tt> - </li>
<li><tt class="first docutils literal"><span class="pre">CMZN_FONT_RENDER_TYPE_POLYGON</span></tt><tt class="docutils literal"> <span class="pre">=</span> <span class="pre">=</span> <span class="pre">3</span></tt> - </li>
<li><tt class="first docutils literal"><span class="pre">CMZN_FONT_RENDER_TYPE_OUTLINE</span></tt><tt class="docutils literal"> <span class="pre">=</span> <span class="pre">=</span> <span class="pre">4</span></tt> - </li>
<li><tt class="first docutils literal"><span class="pre">CMZN_FONT_RENDER_TYPE_EXTRUDE</span></tt><tt class="docutils literal"> <span class="pre">=</span> <span class="pre">=</span> <span class="pre">5</span></tt> - </li>
</ul>
</div></blockquote>
</div></blockquote>
<em>Functions</em><blockquote>
<div><p><span class="target" id="zincfontid_8h_1a0cc1ccbf878d15f33026b3c2be4f3fcf"></span><div class="line-block">
<div class="line">ZINC_API enum cmzn_font_typeface_type <strong>cmzn_font_typeface_type_enum_from_string</strong>(const char * string)</div>
</div>
</p>
<blockquote>
<div><p></p>
<p><p>Convert a short name into an enum if the name matches any of the members in the enum.</p>
<p><dl class="docutils">
<dt><strong>Return</strong></dt>
<dd>the correct enum type if a match is found. </dd>
<dt><strong>Parameters</strong></dt>
<dd><ul class="breatheparameterlist first last">
<li><tt class="first docutils literal"><span class="pre">string</span></tt> - <p>string of the short enumerator name </p>
</li>
</ul>
</dd>
</dl>
</p>
</p>
</div></blockquote>
<p><span class="target" id="zincfontid_8h_1aa4fa98d7f4f7af1f77de8803368c826d"></span><div class="line-block">
<div class="line">ZINC_API char * <strong>cmzn_font_typeface_type_enum_to_string</strong>(enum cmzn_font_typeface_type typeface_type)</div>
</div>
</p>
<blockquote>
<div><p></p>
<p><p>Return an allocated short name of the enum type from the provided enum. User must call cmzn_deallocate to destroy the successfully returned string.</p>
<p><dl class="docutils">
<dt><strong>Return</strong></dt>
<dd>an allocated string which stored the short name of the enum. </dd>
<dt><strong>Parameters</strong></dt>
<dd><ul class="breatheparameterlist first last">
<li><tt class="first docutils literal"><span class="pre">system</span></tt> - <p>enum to be converted into string </p>
</li>
</ul>
</dd>
</dl>
</p>
</p>
</div></blockquote>
<p><span class="target" id="zincfontid_8h_1a82704a189bca7f3377579b4233a064b5"></span><div class="line-block">
<div class="line">ZINC_API enum cmzn_font_render_type <strong>cmzn_font_render_type_enum_from_string</strong>(const char * string)</div>
</div>
</p>
<blockquote>
<div><p></p>
<p><p>Convert a short name into an enum if the name matches any of the members in the enum.</p>
<p><dl class="docutils">
<dt><strong>Return</strong></dt>
<dd>the correct enum type if a match is found. </dd>
<dt><strong>Parameters</strong></dt>
<dd><ul class="breatheparameterlist first last">
<li><tt class="first docutils literal"><span class="pre">string</span></tt> - <p>string of the short enumerator name </p>
</li>
</ul>
</dd>
</dl>
</p>
</p>
</div></blockquote>
<p><span class="target" id="zincfontid_8h_1a7d81a67e375d40f0045c562f3f361e00"></span><div class="line-block">
<div class="line">ZINC_API char * <strong>cmzn_font_render_type_enum_to_string</strong>(enum cmzn_font_render_type render_type)</div>
</div>
</p>
<blockquote>
<div><p></p>
<p><p>Return an allocated short name of the enum type from the provided enum. User must call cmzn_deallocate to destroy the successfully returned string.</p>
<p><dl class="docutils">
<dt><strong>Return</strong></dt>
<dd>an allocated string which stored the short name of the enum. </dd>
<dt><strong>Parameters</strong></dt>
<dd><ul class="breatheparameterlist first last">
<li><tt class="first docutils literal"><span class="pre">system</span></tt> - <p>enum to be converted into string </p>
</li>
</ul>
</dd>
</dl>
</p>
</p>
</div></blockquote>
</div></blockquote>
</div></blockquote>
<div class="line-block" id="zincglyphid_8h">
<div class="line"><em>file</em> <strong>glyphid.h</strong></div>
</div>
<blockquote>
<div><p></p>
<p></p>
<em>Typedefs</em><blockquote>
<div><p><span class="target" id="zincglyphid_8h_1a2e9ee3732e93644cdcd5cc39091078b3"></span>typedef struct cmzn_glyphmodule * <strong>cmzn_glyphmodule_id</strong></p>
<blockquote>
<div><p></p>
<p></p>
</div></blockquote>
<p><span class="target" id="zincglyphid_8h_1a1f28488393d95a006dbc7606ddcff1b9"></span>typedef struct cmzn_glyph * <strong>cmzn_glyph_id</strong></p>
<blockquote>
<div><p></p>
<p></p>
</div></blockquote>
<p><span class="target" id="zincglyphid_8h_1a7f1f22ab6bd0644088ae78149d3e7cca"></span>typedef struct cmzn_glyph_axes * <strong>cmzn_glyph_axes_id</strong></p>
<blockquote>
<div><p></p>
<p></p>
</div></blockquote>
<p><span class="target" id="zincglyphid_8h_1ac91840c48c97614ce1c1a0bb61a8d004"></span>typedef struct cmzn_glyph_colour_bar * <strong>cmzn_glyph_colour_bar_id</strong></p>
<blockquote>
<div><p></p>
<p></p>
</div></blockquote>
</div></blockquote>
<em>Enums</em><blockquote>
<div><p><span class="target" id="zincglyphid_8h_1a98e4b08c2864237a71004c533467f99c"></span><strong>cmzn_glyph_repeat_mode enum</strong></p>
<blockquote>
<div><p></p>
<p>An enum defining how glyphs are repeatedly display at points. </p>
<p><em>Values:</em></p>
<ul class="breatheenumvalues">
<li><tt class="first docutils literal"><span class="pre">CMZN_GLYPH_REPEAT_MODE_INVALID</span></tt><tt class="docutils literal"> <span class="pre">=</span> <span class="pre">=</span> <span class="pre">0</span></tt> - </li>
<li><tt class="first docutils literal"><span class="pre">CMZN_GLYPH_REPEAT_MODE_NONE</span></tt><tt class="docutils literal"> <span class="pre">=</span> <span class="pre">=</span> <span class="pre">1</span></tt> - <p>default cmzn_glyph_repeat_mode normal single glyph display, no repeat </p>
</li>
<li><tt class="first docutils literal"><span class="pre">CMZN_GLYPH_REPEAT_MODE_AXES_2D</span></tt><tt class="docutils literal"> <span class="pre">=</span> <span class="pre">=</span> <span class="pre">2</span></tt> - <p>draw glyph 2 times treating each axis as a separate vector. Base size and scale factors are applied separately to each axis. </p>
</li>
<li><tt class="first docutils literal"><span class="pre">CMZN_GLYPH_REPEAT_MODE_AXES_3D</span></tt><tt class="docutils literal"> <span class="pre">=</span> <span class="pre">=</span> <span class="pre">3</span></tt> - <p>draw glyph 3 times treating each axis as a separate vector. Base size and scale factors are applied separately to each axis. </p>
</li>
<li><tt class="first docutils literal"><span class="pre">CMZN_GLYPH_REPEAT_MODE_MIRROR</span></tt><tt class="docutils literal"> <span class="pre">=</span> <span class="pre">=</span> <span class="pre">4</span></tt> - <p>draw glyph twice, second mirrored about axis1 == 0.0. Commonly used with a signed_scale_field to visualise stress and strains using pairs of arrow glyphs pointing inward for compression, outward for tension. Suitable glyphs (line, arrow, cone) span from 0 to 1 along their first axis. Not suitable for sphere, cube etc. which are symmetric about 0.0 on axis 1. In this mode the label is only shown for the first glyph and the label offset is not reversed with the glyph. <dl class="docutils">
<dt><strong>See</strong></dt>
<dd><p class="first last"><p>cmzn_graphicspointattributes_set_signed_scale_field </p>
</p>
</dd>
</dl>
</p>
</li>
</ul>
</div></blockquote>
<p><span class="target" id="zincglyphid_8h_1a346027dd7ebc9dbb46ff2b9efec3fe8f"></span><strong>cmzn_glyph_shape_type enum</strong></p>
<blockquote>
<div><p></p>
<p>An enum defining the type of graphics glyph. </p>
<p><em>Values:</em></p>
<ul class="breatheenumvalues">
<li><tt class="first docutils literal"><span class="pre">CMZN_GLYPH_SHAPE_TYPE_INVALID</span></tt><tt class="docutils literal"> <span class="pre">=</span> <span class="pre">=</span> <span class="pre">0</span></tt> - </li>
<li><tt class="first docutils literal"><span class="pre">CMZN_GLYPH_SHAPE_TYPE_NONE</span></tt> - <p>no glyph </p>
</li>
<li><tt class="first docutils literal"><span class="pre">CMZN_GLYPH_SHAPE_TYPE_ARROW</span></tt> - <p>line arrow from 0,0,0 to 1,0,0, head 1/3 long unit width </p>
</li>
<li><tt class="first docutils literal"><span class="pre">CMZN_GLYPH_SHAPE_TYPE_ARROW_SOLID</span></tt> - <p>solid arrow from 0,0,0 to 1,0,0, head 1/3 long unit width </p>
</li>
<li><tt class="first docutils literal"><span class="pre">CMZN_GLYPH_SHAPE_TYPE_AXIS</span></tt> - <p>line arrow from 0,0,0 to 1,0,0, head 0.1 long unit width </p>
</li>
<li><tt class="first docutils literal"><span class="pre">CMZN_GLYPH_SHAPE_TYPE_AXIS_SOLID</span></tt> - <p>solid arrow from 0,0,0 to 1,0,0, head 0.1 long unit width </p>
</li>
<li><tt class="first docutils literal"><span class="pre">CMZN_GLYPH_SHAPE_TYPE_CONE</span></tt> - <p>unit diameter cone from base 0,0,0 to apex 1,0,0, open base </p>
</li>
<li><tt class="first docutils literal"><span class="pre">CMZN_GLYPH_SHAPE_TYPE_CONE_SOLID</span></tt> - <p>unit diameter cone from base 0,0,0 to apex 1,0,0, closed base </p>
</li>
<li><tt class="first docutils literal"><span class="pre">CMZN_GLYPH_SHAPE_TYPE_CROSS</span></tt> - <p>3 crossed lines on each axis, centre 0,0,0 </p>
</li>
<li><tt class="first docutils literal"><span class="pre">CMZN_GLYPH_SHAPE_TYPE_CUBE_SOLID</span></tt> - <p>solid unit cube centred at 0,0,0 and aligned with axes </p>
</li>
<li><tt class="first docutils literal"><span class="pre">CMZN_GLYPH_SHAPE_TYPE_CUBE_WIREFRAME</span></tt> - <p>wireframe unit cube centred at 0,0,0 and aligned with axes </p>
</li>
<li><tt class="first docutils literal"><span class="pre">CMZN_GLYPH_SHAPE_TYPE_CYLINDER</span></tt> - <p>unit diameter cylinder from 0,0,0 to 1,0,0, open ends </p>
</li>
<li><tt class="first docutils literal"><span class="pre">CMZN_GLYPH_SHAPE_TYPE_CYLINDER_SOLID</span></tt> - <p>unit diameter cylinder from 0,0,0 to 1,0,0, closed ends </p>
</li>
<li><tt class="first docutils literal"><span class="pre">CMZN_GLYPH_SHAPE_TYPE_DIAMOND</span></tt> - <p>unit regular octahedron centred at 0,0,0; a degenerate sphere </p>
</li>
<li><tt class="first docutils literal"><span class="pre">CMZN_GLYPH_SHAPE_TYPE_LINE</span></tt> - <p>line from 0,0,0 to 1,0,0 </p>
</li>
<li><tt class="first docutils literal"><span class="pre">CMZN_GLYPH_SHAPE_TYPE_POINT</span></tt> - <p>a single point at 0,0,0 </p>
</li>
<li><tt class="first docutils literal"><span class="pre">CMZN_GLYPH_SHAPE_TYPE_SHEET</span></tt> - <p>unit square in 1-2 plane centred at 0,0,0 </p>
</li>
<li><tt class="first docutils literal"><span class="pre">CMZN_GLYPH_SHAPE_TYPE_SPHERE</span></tt> - <p>unit sphere centred at 0,0,0 </p>
</li>
<li><tt class="first docutils literal"><span class="pre">CMZN_GLYPH_SHAPE_TYPE_AXES</span></tt> - <p>unit line axes without labels </p>
</li>
<li><tt class="first docutils literal"><span class="pre">CMZN_GLYPH_SHAPE_TYPE_AXES_123</span></tt> - <p>unit line axes with labels 1,2,3 </p>
</li>
<li><tt class="first docutils literal"><span class="pre">CMZN_GLYPH_SHAPE_TYPE_AXES_XYZ</span></tt> - <p>unit line axes with labels x,y,z </p>
</li>
<li><tt class="first docutils literal"><span class="pre">CMZN_GLYPH_SHAPE_TYPE_AXES_COLOUR</span></tt> - <p>unit line axes with materials red, green, blue </p>
</li>
<li><tt class="first docutils literal"><span class="pre">CMZN_GLYPH_SHAPE_TYPE_AXES_SOLID</span></tt> - <p>unit solid arrow axes without labels </p>
</li>
<li><tt class="first docutils literal"><span class="pre">CMZN_GLYPH_SHAPE_TYPE_AXES_SOLID_123</span></tt> - <p>unit solid arrow axes with labels 1,2,3 </p>
</li>
<li><tt class="first docutils literal"><span class="pre">CMZN_GLYPH_SHAPE_TYPE_AXES_SOLID_XYZ</span></tt> - <p>unit solid arrow axes with labels x,y,z </p>
</li>
<li><tt class="first docutils literal"><span class="pre">CMZN_GLYPH_SHAPE_TYPE_AXES_SOLID_COLOUR</span></tt> - <p>unit solid arrow axes with materials red, green, blue </p>
</li>
</ul>
</div></blockquote>
</div></blockquote>
</div></blockquote>
<div class="line-block" id="zincgraphicsid_8h">
<div class="line"><em>file</em> <strong>graphicsid.h</strong></div>
</div>
<blockquote>
<div><p></p>
<p></p>
<em>Typedefs</em><blockquote>
<div><p><span class="target" id="zincgraphicsid_8h_1a9c2afe29b7e42d2bf03907e76c4a7c69"></span>typedef struct cmzn_graphics * <strong>cmzn_graphics_id</strong></p>
<blockquote>
<div><p></p>
<p></p>
</div></blockquote>
<p><span class="target" id="zincgraphicsid_8h_1a031cf55cfaa19fecf48742aa10f6fa40"></span>typedef struct cmzn_graphics_contours * <strong>cmzn_graphics_contours_id</strong></p>
<blockquote>
<div><p></p>
<p></p>
</div></blockquote>
<p><span class="target" id="zincgraphicsid_8h_1aa640b2033ca2be1aa3f9a379e636ce55"></span>typedef struct cmzn_graphics_points * <strong>cmzn_graphics_lines_id</strong></p>
<blockquote>
<div><p></p>
<p></p>
</div></blockquote>
<p><span class="target" id="zincgraphicsid_8h_1a04174fef615da57b953f852893623a89"></span>typedef struct cmzn_graphics_points * <strong>cmzn_graphics_points_id</strong></p>
<blockquote>
<div><p></p>
<p></p>
</div></blockquote>
<p><span class="target" id="zincgraphicsid_8h_1a4552f78883db48c224ed51b867e25e86"></span>typedef struct cmzn_graphics_streamlines * <strong>cmzn_graphics_streamlines_id</strong></p>
<blockquote>
<div><p></p>
<p></p>
</div></blockquote>
<p><span class="target" id="zincgraphicsid_8h_1ab3dd4a4ed904212a68ebbf006d2b8430"></span>typedef struct cmzn_graphics_surfaces * <strong>cmzn_graphics_surfaces_id</strong></p>
<blockquote>
<div><p></p>
<p></p>
</div></blockquote>
<p><span class="target" id="zincgraphicsid_8h_1ac43af42c8451617003df5c351171062d"></span>typedef struct cmzn_graphicspointattributes * <strong>cmzn_graphicspointattributes_id</strong></p>
<blockquote>
<div><p></p>
<p></p>
</div></blockquote>
<p><span class="target" id="zincgraphicsid_8h_1a5fae4ca796f7190d825e68ca7a5ab375"></span>typedef struct cmzn_graphicslineattributes * <strong>cmzn_graphicslineattributes_id</strong></p>
<blockquote>
<div><p></p>
<p></p>
</div></blockquote>
<p><span class="target" id="zincgraphicsid_8h_1a119c292ee04e1233d68699b69cf7c7c2"></span>typedef struct cmzn_graphicssamplingattributes * <strong>cmzn_graphicssamplingattributes_id</strong></p>
<blockquote>
<div><p></p>
<p></p>
</div></blockquote>
</div></blockquote>
<em>Enums</em><blockquote>
<div><p><span class="target" id="zincgraphicsid_8h_1aa59c953ae84d370bd06b50b5ca802efa"></span><strong>cmzn_graphics_streamlines_track_direction enum</strong></p>
<blockquote>
<div><p></p>
<p>Enumeration giving the direction streamlines are tracked relative to the stream vector field. </p>
<p><em>Values:</em></p>
<ul class="breatheenumvalues">
<li><tt class="first docutils literal"><span class="pre">CMZN_GRAPHICS_STREAMLINES_TRACK_DIRECTION_INVALID</span></tt><tt class="docutils literal"> <span class="pre">=</span> <span class="pre">=</span> <span class="pre">0</span></tt> - </li>
<li><tt class="first docutils literal"><span class="pre">CMZN_GRAPHICS_STREAMLINES_TRACK_DIRECTION_FORWARD</span></tt><tt class="docutils literal"> <span class="pre">=</span> <span class="pre">=</span> <span class="pre">1</span></tt> - </li>
<li><tt class="first docutils literal"><span class="pre">CMZN_GRAPHICS_STREAMLINES_TRACK_DIRECTION_REVERSE</span></tt><tt class="docutils literal"> <span class="pre">=</span> <span class="pre">=</span> <span class="pre">2</span></tt> - </li>
</ul>
</div></blockquote>
<p><span class="target" id="zincgraphicsid_8h_1a70b46312fb141ce01521f75c38804e9c"></span><strong>cmzn_graphics_type enum</strong></p>
<blockquote>
<div><p></p>
<p>Enumeration giving the algorithm used to create graphics. </p>
<p><em>Values:</em></p>
<ul class="breatheenumvalues">
<li><tt class="first docutils literal"><span class="pre">CMZN_GRAPHICS_TYPE_INVALID</span></tt><tt class="docutils literal"> <span class="pre">=</span> <span class="pre">=</span> <span class="pre">0</span></tt> - </li>
<li><tt class="first docutils literal"><span class="pre">CMZN_GRAPHICS_TYPE_POINTS</span></tt><tt class="docutils literal"> <span class="pre">=</span> <span class="pre">=</span> <span class="pre">1</span></tt> - </li>
<li><tt class="first docutils literal"><span class="pre">CMZN_GRAPHICS_TYPE_LINES</span></tt><tt class="docutils literal"> <span class="pre">=</span> <span class="pre">=</span> <span class="pre">2</span></tt> - </li>
<li><tt class="first docutils literal"><span class="pre">CMZN_GRAPHICS_TYPE_SURFACES</span></tt><tt class="docutils literal"> <span class="pre">=</span> <span class="pre">=</span> <span class="pre">3</span></tt> - </li>
<li><tt class="first docutils literal"><span class="pre">CMZN_GRAPHICS_TYPE_CONTOURS</span></tt><tt class="docutils literal"> <span class="pre">=</span> <span class="pre">=</span> <span class="pre">4</span></tt> - </li>
<li><tt class="first docutils literal"><span class="pre">CMZN_GRAPHICS_TYPE_STREAMLINES</span></tt><tt class="docutils literal"> <span class="pre">=</span> <span class="pre">=</span> <span class="pre">5</span></tt> - </li>
</ul>
</div></blockquote>
<p><span class="target" id="zincgraphicsid_8h_1ae592978dd4b4f3419ca35bb3ed83dd56"></span><strong>cmzn_graphics_select_mode enum</strong></p>
<blockquote>
<div><p></p>
<p>Enumeration controlling how graphics interact with selection: whether the objects can be picked, the selection highlighted or only the selected or unselected primitives are drawn. </p>
<p><em>Values:</em></p>
<ul class="breatheenumvalues">
<li><tt class="first docutils literal"><span class="pre">CMZN_GRAPHICS_SELECT_MODE_INVALID</span></tt><tt class="docutils literal"> <span class="pre">=</span> <span class="pre">=</span> <span class="pre">0</span></tt> - </li>
<li><tt class="first docutils literal"><span class="pre">CMZN_GRAPHICS_SELECT_MODE_ON</span></tt><tt class="docutils literal"> <span class="pre">=</span> <span class="pre">=</span> <span class="pre">1</span></tt> - <p>draw all objects with unselected objects drawn in standard material, selected objects in selected_material, and with picking enabled. Default mode for any new graphics. </p>
</li>
<li><tt class="first docutils literal"><span class="pre">CMZN_GRAPHICS_SELECT_MODE_OFF</span></tt><tt class="docutils literal"> <span class="pre">=</span> <span class="pre">=</span> <span class="pre">2</span></tt> - <p>object IDs are not generated so individual nodes/elements cannot be picked nor highlighted. More efficient if picking and highlighting are not required. </p>
</li>
<li><tt class="first docutils literal"><span class="pre">CMZN_GRAPHICS_SELECT_MODE_DRAW_SELECTED</span></tt><tt class="docutils literal"> <span class="pre">=</span> <span class="pre">=</span> <span class="pre">3</span></tt> - <p>draw only selected objects in selected_material, with picking enabled </p>
</li>
<li><tt class="first docutils literal"><span class="pre">CMZN_GRAPHICS_SELECT_MODE_DRAW_UNSELECTED</span></tt><tt class="docutils literal"> <span class="pre">=</span> <span class="pre">=</span> <span class="pre">4</span></tt> - <p>draw only unselected objects in standard material, with picking enabled. </p>
</li>
</ul>
</div></blockquote>
<p><span class="target" id="zincgraphicsid_8h_1a4334722c01798a68baa370a5206618fd"></span><strong>cmzn_graphicslineattributes_shape_type enum</strong></p>
<blockquote>
<div><p></p>
<p>The shape or profile of graphics generated for lines. </p>
<p><em>Values:</em></p>
<ul class="breatheenumvalues">
<li><tt class="first docutils literal"><span class="pre">CMZN_GRAPHICSLINEATTRIBUTES_SHAPE_TYPE_INVALID</span></tt><tt class="docutils literal"> <span class="pre">=</span> <span class="pre">=</span> <span class="pre">0</span></tt> - </li>
<li><tt class="first docutils literal"><span class="pre">CMZN_GRAPHICSLINEATTRIBUTES_SHAPE_TYPE_LINE</span></tt><tt class="docutils literal"> <span class="pre">=</span> <span class="pre">=</span> <span class="pre">1</span></tt> - </li>
<li><tt class="first docutils literal"><span class="pre">CMZN_GRAPHICSLINEATTRIBUTES_SHAPE_TYPE_RIBBON</span></tt><tt class="docutils literal"> <span class="pre">=</span> <span class="pre">=</span> <span class="pre">2</span></tt> - </li>
<li><tt class="first docutils literal"><span class="pre">CMZN_GRAPHICSLINEATTRIBUTES_SHAPE_TYPE_CIRCLE_EXTRUSION</span></tt><tt class="docutils literal"> <span class="pre">=</span> <span class="pre">=</span> <span class="pre">3</span></tt> - </li>
<li><tt class="first docutils literal"><span class="pre">CMZN_GRAPHICSLINEATTRIBUTES_SHAPE_TYPE_SQUARE_EXTRUSION</span></tt><tt class="docutils literal"> <span class="pre">=</span> <span class="pre">=</span> <span class="pre">4</span></tt> - </li>
</ul>
</div></blockquote>
<p><span class="target" id="zincgraphicsid_8h_1adee126e9248c7052214300d897930a90"></span><strong>cmzn_graphics_render_polygon_mode enum</strong></p>
<blockquote>
<div><p></p>
<p>Enumeration controlling how polygons are rendered in GL. </p>
<p><em>Values:</em></p>
<ul class="breatheenumvalues">
<li><tt class="first docutils literal"><span class="pre">CMZN_GRAPHICS_RENDER_POLYGON_MODE_INVALID</span></tt><tt class="docutils literal"> <span class="pre">=</span> <span class="pre">=</span> <span class="pre">0</span></tt> - </li>
<li><tt class="first docutils literal"><span class="pre">CMZN_GRAPHICS_RENDER_POLYGON_MODE_SHADED</span></tt><tt class="docutils literal"> <span class="pre">=</span> <span class="pre">=</span> <span class="pre">1</span></tt> - <p>Draw filled polygons </p>
</li>
<li><tt class="first docutils literal"><span class="pre">CMZN_GRAPHICS_RENDER_POLYGON_MODE_WIREFRAME</span></tt><tt class="docutils literal"> <span class="pre">=</span> <span class="pre">=</span> <span class="pre">2</span></tt> - <p>Draw polygon wireframe edge lines </p>
</li>
</ul>
</div></blockquote>
</div></blockquote>
</div></blockquote>
<div class="line-block" id="zincmaterialid_8h">
<div class="line"><em>file</em> <strong>materialid.h</strong></div>
</div>
<blockquote>
<div><p></p>
<p></p>
<em>Typedefs</em><blockquote>
<div><p><span class="target" id="zincmaterialid_8h_1a7e5746fef2f4fb2a363d32d1b97b70a3"></span>typedef struct cmzn_material * <strong>cmzn_material_id</strong></p>
<blockquote>
<div><p></p>
<p></p>
</div></blockquote>
<p><span class="target" id="zincmaterialid_8h_1a14c628280aa47145757d91d3daa73519"></span>typedef struct cmzn_materialmodule * <strong>cmzn_materialmodule_id</strong></p>
<blockquote>
<div><p></p>
<p></p>
</div></blockquote>
</div></blockquote>
<em>Enums</em><blockquote>
<div><p><span class="target" id="zincmaterialid_8h_1a93a9ce4d150fd9786563d098b310d7ce"></span><strong>cmzn_material_attribute enum</strong></p>
<blockquote>
<div><p></p>
<p>Labels of material attributes which may be set or obtained using generic get/set_attribute functions. </p>
<p><em>Values:</em></p>
<ul class="breatheenumvalues">
<li><tt class="first docutils literal"><span class="pre">CMZN_MATERIAL_ATTRIBUTE_INVALID</span></tt><tt class="docutils literal"> <span class="pre">=</span> <span class="pre">=</span> <span class="pre">0</span></tt> - </li>
<li><tt class="first docutils literal"><span class="pre">CMZN_MATERIAL_ATTRIBUTE_ALPHA</span></tt><tt class="docutils literal"> <span class="pre">=</span> <span class="pre">=</span> <span class="pre">1</span></tt> - <p>Opacity of the material. Transparent or translucent objects has lower alpha values then an opaque ones. Minimum acceptable value is 0 and maximum acceptable value is 1. Use attribute_real to get and set its values. </p>
</li>
<li><tt class="first docutils literal"><span class="pre">CMZN_MATERIAL_ATTRIBUTE_AMBIENT</span></tt><tt class="docutils literal"> <span class="pre">=</span> <span class="pre">=</span> <span class="pre">2</span></tt> - <p>Ambient colour of the material. Ambient colour simulates the colour of the material when it does not receive direct illumination. Composed of RGB components. Use attribute_real3 to get and set its values. Minimum acceptable value is 0 and maximum acceptable value is 1. </p>
</li>
<li><tt class="first docutils literal"><span class="pre">CMZN_MATERIAL_ATTRIBUTE_DIFFUSE</span></tt><tt class="docutils literal"> <span class="pre">=</span> <span class="pre">=</span> <span class="pre">3</span></tt> - <p>Diffuse colour of the material. Diffuse colour response to light that comes from one direction and this colour scattered equally in all directions once the light hits it. Composed of RGB components. Use attribute_real3 to get and set its values. Minimum acceptable value is 0 and maximum acceptable value is 1. </p>
</li>
<li><tt class="first docutils literal"><span class="pre">CMZN_MATERIAL_ATTRIBUTE_EMISSION</span></tt><tt class="docutils literal"> <span class="pre">=</span> <span class="pre">=</span> <span class="pre">4</span></tt> - <p>Emissive colour of the material. Emissive colour simulates colours that is originating from the material itself. Composed of RGB components. Use attribute_real3 to get and set its values. Minimum acceptable value is 0 and maximum acceptable value is 1. </p>
</li>
<li><tt class="first docutils literal"><span class="pre">CMZN_MATERIAL_ATTRIBUTE_SHININESS</span></tt><tt class="docutils literal"> <span class="pre">=</span> <span class="pre">=</span> <span class="pre">5</span></tt> - <p>Shininess determines the brightness of the highlight. Minimum acceptable value is 0 and maximum acceptable value is 1. Use attribute_real to get and set its values. </p>
</li>
<li><tt class="first docutils literal"><span class="pre">CMZN_MATERIAL_ATTRIBUTE_SPECULAR</span></tt><tt class="docutils literal"> <span class="pre">=</span> <span class="pre">=</span> <span class="pre">6</span></tt> - <p>Specular colour of the material. Specular colour produces highlights. Unlike ambient and diffuse, specular colour depends on location of the viewpoint, it is brightest along the direct angle of reflection. Composed of RGB components. Use attribute_real3 to get and set its values. Minimum acceptable value is 0 and maximum acceptable value is 1. </p>
</li>
</ul>
</div></blockquote>
</div></blockquote>
</div></blockquote>
<div class="line-block" id="zincnodeid_8h">
<div class="line"><em>file</em> <strong>nodeid.h</strong></div>
</div>
<blockquote>
<div><p></p>
<p></p>
<em>Typedefs</em><blockquote>
<div><p><span class="target" id="zincnodeid_8h_1a49684680279d6557b32b58239f3964a7"></span>typedef struct cmzn_nodeset * <strong>cmzn_nodeset_id</strong></p>
<blockquote>
<div><p></p>
<p>Handle to a nodeset, the container for nodes in a region. </p>
</div></blockquote>
<p><span class="target" id="zincnodeid_8h_1aa0eb8e1bc8ffedd3bd4b335ace96ce20"></span>typedef struct cmzn_nodeset_group * <strong>cmzn_nodeset_group_id</strong></p>
<blockquote>
<div><p></p>
<p>Handle to a nodeset group, a subset of a nodeset </p>
</div></blockquote>
<p><span class="target" id="zincnodeid_8h_1a7d325f9cb74a603cd28c33b8aea0953b"></span>typedef struct cmzn_nodetemplate * <strong>cmzn_nodetemplate_id</strong></p>
<blockquote>
<div><p></p>
<p>Handle to a template for creating or defining fields at a node. </p>
</div></blockquote>
<p><span class="target" id="zincnodeid_8h_1abe5468222383f5b01da4f4c034748515"></span>typedef struct cmzn_node * <strong>cmzn_node_id</strong></p>
<blockquote>
<div><p></p>
<p>Handle to a single node object </p>
</div></blockquote>
<p><span class="target" id="zincnodeid_8h_1acd090f98c8c160d1db2f3b751935885b"></span>typedef struct cmzn_nodeiterator * <strong>cmzn_nodeiterator_id</strong></p>
<blockquote>
<div><p></p>
<p>Handle to an iterator for iterating over a nodeset </p>
</div></blockquote>
<p><span class="target" id="zincnodeid_8h_1ac79a3c72492a8c064f2ffa1028b5c8f1"></span>typedef struct cmzn_nodesetchanges * <strong>cmzn_nodesetchanges_id</strong></p>
<blockquote>
<div><p></p>
<p>Handle to object describing changes to a nodeset in a fieldmoduleevent </p>
</div></blockquote>
<p><span class="target" id="zincnodeid_8h_1afeeb37e1488236c945db86cccc3ba037"></span>typedef int <strong>cmzn_node_change_flags</strong></p>
<blockquote>
<div><p></p>
<p>Type for passing logical OR of #cmzn_node_change_flag </p>
</div></blockquote>
</div></blockquote>
<em>Enums</em><blockquote>
<div><p><span class="target" id="zincnodeid_8h_1a9844e8c668909ef2b439d47ddce4fab9"></span><strong>cmzn_node_value_label enum</strong></p>
<blockquote>
<div><p></p>
<p>Enumerated labels for field value/derivative parameters held at nodes. </p>
<p><em>Values:</em></p>
<ul class="breatheenumvalues">
<li><tt class="first docutils literal"><span class="pre">CMZN_NODE_VALUE_LABEL_INVALID</span></tt><tt class="docutils literal"> <span class="pre">=</span> <span class="pre">=</span> <span class="pre">0</span></tt> - </li>
<li><tt class="first docutils literal"><span class="pre">CMZN_NODE_VALUE_LABEL_VALUE</span></tt><tt class="docutils literal"> <span class="pre">=</span> <span class="pre">=</span> <span class="pre">1</span></tt> - <p>literal field value </p>
</li>
<li><tt class="first docutils literal"><span class="pre">CMZN_NODE_VALUE_LABEL_D_DS1</span></tt><tt class="docutils literal"> <span class="pre">=</span> <span class="pre">=</span> <span class="pre">2</span></tt> - <p>derivative w.r.t. arc length S1 </p>
</li>
<li><tt class="first docutils literal"><span class="pre">CMZN_NODE_VALUE_LABEL_D_DS2</span></tt><tt class="docutils literal"> <span class="pre">=</span> <span class="pre">=</span> <span class="pre">3</span></tt> - <p>derivative w.r.t. arc length S2 </p>
</li>
<li><tt class="first docutils literal"><span class="pre">CMZN_NODE_VALUE_LABEL_D_DS3</span></tt><tt class="docutils literal"> <span class="pre">=</span> <span class="pre">=</span> <span class="pre">4</span></tt> - <p>derivative w.r.t. arc length S3 </p>
</li>
<li><tt class="first docutils literal"><span class="pre">CMZN_NODE_VALUE_LABEL_D2_DS1DS2</span></tt><tt class="docutils literal"> <span class="pre">=</span> <span class="pre">=</span> <span class="pre">5</span></tt> - <p>cross derivative w.r.t. arc lengths S1,S2 </p>
</li>
<li><tt class="first docutils literal"><span class="pre">CMZN_NODE_VALUE_LABEL_D2_DS1DS3</span></tt><tt class="docutils literal"> <span class="pre">=</span> <span class="pre">=</span> <span class="pre">6</span></tt> - <p>cross derivative w.r.t. arc lengths S1,S3 </p>
</li>
<li><tt class="first docutils literal"><span class="pre">CMZN_NODE_VALUE_LABEL_D2_DS2DS3</span></tt><tt class="docutils literal"> <span class="pre">=</span> <span class="pre">=</span> <span class="pre">7</span></tt> - <p>cross derivative w.r.t. arc lengths S2,S3 </p>
</li>
<li><tt class="first docutils literal"><span class="pre">CMZN_NODE_VALUE_LABEL_D3_DS1DS2DS3</span></tt><tt class="docutils literal"> <span class="pre">=</span> <span class="pre">=</span> <span class="pre">8</span></tt> - <p>triple cross derivative w.r.t. arc lengths S1,S2,S3 </p>
</li>
</ul>
</div></blockquote>
<p><span class="target" id="zincnodeid_8h_1a037e442d466312df03841ad8a4d72784"></span><strong>cmzn_node_change_flag enum</strong></p>
<blockquote>
<div><p></p>
<p>Bit flags summarising changes to a node or nodes in a nodeset. </p>
<p><em>Values:</em></p>
<ul class="breatheenumvalues">
<li><tt class="first docutils literal"><span class="pre">CMZN_NODE_CHANGE_FLAG_NONE</span></tt><tt class="docutils literal"> <span class="pre">=</span> <span class="pre">=</span> <span class="pre">0</span></tt> - <p>node(s) not changed </p>
</li>
<li><tt class="first docutils literal"><span class="pre">CMZN_NODE_CHANGE_FLAG_ADD</span></tt><tt class="docutils literal"> <span class="pre">=</span> <span class="pre">=</span> <span class="pre">1</span></tt> - <p>node(s) added </p>
</li>
<li><tt class="first docutils literal"><span class="pre">CMZN_NODE_CHANGE_FLAG_REMOVE</span></tt><tt class="docutils literal"> <span class="pre">=</span> <span class="pre">=</span> <span class="pre">2</span></tt> - <p>node(s) removed </p>
</li>
<li><tt class="first docutils literal"><span class="pre">CMZN_NODE_CHANGE_FLAG_IDENTIFIER</span></tt><tt class="docutils literal"> <span class="pre">=</span> <span class="pre">=</span> <span class="pre">4</span></tt> - <p>node(s&#8217;) identifier changed </p>
</li>
<li><tt class="first docutils literal"><span class="pre">CMZN_NODE_CHANGE_FLAG_DEFINITION</span></tt><tt class="docutils literal"> <span class="pre">=</span> <span class="pre">=</span> <span class="pre">8</span></tt> - <p>node(s&#8217;) definition other than identifier changed; currently none </p>
</li>
<li><tt class="first docutils literal"><span class="pre">CMZN_NODE_CHANGE_FLAG_FIELD</span></tt><tt class="docutils literal"> <span class="pre">=</span> <span class="pre">=</span> <span class="pre">16</span></tt> - <p>change to field values mapped to node(s) </p>
</li>
</ul>
</div></blockquote>
</div></blockquote>
</div></blockquote>
<div class="line-block" id="zincoptimisationid_8h">
<div class="line"><em>file</em> <strong>optimisationid.h</strong></div>
</div>
<blockquote>
<div><p></p>
<p></p>
<em>Typedefs</em><blockquote>
<div><p><span class="target" id="zincoptimisationid_8h_1a5fb6350f2c7cf61dc7de5a5ebc922221"></span>typedef struct cmzn_optimisation * <strong>cmzn_optimisation_id</strong></p>
<blockquote>
<div><p></p>
<p></p>
</div></blockquote>
</div></blockquote>
<em>Enums</em><blockquote>
<div><p><span class="target" id="zincoptimisationid_8h_1ac2a4ef529be9d7ae4209a7234c4c3ab1"></span><strong>cmzn_optimisation_method enum</strong></p>
<blockquote>
<div><p></p>
<p><p>The optimisation methods available via the cmzn_optimisation object.</p>
<p></p>
</p>
<p><em>Values:</em></p>
<ul class="breatheenumvalues">
<li><tt class="first docutils literal"><span class="pre">CMZN_OPTIMISATION_METHOD_INVALID</span></tt><tt class="docutils literal"> <span class="pre">=</span> <span class="pre">=</span> <span class="pre">0</span></tt> - <p>Invalid or unspecified optimisation method. </p>
</li>
<li><tt class="first docutils literal"><span class="pre">CMZN_OPTIMISATION_METHOD_QUASI_NEWTON</span></tt><tt class="docutils literal"> <span class="pre">=</span> <span class="pre">=</span> <span class="pre">1</span></tt> - <p>The default optimisation method. Suitable for most problems with a small set of independent parameters. Given a scalar valued objective function (scalar sum of all objective fields&#8217; components), finds the set of DOFs for the independent field(s) which minimises the objective function value. </p>
</li>
<li><tt class="first docutils literal"><span class="pre">CMZN_OPTIMISATION_METHOD_LEAST_SQUARES_QUASI_NEWTON</span></tt><tt class="docutils literal"> <span class="pre">=</span> <span class="pre">=</span> <span class="pre">2</span></tt> - <p>A least squares method better suited to larger problems. Finds the set of independent field(s) DOF values which minimises the squares of the objective components supplied. Works specially with fields giving sum-of-squares e.g. nodeset_sum_squares, nodeset_mean_squares to supply individual terms before squaring to the optimiser. </p>
</li>
</ul>
</div></blockquote>
<p><span class="target" id="zincoptimisationid_8h_1a4cfb9b1efdf9b613fcbc66b0bc523c6f"></span><strong>cmzn_optimisation_attribute enum</strong></p>
<blockquote>
<div><p></p>
<p>Labels of optimisation attributes which may be set or obtained using generic get/set_attribute functions. </p>
<p><em>Values:</em></p>
<ul class="breatheenumvalues">
<li><tt class="first docutils literal"><span class="pre">CMZN_OPTIMISATION_ATTRIBUTE_FUNCTION_TOLERANCE</span></tt><tt class="docutils literal"> <span class="pre">=</span> <span class="pre">=</span> <span class="pre">1</span></tt> - <p>(Opt++ stopping tolerance) Assigns a stopping tolerance for an optimisation algorithm. Please assign tolerances that make sense given the accuracy of your function. For example, setting TOLERANCE to 1.e-4 in your problem means the optimisation algorithm converges when the function value from one iteration to the next changes by 1.e-4 or less.</p>
<p>Default value: 1.49012e-8 </p>
</li>
<li><tt class="first docutils literal"><span class="pre">CMZN_OPTIMISATION_ATTRIBUTE_GRADIENT_TOLERANCE</span></tt><tt class="docutils literal"> <span class="pre">=</span> <span class="pre">=</span> <span class="pre">2</span></tt> - <p>(Opt++ stopping tolerance) Assigns a stopping tolerance for an optimisation algorithm. Please assign tolerances that make sense given your function accuracy. For example, setting GRADIENT_TOLERANCE to 1.e-6 in your problem means the optimisation algorithm converges when the absolute or relative norm of the gradient is 1.e-6 or less.</p>
<p>Default value: 6.05545e-6 </p>
</li>
<li><tt class="first docutils literal"><span class="pre">CMZN_OPTIMISATION_ATTRIBUTE_STEP_TOLERANCE</span></tt><tt class="docutils literal"> <span class="pre">=</span> <span class="pre">=</span> <span class="pre">3</span></tt> - <p>(Opt++ stopping tolerance) Assigns a stopping tolerance for the optimisation algorithm. Please set tolerances that make sense, given the accuracy of your function. For example, setting STEP_TOLERANCE to 1.e-2 in your problem means the optimisation algorithm converges when the relative steplength is 1.e-2 or less.</p>
<p>Default value: 1.49012e-8 </p>
</li>
<li><tt class="first docutils literal"><span class="pre">CMZN_OPTIMISATION_ATTRIBUTE_MAXIMUM_ITERATIONS</span></tt><tt class="docutils literal"> <span class="pre">=</span> <span class="pre">=</span> <span class="pre">4</span></tt> - <p>(Opt++ stopping tolerance) Places a limit on the number of iterations of the optimisation algorithm. It is useful when your function is computationally expensive or you are debugging the optimisation algorithm. When MAXIMUM_ITERATIONS iterations evaluations have been completed, the optimisation algorithm will stop and report the solution it has reached at that point. It may not be the optimal solution, but it will be the best it could provide given the limit on the number of iterations.</p>
<p>Default value: 100. </p>
</li>
<li><tt class="first docutils literal"><span class="pre">CMZN_OPTIMISATION_ATTRIBUTE_MAXIMUM_FUNCTION_EVALUATIONS</span></tt><tt class="docutils literal"> <span class="pre">=</span> <span class="pre">=</span> <span class="pre">5</span></tt> - <p>(Opt++ stopping tolerance) Places an upper bound on the number of function evaluations. The method is useful when your function is computationally expensive and you only have time to perform a limited number of evaluations. When MAXIMUM_NUMBER_FUNCTION_EVALUATIONS function evaluations have been completed, the optimisation algorithm will stop and report the solution it has reached at that point. It may not be the optimal solution, but it will be the best it could provide given the limit on the number of function evaluations.</p>
<p>Default value: 1000 </p>
</li>
<li><tt class="first docutils literal"><span class="pre">CMZN_OPTIMISATION_ATTRIBUTE_MAXIMUM_STEP</span></tt><tt class="docutils literal"> <span class="pre">=</span> <span class="pre">=</span> <span class="pre">6</span></tt> - </li>
<li><tt class="first docutils literal"><span class="pre">CMZN_OPTIMISATION_ATTRIBUTE_MINIMUM_STEP</span></tt><tt class="docutils literal"> <span class="pre">=</span> <span class="pre">=</span> <span class="pre">7</span></tt> - </li>
<li><tt class="first docutils literal"><span class="pre">CMZN_OPTIMISATION_ATTRIBUTE_LINESEARCH_TOLERANCE</span></tt><tt class="docutils literal"> <span class="pre">=</span> <span class="pre">=</span> <span class="pre">8</span></tt> - <p>(Opt++ globalisation strategy parameter) In practice, the linesearch tolerance is set to a small value, so that almost any decrease in the function value results in an acceptable step. Suggested values are 1.e-4 for Newton methods and 1.e-1 for more exact line searches.</p>
<p>Default value: 1.e-4 </p>
</li>
<li><tt class="first docutils literal"><span class="pre">CMZN_OPTIMISATION_ATTRIBUTE_MAXIMUM_BACKTRACK_ITERATIONS</span></tt><tt class="docutils literal"> <span class="pre">=</span> <span class="pre">=</span> <span class="pre">9</span></tt> - </li>
<li><tt class="first docutils literal"><span class="pre">CMZN_OPTIMISATION_ATTRIBUTE_TRUST_REGION_SIZE</span></tt><tt class="docutils literal"> <span class="pre">=</span> <span class="pre">=</span> <span class="pre">10</span></tt> - </li>
</ul>
</div></blockquote>
</div></blockquote>
</div></blockquote>
<div class="line-block" id="zincregionid_8h">
<div class="line"><em>file</em> <strong>regionid.h</strong></div>
</div>
<blockquote>
<div><p></p>
<p></p>
<em>Typedefs</em><blockquote>
<div><p><span class="target" id="zincregionid_8h_1a3585b10a9ce0b1e6c4217fa7be0fe3ac"></span>typedef struct cmzn_region * <strong>cmzn_region_id</strong></p>
<blockquote>
<div><p></p>
<p></p>
</div></blockquote>
<p><span class="target" id="zincregionid_8h_1a81ce743ad6762b9b957f1b88cdd21216"></span>typedef struct cmzn_streaminformation_region * <strong>cmzn_streaminformation_region_id</strong></p>
<blockquote>
<div><p></p>
<p></p>
</div></blockquote>
</div></blockquote>
<em>Enums</em><blockquote>
<div><p><span class="target" id="zincregionid_8h_1aae6c8a8ae57897e889c9df8eddb6447a"></span><strong>cmzn_streaminformation_region_attribute enum</strong></p>
<blockquote>
<div><p></p>
<p></p>
<p><em>Values:</em></p>
<ul class="breatheenumvalues">
<li><tt class="first docutils literal"><span class="pre">CMZN_STREAMINFORMATION_REGION_ATTRIBUTE_INVALID</span></tt><tt class="docutils literal"> <span class="pre">=</span> <span class="pre">=</span> <span class="pre">0</span></tt> - </li>
<li><tt class="first docutils literal"><span class="pre">CMZN_STREAMINFORMATION_REGION_ATTRIBUTE_TIME</span></tt><tt class="docutils literal"> <span class="pre">=</span> <span class="pre">=</span> <span class="pre">1</span></tt> - </li>
</ul>
</div></blockquote>
</div></blockquote>
</div></blockquote>
<div class="line-block" id="zincscenecoordinatesystem_8h">
<div class="line"><em>file</em> <strong>scenecoordinatesystem.h</strong></div>
<div class="line"><em>#include &#8220;zinc/zincsharedobject.h&#8221;</em></div>
</div>
<blockquote>
<div><p></p>
<p></p>
<em>Enums</em><blockquote>
<div><p><span class="target" id="zincscenecoordinatesystem_8h_1ad7db5036fd4a1c285a7f78c4bbf69653"></span><strong>cmzn_scenecoordinatesystem enum</strong></p>
<blockquote>
<div><p></p>
<p><p>FILE : scenecoordinatesystem.h</p>
<p>Enumerated type for identifying scene and window coordinate systems. Enumerated type for identifying scene and window coordinate systems. Graphics are drawn in one of these coordinate systems. </p>
</p>
<p><em>Values:</em></p>
<ul class="breatheenumvalues">
<li><tt class="first docutils literal"><span class="pre">CMZN_SCENECOORDINATESYSTEM_INVALID</span></tt><tt class="docutils literal"> <span class="pre">=</span> <span class="pre">=</span> <span class="pre">0</span></tt> - </li>
<li><tt class="first docutils literal"><span class="pre">CMZN_SCENECOORDINATESYSTEM_LOCAL</span></tt><tt class="docutils literal"> <span class="pre">=</span> <span class="pre">=</span> <span class="pre">1</span></tt> - <p>The local coordinate system of a scene, subject to its own transformation matrix and those of all parent scenes up to the root region of the cmzn_scene in use, which are world coordinates. </p>
</li>
<li><tt class="first docutils literal"><span class="pre">CMZN_SCENECOORDINATESYSTEM_WORLD</span></tt><tt class="docutils literal"> <span class="pre">=</span> <span class="pre">=</span> <span class="pre">2</span></tt> - <p>The world coordinate system which scene viewer viewing parameters are specified in, and which scene transformations (giving local coordinates) are ultimately relative to. </p>
</li>
<li><tt class="first docutils literal"><span class="pre">CMZN_SCENECOORDINATESYSTEM_NORMALISED_WINDOW_FILL</span></tt><tt class="docutils literal"> <span class="pre">=</span> <span class="pre">=</span> <span class="pre">3</span></tt> - <p>Distorted normalised window coordinate system which varies from -1 to +1 from left to right, bottom to top, and far to near of window. If window is non-square, graphics in this space appear stretched. </p>
</li>
<li><tt class="first docutils literal"><span class="pre">CMZN_SCENECOORDINATESYSTEM_NORMALISED_WINDOW_FIT_CENTRE</span></tt><tt class="docutils literal"> <span class="pre">=</span> <span class="pre">=</span> <span class="pre">4</span></tt> - <p>Undistorted normalised window coordinate system which varies from -1 to +1 from far to near, and from -1 to +1 from left-to-right and bottom-to-top in largest square that fits in centre of window. </p>
</li>
<li><tt class="first docutils literal"><span class="pre">CMZN_SCENECOORDINATESYSTEM_NORMALISED_WINDOW_FIT_LEFT</span></tt><tt class="docutils literal"> <span class="pre">=</span> <span class="pre">=</span> <span class="pre">5</span></tt> - <p>Undistorted normalised window coordinate system which varies from -1 to +1 from far to near, and from -1 to +1 from left-to-right and bottom-to-top in largest square that fits in left of window. </p>
</li>
<li><tt class="first docutils literal"><span class="pre">CMZN_SCENECOORDINATESYSTEM_NORMALISED_WINDOW_FIT_RIGHT</span></tt><tt class="docutils literal"> <span class="pre">=</span> <span class="pre">=</span> <span class="pre">6</span></tt> - <p>Undistorted normalised window coordinate system which varies from -1 to +1 from far to near, and from -1 to +1 from left-to-right and bottom-to-top in largest square that fits in right of window. </p>
</li>
<li><tt class="first docutils literal"><span class="pre">CMZN_SCENECOORDINATESYSTEM_NORMALISED_WINDOW_FIT_BOTTOM</span></tt><tt class="docutils literal"> <span class="pre">=</span> <span class="pre">=</span> <span class="pre">7</span></tt> - <p>Undistorted normalised window coordinate system which varies from -1 to +1 from far to near, and from -1 to +1 from left-to-right and bottom-to-top in largest square that fits in bottom of window. </p>
</li>
<li><tt class="first docutils literal"><span class="pre">CMZN_SCENECOORDINATESYSTEM_NORMALISED_WINDOW_FIT_TOP</span></tt><tt class="docutils literal"> <span class="pre">=</span> <span class="pre">=</span> <span class="pre">8</span></tt> - <p>Undistorted normalised window coordinate system which varies from -1 to +1 from far to near, and from -1 to +1 from left-to-right and bottom-to-top in largest square that fits in top of window. </p>
</li>
<li><tt class="first docutils literal"><span class="pre">CMZN_SCENECOORDINATESYSTEM_WINDOW_PIXEL_BOTTOM_LEFT</span></tt><tt class="docutils literal"> <span class="pre">=</span> <span class="pre">=</span> <span class="pre">9</span></tt> - <p>Window coordinate system in pixel units with 0,0 at centre of the bottom-left pixel in display window, and depth ranging from far = -1 to near = +1. </p>
</li>
<li><tt class="first docutils literal"><span class="pre">CMZN_SCENECOORDINATESYSTEM_WINDOW_PIXEL_TOP_LEFT</span></tt><tt class="docutils literal"> <span class="pre">=</span> <span class="pre">=</span> <span class="pre">10</span></tt> - <p>Window coordinate system in pixel units with 0,0 at centre of the top-left pixel in display window, and depth ranging from far = -1 to near = +1. Y coordinates are negative going down the window. </p>
</li>
</ul>
</div></blockquote>
</div></blockquote>
<em>Functions</em><blockquote>
<div><p><span class="target" id="zincscenecoordinatesystem_8h_1a164e5ae7459e0ab509d4936ff37853c7"></span><div class="line-block">
<div class="line">ZINC_API enum cmzn_scenecoordinatesystem <strong>cmzn_scenecoordinatesystem_enum_from_string</strong>(const char * string)</div>
</div>
</p>
<blockquote>
<div><p></p>
<p><p>Convert a short name into an enum if the name matches any of the members in the enum.</p>
<p><dl class="docutils">
<dt><strong>Return</strong></dt>
<dd>the correct enum type if a match is found. </dd>
<dt><strong>Parameters</strong></dt>
<dd><ul class="breatheparameterlist first last">
<li><tt class="first docutils literal"><span class="pre">string</span></tt> - <p>string of the short enumerator name </p>
</li>
</ul>
</dd>
</dl>
</p>
</p>
</div></blockquote>
<p><span class="target" id="zincscenecoordinatesystem_8h_1aa10b245c6d33eaae3c141e04c9701b73"></span><div class="line-block">
<div class="line">ZINC_API char * <strong>cmzn_scenecoordinatesystem_enum_to_string</strong>(enum cmzn_scenecoordinatesystem system)</div>
</div>
</p>
<blockquote>
<div><p></p>
<p><p>Return an allocated short name of the enum type from the provided enum. User must call cmzn_deallocate to destroy the successfully returned string.</p>
<p><dl class="docutils">
<dt><strong>Return</strong></dt>
<dd>an allocated string which stored the short name of the enum. </dd>
<dt><strong>Parameters</strong></dt>
<dd><ul class="breatheparameterlist first last">
<li><tt class="first docutils literal"><span class="pre">system</span></tt> - <p>enum to be converted into string </p>
</li>
</ul>
</dd>
</dl>
</p>
</p>
</div></blockquote>
</div></blockquote>
</div></blockquote>
<div class="line-block" id="zincscenefilterid_8h">
<div class="line"><em>file</em> <strong>scenefilterid.h</strong></div>
</div>
<blockquote>
<div><p></p>
<p></p>
<em>Typedefs</em><blockquote>
<div><p><span class="target" id="zincscenefilterid_8h_1a7a796a33412fa6b1de8a75df4558d269"></span>typedef struct cmzn_scenefiltermodule * <strong>cmzn_scenefiltermodule_id</strong></p>
<blockquote>
<div><p></p>
<p></p>
</div></blockquote>
<p><span class="target" id="zincscenefilterid_8h_1a14e29b3f11ab0a92fca82eb4f09bb896"></span>typedef struct cmzn_scenefilter * <strong>cmzn_scenefilter_id</strong></p>
<blockquote>
<div><p></p>
<p></p>
</div></blockquote>
<p><span class="target" id="zincscenefilterid_8h_1af65bf54950747133993bc9e6ae0b17ac"></span>typedef struct cmzn_scenefilter_operator* <strong>cmzn_scenefilter_operator_id</strong></p>
<blockquote>
<div><p></p>
<p></p>
</div></blockquote>
</div></blockquote>
</div></blockquote>
<div class="line-block" id="zincsceneid_8h">
<div class="line"><em>file</em> <strong>sceneid.h</strong></div>
</div>
<blockquote>
<div><p></p>
<p></p>
<em>Typedefs</em><blockquote>
<div><p><span class="target" id="zincsceneid_8h_1a7d4cf13b020e47c576caafe09963e9ae"></span>typedef struct cmzn_scene * <strong>cmzn_scene_id</strong></p>
<blockquote>
<div><p></p>
<p></p>
</div></blockquote>
</div></blockquote>
</div></blockquote>
<div class="line-block" id="zincscenepickerid_8h">
<div class="line"><em>file</em> <strong>scenepickerid.h</strong></div>
</div>
<blockquote>
<div><p></p>
<p></p>
<em>Typedefs</em><blockquote>
<div><p><span class="target" id="zincscenepickerid_8h_1a1f1c531468456cde2481d3aa854634d0"></span>typedef struct cmzn_scenepicker * <strong>cmzn_scenepicker_id</strong></p>
<blockquote>
<div><p></p>
<p></p>
</div></blockquote>
</div></blockquote>
</div></blockquote>
<div class="line-block" id="zincsceneviewerid_8h">
<div class="line"><em>file</em> <strong>sceneviewerid.h</strong></div>
</div>
<blockquote>
<div><p></p>
<p></p>
<em>Typedefs</em><blockquote>
<div><p><span class="target" id="zincsceneviewerid_8h_1a3663a4437e2b6252d7bb66a0bf7cee5c"></span>typedef struct cmzn_sceneviewermodule * <strong>cmzn_sceneviewermodule_id</strong></p>
<blockquote>
<div><p></p>
<p></p>
</div></blockquote>
<p><span class="target" id="zincsceneviewerid_8h_1a6712c76776db4c7a987d2317af973a67"></span>typedef struct cmzn_sceneviewer * <strong>cmzn_sceneviewer_id</strong></p>
<blockquote>
<div><p></p>
<p></p>
</div></blockquote>
<p><span class="target" id="zincsceneviewerid_8h_1ae5d1515f5e0031f6c05114a5c1f17115"></span>typedef struct cmzn_sceneviewernotifier * <strong>cmzn_sceneviewernotifier_id</strong></p>
<blockquote>
<div><p></p>
<p></p>
</div></blockquote>
<p><span class="target" id="zincsceneviewerid_8h_1a7987153f9398fc0afd6a7e0d8ed0cd50"></span>typedef struct cmzn_sceneviewerevent * <strong>cmzn_sceneviewerevent_id</strong></p>
<blockquote>
<div><p></p>
<p></p>
</div></blockquote>
<p><span class="target" id="zincsceneviewerid_8h_1a3ae72ec3c5ab22b887dc256c00827842"></span>typedef void(* <strong>cmzn_sceneviewernotifier_callback_function</strong>)(cmzn_sceneviewerevent_id event, void *client_data)</p>
<blockquote>
<div><p></p>
<p></p>
</div></blockquote>
<p><span class="target" id="zincsceneviewerid_8h_1aaa0b23c5d95cad259956439821913540"></span>typedef int <strong>cmzn_sceneviewerevent_change_flags</strong></p>
<blockquote>
<div><p></p>
<p></p>
</div></blockquote>
</div></blockquote>
<em>Enums</em><blockquote>
<div><p><span class="target" id="zincsceneviewerid_8h_1a931edae96c3d4b317f308e42cc3fa142"></span><strong>cmzn_sceneviewer_blending_mode enum</strong></p>
<blockquote>
<div><p></p>
<p>Scene viewer GL blending mode. </p>
<p><em>Values:</em></p>
<ul class="breatheenumvalues">
<li><tt class="first docutils literal"><span class="pre">CMZN_SCENEVIEWER_BLENDING_MODE_INVALID</span></tt> - </li>
<li><tt class="first docutils literal"><span class="pre">CMZN_SCENEVIEWER_BLENDING_MODE_NORMAL</span></tt> - <p>src=GL_SRC_ALPHA and dest=GL_ONE_MINUS_SRC_ALPHA </p>
</li>
<li><tt class="first docutils literal"><span class="pre">CMZN_SCENEVIEWER_BLENDING_MODE_NONE</span></tt> - </li>
<li><tt class="first docutils literal"><span class="pre">CMZN_SCENEVIEWER_BLENDING_MODE_TRUE_ALPHA</span></tt> - <p>Available for OpenGL version 1.4 and above: src=GL_SRC_ALPHA and dest=GL_ONE_MINUS_SRC_ALPHA for rgb, src=GL_ONE and dest=GL_ONE_MINUS_SRC_ALPHA for alpha, which results in the correct final alpha value in a saved image. </p>
</li>
</ul>
</div></blockquote>
<p><span class="target" id="zincsceneviewerid_8h_1a761fc878126f2a534d169ecdb5f1f0e7"></span><strong>cmzn_sceneviewer_buffering_mode enum</strong></p>
<blockquote>
<div><p></p>
<p>Describes the buffering mode of the scene viewer. A DOUBLE_BUFFER allows the graphics to be drawn offscreen before being displayed all at once, reducing the apparent flicker. A SINGLE_BUFFER may allow you a greater colour depth or other features unavailable on a single buffer scene viewer. Secifying ANY_BUFFER_MODE will mean that with SINGLE_BUFFER or DOUBLE_BUFFER mode may be selected depending on the other requirements of the scene viewer. The special modes RENDER_OFFSCREEN_AND_COPY and RENDER_OFFSCREEN_AND_BLEND are used when an OpenGL context cannot be activated directly on the supplied window, such as when the graphics are to be composited by an external program. These are currently only implemeneted for winapi. The graphics will be drawn offscreen and only rendered on screen when requested, such as with the cmzn_sceneviewer_handle_windows_event. The COPY version will overwrite any existing pixels when drawing and the BLEND version will use the alpha channel of the rendered scene to blend itself with the existing pixels. </p>
<p><em>Values:</em></p>
<ul class="breatheenumvalues">
<li><tt class="first docutils literal"><span class="pre">CMZN_SCENEVIEWER_BUFFERING_MODE_INVALID</span></tt> - </li>
<li><tt class="first docutils literal"><span class="pre">CMZN_SCENEVIEWER_BUFFERING_MODE_DEFAULT</span></tt> - </li>
<li><tt class="first docutils literal"><span class="pre">CMZN_SCENEVIEWER_BUFFERING_MODE_SINGLE</span></tt> - </li>
<li><tt class="first docutils literal"><span class="pre">CMZN_SCENEVIEWER_BUFFERING_MODE_DOUBLE</span></tt> - </li>
<li><tt class="first docutils literal"><span class="pre">CMZN_SCENEVIEWER_BUFFERING_MODE_RENDER_OFFSCREEN_AND_COPY</span></tt> - </li>
<li><tt class="first docutils literal"><span class="pre">CMZN_SCENEVIEWER_BUFFERING_MODE_RENDER_OFFSCREEN_AND_BLEND</span></tt> - </li>
</ul>
</div></blockquote>
<p><span class="target" id="zincsceneviewerid_8h_1a877fcb49fc0624d0bb39f3162c6bf25a"></span><strong>cmzn_sceneviewer_interact_mode enum</strong></p>
<blockquote>
<div><p></p>
<p>Controls the way the mouse and keyboard are used to interact with the scene viewer. </p>
<p><em>Values:</em></p>
<ul class="breatheenumvalues">
<li><tt class="first docutils literal"><span class="pre">CMZN_SCENEVIEWER_INTERACT_MODE_INVALID</span></tt> - </li>
<li><tt class="first docutils literal"><span class="pre">CMZN_SCENEVIEWER_INTERACT_MODE_STANDARD</span></tt> - <p>CMZN_SCENEVIEWER_INTERACT_MODE_STANDARD is the traditional cmgui mode. Rotate: Left mouse button Translate: Middle mouse button Zoom: Right mouse button </p>
</li>
<li><tt class="first docutils literal"><span class="pre">CMZN_SCENEVIEWER_INTERACT_MODE_2D</span></tt> - <p>CMZN_SCENEVIEWER_INTERACT_MODE_2D is a mode more suitable for 2D use Translate: Left mouse button Rotate: Middle mouse button Zoom: Right mouse button </p>
</li>
</ul>
</div></blockquote>
<p><span class="target" id="zincsceneviewerid_8h_1ae954821588f779f7aab6aef09c47729e"></span><strong>cmzn_sceneviewer_projection_mode enum</strong></p>
<blockquote>
<div><p></p>
<p>Specifies the sort of projection matrix used to render the 3D scene. </p>
<p><em>Values:</em></p>
<ul class="breatheenumvalues">
<li><tt class="first docutils literal"><span class="pre">CMZN_SCENEVIEWER_PROJECTION_MODE_INVALID</span></tt> - </li>
<li><tt class="first docutils literal"><span class="pre">CMZN_SCENEVIEWER_PROJECTION_MODE_PARALLEL</span></tt> - </li>
<li><tt class="first docutils literal"><span class="pre">CMZN_SCENEVIEWER_PROJECTION_MODE_PERSPECTIVE</span></tt> - </li>
</ul>
</div></blockquote>
<p><span class="target" id="zincsceneviewerid_8h_1a5b56ab4307f6612065205f720ca1ffe3"></span><strong>cmzn_sceneviewer_stereo_mode enum</strong></p>
<blockquote>
<div><p></p>
<p>Specifies whether a STEREO capable scene viewer is required. This will have to work in cooperation with your window manager and hardware. </p>
<p><em>Values:</em></p>
<ul class="breatheenumvalues">
<li><tt class="first docutils literal"><span class="pre">CMZN_SCENEVIEWER_STEREO_MODE_INVALID</span></tt> - </li>
<li><tt class="first docutils literal"><span class="pre">CMZN_SCENEVIEWER_STEREO_MODE_DEFAULT</span></tt> - <p>either STEREO or MONO depending on other scene viewer requirements </p>
</li>
<li><tt class="first docutils literal"><span class="pre">CMZN_SCENEVIEWER_STEREO_MODE_MONO</span></tt> - <p>Normal 2-D Monoscopic display </p>
</li>
<li><tt class="first docutils literal"><span class="pre">CMZN_SCENEVIEWER_STEREO_MODE_STEREO</span></tt> - <p>Stereoscopic display </p>
</li>
</ul>
</div></blockquote>
<p><span class="target" id="zincsceneviewerid_8h_1ad2f1e5534a0cf73adc0ab36e98331572"></span><strong>cmzn_sceneviewer_transparency_mode enum</strong></p>
<blockquote>
<div><p></p>
<p>Controls the way partially transparent objects are rendered in scene viewer. </p>
<p><em>Values:</em></p>
<ul class="breatheenumvalues">
<li><tt class="first docutils literal"><span class="pre">CMZN_SCENEVIEWER_TRANSPARENCY_MODE_INVALID</span></tt><tt class="docutils literal"> <span class="pre">=</span> <span class="pre">=</span> <span class="pre">0</span></tt> - </li>
<li><tt class="first docutils literal"><span class="pre">CMZN_SCENEVIEWER_TRANSPARENCY_MODE_FAST</span></tt><tt class="docutils literal"> <span class="pre">=</span> <span class="pre">=</span> <span class="pre">1</span></tt> - <p>CMZN_CMZN_SCENEVIEWER_TRANSPARENCY_MODE_FAST just includes transparent objects in the normal render, this causes them to obscure other objects behind if they are drawn first. </p>
</li>
<li><tt class="first docutils literal"><span class="pre">CMZN_SCENEVIEWER_TRANSPARENCY_MODE_SLOW</span></tt><tt class="docutils literal"> <span class="pre">=</span> <span class="pre">=</span> <span class="pre">2</span></tt> - <p>CMZN_CMZN_SCENEVIEWER_TRANSPARENCY_MODE_SLOW puts out all the opaque geometry first and then ignores the depth test while drawing all partially transparent objects, this ensures everything is drawn but multiple layers of transparency will always draw on top of each other which means a surface that is behind another may be drawn over the top of one that is supposed to be in front. </p>
</li>
<li><tt class="first docutils literal"><span class="pre">CMZN_SCENEVIEWER_TRANSPARENCY_MODE_ORDER_INDEPENDENT</span></tt><tt class="docutils literal"> <span class="pre">=</span> <span class="pre">=</span> <span class="pre">3</span></tt> - <p>CMZN_CMZN_SCENEVIEWER_TRANSPARENCY_MODE_ORDER_INDEPENDENT uses some Nvidia extensions to implement a full back to front perl pixel fragment sort correctly rendering transparency with a small number of passes, specified by &#8220;transparency layers&#8221;. This uses all the texturing resources of the current Nvidia hardware and so no materials used in the scene can contain textures. </p>
</li>
</ul>
</div></blockquote>
<p><span class="target" id="zincsceneviewerid_8h_1ab7e976cd76924919f6328723bc0dce20"></span><strong>cmzn_sceneviewer_viewport_mode enum</strong></p>
<blockquote>
<div><p></p>
<p>Specifies the behaviour of the NDC coordinates with respect to the size of the viewport. </p>
<p><em>Values:</em></p>
<ul class="breatheenumvalues">
<li><tt class="first docutils literal"><span class="pre">CMZN_SCENEVIEWER_VIEWPORT_MODE_INVALID</span></tt> - </li>
<li><tt class="first docutils literal"><span class="pre">CMZN_SCENEVIEWER_VIEWPORT_MODE_ABSOLUTE</span></tt> - <p>viewport_pixels_per_unit values are used to give and exact mapping from user coordinates to pixels. </p>
</li>
<li><tt class="first docutils literal"><span class="pre">CMZN_SCENEVIEWER_VIEWPORT_MODE_RELATIVE</span></tt> - <p>the intended viewing volume is made as large as possible in the physical viewport while maintaining the aspect ratio from NDC_width and NDC_height. </p>
</li>
<li><tt class="first docutils literal"><span class="pre">CMZN_SCENEVIEWER_VIEWPORT_MODE_DISTORTING_RELATIVE</span></tt> - <p>the intended viewing volume is made as large as possible in the physical viewport, and the aspect ratio may be changed. </p>
</li>
</ul>
</div></blockquote>
<p><span class="target" id="zincsceneviewerid_8h_1a4a401fbe47e7d725c1a837bc8f3b51bf"></span><strong>cmzn_sceneviewerevent_change_flag enum</strong></p>
<blockquote>
<div><p></p>
<p>Bit flags summarising changes to fields in the field module. </p>
<p><em>Values:</em></p>
<ul class="breatheenumvalues">
<li><tt class="first docutils literal"><span class="pre">CMZN_SCENEVIEWEREVENT_CHANGE_FLAG_NONE</span></tt><tt class="docutils literal"> <span class="pre">=</span> <span class="pre">=</span> <span class="pre">0</span></tt> - <p>object not changed </p>
</li>
<li><tt class="first docutils literal"><span class="pre">CMZN_SCENEVIEWEREVENT_CHANGE_FLAG_REPAINT_REQUIRED</span></tt><tt class="docutils literal"> <span class="pre">=</span> <span class="pre">=</span> <span class="pre">1</span></tt> - <p>repaint required evenet </p>
</li>
<li><tt class="first docutils literal"><span class="pre">CMZN_SCENEVIEWEREVENT_CHANGE_FLAG_TRANSFORM</span></tt><tt class="docutils literal"> <span class="pre">=</span> <span class="pre">=</span> <span class="pre">2</span></tt> - <p>sceneviewer receive input </p>
</li>
<li><tt class="first docutils literal"><span class="pre">CMZN_SCENEVIEWEREVENT_CHANGE_FLAG_FINAL</span></tt><tt class="docutils literal"> <span class="pre">=</span> <span class="pre">=</span> <span class="pre">32768</span></tt> - <p>sceneviewer is currently being destroyed </p>
</li>
</ul>
</div></blockquote>
</div></blockquote>
</div></blockquote>
<div class="line-block" id="zincsceneviewerinputid_8h">
<div class="line"><em>file</em> <strong>sceneviewerinputid.h</strong></div>
</div>
<blockquote>
<div><p></p>
<p></p>
<em>Typedefs</em><blockquote>
<div><p><span class="target" id="zincsceneviewerinputid_8h_1a9b8d4da802863650568b66c4effb1510"></span>typedef struct cmzn_sceneviewerinput * <strong>cmzn_sceneviewerinput_id</strong></p>
<blockquote>
<div><p></p>
<p></p>
</div></blockquote>
<p><span class="target" id="zincsceneviewerinputid_8h_1a971a607dca193a43513d31bd780e9cc9"></span>typedef int <strong>cmzn_sceneviewerinput_modifier_flags</strong></p>
<blockquote>
<div><p></p>
<p>Type for passing logical OR of #cmzn_sceneviewerinput_modifier_flag </p>
</div></blockquote>
</div></blockquote>
<em>Enums</em><blockquote>
<div><p><span class="target" id="zincsceneviewerinputid_8h_1a41edaf2e5dd73b89acb8d1a60f53c09e"></span><strong>cmzn_sceneviewerinput_button_type enum</strong></p>
<blockquote>
<div><p></p>
<p>The type of scene viewer input button. </p>
<p><em>Values:</em></p>
<ul class="breatheenumvalues">
<li><tt class="first docutils literal"><span class="pre">CMZN_SCENEVIEWERINPUT_BUTTON_TYPE_INVALID</span></tt><tt class="docutils literal"> <span class="pre">=</span> <span class="pre">=</span> <span class="pre">-1</span></tt> - </li>
<li><tt class="first docutils literal"><span class="pre">CMZN_SCENEVIEWERINPUT_BUTTON_TYPE_LEFT</span></tt> - </li>
<li><tt class="first docutils literal"><span class="pre">CMZN_SCENEVIEWERINPUT_BUTTON_TYPE_MIDDLE</span></tt> - </li>
<li><tt class="first docutils literal"><span class="pre">CMZN_SCENEVIEWERINPUT_BUTTON_TYPE_RIGHT</span></tt> - </li>
<li><tt class="first docutils literal"><span class="pre">CMZN_SCENEVIEWERINPUT_BUTTON_TYPE_SCROLL_DOWN</span></tt> - </li>
<li><tt class="first docutils literal"><span class="pre">CMZN_SCENEVIEWERINPUT_BUTTON_TYPE_SCROLL_UP</span></tt> - </li>
</ul>
</div></blockquote>
<p><span class="target" id="zincsceneviewerinputid_8h_1a4c93874bd92f6fbf8eb0f815c5c74fbe"></span><strong>cmzn_sceneviewerinput_event_type enum</strong></p>
<blockquote>
<div><p></p>
<p>Specifies the scene viewer input event type. </p>
<p><em>Values:</em></p>
<ul class="breatheenumvalues">
<li><tt class="first docutils literal"><span class="pre">CMZN_SCENEVIEWERINPUT_EVENT_TYPE_INVALID</span></tt> - </li>
<li><tt class="first docutils literal"><span class="pre">CMZN_SCENEVIEWERINPUT_EVENT_TYPE_MOTION_NOTIFY</span></tt> - </li>
<li><tt class="first docutils literal"><span class="pre">CMZN_SCENEVIEWERINPUT_EVENT_TYPE_BUTTON_PRESS</span></tt> - </li>
<li><tt class="first docutils literal"><span class="pre">CMZN_SCENEVIEWERINPUT_EVENT_TYPE_BUTTON_RELEASE</span></tt> - </li>
<li><tt class="first docutils literal"><span class="pre">CMZN_SCENEVIEWERINPUT_EVENT_TYPE_KEY_PRESS</span></tt> - </li>
<li><tt class="first docutils literal"><span class="pre">CMZN_SCENEVIEWERINPUT_EVENT_TYPE_KEY_RELEASE</span></tt> - </li>
</ul>
</div></blockquote>
<p><span class="target" id="zincsceneviewerinputid_8h_1ac390f58bc390a2ffcf069fe3e68e3ccc"></span><strong>cmzn_sceneviewerinput_modifier_flag enum</strong></p>
<blockquote>
<div><p></p>
<p>Specifies the scene viewer input modifier flags. </p>
<p><em>Values:</em></p>
<ul class="breatheenumvalues">
<li><tt class="first docutils literal"><span class="pre">CMZN_SCENEVIEWERINPUT_MODIFIER_FLAG_NONE</span></tt><tt class="docutils literal"> <span class="pre">=</span> <span class="pre">=</span> <span class="pre">0</span></tt> - </li>
<li><tt class="first docutils literal"><span class="pre">CMZN_SCENEVIEWERINPUT_MODIFIER_FLAG_SHIFT</span></tt><tt class="docutils literal"> <span class="pre">=</span> <span class="pre">=</span> <span class="pre">1</span></tt> - </li>
<li><tt class="first docutils literal"><span class="pre">CMZN_SCENEVIEWERINPUT_MODIFIER_FLAG_CONTROL</span></tt><tt class="docutils literal"> <span class="pre">=</span> <span class="pre">=</span> <span class="pre">2</span></tt> - </li>
<li><tt class="first docutils literal"><span class="pre">CMZN_SCENEVIEWERINPUT_MODIFIER_FLAG_ALT</span></tt><tt class="docutils literal"> <span class="pre">=</span> <span class="pre">=</span> <span class="pre">4</span></tt> - </li>
<li><tt class="first docutils literal"><span class="pre">CMZN_SCENEVIEWERINPUT_MODIFIER_FLAG_BUTTON1</span></tt><tt class="docutils literal"> <span class="pre">=</span> <span class="pre">=</span> <span class="pre">8</span></tt> - </li>
</ul>
</div></blockquote>
</div></blockquote>
</div></blockquote>
<div class="line-block" id="zincselectionid_8h">
<div class="line"><em>file</em> <strong>selectionid.h</strong></div>
</div>
<blockquote>
<div><p></p>
<p></p>
<em>Typedefs</em><blockquote>
<div><p><span class="target" id="zincselectionid_8h_1a9832bff01e6d4d8d9da42e15056dfebb"></span>typedef struct cmzn_selectionnotifier * <strong>cmzn_selectionnotifier_id</strong></p>
<blockquote>
<div><p></p>
<p></p>
</div></blockquote>
<p><span class="target" id="zincselectionid_8h_1a77b0c9020420f6adcfe66e615d286f18"></span>typedef struct cmzn_selectionevent * <strong>cmzn_selectionevent_id</strong></p>
<blockquote>
<div><p></p>
<p></p>
</div></blockquote>
<p><span class="target" id="zincselectionid_8h_1a244517ed760bf8ffe1180bf4c065ffde"></span>typedef void(* <strong>cmzn_selectionnotifier_callback_function</strong>)(cmzn_selectionevent_id selectionevent, void *client_data)</p>
<blockquote>
<div><p></p>
<p></p>
</div></blockquote>
<p><span class="target" id="zincselectionid_8h_1aaa1f299c17b0b7af7674724dde912c82"></span>typedef int <strong>cmzn_selectionevent_change_flags</strong></p>
<blockquote>
<div><p></p>
<p>Type for passing logical OR of #cmzn_selectionevent_change_flag </p>
</div></blockquote>
</div></blockquote>
<em>Enums</em><blockquote>
<div><p><span class="target" id="zincselectionid_8h_1a3eb6318244bf8d2976919fa57144a16c"></span><strong>cmzn_selectionevent_change_flag enum</strong></p>
<blockquote>
<div><p></p>
<p>Bit flags summarising changes to the selection. </p>
<p><em>Values:</em></p>
<ul class="breatheenumvalues">
<li><tt class="first docutils literal"><span class="pre">CMZN_SELECTIONEVENT_CHANGE_FLAG_NONE</span></tt><tt class="docutils literal"> <span class="pre">=</span> <span class="pre">=</span> <span class="pre">0</span></tt> - </li>
<li><tt class="first docutils literal"><span class="pre">CMZN_SELECTIONEVENT_CHANGE_FLAG_ADD</span></tt><tt class="docutils literal"> <span class="pre">=</span> <span class="pre">=</span> <span class="pre">1</span></tt> - <p>one or more objects added </p>
</li>
<li><tt class="first docutils literal"><span class="pre">CMZN_SELECTIONEVENT_CHANGE_FLAG_REMOVE</span></tt><tt class="docutils literal"> <span class="pre">=</span> <span class="pre">=</span> <span class="pre">2</span></tt> - <p>one or more objects removed </p>
</li>
<li><tt class="first docutils literal"><span class="pre">CMZN_SELECTIONEVENT_CHANGE_FLAG_FINAL</span></tt><tt class="docutils literal"> <span class="pre">=</span> <span class="pre">=</span> <span class="pre">32768</span></tt> - <p>final notification: owning object destroyed </p>
</li>
</ul>
</div></blockquote>
</div></blockquote>
</div></blockquote>
<div class="line-block" id="zincspectrumid_8h">
<div class="line"><em>file</em> <strong>spectrumid.h</strong></div>
</div>
<blockquote>
<div><p></p>
<p></p>
<em>Typedefs</em><blockquote>
<div><p><span class="target" id="zincspectrumid_8h_1afa340500a8738885bc8f18a7db8d66cb"></span>typedef struct cmzn_spectrumcomponent * <strong>cmzn_spectrumcomponent_id</strong></p>
<blockquote>
<div><p></p>
<p></p>
</div></blockquote>
<p><span class="target" id="zincspectrumid_8h_1a312caeca3b86fd1b2429bf9c64f8d970"></span>typedef struct cmzn_spectrum * <strong>cmzn_spectrum_id</strong></p>
<blockquote>
<div><p></p>
<p></p>
</div></blockquote>
<p><span class="target" id="zincspectrumid_8h_1a263e089171ac3081dffa88850ae144a1"></span>typedef struct cmzn_spectrummodule * <strong>cmzn_spectrummodule_id</strong></p>
<blockquote>
<div><p></p>
<p></p>
</div></blockquote>
</div></blockquote>
<em>Enums</em><blockquote>
<div><p><span class="target" id="zincspectrumid_8h_1a75a06a26a9cbaa000ed44313d514a6fc"></span><strong>cmzn_spectrumcomponent_scale_type enum</strong></p>
<blockquote>
<div><p></p>
<p></p>
<p><em>Values:</em></p>
<ul class="breatheenumvalues">
<li><tt class="first docutils literal"><span class="pre">CMZN_SPECTRUMCOMPONENT_SCALE_TYPE_INVALID</span></tt><tt class="docutils literal"> <span class="pre">=</span> <span class="pre">=</span> <span class="pre">0</span></tt> - </li>
<li><tt class="first docutils literal"><span class="pre">CMZN_SPECTRUMCOMPONENT_SCALE_TYPE_LINEAR</span></tt><tt class="docutils literal"> <span class="pre">=</span> <span class="pre">=</span> <span class="pre">1</span></tt> - <p>default scale type The colour value on spectrum will be interpolated linearly in range when this mode is chosen. </p>
</li>
<li><tt class="first docutils literal"><span class="pre">CMZN_SPECTRUMCOMPONENT_SCALE_TYPE_LOG</span></tt><tt class="docutils literal"> <span class="pre">=</span> <span class="pre">=</span> <span class="pre">2</span></tt> - </li>
</ul>
</div></blockquote>
<p><span class="target" id="zincspectrumid_8h_1afd8b8d17b2c054d9746617355d336209"></span><strong>cmzn_spectrumcomponent_colour_mapping_type enum</strong></p>
<blockquote>
<div><p></p>
<p>Colour mapping mode for specctrum component. Appearances of these mappings can ne alterd by the various APIs provided in spectrum and spectrum components APIs. </p>
<p><em>Values:</em></p>
<ul class="breatheenumvalues">
<li><tt class="first docutils literal"><span class="pre">CMZN_SPECTRUMCOMPONENT_COLOUR_MAPPING_TYPE_INVALID</span></tt><tt class="docutils literal"> <span class="pre">=</span> <span class="pre">=</span> <span class="pre">0</span></tt> - </li>
<li><tt class="first docutils literal"><span class="pre">CMZN_SPECTRUMCOMPONENT_COLOUR_MAPPING_TYPE_ALPHA</span></tt><tt class="docutils literal"> <span class="pre">=</span> <span class="pre">=</span> <span class="pre">1</span></tt> - <p>This colour mapping alters the alpha (transparency value) for primitives. This mode does not alter the rgb value and should be used with other spectrum component or with overwrite_material set to 0 in spectrum. </p>
</li>
<li><tt class="first docutils literal"><span class="pre">CMZN_SPECTRUMCOMPONENT_COLOUR_MAPPING_TYPE_BANDED</span></tt><tt class="docutils literal"> <span class="pre">=</span> <span class="pre">=</span> <span class="pre">2</span></tt> - <p>This colour mapping create non-coloured strips/bands. appearances can be altered by value of CMZN_SPECTRUMCOMPONENT_ATTRIBUTE_BANDED_RATIO and value of number of bands. This mode does not alter the rgb value except for the bands and should be used with other spectrum component or with overwrite_material set to 0 in spectrum. </p>
</li>
<li><tt class="first docutils literal"><span class="pre">CMZN_SPECTRUMCOMPONENT_COLOUR_MAPPING_TYPE_BLUE</span></tt><tt class="docutils literal"> <span class="pre">=</span> <span class="pre">=</span> <span class="pre">3</span></tt> - <p>This colour mapping create a colour spectrum from black to blue. </p>
</li>
<li><tt class="first docutils literal"><span class="pre">CMZN_SPECTRUMCOMPONENT_COLOUR_MAPPING_TYPE_GREEN</span></tt><tt class="docutils literal"> <span class="pre">=</span> <span class="pre">=</span> <span class="pre">4</span></tt> - <p>This colour mapping create a colour spectrum from black to green. </p>
</li>
<li><tt class="first docutils literal"><span class="pre">CMZN_SPECTRUMCOMPONENT_COLOUR_MAPPING_TYPE_MONOCHROME</span></tt><tt class="docutils literal"> <span class="pre">=</span> <span class="pre">=</span> <span class="pre">5</span></tt> - <p>This colour mapping create a monochrome (grey scale) spectrum. </p>
</li>
<li><tt class="first docutils literal"><span class="pre">CMZN_SPECTRUMCOMPONENT_COLOUR_MAPPING_TYPE_RAINBOW</span></tt><tt class="docutils literal"> <span class="pre">=</span> <span class="pre">=</span> <span class="pre">6</span></tt> - <p>default colour mapping type This colour mapping create a spectrum from blue to red, similar to the colour of a rainbow. </p>
</li>
<li><tt class="first docutils literal"><span class="pre">CMZN_SPECTRUMCOMPONENT_COLOUR_MAPPING_TYPE_RED</span></tt><tt class="docutils literal"> <span class="pre">=</span> <span class="pre">=</span> <span class="pre">7</span></tt> - <p>This colour mapping create a colour spectrum from black to red. </p>
</li>
<li><tt class="first docutils literal"><span class="pre">CMZN_SPECTRUMCOMPONENT_COLOUR_MAPPING_TYPE_STEP</span></tt><tt class="docutils literal"> <span class="pre">=</span> <span class="pre">=</span> <span class="pre">8</span></tt> - <p>This colour mapping create a spectrum with only two colours, red and green. The boundary between red and green can be altered by CMZN_SPECTRUMCOMPONENT_ATTRIBUTE_STEP_VALUE. </p>
</li>
<li><tt class="first docutils literal"><span class="pre">CMZN_SPECTRUMCOMPONENT_COLOUR_MAPPING_TYPE_WHITE_TO_BLUE</span></tt><tt class="docutils literal"> <span class="pre">=</span> <span class="pre">=</span> <span class="pre">9</span></tt> - <p>This colour mapping create a colour spectrum from black to blue. </p>
</li>
<li><tt class="first docutils literal"><span class="pre">CMZN_SPECTRUMCOMPONENT_COLOUR_MAPPING_TYPE_WHITE_TO_RED</span></tt><tt class="docutils literal"> <span class="pre">=</span> <span class="pre">=</span> <span class="pre">10</span></tt> - <p>This colour mapping create a colour spectrum from black to red. </p>
</li>
<li><tt class="first docutils literal"><span class="pre">CMZN_SPECTRUMCOMPONENT_COLOUR_MAPPING_TYPE_WHITE_TO_GREEN</span></tt><tt class="docutils literal"> <span class="pre">=</span> <span class="pre">=</span> <span class="pre">11</span></tt> - <p>This colour mapping create a colour spectrum from black to green. </p>
</li>
</ul>
</div></blockquote>
</div></blockquote>
</div></blockquote>
<div class="line-block" id="zincstreamid_8h">
<div class="line"><em>file</em> <strong>streamid.h</strong></div>
</div>
<blockquote>
<div><p></p>
<p></p>
<em>Typedefs</em><blockquote>
<div><p><span class="target" id="zincstreamid_8h_1a119ca788a2069b27c46bfe2c4b08b277"></span>typedef struct cmzn_streaminformation * <strong>cmzn_streaminformation_id</strong></p>
<blockquote>
<div><p></p>
<p></p>
</div></blockquote>
<p><span class="target" id="zincstreamid_8h_1aaba2250f1b1293d1c6f904b1f02c5c2f"></span>typedef struct cmzn_streamresource * <strong>cmzn_streamresource_id</strong></p>
<blockquote>
<div><p></p>
<p></p>
</div></blockquote>
<p><span class="target" id="zincstreamid_8h_1a5f7b13ca59e311a7fd49d3b5fb59a92f"></span>typedef struct cmzn_streamresource_file * <strong>cmzn_streamresource_file_id</strong></p>
<blockquote>
<div><p></p>
<p></p>
</div></blockquote>
<p><span class="target" id="zincstreamid_8h_1a4b841f2acec0e22700e2eccfe5d25b82"></span>typedef struct cmzn_streamresource_memory * <strong>cmzn_streamresource_memory_id</strong></p>
<blockquote>
<div><p></p>
<p></p>
</div></blockquote>
</div></blockquote>
<em>Enums</em><blockquote>
<div><p><span class="target" id="zincstreamid_8h_1aa7af294960738d268b60727a1423e892"></span><strong>cmzn_streaminformation_data_compression_type enum</strong></p>
<blockquote>
<div><p></p>
<p></p>
<p><em>Values:</em></p>
<ul class="breatheenumvalues">
<li><tt class="first docutils literal"><span class="pre">CMZN_STREAMINFORMATION_DATA_COMPRESSION_TYPE_INVALID</span></tt><tt class="docutils literal"> <span class="pre">=</span> <span class="pre">=</span> <span class="pre">0</span></tt> - </li>
<li><tt class="first docutils literal"><span class="pre">CMZN_STREAMINFORMATION_DATA_COMPRESSION_TYPE_DEFAULT</span></tt><tt class="docutils literal"> <span class="pre">=</span> <span class="pre">=</span> <span class="pre">1</span></tt> - <p>default data compression This is the default compression for streamresource. When compression type for streamresource is set to default, the DATA_COMPRESSION_TYPE set on the owning streaminformation will be used. This type cannot be set for streaminformation. </p>
</li>
<li><tt class="first docutils literal"><span class="pre">CMZN_STREAMINFORMATION_DATA_COMPRESSION_TYPE_NONE</span></tt><tt class="docutils literal"> <span class="pre">=</span> <span class="pre">=</span> <span class="pre">2</span></tt> - <p>No data compression This is the default compression for streaminformation. This specifies the resource(s) to not have any type of compression. </p>
</li>
<li><tt class="first docutils literal"><span class="pre">CMZN_STREAMINFORMATION_DATA_COMPRESSION_TYPE_GZIP</span></tt><tt class="docutils literal"> <span class="pre">=</span> <span class="pre">=</span> <span class="pre">3</span></tt> - <p>Gzip data compression This specifies the resource(s) is compressed using gzip. This mode is supported in all region resource(s) and analyze image format. Analyze image format expects the resource(s) in a gzip compressed tar containing an analyze header file and analyze image file. </p>
</li>
<li><tt class="first docutils literal"><span class="pre">CMZN_STREAMINFORMATION_DATA_COMPRESSION_TYPE_BZIP2</span></tt><tt class="docutils literal"> <span class="pre">=</span> <span class="pre">=</span> <span class="pre">4</span></tt> - <p>Bzip2 data compression This specifies the resource(s) is compressed using bzip2. This mode is supported in all region resource(s)and analyze image format. Analyze image format expects the resource(s) in a bzip2 compressed tar containing analyze header file and analyze image file. </p>
</li>
</ul>
</div></blockquote>
</div></blockquote>
</div></blockquote>
<div class="line-block" id="zinctessellationid_8h">
<div class="line"><em>file</em> <strong>tessellationid.h</strong></div>
</div>
<blockquote>
<div><p></p>
<p></p>
<em>Typedefs</em><blockquote>
<div><p><span class="target" id="zinctessellationid_8h_1aeb3a42ec59e5644772497030a0939288"></span>typedef struct cmzn_tessellationmodule * <strong>cmzn_tessellationmodule_id</strong></p>
<blockquote>
<div><p></p>
<p></p>
</div></blockquote>
<p><span class="target" id="zinctessellationid_8h_1a45a2e62562e96c040af775b216152e27"></span>typedef struct cmzn_tessellation * <strong>cmzn_tessellation_id</strong></p>
<blockquote>
<div><p></p>
<p></p>
</div></blockquote>
</div></blockquote>
</div></blockquote>
<div class="line-block" id="zinctimekeeperid_8h">
<div class="line"><em>file</em> <strong>timekeeperid.h</strong></div>
</div>
<blockquote>
<div><p></p>
<p></p>
<em>Typedefs</em><blockquote>
<div><p><span class="target" id="zinctimekeeperid_8h_1ae3f57fc8813ef84e30c357fe757f33a8"></span>typedef struct cmzn_timekeeper * <strong>cmzn_timekeeper_id</strong></p>
<blockquote>
<div><p></p>
<p></p>
</div></blockquote>
<p><span class="target" id="zinctimekeeperid_8h_1acd3239a442d1fae491ed79b5a529a0ed"></span>typedef struct cmzn_timekeepermodule * <strong>cmzn_timekeepermodule_id</strong></p>
<blockquote>
<div><p></p>
<p></p>
</div></blockquote>
</div></blockquote>
<em>Enums</em><blockquote>
<div><p><span class="target" id="zinctimekeeperid_8h_1a147ee3bed7b89813cef8a8515634dd0c"></span><strong>cmzn_timekeeper_play_direction enum</strong></p>
<blockquote>
<div><p></p>
<p>FILE : timekeeperid.h </p>
<p><em>Values:</em></p>
<ul class="breatheenumvalues">
<li><tt class="first docutils literal"><span class="pre">CMZN_TIMEKEEPER_PLAY_DIRECTION_INVALID</span></tt><tt class="docutils literal"> <span class="pre">=</span> <span class="pre">=</span> <span class="pre">0</span></tt> - </li>
<li><tt class="first docutils literal"><span class="pre">CMZN_TIMEKEEPER_PLAY_DIRECTION_FORWARD</span></tt><tt class="docutils literal"> <span class="pre">=</span> <span class="pre">=</span> <span class="pre">1</span></tt> - </li>
<li><tt class="first docutils literal"><span class="pre">CMZN_TIMEKEEPER_PLAY_DIRECTION_REVERSE</span></tt><tt class="docutils literal"> <span class="pre">=</span> <span class="pre">=</span> <span class="pre">2</span></tt> - </li>
</ul>
</div></blockquote>
</div></blockquote>
</div></blockquote>
<div class="line-block" id="zinctimenotifierid_8h">
<div class="line"><em>file</em> <strong>timenotifierid.h</strong></div>
</div>
<blockquote>
<div><p></p>
<p></p>
<em>Typedefs</em><blockquote>
<div><p><span class="target" id="zinctimenotifierid_8h_1acb00e76b7ddc796c097370adcacd60c3"></span>typedef struct cmzn_timenotifier * <strong>cmzn_timenotifier_id</strong></p>
<blockquote>
<div><p></p>
<p></p>
</div></blockquote>
<p><span class="target" id="zinctimenotifierid_8h_1a76f55293f1d2766ed5899d6e757d8769"></span>typedef struct cmzn_timenotifierevent * <strong>cmzn_timenotifierevent_id</strong></p>
<blockquote>
<div><p></p>
<p></p>
</div></blockquote>
<p><span class="target" id="zinctimenotifierid_8h_1ae10017081a866b41d46aaca7f5e7a2cb"></span>typedef struct cmzn_timenotifier_regular * <strong>cmzn_timenotifier_regular_id</strong></p>
<blockquote>
<div><p></p>
<p></p>
</div></blockquote>
</div></blockquote>
</div></blockquote>
<div class="line-block" id="zinctimesequenceid_8h">
<div class="line"><em>file</em> <strong>timesequenceid.h</strong></div>
</div>
<blockquote>
<div><p></p>
<p></p>
<em>Typedefs</em><blockquote>
<div><p><span class="target" id="zinctimesequenceid_8h_1a3da6492f6a240c16a756246adc2b9732"></span>typedef struct cmzn_timesequence * <strong>cmzn_timesequence_id</strong></p>
<blockquote>
<div><p></p>
<p></p>
</div></blockquote>
</div></blockquote>
</div></blockquote>
<div class="line-block" id="zincdir_00574434cf22392bea4f9f61869a3ac9">
<div class="line"><em>dir</em> <strong>core/source/api</strong></div>
</div>
<blockquote>
<div><p></p>
<p></p>
</div></blockquote>
<div class="line-block" id="zincdir_0654f6d53fb74a709109d40c9c819a83">
<div class="line"><em>dir</em> <strong>core</strong></div>
</div>
<blockquote>
<div><p></p>
<p></p>
</div></blockquote>
<div class="line-block" id="zincdir_6128337b9c3415fe5dd72bb0da4426b1">
<div class="line"><em>dir</em> <strong>core/source</strong></div>
</div>
<blockquote>
<div><p></p>
<p></p>
</div></blockquote>
<div class="line-block" id="zincdir_b5c28dd3c008b5e6ca749f440a834d12">
<div class="line"><em>dir</em> <strong>core/source/api/zinc/types</strong></div>
</div>
<blockquote>
<div><p></p>
<p></p>
</div></blockquote>
<div class="line-block" id="zincdir_45a5c1c541f30615f2c4a21629ce1025">
<div class="line"><em>dir</em> <strong>core/source/api/zinc</strong></div>
</div>
<blockquote>
<div><p></p>
<p></p>
</div></blockquote>
</div>


          </div>
      </div>
    </div>
      <div class="botnav">
      
        <p>
        <a class="uplink" href="#">Contents</a>
        </p>

      </div>
            
		</div><!-- end #main -->

		<div id="sidebar">
<!--#include virtual="/software/zinclibrary/utility-peer-nav.txt" -->    
         <div id="toc">
          <h6><a href="#"><span>Zinc v3.0.0 tutorials</span></a></h6>
          <ul>
<li><a class="reference internal" href="#">Zinc API Documentation</a></li>
</ul>

        </div>
            <!--#include virtual="utility-download.txt" -->

		</div><!-- end #sidebar -->
		
	</article><!-- end .single-project -->
	
</section><!-- end #content -->

<!--#include virtual="/inc/footer.txt" -->
