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
            
  <div class="section" id="installation-guide">
<h1>Installation Guide:<a class="headerlink" href="#installation-guide" title="Permalink to this headline">¶</a></h1>
<div class="section" id="windows">
<h2>Windows<a class="headerlink" href="#windows" title="Permalink to this headline">¶</a></h2>
<div class="section" id="opencmiss-zinc-library">
<h3>OpenCMISS-Zinc library:<a class="headerlink" href="#opencmiss-zinc-library" title="Permalink to this headline">¶</a></h3>
<ol class="arabic simple">
<li>Download from <a class="reference external" href="http://physiomeproject.org/software/opencmiss/zinc/download">http://physiomeproject.org/software/opencmiss/zinc/download</a></li>
<li>Run the exe, an install wizard will pop up, follow the steps and select Add OpenCMISS-Zinc to the system PATH for current user.</li>
</ol>
</div>
<div class="section" id="pyzinc">
<h3>PyZinc:<a class="headerlink" href="#pyzinc" title="Permalink to this headline">¶</a></h3>
<p>Prerequisite: OpenCMISS-Zinc library (please see the installation guide above for more informations)</p>
<ol class="arabic simple">
<li>Download and install Python 2.7/3.3, PyZinc on Windows is currently available for these two version of Python only.</li>
<li>You may have to add the Python installation directory onto your system PATH.</li>
<li>Download PyZinc under the Windows section from <a class="reference external" href="http://physiomeproject.org/software/opencmiss/zinc/download">http://physiomeproject.org/software/opencmiss/zinc/download</a></li>
<li>Unzip the zip package.</li>
<li>Open the command prompt, cd into the unzip directory, you should be able to run &#8220;python setup.py install&#8221; which will install PyZinc as a python library.</li>
<li>Install PyQt/PySide. PySide can be found here <a class="reference external" href="http://qt-project.org/wiki/PySide_Binaries_Windows">http://qt-project.org/wiki/PySide_Binaries_Windows</a></li>
<li>Microsoft Visual C++ Redistributable is also required. It can be download and install from the following Microsoft page: <a class="reference external" href="http://search.microsoft.com/en-us/DownloadResults.aspx?q=Microsoft+Visual+C%2b%2b+2010+SP1+Redistributable+Package">http://search.microsoft.com/en-us/DownloadResults.aspx?q=Microsoft+Visual+C%2b%2b+2010+SP1+Redistributable+Package</a></li>
<li>After installing Pyside and Qt, the PyZinc examples should run without problem. Examples of PyZinc with Qt GUI can be found in <a class="reference external" href="https://svn.physiomeproject.org/svn/cmiss/zinc/bindings/examples/trunk/python/">https://svn.physiomeproject.org/svn/cmiss/zinc/bindings/examples/trunk/python/</a></li>
</ol>
</div>
</div>
<div class="section" id="mac-os-x">
<h2>Mac OS X<a class="headerlink" href="#mac-os-x" title="Permalink to this headline">¶</a></h2>
<div class="section" id="id1">
<h3>OpenCMISS-Zinc library:<a class="headerlink" href="#id1" title="Permalink to this headline">¶</a></h3>
<ol class="arabic simple">
<li>Download under OS X section from <a class="reference external" href="http://physiomeproject.org/software/opencmiss/zinc/download">http://physiomeproject.org/software/opencmiss/zinc/download</a></li>
<li>The dmg package will install the libZinc binaries into /usr/local/lib and the system should now be able to locate the libZinc library.</li>
</ol>
</div>
<div class="section" id="id2">
<h3>PyZinc:<a class="headerlink" href="#id2" title="Permalink to this headline">¶</a></h3>
<p>Prerequisite: OpenCMISS-Zinc library (please see the installation guide above for more informations)</p>
<ol class="arabic simple">
<li>Download and install Python 2.6/2.7, PyZinc on Mac OS X is currently available for these two version of Python only.</li>
<li>Download under OS X section from <a class="reference external" href="http://physiomeproject.org/software/opencmiss/zinc/download">http://physiomeproject.org/software/opencmiss/zinc/download</a></li>
<li>The dmg package will install the PyZinc binaries into appropriate python location.</li>
<li>PyQt/PySide and Qt must be installed before the examples can be run by the system. PySide and Qt for Mavericks and Python2.7 can be found here: <a class="reference external" href="http://qt-project.org/wiki/PySide_Binaries_MacOSX">http://qt-project.org/wiki/PySide_Binaries_MacOSX</a></li>
<li>After installing Pyside and Qt, the PyZinc examples should run without problem. Examples of PyZinc with Qt GUI can be found in <a class="reference external" href="https://svn.physiomeproject.org/svn/cmiss/zinc/bindings/examples/trunk/python/">https://svn.physiomeproject.org/svn/cmiss/zinc/bindings/examples/trunk/python/</a></li>
</ol>
</div>
</div>
<div class="section" id="linux">
<h2>Linux:<a class="headerlink" href="#linux" title="Permalink to this headline">¶</a></h2>
<div class="section" id="id3">
<h3>OpenCMISS-Zinc library:<a class="headerlink" href="#id3" title="Permalink to this headline">¶</a></h3>
<ol class="arabic simple">
<li>Download under the Linux section from <a class="reference external" href="http://physiomeproject.org/software/opencmiss/zinc/download">http://physiomeproject.org/software/opencmiss/zinc/download</a></li>
<li>The debian package can be installed with the following command line: sudo dpkg -i zinc*.deb</li>
<li>After installation, run &#8220;sudo ldconfig&#8221; to update the libraries database</li>
</ol>
</div>
<div class="section" id="id4">
<h3>PyZinc:<a class="headerlink" href="#id4" title="Permalink to this headline">¶</a></h3>
<p>Prerequisite: OpenCMISS-Zinc library (please see the installation guide above for more informations)</p>
<ol class="arabic simple">
<li>Download and install Python 2.6/2.7, PyZinc on Linux is currently available for these two version of Python only.</li>
<li>Download PyZinc under the Linux section from <a class="reference external" href="http://physiomeproject.org/software/opencmiss/zinc/download">http://physiomeproject.org/software/opencmiss/zinc/download</a></li>
<li>Untar the tar.gz package.</li>
<li>Open the Terminal, cd into the untar directory and you should be able to run &#8220;python setup.py install&#8221; which will install PyZinc as a python module.</li>
<li>Install PyQt/PySide</li>
<li>After installing Pyside, the PyZinc examples should run without problem. Examples of PyZinc with Qt GUI can be found in <a class="reference external" href="https://svn.physiomeproject.org/svn/cmiss/zinc/bindings/examples/trunk/python/">https://svn.physiomeproject.org/svn/cmiss/zinc/bindings/examples/trunk/python/</a></li>
</ol>
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
        <a href="getting-started">Getting Started with PyZinc</a>&#160;&#160;»
        </p>

      </div>
            
		</div><!-- end #main -->

		<div id="sidebar">
<!--#include virtual="/software/zinclibrary/utility-peer-nav.txt" -->    
         <div id="toc">
          <h6><a href="../index"><span>PyZinc v3.0.0 tutorials</span></a></h6>
          <ul>
<li><a class="reference internal" href="#">Installation Guide:</a><ul>
<li><a class="reference internal" href="#windows">Windows</a><ul>
<li><a class="reference internal" href="#opencmiss-zinc-library">OpenCMISS-Zinc library:</a></li>
<li><a class="reference internal" href="#pyzinc">PyZinc:</a></li>
</ul>
</li>
<li><a class="reference internal" href="#mac-os-x">Mac OS X</a><ul>
<li><a class="reference internal" href="#id1">OpenCMISS-Zinc library:</a></li>
<li><a class="reference internal" href="#id2">PyZinc:</a></li>
</ul>
</li>
<li><a class="reference internal" href="#linux">Linux:</a><ul>
<li><a class="reference internal" href="#id3">OpenCMISS-Zinc library:</a></li>
<li><a class="reference internal" href="#id4">PyZinc:</a></li>
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
