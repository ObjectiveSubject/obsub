#ObSub

Based on the [Objective Subject Boilerplate](https://github.com/ObjectiveSubject/wp-boilerplate).
Adapted from the “\_s” theme: http://underscores.me

##Getting Started

If you want to change the theme's namespace, you'll need to find and replace the name in all the templates:

1. Search for `'obsub'` (inside single quotations) to capture the text domain.
2. Search for `obsub_` to capture all the function names.
3. Search for `Text Domain: obsub` in style.css.
4. Search for <code>&nbsp;obsub</code> (with a space before it) to capture DocBlocks.
5. Search for `obsub-` to capture prefixed handles.
6. Search for `ObSub` to change theme name.
7. Search for `Theme URI: https://github.com/ObjectiveSubject/wp-boilerplate` to change theme URI.
8. Search for `Description: A wordpress theme` to change the description.

Then, update the stylesheet header in `style.css` and the links in `footer.php` with your own information. Next, update or delete this readme.

##Defining Admin styles

Support for custom admin styles is provided in functions.php under "**Custom Admin Dashboard styles**", "**Custom Admin Color Scheme**", and "**Custom Admin Login**". Comment out or delete this code to disable support for custom styles in the admin area.

####Colors

Custom admin **colors** are defined within `admin/color-scheme/admin-colors.scss`. All color related overrides get compiled in this file. By editing the `admin/_variables.scss` file, it's easy to create new color palettes.

####Login page

A custom logo can be provided for the login page by simply replacing the `login-logo.png` file in the `images` directory. Further styles for this page should be defined within `admin/login/admin-login.scss`

####Dashboard

Dashboard custom styles should be defined within `admin/admin-dashboard.scss`.
