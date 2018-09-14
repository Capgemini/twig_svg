# twig_svg

1. Ensure your icon.svg file exists within the base theme, in the following
  directory 'your_theme/images/icons.svg'.

2. To include an SVG icon in a twig template, add the following in the relevant
html.twig file:

    {{ icon('icon-name', 'Icon title') }}
