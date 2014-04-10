---
_layout: default
_template: software-project-index
_fieldset: page
title: Cmgui Documentation
intro: >
  Resources and examples for learning Cmgui.
---

### How to learn to use Cmgui

Most Cmgui users learn by copying examples that achieve what they need, but a little background information is needed to even get to that stage.

The Documentation section provides links to the formal documentation pages but lists a few specific pages in the order that beginning users should read them, either before or while starting to run Cmgui.

The Examples section provides links to the Cmgui example suite, and gives a suggested order of working through a handful of the examples to gain a basic understanding of how Cmgui works.

### Download, Install and Run Cmgui

Follow the [Download and Install instructions](download) to get the latest Cmgui executable. Run it to bring up the command window, and start following the documentation. 

### Documentation

The [Cmgui documentation](http://abi-software-book.readthedocs.org/en/latest/cmgui/index.html) pages provide both introductory guidance and specific detailed information about features. Be aware that some of the documentation is slightly out of date as it hasn't been updated to Cmgui v3.0!

#### Suggested reading for new users:

1. [Cmgui introduction](http://abi-software-book.readthedocs.org/en/latest/cmgui/CMGUI-introduction.html). This introduces the main windows and dialogs in Cmgui, and works through example a1.
2. [Cmgui command window](http://abi-software-book.readthedocs.org/en/latest/cmgui/CMGUI-command-window.html). This describes how text commands are entered and output and history are viewed. Critically you
3. [Cmgui scene editor](http://abi-software-book.readthedocs.org/en/latest/cmgui/CMGUI-scene-editor-window.html). Describes the dialog where you create and edit attributes of graphics which visualise the model. *Note*: Cmgui does not automatically create any graphics on loading a model: you must create them in the scene editor otherwise you won't see anything!
4. [Cmgui graphics overview](http://abi-software-book.readthedocs.org/en/latest/cmgui/CMGUI-graphics.html). Description of the graphics types and their attributes. *Note*: this page is out-of-date for Cmgui 3.0 as follows:
  - all point graphics types have been merged and differ by the domain type option
  - lines and cylinders have been merged and differ by the line shape type (LINE/CIRCLE_EXTRUSION) plus its size and scaling information set the diameter instead of the radius.
  - iso-surfaces and iso-lines are merged into contours, which differ by the domain type option.
5. [Cmgui graphics window](http://abi-software-book.readthedocs.org/en/latest/cmgui/CMGUI-graphics-window.html). Guide to the controls for graphics windows where the visualisation of models are rendered.
6. [Cmgui fields](http://abi-software-book.readthedocs.org/en/latest/cmgui/CMGUI-fields.html). When you are ready this gives an explanation about what fields are and how finite element models are described.

#### Other Documentation

The later sections of the 
[Introduction to OpenCMISS-Zinc v3.0](http://sourceforge.net/projects/cmiss/files/Documentation/3.0.0/Introduction%20to%20OpenCMISS-Zinc%20v3.0.pdf/download) 
\[[*Alt*](ftp://ftp.bioeng.auckland.ac.nz/cmiss/zinclibrary/release/Introduction%20to%20OpenCMISS-Zinc%20v3.0.pdf)\] document summarise the main objects in the OpenCMISS-Zinc library on which Cmgui is based, and may help with understanding. 

### Cmgui Examples

The [Cmgui Examples Gallery](http://cmiss.bioeng.auckland.ac.nz/development/examples/a/index_thumbs.html) gives a visual overview of examples demonstrating Cmgui features and techniques. If you have particular things you need to do, it is a good idea to look through the examples to see if something similar has been done before (and if not, try the [support](support page)).

The examples can be individually downloaded from .tar.gz archives on each page, which can be unzipped using 7-Zip on Windows, or 'tar -xf NAME.tar.gz' in Linux.

#### Suggested learning examples for new users:

These examples have very good comments throughout them, and some are structured as tutorials with interactive instructions for users. Open the main command file e.g. 'example_a#.com' or 'examplename.com' for each example, read the text and double-click commands to enter them (and do them in order without skipping as some depend on previous commands being run).

1. [a2 - decorating a cube](http://cmiss.bioeng.auckland.ac.nz/development/examples/a/a2/index.html). This loads a simple 1-element cube model and creates some graphics to visualise its faces, nodes, etc. The example also shows how to edit nodes.
2. [a3 - heart model](http://cmiss.bioeng.auckland.ac.nz/development/examples/a/a3/index.html). Visualise the muscle fibre architecture of the heart.
3. [a7 - geothermal field](http://cmiss.bioeng.auckland.ac.nz/development/examples/a/a7/index.html). Cmgui is just as usable for use outside biomedicine. This example from geophysics has some nice solution fields and shows how to create isosurfaces, and how to colour fields over graphics using a spectrum.
4. [ao - heart fibre streamlines](http://cmiss.bioeng.auckland.ac.nz/development/examples/a/ao/index.html). Use streamlines to visualise heart muscle fibres.
5. [segmentation 3d](http://cmiss.bioeng.auckland.ac.nz/development/examples/a/segmentation_3d/index.html). Segment a vessel out of a 3-D image block using image processing filters.

<img src="/assets/img/software/cmgui/680x280/arbitrary-shaders.jpg" alt="Arbitrary shaders: using GLSL shaders to create reflective effect on material." title="Arbitrary shaders: using GLSL shaders to create reflective effect on material." width="680" height="280" />
