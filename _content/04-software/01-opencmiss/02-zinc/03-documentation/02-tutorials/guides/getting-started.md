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
            
  <div class="section" id="getting-started-with-pyzinc">
<h1>Getting Started with PyZinc<a class="headerlink" href="#getting-started-with-pyzinc" title="Permalink to this headline">¶</a></h1>
<p>PyZinc is the Python bindings for the Zinc library.  The Zinc library is an advanced OpenGL visualisation library.
It&#8217;s main use is for visualising Finite Element Models. This document assumes that you have already successfully installed
Zinc and PyZinc on your machine following the instructions in [installation] document.</p>
<div class="section" id="what-you-need">
<h2>What You Need<a class="headerlink" href="#what-you-need" title="Permalink to this headline">¶</a></h2>
<p>We require two files that are available from the Physiome project svn repository.  Right click on these links and download the text files to your
machine.</p>
<ul class="simple">
<li><a class="reference external" href="https://svn.physiomeproject.org/svn/cmiss/zinc/bindings/examples/trunk/python/getting_started/getting_started.py">Example PyZinc script</a></li>
<li><a class="reference external" href="https://svn.physiomeproject.org/svn/cmiss/zinc/bindings/examples/trunk/python/getting_started/example.exfile">Example Data</a></li>
</ul>
</div>
<div class="section" id="executing-the-script">
<h2>Executing the Script<a class="headerlink" href="#executing-the-script" title="Permalink to this headline">¶</a></h2>
<p>Now we would like to execute this script to see that Zinc is working for us.  Follow the instructions that are applicable for your platform.
The exact names of the directories may not match what is on your own computer you will need to change them as appropriate.</p>
<div class="section" id="windows">
<h3>Windows<a class="headerlink" href="#windows" title="Permalink to this headline">¶</a></h3>
<p>Using the Command application navigate to the directory where you downloaded the required scripts to and execute the python script with Python, like so:</p>
<div class="highlight-python"><div class="highlight"><pre>cd C:\Users\Me\Downloads
python getting_started.py
</pre></div>
</div>
</div>
<div class="section" id="mac">
<h3>Mac<a class="headerlink" href="#mac" title="Permalink to this headline">¶</a></h3>
<p>Open the Terminal application and navigate to the directory where you downloaded the required scripts and execute the python script with Python, like so:</p>
<div class="highlight-python"><div class="highlight"><pre>cd Downloads
python getting_started.py
</pre></div>
</div>
</div>
<div class="section" id="linux">
<h3>Linux<a class="headerlink" href="#linux" title="Permalink to this headline">¶</a></h3>
<p>Open an application to get a command prompt and navigate to the directory where you downloaded the required scripts and execute the python script with Python, like so:</p>
<div class="highlight-python"><div class="highlight"><pre>cd downloads
chmod 755 getting_started.py
python getting_started.py
</pre></div>
</div>
<p>If Zinc is installed and running correctly then you should see output in the console window something very similar to:</p>
<div class="highlight-python"><div class="highlight"><pre><span class="mi">1</span> <span class="p">[</span><span class="mf">1.091342932329548</span><span class="p">,</span> <span class="mf">1.8162332528565992</span><span class="p">,</span> <span class="o">-</span><span class="mf">0.4363323129985822</span><span class="p">]</span>
<span class="mi">2</span> <span class="p">[</span><span class="mf">1.0455688593265615</span><span class="p">,</span> <span class="mf">1.844594853201507</span><span class="p">,</span> <span class="mf">5.131268000863329</span><span class="p">]</span>
<span class="mi">3</span> <span class="p">[</span><span class="mf">0.8934782703535451</span><span class="p">,</span> <span class="mf">1.8257889305112682</span><span class="p">,</span> <span class="mf">4.5596726708351865</span><span class="p">]</span>
<span class="mi">4</span> <span class="p">[</span><span class="mf">0.8526299403448955</span><span class="p">,</span> <span class="mf">1.7859736069501475</span><span class="p">,</span> <span class="mf">4.132067004096575</span><span class="p">]</span>
<span class="mi">5</span> <span class="p">[</span><span class="mf">0.823688724884815</span><span class="p">,</span> <span class="mf">1.7655096214705146</span><span class="p">,</span> <span class="mf">3.490658503988659</span><span class="p">]</span>
<span class="mi">6</span> <span class="p">[</span><span class="mf">0.7721063084478827</span><span class="p">,</span> <span class="mf">1.7655096214705142</span><span class="p">,</span> <span class="mf">2.635447170511437</span><span class="p">]</span>
<span class="mi">7</span> <span class="p">[</span><span class="mf">0.7107744758720987</span><span class="p">,</span> <span class="mf">1.7859736069501477</span><span class="p">,</span> <span class="mf">1.9940386704035213</span><span class="p">]</span>
<span class="mi">8</span> <span class="p">[</span><span class="mf">0.7360884908549459</span><span class="p">,</span> <span class="mf">1.8170622842512965</span><span class="p">,</span> <span class="mf">1.5664417303111704</span><span class="p">]</span>
<span class="mi">9</span> <span class="p">[</span><span class="mf">0.8353485671058636</span><span class="p">,</span> <span class="mf">1.8315048838115495</span><span class="p">,</span> <span class="mf">0.9948507636061574</span><span class="p">]</span>
<span class="mi">10</span> <span class="p">[</span><span class="mf">1.0379912746644158</span><span class="p">,</span> <span class="mf">1.8118699297266134</span><span class="p">,</span> <span class="mf">0.27925704364222276</span><span class="p">]</span>
<span class="o">...</span>
</pre></div>
</div>
<p>This simple script has loaded the 60-element prolate heart model and evaluated and printed the value of the coordinate field at the centre of each element. Have a read of it and as needed look up the API documentation to learn how each API function works.</p>
<p>Congratulations, you now have a functioning Zinc and PyZinc installation.  You can now move onto understanding some of the more advanced features that are offered.</p>
</div>
</div>
</div>


          </div>
      </div>
    </div>
      <div class="botnav">
      
        <p>
        «&#160;&#160;<a href="../index">Introduction</a>
        &#160;&#160;::&#160;&#160;
        <a class="uplink" href="../index">Contents</a>
        &#160;&#160;::&#160;&#160;
        <a href="../image_reader/tutorial">Tutorial: Image Reader</a>&#160;&#160;»
        </p>

      </div>
            
		</div><!-- end #main -->

		<div id="sidebar">
<!--#include virtual="/software/zinclibrary/utility-peer-nav.txt" -->    
         <div id="toc">
          <h6><a href="../index"><span>PyZinc v3.0.0 tutorials</span></a></h6>
          <ul>
<li><a class="reference internal" href="#">Getting Started with PyZinc</a><ul>
<li><a class="reference internal" href="#what-you-need">What You Need</a></li>
<li><a class="reference internal" href="#executing-the-script">Executing the Script</a><ul>
<li><a class="reference internal" href="#windows">Windows</a></li>
<li><a class="reference internal" href="#mac">Mac</a></li>
<li><a class="reference internal" href="#linux">Linux</a></li>
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
