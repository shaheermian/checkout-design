What to do:

=== Update design ===

git clone git@github.com:AvenueTrading/checkout-design.git

cd checkout-design
composer.phar install
chmod -R 777 app/cache app/logs

http://localhost/checkout-design/web/app_dev.php

what you will see here is the old design, all images with text has to be replaced with the new design in the new-stuff/avenue.zip archive.

You can see the new website live here, http://hitsdesign.in/Noznore/order2.html.

Some images has not been completed in the new design, what you need to do is:

- replace the images with the text free version from the archive.
- add text so the design is equal to the old design, you need some css and html for this.

So practically, the 2 versions below has to be the same, just there can be no text on the images, has to be replaced.


http://localhost/checkout-design/web/app_dev.php
http://hitsdesign.in/Noznore/order2.html.


=== JAVASCRIPT VALIDATION ===

When you click "YES" for other shipping adress, javascript has to validate all fields with the attribute required="required".


=== COMING TODO ===

If you are up to it, there are some more, let me know if you are unsure what this is about

- remove scroll when pressing select a package
- preload package images
- make a good looking error box if there is form errors
