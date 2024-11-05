tohorweb - leftypol and promasta based website software
===============================================================================

About
-----
This is my attempt to build a website for the Town's Ocean Rescue crew. I've
implemented some elements of my main project, the imageboard  
[leftypol](https://git.leftypol.org), and a sample website I found on 
[github](https://github.com/elsaburren/website) I inted to implement more 
features from the imageboard once I get it up and running. As of 11/5, my most
pressing concern is continuing to develop the mod.php file, to create an Admin
page for the lifeguards, so that we can develop resources for our guards to
use. Some resources include a database of all avaliable guards and their
characteristics, offdays, and special requests, a report.php script for 
complaints and jobs to be submitted from both lifeguards and patrons,
a [matrix](https://github.com/matrix-org/matrix-rust-sdk) client that 
could send out tide reports and updates to the lifeguards, and which could
also lifeguards could text to update what guards chairs have, rescues that
were made, how the AED is, and other things that could be helpful. It could
also house a python or js (although I hate js) file that could create 
.xls files for lifeguard schedules. In addition, it can be used as an image
hoster for our lifeguards, so that we can easily accsess images and videos 
and such. For the public, we can also employ notices and tips to notify of
coverage and days of extension. 

Requirements
------------
1. PHP >= 5.4 
2. MySQL/MariaDB (preferred) server >= 5.5.3
3. Webhosting Software (nginx (preferred), apache, Django, etc.)
4. [mbstring](http://www.php.net/manual/en/mbstring.installation.php)
5. [PHP GD](http://www.php.net/manual/en/intro.image.php)
6. [PHP PDO](http://www.php.net/manual/en/intro.pdo.php)

While it may be possible to host this website on windows, I found success
hosting it on my Arch Linux machine, although any distro I imagine will work.

Installation
------------
This section details how I personally installed and operated the website,
and will be changed in the future.
1. Download and extract tohweb



Static Examples
---------------
The following are resources and websites to take note from and observe.
## Pics I Might Use.
[Cool Pic for] (https://s3-media1.fl.yelpcdn.com/bphoto/bL_CuiZX9l8orGhoGZ5TGA/348s.jpg)

[Pic of Lifeguards Meeting with Don Clavin] (- https://hempsteadny.gov/ImageRepository/Document?documentID=4272)

[Pic of My Rookies class :D]([https://media.licdn.com/dms/image/D4E22AQH5bFj_-3k1BA/feedshare-shrink_800/0/1692294517205?e=2147483647&v=beta&t=ZY5E_CAkbgfD-V3QRu-vO7zKHMdz7dyKGrYOwUw7slI)

[Town of Hempstead Lifeguard Interviews](https://hempsteadny.gov/279/Lifeguard-Interviews)

[Inspiration Website](https://www.rehobothbeachpatrol.com/)

[Jones Beach Website](https://jblc.net/index.php)

[Junior Lifeguarding Website](https://hempsteadny.gov/891/Junior-Ocean-Lifeguarding)

[Gone With the Blastwave, for Inspiration](https://www.blastwave-comic.com)

[jwz's website (possibly the best website ever)](https://www.jwz.org/)

5a326877587a513555546c55533074356556526a52576c5a565768515955354d646e6c76566a6c6e636a4a524e7a52495744687854513d3d


