---
_layout: software-page
_template: page
_fieldset: page
title: Related software
---
There are three major Physiome Project software packages that are closely related to Cmgui. These software packages are focused on the following areas:
<ul class="arrow dotted"><li><a href="/software/cm">CM</a> is used for computational modelling </li><li><a href="http://www.cmiss.org/cmgui/wiki/Unemap" title="" style="background-color:;">Unemap</a> is used for signal acquisition and processing</li><li>Cmgui is used for model visualisation and manipulation</li></ul>

###Solving complex bioengineering problems 

CM allows the application of finite element analysis, boundary element and collocation techniques to a variety of complex bioengineering problems. OpenCMISS will be an open source equivalent of CM, and is currently under development.

###Designed to work closely with CM

Although Cmgui is a stand alone executable, it is designed to work closely with CM. In general Cmgui and CM are used in tandem to develop a mesh that describes the geometry of an object of interest (eg the eye, a femur, the heart, the lungs). CM is then used to solve a bioengineering problem over the mesh and the results are visualised using Cmgui.

Cmgui can be used without CM but you may have difficulty in creating the data files that Cmgui reads in to describe a mesh (called exnode and exelem files). It is important to realise that most users get their exnode and exelem files by exporting them from CM. Unless you are very familiar with the exelem format it is difficult to write an exelem file by hand or to write a script to generate it.

###Zinc plugin

Cmgui is also used as part of the Zinc pugin to Mozilla Firefox. The Zinc extension allows users to view Zinc applications in Firefox. A Zinc application uses Cmgui for visualisation while providing a nice customized user interface for a specific task. For example Zinc applications have been written to do the following:
<ul class="check dotted"><li>Interactively explore colon endoscopy</li><li>Explore the Physiome eye model</li><li>Create data points to give a digital description of a geometry based on medical images</li></ul>

Note that the Zinc plugin is compiled as a separate application from Cmgui.  You do _not_ have to install Cmgui to use Zinc.
<ul class="arrow-2 dotted"><li><a href="/software/zincplugin">Find out more about the  Zinc plugin</a></li></ul>