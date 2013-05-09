---
_layout: about-page
_template: page
_fieldset: page
title: Developing a modelling framework
description:
intro:
navtitle:
---
An important aim of the Physiome Project is to develop a multi-scale modelling framework for understanding physiological function that allows models to be combined and linked in a hierarchical fashion. Electromechanical models of the heart, for example, need to combine models of ion channels, myofilament mechanics and signal transduction pathways at the subcellular level and then link these processes to models of tissue mechanics, wavefront propagation and coronary blood flow – each of which may well have been developed by a different group of researchers.

Models can be defined at various levels of abstraction:

1. The conceptual level (the domain of a biologist) - words are used to describe the model;
2. The mathematical level (the domain of the bioengineer and applied mathematician) - the domains, fields, equations and boundary conditions are defined in standard mathematical notation;
3. The formulation level (the domain of the mathematical modeler) – the equations are formulated in terms of the solution method e.g. FEM (i.e. domains, fields and boundaries are described in terms of meshes and parameters);
4. The solution level (the domain of the numerical analyst) – involves the algorithms for solving the parameterised equations on the parameterised domains.

To facilitate communication between research groups and across these levels of abstraction, markup languages are needed to encapsulate the mathematical statements of the governing equations (MathML) and the way in which spatially and temporally dependent continuum fields are parameterised (FieldML). Scripting languages (such as Perl, Python or Matlab) are then needed to create modules which implement the mathematical operations on these fields and call libraries of numerical solution algorithms.

We propose that the framework which includes MathML, FieldML, the scripting modules and a grouping construct (components, variables, imports etc – see below) is called ‘ModelML’. When domain specific ontologies (controlled vocabularies together with domain specific rules) are added to link this framework to biological entities such as cells, tissues or organs, the markup language framework is extended to become TissueML or AnatML.

In Cmgui computed variables are used to describe mathematical operations (such as spatial differential operators) on existing fields using algebraic operations rather than numerical differencing. Computed variables will be used to construct the functionals that need to be minimised at the formulation level. It is intended that these computed variables will be constructed from MathML.