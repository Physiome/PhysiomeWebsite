---
_layout: support
title: Develop your own Zinc plugin application
description:
intro: 'Learn how to build your own Zinc plugin  application'
navtitle: Develop your own Zinc plugin application
categories:
  - developers guide
---
The code for a zinc application is written using javascript. The layout of the buttons, sliders, scene viewer etc can be specified using any web based UI technologies including html, html5, AJAX, jQuery UI and etc. The application program logic is written in javascript.

Before writing your own application we suggest looking at a relatively simple application such as the meshing_and_selection example to understand the program flow.

- [View the meshing_and_selection example](ftp://ftp.bioeng.auckland.ac.nz/cmiss/zinc_npruntime_examples/meshing_and_selection/meshing_and_selection.html)

### HTML file

First open up the meshing_and_selection.html file in a text editor. Below the title tag there are some script tags to include specified javascript files in the page. When the broswer parses the html file it simply replaces the script tag by the contents of the javascript file. The script tag here included the javascript for the specific application. This file describes the layout of the page and you can also find the tag embed type="application/x-zinc-plugin" which essentially intialise the Zinc plugin with the given width, height and ready function. The ready function is called once Zinc is initialise, it is helpful for setting up the content we want to see in the content. You can find the sceneViewerReadyFunction() in meshing_and_selection.js.

### JavaScript file

Now open up the javascript file meshing_and_selection.js. At first glance this file looks complicated and it can be difficult to see how program execution flows.

When the page first loads up a sequence of function calls occur (starting with init) to initialise the zinc application, configure it and set up the scene viewed by the plugin. After that various function calls are triggered by the user clicking buttons, moving sliders, etc.

### sceneViewerReadyFunction

The sceneViewerReadyFunctionis called once Zinc has been initialised and scene is ready to draw. The plugin object can be retrieve through the document object in the browser page. User can get the Zinc context from this plugin object. The context will then allow user to have access to number of Zinc objects such as region and graphics module. This example create two meshes and you can follow the function calls to see how things work in Zinc.

Loading files/stream buffers into Zinc: Zinc uses downloadManager for models IO, you can take a look at the function initialiseWhenReady() in example_a4.js in the a4 example to see how it works.