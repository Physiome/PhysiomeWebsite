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
            
  <div class="section" id="tutorial-image-reader">
<h1>Tutorial: Image Reader<a class="headerlink" href="#tutorial-image-reader" title="Permalink to this headline">¶</a></h1>
<p>The Image Reader application is designed to illustrate how to read an image into an image field.</p>
<div class="section" id="overview">
<h2>Overview<a class="headerlink" href="#overview" title="Permalink to this headline">¶</a></h2>
<p>The Zinc library uses streams to read in data from disk or memory.  The image reader application shows
how to read in an image from disk using the Zinc library stream API.  The same process is followed when
reading an image in from memory, the only difference is the stream resource type that is used.</p>
<p>The souce code used in this tutorial is available from the <a class="reference external" href="https://svn.physiomeproject.org/svn/cmiss/zinc/bindings/examples/trunk/python/image_reader/">physiome project svn server</a>.</p>
</div>
<div class="section" id="the-code">
<h2>The Code<a class="headerlink" href="#the-code" title="Permalink to this headline">¶</a></h2>
<p>Here is the code for reading in an image from disk:</p>
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
38</pre></div></td><td class="code"><div class="highlight"><pre><span class="k">def</span> <span class="nf">main</span><span class="p">():</span>
    <span class="sd">&#39;&#39;&#39;</span>
<span class="sd">    The entry point for the application, handle application arguments.</span>
<span class="sd">    &#39;&#39;&#39;</span>
    <span class="c"># Create the context</span>
    <span class="n">context</span> <span class="o">=</span> <span class="n">Context</span><span class="p">(</span><span class="s">&quot;image&quot;</span><span class="p">)</span>
    
    <span class="c"># Name of the file we intend to read in.</span>
    <span class="n">image_name</span> <span class="o">=</span> <span class="s">&#39;drawing.png&#39;</span>
    
    <span class="c"># Get a handle to the root region</span>
    <span class="n">default_region</span> <span class="o">=</span> <span class="n">context</span><span class="o">.</span><span class="n">getDefaultRegion</span><span class="p">()</span>
    
    <span class="c"># The field module allows us to create a field image to </span>
    <span class="c"># store the image data into.</span>
    <span class="n">field_module</span> <span class="o">=</span> <span class="n">default_region</span><span class="o">.</span><span class="n">getFieldmodule</span><span class="p">()</span>
    
    <span class="c"># Create an image field, we don&#39;t specify the domain here for this</span>
    <span class="c"># field even though it is a source field.  A temporary xi source field</span>
    <span class="c"># is created for us.</span>
    <span class="n">image_field</span> <span class="o">=</span> <span class="n">field_module</span><span class="o">.</span><span class="n">createFieldImage</span><span class="p">()</span>
    <span class="n">image_field</span><span class="o">.</span><span class="n">setName</span><span class="p">(</span><span class="s">&#39;texture&#39;</span><span class="p">)</span>
    
    <span class="c"># Create a stream information object that we can use to read the </span>
    <span class="c"># image file from the disk</span>
    <span class="n">stream_information</span> <span class="o">=</span> <span class="n">image_field</span><span class="o">.</span><span class="n">createStreaminformationImage</span><span class="p">()</span>
    <span class="c"># Set the format for the image we want to read</span>
    <span class="n">stream_information</span><span class="o">.</span><span class="n">setFileFormat</span><span class="p">(</span><span class="n">stream_information</span><span class="o">.</span><span class="n">FILE_FORMAT_PNG</span><span class="p">)</span>
    <span class="c"># We are reading in a file from the local disk so our resource is a file.</span>
    <span class="n">stream_information</span><span class="o">.</span><span class="n">createStreamresourceFile</span><span class="p">(</span><span class="n">image_name</span><span class="p">)</span>
    
    <span class="c"># Actually read in the image file into the image field.</span>
    <span class="n">ret</span> <span class="o">=</span> <span class="n">image_field</span><span class="o">.</span><span class="n">read</span><span class="p">(</span><span class="n">stream_information</span><span class="p">)</span>
    <span class="k">if</span> <span class="n">ret</span> <span class="o">==</span> <span class="mi">1</span><span class="p">:</span> <span class="c"># CMISS_OK has  the literal value 1</span>
        <span class="k">print</span><span class="p">(</span><span class="s">&#39;Image successfully read into image field.&#39;</span><span class="p">)</span>
    <span class="k">else</span><span class="p">:</span>
        <span class="k">print</span><span class="p">(</span><span class="s">&#39;Error: failed to read image into image field.&#39;</span><span class="p">)</span>
        
</pre></div>
</td></tr></table></div>
<p><strong>Line 6</strong> creates the Zinc context we must create one of these to get any other objects from this context.</p>
<p>To create an image field we first must get the default region from the context (<strong>Line 12</strong>) and then
we can get the field module for that region (<strong>Line 16</strong>).  From the field module we can create any fields required, in our
case we want an image field.</p>
<p>An image field is created over a domain but if we don&#8217;t supply one the create image field method will construct
one for us.  The constructed domain will be over xi space [0-1]x[0-1]x[0-1] irrespective of the dimensionality of the
image data.  It is possible to construct a domain better suited for our image data but we will leave this for a later
tutorial.</p>
<p><strong>Line 21</strong> creates an image field and implicitly a domain for it.  <strong>Line 22</strong> sets the name of the image field to &#8216;texture&#8217;,
naming a field can be useful if we wish to find it by name later.</p>
<p>To read the data into the image field we need to create a stream information object which will hold all the information
required to read in the image.  <strong>Line 26</strong> creates the stream information object and <strong>line 28</strong> sets the image file format to png.</p>
<p>It is not absolutely necessary to set the image file format as some guesswork will take place if it is not set, although
reading of the image data will fail if the image file format can not be determined.  <strong>Line 30</strong> creates a
file resource to read in the file from disk.  Alternatively we could use a memory resource this type of resource is typically
used when reading an image in from a compressed archive.  The uncompressed image is held in memory which we can pass through directly.</p>
<p>All the information required to read the image is now in place and <strong>line 33</strong> actually reads in the image data.  We can check the result of
the read by comparing the return value with CMISS_OK, which currently has the literal value of 1.</p>
<p>When we execute this application, if everything went well, we should see:</p>
<div class="highlight-python"><div class="highlight"><pre>Image successfully read into image field.
</pre></div>
</div>
</div>
</div>


          </div>
      </div>
    </div>
      <div class="botnav">
      
        <p>
        «&#160;&#160;<a href="../guides/getting-started">Getting Started with PyZinc</a>
        &#160;&#160;::&#160;&#160;
        <a class="uplink" href="../index">Contents</a>
        &#160;&#160;::&#160;&#160;
        <a href="../axis_viewer/tutorial">Tutorial: Axis Viewer</a>&#160;&#160;»
        </p>

      </div>
            
		</div><!-- end #main -->

		<div id="sidebar">
<!--#include virtual="/software/zinclibrary/utility-peer-nav.txt" -->    
         <div id="toc">
          <h6><a href="../index"><span>PyZinc v3.0.0 tutorials</span></a></h6>
          <ul>
<li><a class="reference internal" href="#">Tutorial: Image Reader</a><ul>
<li><a class="reference internal" href="#overview">Overview</a></li>
<li><a class="reference internal" href="#the-code">The Code</a></li>
</ul>
</li>
</ul>

        </div>
            <!--#include virtual="utility-download.txt" -->

		</div><!-- end #sidebar -->
		
	</article><!-- end .single-project -->
	
</section><!-- end #content -->

<!--#include virtual="/inc/footer.txt" -->
