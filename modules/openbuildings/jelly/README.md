Jerry is a small ORM for Kohana 3.2+ that builds on top of Jelly - the project was originally started by [Jonathan Geiger](http://jonathan-geiger.com/) and co-developed by [Paul Banks](http://blog.banksdesigns.co.uk/).

Jerry adds some much needed features to Jelly project, 

* Lazy loading of collections
* Modifying Collections on the fly
* Extending Builder, Model and Meta classes with mixins
* Sane validation checks that don't always throw exceptions
* Mass assignment of related models with arrays (easy nested forms)
* Associations separate from Fields - more powerful and easier to extend
* Polymorphic Associations (MTI(Multiple Table Inheritance))
* A lot of tweaks to the api to make it more consistent and to remove redundancy
* Upload Files with temporary directory to survive validation fail (do not upload images twice in forms)
* Upload File Servers - Local, FTP and Rackspace
* Automatically store Uploaded images width / height to relevant fields
* Built In Popular behaviors - Paranoid, Sluggable, Nested, Sortable, Uploadable
* Updated files to the Kohana convention (inside kohana directory)

As the original Jelly had a lot of great but undocumented functionality This guide will try to write about both about the new features and the hidden gems of jelly, as a more comprehensive guide.

--------

Jerry
=====

* [Getting Started](/OpenBuildings/Jerry/blob/master/guide/jelly/getting-started.md)
* [Writing Models & Builders](/OpenBuildings/Jerry/blob/master/guide/jelly/models-and-builders.md)
* [Validations](/OpenBuildings/Jerry/blob/master/guide/jelly/validations.md)
* [Fields](/OpenBuildings/Jerry/blob/master/guide/jelly/fields.md)
* [Uploads](/OpenBuildings/Jerry/blob/master/guide/jelly/uploads.md)
* [Associations](/OpenBuildings/Jerry/blob/master/guide/jelly/associations.md)
* [Builder](/OpenBuildings/Jerry/blob/master/guide/jelly/builder.md)
* [Behaviors](/OpenBuildings/Jerry/blob/master/guide/jelly/behaviors.md)

--------

Jerry was developed by [OpenBuildings](http://openbuildings.com) Team as part of the [Clippings](http://clippings.com) Project, and is with the same license as the original Jelly - [ISC](http://www.opensource.org/licenses/isc-license.txt)

The guide itself is heavily influenced by [Rails Guides](http://guides.rubyonrails.org/) - they did amazing work of creating an accessible documentation and as I'm not much of a writer I've tried to follow their example as much as possible.