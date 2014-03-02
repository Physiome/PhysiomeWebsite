---
_layout: support
title: Image reader
categories:
  - users guide
description: >
  This guide demonstrates how to use the
  Image Reader application to read an
  image into an image field.
intro: >
  The Image Reader application is designed
  to illustrate how to read an image into
  an image field.
navtitle: Image reader
---
### Overview

The Zinc library uses streams to read in data from disk or memory. The image reader application shows how to read in an image from disk using the Zinc library stream API. The same process is followed when reading an image in from memory, the only difference is the stream resource type that is used.

The souce code used in this tutorial is available from the [Physiome Project SVN server](https://svn.physiomeproject.org/svn/cmiss/zinc/bindings/examples/trunk/image_reader/).

### The code

Here is the code for reading in an image from disk:

<code>
	<ol class="code">
    	<li style="display: none; "></li>
		<li>def main():</li>
		<li>    '''</li>
		<li>    The entry point for the application, handle application arguments.</li>
		<li>    '''</li>
		<li>    # Create the context</li>
		<li>    context = Context("image")</li>
		<li>&nbsp;</li>
		<li>    # Name of the file we intend to read in.</li>
		<li>    image_name = 'drawing.png'</li>
		<li>&nbsp;</li>
		<li>    # Get a handle to the root region</li>
		<li>    root_region = context.getDefaultRegion()</li>
		<li>&nbsp;</li>
		<li>    # The field module allows us to create a field image to</li>
		<li>    # store the image data into.</li>
		<li>    field_module = root_region.getFieldModule()</li>
		<li>&nbsp;</li>
		<li>    # Create an image field, we don't specify the domain here for this</li>
		<li>    # field even though it is a source field.  A temporary xi source field</li>
		<li>    # is created for us.</li>
		<li>    image_field = field_module.createImage()</li>
		<li>    image_field.setName('texture')</li>
		<li>&nbsp;</li>
		<li>    # Create a stream information object that we can use to read the</li>
		<li>    # image file from the disk</li>
		<li>    stream_information = image_field.createStreamInformation()</li>
		<li>    # Set the format for the image we want to read</li>
		<li>    stream_information.setFileFormat(stream_information.IMAGE_FILE_FORMAT_PNG)</li>
		<li>    # We are reading in a file from the local disk so our resource is a file.</li>
		<li>    stream_information.createResourceFile(image_name)</li>
		<li>&nbsp;</li>
		<li>    # Actually read in the image file into the image field.</li>
		<li>    ret = image_field.read(stream_information)</li>
		<li>    if ret == 1: # CMISS_OK has  the literal value 1</li>
		<li>        print('Image successfully read into image field.')</li>
		<li>    else:</li>
		<li>        print('Error: failed to read image into image field.')</li>
        <li style="display: none; "></li>
	</ol>
</code>

Line 6 creates the Zinc context we must create one of these to get any other objects from this context.

To create an image field we first must get the root region from the context (Line 12) and then from the root region we can get the field module for that region (Line 16). From the field module we can create any fields required in our case we want an image field.

An image field is created over a domain but if we don’t supply one the create image field function will construct one for us. The constructed domain will be over xi space [0-1]x[0-1]x[0-1] irrespective of the dimensionality of the image data. It is possible to construct a domain better suited for our image data but we will leave this for a later tutorial.

Line 21 creates an image field and implicitly a domain for it. Line 22 sets the name of the image field to ‘texture’, naming a field can be useful if we wish to find it by name later.

To read the data into the image field we need to create a stream information object which will hold all the information required to read in the image. Line 26 creates the stream information object and line 28 sets the image file format to png. Setting the image file format is not absolutely necessary as some guesswork takes place when not set but if this information is not supplied and the image format can not be determined the reading of the image data will fail. Line 30 creates a file resource to read in the file from disk. Alternatively we could use a memory resource this type of resource is typically used when reading an image in from a compressed archive. The uncompressed image is held in memory which we can pass through directly.

All the information required to read the image is now in place and line 33 actually reads in the image data. We can check the result of the read by comparing the return value with CMISS_OK, which currently has the literal value of 1.

When we execute this application, if everything went well, we should see:

> <code>Image successfully read into image field.</code>