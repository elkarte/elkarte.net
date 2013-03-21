This is the **elkarte.net** site repository.


The software is licensed under [BSD 3-clause license](http://www.opensource.org/licenses/BSD-3-Clause).

Contributions to documentation are licensed under [CC-by-SA 3](http://creativecommons.org/licenses/by-sa/3.0). Third party libraries or sets of images, are under their own licenses.

Notes:
===
Feel free to fork this repository and make your desired changes.

Please see the [Developer's Certificate of Origin](https://github.com/elkarte/Elkarte/blob/master/DCO.txt) in the repository:
by signing off your contributions, you acknowledge that you can and do license your submissions under the license of the project.

Please see [How to contribute](https://github.com/elkarte/Elkarte/blob/master/CONTRIBUTING.md) for information on how to contribute to the development process.

Submodules:
===
The elkarte.net site repository contains the core Elk repository as submodule.

This allows us to keep the site up to date with the core software, by updating the module, when the main repo changes. (and we want to pull the changes on the site)

To work normally with the repository, initially, after you fork/clone it, please do:
* git submodule init (in your main elkarte.net directory)
* git submodule update (to pull in the contents of elk directory, meaning the contents of the submodule)

Subsequently, to keep the submodule up to date, you only need to do:
* git submodule update


Site and IRC
===
Join us on IRC, on #elkarte channel on freenode.

Site: www.elkarte.net
