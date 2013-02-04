# Yaml

Version 1.0

* Author: [Dan Horrigan](http://dhorrigan.com/)

## Description

A simple CodeIgniter wrapper class for the Spyc Yaml library.

## Loading

### Installed via Sparks

    $this->load->spark('yaml/1.0');

### Installed Manually

    $this->load->library('yaml');

## Usage

When parsing the library will return an associative array.  When dumping it will return a string containing the 
Yaml contents.

To parse a Yaml string simply do this:

    $array = $this->yaml->parse_string($string);

To parse a Yaml **file** simply do this:

    $array = $this->yaml->parse_file($filepath);

To dump a PHP array to a Yaml string do this:

    $yaml = $this->yaml->dump($array);
