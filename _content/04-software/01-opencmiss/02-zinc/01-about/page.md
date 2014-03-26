---
_layout: software-page
_template: page
_fieldset: page
title: About OpenCMISS-Zinc
description:
intro:
---
###OpenCMISS-Zinc Library and API

OpenCMISS-Zinc (‘Zinc’) is a cross-platform software library for building complete modelling and visualisation applications, from rich model representation to high quality OpenGL graphics rendering.

Models are represented in Zinc as mathematical fields defined over domains, including finite elements with support for high-order basis functions, complex parameter mappings and time variation, as well as image-based fields. Further fields can be defined by mathematical expressions and algorithms on existing fields, including image processing filters. Zinc’s model data structures are dynamic, supporting interactive applications which programmatically create, destroy and modify content.

In Zinc, visualisations of models are created by graphics algorithms which assign fields to attributes, including 3-D coordinates, texture coordinates, data/colouring, and specific attributes such as iso-scalar field for contours, vector field for streamlines, and orientation, scale and label fields for points. Graphics are automatically updated following changes to attributes or the underlying model. The graphics approach combined with the general field expression capability means almost any derived result can be visualised.

Zinc graphics are rendered using OpenGL into the client window or canvas, and built-in picking, selection groups and automatic highlighting support the easy development of interactive applications. The Zinc library is UI-independent requiring additional client code to set up and handle rendering and events, as described in the documentation. Zinc also includes utilities such as non-linear optimisation.

Zinc was created from the core engine of the [Cmgui visualisation application](/software/opencmiss/cmgui), now a client of the library, and sharing more than 20 years development. Zinc v3.0 is the first release of the library with a full API for controlling its functionality without legacy Cmgui commands. Zinc and Cmgui are co-developed with the distributed parallel solver [OpenCMISS-Iron](/software/opencmiss/iron) and used to interact with and visualise models and solutions from it.

Zinc is available for Windows, Max OS X and Linux, with APIs offered in C, C++ and Python. Its source code is released under the Open Source Initiative approved [Mozilla Public License v2.0](http://www.mozilla.org/MPL/2.0/).

To learn more, read the Introduction in the [API Reference Section](documentation/api-reference).