Getting Involved
================

Welcome to [PHP Developers India][pdvlin] CodeHouse Github repository.
[pdvlin]: http://www.facebook.com/groups/pdvlin

In order to collaborate, please, read the following guide.

Setup git
---------

[Git][git] is a free and open source distributed version control system designed to handle everything from small to very large projects with speed and efficiency.
[git]: http://git-scm.com

You can easily setup git in any operating system. Detailed instructions you can find here: [http://git-scm.com/downloads][setup]
[setup]: http://git-scm.com/downloads

Getting started instructions: [http://git-scm.com/book/en/Getting-Started-Git-Basics][start]
[start]: http://git-scm.com/book/en/Getting-Started-Git-Basics

An excellent interactive tutorial is available here: [Try Git][try]
[try]: http://try.github.com/levels/1/challenges/1

Create a Github account
------------------------

If you do not already have a Github account, create one for free. Just go to:

[https://github.com/][github]
[github]: https://github.com


Fork repository
---------------

Go to CodeHouse [https://github.com/phpdevelopersindia/CodeHouse][codehouse] and fork the repo
[codehouse]: https://github.com/phpdevelopersindia/CodeHouse

![fork_codehouse][fork]
[fork]: https://raw.github.com/pontikis/CodeHouse/master/DOCS/fork_codehouse.png


After you fork the repo, this will appear to your Github profile as a forked repo:

![fork_codehouse][forked]
[forked]: https://raw.github.com/pontikis/CodeHouse/master/DOCS/forked_codehouse.png

WARNING: the forked repository is your repository, not the original one. Any changes made to forked repository will not appear to source repository, until you make a Pull request and the repository owner accept it and merge your changes (see below).


Watch repository
---------------

If you want to receive email notifications for changes in this repository (recommended), press the watch button to Watch this repo:

Go to CodeHouse [https://github.com/phpdevelopersindia/CodeHouse][codehouse] and press the watch button:
[codehouse]: https://github.com/phpdevelopersindia/CodeHouse

![watch_codehouse][watch]
[watch]: https://raw.github.com/pontikis/CodeHouse/master/DOCS/watch_codehouse.png


Clone forked repository
-----------------------

In order to get repository contents to your hard disk, you have to clone repo (this process will be performed once):

    cd /path/to/your/projects
    git clone git@github.com:YOUR_USERNAME_HERE/CodeHouse.git


Giving the following command:

    git remote -v

you will get something like:

    origin	git@github.com:pontikis/CodeHouse.git (fetch)
    origin	git@github.com:pontikis/CodeHouse.git (push)

In order to be able to get source repository contents (not only the forked one), add a remote point to the original repository, as follows:

    git remote add upstream git@github.com:phpdevelopersindia/CodeHouse.git

(where upstream points to original repo)

Now, giving the following command:

    git remote -v

you will get something like:

    origin	git@github.com:pontikis/CodeHouse.git (fetch)
    origin	git@github.com:pontikis/CodeHouse.git (push)
    upstream	git@github.com:phpdevelopersindia/CodeHouse.git (fetch)
    upstream	git@github.com:phpdevelopersindia/CodeHouse.git (push)

Please, note that "origin" is the forked repository (YOUR_USERNAME/CodeHouse) and "upstream" is the original repo (phpdevelopersindia/CodeHouse)


Update original repository
--------------------------


    cd /path/to/your/projects/CodeHouse
    git fetch upstream
    git merge upstream/master


Share your code
----------------

After creating your changes to local repo, you have to add and commit them. Afterwards you have to push them to forked repository.

    cd /path/to/your/projects/CodeHouse
    git push origin master

These changes will not affect the original repository, until you submit a Pull request:


Pull request
-------------

Go to forked repository and press the Pull request button


Some restrictions
----------------

Please, do not make modifications in main [README.md][readme] file. Only group admin will make changes to this file.
[readme]: https://github.com/phpdevelopersindia/CodeHouse/blob/master/README.md


**Enjoy social coding!**