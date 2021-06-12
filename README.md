# webcomic-engine

A simple webcomic engine and template created with PHP and Bootstrap for my webcomic, *[Academy 118](https://academy118.com)*.

![Screenshot](https://github.com/AvaLovelace1/webcomic-engine/blob/master/screenshot.png?raw=true "screenshot")

## Installation

After downloading, install via npm by running `npm i` and `npm install`.

## Usage

### Viewing and modifying the template

Edit `index.php` and `css/styles.css` to make changes to the template. Run `gulp dev` to open a preview of the template in your browser, which will live reload when changes are made.

Note: you must have npm and Gulp installed on your machine to use these features.

### Adding comics

Comics are organized by storyline; each story contains one or more pages. Page numbers are displayed under the title of the story (unless the story consists of only one page).

**Comic image files** are stored in `comics`. Image file names follow the format `<base filename>_<3-digit page number>.<file extension>`:
* `base filename`: The base filename. All images in the same story must use the same base filename.
* `3-digit page number`: The page number of this image. This must be padded with leading zeroes to a length of 3 digits (this makes it more convenient for me, as Clip Studio Paint exports comic pages in this format; you can modify this in `php/comiclist.php`).
* `file extension`: The file extension for the images in this story. Any image file type may be used (.jpg, .png, .gif, etc). All images in the same story must use the same file extension.

**Comic data** is stored in `files/comiclist.txt`. Each story is on a separate line and follows the format `<title> :: <hover-texts> :: <base filename>.<file extension> :: <number of pages>` (delimited by double colons `::`):
* `title`: The title of this story.
* `hover-texts`: A list of length `number of pages` delimited by double commas `,,`. Contains the text that appears when hovering the mouse over each page of this story.
* `base filename`: The base filename for the images in this story.
* `file extension`: The file extension for the images in this story.
* `number of pages`: The total number of pages in this story.

You can modify the comic engine in `php/comiclist.php` and change the location of the comic data and images in `php/variables.php`.
