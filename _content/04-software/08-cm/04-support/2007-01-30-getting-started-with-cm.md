---
_layout: support
title: Getting started with CM
categories:
  - users guide
intro: >
  Get an overview on how to model complex curved geometries with CMISS, how to create a mesh, and the difference between CM and Cmgui.
description:
navtitle: Getting started with CM
---
### Modelling complex curved geometry using few  elements

Usually in an engineering finite element analysis (FEA) package you define the geometry using some sort of 3D model editor, and then use the software to generate a mesh consisting of many small elements. CMISS does not work like this.

In the usual engineering FEA packages the analysis performed often uses linear elastic material properties and the elements have linear basis functions, so in order to get a good approximation of curved geometry often many small linear elements are required. In CMISS it is possible to have higher order basis functions, such as quadratic and cubic, and this means that quite complex curved geometry can be modelled using relatively few elements.

### Creating a mesh in CMISS 

In CMISS there is no automatic mesh generator so you must define the geometry manually. While that may seem like a large piece of missing functionality it isn't really that much of a hinderance for modelling anatomy because in general the mesh must be hand tuned to fit the geometry. The procedure for creating a mesh in CMISS is to manually position the mesh nodes and create the elements and then fit this initial mesh to a data set. Fortunately CMISS has a number of features specifically for this purpose. It is possible and common to automatically create an initial mesh but there are no general tools available and users must write their own specialised scripts to do this.

### CM + Cmgui = CMISS 
##### Introducing the number-cruncher and the graphical front-end

If you've browsed the CMISS documentation you will have discovered that CMISS is actually two separate programs, a number crunching backend named CM and a graphical front-end named Cmgui. The backend, cm, is entirely command line driven and has some basic graphical features to display geometry and allow data input using a mouse. Despite it's name Cmgui is not what you would normally expect to find in a graphical user interface. It is better described as a command line driven pre and post graphics processor for cm where some of the more commonly used commands can be entered using the gui elements. Both cm and Cmgui can be driven by scripts instead of interactive commands, which the usual way of using the system. It is important to realise that not all of the available, or even necessary commands can be accessed through the graphical user interface. Both CM and Cmgui can be automated using perl-like command scripts.

It is also important to realise that CM and Cmgui use different file formats and moving data between the backend and front-end will require the file to be converted. There are separate conversion tools available for this.