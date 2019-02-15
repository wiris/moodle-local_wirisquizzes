# Wiris Quizzes local plugin
### Master Build Status
[![Build Status](https://travis-ci.org/wiris/moodle-local_wirisquizzes.svg?branch=master)](https://travis-ci.org/wiris/moodle-local_wirisquizzes)
### Development Build Status
[![Build Status](https://travis-ci.org/wiris/moodle-local_wirisquizzes.svg?branch=development)](https://travis-ci.org/wiris/moodle-local_wirisquizzes)

This plugin implements a thin wrapper for Wiris Quizzes question types. Wiris Quizzes plugin declare all the necessary dependencies on Wiris Quizzes question types.

Attempting to install this plugin implicitly pulls all the Wiris Quizzes question types.

## Install instructions

To install it using git, type this command in the root of your Moodle install:
```
git clone https://github.com/wiris/moodle-local_wirisquizzes.git local/wirisquizzes
```
Then add /local/wirisquizzes to your git ignore.

Alternatively, download the zip from <https://github.com/wiris/moodle-local_wirisquizzes/archive/master.zip> it into the local  folder, and then rename the new folder to "wirisquizzes".


## License


Wiris Quizzes local plugin is Licensed under the [GNU General Public, License Version 3](https://www.gnu.org/licenses/gpl-3.0.en.html).
