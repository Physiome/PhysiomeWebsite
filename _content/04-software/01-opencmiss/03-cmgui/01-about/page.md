---
_layout: default
_template: software-project-index
_fieldset: page
title: About Cmgui
intro: >
  Standalone application for visualising and interacting with mathematical field models.
---

<img src="/assets/img/software/cmgui/cmgui_ui.jpg" alt="Cmgui application windows" title="Cmgui application windows" height="480" />

### Overview

Cmgui is a generic open-source modelling and visualisation package developed at the [Auckland Bioengineering Institute](http://abi.auckland.ac.nz) with contributions from industry. It is commonly used by researchers to visualise dynamic spatially-varying fields from computer models of organs, tissues and cells -- often combined with biomedical images. Cmgui is coded in C/C++ and consists of data structures for describing hierarchical models built from mathematical fields.

### Features

Some of the main features of Cmgui are as follows:

- Dynamic model representation including finite element and boundary element meshes
- Image-based fields and image processing
- Mathematical field abstraction for generating derived field quantities
- Graphics conversion algorithms for making visualisations of fields and domains
- High quality OpenGL rendering
- Other utilities including interactive selection and editing, mesh creation, optimisation

### Command line + GUI driven

A custom command language integrated into a built-in perl interpreter can drive all functionality in Cmgui. Added to this are interactive dialogs for creating and editing the visualisation and other graphics objects, graphics windows and other dialogs. Script commands can be output to save the current state, for reproducing it when next run.

### Built on Zinc

The core engine within the Cmgui application is the [OpenCMISS-Zinc Library](/software/opencmiss/zinc), and documentation for the Zinc data model is equally valid in Cmgui.
