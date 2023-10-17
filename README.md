# WEBT | CORE | Object Oriented PHP with Version Control

## Overview
The movie fan club “Acolytes of Ash” is looking to create a trailer portal for its members. The members of this club are all fans of “horror” movies which don’t take themselves too seriously.
They want you to create a webapp, which allows them to list trailers of movies, taken from various sources like YouTube, Vimeo, etc.

## Definition of Done
- When code is added to the project as result of a user story it is committed to the developers branch after a unit of work is complete
- When a feature is completed by coding, the working result is merged into the main branch

## User Story 1
*As a Developer I want to learn and note down what a Version Control System is, so that I can explain it to my team and to customers.*

### Acceptance Criteria
- A definition of what a VCS is, is available as PDF and written in the team's own words

## User Story 2
*As a Developer I want to create a fork of the main repository, so that I can build my own solution based on the existing files.*

### Acceptance Criteria
- The repository user-story-based-exercises
/
webt-core-object-oriented-php-with-version-control was forked for the team
- Each teammember has access to the forked repository (read/write)

## User Story 3
*As a Developer I want to have an own development branch in the repository, so that I can work on tasks autonomously.*

### Acceptance Criteria
- A branch for each team member is available on the team repository

## User Story 4
*As a Developer I want to create a first preview site as plain static HTML version so that the customer can get an impression of the website.*

### Acceptance Criteria
- A plain static HTML view for a single page is available
- The view features at least 20 video entries (which can use the same resource)
- Each entry features a title, the origin (e.g.: “YouTube”) and is embedded for autoplay
- The page features CSS
- The page is semantically valid for HTML5

## User Story 5
*As a Developer I want to create an Interface for a “video”, so that I can be sure that later implementations for each video platform feature all relevant information.*

### Acceptance Criteria
- A PHP Interface for a “video” exists
- The Interface guarantees, that name, source and HTML code for embedding can be retrieved

## User Story 6
*As a Developer I want to create an abstract class for a video, so that this class can be used as a base for implementing the video interface.*

### Acceptance Criteria
- An abstract PHP class for a “video” exists
- The abstract class implements parts of the interface for a video

## User Story 7
*As a Developer I want to create a YouTube video class, so that the website can feature YouTube resources for dynamic rendering.*

### Acceptance Criteria
- A class for a YouTube video exists
- The website makes use of this YouTube class to render at least 5 video previews

## User Story 8
*As a Developer I want to create a Vimeo video class, so that the website can feature Vimeo resources for dynamic rendering.*

### Acceptance Criteria
- A class for a Vimeo video exists
- The website makes use of this Vimeo class to render at least 5 video previews

## User Story 9
*As a Developer I want to create a release and tag it with version 1.0.0, so that the public can identify the working and complete version.*

### Acceptance Criteria
- The first release is available as version 1.0.0 on the public repository

#### Links
https://my.skilldisplay.eu/en/skillset/77


# WEBT | ADV | Responsive Websites with SASS

## Overview
It happened again! The client was satisfied with your product but decided to adjust the saturation of one of the key colors in your design slightly. So many CSS rules to edit! Your team decides to introduce SASS for the stylesheets in order to be able to use variables for colors and compile the CSS afterwards.

Apply this advanced user stories to a fitting CORE scenario of your choice.

## User Story 1
*As a Developer I want to install a node.js module of my choice or use plain node.js, so that I can compile SASS files*

### Acceptance Criteria
- The frontend build chain features a SASS compiler
- The SASS compiler is used for generating the CSS for the responsive framework of your choice, respecting custom color variables

## User Story 2
*As a Developer I want to install a responsive framework of my choice, so that I save worktime.*

### Acceptance Criteria
- A responsive framework of the developers choice is ready for the frontend development stack
- The responsive framework can be updated without overwriting changes made to the styles

## User Story 3
*As a website user I want the website to adapt to my device size, so that I can view the content in the most convenient way.*

### Acceptance Criteria
- The website is responsive for mobile phones
- The website is responsive for tablets
- The website is responsive for desktop computers (16:9 and 16:10)
- All elements of the website are designed in a responsive way

#### Links
https://my.skilldisplay.eu/en/skillset/357

